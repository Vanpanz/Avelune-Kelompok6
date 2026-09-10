<!DOCTYPE html>
<html lang="en">

<he>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - About Us</title>

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
                <h1>ABOUT US</h1>
                <p class="hero-description">
                    Avelune is home away from home, <br>where quiet woodland meets modern luxury <br>bringing you
                    absolute serenity.
                </p>
            </div>
        </section>

        <section class="our-story-section px-6 md:px-12">
            <div class="max-w-6xl mx-auto w-full">

                <div class="text-center mb-8">
                    <h2 class="text-2xl md:text-3xl font-medium tracking-[0.2em] uppercase m-0 p-0 leading-none">OUR
                        STORY</h2>
                    <p class="subtitle text-[11px] text-gray-300 tracking-wider mt-1 mb-0 p-0 leading-normal">The
                        Journey Starts From Here.</p>
                </div>
                <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-200 text-xs md:text-sm font-light leading-relaxed">
                    <div class="md:border-r border-white/20 md:pr-8">
                        <h3 class="text-lg font-medium tracking-wide text-white mb-3">Where It Began</h3>
                        <p class="text-gray-300">
                            Avelune was born from a simple idea: to create a place where people could slow down,
                            reconnect
                            with nature, and rediscover the beauty of quiet moments. Surrounded by lush forests and
                            breathtaking landscapes, the resort was designed as a peaceful escape from the rhythm of
                            everyday life.
                        </p>
                    </div>

                    <div class="md:border-r border-white/20 md:pr-8">
                        <h3 class="text-lg font-medium tracking-wide text-white mb-3">A Place to Unwind</h3>
                        <p class="text-gray-300">
                            Avelune was born from a simple idea: to create a place where people could slow down,
                            reconnect
                            with nature, and rediscover the beauty of quiet moments. Surrounded by lush forests and
                            breathtaking landscapes, the resort was designed as a peaceful escape from the rhythm of
                            everyday life.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium tracking-wide text-white mb-3">The Experience</h3>
                        <p class="text-gray-300">
                            Today, Avelune is more than a place to stay—it is a destination for meaningful experiences
                            and
                            unforgettable memories. With warm hospitality, thoughtful amenities, and nature at its
                            heart, we
                            welcome every guest to discover their own way to rest, explore, and feel at home.
                        </p>
                    </div>
                </div>

            </div>
        </section>

       <section class="stats-grid-section">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full h-full gap-0">
        <div class="relative group h-full overflow-hidden">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 block"
                src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80"
                alt="Hospitality">
            <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-4">
                <h3 class="text-white text-3xl font-semibold tracking-wider mb-1">10+ Years</h3>
                <p class="text-gray-200 text-xs tracking-widest uppercase">Of Hospitality</p>
            </div>
        </div>

        <div class="relative group h-full overflow-hidden">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 block"
                src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80"
                alt="Guest Welcomed">
            <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-4">
                <h3 class="text-white text-3xl font-semibold tracking-wider mb-1">5M Guest</h3>
                <p class="text-gray-200 text-xs tracking-widest uppercase">Welcomed</p>
            </div>
        </div>

        <div class="relative group h-full overflow-hidden">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 block"
                src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=800&q=80"
                alt="Guest Rating">
            <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-4">
                <h3 class="text-white text-3xl font-semibold tracking-wider mb-1">4.98/5</h3>
                <p class="text-gray-200 text-xs tracking-widest uppercase">Guest Rating</p>
            </div>
        </div>

        <div class="relative group h-full overflow-hidden">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 block"
                src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=800&q=80"
                alt="Suites">
            <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-4">
                <h3 class="text-white text-3xl font-semibold tracking-wider mb-1">30+ Suites</h3>
                <p class="text-gray-200 text-xs tracking-widest uppercase">For Comfort</p>
            </div>
        </div>
    </div>
</section>

        @include('components.footer')

    </body>

</html>