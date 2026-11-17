<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

    <body class="m-0 overflow-x-hidden bg-[#1c382b] font-montserrat text-white">

        @include('components.navbar')

        <section class="relative min-h-[430px] bg-[url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85')] bg-cover bg-center max-[900px]:min-h-[430px]">
            <div class="absolute inset-0 bg-black/35"></div>

            <div class="absolute left-[5%] top-40 z-[2] text-white">
                <h1 class="my-[5px] font-playfair text-[80px] font-medium leading-[1.1] tracking-[6px] max-[900px]:text-[50px] max-[600px]:text-[40px]">ABOUT US</h1>
                <p>
                    Avelune is home away from home, <br>where quiet woodland meets modern luxury <br>bringing you
                    absolute serenity.
                </p>
            </div>
        </section>

        <section class="mb-4 flex w-full items-center justify-center bg-[#1c382b] px-6 py-16 md:px-12">
            <div class="max-w-6xl mx-auto w-full">

                <div class="text-center mb-8">
                    <h2 class="m-0 p-0 text-2xl font-semibold uppercase leading-none tracking-[0.25em] text-white md:text-3xl">OUR
                        STORY</h2>
                    <p class="mt-0 mb-[30px] p-0 text-[11px] leading-[1.2] tracking-wider text-[#e5e7eb]/90">The
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

       <section class="m-0 flex h-[500px] w-full gap-0 p-0">
    <div class="m-0 grid h-full w-1/2 flex-1 grid-cols-1 gap-0 overflow-hidden p-0 sm:grid-cols-2 md:grid-cols-4">
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