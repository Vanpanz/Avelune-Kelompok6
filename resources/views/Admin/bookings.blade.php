<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin POV - List Booking</title>
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Google Font: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    body {
      font-family: 'Inter', sans-serif;
    }
</style>
</head>
<body class="bg-[#F3F4F6] min-h-screen text-gray-800 antialiased pb-12">
 
  <!-- TOP HEADER / NAVBAR -->

 
  <!-- MAIN CONTAINER -->
<main class="max-w-[1400px] mx-auto px-8 pt-8">
<!-- PAGE TITLE & HEADER ACTION -->
<div class="flex justify-between items-center mb-8">
<div>
<h1 class="text-2xl font-bold text-gray-900 tracking-tight">List Booking</h1>
<p class="text-xs text-gray-500 mt-1 font-normal">Manage all hotel reservations seamlessly</p>
</div>
<button class="bg-[#2B433E] hover:bg-[#213531] text-white text-xs font-semibold px-5 py-2.5 rounded-md flex items-center gap-2 transition-all shadow-sm active:scale-95">
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
<input 
              type="text" 
              placeholder="search..." 
              class="w-full pl-4 pr-10 py-2 bg-white border border-gray-300 rounded-md text-xs text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#2B433E] focus:ring-1 focus:ring-[#2B433E] transition"
            />
<i class="fa-solid fa-magnifying-glass absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
</div>
 
          <!-- Filter Dropdown Button -->
<button class="flex items-center gap-2.5 px-4 py-2 border border-gray-300 rounded-md text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 transition active:bg-gray-100">
<i class="fa-solid fa-filter text-gray-400 text-xs"></i>
<span>Filter</span>
<i class="fa-solid fa-chevron-down text-[10px] text-gray-400 ml-1"></i>
</button>
 
          <!-- Date Range Selector -->
<div class="relative min-w-[220px]">
<input 
              type="text" 
              placeholder="Select date range..." 
              class="w-full pl-9 pr-4 py-2 bg-white border border-gray-300 rounded-md text-xs text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#2B433E] focus:ring-1 focus:ring-[#2B433E] transition"
              onfocus="(this.type='date')"
              onblur="(this.type='text')"
            />
<i class="fa-regular fa-calendar absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
</div>
 
        </div>
</div>
 
      <!-- TABLE AREA -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse whitespace-nowrap">
<thead>
<tr class="bg-gray-50 text-gray-600 text-[11px] font-bold uppercase tracking-wider border-b border-gray-200">
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
<!-- Row 1 -->
<tr class="hover:bg-gray-50/80 transition-colors">
<td class="py-4 px-6 font-medium text-gray-500">1</td>
<td class="py-4 px-4 font-semibold text-gray-900">AVL-260801-001</td>
<td class="py-4 px-4 font-medium text-gray-800">Cuking Cuking</td>
<td class="py-4 px-4 text-gray-500">01 Aug 2026</td>
<td class="py-4 px-4 text-center font-medium text-gray-800">101</td>
<td class="py-4 px-4 text-gray-500">01 Aug 2026</td>
<td class="py-4 px-4 text-gray-500">03 Aug 2026</td>
<td class="py-4 px-4 text-gray-700">2 Adults</td>
<td class="py-4 px-4 font-medium text-gray-800">12.345.678</td>
<td class="py-4 px-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-100 text-emerald-700">
                  Confirmed
</span>
</td>
<td class="py-4 px-6 text-center">
<div class="flex items-center justify-center gap-3">
<button class="p-1 text-gray-400 hover:text-blue-600 transition" title="View Detail"><i class="fa-regular fa-eye text-sm"></i></button>
<button class="p-1 text-gray-400 hover:text-amber-600 transition" title="Edit"><i class="fa-regular fa-pen-to-square text-sm"></i></button>
<button class="p-1 text-gray-400 hover:text-rose-600 transition" title="Delete"><i class="fa-regular fa-trash-can text-sm"></i></button>
</div>
</td>
</tr>
 
            <!-- Row 2 -->
<tr class="hover:bg-gray-50/80 transition-colors">
<td class="py-4 px-6 font-medium text-gray-500">2</td>
<td class="py-4 px-4 font-semibold text-gray-900">AVL-260801-002</td>
<td class="py-4 px-4 font-medium text-gray-800">Okky Jelly</td>
<td class="py-4 px-4 text-gray-500">02 Aug 2026</td>
<td class="py-4 px-4 text-center font-medium text-gray-800">102</td>
<td class="py-4 px-4 text-gray-500">02 Aug 2026</td>
<td class="py-4 px-4 text-gray-500">05 Aug 2026</td>
<td class="py-4 px-4 text-gray-700">2 Adults</td>
<td class="py-4 px-4 font-medium text-gray-800">12.345.678</td>
<td class="py-4 px-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-100 text-emerald-700">
                  Confirmed
</span>
</td>
<td class="py-4 px-6 text-center">
<div class="flex items-center justify-center gap-3">
<button class="p-1 text-gray-400 hover:text-blue-600 transition" title="View Detail"><i class="fa-regular fa-eye text-sm"></i></button>
<button class="p-1 text-gray-400 hover:text-amber-600 transition" title="Edit"><i class="fa-regular fa-pen-to-square text-sm"></i></button>
<button class="p-1 text-gray-400 hover:text-rose-600 transition" title="Delete"><i class="fa-regular fa-trash-can text-sm"></i></button>
</div>
</td>
</tr>
 
            <!-- Loop Dummy Data Rows -->
<script>
              const rowTemplate = (no) => `
<tr class="hover:bg-gray-50/80 transition-colors">
<td class="py-4 px-6 font-medium text-gray-500">${no}</td>
<td class="py-4 px-4 font-semibold text-gray-900">AVL-260801-002</td>
<td class="py-4 px-4 font-medium text-gray-800">Okky Jelly</td>
<td class="py-4 px-4 text-gray-500">02 Aug 2026</td>
<td class="py-4 px-4 text-center font-medium text-gray-800">102</td>
<td class="py-4 px-4 text-gray-500">02 Aug 2026</td>
<td class="py-4 px-4 text-gray-500">05 Aug 2026</td>
<td class="py-4 px-4 text-gray-700">2 Adults</td>
<td class="py-4 px-4 font-medium text-gray-800">12.345.678</td>
<td class="py-4 px-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-100 text-emerald-700">
                      Confirmed
</span>
</td>
<td class="py-4 px-6 text-center">
<div class="flex items-center justify-center gap-3">
<button class="p-1 text-gray-400 hover:text-blue-600 transition" title="View Detail"><i class="fa-regular fa-eye text-sm"></i></button>
<button class="p-1 text-gray-400 hover:text-amber-600 transition" title="Edit"><i class="fa-regular fa-pen-to-square text-sm"></i></button>
<button class="p-1 text-gray-400 hover:text-rose-600 transition" title="Delete"><i class="fa-regular fa-trash-can text-sm"></i></button>
</div>
</td>
</tr>
              `;
              for(let i=3; i<=8; i++) {
                document.write(rowTemplate(i));
              }
</script>
 
          </tbody>
</table>
</div>
 
      <!-- FOOTER PAGINATION (Bonus Penambahan Perapian) -->
<div class="p-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
<span>Showing 1 to 8 of 24 entries</span>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50 disabled:opacity-50">Prev</button>
<button class="px-2.5 py-1 bg-[#2B433E] text-white rounded font-medium">1</button>
<button class="px-2.5 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50">2</button>
<button class="px-2.5 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50">3</button>
<button class="px-2.5 py-1 border border-gray-200 rounded text-gray-600 hover:bg-gray-50">Next</button>
</div>
</div>
 
    </div>
</main>
 
</body>
</html>