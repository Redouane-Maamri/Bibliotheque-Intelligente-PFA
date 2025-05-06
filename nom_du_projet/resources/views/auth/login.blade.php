<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E0Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fadeIn {
            animation: fadeIn 1.2s ease-out;
        }

        /* Image Styling */
        .book-image {
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>
<body class="min-h-screen bg-white text-green-800 flex items-center justify-center">

    <div class="flex flex-col md:flex-row w-full max-w-7xl mx-auto bg-white shadow-lg rounded-3xl overflow-hidden">

        <!-- Left Side: Form -->
        <div class="md:w-1/2 p-10 animate-fadeIn">
            <h2 class="text-4xl font-extrabold text-green-600 mb-4 text-center">📘 Welcome Back to BookVerse</h2>
            <p class="text-green-700 text-center mb-6">Sign in to continue your reading adventure.</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-green-800 mb-1">Email</label>
                    <input id="email" name="email" type="email" required
                           class="w-full px-4 py-2 rounded-lg bg-white border-2 border-green-300 text-green-800 placeholder-green-400 focus:outline-none focus:ring-2 focus:ring-green-400">
                    <x-input-error :messages="$errors->get('email')" class="text-red-400 mt-1 text-sm"/>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold text-green-800 mb-1">Password</label>
                    <input id="password" name="password" type="password" required
                           class="w-full px-4 py-2 rounded-lg bg-white border-2 border-green-300 text-green-800 placeholder-green-400 focus:outline-none focus:ring-2 focus:ring-green-400">
                    <x-input-error :messages="$errors->get('password')" class="text-red-400 mt-1 text-sm"/>
                </div>

                <!-- Submit -->
                <div class="flex items-center justify-between">
                    <a href="{{ route('register') }}" class="text-sm underline text-green-800 hover:text-green-600">Don't have an account?</a>
                    <button type="submit" class="bg-green-500 hover:bg-green-600 px-6 py-2 rounded-full font-bold text-white transition">
                        Login
                    </button>
                </div>
            </form>
        </div>

        <!-- Right Side: Book Image -->
        <div class="hidden md:block md:w-1/2">
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=1950&q=80"
                 alt="Book background"
                 class="w-full h-full book-image" />
        </div>
    </div>

    <!-- Admin Link with Icon -->
    <ul class="absolute top-5 right-5 text-green-800">
        <li>
            <a href="{{ route('admin.form') }}" class="flex items-center space-x-2">
                <i class="fas fa-user-shield"></i>
                <span>Admin</span>
            </a>
        </li>
    </ul>

</body>
</html>
