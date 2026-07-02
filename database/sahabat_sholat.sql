-- Buat Database
CREATE DATABASE IF NOT EXISTS sahabat_sholat;
USE sahabat_sholat;

-- Tabel Kelompok (F-08)
CREATE TABLE kelompok (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_kelompok VARCHAR(100) NOT NULL,
    prodi VARCHAR(100) NOT NULL,
    mata_kuliah VARCHAR(100) NOT NULL,
    dosen VARCHAR(100) NOT NULL
);

INSERT INTO kelompok VALUES (1, 'Sahabat Sholat', 'Manajemen Bisnis Syariah', 'Pengembangan Aplikasi Web', 'Dedy Susanto, S.Pd.I., M.M.');

-- Tabel Kategori (F-07)
CREATE TABLE kategori (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama ENUM('dewasa', 'anak') NOT NULL
);

INSERT INTO kategori VALUES (1, 'dewasa'), (2, 'anak');

-- Tabel Sholat (Wajib & Sunnah)
CREATE TABLE sholat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    jenis ENUM('wajib', 'sunnah') NOT NULL,
    rakaat INT NOT NULL,
    icon VARCHAR(10),
    bg_color VARCHAR(20)
);

INSERT INTO sholat VALUES 
(1, 'Subuh', 'wajib', 2, '🌅', 'amber'),
(2, 'Dzuhur', 'wajib', 4, '☀️', 'orange'),
(3, 'Ashar', 'wajib', 4, '🌤️', 'yellow'),
(4, 'Maghrib', 'wajib', 3, '🌆', 'indigo'),
(5, 'Isya', 'wajib', 4, '🌌', 'purple'),
(6, 'Tahajud', 'sunnah', 2, '🌙', 'indigo'),
(7, 'Dhuha', 'sunnah', 2, '', 'amber'),
(8, 'Hajat', 'sunnah', 2, '🤲', 'blue'),
(9, 'Istikharah', 'sunnah', 2, '💭', 'purple'),
(10, 'Taubat', 'sunnah', 2, '🙏', 'emerald');

-- Tabel Gerakan Sholat (F-01)
CREATE TABLE gerakan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_sholat INT NOT NULL,
    urutan SMALLINT NOT NULL,
    nama VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    langkah_pembelajaran TEXT,
    gambar_url VARCHAR(255),
    FOREIGN KEY (id_sholat) REFERENCES sholat(id)
);

-- 13 Gerakan untuk Sholat Subuh (contoh)
INSERT INTO gerakan (id_sholat, urutan, nama, deskripsi, langkah_pembelajaran, gambar_url) VALUES
(1, 1, 'Niat Sholat Shubuh', 'Niat dalam hati untuk melaksanakan sholat Shubuh', 'Niat dilakukan dengan ikhlas di dalam hati. Tidak perlu dilafalkan secara lisan.', 'assets/img/gerakan/niat.png'),
(1, 2, 'Takbiratul Ihram', 'Mengangkat kedua tangan sejajar telinga sambil mengucapkan Allahu Akbar', 'Angkat kedua tangan sejajar telinga atau bahu sambil mengucapkan "Allahu Akbar", kemudian letakkan tangan kanan di atas tangan kiri di dada', 'assets/img/gerakan/takbir.png'),
(1, 3, 'Doa Iftitah', 'Membaca doa pembuka setelah takbiratul ihram', 'Baca doa iftitah dengan khusyuk setelah meletakkan tangan di dada', 'assets/img/gerakan/iftitah.png'),
(1, 4, 'Membaca Al-Fatihah', 'Membaca surah Al-Fatihah pada setiap rakaat', 'Baca Al-Fatihah dengan tartil dan tajwid yang benar', 'assets/img/gerakan/fatihah.png'),
(1, 5, 'Membaca Surah Pendek', 'Membaca surah pendek setelah Al-Fatihah pada rakaat pertama dan kedua', 'Pilih surah pendek yang sudah dihafal, seperti Al-Ikhlas, Al-Falaq, atau An-Nas', 'assets/img/gerakan/surah.png'),
(1, 6, 'Rukuk', 'Membungkuk dengan thumaininah, membaca tasbih rukuk', 'Bungkukkan badan hingga punggung rata, tangan memegang lutut, baca "Subhana rabbiyal adzim" 3x', 'assets/img/gerakan/rukuk.png'),
(1, 7, 'I\'tidal', 'Bangkit dari rukuk sambil membaca doa i\'tidal', 'Bangkit berdiri tegak sambil membaca "Sami\'allahu liman hamidah", lalu baca "Rabbana lakal hamd"', 'assets/img/gerakan/itidal.png'),
(1, 8, 'Sujud Pertama', 'Sujud dengan thumaininah, membaca tasbih sujud', 'Letakkan 7 anggota sujud di lantai: dahi+hidung, 2 telapak tangan, 2 lutut, 2 ujung kaki. Baca "Subhana rabbiyal a\'la" 3x', 'assets/img/gerakan/sujud1.png'),
(1, 9, 'Duduk Antara Dua Sujud', 'Duduk iftirasy sambil membaca doa', 'Duduk di atas kaki kiri, telapak kaki kanan tegak. Baca "Rabbighfirli warhamni wajburni warfa\'ni warzuqni wahdini wa\'afini wa\'fu \'anni"', 'assets/img/gerakan/duduk.png'),
(1, 10, 'Sujud Kedua', 'Sujud kedua dengan thumaininah', 'Sujud kembali seperti sujud pertama', 'assets/img/gerakan/sujud2.png'),
(1, 11, 'Berdiri Rakaat Kedua', 'Bangkit berdiri untuk rakaat kedua', 'Bangkit berdiri dengan tangan bertumpu pada lutut, baca Al-Fatihah dan surah pendek kembali', 'assets/img/gerakan/berdiri.png'),
(1, 12, 'Tasyahud Akhir', 'Duduk tawarruk membaca tasyahud akhir dan shalawat', 'Duduk tawarruk: kaki kiri keluar dari bawah kaki kanan, baca tasyahud akhir dan shalawat Ibrahim', 'assets/img/gerakan/tasyahud.png'),
(1, 13, 'Salam', 'Menoleh ke kanan dan kiri mengucapkan salam', 'Menoleh ke kanan ucapkan "Assalamu\'alaikum warahmatullah", lalu ke kiri dengan ucapan yang sama', 'assets/img/gerakan/salam.png');

-- Tabel Bacaan (F-02, F-03)
CREATE TABLE bacaan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_gerakan INT NOT NULL,
    urutan SMALLINT NOT NULL,
    teks_arab TEXT,
    teks_latin TEXT,
    terjemahan TEXT,
    audio_url VARCHAR(255),
    sumber VARCHAR(150),
    FOREIGN KEY (id_gerakan) REFERENCES gerakan(id)
);

-- Bacaan untuk setiap gerakan
INSERT INTO bacaan (id_gerakan, urutan, teks_arab, teks_latin, terjemahan, audio_url, sumber) VALUES
(2, 1, 'اللهُ أَكْبَرُ', 'Allāhu Akbar', 'Allah Maha Besar', 'assets/audio/takbir.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(3, 1, 'اللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ، اللَّهُمَّ نَقِّنِي مِنْ خَطَايَايَ كَمَا يُنَقَّى الثَّوْبُ الْأَبْيَضُ مِنَ الدَّنَسِ، اللَّهُمَّ اغْسِلْنِي مِنْ خَطَايَايَ بِالْمَاءِ وَالثَّلْجِ وَالْبَرَدِ', 'Allāhumma bā\'id bainī wa baina khaṭāyāya kamā bā\'adta bainal-masyriqi wal-maghrib. Allāhumma naqqinī min khaṭāyāya kamā yunaqqats-tsaubul-abyaḍu minad-danas. Allāhumma ighsilnī min khaṭāyāya bil-mā\'i wats-tsalji wal-barad', 'Ya Allah, jauhkanlah aku dari dosa-dosaku sebagaimana Engkau jauhkan antara timur dan barat. Ya Allah, bersihkanlah aku dari dosa-dosaku sebagaimana baju putih dibersihkan dari kotoran. Ya Allah, cucilah aku dari dosa-dosaku dengan air, salju, dan embun', 'assets/audio/iftitah.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(6, 1, 'سُبْحَانَ رَبِّيَ الْعَظِيمِ', 'Subḥāna rabbiyal-ʿaẓīm', 'Mahasuci Tuhanku Yang Maha Agung', 'assets/audio/rukuk.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(7, 1, 'سَمِعَ اللهُ لِمَنْ حَمِدَهُ', 'Sami\'allāhu liman ḥamidah', 'Allah Maha Mendengar orang yang memuji-Nya', 'assets/audio/itidal1.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(7, 2, 'رَبَّنَا لَكَ الْحَمْدُ حَمْدًا كَثِيرًا طَيِّبًا مُبَارَكًا فِيهِ', 'Rabbanā lakal-ḥamdu ḥamdan katsīran ayyiban mubārakan fīh', 'Ya Tuhan kami, segala puji bagi-Mu, pujian yang banyak, baik, dan penuh berkah', 'assets/audio/itidal2.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(8, 1, 'سُبْحَانَ رَبِّيَ الْأَعْلَى', 'Subḥāna rabbiyal-aʿlā', 'Mahasuci Tuhanku Yang Mahatinggi', 'assets/audio/sujud.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(9, 1, 'رَبِّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَارْفَعْنِي وَارْزُقْنِي وَاهْدِنِي وَعَافِنِي وَاعْفُ عَنِّي', 'Rabbighfir lī warḥamnī wajburnī warfanī warzuqnī wahdinī wa ʿāfinī wafu ʿannī', 'Ya Tuhanku, ampunilah aku, rahmatilah aku, cukupilah aku, angkatlah derajatku, berilah aku rezeki, berilah aku petunjuk, berilah aku kesehatan, dan maafkanlah aku', 'assets/audio/duduk.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(12, 1, 'التَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلَّهِ، السَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ، السَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللهِ الصَّالِحِينَ، أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا رَسُولُ اللهِ', 'At-taḥiyyātul-mubārakātus-ṣalawātus-ṭayyibātu lillāh. Assalāmu ʿalaika ayyuhan-nabiyyu wa raḥmatullāhi wa barakātuh. Assalāmu ʿalainā wa ʿalā ʿibādillāhis-ṣāliḥīn. Asyhadu an lā ilāha illallāh wa asyhadu anna Muḥammadan rasūlullāh', 'Segala penghormatan, keberkahan, shalawat, dan kebaikan adalah milik Allah. Semoga keselamatan tercurah kepadamu wahai Nabi, beserta rahmat Allah dan berkah-Nya. Semoga keselamatan tercurah kepada kami dan hamba-hamba Allah yang saleh. Aku bersaksi bahwa tiada Tuhan selain Allah, dan aku bersaksi bahwa Muhammad adalah utusan Allah', 'assets/audio/tasyahud.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(13, 1, 'السَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ', 'Assalāmu ʿalaikum wa raḥmatullāh', 'Semoga keselamatan dan rahmat Allah tercurah kepadamu', 'assets/audio/salam.mp3', 'HPT Muhammadiyah - Kitab Shalat');

-- Tabel Surah (untuk halaman detail surah)
CREATE TABLE surah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomor INT NOT NULL,
    nama_latin VARCHAR(50) NOT NULL,
    nama_arab VARCHAR(100) NOT NULL,
    arti VARCHAR(100),
    jumlah_ayat INT NOT NULL,
    tempat_turun VARCHAR(50)
);

INSERT INTO surah VALUES 
(1, 1, 'Al-Fatihah', 'الفاتحة', 'Pembukaan', 7, 'Mekah'),
(2, 108, 'Al-Kautsar', 'الكوثر', 'Nikmat yang Berlimpah', 3, 'Mekah'),
(3, 112, 'Al-Ikhlas', 'الإخلاص', 'Memurnikan Keikhlasan', 4, 'Mekah'),
(4, 113, 'Al-Falaq', 'الفلق', 'Waktu Subuh', 5, 'Mekah'),
(5, 114, 'An-Nas', 'الناس', 'Manusia', 6, 'Mekah'),
(6, 103, 'Al-\'Ashr', 'العصر', 'Demi Masa', 3, 'Mekah');

-- Tabel Ayat Surah
CREATE TABLE ayat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_surah INT NOT NULL,
    nomor_ayat INT NOT NULL,
    teks_arab TEXT NOT NULL,
    teks_latin TEXT,
    terjemahan TEXT,
    audio_url VARCHAR(255),
    FOREIGN KEY (id_surah) REFERENCES surah(id)
);

-- Ayat Surah Al-Ikhlas (contoh lengkap)
INSERT INTO ayat (id_surah, nomor_ayat, teks_arab, teks_latin, terjemahan, audio_url) VALUES
(3, 1, 'قُلْ هُوَ اللَّهُ أَحَدٌ', 'Qul huwallāhu aḥad', 'Katakanlah (Nabi Muhammad), "Dialah Allah Yang Maha Esa', 'assets/audio/ikhlas1.mp3'),
(3, 2, 'اللَّهُ الصَّمَدُ', 'Allāhus-ṣamad', 'Allah tempat meminta segala sesuatu.', 'assets/audio/ikhlas2.mp3'),
(3, 3, 'لَمْ يَلِدْ وَلَمْ يُولَدْ', 'Lam yalid wa lam yūlad', 'Dia tidak beranak dan tidak pula diperanakkan', 'assets/audio/ikhlas3.mp3'),
(3, 4, 'وَلَمْ يَكُنْ لَهُ كُفُوًا أَحَدٌ', 'Wa lam yakun lahū kufuwan aad', 'serta tidak ada sesuatu pun yang setara dengan-Nya."', 'assets/audio/ikhlas4.mp3');

-- Ayat Surah Al-Fatihah
INSERT INTO ayat (id_surah, nomor_ayat, teks_arab, teks_latin, terjemahan, audio_url) VALUES
(1, 1, 'بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ', 'Bismillāhir-raḥmānir-raḥīm', 'Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.', 'assets/audio/fatihah1.mp3'),
(1, 2, 'اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَ', 'Al-ḥamdu lillāhi rabbil-ālamīn', 'Segala puji bagi Allah, Tuhan seluruh alam.', 'assets/audio/fatihah2.mp3'),
(1, 3, 'الرَّحْمٰنِ الرَّحِيْمِ', 'Ar-raḥmānir-raḥīm', 'Yang Maha Pengasih, Maha Penyayang.', 'assets/audio/fatihah3.mp3'),
(1, 4, 'مٰلِكِ يَوْمِ الدِّيْنِ', 'Māliki yaumid-dīn', 'Pemilik hari pembalasan.', 'assets/audio/fatihah4.mp3'),
(1, 5, 'اِيَّاكَ نَعْبُدُ وَاِيَّاكَ نَسْتَعِيْنُ', 'Iyyāka naʿbudu wa iyyāka nastaʿīn', 'Hanya kepada Engkaulah kami menyembah dan hanya kepada Engkaulah kami mohon pertolongan.', 'assets/audio/fatihah5.mp3'),
(1, 6, 'اِهْدِنَا الصِّرَاطَ الْمُسْتَقِيْمَ', 'Ihdinaṣ-ṣirāṭal-mustaqīm', 'Tunjukilah kami jalan yang lurus.', 'assets/audio/fatihah6.mp3'),
(1, 7, 'صِرَاطَ الَّذِيْنَ اَنْعَمْتَ عَلَيْهِمْ ەۙ غَيْرِ الْمَغْضُوْبِ عَلَيْهِمْ وَلَا الضَّآلِّيْنَ', 'Ṣirāṭallażīna anʿamta ʿalaihim ghairil-maghḍūbi ʿalaihim wa laḍ-ḍāllīn', '(yaitu) jalan orang-orang yang telah Engkau beri nikmat kepadanya; bukan (jalan) mereka yang dimurkai, dan bukan (pula jalan) mereka yang sesat.', 'assets/audio/fatihah7.mp3');