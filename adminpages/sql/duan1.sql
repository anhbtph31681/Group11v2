-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2023 lúc 08:06 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_dang` date NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `ten_banner` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bienthe`
--

CREATE TABLE `bienthe` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `mau` varchar(50) NOT NULL,
  `kich_co` int(11) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `diem` int(11) NOT NULL,
  `ngay_danh_gia` date NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `id` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_bien_the` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thanh_tien` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `id` int(11) NOT NULL,
  `ten_chuc_vu` varchar(50) NOT NULL,
  `mo_ta` text NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_sp`
--

CREATE TABLE `danhmuc_sp` (
  `id` int(11) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `trang_thai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `he_thong`
--

CREATE TABLE `he_thong` (
  `id` int(11) NOT NULL,
  `ten_cua_hang` varchar(255) NOT NULL,
  `sđt` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `fax` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_bien_the` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `ngay_dat` date NOT NULL,
  `tong_hoa_don` decimal(10,2) NOT NULL,
  `id_km` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id` int(11) NOT NULL,
  `ma_km` varchar(20) NOT NULL,
  `phan_tram_km` int(11) NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(11) NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` text NOT NULL,
  `chuc_vu` varchar(50) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `img_thumbnail` varchar(255) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bienthe`
--
ALTER TABLE `bienthe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachhang` (`id_khachhang`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hd` (`id_hd`),
  ADD KEY `id_bien_the` (`id_bien_the`);

--
-- Chỉ mục cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc_sp`
--
ALTER TABLE `danhmuc_sp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `he_thong`
--
ALTER TABLE `he_thong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bien_the` (`id_bien_the`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachhang` (`id_khachhang`),
  ADD KEY `id_km` (`id_km`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ma_km` (`ma_km`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ten_dang_nhap` (`ten_dang_nhap`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bienthe`
--
ALTER TABLE `bienthe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc_sp`
--
ALTER TABLE `danhmuc_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `he_thong`
--
ALTER TABLE `he_thong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bienthe`
--
ALTER TABLE `bienthe`
  ADD CONSTRAINT `bienthe_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `nguoi_dung` (`id`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_1` FOREIGN KEY (`id_hd`) REFERENCES `hoa_don` (`id`),
  ADD CONSTRAINT `chi_tiet_hoa_don_ibfk_2` FOREIGN KEY (`id_bien_the`) REFERENCES `bienthe` (`id`);

--
-- Các ràng buộc cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `hinh_anh_ibfk_1` FOREIGN KEY (`id_bien_the`) REFERENCES `bienthe` (`id`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `nguoi_dung` (`id`),
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`id_km`) REFERENCES `khuyen_mai` (`id`);

--
-- Các ràng buộc cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD CONSTRAINT `lien_he_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `nguoi_dung` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc_sp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
