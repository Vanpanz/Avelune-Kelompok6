<header class="navbar">

    <div class="nav-left">
        <button class="menu-button">
            ☰
        </button>

        <a href="{{ route('home') }}#reservation" class="book-button">
            BOOK NOW
        </a>
    </div>

    <nav class="navigation">
        <a href="{{ route('home') }}#home">HOME</a>
        <a href="{{ route('accommodation') }}">ACCOMMODATION</a>
        <a href="{{ route('amenities') }}">AMENITIES</a>
        <a href="{{ route('home') }}#reservation">RESERVATION</a>
        <a href="{{ route('home') }}#about">ABOUT US</a>
    </nav>

    <div class="logo">
        <a href="{{ route('home') }}#home">
            <img src="{{ asset('images/logo.png') }}" alt="Avelune" class="logo-img">
        </a>
    </div>

</header>
