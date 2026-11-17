<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

    <body class="bg-[#f5f3ed] font-montserrat text-white">

        @include('components.navbar')

        <section class="relative min-h-[430px] bg-[url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85')] bg-cover bg-center max-[900px]:min-h-[430px]">
            <div class="absolute inset-0 bg-black/35"></div>

            <div class="absolute left-[5%] top-40 z-[2] text-white">
                <h1 class="my-[5px] font-playfair text-[80px] font-medium leading-[1.1] tracking-[6px] max-[900px]:text-[50px] max-[600px]:text-[40px]">AMENITIES DETAILS</h1>
                <p>
                </p>
            </div>
        </section>

 <div class="w-full bg-[#f4f2ec] py-8 pb-16">
    <div class="mx-auto max-w-[950px] px-6 font-montserrat">

        <a href="/amenities" class="mb-6 inline-block text-[1.15rem] font-bold text-[#223830] hover:text-[#b58950]">
            &gt; Amenities Detail
        </a>

        <div class="relative bg-white pt-10 shadow-[0_4px_15px_rgba(0,0,0,0.05)]">
            
            <div class="relative z-[2] flex flex-col px-10 md:flex-row md:items-start">
                <div class="mb-6 w-full md:mb-[-2.5rem] md:w-[42%] md:shrink-0">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80"
                        alt="Lune Cafe" class="h-[280px] w-full object-cover shadow-[0_4px_10px_rgba(0,0,0,0.15)]">
                </div>

          
                <div class="w-full pb-8 md:w-[58%] md:pb-12 md:pl-10">
                    <h2 class="mb-4 mt-0 font-playfair text-4xl font-semibold tracking-[0.02em] text-[#b58950]">Lune Cafe</h2>
                    <p class="m-0 text-[0.9rem] leading-[1.6] text-[#223830]">
                        Lune Café offers a serene sanctuary that blends harmoniously with the tranquility of its natural
                        surroundings. Embodying a philosophy of grace and elegance, the café is thoughtfully designed
                        for guests to slow down the pace of their day and savor every precious moment in a warm,
                        exclusive atmosphere.
                    </p>
                </div>
            </div>

            <div class="relative z-[1] flex flex-col bg-[#223830] px-10 py-5 text-white md:flex-row md:items-center">
                <div class="md:w-[42%]"></div>
                <div class="flex flex-col md:w-[58%] md:pl-10">
                    <span class="block text-[1.35rem] font-bold leading-[1.2]">Everyday</span>
                    <span class="mt-[0.2rem] block text-[0.95rem] font-normal opacity-90">7 a.m. - 8 p.m.</span>
                </div>
            </div>

        </div>

    </div>
</div>
        @include('components.footer')

    </body>

</html>