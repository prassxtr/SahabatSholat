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

    <!-- HEADER - Sesuai Desain Referensi -->
    <header class="fixed top-0 left-0 right-0 bg-emerald-600 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <!-- LOGO - Kiri -->
                <div class="flex items-center space-x-3 flex-shrink-0">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center overflow-hidden shadow-md">
                        <img src="assets/img/LOGO-SAHABATSHOLAT.png" 
                             alt="Logo Sahabat Sholat" 
                             class="w-8 h-8 object-contain"
                             onerror="this.style.display='none'; this.parentElement.innerHTML='🕌'">
                    </div>
                    <div>
                        <h1 class="text-white text-lg font-extrabold leading-tight tracking-wide">SAHABAT SHOLAT</h1>
                        <p class="text-emerald-100 text-[10px]">Digital HPT Muhammadiyah</p>
                    </div>
                </div>

                <!-- DESKTOP NAVIGATION - Tengah -->
                <nav class="hidden lg:flex items-center space-x-1">
                    <button onclick="scrollToSection('sec-home')" class="nav-link-desktop px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition" data-target="sec-home">
                        Home
                    </button>
                    <button onclick="scrollToSection('sec-sholat')" class="nav-link-desktop px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition" data-target="sec-sholat">
                        Panduan Shalat
                    </button>
                    <button onclick="scrollToSection('sec-surah')" class="nav-link-desktop px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition" data-target="sec-surah">
                        Surah Pendek
                    </button>
                    <button class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">
                        Tentang Kami
                    </button>
                </nav>

                <!-- RIGHT SIDE - Mode Toggle + Hamburger -->
                <div class="flex items-center space-x-2">
                    <!-- Mode Toggle - Desktop -->
                    <div class="hidden lg:flex items-center bg-white/20 backdrop-blur-sm rounded-full p-1 border border-white/30">
                        <button id="mode-anak" class="px-4 py-1.5 rounded-full text-xs font-bold bg-white text-emerald-700 shadow-md transition">
                            Mode Anak
                        </button>
                        <button id="mode-dewasa" class="px-4 py-1.5 rounded-full text-xs font-bold text-white hover:bg-white/10 transition">
                            Mode Dewasa
                        </button>
                    </div>

                    <!-- HAMBURGER MENU - Mobile & Tablet -->
                    <button onclick="toggleMobileMenu()" class="lg:hidden text-white p-2 rounded-lg hover:bg-white/10 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MOBILE/TABLET MENU DROPDOWN -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-emerald-100 shadow-lg">
            <div class="px-4 py-3 space-y-2">
                <button onclick="scrollToSection('sec-home'); toggleMobileMenu()" class="w-full text-left px-4 py-3 rounded-lg text-gray-700 font-semibold hover:bg-emerald-50 transition flex items-center gap-3">
                    <span class="text-xl">🏠</span> Home
                </button>
                <button onclick="scrollToSection('sec-sholat'); toggleMobileMenu()" class="w-full text-left px-4 py-3 rounded-lg text-gray-700 font-semibold hover:bg-emerald-50 transition flex items-center gap-3">
                    <span class="text-xl">📿</span> Panduan Shalat
                </button>
                <button onclick="scrollToSection('sec-surah'); toggleMobileMenu()" class="w-full text-left px-4 py-3 rounded-lg text-gray-700 font-semibold hover:bg-emerald-50 transition flex items-center gap-3">
                    <span class="text-xl">📖</span> Surah Pendek
                </button>
                <button class="w-full text-left px-4 py-3 rounded-lg text-gray-700 font-semibold hover:bg-emerald-50 transition flex items-center gap-3">
                    <span class="text-xl">ℹ️</span> Tentang Kami
                </button>
                
                <!-- Mode Toggle Mobile -->
                <div class="pt-3 mt-3 border-t border-gray-200">
                    <p class="text-xs text-gray-500 font-semibold mb-2">Pilih Mode:</p>
                    <div class="flex bg-emerald-100 rounded-lg p-1">
                        <button id="mode-anak-mobile" class="flex-1 px-3 py-2 rounded-md text-xs font-bold bg-white text-emerald-700 shadow-sm">
                            👶 Mode Anak
                        </button>
                        <button id="mode-dewasa-mobile" class="flex-1 px-3 py-2 rounded-md text-xs font-bold text-emerald-700">
                            👨 Mode Dewasa
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>