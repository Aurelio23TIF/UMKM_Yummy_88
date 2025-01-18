<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        body {
            background-color: #d2b48c;
            /* Warna latar cokelat muda */
        }

        .header {
            font-family: Arial, sans-serif;
            font-weight: bold;
            text-transform: uppercase;
        }

        .contact-section {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body class="text-white">

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
