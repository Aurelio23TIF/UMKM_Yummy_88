@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Tambah Pesanan</h1>
    <a href="{{ route('catatpesanan.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('catatpesanan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nomor_meja" class="form-label">Nomor Meja</label>
            <input type="text" name="nomor_meja" id="nomor_meja" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="makanan" class="form-label">Makanan</label>
            <input type="text" name="makanan" id="makanan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
