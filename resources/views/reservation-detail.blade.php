<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

    <body class="bg-[#f5f3ed] font-montserrat text-white">

        @include('components.navbar')

        <section class="relative min-h-[430px] bg-[url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85')] bg-cover bg-center max-[900px]:min-h-[430px]">
            <div class="absolute inset-0 bg-black/35"></div>

            <div class="absolute left-[5%] top-40 z-[2] text-white">
                <h1 class="my-[5px] font-playfair text-[80px] font-medium leading-[1.1] tracking-[6px] max-[900px]:text-[50px] max-[600px]:text-[40px]">RESERVATION DETAILS</h1>
                <p>
                    Take a quick look at the room that <br>you reserved.
                </p>
            </div>
        </section>
<div>
    <div>

        <div class="box-border w-full bg-[#f4f2ec] py-8 pb-16">
    <div class="mx-auto box-border max-w-[900px] px-6 font-montserrat">

        <a href="/profiles" class="mb-5 inline-block text-[1.15rem] font-bold text-[#223830] hover:text-[#b58950]">
            &gt; Reservation Detail
        </a>

        <div class="relative block box-border overflow-hidden bg-white shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
            
            <div class="relative z-[2] flex flex-col px-10 pt-10 md:flex-row md:items-stretch md:p-0">
                <div class="box-border w-full md:w-[42%] md:shrink-0 md:mb-0">
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=800&q=80"
                        alt="Evermist Suite" class="block min-h-[330px] h-full w-full object-cover">
                </div>

                <div class="box-border flex w-full flex-col p-10 md:w-[58%]">
                    <h2 class="mb-6 mt-0 text-center font-playfair text-[2rem] font-bold tracking-[0.05em] text-[#b58950]">EVERMIST SUITE</h2>

                    <div class="mb-4 box-border w-full">
                        <label class="mb-[0.3rem] block text-[0.9rem] font-bold text-[#223830]">Date:</label>
                        <div class="w-full box-border rounded-sm border border-[#e2e8f0] bg-white px-[0.85rem] py-[0.6rem] text-[0.85rem] font-semibold text-[#2f3e35] whitespace-normal break-words">28/09/2026 - 30/09/2026</div>
                    </div>

                    <div class="mb-4 box-border w-full">
                        <label class="mb-[0.3rem] block text-[0.9rem] font-bold text-[#223830]">Status:</label>
                        <div class="w-full box-border rounded-sm border border-[#e2e8f0] bg-white px-[0.85rem] py-[0.6rem] text-[0.85rem] font-semibold text-[#2f3e35] whitespace-normal break-words">Payed CASH no Utang, ORKAY BOS</div>
                    </div>

                    <div class="mb-4 box-border w-full">
                        <label class="mb-[0.3rem] block text-[0.9rem] font-bold text-[#223830]">Note:</label>
                        <div class="w-full box-border rounded-sm border border-[#e2e8f0] bg-white px-[0.85rem] py-[0.6rem] text-[0.85rem] font-semibold text-[#2f3e35] whitespace-normal break-words">saya mau 10, mksh.</div>
                    </div>
                </div>
            </div>

            <div class="relative z-[1] box-border flex flex-col bg-[#223830] px-10 py-5 text-white md:flex-row md:items-center">
                <div class="md:w-[42%]"></div>
                <div class="flex flex-col md:w-[58%] md:pl-10">
                    <span class="block text-[1.35rem] font-bold leading-[1.2]">Total:</span>
                    <span class="mt-[0.2rem] block text-[0.95rem] font-medium opacity-90">50.000 robux pending 3 hari</span>
                </div>
            </div>

        </div>

    </div>
</div>
        @include('components.footer')

    </body>

</html>