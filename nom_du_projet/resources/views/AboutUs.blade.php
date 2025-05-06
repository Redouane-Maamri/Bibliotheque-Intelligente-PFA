<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>À propos - E__Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .about-container {
            display: flex;
            align-items: center;

            padding: 50px;
            gap: 150px;
            max-width: 1000px;
            margin: auto;
        }
        .about-text {
            max-width: 500px;
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            line-height: 1.6;
            font-size: 18px;
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: greenyellow;
        }
        .about-img {
            width: 100%;
            max-width: 450px;
            border-radius: 20px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-container {
                flex-direction: column;
                text-align: center;
            }
            .about-img {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="about-container">
        <!-- Image on the left -->
        <img src="https://s26162.pcdn.co/wp-content/uploads/sites/2/2022/05/Best-Reviewed-Books.jpeg" alt="Bibliothèque" class="about-img">
        
        <!-- Text on the right -->
        <div class="about-text">
            <h2>About E__Books</h2>
            <p>
                E__Books est une plateforme dédiée aux amoureux des livres. Notre mission est de rendre 
                la lecture accessible à tous en offrant une vaste collection de livres numériques et physiques.
            </p>
            <a href="{{ route('books.index') }}" class="btn">En savoir plus</a>
        </div>
    </div>

</body>
</html>
