@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Menu</h1>
    <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_makanan" class="form-label">Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" value="{{ $menu->nama_makanan }}" required>
        </div>
        <div class="mb-3">
            <label for="harga_makanan" class="form-label">Harga Makanan</label>
            <input type="text" name="harga_makanan" class="form-control" value="{{ $menu->harga_makanan }}" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" class="form-control">
            @if($menu->gambar)
            <img src="{{ asset('storage/' . $menu->gambar) }}" width="100" alt="Gambar">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
