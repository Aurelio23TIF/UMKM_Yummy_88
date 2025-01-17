@extends('layouts.app')

@section('content')
    <h1>Daftar Berita</h1>
    <a href="{{ route('news.create') }}">Tambah Berita</a>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td><img src="{{ asset('storage/' . $item->gambar) }}" width="100"></td>
                    <td>{{ $item->tanggal }}</td>
                    <td>
                        <a href="{{ route('news.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
