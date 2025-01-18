@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Menu</h1>
        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="nama">Nama Menu</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('nama')
                <div class = "bg-red-500 text-white p-3 mb-4">Nama menu tidak boleh lebih dari 255 karakter</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="jenis">Jenis Menu</label>
                <textarea id="jenis" name="jenis" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ old('jenis') }}</textarea>
                @error('jenis')
                <div class = "bg-red-500 text-white p-3 mb-4">Keterangan jenis tidak boleh lebih dari 255 karakter</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="harga">Harga</label>
                <input type="number" id="harga" name="harga" value="{{ old('harga') }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('harga')
                <div class = "bg-red-500 text-white p-3 mb-4">Harga hanya boleh berupa angka</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="gambar">Gambar</label>
                <input type="file" id="gambar" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @error('gambar')
                <div class = "bg-red-500 text-white p-3 mb-4">Hanya dapat berupa JPG, JPEG, PNG; serta tidak lebih dari 2MB</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('menu.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
