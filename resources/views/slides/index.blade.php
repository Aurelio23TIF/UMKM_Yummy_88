@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Daftar Slide Yummy88</h1>

    <div class="text-center mb-4">
        <a href="{{ route('slides.create') }}" class="btn" style="background-color: red; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-weight: bold;">
            Tambah Slide
        </a>
    </div>

    <div class="row">
        @forelse ($slides as $slide)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="mb-3" style="width: 100%; height: 150px; display: flex; justify-content: center; align-items: center; background-color: #f8f9fa; border-radius: 5px; overflow: hidden;">
                            @if ($slide->image_path)
                        <img src="{{ asset('storage/' . $slide->image_path) }}" alt="Gambar Slide" style="width: auto; height: 100%; object-fit: cover;">
                            @else
                        <span class="text-muted">Tidak Ada Gambar</span>
                            @endif
                        </div>
                        <h5 class="card-title mb-3">{{$slide->title}}</h5>
                        <div class="mt-auto d-flex justify-content-center gap-2">
                            <a href="{{ route('slides.edit', $slide->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('slides.destroy', $slide->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus slide ini?')">Delete</button>
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
