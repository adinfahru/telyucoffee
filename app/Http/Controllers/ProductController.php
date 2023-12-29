<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function add()
    {
        if (auth()->check() && auth()->user()->email == 'admin@gmail.com'){
            return view('products.add');
        } else {
            return view('products.index');
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('product_images', 'public');
            $validatedData['image_url'] = 'storage/' . $imagePath;
        }

        Product::create($validatedData);

        return redirect()->route('menu.index')->with('success', 'Product added successfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image_url) {
            Storage::disk('public')->delete(str_replace('storage/', '', $product->image_url));
        }

        $product->delete();

        return redirect()->route('menu.index')->with('success', 'Product deleted!');
    }
}
