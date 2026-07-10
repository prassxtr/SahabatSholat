<?php
// Koneksi database dengan fallback
include __DIR__ . '/../config.php';

$sholatWajib = [];
$sholatSunnah = [];

if (isset($pdo)) {
    try {
        $stmt = $pdo->query("SELECT * FROM sholat WHERE jenis = 'wajib' ORDER BY id ASC");
        $sholatWajib = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $stmt = $pdo->query("SELECT * FROM sholat WHERE jenis = 'sunnah' ORDER BY id ASC");
        $sholatSunnah = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $sholatWajib = [
            ['id' => 1, 'nama' => 'Subuh', 'rakaat' => '2 Raka\'at', 'icon' => '', 'bg_color' => 'slate'],
            ['id' => 2, 'nama' => 'Dzuhur', 'rakaat' => '4 Raka\'at', 'icon' => '️', 'bg_color' => 'slate'],
            ['id' => 3, 'nama' => 'Ashar', 'rakaat' => '4 Raka\'at', 'icon' => '🌤️', 'bg_color' => 'slate'],
            ['id' => 4, 'nama' => 'Maghrib', 'rakaat' => '3 Raka\'at', 'icon' => '🌆', 'bg_color' => 'slate'],
            ['id' => 5, 'nama' => 'Isya', 'rakaat' => '4 Raka\'at', 'icon' => '🌌', 'bg_color' => 'slate'],
        ];
        $sholatSunnah = [
            ['id' => 6, 'nama' => 'Tahajud', 'rakaat' => '2-12 Raka\'at', 'icon' => '', 'bg_color' => 'slate', 'keterangan' => 'Sholat malam'],
            ['id' => 7, 'nama' => 'Dhuha', 'rakaat' => '2-8 Raka\'at', 'icon' => '', 'bg_color' => 'slate', 'keterangan' => 'Sholat pagi'],
            ['id' => 8, 'nama' => 'Hajat', 'rakaat' => '2-12 Raka\'at', 'icon' => '', 'bg_color' => 'slate', 'keterangan' => 'Memohon hajat'],
            ['id' => 9, 'nama' => 'Istikharah', 'rakaat' => '2 Raka\'at', 'icon' => '💭', 'bg_color' => 'slate', 'keterangan' => 'Memohon petunjuk'],
            ['id' => 10, 'nama' => 'Taubat', 'rakaat' => '2 Raka\'at', 'icon' => '🙏', 'bg_color' => 'slate', 'keterangan' => 'Memohon ampunan'],
        ];
    }
} else {
    $sholatWajib = [
        ['id' => 1, 'nama' => 'Subuh', 'rakaat' => '2 Raka\'at', 'icon' => '🌅', 'bg_color' => 'slate'],
        ['id' => 2, 'nama' => 'Dzuhur', 'rakaat' => '4 Raka\'at', 'icon' => '☀️', 'bg_color' => 'slate'],
        ['id' => 3, 'nama' => 'Ashar', 'rakaat' => '4 Raka\'at', 'icon' => '🌤️', 'bg_color' => 'slate'],
        ['id' => 4, 'nama' => 'Maghrib', 'rakaat' => '3 Raka\'at', 'icon' => '🌆', 'bg_color' => 'slate'],
        ['id' => 5, 'nama' => 'Isya', 'rakaat' => '4 Raka\'at', 'icon' => '🌌', 'bg_color' => 'slate'],
    ];
    $sholatSunnah = [
        ['id' => 6, 'nama' => 'Tahajud', 'rakaat' => '2-12 Raka\'at', 'icon' => '🌙', 'bg_color' => 'slate', 'keterangan' => 'Sholat malam'],
        ['id' => 7, 'nama' => 'Dhuha', 'rakaat' => '2-8 Raka\'at', 'icon' => '🌞', 'bg_color' => 'slate', 'keterangan' => 'Sholat pagi'],
        ['id' => 8, 'nama' => 'Hajat', 'rakaat' => '2-12 Raka\'at', 'icon' => '🤲', 'bg_color' => 'slate', 'keterangan' => 'Memohon hajat'],
        ['id' => 9, 'nama' => 'Istikharah', 'rakaat' => '2 Raka\'at', 'icon' => '💭', 'bg_color' => 'slate', 'keterangan' => 'Memohon petunjuk'],
        ['id' => 10, 'nama' => 'Taubat', 'rakaat' => '2 Raka\'at', 'icon' => '🙏', 'bg_color' => 'slate', 'keterangan' => 'Memohon ampunan'],
    ];
}
?>

<section id="sec-sholat" class="w-full min-h-[calc(100vh-64px)] snap-start bg-slate-50 flex flex-col justify-center items-center px-4 md:px-8 py-8 md:py-12 relative overflow-hidden">
    <div class="max-w-7xl w-full mx-auto relative z-10">
        <div class="grid md:grid-cols-2 gap-6 md:gap-12 items-center mb-6 md:mb-8">
            <!-- Left Illustration -->
            <div class="flex justify-center items-center order-2 md:order-1">
                <div class="absolute w-64 h-64 md:w-80 md:h-80 bg-slate-300/20 rounded-full blur-3xl -z-10"></div>
                <img src="assets/img/aa 1.png" alt="Panduan Buku Dewasa" class="w-full max-w-[200px] sm:max-w-sm md:max-w-md drop-shadow-2xl object-contain transform hover:scale-105 transition duration-500" onerror="this.src='https://placehold.co/450x400/e2e8f0/475569?text=Buku+Panduan+Dewasa'">
            </div>
            <!-- Right Content -->
            <div class="text-left space-y-3 md:space-y-4 order-1 md:order-2">
                <h2 class="text-xl sm:text-2xl md:text-4xl font-extrabold text-slate-900 leading-tight">
                    Pilih Sholat Wajib 5 Waktu atau Sholat Sunnah
                </h2>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed">
                    Panduan belajar shalat lengkap yang disusun secara sistematis sesuai tuntunan Muhammadiyah.
                </p>
            </div>
        </div>

        <!-- Toggle Sholat -->
        <div class="flex justify-center mb-6 md:mb-8 px-4">
            <div class="inline-flex items-center bg-white rounded-xl p-1.5 shadow-sm border border-slate-300 w-full max-w-lg">
                <button onclick="toggleSholatType('fardhu')" id="btn-fardhu" class="bg-slate-800 text-white text-xs sm:text-sm font-bold px-4 sm:px-6 py-3 rounded-lg flex items-center justify-center gap-2 transition-all duration-300 flex-1 shadow-md">
                    <span class="text-base sm:text-lg">🕌</span>
                    <span class="hidden sm:inline">Sholat Wajib (Fardhu)</span>
                    <span class="sm:hidden">Sholat Wajib</span>
                </button>
                <button onclick="toggleSholatType('sunnah')" id="btn-sunnah" class="text-slate-600 text-xs sm:text-sm font-semibold px-4 sm:px-6 py-3 rounded-lg flex items-center justify-center gap-2 transition-all duration-300 flex-1 hover:text-slate-900">
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
            <a href="sections/detail-sholat.php?sholat=<?= $sholat['id'] ?? 1 ?>&langkah=1&mode=dewasa"
               class="bg-white border border-slate-200 p-4 md:p-6 rounded-xl shadow-md hover:shadow-lg hover:border-slate-400 transition-all text-center group cursor-pointer transform hover:-translate-y-1 block">
                <div class="w-12 h-12 md:w-16 md:h-16 bg-slate-100 rounded-xl mx-auto flex items-center justify-center text-2xl md:text-4xl shadow-sm group-hover:scale-110 transition">
                    <?= htmlspecialchars($sholat['icon'] ?? '') ?>
                </div>
                <h3 class="font-bold mt-2 md:mt-4 text-slate-900 text-sm md:text-lg"><?= htmlspecialchars($sholat['nama']) ?></h3>
                <p class="text-xs md:text-sm text-slate-600 font-semibold mt-1 md:mt-2 bg-slate-100 px-2 md:px-3 py-0.5 md:py-1 rounded-full inline-block"><?= htmlspecialchars($sholat['rakaat']) ?></p>
            </a>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Grid Sholat Sunnah -->
        <div id="content-sunnah" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3 md:gap-4 w-full hidden">
            <?php if(!empty($sholatSunnah)): ?>
            <?php foreach($sholatSunnah as $sholat): ?>
            <a href="sections/detail-sholat.php?sholat=<?= $sholat['id'] ?? 1 ?>&langkah=1&mode=dewasa"
               class="bg-white border border-slate-200 p-4 md:p-6 rounded-xl shadow-md hover:shadow-lg hover:border-slate-400 transition-all text-center group cursor-pointer transform hover:-translate-y-1 block">
                <div class="w-12 h-12 md:w-16 md:h-16 bg-slate-100 rounded-xl mx-auto flex items-center justify-center text-2xl md:text-4xl shadow-sm group-hover:scale-110 transition">
                    <?= htmlspecialchars($sholat['icon'] ?? '🌙') ?>
                </div>
                <h3 class="font-bold mt-2 md:mt-4 text-slate-900 text-sm md:text-lg"><?= htmlspecialchars($sholat['nama']) ?></h3>
                <p class="text-xs md:text-sm text-slate-600 font-semibold mt-1 md:mt-2 bg-slate-100 px-2 md:px-3 py-0.5 md:py-1 rounded-full inline-block"><?= htmlspecialchars($sholat['rakaat']) ?></p>
                <?php if(isset($sholat['keterangan'])): ?>
                <p class="text-[10px] md:text-xs text-slate-500 mt-1 md:mt-2"><?= htmlspecialchars($sholat['keterangan']) ?></p>
                <?php endif; ?>
            </a>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>