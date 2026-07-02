<?php include 'data/sholat-data.php'; ?>
<section id="sec-surah" class="w-full min-h-full snap-start bg-gradient-to-b from-emerald-100 via-emerald-50 to-white flex flex-col justify-center items-center px-4 sm:px-6 md:px-8 py-8 md:py-12">
    <div class="max-w-6xl w-full mx-auto text-center">
        <div class="space-y-2 md:space-y-3 mb-8 md:mb-10">
            <span class="inline-block bg-emerald-200 text-emerald-800 text-xs md:text-sm font-bold px-4 py-1.5 rounded-full">Penyempurna Raka'at</span>
            <h2 class="text-xl sm:text-2xl md:text-4xl font-extrabold text-gray-900">Bacaan Surah Pendek</h2>
            <div class="w-16 md:w-20 h-1 md:h-1.5 bg-emerald-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 text-xs sm:text-sm max-w-xl mx-auto mt-2 md:mt-3 px-2">Membaca surah pendek setelah Al-Fatihah. Yuk dengarkan lafalnya untuk membantumu menghafal!</p>
        </div>
        
        <?php
        $surahs = [
            ['no' => 1, 'latin' => 'Al-Fatihah', 'arab' => 'الفاتحة', 'ket' => 'Pembukaan • 7 ayat'],
            ['no' => 2, 'latin' => 'Al-Kautsar', 'arab' => 'الكوثر', 'ket' => 'Nikmat yang Berlimpah • 3 ayat'],
            ['no' => 3, 'latin' => 'Al-Ikhlas', 'arab' => 'الإخلاص', 'ket' => 'Memurnikan Keikhlasan • 4 ayat'],
            ['no' => 4, 'latin' => 'Al-Falaq', 'arab' => 'الفلق', 'ket' => 'Waktu Subuh • 5 ayat'],
            ['no' => 5, 'latin' => 'An-Nas', 'arab' => 'الناس', 'ket' => 'Manusia • 6 ayat'],
            ['no' => 6, 'latin' => 'Al-\'Ashr', 'arab' => 'العصر', 'ket' => 'masa atau waktu • 3 ayat'],
        ];
        ?>

        <!-- Grid Sholat Wajib -->
        <div id="content-fardhu" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3 md:gap-4 w-full">
            <?php foreach($sholatWajib as $sholat): ?>
            <a href="sections/detail-sholat.php?sholat=<?= $sholat['id'] ?>&langkah=1" 
            class="bg-white border-2 border-emerald-100 p-4 md:p-6 rounded-xl md:rounded-2xl shadow-lg hover:shadow-xl hover:border-emerald-300 transition-all text-center group cursor-pointer transform hover:-translate-y-2 block">
                <div class="w-12 h-12 md:w-16 md:h-16 bg-gradient-to-br from-<?=$sholat['bg']?>-100 to-<?=$sholat['bg']?>-200 rounded-xl md:rounded-2xl mx-auto flex items-center justify-center text-2xl md:text-4xl shadow-md group-hover:scale-110 transition">
                    <?=$sholat['icon']?>
                </div>
                <h3 class="font-extrabold mt-2 md:mt-4 text-gray-900 text-sm md:text-lg"><?=$sholat['nama']?></h3>
                <p class="text-xs md:text-sm text-emerald-600 font-semibold mt-1 md:mt-2 bg-emerald-50 px-2 md:px-3 py-0.5 md:py-1 rounded-full inline-block"><?=$sholat['rakaat']?></p>
            </a>
            <?php endforeach; ?>
        </div>

        <footer class="mt-12 pt-6 pb-24 md:pb-0 border-t-2 border-emerald-200 text-center text-xs text-gray-500">
            © 2026 Sahabat Sholat - Digital HPT Muhammadiyah. All Rights Reserved.
        </footer>
    </div>
</section>