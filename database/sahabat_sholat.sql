-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
-- Host: localhost:3306
-- Generation Time: Jul 09, 2026 at 05:22 AM
-- Server version: 10.9.2-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahabat_sholat`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayat`
--

CREATE TABLE `ayat` (
  `id` int(11) NOT NULL,
  `id_surah` int(11) NOT NULL,
  `nomor_ayat` int(11) NOT NULL,
  `teks_arab` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `teks_latin` text DEFAULT NULL,
  `terjemahan` text DEFAULT NULL,
  `audio_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ayat`
--

INSERT INTO `ayat` (`id`, `id_surah`, `nomor_ayat`, `teks_arab`, `teks_latin`, `terjemahan`, `audio_url`) VALUES
(1, 3, 1, 'قُلْ هُوَ اللَّهُ أَحَدٌ', 'Qul huwallāhu aḥad', 'Katakanlah (Nabi Muhammad), \"Dialah Allah Yang Maha Esa', 'assets/audio/ikhlas1.mp3'),
(2, 3, 2, 'اللَّهُ الصَّمَدُ', 'Allāhuṣ-amad', 'Allah tempat meminta segala sesuatu.', 'assets/audio/ikhlas2.mp3'),
(3, 3, 3, 'لَمْ يَلِدْ وَلَمْ يُولَدْ', 'Lam yalid wa lam yūlad', 'Dia tidak beranak dan tidak pula diperanakkan', 'assets/audio/ikhlas3.mp3'),
(4, 3, 4, 'وَلَمْ يَكُن لَّهُ كُفُوًا أَحَدٌ', 'Wa lam yakun lahū kufuwan aḥad', 'serta tidak ada sesuatu pun yang setara dengan-Nya.\"', 'assets/audio/ikhlas4.mp3'),
(5, 1, 1, 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ', 'Bismillāhir-ramānir-raḥīm', 'Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.', 'assets/audio/fatihah1.mp3'),
(6, 1, 2, 'الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ', 'Al-ḥamdu lillāhi rabbil-ʿālamīn', 'Segala puji bagi Allah, Tuhan seluruh alam.', 'assets/audio/fatihah2.mp3'),
(7, 1, 3, 'الرَّحْمَنِ الرَّحِيمِ', 'Ar-raḥmānir-raḥīm', 'Yang Maha Pengasih, Maha Penyayang.', 'assets/audio/fatihah3.mp3'),
(8, 1, 4, 'مَالِكِ يَوْمِ الدِّينِ', 'Māliki yaumid-dīn', 'Pemilik hari pembalasan.', 'assets/audio/fatihah4.mp3'),
(9, 1, 5, 'إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ', 'Iyyāka naʿbudu wa iyyāka nastaīn', 'Hanya kepada Engkaulah kami menyembah dan hanya kepada Engkaulah kami mohon pertolongan.', 'assets/audio/fatihah5.mp3'),
(10, 1, 6, 'اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ', 'Ihdinaṣ-irāṭal-mustaqīm', 'Tunjukilah kami jalan yang lurus.', 'assets/audio/fatihah6.mp3'),
(11, 1, 7, 'صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ', 'Ṣirāallażīna anʿamta alaihim ghairil-maghḍūbi ʿalaihim wa laḍ-ḍāllīn', '(yaitu) jalan orang-orang yang telah Engkau beri nikmat kepadanya; bukan (jalan) mereka yang dimurkai, dan bukan (pula jalan) mereka yang sesat.', 'assets/audio/fatihah7.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `bacaan`
--

CREATE TABLE `bacaan` (
  `id` int(11) NOT NULL,
  `id_gerakan` int(11) NOT NULL,
  `urutan` smallint(6) NOT NULL,
  `teks_arab` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teks_latin` text DEFAULT NULL,
  `terjemahan` text DEFAULT NULL,
  `audio_url` varchar(255) DEFAULT NULL,
  `sumber` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bacaan`
--

INSERT INTO `bacaan` (`id`, `id_gerakan`, `urutan`, `teks_arab`, `teks_latin`, `terjemahan`, `audio_url`, `sumber`) VALUES
(1, 2, 1, 'اللهُ أَكْبَرُ', 'Allāhu Akbar', 'Allah Maha Besar', 'assets/audio/takbir.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(2, 3, 1, 'اللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ اللَّهُمَّ نَقِّنِي مِنْ خَطَايَايَ كَمَا يُنَقَّى الثَّوْبُ الْأَبْيَضُ مِنَ الدَّنَسِ اللَّهُمَّ اغْسِلْنِي مِنْ خَطَايَايَ بِالْمَاءِ وَالثَّلْجِ وَالْبَرَدِ', 'Allāhumma bā\'id bainī wa baina khaṭāyāya kamā bā\'adta bainal-masyriqi wal-maghrib. Allāhumma naqqinī min khaṭāyāya kamā yunaqqats-tsaubul-abyaḍu minad-danas. Allāhumma ighsilnī min khaṭāyāya bil-mā\'i wats-tsalji wal-barad', 'Ya Allah, jauhkanlah aku dari dosa-dosaku sebagaimana Engkau jauhkan antara timur dan barat. Ya Allah, bersihkanlah aku dari dosa-dosaku sebagaimana baju putih dibersihkan dari kotoran. Ya Allah, cucilah aku dari dosa-dosaku dengan air, salju, dan embun', 'assets/audio/iftitah.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(3, 6, 1, 'سُبْحَانَ رَبِّيَ الْعَظِيمِ', 'Subḥāna rabbiyal-ʿaẓīm', 'Mahasuci Tuhanku Yang Maha Agung', 'assets/audio/rukuk.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(4, 7, 1, 'سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ', 'Sami\'allāhu liman ḥamidah', 'Allah Maha Mendengar orang yang memuji-Nya', 'assets/audio/itidal1.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(5, 7, 2, 'رَبَّنَا لَكَ الْحَمْدُ حَمْدًا كَثِيرًا طَيِّبًا مُبَارَكًا فِيهِ', 'Rabbanā lakal-ḥamdu ḥamdan katsīran ṭayyiban mubārakan fīh', 'Ya Tuhan kami, segala puji bagi-Mu, pujian yang banyak, baik, dan penuh berkah', 'assets/audio/itidal2.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(6, 8, 1, 'سُبْحَانَ رَبِّيَ الْأَعْلَى', 'Subḥāna rabbiyal-a\'lā', 'Mahasuci Tuhanku Yang Mahatinggi', 'assets/audio/sujud.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(7, 9, 1, 'رَبِّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَارْفَعْنِي وَارْزُقْنِي وَاهْدِنِي وَعَافِنِي وَاعْفُ عَنِّي', 'Rabbighfir lī warḥamnī wajburnī warfa\'nī warzuqnī wahdinī wa \'āfinī wa\'fu \'annī', 'Ya Tuhanku, ampunilah aku, rahmatilah aku, cukupilah aku, angkatlah derajatku, berilah aku rezeki, berilah aku petunjuk, berilah aku kesehatan, dan maafkanlah aku', 'assets/audio/duduk.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(8, 12, 1, 'التَّحِيَّاتُ الْمُبَارَكَاتُ الصَّلَوَاتُ الطَّيِّبَاتُ لِلَّهِ السَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللَّهِ وَبَرَكَاتُهُ السَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللَّهِ الصَّالِحِينَ أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللَّهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا رَسُولُ اللَّهِ', 'At-taḥiyyātul-mubārakātus-ṣalawātus-ṭayyibātu lillāh. Assalāmu \'alaika ayyuhan-nabiyyu wa ramatullāhi wa barakātuh. Assalāmu \'alainā wa \'alā \'ibādillāhis-āliḥīn. Asyhadu an lā ilāha illallāh wa asyhadu anna Muammadan rasūlullāh', 'Segala penghormatan, keberkahan, shalawat, dan kebaikan adalah milik Allah. Semoga keselamatan tercurah kepadamu wahai Nabi, beserta rahmat Allah dan berkah-Nya. Semoga keselamatan tercurah kepada kami dan hamba-hamba Allah yang saleh. Aku bersaksi bahwa tiada Tuhan selain Allah, dan aku bersaksi bahwa Muhammad adalah utusan Allah', 'assets/audio/tasyahud.mp3', 'HPT Muhammadiyah - Kitab Shalat'),
(9, 13, 1, 'السَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللَّهِ', 'Assalāmu \'alaikum wa raḥmatullāh', 'Semoga keselamatan dan rahmat Allah tercurah kepadamu', 'assets/audio/salam.mp3', 'HPT Muhammadiyah - Kitab Shalat');

-- --------------------------------------------------------

--
-- Table structure for table `gerakan`
--

CREATE TABLE `gerakan` (
  `id` int(11) NOT NULL,
  `id_sholat` int(11) NOT NULL,
  `urutan` smallint(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `langkah_pembelajaran` text DEFAULT NULL,
  `gambar_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gerakan`
--

INSERT INTO `gerakan` (`id`, `id_sholat`, `urutan`, `nama`, `deskripsi`, `langkah_pembelajaran`, `gambar_url`) VALUES
(1, 1, 1, 'Niat Sholat Shubuh', 'Niat dalam hati untuk melaksanakan sholat Shubuh', 'Niat dilakukan dengan ikhlas di dalam hati. Tidak perlu dilafalkan secara lisan.', 'assets/img/gerakan/niat.png'),
(2, 1, 2, 'Takbiratul Ihram', 'Mengangkat kedua tangan sejajar telinga sambil mengucapkan Allahu Akbar', 'Angkat kedua tangan sejajar telinga atau bahu sambil mengucapkan \"Allahu Akbar\", kemudian letakkan tangan kanan di atas tangan kiri di dada', 'assets/img/gerakan/takbir.png'),
(3, 1, 3, 'Doa Iftitah', 'Membaca doa pembuka setelah takbiratul ihram', 'Baca doa iftitah dengan khusyuk setelah meletakkan tangan di dada', 'assets/img/gerakan/iftitah.png'),
(4, 1, 4, 'Membaca Al-Fatihah', 'Membaca surah Al-Fatihah pada setiap rakaat', 'Baca Al-Fatihah dengan tartil dan tajwid yang benar', 'assets/img/gerakan/fatihah.png'),
(5, 1, 5, 'Membaca Surah Pendek', 'Membaca surah pendek setelah Al-Fatihah pada rakaat pertama dan kedua', 'Pilih surah pendek yang sudah dihafal, seperti Al-Ikhlas, Al-Falaq, atau An-Nas', 'assets/img/gerakan/surah.png'),
(6, 1, 6, 'Rukuk', 'Membungkuk dengan thumaininah, membaca tasbih rukuk', 'Bungkukkan badan hingga punggung rata, tangan memegang lutut, baca \"Subhana rabbiyal adzim\" 3x', 'assets/img/gerakan/rukuk.png'),
(7, 1, 7, 'I\'tidal', 'Bangkit dari rukuk sambil membaca doa i\'tidal', 'Bangkit berdiri tegak sambil membaca \"Sami\'allahu liman hamidah\", lalu baca \"Rabbana lakal hamd\"', 'assets/img/gerakan/itidal.png'),
(8, 1, 8, 'Sujud Pertama', 'Sujud dengan thumaininah, membaca tasbih sujud', 'Letakkan 7 anggota sujud di lantai: dahi+hidung, 2 telapak tangan, 2 lutut, 2 ujung kaki. Baca \"Subhana rabbiyal a\'la\" 3x', 'assets/img/gerakan/sujud1.png'),
(9, 1, 9, 'Duduk Antara Dua Sujud', 'Duduk iftirasy sambil membaca doa', 'Duduk di atas kaki kiri, telapak kaki kanan tegak. Baca \"Rabbighfirli warhamni wajburni warfa\'ni warzuqni wahdini wa\'afini wa\'fu \'anni\"', 'assets/img/gerakan/duduk.png'),
(10, 1, 10, 'Sujud Kedua', 'Sujud kedua dengan thumaininah', 'Sujud kembali seperti sujud pertama', 'assets/img/gerakan/sujud2.png'),
(11, 1, 11, 'Berdiri Rakaat Kedua', 'Bangkit berdiri untuk rakaat kedua', 'Bangkit berdiri dengan tangan bertumpu pada lutut, baca Al-Fatihah dan surah pendek kembali', 'assets/img/gerakan/berdiri.png'),
(12, 1, 12, 'Tasyahud Akhir', 'Duduk tawarruk membaca tasyahud akhir dan shalawat', 'Duduk tawarruk: kaki kiri keluar dari bawah kaki kanan, baca tasyahud akhir dan shalawat Ibrahim', 'assets/img/gerakan/tasyahud.png'),
(13, 1, 13, 'Salam', 'Menoleh ke kanan dan kiri mengucapkan salam', 'Menoleh ke kanan ucapkan \"Assalamu\'alaikum warahmatullah\", lalu ke kiri dengan ucapan yang sama', 'assets/img/gerakan/salam.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` enum('dewasa','anak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'dewasa'),
(2, 'anak');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id` int(11) NOT NULL,
  `nama_kelompok` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL,
  `dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `nama_kelompok`, `prodi`, `mata_kuliah`, `dosen`) VALUES
(1, 'Sahabat Sholat', 'Manajemen Bisnis Syariah', 'Pengembangan Aplikasi Web', 'Dedy Susanto, S.Pd.I., M.M.');

-- --------------------------------------------------------

--
-- Table structure for table `sholat`
--

CREATE TABLE `sholat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` enum('wajib','sunnah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rakaat` int(11) NOT NULL,
  `icon` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sholat`
--

INSERT INTO `sholat` (`id`, `nama`, `jenis`, `rakaat`, `icon`, `bg_color`, `keterangan`) VALUES
(1, 'Subuh', 'wajib', 2, '🌅', 'amber', NULL),
(2, 'Dzuhur', 'wajib', 4, '☀️', 'orange', NULL),
(3, 'Ashar', 'wajib', 4, '🌤️', 'yellow', NULL),
(4, 'Maghrib', 'wajib', 3, '🌆', 'indigo', NULL),
(5, 'Isya', 'wajib', 4, '🌌', 'purple', NULL),
(6, 'Tahajud', 'sunnah', 2, '🌙', 'indigo', 'Sholat malam'),
(7, 'Dhuha', 'sunnah', 2, '🌞', 'amber', 'Sholat pagi'),
(8, 'Hajat', 'sunnah', 2, '🤲', 'blue', 'Memohon hajat'),
(9, 'Istikharah', 'sunnah', 2, '💭', 'purple', 'Memohon petunjuk'),
(10, 'Taubat', 'sunnah', 2, '🙏', 'emerald', 'Memohon ampunan');

-- --------------------------------------------------------

--
-- Table structure for table `surah`
--

CREATE TABLE `surah` (
  `id` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `nama_latin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_arab` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arti` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_ayat` int(11) NOT NULL,
  `tempat_turun` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surah`
--

INSERT INTO `surah` (`id`, `nomor`, `nama_latin`, `nama_arab`, `arti`, `jumlah_ayat`, `tempat_turun`) VALUES
(1, 1, 'Al-Fatihah', 'الفاتحة', 'Pembukaan', 7, 'Mekah'),
(2, 108, 'Al-Kautsar', 'الكوثر', 'Nikmat yang Berlimpah', 3, 'Mekah'),
(3, 112, 'Al-Ikhlas', 'الإخلاص', 'Memurnikan Keikhlasan', 4, 'Mekah'),
(4, 113, 'Al-Falaq', 'الفلق', 'Waktu Subuh', 5, 'Mekah'),
(5, 114, 'An-Nas', 'الناس', 'Manusia', 6, 'Mekah'),
(6, 103, 'Al-\'Ashr', 'العصر', 'Demi Masa', 3, 'Mekah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayat`
--
ALTER TABLE `ayat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_surah` (`id_surah`);

--
-- Indexes for table `bacaan`
--
ALTER TABLE `bacaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gerakan` (`id_gerakan`);

--
-- Indexes for table `gerakan`
--
ALTER TABLE `gerakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sholat` (`id_sholat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sholat`
--
ALTER TABLE `sholat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surah`
--
ALTER TABLE `surah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayat`
--
ALTER TABLE `ayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bacaan`
--
ALTER TABLE `bacaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gerakan`
--
ALTER TABLE `gerakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sholat`
--
ALTER TABLE `sholat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surah`
--
ALTER TABLE `surah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ayat`
--
ALTER TABLE `ayat`
  ADD CONSTRAINT `ayat_ibfk_1` FOREIGN KEY (`id_surah`) REFERENCES `surah` (`id`);

--
-- Constraints for table `bacaan`
--
ALTER TABLE `bacaan`
  ADD CONSTRAINT `bacaan_ibfk_1` FOREIGN KEY (`id_gerakan`) REFERENCES `gerakan` (`id`);

--
-- Constraints for table `gerakan`
--
ALTER TABLE `gerakan`
  ADD CONSTRAINT `gerakan_ibfk_1` FOREIGN KEY (`id_sholat`) REFERENCES `sholat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;