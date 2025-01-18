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
        <p class="text-success">Data kontak sudah ada. Anda hanya dapat mengedit data yang ada.</p>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Embedded Map</th>
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
                        @if (!empty($contact->embedded_map))
                            <!-- Link untuk membuka modal -->
                            <a href="#"
                               class="text-primary underline"
                               onclick="showMapModal('{{ $contact->embedded_map }}')">
                                Lihat Peta
                            </a>
                        @else
                            <p class="text-danger">Peta tidak tersedia</p>
                        @endif
                    </td>
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

<!-- Modal untuk Embedded Map -->
<div id="mapModal" class="fixed inset-0 bg-gray-900 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2">
        <div class="flex justify-between items-center p-4 border-b">
            <h2 class="text-xl font-bold">Peta Lokasi</h2>
            <button class="text-red-500 text-xl font-bold" onclick="closeMapModal()">&times;</button>
        </div>
        <div class="p-4">
            <iframe id="mapIframe" src="" frameborder="0" class="w-full h-96" allowfullscreen></iframe>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk membuka modal dengan embed map
    function showMapModal(embedUrl) {
        const mapModal = document.getElementById('mapModal');
        const mapIframe = document.getElementById('mapIframe');

        // Mengatur URL iframe
        mapIframe.src = embedUrl;

        // Menampilkan modal
        mapModal.classList.remove('hidden');
    }

    // Fungsi untuk menutup modal
    function closeMapModal() {
        const mapModal = document.getElementById('mapModal');
        const mapIframe = document.getElementById('mapIframe');

        // Menyembunyikan modal dan menghapus URL iframe
        mapModal.classList.add('hidden');
        mapIframe.src = '';
    }
</script>
@endsection
