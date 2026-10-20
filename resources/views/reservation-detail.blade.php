<!DOCTYPE html>
<html lang="en">

<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Reservation Details</title>

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
                <h1>RESERVATION DETAILS</h1>
                <p class="hero-description">
                    Take a quick look at the room that <br>you reserved.
                </p>
            </div>
        </section>
<div class="reservation-detail-wrapper">
    <div class="reservation-container">

        <div class="reserved-room-wrapper">
    <div class="reserved-room-container">

        <a href="/profiles" class="reserved-room-breadcrumb">
            &gt; Reservation Detail
        </a>

        <div class="reserved-room-card">
            
            <div class="reserved-room-main-layout">
                <div class="reserved-room-image-box">
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=800&q=80"
                        alt="Evermist Suite" class="reserved-room-image">
                </div>

                <div class="reserved-room-content">
                    <h2 class="reserved-room-title">EVERMIST SUITE</h2>

                    <div class="reserved-room-group">
                        <label class="reserved-room-label">Date:</label>
                        <div class="reserved-room-value-box">28/09/2026 - 30/09/2026</div>
                    </div>

                    <div class="reserved-room-group">
                        <label class="reserved-room-label">Status:</label>
                        <div class="reserved-room-value-box">Payed CASH no Utang, ORKAY BOS</div>
                    </div>

                    <div class="reserved-room-group">
                        <label class="reserved-room-label">Note:</label>
                        <div class="reserved-room-value-box">saya mau 10, mksh.</div>
                    </div>
                </div>
            </div>

            <div class="reserved-room-card-footer">
                <div class="reserved-room-footer-spacer"></div>
                <div class="reserved-room-footer-info">
                    <span class="reserved-room-total-label">Total:</span>
                    <span class="reserved-room-total-amount">50.000 robux pending 3 hari</span>
                </div>
            </div>

        </div>

    </div>
</div>
        @include('components.footer')

    </body>

</html>