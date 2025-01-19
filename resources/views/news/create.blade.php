@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Tambah Berita</h1>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data" class="p-4 rounded shadow-sm" style="background: transparent;">
            @csrf
            <div class="form-group">
                <label for="judul" class="font-weight-bold">Judul:</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul berita" required>
            </div>

            <div class="form-group">
                <label for="gambar" class="font-weight-bold">Gambar:</label>
                <input type="file" name="gambar" id="gambar" class="form-control-file" required>
            </div>

            <div class="form-group">
                <label for="tanggal" class="font-weight-bold">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="deskripsi" class="font-weight-bold">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" placeholder="Masukkan deskripsi berita" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
            </div>
        </form>
    </div>
@endsection
