{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Yummy 88</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-poppins">

    <!-- Header -->
    <header class="bg-green-800 text-white py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">LOKASI</h1>
            <p class="text-lg mt-2">Dimana kamu dapat menemukan kami</p>
        </div>
    </header>

    <!-- Content -->
    <section class="container mx-auto mt-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Info -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Hubungi</h2>
                <p class="text-gray-700 mb-2"><strong>Telepon:</strong> (+62) 853 2108 1688</p>
                <p class="text-gray-700 mb-4"><strong>Alamat:</strong> Jl. Dharma Bakti, Labuh Baru Barat, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28292</p>
                <hr class="my-4">
                <h3 class="text-xl font-semibold mb-2">Jam Buka:</h3>
                <p class="text-gray-700 mb-1">Setiap hari: 6:00 WIB - 22:00 WIB</p>
                <p class="text-red-600 font-bold">Non Halal</p>
            </div>

            <!-- Google Maps -->
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.2946505968397!2d101.4244456723112!3d0.5076393659429385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ac0e7209bd91%3A0x542d830d52d888cd!2sYummy%2088%20Chinese%20Food!5e0!3m2!1sen!2sid!4v1700000000000"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="container mx-auto mt-16 px-4">
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Contact Us</h2>
            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold text-gray-700">Nama</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500" required>
                </div>

                <!-- Pesan -->
                <div class="mb-4">
                    <label for="message" class="block text-sm font-semibold text-gray-700">Pesan</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-green-500" required></textarea>
                </div>

                <!-- Submit -->
                <div>
                    <button type="submit" class="w-full bg-green-800 text-white py-2 px-4 rounded-lg hover:bg-green-700">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </section>

</body>
</html>
