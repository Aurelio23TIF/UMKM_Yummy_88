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

        /* Carousel container */
        .carousel {
            position: relative;
            width: 100%;
            height: 70vh;
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
            font-size: 2.5rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
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
        const animationDuration = slideCount * 3; // 3 detik per slide

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
