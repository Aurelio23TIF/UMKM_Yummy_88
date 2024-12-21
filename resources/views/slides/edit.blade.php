@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Edit Slide Yummy88</h1>

    <a href="{{ route('slides.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('slides.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $slide->title }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($slide->image_path)
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $slide->image_path) }}" alt="Gambar Slide" width="200">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
