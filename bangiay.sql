-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 03:20 PM
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
-- Database: `bangiay`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `dmid` int(11) NOT NULL,
  `dmname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`dmid`, `dmname`) VALUES
(9, 'Giày thể thao'),
(10, 'Dép thể thao'),
(11, 'Áo thể thao'),
(12, 'Phụ kiện thể thao');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `maSp` int(11) NOT NULL,
  `anhSp` varchar(100) NOT NULL,
  `tenSp` varchar(100) NOT NULL,
  `motaSp` varchar(500) NOT NULL,
  `gianhapSp` int(10) NOT NULL,
  `giabanSp` int(10) NOT NULL,
  `giagiamSp` int(10) NOT NULL,
  `nccSp` varchar(100) NOT NULL,
  `soluongSp` int(10) NOT NULL,
  `idDM` int(11) NOT NULL,
  `soluongdaban` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`maSp`, `anhSp`, `tenSp`, `motaSp`, `gianhapSp`, `giabanSp`, `giagiamSp`, `nccSp`, `soluongSp`, `idDM`, `soluongdaban`) VALUES
(18, 'anh4.png', 'Giày Chạy Bộ GOYA Optimus 2024 Màu Xanh Trắng', 'Lấy cảm hứng từ nhân vật Optimus Prime trong bộ phim Transformers. Goya Optimus ra đời với kiểu dáng thể thao mạnh mẽ và hầm hố.', 100000, 1650000, 890000, 'Goya', 500, 9, 0),
(19, 'anh3.png', 'Giày Chạy Bộ GOYA Optimus 2024 Màu Xanh Trắng', 'Lấy cảm hứng từ nhân vật Optimus Prime trong bộ phim Transformers. Goya Optimus ra đời với kiểu dáng thể thao mạnh mẽ và hầm hố.', 100000, 1650000, 899000, 'Goya', 500, 9, 0),
(20, 'anh5r.png', 'Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Trắng', 'GOYA SPEED là mẫu giày chạy bộ cao cấp của thương hiệu GOYA Việt Nam, được cải tiến từ những ưu điểm của GOYA NEO', 100000, 1650000, 899000, 'Goya', 500, 9, 0),
(21, 'anh6.png', 'Giày Chạy Bộ GOYA NEO Kết Hợp Tấm Carbon Màu Trắng Xám', 'GOYA NEO là mẫu giày chạy bộ cao cấp nhất của thương hiệu Goya cho đến thời điểm hiện tại. Với công nghệ đế giày BoomMAX giúp vận động viên tối ưu hiệu suất khi chạy bộ', 100000, 2500000, 890000, 'Goya', 500, 9, 0),
(24, 'anh1.png', 'Giày Chạy Bộ GOYA NEO Kết Hợp Tấm Carbon Màu Neo Cam Đỏ', 'GOYA SPEED là mẫu giày chạy bộ cao cấp của thương hiệu GOYA Việt Nam, được cải tiến từ những ưu điểm của GOYA NEO', 100000, 999999, 888888, 'Goya', 350, 9, 0),
(27, 'anh7.png', 'Giày Chạy Bộ GOYA NEO Kết Hợp Tấm Carbon Màu Neo Cam Đỏ', 'ds', 100000, 2500000, 890000, 'Goya', 222, 9, 0),
(28, 'anh2.png', 'Giày Chạy Bộ GOYA Strides 2 Màu Đỏ', 'Goya Strides\" là một dòng sản phẩm mới của thương hiệu giày thể thao GOYA đến từ Việt Nam. \"Strides\" trong tiếng Anh có nghĩa là \"bước chân, tượng trưng cho sự thoải mái và linh hoạt', 100000, 2500000, 999999, 'Goya', 1000, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tendangnhap`, `matkhau`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`dmid`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`maSp`),
  ADD KEY `idDM` (`idDM`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `dmid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `maSp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idDM`) REFERENCES `danhmuc` (`dmid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
