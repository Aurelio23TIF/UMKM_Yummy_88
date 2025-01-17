@extends('layouts.app')

@section('content')
    <h1>Tambah Berita</h1>
    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul:</label>
        <input type="text" name="judul">
        <label>Gambar:</label>
        <input type="file" name="gambar">
        <label>Tanggal:</label>
        <input type="text" name="tanggal">
        <label>Deskripsi:</label>
        <textarea name="deskripsi"></textarea>
        <button type="submit">Simpan</button>
    </form>
@endsection
