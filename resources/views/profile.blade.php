<!DOCTYPE html>
<html lang="en">

<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Profile</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
    </head>

    <body class="profile-page text-white">

        @include('components.navbar')

         <section class="hero hero-amenities">
            <div class="hero-overlay"></div>

            <div class="hero-content">
                <h1>ABOUT US</h1>
                <p class="hero-description">
                    Avelune is home away from home, <br>where quiet woodland meets modern luxury <br>bringing you
                    absolute serenity.
                </p>
            </div>
        </section>

        <main class="profile-section">
            <div class="profile-container">

                <section class="profile-group">
                    <h2 class="section-title">Personal Information</h2>

                    <div class="profile-card info-card">
                        <div class="avatar-wrapper">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80"
                                alt="Profile Picture" class="avatar-image">
                        </div>

                        <div class="info-grid">
                            <div class="info-item">
                                <span class="info-label">FULL NAME</span>
                                <p class="info-value">Zhang Zhen Yuan</p>
                            </div>

                            <div class="info-item">
                                <span class="info-label">COUNTRY</span>
                                <p class="info-value">China or Cinta</p>
                            </div>

                            <div class="info-item">
                                <span class="info-label">PHONE NUMBER</span>
                                <p class="info-value">+62 143 0520 1434</p>
                            </div>

                            <div class="info-item">
                                <span class="info-label">EMAIL</span>
                                <p class="info-value">epepprohengker145@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="profile-group">
                    <h2 class="section-title">Reservation</h2>

                    <div class="profile-card reservation-card">
                        <div class="reservation-content">
                            <div class="room-thumb-wrapper">
                                <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80"
                                    alt="Evermist Suite" class="room-thumb">
                            </div>

                            <div class="reservation-details">
                                <h3 class="room-name">EVERMIST SUITE</h3>
                                <div class="reservation-meta">
                                    <p><strong>Date:</strong> 26/09/2026 - 30/09/2026</p>
                                    <p><strong>Status:</strong> Payed CASH no Utang, ORKAY BOS</p>
                                    <p><strong>Note:</strong> saya mau 10, mksh.</p>
                                    <p><strong>TOTAL:</strong> 50.000 robux pending 3 hari</p>
                                </div>
                            </div>
                        </div>

                        <div class="action-wrapper">
                            <a href="#" class="btn-details">Details</a>
                        </div>
                    </div>

                    <div class="profile-card reservation-card">
                        <div class="reservation-content">
                            <div class="room-thumb-wrapper">
                                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=600&q=80"
                                    alt="Willowmere Suite" class="room-thumb">
                            </div>

                            <div class="reservation-details">
                                <h3 class="room-name">WILLOWMERE SUITE</h3>
                                <div class="reservation-meta">
                                    <p><strong>Date:</strong> 20/11/2028 - 31/11/2028</p>
                                    <p><strong>Status:</strong> Pending, tunggu ada pacar</p>
                                    <p><strong>Note:</strong> buat apa kasur dua kalo sayanya sendirian.</p>
                                    <p><strong>TOTAL:</strong> 100.000 diamond epep</p>
                                </div>
                            </div>
                        </div>

                        <div class="action-wrapper">
                            <a href="#" class="btn-details">Details</a>
                        </div>
                    </div>

                    <div class="profile-card reservation-card">
                        <div class="reservation-content">
                            <div class="room-thumb-wrapper">
                                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=600&q=80"
                                    alt="Mistwood Suite" class="room-thumb">
                            </div>

                            <div class="reservation-details">
                                <h3 class="room-name">MISTWOOD SUITE</h3>
                                <div class="reservation-meta">
                                    <p><strong>Date:</strong> 29/02/2026 - 31/02/2026</p>
                                    <p><strong>Status:</strong> Udh nginep bro</p>
                                    <p><strong>Note:</strong> mantap, alamnya ngalam banget, sesuai nama bngt, mistwood.
                                    </p>
                                    <p><strong>TOTAL:</strong> 500 robux soalnya tinggal di luar kamarnya</p>
                                </div>
                            </div>
                        </div>

                        <div class="action-wrapper">
                            <a href="#" class="btn-details">Details</a>
                        </div>
                    </div>

                </section>

            </div>
        </main>

        <x-footer />

        @include('components.footer')

    </body>

</html>