-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2025 at 09:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn1`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `kategori`, `isi`, `gambar`, `tanggal`) VALUES
(24, '2', 'berita', '2', 'webcam-toy-photo2 (1).jpg', '2025-09-18 14:33:59'),
(25, '1', 'berita', '1', 'SnapInsta.to_534311235_18102532063603935_8807446440674876561_n.jpg', '2025-09-18 14:38:01'),
(26, '3', 'berita', '3', 'webcam-toy-photo1 (1).jpg', '2025-09-18 14:38:09'),
(27, '4', 'berita', '4', 'webcam-toy-photo3.jpg', '2025-09-18 14:38:17'),
(28, '1', 'prestasi', '2', '9f080940-a63b-11ef-b344-f3522b40091e.jpg', '2025-09-19 08:11:53'),
(29, '1', 'informasi', '1', '6a31b8e0-9a1c-11ef-bd80-73b53a091084.jpg', '2025-09-19 08:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pembina` varchar(100) DEFAULT NULL,
  `jadwal` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id`, `nama`, `pembina`, `jadwal`, `deskripsi`, `foto`, `created_at`) VALUES
(12, 'Marawis & Hadroh', 'Ustadz Al-fariznok', 'Kamis, 15:30 - 17:00 WIB', 'Pelatihan musik islami tradisional untuk mengembangkan bakat seni dan spiritualitas', '1759120679_1759111898_ramean.jpg', '2025-09-29 04:37:59'),
(13, 'Marawis & Hadroh', 'Ustadz Al-fariznok', 'Kamis, 15:30 - 17:00 WIB', 'Pelatihan musik islami tradisional untuk mengembangkan bakat seni dan spiritualitas', '1759120700_1759111922_ramean.jpg', '2025-09-29 04:38:20'),
(14, 'Marawis & Hadroh', 'Ustadz Al-fariznok', 'Kamis, 15:30 - 17:00 WIB', 'Pelatihan musik islami tradisional untuk mengembangkan bakat seni dan spiritualitas', '1759121056_1759111922_ramean.jpg', '2025-09-29 04:44:16'),
(15, 'Marawis & Hadroh', 'Ustadz Al-fariznok', 'Kamis, 15:30 - 17:00 WIB', 'Pelatihan musik islami tradisional untuk mengembangkan bakat seni dan spiritualitas', '1759121066_1759111933_ramean.jpg', '2025-09-29 04:44:26'),
(16, 'Marawis & Hadroh', 'Ustadz Al-fariznok', 'Kamis, 15:30 - 17:00 WIB', 'Pelatihan musik islami tradisional untuk mengembangkan bakat seni dan spiritualitas', '1759121078_1759111922_ramean.jpg', '2025-09-29 04:44:38'),
(17, 'Marawis & Hadroh', 'Ustadz Al-fariznok', 'Kamis, 15:30 - 17:00 WIB', 'Pelatihan musik islami tradisional untuk mengembangkan bakat seni dan spiritualitas', '1759122154_1759111922_ramean.jpg', '2025-09-29 05:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `created_at`) VALUES
(33, 'Foto bersama guru SMKN 1 Bintan Utara', '1759111232_ramean.jpg', '2025-09-29 02:00:32'),
(34, 'Foto bersama guru SMKN 1 Bintan Utara', '1759111863_ramean.jpg', '2025-09-29 02:11:03'),
(35, 'Foto bersama guru SMKN 1 Bintan Utara', '1759111898_ramean.jpg', '2025-09-29 02:11:38'),
(36, 'Foto bersama guru SMKN 1 Bintan Utara', '1759111903_ramean.jpg', '2025-09-29 02:11:43'),
(37, 'Foto bersama guru SMKN 1 Bintan Utara', '1759111909_ramean.jpg', '2025-09-29 02:11:49'),
(38, 'Foto bersama guru SMKN 1 Bintan Utara', '1759111915_ramean.jpg', '2025-09-29 02:11:55'),
(39, 'Foto bersama guru SMKN 1 Bintan Utara', '1759111922_ramean.jpg', '2025-09-29 02:12:02'),
(40, 'Foto bersama guru SMKN 1 Bintan Utara', '1759111933_ramean.jpg', '2025-09-29 02:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `role` enum('kepala_sekolah','wakil_kepala','kepala_program','guru','tenaga_kependidikan') NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `jabatan`, `role`, `foto`) VALUES
(12, 'Penokk', 'Kepala Sekolah', 'kepala_sekolah', '1758276811_324504274_503253338562636_572588622451147049_n.jpg'),
(13, 'bujang', 'wakil kepala sekolah', 'wakil_kepala', '1758278605_Desain tanpa judul.png'),
(14, 'Penok', 'Guru Matematika', 'guru', '1758278921_WhatsApp Image 2024-04-21 at 21.36.55_34d3e8dc.jpg'),
(15, 'bujang', 'kepala jurusan  RPL', 'kepala_program', '1758280350_WhatsApp Image 2025-09-19 at 17.56.07_6e1e96a7.jpg'),
(16, 'asdwa', 'Staff TU', 'tenaga_kependidikan', '1758280389_WhatsApp Image 2025-09-19 at 17.56.09_eb277030.jpg'),
(17, 'bujang', 'Guru Agama Islam', 'guru', '1758280408_WhatsApp Image 2025-09-19 at 17.56.10_c86c13f3.jpg'),
(18, 'asdwa', 'Staff TU', 'tenaga_kependidikan', '1758280432_WhatsApp Image 2025-09-19 at 17.56.10_0143e7f3.jpg'),
(19, 'Penok', 'Kepala Jurusan TKJ', 'kepala_program', '1758280464_WhatsApp Image 2025-09-19 at 17.56.11_74ef3e2b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Editor') DEFAULT 'Editor',
  `profile_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `profile_pic`) VALUES
(15, 'admin2', 'admin@gmail.com', '$2y$10$DnT7eNy8fgX6cY5WowoRUeeTSp32a0yPYpBiU7gK41nTCexaAgqBK', 'Admin', 'assets/image/profile/admin_profile/1758175784_webcam-toy-photo23.jpg'),
(20, 'dendy', 'dendy@gmail.com', '$2y$10$DO34n0mMKdI4/xx.2jopCenC7ie0k/pf32gMpP.MBy3qbHHsxjWp.', 'Editor', 'assets/image/profile/editor_profile/1759110683_475531531_17896970493112179_603141323028996508_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
