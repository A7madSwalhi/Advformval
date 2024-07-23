<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .container {
            text-align: center;
            max-width: 500px;
        }
        .btn-custom {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border-radius: 20px;
            font-size: 18px;
        }
        .btn-login {
            background-color: #007bff;
            color: white;
        }
        .btn-signup {
            background-color: #ff4d4d;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello There!</h1>
        <p>Automatic identity verification which enables you to verify your identity</p>
        <img src="https://img.freepik.com/free-vector/interesting-chemistry-facts-online-searching-self-education-exam-preparing-internet-surfing-man-woman-characters-browsing-scientific-website_335657-3273.jpg?t=st=1721695945~exp=1721699545~hmac=b4f11c7a3194cfdc5f7a8b36b8ff5e8740affffa9070c62ba8e3b63274488d97&w=740" class="img-fluid mb-3" alt="Illustration" width="300">
        <button class="btn btn-custom btn-login" onclick="location.href='login.php'">Login</button>
        <button class="btn btn-custom btn-signup" onclick="location.href='signup.php'">Sign Up</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
