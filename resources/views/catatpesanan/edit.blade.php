@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Pesanan</h1>
    <a href="{{ route('catatpesanan.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('catatpesanan.update', $catatpesanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $catatpesanan->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="nomor_meja" class="form-label">Nomor Meja</label>
            <input type="text" name="nomor_meja" id="nomor_meja" class="form-control" value="{{ $catatpesanan->nomor_meja }}" required>
        </div>
        <div class="mb-3">
            <label for="makanan" class="form-label">Makanan</label>
            <input type="text" name="makanan" id="makanan" class="form-control" value="{{ $catatpesanan->makanan }}" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ $catatpesanan->harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
