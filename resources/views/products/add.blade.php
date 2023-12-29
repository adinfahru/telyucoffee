@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" method="post" action="{{ route('menu.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Menu</label>
                <input type="text" name="name" class="form-control bg-white block w-full rounded-md border-0 py-1.5 pl-1 text-gray-900 shadow-sm sm:text-sm sm:leading-6" required>
            </div>

            <div class="form-group">
                <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Deskripsi</label>
                <textarea name="description" class="form-control bg-white block w-full rounded-md border-0 py-1.5 pl-1 text-gray-900 shadow-sm sm:text-sm sm:leading-6" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                <input type="number" name="price" class="form-control bg-white block w-full rounded-md border-0 py-1.5 pl-1 text-gray-900 shadow-sm sm:text-sm sm:leading-6" required>
            </div>

            <div class="form-group">
                <label for="image_url" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                <input type="file" name="images" class="form-control bg-white block w-full rounded-md border-0 py-1.5 pl-1 text-gray-900 shadow-sm sm:text-sm sm:leading-6" accept="image/*">
            </div>
            
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 mt-4 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Menu</button>
        </form>
    </div>
@endsection
