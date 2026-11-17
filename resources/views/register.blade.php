<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avelune - Sign Up</title>

    @vite(['resources/css/app.css'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

</head>

<body class="relative flex min-h-screen w-full items-center justify-center overflow-x-hidden bg-[#1c382b] px-4 py-8 font-montserrat text-[#294c44]">

    <!-- Background -->
    <img class="fixed inset-0 -z-10 h-full w-full object-cover" src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85" alt="">
    <div class="fixed inset-0 -z-10 bg-black/35"></div>

    <!-- Avelune Logo -->
    <a href="{{ route('home') }}" aria-label="Avelune home" class="fixed left-6 top-8 z-10 text-white transition-opacity hover:opacity-80 sm:left-10 sm:top-8">
        <div class="relative mb-1 ml-1 h-7 w-36 before:absolute before:left-0 before:top-5 before:h-px before:w-12 before:origin-left before:rotate-[-35deg] before:bg-white before:content-[''] after:absolute after:left-10 after:top-0 after:h-px after:w-12 after:origin-left after:rotate-[35deg] after:bg-white after:content-['']">
            <span class="absolute left-[5.1rem] top-5 h-px w-12 rotate-[28deg] bg-white"></span>
        </div>

        <h1 class="font-playfair text-3xl font-semibold tracking-wide sm:text-[34px]">AVELUNE</h1>
    </a>

    <!-- Sign Up Card -->
    <main class="my-16 flex min-h-[760px] w-full max-w-[500px] flex-col rounded-[24px] bg-white/[0.97] px-7 py-8 shadow-[0_20px_60px_rgba(0,0,0,0.2)] sm:px-[50px] sm:py-8">

        <div class="mb-7 text-center">
            <h2 class="mb-1 font-montserrat text-3xl font-normal tracking-[-1px] text-[#294c44] sm:text-[36px]">CREATE ACCOUNT</h2>

            <p class="text-sm font-normal tracking-[0.5px] text-[#294c44] sm:text-base">
                Sign up to begin your Avelune journey
            </p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="relative mb-5">
                <label for="name" class="mb-2 ml-0.5 block text-xs font-semibold leading-[1.45]">
                    FULL NAME
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autocomplete="name"
                    class="h-11 w-full rounded-md border border-[#555] bg-white px-3 text-sm text-[#294c44] outline-none transition focus:border-[#294c44] focus:ring-2 focus:ring-[#294c44]/20"
                >

                @error('name')
                    <span class="mt-1 block text-xs text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Email -->
            <div class="relative mb-5">
                <label for="email" class="mb-2 ml-0.5 block text-xs font-semibold leading-[1.45]">
                    EMAIL ADDRESS
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    class="h-11 w-full rounded-md border border-[#555] bg-white px-3 text-sm text-[#294c44] outline-none transition focus:border-[#294c44] focus:ring-2 focus:ring-[#294c44]/20"
                >

                @error('email')
                    <span class="mt-1 block text-xs text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="relative mb-5">
                <label for="password" class="mb-2 ml-0.5 block text-xs font-semibold leading-[1.45]">
                    PASSWORD
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    class="h-11 w-full rounded-md border border-[#555] bg-white px-3 text-sm text-[#294c44] outline-none transition focus:border-[#294c44] focus:ring-2 focus:ring-[#294c44]/20"
                >

                @error('password')
                    <span class="mt-1 block text-xs text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="relative mb-7">
                <label for="password_confirmation" class="mb-2 ml-0.5 block text-xs font-semibold leading-[1.45]">
                    CONFIRM PASSWORD
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="h-11 w-full rounded-md border border-[#555] bg-white px-3 text-sm text-[#294c44] outline-none transition focus:border-[#294c44] focus:ring-2 focus:ring-[#294c44]/20"
                >
            </div>

            <!-- Sign Up Button -->
            <button type="submit" class="h-10 w-full bg-[#294c44] text-lg font-medium text-white transition hover:bg-[#1c382b] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#294c44]">
                SIGN UP
            </button>
        </form>

        @error('google')
            <p role="alert" class="mt-4 text-center text-sm text-red-600">
                {{ $message }}
            </p>
        @enderror

        <!-- Divider -->
        <div class="my-5 flex items-center gap-4 text-xs text-[#60746e]">
            <span class="h-px flex-1 bg-gray-400"></span>
            <p>or sign up with</p>
            <span class="h-px flex-1 bg-gray-400"></span>
        </div>

        <!-- Social Sign Up -->
        <div class="flex flex-col gap-4 px-1">
            <a href="{{ route('google.redirect') }}" aria-label="Sign up with Google" class="flex h-10 w-full items-center justify-center border border-[#80918b] bg-white text-sm font-medium text-[#294c44] transition hover:bg-gray-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#294c44]">
                <span>Continue with Google</span>
            </a>

            <button type="button" aria-label="Sign up with Apple" class="h-10 w-full border border-[#80918b] bg-white transition hover:bg-gray-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#294c44]">
            </button>
        </div>

        <!-- Sign In -->
        <div class="mt-8 text-center text-xs text-[#294c44]">
            Already have an account?

            <a href="{{ route('login') }}" class="ml-1 font-semibold text-[#b58950] hover:underline">
                Sign in
            </a>
        </div>

    </main>

</body>

</html>
