@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Daftar Slide Yummy88</h1>

    <a href="{{ route('slides.create') }}" class="btn btn-primary mb-3">Tambah Slide</a>

    <table class="table table-bordered">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($slides as $slide)
                <tr class="text-center">
                    <td>{{ $slide->id }}</td>
                    <td>{{ $slide->title }}</td>
                    <td>
                        @if ($slide->image_path)
                            <img src="{{ asset('storage/' . $slide->image_path) }}" alt="Gambar Slide" width="100">
                        @else
                            <p>Tidak Ada Gambar</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('slides.edit', $slide->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('slides.destroy', $slide->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus slide ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
