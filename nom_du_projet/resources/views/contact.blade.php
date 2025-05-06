<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        

        .container {
            
            display: flex;
            width: 80%;
            background: white;
            text-align: center;
            padding: 20px;
            margin-left: 10%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex-wrap: wrap;
        }

        .left-side, .right-side {
            width: 50%;
            padding: 20px;
        }

        .adress-details {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .adress-details i {
            font-size: 24px;
            color: #007bff;
            margin-right: 15px;
        }

        .topic {
            font-weight: bold;
            font-size: 18px;
            color: #333;
        }

        .text-one, .text-two {
            font-size: 16px;
            color: #555;
        }

        .right-side p {
            margin: 10px 0;
            color: #555;
        }

        .input-box {
            margin-bottom: 15px;
        }

        .input-box input, .message-box textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
        }

        .button button {
            width: 100%;
            padding: 10px;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        h2{
            font-weight: bold;
            text-align: center;
            font-size: 25px
        }

        
    </style> 
</head>
<body>

    <h2>Contact Us :</h2>

    <div class="container">

        <div class="left-side">
            <!-- Address Section -->
            <div class="adress-details">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <div class="topic">Address</div>
                    <div class="text-one">Casablanca</div>
                    <div class="text-two">Moumen 06</div>
                </div>
            </div>

            <!-- Phone Section -->
            <div class="adress-details">
                <i class="fas fa-phone-alt"></i>
                <div>
                    <div class="topic">Phone</div>
                    <div class="text-one">+212 600 000 000</div>
                    <div class="text-two">+212 611 111 111</div>
                </div>
            </div>

            <!-- Email Section -->
            <div class="adress-details">
                <i class="fas fa-envelope"></i>
                <div>
                    <div class="topic">Email</div>
                    <div class="text-one">contact@ebooks.com</div>
                    <div class="text-two">support@ebooks.com</div>
                </div>
            </div>
        </div>

        <div class="right-side">
            <div class="topic-text">Send Us a Message</div>
            <p>If you have any issues, feel free to contact us.</p>

            <form action="{{ route('contact.store') }}" method="POST">

                @csrf
                <div class="input-box">
                    <input type="text" placeholder="Enter your name" name="name" required>
                </div>

                @error('name')
                    <span>{{$message}}</span>
                @enderror

                <div class="input-box">
                    <input type="email" placeholder="Enter your email" name="email" required>
                </div>

                @error('email')
                    <span>{{$message}}</span>
                @enderror

                <div class="input-box message-box">
                    <textarea placeholder="Enter your message" rows="4" name="message" required></textarea>
                </div>

                @error('message')
                    <span>{{$message}}</span>
                @enderror

                <div class="button">
                    <button type="submit">Send Now</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
