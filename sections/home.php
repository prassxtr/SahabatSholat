<section id="sec-home" class="w-full snap-start bg-gradient-to-br from-emerald-50 via-emerald-100 to-white flex flex-col justify-center items-center px-4 sm:px-6 md:px-8 py-12 md:py-16 relative overflow-hidden">
    <div class="max-w-7xl w-full mx-auto relative z-10">
        <div class="grid md:grid-cols-2 gap-6 md:gap-12 items-center">
            
            <!-- Left Content -->
            <div class="text-left space-y-4 md:space-y-5">
                <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm text-emerald-800 text-xs px-4 py-2 rounded-full font-semibold border border-emerald-200 shadow-sm">
                    <span class="w-2 h-2 bg-emerald-500 rounded-full"></span> 
                    <span>Aplikasi edukasi dan Keluarga</span>
                </div>
                
                <h1 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                    Tuntunan praktik shalat sesuai dengan Ajaran <span class="text-emerald-600">Muhammadiyah</span>
                </h1>
                
                <p class="text-gray-600 text-sm md:text-base leading-relaxed max-w-lg">
                    Belajar shalat step by step dengan panduan lengkap, mudah dipahami, dan sesuai tuntunan Muhammadiyah.
                </p>
                
                <div class="pt-2">
                    <button onclick="scrollToSection('sec-sholat')" class="bg-emerald-600 text-white font-bold px-6 py-3 rounded-2xl shadow-lg hover:bg-emerald-700 transition transform hover:-translate-y-0.5 flex items-center gap-2.5 group text-sm">
                        <span class="text-lg">📖</span>
                        <span>Mulai Belajar</span>
                        <span class="group-hover:translate-x-1 transition-transform">→</span>
                    </button>
                </div>
            </div>

            <!-- Right Illustration -->
            <div class="flex justify-center md:justify-end relative items-center order-first md:order-last">
                <div class="absolute w-64 h-64 md:w-96 md:h-96 bg-emerald-200/30 rounded-full blur-3xl -z-10"></div>
                <img src="assets/img/Group 1.png" alt="Ilustrasi Masjid" class="w-full max-w-[280px] sm:max-w-sm md:max-w-md drop-shadow-2xl relative z-10 transform hover:scale-105 transition duration-500" onerror="this.src='https://placehold.co/500x400/d1fae5/059669?text=Ilustrasi+Masjid'">
            </div>
        </div>

        <!-- Menu Utama Card - DENGAN LINK -->
        <div class="mt-8 md:mt-12 bg-white rounded-2xl md:rounded-3xl shadow-xl p-4 md:p-8 border border-emerald-100">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6">
                
                <!-- Niat - Link ke gerakan 1 -->
                <a href="sections/detail-sholat.php?sholat=1&langkah=1" class="flex items-center space-x-2 md:space-x-4 p-3 md:p-4 rounded-xl md:rounded-2xl hover:bg-emerald-50 transition cursor-pointer group border border-emerald-50 hover:border-emerald-200 block">
                    <div class="w-10 h-10 md:w-14 md:h-14 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-xl md:rounded-2xl flex items-center justify-center text-2xl md:text-3xl flex-shrink-0 group-hover:scale-110 transition shadow-md">🌳</div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm md:text-base">Niat</h4>
                        <p class="text-[10px] md:text-xs text-gray-500 leading-tight mt-0.5 md:mt-1">Memahami niat sholat sesuai tuntunan</p>
                    </div>
                </a>
                
                <!-- Gerakan - Link ke section sholat -->
                <a href="#sec-sholat" onclick="scrollToSection('sec-sholat'); return false;" class="flex items-center space-x-2 md:space-x-4 p-3 md:p-4 rounded-xl md:rounded-2xl hover:bg-emerald-50 transition cursor-pointer group border border-emerald-50 hover:border-emerald-200 block">
                    <div class="w-10 h-10 md:w-14 md:h-14 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-xl md:rounded-2xl flex items-center justify-center text-2xl md:text-3xl flex-shrink-0 group-hover:scale-110 transition shadow-md">🏃</div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm md:text-base">Gerakan</h4>
                        <p class="text-[10px] md:text-xs text-gray-500 leading-tight mt-0.5 md:mt-1">Memahami gerakan sholat sesuai tuntunan</p>
                    </div>
                </a>
                
                <!-- Bacaan - Link ke section surah -->
                <a href="#sec-surah" onclick="scrollToSection('sec-surah'); return false;" class="flex items-center space-x-2 md:space-x-4 p-3 md:p-4 rounded-xl md:rounded-2xl hover:bg-emerald-50 transition cursor-pointer group border border-emerald-50 hover:border-emerald-200 block">
                    <div class="w-10 h-10 md:w-14 md:h-14 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-xl md:rounded-2xl flex items-center justify-center text-2xl md:text-3xl flex-shrink-0 group-hover:scale-110 transition shadow-md">📖</div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm md:text-base">Bacaan</h4>
                        <p class="text-[10px] md:text-xs text-gray-500 leading-tight mt-0.5 md:mt-1">Memahami bacaan sholat sesuai tuntunan</p>
                    </div>
                </a>
                
                <!-- Video & Animasi - Link ke section sholat -->
                <a href="#sec-sholat" onclick="scrollToSection('sec-sholat'); return false;" class="flex items-center space-x-2 md:space-x-4 p-3 md:p-4 rounded-xl md:rounded-2xl hover:bg-emerald-50 transition cursor-pointer group border border-emerald-50 hover:border-emerald-200 block">
                    <div class="w-10 h-10 md:w-14 md:h-14 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-xl md:rounded-2xl flex items-center justify-center text-2xl md:text-3xl flex-shrink-0 group-hover:scale-110 transition shadow-md">🎬</div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm md:text-base">Video & Animasi</h4>
                        <p class="text-[10px] md:text-xs text-gray-500 leading-tight mt-0.5 md:mt-1">Audio visual interaktif</p>
                    </div>
                </a>
                
            </div>
        </div>
    </div>
</section>