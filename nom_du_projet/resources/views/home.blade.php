<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap');

        body {
            background-image: url('https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Playfair Display', serif;
            scroll-behavior: smooth;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="h-screen bg-black/70 bg-blend-darken flex items-center justify-center">

    <div class="relative backdrop-blur-md bg-white/10 p-10 rounded-2xl shadow-2xl border border-white/20 text-center text-white max-w-xl animate-[fadeInUp_1s_ease-out] transition-all duration-700 hover:shadow-green-500/40 hover:scale-105">

        <!-- Floating book image -->
        <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png" alt="Book" class="w-20 h-20 mx-auto mb-4 animate-bounce drop-shadow-lg">

        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 drop-shadow-lg leading-tight">
            📚 Welcome to <span class="text-green-400">Incredible Reads</span><br>
            Unlock Your Imagination.
        </h1>

        <p class="mb-6 text-lg text-white/80">
            Dive into thousands of books and expand your world—one page at a time.
        </p>

        <a href="{{ route('register') }}" class="inline-block bg-green-500 hover:bg-yellow-600 text-white text-lg px-8 py-4 rounded-full shadow-lg transition duration-300">
            Start Your Journey 🚀
        </a>
    </div>

</body>
</html>
