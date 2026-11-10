<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Where Nature Meets Serenity</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-[#f5f3ed] font-montserrat text-[#294b45]">
    @include('components.navbar')

    <section id="home" class="relative flex min-h-[280px] items-center overflow-visible px-6 pb-16 pt-16 text-white sm:px-10 md:min-h-[300px] lg:min-h-[440px] lg:px-[8%]">
        <img class="absolute inset-0 h-full w-full object-cover object-center" src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85" alt="">
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-[2] mx-auto w-full max-w-7xl">
            <p class="text-sm font-normal tracking-[0.2em] sm:text-base lg:text-2xl">ESCAPE TO</p>
            <h1 class="mt-1 font-serif text-4xl font-medium tracking-[0.12em] sm:text-5xl lg:text-7xl">AVELUNE</h1>
            <p class="mt-2 text-sm leading-tight sm:text-base lg:mt-4 lg:text-xl">
                Where Nature<br>
                Meets Serenity.
            </p>
            <a href="#about" class="mt-4 inline-flex bg-[#a7793f] px-4 py-2 text-[10px] font-medium tracking-wider transition hover:bg-[#8e6534] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white lg:mt-7 lg:px-7 lg:py-3.5 lg:text-sm">
                DISCOVER MORE
            </a>
        </div>

        <div id="reservation" class="absolute bottom-[-8px] left-1/2 z-[3] grid w-[90%] max-w-6xl -translate-x-1/2 grid-cols-1 items-center bg-[#254d47] text-white shadow-lg sm:w-[74%] sm:grid-cols-2 md:grid-cols-[1.2fr_1fr_1fr_auto]">
            <div class="flex flex-col px-3 py-2 text-[9px] sm:px-4">
                <small class="leading-relaxed">struggling to find an<br>available room?</small>
                <strong class="mt-1 font-semibold">FIND IT HERE!</strong>
            </div>
            <div class="flex items-center justify-between gap-2 border-t border-white/30 px-3 py-2 sm:border-t-0 sm:px-4 md:border-l">
                <div>
                    <label class="block text-[10px] tracking-widest">CHECK-IN</label>
                    <span class="mt-1 block text-[10px]">May 24, 2026</span>
                </div>
                <img class="h-[18px] w-[18px] object-contain" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
            </div>
            <div class="flex items-center justify-between gap-2 border-t border-white/30 px-3 py-2 sm:border-t-0 sm:border-l sm:px-4">
                <div>
                    <label class="block text-[10px] tracking-widest">CHECK-OUT</label>
                    <span class="mt-1 block text-[10px]">May 24, 2026</span>
                </div>
                <img class="h-[18px] w-[18px] object-contain" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
            </div>
            <button type="button" class="m-2 bg-[#a7793f] px-4 py-2 text-[10px] font-medium tracking-wide transition hover:bg-[#8e6534] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                SEARCH
            </button>
        </div>
    </section>

    <section id="amenities" class="bg-[#f5f3ed] px-6 pb-6 pt-6 text-center sm:px-10 lg:px-[5%]">
        <div class="mx-auto max-w-7xl">
            <h2 class="mb-4 text-lg font-medium tracking-wider sm:text-xl">THE AVELUNE AMENITIES</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5">
                <article class="border-[#8c9995] px-2 py-2 sm:border-r">
                    <svg class="mx-auto mb-2 h-9 w-9 text-[#294b45]" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M13 24h32v16a11 11 0 0 1-11 11H24a11 11 0 0 1-11-11V24Z" />
                        <path d="M45 28h4a7 7 0 0 1 0 14h-5M18 18c0-4 5-4 5-8M29 18c0-4 5-4 5-8" />
                    </svg>
                    <h3 class="text-[13px] font-medium sm:text-sm">Café</h3>
                    <p class="mt-1 text-[10px] leading-tight text-[#60746e]">Cozy Coffee<br>Moments</p>
                </article>
                <article class="border-[#8c9995] px-2 py-2 sm:border-r">
                    <svg class="mx-auto mb-2 h-9 w-9 text-[#294b45]" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M32 49c-13 0-21-8-22-20 12 0 20 8 22 20Zm0 0c13 0 21-8 22-20-12 0-20 8-22 20Zm0 0c-8-10-8-22 0-31 8 9 8 21 0 31Z" />
                    </svg>
                    <h3 class="text-[13px] font-medium sm:text-sm">Spa</h3>
                    <p class="mt-1 text-[10px] leading-tight text-[#60746e]">Relaxing<br>Treatments</p>
                </article>
                <article class="border-[#8c9995] px-2 py-2 sm:border-r lg:border-r">
                    <svg class="mx-auto mb-2 h-9 w-9 text-[#294b45]" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M14 10v18M21 10v18M14 19h7M17.5 28v27M43 10v45M43 10c8 7 8 17 0 23" />
                    </svg>
                    <h3 class="text-[13px] font-medium sm:text-sm">Restaurant</h3>
                    <p class="mt-1 text-[10px] leading-tight text-[#60746e]">Elevated Dining<br>Experience</p>
                </article>
                <article class="border-[#8c9995] px-2 py-2 sm:border-r">
                    <svg class="mx-auto mb-2 h-9 w-9 text-[#294b45]" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="45" cy="13" r="5" />
                        <path d="M10 29c8-6 15-6 23 0s15 6 23 0M8 39c8-6 15-6 23 0s15 6 23 0M10 49c8-6 15-6 23 0" />
                        <path d="m24 20 8 5 8-3" />
                    </svg>
                    <h3 class="text-[13px] font-medium sm:text-sm">Infinity Pool</h3>
                    <p class="mt-1 text-[10px] leading-tight text-[#60746e]">Endless<br>Views</p>
                </article>
                <article class="col-span-2 border-[#8c9995] px-2 py-2 sm:col-span-1">
                    <svg class="mx-auto mb-2 h-9 w-9 text-[#294b45]" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M13 34v-8a7 7 0 0 1 7-7h24a7 7 0 0 1 7 7v8M10 34a5 5 0 0 1 5 5v7h34v-7a5 5 0 0 1 5-5v17H10V34Zm7 17v4m30-4v4" />
                    </svg>
                    <h3 class="text-[13px] font-medium sm:text-sm">Lounge</h3>
                    <p class="mt-1 text-[10px] leading-tight text-[#60746e]">Serene Nature<br>Retreat</p>
                </article>
            </div>

            <p class="mt-7 text-[10px] tracking-[0.2em] text-[#60746e]">Thoughtfully curated for your stay</p>
        </div>
    </section>

    <section id="rooms" class="bg-[#254d47] px-3 py-6 text-white sm:px-4 lg:px-[5%]">
        <div class="mx-auto max-w-7xl">
            <div class="text-center">
                <p class="text-[10px] tracking-[0.2em]">ROOMS &amp; SUITES</p>
                <h2 class="mt-2 text-2xl font-medium sm:text-3xl">Our Top Reserved Suites</h2>
            </div>

            <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
                <article class="overflow-hidden bg-white text-[#294b45] shadow-md">
                    <img class="h-40 w-full object-cover" src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1000&q=80" alt="Mistwood Suite">
                    <div class="p-3">
                        <h3 class="text-sm font-medium">Mistwood Suite</h3>
                        <p class="mt-2 text-xs leading-relaxed text-[#60746e]">A cozy retreat surrounded by lush greenery, with a private balcony and peaceful forest views.</p>
                        <div class="mt-3 border-t border-[#e5e7eb] pt-2 text-xs">
                            <span>From <strong class="text-lg">$280</strong> / night</span>
                        </div>
                    </div>
                </article>
                <article class="overflow-hidden bg-white text-[#294b45] shadow-md">
                    <img class="h-40 w-full object-cover" src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=80" alt="Willowmere Suite">
                    <div class="p-3">
                        <h3 class="text-sm font-medium">Willowmere Suite</h3>
                        <p class="mt-2 text-xs leading-relaxed text-[#60746e]">A spacious suite featuring sweeping mountain views, warm interiors, and a relaxing private terrace.</p>
                        <div class="mt-3 border-t border-[#e5e7eb] pt-2 text-xs">
                            <span>From <strong class="text-lg">$175</strong> / night</span>
                        </div>
                    </div>
                </article>
                <article class="overflow-hidden bg-white text-[#294b45] shadow-md md:col-span-2 lg:col-span-1">
                    <img class="h-40 w-full object-cover" src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=80" alt="Evermist Suite">
                    <div class="p-3">
                        <h3 class="text-sm font-medium">Evermist Suite</h3>
                        <p class="mt-2 text-xs leading-relaxed text-[#60746e]">An elegant escape with panoramic mountain scenery, refined interiors, and a serene atmosphere.</p>
                        <div class="mt-3 border-t border-[#e5e7eb] pt-2 text-xs">
                            <span>From <strong class="text-lg">$280</strong> / night</span>
                        </div>
                    </div>
                </article>
            </div>

            <p class="mt-7 text-center text-[10px] tracking-[0.2em] text-white/75">Thoughtfully designed spaces that blend luxury with nature</p>
        </div>
    </section>

    <section id="about" class="grid grid-cols-1 items-center gap-6 bg-[#f5f3ed] px-6 py-8 sm:px-10 lg:grid-cols-[0.9fr_1.1fr] lg:px-[8%]">
        <div>
            <span class="text-xs tracking-[0.2em] text-[#a7793f]">AVELUNE</span>
            <h2 class="mt-4 font-serif text-3xl leading-tight sm:text-4xl">A Sanctuary by the Hill</h2>
            <p class="mt-5 max-w-xl text-sm leading-7 text-[#60746e]">
                Nestled among the hills and surrounded by quiet woodland, Avelune is a retreat designed to bring you closer to nature. Wake beside the infinity pool, and savor thoughtful moments in our forest-inspired spaces.
            </p>
        </div>
        <div class="relative min-h-[230px] sm:min-h-[260px] lg:min-h-[360px]">
            <img class="absolute right-0 top-0 h-[78%] w-[72%] object-cover shadow-md" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1000&q=80" alt="Avelune restaurant">
            <img class="absolute bottom-0 left-0 z-[1] h-[62%] w-[56%] object-cover shadow-md" src="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=1200&q=80" alt="Avelune infinity pool">
        </div>
    </section>

    @include('components.footer')
</body>

</html>
