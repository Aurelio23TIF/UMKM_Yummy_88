@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Edit Informasi Kontak</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $contact->telepon }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" rows="4" required>{{ $contact->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label for="embedded_map" class="form-label">Embedded Map (Google Maps Embed Link)</label>
            <textarea name="embedded_map" id="embedded_map" class="form-control" rows="3" placeholder="Masukkan link Google Maps embed" required>{{ $contact->embedded_map }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Edit</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
