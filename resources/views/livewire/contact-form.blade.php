

<div class="max-w-lg mx-auto mt-8 bg-white shadow-2xl rounded-lg overflow-hidden">
    <div class="px-6 py-4">
        <!-- Pesan Sukses -->
        @if (session()->has('success'))
            <div class="bg-green-200 text-green-800 px-4 py-2 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Pesan Error -->
        @if (session()->has('error'))
            <div class="bg-red-800 text-white px-4 py-2 rounded-lg mb-4">
                {{ session('error') }}
            </div>
        @endif

        <h1 class="flex justify-center text-3xl font-bold mb-2 text-gray-800">Contact Us</h1>
        <p class="text-gray-600 mb-4">Silahkan isi form berikut untuk berinteraksi dengan kami</p>

        <form wire:submit.prevent="send">
            <!-- Input Nama -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Nama</label>
                <input type="text" id="name" wire:model="name" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:border-indigo-600">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Input Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                <input type="email" id="email" wire:model="email" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:border-indigo-600">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Input Pesan -->
            <div class="mb-4">
                <label for="message" class="block text-sm font-semibold text-gray-700 mb-1">Message</label>
                <textarea id="message" wire:model="message" rows="4" class="w-full px-4 py-3 rounded-lg border focus:outline-none focus:border-indigo-600"></textarea>
                @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="mb-4">
                <button type="submit" class="bg-indigo-500 text-white font-semibold px-6 py-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-indigo-600">
                    Kirim Pesan
                </button>
            </div>
        </form>
    </div>
</div>
