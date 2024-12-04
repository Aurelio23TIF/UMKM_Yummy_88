<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Menu</h1>
        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Input Nama Menu --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Menu</label>
                <input type="text" name="nama" class="mt-1 block w-full border-gray-300 rounded-md" required />

                @error('nama')
                    <span class="text-red-500 text-sm">Judul tidak boleh melebihi 255 Karakter</span>
                @enderror
            </div>

            {{-- Input Jenis Menu --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Jenis Menu</label>
                <textarea name="jenis" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
                @error('jenis')
                    <span class="text-red-500 text-sm">Jenis Menu tidak boleh melebihi 255 Karakter</span>
                @enderror
            </div>

            {{-- Input Harga Menu --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Harga</label>
                <input type="number" name="harga" class="mt-1 block w-full border-gray-300 rounded-md" required />

                @error('harga')
                    <span class="text-red-500 text-sm">Harga harus berupa angka dan tidak boleh kosong</span>
                @enderror
            </div>

            {{-- Input Gambar Menu --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @error('gambar')
                    <span class="text-red-500 text-sm">Gambar tidak boleh melebihi 2MB</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    // Update the textarea value when the content changes
                    document.querySelector('textarea[name="jenis"]').value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
