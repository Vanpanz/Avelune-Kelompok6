<header class="navbar">

    <div class="nav-left">
        <button type="button" class="menu-button" aria-controls="account-menu" aria-expanded="false" aria-label="Open account menu">
            ☰
        </button>

        <div id="account-menu" class="account-menu" hidden>
            <a href="#profile" class="account-menu-item">Profile</a>
            <button type="button" class="account-menu-item">Log out</button>
        </div>

        <a href="{{ route('home') }}#reservation" class="book-button">
            BOOK NOW
        </a>
    </div>

    <nav class="navigation">
        <a href="{{ route('home') }}#home">HOME</a>
        <a href="{{ route('accommodation') }}">ACCOMMODATION</a>
        <a href="{{ route('amenities') }}">AMENITIES</a>
        <a href="{{ route('about-us') }}">ABOUT US</a>
    </nav>

    <div class="logo">
        <a href="{{ route('home') }}#home">
            <img src="{{ asset('images/logo.png') }}" alt="Avelune" class="logo-img">
        </a>
    </div>

</header>
