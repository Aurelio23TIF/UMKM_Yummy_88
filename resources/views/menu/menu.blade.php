<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Menu</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind terhubung -->
    <style>
        <style>
    /* Hilangkan scrollbar untuk Chrome, Safari, dan Edge */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Hilangkan scrollbar untuk Firefox */
    .no-scrollbar {
        scrollbar-width: none;
    }

    /* Tombol panah */
    .scroll-button {
        width: 40px;
        height: 40px;
        background-color: white; /* Background putih */
        border: 1px solid #ccc; /* Border lembut */
        border-radius: 50%; /* Membuat tombol menjadi bulat */
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0.4; /* Transparansi awal */
        cursor: pointer;
        transition: opacity 0.3s ease; /* Animasi perubahan transparansi */
    }

    /* Hover efek untuk tombol panah */
    .scroll-button:hover {
        opacity: 1; /* Tombol terlihat jelas saat di-hover */
    }

    /* Untuk hover di perangkat layar sentuh (opsional) */
    .scroll-button:active {
        opacity: 1;
    }

    /* Gaya untuk panah kiri */
    .arrow-left {
        border: solid black;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 7px;
        transform: rotate(135deg);
        -webkit-transform: rotate(135deg);
    }

    /* Gaya untuk panah kanan */
    .arrow-right {
        border: solid black;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 7px;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }
</style>

    </style>
    <script>
        function scrollMenu(direction) {
            const container = document.getElementById('menu-container');
            const scrollAmount = 300; // Jumlah scroll dalam pixel
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else if (direction === 'right') {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }
    </script>
</head>
<body class="bg-[#D9BFB0] text-gray-800">
    <header class="py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-white tracking-widest">MENU</h1>
            <p class="text-white text-lg mt-2">MENU BEST SELLER</p>
        </div>
    </header>

    <main class="mt-8">
        <div class="container mx-auto px-4 relative">
            <!-- Tombol Panah Kiri -->
<button
onclick="scrollMenu('left')"
class="absolute left-0 top-1/2 transform -translate-y-1/2 scroll-button"
>
<span class="arrow-left"></span>
</button>
            <!-- Kontainer Menu -->
            <div id="menu-container" class="flex gap-6 overflow-x-scroll scroll-smooth no-scrollbar">
                @foreach ($menus as $menu)
                    <!-- Card Menu -->
                    <div class="bg-white rounded-lg shadow-lg p-4 flex-shrink-0 w-64">
                        <img src="{{ Storage::url($menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-40 object-cover rounded-lg">
                        <div class="mt-4">
                            <h2 class="text-lg font-semibold text-gray-800">{{ strtoupper($menu->nama) }}</h2>
                            <p class="text-gray-600 mt-2">IDR. {{ number_format($menu->harga, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

           <!-- Tombol Panah Kanan -->
<button
onclick="scrollMenu('right')"
class="absolute right-0 top-1/2 transform -translate-y-1/2 scroll-button"
>
<span class="arrow-right"></span>
</button>
        </div>

        <!-- Tombol Lihat Semua Menu -->
        <div class="text-center mt-6">
            <a href="{{ route('menu.lengkap') }}" class="bg-gray-800 text-white px-6 py-2 rounded-full shadow-lg hover:bg-gray-600">
                Lihat Semua Menu
            </a>
        </div>
    </main>

    
</body>
</html>
