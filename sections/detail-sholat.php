<?php
// Set encoding UTF-8
header('Content-Type: text/html; charset=utf-8');

// Koneksi Database
include __DIR__ . '/../config.php';

// Get parameters
$sholatId = isset($_GET['sholat']) ? (int)$_GET['sholat'] : 1;
$langkah = isset($_GET['langkah']) ? (int)$_GET['langkah'] : 1;
$mode = isset($_GET['mode']) ? $_GET['mode'] : 'anak';

// Data sholat
$sholatData = [
    1 => ['nama' => 'Subuh', 'rakaat' => 2],
    2 => ['nama' => 'Dzuhur', 'rakaat' => 4],
    3 => ['nama' => 'Ashar', 'rakaat' => 4],
    4 => ['nama' => 'Maghrib', 'rakaat' => 3],
    5 => ['nama' => 'Isya', 'rakaat' => 4],
    6 => ['nama' => 'Tahajud', 'rakaat' => 2],
    7 => ['nama' => 'Dhuha', 'rakaat' => 2],
    8 => ['nama' => 'Hajat', 'rakaat' => 2],
    9 => ['nama' => 'Istikharah', 'rakaat' => 2],
    10 => ['nama' => 'Taubat', 'rakaat' => 2],
];

$sholat = $sholatData[$sholatId] ?? $sholatData[1];
$totalRakaat = $sholat['rakaat'];

// Generate gerakan
function generateGerakan($totalRakaat) {
    $gerakanList = [];
    $step = 1;
   
    $gerakanList[$step++] = [
        'nama' => 'Niat Sholat Shubuh',
        'deskripsi' => 'Niat dalam hati untuk melaksanakan sholat',
        'langkah' => 'Niat dilakukan dengan ikhlas di dalam hati. Tidak perlu dilafalkan secara lisan.',
        'rakaat' => 0,
        'bacaan' => [
            ['arab' => 'النِّيَّةُ فِي الْقَلْبِ', 'latin' => 'An-niyyatu fil-qalb', 'terjemahan' => 'Niat tulus lillahi ta\'ala tanpa perlu dilafalkan secara lisan, memfokuskan hati menghadap Allah SWT.', 'audio_url' => 'assets/audio/niat.mp3']
        ]
    ];
    
    $gerakanList[$step++] = [
        'nama' => 'Takbiratul Ihram',
        'deskripsi' => 'Mengangkat kedua tangan sejajar telinga',
        'langkah' => 'Angkat kedua tangan sejajar telinga atau bahu sambil mengucapkan "Allahu Akbar", kemudian letakkan tangan kanan di atas tangan kiri di dada',
        'rakaat' => 1,
        'bacaan' => [
            ['arab' => 'اللهُ أَكْبَرُ', 'latin' => 'Allāhu Akbar', 'terjemahan' => 'Allah Maha Besar', 'audio_url' => 'assets/audio/takbir.mp3']
        ]
    ];
    
    $gerakanList[$step++] = [
        'nama' => 'Doa Iftitah',
        'deskripsi' => 'Membaca doa pembuka',
        'langkah' => 'Baca doa iftitah dengan khusyuk setelah meletakkan tangan di dada',
        'rakaat' => 1,
        'bacaan' => [
            ['arab' => 'اللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ', 'latin' => 'Allāhumma bā\'id bainī wa baina khaṭāyāya...', 'terjemahan' => 'Ya Allah, jauhkanlah aku dari dosa-dosaku sebagaimana Engkau jauhkan antara timur dan barat.', 'audio_url' => 'assets/audio/iftitah.mp3']
        ]
    ];
    
    for ($r = 1; $r <= $totalRakaat; $r++) {
        $gerakanList[$step++] = [
            'nama' => 'Membaca Al-Fatihah (Rakaat ' . $r . ')',
            'deskripsi' => 'Membaca surah Al-Fatihah',
            'langkah' => 'Baca Al-Fatihah dengan tartil dan tajwid yang benar',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ', 'latin' => 'Bismillāhir-raḥmānir-raīm', 'terjemahan' => 'Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.', 'audio_url' => 'assets/audio/fatihah1.mp3'],
                ['arab' => 'الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ', 'latin' => 'Al-ḥamdu lillāhi rabbil-ālamīn', 'terjemahan' => 'Segala puji bagi Allah, Tuhan seluruh alam.', 'audio_url' => 'assets/audio/fatihah2.mp3'],
                ['arab' => 'الرَّحْمَنِ الرَّحِيمِ', 'latin' => 'Ar-raḥmānir-raḥīm', 'terjemahan' => 'Yang Maha Pengasih, Maha Penyayang.', 'audio_url' => 'assets/audio/fatihah3.mp3'],
                ['arab' => 'مَالِكِ يَوْمِ الدِّينِ', 'latin' => 'Māliki yaumid-dīn', 'terjemahan' => 'Pemilik hari pembalasan.', 'audio_url' => 'assets/audio/fatihah4.mp3'],
                ['arab' => 'إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ', 'latin' => 'Iyyāka naʿbudu wa iyyāka nastaʿīn', 'terjemahan' => 'Hanya kepada Engkaulah kami menyembah.', 'audio_url' => 'assets/audio/fatihah5.mp3'],
                ['arab' => 'اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ', 'latin' => 'Ihdinaṣ-ṣirāal-mustaqīm', 'terjemahan' => 'Tunjukilah kami jalan yang lurus.', 'audio_url' => 'assets/audio/fatihah6.mp3'],
                ['arab' => 'صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ', 'latin' => 'Ṣirāṭallażīna anʿamta ʿalaihim', 'terjemahan' => 'Jalan orang-orang yang telah Engkau beri nikmat.', 'audio_url' => 'assets/audio/fatihah7.mp3']
            ]
        ];
        
        if ($r <= 2) {
            $gerakanList[$step++] = [
                'nama' => 'Membaca Surah Pendek (Rakaat ' . $r . ')',
                'deskripsi' => 'Membaca surah pendek setelah Al-Fatihah',
                'langkah' => 'Baca surah pendek pilihanmu. Contoh: Surah Al-Ikhlas.',
                'rakaat' => $r,
                'bacaan' => [
                    ['arab' => 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ', 'latin' => 'Bismillāhir-raḥmānir-raḥīm', 'terjemahan' => 'Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.', 'audio_url' => 'assets/audio/ikhlas1.mp3'],
                    ['arab' => 'قُلْ هُوَ اللَّهُ أَحَدٌ', 'latin' => 'Qul huwallāhu aad', 'terjemahan' => 'Katakanlah: Dialah Allah, Yang Maha Esa.', 'audio_url' => 'assets/audio/ikhlas2.mp3'],
                    ['arab' => 'اللَّهُ الصَّمَدُ', 'latin' => 'Allāhuṣ-ṣamad', 'terjemahan' => 'Allah adalah Tuhan yang bergantung kepada-Nya segala sesuatu.', 'audio_url' => 'assets/audio/ikhlas3.mp3'],
                    ['arab' => 'لَمْ يَلِدْ وَلَمْ يُولَدْ', 'latin' => 'Lam yalid wa lam yūlad', 'terjemahan' => 'Dia tiada beranak dan tidak pula diperanakkan.', 'audio_url' => 'assets/audio/ikhlas4.mp3'],
                    ['arab' => 'وَلَمْ يَكُن لَّهُ كُفُوًا أَحَدٌ', 'latin' => 'Wa lam yakul-lahu kufuwan aḥad', 'terjemahan' => 'Dan tidak ada seorangpun yang setara dengan Dia.', 'audio_url' => 'assets/audio/ikhlas5.mp3']
                ]
            ];
        }
        
        $gerakanList[$step++] = [
            'nama' => 'Rukuk (Rakaat ' . $r . ')',
            'deskripsi' => 'Membungkuk dengan thumaininah',
            'langkah' => 'Bungkukkan badan hingga punggung rata, tangan memegang lutut, baca "Subhana rabbiyal adzim" 3x',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'سُبْحَانَ رَبِّيَ الْعَظِيمِ', 'latin' => 'Subḥāna rabbiyal-ʿaẓīm', 'terjemahan' => 'Mahasuci Tuhanku Yang Maha Agung', 'audio_url' => 'assets/audio/rukuk.mp3']
            ]
        ];
        
        $gerakanList[$step++] = [
            'nama' => 'I\'tidal (Rakaat ' . $r . ')',
            'deskripsi' => 'Bangkit dari rukuk',
            'langkah' => 'Bangkit berdiri tegak sambil membaca "Sami\'allahu liman hamidah", lalu baca "Rabbana lakal hamd"',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ', 'latin' => 'Sami\'allāhu liman amidah', 'terjemahan' => 'Allah Maha Mendengar orang yang memuji-Nya', 'audio_url' => 'assets/audio/itidal1.mp3'],
                ['arab' => 'رَبَّنَا لَكَ الْحَمْدُ', 'latin' => 'Rabbanā lakal-ḥamd', 'terjemahan' => 'Ya Tuhan kami, segala puji bagi-Mu', 'audio_url' => 'assets/audio/itidal2.mp3']
            ]
        ];
        
        $gerakanList[$step++] = [
            'nama' => 'Sujud Pertama (Rakaat ' . $r . ')',
            'deskripsi' => 'Sujud dengan thumaininah',
            'langkah' => 'Letakkan 7 anggota sujud di lantai: dahi+hidung, 2 telapak tangan, 2 lutut, 2 ujung kaki. Baca "Subhana rabbiyal a\'la" 3x',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى', 'latin' => 'Subḥāna rabbiyal-alā', 'terjemahan' => 'Mahasuci Tuhanku Yang Mahatinggi', 'audio_url' => 'assets/audio/sujud.mp3']
            ]
        ];
        
        $gerakanList[$step++] = [
            'nama' => 'Duduk Antara Dua Sujud (Rakaat ' . $r . ')',
            'deskripsi' => 'Duduk iftirasy sambil membaca doa',
            'langkah' => 'Duduk di atas kaki kiri, telapak kaki kanan tegak. Baca "Rabbighfirli warhamni wajburni warfa\'ni warzuqni wahdini wa\'afini wa\'fu \'anni"',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'رَبِّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَارْفَعْنِي', 'latin' => 'Rabbighfir lī warḥamnī wajburnī warfanī', 'terjemahan' => 'Ya Tuhanku, ampunilah aku, rahmatilah aku, cukupilah aku, angkatlah aku', 'audio_url' => 'assets/audio/duduk.mp3']
            ]
        ];
        
        $gerakanList[$step++] = [
            'nama' => 'Sujud Kedua (Rakaat ' . $r . ')',
            'deskripsi' => 'Sujud kedua dengan thumaininah',
            'langkah' => 'Sujud kembali seperti sujud pertama',
            'rakaat' => $r,
            'bacaan' => [
                ['arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى', 'latin' => 'Subḥāna rabbiyal-alā', 'terjemahan' => 'Mahasuci Tuhanku Yang Mahatinggi', 'audio_url' => 'assets/audio/sujud.mp3']
            ]
        ];
        
        if ($totalRakaat >= 3 && $r === 2) {
            $gerakanList[$step++] = [
                'nama' => 'Tasyahud Awal',
                'deskripsi' => 'Duduk iftirasy membaca tasyahud awal',
                'langkah' => 'Duduk iftirasy: kaki kiri masuk bawah kaki kanan',
                'rakaat' => $r,
                'bacaan' => [
                    ['arab' => 'التَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلَّهِ', 'latin' => 'At-taḥiyyātul-mubārakātus-ṣalawātus-ṭayyibātu lillāh', 'terjemahan' => 'Segala penghormatan, keberkahan, shalawat, dan kebaikan adalah milik Allah', 'audio_url' => 'assets/audio/tasyahud.mp3']
                ]
            ];
        }
        
        if ($r < $totalRakaat) {
            $gerakanList[$step++] = [
                'nama' => 'Berdiri untuk Rakaat ' . ($r + 1),
                'deskripsi' => 'Bangkit berdiri untuk rakaat berikutnya',
                'langkah' => 'Bangkit berdiri dengan tangan bertumpu pada lutut, baca Al-Fatihah dan surah pendek kembali',
                'rakaat' => $r,
                'bacaan' => []
            ];
        }
    }
    
    $gerakanList[$step++] = [
        'nama' => 'Tasyahud Akhir',
        'deskripsi' => 'Duduk tawarruk membaca tasyahud akhir dan shalawat',
        'langkah' => 'Duduk tawarruk: kaki kiri keluar dari bawah kaki kanan, baca tasyahud akhir dan shalawat Ibrahim',
        'rakaat' => $totalRakaat,
        'bacaan' => [
            ['arab' => 'التَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلَّهِ', 'latin' => 'At-taḥiyyātul-mubārakātus-ṣalawātus-ṭayyibātu lillāh', 'terjemahan' => 'Segala penghormatan, keberkahan, shalawat, dan kebaikan adalah milik Allah', 'audio_url' => 'assets/audio/tasyahud.mp3']
        ]
    ];
    
    $gerakanList[$step++] = [
        'nama' => 'Salam',
        'deskripsi' => 'Menoleh ke kanan dan kiri mengucapkan salam',
        'langkah' => 'Menoleh ke kanan ucapkan "Assalamu\'alaikum warahmatullah", lalu ke kiri dengan ucapan yang sama',
        'rakaat' => $totalRakaat,
        'bacaan' => [
            ['arab' => 'السَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللَّهِ', 'latin' => 'Assalāmu ʿalaikum wa ramatullāh', 'terjemahan' => 'Semoga keselamatan dan rahmat Allah tercurah kepadamu', 'audio_url' => 'assets/audio/salam.mp3']
        ]
    ];
    
    return $gerakanList;
}

$gerakanList = generateGerakan($totalRakaat);
$totalLangkah = count($gerakanList);
$gerakan = $gerakanList[$langkah] ?? $gerakanList[1];

$prevLangkah = $langkah > 1 ? $langkah - 1 : null;
$nextLangkah = $langkah < $totalLangkah ? $langkah + 1 : null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($sholat['nama']) ?> - Langkah <?= $langkah ?> - Sahabat Sholat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: '#10b981', 'primary-dark': '#059669' },
                    fontFamily: { sans: ['Poppins', 'sans-serif'], arabic: ['Amiri', 'serif'] }
                }
            }
        }
    </script>
    <style>
        .arabic-text { font-family: 'Amiri', serif; direction: rtl; }
        /* Custom Audio Player Styling */
        .audio-player {
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
            border-radius: 12px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .audio-player button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: transform 0.2s;
        }
        .audio-player button:hover { transform: scale(1.1); }
        .audio-player button:active { transform: scale(0.95); }
        .progress-container {
            flex: 1;
            height: 6px;
            background: rgba(255,255,255,0.3);
            border-radius: 3px;
            cursor: pointer;
            position: relative;
        }
        .progress-bar {
            height: 100%;
            background: white;
            border-radius: 3px;
            width: 0%;
            transition: width 0.1s;
        }
        .time-display {
            font-size: 11px;
            color: white;
            font-weight: 600;
            min-width: 70px;
            text-align: right;
        }
        /* Toggle Switch */
        .toggle-switch {
            position: relative;
            width: 50px;
            height: 26px;
            background: #d1d5db;
            border-radius: 13px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .toggle-switch.active { background: #10b981; }
        .toggle-switch::after {
            content: '';
            position: absolute;
            width: 22px;
            height: 22px;
            background: white;
            border-radius: 50%;
            top: 2px;
            left: 2px;
            transition: transform 0.3s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .toggle-switch.active::after { transform: translateX(24px); }
    </style>
</head>
<body class="bg-emerald-50 font-sans antialiased">

<!-- Header -->
<header class="fixed top-0 left-0 right-0 bg-emerald-600 z-50 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-3 flex-shrink-0">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center overflow-hidden shadow-md">
                    <img src="../assets/img/LOGO-SAHABATSHOLAT.png" alt="Logo" class="w-8 h-8 object-contain" onerror="this.style.display='none'; this.parentElement.innerHTML=''">
                </div>
                <div>
                    <h1 class="text-white text-lg font-extrabold leading-tight tracking-wide">SAHABAT SHOLAT</h1>
                    <p class="text-emerald-100 text-[10px]">Digital HPT Muhammadiyah</p>
                </div>
            </div>
            <nav class="hidden lg:flex items-center space-x-1">
                <a href="../index.php?mode=<?= $mode ?>#sec-home" class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Home</a>
                <a href="../index.php?mode=<?= $mode ?>#sec-sholat" class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Panduan Shalat</a>
                <a href="../index.php?mode=<?= $mode ?>#sec-surah" class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Surah Pendek</a>
            </nav>
            <div class="flex items-center space-x-2">
                <div class="hidden lg:flex items-center bg-white/20 backdrop-blur-sm rounded-full p-1 border border-white/30">
                    <a href="?sholat=<?= $sholatId ?>&langkah=<?= $langkah ?>&mode=anak" class="px-4 py-1.5 rounded-full text-xs font-bold transition <?= $mode === 'anak' ? 'bg-white text-emerald-700 shadow-md' : 'text-white hover:bg-white/10' ?>">Mode Anak</a>
                    <a href="?sholat=<?= $sholatId ?>&langkah=<?= $langkah ?>&mode=dewasa" class="px-4 py-1.5 rounded-full text-xs font-bold transition <?= $mode === 'dewasa' ? 'bg-white text-emerald-700 shadow-md' : 'text-white hover:bg-white/10' ?>">Mode Dewasa</a>
                </div>
                <a href="../index.php?mode=<?= $mode ?>#sec-sholat" class="text-white p-2 rounded-lg hover:bg-white/10 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
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
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900">Sholat <?= htmlspecialchars($sholat['nama']) ?></h2>
                <p class="text-gray-600 mt-1">Langkah Pembelajaran</p>
            </div>
            <p class="text-sm text-gray-600 font-semibold">Langkah <?= $langkah ?> dari <?= $totalLangkah ?></p>
        </div>
        <div class="mt-4 bg-gray-200 rounded-full h-3">
            <div class="bg-emerald-600 h-3 rounded-full transition-all duration-500" style="width: <?= ($langkah / $totalLangkah) * 100 ?>%"></div>
        </div>
    </div>

    <!-- Autoplay Toggle -->
    <div class="bg-emerald-100 rounded-xl p-4 mb-6 flex items-center justify-between border border-emerald-200">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center text-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <h3 class="font-bold text-gray-900">Autoplay (Putar Otomatis)</h3>
                <p class="text-xs text-gray-600">Pindah ke gerakan berikutnya secara otomatis setelah audio selesai.</p>
            </div>
        </div>
        <div id="autoplayToggle" class="toggle-switch" onclick="toggleAutoplay()"></div>
    </div>

    <!-- Content Card -->
    <div class="bg-white rounded-2xl shadow-xl border-2 border-emerald-100 p-6 md:p-8">
        <div class="grid md:grid-cols-2 gap-6">
            
            <!-- Left: Ilustrasi & Langkah -->
            <div class="space-y-4">
                <div class="bg-emerald-50 rounded-xl p-6 text-center border-2 border-emerald-200">
                    <h3 class="font-bold text-gray-900 mb-4 text-lg"><?= htmlspecialchars($gerakan['nama']) ?></h3>
                    <div class="w-full h-64 bg-emerald-100 rounded-lg flex items-center justify-center">
                        <span class="text-6xl text-emerald-600">🕌</span>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-4 border border-gray-200">
                    <h4 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                        <span class="bg-emerald-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs">ℹ</span>
                        Langkah Pembelajaran:
                    </h4>
                    <p class="text-sm text-gray-700 leading-relaxed"><?= htmlspecialchars($gerakan['langkah']) ?></p>
                </div>
            </div>

            <!-- Right: Bacaan Sholat + Audio Player -->
            <div class="space-y-4">
                <div class="text-center mb-6">
                    <h3 class="font-bold text-emerald-700 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        Bacaan Sholat
                    </h3>
                </div>

                <?php if(!empty($gerakan['bacaan'])): ?>
                    <?php foreach($gerakan['bacaan'] as $index => $bacaan): ?>
                    <div class="border-b border-gray-200 pb-4 mb-4 last:border-0">
                        <p class="text-2xl md:text-3xl text-right arabic-text text-gray-900 leading-loose mb-3">
                            <?= htmlspecialchars($bacaan['arab']) ?>
                        </p>
                        
                        <p class="text-sm text-gray-600 leading-relaxed mb-3">
                            <?= htmlspecialchars($bacaan['terjemahan']) ?>
                        </p>
                        
                        <p class="text-xs text-emerald-700 italic mb-3">
                            <?= htmlspecialchars($bacaan['latin']) ?>
                        </p>

                        <!-- Audio Player Custom -->
                        <?php if(!empty($bacaan['audio_url'])): ?>
                        <div class="audio-player mt-3" data-audio="../<?= htmlspecialchars($bacaan['audio_url']) ?>">
                            <button class="play-btn" onclick="togglePlay(this)">
                                <svg class="play-icon w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                <svg class="pause-icon w-5 h-5 text-emerald-600 hidden" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                            </button>
                            <div class="progress-container" onclick="seekAudio(event, this)">
                                <div class="progress-bar"></div>
                            </div>
                            <div class="time-display">0:00 / 0:00</div>
                            <audio class="audio-element" preload="metadata">
                                <source src="../<?= htmlspecialchars($bacaan['audio_url']) ?>" type="audio/mpeg">
                            </audio>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="text-center py-8 text-gray-500">
                        <p>Tidak ada bacaan khusus untuk gerakan ini</p>
                    </div>
                <?php endif; ?>

                <!-- Tombol Dengar Suara -->
                <button onclick="playAllAudio()" class="w-full bg-emerald-600 text-white font-bold py-3 rounded-xl hover:bg-emerald-700 transition flex items-center justify-center gap-2 shadow-lg mt-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
                    Dengar Semua Bacaan
                </button>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="flex justify-between items-center mt-6">
        <?php if($prevLangkah): ?>
        <a href="?sholat=<?= $sholatId ?>&langkah=<?= $prevLangkah ?>&mode=<?= $mode ?>" class="bg-white border-2 border-emerald-200 text-emerald-700 font-bold px-6 py-3 rounded-xl hover:bg-emerald-50 transition flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali
        </a>
        <?php else: ?>
        <a href="../index.php?mode=<?= $mode ?>#sec-sholat" class="bg-white border-2 border-emerald-200 text-emerald-700 font-bold px-6 py-3 rounded-xl hover:bg-emerald-50 transition flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali ke Daftar Sholat
        </a>
        <?php endif; ?>
        
        <?php if($nextLangkah): ?>
        <a href="?sholat=<?= $sholatId ?>&langkah=<?= $nextLangkah ?>&mode=<?= $mode ?>" class="bg-emerald-600 text-white font-bold px-6 py-3 rounded-xl hover:bg-emerald-700 transition flex items-center gap-2 shadow-lg">
            Selanjutnya
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
        <?php else: ?>
        <a href="../index.php?mode=<?= $mode ?>#sec-sholat" class="bg-emerald-600 text-white font-bold px-6 py-3 rounded-xl hover:bg-emerald-700 transition flex items-center gap-2 shadow-lg">
            Selesai
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        </a>
        <?php endif; ?>
    </div>
</div>

<script>
// ============ AUDIO PLAYER LOGIC ============
let autoplayEnabled = false;
let currentAudioIndex = 0;
let audioElements = [];

// Initialize all audio players
document.addEventListener('DOMContentLoaded', function() {
    const players = document.querySelectorAll('.audio-player');
    players.forEach((player, index) => {
        const audio = player.querySelector('.audio-element');
        const playBtn = player.querySelector('.play-btn');
        const progressBar = player.querySelector('.progress-bar');
        const timeDisplay = player.querySelector('.time-display');
        const progressContainer = player.querySelector('.progress-container');
        
        audioElements.push(audio);
        
        // Update progress bar
        audio.addEventListener('timeupdate', function() {
            const progress = (audio.currentTime / audio.duration) * 100;
            progressBar.style.width = progress + '%';
            timeDisplay.textContent = formatTime(audio.currentTime) + ' / ' + formatTime(audio.duration);
        });
        
        // When audio ends
        audio.addEventListener('ended', function() {
            playBtn.querySelector('.play-icon').classList.remove('hidden');
            playBtn.querySelector('.pause-icon').classList.add('hidden');
            progressBar.style.width = '0%';
            
            // Autoplay next
            if (autoplayEnabled && index < players.length - 1) {
                setTimeout(() => {
                    const nextBtn = players[index + 1].querySelector('.play-btn');
                    togglePlay(nextBtn);
                }, 1000);
            } else if (autoplayEnabled && index === players.length - 1) {
                // Last audio finished, go to next step
                setTimeout(() => {
                    const nextLink = document.querySelector('a[href*="langkah=<?= $nextLangkah ?>"]');
                    if (nextLink) nextLink.click();
                }, 1500);
            }
        });
        
        // Click on progress bar to seek
        progressContainer.addEventListener('click', function(e) {
            const rect = progressContainer.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            audio.currentTime = pos * audio.duration;
        });
    });
});

function togglePlay(btn) {
    const player = btn.closest('.audio-player');
    const audio = player.querySelector('.audio-element');
    const playIcon = btn.querySelector('.play-icon');
    const pauseIcon = btn.querySelector('.pause-icon');
    
    // Pause all other audios
    audioElements.forEach(a => {
        if (a !== audio) {
            a.pause();
            const otherBtn = a.closest('.audio-player').querySelector('.play-btn');
            otherBtn.querySelector('.play-icon').classList.remove('hidden');
            otherBtn.querySelector('.pause-icon').classList.add('hidden');
        }
    });
    
    if (audio.paused) {
        audio.play();
        playIcon.classList.add('hidden');
        pauseIcon.classList.remove('hidden');
    } else {
        audio.pause();
        playIcon.classList.remove('hidden');
        pauseIcon.classList.add('hidden');
    }
}

function playAllAudio() {
    const firstBtn = document.querySelector('.audio-player .play-btn');
    if (firstBtn) {
        autoplayEnabled = true;
        document.getElementById('autoplayToggle').classList.add('active');
        togglePlay(firstBtn);
    }
}

function toggleAutoplay() {
    autoplayEnabled = !autoplayEnabled;
    document.getElementById('autoplayToggle').classList.toggle('active');
}

function seekAudio(event, container) {
    const audio = container.closest('.audio-player').querySelector('.audio-element');
    const rect = container.getBoundingClientRect();
    const pos = (event.clientX - rect.left) / rect.width;
    audio.currentTime = pos * audio.duration;
}

function formatTime(seconds) {
    if (isNaN(seconds)) return '0:00';
    const mins = Math.floor(seconds / 60);
    const secs = Math.floor(seconds % 60);
    return mins + ':' + (secs < 10 ? '0' : '') + secs;
}
</script>

</body>
</html>