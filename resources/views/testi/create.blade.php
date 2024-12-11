<x-app-layout>
    <div class="max-w-3xl mx-auto py-8 px-6 sm:px-8 lg:px-12">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-6">Tambah Testimoni</h2>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-3 rounded-lg mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('testi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Nama Customer -->
            <div>
                <label for="nama_customer" class="block text-gray-700 text-sm font-medium mb-2">Nama Customer</label>
                <input type="text" name="nama_customer" id="nama_customer" value="{{ old('nama_customer') }}" class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <!-- Pesan -->
            <div>
                <label for="pesan" class="block text-gray-700 text-sm font-medium mb-2">Pesan</label>
                <textarea name="pesan" id="pesan" rows="4" class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>{{ old('pesan') }}</textarea>
            </div>

            <!-- Gambar -->
            <div>
                <label for="gambar" class="block text-gray-700 text-sm font-medium mb-2">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    Simpan Testimoni
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
