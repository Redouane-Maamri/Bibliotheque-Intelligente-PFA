<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-white min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-lg bg-white rounded-2xl shadow-2xl p-8">
        <h3 class="text-4xl font-bold text-center text-blue-700 mb-6 underline">Add a Book</h3>

        <div class="flex justify-center mb-6">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcCFnRzUbPw4-VN37pRyEjAmaje8tJfT_sZEEjqBsoJ5IIUqM-avb50fRUHwZYrYN9T_I&usqp=CAU" 
                 alt="Book Icon" 
                 class="w-20 h-20 object-contain">
        </div>

        <form action="{{ url('/books/store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <!-- Image -->
            <div>
                <label for="image" class="block font-semibold text-gray-700 mb-1">Image:</label>
                <input id="image" name="image" type="file" class="w-full border border-gray-300 p-2 rounded-lg file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                @error('image') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Title -->
            <div>
                <label for="title" class="block font-semibold text-gray-700 mb-1">Title:</label>
                <input id="title" name="title" type="text" value="{{ old('title') }}" placeholder="Enter the title"
                       class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Price -->
            <div>
                <label for="price" class="block font-semibold text-gray-700 mb-1">Price:</label>
                <input id="price" name="price" type="number" value="{{ old('price') }}" placeholder="Enter the price"
                       class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('price') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Category -->
            <div>
                <label for="categorie" class="block font-semibold text-gray-700 mb-1">Category:</label>
                <input id="categorie" name="categorie" type="text" value="{{ old('categorie') }}" placeholder="Enter the category"
                       class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('categorie') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Number of Pages -->
            <div>
                <label for="NombrePages" class="block font-semibold text-gray-700 mb-1">Number of Pages:</label>
                <input id="NombrePages" name="NombrePages" type="number" value="{{ old('NombrePages') }}" placeholder="Enter the number of pages"
                       class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('NombrePages') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Reviews -->
            <div>
                <label for="reviews" class="block font-semibold text-gray-700 mb-1">Reviews:</label>
                <input id="reviews" name="reviews" type="number" value="{{ old('reviews') }}" placeholder="Rate us"
                       class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('reviews') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block font-semibold text-gray-700 mb-1">Description:</label>
                <input id="description" name="description" type="text" value="{{ old('description') }}" placeholder="Short description"
                       class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('description') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Link -->
            <div>
                <label for="link" class="block font-semibold text-gray-700 mb-1">Book Link:</label>
                <input id="link" name="link" type="url" value="{{ old('link') }}" placeholder="https://example.com/book"
                       class="w-full border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('link') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-center pt-4">
                <input type="submit" value="Add Book"
                       class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-full transition duration-300 ease-in-out shadow-md hover:shadow-lg cursor-pointer">
            </div>
        </form>
    </div>

</body>
</html>
