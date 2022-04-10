-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 06:16 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thoi_trang_adidas`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_tao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_dh`
--

CREATE TABLE `chi_tiet_dh` (
  `ma_ct_dh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `ngay_tao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_dh`
--

INSERT INTO `chi_tiet_dh` (`ma_ct_dh`, `ma_kh`, `ten_kh`, `so_luong`, `trang_thai`, `dia_chi`, `sdt`, `tong_tien`, `ngay_tao`) VALUES
(26, 8, 'nam', 2, 'đang giao', 'hà nội', '213131312', 245000, '2021-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `ma_dm` int(11) NOT NULL,
  `ten_dm` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`ma_dm`, `ten_dm`) VALUES
(1, 'Giày'),
(2, 'Áo'),
(7, 'Mũ ');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_dh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `so_luong_hh` int(11) NOT NULL,
  `ten_hh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia_hh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_ct_dh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`ma_dh`, `ma_hh`, `so_luong_hh`, `ten_hh`, `gia_hh`, `ma_kh`, `trang_thai`, `ma_ct_dh`) VALUES
(23, 21, 1, 'Mũ Bucket', 145000, 8, 'đang giao', 26),
(24, 20, 1, 'Mũ len dệt kim thêu ', 100000, 8, 'đang giao', 26);

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia_hh` int(11) NOT NULL,
  `mo_ta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_hh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` date NOT NULL,
  `gia_km` int(11) NOT NULL,
  `size` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `mau_sac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chat_lieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ma_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `gia_hh`, `mo_ta`, `anh_hh`, `ngay_tao`, `gia_km`, `size`, `mau_sac`, `chat_lieu`, `luot_xem`, `so_luong`, `ma_dm`) VALUES
(12, 'Giày Thể Thao Siêu Êm', 799000, 'Giày Thể Thao Sneakers Adidas Siêu Nhẹ Thời Trang', '/thoi_trang_adidas/images/1.jpg', '2021-12-07', 0, '40', 'Đen', 'Da', 24, 898, 1),
(14, 'Giày giày adidas 2 màu', 346000, '✔️ Đế cao su tổng hợp, siêu nhẹ, đi êm, ma sát cực tốt\r\n✔️ Giày đẹp, đường may chắc chắn bền. vải mềm thoáng, đi rất thoải mái.\r\n✔️ Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm... ', '/thoi_trang_adidas/images/2.jpg', '2021-12-07', 0, '40', 'Đen Trắng', 'Da', 1, 200, 1),
(15, 'Giày Thể Thao Adidas Alpha', 456000, 'Đế cao su tổng hợp, siêu nhẹ, đi êm, ma sát cực tốt', '/thoi_trang_adidas/images/3.jpg', '2021-12-07', 0, '40', 'Đen Trắng', 'Vải ', 0, 500, 1),
(16, 'Áo Stripes White', 244500, 'Thiết kế trẻ trung, năng động phù hợp cả đi chơi và các hoạt động thể thao như gym, yoga, thể thao ngoài trời,...', '/thoi_trang_adidas/images/4.jpg', '2021-12-07', 0, '37', 'Trắng', 'Cotton', 0, 500, 2),
(17, 'Áo Hoodie ', 220000, 'Poly 2 Da 4 Chiều ngoại nhập chính phẩm', '/thoi_trang_adidas/images/5.jpg', '2021-12-07', 0, '35', 'Trắng', 'Poly, Da', 0, 454, 2),
(18, 'Áo khoác thể thao ', 240000, 'Áo thun Unisex  Basic Tee phông trơn nam nữ tay lỡ oversize form rộng :\r\nĐảm bảo vải chuẩn cotton 4 chiều 100% chất lượng .', '/thoi_trang_adidas/images/6.jpg', '2021-12-07', 0, '40', 'Xanh trắng', 'Vải', 0, 211, 2),
(19, 'Mũ adidas lưỡi trai', 159000, 'Rất nhiều khách hàng yêu quý của em đã feedback chất lượng không có gì để phàn nàn \r\nCHÚC CÁC BẠN MUA SẮM VUI VẺ', '/thoi_trang_adidas/images/7.jpg', '2021-12-07', 0, '34', 'Đen', 'Kaki, Cotton', 0, 343, 7),
(20, 'Mũ len dệt kim thêu ', 100000, 'Ấm áp ', '/thoi_trang_adidas/images/8.jpg', '2021-12-07', 0, '34', 'Đen, Xám', 'Len', 2, 456, 7),
(21, 'Mũ Bucket', 145000, 'Chu vi nón: 56-62cm, có thể điều chỉnh kích cỡ với khóa kéo sau chắc chắn', '/thoi_trang_adidas/images/9.jpg', '2021-12-07', 0, '32', 'Đen', 'Vải', 1, 432, 7);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `anh_kh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vai_tro` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_kh`, `email`, `mat_khau`, `dia_chi`, `gioi_tinh`, `anh_kh`, `vai_tro`) VALUES
(1, 'Vũ Công Tuyền', 'vucongtuyen.hn@gmail.com', '0983358791', 'Ba Vì, Hà Nội', 'nam', '', 1),
(3, 'Triệu Việt Đức', 'ductv9343974@gmail.com', '123abc', 'Ba Đình, Hà Nội', 'Nam', '', 0),
(7, 'Phạm Quốc Toản', 'toanpq3745735as457354@gmail.com', '123', 'hà nội', 'Nam', '', 0),
(8, 'nam', 'toanpq374573dadad5as457354@gmail.com', '1234', 'hà nội', 'Nữ', '', 0),
(10, 'Phố', 'pho@gmail.com', 'a', 'Ninh Bình', 'nam', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `ma_slider` int(11) NOT NULL,
  `ten_slider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duong_dan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_slider` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ma_slider`, `ten_slider`, `duong_dan`, `anh_slider`) VALUES
(2, 'ảnh giày', '', '/thoi_trang_adidas/images/baner.PNG'),
(3, 'anh2', '', '/thoi_trang_adidas/images/adidas-banner-3.jpg'),
(4, 'anh412', '', '/thoi_trang_adidas/images/anh2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `FK_hh` (`ma_hh`),
  ADD KEY `FK_kh` (`ma_kh`);

--
-- Indexes for table `chi_tiet_dh`
--
ALTER TABLE `chi_tiet_dh`
  ADD PRIMARY KEY (`ma_ct_dh`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma_dm`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_ct_dh` (`ma_ct_dh`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `FK_dm` (`ma_dm`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ma_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chi_tiet_dh`
--
ALTER TABLE `chi_tiet_dh`
  MODIFY `ma_ct_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `ma_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `ma_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `FK_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `ma_ct_dh` FOREIGN KEY (`ma_ct_dh`) REFERENCES `chi_tiet_dh` (`ma_ct_dh`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `FK_dm` FOREIGN KEY (`ma_dm`) REFERENCES `danh_muc` (`ma_dm`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
