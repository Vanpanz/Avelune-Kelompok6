<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

<body class="relative flex min-h-screen w-full items-center justify-center overflow-hidden font-montserrat text-[#294c44]">

    <!-- Background -->
    <div class="fixed inset-0 z-[-2] bg-[linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0.25)),url('/images/login-bg.jpg')] bg-cover bg-center"></div>

    <!-- Avelune Logo -->
    <div class="fixed left-[45px] top-10 z-[5] text-white">
        <div class="absolute left-[5px] top-[-28px] h-[38px] w-[185px] before:absolute before:left-[5px] before:top-7 before:h-px before:w-[70px] before:origin-left before:rotate-[-27deg] before:bg-white before:content-[''] after:absolute after:left-[65px] after:top-0 after:h-px after:w-[65px] after:origin-left after:rotate-[32deg] after:bg-white after:content-['']">
            <span class="absolute left-[115px] top-[23px] h-px w-[85px] rotate-[27deg] bg-white"></span>
        </div>

        <h1 class="font-playfair text-[40px] font-semibold tracking-[1px]">AVELUNE</h1>
    </div>

    <!-- Login Card -->
    <div class="mt-[15px] flex min-h-[875px] w-[665px] flex-col rounded-[32px] bg-white/[0.97] px-[69px] pb-[50px] pt-[35px] shadow-[0_20px_60px_rgba(0,0,0,0.15)]">

        <div class="mb-8 text-center">
            <h2 class="mb-2 font-montserrat text-[46px] font-normal tracking-[-1.5px] text-[#294c44]">WELCOME BACK</h2>

            <p class="text-[21px] font-normal tracking-[1px] text-[#294c44]">
                Sign in to continue your Avelune journey
            </p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="relative mb-10">

                <label for="email" class="mb-[9px] ml-0.5 block text-[15px] leading-[1.45]">
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
            <div class="relative mb-10">

                <label for="password" class="mb-[9px] ml-0.5 block text-[15px] leading-[1.45]">
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

            @if (Route::has('register'))
                <a href="{{ route('register') }}">
                    Sign up
                </a>
            @endif
        </div>

    </div>

</body>

</html>