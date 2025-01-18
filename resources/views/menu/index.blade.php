@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Daftar Menu Yummy 88</h1>

    <div class="text-center mb-4">
        <a href="{{ route('menu.create') }}" class="btn btn-primary" style="background-color: red; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: bold;">
            Tambah Menu
        </a>
    </div>

    <div class="row">
        @forelse ($menus as $menu)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center d-flex flex-column">
                        <!-- Gambar Makanan -->
                        <div class="mb-3" style="width: 100%; height: 150px; display: flex; justify-content: center; align-items: center; background-color: #f8f9fa; border-radius: 5px; overflow: hidden;">
                            @if ($menu->gambar)
                                <img src="{{ asset('storage/' . $menu->gambar) }}" alt="Gambar Menu" style="width: auto; height: 100%; object-fit: cover;">
                            @else
                                <span class="text-muted">Tidak Ada Gambar</span>
                            @endif
                        </div>

                        <!-- Informasi Menu -->
                        <h5 class="card-title mb-3">{{ $menu->nama_makanan }}</h5>
                        <p class="mb-1"><strong>Harga:</strong> {{ $menu->harga_makanan }}</p>

                        <!-- Tombol Edit dan Hapus -->
                        <div class="mt-auto d-flex justify-content-center gap-2">
                            <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>Tidak ada data</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
