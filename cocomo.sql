-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 12:12 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cocomo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_biaya`
--

CREATE TABLE `cocomo_biaya` (
  `id_biaya` int(5) NOT NULL,
  `id_project` int(5) NOT NULL,
  `bbb` int(15) NOT NULL,
  `btk` int(15) NOT NULL,
  `bop` int(15) NOT NULL,
  `laba` int(15) NOT NULL,
  `biaya` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_fp`
--

CREATE TABLE `cocomo_fp` (
  `id_fp` int(5) NOT NULL,
  `fp` varchar(255) NOT NULL,
  `tipe` varchar(3) NOT NULL,
  `bahasa` varchar(10) DEFAULT NULL,
  `DET` int(5) DEFAULT NULL,
  `RET` int(5) DEFAULT NULL,
  `FTR` int(5) DEFAULT NULL,
  `id_project` int(5) NOT NULL,
  `weight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_gsc`
--

CREATE TABLE `cocomo_gsc` (
  `id_gsc` int(5) NOT NULL,
  `gsc` text,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_gsc`
--

INSERT INTO `cocomo_gsc` (`id_gsc`, `gsc`, `deskripsi`) VALUES
(1, 'Komunikasi Data', 'Informasi data dan kontrol yang digunakan dalam aplikasi dikirim melalui fasilitas komunikasi. Terminal yang dikoneksikan secara lokal ke unit kontrol dianggap menggunakan fasilitas komunikasi. Protokol merupakan kumpulan perjanjian yang mengijinkan perpindahan atau pertukaran informasi antara dua sistem atau perangkat. Semua hubungan data komunikasi membutuhkan jenis protokol. '),
(2, 'Proses Data Terdistribusi', 'Data yang terdistribusi atau fungsional pemprosesan merupakan karakteristik dari aplikasi di dalam batasan aplikasi '),
(3, 'Performa', 'Menyasar performa aplikasi, dinyatakan atau disetujui oleh pengguna, termasuk didalamnya respon dan keluaran sistem, pengaruh desain, pengembangan, instalasi, dan dukungan dalam aplikasi '),
(4, 'Konfigurasi Penggunaan Berat', 'Konfigurasi operasional penggunaan secara berat, membutuhkan pertimbangan desain khusus, merupakan karakteristik dari aplikasi. Sebagai contoh: pengguna ingin menjalankan aplikasi dalam perlengkapan yang telah ada atau telah dipasang yang akan digunakan secara berat '),
(5, 'Nilai Transaksi', 'Nilai transaksi yang tinggi dan dapat mempengaruhi rancangan, pengembangan, instalasi dan bantuan dalam aplikasi'),
(6, 'Masukan Data Online', 'Masukan data secara online dan kontrol fungsi yang disediakan dalam aplikasi '),
(7, 'Efisiensi Pengguna', 'Fungsional Online yang menyediakan penekanan pada desain untuk efisiensi pengguna. Desain meliputi:<br>•Bantuan navigasi<br>•Menu<br>•Bantuan online dan dokumen<br>•Pergerakan kursor diautomasi<br>•Scrolling<br>•Cetak secara remote (melalui transaksi online) <br>•Kunci fungsional sebelum penugasan<br>•Proses batch diatambahkan melalui transaksi online<br>•Seleksi cursor dari tampilan data<br>•Penggunaan berat dari video berulang, penyorotan, penggaris bawah warna dan indikator lain<br>•Cetakan dokumentasi pengguna dari transaksi online<br>•Interface mouse<br>•Pop-up windows<br>•Berapa tampilan dibutuhkan untuk menyelesaikan fungsional bisnis<br>•Dukungan dua Bahasa (mendukung dua bahasa; dihitung sebagai empat item)<br>•Dukungan beberapa bahasa (mendukung lebih dari dua bahasa; dihitung sebagai enam item)<br>	'),
(8, 'Pembaruan Online', 'Aplikasi menyediakan pembaruan secara online untuk Internal Logical Files (ILF) yang merupakan tabel yang diatur oleh sistem'),
(9, 'Pemprosesan Kompleks', 'Pemprosesan kompleks merupakan karakteristik dari aplikasi. Komponen-komponennya adalah sebagai berikut<br>•Kontrol sensitif (contoh, pemrosesan pemeriksaan spesial) dan/atau aplikasi mengkhususkan pemprosesan keamanan<br>•Proses logika yang luas<br>•Proses matematis yang luas<br>•Banyak pengecualian proses yang menghasilkan tidak lengkapnya transaksi yang harus diproses lagi, sebagai contoh, transaksi ATM yang tidak lengkap menakibatkan gangguan tele-processing, kehilangan nilai data, dan kegagalan perubahan<br>•Pemprosesan yang komplex untuk menangani beberapa kemungkinan masukan/keluaran, sebagai contoh, multimedia, atau kebebasan perangkat'),
(10, 'Penggunaan Ulang', 'Aplikasi dan kode dalam aplikasi telah didesain secara khusus, dikembangkan, dan didukung untuk dapat digunakan dalam aplikasi lain '),
(11, 'Kemudahan Instalasi', 'Konversi dan kemudahan instalasi merupakan karakteristik aplikasi. Rencana konversi dan instalasi dan/atau alat konversi disediakan dan diuji selama fase test sistem '),
(12, 'Kemudahan Operasional', 'Kemudahan operasional merupakan karakteristik aplikasi. Proses mulai yang efektif, back-up, dan prosedur recovery disediakan dan dites selama fase tes sistem. Aplikasi meminimalisir kebutuhan aktifitas manual '),
(13, 'Beberapa Sites', 'Aplikasi dirancang secara khusus, dikembangkan dan didukung untuk dapat digunakan di beberapa tempat untuk beberapa organisasi '),
(14, 'Memfasilitasi Perubahan', 'Aplikasi didesain secara khusus, dikembangkan dan didukung untuk memfasilitasi perubahan. Berikut karakteristik yang dapat diterapkan untuk aplikasi::<br>•Query fleksibel dan laporan fasilitas disediakan yang dapat mengurusi permintaan yang sederhana, sebagai contoh, kombinasi logika and/or diaplikasikan untuk satu ILF (dihitung sebagai satu item) <br>•Query fleksibel dan laporan fasilitas disediakan yang dapat mengurusi permintaan dengan kopleksitas rata-rata, sebagai contoh, kombinasi logika and/or diaplikasikan untuk lebih dari satu ILF (dihitung sebagai dua item) <br>•Query fleksibel dan laporan fasilitas disediakan yang dapat mengurusi permintaan komples, sebagai contoh, kombinasi logika and/or dalam satu atau lebih ILF (dihitung sebagai 3 item)•Data kontrol bisnis dijaga dalam tabel yang dikelola oleh pengguna dengan proses interaktif online, tetapi perubahan hanya memberikan efek pada hari bisnis selanjutnya<br>•Data kontrol bisnis dijaga dalam tabel yang diurus oleh pengguna dengan proses interaktif online dan perubahan berefek cepat (dihitung sebagai dua item)');

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_gscpoint`
--

CREATE TABLE `cocomo_gscpoint` (
  `id_gscpoint` int(5) NOT NULL,
  `id_gsc` int(5) DEFAULT NULL,
  `point` text NOT NULL,
  `value` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_gscpoint`
--

INSERT INTO `cocomo_gscpoint` (`id_gscpoint`, `id_gsc`, `point`, `value`) VALUES
(1, 1, 'Aplikasi murni proses batch atau perangkat standalone ', 0),
(2, 1, 'Aplikasi merupakan batch tapi memiliki masukan data secara remote atau print secara remote', 1),
(3, 1, 'Aplikasi merupakan batch tapi memiliki masukan data secara remote dan print secara remote ', 2),
(4, 1, 'Aplikasi termasuk pengumpulan data secara online atau antarmuka TP (teleprocessing) ke proses batch atau sistem query ', 3),
(5, 1, 'Aplikasi lebih dari sekedar tampilan antarmuka, tapi mendukung hanya satu jenis protokol komunikasi', 4),
(6, 1, 'Aplikasi lebih dari sekedar tampilan antarmuka, tapi mendukung lebih dari satu jenis protokol komunikasi', 5),
(7, 2, 'Aplikasi tidak menyediakan pertukaran data atau fungsi pemprosesan antar komponen dalam sistem', 0),
(8, 2, 'Aplikasi menyiapkan data untuk pemprosesan pada komponen lain dari sistem seperti spreadsheet PC atau Database PC', 1),
(9, 2, 'Data dipersiapkan untuk dikirm, kemudian data dikirim dan diproses di komponen lain sistem (bukan untuk pemprosesan pengguna)', 2),
(10, 2, 'Pemprosesan terdistribusi dan pertukaran data secara online dan hanya satu arah', 3),
(11, 2, 'Pemprosesan terdistribusi dan pertukaran data secara online dan dua satu arah', 4),
(12, 2, 'Fungsi pemprosesan dilakukan secara dinamis dalam komponen paling sesuai dari sistem', 5),
(13, 3, 'Tidak ada kebutuhan performa secara khusus yang dinyatakan pengguna', 0),
(14, 3, 'Performa dan rancangan kebutuhan dinyatakan dan diulas tapi tidak ada tindakan spesial yang diperlukan', 1),
(15, 3, 'Waktu respon atau keluaran sistem dibutuhkan saat jam puncak. Tidak ada rancangan spesial untuk penggunaan CPU yang dibutuhkan. Tenggat pemprosesan adalah pada hari bisnis selanjutnya', 2),
(16, 3, 'Waktu respon atau keluaran sistem dibutuhkan saat semua jam bisnis. Tidak ada rancangan spesial untuk penggunaan CPU yang dibutuhkan. Pemprosesan tenggat pemprosesan dengan antarmuka sistem diperlukan segera', 3),
(17, 3, 'Sebagai tambahan, kebutuhan performa pengguna dinyatakan secara cukup ketat untuk membutuhkan tugas performa analisi dalam fase desain', 4),
(18, 3, 'Sebagai tambahan, perangkat analisis performa digunakan dalam perancangan, pengembangan, dan/atau implementasi untuk memenuhi kebutuhan performa yang dinyatakan oleh pengguna', 5),
(19, 4, 'Tidak ada batasan operasional secara lengkap atau tegas yang diikutkan ', 0),
(20, 4, 'Batasan operasional ada, tapi kurang ketat dibanding aplikasi pada umumnya. Tidak ada usaha khusus yang dibutuhkan untuk memenuhi batasan tersebut', 1),
(21, 4, 'Beberapa keamanan atau pertimbangan waktu dimasukan', 2),
(22, 4, 'Kebutuhan processor secara khusus dibutuhkan untuk bagian spesifik dari aplikasi yang dimasukan', 3),
(23, 4, 'Batasan operasi yang dinyatakan memerlukan batasan spesial dalam aplikasi dalam processor pusat atau processor tersemat', 4),
(24, 4, 'Sebagai tambahan, ada batasan khusus dalam aplikasi dalam komponen sistem terdistribusi', 5),
(25, 5, 'Tidak ada transaksi puncak yang diantisipasi', 0),
(26, 5, 'Periode transaksi puncak diantisipasi (bulanan, musiman)', 1),
(27, 5, 'Periode transaksi puncah mingguan diantisipasi', 2),
(28, 5, 'Periode transaksi puncah harian diantisipasi ', 3),
(29, 5, 'Nilai transaksi tinggi dinyatakan oleh pengguna dalam kebutuhan aplikasi atau level perjanjian layanan cukup tinggi untuk membutuhkan tugas analisa performa pada tahap desain', 4),
(30, 5, 'Nilai transaksi tinggi dinyatakan oleh pengguna dalam kebutuhan aplikasi atau level perjanjian layanan cukup tinggi untuk membutuhkan tugas analisa performa dan sebagai tambahan membutuhkan penggunaan dari perangkat analisa performa dalam perancangan, pengembangan, dan/atau tahap pemasangan', 5),
(31, 6, 'Semua transaksi diproses dalam mode batch', 0),
(32, 6, '1% sampai 7% dari transaksi merupakan masukan data secara interaktif', 1),
(33, 6, '8% sampai 15% dari transaksi merupakan masukan data secara interaktif', 2),
(34, 6, '16% sampai 23% dari transaksi merupakan masukan data secara interaktif', 3),
(35, 6, '24% sampai 30% dari transaksi merupakan masukan data secara interaktif', 4),
(36, 6, 'Lebih dari 30% transaksi merupakan masukan data secara interaktif', 5),
(37, 7, 'Tidak satupun poin diatas', 0),
(38, 7, '1 sampai 3 poin diatas', 1),
(39, 7, '4 sampai 5 poin diatas', 2),
(40, 7, '6 atau lebih dari poin diatas, tetapi tidak ada kebutuhan user secara spesifik terkait dengan efisiensi', 3),
(41, 7, '6 atau lebih dari poin diatas, dan kebutuhan untuk pengguna dinyatakan secara kuat untuk membutuhkan tugas perancangan untuk faktor pengguna yang diikutkan (sebagai contoh, mengurangi penggunaan tombol, memaksimalkan pengganti kelalaian, penggunaan template)', 4),
(42, 7, '6 atau lebih dari poin diatas, dan kebutuhan untuk efisiensi pengguna dinyatakan cukup kuat untuk membutuhkan penggunaan perangkat khusus dan proses-proses untuk mendemokan pencapaian objektif', 5),
(43, 8, 'Tidak ada', 0),
(44, 8, 'Pembaruan online dari satu hingga tiga file kontrol diikutkan. Kapasitas pembaruan rendah dan proses recovery mudah', 1),
(45, 8, 'Pembaruan online dari empat atau lebih file kontrol diikutkan. Kapasitas pembaruan rendah dan proses recovery mudah', 2),
(46, 8, 'Pembaruan online dari ILF utama diikutkan', 3),
(47, 8, 'Sebagai tambahan, perlindungan terhadap kehilangan data sangat penting dan telah dirancang secara khusus dan diprogram dalam sistem', 4),
(48, 8, 'Sebagai tambahan, besar kapasitas mengakibatkan pertimbangan biaya ke proses recovery. Prosedur recovery diautomasi setinggi mungkin dengan campur tangan operator sedikit mungkin', 5),
(49, 9, 'Tidak satupun dari poin diatas', 0),
(50, 9, 'Satu poin diatas', 1),
(51, 9, 'Dua poin diatas', 2),
(52, 9, 'Tiga poin diatas', 3),
(53, 9, 'Empat poin diatas', 4),
(54, 9, 'Lima poin diatas', 5),
(55, 10, 'Tidak ada kode yang dapat digunakan ', 0),
(56, 10, 'Kode yang dapat digunakan terdapat dalam aplikasi', 1),
(57, 10, 'Kurang dari 10% dari aplikasi dipertimbangkan lebih dari satu kebutuhan pengguna', 2),
(58, 10, '10% atau lebih dari aplikasi dipertimbangkan lebih dari satu kebutuhan pengguna', 3),
(59, 10, 'Aplikasi dikelompokan secara spesifik dan/atau didokumentaikan untuk mudah digunakan kembali, dan aplikasi disesuaikan oleh pengguna dalam tingkatan source code', 4),
(60, 10, 'Aplikasi dikelompokan secara spesifik dan/atau didokumentaikan untuk mudah digunakan kembali, dan aplikasi disesuaikan untuk penggunaan melalui perbaikan parameter pengguna', 5),
(61, 11, 'Tidak ada pertimbangan khusus yang dinyatakan oleh pengguna, dan tidak ada pengaturan khusus yang diperlukan untuk pemasangan', 0),
(62, 11, 'Tidak ada pertimbangan khusus yang dinyatakan oleh pengguna, tapi pengaturan khusus diperlukan untuk pemasangan', 1),
(63, 11, 'Kebutuhan konversi dan pemasangan dinyatakan oleh pengguna, dan panduan konversi dan pemasangan disediakan dan diuji. Akibat dari konversi pada proyek tidak dipertimbangkan penting', 2),
(64, 11, 'Kebutuhan konversi dan pemasangan dinyatakan oleh pengguna, dan panduan konversi dan pemasangan disediakan dan diuji. Akibat dari konversi pada proyek dipertimbangkan penting', 3),
(65, 11, 'Sebagai tambahan 2 poin sebelumnya diatas, alat konversi dan instalasi secara otomatis disediakan dan diuji Sebagai tambahan 2 poin sebelumnya diatas, alat konversi dan instalasi secara otomatis disediakan dan diuji ', 4),
(66, 11, 'Sebagai tambahan 3 poin sebelumnya diatas, alat konversi dan instalasi secara otomatis disediakan dan diuji ', 5),
(67, 12, 'Tidak ada pertimbangan operasional khusus selain prosedur backup normal yang dinyatakan pengguna', 0),
(68, 12, 'Satu, beberapa, atau semua poin berikut diterapkan dalam aplikasi. Pilih semua yang diterapkan , setiap poin bernilai satu, kecuali dengan keterangan sebaliknya. Permulaan yang efektif, back-up, dan proses recovery disediakan, tapi campur tangan operator juga dibutuhkan (dihitung 1)', 1),
(69, 12, 'Permulaan yang efektif, back-up, dan proses recovery disediakan, tapi tidak ada campur tangan operator (dihitung dua)', 2),
(70, 12, 'Aplikasi mengurangi kebutuhan pita (dihitung 1)', 3),
(71, 12, 'Aplikasi mengurangi kebutuhan kertas (dihitung 1) kemudian jumlahkan masing-masing point untuk mendapatkan bobot antara 1 – 4', 4),
(72, 12, 'Aplikasi dirancang untuk operasi yang tidak dihadiri. Operasi yang tidak dihadiri berarti operasi tanpa campur tangan operator yang diperlukan untuk mengoperasikan sistem selain memulai atau mengakhiri aplikasi. Recovery kesalahan secara otomatis merupakan fitur aplikasi ', 5),
(73, 13, 'Kebutuhan pengguna tidak membutuhkan pertimbangan kebutuhan dari lebih dari satu pengguna atau pemasangan site', 0),
(74, 13, 'Kebutuhan beberapa site dipertimbangkan pada perancangan, aplikasi dirancang untuk dioperasikan hanya dibawah lingkungan hardware dan software yang sama persis ', 1),
(75, 13, 'Kebutuhan beberapa site dipertimbangkan pada perancangan, aplikasi dirancang untuk dioperasikan hanya dibawah lingkungan hardware dan software yang mirip', 2),
(76, 13, 'Kebutuhan beberapa site dipertimbangkan pada perancangan, aplikasi dirancang untuk dioperasikan hanya dibawah lingkungan hardware dan software yang berbeda', 3),
(77, 13, 'Dokumentasi dan rencana dukungan tersedia dan diuji untuk mendukung aplikasi pada beberapa site dan aplikasi juga seperti dideskripsikan pada poin 2 ', 4),
(78, 13, 'Dokumentasi dan rencana dukungan tersedia dan diuji untuk mendukung aplikasi pada beberapa site dan aplikasi juga seperti dideskripsikan pada poin 3', 5),
(79, 14, 'Tidak satupun dari poin diatas ', 0),
(80, 14, '1 poin diatas', 1),
(81, 14, '2 poin diatas', 2),
(82, 14, '3 poin diatas', 3),
(83, 14, '4 poin diatas', 4),
(84, 14, '5 poin diatas', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_history`
--

CREATE TABLE `cocomo_history` (
  `id_history` int(5) NOT NULL,
  `id_project` int(5) NOT NULL,
  `fp` float(11,3) DEFAULT NULL,
  `loc` float(11,3) DEFAULT NULL,
  `effort` float(11,3) DEFAULT NULL,
  `duration` float(11,3) DEFAULT NULL,
  `person` float(11,3) DEFAULT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_model`
--

CREATE TABLE `cocomo_model` (
  `id_model` int(5) NOT NULL,
  `id_project` int(5) NOT NULL,
  `model` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_project`
--

CREATE TABLE `cocomo_project` (
  `id_project` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama_project` varchar(50) NOT NULL,
  `project_description` text NOT NULL,
  `tca` float(11,3) DEFAULT NULL,
  `ufp` float(11,3) DEFAULT NULL,
  `fp` float(11,3) DEFAULT NULL,
  `loc` float(11,3) DEFAULT NULL,
  `effort` float(11,3) DEFAULT NULL,
  `duration` float(11,3) DEFAULT NULL,
  `person` float(11,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_tdi`
--

CREATE TABLE `cocomo_tdi` (
  `id_tdi` int(5) NOT NULL,
  `id_gsc` int(5) DEFAULT NULL,
  `value` int(11) NOT NULL,
  `id_project` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_user`
--

CREATE TABLE `cocomo_user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_user`
--

INSERT INTO `cocomo_user` (`id_user`, `nama_user`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cocomo_biaya`
--
ALTER TABLE `cocomo_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `cocomo_fp`
--
ALTER TABLE `cocomo_fp`
  ADD PRIMARY KEY (`id_fp`);

--
-- Indexes for table `cocomo_gsc`
--
ALTER TABLE `cocomo_gsc`
  ADD PRIMARY KEY (`id_gsc`);

--
-- Indexes for table `cocomo_gscpoint`
--
ALTER TABLE `cocomo_gscpoint`
  ADD PRIMARY KEY (`id_gscpoint`);

--
-- Indexes for table `cocomo_history`
--
ALTER TABLE `cocomo_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `cocomo_model`
--
ALTER TABLE `cocomo_model`
  ADD PRIMARY KEY (`id_model`);

--
-- Indexes for table `cocomo_project`
--
ALTER TABLE `cocomo_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `cocomo_tdi`
--
ALTER TABLE `cocomo_tdi`
  ADD PRIMARY KEY (`id_tdi`);

--
-- Indexes for table `cocomo_user`
--
ALTER TABLE `cocomo_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cocomo_biaya`
--
ALTER TABLE `cocomo_biaya`
  MODIFY `id_biaya` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocomo_fp`
--
ALTER TABLE `cocomo_fp`
  MODIFY `id_fp` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocomo_gsc`
--
ALTER TABLE `cocomo_gsc`
  MODIFY `id_gsc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cocomo_gscpoint`
--
ALTER TABLE `cocomo_gscpoint`
  MODIFY `id_gscpoint` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `cocomo_history`
--
ALTER TABLE `cocomo_history`
  MODIFY `id_history` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocomo_model`
--
ALTER TABLE `cocomo_model`
  MODIFY `id_model` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocomo_project`
--
ALTER TABLE `cocomo_project`
  MODIFY `id_project` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocomo_tdi`
--
ALTER TABLE `cocomo_tdi`
  MODIFY `id_tdi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocomo_user`
--
ALTER TABLE `cocomo_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
