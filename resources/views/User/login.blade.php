<!DOCTYPE html>
<html lang="en" class="[scroll-behavior:smooth]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avelune - Login</title>

    @vite(['resources/css/app.css'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">

</head>

<body class="[align-items:center] [background-color:#f5f3ed] [color:#294c44] [display:flex] [font-family:'Montserrat',_sans-serif] [justify-content:center] [min-height:100vh] [overflow:hidden] [position:relative] [width:100%]">

    <!-- Background -->
    <div class="[background-image:linear-gradient(_rgba(0,_0,_0,_0.25),_rgba(0,_0,_0,_0.25)_),_url('/images/login-bg.jpg')] [background-position:center] [background-size:cover] [inset:0] [position:fixed] [z-index:-2]"></div>

    <!-- Avelune Logo -->
    <div class="[color:white] [left:45px] [position:fixed] [top:40px] [z-index:5]">
        <div class="[height:38px] [left:5px] [position:absolute] [top:-28px] [width:185px]"><div class='[background-color:white] [content:""] [height:1px] [left:5px] [position:absolute] [top:28px] [transform-origin:left_center] [transform:rotate(-27deg)] [width:70px]'></div><div class='[background-color:white] [content:""] [height:1px] [left:65px] [position:absolute] [top:0] [transform-origin:left_center] [transform:rotate(32deg)] [width:65px]'></div><span class="[background-color:white] [height:1px] [left:115px] [position:absolute] [top:23px] [transform:rotate(27deg)] [width:85px]"></span>
        </div>

        <h1 class="[font-family:'Playfair_Display',_serif] [font-size:40px] [font-weight:600] [letter-spacing:1px]">AVELUNE</h1>
    </div>

    <!-- Login Card -->
    <div class="[background-color:rgba(255,_255,_255,_0.97)] [border-bottom-left-radius:32px] [border-bottom-right-radius:32px] [border-top-left-radius:32px] [border-top-right-radius:32px] [box-shadow:0_20px_60px_rgba(0,_0,_0,_0.15)] [display:flex] [flex-direction:column] [margin-top:15px] [min-height:875px] [padding-bottom:50px] [padding-left:69px] [padding-right:69px] [padding-top:35px] [width:665px]">

        <div class="[margin-bottom:32px] [text-align:center]">
            <h2 class="[color:#294c44] [font-family:'Montserrat',_sans-serif] [font-size:46px] [font-weight:400] [letter-spacing:-1.5px] [margin-bottom:8px]">WELCOME BACK</h2>

            <p class="[color:#294c44] [font-size:21px] [font-weight:400] [letter-spacing:1px]">
                Sign in to continue your Avelune journey
            </p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="[margin-bottom:1rem] [position:relative]">

                <label for="email" class="[display:block] [font-size:15px] [line-height:1.45] [margin-bottom:9px] [margin-left:2px]">
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
            <div class="password-group [margin-bottom:1rem] [position:relative]">

                <label for="password" class="[display:block] [font-size:15px] [line-height:1.45] [margin-bottom:9px] [margin-left:2px]">
                    PASSWORD
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="h-11 w-full rounded-md border border-[#555] bg-white px-3 text-sm text-[#294c44] outline-none transition focus:border-[#294c44] focus:ring-2 focus:ring-[#294c44]/20"
                >

                <a href="#" class="forgot-password [color:inherit] [text-decoration:none]">
                    FORGET PASSWORD?
                </a>

                @error('password')
                    <span class="mt-1 block text-xs text-red-600">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            <!-- Login Button -->
            <button type="submit" class="h-10 w-full bg-[#294c44] text-lg font-medium text-white transition hover:bg-[#1c382b] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#294c44]">
                LOG IN
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
            <p>or continue with</p>
            <span class="h-px flex-1 bg-gray-400"></span>
        </div>

        <!-- Social Login -->
        <div class="flex flex-col gap-4 px-1">
            <a href="{{ route('google.redirect') }}" aria-label="Continue with Google" class="flex h-10 w-full items-center justify-center border border-[#80918b] bg-white text-sm font-medium text-[#294c44] transition hover:bg-gray-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#294c44]">
                <span>Continue with Google</span>
            </a>

            <button type="button" aria-label="Continue with Apple" class="h-10 w-full border border-[#80918b] bg-white transition hover:bg-gray-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#294c44]">
            </button>
        </div>

        <!-- Register -->
        <div class="mt-8 text-center text-xs text-[#294c44]">
            Don't have an account?

            <a href="{{ route('register') }}" class="[color:inherit] [text-decoration:none]">
                Sign up
            </a>
        </div>

    </main>

</body>

</html>