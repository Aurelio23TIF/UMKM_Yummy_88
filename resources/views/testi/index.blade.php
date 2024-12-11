<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6">Daftar Testimoni</h1>

        @if (session('successs'))
            <div class="bg-green-500 text-white p-3 mb-4 rounded-lg shadow-md">
                {{ session('successs') }}
            </div>
        @endif

        <a href="{{ route('testi.create') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg mb-6 shadow-lg hover:bg-blue-700 transition duration-300">
            Tambah Testimoni
        </a> <!-- Tombol untuk menambah testimoni -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($testis as $testi)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-500 hover:scale-105">
                    <!-- Gambar Testimoni -->
                    @if ($testi->gambar)
                        <img src="{{ Storage::url($testi->gambar) }}" class="w-full h-48 object-cover" alt="Gambar Testimoni">
                    @else
                        <img src="https://via.placeholder.com/400x300" class="w-full h-48 object-cover" alt="Gambar Testimoni">
                    @endif

                    <div class="p-6">
                        <!-- Nama Customer -->
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-full bg-gray-300 overflow-hidden">
                                <!-- Foto Profil Customer (Bulat) -->
                                @if ($testi->gambar)
                                    <img src="{{ Storage::url($testi->gambar) }}" class="w-full h-full object-cover" alt="Foto Customer">
                                @else
                                    <img src="https://via.placeholder.com/80" class="w-full h-full object-cover" alt="Foto Customer">
                                @endif
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">{{ $testi->nama_customer }}</h2>
                        </div>

                        <!-- Pesan Testimoni -->
                        <p class="text-gray-600 mt-3">{{ Str::limit($testi->pesan, 100) }}</p>

                        <div class="mt-4 flex justify-between items-center">
                            <!-- Edit dan Hapus Button -->
                            <a href="{{ route('testi.edit', $testi->id) }}" class="text-blue-500 hover:underline">Edit</a>

                            <form action="{{ route('testi.destroy', $testi->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
