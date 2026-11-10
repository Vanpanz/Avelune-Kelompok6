<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Available Room</title>

    @vite(['resources/css/admin.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="min-h-screen bg-[#F3F4F6] font-sans text-gray-800 antialiased">
    @include('components.navbaradmin')

    <main class="mx-auto max-w-[1400px] px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-900">Available Room</h1>
                <p class="mt-1 text-sm text-gray-500">Manage all available hotel rooms</p>
            </div>
            <button type="button"
                class="inline-flex items-center justify-center gap-2 rounded-md bg-[#2B433E] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#213531]">
                <i class="fa-solid fa-plus text-xs"></i>
                <span>New room</span>
            </button>
        </div>

        <section class="overflow-hidden rounded-lg border border-gray-200/80 bg-white shadow-sm">
            <div class="flex flex-col gap-3 border-b border-gray-100 p-4 sm:flex-row sm:flex-wrap sm:items-center sm:p-6">
                <label class="relative block w-full sm:max-w-xs">
                    <span class="sr-only">Search rooms</span>
                    <input type="search" placeholder="Search rooms..."
                        class="w-full rounded-md border border-gray-300 py-2 pl-4 pr-10 text-sm text-gray-700 placeholder-gray-400 transition focus:border-[#2B433E] focus:outline-none focus:ring-1 focus:ring-[#2B433E]">
                    <i class="fa-solid fa-magnifying-glass absolute right-3.5 top-1/2 -translate-y-1/2 text-xs text-gray-400"></i>
                </label>

                <button type="button"
                    class="inline-flex items-center justify-center gap-2 rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50">
                    <i class="fa-solid fa-filter text-xs text-gray-400"></i>
                    <span>Filter</span>
                    <i class="fa-solid fa-chevron-down text-[10px] text-gray-400"></i>
                </button>

                <label class="relative block w-full sm:max-w-xs">
                    <span class="sr-only">Select date</span>
                    <input type="date"
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-600 transition focus:border-[#2B433E] focus:outline-none focus:ring-1 focus:ring-[#2B433E]">
                </label>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[720px] border-collapse text-left">
                    <thead>
                        <tr class="border-b border-gray-200 bg-gray-50 text-[11px] font-bold uppercase tracking-wider text-gray-600">
                            <th scope="col" class="px-6 py-3.5">No.</th>
                            <th scope="col" class="px-4 py-3.5">Room Number</th>
                            <th scope="col" class="px-4 py-3.5">Room Suite</th>
                            <th scope="col" class="px-4 py-3.5">Guest Capacity</th>
                            <th scope="col" class="px-4 py-3.5">Status</th>
                            <th scope="col" class="px-6 py-3.5 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-xs text-gray-600">
                        @foreach ([101, 102, 102, 102, 102, 102, 102, 102, 102] as $index => $roomNumber)
                            <tr class="transition-colors hover:bg-gray-50/80">
                                <td class="px-6 py-4 font-medium text-gray-500">{{ $index + 1 }}</td>
                                <td class="px-4 py-4 font-medium text-gray-800">{{ $roomNumber }}</td>
                                <td class="px-4 py-4 font-medium text-gray-800">Willowmere Suite</td>
                                <td class="px-4 py-4 text-gray-700">2 people</td>
                                <td class="px-4 py-4">
                                    <span class="inline-flex items-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-[10px] font-semibold text-emerald-700">
                                        Available
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        <button type="button" class="p-1 text-gray-400 transition hover:text-blue-600" title="View room">
                                            <i class="fa-regular fa-eye text-sm"></i>
                                        </button>
                                        <button type="button" class="p-1 text-gray-400 transition hover:text-amber-600" title="Edit room">
                                            <i class="fa-regular fa-pen-to-square text-sm"></i>
                                        </button>
                                        <button type="button" class="p-1 text-gray-400 transition hover:text-rose-600" title="Delete room">
                                            <i class="fa-regular fa-trash-can text-sm"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col gap-3 border-t border-gray-100 p-4 text-xs text-gray-500 sm:flex-row sm:items-center sm:justify-between">
                <span>Showing 1 to 9 of 24 entries</span>
                <nav aria-label="Room pagination" class="flex items-center gap-1">
                    <button type="button" disabled
                        class="rounded border border-gray-200 px-2.5 py-1 text-gray-600 disabled:opacity-50">Prev</button>
                    <button type="button" aria-current="page" class="rounded bg-[#2B433E] px-2.5 py-1 font-medium text-white">1</button>
                    <button type="button" class="rounded border border-gray-200 px-2.5 py-1 text-gray-600 transition hover:bg-gray-50">2</button>
                    <button type="button" class="rounded border border-gray-200 px-2.5 py-1 text-gray-600 transition hover:bg-gray-50">3</button>
                    <button type="button" class="rounded border border-gray-200 px-2.5 py-1 text-gray-600 transition hover:bg-gray-50">Next</button>
                </nav>
            </div>
        </section>
    </main>
</body>

</html>
