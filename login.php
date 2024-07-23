<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            max-width: 400px;
        }
        .btn-custom {
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            font-size: 18px;
        }
        .btn-login {
            background-color: #007bff;
            color: white;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .center-text {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="center-text">Login</h1>
        <p class="center-text">Welcome back! Login with your credentials</p>
        <form id="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="error" id="emailError"></div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="error" id="passwordError"></div>
            </div>
            <button type="submit" class="btn btn-custom btn-login">Login</button>
            <p class="center-text">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </form>
    </div>
    <script>
        // Function to validate email
        function validateEmail(email) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        // Add blur event listeners for validation
        document.getElementById('email').addEventListener('blur', function() {
            var emailError = document.getElementById('emailError');
            emailError.textContent = validateEmail(this.value) ? '' : 'Please enter a valid email address.';
        });

        document.getElementById('password').addEventListener('blur', function() {
            var passwordError = document.getElementById('passwordError');
            passwordError.textContent = this.value ? '' : 'Please enter your password.';
        });

        // Login form submission
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var isValid = true;

            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            var emailError = document.getElementById('emailError');
            var passwordError = document.getElementById('passwordError');

            emailError.textContent = '';
            passwordError.textContent = '';

            if (!validateEmail(email)) {
                emailError.textContent = 'Please enter a valid email address.';
                isValid = false;
            }

            if (!password) {
                passwordError.textContent = 'Please enter your password.';
                isValid = false;
            }

            if (isValid) {
                alert('Login successful!');
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
