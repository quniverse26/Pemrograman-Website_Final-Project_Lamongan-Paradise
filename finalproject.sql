-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 05:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `nomor_pegawai` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `nomor_pegawai`, `nama_lengkap`, `email`, `username`, `password`) VALUES
(1, 123, 'Btari Embun', 'btariembun@yahoo.com', 'btariembun', '000'),
(2, 111, 'Btara Langit', 'btaralangit@gmail.co', 'btaralangit', '111'),
(3, 112, 'kale mata angin', 'kalemataangin@yahoo.', 'kalemataangin', '12345'),
(4, 121, 'senja kala', 'senjakala@gmail.com', 'senjakala', '0606'),
(5, 12345, 'budi', 'budi@gmail.com', 'budi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_oleh`
--

CREATE TABLE `tb_oleh` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama_oleh` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_oleh`
--

INSERT INTO `tb_oleh` (`id`, `gambar`, `nama_oleh`, `alamat`, `harga`, `deskripsi`) VALUES
(1, 'oleh8.jpg', 'Rujak Paciran', 'Rujak \"Mak Tas\" Paciran', 5000, 'Rujak Mak Tas, rujak khas desa Paciran yang melegenda di pesisir Pantura, sudah eksis sejak 1986. Mak Tas menjual rujaknya di sebuah warung kecil di pinggir kali yang membelah desa Paciran dan dusun Jetak.'),
(2, 'oleh3.jpg', 'Tas Eceng Gondok', 'R & D Handicraft', 10000, 'Barang kerajinan tangan ini kini menjadi salah satu daya tarik Lamongan. Setiap orang yang datang ke Lamongan, selain makanan khasnya yang dicari sebagai oleh-oleh juga mencari barang kerajinan ini sebagai oleh-oleh lainnya. Harganya bervariasi mulai Rp 10.000 hingga ratusan ribu tergantung besar, bahan dan rumitnya motif yang disuguhkan.'),
(3, 'oleh4.jpg', 'Batik Sendang', ' Ds. Sendang Duwur, Kec. Paciran, Kab. Lamongan', 150000, 'Batik sendang mempunyai karakteristik yang sangat berbeda dengan batik di daerah lainnya. Ciri khas batik Sendang lamongan adalah motif burung Slempang, motif gapuro tanjung kodok, motif paten, motif pathetan, motif gendang ceplik bandeng lele, dan sebagainya.'),
(4, 'oleh7.jpg', 'Jumbrek', 'Toko Oleh-Oleh', 20000, 'Jumbrek merupakan sejenis jajanan atau camilan yang bisa kamu nikmati selagi berwisata di Lamongan Jawa Timur. Jajanan ini salah satu dari banyak makanan khas yang dimiliki Lamongan. Jumbrek terbuat dari bahan-bahan seperti tepung beras, santan kelapa, dan gula merah siwalan yang sangat khas. '),
(5, 'oleh1.jpg', 'Otak-Otak Bandeng', 'Toko Hj. Rochimah', 60000, 'Otak-otak bandeng yaitu suatu olahan bandeng yang diperoleh dengan cara mencampur daging bandeng dengan bumbu-bumbu sehingga diperoleh produk baru tanpa menghilangkan citarasa khas bandeng.'),
(6, 'oleh2.jpg', 'Wingko Babat', 'Toko Lie Lan Ing', 28000, 'Wingko babat adalah makanan tradisional khas Indonesia. Wingko adalah sejenis kue yang terbuat dari kelapa muda, tepung beras ketan dan gula.'),
(7, 'oleh5.jpg', 'Es Dawet Siwalan', 'Babat', 5000, 'Es Dawet Siwalan juga menjadi salah satu makanan khas Lamongan yang sangat populer dan banyak penggemarnya. Seperti namanya, Es Dawet ini menggunakan buah dari pohon siwalan sebagai  isiannya. Bagi Anda yang masih asing dengan pohon siwalan, pohon ini juga disebut dengan nama lontar.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  `jml_lokal` double NOT NULL,
  `jml_manca` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id`, `gambar`, `nama_wisata`, `alamat`, `rating`, `jml_lokal`, `jml_manca`) VALUES
(1, 'buatan1.jpg', 'Wisata Bahari Lamongan', 'Paciran', 4, 473.407, 484),
(2, 'alam.jpg', 'Pantai Lorena', 'Paciran', 3, 370.125, 0),
(3, 'alam2.png', 'Pantai Joko Mursodo', 'Paciran', 3, 175.243, 0),
(4, 'buatan2.jpg', 'Alun-Alun Lamongan', 'Lamongrejo', 4, 670.895, 675),
(6, 'religi3.jpg', 'Masjid Namira', 'Tikung', 4, 756.897, 0),
(7, 'religi2.jpg', 'Masjid Agung Lamongan', 'Lamongrejo', 4, 798.341, 57),
(8, 'alam3.jpg', 'Telaga Sadang', 'Solokuro', 3, 362.763, 0),
(9, 'alam4.jpg', 'Pantai Maldives', 'Kemantren', 4, 416.738, 0),
(10, 'buatan3.jpg', 'Goa Maharani', 'Paciran', 4, 665.872, 575),
(11, 'Screenshot (114).png', 'Makam Sunan Drajat', 'Paciran', 4, 756.897, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisatawan`
--

CREATE TABLE `tb_wisatawan` (
  `id` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `jml_lokal` double NOT NULL,
  `jml_manca` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisatawan`
--

INSERT INTO `tb_wisatawan` (`id`, `nama_wisata`, `jml_lokal`, `jml_manca`) VALUES
(1, 'Wisata Bahari Lamongan', 473.407, 484),
(2, 'Goa Maharani', 224.824, 575),
(3, 'Wego', 224.824, 0),
(4, 'Masjid Namira', 96.566, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'queenanjar', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_oleh`
--
ALTER TABLE `tb_oleh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_wisatawan`
--
ALTER TABLE `tb_wisatawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_oleh`
--
ALTER TABLE `tb_oleh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
