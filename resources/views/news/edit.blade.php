@extends('layouts.app')

@section('content')
    <h1>Edit Berita</h1>
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Judul:</label>
        <input type="text" name="judul" value="{{ $news->judul }}">
        <label>Gambar:</label>
        <input type="file" name="gambar">
        <img src="{{ asset('storage/' . $news->gambar) }}" width="100">
        <label>Tanggal:</label>
        <input type="text" name="tanggal" value="{{ $news->tanggal }}">
        <label>Deskripsi:</label>
        <textarea name="deskripsi">{{ $news->deskripsi }}</textarea>
        <button type="submit">Simpan</button>
    </form>
@endsection
