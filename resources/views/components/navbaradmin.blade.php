<header class="sticky top-0 z-50 flex items-center justify-between gap-4 bg-[#2B433E] px-4 py-4 text-white shadow-sm md:px-10">
    <nav aria-label="Admin navigation" class="flex flex-wrap items-center gap-x-4 gap-y-2 text-sm font-medium tracking-wide md:gap-x-8">
        <a href="{{ route('admin.bookings') }}"
            class="pb-1.5 transition-colors {{ request()->routeIs('admin.bookings') ? 'border-b-2 border-white font-semibold text-white' : 'text-gray-300 hover:text-white' }}"
            @if (request()->routeIs('admin.bookings')) aria-current="page" @endif>
            Bookings
        </a>
        <a href="{{ route('admin.available-room') }}"
            class="pb-1.5 transition-colors {{ request()->routeIs('admin.available-room') ? 'border-b-2 border-white font-semibold text-white' : 'text-gray-300 hover:text-white' }}"
            @if (request()->routeIs('admin.available-room')) aria-current="page" @endif>
            Available Room
        </a>
        <a href="{{ route('admin.cancelled-room') }}"
            class="pb-1.5 transition-colors {{ request()->routeIs('admin.cancelled-room') ? 'border-b-2 border-white font-semibold text-white' : 'text-gray-300 hover:text-white' }}"
            @if (request()->routeIs('admin.cancelled-room')) aria-current="page" @endif>
            Cancelled Room
        </a>
    </nav>

    <span class="shrink-0 text-lg font-bold tracking-[0.2em] md:text-xl">AVELUNE</span>
</header>