
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Product List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create Product</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Libelle</th>
                    <th>Marque</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>
                            @if(isset($product['image']))
                                <img src="{{ asset('product_images/' . $product['image']) }}" alt="{{ $product['libelle'] }}" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $product['libelle'] }}</td>
                        <td>{{ $product['marque'] }}</td>
                        <td>{{ $product['prix'] }}</td>
                        <td>{{ $product['stock'] }}</td>
                        <td>
                            <a href="{{ route('products.show', $product['id']) }}" class="btn btn-info btn-sm">Details</a>
                            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product['id']) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
