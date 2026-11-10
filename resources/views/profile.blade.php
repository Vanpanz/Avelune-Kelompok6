<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

    <body class="bg-[#f5f3ed] font-montserrat text-white">

        @include('components.navbar')

         <section class="relative min-h-[430px] bg-[url('https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=85')] bg-cover bg-center max-[900px]:min-h-[430px]">
            <div class="absolute inset-0 bg-black/35"></div>

            <div class="absolute left-[5%] top-40 z-[2] text-white">
                <h1 class="my-[5px] font-playfair text-[80px] font-medium leading-[1.1] tracking-[6px] max-[900px]:text-[50px] max-[600px]:text-[40px]">PROFILE</h1>
                <p>
                   Manage your account, reservations, <br>and preferences.
                </p>
            </div>
        </section>

        <main class="min-h-screen bg-[#f4f2ec] px-4 py-12 font-montserrat text-[#333]">
            <div class="mx-auto flex max-w-4xl flex-col gap-10">

                <section class="flex flex-col gap-4">
                    <h2 class="m-0 text-2xl font-bold tracking-[0.025em] text-[#223830]">Personal Information</h2>

                    <div class="flex flex-col items-center gap-8 bg-white p-6 shadow-sm sm:flex-row">
                        <div class="h-36 w-36 shrink-0 overflow-hidden rounded-full">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80"
                                alt="Profile Picture" class="h-full w-full object-cover">
                        </div>

                        <div class="grid w-full grid-cols-1 gap-x-8 gap-y-5 sm:grid-cols-2">
                            <div class="flex flex-col">
                                <span class="text-xs font-semibold uppercase tracking-[0.05em] text-[#b58950]">FULL NAME</span>
                                <p class="m-0 text-sm font-medium text-[#2B463F]">Zhang Zhen Yuan</p>
                            </div>

                            <div class="flex flex-col">
                                <span class="text-xs font-semibold uppercase tracking-[0.05em] text-[#b58950]">COUNTRY</span>
                                <p class="m-0 text-sm font-medium text-[#2B463F]">China or Cinta</p>
                            </div>

                            <div class="flex flex-col">
                                <span class="text-xs font-semibold uppercase tracking-[0.05em] text-[#b58950]">PHONE NUMBER</span>
                                <p class="m-0 text-sm font-medium text-[#2B463F]">+62 143 0520 1434</p>
                            </div>

                            <div class="flex flex-col">
                                <span class="text-xs font-semibold uppercase tracking-[0.05em] text-[#b58950]">EMAIL</span>
                                <p class="m-0 text-sm font-medium text-[#2B463F]">epepprohengker145@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="flex flex-col gap-4">
                    <h2 class="m-0 text-2xl font-bold tracking-[0.025em] text-[#223830]">Reservation</h2>

                    <div class="flex flex-col justify-between gap-4 bg-white p-6 shadow-sm md:flex-row md:items-end">
                        <div class="flex w-full flex-col gap-5 sm:flex-row sm:items-start">
                            <div class="h-36 w-full shrink-0 overflow-hidden rounded-sm sm:w-56">
                                <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80"
                                    alt="Evermist Suite" class="h-full w-full object-cover">
                            </div>

                            <div class="flex flex-col gap-[0.35rem]">
                                <h3 class="m-0 mb-[0.1rem] font-montserrat text-[1.35rem] font-black uppercase tracking-[0.05em] text-[#b58950]">EVERMIST SUITE</h3>
                                <div class="flex flex-col gap-[0.4rem] font-montserrat text-xs font-semibold tracking-[0.05em] text-[#2B463F] [&>p]:m-0 [&>p]:leading-[1.4] [&_strong]:font-[550]">
                                    <p><strong>Date:</strong> 26/09/2026 - 30/09/2026</p>
                                    <p><strong>Status:</strong> Payed CASH no Utang, ORKAY BOS</p>
                                    <p><strong>Note:</strong> saya mau 10, mksh.</p>
                                    <p><strong>TOTAL:</strong> 50.000 robux pending 3 hari</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex w-full justify-end md:w-auto">
                            <a href="{{ url('/profiles/1') }}" class="inline-block bg-[#b58950] px-6 py-2 text-xs font-semibold tracking-[0.05em] text-white transition-colors duration-200 hover:bg-[#98703e]">Details</a>
                        </div>
                    </div>

                    <div class="flex flex-col justify-between gap-4 bg-white p-6 shadow-sm md:flex-row md:items-end">
                        <div class="flex w-full flex-col gap-5 sm:flex-row sm:items-start">
                            <div class="h-36 w-full shrink-0 overflow-hidden rounded-sm sm:w-56">
                                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=600&q=80"
                                    alt="Willowmere Suite" class="h-full w-full object-cover">
                            </div>

                            <div class="flex flex-col gap-[0.35rem]">
                                <h3 class="m-0 mb-[0.1rem] font-montserrat text-[1.35rem] font-black uppercase tracking-[0.05em] text-[#b58950]">WILLOWMERE SUITE</h3>
                                <div class="flex flex-col gap-[0.4rem] font-montserrat text-xs font-semibold tracking-[0.05em] text-[#2B463F] [&>p]:m-0 [&>p]:leading-[1.4] [&_strong]:font-[550]">
                                    <p><strong>Date:</strong> 20/11/2028 - 31/11/2028</p>
                                    <p><strong>Status:</strong> Pending, tunggu ada pacar</p>
                                    <p><strong>Note:</strong> buat apa kasur dua kalo sayanya sendirian.</p>
                                    <p><strong>TOTAL:</strong> 100.000 diamond epep</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex w-full justify-end md:w-auto">
                           <a href="{{ url('/profiles/2') }}" class="inline-block bg-[#b58950] px-6 py-2 text-xs font-semibold tracking-[0.05em] text-white transition-colors duration-200 hover:bg-[#98703e]">Details</a>
                        </div>
                    </div>

                    <div class="flex flex-col justify-between gap-4 bg-white p-6 shadow-sm md:flex-row md:items-end">
                        <div class="flex w-full flex-col gap-5 sm:flex-row sm:items-start">
                            <div class="h-36 w-full shrink-0 overflow-hidden rounded-sm sm:w-56">
                                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=600&q=80"
                                    alt="Mistwood Suite" class="h-full w-full object-cover">
                            </div>

                            <div class="flex flex-col gap-[0.35rem]">
                                <h3 class="m-0 mb-[0.1rem] font-montserrat text-[1.35rem] font-black uppercase tracking-[0.05em] text-[#b58950]">MISTWOOD SUITE</h3>
                                <div class="flex flex-col gap-[0.4rem] font-montserrat text-xs font-semibold tracking-[0.05em] text-[#2B463F] [&>p]:m-0 [&>p]:leading-[1.4] [&_strong]:font-[550]">
                                    <p><strong>Date:</strong> 29/02/2026 - 31/02/2026</p>
                                    <p><strong>Status:</strong> Udh nginep bro</p>
                                    <p><strong>Note:</strong> mantap, alamnya ngalam banget, sesuai nama bngt, mistwood.
                                    </p>
                                    <p><strong>TOTAL:</strong> 500 robux soalnya tinggal di luar kamarnya</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex w-full justify-end md:w-auto">
                            <a href="{{ url('/profiles/3') }}" class="inline-block bg-[#b58950] px-6 py-2 text-xs font-semibold tracking-[0.05em] text-white transition-colors duration-200 hover:bg-[#98703e]">Details</a>
                        </div>
                    </div>

                </section>

            </div>
        </main>

        <x-footer />

        @include('components.footer')

    </body>

</html>