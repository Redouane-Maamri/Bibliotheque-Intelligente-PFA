<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-100 via-purple-100 to-pink-100 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-4xl w-full bg-white/60 backdrop-blur-lg shadow-xl rounded-3xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
        <!-- Book Cover -->
        <div class="relative">
            <img src="{{ asset('products/' . $book->image) }}" alt="{{ $book->title }}" class="w-full h-full object-cover rounded-l-3xl">
            <div class="absolute top-4 left-4 bg-white text-xs text-gray-700 font-semibold px-3 py-1 rounded shadow">
                Featured
            </div>
        </div>

        <!-- Book Info -->
        <div class="p-10 flex flex-col justify-center">
            <h1 class="text-4xl font-extrabold text-indigo-700 mb-4">{{ $book->title }}</h1>
            <div class="flex items-center gap-2 mb-2">
                <span class="text-yellow-500 text-xl">★</span>
                <span class="text-gray-800 font-semibold">{{ $book->reviews }}/10 Reviews</span>
            </div>
            <p class="text-lg text-gray-600 mb-4"><strong>Category:</strong> {{ $book->categorie }}</p>
            <p class="text-md text-gray-700 leading-relaxed mb-4"><strong>Description:</strong><br>{{ $book->description }}</p>
            <p class="text-md text-gray-700 mb-4"><strong>Number of Pages:</strong> {{ $book->NombrePages }}</p>
            <p class="text-2xl font-bold text-green-600 mb-6">${{ $book->price }}</p>

            <div class="flex gap-4">
                <!-- Download Link for the Book -->
                <a href="{{$book->link}}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition" download>Read It</a>
                <a href="{{ route('books.index') }}" class="bg-white text-indigo-600 border border-indigo-600 px-6 py-3 rounded-lg hover:bg-indigo-50 transition">Back to List</a>
            </div>
        </div>
    </div>

</body>
</html>
