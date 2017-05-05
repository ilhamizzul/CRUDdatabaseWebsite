-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 04:26 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `konten` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `sub_judul` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`ID`, `judul`, `konten`, `kategori`, `sub_judul`) VALUES
(11, 'Lakukan 5 Hal Sehat Hari Ini Agar Esok Lebih Beren', ' $emsp; Aktivitas yang padat setiap hari sering membuat mood jadi tak menyenangkan. Padahal setumpuk pekerjaan masih menunggu Anda di esok harinya, lalu bagaimana cara menyikapi kondisi menyebalkan ini?\r\n<br><br>\r\n $emsp; Melakukan kegiatan sehat seperti minum secangkir teh dengan menambahkan sedikit madu, kayu manis, atau perasan lemon akan menambah sistem kekebalan tubuh sehingga Anda tak mudah lelah menjalankan kegiatan di luar rumah.\r\n<br><br>\r\n $emsp; Adapun lima hal sehat berikut ini yang dapat menambah energi Anda untuk menjalankan hari esok lebih menyenangkan seperti dikutip Health, Rabu (30/11/2016).\r\n<br><br>\r\n1. Siapkan camilan sehat\r\n<br>\r\n $emsp; Menyimpan sekantong almond, sepotong buah, atau snack bar yang berbahan dasar gandum akan mengisi energi Anda seharian penuh.\r\n<br><br>\r\n2. Jangan tinggalkan sarapan\r\n<br>\r\n $emsp; Merebus satu butir telur di pagi hari dapat menambah energi untuk menjalani kegiatan selama sehari. Dengan tidak melewatkan sarapan, mood tidak mudah turun dan tubuh tak akan cepat lemas.\r\n<br><br>\r\n3. Makan malam seimbang\r\n<br>\r\n $emsp; Jangan sesekali melewatkan santapan malam usai melakukan aktivitas seharian penuh. Jangan buru-buru takut gemuk, karena protein dan kalori yang Anda terima di malam hari akan membuat tubuh lebih seimbang dan tidak mudah sakit.\r\n<br><br>\r\n4. Minum segelas air\r\n<br>\r\n $emsp; Tubuh akan lebih sehat dan terhidrasi jika Anda mengonsumsi segelas air di pagi hari dan malam hari. Bonusnya, kulit juga akan jauh lebih sehat.\r\n<br><br>\r\n5. Rencanakan menu diet\r\n<br>\r\n $emsp; Merencanakan menu diet di hari ini akan membuat hari esok lebih menyenangkan, kenapa? Hal ini membantu diri untuk lebih bertanggung jawab dan menetapkan tujuan dalam kehidupan Anda.\r\n\r\n', 'kesehatan', 'Lima hal sehat berikut ini yang dapat menambah energi Anda untuk menjalankan hari esok lebih menyenangkan'),
(12, 'Inovasi Lem Tembak yang Mengeluarkan Lelehan Keju', '  Kabar baik bagi Anda pecinta keju. Mulai sekarang Anda bisa membuat kreasi lelehan keju pada setiap olahan makanan.\r\n<br><br>\r\nSebuah inovasi terbaru yang diberi nama Fondoodler akan membantu untuk membuat lelehan keju dengan mudah. Melansir dari Seventeen, Selasa (12/12/2016), alat ini mampu melelehkan keju hanya dalam waktu 3 menit.\r\n<br><br>\r\nBentuknya yang didesain persis seperti lem tembak ini, telah diuji dan mendapat sertifikasi sebagai produk makanan yang aman untuk digunakan. Fondoodler dijual seharga 25 Dolar As atau sekitar Rp 335 ribu.\r\n<br><br>\r\nAnda bisa bebas menggambar, mendesain, dan menghias makanan dengan mudah karna Fondoodler dilengkapi dengan tabung yang digunakan sebagai tempat untuk meletakkan semua jenis keju pilihan. Bagian fondoodler yang terkena keju dapat dilepas kapan saja sehingga memudahkan Anda untuk membersihkan dan menucucinya.', 'makanan', 'Bagi pecinta keju, Anda bisa membuat lelehan pada tiap olahan hanya dalam tiga menit dengan lem tembak. Penasaran?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
