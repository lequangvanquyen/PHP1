-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 07, 2023 lúc 02:27 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `assignment_php1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `sx` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `img`, `sx`) VALUES
(1, 'Cọ', NULL, 0),
(2, 'Son', NULL, 0),
(3, 'Phấn', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `idcatalog` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `price2` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(100) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `chitiet` text DEFAULT NULL,
  `new` tinyint(1) NOT NULL DEFAULT 0,
  `promotion` int(3) NOT NULL DEFAULT 0,
  `view` int(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `idcatalog`, `name`, `price`, `price2`, `img`, `mota`, `chitiet`, `new`, `promotion`, `view`) VALUES
(1, 1, 'White Shave Brush', 110.00, 130.00, 'product-1.jpg', NULL, 'đây là chi tiết sản phẩm', 0, 0, 0),
(2, 1, 'White Shave Brush 2', 130.00, 0.00, 'product-2.jpg', NULL, NULL, 1, 40, 0),
(3, 2, 'Son ', 100.00, 0.00, 'product-3.jpg', NULL, 'Son là một item không thể thiếu trong túi đồ trang điểm, vật bất ly thân của mọi cô gái mỗi khi ra đường. BLACKPINK cũng không ngoại lệ khi sở hữu rất nhiều dòng son từ high-end đến bình dân với vô vàn tông màu khác nhau. Bên cạnh loạt thương hiệu 4 cô làm đại sứ, những dòng son được girlgroup nhà YG ưa chuộng và tích cực lăng xê luôn được dân tình “săn lùng” ráo riết. Fan Việt cũng có thể lưu lại để cheap moment với thần tượng trước thềm concert Born Pink sắp tới tại Hà Nội.', 1, 0, 0),
(4, 1, 'cọ', 0.00, 0.00, 'product-4.jpg', NULL, 'Cọ vẽ là kiểu chổi cọ được thiết kế chuyên cho việc vẽ tranh. Cọ vẽ thường có cán dài, đầu cọ có gắn lông để chấm vào mực vẽ. Tùy vào nhu cầu của người dùng mà có các loại cọ khác nhau: từ kiểu dáng, chất liệu đến kích thước. Mỗi loại cọ cho một hiệu ứng nét vẽ riêng, đậm nhạt hoặc dày mỏng tùy ý', 1, 0, 0),
(5, 3, 'cấy ni không biết tên', 0.00, 0.00, 'product-5.jpg', NULL, 'chi tiết Điểm nhỏ, phần rất nhỏ trong nội dung. Kể đầy đủ các chi tiết. Có nhiều chi tiết không đúng với thực tế. Bộ phận riêng lẻ, có thể tháo lắp được, trang thiết bị máy móc. Tháo lắp từng chi tiết máy.', 1, 0, 0),
(6, 2, 'nước hoa', 150.00, 100.00, 'product-6.jpg', NULL, 'Có một số loại nước hoa có khả năng đốt cháy chầm chậm, mang đến nhiều đam mê lan tỏa ngay khoảnh khắc đầu nắm bắt. Narciso Rouge mẫu mới nhất 2018 từ thương hiệu danh tiếng Narciso Rodriguez là loại nước hoa như thế. Bổ sung vào bộ sưu tập Narciso với các tính cách riêng biệt đã được Narciso Rodriguez giới thiệu trước đó: Narciso EDP, Narciso EDT & Narciso EDP Poudree. Phiên bản Narciso Rouge 2018 là một sáng tạo đầy cám dỗ với màu đỏ đầy quyến rũ, khiêu khích.', 1, 25, 0),
(7, 3, 'Rahua ', 230.00, 120.00, 'product-7.jpg', NULL, NULL, 1, 0, 100),
(8, 3, 'Sáp Munder', 2000.00, 123.00, 'product-8.jpg', NULL, 'Sáp Munder là một sản phẩm có kết thúc mờ (Matte finish), loại styling clay này cho độ phồng cao mang tới sự đàn hồi và kết cấu trong mỗi kiểu tóc. Lấy sáp và apply lên tóc dễ dàng như một giấc mơ với chất sáp mềm mịn, sau đó nhanh chóng tạo ra một cảm giác mượt mà nhưng không bị khô rít, dính tóc mà vẫn giữ form tóc.', 1, 60, 500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `tel`, `role`) VALUES
(1, 'admin', '123', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_catalog` (`idcatalog`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`idcatalog`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
