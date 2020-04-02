-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2020 pada 09.50
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id_review`, `nama`, `email`, `rating`, `keterangan`) VALUES
(8, 'Rafif Yusuf', 'rafifyusuf@gmail.com', 4.7, 'tidak dapat di ungkapkan dengan kata -kata buktikan sendiri. saya akan menjamin kepuasan yang anda dapatkan (Mount Bromo).'),
(9, 'Rara amrian', 'rara@gmail.com', 3, 'cukup menyenangkan bearada di labuan bajo, tetapi harga yang terlalu mahal membuat saya kehabisan uang dikarenakan biaya transportasi yang mahal.'),
(10, 'Fauzi Ghifari', 'fauziari@gmail.com', 5, 'saya berangkat ke Bromo bersama keluarga menggunakan paket tour. tetapi pemandangan bromo dengan kabut mistisnya memang menakjubkan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `no_telepon`, `email`, `role`) VALUES
(13, 'admin', '123', 'admin', '', '', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
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
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `lokasi`, `harga`, `jam_operasional`, `kontak_wisata`, `rating`, `deskripsi`, `gambar`) VALUES
('WST0001', 'Godong Ijo', ' Jl. Cinangka Raya KM 10 No. 60, Serua Bojongsari, Serua, Bojongsari, Kota Depok, Jawa Barat 16517', 20000, '09:00-16.30', '082110821', 0, 'Merupakan tempat wisata edukasi untuk semua kalangan, karena didalamnya terdapat berbagai macam flora dan fauna', 'godongijo.jpeg'),
('WST0002', 'Taman Wisata Pasir Putih', 'Jalan Raya Pasir Putih, Sawangan, Pasir Putih, Sawangan, Kota Depok, Jawa Barat 16519', 35000, '09.00-17.00', '0821212', 0, 'Salah satu wahan air yang ada di Kota Depok, terdapat berbagai macam ukuran kolam renang, tidak hanya itu. Ditempat ini juga terdapat outbound', 'pasir_putih.jpeg'),
('WST0003', 'Masjid Dian Al – Mahri (Masjid Kubah Emas)', 'Jalan Raya Meruyung, Meruyung, Limo, Meruyung, Limo, Kota Depok, Jawa Barat 16515 ', 0, '24 jam', '0819281', 0, 'Merupaka n masjid yang dikenal luas oleh masyarakat Indonesia, karena kubah masjid ini dilapasi dengan emas. Banyak juga wisatawan yang ziarah.', 'kubah_mas.jpeg'),
('WST0004', 'Agrowisata Belimbing Dewa', 'Jl. Belimbing Dewa, Pancoran MAS, Kota Depok, Jawa Barat 16436', 10000, '08.30-16.30 ', '081028012', 0, 'Salah satu tempat wisata yang membudidayakan buah belimbing. Belimbing sendiri merupakan Icon Kota Depok', 'agrowisata_belimbing.jpeg'),
('WST0005', 'Kampung 99 Pepohonan', 'Jl. KH. Muhasan II, Meruyung, Limo, Meruyung, Limo, Kota Depok, Jawa Barat 16515', 15000, '10.00-16.00', '89645342', 0, 'Tempat wisata ini merupakan tempat wisata yang cukup asri dan sejuk, karena di kelilingi oleh pohon-pohon besar', 'kampung99.jpeg'),
('WST0006', 'Taman Lembah Gurame', 'Jalan Nangka Raya No.68, Depok Jaya, Pancoran MAS, Depok Jaya, Pancoran MAS, Kota Depok, Jawa Barat 16432', 0, '06.00-21.00', '08081281', 0, 'Merupakan tempat alternatif bagi warga Depok untuk berolahraga jogging, main futsal, maupun basket dan masih banyak kegiatan lain yang masih bisa dilakukan disini. Selain itu, banyak juga terdapat kolam ikan gurame yang di pelihara dan di urusi oleh petugas.', 'lembah_gurame.jpeg'),
('WST0007', 'Studio Alam TVRI', 'Jalan Raden Saleh No. 90, Studio Alam Tvri No.1, Sukmajaya, Kota Depok, Jawa Barat 16412', 10000, '09.00-16.00', '998081319', 0, 'empat wisata ini memiliki cerita sejarah yang panjang. Awalnya tempat ini difungsikan sebagai tempt pengambilan gambar acara TVRI, tapi sekarang menjadi destinasi wisata bagi warga Depok yang mencari suasana alam di tengah keramaian kota.', 'studio_alam.jpeg'),
('WST0008', ' D’Kandang Amazing Farm', 'Jl. Penarikan RT 07 / 02, Pasir Putih, Sawangan, Kota Depok, Jawa Barat 16519', 20000, '09.30-17.30', '087193713', 0, 'Salah satu wisata yang ini mengambil konsep wisata edukatif yang disajikan untuk keluarga. Di D’Kandang Amazing Farm, para pengunjung tidak hanya akan melihat bagaimana susu sapi diperah, tetapi juga ikut merasakan memerah susu sapi dan mendapatkan pengetahuan menarik lainnya. Selain itu, ada keseruan menarik lainnya, seperti menanam tanaman hias, bercocok tanam, hingga melakukan pencangkokan.', 'dkandang.jpeg'),
('WST0009', 'Depok Fantasi Waterpark', 'Perumahan, Cibuluh Grand Depok City, Depok City, West Java 16412.', 45000, '09.00-16.00', '09563424', 0, 'Salah satu wahana air yang terbesar di Kota Depok, disini ditawarkan berbagai jenis ukuran kolam renang dan waterboom', 'depok_fantasi.jpeg'),
('WST0010', 'Taman Rekreasi Wiladatika', 'Jalan Jambore No.1 RT. 03 / RW.03, Harjamukti, Cimanggis, Harjamukti, Cimanggis, Kota Depok, Jawa Barat 13720', 30000, '08.00-17.00', '091821018', 0, 'Ditempat in banyak sekali macam-macam bunga hias. Selain itu, disini juga terdapat air terjun buatan, gua mini, serta air kolam mancur. Tempat ini menjadi favorit bagi warga Depok dan sekitarnya.', 'wiladatika.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
