-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 11:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
  `nama` varchar(20) NOT NULL,
  `nik` int(16) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` int(14) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `nik`, `email`, `no_hp`, `kegiatan`, `gambar`) VALUES
(3, 'muhammad al-hafis', 2147483647, 'muhammadalhafis15@gmail.com', 2147483647, 'seminar kp', '1624118000.png'),
(4, 'muhammad al-hafis', 2147483647, 'muhammadalhafis15@gmail.com', 2147483647, 'seminar kp', NULL);

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
(3, 'SELAMAT HARI GURU NASIONAL 2020', '<p>&nbsp;</p>\r\n\r\n<p>Menjadi guru bukanlah pengorbanan.⠀<br />\r\nMenjadi guru adalah sebuah kehormatan.⠀<br />\r\n⠀<br />\r\nIbu dan Bapak Guru telah memilih jalan terhormat, memilih hadir bersama anak-anak kita, bersama para pemilik masa depan Indonesia.⠀<br />\r\nIbu dan Bapak Guru telah mewakili kita menyiapkan masa depan Indonesia.⠀<br />\r\n⠀<br />\r\nSelamat meneruskan pengapdian mulia, selamat menginspirasi, dan selamat hari guru.⠀<br />\r\n⠀<br />\r\n~Anies Baswedan~⠀</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1624125893.jpg'),
(4, 'SELAMAT HARI SUMPAH PEMUDA', '<p>&quot;Sumpah Pemuda bukan sekadar teks sejarah, tetapi seperti kepalan tangan berlumuran darah.</p>\r\n\r\n<p>Meski merasa sakit, tetap banggalah mengatakan &#39;saya Indonesia&#39;.</p>\r\n\r\n<p>Selamat hari Sumpah Pemuda.</p>\r\n\r\n<p>Semoga semangat juang para pemuda 92 tahun lalu tidak akan pernah lekang oleh waktu.&quot;</p>\r\n', '1624126462.jpg'),
(5, 'Tim LPK Pabrik Cerdas CommIT ', '<p>&nbsp;</p>\r\n\r\n<p>Tim Pabrik Cerdas CommIT bersinergi dalam mengembangkan Communication dan IT (CommIT)<br />\r\n<br />\r\n<a href=\"https://www.instagram.com/explore/tags/lpkpabrikcerdascommit/\">#LPKPabrikCerdasCommit</a><br />\r\n<a href=\"https://www.instagram.com/explore/tags/pekanbaru/\">#pekanbaru</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/infopku/\">#infopku</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/pkuinfo/\">#pkuinfo</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/pku/\">#pku</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/pabrik/\">#pabrik</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/cerdas/\">#cerdas</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/pabrikcerdas/\">#pabrikcerdas</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/commit/\">#commit</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/riau/\">#riau</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/digitalmarketing/\">#digitalmarketing</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/inforiau_/\">#inforiau_</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/komunikasi/\">#komunikasi</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/umkmpku/\">#umkmpku</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/animasi/\">#animasi</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/videoediting/\">#videoediting</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/website/\">#website</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/advertising/\">#advertising</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/videografi/\">#videografi</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/design/\">#design</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/komunikasiskill/\">#komunikasiskill</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/umkm/\">#umkm</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/youtuberpku/\">#youtuberpku</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/workshopriau/\">#workshopriau</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/pelatihanpku/\">#pelatihanpku</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/kursuspku/\">#kursusPku</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/workshoppku/\">#workshopPku</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/digital/\">#digital</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/pkuevent/\">#pkuevent</a>&nbsp;<a href=\"https://www.instagram.com/explore/tags/companyprofile/\">#companyprofile</a></p>\r\n', '1624467308.jpg');

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
(8, 'Pelatihan Jaminan Kecelakaan Kerja/Return To Work', '<p><br />\r\nPCC melatih tenaga kerja program Return To Work (RTW) agar siap untuk kembali bekerja&nbsp;<br />\r\n<br />\r\n<br />\r\nInfo lebih lanjut</p>\r\n\r\n<p>bisa WA admin ke nomor dibawah ini ????????????⠀<br />\r\n0831-6726-9058⠀</p>\r\n\r\n<p>Twitter: @sgm_arsc</p>\r\n\r\n<p>FB: Scientific Great Moment</p>\r\n\r\n<p>Website: arsc.tp.ub.ac.id</p>\r\n', 'Rp.10.000', 'Gedung LPK Pabrik Cerdas,Parit Indah', '15 Juni 2021, 10.00 WIB - Selesai', '2021-07-21 21:58:57', '1622689339.jpg'),
(9, 'Pelatihan Video Editing For Kids', '<p>Belajar editing video juga bisa dilakukan oleh anak-anak loh. &nbsp;Ditambah lagi anak-anak akan semakin kreatif dengan menghasilkan karya mereka sendiri. Keren banget kan?&nbsp;<br />\r\n<br />\r\nYuk buruan daftar kan anak-anak anda. Sekarang juga!!<br />\r\n<br />\r\nInformasi lebih lanjut</p>\r\n\r\n<p>bisa kontak ke No dibawah ini WA&nbsp;</p>\r\n\r\n<p>0831-6726-9058 / 0812-771-76993</p>\r\n\r\n<p>Twitter: @sgm_arsc</p>\r\n\r\n<p>FB: Scientific Great Moment</p>\r\n\r\n<p>Website: arsc.tp.ub.ac.id</p>\r\n', 'gratis', 'Gedung LPK Pabrik Cerdas,Parit Indah', '10 Juli 2021, 13.00 WIB - Selesai', '0000-00-00 00:00:00', '1622689373.jpg'),
(10, 'Pelatihan Aplikasi Pekantoran Administrasi', '<p>Pelatihan Komunikasi Skill dan Aplilasi perkantoran bagi peserta RTW<br />\r\ninfo lebih lanjut pelatihan</p>\r\n\r\n<p>&nbsp;WA admin????⠀<br />\r\n0831-6726-9058⠀</p>\r\n', 'gratis', 'Gedung LPK Pabrik Cerdas,Parit Indah', '21 Juli 2021, 14.00 WIB - selesai', '0000-00-00 00:00:00', '1624124809.jpg'),
(11, 'Pelatihan JKK RTW BPJAMSOSTEK⠀', '<p>aaaaa</p>\r\n', 'gratis', 'Gedung LPK Pabrik Cerdas,Parit Indah', '21 Agustus 2021, 14.00 WIB - selesai', '0000-00-00 00:00:00', '1624412770.jpg'),
(12, 'Pelatihan Jaminan Kecelakaan Kerja/Return To Work', '<p>PCC melatih peserta program Jaminan Kecelakaan</p>\r\n\r\n<p>Kerja Return To Work (JKK RTW) BPJAMSOSTEK agar siap untuk bekerja kembali.</p>\r\n\r\n<p>✔️ Kelas Komunikasi Skill<br />\r\n✔️ Kelas Administrasi Perkantoran<br />\r\n<br />\r\n&bull;<br />\r\nYuk Pantengin terus PCC yaa!! ⠀<br />\r\nInfo lebih lanjut bisa WA admin ke nomor ini yaa????????????⠀<br />\r\n0831-6726-9058⠀</p>\r\n', 'Rp.50.000', 'Gedung LPK Pabrik Cerdas,Parit Indah', '28 Agustus 2021, 14.00 WIB - selesai', '0000-00-00 00:00:00', '1624462844.jpg'),
(13, 'Pelatihan Pembuatan dan Pengelolaan Website', '<p>Pelatihan Pembuatan dan Pengelolaan Website⠀<br />\r\n<br />\r\nMau tahu info lebih lanjut pelatihan di PCC?<br />\r\nBisa WA admin ke nomor ini yaa????⠀<br />\r\n0831-6726-9058⠀</p>\r\n', 'Rp.50.000', 'Gedung LPK Pabrik Cerdas,Parit Indah', '1 September 2021,10.00 WIB - selesai', '0000-00-00 00:00:00', '1624465806.jpg'),
(14, 'Pelatihan Broadcast & Monitoring Zoom', '<p>Hybrid offline dan Online dalam kegiatan APINDO menggunakan Software Brodcast<br />\r\n<br />\r\n⠀⠀<br />\r\nMau tahu info lebih lanjut seputar pelatihan di PCC?⠀⠀<br />\r\nYuk ikutan Kelas-kelas Pelatihan di PCC!! ⠀⠀<br />\r\nInfo lebih lanjut bisa WA admin ke nomor ini yaa????????????⠀⠀<br />\r\n0831-6726-9058⠀⠀</p>\r\n', 'gratis', 'Gedung LPK Pabrik Cerdas,Parit Indah', '21 September 2021, 14.00 WIB - selesai', '0000-00-00 00:00:00', '1624466101.jpg'),
(15, 'Pelatihan Manjemen Usaha bagi UMKM', '<p>Pelatihan Manjemen Usaha bagi UMKM (Usaha mikro, kecil, dan menengah) Angkatan I 2K20<br />\r\nBersama Dinas Koperasi, Usaha Kecil dan Menengah Kota Pekanbaru.<br />\r\n&bull; ⠀<br />\r\nMau tahu info lebih lanjut seputar pelatihan di PCC?⠀<br />\r\nYuk ikutan Kelas-kelas Pelatihan di PCC!! ⠀<br />\r\nInfo lebih lanjut bisa WA admin ke nomor ini yaa????????????⠀<br />\r\n0831-6726-9058⠀</p>\r\n', 'Rp.20.000', 'Gedung LPK Pabrik Cerdas,Parit Indah', '30 September 2021, 11.00 WIB - selesai', '0000-00-00 00:00:00', '1624466291.jpg'),
(16, 'Workshop Online ', '<p>Workshop Online &quot;Menjadi Entrepreneur Muda&quot;<br />\r\n<br />\r\nOleh Pabrik Cerdas Commit .<br />\r\n.<br />\r\n✔️Dirancang berdasarkan diskusi permasalahan peserta, analisa pembuatan proposal selama ini, pengalaman membuka usaha yang dilalui, hasil penelitian-penelitian. .<br />\r\n✔️Kombinasi Teori dan Praktek membuat proposal lengkap membuka usaha</p>\r\n', 'gratis', 'Live Langsung Instagram LPK Pabrik Cerdas CommIT', '5 Oktober 2021, 14.00 WIB - selesai', '0000-00-00 00:00:00', '1624466524.jpg'),
(17, 'Pelatihan Jaminan Kecelakaan Kerja/Return To Work', '<p>aaaaaa</p>\r\n', 'gratis', 'Gedung LPK Pabrik Cerdas,Parit Indah', '21 Juli 2021, 14.00 WIB - selesai', '2022-07-15 15:00:00', '1624885791.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `password2`, `email`, `role_id`) VALUES
(4, 'muhammad al-hafis', 'alhafis15', '$2y$10$ECFXYnvAsyThNkviHadile9vNR0Jnh54kTKZnVTF/oe', '', 'muhammadalhafis15@gmail.com', 2),
(5, 'budi', 'budi', '$2y$10$LH89NjUayIMkZySRLLnr3e4UV6JNJEhlKmHnejlJxnF', '', 'budi@gmail.com', 2),
(6, 'budi', 'budi', '$2y$10$cKZDY5lQl6qqwbl9YqeGqu5lOdryG/Jxlgtbjy26hpF', '', 'budi@gmail.com', 2),
(7, 'darso', 'darso', '$2y$10$wWpcGn88vavLCLPGF3cXDuXMXoIrV2HUtuoWwJZ30lr', '', 'darso11@gmail.com', 2),
(8, 'toni', 'toni', '$2y$10$r7YEW5VTlWLfo8ZZFCXcyenqlFaUbhn4f.k07TsmV0U', '', 'tono@gmail.com', 2),
(9, 'admin', 'admin', 'admin', '', 'admin@gmail.com', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
