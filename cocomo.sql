-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 04:48 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cocomo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_biaya`
--

CREATE TABLE IF NOT EXISTS `cocomo_biaya` (
`id_biaya` int(5) NOT NULL,
  `id_project` int(5) NOT NULL,
  `bbb` int(15) NOT NULL,
  `btk` int(15) NOT NULL,
  `bop` int(15) NOT NULL,
  `laba` int(15) NOT NULL,
  `biaya` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_biaya`
--

INSERT INTO `cocomo_biaya` (`id_biaya`, `id_project`, `bbb`, `btk`, `bop`, `laba`, `biaya`) VALUES
(10, 56, 50000, 500000, 10000, 10, 638000),
(11, 57, 100000, 1500000, 15000, 50, 4762500);

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_fp`
--

CREATE TABLE IF NOT EXISTS `cocomo_fp` (
`id_fp` int(5) NOT NULL,
  `fp` varchar(255) NOT NULL,
  `tipe` varchar(3) NOT NULL,
  `bahasa` varchar(10) DEFAULT NULL,
  `DET` int(5) DEFAULT NULL,
  `RET` int(5) DEFAULT NULL,
  `FTR` int(5) DEFAULT NULL,
  `id_project` int(5) NOT NULL,
  `weight` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_fp`
--

INSERT INTO `cocomo_fp` (`id_fp`, `fp`, `tipe`, `bahasa`, `DET`, `RET`, `FTR`, `id_project`, `weight`) VALUES
(1, 'Halaman Login', 'EO', 'PHP', 2, NULL, 1, 35, NULL),
(2, 'Halaman Tambah Fungsi', 'EO', 'PHP', 2, NULL, 1, 35, NULL),
(4, 'Login', 'ILF', 'SQL', 5, 1, NULL, 35, NULL),
(5, 'Produk', 'ILF', 'SQL', 12, 5, NULL, 35, NULL),
(7, 'Produk', 'EIF', 'SQL', 11, 2, NULL, 41, NULL),
(11, 'Transaksi', 'EO', 'PHP', 4, NULL, 67, 44, 5),
(13, 'Pegawai', 'ILF', 'SQL', 20, 1, NULL, 44, 7),
(14, 'Karyawan', 'EIF', 'SQL', 20, 1, NULL, 44, 5),
(18, 'aaa', 'EO', 'PHP', 12, NULL, 34, 44, 7),
(21, 'Bank', 'ILF', 'SQL', 20, 7, NULL, 44, 15),
(23, '2222', 'EI', 'HTML', 16, NULL, 2, 44, 6),
(24, 'kadal', 'ILF', 'SQL', 1, 2, NULL, 43, 7),
(25, 'User', 'ILF', 'SQL', 5, 5, NULL, 40, 7),
(26, 'login', 'EQ', 'PHP', 2, NULL, 1, 40, 3),
(27, 'register', 'EI', 'PHP', 2, NULL, 1, 43, 3),
(28, 'User', 'ILF', 'SQL', 6, 1, NULL, 45, 7),
(29, 'Booking', 'ILF', 'SQL', 11, 2, NULL, 45, 7),
(30, 'Pegawai', 'ILF', 'SQL', 5, 1, NULL, 45, 7),
(31, 'History', 'ILF', 'SQL', 11, 1, NULL, 45, 7),
(32, 'Notifikasi', 'ILF', 'SQL', 4, 1, NULL, 45, 7),
(33, 'Hotel', 'ILF', 'SQL', 3, 1, NULL, 45, 7),
(34, 'Login', 'EI', 'PHP', 2, NULL, 1, 45, 3),
(35, 'Logout', 'EI', 'PHP', 1, NULL, 1, 45, 3),
(36, 'Add User', 'EI', 'PHP', 4, NULL, 1, 45, 3),
(37, 'Add Req', 'EI', 'PHP', 6, NULL, 5, 45, 6),
(38, 'Print', 'EI', 'PHP', 2, NULL, 1, 45, 3),
(39, 'Aprove Req', 'EI', 'PHP', 1, NULL, 3, 45, 4),
(40, 'Reject Req', 'EI', 'PHP', 1, NULL, 3, 45, 4),
(41, 'View Req Unanswered', 'EQ', 'HTML', 6, NULL, 1, 45, 3),
(42, 'View Req Accepted', 'EQ', 'HTML', 6, NULL, 1, 45, 3),
(43, 'View Req Rejected', 'EQ', 'HTML', 6, NULL, 1, 45, 3),
(44, 'View Detail', 'EQ', 'HTML', 5, NULL, 1, 45, 3),
(45, 'View Profile', 'EQ', 'PHP', 2, NULL, 1, 45, 3),
(46, 'View About', 'EQ', 'HTML', 9, NULL, 1, 45, 3),
(47, 'View History', 'EQ', 'HTML', 9, NULL, 1, 45, 3),
(48, 'View Print', 'EQ', 'HTML', 10, NULL, 1, 45, 3),
(51, 'Aw Aw', 'EI', 'PHP', 2, NULL, 1, 47, 3),
(52, 'Pegawai', 'EI', 'PHP', 55, NULL, 12, 47, 6),
(53, 'Bank', 'EI', 'PHP', 26, NULL, 12, 47, 6),
(55, 'User', 'EI', 'PHP', 2, NULL, 3, 42, 4),
(56, 'sapiudin', 'ILF', 'SQL', 3, 4, NULL, 42, 7),
(57, 'sapiudin', 'ILF', 'SQL', 1, 2, NULL, 49, 7),
(58, 'rabi yes', 'EI', 'PHP', 4, NULL, 3, 49, 4),
(59, 'aaa', 'ILF', 'SQL', 4, 4, NULL, 39, 7),
(60, 'eee', 'EO', 'PHP', 2, NULL, 1, 39, 4),
(61, 'Customer ', 'ILF', 'SQL', 9, 1, NULL, 51, 7),
(62, 'Riwayat', 'ILF', 'SQL', 3, 2, NULL, 51, 7),
(63, 'User', 'ILF', 'SQL', 4, 1, NULL, 51, 7),
(64, 'Login', 'EI', 'PHP', 2, NULL, 1, 51, 3),
(65, 'Logout', 'EI', 'PHP', 1, NULL, 1, 51, 3),
(66, 'Edit Customer', 'EI', 'PHP', 1, NULL, 1, 51, 3),
(67, 'Add User', 'EI', 'PHP', 4, NULL, 1, 51, 3),
(68, 'Edit User', 'EI', 'PHP', 4, NULL, 1, 51, 3),
(69, 'Delete User', 'EI', 'PHP', 4, NULL, 1, 51, 3),
(70, 'Display Riwayat', 'EO', 'HTML', 11, NULL, 2, 51, 5),
(71, 'Customer List', 'EQ', 'HTML', 11, NULL, 3, 51, 4),
(72, 'Display Customer', 'EQ', 'HTML', 9, NULL, 1, 51, 3),
(73, 'Display User', 'EQ', 'HTML', 4, NULL, 1, 51, 3),
(74, 'User', 'ILF', 'SQL', 6, 1, NULL, 52, 7),
(75, 'Booking', 'ILF', 'SQL', 12, 1, NULL, 52, 7),
(76, 'Room', 'ILF', 'SQL', 1, 1, NULL, 52, 7),
(77, 'Record', 'ILF', 'SQL', 12, 1, NULL, 52, 7),
(78, 'Notifikasi', 'ILF', 'SQL', 3, 1, NULL, 52, 7),
(79, 'Login', 'EI', 'PHP', 2, NULL, 1, 52, 3),
(80, 'Logout', 'EI', 'PHP', 1, NULL, 1, 52, 3),
(81, 'Approve Req', 'EI', 'PHP', 1, NULL, 3, 52, 4),
(82, 'Deliver Req', 'EI', 'PHP', 1, NULL, 3, 52, 4),
(83, 'Cancel Req', 'EI', 'PHP', 1, NULL, 3, 52, 4),
(84, 'Print', 'EI', 'PHP', 2, NULL, 1, 52, 3),
(85, 'Add Req', 'EI', 'PHP', 10, NULL, 5, 52, 6),
(86, 'View Req', 'EQ', 'HTML', 8, NULL, 1, 52, 3),
(87, 'View Req Approve', 'EQ', 'HTML', 8, NULL, 1, 52, 3),
(88, 'view Req Delivered', 'EQ', 'HTML', 8, NULL, 1, 52, 3),
(89, 'View Req Canceled', 'EQ', 'HTML', 8, NULL, 1, 52, 3),
(90, 'View History', 'EQ', 'HTML', 8, NULL, 1, 52, 3),
(91, 'View Print', 'EQ', 'HTML', 9, NULL, 1, 52, 3),
(92, 'View Menu', 'EQ', 'HTML', 2, NULL, 2, 52, 3),
(93, 'User', 'ILF', 'SQL', 4, 2, NULL, 50, 7),
(94, 'aqwe', 'EI', 'PHP', 4, NULL, 1, 50, 3),
(95, 'Bangunan', 'ILF', 'SQL', 60, 0, NULL, 53, 10),
(96, 'Lokasi', 'ILF', 'SQL', 6, 2, NULL, 53, 7),
(97, 'Kelurahan', 'ILF', 'SQL', 3, 0, NULL, 53, 7),
(99, 'Tambah Data', 'EI', 'PHP', 58, NULL, 3, 53, 6),
(100, 'Edit Data', 'EI', 'PHP', 58, NULL, 3, 53, 6),
(101, 'Delete Data', 'EI', 'PHP', 58, NULL, 1, 53, 4),
(102, 'Export Data', 'EI', 'PHP', 58, NULL, 1, 53, 4),
(103, 'Tambah Kelurahan', 'EI', 'PHP', 3, NULL, 2, 53, 3),
(104, 'Edit Kelurahan', 'EI', 'PHP', 3, NULL, 2, 53, 3),
(105, 'Delete Kelurahan', 'EI', 'PHP', 3, NULL, 1, 53, 3),
(106, 'Tambah Lokasi', 'EI', 'PHP', 2, NULL, 1, 53, 3),
(107, 'Edit Lokasi', 'EI', 'PHP', 2, NULL, 1, 53, 3),
(108, 'Delete Lokasi', 'EI', 'PHP', 2, NULL, 1, 53, 3),
(109, 'View bangunan', 'EQ', 'HTML', 12, NULL, 1, 53, 3),
(110, 'View Detail bangunan', 'EQ', 'HTML', 58, NULL, 1, 53, 4),
(111, 'View Kelurahan', 'EQ', 'HTML', 4, NULL, 2, 53, 3),
(112, 'View Lokasi', 'EQ', 'HTML', 2, NULL, 1, 53, 3),
(114, 'User', 'ILF', 'SQL', 4, 3, NULL, 54, 7),
(115, 'Tambah User', 'EI', 'PHP', 2, NULL, 1, 54, 3),
(116, 'Pegawai', 'ILF', 'SQL', 12, 1, NULL, 56, 7),
(117, 'Tambah Data', 'EI', 'PHP', 4, NULL, 1, 56, 3),
(118, 'Transaksi', 'EI', 'PHP', 8, NULL, 2, 56, 4),
(119, 'Kontak', 'ILF', 'SQL', 3, 2, NULL, 57, 7),
(120, 'User', 'ILF', 'SQL', 6, 2, NULL, 57, 7),
(121, 'Laporan', 'ILF', 'SQL', 3, 2, NULL, 57, 7),
(122, 'Tambah Kontak', 'EI', 'PHP', 3, NULL, 1, 57, 3),
(123, 'Edit Kontakss', 'EI', 'PHP', 2, NULL, 1, 57, 3),
(124, 'Hapus Kontak', 'EI', 'PHP', 1, NULL, 1, 57, 3),
(125, 'Ubah Password', 'EI', 'PHP', 4, NULL, 1, 57, 3),
(126, 'Ubah Profile', 'EI', 'PHP', 5, NULL, 1, 57, 3),
(127, 'Kirim Broadcast', 'EQ', 'PHP', 3, NULL, 3, 57, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_gsc`
--

CREATE TABLE IF NOT EXISTS `cocomo_gsc` (
`id_gsc` int(5) NOT NULL,
  `gsc` text,
  `deskripsi` text
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `cocomo_gscpoint` (
`id_gscpoint` int(5) NOT NULL,
  `id_gsc` int(5) DEFAULT NULL,
  `point` text NOT NULL,
  `value` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `cocomo_history` (
`id_history` int(5) NOT NULL,
  `id_project` int(5) NOT NULL,
  `fp` float(11,3) DEFAULT NULL,
  `loc` float(11,3) DEFAULT NULL,
  `effort` float(11,3) DEFAULT NULL,
  `duration` float(11,3) DEFAULT NULL,
  `person` float(11,3) DEFAULT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_history`
--

INSERT INTO `cocomo_history` (`id_history`, `id_project`, `fp`, `loc`, `effort`, `duration`, `person`, `update_date`) VALUES
(1, 47, 46.280, 1925.960, 7.905, 4.845, 1.632, '2017-01-29 20:46:24'),
(2, 47, 46.280, 1925.960, 6.251, 4.748, 1.317, '2017-01-29 20:47:20'),
(3, 47, 32.930, 1432.010, 5.539, 4.324, 1.281, '2017-01-29 20:48:00'),
(4, 42, 3.840, 203.520, 0.000, 0.000, 0.000, '2017-01-30 04:13:17'),
(5, 42, 3.840, 203.520, 0.504, 1.967, 0.256, '2017-01-30 04:14:40'),
(6, 42, 3.840, 203.520, 0.533, 2.044, 0.261, '2017-01-30 04:24:08'),
(7, 42, 3.920, 207.760, 0.546, 2.060, 0.265, '2017-01-30 04:24:43'),
(8, 42, 10.780, 461.580, 1.424, 2.799, 0.509, '2017-01-30 04:31:47'),
(9, 49, 10.560, 452.160, 1.233, 2.690, 0.458, '2017-01-31 09:04:24'),
(10, 44, 52.650, 2320.110, 9.884, 5.204, 1.899, '2017-01-31 16:34:27'),
(11, 39, 10.450, 447.450, 1.219, 2.679, 0.455, '2017-01-31 16:43:46'),
(12, 47, 34.410, 1496.370, 5.839, 4.397, 1.328, '2017-01-31 17:01:19'),
(13, 45, 82.800, 3878.100, 9.960, 5.988, 1.663, '2017-01-31 17:21:35'),
(14, 51, 48.600, 2340.900, 7.777, 5.125, 1.517, '2017-02-12 09:09:14'),
(15, 52, 78.020, 3707.360, 9.500, 5.881, 1.615, '2017-02-10 16:30:13'),
(16, 52, 78.020, 3707.360, 17.345, 6.230, 2.784, '2017-02-26 09:19:15'),
(17, 53, 67.500, 3290.400, 8.382, 5.608, 1.495, '2017-02-26 07:22:47'),
(18, 54, 9.600, 401.280, 0.920, 2.422, 0.380, '2017-04-06 13:11:38'),
(19, 56, 10.100, 422.180, 0.970, 2.471, 0.393, '2017-03-23 19:04:01'),
(20, 56, 10.100, 422.180, 1.142, 2.619, 0.436, '2017-03-23 19:04:26'),
(21, 56, 14.140, 636.300, 1.808, 3.076, 0.588, '2017-03-23 19:49:39'),
(22, 56, 14.140, 636.300, 2.093, 3.167, 0.661, '2017-03-23 20:13:07'),
(23, 56, 14.140, 636.300, 1.493, 2.911, 0.513, '2017-04-06 14:43:54'),
(24, 57, 35.490, 1575.210, 4.990, 4.388, 1.137, '2017-04-07 08:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_model`
--

CREATE TABLE IF NOT EXISTS `cocomo_model` (
`id_model` int(5) NOT NULL,
  `id_project` int(5) NOT NULL,
  `model` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_model`
--

INSERT INTO `cocomo_model` (`id_model`, `id_project`, `model`) VALUES
(19, 0, 'Embedded'),
(20, 0, 'Semi-detached'),
(21, 0, 'Embedded'),
(23, 0, 'Semi-detached'),
(24, 44, 'Embedded'),
(25, 40, 'Embedded'),
(26, 43, 'Organic'),
(27, 45, 'Organic'),
(28, 47, 'Semi-detached'),
(29, 42, 'Embedded'),
(30, 49, 'Semi-detached'),
(31, 39, 'Semi-detached'),
(32, 51, 'Semi-detached'),
(33, 52, 'Embedded'),
(34, 50, 'Organic'),
(35, 53, 'Organic'),
(37, 54, 'Organic'),
(38, 56, 'Organic'),
(39, 57, 'Semi-detached');

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_project`
--

CREATE TABLE IF NOT EXISTS `cocomo_project` (
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
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_project`
--

INSERT INTO `cocomo_project` (`id_project`, `id_user`, `nama_project`, `project_description`, `tca`, `ufp`, `fp`, `loc`, `effort`, `duration`, `person`) VALUES
(2, 1, 'sofie', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 'labil', 'labil bgt', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 'Toxicity', 'project yang diperuntukkan untuk grup musik system of a down', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 3, 'project 1', 'hhhahhahah satu 2 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 1, 'lebokno', 'lebokno sak sake\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 4, 'suara', 'suara ini adalah aplikasi failed', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 4, 'sesuatu', 'sesuatu yah', 0.950, 11.000, 10.450, 447.450, 1.219, 2.679, 0.455),
(40, 5, 'Wisanka Store', 'Project untuk mengelola koperasi pada PT WISANKA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 4, 'Ranu Bahari', 'Project untuk prediksi bencana alam', 0.980, 11.000, 10.780, 461.580, 1.424, 2.799, 0.509),
(43, 4, 'Moch SHofie', 'konyol bgt\r\n', 1.030, 10.000, 10.300, 430.540, 0.991, 2.491, 0.398),
(44, 4, 'sapi boyolalai', 'Ini salah satu project yang sukses', 1.170, 45.000, 52.650, 2320.110, 9.884, 5.204, 1.899),
(45, 5, 'Akomodasi', 'dari 2012', 0.900, 92.000, 82.800, 3878.100, 9.960, 5.988, 1.663),
(46, 5, 'labil', 'bgt\r\n', NULL, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000),
(47, 5, 'Wisuda', 'ini adalah aplikasi wisuda untuk bla bla bla', 0.930, 37.000, 34.410, 1496.370, 5.839, 4.397, 1.328),
(49, 5, 'Profile', 'mbuh ah mumet aku nyawang slieamu sing kkoyo atu', 0.960, 11.000, 10.560, 452.160, 1.233, 2.690, 0.458),
(50, 6, 'First', 'hahahaha2212121', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 6, 'Avenger1111', 'Ini adalah aplikasi yang diperuntukan untuk saudara X, yang berisi sebuah aplikasi konyol', 0.900, 54.000, 48.600, 2340.900, 7.777, 5.125, 1.517),
(52, 6, 'Catering', 'adalah aplikasi untuk pemesanan catering yang dibuat anak 2011', 0.940, 83.000, 78.020, 3707.360, 17.345, 6.230, 2.784),
(53, 6, 'IMB', 'aplikasi selanjutnya', 0.900, 75.000, 67.500, 3290.400, 8.382, 5.608, 1.495),
(54, 6, 'Meeting Room', 'aplikasi untuk memesan meeting room pada salah satu hotel ternama di kota surakarta', 0.960, 10.000, 9.600, 401.280, 0.920, 2.422, 0.380),
(56, 6, 'Inside Out', 'Im gonna love u inside out', 1.010, 14.000, 14.140, 636.300, 1.493, 2.911, 0.513),
(57, 7, 'Sms Gangguan', 'aplikasi untuk mengirim sms pemberitahuan gangguan PLN', 0.910, 39.000, 35.490, 1575.210, 4.990, 4.388, 1.137);

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_tdi`
--

CREATE TABLE IF NOT EXISTS `cocomo_tdi` (
`id_tdi` int(5) NOT NULL,
  `id_gsc` int(5) DEFAULT NULL,
  `value` int(11) NOT NULL,
  `id_project` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_tdi`
--

INSERT INTO `cocomo_tdi` (`id_tdi`, `id_gsc`, `value`, `id_project`) VALUES
(1, 2, 4, 35),
(2, 1, 3, 35),
(3, 3, 3, 35),
(4, 4, 2, 35),
(5, 5, 5, 35),
(6, 6, 5, 35),
(7, 7, 3, 35),
(8, 8, 4, 35),
(9, 9, 5, 35),
(10, 10, 3, 35),
(11, 11, 3, 35),
(12, 12, 5, 35),
(13, 13, 5, 35),
(14, 1, 2, 39),
(15, 1, 1, 40),
(16, 1, 4, 41),
(17, 1, 3, 44),
(18, 2, 5, 44),
(19, 3, 3, 44),
(20, 4, 4, 44),
(21, 5, 4, 44),
(22, 6, 3, 44),
(23, 7, 3, 44),
(24, 8, 5, 44),
(25, 9, 2, 44),
(26, 10, 4, 44),
(27, 11, 3, 44),
(28, 12, 5, 44),
(29, 13, 4, 44),
(30, 14, 4, 44),
(31, 2, 5, 40),
(32, 3, 3, 40),
(33, 4, 1, 40),
(34, 5, 2, 40),
(35, 6, 3, 40),
(36, 7, 4, 40),
(37, 8, 2, 40),
(38, 9, 3, 40),
(39, 10, 1, 40),
(40, 11, 3, 40),
(41, 12, 5, 40),
(42, 13, 5, 40),
(43, 14, 2, 40),
(44, 1, 2, 43),
(45, 2, 4, 43),
(46, 3, 2, 43),
(47, 4, 3, 43),
(48, 5, 2, 43),
(49, 6, 3, 43),
(50, 7, 2, 43),
(51, 8, 3, 43),
(52, 9, 2, 43),
(53, 10, 3, 43),
(54, 11, 4, 43),
(55, 12, 5, 43),
(56, 13, 1, 43),
(57, 14, 2, 43),
(58, 1, 4, 45),
(59, 2, 3, 45),
(60, 3, 1, 45),
(61, 4, 1, 45),
(62, 5, 0, 45),
(63, 6, 5, 45),
(64, 7, 3, 45),
(65, 8, 2, 45),
(66, 9, 1, 45),
(67, 10, 1, 45),
(68, 11, 0, 45),
(69, 12, 0, 45),
(70, 13, 3, 45),
(71, 14, 1, 45),
(72, 1, 3, 46),
(73, 2, 2, 46),
(74, 3, 2, 46),
(75, 1, 5, 47),
(76, 2, 4, 47),
(77, 3, 0, 47),
(78, 4, 0, 47),
(79, 5, 0, 47),
(80, 6, 5, 47),
(81, 7, 1, 47),
(82, 8, 3, 47),
(83, 9, 1, 47),
(84, 10, 1, 47),
(85, 11, 1, 47),
(86, 12, 2, 47),
(87, 13, 2, 47),
(88, 14, 3, 47),
(89, 1, 0, 42),
(90, 2, 3, 42),
(91, 3, 2, 42),
(92, 4, 3, 42),
(93, 5, 2, 42),
(94, 6, 0, 42),
(95, 7, 3, 42),
(96, 8, 5, 42),
(97, 9, 1, 42),
(98, 10, 3, 42),
(99, 11, 2, 42),
(100, 12, 2, 42),
(101, 13, 3, 42),
(102, 14, 4, 42),
(103, 1, 0, 49),
(104, 2, 1, 49),
(105, 3, 2, 49),
(106, 4, 3, 49),
(107, 5, 4, 49),
(108, 6, 5, 49),
(109, 7, 4, 49),
(110, 8, 3, 49),
(111, 9, 2, 49),
(112, 10, 1, 49),
(113, 11, 0, 49),
(114, 12, 1, 49),
(115, 13, 2, 49),
(116, 14, 3, 49),
(117, 2, 0, 39),
(118, 3, 1, 39),
(119, 4, 1, 39),
(120, 5, 3, 39),
(121, 6, 2, 39),
(122, 7, 2, 39),
(123, 8, 5, 39),
(124, 9, 3, 39),
(125, 10, 3, 39),
(126, 11, 3, 39),
(127, 12, 2, 39),
(128, 13, 2, 39),
(129, 14, 1, 39),
(130, 1, 1, 50),
(131, 1, 4, 51),
(132, 2, 3, 51),
(133, 3, 1, 51),
(134, 4, 1, 51),
(135, 5, 0, 51),
(136, 6, 4, 51),
(137, 7, 3, 51),
(138, 8, 2, 51),
(139, 9, 1, 51),
(140, 10, 1, 51),
(141, 11, 0, 51),
(142, 12, 1, 51),
(143, 13, 3, 51),
(144, 14, 1, 51),
(145, 1, 4, 52),
(146, 2, 3, 52),
(147, 3, 1, 52),
(148, 4, 1, 52),
(149, 5, 0, 52),
(150, 6, 5, 52),
(151, 7, 3, 52),
(152, 8, 3, 52),
(153, 9, 2, 52),
(154, 10, 1, 52),
(155, 11, 0, 52),
(156, 12, 1, 52),
(157, 13, 3, 52),
(158, 14, 2, 52),
(159, 2, 1, 50),
(160, 3, 4, 50),
(161, 4, 1, 50),
(162, 5, 5, 50),
(163, 6, 2, 50),
(164, 1, 4, 53),
(165, 2, 3, 53),
(166, 3, 1, 53),
(167, 4, 1, 53),
(168, 5, 0, 53),
(169, 6, 5, 53),
(170, 7, 2, 53),
(171, 8, 3, 53),
(172, 9, 1, 53),
(173, 10, 1, 53),
(174, 11, 0, 53),
(175, 12, 0, 53),
(176, 13, 3, 53),
(177, 14, 1, 53),
(178, 1, 0, 54),
(179, 2, 1, 54),
(180, 3, 2, 54),
(181, 4, 3, 54),
(182, 5, 4, 54),
(183, 6, 5, 54),
(184, 7, 0, 54),
(185, 8, 1, 54),
(186, 9, 2, 54),
(187, 10, 3, 54),
(188, 11, 4, 54),
(189, 12, 5, 54),
(190, 13, 0, 54),
(191, 14, 1, 54),
(192, 1, 0, 56),
(193, 2, 3, 56),
(194, 3, 1, 56),
(195, 4, 4, 56),
(196, 5, 4, 56),
(197, 6, 4, 56),
(198, 7, 0, 56),
(199, 8, 4, 56),
(200, 9, 0, 56),
(201, 10, 5, 56),
(202, 11, 3, 56),
(203, 12, 5, 56),
(204, 13, 3, 56),
(205, 14, 0, 56),
(206, 1, 0, 57),
(207, 2, 0, 57),
(208, 3, 1, 57),
(209, 4, 2, 57),
(210, 5, 4, 57),
(211, 6, 1, 57),
(212, 7, 2, 57),
(213, 8, 1, 57),
(214, 9, 4, 57),
(215, 10, 4, 57),
(216, 11, 2, 57),
(217, 12, 0, 57),
(218, 13, 0, 57),
(219, 14, 5, 57);

-- --------------------------------------------------------

--
-- Table structure for table `cocomo_user`
--

CREATE TABLE IF NOT EXISTS `cocomo_user` (
`id_user` int(5) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocomo_user`
--

INSERT INTO `cocomo_user` (`id_user`, `nama_user`, `email`, `password`) VALUES
(1, 'pith.loucifer@gmail.com', 'pith.loucifer@gmail.com', 'pitra'),
(2, 'qaz', 'anyar@gmail.com', '1234'),
(3, 'tessa@gmail.com', 'tes ', 't3s'),
(4, 'saya', 'coba@gmail.com', 'cob4'),
(5, 'sapiudin', 'sapi@gmail.com', 'sapi'),
(6, 'Moch Shofieyuddin', 'shofie.gg@gmail.com', 'isthatall'),
(7, 'Moch Shofieyuddin', 'moch.shofieyuddin@gmail.com', 'isthatall');

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
MODIFY `id_biaya` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cocomo_fp`
--
ALTER TABLE `cocomo_fp`
MODIFY `id_fp` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `cocomo_gsc`
--
ALTER TABLE `cocomo_gsc`
MODIFY `id_gsc` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cocomo_gscpoint`
--
ALTER TABLE `cocomo_gscpoint`
MODIFY `id_gscpoint` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `cocomo_history`
--
ALTER TABLE `cocomo_history`
MODIFY `id_history` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `cocomo_model`
--
ALTER TABLE `cocomo_model`
MODIFY `id_model` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `cocomo_project`
--
ALTER TABLE `cocomo_project`
MODIFY `id_project` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `cocomo_tdi`
--
ALTER TABLE `cocomo_tdi`
MODIFY `id_tdi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT for table `cocomo_user`
--
ALTER TABLE `cocomo_user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
