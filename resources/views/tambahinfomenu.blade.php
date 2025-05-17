<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RE:FOOD</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
<body class="bg-white">
    
      <!-- Header -->
  <header class="flex justify-between items-center px-8 py-4 border-b">
    <div class="text-2xl font-bold text-green-600">RE:FOOD</div>
    <div class="flex items-center gap-2">
      <span>RM Kartika</span>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMkcqTLIrspjyL9fAWkXYfnQNMpH9Ze4RDbg&s" alt="Admin Profile" class="w-9 h-9 rounded-full object-cover">
    </div>
  </header>

  <main class="p-4">
   <nav class="text-gray-600 mb-4">
    <span>Beranda</span>
    <i class="fas fa-chevron-right mx-2"></i>
    <span class="text-green-600 font-semibold">Informasi Menu Gratis</span>
   </nav>

   <!-- Card Tambah Menu -->
   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <div class="flex justify-center items-center border-2 border-dashed border-green-200 bg-green-50 rounded-lg h-50">
        <i class="fas fa-plus text-4xl text-green-600"></i>
    </div>

    <!-- Card Menu -->
    <div class="border rounded-lg overflow-hidden shadow-sm">
        <img alt="Ayam Saus Kecap" class="w-full h-40 object-cover" height="200" src="https://i.ytimg.com/vi/LKO-6wSOw4U/maxresdefault.jpg" width="300"/>
        <div class="p-4">
            <h3 class="font-semibold">Ayam Saus Kecap</h3>
            <p class="text-gray-500 font-semibold">
                <i class="far fa-clock"></i>
            15.00 - 17.00 WIB</p>
            <p class="text-gray-500 font-regular">
                <i class="fas fa-store"></i>
            RM Kartika</p>
            <p class="text-green-600 text-3xl font-semibold">Rp0</p>
        </div>
    </div>
    
    <div class="border rounded-lg overflow-hidden shadow-sm">
        <img alt="Nasi Gulai" class="w-full h-40 object-cover" height="200" src="https://assets.ladiestory.id/gallery/1646377339454439197-nasi-padang.jpg" width="300"/>
        <div class="p-4">
            <h3 class="font-semibold">Nasi Gulai</h3>
            <p class="text-gray-500 font-semibold">
                <i class="far fa-clock"></i>
            15.00 - 17.00 WIB</p>
            <p class="text-gray-500 font-regular">
                <i class="fas fa-store"></i>
            RM Kartika</p>
            <p class="text-green-600 text-3xl font-semibold">Rp0</p>
        </div>
    </div>
    </div>
  </main>
</body>
</html>

