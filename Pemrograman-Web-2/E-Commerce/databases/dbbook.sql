-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 12:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(2, 'komik dan manga'),
(3, 'semu'),
(5, 'pen'),
(6, 'hobi');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `deskripsi_text` text NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi_text`, `produk_id`) VALUES
(1, '2023-05-10', 'Tutty Pretty Ugly', 'Jl. Anggrek No. 07, RT 04/RW 02 Desa.Sipayung', '081234567890', 'tuttypretyugly1234@gmail.com', 1, 'Nama Pemesan : Tutty Pretty Ugly\r\nAlamat Jl.Anggrek No.07 RT 04/RW 02 Desa.Sipayung Kec.Depok Timur Kota Depok', 2),
(7, '2023-05-23', 'nico gazha', 'jl setu indah', '098763732112', 'nico@gazzhagmail', 3, 'saya suka bukunya', 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_beli` double NOT NULL,
  `stok` int(11) NOT NULL,
  `min_stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`) VALUES
(2, 'MNG01', 'Jujutsu Kaisen 1', 75000, 50000, 100, 1, 'Jujutsu Kaisen adalah sebuah komik populer yang ditulis dan diilustrasikan oleh Gege Akutami. Komik ini bercerita tentang seorang siswa SMA bernama Yuji Itadori yang secara tidak sengaja memakan jari iblis yang kuat, yang membuatnya terlibat dalam dunia jujutsu, sebuah bentuk sihir yang digunakan untuk melawan iblis yang mengancam keamanan manusia.\r\n\r\nDalam komik Jujutsu Kaisen, Yuji bergabung dengan sekolah jujutsu dan bertemu dengan teman-teman barunya, termasuk Megumi Fushiguro, seorang pengguna jujutsu yang berbakat, dan Nobara Kugisaki, seorang pengguna jujutsu yang terampil dengan teknik senjata.\r\n\r\nBersama-sama, mereka berjuang melawan iblis-iblis yang mengancam dunia manusia, dan menghadapi berbagai rintangan dan tantangan di sepanjang jalan. Cerita di Jujutsu Kaisen menarik dan penuh dengan aksi, intrik, dan humor, dan dipenuhi dengan karakter-karakter yang kompleks dan menarik.\r\n\r\nKomik Jujutsu Kaisen satu merupakan produk komik yang sangat layak untuk dijual, terutama bagi para penggemar genre aksi dan fantasi. Dengan alur cerita yang menarik, pertarungan yang epik, dan karakter-karakter yang kuat, Jujutsu Kaisen satu menawarkan pengalaman membaca yang menghibur dan memuaskan. Selain itu, visual yang indah dan detail ilustrasi yang sangat memukau juga membuat komik ini menjadi produk yang sangat menarik untuk dimiliki.', 2),
(4, 'MNG02', 'Jujutsu Kaisen 2', 75000, 50000, 150, 1, '\r\n\"Jujutsu Kaisen 2\" adalah manga yang merupakan sekuel dari \"Jujutsu Kaisen\". Ceritanya berfokus pada Yuji Itadori, seorang siswa SMA yang terlibat dalam pertempuran melawan makhluk jahat yang disebut Curses. Yuji bergabung dengan Sekolah Jujutsu Tokyo untuk melawan ancaman tersebut. Dalam \"Jujutsu Kaisen 2\", Yuji dan teman-temannya menghadapi musuh yang lebih kuat dan mengungkap rahasia-rahasia dalam dunia jujutsu. Manga ini menawarkan kombinasi pertempuran, elemen supernatural, komedi, dan drama.', 2),
(5, 'MNG03', 'Jujutsu Kaisen 0', 65000, 45000, 200, 1, '\r\n\"Manga Jujutsu Kaisen 0\" adalah prekuel dari seri \"Jujutsu Kaisen\" yang terkenal. Ceritanya mengikuti perjalanan seorang karakter bernama Yuta Okkotsu. Yuta adalah seorang siswa SMA dengan kekuatan khusus yang melibatkan kutukan yang membahayakan dirinya dan orang-orang di sekitarnya. Dia kemudian bergabung dengan Sekolah Jujutsu Tokyo dan menjadi bagian dari pertempuran melawan Curses. Manga ini menggambarkan latar belakang Yuta, pertemuannya dengan karakter-karakter penting, serta konflik yang dia hadapi. \"Jujutsu Kaisen 0\" menawarkan kombinasi antara aksi yang seru, elemen supernatural, dan perjalanan karakter yang menggugah.', 2),
(6, 'SMU01', 'The Art Book', 600000, 520000, 50, 1, ' Buku ini menyajikan kumpulan gambar dan karya seni dari berbagai periode dan gaya yang berbeda. Setiap halaman menampilkan sebuah karya seni beserta penjelasan singkat tentang seniman dan konteks karyanya.', 3),
(7, 'SMU', 'How To Draw What You See', 70000, 50000, 150, 1, 'Buku ini adalah panduan praktis untuk belajar menggambar. Menggunakan teknik dan latihan yang jelas, buku ini membantu pembaca mengembangkan keterampilan mengamati dan mereproduksi apa yang mereka lihat.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_produk` (`kategori_produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_kategori_produk` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
