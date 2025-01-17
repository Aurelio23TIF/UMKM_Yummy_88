@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Lokasi</h1>
    <form action="{{ route('lokasi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="hari_operasional" class="form-label">Hari Operasional</label>
            <input type="text" name="hari_operasional" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jam_operasional" class="form-label">Jam Operasional</label>
            <input type="text" name="jam_operasional" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="link_maps" class="form-label">Link Maps</label>
            <input type="url" name="link_maps" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
