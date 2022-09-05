-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 04:20 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediars`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_kategori_pg` int(11) DEFAULT NULL,
  `id_kategori_vg` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `hargaasal` int(11) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `alamat` varchar(225) NOT NULL,
  `gambar` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `id_kategori`, `id_kategori_pg`, `id_kategori_vg`, `harga`, `hargaasal`, `deskripsi`, `alamat`, `gambar`) VALUES
(13, 'Kepo Lo', 7, 0, 0, 189000, 325000, 'Seminar MLM GAS !\r\n', 'Jatinangor\r\n', 'avatar4.png'),
(14, 'Satriawan Putra Tri', 6, 0, 0, 170000, 200000, 'abidoonsodpnsofnasonfoanfonaf', 'Bali', 'avatar3.png'),
(15, 'Angel Side Putra', 8, 0, 0, 500000, 1000000, 'aokwoaowaowka', 'Surabaya', 'avatar2.png'),
(17, 'Dark Side Putra', 10, 0, 0, 696596, 325000, 'khlklk', 'Jakarta\r\n', 'avatar1.png'),
(18, 'Tri Putra Satriawan ', 13, 0, 0, 100000, 150000, 'Jago Mc Kayak Pak Tarno', 'Bandung\r\n', 'avatar.png'),
(19, 'Putra AA', 6, 0, 0, 100000, 1500000, 'Bagus', 'Jatinangor', 'avatar6.png'),
(20, 'Putra MC KECE', 8, 0, 0, 100000, 1500000, 'MC SEMINAR MLM JUGA BISA', 'Lingga Jaya', 'avatar11.png'),
(21, 'Tri Putra Satriawan Jadi Vo2', 9, 0, 0, 100000, 50000, 'Tunangan', 'Jatinnagor', 'avatar7.png'),
(22, 'Tri Putra Satriawan', 9, 0, 0, 100000, 10000, 'efedf', 'feef', 'avatar14.png'),
(23, 'Tri Putra Satriawan pg jelek', 9, 3, 0, 100000, 10000, 'gfgf', 'fgfg', 'avatar24.png'),
(24, 'Tri Putra Satriawan pg jelek hghgh', 10, 3, 0, 10000, 10000, 'hghghgh', 'hghgh', 'avatar9.png'),
(25, 'Tri Putra SatriawanFDFD', 14, 3, 0, 100000, 10000, 'DSD', 'SDS', 'avatar10.png'),
(26, 'Aniza LAHIR DI BULAN OKTOBER', 8, 1, 0, 5000, 5500, 'Oke lah', 'Nigeria', 'IMG_2643_(2)1.jpg'),
(27, 'Test MC', 9, 0, 0, 100000, 1500000, 'DFDFDF', 'DFDFD', 'avatar15.png'),
(28, 'PG BOS ghgh', 13, 6, 3, 100000, 1500000, 'Baguss', 'Lingga Jaya', 'Notifications_Monochromatic.png'),
(30, 'Aniza oktavia ', 13, 8, 1, 100000, 150000, 'Tentang : \r\nSeorang mahasiswa semester 6 yang memiliki minat di bidang public relation salah satunya menjadi MC hhhgghg\r\n\r\nPengalaman : \r\nPernah menjadi Memandu acara di event A\r\nPernah menjadi Memandu acara di webinar A\r\n', ' Antapani, bandung\r\n', 'WhatsApp_Image_2022-03-23_at_23_08_20.jpeg'),
(31, 'Aniza oktavia 2', 9, 9, 2, 10000, 1000000, 'Bagus\r\n\r\nbgt', 'dimana aja', 'WhatsApp_Image_2022-03-23_at_23_08_201.jpeg'),
(32, 'Tri Putra Satriawan OKQOWKQWK', 10, 9, 2, 10000, 50000, 'vbvbv', 'bvb', '4x6copy1.jpg'),
(33, 'Tri Putra Satriawan OKQOWKQWK', 10, 8, 1, 10000, 50000, '7uyt', 'uyu', 'babehiwann3.jpeg'),
(34, 'Tri Putra Satriawan OKQOWKQWK', 10, 9, 3, 100000, 1500000, 'dfdf', 'dgd', 'babehiwann4.jpeg'),
(35, 'Tri Putra Satriawan mmmmm', 9, 7, 3, 100000, 1000000, 'ghh\r\nhghgh', 'ghgh', 'avatar18.png'),
(36, 'Tri Putra Satriawan vbhgbghb', 10, 8, 2, 10000, 1500000, 'ghgh', 'hghg', 'avatar19.png'),
(37, 'GFG', 6, 6, 2, 1212, 1212, 'bgb', 'gbgb', 'avatar28.png'),
(38, 'Tri Putra Satriawan OKQOWKQWK', NULL, 8, NULL, 10000, 50000, 'vfcv', 'cvcv', 'avatar29.png'),
(40, 'Femmy Novica Ramadanis', 13, 9, 3, 400000, 500000, 'Pengalaman MC \r\nMC acara seperti maulid nabi,MC seminar \r\n\r\nPengalaman Lomba \r\n1.Juara 3 pidato putri ,KBB\r\n2.Juara 1 puisi berturut turut ,Tahun 2017,2019,2020\r\n3.Juara 1 Putri muslimah KBB\r\n4.Juara 3 Debat ,KBB\r\n5.Kompetisi Run 5k,Avik sport Wear \r\n6.Run 10K,tahun 2021\r\n7.Duta Genre kecamatan Batujajar ,kategori Favorit sebagai Motivator terbaik tahun 2022\r\n\r\nHobby \r\nOlahraga', 'Batujajar', 'WhatsApp_Image_2022-03-30_at_11_51_32.jpeg'),
(47, 'fdff', NULL, NULL, 2, 4545, 545, 'gfg', 'fgfg', 'DSC_0090_copy4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
(1, 1, 'gambar 1', 'gambar1 (1).png'),
(2, 1, 'gambar 2', 'gambar1 (2).png'),
(3, 1, 'gambar 3', 'gambar1 (3).png'),
(4, 1, 'gambar 4', 'gambar1 (4).png'),
(10, 2, 'gambar 2', 'E_10.PNG'),
(12, 13, 'gambar 1', 'WhatsApp_Image_2021-07-30_at_00_23_18_(1).jpeg'),
(13, 13, 'gambar 2 ', 'WhatsApp_Image_2021-07-30_at_00_23_18_(2).jpeg'),
(14, 13, 'gambar 3 ', 'WhatsApp_Image_2021-07-30_at_00_23_18_(3).jpeg'),
(15, 18, 'portofolio ', 'cv.JPG'),
(16, 21, 'portofolio ', 'cv1.JPG'),
(17, 26, 'portofolio ', 'avatar.png'),
(18, 30, 'portofolio ', 'cvaniza.JPG'),
(19, 30, 'gamba1', 'WhatsApp_Image_2022-03-23_at_21_20_32.jpeg'),
(20, 30, 'gamba2', 'WhatsApp_Image_2022-03-23_at_21_20_32_(1).jpeg'),
(21, 32, 'porto', '1600844394702.mp4'),
(22, 40, 'portofolio ', 'WhatsApp_Image_2022-03-30_at_11_54_12.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar_photo`
--

CREATE TABLE `tbl_gambar_photo` (
  `id_gambar_pg` int(11) NOT NULL,
  `id_photo` int(11) NOT NULL,
  `ket_photo` varchar(255) DEFAULT NULL,
  `gambar_pg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(6, 'Mc Workshop'),
(7, 'Mc Seminar'),
(8, 'Mc Webinar '),
(9, 'Mc Tunangan'),
(10, 'Mc Pernikahan'),
(13, 'Mc Ulang Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_pg`
--

CREATE TABLE `tbl_kategori_pg` (
  `id_kategori_pg` int(225) NOT NULL,
  `nama_kategori_pg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_pg`
--

INSERT INTO `tbl_kategori_pg` (`id_kategori_pg`, `nama_kategori_pg`) VALUES
(5, 'Wedding photography'),
(6, 'Commercial Advertising Photography'),
(7, 'Food Photography'),
(8, ' Fashion Photography'),
(9, ' Journalism Photography');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_vg`
--

CREATE TABLE `tbl_kategori_vg` (
  `id_kategori_vg` int(11) NOT NULL,
  `nama_kategori_vg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_vg`
--

INSERT INTO `tbl_kategori_vg` (`id_kategori_vg`, `nama_kategori_vg`) VALUES
(1, 'video jelek'),
(2, 'video bagus\r\n\r\n'),
(3, 'video sedang pedes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `id_photo` int(11) NOT NULL,
  `nama_photo` varchar(255) DEFAULT NULL,
  `id_kategori_pg` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `hargaasal` int(11) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `alamat` varchar(225) NOT NULL,
  `gambar` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`id_photo`, `nama_photo`, `id_kategori_pg`, `harga`, `hargaasal`, `deskripsi`, `alamat`, `gambar`) VALUES
(1, 'Putra Photo', 1, 180000, 10000000, 'Bagus', 'Linggajaya', 'avatar1.jpg\r\n'),
(2, 'Test Test', 3, 180000, 1000000, 'Bagus', 'Lingga Jaya', 'avatar33.png'),
(3, 'Test Test FGFG', 3, 180000, 150000, 'FGFG', 'FGFG', 'avatar111.png'),
(4, 'Pg nih bo', 3, 100000, 150000, 'Baguss ', 'Lingga Jlek ', 'Screenshot_2020-12-16-11-50-13-545_com_whatsapp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level_user` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'Tri Putra Satriawan', 'admin', 'admin', 1),
(2, 'LIa Yulianti', 'user', 'user', 2),
(3, 'Alika', 'user', 'user', 2),
(4, 'Agung', 'agung kacamata', ' kacamata', 2),
(5, 'kakek', 'kakek bau tai', '   kakek', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tbl_gambar_photo`
--
ALTER TABLE `tbl_gambar_photo`
  ADD PRIMARY KEY (`id_gambar_pg`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_kategori_pg`
--
ALTER TABLE `tbl_kategori_pg`
  ADD PRIMARY KEY (`id_kategori_pg`);

--
-- Indexes for table `tbl_kategori_vg`
--
ALTER TABLE `tbl_kategori_vg`
  ADD PRIMARY KEY (`id_kategori_vg`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_gambar_photo`
--
ALTER TABLE `tbl_gambar_photo`
  MODIFY `id_gambar_pg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_kategori_pg`
--
ALTER TABLE `tbl_kategori_pg`
  MODIFY `id_kategori_pg` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kategori_vg`
--
ALTER TABLE `tbl_kategori_vg`
  MODIFY `id_kategori_vg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
