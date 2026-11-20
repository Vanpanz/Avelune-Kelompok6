<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Admin Dashboard</title>
    @vite(['resources/css/admin.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="min-h-screen bg-[#F3F4F6] font-sans text-gray-800 antialiased">
    @include('components.navbaradmin')

    <main class="mx-auto max-w-[1400px] px-4 py-8 sm:px-6 lg:px-8">
        <section class="mb-6 flex flex-col gap-5 rounded-xl border border-gray-200/80 bg-white p-5 shadow-sm sm:flex-row sm:items-center sm:justify-between sm:p-7">
            <div>
                <p class="mb-2 text-sm font-medium text-[#55746A]">Admin overview</p>
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Hi, Admin</h1>
                <p class="mt-2 text-sm text-gray-500">Pantau perkembangan Avelune dan ringkasan aktivitas properti.</p>
            </div>
            <a href="{{ route('admin.bookings') }}"
                class="inline-flex items-center justify-center gap-2 self-start rounded-lg bg-[#2B433E] px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#213531] sm:self-auto">
                <span>Lihat bookings</span>
                <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
            </a>
        </section>

        <section aria-label="Ringkasan administrasi" class="grid gap-6 lg:grid-cols-[minmax(0,1.55fr)_minmax(340px,1fr)]">
            <article class="rounded-xl border border-gray-200/80 bg-white p-5 shadow-sm sm:p-7">
                <div class="mb-7 flex flex-wrap items-start justify-between gap-3">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Aktivitas reservasi</h2>
                        <p class="mt-1 text-sm text-gray-500">Contoh tren reservasi selama satu minggu</p>
                    </div>
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1 text-xs font-medium text-amber-700">
                        <i class="fa-solid fa-flask text-[10px]" aria-hidden="true"></i>
                        Data contoh
                    </span>
                </div>

                <div class="flex h-56 gap-4 sm:gap-6">
                    <div class="flex flex-col justify-between pb-7 text-[11px] text-gray-400" aria-hidden="true">
                        <span>30</span>
                        <span>20</span>
                        <span>10</span>
                        <span>0</span>
                    </div>
                    <div class="relative grid flex-1 grid-cols-7 items-end gap-2 border-b border-l border-gray-100 px-2 pb-0 sm:gap-4 sm:px-4">
                        <div class="pointer-events-none absolute inset-x-0 top-0 flex h-[72%] flex-col justify-between" aria-hidden="true">
                            <span class="border-t border-dashed border-gray-100"></span>
                            <span class="border-t border-dashed border-gray-100"></span>
                            <span class="border-t border-dashed border-gray-100"></span>
                        </div>
                        <div class="z-10 flex h-full flex-col items-center justify-end gap-2"><div class="h-20 w-full max-w-10 rounded-t-md bg-[#D9E7E1] sm:h-24"></div><span class="pb-2 text-[10px] text-gray-500 sm:text-xs">Sen</span></div>
                        <div class="z-10 flex h-full flex-col items-center justify-end gap-2"><div class="h-28 w-full max-w-10 rounded-t-md bg-[#AFC8BC] sm:h-32"></div><span class="pb-2 text-[10px] text-gray-500 sm:text-xs">Sel</span></div>
                        <div class="z-10 flex h-full flex-col items-center justify-end gap-2"><div class="h-24 w-full max-w-10 rounded-t-md bg-[#D9E7E1] sm:h-28"></div><span class="pb-2 text-[10px] text-gray-500 sm:text-xs">Rab</span></div>
                        <div class="z-10 flex h-full flex-col items-center justify-end gap-2"><div class="h-32 w-full max-w-10 rounded-t-md bg-[#AFC8BC] sm:h-36"></div><span class="pb-2 text-[10px] text-gray-500 sm:text-xs">Kam</span></div>
                        <div class="z-10 flex h-full flex-col items-center justify-end gap-2"><div class="h-28 w-full max-w-10 rounded-t-md bg-[#D9E7E1] sm:h-32"></div><span class="pb-2 text-[10px] text-gray-500 sm:text-xs">Jum</span></div>
                        <div class="z-10 flex h-full flex-col items-center justify-end gap-2"><div class="h-36 w-full max-w-10 rounded-t-md bg-[#2B433E] sm:h-40"></div><span class="pb-2 text-[10px] text-gray-500 sm:text-xs">Sab</span></div>
                        <div class="z-10 flex h-full flex-col items-center justify-end gap-2"><div class="h-32 w-full max-w-10 rounded-t-md bg-[#AFC8BC] sm:h-36"></div><span class="pb-2 text-[10px] text-gray-500 sm:text-xs">Min</span></div>
                    </div>
                </div>

                <div class="mt-5 flex items-center gap-2 text-xs text-gray-500">
                    <span class="h-2.5 w-2.5 rounded-sm bg-[#2B433E]"></span>
                    <span>Jumlah reservasi (simulasi)</span>
                </div>
            </article>

            <section aria-label="Statistik aplikasi" class="grid grid-cols-2 gap-4">
                <article class="flex min-h-40 flex-col justify-between rounded-xl border border-gray-200/80 bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between gap-2">
                        <span class="text-sm font-medium text-gray-500">Akun pengguna</span>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#E8F0EC] text-[#2B433E]"><i class="fa-solid fa-users" aria-hidden="true"></i></span>
                    </div>
                    <div>
                        <p class="text-3xl font-bold tracking-tight text-gray-900">{{ number_format($registeredUsers, 0, ',', '.') }}</p>
                        <p class="mt-1 text-xs text-emerald-700">Data langsung dari database</p>
                    </div>
                </article>

                <article class="flex min-h-40 flex-col justify-between rounded-xl border border-gray-200/80 bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between gap-2">
                        <span class="text-sm font-medium text-gray-500">Bookings</span>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-100 text-emerald-700"><i class="fa-solid fa-calendar-check" aria-hidden="true"></i></span>
                    </div>
                    <div>
                        <p class="text-3xl font-bold tracking-tight text-gray-900">50</p>
                        <p class="mt-1 text-xs text-amber-700">Data contoh</p>
                    </div>
                </article>

                <article class="flex min-h-40 flex-col justify-between rounded-xl border border-gray-200/80 bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between gap-2">
                        <span class="text-sm font-medium text-gray-500">Menunggu</span>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-rose-100 text-rose-700"><i class="fa-solid fa-hourglass-half" aria-hidden="true"></i></span>
                    </div>
                    <div>
                        <p class="text-3xl font-bold tracking-tight text-gray-900">5</p>
                        <p class="mt-1 text-xs text-amber-700">Data contoh</p>
                    </div>
                </article>

                <article class="flex min-h-40 flex-col justify-between rounded-xl border border-gray-200/80 bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between gap-2">
                        <span class="text-sm font-medium text-gray-500">Kamar tersedia</span>
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-sky-100 text-sky-700"><i class="fa-solid fa-bed" aria-hidden="true"></i></span>
                    </div>
                    <div>
                        <p class="text-3xl font-bold tracking-tight text-gray-900">9</p>
                        <p class="mt-1 text-xs text-amber-700">Data contoh</p>
                    </div>
                </article>
            </section>
        </section>

        <section class="mt-6 grid gap-6 lg:grid-cols-[minmax(0,1.55fr)_minmax(340px,1fr)]">
            <article class="rounded-xl border border-gray-200/80 bg-white p-5 shadow-sm sm:p-7">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Ringkasan pendapatan</h2>
                        <p class="mt-1 text-sm text-gray-500">Estimasi pendapatan dari reservasi</p>
                    </div>
                    <span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-medium text-amber-700">Data contoh</span>
                </div>
                <p class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Rp 12.345.678</p>
                <p class="mt-2 text-sm text-gray-500">Angka ini belum terhubung ke data transaksi.</p>
            </article>

            <article class="rounded-xl border border-gray-200/80 bg-white p-5 shadow-sm sm:p-7">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#2B433E] text-lg font-semibold text-white" aria-hidden="true">A</div>
                    <div>
                        <h2 class="font-semibold text-gray-900">Admin Avelune</h2>
                        <p class="mt-1 text-sm text-gray-500">Administrator</p>
                    </div>
                </div>
                <div class="mt-6 border-t border-gray-100 pt-5">
                    <p class="text-sm font-semibold text-gray-800">Pintasan admin</p>
                    <div class="mt-3 flex flex-col gap-2">
                        <a href="{{ route('admin.bookings') }}" class="flex items-center justify-between rounded-lg bg-gray-50 px-3 py-2.5 text-sm text-gray-700 transition hover:bg-gray-100">
                            <span>Kelola bookings</span>
                            <i class="fa-solid fa-arrow-right text-xs text-gray-400" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('admin.available-room') }}" class="flex items-center justify-between rounded-lg bg-gray-50 px-3 py-2.5 text-sm text-gray-700 transition hover:bg-gray-100">
                            <span>Lihat kamar tersedia</span>
                            <i class="fa-solid fa-arrow-right text-xs text-gray-400" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </article>
        </section>

        <p class="mt-5 text-xs leading-5 text-gray-500">
            Catatan: jumlah akun pengguna dihitung dari database. Data booking, status, kamar, dan pendapatan masih berupa contoh karena belum tersedia tabel operasional.
        </p>
    </main>
</body>

</html>
