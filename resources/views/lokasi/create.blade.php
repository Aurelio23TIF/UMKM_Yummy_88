@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Tambah Lokasi</h1>

    <form action="{{ route('lokasi.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" class="form-control" name="nomor_telepon" id="nomor_telepon" required>
        </div>

        <div class="form-group mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
        </div>

        <div class="form-group mb-3">
            <label for="hari_operasional">Hari Operasional</label>
            <input type="text" class="form-control" name="hari_operasional" id="hari_operasional" required>
        </div>

        <div class="form-group mb-3">
            <label for="jam_operasional">Jam Operasional</label>
            <input type="text" class="form-control" name="jam_operasional" id="jam_operasional" required>
        </div>

        <div class="form-group mb-3">
            <label for="link_maps">Koordinat (Latitude,Longitude)</label>
            <input type="text" class="form-control" name="link_maps" id="link_maps" placeholder="Contoh: 0.5174313674483376,101.41771486858319" required>
        </div>

        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Simpan Lokasi</button>
        </div>
    </form>
</div>
@endsection
