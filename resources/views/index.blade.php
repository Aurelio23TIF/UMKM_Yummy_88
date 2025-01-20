<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy 88</title>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <style>
        .justify-content-center {
            justify-content: center;
        }

        .btn-custom {
        background-color: red; /* Button background color */
        color: white; /* Button text color */
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
        transition: transform 0.2s ease; /* Only scale on hover */
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #dfd6ce;
            scroll-behavior: smooth;
        }

        .judul {
            font-family: Arial, sans-serif;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #FFFFFF;
            font-size: 48px;
            text-align: center;
            background-color: #f7e707;
            padding: 20px;
            margin-bottom: 50px;
            margin-top: 70px; /* Added to account for fixed navbar */
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #c70000;
            padding: 10px 40px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-sizing: border-box;
        }

        .navbar img {
            height: 50px;
        }

        .navbar .menu {
            display: flex;
            align-items: center;
            gap: 40px;
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

        .custom-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            background-color: #ff3c3c;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .image-container {
            height: 200px;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .no-image {
            color: #aaa;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .menu-name {
            font-size: 22px;
            font-weight: 600;
            color: #ffffff;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .menu-price {
            font-size: 20px;
            font-weight: bold;
            color: #ffdd00;
            margin: 0;
        }

        .no-menu {
            color: #777;
            font-size: 18px;
            margin-top: 50px;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: space-around;
            padding: 20px;
        }

        .menu-item {
            flex: 1 1 calc(25% - 1rem);
            max-width: calc(25% - 1rem);
            box-sizing: border-box;
        }

        .whatsapp-button {
            background-color: #FFD700; /* Warna kuning */
            color: #FFFFFF; /* Warna tulisan putih */
            border: none;
            border-radius: 5px;
            padding: 15px 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

    .whatsapp-button:hover {
    background-color: #FFC107; /* Warna kuning lebih gelap */
    }


    .news {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    gap: 40px; /* Nilai default */
    transition: transform 0.3s ease-in-out;
}




        .news .card-img-left {
            flex-basis: 50%; /* Menentukan lebar gambar */
            overflow: hidden;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            height: 200px; /* Set fixed height for uniformity */
        }

        .news .card-img-left img {
            object-fit: cover;
            width: 100%;
            height: 100%; /* Ensures the image fits the height */
        }

        .news .card-body {
            flex-basis: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .news .card-title {
            font-size: 1.2em;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        .news .card-text {
            font-size: 1em;
            color: #666;
            margin-bottom: 15px;
        }

        .news:hover {
            transform: translateY(-10px); /* Efek geser ke atas saat hover */
        }

        .news .card-body p {
            margin: 0;
        }

        .carousel {
            position: relative;
            width: 100%;
            height: 90vh;
            overflow: hidden;
            margin-top: 70px; /* Added to account for fixed navbar */
        }

        .carousel-inner {
            display: flex;
            width: 100%;
            height: 100%;
            animation: slide infinite ease-in-out;
        }

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

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Dancing Script', cursive;
            color: white;
            font-size: 5rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
        }

        /* Section styling */
        #menu, #news, #comments, #maps {
            padding-top: 70px;
            margin-top: -70px;
            scroll-margin-top: 70px;
        }

        .section {
            background-color: #fff;
            margin: 20px;
            padding: 20px;
            border-radius: 15px;
            min-height: 500px;
        }

        .section h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .menu-item {
                flex: 1 1 calc(50% - 1rem);
                max-width: calc(50% - 1rem);
            }

            .image-container {
                height: 150px;
            }

            .carousel-caption {
                font-size: 3rem;
            }
        }

        @media (max-width: 480px) {
            .menu-item {
                flex: 1 1 100%;
                max-width: 100%;
            }

            .navbar {
                padding: 10px 20px;
            }

            .navbar .menu {
                gap: 20px;
            }

            .carousel-caption {
                font-size: 2rem;
            }

        }
        .footer {
            background-color: #ff0000; /* Warna merah untuk seluruh footer */
            color: #ffffff; /* Warna teks putih */
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .footer-container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px; /* Batas maksimal lebar kontainer */
            margin: 0 auto; /* Pusatkan kontainer */
        }
        .footer section {
            flex: 1;
            padding: 0 20px;
        }
        .footer h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }
        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer ul li {
            margin-bottom: 10px;
        }
        .footer ul li a {
            color: #ffffff; /* Warna teks putih */
            text-decoration: none;
        }
        .footer ul li a:hover {
            text-decoration: underline;
        }

        .header {
            font-family: Arial, sans-serif;
            font-weight: bold;
            text-transform: uppercase;
        }

        .contact-section {
            font-family: Arial, sans-serif;
        }

        .white-container {
    background-color: white; /* Latar belakang putih untuk seluruh kontainer */
    padding: 20px; /* Memberikan jarak di dalam kontainer */
    border-radius: 8px; /* Membulatkan sudut kontainer */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan bayangan lembut */
    width: 80%; /* Menentukan lebar kontainer sesuai keinginan */
    margin: 0 auto; /* Memposisikan kontainer di tengah */
    gap: 20px; /* Menambahkan jarak antar card */

}

.card-container {
    margin-bottom: 15px; /* Jarak antar card */
    background-color: white; /* Latar belakang putih untuk card */
    padding: 15px; /* Memberikan padding di sekitar card */
    border-radius: 8px; /* Membulatkan sudut card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lembut untuk card */
    max-width: 400px; /* Membatasi lebar maksimal card */
    width: 100%; /* Agar card tidak lebih lebar dari kontainer */
    margin: 0 auto 15px; /* Memposisikan card di tengah */
}

.card-body {
    padding: 15px; /* Padding dalam card-body */
    max-height: 200px; /* Membatasi tinggi maksimal konten dalam card */
    overflow-y: auto; /* Menambahkan scrollbar jika konten melebihi tinggi card */
}

.card-title {
    font-weight: bold;
}

.card-text {
    font-size: 14px;
}
    </style>
</head>
<body>
    <div class="navbar">
        <!-- Left side: logo -->
        <img src="{{ asset('img/LogoYummy88.png') }}" alt="Logo Yummy 88">

        <!-- Center: menu items -->
        <div class="menu">
            <a href="#menu" data-section="menu">Menu</a>
            <a href="#news" data-section="news">Berita</a>
            <a href="#comments" data-section="comments">Komentar</a>
            <a href="#informations" data-section="informations">Informasi</a>
        </div>

        <!-- Right side: login and daftar buttons -->
        <div class="auth-buttons">
            <a href="{{ route('dashboard.index') }}" class="login">
                <button>Dashboard</button>
            </a>
        </div>
    </div>

    <div class="carousel">
        <div class="carousel-inner">
            @foreach($slides as $slide)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ asset('storage/' . $slide->image_path) }}" alt="{{ $slide->title }}">
                <div class="carousel-caption">{{ $slide->title }}</div>
            </div>
            @endforeach
        </div>
    </div>

    <section id="menu">
        <div class="judul">Menu Makanan</div>
        <div class="row menu-container">
            @forelse ($menus as $menu)
                <div class="menu-item">
                    <div class="card custom-card">
                        <div class="image-container">
                            @if ($menu->gambar)
                                <img src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ $menu->nama_makanan }}">
                            @else
                                <div class="no-image">No Image</div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="menu-name">{{ $menu->nama_makanan }}</h5>
                            <p class="menu-price">{{ ($menu->harga_makanan) }}</p>
                            <p class="mb-3"><strong></strong> {{ $menu->deskripsi }}</p>
                            <button class="whatsapp-button" onclick="window.location.href='https://wa.me/085321081688';">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <p class="no-menu">No menu items available</p>
            @endforelse
        </div>
    </section>

    <section id="news">
        <div class="judul">Berita</div>
        <div class="container">
        <div class="row">
            @foreach ($news as $item)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="news shadow-sm">
                    <!-- Gambar -->
                    <div class="card-img-left">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" alt="{{ $item->judul }}">
                    </div>

                    <!-- Teks -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text text-muted"> {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
                        <p class="card-text">{{ ($item->deskripsi) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    </section>

    <section id="comments" class="text-center my-5">
        <div class="judul mb-4">
            <h2>Komentar</h2>
        </div>

            @foreach ($komens as $item)
                <div class="card-container">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->username }}</h5>
                            <p class="card-text">Rating: {{ $item->rating }}</p>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('komentar.create') }}" class="btn btn-custom">
                    Tambah Komentar
                </a>
            </div>
        </table>
    </section>

    <section id="informations">
        <div class="judul">Informasi</div>
        <div class="container mx-auto px-4 py-12">
            <!-- Header -->
            <div class="text-center">
                <h1 class="text-5xl header">Lokasi</h1>
                <p class="text-xl mt-2">Dimana kamu dapat menemukan kami</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
                <!-- Contact Details -->
                <div class="contact-section">
                    @foreach ($contacts as $contact)
                        <h2 class="text-3xl font-bold mb-4">Hubungi</h2>
                        <p class="mb-2">
                            <span class="font-bold">Telepon:</span> {{ $contact->telepon }}
                        </p>
                        <p class="mb-2">
                            <span class="font-bold">Email:</span> {{ $contact->email }}
                        </p>
                        <p class="mb-6">
                            <span class="font-bold">Alamat:</span> {{ $contact->alamat }}
                        </p>
                        <hr class="border-t border-white mb-6">
                    @endforeach
                    <h2 class="text-3xl font-bold mb-4">Jam Buka:</h2>
                    <p class="mb-2">
                        <span class="font-bold">Setiap hari:</span> 6:00 WIB - 22:00 WIB
                    </p>
                    <p>
                        <span class="font-bold text-blue-700">Non Halal</span>
                    </p>
                </div>

                <!-- Google Maps -->
                <div>
                    @foreach ($contacts as $contact)
                        @if ($contact->embedded_map)
                            <iframe
                                src="{{ $contact->embedded_map }}"
                                width="600"
                                height="450"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        @else
                            <p class="text-red-500">Embedded map tidak tersedia.</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
</body>
</html>

    <script>
        // Carousel animation
        const slideCount = {{ count($slides) }};
        const carouselInner = document.querySelector('.carousel-inner');
        const animationDuration = slideCount * 5;

        carouselInner.style.animationDuration = `${animationDuration}s`;

        const keyframes = [];
        for (let i = 0; i < slideCount; i++) {
            const percentage = (i / slideCount) * 100;
            keyframes.push(`${percentage}% { transform: translateX(-${i * 100}%); }`);
        }
        keyframes.push(`100% { transform: translateX(0); }`);

        const styleSheet = document.createElement('style');
        styleSheet.innerHTML = `
            @keyframes slide {
                ${keyframes.join('\n')}
            }
        `;
        document.head.appendChild(styleSheet);

        // Smooth scrolling for navbar links
        document.querySelectorAll('.menu a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const sectionId = this.getAttribute('href');
                const section = document.querySelector(sectionId);

                if (section) {
                    section.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
