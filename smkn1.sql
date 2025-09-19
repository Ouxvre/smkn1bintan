-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2025 pada 04.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

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
-- Struktur dari tabel `berita`
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
-- Dumping data untuk tabel `berita`
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
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
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
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `profile_pic`) VALUES
(15, 'admin2', 'admin@gmail.com', '$2y$10$DnT7eNy8fgX6cY5WowoRUeeTSp32a0yPYpBiU7gK41nTCexaAgqBK', 'Admin', 'assets/image/profile/admin_profile/1758175784_webcam-toy-photo23.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
