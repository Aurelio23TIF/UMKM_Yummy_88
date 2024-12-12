@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Catat Pesanan Yummy88</h1>
    <a href="{{ route('catatpesanan.create') }}" class="btn btn-warning mb-3">Tambah Pesanan</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-bordered table-striped text-center">
        <thead style="background-color: red; color: white;">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor Meja</th>
                <th>Makanan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($catatpesanan as $pesanan)
            <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->nama }}</td>
                <td>{{ $pesanan->nomor_meja }}</td>
                <td>{{ $pesanan->makanan }}</td>
                <td>Rp{{ number_format($pesanan->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('catatpesanan.edit', $pesanan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('catatpesanan.destroy', $pesanan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">Tidak ada data.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
