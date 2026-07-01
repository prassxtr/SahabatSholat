<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahabat Sholat</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Menghilangkan scrollbar default untuk efek snap scroll yang mulus */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        /* Definisi warna primary hijau Muhammadiyah (opsional jika belum diatur di tailwind.config) */
        .bg-primary { background-color: #0d7a41; }
        .text-primary { color: #0d7a41; }
        .border-primary { border-color: #0d7a41; }
        .hover\:bg-emerald-700:hover { background-color: #046331; }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">

<header class="bg-primary text-white sticky top-0 z-50 h-[70px] flex items-center px-4 md:px-8 shadow-md">
    <div class="max-w-7xl w-full mx-auto flex justify-between items-center">
        
        <a href="#sec-home" onclick="scrollToSection('sec-home')" class="flex items-center space-x-3 group cursor-pointer decoration-none">
            
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-inner overflow-hidden p-1 group-hover:scale-105 transition-transform duration-300">
                <img src="assets/img/LOGO-SAHABAT SHOLAT HD 1.png" alt="Logo Sahabat Sholat" class="w-full h-full object-contain" onerror="this.src='https://placehold.co/40x40/ffffff/0d7a41?text=🕌'">
            </div>
            
            <span class="font-black text-lg md:text-xl tracking-wider text-white group-hover:text-emerald-100 transition-colors duration-300">
                SAHABAT SHOLAT
            </span>
        </a>

        <nav class="hidden md:flex space-x-6 text-sm">
            <a id="nav-home" onclick="scrollToSection('sec-home')" class="nav-link text-white font-bold underline cursor-pointer transition-all duration-200">Home</a>
            <a id="nav-sholat" onclick="scrollToSection('sec-sholat')" class="nav-link text-emerald-200 hover:text-white cursor-pointer transition-all duration-200">Panduan Sholat</a>
            <a id="nav-surah" onclick="scrollToSection('sec-surah')" class="nav-link text-emerald-200 hover:text-white cursor-pointer transition-all duration-200">Surah Pendek</a>
            <a href="#" class="nav-link text-emerald-200 hover:text-white transition-all duration-200">Tentang Kami</a>
        </nav>

        <div class="flex items-center space-x-2">
            <button class="bg-white text-primary text-xs font-bold px-3 py-1.5 rounded-full hover:bg-emerald-50 shadow-sm transition-all duration-200 cursor-pointer">
                Mode Anak
            </button>
            <button class="border border-white/40 text-white text-xs font-semibold px-3 py-1.5 rounded-full hover:bg-white/10 transition-all duration-200 cursor-pointer">
                Mode Dewasa
            </button>
        </div>

    </div>
</header>