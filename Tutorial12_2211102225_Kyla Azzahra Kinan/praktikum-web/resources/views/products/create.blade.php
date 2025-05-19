@extends('layouts.app')
@section('title', 'Tambah Produk')

@section('content')
<h1>Tambah Produk</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/products/store" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Variant 1</label>
        <input type="text" name="variants[0][variant_name]" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Variant 2</label>
        <input type="text" name="variants[1][variant_name]" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/products" class="btn btn-secondary">Kembali</a>
</form>
@endsection
