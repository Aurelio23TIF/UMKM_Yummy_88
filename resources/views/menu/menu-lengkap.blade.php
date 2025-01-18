<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Menu</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind terhubung -->
</head>
<body class="bg-[#D9BFB0] text-gray-800">
    <header class="py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-white tracking-widest">SEMUA MENU</h1>
            <p class="text-white text-lg mt-2">Berikut berbagai varian menu kami!</p>
        </div>
    </header>

    <main class="mt-8">
        <!-- Hapus padding horizontal berlebih pada container -->
        <div class="mx-auto max-w-screen-xl">
            <!-- Grid Menu -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2">
                @foreach ($menus as $menu)
                    <!-- Card Menu -->
                    <div class="bg-white rounded-lg shadow-lg p-4 w-full">
                        <img src="{{ Storage::url($menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-40 object-cover rounded-lg">
                        <div class="mt-4">
                            <h2 class="text-lg font-semibold text-gray-800">{{ strtoupper($menu->nama) }}</h2>
                            <p class="text-gray-600 mt-2">IDR. {{ number_format($menu->harga, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    
</body>
</html>
