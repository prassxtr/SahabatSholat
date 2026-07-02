<?php
// Set encoding UTF-8
header('Content-Type: text/html; charset=utf-8');

// Get surah parameter
$surahId = isset($_GET['surah']) ? (int)$_GET['surah'] : 1;

// Data lengkap surah dengan ayat-ayat
$surahData = [
    1 => [
        'nama_latin' => 'Al-Fatihah',
        'nama_arab' => 'الفاتحة',
        'arti' => 'Pembukaan',
        'jumlah_ayat' => 7,
        'tempat_turun' => 'Mekah',
        'ayat' => [
            ['no' => 1, 'arab' => 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ', 'latin' => 'Bismillāhir-raḥmānir-raḥīm', 'terjemahan' => 'Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.'],
            ['no' => 2, 'arab' => 'الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ', 'latin' => 'Al-ḥamdu lillāhi rabbil-ālamīn', 'terjemahan' => 'Segala puji bagi Allah, Tuhan seluruh alam.'],
            ['no' => 3, 'arab' => 'الرَّحْمَنِ الرَّحِيمِ', 'latin' => 'Ar-raḥmānir-raḥīm', 'terjemahan' => 'Yang Maha Pengasih, Maha Penyayang.'],
            ['no' => 4, 'arab' => 'مَالِكِ يَوْمِ الدِّينِ', 'latin' => 'Māliki yaumid-dīn', 'terjemahan' => 'Pemilik hari pembalasan.'],
            ['no' => 5, 'arab' => 'إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ', 'latin' => 'Iyyāka naʿbudu wa iyyāka nastaʿīn', 'terjemahan' => 'Hanya kepada Engkaulah kami menyembah dan hanya kepada Engkaulah kami mohon pertolongan.'],
            ['no' => 6, 'arab' => 'اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ', 'latin' => 'Ihdinaṣ-ṣirāṭal-mustaqīm', 'terjemahan' => 'Tunjukilah kami jalan yang lurus.'],
            ['no' => 7, 'arab' => 'صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ', 'latin' => 'Ṣirāṭallażīna anʿamta ʿalaihim ghairil-maghḍūbi ʿalaihim wa laḍ-ḍāllīn', 'terjemahan' => '(yaitu) jalan orang-orang yang telah Engkau beri nikmat kepadanya; bukan (jalan) mereka yang dimurkai, dan bukan (pula jalan) mereka yang sesat.'],
        ]
    ],
    2 => [
        'nama_latin' => 'Al-Kautsar',
        'nama_arab' => 'الكوثر',
        'arti' => 'Nikmat yang Berlimpah',
        'jumlah_ayat' => 3,
        'tempat_turun' => 'Mekah',
        'ayat' => [
            ['no' => 1, 'arab' => 'إِنَّا أَعْطَيْنَاكَ الْكَوْثَرَ', 'latin' => 'Innā aʿṭainākal-kauṡar', 'terjemahan' => 'Sungguh, Kami telah memberikan kepadamu nikmat yang berlimpah.'],
            ['no' => 2, 'arab' => 'فَصَلِّ لِرَبِّكَ وَانْحَرْ', 'latin' => 'Faṣalli lirabbika wanḥar', 'terjemahan' => 'Maka laksanakanlah sholat karena Tuhanmu, dan berkurbanlah (sebagai ibadah dan mendekatkan diri kepada Allah).'],
            ['no' => 3, 'arab' => 'إِنَّ شَانِئَكَ هُوَ الْأَبْتَرُ', 'latin' => 'Inna syāni-aka huwal-abtar', 'terjemahan' => 'Sesungguhnya orang-orang yang membencimu, dialah yang terputus (dari rahmat Allah).'],
        ]
    ],
    3 => [
        'nama_latin' => 'Al-Ikhlas',
        'nama_arab' => 'الإخلاص',
        'arti' => 'Memurnikan Keikhlasan',
        'jumlah_ayat' => 4,
        'tempat_turun' => 'Mekah',
        'ayat' => [
            ['no' => 1, 'arab' => 'قُلْ هُوَ اللَّهُ أَحَدٌ', 'latin' => 'Qul huwallāhu aḥad', 'terjemahan' => 'Katakanlah (Muhammad), "Dialah Allah, Yang Maha Esa.'],
            ['no' => 2, 'arab' => 'اللَّهُ الصَّمَدُ', 'latin' => 'Allāhuṣ-ṣamad', 'terjemahan' => 'Allah tempat meminta segala sesuatu.'],
            ['no' => 3, 'arab' => 'لَمْ يَلِدْ وَلَمْ يُولَدْ', 'latin' => 'Lam yalid wa lam yūlad', 'terjemahan' => '(Allah) tidak beranak dan tidak pula diperanakkan.'],
            ['no' => 4, 'arab' => 'وَلَمْ يَكُنْ لَهُ كُفُوًا أَحَدٌ', 'latin' => 'Wa lam yakul lahū kufuwan aḥad', 'terjemahan' => 'Dan tidak ada sesuatu yang setara dengan Dia."'],
        ]
    ],
    4 => [
        'nama_latin' => 'Al-Falaq',
        'nama_arab' => 'الفلق',
        'arti' => 'Waktu Subuh',
        'jumlah_ayat' => 5,
        'tempat_turun' => 'Mekah',
        'ayat' => [
            ['no' => 1, 'arab' => 'قُلْ أَعُوذُ بِرَبِّ الْفَلَقِ', 'latin' => 'Qul aʿūżu birabbil-falaq', 'terjemahan' => 'Katakanlah, "Aku berlindung kepada Tuhan yang menguasai subuh (fajar),'],
            ['no' => 2, 'arab' => 'مِنْ شَرِّ مَا خَلَقَ', 'latin' => 'Min syarri mā khalaq', 'terjemahan' => 'dari kejahatan (makhluk yang) Dia ciptakan,'],
            ['no' => 3, 'arab' => 'وَمِنْ شَرِّ غَاسِقٍ إِذَا وَقَبَ', 'latin' => 'Wa min syarri gāsiqin iżā waqab', 'terjemahan' => 'dan dari kejahatan malam apabila telah gelap gulita,'],
            ['no' => 4, 'arab' => 'وَمِنْ شَرِّ النَّفَّاثَاتِ فِي الْعُقَدِ', 'latin' => 'Wa min syarrin-naffāṡāti fil-ʿuqad', 'terjemahan' => 'dan dari kejahatan perempuan-perempuan penyihir yang meniup pada buhul-buhul (talinya),'],
            ['no' => 5, 'arab' => 'وَمِنْ شَرِّ حَاسِدٍ إِذَا حَسَدَ', 'latin' => 'Wa min syarri ḥāsidin iżā ḥasad', 'terjemahan' => 'dan dari kejahatan orang yang dengki apabila dia dengki."'],
        ]
    ],
    5 => [
        'nama_latin' => 'An-Nas',
        'nama_arab' => 'الناس',
        'arti' => 'Manusia',
        'jumlah_ayat' => 6,
        'tempat_turun' => 'Mekah',
        'ayat' => [
            ['no' => 1, 'arab' => 'قُلْ أَعُوذُ بِرَبِّ النَّاسِ', 'latin' => 'Qul aʿūżu birabbin-nās', 'terjemahan' => 'Katakanlah, "Aku berlindung kepada Tuhannya manusia,'],
            ['no' => 2, 'arab' => 'مَلِكِ النَّاسِ', 'latin' => 'Malikin-nās', 'terjemahan' => 'Raja manusia,'],
            ['no' => 3, 'arab' => 'إِلَٰهِ النَّاسِ', 'latin' => 'Ilāhin-nās', 'terjemahan' => 'sembahan manusia,'],
            ['no' => 4, 'arab' => 'مِنْ شَرِّ الْوَسْوَاسِ الْخَنَّاسِ', 'latin' => 'Min syarril-waswāsil-khannās', 'terjemahan' => 'dari kejahatan (bisikan) setan yang bersembunyi,'],
            ['no' => 5, 'arab' => 'الَّذِي يُوَسْوِسُ فِي صُدُورِ النَّاسِ', 'latin' => 'Allażī yuwaswisu fī ṣudūrin-nās', 'terjemahan' => 'yang membisikkan (kejahatan) ke dalam dada manusia,'],
            ['no' => 6, 'arab' => 'مِنَ الْجِنَّةِ وَالنَّاسِ', 'latin' => 'Minal-jinnati wan-nās', 'terjemahan' => 'dari (golongan) jin dan manusia."'],
        ]
    ],
    6 => [
        'nama_latin' => 'Al-\'Ashr',
        'nama_arab' => 'العصر',
        'arti' => 'Demi Masa',
        'jumlah_ayat' => 3,
        'tempat_turun' => 'Mekah',
        'ayat' => [
            ['no' => 1, 'arab' => 'وَالْعَصْرِ', 'latin' => 'Wal-ʿaṣr', 'terjemahan' => 'Demi masa.'],
            ['no' => 2, 'arab' => 'إِنَّ الْإِنْسَانَ لَفِي خُسْرٍ', 'latin' => 'Innal-insāna lafī khusr', 'terjemahan' => 'Sungguh, manusia berada dalam kerugian,'],
            ['no' => 3, 'arab' => 'إِلَّا الَّذِينَ آمَنُوا وَعَمِلُوا الصَّالِحَاتِ وَتَوَاصَوْا بِالْحَقِّ وَتَوَاصَوْا بِالصَّبْرِ', 'latin' => 'Illallażīna āmanū wa ʿamiluṣ-ṣāliḥāti wa tawāṣau bil-ḥaqqi wa tawāṣau biṣ-ṣabr', 'terjemahan' => 'kecuali orang-orang yang beriman dan mengerjakan kebajikan serta saling menasihati untuk kebenaran dan saling menasihati untuk kesabaran.'],
        ]
    ],
];

$surah = $surahData[$surahId] ?? $surahData[1];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surah <?= $surah['nama_latin'] ?> - Sahabat Sholat</title>
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
        .arabic-text { font-family: 'Amiri', serif; direction: rtl; line-height: 2.5; }
    </style>
</head>
<body class="bg-emerald-50">

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 bg-emerald-600 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center overflow-hidden shadow-md">
                        <img src="../assets/img/LOGO-SAHABATSHOLAT.png" alt="Logo" class="w-8 h-8 object-contain" onerror="this.style.display='none'; this.parentElement.innerHTML='🕌'">
                    </div>
                    <div>
                        <h1 class="text-white text-lg font-extrabold leading-tight">SAHABAT SHOLAT</h1>
                        <p class="text-emerald-100 text-[10px]">Digital HPT Muhammadiyah</p>
                    </div>
                </div>
                <nav class="hidden lg:flex items-center space-x-1">
                    <a href="../index.php#sec-home" class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Home</a>
                    <a href="../index.php#sec-sholat" class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Panduan Shalat</a>
                    <a href="../index.php#sec-surah" class="px-4 py-2 rounded-lg text-white text-sm font-semibold hover:bg-white/10 transition">Surah Pendek</a>
                </nav>
                <a href="../index.php#sec-surah" class="text-white p-2 rounded-lg hover:bg-white/10 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="pt-20 pb-8 px-4 max-w-4xl mx-auto">
        
        <!-- Surah Header -->
        <div class="text-center mb-8 bg-white rounded-2xl shadow-lg p-6 border-2 border-emerald-100">
            <div class="inline-block bg-emerald-100 text-emerald-800 text-xs font-bold px-3 py-1 rounded-full mb-3">
                <?= $surah['tempat_turun'] ?> • <?= $surah['jumlah_ayat'] ?> Ayat
            </div>
            <h1 class="text-4xl md:text-5xl arabic-text text-gray-900 mb-3"><?= $surah['nama_arab'] ?></h1>
            <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900"><?= $surah['nama_latin'] ?></h2>
            <p class="text-gray-600 mt-2 text-sm md:text-base"><?= $surah['arti'] ?></p>
        </div>

        <!-- Bismillah (kecuali At-Taubah) -->
        <?php if($surahId != 9): ?>
        <div class="text-center mb-8 bg-white rounded-2xl shadow-lg p-6 border-2 border-emerald-100">
            <p class="text-3xl md:text-4xl arabic-text text-gray-900">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ</p>
        </div>
        <?php endif; ?>

        <!-- Ayat List -->
        <div class="space-y-6">
            <?php foreach($surah['ayat'] as $ayat): ?>
            <div class="bg-white rounded-2xl shadow-lg border-2 border-emerald-100 p-6 md:p-8 hover:shadow-xl transition-all duration-300">
                <div class="flex items-start gap-4 mb-6">
                    <!-- Verse Number Badge -->
                    <div class="flex-shrink-0 w-12 h-12 bg-emerald-500 rounded-full flex items-center justify-center border-4 border-emerald-200 shadow-md">
                        <span class="text-white font-bold text-lg"><?= $ayat['no'] ?></span>
                    </div>
                    
                    <!-- Arabic Text -->
                    <div class="flex-1 text-right">
                        <p class="text-3xl md:text-4xl arabic-text text-gray-900 leading-loose">
                            <?= $ayat['arab'] ?>
                        </p>
                    </div>
                </div>

                <!-- Latin Transliteration -->
                <div class="mb-4 pl-16">
                    <p class="text-lg md:text-xl font-bold text-emerald-700 italic leading-relaxed">
                        <?= $ayat['latin'] ?>
                    </p>
                </div>

                <!-- Translation -->
                <div class="mb-4 pl-16">
                    <p class="text-gray-700 leading-relaxed">
                        <?= $ayat['terjemahan'] ?>
                    </p>
                </div>

                <!-- Audio Player -->
                <div class="pl-16 mt-4">
                    <button onclick="toggleAudio(<?= $ayat['no'] ?>)" class="flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-700 transition">
                        <svg id="play-icon-<?= $ayat['no'] ?>" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <svg id="pause-icon-<?= $ayat['no'] ?>" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span id="audio-text-<?= $ayat['no'] ?>">Dengar Audio</span>
                    </button>
                    <audio id="audio-<?= $ayat['no'] ?>" preload="none">
                        <source src="../assets/audio/surah/<?= $surahId ?>_<?= $ayat['no'] ?>.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Back Button -->
        <div class="mt-8 text-center">
            <a href="../index.php#sec-surah" class="inline-flex items-center gap-2 bg-emerald-600 text-white font-bold px-8 py-3 rounded-xl hover:bg-emerald-700 transition shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Daftar Surah
            </a>
        </div>

        <!-- Footer Info -->
        <footer class="mt-12 pt-6 border-t-2 border-emerald-200 text-center text-xs text-gray-500">
            <p>© 2026 Sahabat Sholat - Digital HPT Muhammadiyah. All Rights Reserved.</p>
            <p class="mt-1">Sumber: Himpunan Putusan Tarjih Muhammadiyah</p>
        </footer>
    </div>

    <script>
        function toggleAudio(ayatNo) {
            const audio = document.getElementById('audio-' + ayatNo);
            const playIcon = document.getElementById('play-icon-' + ayatNo);
            const pauseIcon = document.getElementById('pause-icon-' + ayatNo);
            const audioText = document.getElementById('audio-text-' + ayatNo);

            if (audio.paused) {
                audio.play();
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
                audioText.textContent = 'Memutar...';
                
                audio.onended = function() {
                    playIcon.classList.remove('hidden');
                    pauseIcon.classList.add('hidden');
                    audioText.textContent = 'Dengar Audio';
                };
            } else {
                audio.pause();
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
                audioText.textContent = 'Dengar Audio';
            }
        }
    </script>
</body>
</html>