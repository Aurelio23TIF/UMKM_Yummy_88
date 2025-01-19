@extends('layouts.appuser')

@section('contents')
<div class="container">
    <h1>Edit Komentar</h1>
    <form action="{{ route('komentar.update', $komentar) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            @for($i = 1; $i <= 5; $i++)
                <div class="form-check form-check-inline">
                    <input type="radio" name="rating" value="{{ $i }}" id="rating-{{ $i }}" class="form-check-input" {{ $komentar->rating == $i ? 'checked' : '' }}>
                    <label for="rating-{{ $i }}" class="form-check-label">{{ $i }}</label>
                </div>
            @endfor
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $komentar->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
