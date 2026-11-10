<!DOCTYPE html>
<html lang="en">

<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Amenities Details</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
    </head>

    <body class="amenities-details-page text-white">

        @include('components.navbar')

        <section class="hero hero-amenities">
            <div class="hero-overlay"></div>

            <div class="hero-content">
                <h1>AMENITIES DETAILS</h1>
                <p class="hero-description">
                </p>
            </div>
        </section>

 <div class="amenity-detail-wrapper">
    <div class="amenity-container">

        <a href="/amenities" class="breadcrumb-link">
            &gt; Amenities Detail
        </a>

        <div class="amenity-card">
            
            <div class="amenity-card-body">
                <div class="amenity-image-box">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80"
                        alt="Lune Cafe" class="amenity-image">
                </div>

          
                <div class="amenity-content">
                    <h2 class="amenity-title">Lune Cafe</h2>
                    <p class="amenity-description">
                        Lune Café offers a serene sanctuary that blends harmoniously with the tranquility of its natural
                        surroundings. Embodying a philosophy of grace and elegance, the café is thoughtfully designed
                        for guests to slow down the pace of their day and savor every precious moment in a warm,
                        exclusive atmosphere.
                    </p>
                </div>
            </div>

            <div class="amenity-card-footer">
                <div class="footer-spacer"></div> <!-- Penyeimbang kolom foto -->
                <div class="footer-info">
                    <span class="schedule-days">Everyday</span>
                    <span class="schedule-hours">7 a.m. - 8 p.m.</span>
                </div>
            </div>

        </div>

    </div>
</div>
        @include('components.footer')

    </body>

</html>