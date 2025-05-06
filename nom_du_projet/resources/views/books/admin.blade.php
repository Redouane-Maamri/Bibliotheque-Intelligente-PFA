<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 py-8">
        <h1 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 mb-6">📚 Books Collection</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row justify-end gap-4 mb-6">
            <a href="{{ route('contacts.index') }}" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                Gestion des contacts
            </a>
            <a href="{{ route('books.create') }}" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                ➕ Add a new book
            </a>
        </div>

        <!-- Books Table -->
        <div class="overflow-x-auto">
            <table class="min-w-[600px] w-full bg-white shadow-lg rounded-lg overflow-hidden text-sm">
                <thead class="bg-gray-900 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Image</th>
                        <th class="py-3 px-4 text-left">Title</th>
                        <th class="py-3 px-4 text-left">Price</th>
                        <th class="py-3 px-4 text-left">Category</th>
                        <th class="py-3 px-4 text-left">Pages</th>
                        <th class="py-3 px-4 text-left">Reviews</th>
                        <th class="py-3 px-4 text-left">Description</th>
                        <th class="py-3 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="py-3 px-4">
                                <img src="{{ asset('products/' . $book->image) }}" alt="{{ $book->title }}" class="w-14 h-14 object-cover rounded-md shadow">
                            </td>
                            <td class="py-3 px-4 font-medium text-gray-800">{{ $book->title }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $book->price }} USD</td>
                            <td class="py-3 px-4 text-gray-600">{{ $book->categorie }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $book->NombrePages }}</td>
                            <td class="py-3 px-4 text-gray-600">{{ $book->reviews }}/10</td>
                            <td class="py-3 px-4 text-gray-600">{{ $book->description }}</td>
                            <td class="py-3 px-4">
                                <div class="flex flex-col sm:flex-row gap-2">
                                    <a href="{{ route('books.edit', $book->id) }}" class="bg-yellow-500 text-white px-4 py-1.5 rounded hover:bg-yellow-600 transition">✏️ Edit</a>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 text-white px-4 py-1.5 rounded hover:bg-red-700 transition">🗑️ Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
