@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Add New Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
