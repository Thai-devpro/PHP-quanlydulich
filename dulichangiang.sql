-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2021 lúc 04:12 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulichangiang`
--
CREATE DATABASE IF NOT EXISTS `dulichangiang` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `dulichangiang`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_travelviewing`
--

CREATE TABLE `comment_travelviewing` (
  `id` int(11) NOT NULL,
  `id_user` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `id_post` int(11) NOT NULL,
  `cmt` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment_travelviewing`
--

INSERT INTO `comment_travelviewing` (`id`, `id_user`, `id_post`, `cmt`) VALUES
(35, 'admin', 9, 'hello'),
(36, 'admin', 10, 'hello'),
(37, 'lamthai@gmail.com', 9, 'chùa hang'),
(38, 'lamthai@gmail.com', 10, 'Núi cấm'),
(39, 'lamthai@gmail.com', 11, 'hello'),
(40, 'lamthai@gmail.com', 11, 'rừng tràm trà sư'),
(41, 'lamthai@gmail.com', 12, 'hello'),
(42, 'lamthai@gmail.com', 14, 'hello'),
(43, 'lamthai@gmail.com', 15, 'hello '),
(44, 'lamthai@gmail.com', 16, 'hello'),
(45, 'lamthai@gmail.com', 15, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `travelviewing`
--

CREATE TABLE `travelviewing` (
  `id` int(11) NOT NULL,
  `title` varchar(2000) COLLATE utf32_unicode_ci NOT NULL,
  `iva1` varchar(2000) COLLATE utf32_unicode_ci NOT NULL,
  `iva2` varchar(2000) COLLATE utf32_unicode_ci NOT NULL,
  `iva3` varchar(2000) COLLATE utf32_unicode_ci NOT NULL,
  `content` text COLLATE utf32_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `Dday` date NOT NULL,
  `time` int(11) NOT NULL,
  `startingplace` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `ToLocation` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `Numberofseats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `travelviewing`
--

INSERT INTO `travelviewing` (`id`, `title`, `iva1`, `iva2`, `iva3`, `content`, `code`, `Dday`, `time`, `startingplace`, `ToLocation`, `Numberofseats`) VALUES
(9, 'Chùa hang', './upload/image/card3.jpg', './upload/image/dg3.jpg', './upload/image/br.jpg', '<p>Ch&ugrave;a Hang&nbsp;Ch&acirc;u Đốc l&agrave; một trong bốn di t&iacute;ch được c&ocirc;ng nhận l&agrave; Di t&iacute;ch lịch sử quốc gia tại khu vực n&uacute;i Sam &ndash; An&nbsp;Giang. Nơi đ&acirc;y nằm c&aacute;ch&nbsp;ch&ugrave;a&nbsp;T&acirc;y An, lăng Thoại Ngọc Hầu, miếu B&agrave;&nbsp;Ch&uacute;a&nbsp;Xứ n&uacute;i Sam khoảng 1km. Ng&ocirc;i&nbsp;ch&ugrave;a&nbsp;nằm tọa lạc tr&ecirc;n triền n&uacute;i Sam, thuộc địa phận th&agrave;nh phố Ch&acirc;u Đốc, tỉnh An&nbsp;Giang.</p>\r\n', 'DD1', '2021-12-14', 2, 'TanChau', 'ChuaHang', 15),
(10, 'Núi cấm', './upload/image/card2.jpg', './upload/image/br4.jpg', './upload/image/br.jpg', '<p>N&uacute;i Cấm l&agrave; ngọn n&uacute;i cao v&agrave; h&ugrave;ng vĩ nhất trong cụm Thất Sơn được nhiều người mộ đạo coi l&agrave; ngọn n&uacute;i thi&ecirc;ng với nhiều t&ecirc;n gọi kh&aacute;c nhau. Từ xa xưa n&uacute;i Cấm c&oacute; t&ecirc;n l&agrave; n&uacute;i Gấm, Thi&ecirc;n Cấm Sơn, Thi&ecirc;n Cẩm Sơn (n&uacute;i đẹp như gấm lụa). Cho tới nay vẫn c&ograve;n nhiều giả thuyết về nguồn gốc n&uacute;i Cấm, mỗi người c&oacute; c&aacute;ch l&yacute; giải theo suy luận ri&ecirc;ng của m&igrave;nh.</p>\r\n', 'DD2', '2021-12-22', 2, 'TanChau', 'Núi cấm', 10),
(11, 'Rừng tràm trà sư', './upload/image/card1.jpg', '../upload/image/noavata.jpg', '../upload/image/noavata.jpg', '<p>An Giang nổi tiếng cả nước với nhiều điểm&nbsp;du lịch&nbsp;sinh th&aacute;i hấp dẫn kh&aacute;ch du lịch với những sản phẩm du lịch đặc trưng ri&ecirc;ng biệt. Trong đ&oacute;, khu du lịch rừng tr&agrave;m Tr&agrave; Sư, khu rừng ngập nước ti&ecirc;u biểu cho v&ugrave;ng miền T&acirc;y s&ocirc;ng nước l&agrave; điểm đến ưa th&iacute;ch của kh&aacute;ch du lịch trong v&agrave; ngo&agrave;i nước khi đến với An Giang.</p>\r\n', 'DD3', '2021-12-22', 3, 'TanChau', 'RungTram', 15),
(12, 'Hồ Ông Thoại', './upload/image/anh8.jpg', '../upload/image/noavata.jpg', '../upload/image/noavata.jpg', '<p>Đến với An Giang, du kh&aacute;ch mới cảm nhận hết được vẻ đẹp của một miền T&acirc;y Nam Bộ đơn sơ, mộc mạc với những cảnh sắc thi&ecirc;n nhi&ecirc;n thơ mộng. Một trong số đ&oacute; phải kể đến đ&oacute; l&agrave; khu du lịch Hồ &Ocirc;ng Thoại &ndash; N&uacute;i Sập. Nơi đ&acirc;y c&oacute; những ngọn n&uacute;i cao h&ugrave;ng vỹ đẹp như ti&ecirc;n cảnh, những ng&ocirc;i đ&igrave;nh thờ linh thi&ecirc;ng,&hellip; khiến bất ai đặt ch&acirc;n đ&acirc;y cũng đều kh&ocirc;ng muốn rời đi.</p>\r\n', 'DD4', '2021-12-01', 3, 'TanChau', 'triton', 15),
(14, 'Miếu bà chùa Xứ', './upload/image/mieu-ba-chua-xu-an-giang.jpg', '../upload/image/noavata.jpg', '../upload/image/noavata.jpg', '<p>Khi n&oacute;i đến c&aacute;c địa điểm du lịch An Giang nổi tiếng, kh&ocirc;ng thể bỏ qua Miếu b&agrave; ch&uacute;a Xứ, đ&acirc;y được biết đến l&agrave; một điểm du lịch văn h&oacute;a t&acirc;m linh. Nơi đ&acirc;y gắn liền với rất nhiều c&acirc;u chuyện huyền b&iacute; về sự ra đời của ng&ocirc;i miếu, v&agrave; mỗi khi nhắc lại người ta lại thấy r&otilde; sự linh thi&ecirc;ng của miếu b&agrave; ch&uacute;a Xứ.</p>\r\n', 'DD5', '2021-12-15', 3, 'ChoMoi', 'Chau Doc', 15),
(15, 'Khu di chỉ Óc Eo', './upload/image/khu-di-chi-oc-eo.jpg', '../upload/image/noavata.jpg', '../upload/image/noavata.jpg', '<p>Khu di chỉ &oacute;c eo được biết đến khi người d&acirc;n địa phương c&ugrave;ng những nh&agrave; khảo cổ người Ph&aacute;p đ&atilde; ph&aacute;t hiện ra di t&iacute;ch của một nền văn h&oacute;a cổ, gọi t&ecirc;n l&agrave; Văn h&oacute;a &Oacute;c Eo. Địa điểm đầu ti&ecirc;n m&agrave; người ta t&igrave;m thấy ch&iacute;nh l&agrave; ở ch&acirc;n n&uacute;i Ba Th&ecirc;, thị trấn &Oacute;c Eo.</p>\r\n', 'DD6', '2021-12-20', 2, 'PhuTan', 'Óc eo', 15),
(16, 'Căn cứ quân sự Ô Tà Sóc', './upload/image/can-cu-quan-su-o-ta-soc.jpg', '../upload/image/noavata.jpg', '../upload/image/noavata.jpg', '<p>Nằm ở khu vực n&uacute;i D&agrave;i Lớn, một trong bảy ngọn n&uacute;i của v&ugrave;ng Thất Sơn, thuộc x&atilde; Lương Phi, huyện Tri T&ocirc;n, tỉnh An Giang, khu căb cứ O T&agrave; S&oacute;c được biết đến như l&agrave; một bảo chứng về cuộc chiến tranh khốc liệt v&agrave; đầy sinh động của người d&acirc;n Tri T&ocirc;n.</p>\r\n', 'DD7', '2021-12-30', 3, 'TanChau', 'TriTon', 10),
(18, 'Nhà mồ Ba Chúc ', './upload/image/nha-mo-ba-chuc-an-giang.jpg', '../upload/image/noavata.jpg', '../upload/image/noavata.jpg', '<p>Khi t&igrave;m hiểu về c&aacute;c địa điểm du lịch An Giang nhất định bạn kh&ocirc;ng thể bỏ qua nh&agrave; mồ Ba Ch&uacute;c, nơi gắn liền với những cuộc thảm s&aacute;t kinh ho&agrave;ng một thời. Giờ đ&acirc;y, nh&agrave; mồ Ba Ch&uacute;c vẫn n&iacute;u ch&acirc;n du kh&aacute;ch bởi những c&acirc;u chuyện bi thương, nơi vẫn giữ h&agrave;ng ng&agrave;n bộ h&agrave;i cốt của tầng lớp người d&acirc;n bị s&aacute;t hại.</p>\r\n', 'DD9', '2022-01-01', 1, 'Chau Thanh', 'Ba Chuc', 15),
(19, 'Chùa Giồng Thành', './upload/image/chua-giong-thanh.jpg', '../upload/image/noavata.jpg', '../upload/image/noavata.jpg', '<p>Đ&acirc;y ch&iacute;nh l&agrave; một địa điểm du lịch An Giang nổi tiếng, rất đ&aacute;ng để đến tham quan, chi&ecirc;m ngưỡng. Ch&ugrave;a Giồng Th&agrave;nh, hay c&ograve;n gọi l&agrave; Long Hưng Tự, cũng l&agrave; nơi tổ chức c&aacute;c hoạt động t&ocirc;n gi&aacute;o, t&iacute;n người cho người d&acirc;n đến tham gia. Ch&ugrave;a Giồng Th&agrave;nh cũng đ&atilde; được &ocirc;ng Nguyễn Sinh Sắc (cha của B&aacute;c Hồ ) chọn nơi nơi để l&aacute;nh nạn. Trong 2 năm đ&oacute;, &ocirc;ng cũng đ&atilde; cho tổ chức dạy học cho người d&acirc;n nơi đ&acirc;y.</p>\r\n', 'DD10', '2021-12-05', 2, 'ChoMoi', 'PhuTan', 15),
(20, 'Hồ Tà Pạ', './upload/image/ho-ta-pa.jpg', '../upload/image/noavata.jpg', '../upload/image/noavata.jpg', '<p>Nếu đ&atilde; lỡ y&ecirc;u th&iacute;ch tuyệt t&igrave;nh cốc ở Ninh B&igrave;nh hay Hải Ph&ograve;ng, bạn cũng sẽ m&ecirc; mẩn vẻ đẹp của hồ T&agrave; Pạ, được v&iacute; như Tuyệt t&igrave;nh cốc của xứ An Giang. Hồ T&agrave; Pạ nằm giữa l&ograve;ng N&uacute;i T&ocirc;, một trong 7 ngọn n&uacute;i tạo n&ecirc;n địa danh Thất Sơn nổi tiếng. Kh&ocirc;ng chỉ l&agrave; nơi để ngắm cảnh đẹp, bạn c&ograve;n c&oacute; thể đến hồ T&agrave; Pạ để lưu lại những bức h&igrave;nh sống ảo đẹp một c&aacute;ch m&ecirc; hoặc.</p>\r\n', 'DD8', '0000-00-00', 1, 'TanChau', 'Hồ Tà Pạ', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(350) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `phonenumber`, `address`) VALUES
(0, 'admin', '123456', 'Admin', '03999999', 'An Giang'),
(20, 'lamthai@gmail.com', '12345', 'thai', '2345345', 'an gaing'),
(21, 'b1910140@gmail.com', '123456', 'thai', '234234', 'An giang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment_travelviewing`
--
ALTER TABLE `comment_travelviewing`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `travelviewing`
--
ALTER TABLE `travelviewing`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `name` (`id`,`email`,`password`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment_travelviewing`
--
ALTER TABLE `comment_travelviewing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `travelviewing`
--
ALTER TABLE `travelviewing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
