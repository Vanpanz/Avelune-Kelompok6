<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Amenities</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="amenities-page">

    @include('components.navbar')

    <section class="hero hero-amenities">
        <div class="hero-overlay"></div>

        <div class="hero-content hero-content-center">
            <h1>AMENITIES</h1>
            <p class="hero-description">
                Reconnect with nature, indulge in comfort, and create memories that last a lifetime.
            </p>
        </div>
    </section>

    <section class="amenities-section">
        <div class="amenities-header">
            <h2>AMENITIES</h2>
            <p>Reconnect with nature, indulge in comfort, and create memories that last a lifetime.</p>
        </div>

        <div class="amenities-grid">
            <article class="amenity-card">
                <div class="amenity-image-wrapper">
                    <img class="amenity-card-img" src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80" alt="Lune Café">
                </div>
                <div class="amenity-content">
                    <h3>Lune Café</h3>
                    <p>A cozy retreat surrounded by nature, perfect for slow mornings, freshly brewed coffee, and light bites.</p>
                    <a href="{{ url('/amenities/lune-cafe') }}" class="btn-learn-more">
                        <span>LEARN MORE</span>
                        <span class="arrow">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="amenity-card">
                <div class="amenity-image-wrapper">
                    <img class="amenity-card-img" src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=800&q=80" alt="Lunelle Spa">
                </div>
                <div class="amenity-content">
                    <h3>Lunelle Spa</h3>
                    <p>A tranquil sanctuary offering restorative treatments designed to help you relax, recharge, and reconnect with yourself.</p>
                    <a href="{{ url('/amenities/lunelle-spa') }}" class="btn-learn-more">
                        <span>LEARN MORE</span>
                        <span class="arrow">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="amenity-card">
                <div class="amenity-image-wrapper">
                    <img class="amenity-card-img" src="https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?auto=format&fit=crop&w=800&q=80" alt="Serene Pool">
                </div>
                <div class="amenity-content">
                    <h3>Serene Pool</h3>
                    <p>An infinity pool overlooking breathtaking scenery, creating the perfect setting for peaceful swims and golden-hour moments.</p>
                    <a href="{{ url('/amenities/serene-pool') }}" class="btn-learn-more">
                        <span>LEARN MORE</span>
                        <span class="arrow">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="amenity-card">
                <div class="amenity-image-wrapper">
                    <img class="amenity-card-img" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Solara Lounge">
                </div>
                <div class="amenity-content">
                    <h3>Solara Lounge</h3>
                    <p>A peaceful forest hideaway where guests can unwind, enjoy quiet conversations, and take in the surrounding greenery.</p>
                    <a href="{{ url('/amenities/solara-lounge') }}" class="btn-learn-more">
                        <span>LEARN MORE</span>
                        <span class="arrow">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="amenity-card">
                <div class="amenity-image-wrapper">
                    <img class="amenity-card-img" src="https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?auto=format&fit=crop&w=800&q=80" alt="Serein Dining">
                </div>
                <div class="amenity-content">
                    <h3>Serein Dining</h3>
                    <p>An elegant dining destination serving thoughtfully crafted dishes in a warm and serene atmosphere inspired by the beauty of Avelune.</p>
                    <a href="{{ url('/amenities/serein-dining') }}" class="btn-learn-more">
                        <span>LEARN MORE</span>
                        <span class="arrow">&rsaquo;</span>
                    </a>
                </div>
            </article>

            <article class="amenity-card">
                <div class="amenity-image-wrapper">
                    <img class="amenity-card-img" src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=800&q=80" alt="Avelune Fitness">
                </div>
                <div class="amenity-content">
                    <h3>Avelune Fitness</h3>
                    <p>A contemporary wellness space equipped for energizing workouts, mindful movement, and maintaining your daily routine.</p>
                    <a href="{{ url('/amenities/avelune-fitness') }}" class="btn-learn-more">
                        <span>LEARN MORE</span>
                        <span class="arrow">&rsaquo;</span>
                    </a>
                </div>
            </article>
        </div>
    </section>

    <section class="seasons-section">
        <div class="seasons-grid">
            <div class="season-card">
                <img class="season-card-img" src="https://images.unsplash.com/photo-1462275646964-a0e3386b89fa?auto=format&fit=crop&w=800&q=80" alt="Spring">
                <div class="season-overlay">
                    <h2>SPRING</h2>
                </div>
            </div>

            <div class="season-card">
                <img class="season-card-img" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80" alt="Summer">
                <div class="season-overlay">
                    <h2>SUMMER</h2>
                </div>
            </div>

            <div class="season-card">
                <img class="season-card-img" src="https://images.unsplash.com/photo-1507187632231-5beb21a654a2?auto=format&fit=crop&w=800&q=80" alt="Autumn">
                <div class="season-overlay">
                    <h2>AUTUMN</h2>
                </div>
            </div>

            <div class="season-card">
                <img class="season-card-img" src="https://images.unsplash.com/photo-1483664852095-d6cc6870702d?auto=format&fit=crop&w=800&q=80" alt="Winter">
                <div class="season-overlay">
                    <h2>WINTER</h2>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

</body>

</html>