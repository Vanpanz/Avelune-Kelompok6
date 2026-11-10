<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avelune - Login</title>

    @vite(['resources/css/app.css'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body class="login-page">

    <!-- Background -->
    <div class="login-background"></div>

    <!-- Avelune Logo -->
    <div class="login-logo">
        <div class="mountain-logo">
            <span></span>
        </div>

        <h1>AVELUNE</h1>
    </div>

    <!-- Login Card -->
    <div class="login-card">

        <div class="login-header">
            <h2>WELCOME BACK</h2>

            <p>
                Sign in to continue your Avelune journey
            </p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="form-group">

                <label for="email">
                    EMAIL ADDRESS
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                >

                @error('email')
                    <span class="error-message">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            <!-- Password -->
            <div class="form-group password-group">

                <label for="password">
                    PASSWORD
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="current-password"
                >

                <a href="#" class="forgot-password">
                    FORGET PASSWORD?
                </a>

                @error('password')
                    <span class="error-message">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            <!-- Login Button -->
            <button type="submit" class="login-button">
                LOG IN
            </button>

        </form>

        <!-- Divider -->
        <div class="divider">

            <span></span>

            <p>or continue with</p>

            <span></span>

        </div>

        <!-- Social Login -->
        <div class="social-login">

            <button type="button" class="social-button">
                <span class="google-icon">G</span>
            </button>

            <button type="button" class="social-button">
                <span class="apple-icon">●</span>
            </button>

        </div>

        <!-- Register -->
        <div class="register-text">
            Don't ave an account?

            <a href="{{ route('register') }}">
                Sign up
            </a>
        </div>

    </div>

</body>

</html>