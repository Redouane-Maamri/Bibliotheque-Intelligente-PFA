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
            background: linear-gradient(135deg, #e0e0e0, #ffffff); /* Soft gradient */
            padding: 30px;
            margin: 20px auto;
            text-align: center;
            border: 10px;
            border-radius: 20px;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow for 3D effect */
        }

        /* General Input and Label Styling */
        .input {
            margin-bottom: 15px;
            text-align: left;
        }

        .input label {
            font-weight: bold;
            font-size: 16px;
            color: #333;
            display: block;
            margin-bottom: 5px; /* Spacing between label and input */
        }

        .input input {
            width: 100%;
            height: 40px;
            border-radius: 10px;
            padding: 0 10px;
            font-size: 16px;
            border: 1px solid #ccc; /* Light border color */
            transition: border 0.3s ease;
        }

        .input input:focus {
            border-color: #5a9bfc; /* Blue border on focus */
            outline: none; /* Remove outline */
        }

        /* Error message styling */
        span {
            color: red;
            font-weight: bold;
            font-size: 14px;
            display: block; /* Display errors as block to avoid overlap */
            margin-top: 5px;
        }

        /* Submit button styling */
        input[type="submit"] {
            background-color: #A9A9A9;
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
        input[type="submit"]:hover {
            background-color: #4a8bd2;
        }

        /* Heading styling */
        h3 {
            text-align: center;
            text-decoration: underline;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            font-size: 40px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Responsive Design for mobile devices */
        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
        }

    </style>
</head>
<body>

    <h3>Add a Book:</h3>
    <div class="container">

        <div class="add">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcCFnRzUbPw4-VN37pRyEjAmaje8tJfT_sZEEjqBsoJ5IIUqM-avb50fRUHwZYrYN9T_I&usqp=CAU" alt="" width="80px"><br>
        </div>

        <form action="{{url('/books/store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="input">
                <label for="image">Image:</label>
                <input id="image" value="{{old('image')}}" name="image" type="file" placeholder="Choose an image">
                @error('image')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="input">
                <label for="title">Title:</label>
                <input id="title" value="{{old('title')}}" name="title" type="text" placeholder="Enter the title">
                @error('title')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="input">
                <label for="price">Price:</label>
                <input id="price" value="{{old('price')}}" name="price" type="number" placeholder="Enter the price">
                @error('price')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="input">
                <label for="categorie">Category:</label>
                <input id="categorie" value="{{old('categorie')}}" name="categorie" type="text" placeholder="Enter the category">
                @error('categorie')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="input">
                <label for="NombrePages">NombrePages:</label>
                <input id="NombrePages" value="{{old('NombrePages')}}" name="NombrePages" type="number" placeholder="Enter the NbPages">
                @error('NombrePages')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="input">
                <label for="reviews">Reviews:</label>
                <input id="reviews" value="{{old('reviews')}}" name="reviews" type="number" placeholder="Rate Us">
                @error('reviews')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="input">
                <label for="description">Description:</label>
                <input id="description" value="{{old('description')}}" name="description" type="text" placeholder="Provide a short description">
                @error('description')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <div class="input">
                <label for="link">Book Link:</label>
                <input id="link" value="{{ old('link') }}" name="link" type="url" placeholder="https://example.com/book">
                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            

            <div class="input">
                <input class="btn btn-danger" type="submit" value="Add the Book">
            </div>
        </form>
    </div>

</body>
</html>
