<?php
// Pastikan tidak ada output sebelum ini!
?>
<section id="sec-surah" class="w-full min-h-[calc(100vh-64px)] snap-start bg-gradient-to-b from-emerald-100 via-emerald-50 to-white flex flex-col justify-center items-center px-4 md:px-8 py-8 md:py-12">
    <div class="max-w-6xl w-full mx-auto text-center">
        <div class="space-y-3 mb-8 md:mb-10">
            <span class="inline-block bg-emerald-200 text-emerald-800 text-xs md:text-sm font-bold px-4 py-1.5 rounded-full">Penyempurna Raka'at</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900">Bacaan Surah Pendek</h2>
            <div class="w-20 h-1.5 bg-emerald-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 text-xs sm:text-sm max-w-xl mx-auto mt-3">Membaca surah pendek setelah Al-Fatihah. Yuk dengarkan lafalnya untuk membantumu menghafal!</p>
        </div>

        <?php
        // Data surah hardcoded (fallback)
        $surahs = [
            ['no' => 1, 'latin' => 'Al-Fatihah', 'arab' => 'الفاتحة', 'ket' => 'Pembukaan • 7 ayat'],
            ['no' => 2, 'latin' => 'Al-Kautsar', 'arab' => 'الكوثر', 'ket' => 'Nikmat yang Berlimpah • 3 ayat'],
            ['no' => 3, 'latin' => 'Al-Ikhlas', 'arab' => 'الإخلاص', 'ket' => 'Memurnikan Keikhlasan • 4 ayat'],
            ['no' => 4, 'latin' => 'Al-Falaq', 'arab' => 'الفلق', 'ket' => 'Waktu Subuh • 5 ayat'],
            ['no' => 5, 'latin' => 'An-Nas', 'arab' => 'الناس', 'ket' => 'Manusia • 6 ayat'],
            ['no' => 6, 'latin' => 'Al-\'Ashr', 'arab' => 'العصر', 'ket' => 'masa atau waktu • 3 ayat'],
        ];
        ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-left w-full">
            <?php foreach($surahs as $s): ?>
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl border-2 border-emerald-100 hover:border-emerald-300 transition-all duration-300 cursor-pointer group">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <span class="bg-emerald-500 text-white font-bold w-10 h-10 rounded-xl flex items-center justify-center text-sm group-hover:bg-emerald-600 transition-all shadow-md"><?=$s['no']; ?></span>
                        <div>
                            <h4 class="font-extrabold text-gray-900 text-base"><?=$s['latin']; ?></h4>
                            <p class="text-xs text-gray-500 mt-1"><?=$s['ket']; ?></p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-2xl font-serif font-bold text-gray-800" style="font-family: 'Amiri', serif;"><?=$s['arab']; ?></span>
                        <span class="text-emerald-600 group-hover:translate-x-1 transition-transform font-bold">›</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <footer class="mt-12 pt-6 border-t-2 border-emerald-200 text-center text-xs text-gray-500 pb-20 md:pb-0">
            © 2026 Sahabat Sholat - Digital HPT Muhammadiyah. All Rights Reserved.
        </footer>
    </div>
</section>

<!-- Load Font Arab -->
<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">