<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
        .btn-signup {
            background-color: #ff4d4d;
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
        <h1 class="center-text">Sign Up</h1>
        <p class="center-text">Create an Account, It's free</p>
        <form id="signupForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="error" id="emailError"></div>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required pattern="\d{10}">
                <div class="error" id="mobileError"></div>
            </div>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
                <div class="error" id="fullNameError"></div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?!.*\s).{8,}">
                <div class="error" id="passwordError"></div>
            </div>
            <div class="form-group">
                <label for="passwordConfirm">Confirm Password</label>
                <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" required>
                <div class="error" id="passwordConfirmError"></div>
            </div>
            <div class="form-group">
                <label for="profileImage">Profile Image</label>
                <input type="file" class="form-control" id="profileImage" name="profileImage" accept=".jpg, .png .jpeg" required>
                <div class="error" id="profileImageError"></div>
            </div>
            <button type="submit" class="btn btn-custom btn-signup">Sign Up</button>
            <p class="center-text">Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
    <script>
        // Function to validate email
        function validateEmail(email) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        // Function to validate mobile number
        function validateMobile(mobile) {
            var mobilePattern = /^\d{10}$/;
            return mobilePattern.test(mobile);
        }

        // Function to validate full name
        function validateFullName(fullName) {
            var fullNamePattern = /^\s*([A-Za-z]+)\s+([A-Za-z]+)\s+([A-Za-z]+)\s+([A-Za-z]+)\s*$/;
            return fullNamePattern.test(fullName);
        }

        // Function to validate password
        function validatePassword(password) {
            var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?!.*\s).{8,}$/;
            return passwordPattern.test(password);
        }

        // Add blur event listeners for validation
        document.getElementById('email').addEventListener('blur', function() {
            var emailError = document.getElementById('emailError');
            emailError.textContent = validateEmail(this.value) ? '' : 'Please enter a valid email address.';
        });

        document.getElementById('mobile').addEventListener('blur', function() {
            var mobileError = document.getElementById('mobileError');
            mobileError.textContent = validateMobile(this.value) ? '' : 'Please enter a valid 10-digit mobile number.';
        });

        document.getElementById('fullName').addEventListener('blur', function() {
            var fullNameError = document.getElementById('fullNameError');
            fullNameError.textContent = validateFullName(this.value) ? '' : 'Please enter your full name with four sections (e.g., First Middle Last Family).';
        });

        document.getElementById('password').addEventListener('blur', function() {
            var passwordError = document.getElementById('passwordError');
            passwordError.textContent = validatePassword(this.value) ? '' : 'Password must be at least 8 characters long and contain an upper case letter, a lower case letter, a number, and a special character.';
        });

        document.getElementById('passwordConfirm').addEventListener('blur', function() {
            var passwordConfirmError = document.getElementById('passwordConfirmError');
            var password = document.getElementById('password').value;
            passwordConfirmError.textContent = (this.value === password) ? '' : 'Passwords do not match.';
        });

        document.getElementById('profileImage').addEventListener('blur', function() {
            var profileImageError = document.getElementById('profileImageError');
            profileImageError.textContent = this.files.length > 0 ? '' : 'Please upload a profile image.';
        });

        // Signup form submission
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var isValid = true;

            var email = document.getElementById('email').value;
            var mobile = document.getElementById('mobile').value;
            var fullName = document.getElementById('fullName').value;
            var password = document.getElementById('password').value;
            var passwordConfirm = document.getElementById('passwordConfirm').value;
            var profileImage = document.getElementById('profileImage').files;

            var emailError = document.getElementById('emailError');
            var mobileError = document.getElementById('mobileError');
            var fullNameError = document.getElementById('fullNameError');
            var passwordError = document.getElementById('passwordError');
            var passwordConfirmError = document.getElementById('passwordConfirmError');
            var profileImageError = document.getElementById('profileImageError');

            emailError.textContent = '';
            mobileError.textContent = '';
            fullNameError.textContent = '';
            passwordError.textContent = '';
            passwordConfirmError.textContent = '';
            profileImageError.textContent = '';

            if (!validateEmail(email)) {
                emailError.textContent = 'Please enter a valid email address.';
                isValid = false;
            }

            if (!validateMobile(mobile)) {
                mobileError.textContent = 'Please enter a valid 10-digit mobile number.';
                isValid = false;
            }

            if (!validateFullName(fullName)) {
                fullNameError.textContent = 'Please enter your full name with four sections (e.g., First Middle Last Family).';
                isValid = false;
            }

            if (!validatePassword(password)) {
                passwordError.textContent = 'Password must be at least 8 characters long and contain an upper case letter, a lower case letter, a number, and a special character.';
                isValid = false;
            }

            if (password !== passwordConfirm) {
                passwordConfirmError.textContent = 'Passwords do not match.';
                isValid = false;
            }

            if (profileImage.length === 0) {
                profileImageError.textContent = 'Please upload a profile image.';
                isValid = false;
            }

            if (isValid) {
                alert('Form submitted successfully!');
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
