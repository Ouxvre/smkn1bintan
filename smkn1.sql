-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2025 at 03:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `created_at`) VALUES
(21, '1', '1758248547_default.jpeg', '2025-09-19 02:22:27'),
(22, '12', '1758248564_default.jpeg', '2025-09-19 02:22:44'),
(23, '12', '1758248569_default.jpeg', '2025-09-19 02:22:49'),
(24, '12', '1758248575_default.jpeg', '2025-09-19 02:22:55'),
(25, '12', '1758248576_default.jpeg', '2025-09-19 02:22:56'),
(26, '121', '1758248580_default.jpeg', '2025-09-19 02:23:00'),
(27, '1212', '1758248586_default.jpeg', '2025-09-19 02:23:06'),
(28, '121', '1758248592_default.jpeg', '2025-09-19 02:23:12'),
(29, '122', '1758248604_default.jpeg', '2025-09-19 02:23:24'),
(30, '1213', '1758248611_default.jpeg', '2025-09-19 02:23:31'),
(31, '12342134', '1758248617_default.jpeg', '2025-09-19 02:23:37'),
(32, '42134213', '1758248622_default.jpeg', '2025-09-19 02:23:42');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `profile_pic`) VALUES
(15, 'admin2', 'admin@gmail.com', '$2y$10$DnT7eNy8fgX6cY5WowoRUeeTSp32a0yPYpBiU7gK41nTCexaAgqBK', 'Admin', 'assets/image/profile/admin_profile/1758175784_webcam-toy-photo23.jpg'),
(19, 'dendy', 'dendxy@gmail.com', '$2y$10$6rcIK3SFiAXFXNRdnzumlOyR.vsWHB3okHXcSEW9dxnUN6ElQ8uq2', 'Editor', 'assets/image/profile/editor_profile/1758268779_324504274_503253338562636_572588622451147049_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
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
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
