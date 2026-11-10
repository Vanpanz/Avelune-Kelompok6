<header class="[align-items:center] [color:white] [display:grid] [grid-template-columns:1fr_auto_1fr] [height:90px] [left:0] [margin-bottom:0] [margin-left:auto] [margin-right:auto] [margin-top:0] [max-width:1718px] [padding-bottom:0] [padding-left:50px] [padding-right:50px] [padding-top:0] [position:absolute] [right:0] [top:0] [width:100%] [z-index:10] max-[900px]:[max-width:none] max-[900px]:[padding-bottom:0] max-[900px]:[padding-left:20px] max-[900px]:[padding-right:20px] max-[900px]:[padding-top:0] max-[900px]:[width:100%]">

    <div class="[align-items:center] [display:flex] [gap:15px]">
        <button type="button" class="menu-button [align-items:center] [background-color:rgba(0,_0,_0,_.35)] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:white] [cursor:pointer] [display:flex] [font-size:20px] [height:42px] [justify-content:center] [position:relative] [width:42px]" aria-controls="account-menu" aria-expanded="false" aria-label="Open account menu">
            ☰
        </button>

        <div id="account-menu" class="[background-color:#f5f3ed] [box-shadow:0_8px_20px_rgba(0,_0,_0,_.2)] [left:50px] [min-width:150px] [padding-bottom:8px] [padding-left:0] [padding-right:0] [padding-top:8px] [position:absolute] [top:68px] [z-index:20] max-[900px]:[left:20px]" hidden>
            <a href="{{ route('profiles') }}" class="[background-color:transparent] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:#294b45] [cursor:pointer] [display:block] [font-family:inherit] [font-size:14px] [font-stretch:inherit] [font-style:inherit] [font-variant:inherit] [font-weight:inherit] [line-height:inherit] [padding-bottom:11px] [padding-left:16px] [padding-right:16px] [padding-top:11px] [text-align:left] [text-decoration:none] [width:100%] hover:[background-color:#e9e4d9]">Profile</a>
            <button type="button" class="[background-color:transparent] [border-bottom-color:currentColor] [border-bottom-style:none] [border-bottom-width:medium] [border-left-color:currentColor] [border-left-style:none] [border-left-width:medium] [border-right-color:currentColor] [border-right-style:none] [border-right-width:medium] [border-top-color:currentColor] [border-top-style:none] [border-top-width:medium] [color:#294b45] [cursor:pointer] [display:block] [font-family:inherit] [font-size:14px] [font-stretch:inherit] [font-style:inherit] [font-variant:inherit] [font-weight:inherit] [line-height:inherit] [padding-bottom:11px] [padding-left:16px] [padding-right:16px] [padding-top:11px] [text-align:left] [width:100%] hover:[background-color:#e9e4d9]">Log out</button>
        </div>

        <a href="{{ route('home') }}#reservation" class="[background-color:#a7793f] [color:inherit] [font-size:14px] [font-weight:500] [letter-spacing:1px] [padding-bottom:12px] [padding-left:22px] [padding-right:22px] [padding-top:12px] [text-decoration:none]">
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
