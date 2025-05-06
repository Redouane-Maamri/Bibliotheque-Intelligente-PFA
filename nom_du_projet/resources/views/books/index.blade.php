<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Verdana', Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            position: relative;
            height: 64px;
            background-color: #333;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        header h1 {
            font-size: 24px;
            margin: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin: 20px;
            margin-top: 30px;
        }
        .book-card {
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 10px;
            width: 250px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            transition: transform 0.3s ease;
            text-decoration: none;
            color: inherit;
        }
        .book-card:hover {
            transform: scale(1.05);
        }
        .book-card img {
            width: 100%;
            border-radius: 5px;
            height: 250px;
        }
        .book-card h3 {
            padding: 10px;
            margin: 10px auto;
            font-size: 18px;
            text-align: center;
            color: #333;
        }
        .book-card p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .filter-container {
            margin-top: 20px;
            padding: 3px;
            text-align: center;
        }
        .filter-container label {
            font-weight: bold;
            font-size: 20px;
        }
        .filter-container button {
            background: #A9A9A9;
            color: black;
            font-weight: bold;
            width: 100px;
            height: 30px;
            border-radius: 10px;
            border: 2px;
            margin-left: 10px;
        }
        .filter-container select {
            width: 15%;
            height: 25px;
            margin-left: 10px;
        }
        .back-button {
            display: block;
            background: #fbbf24;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-align: center;
            margin: 20px auto;
            width: 100px;
            text-decoration: none;
        }
        .back-button:hover {
            background: #f59e0b;
        }
    </style>
</head>
<body>
    <header class="relative h-64 md:h-80 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=1500&q=80');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative flex items-center justify-center h-full">
          <h1 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg">📚 Welcome to Our Book Store</h1>
        </div>
      </header>

    <!-- Improved Filters Section -->
<div class="flex flex-col md:flex-row justify-center items-center gap-8 mt-10 mb-6 px-4">

    <!-- Filter by Price -->
    <div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-sm">
        <form method="GET" action="{{ route('books.index') }}">
            <label for="filterByPrice" class="block text-gray-800 font-semibold text-lg mb-2">💲 Filter By Price</label>
            <select name="filterByPrice" id="filterByPrice" class="w-full border border-gray-300 rounded-md p-2 mb-4 focus:outline-none focus:ring-2 focus:ring-green-400">
                <option value="">All Prices</option>
                <option value="low">Under 20 $</option>
                <option value="medium">Between 20 and 60 $</option>
                <option value="high">Above 60 $</option>
            </select>
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 rounded-md transition duration-300">Apply</button>
        </form>
    </div>

    <!-- Filter by Category -->
    <div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-sm">
        <form method="GET" action="{{ route('books.filterByCategorie') }}">
            <label for="filterByCategorie" class="block text-gray-800 font-semibold text-lg mb-2">📚 Filter By Category</label>
            <select name="filterByCategorie" id="filterByCategorie" class="w-full border border-gray-300 rounded-md p-2 mb-4 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <option value="">All Categories</option>
                <option value="Development">Development</option>
                <option value="Fantasy">Fantasy</option>
                <option value="scienceFiction">Science Fiction</option>
            </select>
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 rounded-md transition duration-300">Filter</button>
        </form>
    </div>

</div>


    <!-- Display success message if the book is added -->
    @if(session('success'))
        <div style="color: green; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display all books -->
    <div class="container">
        @foreach ($books as $book)
            <a href="{{ route('books.show', $book->id) }}" class="book-card">
                <img src="{{ asset('products/' . $book->image) }}" alt="{{ $book->title }}">
                <h3>{{ $book->title }}</h3>
                <p>Price: {{ $book->price }} USD</p>
            </a>
        @endforeach
    </div>

    <a href="{{ route('dashboard') }}" class="back-button">Back</a>
</body>
</html>
