<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-xl rounded-lg w-full max-w-md p-8">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('build/assets/logo.png') }}" alt="Logo" class="h-16">
        </div>

        <!-- Title -->
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Welcome Back</h2>

        <!-- Form -->
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-semibold text-gray-600 mb-2">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="Enter your email"
                    required>
            </div>

            <!-- Password -->
<div class="mb-6 relative">
    <label for="password" class="block text-sm font-semibold text-gray-600 mb-2">Password</label>
    <input
        type="password"
        id="password"
        name="password"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 focus:outline-none pr-10"
        placeholder="Enter your password"
        required
    >
    <!-- Show/Hide Password Toggle -->
    <button type="button" id="togglePassword" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-600 focus:outline-none">
        <!-- Default Eye Closed Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="eyeIcon">
            <!-- Eye Closed -->
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12c0 3-2.5 6-5 6s-5-3-5-6 2.5-6 5-6 5 3 5 6z"/>
        </svg>
    </button>
</div>

<!-- JavaScript untuk Toggle Mata -->
<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function() {
        // Toggle password visibility
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;

        // Toggle the icon between closed and open
        if (type === 'password') {
            // Mata tertutup
            eyeIcon.setAttribute('d', 'M15 12c0 3-2.5 6-5 6s-5-3-5-6 2.5-6 5-6 5 3 5 6z');
        } else {
            // Mata terbuka
            eyeIcon.setAttribute('d', 'M12 4.5c-4.14 0-7.5 3.36-7.5 7.5S7.86 19.5 12 19.5s7.5-3.36 7.5-7.5S16.14 4.5 12 4.5zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z');
        }
    });
</script>


            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center text-sm text-gray-600">
                    <input
                        type="checkbox"
                        name="remember"
                        class="text-blue-500 focus:ring-2 focus:ring-blue-500 rounded-sm">
                    <span class="ml-2">Remember me</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-200">
                Login
            </button>
        </form>

        <!-- Sign Up Link -->
        <p class="text-sm text-gray-600 text-center mt-6">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Sign up</a>
        </p>

        <!-- Footer with Company Info -->
        <div class="mt-8 text-center text-gray-500 text-sm">
            <p>&copy; {{ date('Y') }} <a href="#" class="text-blue-500 hover:underline">Yummy 88</a>. All rights reserved.</p>
        </div>
    </div>

    {{-- <script>
        // Toggle password visibility
        const togglePassword = document.getElementById("togglePassword");
        const passwordField = document.getElementById("password");
        const eyeIcon = document.getElementById("eyeIcon");

        togglePassword.addEventListener("click", function () {
            // Check the current type of the password field
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);

            // Toggle the icon
            if (type === "password") {
                // Eye closed icon
                eyeIcon.setAttribute("d", "M15 12c0 3-2.5 6-5 6s-5-3-5-6 2.5-6 5-6 5 3 5 6z");
            } else {
                // Eye open icon
                eyeIcon.setAttribute("d", "M12 6c3.3 0 6 2.5 6 6s-2.7 6-6 6-6-2.5-6-6 2.7-6 6-6zm0-4C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 14c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z");
            }
        });
    </script> --}}

</body>
</html>
