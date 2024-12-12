<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Menu</h1>

        @if (session()->has('success'))
            <div id="success-alert" class="bg-green-500 text-white p-3 mb-4 rounded-sm">
                {{ session()->get('success') }}
            </div>
        @endif

        <a href="{{ route('menu.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">Tambah Menu</a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($menus as $menu)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    @if ($menu->gambar)
                        <img src="{{ Storage::url($menu->gambar) }}" class="w-full h-48 object-cover" alt="{{ $menu->nama }}">
                    @else
                        <img src="{{ asset('images/default.png') }}" class="w-full h-48 object-cover" alt="Gambar Default">
                    @endif

                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $menu->nama }}</h2>
                        <p class="text-gray-600 mt-2">{{ $menu->jenis }}</p>
                        <p class="text-gray-800 font-semibold mt-2">Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>

                        <div class="mt-4">
                            <a href="{{ route('menu.edit', $menu->id) }}" class="bg-blue-500 text-white px-4 py-1 rounded-lg">Edit</a>
                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded-lg">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('success-alert')?.remove();
        }, 1500);
    </script>
</x-app-layout>
