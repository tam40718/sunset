-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 11:18 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elecomp_resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_nama` varchar(50) DEFAULT NULL,
  `admin_username` varchar(100) DEFAULT NULL,
  `admin_password` varchar(32) DEFAULT NULL,
  `admin_view_password` varchar(32) DEFAULT NULL,
  `admin_level` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_nama`, `admin_username`, `admin_password`, `admin_view_password`, `admin_level`) VALUES
(1, 'admin', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `form_kontak`
--

CREATE TABLE `form_kontak` (
  `id_form` int(11) NOT NULL,
  `nama_form` varchar(100) NOT NULL,
  `email_form` varchar(100) NOT NULL,
  `pesan_form` text NOT NULL,
  `tgl_form` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_kontak`
--

INSERT INTO `form_kontak` (`id_form`, `nama_form`, `email_form`, `pesan_form`, `tgl_form`) VALUES
(1, 'ada', 'edwinlaksono12@gmail.com', 'da', '0000-00-00'),
(2, '0', '0', '0', '2018-03-21'),
(3, '0', '0', '0', '2018-03-21'),
(4, '0', '0', '0', '2018-03-21'),
(5, '0', '0', '0', '2018-03-21'),
(6, 'ali', 'imokhammadali2@gmail.com', 'asdasd', '2018-03-21'),
(7, 'ali', 'imokhammadali2@gmail.com', 'asdasd', '2018-03-21'),
(8, 'asdasd', 'imokhammadali2@gmail.com', 'xzczxczxc', '2018-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE `mainmenu` (
  `seq` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `active_menu` varchar(50) NOT NULL,
  `icon_class` varchar(50) NOT NULL,
  `link_menu` varchar(50) NOT NULL,
  `menu_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`seq`, `idmenu`, `nama_menu`, `active_menu`, `icon_class`, `link_menu`, `menu_akses`, `entry_date`, `entry_user`) VALUES
(1, 1, 'Dashboard', '', 'menu-icon fa fa-tachometer', 'Home', '', '2017-10-17 17:28:54', NULL),
(8, 8, 'Administrator', '', 'menu-icon fa fa-user', '#', '', '2017-10-13 17:57:17', NULL),
(2, 2, 'Slider', '', 'menu-icon fa fa-file-image-o', 'Slider', '', '2017-10-17 17:28:56', NULL),
(3, 3, 'About', '', 'menu-icon fa fa-newspaper-o', 'About', '', '2017-10-17 17:29:00', NULL),
(4, 4, 'Produk', '', 'menu-icon fa fa-briefcase', 'Produk', '', '2017-10-17 17:29:05', NULL),
(5, 5, 'Gallery', '', 'menu-icon fa fa-file-image-o', 'Gallery', '', '2017-10-17 17:29:09', NULL),
(6, 6, 'Kontak', '', 'menu-icon fa fa-book', 'Kontak', '', '2017-10-17 17:29:11', NULL),
(7, 7, 'Video', '', 'menu-icon fa fa-film', 'Video', '', '2017-10-26 21:02:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id_sub` int(11) NOT NULL,
  `nama_sub` varchar(50) NOT NULL,
  `mainmenu_idmenu` int(11) NOT NULL,
  `active_sub` varchar(20) NOT NULL,
  `icon_class` varchar(100) NOT NULL,
  `link_sub` varchar(50) NOT NULL,
  `sub_akses` varchar(12) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id_sub`, `nama_sub`, `mainmenu_idmenu`, `active_sub`, `icon_class`, `link_sub`, `sub_akses`, `entry_date`, `entry_user`) VALUES
(1, 'Entry User', 8, '', '', 'User', '', '2017-10-17 17:28:25', NULL),
(2, 'Kategori Produk', 4, '', '', 'Produk', '', '2017-10-17 17:34:17', NULL),
(3, 'Produk', 4, '', '', 'Produk/detail', '', '2018-02-06 04:33:07', NULL),
(4, 'Album', 5, '', '', 'Gallery', '', '2017-10-17 17:34:34', NULL),
(5, 'Foto', 5, '', '', 'Gallery/foto', '', '2018-02-06 04:27:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tab_akses_mainmenu`
--

CREATE TABLE `tab_akses_mainmenu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT '0',
  `r` int(11) DEFAULT '0',
  `u` int(11) DEFAULT '0',
  `d` int(11) DEFAULT '0',
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_akses_mainmenu`
--

INSERT INTO `tab_akses_mainmenu` (`id`, `id_menu`, `id_level`, `c`, `r`, `u`, `d`, `entry_date`, `entry_user`) VALUES
(1, 1, 1, NULL, 1, NULL, NULL, '2017-09-25 16:49:01', 'direktur'),
(2, 8, 1, 0, 0, 0, 0, '2017-10-18 18:47:26', ''),
(3, 2, 1, 0, 1, 0, 0, '2017-10-13 19:29:46', ''),
(4, 3, 1, 0, 1, 0, 0, '2017-10-14 14:31:55', ''),
(5, 4, 1, 0, 1, 0, 0, '2017-10-15 19:22:01', ''),
(6, 5, 1, 0, 1, 0, 0, '2017-10-15 19:24:32', ''),
(7, 6, 1, 0, 1, 0, 0, '2017-10-18 18:47:15', ''),
(8, 7, 1, 0, 1, 0, 0, '2017-10-26 20:52:10', '');

-- --------------------------------------------------------

--
-- Table structure for table `tab_akses_submenu`
--

CREATE TABLE `tab_akses_submenu` (
  `id` int(11) NOT NULL,
  `id_sub_menu` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `c` int(11) DEFAULT '0',
  `r` int(11) DEFAULT '0',
  `u` int(11) DEFAULT '0',
  `d` int(11) DEFAULT '0',
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `entry_user` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_akses_submenu`
--

INSERT INTO `tab_akses_submenu` (`id`, `id_sub_menu`, `id_level`, `c`, `r`, `u`, `d`, `entry_date`, `entry_user`) VALUES
(1, 1, 1, 0, 1, 0, 0, '2017-10-13 17:45:40', ''),
(2, 2, 1, 0, 1, 0, 0, '2017-10-15 22:59:02', ''),
(3, 3, 1, 0, 0, 0, 0, '2017-10-18 04:12:32', ''),
(4, 4, 1, 0, 1, 0, 0, '2017-10-15 22:59:16', ''),
(5, 5, 1, 0, 0, 0, 0, '2017-10-18 04:12:33', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id_about` int(11) NOT NULL,
  `about_logo` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `about_judul` varchar(100) NOT NULL,
  `about_deskripsi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `about_deskripsi2` text NOT NULL,
  `about_video` text NOT NULL,
  `about_cover` text NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `about_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `about_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `about_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id_about`, `about_logo`, `about_judul`, `about_deskripsi`, `about_deskripsi2`, `about_video`, `about_cover`, `id_admin`, `about_title_meta`, `about_deskripsi_meta`, `about_keyword_meta`) VALUES
(1, 'lab_1521586085.jpg', 'Resort', '<p>Resort Batu ....</p>', '<p>Sejuk, Aman, Nyaman ....</p>', 'https://www.youtube.com/embed/kUlyFOBT_sw', 'cab_1521585914.jpg', 1, 'Tentang Resort Batu', '<p>Resort Batu adalah....</p>', 'Resort, Batu, Malang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_album`
--

CREATE TABLE `tb_album` (
  `id_album` int(11) NOT NULL,
  `album_nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `album_gambar` varchar(200) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `album_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `album_deskripsi_meta` varchar(200) DEFAULT NULL,
  `album_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_album`
--

INSERT INTO `tb_album` (`id_album`, `album_nama`, `album_gambar`, `id_admin`, `album_title_meta`, `album_deskripsi_meta`, `album_keyword_meta`) VALUES
(2, 'Promo', '1.jpg', 1, 'Promo Cakra Tour Pro', '<p>Promo Tour, Cakra Tour Pro, Tour Wisata, Malang Bali Lombok</p>', 'Promo Tour, Cakra Tour Pro, Tour Wisata, Malang Bali Lombok'),
(3, 'Jatim', 'Jatim.jpg', 1, 'Jatim', '<p>Jatim</p>', 'Jatim'),
(4, 'Bali', 'Bali.jpg', 1, 'Bali ', '<p>Bali</p>', 'Bali'),
(5, 'Lombok', 'Lombok.jpg', 1, 'Lombok', '<p>Lombok</p>', 'Lombok');

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto`
--

CREATE TABLE `tb_foto` (
  `id_gallery` int(11) NOT NULL,
  `gallery_nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gallery_gambar` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_album` int(11) DEFAULT NULL,
  `gallery_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gallery_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `gallery_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_foto`
--

INSERT INTO `tb_foto` (`id_gallery`, `gallery_nama`, `gallery_gambar`, `id_admin`, `id_album`, `gallery_title_meta`, `gallery_deskripsi_meta`, `gallery_keyword_meta`) VALUES
(22, 'Promo 1', '1.jpg', 1, 2, 'Promo 1', '<p>Promo 1</p>', 'Promo 1 '),
(23, 'Promo 2', '2.jpg', 1, 2, 'Promo 2', '<p>Promo 2</p>', 'Promo 2'),
(24, 'Jatim 1', 'fj2.jpg', 1, 3, 'Jatim 1', '<p>Jatim 1</p>', 'Jatim 1'),
(25, 'Jatim 2', 'fj3.jpg', 1, 3, 'Jatim 2', '<p>Jatim 2</p>', 'Jatim 2'),
(26, 'Jatim 3', 'fj4.jpg', 1, 3, 'Jatim 3', '<p>Jatim 3</p>', 'Jatim 3'),
(27, 'Bali 1', 'fb1.jpg', 1, 4, 'Bali 1', '<p>Bali1</p>', 'Bali 1'),
(28, 'Bali 2', 'fb3.jpg', 1, 4, 'Bali 2', '<p>Bali2</p>', 'Bali 2'),
(29, 'Bali 3', 'fb4.jpg', 1, 4, 'Bali 3', '<p>Bali3</p>', 'Bali 3'),
(30, 'Lombok 1', 'fl2.jpg', 1, 5, 'Lombok 1', '<p>Lombok1</p>', 'Lombok 1'),
(31, 'Lombok 2', 'fl3.jpg', 1, 5, 'Lombok 2', '<p>Lombok2</p>', 'Lombok 2'),
(32, 'Lombok 3', 'fl4.jpg', 1, 5, 'Lombok 3', '<p>Lombok3</p>', 'Lombok 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_produk`
--

CREATE TABLE `tb_kategori_produk` (
  `id_produk` int(11) NOT NULL,
  `produk_utama` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `produk_gambar` varchar(200) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `produk_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `produk_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `produk_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori_produk`
--

INSERT INTO `tb_kategori_produk` (`id_produk`, `produk_utama`, `produk_gambar`, `id_admin`, `produk_title_meta`, `produk_deskripsi_meta`, `produk_keyword_meta`) VALUES
(1, 'Bali Lombok Tour 4 Hari 3 Malam', '3.jpg', 1, 'Bali Lombok Tour 4 Hari 3 Malam', '<p><strong>Bali Lombok Tour 4 Hari 3</strong></p>\r\n<p><strong>Malam</strong></p>', 'Bali Lombok Tour 4 Hari 3 Malam'),
(2, 'Bali 4 Hari 3 Malam', 'Bali_4_Hari_3_Malam.jpg', 1, 'Bali 4 Hari 3 Malam', '<p>Bali 4 Hari 3 Malam</p>', 'Bali 4 Hari 3 Malam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(11) NOT NULL,
  `kontak_lat` varchar(100) DEFAULT NULL,
  `kontak_long` varchar(100) DEFAULT NULL,
  `kontak_deskripsi` text,
  `kontak_judul` varchar(30) DEFAULT NULL,
  `kontak_alamat` text NOT NULL,
  `kontak_telepon` varchar(15) NOT NULL,
  `kontak_email` varchar(100) NOT NULL,
  `kontak_subheading` varchar(100) NOT NULL,
  `kontak_title_meta` varchar(200) DEFAULT NULL,
  `kontak_deskripsi_meta` text,
  `kontak_keyword_meta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `kontak_lat`, `kontak_long`, `kontak_deskripsi`, `kontak_judul`, `kontak_alamat`, `kontak_telepon`, `kontak_email`, `kontak_subheading`, `kontak_title_meta`, `kontak_deskripsi_meta`, `kontak_keyword_meta`) VALUES
(1, '-7.9435543', '112.6279327', '<p>Berikut kontak yang bisa dihubungi.</p>', 'Jl. Blimbing', '<p>Batu Malang</p>', '081234567890', 'resort@gmail.com', 'Jika anda memiliki pertanyaan jangan ragu untuk menghubungi kami.', 'resot', '<p>resot</p>', 'resot');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_detail` int(11) NOT NULL,
  `detail_judul` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_deskripsi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `detail_gambar` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_produk` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_title_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_deskripsi_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `detail_keyword_meta` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_detail`, `detail_judul`, `detail_deskripsi`, `detail_gambar`, `id_admin`, `id_produk`, `detail_title_meta`, `detail_deskripsi_meta`, `detail_keyword_meta`) VALUES
(1, 'HARI 01, Tiba Di Bali  – Tanjung Benoa – Uluwatu – GWk – Jimbaran  ( – / – / Mm )', '<p>Setibanya Dibali , Para pesera kami jemput di bandara ngurah Rai Bali / terminal , menuju&nbsp; tour tanjung Benoa , tanjung Benoa adalah Pusat water sport terbesar di bali , anda bias menyebrangi pulau untuk menuju Pulau Penyu , bermain parasailing , banana boat , jet sky , flying fish , diving dan lain lain tentunya dengan biaya sendiri , Setelah Selesai bermain dan makan siang tour dilanjutkan menuju&nbsp; Uluwatu , Pura yg ada di atas tebing Bukit Unggasan Setelah Itu menuju Garuda Wisnu Kencana , Tour mengelilingi GWK juga&nbsp; Menonton Kecak yang disajikan setiap hari di GWK sebagai regular event, Dan Makan Malam Di Jimbaran dengan menu seafood . Setelah Selesai makan Malam ,Kita menuju Tempat oleh2 yaitu Krisna kemudian peserta kami antar menuju Hotel Untuk cek in dan beristirahat.</p>', '10.jpg', 1, '1', 'HARI 01, Tiba Di Bali  – Tanjung Benoa – Uluwatu – GWk – Jimbaran  ( – / – / Mm )', '<p>Setibanya Dibali , Para pesera kami jemput di bandara ngurah Rai Bali / terminal , menuju&nbsp; tour tanjung Benoa , tanjung Benoa adalah Pusat water sport terbesar di bali , anda bias menyebrangi ', 'HARI 01, Tiba Di Bali  – Tanjung Benoa – Uluwatu – GWk – Jimbaran  ( – / – / Mm )'),
(2, 'HARI 02, Kintamani Tour – Mataram ( Mp / Ms / Mm )', '<p>Sarapan Pagi di hotel , Tour hari ini kita mulai dengan menuju batu Bulan&nbsp; menuju desa celuk dan mas , wisata rumah batik bali Di Galuh dan belanja oleh2 khas bali ,juga perak bali , setelah itu menuju Gunung Batur Kintamani Untuk Makan Siang di Resto Batur Indah. Selesai makan siang kita menuju Tirta Empul / tampak Siring , tempat&nbsp; pemandian yg terdapat 7 sumber mata air yg dipercaya bias menyembuhkan segala macam penyakit dan bisa membuat awet muda setelah itu beranjak menuju pasar seni Sukawati , anda bisa berbelanja aneka baju2 khas bali , Jika waktunya mencukupi kita beranjak menuju Tanah lot , anda bisa menikmati&nbsp; indahnya Pemandangan suatu Pura yang ada Ditengah tengah laut yang mempunyai sumber mata Air tawar didalamnya. Menuju Bandara untuk penerbangan ke mataram (Tiket pesawat tidak disediakan). Tiba di&nbsp; Mataram, para peserta di jemput dan selanjutnya di antar menuju hotel untuk check in, acara bebas sampai di jemput makan malam di local restorant.</p>', '12.jpg', 1, '1', 'HARI 02, Kintamani Tour – Mataram ( Mp / Ms / Mm )', '<p>Sarapan Pagi di hotel , Tour hari ini kita mulai dengan menuju batu Bulan&nbsp; menuju desa celuk dan mas , wisata rumah batik bali Di Galuh dan belanja oleh2 khas bali ,juga perak bali , setelah i', 'HARI 02, Kintamani Tour – Mataram ( Mp / Ms / Mm )'),
(4, 'HARI 03, Gili Trawangan Tour ( Mp / Ms / Mm )', '<p>Setelah sarapan hotel, peserta di jemput, dan selanjutnya di antar Mengunjungi:&nbsp;Bukit Malimbu&nbsp;yang sangat terkenal dengan keindahan pemandangan alam pantai, gunung, bukit dan lembah yang sangat menakjubkan,&nbsp;Bangsal, pelabuhan tempat penyebrangan menuju ke Gili Trawangan.&nbsp;Gili Trawangan&nbsp;pulau dengan pantai berpasir putih serta taman lautnya yang sangat indah, sangat cocok untuk snorkeling, menyelam atau bersantai dipinggir pantai. Gili ini merupakan Gili yang paling besar diantara Gili Air dan Meno dengan jarak tempuh sekitar &plusmn;40 menit dari pelabuhan Bangsal menggunakan traditional boat. Kembali dari Gili singgah di&nbsp;Pusuk&nbsp;daerah pegunungan yang berhawa sejuk dengan pemandangan yang indah dan kera-kera hutan yang turun kejalan untuk mencari makan.</p>', '9.jpg', 1, '1', 'HARI 03, Gili Trawangan Tour ( Mp / Ms / Mm )', '<p>Setelah sarapan hotel, peserta di jemput, dan selanjutnya di antar Mengunjungi:&nbsp;Bukit Malimbu&nbsp;yang sangat terkenal dengan keindahan pemandangan alam pantai, gunung, bukit dan lembah yang<', 'HARI 03, Gili Trawangan Tour ( Mp / Ms / Mm )'),
(5, 'HARI 04, Sasak Tour + Transfer Out  (Mp / Ms / – )', '<p>Setelah sarapan hotel, peserta di jemput, dan selanjutnya di antar untuk mengikuti&nbsp; Sasak Tour&nbsp;dengan mengunjunggi&nbsp;desa&nbsp;Banyumulek&nbsp;desa kerajinan gerabah tanah liat,&nbsp;Sukarara, sebuah desa yang menjadi pusat KerajinanTenun kain dan Double Ikat asli suku Sasak. Setelah puas menyaksikan keunikan desa desa tersebut, kita akan beranjak menujuPantai Kuta Lombok&nbsp;yang dikenal dengan sebutan&nbsp;Pantai Putri Nyale, ini adalah merupakan salah satu pantai yang terindah dan tetap alami di pulau ini, kemudian tak lupa kita akan menyaksikan keindahan lain dari sebuah pantai, yaitu pantai&nbsp;Tanjung Aan, berjarak kurang lebih 5 Km dr Pantai Kuta, sebuah pantai dengan hamparan pasir putihnya yang begitu mempesona serta kebersihan air lautnya yang sebening kristal.(Makan siang dan kuta indah restorant) dan selanjutnya menuju Desa&nbsp;Rambitan/Sade&nbsp;adalah&nbsp;desa tradisional&nbsp;yang masih teguh memegang adat istiadat serta tradisis suku mereka, kemudian diantar menuju Bandara untuk penerbangan selanjutnya dan Tour bersama&nbsp;<strong>CAKRA TOUR</strong>&nbsp;selesai.</p>', '15.jpg', 1, '1', 'HARI 04, Sasak Tour + Transfer Out  (Mp / Ms / – )', '<p><strong></strong>Setelah sarapan hotel, peserta di jemput, dan selanjutnya di antar untuk mengikuti&nbsp; Sasak Tour&nbsp;dengan mengunjunggi&nbsp;desa&nbsp;Banyumulek&nbsp;desa kerajinan gerabah t', 'HARI 04, Sasak Tour + Transfer Out  (Mp / Ms / – )'),
(6, 'HARI 01, Tiba Di Bali  -Uluwatu – Dreamland – GWk – Jimbaran                                       ', '<p>Setibanya Dibali , Para pesera kami jemput di bandara ngurah Rai Bali kemudian langsung kami antar untuk tour Uluwatu , Pura yg ada di atas tebing Bukit Unggasan , kemudian Beranjak menuju Pantai Dreamland Dan Setelah Itu menuju Garuda Wisnu Kencana Untuk Menonton Kecak Dan Makan Malam Di Sajikan Di Jimbaran Dengan menu Seafood . Setelah Selesai makan Malam ,peserta kami antar menuju Hotel Untuk cek in dan beristirahat.&nbsp;( &ndash; / &ndash; / makan malam )</p>', '8.jpg', 1, '2', 'HARI 01, Tiba Di Bali  -Uluwatu – Dreamland – GWk – Jimbaran                                       ', '<p>Setibanya Dibali , Para pesera kami jemput di bandara ngurah Rai Bali kemudian langsung kami antar untuk tour Uluwatu , Pura yg ada di atas tebing Bukit Unggasan , kemudian Beranjak menuju Pantai D', 'HARI 01, Tiba Di Bali  -Uluwatu – Dreamland – GWk – Jimbaran                                       '),
(7, 'HARI 02, Celuk mas – Kintamani – Tirta Empul – Sukawati', '<p>Sarapan Pagi di hotel , Tour hari ini kita mulai dengan menuju batu Bulan&nbsp; menuju desa celuk dan mas, wisata rumah batik bali dan belanja oleh2 khas bali ,juga perak bali , setelah itu menuju Gunung Batur Kintamani Untuk Makan Siang di Resto Batur Indah. Selesai makan siang kita menuju Tirta Empul / tampak Siring, tempat&nbsp; pemandian yg terdapat 7 sumber mata air yg dipercaya bias menyembuhkan segala macam penyakit setelah itu beranjak menuju pasar seni Sukawati , anda bias berbelanja aneka baju2 khas bali , makan malam kami Sajikan di Lokal resto . Acara selesai ,peserta kami antar ke Hotel dan beristirahat.&nbsp;<strong>&nbsp;</strong>( makan pagi / makan siang / makan malam )</p>', '19.jpg', 1, '2', 'HARI 02, Celuk mas – Kintamani – Tirta Empul – Sukawati', '<p>Sarapan Pagi di hotel , Tour hari ini kita mulai dengan menuju batu Bulan&nbsp; menuju desa celuk dan mas, wisata rumah batik bali dan belanja oleh2 khas bali ,juga perak bali , setelah itu menuju ', 'HARI 02, Celuk mas – Kintamani – Tirta Empul – Sukawati'),
(8, 'HARI 03, Bedugul – alas kedaton – Tanah Lot', '<p>Selesai sarapan pagi Di Hotel , Perjalanan kita mulai tour menuju Bedugul,mampir belanja di joger pabrik kata kata lalu menuju Pura ulundanu&nbsp;&nbsp; disana kita bisa menikmatin indah pemandangan alam dan danau beratan lalu menikmati makan siang disajikan di Local Restaurant, setelah itu kita mengunjungi Hutan kera atau disebut Pura Alas Kedaton, dimana disana pura yang dijaga oleh ribuan kera. Beranjak dari Alas Kedaton, kita mengunjungi Pura Tanah Lot, dimana dipura ini berada ditengah laut dan dibawah pura ini ada goa yang mengeluarkan air tawar dmn air ini diyakini bisa mambuat awet muda. Makan Malam Di local resto , setelah itu Peserta kami antar ke hotel untuk beristrihat.&nbsp;( makan pagi / makan siang / makan malam )</p>', '17.jpg', 1, '2', 'HARI 03, Bedugul – alas kedaton – Tanah Lot', '<p>Selesai sarapan pagi Di Hotel , Perjalanan kita mulai tour menuju Bedugul,mampir belanja di joger pabrik kata kata lalu menuju Pura ulundanu&nbsp;&nbsp; disana kita bisa menikmatin indah pemandanga', 'HARI 03, Bedugul – alas kedaton – Tanah Lot'),
(9, 'HARI 04, Tanjung benoa – Transfer Out', '<p>Selesai sarapan pagi Di Hotel , Bersiap siap packing untuk cek out dari Hotel kemudian kita mulai untuk tour tanjung Benoa , tanjung Benoa Pusat water sport terbesar di bali , anda bias menyebrangi pulau untuk menuju Pulau Penyu , bermain parasailing , banana boat , jet sky , flying fish , diving dan lain lain tentunya dengan biaya sendiri , makan siang setelah selesai sampai waktunya&nbsp; Peserta Kami antar Menuju bandara Ngurah Rai untuk kembali Ke kota Asal , maka selesailah tour kita kali ini bersama&nbsp;CAKRA Tour&nbsp;&ndash; TOUR SELESAI.&nbsp;( makan pagi / makan siang / &ndash; )</p>', '3.jpg', 1, '2', 'HARI 04, Tanjung benoa – Transfer Out', '<p>Selesai sarapan pagi Di Hotel , Bersiap siap packing untuk cek out dari Hotel kemudian kita mulai untuk tour tanjung Benoa , tanjung Benoa Pusat water sport terbesar di bali , anda bias menyebrangi', 'HARI 04, Tanjung benoa – Transfer Out');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `slider_judul` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `slider_deskripsi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `slider_gambar` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `slider_judul`, `slider_deskripsi`, `slider_gambar`, `id_admin`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.', 'slider1.jpg', 1),
(3, 'Lorem ipsum dolor sit amet', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.', 'slider2.jpg', 1),
(4, 'Lorem ipsum dolor sit amet', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.', 'slider3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `foto`) VALUES
(0, 'ew', 'edwin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_video`
--

CREATE TABLE `tb_video` (
  `id_video` int(11) NOT NULL,
  `video_judul` varchar(30) DEFAULT NULL,
  `video_deskripsi` varchar(200) DEFAULT NULL,
  `frame_video` text,
  `video_title_meta` varchar(200) DEFAULT NULL,
  `video_keyword_meta` varchar(200) DEFAULT NULL,
  `video_deskripsi_meta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_video`
--

INSERT INTO `tb_video` (`id_video`, `video_judul`, `video_deskripsi`, `frame_video`, `video_title_meta`, `video_keyword_meta`, `video_deskripsi_meta`) VALUES
(1, 'Tata Janeta', 'Risalah Hati', '<iframe width="560" height="315" src="https://www.youtube.com/embed/C0HFlLxS3j0" frameborder="0" allowfullscreen></iframe>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type_name`) VALUES
(1, 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `form_kontak`
--
ALTER TABLE `form_kontak`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`seq`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `tab_akses_mainmenu`
--
ALTER TABLE `tab_akses_mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_akses_submenu`
--
ALTER TABLE `tab_akses_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_kategori_produk`
--
ALTER TABLE `tb_kategori_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `form_kontak`
--
ALTER TABLE `form_kontak`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `seq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tab_akses_mainmenu`
--
ALTER TABLE `tab_akses_mainmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tab_akses_submenu`
--
ALTER TABLE `tab_akses_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_foto`
--
ALTER TABLE `tb_foto`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_kategori_produk`
--
ALTER TABLE `tb_kategori_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
