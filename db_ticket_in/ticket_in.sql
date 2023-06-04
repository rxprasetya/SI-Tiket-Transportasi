-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2023 pada 14.34
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_in`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_datang` date NOT NULL,
  `waktu_berangkat` time NOT NULL,
  `waktu_datang` time NOT NULL,
  `id_jadwal_untuk` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`id`, `tanggal_berangkat`, `tanggal_datang`, `waktu_berangkat`, `waktu_datang`, `id_jadwal_untuk`, `created_at`, `updated_at`) VALUES
(1, '2023-05-03', '2023-12-31', '12:59:00', '12:59:00', 1, '2023-06-03 07:01:03', '2023-06-03 07:01:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_untuks`
--

CREATE TABLE `jadwal_untuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jadwal_untuk` varchar(32) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_untuks`
--

INSERT INTO `jadwal_untuks` (`id`, `nama_jadwal_untuk`, `created_at`, `updated_at`) VALUES
(1, 'Train', '2023-06-03 07:00:32', '2023-06-03 07:00:32'),
(2, 'Ship', '2023-06-03 07:00:37', '2023-06-03 07:00:37'),
(3, 'Plane', '2023-06-03 07:00:43', '2023-06-03 07:00:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapals`
--

CREATE TABLE `kapals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kapal` varchar(32) NOT NULL,
  `tempat_duduk_kapal` varchar(32) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kapals`
--

INSERT INTO `kapals` (`id`, `nama_kapal`, `tempat_duduk_kapal`, `created_at`, `updated_at`) VALUES
(1, 'Km. Lawu', '500', '2023-06-03 06:59:43', '2023-06-03 06:59:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keretas`
--

CREATE TABLE `keretas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kereta` varchar(32) NOT NULL,
  `tempat_duduk_kereta` varchar(32) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keretas`
--

INSERT INTO `keretas` (`id`, `nama_kereta`, `tempat_duduk_kereta`, `created_at`, `updated_at`) VALUES
(1, 'KAI. Manggarai', '64', '2023-06-03 06:59:56', '2023-06-03 06:59:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotas`
--

CREATE TABLE `kotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kota` varchar(32) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kotas`
--

INSERT INTO `kotas` (`id`, `nama_kota`, `created_at`, `updated_at`) VALUES
(1, 'Jakarta', '2023-06-03 07:00:11', '2023-06-03 07:00:11'),
(2, 'Bandung', '2023-06-03 07:00:14', '2023-06-03 07:00:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maskapais`
--

CREATE TABLE `maskapais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_maskapai` varchar(32) NOT NULL,
  `maks_kabin_maskapai` varchar(32) NOT NULL,
  `tempat_duduk_maskapai` varchar(32) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `maskapais`
--

INSERT INTO `maskapais` (`id`, `nama_maskapai`, `maks_kabin_maskapai`, `tempat_duduk_maskapai`, `created_at`, `updated_at`) VALUES
(1, 'Air Lion', '7 Kg', '128', '2023-06-03 07:00:06', '2023-06-03 07:00:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_25_045339_create_pegawais_table', 1),
(6, '2023_04_25_051335_create_penggunas_table', 1),
(7, '2023_04_25_055452_create_keretas_table', 1),
(8, '2023_04_25_055714_create_maskapais_table', 1),
(9, '2023_04_25_055901_create_kapals_table', 1),
(10, '2023_04_25_060234_create_kotas_table', 1),
(11, '2023_04_25_060303_create_jadwal_untuks_table', 1),
(12, '2023_04_25_060732_create_jadwals_table', 1),
(13, '2023_04_25_061244_create_tiket_keretas_table', 1),
(14, '2023_04_25_061303_create_tiket_pesawats_table', 1),
(15, '2023_04_25_061316_create_tiket_kapals_table', 1),
(16, '2023_04_25_062154_create_pesan_keretas_table', 1),
(17, '2023_04_25_062214_create_pesan_pesawats_table', 1),
(18, '2023_04_25_062233_create_pesan_kapals_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(64) NOT NULL,
  `username_pegawai` varchar(16) NOT NULL,
  `password_pegawai` varchar(16) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama_pegawai`, `username_pegawai`, `password_pegawai`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Rafid', 'rxprasetya', '123', 'Pegawai', '2023-06-03 06:58:24', '2023-06-03 06:58:24'),
(2, 'Ardhea', 'axcahyani', '123', 'Pegawai', '2023-06-03 09:15:55', '2023-06-03 09:15:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pengguna` varchar(64) NOT NULL,
  `username_pengguna` varchar(16) NOT NULL,
  `email_pengguna` varchar(64) NOT NULL,
  `password_pengguna` varchar(16) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penggunas`
--

INSERT INTO `penggunas` (`id`, `nama_pengguna`, `username_pengguna`, `email_pengguna`, `password_pengguna`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'Coimbra Arthur Zico', 'cxzico', 'cxzico@gmail.com', '123', '0812-5612-7856', '2023-06-03 06:59:26', '2023-06-03 06:59:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_kapals`
--

CREATE TABLE `pesan_kapals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket_kapal` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pesan_kapal` date NOT NULL,
  `jumlah_pesan_kapal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesan_kapals`
--

INSERT INTO `pesan_kapals` (`id`, `id_tiket_kapal`, `tanggal_pesan_kapal`, `jumlah_pesan_kapal`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-31', 1, '2023-06-03 08:49:00', '2023-06-03 08:57:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_keretas`
--

CREATE TABLE `pesan_keretas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket_kereta` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pesan_kereta` date NOT NULL,
  `jumlah_pesan_kereta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesan_keretas`
--

INSERT INTO `pesan_keretas` (`id`, `id_tiket_kereta`, `tanggal_pesan_kereta`, `jumlah_pesan_kereta`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-31', 11, '2023-06-03 08:50:40', '2023-06-03 08:57:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_pesawats`
--

CREATE TABLE `pesan_pesawats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket_pesawat` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pesan_pesawat` date NOT NULL,
  `jumlah_pesan_pesawat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesan_pesawats`
--

INSERT INTO `pesan_pesawats` (`id`, `id_tiket_pesawat`, `tanggal_pesan_pesawat`, `jumlah_pesan_pesawat`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-31', 1, '2023-06-03 08:51:48', '2023-06-03 08:57:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_kapals`
--

CREATE TABLE `tiket_kapals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kapal` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `harga_tiket_kapal` int(11) NOT NULL,
  `id_kota_asal` bigint(20) UNSIGNED NOT NULL,
  `id_kota_tujuan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tiket_kapals`
--

INSERT INTO `tiket_kapals` (`id`, `id_kapal`, `id_jadwal`, `harga_tiket_kapal`, `id_kota_asal`, `id_kota_tujuan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 900000, 1, 2, '2023-06-03 07:01:17', '2023-06-03 07:01:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_keretas`
--

CREATE TABLE `tiket_keretas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kereta` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `harga_tiket_kereta` int(11) NOT NULL,
  `id_kota_asal` bigint(20) UNSIGNED NOT NULL,
  `id_kota_tujuan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tiket_keretas`
--

INSERT INTO `tiket_keretas` (`id`, `id_kereta`, `id_jadwal`, `harga_tiket_kereta`, `id_kota_asal`, `id_kota_tujuan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 110000, 1, 2, '2023-06-03 07:01:30', '2023-06-03 07:01:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_pesawats`
--

CREATE TABLE `tiket_pesawats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_maskapai` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `harga_tiket_pesawat` int(11) NOT NULL,
  `id_kota_asal` bigint(20) UNSIGNED NOT NULL,
  `id_kota_tujuan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tiket_pesawats`
--

INSERT INTO `tiket_pesawats` (`id`, `id_maskapai`, `id_jadwal`, `harga_tiket_pesawat`, `id_kota_asal`, `id_kota_tujuan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1200000, 1, 2, '2023-06-03 07:01:47', '2023-06-03 07:01:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwals_id_jadwal_untuk_foreign` (`id_jadwal_untuk`);

--
-- Indeks untuk tabel `jadwal_untuks`
--
ALTER TABLE `jadwal_untuks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kapals`
--
ALTER TABLE `kapals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keretas`
--
ALTER TABLE `keretas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maskapais`
--
ALTER TABLE `maskapais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesan_kapals`
--
ALTER TABLE `pesan_kapals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_kapals_id_tiket_kapal_foreign` (`id_tiket_kapal`);

--
-- Indeks untuk tabel `pesan_keretas`
--
ALTER TABLE `pesan_keretas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_keretas_id_tiket_kereta_foreign` (`id_tiket_kereta`);

--
-- Indeks untuk tabel `pesan_pesawats`
--
ALTER TABLE `pesan_pesawats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_pesawats_id_tiket_pesawat_foreign` (`id_tiket_pesawat`);

--
-- Indeks untuk tabel `tiket_kapals`
--
ALTER TABLE `tiket_kapals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiket_kapals_id_kapal_foreign` (`id_kapal`),
  ADD KEY `tiket_kapals_id_jadwal_foreign` (`id_jadwal`),
  ADD KEY `tiket_kapals_id_kota_asal_foreign` (`id_kota_asal`),
  ADD KEY `tiket_kapals_id_kota_tujuan_foreign` (`id_kota_tujuan`);

--
-- Indeks untuk tabel `tiket_keretas`
--
ALTER TABLE `tiket_keretas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiket_keretas_id_kereta_foreign` (`id_kereta`),
  ADD KEY `tiket_keretas_id_jadwal_foreign` (`id_jadwal`),
  ADD KEY `tiket_keretas_id_kota_asal_foreign` (`id_kota_asal`),
  ADD KEY `tiket_keretas_id_kota_tujuan_foreign` (`id_kota_tujuan`);

--
-- Indeks untuk tabel `tiket_pesawats`
--
ALTER TABLE `tiket_pesawats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiket_pesawats_id_maskapai_foreign` (`id_maskapai`),
  ADD KEY `tiket_pesawats_id_jadwal_foreign` (`id_jadwal`),
  ADD KEY `tiket_pesawats_id_kota_asal_foreign` (`id_kota_asal`),
  ADD KEY `tiket_pesawats_id_kota_tujuan_foreign` (`id_kota_tujuan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jadwal_untuks`
--
ALTER TABLE `jadwal_untuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kapals`
--
ALTER TABLE `kapals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `keretas`
--
ALTER TABLE `keretas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `maskapais`
--
ALTER TABLE `maskapais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_kapals`
--
ALTER TABLE `pesan_kapals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan_keretas`
--
ALTER TABLE `pesan_keretas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan_pesawats`
--
ALTER TABLE `pesan_pesawats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tiket_kapals`
--
ALTER TABLE `tiket_kapals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tiket_keretas`
--
ALTER TABLE `tiket_keretas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tiket_pesawats`
--
ALTER TABLE `tiket_pesawats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_id_jadwal_untuk_foreign` FOREIGN KEY (`id_jadwal_untuk`) REFERENCES `jadwal_untuks` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesan_kapals`
--
ALTER TABLE `pesan_kapals`
  ADD CONSTRAINT `pesan_kapals_id_tiket_kapal_foreign` FOREIGN KEY (`id_tiket_kapal`) REFERENCES `tiket_kapals` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesan_keretas`
--
ALTER TABLE `pesan_keretas`
  ADD CONSTRAINT `pesan_keretas_id_tiket_kereta_foreign` FOREIGN KEY (`id_tiket_kereta`) REFERENCES `tiket_keretas` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesan_pesawats`
--
ALTER TABLE `pesan_pesawats`
  ADD CONSTRAINT `pesan_pesawats_id_tiket_pesawat_foreign` FOREIGN KEY (`id_tiket_pesawat`) REFERENCES `tiket_pesawats` (`id`);

--
-- Ketidakleluasaan untuk tabel `tiket_kapals`
--
ALTER TABLE `tiket_kapals`
  ADD CONSTRAINT `tiket_kapals_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id`),
  ADD CONSTRAINT `tiket_kapals_id_kapal_foreign` FOREIGN KEY (`id_kapal`) REFERENCES `kapals` (`id`),
  ADD CONSTRAINT `tiket_kapals_id_kota_asal_foreign` FOREIGN KEY (`id_kota_asal`) REFERENCES `kotas` (`id`),
  ADD CONSTRAINT `tiket_kapals_id_kota_tujuan_foreign` FOREIGN KEY (`id_kota_tujuan`) REFERENCES `kotas` (`id`);

--
-- Ketidakleluasaan untuk tabel `tiket_keretas`
--
ALTER TABLE `tiket_keretas`
  ADD CONSTRAINT `tiket_keretas_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id`),
  ADD CONSTRAINT `tiket_keretas_id_kereta_foreign` FOREIGN KEY (`id_kereta`) REFERENCES `keretas` (`id`),
  ADD CONSTRAINT `tiket_keretas_id_kota_asal_foreign` FOREIGN KEY (`id_kota_asal`) REFERENCES `kotas` (`id`),
  ADD CONSTRAINT `tiket_keretas_id_kota_tujuan_foreign` FOREIGN KEY (`id_kota_tujuan`) REFERENCES `kotas` (`id`);

--
-- Ketidakleluasaan untuk tabel `tiket_pesawats`
--
ALTER TABLE `tiket_pesawats`
  ADD CONSTRAINT `tiket_pesawats_id_jadwal_foreign` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id`),
  ADD CONSTRAINT `tiket_pesawats_id_kota_asal_foreign` FOREIGN KEY (`id_kota_asal`) REFERENCES `kotas` (`id`),
  ADD CONSTRAINT `tiket_pesawats_id_kota_tujuan_foreign` FOREIGN KEY (`id_kota_tujuan`) REFERENCES `kotas` (`id`),
  ADD CONSTRAINT `tiket_pesawats_id_maskapai_foreign` FOREIGN KEY (`id_maskapai`) REFERENCES `maskapais` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
