
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Create Product</h1>
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('products._form')
            <button type="submit" class="btn btn-success">Create</button>
        </form>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
