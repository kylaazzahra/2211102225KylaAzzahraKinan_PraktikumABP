@extends('layouts.app')
@section('title', 'Produk & Variannya')

@section('content')
<div class="container mt-4">
    <h1>Produk & Variannya</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="/products/create" class="btn btn-primary mb-3">Tambah Produk</a>

    @foreach ($products as $product)
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>{{ $product->nama }}</strong>

                <form action="/products/{{ $product->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($product->variants as $variant)
                    <li class="list-group-item">{{ $variant->variant_name }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
@endsection
