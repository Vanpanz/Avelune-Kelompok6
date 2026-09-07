<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - About Us</title>

    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="aboutus-page">

    @include('components.navbar')

    <section class="hero hero-about-us">
        <div class="hero-overlay"></div>

        <div class="hero-content hero-content-center">
            <h1>ABOUT US</h1>
            <p class="hero-description">
                Avelune is home away from home, <br>where quiet woodland meets modern luxury <br>bringing you absolute serenity.
            </p>
        </div>
    </section>
<section id="about" class="bg-[#1c382b] text-white py-16 px-6 md:px-12 w-full">
        <div class="max-w-7xl mx-auto">
            
            <div class="text-center mb-12">
                <h2 class="font-playfair text-3xl md:text-4xl tracking-widest uppercase">OUR STORY</h2>
                <p class="text-xs text-gray-300 tracking-wider mt-1 italic">The Journey Starts From Here</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-200 text-sm font-light leading-relaxed">
                <div class="md:border-r border-white/20 md:pr-8">
                    <h3 class="font-playfair text-lg font-medium text-white mb-3">Where It Began</h3>
                    <p>
                        Avelune was born from a simple idea: to create a place where people could slow down, reconnect with nature, and rediscover the beauty of quiet moments. Surrounded by lush forests and breathtaking landscapes, the resort was designed as a peaceful escape from the rhythm of everyday life.
                    </p>
                </div>

                <div class="md:border-r border-white/20 md:pr-8">
                    <h3 class="font-playfair text-lg font-medium text-white mb-3">A Place to Unwind</h3>
                    <p>
                        Avelune was born from a simple idea: to create a place where people could slow down, reconnect with nature, and rediscover the beauty of quiet moments. Surrounded by lush forests and breathtaking landscapes, the resort was designed as a peaceful escape from the rhythm of everyday life.
                    </p>
                </div>

                <div>
                    <h3 class="font-playfair text-lg font-medium text-white mb-3">The Experience</h3>
                    <p>
                        Today, Avelune is more than a place to stay—it is a destination for meaningful experiences and unforgettable memories. With warm hospitality, thoughtful amenities, and nature at its heart, we welcome every guest to discover their own way to rest, explore, and feel at home.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="w-full h-[550px]">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 w-full h-full gap-0">
            <div class="relative group h-full overflow-hidden border-r border-white/10">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                     src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=800&q=80" 
                     alt="Hospitality">
                <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-4">
                    <h3 class="text-white font-serif text-3xl font-bold tracking-wider mb-1">10+ Years</h3>
                    <p class="text-gray-200 text-xs tracking-widest uppercase">Of Hospitality</p>
                </div>
            </div>

            <div class="relative group h-full overflow-hidden border-r border-white/10">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                     src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80" 
                     alt="Guest Welcomed">
                <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-4">
                    <h3 class="text-white font-serif text-3xl font-bold tracking-wider mb-1">5M Guest</h3>
                    <p class="text-gray-200 text-xs tracking-widest uppercase">Welcomed</p>
                </div>
            </div>

            <div class="relative group h-full overflow-hidden border-r border-white/10">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                     src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=800&q=80" 
                     alt="Guest Rating">
                <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-4">
                    <h3 class="text-white font-serif text-3xl font-bold tracking-wider mb-1">4.98/5</h3>
                    <p class="text-gray-200 text-xs tracking-widest uppercase">Guest Rating</p>
                </div>
            </div>

            <div class="relative group h-full overflow-hidden">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                     src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=800&q=80" 
                     alt="Suites">
                <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-4">
                    <h3 class="text-white font-serif text-3xl font-bold tracking-wider mb-1">30+ Suites</h3>
                    <p class="text-gray-200 text-xs tracking-widest uppercase">For Comfort</p>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

</body>

</html>