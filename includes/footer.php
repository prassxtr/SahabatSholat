<?php
// Ambil data identitas kelompok dari database
$kelompok = [
    'nama_kelompok' => 'Sahabat Sholat',
    'prodi' => 'Manajemen Bisnis Syariah',
    'mata_kuliah' => 'Pengembangan Aplikasi Web',
    'dosen' => 'Dedy Susanto, S.Pd.I., M.M.'
];

if (isset($pdo)) {
    try {
        $stmt = $pdo->query("SELECT * FROM kelompok LIMIT 1");
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            $kelompok = $data;
        }
    } catch (PDOException $e) {
        // Gunakan data fallback di atas
    }
}
?>

<!-- FOOTER / IDENTITAS KELOMPOK -->
<footer id="sec-identitas" class="bg-emerald-900 text-white py-12 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 items-start">
            
            <!-- Kiri: Logo & Deskripsi -->
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-md">
                        <img src="assets/img/LOGO-SAHABATSHOLAT.png" alt="Logo" class="w-10 h-10 object-contain" onerror="this.style.display='none'; this.parentElement.innerHTML='🕌'">
                    </div>
                    <div>
                        <h3 class="text-xl font-bold"><?= htmlspecialchars($kelompok['nama_kelompok']) ?></h3>
                        <p class="text-emerald-300 text-sm">Digital HPT Muhammadiyah</p>
                    </div>
                </div>
                <p class="text-emerald-100 text-sm leading-relaxed max-w-md">
                    Aplikasi edukasi pembelajaran shalat yang disusun secara sistematis, mudah dipelajari, dan sesuai dengan tuntunan Muhammadiyah untuk semua usia.
                </p>
                <div class="flex gap-3 pt-2">
                    <a href="#" class="w-10 h-10 bg-emerald-800 hover:bg-emerald-700 rounded-full flex items-center justify-center transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-emerald-800 hover:bg-emerald-700 rounded-full flex items-center justify-center transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-emerald-800 hover:bg-emerald-700 rounded-full flex items-center justify-center transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Kanan: Informasi Identitas Kelompok -->
            <div class="bg-emerald-800/50 rounded-2xl p-6 border border-emerald-700">
                <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Identitas Kelompok
                </h3>
                
                <div class="space-y-3 text-sm">
                    <div class="flex items-start gap-3">
                        <span class="text-emerald-300 font-bold min-w-[130px]">Kelompok</span>
                        <span class="text-emerald-100">: <?= htmlspecialchars($kelompok['nama_kelompok']) ?></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-emerald-300 font-bold min-w-[130px]">Program Studi</span>
                        <span class="text-emerald-100">: <?= htmlspecialchars($kelompok['prodi']) ?></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-emerald-300 font-bold min-w-[130px]">Mata Kuliah</span>
                        <span class="text-emerald-100">: <?= htmlspecialchars($kelompok['mata_kuliah']) ?></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-emerald-300 font-bold min-w-[130px]">Dosen Pembimbing</span>
                        <span class="text-emerald-100">: <?= htmlspecialchars($kelompok['dosen']) ?></span>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-emerald-300 font-bold min-w-[130px]">Fakultas</span>
                        <span class="text-emerald-100">: Teknik dan Ilmu Komputer</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-emerald-300 font-bold min-w-[130px]">Universitas</span>
                        <span class="text-emerald-100">: Muhammadiyah Pontianak</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-emerald-800 mt-8 pt-6 text-center text-emerald-300 text-sm">
            <p>&copy; 2026 <?= htmlspecialchars($kelompok['nama_kelompok']) ?> - Digital HPT Muhammadiyah. All rights reserved.</p>
        </div>
    </div>
</footer>