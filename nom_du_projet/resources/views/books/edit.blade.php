<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Books</title>
    <style>
        /* Container styling */
        .container{
            width: 500px;
            height: auto;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2); /* Soft gradient */
            padding: 30px;
            margin: 20px auto;
            text-align: center;
            border: 10px;
            border-radius: 20px;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow for 3D effect */
        }

        /* Input field styling */
        .input input{
            width: 80%;
            height: 30px;
            border-radius: 10px;
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc; /* Light border color */
            transition: border 0.3s ease;
        }

        /* Input focus effect */
        .input input:focus {
            border-color: #5a9bfc; /* Blue border on focus */
            outline: none; /* Remove outline */
        }

        /* Heading styling */
        h3{
            text-align: center;
            text-decoration: underline;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            font-size: 40px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Error message styling */
        span{
            color: red;
            font-weight: bold;
            font-size: 16px;
            display: block; /* Display errors as block to avoid overlap */
            margin-top: 5px;
        }

        /* Submit button styling */
        input[type="submit"]{
            background-color: #5a9bfc;
            color: white;
            border: none;
            width: 200px;
            border-radius: 25px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        /* Submit button hover effect */
        input[type="submit"]:hover{
            background-color: #4a8bd2;
        }
    </style>
</head>
<body>

    <h3>Edit a Book:</h3>
    <div class="container">
        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method to update the resource -->

            <div class="input">
                <label for="image">Image: </label>
                <input id="image" name="image" type="file" placeholder="Choose an image"><br><br>
            
                <img style="border-radius: 10px" src="{{ asset('products/' . $book->image) }}" alt="Current Book Image" width="100"><br><br>
            
                <label for="title">Title: </label>
                <input id="title" name="title" type="text" value="{{ old('title', $book->title) }}" placeholder="Enter the title"><br><br>
            
                <label for="price">Price: </label>
                <input id="price" name="price" type="number" value="{{ old('price', $book->price) }}" placeholder="Enter the price"><br><br>
            
                <label for="categorie">Categorie: </label>
                <input id="categorie" name="categorie" type="text" value="{{ old('categorie', $book->categorie) }}" placeholder="Enter the categorie"><br><br>
            
                <input id="NombrePages" name="NombrePages" type="number" value="{{ old('NombrePages', $book->NombrePages) }}" placeholder="Enter the number of pages"><br><br>
            
                <label for="reviews">Reviews: </label>
                <input id="reviews" name="reviews" type="number" value="{{ old('reviews', $book->reviews) }}" placeholder="Rate Us"><br><br>
            
                <label for="description">Description: </label>
                <input id="description" name="description" type="text" value="{{ old('description', $book->description) }}" placeholder="Give description"><br><br>
            
                <label for="link">Link: </label>
                <input id="link" name="link" type="text" value="{{ old('link', $book->link) }}" placeholder="Change link"><br><br>
            
                <input type="submit" value="Update the Book"/>
            </div>
            

</body>
</html>
