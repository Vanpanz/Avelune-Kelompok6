<!DOCTYPE html>
<html lang="en">

<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Reservation</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
    </head>

    <body class="aboutus-page text-white">

        @include('components.navbar')

        <section class="hero hero-amenities">
            <div class="hero-overlay"></div>

            <div class="hero-content">
                <h1>RESERVATION</h1>
                <p class="hero-description">
                    Reserve your stay and experience comfort <br> surrounded by nature.
                </p>
            </div>
        </section>

        <section class="sanctuary-section">
    <div class="sanctuary-container">
        <div class="text-center mb-8">
            <h1 class="sanctuary-title">MET YOUR SANCTUARY</h1>
            <p class="sanctuary-subtitle">
                "Each room is designed to immerse you in nature<br>while offering the comfort of refines luxury"
            </p>
        </div>

        <div class="sanctuary-card">
            <div class="room-grid">
                <div class="room-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80" alt="Mistwood Suite" class="room-image">
                </div>

                <div>
                    <h2 class="room-title">MISTWOOD SUITE</h2>
                    <p class="room-subtitle">
                        A cozy retreat surrounded by lush and greenery,<br>with a private balcony and peaceful forest views.
                    </p>

                    <div>
                        <div class="room-amenity">
                            <svg class="room-amenity-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                            <span>45m²</span>
                        </div>
                        <div class="room-amenity">
                            <svg class="room-amenity-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <span>King Bed</span>
                        </div>
                        <div class="room-amenity">
                            <svg class="room-amenity-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <span>2 People</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="descriptions-title">Descriptions</h3>
                <div class="descriptions-text">
                    <p>
                        A warm and intimate bedroom surrounded by lush greenery, where floor-to-ceiling glass windows bring the peaceful forest directly into the room. The soft neutral bedding, natural wood accents, woven textures, and warm ambient lighting create a cozy atmosphere, while the private balcony offers a quiet place to enjoy the beauty of the surrounding nature.
                    </p>
                    <p>
                        Surrounded by the calming beauty of the forest, this thoughtfully designed suite offers a peaceful escape from the everyday. Natural materials, earthy tones, and carefully placed furnishings create a sense of warmth and harmony, while the expansive windows fill the space with soft daylight and invite guests to slow down, relax, and reconnect with nature.
                    </p>
                </div>
            </div>
        </div>

        <div class="booking-card">
            <form class="booking-form">
                <div class="form-grid">
                    <div>
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-input">
                    </div>
                    <div>
                        <label class="form-label">E-mail/Phone Number:</label>
                        <input type="text" class="form-input">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Date:</label>
                    <input type="text" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label">Note:</label>
                    <input type="text" class="form-input">
                </div>
            </form>

            <div class="booking-footer">
                <div>
                    <span class="price-amount">$280</span>
                    <span class="price-unit">/night</span>
                </div>
                <button type="submit" class="btn-book">BOOK NOW</button>
            </div>
        </div>
    </div>
</section>
        @include('components.footer')

    </body>

</html>