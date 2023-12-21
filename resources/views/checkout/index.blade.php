<!-- resources/views/checkout/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold mb-6">Checkout</h2>

        <div class="flex flex-col md:flex-row justify-between">
            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                <h3 class="text-xl font-semibold mb-4">Order Summary</h3>
                <ul>
                    @foreach ($cartItems as $cartItem)
                        <li class="mb-2">
                            {{ $cartItem->product->name }} - Quantity: {{ $cartItem->quantity }} - Rp. {{ $cartItem->product->price }}
                        </li>
                    @endforeach
                </ul>
                <p class="mt-4 text-xl font-bold">Total: Rp. {{ $totalPrice }}</p>
            </div>

            <div class="w-full md:w-1/2">
                <form action="{{ route('checkout.process') }}" method="post" class="bg-gray-100 p-6 rounded-md">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->name }}" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->email }}" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Shipping Address</label>
                        <textarea name="address" id="address" class="mt-1 p-2 w-full border rounded-md" required></textarea>
                    </div>

                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-green-700">
                        Complete Purchase
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
