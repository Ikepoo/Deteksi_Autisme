-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2023 pada 01.22
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_pakar_autisme`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
('', '', ''),
('adm01', 'admin1_test', 'admin1_tes'),
('adm02', 'admin2', 'admin2'),
('adm03', 'admin3', 'admin3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aturan`
--

CREATE TABLE `tb_aturan` (
  `id_aturan` varchar(10) NOT NULL,
  `id_gejala1` varchar(10) NOT NULL,
  `id_gejala2` varchar(10) NOT NULL,
  `id_gejala3` varchar(10) DEFAULT NULL,
  `id_gejala4` varchar(10) NOT NULL,
  `id_gejala5` varchar(10) NOT NULL,
  `id_jenis` varchar(10) NOT NULL,
  `id_penanganan` varchar(10) NOT NULL,
  `add_time` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_aturan`
--

INSERT INTO `tb_aturan` (`id_aturan`, `id_gejala1`, `id_gejala2`, `id_gejala3`, `id_gejala4`, `id_gejala5`, `id_jenis`, `id_penanganan`, `add_time`, `updated_at`, `created_at`) VALUES
('at01', 'g01', 'g02', 'g03', 'g04', 'g05', 'j01', 'p01', '2023-06-01', '2023-06-16 06:19:58', '2023-06-16 06:19:58'),
('at02', 'g06', 'g07', 'g08', 'g09', 'g10', 'j02', 'p02', '2023-06-03', '2023-06-16 06:20:17', '2023-06-16 06:20:17'),
('at03', 'g11', 'g12', 'g13', 'g14', 'g15', 'j03', 'p03', '2023-06-06', '2023-06-16 06:20:38', '2023-06-16 06:20:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `add_time` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `nama_gejala`, `add_time`, `updated_at`, `created_at`) VALUES
('g01', 'Suka membeo atau mengulang kata', '2023-06-01', '2023-06-16 06:02:57', '2023-06-16 06:02:57'),
('g02', 'Bicara terlalu cepat', '2023-06-01', '2023-06-16 06:03:07', '2023-06-16 06:03:07'),
('g03', 'Bicara tanpa nada atau tanpa irama', '2023-06-01', '2023-06-16 06:03:18', '2023-06-16 06:03:18'),
('g04', 'Tidak mengerti disuruh', '2023-06-01', '2023-06-16 06:03:33', '2023-06-16 06:03:33'),
('g05', 'Tidak mengerti pertanyaan', '2023-06-01', '2023-06-16 06:03:42', '2023-06-16 06:03:42'),
('g06', 'Suka memanjat', '2023-06-03', '2023-06-16 06:05:10', '2023-06-16 06:05:10'),
('g07', 'Bergumam, bersenandung, menggeram', '2023-06-03', '2023-06-16 06:05:21', '2023-06-16 06:05:21'),
('g08', 'Suka meraba tekstur pada suatu benda', '2023-06-03', '2023-06-16 06:05:33', '2023-06-16 06:05:33'),
('g09', 'Suka melirik-lirik', '2023-06-03', '2023-06-16 06:05:44', '2023-06-16 06:05:44'),
('g10', 'Menggeretak-geretakkan gigi', '2023-06-03', '2023-06-16 06:05:53', '2023-06-16 06:05:53'),
('g11', 'Lebih memperhatikan benda dibanding wajah', '2023-06-06', '2023-06-16 06:07:01', '2023-06-16 06:07:01'),
('g12', 'Kontak mata kurang / tidak ada', '2023-06-06', '2023-06-16 06:07:10', '2023-06-16 06:07:10'),
('g13', 'Cuek didatangi / ditinggal', '2023-06-06', '2023-06-16 06:07:24', '2023-06-16 06:07:24'),
('g14', 'Tidak berperhatian pada apa yang terjadi', '2023-06-06', '2023-06-16 06:07:53', '2023-06-16 06:07:53'),
('g15', 'Lebih berperhatian suara benda / hewan', '2023-06-06', '2023-06-16 06:08:43', '2023-06-16 06:08:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasildiagnosa`
--

CREATE TABLE `tb_hasildiagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_aturan` varchar(10) NOT NULL,
  `id_gejala1` varchar(10) NOT NULL,
  `id_gejala2` varchar(10) NOT NULL,
  `id_gejala3` varchar(10) NOT NULL,
  `id_gejala4` varchar(10) NOT NULL,
  `id_gejala5` varchar(10) NOT NULL,
  `umur_anak` int(11) NOT NULL,
  `nama_jenis` varchar(40) NOT NULL,
  `cara_penanganan` text NOT NULL,
  `tanggal` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_hasildiagnosa`
--

INSERT INTO `tb_hasildiagnosa` (`id_diagnosa`, `id_aturan`, `id_gejala1`, `id_gejala2`, `id_gejala3`, `id_gejala4`, `id_gejala5`, `umur_anak`, `nama_jenis`, `cara_penanganan`, `tanggal`, `updated_at`, `created_at`) VALUES
(1, 'at02', 'g06', 'g07', 'g08', 'g04', 'g10', 12, 'Gangguan Stimulasi Diri', 'Coba identifikasi pemicu atau situasi yang memicu perilaku stimulasi diri anak. Hal ini dapat mencakup suara keras, pencahayaan yang terlalu terang, sentuhan yang berlebihan, atau perubahan rutinitas. Dengan mengetahui pemicu, Anda dapat mengambil langkah-langkah untuk meminimalkan atau menghindari situasi tersebut. Atau dengan membantu anak untuk memahami perbedaan perilaku yang dapat diterima di tempat umum dan dalam lingkungan pribadi. Ajarkan mereka keterampilan sosial dan alternatif yang sesuai dalam mengatasi stimulasi diri. Berikan dukungan emosional dan pengakuan positif saat mereka menggunakan strategi pengaturan diri yang lebih adaptif.', '2023-06-13', '2023-06-16 06:40:14', '2023-06-16 06:40:14'),
(3, 'at03', 'g11', 'g12', 'g08', 'g14', 'g05', 9, 'Gangguan Interaksi Sosial', 'Dapat melakukan terapi ABA (Terapi Perilaku Terapan / Applied Behavior Analysis), terpi ini menggunakan pembingkaian perilaku untuk mengajarkan keterampilan sosial atau perilaku yang diinginkan dengan memecahnya menjadi langkah-langkah kecil yang dapat dicapai oleh anak. Setiap langkah kecil diperkuat positif secara bertahap sehingga anak dapat mencapai tujuan akhir. Dan juga memastikan bahwa keterampilan yang dipelajari oleh anak dapat diterapkan di berbagai konteks dan situasi. Ini melibatkan latihan dan praktik di lingkungan yang berbeda dan melibatkan orang lain seperti keluarga, teman sebaya, dan guru.', '2023-06-17', '2023-06-16 10:15:41', '2023-06-16 10:15:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` varchar(10) NOT NULL,
  `id_pakar` varchar(10) NOT NULL,
  `nama_pakar` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_pakar`, `nama_pakar`, `tanggal`, `jam`, `updated_at`, `created_at`) VALUES
('sc01', 'pk001', 'Dr. Temple Grandin', '2023-05-17', '11:13:00', '2023-06-03 00:54:02', '2023-06-03 00:54:02'),
('sc02', 'pk002', 'Dr. Tony Attwood', '2023-05-17', '13:00:00', '2023-06-03 00:54:02', '2023-06-03 00:54:02'),
('sc03', 'pk003', 'Dr. Simon Baron-Cohen', '2023-05-18', '10:00:00', '2023-06-03 00:54:02', '2023-06-03 00:54:02'),
('sc04', 'pk004', 'Dr. Ami Klin', '2023-05-18', '12:00:00', '2023-06-03 00:54:02', '2023-06-03 00:54:02'),
('sc05', 'pk001', 'Dr. Temple Grandin', '2023-06-27', '07:54:00', '2023-06-02 17:54:09', '2023-06-02 17:54:09'),
('sc06', 'pk001', 'Dr. Temple Grandin', '2023-06-23', '07:54:00', '2023-06-02 17:55:50', '2023-06-02 17:55:50'),
('sc07', 'pk003', 'Dr. Simon Baron-Cohen', '2023-06-14', '11:56:00', '2023-06-02 17:57:35', '2023-06-02 17:57:35'),
('sc08', 'pk001', 'Dr. Temple Grandin', '2023-06-29', '18:35:00', '2023-06-02 22:35:08', '2023-06-02 22:35:08'),
('sc09', 'pk002', 'Dr. Tony Attwood', '2023-07-05', '08:42:00', '2023-06-03 06:30:54', '2023-06-03 06:30:45'),
('sc10', 'pk002', 'Dr. Tony Attwood', '2023-06-22', '16:08:00', '2023-06-03 20:02:49', '2023-06-03 20:02:49'),
('sc11', 'pk002', 'Dr. Tony Attwood', '2023-06-08', '14:19:00', '2023-06-03 20:16:32', '2023-06-03 20:16:32'),
('sc12', 'pk002', 'Dr. Tony Attwood', '2023-06-09', '14:32:00', '2023-06-03 20:28:57', '2023-06-03 20:28:57'),
('sc13', 'pk001', 'Dr. Temple Grandin', '2023-06-21', '10:37:00', '2023-06-05 08:26:12', '2023-06-05 08:25:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` varchar(10) NOT NULL,
  `nama_jenis` varchar(40) NOT NULL,
  `add_time` date NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `nama_jenis`, `add_time`, `updated_at`, `created_at`) VALUES
('j01', 'Gangguan Berkomunikasi', '2023-05-28', '2023-06-03 12:22:03', '2023-06-03 12:22:03'),
('j02', 'Gangguan Stimulasi Diri', '2023-05-17', '2023-06-03 12:22:03', '2023-06-03 12:22:03'),
('j03', 'Gangguan Interaksi Sosial', '2023-05-01', '2023-06-03 12:22:03', '2023-06-03 12:22:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `id_konsultasi` varchar(10) NOT NULL,
  `id_pakar` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `gejala` text NOT NULL,
  `hasil` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_konsultasi`
--

INSERT INTO `tb_konsultasi` (`id_konsultasi`, `id_pakar`, `tanggal`, `gejala`, `hasil`, `updated_at`, `created_at`) VALUES
('ks001', 'pk002', '2023-05-17', 'Tidak pernah mau menggungganakan mainan, tidak suka bubur', 'Terapi BIT (Biomedical Intervention Therapy) Terapi melalui makanan (diet therapy) diberikan untuk anak-anak dengan masalah alergi makanan tertentu. Terapi dilakukan selama 40-100 jam perminggu', '2023-06-03 04:28:03', '2023-06-03 10:49:59'),
('ks002', 'pk003', '2023-06-02', 'Tidak senang diayun, lebih suka menyendiri , jarang menangis', 'BA (Applied Behaviour Analysis) Mendampingi dan mengamati perilaku anak, memberikan contoh perilaku yang aman bagi anak.', '2023-06-03 04:27:51', '2023-06-03 10:49:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pakar`
--

CREATE TABLE `tb_pakar` (
  `id_pakar` varchar(10) NOT NULL,
  `nama_pakar` varchar(40) NOT NULL,
  `bio` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pakar`
--

INSERT INTO `tb_pakar` (`id_pakar`, `nama_pakar`, `bio`, `username`, `password`, `updated_at`, `created_at`) VALUES
('pk001', 'Dr. Temple Grandin', 'seorang aktivis dan pembicara publik yang memberikan wawasan yang berharga tentang kehidupan dengan autisme, serta membantu dalam pengembangan desain fasilitas yang lebih baik untuk hewan ternak.', 'Temple', 'Temple', '2023-06-05 14:23:23', '2023-06-05 14:23:23'),
('pk002', 'Dr. Tony Attwood', 'eorang psikolog klinis terkenal yang mengkhususkan diri dalam autisme. Dia telah memberikan kontribusi signifikan dalam pemahaman dan pengobatan autisme, terutama pada individu dengan sindrom Asperger', 'Tony', 'Tony', '2023-06-05 14:23:23', '2023-06-05 14:23:23'),
('pk003', 'Dr. Simon Baron-Cohen', 'seorang profesor psikopatologi pengembangan dan direktur Cambridge Autism Research Centre di University of Cambridge. Dia telah melakukan penelitian luas dalam autisme dan mengembangkan teori tentang autisme dari perspektif neurobiologis.', 'Simon', 'Simon', '2023-06-05 14:23:23', '2023-06-05 14:23:23'),
('pk004', 'Dr. Ami Klin', 'Dr. Catherine Lord adalah seorang psikolog klinis terkenal yang telah berkontribusi dalam pengembangan alat diagnostik untuk autisme, seperti ADI-R (Autism Diagnostic Interview-Revised) dan ADOS (Autism Diagnostic Observation Schedule)', 'Klin', 'Klin', '2023-06-05 14:23:23', '2023-06-05 14:23:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penanganan`
--

CREATE TABLE `tb_penanganan` (
  `id_penanganan` varchar(10) NOT NULL,
  `id_jenis` varchar(10) NOT NULL,
  `cara_penanganan` text NOT NULL,
  `add_time` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penanganan`
--

INSERT INTO `tb_penanganan` (`id_penanganan`, `id_jenis`, `cara_penanganan`, `add_time`, `updated_at`, `created_at`) VALUES
('p01', 'j01', 'Jika anak mengalami kesulitan dalam berkomunikasi lisan, mempertimbangkan penggunaan metode komunikasi alternatif seperti menggunakan gambar, kartu kata, atau bahasa isyarat yang disesuaikan dengan kebutuhan anak. Ini dapat membantu anak untuk mengungkapkan keinginan, kebutuhan, atau perasaannya dengan cara yang lebih efektif. Selain itu melibatkan keluarga dan teman sebaya dalam interaksi dan aktivitas dengan anak dapat membantu memperluas kesempatan komunikasi sosial. Mereka dapat mendukung anak dalam membangun keterampilan komunikasi dan membantu menciptakan lingkungan yang mendukung', '2023-06-01', '2023-06-16 06:14:40', '2023-06-16 06:14:40'),
('p02', 'j02', 'Coba identifikasi pemicu atau situasi yang memicu perilaku stimulasi diri anak. Hal ini dapat mencakup suara keras, pencahayaan yang terlalu terang, sentuhan yang berlebihan, atau perubahan rutinitas. Dengan mengetahui pemicu, Anda dapat mengambil langkah-langkah untuk meminimalkan atau menghindari situasi tersebut. Atau dengan membantu anak untuk memahami perbedaan perilaku yang dapat diterima di tempat umum dan dalam lingkungan pribadi. Ajarkan mereka keterampilan sosial dan alternatif yang sesuai dalam mengatasi stimulasi diri. Berikan dukungan emosional dan pengakuan positif saat mereka menggunakan strategi pengaturan diri yang lebih adaptif.', '2023-06-06', '2023-06-16 06:16:00', '2023-06-16 06:16:00'),
('p03', 'j03', 'Dapat melakukan terapi ABA (Terapi Perilaku Terapan / Applied Behavior Analysis), terpi ini menggunakan pembingkaian perilaku untuk mengajarkan keterampilan sosial atau perilaku yang diinginkan dengan memecahnya menjadi langkah-langkah kecil yang dapat dicapai oleh anak. Setiap langkah kecil diperkuat positif secara bertahap sehingga anak dapat mencapai tujuan akhir. Dan juga memastikan bahwa keterampilan yang dipelajari oleh anak dapat diterapkan di berbagai konteks dan situasi. Ini melibatkan latihan dan praktik di lingkungan yang berbeda dan melibatkan orang lain seperti keluarga, teman sebaya, dan guru.', '2023-06-06', '2023-06-16 06:19:35', '2023-06-16 06:19:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` varchar(10) NOT NULL,
  `nam_pengguna` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `status` enum('Anggota','Pelanggan') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nam_pengguna`, `email`, `status`, `username`, `password`) VALUES
('us001', 'Zainul', 'Zainul@gmail.com', 'Anggota', 'Zainul', 'Zainul'),
('us002', 'Musyafa', 'musyafa@gmail.com', 'Anggota', 'musyafa', 'musyafa'),
('us003', 'Aria', 'aria@gmail.com', 'Pelanggan', 'aria', 'aria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perkembangan`
--

CREATE TABLE `tb_perkembangan` (
  `id_perkembangan` int(11) NOT NULL,
  `id_diagnosa` int(11) NOT NULL,
  `hari` int(11) NOT NULL,
  `skor` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_aturan`
--
ALTER TABLE `tb_aturan`
  ADD PRIMARY KEY (`id_aturan`),
  ADD KEY `id_gejala` (`id_gejala1`),
  ADD KEY `tb_aturan_ibfk_4` (`id_gejala4`),
  ADD KEY `tb_aturan_ibfk_5` (`id_gejala5`),
  ADD KEY `tb_aturan_ibfk_6` (`id_penanganan`),
  ADD KEY `tb_aturan_ibfk_7` (`id_jenis`),
  ADD KEY `tb_aturan_ibfk_2` (`id_gejala2`),
  ADD KEY `tb_aturan_ibfk_3` (`id_gejala3`);

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `tb_hasildiagnosa`
--
ALTER TABLE `tb_hasildiagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `id_aturan` (`id_aturan`),
  ADD KEY `id_gejala1` (`id_gejala1`),
  ADD KEY `id_gejala2` (`id_gejala2`),
  ADD KEY `id_gejala3` (`id_gejala3`),
  ADD KEY `id_gejala4` (`id_gejala4`),
  ADD KEY `id_gejala5` (`id_gejala5`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pakar` (`id_pakar`);

--
-- Indeks untuk tabel `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_pakar` (`id_pakar`);

--
-- Indeks untuk tabel `tb_pakar`
--
ALTER TABLE `tb_pakar`
  ADD PRIMARY KEY (`id_pakar`);

--
-- Indeks untuk tabel `tb_penanganan`
--
ALTER TABLE `tb_penanganan`
  ADD PRIMARY KEY (`id_penanganan`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_perkembangan`
--
ALTER TABLE `tb_perkembangan`
  ADD PRIMARY KEY (`id_perkembangan`),
  ADD KEY `id_diagnosa` (`id_diagnosa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_hasildiagnosa`
--
ALTER TABLE `tb_hasildiagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_perkembangan`
--
ALTER TABLE `tb_perkembangan`
  MODIFY `id_perkembangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_aturan`
--
ALTER TABLE `tb_aturan`
  ADD CONSTRAINT `tb_aturan_ibfk_1` FOREIGN KEY (`id_gejala1`) REFERENCES `tb_gejala` (`id_gejala`),
  ADD CONSTRAINT `tb_aturan_ibfk_2` FOREIGN KEY (`id_gejala2`) REFERENCES `tb_gejala` (`id_gejala`),
  ADD CONSTRAINT `tb_aturan_ibfk_3` FOREIGN KEY (`id_gejala3`) REFERENCES `tb_gejala` (`id_gejala`),
  ADD CONSTRAINT `tb_aturan_ibfk_4` FOREIGN KEY (`id_gejala4`) REFERENCES `tb_gejala` (`id_gejala`),
  ADD CONSTRAINT `tb_aturan_ibfk_5` FOREIGN KEY (`id_gejala5`) REFERENCES `tb_gejala` (`id_gejala`),
  ADD CONSTRAINT `tb_aturan_ibfk_6` FOREIGN KEY (`id_penanganan`) REFERENCES `tb_penanganan` (`id_penanganan`),
  ADD CONSTRAINT `tb_aturan_ibfk_7` FOREIGN KEY (`id_jenis`) REFERENCES `tb_penanganan` (`id_jenis`);

--
-- Ketidakleluasaan untuk tabel `tb_hasildiagnosa`
--
ALTER TABLE `tb_hasildiagnosa`
  ADD CONSTRAINT `tb_hasildiagnosa_ibfk_1` FOREIGN KEY (`id_aturan`) REFERENCES `tb_aturan` (`id_aturan`),
  ADD CONSTRAINT `tb_hasildiagnosa_ibfk_5` FOREIGN KEY (`id_gejala1`) REFERENCES `tb_aturan` (`id_gejala1`),
  ADD CONSTRAINT `tb_hasildiagnosa_ibfk_6` FOREIGN KEY (`id_gejala2`) REFERENCES `tb_aturan` (`id_gejala2`),
  ADD CONSTRAINT `tb_hasildiagnosa_ibfk_7` FOREIGN KEY (`id_gejala3`) REFERENCES `tb_aturan` (`id_gejala3`),
  ADD CONSTRAINT `tb_hasildiagnosa_ibfk_8` FOREIGN KEY (`id_gejala4`) REFERENCES `tb_aturan` (`id_gejala4`),
  ADD CONSTRAINT `tb_hasildiagnosa_ibfk_9` FOREIGN KEY (`id_gejala5`) REFERENCES `tb_aturan` (`id_gejala5`);

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_pakar`) REFERENCES `tb_pakar` (`id_pakar`);

--
-- Ketidakleluasaan untuk tabel `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD CONSTRAINT `tb_konsultasi_ibfk_1` FOREIGN KEY (`id_pakar`) REFERENCES `tb_pakar` (`id_pakar`);

--
-- Ketidakleluasaan untuk tabel `tb_penanganan`
--
ALTER TABLE `tb_penanganan`
  ADD CONSTRAINT `tb_penanganan_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
