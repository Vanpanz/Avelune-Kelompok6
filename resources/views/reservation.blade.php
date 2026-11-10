<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

    <body class="m-0 overflow-x-hidden bg-[#1c382b] font-montserrat text-white">

        @include('components.navbar')

        <section class="relative min-h-[430px] bg-[url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85')] bg-cover bg-center max-[900px]:min-h-[430px]">
            <div class="absolute inset-0 bg-black/35"></div>

            <div class="absolute left-[5%] top-40 z-[2] text-white">
                <h1 class="my-[5px] font-playfair text-[80px] font-medium leading-[1.1] tracking-[6px] max-[900px]:text-[50px] max-[600px]:text-[40px]">RESERVATION</h1>
                <p>
                    Reserve your stay and experience comfort <br> surrounded by nature.
                </p>
            </div>
        </section>

        <section class="bg-[#f4f2ec] px-4 py-12 font-montserrat text-[#333]">
    <div class="mx-auto max-w-4xl">
        <div class="text-center mb-8">
            <h1 class="mb-2 text-center font-playfair text-[30px] font-semibold uppercase tracking-[0.05em] text-[#223830]">MET YOUR SANCTUARY</h1>
            <p class="mb-8 text-center text-sm italic text-gray-600">
                "Each room is designed to immerse you in nature<br>while offering the comfort of refines luxury"
            </p>
        </div>

        <div class="mb-6 bg-white p-8 shadow-sm">
            <div class="mb-8 grid grid-cols-1 gap-6 md:grid-cols-2">
                <div class="h-64 w-full overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80" alt="Mistwood Suite" class="h-full w-full object-cover">
                </div>

                <div>
                    <h2 class="mb-2 font-playfair text-2xl font-medium uppercase tracking-wide text-[#b58950]">MISTWOOD SUITE</h2>
                    <p class="mb-6 text-xs leading-6 text-gray-600">
                        A cozy retreat surrounded by lush and greenery,<br>with a private balcony and peaceful forest views.
                    </p>

                    <div>
                        <div class="mb-3 flex items-center gap-3 text-xs text-gray-700">
                            <svg class="h-4 w-4 text-[#b58950]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                            <span>45m²</span>
                        </div>
                        <div class="mb-3 flex items-center gap-3 text-xs text-gray-700">
                            <svg class="h-4 w-4 text-[#b58950]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <span>King Bed</span>
                        </div>
                        <div class="mb-3 flex items-center gap-3 text-xs text-gray-700">
                            <svg class="h-4 w-4 text-[#b58950]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <span>2 People</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="mb-3 border-t border-gray-100 pt-6 text-lg font-medium text-[#b58950]">Descriptions</h3>
                <div class="text-justify text-xs leading-relaxed text-gray-600 [&>p]:mb-4">
                    <p>
                        A warm and intimate bedroom surrounded by lush greenery, where floor-to-ceiling glass windows bring the peaceful forest directly into the room. The soft neutral bedding, natural wood accents, woven textures, and warm ambient lighting create a cozy atmosphere, while the private balcony offers a quiet place to enjoy the beauty of the surrounding nature.
                    </p>
                    <p>
                        Surrounded by the calming beauty of the forest, this thoughtfully designed suite offers a peaceful escape from the everyday. Natural materials, earthy tones, and carefully placed furnishings create a sense of warmth and harmony, while the expansive windows fill the space with soft daylight and invite guests to slow down, relax, and reconnect with nature.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-sm">
            <form class="bg-[#223830] p-6 text-white">
            <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label class="mb-1 block text-xs font-semibold tracking-wide">Name:</label>
                        <input type="text" class="w-full border-0 bg-white px-3 py-2 text-xs text-gray-800 outline-none">
                    </div>
                    <div>
                        <label class="mb-1 block text-xs font-semibold tracking-wide">E-mail/Phone Number:</label>
                        <input type="text" class="w-full border-0 bg-white px-3 py-2 text-xs text-gray-800 outline-none">
                    </div>
                </div>

                <div class="mb-4">
                <label class="mb-1 block text-xs font-semibold tracking-wide">Date:</label>
                <input type="text" class="w-full border-0 bg-white px-3 py-2 text-xs text-gray-800 outline-none">
                </div>

                <div class="mb-4">
                    <label class="mb-1 block text-xs font-semibold tracking-wide">Note:</label>
                    <input type="text" class="w-full border-0 bg-white px-3 py-2 text-xs text-gray-800 outline-none">
                </div>
            </form>

            <div class="flex items-center justify-between bg-white px-6 py-4">
                <div>
                    <span class="text-xl font-bold text-[#b58950]">$280</span>
                    <span class="text-xs text-gray-500">/night</span>
                </div>
                <button type="submit" class="cursor-pointer border-0 bg-[#223830] px-6 py-2.5 text-xs font-semibold uppercase tracking-wider text-white transition-colors duration-200 hover:bg-[#1a2c26]">BOOK NOW</button>
            </div>
        </div>
    </div>
</section>
        @include('components.footer')

    </body>

</html>