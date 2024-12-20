<x-app-layout></x-app-layout>
<div class="container">
    <h1>Detail Berita</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $news->judul_berita }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Isi Berita:</strong> {{ $news->isi_berita }}</p>

            @if ($news->gambar)
                <p><strong>Gambar:</strong></p>
                <img src="{{ asset('images/news/' . $news->gambar) }}" alt="Gambar News" class="img-thumbnail" width="300">
            @else
                <p><em>Gambar tidak tersedia.</em></p>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('news.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
</x-app-layout>
