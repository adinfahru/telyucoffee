<!-- resources/views/cart/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-2xl font-bold mb-4">Shopping Cart</h2>
        @if ($cartItems->isEmpty())
            <p>Your cart is empty.</p>
        @else
            <ul>
                @foreach ($cartItems as $cartItem)
                    <li class="mb-4">
                        <div class="flex items-center">
                            <div class="mr-4">
                                <img src="{{ asset($cartItem->product->image_url) }}" class="w-16 h-16 object-cover" alt="{{ $cartItem->product->name }}">
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">{{ $cartItem->product->name }}</h3>
                                <p>Price: Rp. {{ $cartItem->product->price }}</p>
                                <form action="{{ route('cart.remove', ['id' => $cartItem->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="text-red-500">Remove</button>
                                </form>
                            </div>
                            <div class="ml-auto">
                                <form action="{{ route('cart.update', ['id' => $cartItem->id]) }}" method="post">
                                    @csrf
                                    <label for="quantity" class="sr-only">Quantity</label>
                                    <input type="number" name="quantity" id="quantity" class="w-16 border rounded-md p-1" value="{{ $cartItem->quantity }}" min="1">
                                    <button type="submit" class="ml-2 bg-blue-500 text-white px-4 py-1 rounded-md">Update</button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="mt-4">
                <p class="text-xl font-bold">Total: Rp. {{ $totalPrice }}</p>
            </div>
            <div class="mt-4">
                <a href="{{ route('checkout.index') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-green-700">
                    Proceed to Checkout
                </a>
            </div>
        @endif
    </div>
@endsection
