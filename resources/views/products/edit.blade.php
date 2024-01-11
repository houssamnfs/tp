
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Product</h1>
        <form action="{{ route('products.update', $product['id']) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('products._form', ['product' => $product])
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection