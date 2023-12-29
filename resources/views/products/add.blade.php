@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Product</h2>

        <form method="post" action="{{ route('menu.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image_url">Product Image</label>
                <input type="file" name="images" class="form-control" accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
@endsection
