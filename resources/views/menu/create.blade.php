<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Menu</h1>
        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label>Nama Menu</label>
                <input type="text" name="nama" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label>Jenis Menu</label>
                <textarea name="jenis" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label>Harga</label>
                <input type="number" name="harga" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label>Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
