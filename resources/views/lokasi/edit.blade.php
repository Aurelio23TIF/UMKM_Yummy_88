@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Lokasi</h1>
    <form action="{{ route('lokasi.update', $lokasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" class="form-control" value="{{ $lokasi->nomor_telepon }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $lokasi->alamat }}" required>
        </div>
        <div class="mb-3">
            <label for="hari_operasional" class="form-label">Hari Operasional</label>
            <input type="text" name="hari_operasional" class="form-control" value="{{ $lokasi->hari_operasional }}" required>
        </div>
        <div class="mb-3">
            <label for="jam_operasional" class="form-label">Jam Operasional</label>
            <input type="text" name="jam_operasional" class="form-control" value="{{ $lokasi->jam_operasional }}" required>
        </div>
        <div class="mb-3">
            <label for="link_maps" class="form-label">Link Maps</label>
            <input type="url" name="link_maps" class="form-control" value="{{ $lokasi->link_maps }}" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
