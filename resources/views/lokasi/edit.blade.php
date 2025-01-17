@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Edit Lokasi</h1>

    <form action="{{ route('lokasi.update', $lokasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon', $lokasi->nomor_telepon) }}">
            @error('nomor_telepon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $lokasi->alamat) }}">
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="hari_operasional">Hari Operasional</label>
            <input type="text" class="form-control @error('hari_operasional') is-invalid @enderror" id="hari_operasional" name="hari_operasional" value="{{ old('hari_operasional', $lokasi->hari_operasional) }}">
            @error('hari_operasional')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="jam_operasional">Jam Operasional</label>
            <input type="text" class="form-control @error('jam_operasional') is-invalid @enderror" id="jam_operasional" name="jam_operasional" value="{{ old('jam_operasional', $lokasi->jam_operasional) }}">
            @error('jam_operasional')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="link_maps">Koordinat (Latitude,Longitude)</label>
            <input type="text" class="form-control @error('link_maps') is-invalid @enderror" id="link_maps" name="link_maps" value="{{ old('link_maps', $lokasi->link_maps) }}">
            @error('link_maps')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Leaflet map -->
        <div id="map" style="height: 400px;"></div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('lokasi.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Set initial map view based on the location's coordinates
    var coordinates = "{{ old('link_maps', $lokasi->link_maps) }}";
    var latLng = coordinates ? coordinates.split(',') : [0.5174313674483376, 101.41771486858319]; // Default coordinates
    var map = L.map('map').setView(latLng, 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker(latLng).addTo(map); // Set initial marker

    // Handle map click event to update coordinates
    map.on('click', function (e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        marker.setLatLng([lat, lng]); // Move the marker
        document.getElementById('link_maps').value = lat + ',' + lng; // Update the hidden input
    });
</script>
@endsection
