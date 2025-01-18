<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Manajemen Pesanan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
     nav ul li a {
        color: white;
        background-color: transparent;
    }

    nav ul li a:hover {
        background-color: #495057; /* Warna abu-abu gelap */
        color: #f8f9fa; /* Warna putih lebih terang */
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div class="container">
        <nav style="background-color: #dc3545; padding: 15px;">
            <ul style="list-style: none; display: flex; justify-content: center; gap: 30px; margin: 0; padding: 0;">
                <li>
                    <a href="{{ route('slides.index') }}" style="text-decoration: none; color: white; font-weight: bold; padding: 10px 20px; font-size: 1rem; border-radius: 5px; transition: background-color 0.3s, color 0.3s;">
                        Slide
                    </a>
                </li>
                <li>
                    <a href="{{ route('menu.index') }}" style="text-decoration: none; color: white; font-weight: bold; padding: 10px 20px; font-size: 1rem; border-radius: 5px; transition: background-color 0.3s, color 0.3s;">
                        Menu
                    </a>
                </li>
                <li>
                    <a href="{{ route('news.index') }}" style="text-decoration: none; color: white; font-weight: bold; padding: 10px 20px; font-size: 1rem; border-radius: 5px; transition: background-color 0.3s, color 0.3s;">
                        News
                    </a>
                </li>
                <li>
                    <a href="{{ route('lokasi.index') }}" style="text-decoration: none; color: white; font-weight: bold; padding: 10px 20px; font-size: 1rem; border-radius: 5px; transition: background-color 0.3s, color 0.3s;">
                        Lokasi
                    </a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
