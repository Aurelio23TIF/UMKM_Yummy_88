<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Yummy88')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background: linear-gradient(180deg, #ffe819, #c7b513); /* Gradasi warna oranye */
            background-attachment: fixed; /* Menjaga latar belakang tetap pada posisi */
            background-size: cover; /* Menyesuaikan ukuran background */
        }
        .sidebar {
            height: 100vh; /* Tinggi penuh layar */
            position: fixed; /* Tetap di tempat */
            width: 250px;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #ff5555, #ff0000); /* Gradasi warna oranye */
            color: white;
        }
        .sidebar h4 {
            color: #fff;
            font-weight: bold;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.9); /* Warna teks link */
            font-weight: bold; /* Teks tebal */
            font-size: 1.1rem; /* Ukuran font lebih besar */
            padding: 10px 15px; /* Tambahkan padding untuk spasi */
            transition: color 0.3s ease, background-color 0.3s ease;
        }
        .sidebar .nav-link:hover {
            color: #ffe8d6; /* Warna teks saat hover */
            background-color: rgba(255, 255, 255, 0.1); /* Latar belakang saat hover */
            border-radius: 5px; /* Membuat sudut link lebih lembut */
        }
        .content {
            margin-left: 250px; /* Sama dengan lebar sidebar */
            flex-grow: 1;
            padding: 20px;
        }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="sidebar p-3">
        <h4 class="mb-4">Sistem Admin Yummy88</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('dashboard.index') }}" class="nav-link">
                    <i class="bi bi-grid-fill"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('slides.index') }}" class="nav-link">
                    <i class="bi bi-grid-fill"></i> Slide
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('menu.index') }}" class="nav-link">
                    <i class="bi bi-grid-fill"></i> Menu
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('news.index') }}" class="nav-link">
                    <i class="bi bi-grid-fill"></i> Berita
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('lokasi.index') }}" class="nav-link">
                    <i class="bi bi-grid-fill"></i> Informasi
                </a>
            </li>
        </ul>
    </nav>

    <div class="content p-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
