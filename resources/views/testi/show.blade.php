<x-app-layout></x-app-layout>
<div class="container">
    <h1>Detail Testimoni</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $testi->nama_customer }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Pesan:</strong> {{ $testi->pesan }}</p>

            @if ($testi->gambar)
                <p><strong>Gambar:</strong></p>
                <img src="{{ asset('images/testimoni/' . $testi->gambar) }}" alt="Gambar Testi" class="img-thumbnail" width="300">
            @else
                <p><em>Gambar tidak tersedia.</em></p>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('testi.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
</x-app-layout>
