@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Tambah Slide Yummy88</h1>

    <a href="{{ route('slides.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('slides.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan Judul Slide" required>
        </div>
        <div class="form-group mb-3">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
