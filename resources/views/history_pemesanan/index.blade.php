@extends('layouts.app')

@section('content')
<h1>Daftar History Pemesanan</h1>
<a href="{{ route('history_pemesanan.create') }}">Tambah Pemesanan</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Nama Menu</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($historyPemesanan as $history)
        <tr>
            <td>{{ $history->id }}</td>
            <td>{{ $history->nama_pelanggan }}</td>
            <td>{{ $history->nama_menu }}</td>
            <td>{{ $history->jumlah }}</td>
            <td>{{ $history->total_harga }}</td>
            <td>
                <a href="{{ route('history_pemesanan.edit', $history->id) }}">Edit</a>
                <form action="{{ route('history_pemesanan.destroy', $history->id) }}" method="POST" style="display:inline;">
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
