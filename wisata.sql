-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2020 pada 03.53
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
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL,
  `jam_buka` varchar(255) NOT NULL,
  `jam_tutup` varchar(255) NOT NULL,
  `kontak_wisata` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `lokasi`, `harga`, `jam_buka`, `jam_tutup`, `kontak_wisata`, `rating`, `deskripsi`, `gambar`) VALUES
(24, 'Labuan bajo', 'Nusa Tenggara Timur', 5000000, '00.00', '00.00', '0821131312311', 5, ' Labuan Bajo merupakan salah satu desa dari 19 desa dan kelurahan yang berada di kecamatan Komodo, Kabupaten Manggarai Barat, provinsi Nusa Tenggara Timur, Indonesia. Labuan Bajo sebelumnya adalah kelurahan sekaligus ibu kota Kecamatan Komodo dan juga merupakan ibu kota Kabupaten Manggarai Barat, Nusa Tenggara Timur, Indonesia. Sekarang dikembangkan menjadi Kota Labuan Bajo.\r\n\r\nWilayahnya meliputi; Kampung Ujung, Kampung Tengah, Kampung Air, Lamtoro, Wae Kelambu, Wae Medu, Cowang Dereng, Wae Kesambi, Wae Bo, Lancang, Sernaru, Wae Mata, Pasar Baru, Pede, dan Gorontalo.', 'labuanbajo1.jpg'),
(25, 'Raja ampat', 'Papua Barat', 7000000, '08.00', '18.00', '0821131312311', 3.4, ' Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop) Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat. Kepulauan ini sekarang menjadi tujuan para penyelam yang tertarik akan keindahan pemandangan bawah lautnya. Empat gugusan pulau yang menjadi anggotanya dinamakan menurut empat pulau terbesarnya, yaitu Pulau Waigeo, Pulau Misool, Pulau Salawati, dan Pulau Batanta.Secara umum, Raja Ampat adalah kepulauan yang terdiri dari banyak sekali pulau karang dan tersebar luas di seluruh wilayahnya. ', 'rajaampat.jpg'),
(26, 'Bromo Area', 'Jawa timur', 1000000, '08.00', '20.00', '082116097032', 4.5, ' Taman Nasional Bromo Tengger Semeru adalah taman nasional di Jawa Timur, Indonesia, yang terletak di wilayah administratif Kabupaten Pasuruan, Kabupaten Malang, Kabupaten Lumajang dan Kabupaten Probolinggo. Taman yang bentangan barat-timurnya sekitar 20-30 kilometer dan utara-selatannya sekitar 40 km ini ditetapkan sejak tahun 1982 dengan luas wilayahnya sekitar 50.276,3 ha. Di kawasan ini terdapat kaldera lautan pasir yang luasnya Â±6290 ha. Batas kaldera lautan pasir itu berupa dinding terjal, yang ketinggiannya antara 200-700 meter.', 'bromo.jpg'),
(27, 'Tangkuban Perahu', 'Jawa Barat', 45000, '10.00', '19.00', '0821131312311', 2.7, ' Gunung Tangkuban Parahu  adalah salah satu gunung yang terletak di Provinsi Jawa Barat, Indonesia. Sekitar 20 km ke arah utara Kota Bandung, dengan rimbun pohon pinus dan hamparan kebun teh di sekitarnya, Gunung Tangkuban Parahu mempunyai ketinggian setinggi 2.084 meter. Bentuk gunung ini adalah Stratovulcano dengan pusat erupsi yang berpindah dari timur ke barat. Jenis batuan yang dikeluarkan melalui letusan kebanyakan adalah lava dan sulfur, mineral yang dikeluarkan adalah sulfur belerang, mineral yang dikeluarkan saat gunung tidak aktif adalah uap belerang. Daerah Gunung Tangkuban Parahu dikelola oleh Perum Perhutanan. Suhu rata-rata hariannya adalah 17oC pada siang hari dan 2Â°C pada malam hari.', 'tangkubanperahu.jpg'),
(28, 'Danau Toba', 'Sumatera utara', 50000, '08.00', '17.00', '085804320728', 4.7, ' Danau Toba adalah danau alami berukuran besar di Indonesia yang berada di kaldera Gunung Supervulkan. Danau ini memiliki panjang 100 kilometer (62 mil), lebar 30 kilometer (19 mi), dan kedalaman 1600 meter (5200 ft). Danau ini terletak di tengah pulau Sumatra bagian utara dengan ketinggian permukaan sekitar 900 meter (2953 ft). Danau ini membentang dari 2.88Â°N 98.52Â°E sampai 2.35Â°N 99.1Â°E. Ini adalah danau terbesar di Indonesia dan danau vulkanik terbesar di dunia.[1]', 'danautoba.jpg'),
(29, 'Wakatobi', 'Sulawesi utara', 30000, '11.00', '17.00', '085804320728', 4.5, ' Masih berada di Pulau Sulawesi, Taman Nasional Wakatobi juga merupakan salah satu tujuan wisata dunia bagi yang ingin mengeksplorasi keindahan alam bawah laut. Dengan luas mencapai 13.900 km2, tujuan wisata terkenal asal Indonesia ini memiliki tak kurang dari 112 jenis terumbu karang yang bersimbiosis dengan ikan-ikan bawah laut sehingga menciptakan panorama bawah laut yang tiada tanding.\r\nHal ini menjadikan Wakatobi sebagai salah satu surga menyelam bagi para traveler dari berbagai penjuru dunia.', 'wakatobi.jpg'),
(30, 'Pulau komodo', 'Nusa Tenggara Timur', 100000, '08.00', '22.00', '082116097032', 5, ' Destinasi wisata Indonesia yang tersohor di mata dunia selanjutnya adalah Pulau Komodo. Pulau yang berlokasi di Kepulauan Nusa Tenggara Timur ini merupakan rumah bagi ratusan Komodo, hewan endemik yang dilindungi di Indonesia.\r\n\r\nSelain bisa mengamati perilaku dan mengeksplorasi habitat dari hewan purba ini, Pulau Komodo juga menawarkan panorama alam yang menakjubkan. Salah satunya adalah pantai dengan pasir berwarna merah muda yang dikenal dengan nama â€œPink Beachâ€œ. Di dunia sendiri pantai seperti ini hanya terdapat tujuh di seluruh dunia menjadikannya sebagai salah satu tujuan wisata Indonesia yang mendunia.', 'pulaukomodo.jpg'),
(31, 'Goa Gong', 'Jawa Timur', 30000, '08.00', '21.00', '085804320728', 1.5, ' Tujuan wisata Indonesia yang mendunia selanjutnya adalah Goa Gong yang terletak di Pacitan, Jawa Timur. Panorama eksotik yang ditawarkan oleh objek wisata alam Indoneisa ini disebut-sebut sebagai salah satu goa terindah di Asia Tenggara.\r\n\r\nBertualang di Goa Gong, Toppers akan disuguhkan keeksotisan struktur stalaktit dan stalakmit yang terbentuk secara alami di Goa ini. Meskipun tidak sepopuler tempat wisata Indonesia lainnya, Goa Gong merupakan destinasi wisata favorit bagi para traveler dunia yang berjiwa petualang.', 'goa.jpg'),
(32, 'Gili Trawangan', 'Nusa Tenggara Barat', 25000, '08.00', '23.00', '085804320728', 4.5, ' Untuk pecinta pemandangan pantai, Gili Trawangan bisa jadi pilihan objek wisata Nusantara mendunia yang Toppers singgahi. Dengan kombinasi langit biru dengan semburat awan putih, jernihnya air laut dibingkai pasir putih menjadikan Gili Trawangan sebagai tujuan wisata populer baik bagi wisatawan dalam negeri dan luar negeri.\r\n\r\nSelain pantai dan alam bawah laut, tempat wisata Nusantara yang berada di Provinsi Nusa Tenggara Barat ini juga memiliki berbagai lansekap menakjubkan dan juga spot-spot foto yang instagramable, lho.', 'gili.jpg'),
(36, 'Mandalika', 'Nusa Tenggara Barat', 50000, '10.00', '19.00', '081298000745', 4.5, ' Lokasi ini menjadi tempat sempurna untuk berselancar. Terutama di Pantai Ubrug. Tak hanya punya pemandangan yang begitu menawan, ombak besarnya pun cukup menantang.', 'mandalika.jpg'),
(37, 'Ngarai Sianok', 'Bukittinggi', 35000, '07.30', '17.30', '085800145200', 4.8, ' Ngarai Sianok di Bukittinggi menjadi salah satu destinasi wisata di Indonesia yang tetap jadi favorit di 2019. Menjadi salah satu kebanggaan warga Sumatra Barat, Ngarai Sianok tampil cantik dengan bentang alamnya berupa lembah sempit dan bukit bertebing curam.', 'ngarai.jpg'),
(38, 'Kepulauan Anambas', 'Kepulauan Riau', 125000, '05.30', '21.30', '089654321090', 5, ' Kepulauan Anambas yang ada di Kepulauan Riau ini pada 2013 lalu pernah dinobatkan sebagai Kepulauan Tropis Terbaik di Asia menurut CNN. Predikat tersebut tentu saja diberikan pada Anambas sebab ia memiliki bentang alam yang luar biasa.', 'anambas.jpg'),
(39, 'Sungai', 'Riau', 15000, '07.00', '19.00', '081223109880', 3.8, ' Teman Traveler suka berselancar? Kalau begitu jangan lewatkan untuk berwisata ke Sungai Kampar, Riau! Sungai ini terkenal memiliki ombak yang cukup menantang setinggi 6 meter.\r\n\r\nBerdasarkan kriteria tersebut, sungai yang berada di Teluk Meranti, Kabupaten Pelalawan, Riau ini merupakan destinasi yang cocok untuk para adrenalin junkie. Siap menaklukkan ombaknya? Agendakan segera!', 'sungai.jpg'),
(40, 'Candi Muaro Jambi', 'Jambi', 10000, '09.30', '17.30', '0823805915408', 3.9, ' Candi Muaro Jambi merupakan kompleks candi Hindu-Buddha terbesar yang ada di Indonesia. Sebagai salah satu destinasi wisata sejarah, Candi Muaro Jambi terdiri atas nilai-nilai perpaduan antara Kerajaan Sriwijaya dan Kerajaan Melayu. Menurut perkiraan, candi ini sudah berdiri sejak ada 11 Masehi.\r\n\r\nTempat wisata di Indonesia yang diresmikan pada 2012 lalu sebagai KWST (Kawasan Wisata Sejarah Terpadu) ini banyak dikunjungi oleh wisatawan lokal dan mancanegara. Mereka penasaran dengan salah satu pusat tempat peribadatan agama Budha Tantri Mahayana yang ada di negara ini.', 'candi.jpg'),
(41, 'Fort Marlborough', 'Bengkulu', 25000, '07.30', '21.30', '085009801562', 4.5, ' Benteng Fort Marlborough adalah destinasi wisata sejarah yang masih menjadi favorit wisatawan di tahun 2019. Benteng ini merupakan peninggalan Inggris yang dibangun oleh EIC (East India Company) pada 1713 lalu. Pada masa itu, ia berfungsi sebagai titik pertahanan Inggris dari musuh.\r\n\r\nBenteng yang berdiri di lahan seluas 44.000 meter persegi ini memiliki ketinggian dari 8-8,5 meter. Di bagian dalam benteng, terdapat beberapa bangunan dengan atap segitiga. Disebutkan bahwa Fort Marlborough merupakan benteng terkuat kedua yang dibangun oleh Inggris di wilayah Timur. Luar biasa!', 'fort.jpg'),
(42, 'Pulau Peucang', 'Banten', 20000, '07.00', '20.00', '089435672656', 4, ' Teman Traveler sudah pernah berkunjung ke Taman Nasional Ujung Kulon? Nah! Pulau Peucang berada di bagian timur kawasan tersebut! Bukan main-main, pulau ini sudah ditetapkan menjadi salah satu situs warisan budaya UNESCO lho!\r\n\r\nBerlibur ke sini, wisatawan akan bertemu dengan berbagai jenis tumbuhan dan hewan khas Banten seperti Banteng Jawa, Lutung, Merak Hijau dan Rusa. Bukan hanya itu, pasir yang putih serta air laut yang biru di Pulau Peucang juga akan memanjakan mata!', 'pulau.jpg'),
(43, 'Gunung Rinjani', 'Lombok, Nusa Tenggara Barat', 30000, '08.00', '00.00', '082345222109', 4.9, ' Buat kamu yang suka akan aktivitas mendaki, pastilah sangat familiar dengan Gunung Rinjani yang berada di Lombok. Tempat ini merupakan gunung berapi tertinggi kedua di Indonesia. Dan karena hal itulah, hampir setiap tahunnya banyak pendaki mencoba untuk menaklukannya.\r\n\r\nKetinggian Rinjani ini mencapai 3.726 mdpl. Meskipun kamu bersusah payah saat mendakinya, panoramanya sangatlah cantik. Di atasnya juga ada bunga edelweiss dan Danau Segara Anak yang selama ini jadi spot incaran para pendaki. Yakin nggak mau ke sini?', 'rinjani.jpg');

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

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
