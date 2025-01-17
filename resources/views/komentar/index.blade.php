@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Komentar</h1>
    <a href="{{ route('komentar.create') }}" class="btn btn-primary mb-3">Tambah Komentar</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Rating</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($komentars as $index => $komentar)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $komentar->user->name }}</td>
                <td>{{ $komentar->rating }}</td>
                <td>{{ $komentar->deskripsi }}</td>
                <td>
                    <a href="{{ route('komentar.edit', $komentar) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
