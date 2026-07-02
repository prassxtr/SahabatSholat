<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahabat Sholat - Digital HPT Muhammadiyah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#10b981',
                        'primary-dark': '#059669',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-emerald-50 font-sans antialiased">

    <!-- HEADER -->
    <header class="fixed top-0 left-0 right-0 bg-primary-dark z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-14 sm:h-16">
                
                <!-- LOGO -->
                <div class="flex items-center space-x-2 flex-shrink-0">
                    <img src="assets/img/LOGO-SAHABAT SHOLAT.png" alt="Logo" class="w-8 h-8 sm:w-10 sm:h-10 object-contain">
                    <div>
                        <h1 class="text-white text-sm sm:text-lg font-extrabold leading-tight">SAHABAT SHOLAT</h1>
                        <p class="text-emerald-200 text-[8px] sm:text-[10px] hidden sm:block">Digital HPT Muhammadiyah</p>
                    </div>
                </div>

                <!-- DESKTOP NAV - Hanya di desktop (≥1024px) -->
                <nav class="hidden lg:flex items-center space-x-1">
                    <button onclick="scrollToSection('sec-home')" class="nav-link-desktop px-3 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Home</button>
                    <button onclick="scrollToSection('sec-sholat')" class="nav-link-desktop px-3 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Panduan Shalat</button>
                    <button onclick="scrollToSection('sec-surah')" class="nav-link-desktop px-3 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Surah Pendek</button>
                    <button class="px-3 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Tentang Kami</button>
                </nav>

                <!-- RIGHT SIDE -->
                <div class="flex items-center space-x-2">
                    <!-- Mode Toggle Desktop - Hanya di desktop -->
                    <div class="hidden lg:flex items-center bg-white/20 backdrop-blur-sm rounded-full p-1 border border-white/30">
                        <button id="mode-anak" class="px-3 py-1 rounded-full text-xs font-bold bg-white text-primary-dark shadow-md">Mode Anak</button>
                        <button id="mode-dewasa" class="px-3 py-1 rounded-full text-xs font-bold text-white hover:bg-white/10">Mode Dewasa</button>
                    </div>

                    <!-- HAMBURGER MENU - HANYA di tablet (md:hidden lg:hidden = tablet saja) -->
                    <!-- Mobile TIDAK punya hamburger karena sudah ada bottom nav -->
                    <button onclick="toggleMobileMenu()" class="hidden md:hidden lg:hidden text-white p-2 rounded-lg hover:bg-white/10 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MOBILE/TABLET MENU DROPDOWN - HANYA untuk tablet -->
        <div id="mobile-menu" class="hidden md:hidden lg:hidden bg-white border-t border-emerald-100 shadow-lg">
            <div class="px-4 py-3 space-y-2">
                <button onclick="scrollToSection('sec-home'); toggleMobileMenu()" class="w-full text-left px-4 py-3 rounded-lg text-gray-700 font-semibold hover:bg-emerald-50 transition">🏠 Home</button>
                <button onclick="scrollToSection('sec-sholat'); toggleMobileMenu()" class="w-full text-left px-4 py-3 rounded-lg text-gray-700 font-semibold hover:bg-emerald-50 transition">📿 Panduan Shalat</button>
                <button onclick="scrollToSection('sec-surah'); toggleMobileMenu()" class="w-full text-left px-4 py-3 rounded-lg text-gray-700 font-semibold hover:bg-emerald-50 transition">📖 Surah Pendek</button>
                <button class="w-full text-left px-4 py-3 rounded-lg text-gray-700 font-semibold hover:bg-emerald-50 transition">️ Tentang Kami</button>
                
                <!-- Mode Toggle Tablet -->
                <div class="pt-3 mt-3 border-t border-gray-200">
                    <p class="text-xs text-gray-500 font-semibold mb-2">Pilih Mode:</p>
                    <div class="flex bg-emerald-100 rounded-lg p-1">
                        <button id="mode-anak-mobile" class="flex-1 px-3 py-2 rounded-md text-xs font-bold bg-white text-primary-dark"> Mode Anak</button>
                        <button id="mode-dewasa-mobile" class="flex-1 px-3 py-2 rounded-md text-xs font-bold text-emerald-700">👨 Mode Dewasa</button>
                    </div>
                </div>
            </div>
        </div>
    </header>