<header class="absolute left-0 right-0 top-0 z-10 mx-auto grid h-[90px] w-full max-w-[1718px] grid-cols-[1fr_auto_1fr] items-center px-[50px] text-white max-[900px]:h-[60px] max-[900px]:max-w-none max-[900px]:px-7 max-[600px]:px-4">

    <div class="flex items-center gap-[30px]">
        <button type="button" class="menu-button relative flex h-[42px] w-[42px] cursor-pointer items-center justify-center border-0 bg-black/35 text-[20px] text-white max-[900px]:h-7 max-[900px]:w-7 max-[900px]:text-base" aria-controls="account-menu" aria-expanded="false" aria-label="Open navigation menu">
            ☰
        </button>

        <div id="account-menu" class="absolute left-[50px] top-[68px] z-20 min-w-[190px] bg-[#f5f3ed] py-2 shadow-[0_8px_20px_rgba(0,0,0,0.2)] max-[900px]:left-5 max-[900px]:top-[50px]" hidden>
            <a href="{{ route('home') }}#home" class="hidden w-full px-4 py-[11px] text-left text-sm text-[#294b45] hover:bg-[#e9e4d9] max-[600px]:block">Home</a>
            <a href="{{ route('accommodation') }}" class="hidden w-full px-4 py-[11px] text-left text-sm text-[#294b45] hover:bg-[#e9e4d9] max-[600px]:block">Accommodation</a>
            <a href="{{ route('amenities') }}" class="hidden w-full px-4 py-[11px] text-left text-sm text-[#294b45] hover:bg-[#e9e4d9] max-[600px]:block">Amenities</a>
            <a href="{{ route('about-us') }}" class="hidden w-full px-4 py-[11px] text-left text-sm text-[#294b45] hover:bg-[#e9e4d9] max-[600px]:block">About us</a>
            <a href="{{ route('profiles') }}" class="block w-full px-4 py-[11px] text-left text-sm text-[#294b45] hover:bg-[#e9e4d9]">Profile</a>
            <a href="{{ route('login') }}" class="block w-full px-4 py-[11px] text-left text-sm text-[#294b45] hover:bg-[#e9e4d9]">Log in</a>
        </div>

        <a href="{{ route('home') }}#reservation" class="bg-[#a7793f] px-[22px] py-3 text-sm font-medium tracking-[1px] max-[900px]:px-[10px] max-[900px]:py-[6px] max-[900px]:text-[9px]">
            BOOK NOW
        </a>
    </div>

    <nav class="[align-items:center] [display:flex] [font-size:12px] [font-weight:500] [gap:30px] [justify-content:center] [white-space:nowrap] max-[900px]:[display:none]">
        <a href="{{ route('home') }}#home" class="[color:inherit] [text-decoration:none] [transition:.3s] hover:[color:#c69b61]">HOME</a>
        <a href="{{ route('accommodation') }}" class="[color:inherit] [text-decoration:none] [transition:.3s] hover:[color:#c69b61]">ACCOMMODATION</a>
        <a href="{{ route('amenities') }}" class="[color:inherit] [text-decoration:none] [transition:.3s] hover:[color:#c69b61]">AMENITIES</a>
        <a href="{{ route('about-us') }}" class="[color:inherit] [text-decoration:none] [transition:.3s] hover:[color:#c69b61]">ABOUT US</a>
    </nav>

    <div class="[align-items:center] [display:flex] [justify-content:flex-end]">
        <a href="{{ route('home') }}#home" class="[color:inherit] [text-decoration:none]">
            <img src="{{ asset('images/logo.png') }}" alt="Avelune" class="[height:50px] [object-fit:contain] [width:auto]">
        </a>
    </div>

</header>
