<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\History;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        return view('checkout.index', compact('cartItems', 'totalPrice'));
    }

    public function processCheckout()
    {
        $user = auth()->user();

        $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });
        foreach ($cartItems as $cartItem) {
            $cartItemData = $cartItem;
        }

        History::create([
            'user_id' => $cartItemData->user_id,
            'product_id' => $cartItemData->product_id,
            'quantity' => $cartItemData->quantity,
            'total_price' => $totalPrice,
            'status' => 'paid',
        ]);
        
        CartItem::where('user_id', $user->id)->delete();

        return view('checkout.success');
    }
}
