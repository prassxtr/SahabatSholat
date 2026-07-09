<?php
// Set encoding UTF-8
header('Content-Type: text/html; charset=utf-8');

// Get parameters
$sholatId = isset($_GET['sholat']) ? (int)$_GET['sholat'] : 1;
$langkah = isset($_GET['langkah']) ? (int)$_GET['langkah'] : 1;

// Data sholat dengan jumlah rakaat
$sholatData = [
    1 => ['nama' => 'Subuh', 'rakaat' => 2],
    2 => ['nama' => 'Dzuhur', 'rakaat' => 4],
    3 => ['nama' => 'Ashar', 'rakaat' => 4],
    4 => ['nama' => 'Maghrib', 'rakaat' => 3],
    5 => ['nama' => 'Isya', 'rakaat' => 4],
];

$sholat = $sholatData[$sholatId] ?? $sholatData[1];
$totalRakaat = $sholat['rakaat'];

// Generate gerakan dinamis berdasarkan jumlah rakaat
function generateGerakan($totalRakaat) {
    $gerakanList = [];
    $step = 1;
    
    // 1. Niat
    $gerakanList[$step++] = [
        'nama' => 'Niat Sholat',
        'deskripsi' => 'Niat dalam hati untuk melaksanakan sholat',
        'langkah' => 'Berdiri tegak menghadap kiblat dengan niat sholat di dalam hati',
        'rakaat' => 0,
        'bacaan' => [
            ['arab' => '', 'latin' => 'Niat cukup di dalam hati, tidak diucapkan secara lisan.', 'terjemahan' => 'Berdasarkan Himpunan Putusan Tarjih (HPT) Muhammadiyah, niat adalah amalan hati dan tidak ada tuntunan dari Nabi SAW untuk melafadzkannya secara lisan.']
        ]
    ];
    
    // 2. Takbiratul Ihram
    $gerakanList[$step++] = [
        'nama' => 'Takbiratul Ihram',
        'deskripsi' => 'Mengangkat kedua tangan sejajar telinga',
        'langkah' => 'Angkat kedua tangan sejajar telinga sambil mengucapkan "Allahu Akbar"',
        'rakaat' => 1,
        'bacaan' => [
            ['arab' => 'اللهُ أَكْبَرُ', 'latin' => 'Allāhu Akbar', 'terjemahan' => 'Allah Maha Besar']
        ]
    ];
    
    // 3. Doa Iftitah
    $gerakanList[$step++] = [
        'nama' => 'Doa Iftitah',
        'deskripsi' => 'Membaca doa pembuka',
        'langkah' => 'Baca doa iftitah dengan khusyuk setelah meletakkan tangan di dada',
        'rakaat' => 1,
        'bacaan' => [
            ['arab' => 'اللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ', 'latin' => 'Allāhumma bā\'id bainī wa baina khaṭāyāya kamā bā\'adta bainal-masyriqi wal-maghrib', 'terjemahan' => 'Ya Allah, jauhkanlah aku dari dosa-dosaku sebagaimana Engkau jauhkan antara timur dan barat']
        ]
    ];
    
    // Loop untuk setiap rakaat
    for ($r = 1; $r <= $totalRakaat; $r++) {
        // 4. Membaca Al-Fatihah (setiap rakaat)
        $gerakanList[$step++] = [
            'nama' => 'Membaca Al-Fatihah (Rakaat ' . $r . ')',
            'deskripsi' => 'Membaca surah Al-Fatihah',
            'langkah' => 'Baca Al-Fatihah dengan tartil dan tajwid yang benar',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ', 'latin' => 'Bismillāhir-raḥmānir-raḥīm', 'terjemahan' => 'Dengan nama Allah Yang Maha Pengasih, Maha Penyayang'],
                ['arab' => 'الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ', 'latin' => 'Al-ḥamdu lillāhi rabbil-ālamīn', 'terjemahan' => 'Segala puji bagi Allah, Tuhan seluruh alam'],
                ['arab' => 'الرَّحْمَنِ الرَّحِيمِ', 'latin' => 'Ar-raḥmānir-raḥīm', 'terjemahan' => 'Yang Maha Pengasih, Maha Penyayang'],
                ['arab' => 'مَالِكِ يَوْمِ الدِّينِ', 'latin' => 'Māliki yaumid-dīn', 'terjemahan' => 'Pemilik hari pembalasan'],
                ['arab' => 'إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ', 'latin' => 'Iyyāka naʿbudu wa iyyāka nastaʿīn', 'terjemahan' => 'Hanya kepada Engkaulah kami menyembah'],
                ['arab' => 'اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ', 'latin' => 'Ihdinaṣ-ṣirāṭal-mustaqīm', 'terjemahan' => 'Tunjukilah kami jalan yang lurus'],
                ['arab' => 'صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ', 'latin' => 'Ṣirāṭallażīna anʿamta ʿalaihim', 'terjemahan' => 'Jalan orang-orang yang telah Engkau beri nikmat']
            ]
        ];
        
        // 5. Membaca Surah Pendek (rakaat 1 dan 2 saja)
        if ($r <= 2) {
            $gerakanList[$step++] = [
                'nama' => 'Membaca Surah Pendek (Rakaat ' . $r . ')',
                'deskripsi' => 'Membaca surah pendek setelah Al-Fatihah',
                'langkah' => 'Pilih surah pendek yang sudah dihafal seperti Al-Ikhlas, Al-Falaq, atau An-Nas',
                'rakaat' => $r,
                'bacaan' => []
            ];
        }
        
        // 6. Rukuk
        $gerakanList[$step++] = [
            'nama' => 'Rukuk (Rakaat ' . $r . ')',
            'deskripsi' => 'Membungkuk dengan thumaininah',
            'langkah' => 'Bungkukkan badan hingga punggung rata, tangan memegang lutut',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'سُبْحَانَ رَبِّيَ الْعَظِيمِ', 'latin' => 'Subḥāna rabbiyal-ʿaẓīm', 'terjemahan' => 'Mahasuci Tuhanku Yang Maha Agung']
            ]
        ];
        
        // 7. I'tidal
        $gerakanList[$step++] = [
            'nama' => 'I\'tidal (Rakaat ' . $r . ')',
            'deskripsi' => 'Bangkit dari rukuk',
            'langkah' => 'Bangkit berdiri tegak sambil membaca doa i\'tidal',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ', 'latin' => 'Sami\'allāhu liman ḥamidah', 'terjemahan' => 'Allah Maha Mendengar orang yang memuji-Nya'],
                ['arab' => 'رَبَّنَا لَكَ الْحَمْدُ', 'latin' => 'Rabbanā lakal-ḥamd', 'terjemahan' => 'Ya Tuhan kami, segala puji bagi-Mu']
            ]
        ];
        
        // 8. Sujud Pertama
        $gerakanList[$step++] = [
            'nama' => 'Sujud Pertama (Rakaat ' . $r . ')',
            'deskripsi' => 'Sujud dengan thumaininah',
            'langkah' => 'Letakkan 7 anggota sujud: dahi+hidung, 2 telapak tangan, 2 lutut, 2 ujung kaki',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى', 'latin' => 'Subḥāna rabbiyal-aʿlā', 'terjemahan' => 'Mahasuci Tuhanku Yang Mahatinggi']
            ]
        ];
        
        // 9. Duduk Antara Dua Sujud
        $gerakanList[$step++] = [
            'nama' => 'Duduk Antara Dua Sujud (Rakaat ' . $r . ')',
            'deskripsi' => 'Duduk iftirasy sambil membaca doa',
            'langkah' => 'Duduk di atas kaki kiri, telapak kaki kanan tegak',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'رَبِّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَارْفَعْنِي', 'latin' => 'Rabbighfir lī warḥamnī wajburnī warfanī', 'terjemahan' => 'Ya Tuhanku, ampunilah aku, rahmatilah aku, cukupilah aku, angkatlah aku']
            ]
        ];
        
        // 10. Sujud Kedua
        $gerakanList[$step++] = [
            'nama' => 'Sujud Kedua (Rakaat ' . $r . ')',
            'deskripsi' => 'Sujud kedua dengan thumaininah',
            'langkah' => 'Sujud kembali seperti sujud pertama',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى', 'latin' => 'Subḥāna rabbiyal-aʿlā', 'terjemahan' => 'Mahasuci Tuhanku Yang Mahatinggi']
            ]
        ];
        
        // 11. Tasyahud Awal (untuk sholat 3 atau 4 rakaat, setelah rakaat ke-2)
        if ($totalRakaat >= 3 && $r === 2) {
            $gerakanList[$step++] = [
                'nama' => 'Tasyahud Awal',
                'deskripsi' => 'Duduk iftirasy membaca tasyahud awal',
                'langkah' => 'Duduk iftirasy: kaki kiri masuk bawah kaki kanan',
                'rakaat' => $r,
                'bacaan' => [
                    ['arab' => 'التَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلَّهِ', 'latin' => 'At-taḥiyyātul-mubārakātus-ṣalawātus-ṭayyibātu lillāh', 'terjemahan' => 'Segala penghormatan, keberkahan, shalawat, dan kebaikan adalah milik Allah']
                ]
            ];
        }
        
        // 12. Berdiri untuk rakaat berikutnya (kecuali rakaat terakhir)
        if ($r < $totalRakaat) {
            $gerakanList[$step++] = [
                'nama' => 'Berdiri untuk Rakaat ' . ($r + 1),
                'deskripsi' => 'Bangkit berdiri untuk rakaat berikutnya',
                'langkah' => 'Bangkit berdiri dengan tangan bertumpu pada lutut',
                'rakaat' => $r,
                'bacaan' => []
            ];
        }
    }
    
    // 13. Tasyahud Akhir (setelah rakaat terakhir)
    $gerakanList[$step++] = [
        'nama' => 'Tasyahud Akhir',
        'deskripsi' => 'Duduk tawarruk membaca tasyahud akhir dan shalawat',
        'langkah' => 'Duduk tawarruk: kaki kiri keluar dari bawah kaki kanan',
        'rakaat' => $totalRakaat,
        'bacaan' => [
            ['arab' => 'التَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلَّهِ', 'latin' => 'At-taḥiyyātul-mubārakātus-ṣalawātus-ṭayyibātu lillāh', 'terjemahan' => 'Segala penghormatan, keberkahan, shalawat, dan kebaikan adalah milik Allah']
        ]
    ];
    
    // 14. Salam
    $gerakanList[$step++] = [
        'nama' => 'Salam',
        'deskripsi' => 'Menoleh ke kanan dan kiri mengucapkan salam',
        'langkah' => 'Menoleh ke kanan dan kiri mengucapkan "Assalamu\'alaikum warahmatullah"',
        'rakaat' => $totalRakaat,
        'bacaan' => [
            ['arab' => 'السَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللَّهِ', 'latin' => 'Assalāmu ʿalaikum wa raḥmatullāh', 'terjemahan' => 'Semoga keselamatan dan rahmat Allah tercurah kepadamu']
        ]
    ];
    
    return $gerakanList;
}

// Generate gerakan
$gerakanList = generateGerakan($totalRakaat);
$totalLangkah = count($gerakanList);

// Get current movement
$gerakan = $gerakanList[$langkah] ?? $gerakanList[1];

// Navigation
$prevLangkah = $langkah > 1 ? $langkah - 1 : null;
$nextLangkah = $langkah < $totalLangkah ? $langkah + 1 : null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $sholat['nama'] ?> (<?= $totalRakaat ?> Rakaat) - Langkah <?= $langkah ?> - Sahabat Sholat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#10b981',
                        'primary-dark': '#059669',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        arabic: ['Amiri', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .arabic-text { font-family: 'Amiri', serif; direction: rtl; }
    </style>
</head>
<body class="bg-emerald-50">
<!-- Header - Sama dengan includes/header.php -->
<header class="fixed top-0 left-0 right-0 bg-emerald-600 z-50 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <!-- LOGO - Kiri -->
            <div class="flex items-center space-x-3 flex-shrink-0">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center overflow-hidden shadow-md">
                    <img src="../assets/img/LOGO-SAHABATSHOLAT.png" 
                         alt="Logo Sahabat Sholat" 
                         class="w-8 h-8 object-contain"
                         onerror="this.style.display='none'; this.parentElement.innerHTML='🕌'">
                </div>
                <div>
                    <h1 class="text-white text-lg font-extrabold leading-tight tracking-wide">SAHABAT SHOLAT</h1>
                    <p class="text-emerald-100 text-[10px]">Digital HPT Muhammadiyah</p>
                </div>
            </div>

            <!-- DESKTOP NAVIGATION - Tengah -->
            <nav class="hidden lg:flex items-center space-x-1">
                <a href="../index.php#sec-home" class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">
                    Home
                </a>
                <a href="../index.php#sec-sholat" class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">
                    Panduan Shalat
                </a>
                <a href="../index.php#sec-surah" class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">
                    Surah Pendek
                </a>
                <button class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">
                    Tentang Kami
                </button>
            </nav>

            <!-- RIGHT SIDE - Mode Toggle + Close Button -->
            <div class="flex items-center space-x-2">
                <!-- Mode Toggle - Desktop -->
                <div class="hidden lg:flex items-center bg-white/20 backdrop-blur-sm rounded-full p-1 border border-white/30">
                    <button id="mode-anak" class="px-4 py-1.5 rounded-full text-xs font-bold bg-white text-emerald-700 shadow-md transition">
                        Mode Anak
                    </button>
                    <button id="mode-dewasa" class="px-4 py-1.5 rounded-full text-xs font-bold text-white hover:bg-white/10 transition">
                        Mode Dewasa
                    </button>
                </div>

                <!-- Close Button - Kembali ke halaman sholat -->
                <a href="../index.php#sec-sholat" class="text-white p-2 rounded-lg hover:bg-white/10 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>

    <!-- Main Content -->
    <div class="pt-20 pb-8 px-4 max-w-6xl mx-auto">
        
        <!-- Header Section -->
        <div class="mb-6">
            <p class="text-emerald-600 font-bold text-sm mb-2">PANDUAN SHOLAT <?= strtoupper($sholat['nama']) ?> (<?= $totalRakaat ?> RAKAAT)</p>
            <div class="flex justify-between items-end">
                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900">Sholat <?= $sholat['nama'] ?></h2>
                    <p class="text-gray-600 mt-1">Langkah <?= $langkah ?> dari <?= $totalLangkah ?> | Rakaat <?= $gerakan['rakaat'] ?></p>
                </div>
            </div>
            <!-- Progress Bar -->
            <div class="mt-4 bg-gray-200 rounded-full h-3">
                <div class="bg-emerald-600 h-3 rounded-full transition-all duration-500" style="width: <?= ($langkah / $totalLangkah) * 100 ?>%"></div>
            </div>
            <p class="text-xs text-gray-500 mt-2">Rakaat <?= $gerakan['rakaat'] ?> dari <?= $totalRakaat ?></p>
        </div>

        <!-- Content Card -->
        <div class="bg-white rounded-2xl shadow-xl border-2 border-emerald-100 p-6 md:p-8">
            <div class="grid md:grid-cols-2 gap-6">
                
                <!-- Left: Ilustrasi & Langkah -->
                <div class="space-y-4">
                    <div class="bg-emerald-50 rounded-xl p-6 text-center border-2 border-emerald-200">
                        <h3 class="font-bold text-gray-900 mb-4 text-lg"><?= $gerakan['nama'] ?></h3>
                        <div class="w-full h-64 bg-emerald-100 rounded-lg flex items-center justify-center">
                            <span class="text-6xl text-emerald-600"><?= $gerakan['nama'] ?></span>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-4 border border-gray-200">
                        <h4 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                            <span class="bg-emerald-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs">ℹ</span>
                            Langkah Pembelajaran:
                        </h4>
                        <p class="text-sm text-gray-700 leading-relaxed"><?= $gerakan['langkah'] ?></p>
                    </div>
                </div>

                <!-- Right: Bacaan Sholat -->
                <div class="space-y-4">
                    <div class="text-center mb-6">
                        <h3 class="font-bold text-emerald-700 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Bacaan Sholat
                        </h3>
                    </div>

                    <?php if(!empty($gerakan['bacaan'])): ?>
                        <?php foreach($gerakan['bacaan'] as $bacaan): ?>
                        <div class="border-b border-gray-200 pb-4 mb-4 last:border-0">
                            <p class="text-2xl md:text-3xl text-right arabic-text text-gray-900 leading-loose mb-3">
                                <?= $bacaan['arab'] ?>
                            </p>
                            
                            <p class="text-sm text-gray-600 leading-relaxed mb-3">
                                <?= $bacaan['terjemahan'] ?>
                            </p>
                            
                            <p class="text-xs text-emerald-700 italic mb-3">
                                <?= $bacaan['latin'] ?>
                            </p>
                        </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="text-center py-8 text-gray-500">
                            <p>Tidak ada bacaan khusus untuk gerakan ini</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex justify-between items-center mt-6">
            <?php if($prevLangkah): ?>
            <a href="?sholat=<?= $sholatId ?>&langkah=<?= $prevLangkah ?>" class="bg-white border-2 border-emerald-200 text-emerald-700 font-bold px-6 py-3 rounded-xl hover:bg-emerald-50 transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali
            </a>
            <?php else: ?>
            <!-- ✅ FIX: Pakai ../ untuk naik ke root folder -->
            <a href="../index.php#sec-sholat" class="bg-white border-2 border-emerald-200 text-emerald-700 font-bold px-6 py-3 rounded-xl hover:bg-emerald-50 transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Daftar Sholat
            </a>
            <?php endif; ?>
            
            <?php if($nextLangkah): ?>
            <a href="?sholat=<?= $sholatId ?>&langkah=<?= $nextLangkah ?>" class="bg-emerald-600 text-white font-bold px-6 py-3 rounded-xl hover:bg-emerald-700 transition flex items-center gap-2 shadow-lg">
                Selanjutnya
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <?php else: ?>
            <!-- ✅ FIX: Pakai ../ untuk naik ke root folder -->
            <a href="../index.php#sec-sholat" class="bg-emerald-600 text-white font-bold px-6 py-3 rounded-xl hover:bg-emerald-700 transition flex items-center gap-2 shadow-lg">
                Selesai
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </a>
            <?php endif; ?>
        </div>
        
        <!-- Quick Navigation Info -->
        <div class="mt-6 p-4 bg-emerald-50 rounded-xl border border-emerald-200">
            <p class="text-sm text-emerald-800 font-semibold text-center">
                Total Langkah: <?= $totalLangkah ?> | Rakaat: <?= $totalRakaat ?> | Langkah Saat Ini: <?= $langkah ?>
            </p>
        </div>
    </div>

</body>
</html>