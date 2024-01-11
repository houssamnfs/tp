
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Product Details</h1>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Libelle:</strong> {{ $product['libelle'] }}</p>
                <p class="card-text"><strong>Marque:</strong> {{ $product['marque'] }}</p>
                <p class="card-text"><strong>Prix:</strong> {{ $product['prix'] }}</p>
                <p class="card-text"><strong>Stock:</strong> {{ $product['stock'] }}</p>

                @if(isset($product['image']))
                    <div class="text-center mb-3">
                        <img src="{{ asset('product_images/' . $product['image']) }}" alt="{{ $product['libelle'] }}" class="img-fluid" style="max-width: 200px;">
                    </div>
                @else
                    <p class="card-text">No Image</p>
                @endif

                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
