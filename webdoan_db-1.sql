-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 07, 2020 lúc 05:23 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdoan_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ao`
--

CREATE TABLE `ao` (
  `id` int(10) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh` text NOT NULL,
  `idloaiao` int(10) NOT NULL,
  `idloaisize` int(10) NOT NULL,
  `idloaimau` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ao`
--

INSERT INTO `ao` (`id`, `ten`, `mota`, `gia`, `hinh`, `idloaiao`, `idloaisize`, `idloaimau`) VALUES
(35, 'Áo 2', 'Thun màu Đỏ 2 ', 100000, 'pda4.jpg', 2, 5, 2),
(36, 'Áo 2', 'Thun màu Đỏ 3', 222200, 'pda6.jpg', 1, 4, 2),
(37, 'Áo khoác 1', 'ĐỎ ', 100000, 'pda10.jpg', 1, 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(10) NOT NULL,
  `idhd` int(10) NOT NULL,
  `idao` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `idhd`, `idao`) VALUES
(1, 62, 35),
(2, 62, 37),
(3, 64, 36),
(4, 64, 35),
(5, 65, 36),
(6, 66, 36),
(7, 66, 37),
(8, 66, 35),
(9, 66, 36),
(10, 67, 35),
(11, 67, 36),
(12, 67, 37),
(13, 67, 36),
(14, 68, 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(10) NOT NULL,
  `tenuser` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `tenuser`, `status`) VALUES
(62, 'text', 1),
(64, 'text', 1),
(65, 'text', 1),
(66, 'thanhson14520', 1),
(67, 'text', 1),
(68, 'admin', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiao`
--

CREATE TABLE `loaiao` (
  `idloaiao` int(10) NOT NULL,
  `tenloaiao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaiao`
--

INSERT INTO `loaiao` (`idloaiao`, `tenloaiao`) VALUES
(1, 'AOKHOAC'),
(2, 'AoThun'),
(5, 'Ao So Mi 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `LoaiMau`
--

CREATE TABLE `LoaiMau` (
  `idmau` int(10) NOT NULL,
  `tenmau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `LoaiMau`
--

INSERT INTO `LoaiMau` (`idmau`, `tenmau`) VALUES
(2, 'Red'),
(3, 'Blue'),
(4, 'White'),
(7, 'White grey');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisizeAo`
--

CREATE TABLE `loaisizeAo` (
  `idsizeao` int(10) NOT NULL,
  `tensizeao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisizeAo`
--

INSERT INTO `loaisizeAo` (`idsizeao`, `tensizeao`) VALUES
(4, 'M'),
(5, 'L'),
(6, 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `tentaikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `isADmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `tentaikhoan`, `matkhau`, `isADmin`) VALUES
(2, 'sondeptrai', '12345678', 0),
(3, 'soncute', 'a1ecaa5c7767be2c8111a047069ac2e4', 0),
(5, 'soncute123', '123456789', 0),
(6, 'thaithanhson', '5bd35e20088db481b30cb132af9121b3', 0),
(14, 'sondeptrai1', '5bd35e20088db481b30cb132af9121b3', 0),
(15, 'sonveydeptrai1', 'e10adc3949ba59abbe56e057f20f883e', 0),
(16, 'sonveydeptrai2', 'e10adc3949ba59abbe56e057f20f883e', 0),
(18, 'thanhson1', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(19, 'text', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(20, 'aaaa', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(22, 'thanhson14520', '5bd35e20088db481b30cb132af9121b3', 0),
(23, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ao`
--
ALTER TABLE `ao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loaiao` (`idloaiao`),
  ADD KEY `loaisizeao` (`idloaisize`),
  ADD KEY `loaimau` (`idloaimau`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`),
  ADD KEY `iduser` (`tenuser`);

--
-- Chỉ mục cho bảng `loaiao`
--
ALTER TABLE `loaiao`
  ADD PRIMARY KEY (`idloaiao`);

--
-- Chỉ mục cho bảng `LoaiMau`
--
ALTER TABLE `LoaiMau`
  ADD PRIMARY KEY (`idmau`);

--
-- Chỉ mục cho bảng `loaisizeAo`
--
ALTER TABLE `loaisizeAo`
  ADD PRIMARY KEY (`idsizeao`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ao`
--
ALTER TABLE `ao`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `loaiao`
--
ALTER TABLE `loaiao`
  MODIFY `idloaiao` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `LoaiMau`
--
ALTER TABLE `LoaiMau`
  MODIFY `idmau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `loaisizeAo`
--
ALTER TABLE `loaisizeAo`
  MODIFY `idsizeao` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ao`
--
ALTER TABLE `ao`
  ADD CONSTRAINT `loaiao` FOREIGN KEY (`idloaiao`) REFERENCES `loaiao` (`idloaiao`),
  ADD CONSTRAINT `loaimau` FOREIGN KEY (`idloaimau`) REFERENCES `LoaiMau` (`idmau`),
  ADD CONSTRAINT `loaisizeao` FOREIGN KEY (`idloaisize`) REFERENCES `loaisizeAo` (`idsizeao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
