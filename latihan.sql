-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 04:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `ID` int(7) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Kategori` varchar(100) NOT NULL,
  `Headline` varchar(50) NOT NULL,
  `Berita` text NOT NULL,
  `Gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`ID`, `Judul`, `Kategori`, `Headline`, `Berita`, `Gambar`) VALUES
(11, 'kayu', 'dunia', 'ROBOH', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam fugit voluptates, dolores officiis perspiciatis suscipit eligendi error beatae, sapiente alias temporibus. Veniam aspernatur, aliquid blanditiis cupiditate asperiores! Ut repellendus, nemo eaque, debitis dolorum soluta sunt incidunt quisquam placeat dolores ad quidem nulla tempore laboriosam voluptas nam eligendi. Sed consequuntur vel libero ipsa quidem eos esse quo id, numquam hic a, unde eaque dolore deserunt impedit explicabo consequatur. Voluptatibus, assumenda aspernatur ipsum in quod ab vel harum, debitis earum repellendus aliquam officiis, optio nostrum ipsa iure perspiciatis consectetur voluptate qui inventore sapiente fuga doloribus. Quia consectetur tempora eius minus doloribus.', 'aluminium-profile-40x80-500x600.jpg'),
(12, 'Kabar burung', 'olahraga', 'GEGER KABAR BURUNG', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam fugit voluptates, dolores officiis perspiciatis suscipit eligendi error beatae, sapiente alias temporibus. Veniam aspernatur, aliquid blanditiis cupiditate asperiores! Ut repellendus, nemo eaque, debitis dolorum soluta sunt incidunt quisquam placeat dolores ad quidem nulla tempore laboriosam voluptas nam eligendi. Sed consequuntur vel libero ipsa quidem eos esse quo id, numquam hic a, unde eaque dolore deserunt impedit explicabo consequatur. Voluptatibus, assumenda aspernatur ipsum in quod ab vel harum, debitis earum repellendus aliquam officiis, optio nostrum ipsa iure perspiciatis consectetur voluptate qui inventore sapiente fuga doloribus. Quia consectetur tempora eius minus doloribus.', 'synot-company-profile-500x600-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cobacoba`
--

CREATE TABLE `cobacoba` (
  `ID` int(7) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cobacoba`
--

INSERT INTO `cobacoba` (`ID`, `NAME`, `EMAIL`, `USERNAME`, `PASSWORD`) VALUES
(48, 'aryo', 'aryosenoaji877@gmail.com', 'iyorji45', '2224aryo'),
(49, '', 'mantepdah12@gmail.com', 'supersekali', 'barunihh22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `NAMA` text NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PESAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `NAMA`, `EMAIL`, `PESAN`) VALUES
(1, 'Aryo Senoaji', 'aryosenoaji877@gmail.com', 'sayang mengalami bug'),
(2, 'hamba tuhan', 'aweawe@gmail.com', 'masa iya sih gabisa gini cuy aneh dah ini'),
(3, 'dodi', 'dodi321@gmail.com', 'mantep dah ini website untuk jualan brodie');

-- --------------------------------------------------------

--
-- Table structure for table `daftaruser`
--

CREATE TABLE `daftaruser` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(11) NOT NULL,
  `PASSWORD` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftaruser`
--

INSERT INTO `daftaruser` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(2, 'iyorji45', '2224aryo'),
(3, 'aryo_senoaj', 'aryosenoaji');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `ID` int(11) NOT NULL,
  `TITTLE` varchar(100) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `KEYWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`ID`, `TITTLE`, `DESCRIPTION`, `KEYWORD`) VALUES
(1, 'Toko Online', 'Toko online vintage', 'Toko Online Vintage Retro');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `ID` int(10) NOT NULL,
  `NAMABARANG` varchar(30) NOT NULL,
  `HARGABARANG` int(20) NOT NULL,
  `JUMLAHBARANG` int(20) NOT NULL,
  `TUJUAN` varchar(40) NOT NULL,
  `TOTAL` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`ID`, `NAMABARANG`, `HARGABARANG`, `JUMLAHBARANG`, `TUJUAN`, `TOTAL`) VALUES
(4, 'sepatu', 20000, 4, 'tangerang', 92000),
(5, 'sepatu', 18000, 2, 'depok', 51000);

-- --------------------------------------------------------

--
-- Table structure for table `productpost`
--

CREATE TABLE `productpost` (
  `ID` int(100) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductDescription` varchar(500) NOT NULL,
  `Quantity` varchar(30) NOT NULL,
  `Category` varchar(40) NOT NULL,
  `Front` varchar(100) NOT NULL,
  `Back` varchar(100) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `ID` int(11) NOT NULL,
  `NAMA` text NOT NULL,
  `GAMBAR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ID`, `NAMA`, `GAMBAR`) VALUES
(3, 'Slider 2', 'boston-public-library-6EDezfYu3uk-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `upload_product`
--

CREATE TABLE `upload_product` (
  `ID` int(11) NOT NULL,
  `GAMBAR` varchar(100) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `DESKRIPSI` varchar(100) NOT NULL,
  `KATEGORI` varchar(100) NOT NULL,
  `JUMLAH` int(100) NOT NULL,
  `BRAND` varchar(100) NOT NULL,
  `SIZING` varchar(100) NOT NULL,
  `ONGKIR` varchar(100) NOT NULL,
  `HARGA` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_product`
--

INSERT INTO `upload_product` (`ID`, `GAMBAR`, `NAMA`, `DESKRIPSI`, `KATEGORI`, `JUMLAH`, `BRAND`, `SIZING`, `ONGKIR`, `HARGA`) VALUES
(13, '0_fac49f83-9778-4b1d-b6df-5898b0b2f1d5_500_600.jpg', 'Fatigue Pants 14oz', 'Celana dengan bahan canvas seberat 14 oz', 'bottom', 7, 'PMP', 'L', 'gratisOngkir', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cobacoba`
--
ALTER TABLE `cobacoba`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `daftaruser`
--
ALTER TABLE `daftaruser`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productpost`
--
ALTER TABLE `productpost`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `upload_product`
--
ALTER TABLE `upload_product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cobacoba`
--
ALTER TABLE `cobacoba`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daftaruser`
--
ALTER TABLE `daftaruser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productpost`
--
ALTER TABLE `productpost`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload_product`
--
ALTER TABLE `upload_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
