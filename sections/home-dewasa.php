<section id="sec-home" class="w-full min-h-[calc(100vh-64px)] snap-start bg-gradient-to-br from-slate-50 via-white to-slate-100 flex flex-col justify-center items-center px-4 sm:px-6 md:px-8 py-8 md:py-16 relative overflow-hidden">
    <div class="max-w-7xl w-full mx-auto relative z-10 flex flex-col justify-center flex-1">
        <div class="grid md:grid-cols-2 gap-6 md:gap-12 items-center">
            <!-- Left Content -->
            <div class="text-left space-y-4 md:space-y-5">
                <div class="inline-flex items-center gap-2 bg-slate-200 text-slate-800 text-xs px-4 py-2 rounded-full font-semibold border border-slate-300">
                    <span class="w-2 h-2 bg-slate-600 rounded-full"></span> 
                    <span>Aplikasi Edukasi Islami Dewasa</span>
                </div>
                <h1 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                    Tuntunan Sholat Lengkap & <span class="text-slate-700">Khusyuk</span>
                </h1>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed max-w-lg">
                    Panduan ibadah sholat sesuai Al-Qur'an, As-Sunnah, dan panduan resmi Muhammadiyah. Dilengkapi bacaan lengkap dan audio murattal.
                </p>
                <div class="pt-2">
                    <button onclick="scrollToSection('sec-sholat')" class="bg-slate-800 text-white font-bold px-6 py-3 rounded-xl shadow-lg hover:bg-slate-900 transition transform hover:-translate-y-0.5 flex items-center gap-2.5 group text-sm">
                        <span class="text-lg"></span>
                        <span>Mulai Belajar</span>
                        <span class="group-hover:translate-x-1 transition-transform">→</span>
                    </button>
                </div>
            </div>
            <!-- Right Illustration -->
            <div class="flex justify-center md:justify-end relative items-center order-first md:order-last">
                <div class="absolute w-64 h-64 md:w-96 md:h-96 bg-slate-300/20 rounded-full blur-3xl -z-10"></div>
                <img src="assets/img/Group 1.png" alt="Ilustrasi Masjid Dewasa" class="w-full max-w-[280px] sm:max-w-sm md:max-w-md drop-shadow-2xl relative z-10 transform hover:scale-105 transition duration-500" onerror="this.src='https://placehold.co/500x400/e2e8f0/475569?text=Ilustrasi+Masjid+Dewasa'">
            </div>
        </div>
        
        <!-- Menu Utama Card -->
        <div class="mt-6 md:mt-12 bg-white rounded-2xl md:rounded-3xl shadow-xl p-4 md:p-8 border border-slate-200">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6">
                <a href="sections/detail-sholat.php?sholat=1&langkah=1&mode=dewasa" class="flex items-center space-x-2 md:space-x-4 p-3 md:p-4 rounded-xl hover:bg-slate-50 transition cursor-pointer group border border-slate-100 hover:border-slate-300 block">
                    <div class="w-10 h-10 md:w-14 md:h-14 bg-slate-100 rounded-xl flex items-center justify-center text-2xl md:text-3xl flex-shrink-0 group-hover:scale-110 transition shadow-sm">📿</div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm md:text-base">Niat</h4>
                        <p class="text-[10px] md:text-xs text-slate-500 leading-tight mt-0.5 md:mt-1">Memahami niat sholat</p>
                    </div>
                </a>
                <a href="#sec-sholat" onclick="scrollToSection('sec-sholat'); return false;" class="flex items-center space-x-2 md:space-x-4 p-3 md:p-4 rounded-xl hover:bg-slate-50 transition cursor-pointer group border border-slate-100 hover:border-slate-300 block">
                    <div class="w-10 h-10 md:w-14 md:h-14 bg-slate-100 rounded-xl flex items-center justify-center text-2xl md:text-3xl flex-shrink-0 group-hover:scale-110 transition shadow-sm">🏃</div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm md:text-base">Gerakan</h4>
                        <p class="text-[10px] md:text-xs text-slate-500 leading-tight mt-0.5 md:mt-1">Tata cara gerakan sholat</p>
                    </div>
                </a>
                <a href="#sec-surah" onclick="scrollToSection('sec-surah'); return false;" class="flex items-center space-x-2 md:space-x-4 p-3 md:p-4 rounded-xl hover:bg-slate-50 transition cursor-pointer group border border-slate-100 hover:border-slate-300 block">
                    <div class="w-10 h-10 md:w-14 md:h-14 bg-slate-100 rounded-xl flex items-center justify-center text-2xl md:text-3xl flex-shrink-0 group-hover:scale-110 transition shadow-sm">📖</div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm md:text-base">Bacaan</h4>
                        <p class="text-[10px] md:text-xs text-slate-500 leading-tight mt-0.5 md:mt-1">Bacaan sholat lengkap</p>
                    </div>
                </a>
                <a href="#sec-sholat" onclick="scrollToSection('sec-sholat'); return false;" class="flex items-center space-x-2 md:space-x-4 p-3 md:p-4 rounded-xl hover:bg-slate-50 transition cursor-pointer group border border-slate-100 hover:border-slate-300 block">
                    <div class="w-10 h-10 md:w-14 md:h-14 bg-slate-100 rounded-xl flex items-center justify-center text-2xl md:text-3xl flex-shrink-0 group-hover:scale-110 transition shadow-sm">🎬</div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm md:text-base">Video & Animasi</h4>
                        <p class="text-[10px] md:text-xs text-slate-500 leading-tight mt-0.5 md:mt-1">Audio visual interaktif</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>