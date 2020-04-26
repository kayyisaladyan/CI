-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 07:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pvalidasi` (IN `user` VARCHAR(15), IN `wisata` VARCHAR(15))  NO SQL
BEGIN
	SELECT id_user,nama_wisata FROM user 
    	JOIN transaksi USING(id_user) 	
        JOIN detail_transaksi USING(id_transaksi) 
        JOIN wisata using(id_wisata)
	WHERE user = transaksi.id_user AND wisata=detail_transaksi.id_wisata;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_wisata` varchar(15) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `id_wisata`, `jumlah_tiket`, `sub_total`) VALUES
('TRX0001', 'WST0001', 6, 120000),
('TRX0001', 'WST0002', 1, 35000),
('TRX0002', 'WST0009', 1, 45000),
('TRX0003', 'WST0009', 3, 135000);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `keterangan` text NOT NULL,
  `id_wisata` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `nama`, `email`, `rating`, `keterangan`, `id_wisata`) VALUES
('RV0001', 'Fauzi Ghifari', 'fauziari@gmail.com', 5, 'saya berangkat ke Bromo bersama keluarga menggunakan paket tour. tetapi pemandangan bromo dengan kabut mistisnya memang menakjubkan.', 'WST0002'),
('RV0002', 'Rafif Yusuf', 'rafifyusuf@gmail.com', 4.7, 'tidak dapat di ungkapkan dengan kata -kata buktikan sendiri. saya akan menjamin kepuasan yang anda dapatkan (Mount Bromo).', 'WST0004'),
('RV0003', 'Rara amrian', 'rara@gmail.com', 3, 'cukup menyenangkan bearada di labuan bajo, tetapi harga yang terlalu mahal membuat saya kehabisan uang dikarenakan biaya transportasi yang mahal.', 'WST0007'),
('RV0004', 'stephen', 'stephen@mail.com', 1, 'asasassa', 'WST0009');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status_transaksi` enum('Belum dibayar','Sudah dibayar') NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tgl_transaksi`, `status_transaksi`, `kode_transaksi`, `total`) VALUES
('TRX0001', 'USR0001', '2020-04-25', 'Sudah dibayar', 'lhOno_telepon', 155000),
('TRX0002', 'USR0001', '2020-04-26', 'Belum dibayar', 'ABF082118319831', 45000),
('TRX0003', 'USR0002', '2020-04-26', 'Sudah dibayar', 'VY7082117237281', 135000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `no_telepon`, `email`) VALUES
('USR0001', 'kayyis', '202cb962ac59075b964b07152d234b70', 'Kayyis al', '082118319831', '08176131312'),
('USR0002', 'stephen', '202cb962ac59075b964b07152d234b70', 'stephen', '082117237281', 'stephen@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` varchar(15) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL,
  `jam_operasional` varchar(255) NOT NULL,
  `kontak_wisata` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `lokasi`, `harga`, `jam_operasional`, `kontak_wisata`, `rating`, `deskripsi`, `gambar`) VALUES
('WST0001', 'Godong Ijo', ' Jl. Cinangka Raya KM 10 No. 60, Serua Bojongsari, Serua, Bojongsari, Kota Depok, Jawa Barat 16517', 20000, '09:00-16.30', '082110821', 0, 'Merupakan tempat wisata edukasi untuk semua kalangan, karena didalamnya terdapat berbagai macam flora dan fauna', 'godongijo.jpeg'),
('WST0002', 'Taman Wisata Pasir Putih', 'Jalan Raya Pasir Putih, Sawangan, Pasir Putih, Sawangan, Kota Depok, Jawa Barat 16519', 35000, '09.00-17.00', '0821212', 0, 'Salah satu wahan air yang ada di Kota Depok, terdapat berbagai macam ukuran kolam renang, tidak hanya itu. Ditempat ini juga terdapat outbound', 'pasir_putih.jpeg'),
('WST0003', ' Masjid Kubah Emas', 'Jalan Raya Meruyung, Meruyung, Limo, Meruyung, Limo, Kota Depok, Jawa Barat 16515 ', 0, '24 jam', '0819281', 0, 'Merupaka n masjid yang dikenal luas oleh masyarakat Indonesia, karena kubah masjid ini dilapasi dengan emas. Banyak juga wisatawan yang ziarah.', 'kubah_mas.jpeg'),
('WST0004', 'Agrowisata Belimbing Dewa', 'Jl. Belimbing Dewa, Pancoran MAS, Kota Depok, Jawa Barat 16436', 10000, '08.30-16.30 ', '081028012', 0, 'Salah satu tempat wisata yang membudidayakan buah belimbing. Belimbing sendiri merupakan Icon Kota Depok', 'agrowisata_belimbing.jpeg'),
('WST0005', 'Kampung 99 Pepohonan', 'Jl. KH. Muhasan II, Meruyung, Limo, Meruyung, Limo, Kota Depok, Jawa Barat 16515', 15000, '10.00-16.00', '89645342', 0, 'Tempat wisata ini merupakan tempat wisata yang cukup asri dan sejuk, karena di kelilingi oleh pohon-pohon besar', 'kampung99.jpeg'),
('WST0006', 'Taman Lembah Gurame', 'Jalan Nangka Raya No.68, Depok Jaya, Pancoran MAS, Depok Jaya, Pancoran MAS, Kota Depok, Jawa Barat 16432', 0, '06.00-21.00', '08081281', 0, 'Merupakan tempat alternatif bagi warga Depok untuk berolahraga jogging, main futsal, maupun basket dan masih banyak kegiatan lain yang masih bisa dilakukan disini. Selain itu, banyak juga terdapat kolam ikan gurame yang di pelihara dan di urusi oleh petugas.', 'lembah_gurame.jpeg'),
('WST0007', 'Studio Alam TVRI', 'Jalan Raden Saleh No. 90, Studio Alam Tvri No.1, Sukmajaya, Kota Depok, Jawa Barat 16412', 10000, '09.00-16.00', '998081319', 0, 'empat wisata ini memiliki cerita sejarah yang panjang. Awalnya tempat ini difungsikan sebagai tempt pengambilan gambar acara TVRI, tapi sekarang menjadi destinasi wisata bagi warga Depok yang mencari suasana alam di tengah keramaian kota.', 'studio_alam.jpeg'),
('WST0008', ' D’Kandang Amazing Farm', 'Jl. Penarikan RT 07 / 02, Pasir Putih, Sawangan, Kota Depok, Jawa Barat 16519', 20000, '09.30-17.30', '087193713', 0, 'Salah satu wisata yang ini mengambil konsep wisata edukatif yang disajikan untuk keluarga. Di D’Kandang Amazing Farm, para pengunjung tidak hanya akan melihat bagaimana susu sapi diperah, tetapi juga ikut merasakan memerah susu sapi dan mendapatkan pengetahuan menarik lainnya. Selain itu, ada keseruan menarik lainnya, seperti menanam tanaman hias, bercocok tanam, hingga melakukan pencangkokan.', 'dkandang.jpeg'),
('WST0009', 'Depok Fantasi Waterpark', 'Perumahan, Cibuluh Grand Depok City, Depok City, West Java 16412.', 45000, '09.00-16.00', '09563424', 0, 'Salah satu wahana air yang terbesar di Kota Depok, disini ditawarkan berbagai jenis ukuran kolam renang dan waterboom', 'depok_fantasi.jpeg'),
('WST0010', 'Taman Rekreasi Wiladatika', 'Jalan Jambore No.1 RT. 03 / RW.03, Harjamukti, Cimanggis, Harjamukti, Cimanggis, Kota Depok, Jawa Barat 13720', 30000, '08.00-17.00', '09182101812', 0, 'Ditempat in banyak sekali macam-macam bunga hias. Selain itu, disini juga terdapat air terjun buatan, gua mini, serta air kolam mancur. Tempat ini menjadi favorit bagi warga Depok dan sekitarnya.', 'wiladatika1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_transaksi`,`id_wisata`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
