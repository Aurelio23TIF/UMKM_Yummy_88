<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy 88</title>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #c70000; /* Warna latar belakang navbar */
            padding: 10px 40px;
        }


        .navbar img {
            height: 50px;
        }

        .navbar .menu {
            display: flex;
            align-items: center;
            gap: 40px; /* Jarak antar elemen menu */
        }

        .navbar .menu a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 18px;
            position: relative;
            padding: 5px 0;
        }

        .navbar .menu a::before,
        .navbar .menu a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease;
        }

        .navbar .menu a::before {
            top: 0;
            left: 0;
        }

        .navbar .menu a::after {
            bottom: 0;
            right: 0;
        }

        .navbar .menu a:hover::before,
        .navbar .menu a:hover::after {
            width: 100%;
        }

        .navbar .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .navbar .auth-buttons button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            background-color: #ffcc00;
            color: #ffffff;
        }


        /* Carousel container */
        .carousel {
            position: relative;
            width: 100%;
            height: 90vh;
            overflow: hidden;
        }

        /* Slides wrapper */
        .carousel-inner {
            display: flex;
            width: 100%;
            height: 100%;
            animation: slide infinite ease-in-out;
        }

        /* Each slide */
        .carousel-item {
            min-width: 100%;
            height: 100%;
            position: relative;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Caption styling */
        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Dancing Script', cursive; /* Apply the new font here */
            color: white;
            font-size: 4rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <!-- Left side: logo -->
        <img src="{{ asset('img/LogoYummy88.png') }}" alt="Logo Yummy 88">

        <!-- Center: menu items -->
        <div class="menu">
            <a href="#menu">Menu</a>
            <a href="#news">News</a>
            <a href="#comments">Komentar</a>
            <a href="#maps">Maps</a>
        </div>

        <!-- Right side: login and daftar buttons -->
        <div class="auth-buttons">
            <button class="login">Login</button>
            <button class="daftar">Daftar</button>
        </div>
    </div>

    <div class="carousel">
        <div class="carousel-inner">
            @foreach($slides as $slide)
            <div class="carousel-item">
                <img src="{{ asset('storage/' . $slide->image_path) }}" alt="{{ $slide->title }}">
                <div class="carousel-caption">{{ $slide->title }}</div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        // Ambil jumlah slide dari server-side
        const slideCount = {{ count($slides) }};
        const carouselInner = document.querySelector('.carousel-inner');

        // Hitung durasi animasi
        const animationDuration = slideCount * 5; // 5 detik per slide

        // Set properti animasi dinamis
        carouselInner.style.animationDuration = `${animationDuration}s`;

        // Buat keyframes animasi secara dinamis
        const keyframes = [];
        for (let i = 0; i < slideCount; i++) {
            const percentage = (i / slideCount) * 100;
            keyframes.push(`${percentage}% { transform: translateX(-${i * 100}%); }`);
        }
        keyframes.push(`100% { transform: translateX(0); }`);

        // Tambahkan keyframes ke CSS
        const styleSheet = document.createElement('style');
        styleSheet.innerHTML = `
            @keyframes slide {
                ${keyframes.join('\n')}
            }
        `;
        document.head.appendChild(styleSheet);
    </script>
</body>
</html>
