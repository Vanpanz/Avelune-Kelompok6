<header class="sticky top-0 z-50 flex items-center justify-between gap-4 bg-[#2B433E] px-4 py-4 text-white shadow-sm md:px-10">

    <div class="[align-items:center] [display:flex] [gap:15px]">
        <button type="button" class="menu-button [align-items:center] [background-color:rgba(0,_0,_0,_.35)] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:white] [cursor:pointer] [display:flex] [font-size:20px] [height:42px] [justify-content:center] [position:relative] [width:42px]" aria-controls="account-menu" aria-expanded="false" aria-label="Open account menu">
            ☰
        </button>

        <div id="account-menu" class="[background-color:#f5f3ed] [box-shadow:0_8px_20px_rgba(0,_0,_0,_.2)] [left:50px] [min-width:150px] [padding-bottom:8px] [padding-left:0] [padding-right:0] [padding-top:8px] [position:absolute] [top:68px] [z-index:20] max-[900px]:[left:20px]" hidden>
            <a href="{{ route('profiles') }}" class="[background-color:transparent] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:#294b45] [cursor:pointer] [display:block] [font-family:inherit] [font-size:14px] [font-stretch:inherit] [font-style:inherit] [font-variant:inherit] [font-weight:inherit] [line-height:inherit] [padding-bottom:11px] [padding-left:16px] [padding-right:16px] [padding-top:11px] [text-align:left] [text-decoration:none] [width:100%] hover:[background-color:#e9e4d9]">Profile</a>
            <button type="button" class="[background-color:transparent] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:#294b45] [cursor:pointer] [display:block] [font-family:inherit] [font-size:14px] [font-stretch:inherit] [font-style:inherit] [font-variant:inherit] [font-weight:inherit] [line-height:inherit] [padding-bottom:11px] [padding-left:16px] [padding-right:16px] [padding-top:11px] [text-align:left] [width:100%] hover:[background-color:#e9e4d9]">Log out</button>
        </div>
    </div>

    <nav aria-label="Admin navigation" class="flex flex-wrap items-center mr-auto gap-x-4 gap-y-2 text-sm font-medium tracking-wide md:gap-x-8">
        <a href="{{ route('admin.bookings') }}"
            class="pb-1.5 transition-colors {{ request()->routeIs('admin.bookings') ? 'border-b-2 border-white font-semibold text-white' : 'text-gray-300 hover:text-white' }}"
            @if (request()->routeIs('admin.bookings')) aria-current="page" @endif>
            Bookings
        </a>
        <a href="{{ route('admin.available-room') }}"
            class="pb-1.5 transition-colors {{ request()->routeIs('admin.available-room') ? 'border-b-2 border-white font-semibold text-white' : 'text-gray-300 hover:text-white' }}"
            @if (request()->routeIs('admin.available-room')) aria-current="page" @endif>
            Available Room
        </a>
        <a href="{{ route('admin.cancelled-room') }}"
            class="pb-1.5 transition-colors {{ request()->routeIs('admin.cancelled-room') ? 'border-b-2 border-white font-semibold text-white' : 'text-gray-300 hover:text-white' }}"
            @if (request()->routeIs('admin.cancelled-room')) aria-current="page" @endif>
            Cancelled Room
        </a>
    </nav>

    <div class="[align-items:center] [display:flex] [justify-content:flex-end]">
        <a href="{{ route('home') }}#home" class="[color:inherit] [text-decoration:none]">
            <img src="{{ asset('images/Resort.png') }}" alt="Avelune" class="[height:50px] [object-fit:contain] [width:auto]">
        </a>
    </div>

</header>