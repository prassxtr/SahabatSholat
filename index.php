<?php 
// Memanggil header bawaan aplikasi Anda
include 'includes/header.php'; 
?>

<div id="scroll-container" class="h-[calc(100vh-70px)] overflow-y-auto snap-y snap-mandatory scroll-smooth w-full no-scrollbar">

    <section id="sec-home" class="w-full h-full snap-start bg-gradient-to-b from-primary to-emerald-50 flex flex-col justify-center items-center px-4 md:px-8 py-10 relative overflow-hidden">
        
        <div class="absolute w-[500px] h-[500px] rounded-full bg-emerald-100/50 -bottom-32 -right-20 z-0"></div>

        <div class="max-w-7xl w-full mx-auto grid md:grid-cols-2 gap-10 items-center relative z-10">
            <div class="text-left space-y-4">
                <div class="inline-flex items-center gap-2 bg-white/50 backdrop-blur-sm text-emerald-800 text-xs px-3 py-1.5 rounded-full font-semibold border border-emerald-200/50 shadow-sm">
                    <span>🟢</span> Aplikasi edukasi dan Keluarga
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-[1.15]">
                    Tuntunan praktik shalat sesuai dengan Ajaran <span class="text-primary underline decoration-wavy decoration-emerald-400">Muhammadiyah</span>
                </h1>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed max-w-xl">
                    Belajar shalat step by step dengan panduan lengkap, mudah dipahami, dan sesuai tuntunan Muhammadiyah.
                </p>
                <div class="pt-2">
                    <button onclick="scrollToSection('sec-sholat')" class="bg-primary text-white font-bold px-6 py-3.5 rounded-xl shadow-lg hover:bg-emerald-700 transition transform hover:-translate-y-0.5 flex items-center gap-2.5 group text-sm">
                        <span class="text-lg">📖</span>
                        <span>Mulai Belajar</span>
                        <span class="group-hover:translate-x-1 transition-transform">➔</span>
                    </button>
                </div>
            </div>

            <div class="flex justify-center md:justify-end relative items-center">
                <img src="assets/img/Group 1.png" alt="Ilustrasi Sahabat Sholat" class="w-full max-w-sm md:max-w-md drop-shadow-2xl relative z-10 transform hover:scale-105 transition duration-500" onerror="this.src='https://placehold.co/500x500/ffffff/0d7a41?text=Ilustrasi+Masjid+dan+Anak'">
            </div>
        </div>

        <div id="menu-utama" class="max-w-5xl w-full mx-auto bg-white/95 backdrop-blur-md rounded-full shadow-2xl p-3 grid grid-cols-2 md:grid-cols-4 gap-2 border border-emerald-100/50 mt-12 relative z-20">
            <div class="bg-emerald-50/50 p-4 rounded-full flex items-center space-x-3.5 border border-emerald-100/50 hover:bg-emerald-100 hover:border-primary/50 transition cursor-pointer group">
                <span class="text-3xl bg-white w-12 h-12 rounded-full flex items-center justify-center shadow-md group-hover:scale-110 transition">📖</span>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm">Niat</h4>
                    <p class="text-[11px] text-gray-400">Memahami niat sholat</p>
                </div>
            </div>
            <div class="bg-emerald-50/50 p-4 rounded-full flex items-center space-x-3.5 border border-emerald-100/50 hover:bg-emerald-100 hover:border-primary/50 transition cursor-pointer group">
                <span class="text-3xl bg-white w-12 h-12 rounded-full flex items-center justify-center shadow-md group-hover:scale-110 transition">🏃</span>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm">Gerakan</h4>
                    <p class="text-[11px] text-gray-400">Gerakan sholat sunnah</p>
                </div>
            </div>
            <div class="bg-emerald-50/50 p-4 rounded-full flex items-center space-x-3.5 border border-emerald-100/50 hover:bg-emerald-100 hover:border-primary/50 transition cursor-pointer group">
                <span class="text-3xl bg-white w-12 h-12 rounded-full flex items-center justify-center shadow-md group-hover:scale-110 transition">🧎</span>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm">Bacaan</h4>
                    <p class="text-[11px] text-gray-400">Bacaan sholat fardhu</p>
                </div>
            </div>
            <div class="bg-emerald-50/50 p-4 rounded-full flex items-center space-x-3.5 border border-emerald-100/50 hover:bg-emerald-100 hover:border-primary/50 transition cursor-pointer group">
                <span class="text-3xl bg-white w-12 h-12 rounded-full flex items-center justify-center shadow-md group-hover:scale-110 transition">🎬</span>
                <div>
                    <h4 class="font-bold text-gray-900 text-sm">Video & Animasi</h4>
                    <p class="text-[11px] text-gray-400">Audio visual interaktif</p>
                </div>
            </div>
        </div>

    </section>

    <section id="sec-sholat" class="w-full h-full snap-start bg-emerald-50/30 flex flex-col justify-center items-center px-4 md:px-8 py-10 relative overflow-hidden">
        
        <div class="max-w-7xl w-full mx-auto bg-white rounded-[2.5rem] p-8 md:p-12 shadow-2xl border border-emerald-100 flex flex-col items-center">
            
            <div class="grid md:grid-cols-12 gap-8 items-center w-full mb-8">
                
                <div class="md:col-span-5 flex justify-center items-center">
                    <img src="assets/img/aa 1.png" alt="Panduan Buku" class="w-full max-w-sm drop-shadow-2xl object-contain transform hover:scale-105 transition duration-500" onerror="this.src='https://placehold.co/450x350/e6f4ea/0d7a41?text=Foto+Buku+Anda+Disini'">
                </div>

                <div class="md:col-span-7 text-left space-y-4">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                        Yuk, pilih sholat wajib 5 waktu atau sholat sunnah yang ingin kamu pelajari hari ini!
                    </h2>
                    <p class="text-gray-500 text-sm md:text-base leading-relaxed">
                        Panduan belajar shalat lengkap yang disusun secara sistematis, interaktif, dan mudah dimengerti sesuai dengan tuntunan Muhammadiyah.
                    </p>
                    <div class="pt-2">
                        <button class="bg-primary text-white font-bold px-6 py-3 rounded-xl shadow-md hover:bg-emerald-700 transition flex items-center gap-2 text-sm group">
                            <span class="text-lg"> </span >
                            <span>Lihat Surah Lengkap</span>
                            <span class="group-hover:translate-x-1 transition-transform">➔</span>
                        </button>
                    </div>
                </div>

            </div>

            <div class="inline-flex justify-center items-center space-x-1 bg-gray-100 p-1.5 rounded-full mb-8 shadow-inner border border-gray-200">
                <button class="bg-primary text-white text-xs font-bold px-4 py-2 rounded-full shadow-md flex items-center gap-1.5 transition">
                    <span>🕌</span> Sholat Wajib (Fardhu)
                </button>
                <button class="text-gray-600 hover:bg-white hover:text-gray-900 hover:shadow-sm text-xs font-semibold px-4 py-2 rounded-full transition-all">
                    Sholat Sunnah
                </button>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-5 gap-5 w-full">
                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-lg hover:border-primary hover:shadow-primary/10 transition-all text-center group cursor-pointer transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-amber-50 rounded-2xl mx-auto flex items-center justify-center text-4xl shadow-inner group-hover:scale-110 transition border border-amber-100">🌅</div>
                    <h3 class="font-extrabold mt-4 text-gray-900 text-lg">Subuh</h3>
                    <p class="text-xs text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-2">2 Raka'at</p>
                </div>
                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-lg hover:border-primary hover:shadow-primary/10 transition-all text-center group cursor-pointer transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-orange-50 rounded-2xl mx-auto flex items-center justify-center text-4xl shadow-inner group-hover:scale-110 transition border border-orange-100">☀️</div>
                    <h3 class="font-extrabold mt-4 text-gray-900 text-lg">Dzuhur</h3>
                    <p class="text-xs text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-2">4 Raka'at</p>
                </div>
                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-lg hover:border-primary hover:shadow-primary/10 transition-all text-center group cursor-pointer transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-yellow-50 rounded-2xl mx-auto flex items-center justify-center text-4xl shadow-inner group-hover:scale-110 transition border border-yellow-100">🌤️</div>
                    <h3 class="font-extrabold mt-4 text-gray-900 text-lg">Ashar</h3>
                    <p class="text-xs text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-2">4 Raka'at</p>
                </div>
                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-lg hover:border-primary hover:shadow-primary/10 transition-all text-center group cursor-pointer transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-indigo-50 rounded-2xl mx-auto flex items-center justify-center text-4xl shadow-inner group-hover:scale-110 transition border border-indigo-100">🌆</div>
                    <h3 class="font-extrabold mt-4 text-gray-900 text-lg">Maghrib</h3>
                    <p class="text-xs text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-2">3 Raka'at</p>
                </div>
                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-lg hover:border-primary hover:shadow-primary/10 transition-all text-center group cursor-pointer transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-purple-50 rounded-2xl mx-auto flex items-center justify-center text-4xl shadow-inner group-hover:scale-110 transition border border-purple-100">🌌</div>
                    <h3 class="font-extrabold mt-4 text-gray-900 text-lg">Isya</h3>
                    <p class="text-xs text-emerald-600 font-semibold bg-emerald-50 px-2 py-0.5 rounded-full inline-block mt-2">4 Raka'at</p>
                </div>
            </div>

        </div>
    </section>

    <section id="sec-surah" class="w-full h-full snap-start bg-emerald-100/30 flex flex-col justify-center items-center px-4 md:px-8 py-10">
        <div class="max-w-6xl w-full mx-auto bg-white rounded-[2.5rem] p-8 md:p-12 shadow-2xl border border-emerald-100 text-center">
            
            <div class="space-y-1.5 mb-10">
                <span class="text-primary text-xs font-bold uppercase tracking-widest bg-emerald-50 px-4 py-1.5 rounded-full border border-emerald-200 inline-block shadow-sm">Penyempurna Raka'at</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900">Bacaan <span class="underline decoration-primary decoration-2 decoration-offset-2">Surah Pendek</span></h2>
                <p class="text-gray-500 text-xs md:text-sm max-w-lg mx-auto">Membaca surah pendek setelah Al-Fatihah pada raka'at pertama dan kedua. Yuk dengarkan lafadznya untuk membantumu menghafal!</p>
            </div>
            
            <?php
            // Array data surah pendek
            $surahs = [
                ['no' => 1, 'latin' => 'Al-Fatihah', 'arab' => 'الفاتحة', 'ket' => 'Pembukaan - 7 Ayat'],
                ['no' => 2, 'latin' => 'Al-Kautsar', 'arab' => 'الكوثر', 'ket' => 'Nikmat Berlimpah - 3 Ayat'],
                ['no' => 3, 'latin' => 'Al-Ikhlas', 'arab' => 'الإخلاص', 'ket' => 'Memurnikan Keesaan - 4 Ayat'],
                ['no' => 4, 'latin' => 'Al-Falaq', 'arab' => 'الفلق', 'ket' => 'Waktu Subuh - 5 Ayat'],
                ['no' => 5, 'latin' => 'An-Nas', 'arab' => 'الناس', 'ket' => 'Manusia - 6 Ayat'],
                ['no' => 6, 'latin' => 'Al-\'Ashr', 'arab' => 'العصر', 'ket' => 'Demi Masa - 3 Ayat'],
            ];
            ?>

            <div class="grid md:grid-cols-3 gap-5 text-left w-full">
                <?php foreach($surahs as $s): ?>
                <div class="bg-gray-50 p-5 rounded-2xl shadow-lg flex justify-between items-center border border-gray-100 hover:border-primary hover:bg-white transition-all duration-300 cursor-pointer group transform hover:-translate-y-1 hover:shadow-primary/10">
                    <div class="flex items-center space-x-3.5">
                        <span class="bg-emerald-100 text-primary font-bold w-10 h-10 rounded-full flex items-center justify-center text-sm group-hover:bg-primary group-hover:text-white transition-all shadow-md"><?= $s['no']; ?></span>
                        <div>
                            <h4 class="font-extrabold text-gray-900 text-sm"><?= $s['latin']; ?></h4>
                            <p class="text-[11px] text-gray-400 mt-0.5 group-hover:text-gray-500 transition"><?= $s['ket']; ?></p>
                        </div>
                    </div>
                    <span class="text-2xl md:text-3xl font-serif font-bold text-emerald-800 group-hover:text-primary transition-all"><?= $s['arab']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>

            <footer class="mt-16 pt-8 border-t border-gray-100 text-center text-xs text-gray-400">
                © 2026 Sahabat Sholat - Digital HPT Muhammadiyah. All Rights Reserved.
            </footer>

        </div>
    </section>

</div>

<script>
// Fungsi meluncur mulus (smooth scroll) ke seksi tujuan saat tombol diklik
function scrollToSection(sectionId) {
    const target = document.getElementById(sectionId);
    if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
    }
}

// Fungsi otomatis mengubah style link navigasi saat user melakukan scroll layar
const container = document.getElementById('scroll-container');
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link'); 

const observerOptions = {
    root: container,
    threshold: 0.6 
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const currentId = entry.target.getAttribute('id');
            const targetNavId = 'nav-' + currentId.replace('sec-', ''); 
            
            navLinks.forEach(link => {
                link.classList.remove('text-white', 'font-bold', 'underline');
                link.classList.add('text-emerald-200');
            });
            
            const activeLink = document.getElementById(targetNavId);
            if (activeLink) {
                activeLink.classList.remove('text-emerald-200');
                activeLink.classList.add('text-white', 'font-bold', 'underline');
            }
        }
    });
}, observerOptions);

sections.forEach(section => observer.observe(section));
</script>

</body>
</html>