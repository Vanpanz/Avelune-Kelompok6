<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Accommodation</title>

    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="accommodation-page">

    @include('components.navbar')

    <section class="hero hero-accommodation">
        <div class="hero-overlay"></div>

        <div class="hero-content hero-content-center">
            <h1>ACCOMMODATION</h1>
            <p class="hero-description">
                Discover our selection of thoughtfully designed rooms and suites that blend luxury with nature.
            </p>
        </div>

        <div class="booking-bar availability-bar">
            <p class="booking-bar-title">CHECK AVAILABILITY</p>
            
            <div class="booking-fields-wrapper">
                <div class="booking-item">
                    <label>Check In</label>
                    <div class="booking-value">
                        <span>21 Aug 2026</span>
                        <i class="icon-calendar"></i>
                    </div>
                </div>

                <div class="booking-item">
                    <label>Check Out</label>
                    <div class="booking-value">
                        <span>23 Aug 2026</span>
                        <i class="icon-calendar"></i>
                    </div>
                </div>

                <div class="booking-item">
                    <label>Guests</label>
                    <div class="booking-value">
                        <i class="icon-guest"></i>
                        <span>2 Guests</span>
                    </div>
                </div>

                <button class="search-button">SEARCH AVAILABILITY</button>
            </div>
            
            <span class="guarantee-text">Best rate guarantee when you book direct with us</span>
        </div>
    </section>

    <section class="rooms-section">
        <div class="rooms-header">
            <div>
                <h2>AVAILABLE ROOMS</h2>
                <p class="sub-caption">3 rooms available for your stay (21 - 23 Aug 2026)</p>
            </div>
            <div class="sort-wrapper">
                <label>SORT BY</label>
                <select class="sort-select">
                    <option>Recommended</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                </select>
            </div>
        </div>

        <div class="rooms-grid">
            <article class="room-card">
                <div class="card-image-wrapper">
                    <span class="badge badge-available">AVAILABLE</span>
                    <img class="room-card-img" src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1000&q=80" alt="Mistwood Suite">
                </div>
                <div class="room-content">
                    <div class="room-header-line">
                        <h3>Mistwood Suite</h3>
                        <span class="price"><strong>$280</strong> / night</span>
                    </div>
                    <p class="room-desc">A cozy retreat surrounded by lush greenery, with a private balcony and peaceful forest views.</p>
                    
                    <div class="room-specs">
                        <span class="spec-item"><i class="spec-icon spec-guests"></i> 2 Guests</span>
                        <span class="spec-item"><i class="spec-icon spec-bed"></i> 1 King Bed</span>
                        <span class="spec-item"><i class="spec-icon spec-size"></i> 55 m²</span>
                        <span class="spec-item"><i class="spec-icon spec-wifi"></i> Wi-Fi</span>
                    </div>

                    <a href="#" class="btn-book">BOOK NOW</a>
                </div>
            </article>

            <article class="room-card">
                <div class="card-image-wrapper">
                    <span class="badge badge-available">AVAILABLE</span>
                    <img class="room-card-img" src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=80" alt="Willowmere Suite">
                </div>
                <div class="room-content">
                    <div class="room-header-line">
                        <h3>Willowmere Suite</h3>
                        <span class="price"><strong>$175</strong> / night</span>
                    </div>
                    <p class="room-desc">A spacious suite featuring sweeping mountain views, warm interiors, and a relaxing private terrace.</p>
                    
                    <div class="room-specs">
                        <span class="spec-item"><i class="spec-icon spec-guests"></i> 2 Guests</span>
                        <span class="spec-item"><i class="spec-icon spec-bed"></i> 2 Twin Beds</span>
                        <span class="spec-item"><i class="spec-icon spec-size"></i> 45 m²</span>
                        <span class="spec-item"><i class="spec-icon spec-wifi"></i> Wi-Fi</span>
                    </div>

                    <a href="#" class="btn-book">BOOK NOW</a>
                </div>
            </article>

            <article class="room-card">
                <div class="card-image-wrapper">
                    <span class="badge badge-booked">BOOKED</span>
                    <img class="room-card-img" src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=80" alt="Evermist Suite">
                </div>
                <div class="room-content">
                    <div class="room-header-line">
                        <h3>Evermist Suite</h3>
                        <span class="price"><strong>$280</strong> / night</span>
                    </div>
                    <p class="room-desc">An elegant escape with panoramic mountain scenery, refined interiors, and a serene atmosphere.</p>
                    
                    <div class="room-specs">
                        <span class="spec-item"><i class="spec-icon spec-guests"></i> 2 Guests</span>
                        <span class="spec-item"><i class="spec-icon spec-bed"></i> 1 King Bed</span>
                        <span class="spec-item"><i class="spec-icon spec-size"></i> 50 m²</span>
                        <span class="spec-item"><i class="spec-icon spec-wifi"></i> Wi-Fi</span>
                    </div>

                    <button class="btn-disabled" disabled>NOT AVAILABLE</button>
                </div>
            </article>
        </div>
    </section>

    <section class="highlights-section">
        <div class="highlight-card bg-dark">
            <div class="highlight-text">
                <h2>Closer To Nature</h2>
                <p>Wake up to the sound of the forest and breathe in the freshest mountain air. Your perfect escape awaits at Avelune Resort.</p>
            </div>
            <img class="banner-img" src="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=800&q=80" alt="Resort View">
        </div>

        <div class="highlight-card bg-light">
            <div class="highlight-text">
                <h2>Best Rated Room</h2>
                <p>Wake up to the sound of the forest and breathe in the freshest mountain air. Your perfect escape awaits at Avelune Resort.</p>
            </div>
            <img class="banner-img" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Interior View">
        </div>
    </section>

    @include('components.footer')

</body>

</html>