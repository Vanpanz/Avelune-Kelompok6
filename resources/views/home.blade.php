<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Avelune - Where Nature Meets Serenity</title>

    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"rel="stylesheet">
</head>

<body>

    @include('components.navbar')

    <section id="home" class="hero">

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <p class="hero-small">
                ESCAPE TO
            </p>

            <h1>AVELUNE</h1>

            <p class="hero-subtitle">
                Where Nature<br>
                Meets Serenity.
            </p>

            <a href="#about" class="discover-button">
                DISCOVER MORE
            </a>

        </div>

        <div id="reservation" class="booking-bar">

            <div class="booking-intro">
                <small>
                    struggling to find an<br>
                    available room?
                </small>

                <strong>
                    FIND IT HERE!
                </strong>
            </div>

            <div class="booking-item">
                <label>CHECK-IN</label>
                <div class="booking-value booking-calendar-value">
                    <span>May 24, 2026</span>
                    <img class="calendar-icon" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
                </div>
            </div>

            <div class="booking-item">
                <label>CHECK-OUT</label>
                <div class="booking-value booking-calendar-value">
                    <span>May 24, 2026</span>
                    <img class="calendar-icon" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
                </div>
            </div>

            <button class="search-button">
                SEARCH
            </button>

        </div>

    </section>

    <section id="amenities" class="amenities">

        <div class="section-title">
            <h2>THE AVELUNE AMENITIES</h2>
        </div>

        <div class="amenities-grid">

            <div class="amenity">
                <img class="amenity-image" src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=800&q=80" alt="Café">
                <h3>Café</h3>
                <p>Cozy Coffee<br>Moments</p>
            </div>

            <div class="amenity">
                <img class="amenity-image" src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=800&q=80" alt="Spa">
                <h3>Spa</h3>
                <p>Relaxing<br>Treatments</p>
            </div>

            <div class="amenity">
                <img class="amenity-image" src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=800&q=80" alt="Restaurant">
                <h3>Restaurant</h3>
                <p>Elevated Dining<br>Experience</p>
            </div>

            <div class="amenity">
                <img class="amenity-image" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80" alt="Infinity Pool">
                <h3>Infinity Pool</h3>
                <p>Endless<br>Views</p>
            </div>

            <div class="amenity">
                <img class="amenity-image" src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=800&q=80" alt="Lounge">
                <h3>Lounge</h3>
                <p>Serene Nature<br>Retreat</p>
            </div>

        </div>

        <p class="section-caption">
            Thoughtfully curated for your stay
        </p>

    </section>

    <section id="rooms" class="rooms">

        <div class="rooms-heading">

            <p>ROOMS &amp; SUITES</p>

            <h2>
                Stay in Coastal Elegance
            </h2>

        </div>

        <div class="rooms-grid">

            <article class="room-card">

                <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1000&q=80"
                    alt="Mistwood Suite">

                <div class="room-content">

                    <h3>Mistwood Suite</h3>

                    <p>
                        A cozy retreat surrounded by lush greenery,
                        with a private balcony and peaceful forest views.
                    </p>

                    <div class="room-bottom">

                        <span>
                            From <strong>$280</strong> / night
                        </span>

                        <a href="#" class="room-arrow">
                            →
                        </a>

                    </div>

                </div>

            </article>

            <article class="room-card">

                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=80"
                    alt="Willowmere Suite">

                <div class="room-content">

                    <h3>Willowmere Suite</h3>

                    <p>
                        A spacious suite featuring sweeping mountain views,
                        warm interiors, and a relaxing private terrace.
                    </p>

                    <div class="room-bottom">

                        <span>
                            From <strong>$175</strong> / night
                        </span>

                        <a href="#" class="room-arrow">
                            →
                        </a>

                    </div>

                </div>

            </article>

            <article class="room-card">

                <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=80"
                    alt="Evermist Suite">

                <div class="room-content">

                    <h3>Evermist Suite</h3>

                    <p>
                        An elegant escape with panoramic mountain scenery,
                        refined interiors, and a serene atmosphere.
                    </p>

                    <div class="room-bottom">

                        <span>
                            From <strong>$280</strong> / night
                        </span>

                        <a href="#" class="room-arrow">
                            →
                        </a>

                    </div>

                </div>

            </article>

        </div>

        <p class="rooms-caption">
            Thoughtfully designed spaces that blend luxury with nature
        </p>

    </section>

    <section id="about" class="about">

        <div class="about-text">

            <span class="about-label">
                AVELUNE
            </span>

            <h2>
                A Sanctuary by the Hill
            </h2>

            <p>
                Nestled among the hills and surrounded by quiet woodland,
                Avelune is a retreat designed to bring you closer to nature.
                Wake beside the infinity pool, and savor thoughtful moments
                in our forest-inspired spaces.
            </p>

        </div>

        <div class="about-images">

            <img class="about-image-large"
                src="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=1200&q=80"
                alt="Avelune infinity pool">

            <img class="about-image-small"
                src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1000&q=80"
                alt="Avelune restaurant">

        </div>

    </section>

    @include('components.footer')

</body>

</html>

