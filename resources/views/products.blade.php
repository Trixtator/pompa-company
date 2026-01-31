@extends('layouts.app')

@section('title', 'Produk Kami')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Katalog Produk Pompa</h2>
    
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 200px;">
                    [Gambar Pompa]
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">{{ $product['desc'] }}</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary w-100">Minta Penawaran</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection