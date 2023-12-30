<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @once
    <script>
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 3000);
    </script>
    @endonce
    <div class="px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-5">
        @foreach($products as $product)
        <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
            <img src="{{ asset($product->image_url) }}" class="w-full h-32 object-cover mb-4" alt="{{ $product->name }}">
            <h5 class="text-xl font-semibold mb-2">{{ $product->name }}</h5>
            <p class="text-gray-700 mb-2">{{ $product->description }}</p>
            <p class="text-gray-800 font-bold">Rp. {{ $product->price }}</p>

            @unless (auth()->check() && auth()->user()->email == 'admin@gmail.com')
            <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="post">
                @csrf
                <button type="submit" class="mt-4 hover:bg-blue-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Pesan</button>
            </form>
            @endunless

            @if (auth()->check() && auth()->user()->email == 'admin@gmail.com')
            <form action="{{ route('menu.destroy', ['id' => $product->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="flex w-full justify-center rounded-md bg-amber-700 mt-4 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-amber-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete menu</button>
            </form>
            @endif
        </div>
        @endforeach
    </div>

    <a href="{{ route('cart.index') }}" id="cart-toggle" class="fixed bottom-4 right-4 hover:bg-blue-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">View Cart</a>
</div>
@endsection