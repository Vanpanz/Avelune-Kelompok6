<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Accommodation</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-[#f5f3ed] font-montserrat text-[#294b45]">
    @include('components.navbar')

    <section class="relative flex min-h-[280px] items-center overflow-visible px-6 pb-12 pt-20 text-white sm:px-10 md:min-h-[300px] lg:min-h-[430px] lg:px-[5%] max-[650px]:flex-col max-[650px]:items-stretch">
        <img class="absolute inset-0 h-full w-full object-cover object-center" src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=2000&q=85" alt="">
        <div class="absolute inset-0 bg-black/45"></div>
        <div class="relative z-[2] mx-auto w-full max-w-7xl">
            <h1 class="max-w-2xl font-serif text-2xl font-medium leading-tight tracking-[0.02em] sm:text-3xl sm:tracking-[0.08em] lg:text-6xl">ACCOMMODATION</h1>
            <p class="mt-4 max-w-[360px] text-sm leading-relaxed text-white/90 sm:text-base">
                Discover our selection of thoughtfully designed rooms and suites that blend luxury with nature.
            </p>
        </div>

        <div class="absolute bottom-[-64px] left-1/2 z-[3] w-[90%] max-w-5xl -translate-x-1/2 bg-[#254d47] px-4 py-3 text-white shadow-lg sm:w-[64%] sm:px-5 md:px-4 max-[650px]:relative max-[650px]:bottom-auto max-[650px]:left-auto max-[650px]:mt-8 max-[650px]:w-full max-[650px]:translate-x-0">
            <p class="mb-2 text-xs tracking-wider">CHECK AVAILABILITY</p>
            <div class="grid grid-cols-1 items-center gap-2 sm:grid-cols-2 md:grid-cols-[repeat(3,minmax(0,1fr))_auto]">
                <div class="bg-white px-3 py-2 text-[#294b45]">
                    <label class="block text-[10px]">Check In</label>
                    <div class="mt-1 flex items-center justify-between gap-2 text-xs text-[#60746e]">
                        <span>21 Aug 2026</span>
                        <img class="h-[17px] w-[17px] object-contain" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
                    </div>
                </div>
                <div class="bg-white px-3 py-2 text-[#294b45]">
                    <label class="block text-[10px]">Check Out</label>
                    <div class="mt-1 flex items-center justify-between gap-2 text-xs text-[#60746e]">
                        <span>23 Aug 2026</span>
                        <img class="h-[17px] w-[17px] object-contain" src="{{ asset('images/akar-icons--calendar.png') }}" alt="Calendar">
                    </div>
                </div>
                <div class="bg-white px-3 py-2 text-[#294b45]">
                    <label class="block text-[10px]">Guests</label>
                    <div class="mt-1 flex items-center gap-2 text-xs text-[#60746e]">
                        <span aria-hidden="true">♙</span>
                        <span>2 Guests</span>
                    </div>
                </div>
                <button type="button" class="bg-[#a7793f] px-4 py-2 text-[10px] font-medium tracking-wide transition hover:bg-[#8e6534] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                    SEARCH AVAILABILITY
                </button>
            </div>
            <span class="mt-3 block text-center text-[10px] text-white/80">Best rate guarantee when you book direct with us</span>
        </div>
    </section>

    <section class="bg-[#f5f3ed] px-3 pb-8 pt-24 sm:px-4 lg:px-[5%]">
        <div class="mx-auto max-w-7xl">
            <header class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                <div>
                    <h2 class="text-xl font-medium tracking-wider">AVAILABLE ROOMS</h2>
                    <p class="mt-1 text-xs text-[#60746e]">3 rooms available for your stay (21 - 23 Aug 2026)</p>
                </div>
                <div class="flex items-center gap-3 text-[10px] text-[#60746e]">
                    <label for="sort-rooms">SORT BY</label>
                    <select id="sort-rooms" class="border border-[#c5cfca] bg-white px-3 py-2 text-xs text-[#294b45]">
                        <option>Recommended</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>
            </header>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <article class="overflow-hidden bg-white shadow-md">
                    <div class="relative">
                        <span class="absolute left-3 top-3 z-[1] bg-[#254d47] px-2 py-1 text-[10px] tracking-wide text-white">AVAILABLE</span>
                        <img class="h-40 w-full object-cover" src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1000&q=80" alt="Mistwood Suite">
                    </div>
                    <div class="p-4">
                        <div class="flex items-baseline justify-between gap-2">
                            <h3 class="text-base font-medium">Mistwood Suite</h3>
                            <span class="whitespace-nowrap text-xs text-[#60746e]"><strong class="text-base text-[#a7793f]">$280</strong> / night</span>
                        </div>
                        <p class="mt-2 min-h-10 text-xs leading-relaxed text-[#60746e]">A cozy retreat surrounded by lush greenery, with a private balcony and peaceful forest views.</p>
                        <div class="mt-3 flex flex-wrap gap-x-4 gap-y-2 text-xs text-[#60746e]">
                            <span>♙ 2 Guests</span>
                            <span>▱ 1 King Bed</span>
                            <span>□ 55 m²</span>
                            <span>⌁ Wi-Fi</span>
                        </div>
                        <a href="{{ route('reservation') }}" class="ml-auto mt-4 block w-24 bg-[#254d47] px-2 py-2 text-center text-[10px] text-white transition hover:bg-[#1b3834]">BOOK NOW</a>
                    </div>
                </article>

                <article class="overflow-hidden bg-white shadow-md">
                    <div class="relative">
                        <span class="absolute left-3 top-3 z-[1] bg-[#254d47] px-2 py-1 text-[10px] tracking-wide text-white">AVAILABLE</span>
                        <img class="h-40 w-full object-cover" src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=80" alt="Willowmere Suite">
                    </div>
                    <div class="p-4">
                        <div class="flex items-baseline justify-between gap-2">
                            <h3 class="text-base font-medium">Willowmere Suite</h3>
                            <span class="whitespace-nowrap text-xs text-[#60746e]"><strong class="text-base text-[#a7793f]">$175</strong> / night</span>
                        </div>
                        <p class="mt-2 min-h-10 text-xs leading-relaxed text-[#60746e]">A spacious suite featuring sweeping mountain views, warm interiors, and a relaxing private terrace.</p>
                        <div class="mt-3 flex flex-wrap gap-x-4 gap-y-2 text-xs text-[#60746e]">
                            <span>♙ 2 Guests</span>
                            <span>▱ 2 Twin Beds</span>
                            <span>□ 45 m²</span>
                            <span>⌁ Wi-Fi</span>
                        </div>
                        <a href="{{ route('reservation') }}" class="ml-auto mt-4 block w-24 bg-[#254d47] px-2 py-2 text-center text-[10px] text-white transition hover:bg-[#1b3834]">BOOK NOW</a>
                    </div>
                </article>

                <article class="overflow-hidden bg-white shadow-md">
                    <div class="relative">
                        <span class="absolute left-3 top-3 z-[1] bg-[#a7793f] px-2 py-1 text-[10px] tracking-wide text-white">BOOKED</span>
                        <img class="h-40 w-full object-cover" src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=80" alt="Evermist Suite">
                    </div>
                    <div class="p-4">
                        <div class="flex items-baseline justify-between gap-2">
                            <h3 class="text-base font-medium">Evermist Suite</h3>
                            <span class="whitespace-nowrap text-xs text-[#60746e]"><strong class="text-base text-[#a7793f]">$280</strong> / night</span>
                        </div>
                        <p class="mt-2 min-h-10 text-xs leading-relaxed text-[#60746e]">An elegant escape with panoramic mountain scenery, refined interiors, and a serene atmosphere.</p>
                        <div class="mt-3 flex flex-wrap gap-x-4 gap-y-2 text-xs text-[#60746e]">
                            <span>♙ 2 Guests</span>
                            <span>▱ 1 King Bed</span>
                            <span>□ 50 m²</span>
                            <span>⌁ Wi-Fi</span>
                        </div>
                        <button type="button" class="ml-auto mt-4 block w-24 cursor-not-allowed bg-[#c9cbc9] px-2 py-2 text-center text-[10px] text-white" disabled>NOT AVAILABLE</button>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="mx-auto mb-14 grid w-[92%] max-w-7xl grid-cols-1 gap-6 md:grid-cols-2">
        <article class="flex min-h-[180px] overflow-hidden rounded-lg bg-[#254d47] text-white shadow-md">
            <div class="flex-1 px-5 py-7">
                <h2 class="font-serif text-xl">Closer To Nature</h2>
                <p class="mt-5 text-sm leading-relaxed">Wake up to the sound of the forest and breathe in the freshest mountain air. Your perfect escape awaits at Avelune Resort.</p>
            </div>
            <img class="w-[42%] object-cover" src="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&w=800&q=80" alt="Resort View">
        </article>
        <article class="flex min-h-[180px] overflow-hidden rounded-lg bg-white text-[#294b45] shadow-md">
            <div class="flex-1 px-5 py-7">
                <h2 class="font-serif text-xl">Best Rated Room</h2>
                <p class="mt-5 text-sm leading-relaxed">Wake up to the sound of the forest and breathe in the freshest mountain air. Your perfect escape awaits at Avelune Resort.</p>
            </div>
            <img class="w-[42%] object-cover" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Interior View">
        </article>
    </section>

    @include('components.footer')
</body>

</html>
