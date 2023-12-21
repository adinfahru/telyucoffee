<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-2xl font-bold mb-4">Our Menu</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @once
            <script>
                setTimeout(function () {
                    document.querySelector('.alert').style.display = 'none';
                }, 3000);
            </script>
        @endonce
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($products as $product)
                <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
                    <img src="{{ asset('storage/' . $product->image_url) }}" class="w-full h-32 object-cover mb-4" alt="{{ $product->name }}">
                    <h5 class="text-xl font-semibold mb-2">{{ $product->name }}</h5>
                    <p class="text-gray-700 mb-2">{{ $product->description }}</p>
                    <p class="text-gray-800 font-bold">Rp. {{ $product->price }}</p>
                    <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="post">
                        @csrf
                        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-full">Add to Cart</button>
                    </form>
                </div>
            @endforeach
        </div>
        <a href="{{ route('cart.index') }}" id="cart-toggle" class="fixed bottom-4 right-4 bg-blue-500 text-white px-4 py-2 rounded-full">View Cart</a>
    </div>
@endsection
