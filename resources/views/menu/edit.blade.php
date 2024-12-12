<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Menu</h1>
        <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label>Nama Menu</label>
                <input type="text" name="nama" value="{{ $menu->nama }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label>Jenis Menu</label>
                <textarea name="jenis" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $menu->jenis }}</textarea>
            </div>

            <div class="mb-4">
                <label>Harga</label>
                <input type="number" name="harga" value="{{ $menu->harga }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label>Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @if ($menu->gambar)
                    <img src="{{ Storage::url($menu->gambar) }}" class="mt-2 h-48" alt="{{ $menu->nama }}" />
                @endif
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
