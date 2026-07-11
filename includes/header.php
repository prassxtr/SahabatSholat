<?php 
// Pastikan variabel $mode terbaca di header
if (!isset($mode)) {
    $mode = isset($_GET['mode']) ? $_GET['mode'] : 'anak';
}

// Tentukan warna header berdasarkan mode
$headerBg = $mode === 'dewasa' ? 'bg-slate-800' : 'bg-emerald-600';
$headerText = 'text-white';
$modeAnakActive = $mode === 'anak' ? 'bg-white text-emerald-700 shadow-md' : 'text-white hover:bg-white/10';
$modeDewasaActive = $mode === 'dewasa' ? 'bg-white text-slate-800 shadow-md' : 'text-white hover:bg-white/10';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahabat Sholat - Digital HPT Muhammadiyah (Mode <?= ucfirst($mode) ?>)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Identitas Aplikasi -->
    <meta name="description" content="Aplikasi Sahabat Sholat - Panduan Sholat Digital untuk Anak dan Dewasa">
    <meta name="author" content="HPT Muhammadiyah">
    <meta name="version" content="1.0.0">
</head>
<body class="font-['Poppins'] <?= $mode === 'dewasa' ? 'bg-slate-50' : 'bg-emerald-50' ?>">
    
    <!-- HEADER -->
    <header class="fixed top-0 left-0 right-0 <?= $headerBg ?> shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo & Judul -->
                <div class="flex items-center space-x-3">
                    <div class="bg-white p-2 rounded-full shadow-md">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-white">SAHABAT SHOLAT</h1>
                        <p class="text-xs text-emerald-100">Digital HPT Muhammadiyah</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="?mode=<?= $mode ?>#sec-home" class="text-white font-semibold hover:text-emerald-200 transition">Home</a>
                    <a href="?mode=<?= $mode ?>#sec-sholat" class="text-white font-semibold hover:text-emerald-200 transition">Panduan Shalat</a>
                    <a href="?mode=<?= $mode ?>#sec-surah" class="text-white font-semibold hover:text-emerald-200 transition">Surah Pendek</a>
                </nav>

                <!-- Mode Toggle & Mobile Menu Button -->
                <div class="flex items-center space-x-4">
                    <!-- Mode Toggle Desktop -->
                    <div class="hidden md:flex bg-white/20 backdrop-blur-sm rounded-full p-1 border border-white/30">
                        <a href="?mode=anak" class="px-4 py-1.5 rounded-full text-xs font-bold transition <?= $modeAnakActive ?>">👶 Mode Anak</a>
                        <a href="?mode=dewasa" class="px-4 py-1.5 rounded-full text-xs font-bold transition <?= $modeDewasaActive ?>">👨 Mode Dewasa</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button onclick="toggleMobileMenu()" class="md:hidden text-white hover:text-emerald-200 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="px-4 py-3 space-y-3">
                <a href="?mode=<?= $mode ?>#sec-home" class="block text-emerald-700 font-semibold py-2">🏠 Home</a>
                <a href="?mode=<?= $mode ?>#sec-sholat" class="block text-emerald-700 font-semibold py-2">📿 Panduan Shalat</a>
                <a href="?mode=<?= $mode ?>#sec-surah" class="block text-emerald-700 font-semibold py-2">📖 Surah Pendek</a>
                
                <!-- Mode Toggle Mobile -->
                <div class="pt-3 border-t border-gray-200">
                    <p class="text-sm text-gray-600 mb-2">Pilih Mode:</p>
                    <div class="flex space-x-2">
                        <a href="?mode=anak" class="flex-1 px-3 py-2 rounded-lg text-sm font-semibold text-center transition <?= $mode === 'anak' ? 'bg-emerald-100 text-emerald-700 border border-emerald-600' : 'text-gray-700 border border-gray-300' ?>">👶 Mode Anak</a>
                        <a href="?mode=dewasa" class="flex-1 px-3 py-2 rounded-lg text-sm font-semibold text-center transition <?= $mode === 'dewasa' ? 'bg-slate-200 text-slate-800 border border-slate-600' : 'text-gray-700 border border-gray-300' ?>"> Mode Dewasa</a>
                    </div>
                </div>

                <!-- Identitas Aplikasi -->
                <div class="pt-3 border-t border-gray-200 text-xs text-gray-500 text-center">
                    <p><strong>Sahabat Sholat v1.0.0</strong></p>
                    <p>Digital HPT Muhammadiyah</p>
                    <p>&copy; 2026</p>
                </div>
            </div>
        </div>
    </header>