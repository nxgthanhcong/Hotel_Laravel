-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 23, 2020 lúc 03:18 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `final_hotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

DROP TABLE IF EXISTS `dichvu`;
CREATE TABLE IF NOT EXISTS `dichvu` (
  `MaDV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenDV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTaDV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaDV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDungDV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`MaDV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHD` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `MaKHf` int(10) UNSIGNED DEFAULT NULL,
  `MaDVf` int(10) UNSIGNED DEFAULT NULL,
  `MaThuef` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`MaHD`),
  KEY `hoadon_makhf_foreign` (`MaKHf`),
  KEY `hoadon_madvf_foreign` (`MaDVf`),
  KEY `hoadon_mathuef_foreign` (`MaThuef`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenKH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`MaKH`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `DiaChi`, `Sdt`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thành Công', '1102 Huỳnh Tấn Phát', '2222222222', '2020-12-23 05:29:02', '2020-12-23 05:29:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

DROP TABLE IF EXISTS `loaiphong`;
CREATE TABLE IF NOT EXISTS `loaiphong` (
  `MaLoai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenLoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`MaLoai`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphong`
--

INSERT INTO `loaiphong` (`MaLoai`, `TenLoai`, `Mota`, `created_at`, `updated_at`) VALUES
(1, 'Single Room', '<p>kkkkkkkkk</p>', '2020-12-22 08:46:14', '2020-12-22 12:26:04'),
(2, 'Double Room', '<p>2 người</p>', '2020-12-22 08:49:29', '2020-12-22 08:49:29'),
(3, 'Twin room', '<p>okkkkkkkkk</p>', '2020-12-22 12:33:45', '2020-12-22 12:33:45'),
(4, 'Extra Room', '<p>ph&ograve;ng khủng long</p>', '2020-12-22 12:34:13', '2020-12-22 12:35:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_08_12_0003651_create_news_table', 2),
(71, '2014_10_12_000000_create_users_table', 3),
(72, '2014_10_12_100000_create_password_resets_table', 3),
(73, '2019_08_19_000000_create_failed_jobs_table', 3),
(74, '2020_10_01_021229_add_level_status_to_users_table', 3),
(40, '2020_12_18_085355_dich_vu', 2),
(30, '2020_12_18_085648_khach_hang', 1),
(75, '2020_12_18_085356_khach_hang', 3),
(76, '2020_12_18_085648_loaiphong', 3),
(77, '2020_12_18_085649_phong', 3),
(78, '2020_12_18_085650_thue', 3),
(79, '2020_12_18_085651_dich_vu', 3),
(80, '2020_12_18_085652_hoa_don', 3),
(81, '2020_12_18_085954_nhan_vien', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `MaNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenNV` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChucVu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

DROP TABLE IF EXISTS `phong`;
CREATE TABLE IF NOT EXISTS `phong` (
  `MaPhong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenPhong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoaiPhong` int(10) UNSIGNED DEFAULT NULL,
  `GiaPhong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`MaPhong`),
  KEY `phong_loaiphong_foreign` (`LoaiPhong`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`MaPhong`, `TenPhong`, `LoaiPhong`, `GiaPhong`, `created_at`, `updated_at`) VALUES
(1, 'Room 01', 1, '1000002', '2020-12-22 12:54:45', '2020-12-22 13:00:14'),
(2, 'Room 02', 4, '100000', '2020-12-22 12:57:21', '2020-12-22 12:57:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thue`
--

DROP TABLE IF EXISTS `thue`;
CREATE TABLE IF NOT EXISTS `thue` (
  `MaThue` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `MaKHf` int(10) UNSIGNED DEFAULT NULL,
  `MaPhongf` int(10) UNSIGNED DEFAULT NULL,
  `NgayDen` date NOT NULL,
  `NgayDi` date NOT NULL,
  `ThanhTien` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`MaThue`),
  KEY `thue_makhf_foreign` (`MaKHf`),
  KEY `thue_maphongf_foreign` (`MaPhongf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thue`
--

INSERT INTO `thue` (`MaThue`, `MaKHf`, `MaPhongf`, `NgayDen`, `NgayDi`, `ThanhTien`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '2020-12-02', '2020-12-03', 1000, '2020-12-23 05:29:58', '2020-12-23 05:29:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$5SnX9ERDOqKJG/22V9fa5upum4VfG6XCRvTKpna5tiafPzLqqIWai', 0, 1, NULL, NULL, NULL),
(2, 'User1', 'user1@gmail.com', NULL, '$2y$10$pdqBu2CWTwyRphWvj2N/6eETmY3GmG7HsZCnfaNUi/S0bdy80Z.R2', 1, 1, NULL, '2020-12-23 07:47:10', '2020-12-23 07:47:10'),
(3, 'User2', 'user2@gmail.com', NULL, '$2y$10$mPh6obVuf7PDAHN1XDg/d.XnvE6U4sxI8lbBzXoHjIVCHKHiUgot2', 0, 0, NULL, '2020-12-23 07:48:40', '2020-12-23 07:53:10');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_madvf_foreign` FOREIGN KEY (`MaDVf`) REFERENCES `dichvu` (`MaDV`),
  ADD CONSTRAINT `hoadon_makhf_foreign` FOREIGN KEY (`MaKHf`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `hoadon_mathuef_foreign` FOREIGN KEY (`MaThuef`) REFERENCES `thue` (`MaThue`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_loaiphong_foreign` FOREIGN KEY (`LoaiPhong`) REFERENCES `loaiphong` (`MaLoai`);

--
-- Các ràng buộc cho bảng `thue`
--
ALTER TABLE `thue`
  ADD CONSTRAINT `thue_makhf_foreign` FOREIGN KEY (`MaKHf`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `thue_maphongf_foreign` FOREIGN KEY (`MaPhongf`) REFERENCES `phong` (`MaPhong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
