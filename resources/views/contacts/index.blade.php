@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Informasi Kontak</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if ($canAddContact)
        <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Tambah Informasi Kontak</a>
    @else
        <p class="text-success">Data kontak sudah ada. Anda dapat mengedit data yang ada.</p>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->telepon }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->alamat }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data kontak.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
