<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Learning Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <style>
    :root {
        --primary-color: #ffd700;
        --secondary-color: #4a90e2;
        --bg-dark: #1a1a2e;
        --nav-bg: #252542;
        --text-white: #ffffff;
        --text-light: #d1d1d1;
        --card-bg: rgba(255, 255, 255, 0.05);
        --card-hover: rgba(255, 255, 255, 0.1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--bg-dark);
        color: var(--text-white);
        line-height: 1.5;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-container {
        background-color: var(--nav-bg);
        border-radius: 8px;
        padding: 2rem;
        width: 100%;
        max-width: 400px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .login-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .login-header h1 {
        font-family: 'Oxanium', cursive;
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 0.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-light);
    }

    .form-group input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 4px;
        background-color: rgba(255, 255, 255, 0.05);
        color: var(--text-white);
        transition: all 0.3s ease;
    }

    .form-group input:focus {
        outline: none;
        border-color: var(--primary-color);
        background-color: rgba(255, 255, 255, 0.1);
    }

    .btn-login {
        width: 100%;
        padding: 0.75rem;
        background-color: var(--primary-color);
        border: none;
        border-radius: 4px;
        color: var(--bg-dark);
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
    }

    .alert {
        padding: 1rem;
        border-radius: 4px;
        margin-bottom: 1rem;
    }

    .alert-danger {
        background-color: rgba(255, 77, 77, 0.1);
        border: 1px solid rgba(255, 77, 77, 0.2);
        color: #ff4d4d;
    }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>LMS Login</h1>
            <p>Welcome back!</p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul style="list-style: none;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.authenticate') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>




