<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Amenities</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-[#f5f3ed] font-montserrat text-[#294b45]">
    @include('components.navbar')

    <section class="relative flex min-h-[280px] items-center overflow-hidden px-6 pb-10 pt-20 text-white sm:px-10 md:min-h-[300px] lg:min-h-[430px] lg:px-[5%]">
        <img class="absolute inset-0 h-full w-full object-cover object-center" src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=2000&q=85" alt="">
        <div class="absolute inset-0 bg-black/45"></div>
        <div class="relative z-[2] mx-auto w-full max-w-7xl">
            <h1 class="font-serif text-2xl font-medium tracking-[0.06em] sm:text-3xl lg:text-6xl">AMENITIES</h1>
            <p class="mt-4 max-w-[390px] text-sm leading-relaxed text-white/90 sm:text-base">
                Reconnect with nature, indulge in comfort, and create memories that last a lifetime.
            </p>
        </div>
    </section>

    <section class="bg-[#254d47] px-4 py-8 text-white sm:px-5 sm:py-10 lg:px-[8%]">
        <div class="mx-auto max-w-7xl">
            <header class="mb-6 text-center">
                <h2 class="text-xl font-medium tracking-[0.12em] sm:text-2xl">AMENITIES</h2>
                <p class="mt-2 text-xs font-light tracking-wide text-white/90 sm:text-sm">
                    Reconnect with nature, indulge in comfort, and create memories that last a lifetime.
                </p>
            </header>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
                <article class="flex flex-col overflow-hidden rounded-sm bg-white text-[#254d47]">
                    <img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80" alt="Lune Café">
                    <div class="flex grow flex-col p-3 sm:p-4">
                        <h3 class="font-serif text-base font-medium text-[#1b3834]">Lune Café</h3>
                        <p class="mt-3 grow text-sm leading-relaxed text-[#555]">A cozy retreat surrounded by nature, perfect for slow mornings, freshly brewed coffee, and light bites.</p>
                        <a href="{{ url('/amenities/lune-cafe') }}" class="mt-5 flex items-center justify-between border-t border-[#f0f0f0] pt-3 text-xs font-semibold tracking-widest text-[#b4874b] transition hover:text-[#8e6534]">
                            <span>LEARN MORE</span><span aria-hidden="true" class="text-xl leading-none">&rsaquo;</span>
                        </a>
                    </div>
                </article>

                <article class="flex flex-col overflow-hidden rounded-sm bg-white text-[#254d47]">
                    <img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=800&q=80" alt="Lunelle Spa">
                    <div class="flex grow flex-col p-3 sm:p-4">
                        <h3 class="font-serif text-base font-medium text-[#1b3834]">Lunelle Spa</h3>
                        <p class="mt-3 grow text-sm leading-relaxed text-[#555]">A tranquil sanctuary offering restorative treatments designed to help you relax, recharge, and reconnect with yourself.</p>
                        <a href="{{ url('/amenities/lunelle-spa') }}" class="mt-5 flex items-center justify-between border-t border-[#f0f0f0] pt-3 text-xs font-semibold tracking-widest text-[#b4874b] transition hover:text-[#8e6534]">
                            <span>LEARN MORE</span><span aria-hidden="true" class="text-xl leading-none">&rsaquo;</span>
                        </a>
                    </div>
                </article>

                <article class="flex flex-col overflow-hidden rounded-sm bg-white text-[#254d47]">
                    <img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?auto=format&fit=crop&w=800&q=80" alt="Serene Pool">
                    <div class="flex grow flex-col p-3 sm:p-4">
                        <h3 class="font-serif text-base font-medium text-[#1b3834]">Serene Pool</h3>
                        <p class="mt-3 grow text-sm leading-relaxed text-[#555]">An infinity pool overlooking breathtaking scenery, creating the perfect setting for peaceful swims and golden-hour moments.</p>
                        <a href="{{ url('/amenities/serene-pool') }}" class="mt-5 flex items-center justify-between border-t border-[#f0f0f0] pt-3 text-xs font-semibold tracking-widest text-[#b4874b] transition hover:text-[#8e6534]">
                            <span>LEARN MORE</span><span aria-hidden="true" class="text-xl leading-none">&rsaquo;</span>
                        </a>
                    </div>
                </article>

                <article class="flex flex-col overflow-hidden rounded-sm bg-white text-[#254d47]">
                    <img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Solara Lounge">
                    <div class="flex grow flex-col p-3 sm:p-4">
                        <h3 class="font-serif text-base font-medium text-[#1b3834]">Solara Lounge</h3>
                        <p class="mt-3 grow text-sm leading-relaxed text-[#555]">A peaceful forest hideaway where guests can unwind, enjoy quiet conversations, and take in the surrounding greenery.</p>
                        <a href="{{ url('/amenities/solara-lounge') }}" class="mt-5 flex items-center justify-between border-t border-[#f0f0f0] pt-3 text-xs font-semibold tracking-widest text-[#b4874b] transition hover:text-[#8e6534]">
                            <span>LEARN MORE</span><span aria-hidden="true" class="text-xl leading-none">&rsaquo;</span>
                        </a>
                    </div>
                </article>

                <article class="flex flex-col overflow-hidden rounded-sm bg-white text-[#254d47]">
                    <img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?auto=format&fit=crop&w=800&q=80" alt="Serein Dining">
                    <div class="flex grow flex-col p-3 sm:p-4">
                        <h3 class="font-serif text-base font-medium text-[#1b3834]">Serein Dining</h3>
                        <p class="mt-3 grow text-sm leading-relaxed text-[#555]">An elegant dining destination serving thoughtfully crafted dishes in a warm and serene atmosphere inspired by the beauty of Avelune.</p>
                        <a href="{{ url('/amenities/serein-dining') }}" class="mt-5 flex items-center justify-between border-t border-[#f0f0f0] pt-3 text-xs font-semibold tracking-widest text-[#b4874b] transition hover:text-[#8e6534]">
                            <span>LEARN MORE</span><span aria-hidden="true" class="text-xl leading-none">&rsaquo;</span>
                        </a>
                    </div>
                </article>

                <article class="flex flex-col overflow-hidden rounded-sm bg-white text-[#254d47]">
                    <img class="h-36 w-full object-cover" src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=800&q=80" alt="Avelune Fitness">
                    <div class="flex grow flex-col p-3 sm:p-4">
                        <h3 class="font-serif text-base font-medium text-[#1b3834]">Avelune Fitness</h3>
                        <p class="mt-3 grow text-sm leading-relaxed text-[#555]">A contemporary wellness space equipped for energizing workouts, mindful movement, and maintaining your daily routine.</p>
                        <a href="{{ url('/amenities/avelune-fitness') }}" class="mt-5 flex items-center justify-between border-t border-[#f0f0f0] pt-3 text-xs font-semibold tracking-widest text-[#b4874b] transition hover:text-[#8e6534]">
                            <span>LEARN MORE</span><span aria-hidden="true" class="text-xl leading-none">&rsaquo;</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        <article class="relative h-64 overflow-hidden sm:h-80">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1462275646964-a0e3386b89fa?auto=format&fit=crop&w=800&q=80" alt="Spring">
            <div class="absolute inset-0 flex items-end justify-center bg-gradient-to-t from-black/65 to-black/10 pb-8">
                <h2 class="text-xl font-normal tracking-[0.18em] text-white">SPRING</h2>
            </div>
        </article>
        <article class="relative h-64 overflow-hidden sm:h-80">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80" alt="Summer">
            <div class="absolute inset-0 flex items-end justify-center bg-gradient-to-t from-black/65 to-black/10 pb-8">
                <h2 class="text-xl font-normal tracking-[0.18em] text-white">SUMMER</h2>
            </div>
        </article>
        <article class="relative h-64 overflow-hidden sm:h-80">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1507187632231-5beb21a654a2?auto=format&fit=crop&w=800&q=80" alt="Autumn">
            <div class="absolute inset-0 flex items-end justify-center bg-gradient-to-t from-black/65 to-black/10 pb-8">
                <h2 class="text-xl font-normal tracking-[0.18em] text-white">AUTUMN</h2>
            </div>
        </article>
        <article class="relative h-64 overflow-hidden sm:h-80">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1483664852095-d6cc6870702d?auto=format&fit=crop&w=800&q=80" alt="Winter">
            <div class="absolute inset-0 flex items-end justify-center bg-gradient-to-t from-black/65 to-black/10 pb-8">
                <h2 class="text-xl font-normal tracking-[0.18em] text-white">WINTER</h2>
            </div>
        </article>
    </section>

    @include('components.footer')
</body>

</html>
