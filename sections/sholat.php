<?php 
// Koneksi database dengan fallback
include __DIR__ . '/../config.php';

// Default data jika database belum tersedia
$sholatWajib = [];
$sholatSunnah = [];

if (isset($pdo)) {
    try {
        // Ambil sholat wajib dari database
        $stmt = $pdo->query("SELECT * FROM sholat WHERE jenis = 'wajib' ORDER BY id ASC");
        $sholatWajib = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Ambil sholat sunnah dari database
        $stmt = $pdo->query("SELECT * FROM sholat WHERE jenis = 'sunnah' ORDER BY id ASC");
        $sholatSunnah = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Fallback data jika query gagal
        $sholatWajib = [
            ['id' => 1, 'nama' => 'Subuh', 'rakaat' => '2 Raka\'at', 'icon' => '🌅', 'bg_color' => 'amber'],
            ['id' => 2, 'nama' => 'Dzuhur', 'rakaat' => '4 Raka\'at', 'icon' => '☀️', 'bg_color' => 'orange'],
            ['id' => 3, 'nama' => 'Ashar', 'rakaat' => '4 Raka\'at', 'icon' => '🌤️', 'bg_color' => 'yellow'],
            ['id' => 4, 'nama' => 'Maghrib', 'rakaat' => '3 Raka\'at', 'icon' => '🌆', 'bg_color' => 'indigo'],
            ['id' => 5, 'nama' => 'Isya', 'rakaat' => '4 Raka\'at', 'icon' => '🌌', 'bg_color' => 'purple'],
        ];
        $sholatSunnah = [
            ['id' => 6, 'nama' => 'Tahajud', 'rakaat' => '2-12 Raka\'at', 'icon' => '🌙', 'bg_color' => 'indigo', 'keterangan' => 'Sholat malam'],
            ['id' => 7, 'nama' => 'Dhuha', 'rakaat' => '2-8 Raka\'at', 'icon' => '🌞', 'bg_color' => 'amber', 'keterangan' => 'Sholat pagi'],
            ['id' => 8, 'nama' => 'Hajat', 'rakaat' => '2-12 Raka\'at', 'icon' => '🤲', 'bg_color' => 'blue', 'keterangan' => 'Memohon hajat'],
            ['id' => 9, 'nama' => 'Istikharah', 'rakaat' => '2 Raka\'at', 'icon' => '💭', 'bg_color' => 'purple', 'keterangan' => 'Memohon petunjuk'],
            ['id' => 10, 'nama' => 'Taubat', 'rakaat' => '2 Raka\'at', 'icon' => '🙏', 'bg_color' => 'emerald', 'keterangan' => 'Memohon ampunan'],
        ];
    }
} else {
    // Fallback jika config.php tidak ada
    $sholatWajib = [
        ['id' => 1, 'nama' => 'Subuh', 'rakaat' => '2 Raka\'at', 'icon' => '🌅', 'bg_color' => 'amber'],
        ['id' => 2, 'nama' => 'Dzuhur', 'rakaat' => '4 Raka\'at', 'icon' => '☀️', 'bg_color' => 'orange'],
        ['id' => 3, 'nama' => 'Ashar', 'rakaat' => '4 Raka\'at', 'icon' => '🌤️', 'bg_color' => 'yellow'],
        ['id' => 4, 'nama' => 'Maghrib', 'rakaat' => '3 Raka\'at', 'icon' => '🌆', 'bg_color' => 'indigo'],
        ['id' => 5, 'nama' => 'Isya', 'rakaat' => '4 Raka\'at', 'icon' => '🌌', 'bg_color' => 'purple'],
    ];
    $sholatSunnah = [
        ['id' => 6, 'nama' => 'Tahajud', 'rakaat' => '2-12 Raka\'at', 'icon' => '🌙', 'bg_color' => 'indigo', 'keterangan' => 'Sholat malam'],
        ['id' => 7, 'nama' => 'Dhuha', 'rakaat' => '2-8 Raka\'at', 'icon' => '🌞', 'bg_color' => 'amber', 'keterangan' => 'Sholat pagi'],
        ['id' => 8, 'nama' => 'Hajat', 'rakaat' => '2-12 Raka\'at', 'icon' => '', 'bg_color' => 'blue', 'keterangan' => 'Memohon hajat'],
        ['id' => 9, 'nama' => 'Istikharah', 'rakaat' => '2 Raka\'at', 'icon' => '', 'bg_color' => 'purple', 'keterangan' => 'Memohon petunjuk'],
        ['id' => 10, 'nama' => 'Taubat', 'rakaat' => '2 Raka\'at', 'icon' => '🙏', 'bg_color' => 'emerald', 'keterangan' => 'Memohon ampunan'],
    ];
}
?>

<section id="sec-sholat" class="w-full min-h-[calc(100vh-64px)] snap-start bg-gradient-to-br from-white via-emerald-50 to-emerald-100 flex flex-col justify-center items-center px-4 md:px-8 py-8 md:py-12 relative overflow-hidden">
    <div class="max-w-7xl w-full mx-auto relative z-10">
        <div class="grid md:grid-cols-2 gap-6 md:gap-12 items-center mb-6 md:mb-8">
            
            <!-- Left Illustration -->
            <div class="flex justify-center items-center order-2 md:order-1">
                <div class="absolute w-64 h-64 md:w-80 md:h-80 bg-emerald-200/20 rounded-full blur-3xl -z-10"></div>
                <img src="assets/img/aa 1.png" alt="Panduan Buku" 
                     class="w-full max-w-[200px] sm:max-w-sm md:max-w-md drop-shadow-2xl object-contain transform hover:scale-105 transition duration-500" 
                     onerror="this.src='https://placehold.co/450x400/d1fae5/059669?text=Buku+Panduan'">
            </div>

            <!-- Right Content -->
            <div class="text-left space-y-3 md:space-y-4 order-1 md:order-2">
                <h2 class="text-xl sm:text-2xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                    <span class="hidden md:inline">Yuk, pilih sholat wajib 5 waktu atau sholat sunnah yang ingin kamu pelajari hari ini!</span>
                    <span class="md:hidden">Pilih sholat yang ingin dipelajari hari ini! 🕌</span>
                </h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Panduan belajar shalat lengkap yang disusun secara sistematis, mudah dipelajari, dan sesuai dengan tuntunan Muhammadiyah.
                </p>
            </div>
        </div>

        <!-- Toggle Sholat -->
        <div class="flex justify-center mb-6 md:mb-8 px-4">
            <div class="inline-flex items-center bg-white rounded-full p-1.5 shadow-sm border-2 border-emerald-200 w-full max-w-lg">
                <button onclick="toggleSholatType('fardhu')" id="btn-fardhu" class="bg-emerald-600 text-white text-xs sm:text-sm font-bold px-4 sm:px-6 py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-300 flex-1 shadow-lg">
                    <span class="text-base sm:text-lg">🕌</span> 
                    <span class="hidden sm:inline">Sholat Wajib (Fardhu)</span>
                    <span class="sm:hidden">Sholat Wajib</span>
                </button>
                <button onclick="toggleSholatType('sunnah')" id="btn-sunnah" class="text-gray-600 text-xs sm:text-sm font-semibold px-4 sm:px-6 py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-300 flex-1 hover:text-emerald-700">
                    <span class="text-base sm:text-lg">🌙</span> 
                    <span class="hidden sm:inline">Sholat Sunnah</span>
                    <span class="sm:hidden">Sunnah</span>
                </button>
            </div>
        </div>
        
        <!-- Grid Sholat Wajib -->
        <div id="content-fardhu" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3 md:gap-4 w-full">
            <?php if(!empty($sholatWajib)): ?>
                <?php foreach($sholatWajib as $sholat): ?>
                <a href="sections/detail-sholat.php?sholat=<?= $sholat['id'] ?? 1 ?>&langkah=1" 
                   class="bg-white border-2 border-emerald-100 p-4 md:p-6 rounded-xl md:rounded-2xl shadow-lg hover:shadow-xl hover:border-emerald-300 transition-all text-center group cursor-pointer transform hover:-translate-y-2 block">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-gradient-to-br from-<?= $sholat['bg_color'] ?? 'emerald' ?>-100 to-<?= $sholat['bg_color'] ?? 'emerald' ?>-200 rounded-xl md:rounded-2xl mx-auto flex items-center justify-center text-2xl md:text-4xl shadow-md group-hover:scale-110 transition">
                        <?= htmlspecialchars($sholat['icon'] ?? '📿') ?>
                    </div>
                    <h3 class="font-extrabold mt-2 md:mt-4 text-gray-900 text-sm md:text-lg"><?= htmlspecialchars($sholat['nama']) ?></h3>
                    <p class="text-xs md:text-sm text-emerald-600 font-semibold mt-1 md:mt-2 bg-emerald-50 px-2 md:px-3 py-0.5 md:py-1 rounded-full inline-block"><?= htmlspecialchars($sholat['rakaat']) ?></p>
                </a>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">Data sholat sedang dimuat...</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Grid Sholat Sunnah -->
        <div id="content-sunnah" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3 md:gap-4 w-full hidden">
            <?php if(!empty($sholatSunnah)): ?>
                <?php foreach($sholatSunnah as $sholat): ?>
                <a href="sections/detail-sholat.php?sholat=<?= $sholat['id'] ?? 1 ?>&langkah=1" 
                    class="bg-white border-2 border-emerald-100 p-4 md:p-6 rounded-xl md:rounded-2xl shadow-lg hover:shadow-xl hover:border-emerald-300 transition-all text-center group cursor-pointer transform hover:-translate-y-2 block">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-gradient-to-br from-<?= $sholat['bg_color'] ?? 'emerald' ?>-100 to-<?= $sholat['bg_color'] ?? 'emerald' ?>-200 rounded-xl md:rounded-2xl mx-auto flex items-center justify-center text-2xl md:text-4xl shadow-md group-hover:scale-110 transition">
                        <?= htmlspecialchars($sholat['icon'] ?? '🌙') ?>
                    </div>
                    <h3 class="font-extrabold mt-2 md:mt-4 text-gray-900 text-sm md:text-lg"><?= htmlspecialchars($sholat['nama']) ?></h3>
                    <p class="text-xs md:text-sm text-emerald-600 font-semibold mt-1 md:mt-2 bg-emerald-50 px-2 md:px-3 py-0.5 md:py-1 rounded-full inline-block"><?= htmlspecialchars($sholat['rakaat']) ?></p>
                    <?php if(isset($sholat['keterangan'])): ?>
                    <p class="text-[10px] md:text-xs text-gray-500 mt-1 md:mt-2"><?= htmlspecialchars($sholat['keterangan']) ?></p>
                    <?php endif; ?>
                </a>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">Data sholat sunnah sedang dimuat...</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>  