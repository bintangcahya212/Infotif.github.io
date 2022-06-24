-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 04:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(14) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `nik`, `email`, `no_hp`, `kegiatan`, `gambar`) VALUES
(6, 'Bintang Cahya', 2147483647, 'bintang212@gmail.com', 2147483647, 'Panitia Porseni Cabor Badminton', NULL),
(7, 'yoga', 2147483647, 'y@gmail.com', 2147483647, 'riau', NULL),
(8, 'Bintang Cahya', 2147483647, 'bintang212@gmail.com', 2147483647, 'devop', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event`, `keterangan`, `gambar`) VALUES
(3, '[RIAU DEVHOST]', '<p>[RIAU DEVHOST]</p>\r\n\r\n<p>Assalamualaikum Warahmatullahi Wabarokatuh<br />\r\n- - -<br />\r\nHELLO SOBAT RDO ????<br />\r\n&bull;<br />\r\nPenawaran terbaik dari Riau DevOps????<br />\r\n- - -</p>\r\n\r\n<p>Udah pada tau kan kalau Riau DevOps meluncurkan product Riau DevHost?? ????</p>\r\n\r\n<p>Dapatkan HARGA SPESIAL 500k untuk setiap 5 orang????</p>\r\n\r\n<p>Ayo ajak 4 teman kamu untuk gunain layanan RiauDevHost????????<br />\r\nDijamin ga bakalan rugi????</p>\r\n\r\n<p>Riau DevHost bahkan cocok untuk kamu yang sebelumnya belum pernah menggunakan layanan hosting website.</p>\r\n\r\n<p>‼️Dapatkan benefit berupa :</p>\r\n\r\n<p>✅Dibantu secara penuh oleh tim teknis, kamu bisa bertanya apa saja terkait penggunaan hosting jika kamu kesulitan.<br />\r\n✅Gratis domain indonesia, dengan menyewa hosting Riau DevHost website kamu udah bisa langsung diakses dengan</p>\r\n\r\n<p>nama domain sesuka kamu.<br />\r\n✅Harga anak kost, tentu saja harga sewa hosting Riau DevHost gak akan semahal paket hosting &amp; domain seperti diluar sana.</p>\r\n\r\n<p>Slot terbatas loh, jangan sampai gak kebagian kuota. Gak perlu ragu untuk konsultasi dengan Team Riau DevHost jika kamu masih</p>\r\n\r\n<p>merasa bingung!</p>\r\n\r\n<p><br />\r\nPenasaran dengan paket layanan nya?? Daftar Yukk<br />\r\n????<br />\r\nTunggu apa lagi!! Daftar sekarang juga dengan isi link dibawah ini :<br />\r\n-&gt; <a href=\"https://s.id/riaudevhost\">https://s.id/riaudevhost</a>&lt;-</p>\r\n\r\n<p>Atau mau tanya-tanya silahkan contact Team kita????<br />\r\n????????&zwj;♀️ Mentari - 085264413175<br />\r\n????????&zwj;♀️ Rahma - 082288108515</p>\r\n\r\n<p>Sangat menarik bukan????<br />\r\nBuruan Daftar Ya Guyss????????</p>\r\n\r\n<p>-------------------------------------------<br />\r\nEmail : info@riaudevops.id<br />\r\nInstagram : @riaudevops<br />\r\nFacebook : Riau DevOps<br />\r\nYoutube&nbsp;&nbsp; : Riau DevOps</p>\r\n', '1655973774.png'),
(4, 'PORSENI TIF 3 Cabang Olah raga Futsal', '<p>Assalamualaikum. Wr. Wb<br />\r\n.<br />\r\nHalo Sobat HIMATIF ????????</p>\r\n\r\n<p>Himatif kembali mengadakan Pekan Olahraga dan Seni dalam rangka mengembangkan bakat dan minat mahasiswa/i Teknik Informatika.</p>\r\n\r\n<p>Buat kalian Mahasiswa/Alumni jurusan Teknik Informatika yang ingin menyumbangkan bakatnya dalam bidang seni dan olahraga. Yuk, segera daftarkan diri kalian di Porseni TIF 3!!</p>\r\n\r\n<p>Form Pendaftaran:<br />\r\n<a href=\"https://linktr.ee/porsenitif3\">https://linktr.ee/porsenitif3</a></p>\r\n\r\n<p>Yuk, tunggu apalagi? Ayo segera daftarkan diri kalian!<br />\r\n.<br />\r\n_____________<br />\r\nPORSENI TIF 3 2022<br />\r\n.<br />\r\nInstagram :<br />\r\n@himatifuinsuska<br />\r\n@porseni3.tif</p>\r\n\r\n<p>#himatifuinsuska<br />\r\n#salamsatusuara<br />\r\n#pasti</p>\r\n', '1656005064.png');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `waktu_daftar` datetime NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_barang`, `keterangan`, `harga`, `tempat`, `waktu`, `waktu_daftar`, `gambar`) VALUES
(10, 'Riau DevOps', '<p>[RIAU DEVHOST]</p>\r\n\r\n<p>Assalamualaikum Warahmatullahi Wabarokatuh<br />\r\n- - -<br />\r\nHELLO SOBAT RDO ????<br />\r\n&bull;<br />\r\nPenawaran terbaik dari Riau DevOps????<br />\r\n- - -</p>\r\n\r\n<p>Udah pada tau kan kalau Riau DevOps meluncurkan product Riau DevHost?? ????</p>\r\n\r\n<p>Dapatkan HARGA SPESIAL 500k untuk setiap 5 orang????</p>\r\n\r\n<p>Ayo ajak 4 teman kamu untuk gunain layanan RiauDevHost????????<br />\r\nDijamin ga bakalan rugi????</p>\r\n\r\n<p>Riau DevHost bahkan cocok untuk kamu yang sebelumnya belum pernah menggunakan layanan hosting website.</p>\r\n\r\n<p>‼️Dapatkan benefit berupa :</p>\r\n\r\n<p>✅Dibantu secara penuh oleh tim teknis, kamu bisa bertanya apa saja terkait penggunaan hosting jika kamu kesulitan.<br />\r\n✅Gratis domain indonesia, dengan menyewa hosting Riau DevHost website kamu udah bisa langsung diakses dengan</p>\r\n\r\n<p>nama domain sesuka kamu.<br />\r\n✅Harga anak kost, tentu saja harga sewa hosting Riau DevHost gak akan semahal paket hosting &amp; domain seperti diluar sana.</p>\r\n\r\n<p>Slot terbatas loh, jangan sampai gak kebagian kuota. Gak perlu ragu untuk konsultasi dengan Team Riau DevHost jika kamu</p>\r\n\r\n<p>masih merasa bingung!</p>\r\n\r\n<p><br />\r\nPenasaran dengan paket layanan nya?? Daftar Yukk<br />\r\n????<br />\r\nTunggu apa lagi!! Daftar sekarang juga dengan isi link dibawah ini :<br />\r\n-&gt; <a href=\"https://s.id/riaudevhost\">https://s.id/riaudevhost</a> &lt;-</p>\r\n\r\n<p>Atau mau tanya-tanya silahkan contact Team kita????<br />\r\n????????&zwj;♀️ Mentari - 085264413175<br />\r\n????????&zwj;♀️ Rahma - 082288108515</p>\r\n\r\n<p>Sangat menarik bukan????<br />\r\nBuruan Daftar Ya Guyss????????</p>\r\n\r\n<p>-------------------------------------------<br />\r\nEmail : info@riaudevops.id<br />\r\nInstagram : @riaudevops<br />\r\nFacebook : Riau DevOps<br />\r\nYoutube&nbsp;&nbsp; : Riau DevOps</p>\r\n', 'gratis', 'Gedung IC', 'Tebatas', '0000-00-00 00:00:00', '1624124809.jpg'),
(11, 'Rekrutmen Kepanitiaan PORSENI TIF 3', '<p>Assalamualaikum. Wr. Wb<br />\r\n<br />\r\nHalo Sobat HIMATIF ????????</p>\r\n\r\n<p>Himatif kembali mengadakan Pekan Olahraga dan Seni dalam rangka mengembangkan bakat dan minat mahasiswa/i Teknik Informatika.</p>\r\n\r\n<p>Buat kalian Mahasiswa jurusan Teknik Informatika yang ingin menjadi panitia untuk membantu dan mendukung kegiatan kita bersama ini,</p>\r\n\r\n<p>Yuk, segera daftarkan diri kalian di Porseni TIF 3!!</p>\r\n\r\n<p>Yuk, tunggu apalagi? Ayo segera daftarkan diri kalian!<br />\r\n_____________<br />\r\nPORSENI TIF 3 2022<br />\r\n.<br />\r\nInstagram :<br />\r\n@himatifuinsuska<br />\r\n@porseni3.tif</p>\r\n\r\n<p>#himatifuinsuska<br />\r\n#salamsatusuara<br />\r\n#pasti</p>\r\n', 'gratis', 'Sekretaria HIMATIF Gedung Baru Lantai 2', '4 Juni - 11 Juni', '0000-00-00 00:00:00', '1624412770.jpg'),
(12, '', '', '', '', '', '0000-00-00 00:00:00', '1624462844.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password2` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `password2`, `email`, `role_id`) VALUES
(9, 'admin', 'admin', 'admin', '', 'admin@gmail.com', 1),
(11, 'bintang', 'bintang', '$2y$10$GkCdt7kHLmFdE/tI/xghGeVaN0lDxtTZj0d/03xrRcA', '', 'bintang212@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
