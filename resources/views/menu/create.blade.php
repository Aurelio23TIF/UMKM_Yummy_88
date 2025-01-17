@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Menu</h1>
    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_makanan" class="form-label">Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="harga_makanan" class="form-label">Harga Makanan</label>
            <input type="number" name="harga_makanan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
