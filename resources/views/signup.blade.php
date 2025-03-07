<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('/complite/resources/css/Student/inActivity.css') }}">
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="logo">CompLite</div>
            <h2 class="title">Create an Account</h2>
            <form class="login-form" action="/signup" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Choose a username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Create a password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required placeholder="Repeat your password">
                </div>
                <button type="submit" class="login-btn">Sign Up</button>
            </form>
            <div class="login-link">
                Already have an account? <a href="/index.html">Log In</a>
            </div>
        </div>
    </div>
</body>
</html>