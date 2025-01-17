@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Lokasi</h1>
    <a href="{{ route('lokasi.create') }}" class="btn btn-primary">Tambah Lokasi</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Hari Operasional</th>
                <th>Jam Operasional</th>
                <th>Link Maps</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lokasi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nomor_telepon }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->hari_operasional }}</td>
                <td>{{ $item->jam_operasional }}</td>
                <td><a href="{{ $item->link_maps }}" target="_blank">Lihat Maps</a></td>
                <td>
                    <a href="{{ route('lokasi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('lokasi.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
