@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h1>Daftar Berita</h1>
        <a href="{{ route('news.create') }}" class="btn btn-danger btn-lg mt-3">Tambah Berita</a>
    </div>
    <div class="row">
        @foreach ($news as $item)
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card shadow-sm w-100">
                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text text-muted"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
                    <p class="card-text"><strong>Deskripsi:</strong> {{ Str::limit($item->deskripsi)}}</p>
                    <div class="mt-auto">
                        <a href="{{ route('news.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('news.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
