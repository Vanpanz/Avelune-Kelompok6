<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin POV - List Booking</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Font: Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen">

  <!-- Top Navigation Bar -->
  <header class="bg-[#2D4A43] text-white px-8 py-4 flex items-center justify-between shadow-md">
    <div class="flex items-center space-x-12">
      <!-- User Profile Circle -->
      <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-700 font-bold">
        <!-- Placeholder for Profile Image/Icon -->
      </div>
      
      <!-- Navigation Links -->
      <nav class="flex space-x-8 text-sm font-medium">
        <a href="#" class="text-white border-b-2 border-white pb-1">Bookings</a>
        <a href="#" class="text-gray-300 hover:text-white transition">Available Room</a>
        <a href="#" class="text-gray-300 hover:text-white transition">Cancelled Room</a>
        <a href="#" class="text-gray-300 hover:text-white transition">Booking History</a>
      </nav>
    </div>

    <!-- Logo / Brand Name -->
    <div class="flex items-center space-x-2">
      <div class="text-right">
        <span class="block text-lg font-bold tracking-widest uppercase">AVELUNE</span>
      </div>
    </div>
  </header>

  <!-- Main Content Area -->
  <main class="max-w-7xl mx-auto p-8">
    
    <!-- Title & Add New Button -->
    <div class="flex justify-between items-start mb-6">
      <div>
        <h1 class="text-2xl font-bold text-gray-900">List Booking</h1>
        <p class="text-sm text-gray-500 mt-1">Manage all hotel reservations</p>
      </div>
      <button class="bg-[#2D4A43] hover:bg-[#233a34] text-white text-sm font-medium px-4 py-2 rounded-lg flex items-center gap-2 shadow-sm transition">
        <i class="fa-solid fa-plus text-xs"></i>
        New booking
      </button>
    </div>

    <!-- White Card Container for Table & Filters -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
      
      <!-- Filters and Search Bar -->
      <div class="flex flex-wrap items-center gap-4 mb-6">
        <!-- Search Input -->
        <div class="relative flex-1 min-w-[200px] max-w-xs">
          <input 
            type="text" 
            placeholder="search..." 
            class="w-full pl-3 pr-10 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#2D4A43]"
          />
          <i class="fa-solid fa-magnifying-glass absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
        </div>

        <!-- Filter Button -->
        <button class="flex items-center gap-2 px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50 transition">
          <i class="fa-solid fa-filter text-xs text-gray-500"></i>
          <span>Filter</span>
          <i class="fa-solid fa-chevron-down text-xs text-gray-400 ml-1"></i>
        </button>

        <!-- Date Range Picker Input -->
        <div class="relative min-w-[200px]">
          <input 
            type="text" 
            placeholder="Select date range..." 
            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#2D4A43]"
            onfocus="(this.type='date')"
          />
          <i class="fa-regular fa-calendar absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
        </div>
      </div>

      <!-- Data Table -->
      <div class="overflow-x-auto">
        <table class="w-full text-left text-xs border-collapse">
          <thead>
            <tr class="bg-gray-100 text-gray-700 font-bold uppercase tracking-wider border-b border-gray-200">
              <th class="py-3 px-4">NO.</th>
              <th class="py-3 px-4">BOOKING ID</th>
              <th class="py-3 px-4">GUEST NAME</th>
              <th class="py-3 px-4">DATE</th>
              <th class="py-3 px-4">ROOM NUMBER</th>
              <th class="py-3 px-4">CHECK IN</th>
              <th class="py-3 px-4">CHECK OUT</th>
              <th class="py-3 px-4">PERSON</th>
              <th class="py-3 px-4">TOTAL (IDR)</th>
              <th class="py-3 px-4">STATUS</th>
              <th class="py-3 px-4 text-center">ACTION</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100 text-gray-600 font-medium">
            
            <!-- Row 1 -->
            <tr class="hover:bg-gray-50">
              <td class="py-3.5 px-4">1</td>
              <td class="py-3.5 px-4 font-semibold text-gray-800">AVL-260801-001</td>
              <td class="py-3.5 px-4">Cuking Cuking</td>
              <td class="py-3.5 px-4">01 Aug 2026</td>
              <td class="py-3.5 px-4">101</td>
              <td class="py-3.5 px-4">01 Aug 2026</td>
              <td class="py-3.5 px-4">03 Aug 2026</td>
              <td class="py-3.5 px-4">2 Adults</td>
              <td class="py-3.5 px-4">12345678</td>
              <td class="py-3.5 px-4">
                <span class="bg-green-100 text-green-600 text-[10px] font-bold px-2.5 py-1 rounded-full">Confirmed</span>
              </td>
              <td class="py-3.5 px-4 text-center">
                <div class="flex items-center justify-center space-x-2 text-gray-500">
                  <button class="hover:text-blue-600"><i class="fa-regular fa-eye"></i></button>
                  <button class="hover:text-amber-600"><i class="fa-regular fa-pen-to-square"></i></button>
                  <button class="hover:text-red-600"><i class="fa-regular fa-trash-can text-red-400"></i></button>
                </div>
              </td>
            </tr>

            <!-- Row 2 -->
            <tr class="hover:bg-gray-50">
              <td class="py-3.5 px-4">2</td>
              <td class="py-3.5 px-4 font-semibold text-gray-800">AVL-260801-002</td>
              <td class="py-3.5 px-4">Okky Jelly</td>
              <td class="py-3.5 px-4">02 Aug 2026</td>
              <td class="py-3.5 px-4">102</td>
              <td class="py-3.5 px-4">02 Aug 2026</td>
              <td class="py-3.5 px-4">05 Aug 2026</td>
              <td class="py-3.5 px-4">2 Adults</td>
              <td class="py-3.5 px-4">12345678</td>
              <td class="py-3.5 px-4">
                <span class="bg-green-100 text-green-600 text-[10px] font-bold px-2.5 py-1 rounded-full">Confirmed</span>
              </td>
              <td class="py-3.5 px-4 text-center">
                <div class="flex items-center justify-center space-x-2 text-gray-500">
                  <button class="hover:text-blue-600"><i class="fa-regular fa-eye"></i></button>
                  <button class="hover:text-amber-600"><i class="fa-regular fa-pen-to-square"></i></button>
                  <button class="hover:text-red-600"><i class="fa-regular fa-trash-can text-red-400"></i></button>
                </div>
              </td>
            </tr>

            <!-- Repeating Rows for Demonstration -->
            <!-- Duplicate Row Item -->
            <script>
              // Script singkat untuk memperbanyak baris seperti di gambar
              const rowContent = `
                <tr class="hover:bg-gray-50">
                  <td class="py-3.5 px-4">3</td>
                  <td class="py-3.5 px-4 font-semibold text-gray-800">AVL-260801-002</td>
                  <td class="py-3.5 px-4">Okky Jelly</td>
                  <td class="py-3.5 px-4">02 Aug 2026</td>
                  <td class="py-3.5 px-4">102</td>
                  <td class="py-3.5 px-4">02 Aug 2026</td>
                  <td class="py-3.5 px-4">05 Aug 2026</td>
                  <td class="py-3.5 px-4">2 Adults</td>
                  <td class="py-3.5 px-4">12345678</td>
                  <td class="py-3.5 px-4">
                    <span class="bg-green-100 text-green-600 text-[10px] font-bold px-2.5 py-1 rounded-full">Confirmed</span>
                  </td>
                  <td class="py-3.5 px-4 text-center">
                    <div class="flex items-center justify-center space-x-2 text-gray-500">
                      <button class="hover:text-blue-600"><i class="fa-regular fa-eye"></i></button>
                      <button class="hover:text-amber-600"><i class="fa-regular fa-pen-to-square"></i></button>
                      <button class="hover:text-red-600"><i class="fa-regular fa-trash-can text-red-400"></i></button>
                    </div>
                  </td>
                </tr>
              `;
              for(let i=0; i<6; i++) {
                document.write(rowContent);
              }
            </script>

          </tbody>
        </table>
      </div>

    </div>
  </main>

</body>
</html>