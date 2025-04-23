<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReFood - All Discounts is Here!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-green-600">

    {{-- Navbar --}}
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-green-600">ReFood</h1>
                    <span class="ml-2 text-gray-600 text-sm hidden sm:inline">All Discounts is Here!</span>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-green-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    {{-- Konten Utama --}}
    <main class="container mx-auto px-4 py-24">
        <div class="bg-white rounded-lg shadow p-4 md:p-6">
            <h1 class="text-2xl font-semibold text-center mb-4">Search Restaurants</h1>
            @yield('content') <!-- Konten yang di-render disini -->
        </div>
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-800 text-white text-center py-9 mt-5">
        <div class="container mx-auto px-4">
            <small>&copy; {{ date('Y') }} Admin Panel. All rights reserved.</small>
        </div>
    </footer>


    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
