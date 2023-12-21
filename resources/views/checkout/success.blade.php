<!-- resources/views/checkout/success.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 p-8 bg-white rounded-lg shadow-lg text-center">
        <h2 class="text-3xl font-bold mb-6">Payment Successful</h2>

        <p class="text-lg mb-4">Thank you for your purchase! Your payment was successful.</p>

        <div class="mt-8">
            <a href="{{ route('menu.index') }}" class="text-blue-500 hover:underline">Back to Menu</a>
        </div>
    </div>
@endsection
