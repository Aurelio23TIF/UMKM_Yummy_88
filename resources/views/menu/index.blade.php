@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Menu</h1>
    <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3">Tambah Menu</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Makanan</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->nama_makanan }}</td>
                <td>{{ $menu->harga_makanan }}</td>
                <td>
                    @if($menu->gambar)
                    <img src="{{ asset('storage/' . $menu->gambar) }}" width="100" alt="Gambar">
                    @else
                    Tidak ada gambar
                    @endif
                </td>
                <td>
                    <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
