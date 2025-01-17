@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Daftar Lokasi</h1>

    <div class="text-center mb-4">
        <a href="{{ route('lokasi.create') }}" class="btn btn-primary">Tambah Lokasi</a>
    </div>

    <div class="row">
        @forelse ($lokasi as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center d-flex flex-column">
                        <!-- Peta Leaflet -->
                        <div id="map{{ $item->id }}" style="height: 200px;"></div>

                        <!-- Informasi Lokasi -->
                        <h5 class="card-title mb-3">Lokasi #{{ $loop->iteration }}</h5>
                        <p class="mb-1"><strong>Nomor Telepon:</strong> {{ $item->nomor_telepon }}</p>
                        <p class="mb-1"><strong>Alamat:</strong> {{ $item->alamat }}</p>
                        <p class="mb-1"><strong>Hari Operasional:</strong> {{ $item->hari_operasional }}</p>
                        <p class="mb-1"><strong>Jam Operasional:</strong> {{ $item->jam_operasional }}</p>

                        <!-- Tombol Edit dan Hapus -->
                        <div class="mt-auto d-flex justify-content-center gap-2">
                            <a href="{{ route('lokasi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('lokasi.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus lokasi ini?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Ambil koordinat dari database
                var coordinates = '{{ $item->link_maps }}'.split(',');

                var map{{ $item->id }} = L.map('map{{ $item->id }}').setView([parseFloat(coordinates[0]), parseFloat(coordinates[1])], 13);

                // Tambahkan tile layer
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map{{ $item->id }});

                // Tambahkan marker pada koordinat
                L.marker([parseFloat(coordinates[0]), parseFloat(coordinates[1])]).addTo(map{{ $item->id }})
                    .bindPopup('Lokasi #{{ $loop->iteration }}')
                    .openPopup();
            </script>
        @empty
            <div class="col-12 text-center">
                <p>Tidak ada data</p>
            </div>
        @endforelse
    </div>
</div>
@endsection

@push('scripts')
    <!-- Sertakan CDN untuk Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
@endpush
