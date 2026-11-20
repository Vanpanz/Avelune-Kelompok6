<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin POV - List Booking</title>
    @vite(['resources/css/admin.css'])
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="min-h-screen bg-[#F3F4F6] font-sans text-gray-800 antialiased">

    @include('components.navbaradmin')

    <!-- MAIN CONTAINER -->
    <main class="max-w-[1400px] mx-auto px-8 pt-8">
        <!-- PAGE TITLE & HEADER ACTION -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 tracking-tight">List Booking</h1>
                <p class="text-xs text-gray-500 mt-1 font-normal">Manage all hotel reservations seamlessly</p>
            </div>
            <button
                class="bg-[#2B433E] hover:bg-[#213531] text-white text-xs font-semibold px-5 py-2.5 rounded-md flex items-center gap-2 transition-all shadow-sm active:scale-95">
                <i class="fa-solid fa-plus text-xs"></i>
                <span>New booking</span>
            </button>
        </div>

        <!-- MAIN CARD TABLE CONTAINER -->
        <div class="bg-white rounded-lg border border-gray-200/80 shadow-sm overflow-hidden">
            <!-- FILTER & SEARCH BAR SECTION -->
            <div class="p-6 border-b border-gray-100 flex flex-wrap items-center justify-between gap-4">
                <div class="flex flex-wrap items-center gap-3 w-full md:w-auto">
                    <!-- Search Input -->
                    <div class="relative min-w-[240px]">
                        <input type="text" placeholder="search..."
                            class="w-full pl-4 pr-10 py-2 bg-white border border-gray-300 rounded-md text-xs text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#2B433E] focus:ring-1 focus:ring-[#2B433E] transition" />
                        <i
                            class="fa-solid fa-magnifying-glass absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                    </div>

                    <!-- Filter Dropdown Button -->
                    <button
                        class="flex items-center gap-2.5 px-4 py-2 border border-gray-300 rounded-md text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 transition active:bg-gray-100">
                        <i class="fa-solid fa-filter text-gray-400 text-xs"></i>
                        <span>Filter</span>
                        <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 ml-1"></i>
                    </button>

                    <!-- Date Range Selector -->
                    <div class="relative min-w-[220px]">
                        <input type="text" placeholder="Select date range..."
                            class="w-full pl-9 pr-4 py-2 bg-white border border-gray-300 rounded-md text-xs text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#2B433E] focus:ring-1 focus:ring-[#2B433E] transition"
                            onfocus="(this.type='date')" onblur="(this.type='text')" />
                        <i
                            class="fa-regular fa-calendar absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                    </div>

                </div>
            </div>

            <!-- TABLE AREA -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse whitespace-nowrap">
                    <thead>
                        <tr
                            class="bg-gray-50 text-gray-600 text-[11px] font-bold uppercase tracking-wider border-b border-gray-200">
                            <th class="py-3.5 px-6">NO.</th>
                            <th class="py-3.5 px-4">BOOKING ID</th>
                            <th class="py-3.5 px-4">GUEST NAME</th>
                            <th class="py-3.5 px-4">DATE</th>
                            <th class="py-3.5 px-4 text-center">ROOM NUMBER</th>
                            <th class="py-3.5 px-4">CHECK IN</th>
                            <th class="py-3.5 px-4">CHECK OUT</th>
                            <th class="py-3.5 px-4">PERSON</th>
                            <th class="py-3.5 px-4">TOTAL (IDR)</th>
                            <th class="py-3.5 px-4">STATUS</th>
                            <th class="py-3.5 px-6 text-center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-xs text-gray-600 font-normal">
                        @foreach ([
                            ['id' => 'AVL-260801-014', 'name' => 'Nadia Putri', 'date' => '01 Aug 2026', 'room' => '204', 'check_in' => '04 Aug 2026', 'check_out' => '06 Aug 2026', 'guests' => '1 Adult', 'total' => '4.250.000'],
                            ['id' => 'AVL-260802-027', 'name' => 'Rizky Pratama', 'date' => '02 Aug 2026', 'room' => '315', 'check_in' => '07 Aug 2026', 'check_out' => '10 Aug 2026', 'guests' => '2 Adults', 'total' => '8.750.000'],
                            ['id' => 'AVL-260803-039', 'name' => 'Maya Lestari', 'date' => '03 Aug 2026', 'room' => '108', 'check_in' => '11 Aug 2026', 'check_out' => '13 Aug 2026', 'guests' => '2 Adults, 1 Child', 'total' => '6.300.000'],
                            ['id' => 'AVL-260804-042', 'name' => 'Bima Saputra', 'date' => '04 Aug 2026', 'room' => '221', 'check_in' => '14 Aug 2026', 'check_out' => '18 Aug 2026', 'guests' => '3 Adults', 'total' => '11.200.000'],
                            ['id' => 'AVL-260805-056', 'name' => 'Clara Wijaya', 'date' => '05 Aug 2026', 'room' => '407', 'check_in' => '19 Aug 2026', 'check_out' => '21 Aug 2026', 'guests' => '1 Adult, 1 Child', 'total' => '7.450.000'],
                            ['id' => 'AVL-260806-063', 'name' => 'Fajar Ramadhan', 'date' => '06 Aug 2026', 'room' => '112', 'check_in' => '22 Aug 2026', 'check_out' => '25 Aug 2026', 'guests' => '3 Adults, 1 Child', 'total' => '5.800.000'],
                            ['id' => 'AVL-260807-071', 'name' => 'Sinta Maharani', 'date' => '07 Aug 2026', 'room' => '306', 'check_in' => '26 Aug 2026', 'check_out' => '29 Aug 2026', 'guests' => '2 Adults, 2 Children', 'total' => '9.600.000'],
                            ['id' => 'AVL-260808-085', 'name' => 'Dimas Kurniawan', 'date' => '08 Aug 2026', 'room' => '510', 'check_in' => '30 Aug 2026', 'check_out' => '02 Sep 2026', 'guests' => '5 Adults', 'total' => '13.500.000'],
                        ] as $index => $booking)
                            <tr class="transition-colors hover:bg-gray-50/80">
                                <td class="px-6 py-4 font-medium text-gray-500">{{ $index + 1 }}</td>
                                <td class="px-4 py-4 font-semibold text-gray-900">{{ $booking['id'] }}</td>
                                <td class="px-4 py-4 font-medium text-gray-800">{{ $booking['name'] }}</td>
                                <td class="px-4 py-4 text-gray-500">{{ $booking['date'] }}</td>
                                <td class="px-4 py-4 text-center font-medium text-gray-800">{{ $booking['room'] }}</td>
                                <td class="px-4 py-4 text-gray-500">{{ $booking['check_in'] }}</td>
                                <td class="px-4 py-4 text-gray-500">{{ $booking['check_out'] }}</td>
                                <td class="px-4 py-4 text-gray-700">{{ $booking['guests'] }}</td>
                                <td class="px-4 py-4 font-medium text-gray-800">{{ $booking['total'] }}</td>
                                <td class="px-4 py-4">
                                    <span class="inline-flex items-center rounded-full bg-rose-100 px-2.5 py-0.5 text-[10px] font-semibold text-rose-700">
                                        Cancelled
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        <button type="button" class="p-1 text-gray-400 transition hover:text-blue-600" title="View Detail"><i class="fa-regular fa-eye text-sm"></i></button>
                                        <button type="button" class="p-1 text-gray-400 transition hover:text-amber-600" title="Edit"><i class="fa-regular fa-pen-to-square text-sm"></i></button>
                                        <button type="button" class="p-1 text-gray-400 transition hover:text-rose-600" title="Delete"><i class="fa-regular fa-trash-can text-sm"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- FOOTER PAGINATION -->
            <div class="p-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                <span>Showing 1 to 8 of 24 entries</span>
                <div class="flex items-center gap-1">
                    <button
                        class="px-2.5 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50 disabled:opacity-50">Prev</button>
                    <button class="px-2.5 py-1 bg-[#2B433E] text-white rounded font-medium">1</button>
                    <button class="px-2.5 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50">2</button>
                    <button class="px-2.5 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50">3</button>
                    <button
                        class="px-2.5 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50">Next</button>
                </div>
            </div>

        </div>
    </main>

</body>

</html>