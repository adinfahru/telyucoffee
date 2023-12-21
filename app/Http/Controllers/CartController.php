<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;



class CartController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();
        
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        return view('cart.index', compact('cartItems', 'totalPrice'));
    }

    public function addToCart($productId)
    {
        $user = auth()->user();

        $existingCartItem = CartItem::where('user_id', $user->id)
                            ->where('product_id', $productId)
                            ->first();

        if ($existingCartItem) {
            $existingCartItem->increment('quantity');
        } else {
            CartItem::create([
                'user_id' => $user->id,
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('menu.index')->with('success', 'Product added to cart successfully!');
    }

    public function removeFromCart($cartItemId)
    {
        $cartItem = CartItem::findOrFail($cartItemId);
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully!');

    }

    public function updateCartItem(Request $request, $cartItemId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = CartItem::findOrFail($cartItemId);
        $cartItem->update([
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('cart.index')->with('success', 'Cart item updated successfully!');
    }
}
