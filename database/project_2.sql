-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2016 at 01:49 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `key_word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_new` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `image`, `description`, `key_word`, `type`, `price`, `price_new`, `number`, `created_at`, `updated_at`) VALUES
(2, 'Bao da IPhone 5', 'op-lung-galaxy-s6.jpg', '', 'bao-da-iphone-5', 'Bao Da', 200000, 200000, 0, '2016-04-23 10:24:25', '2016-04-24 17:40:09'),
(4, 'Miếng dán galaxy tab', 'mieng-dan-galaxy-tab-4-7-inch-2-1.jpg', '', 'mieng-dan-galaxy-tab', 'Dán Màn Hình', 100000, 90000, 50, '2016-04-23 10:58:22', '2016-04-24 17:50:34'),
(5, 'Miếng dán samsung tab', 'mieng-dan-samsung-tab-a-8-inch-2-1.jpg', '', 'mieng-dan-samsung-tab', 'Dán Màn Hình', 50000, 50000, 50, '2016-04-23 10:59:10', '2016-04-24 17:50:54'),
(6, 'Thẻ nhớ microsd 32gb class 10', 'the-nho-microsd-32gb-class-10-300x300.jpg', '', 'the-nho-microsd-32gb-class-10', 'Thẻ Nhớ', 200000, 200000, 100, '2016-04-23 10:59:56', '2016-04-24 17:53:01'),
(7, 'Thẻ nhớ microsd 16gb class 10', 'the-nho-microsd-16gb-class-10.jpg', '', 'the-nho-microsd-16gb-class-10', 'Thẻ Nhớ', 200000, 190000, 96, '2016-04-23 11:00:47', '2016-04-24 17:52:47'),
(8, 'Tai nghe chụp tai kanen', 'tai-nghe-chup-tai-kanen-ip-350-12.jpg', '', 'tai-nghe-chup-tai-kanen', 'Tai Nghe', 300000, 250000, 100, '2016-04-23 11:01:25', '2016-04-24 17:51:26'),
(9, 'Tai nghe ép kanen', 'tai-nghe-ep-kanen-ip-218.jpg', '', 'tai-nghe-ep-kanen', 'Tai Nghe', 250000, 250000, 50, '2016-04-23 11:02:04', '2016-04-24 17:52:21'),
(10, 'Tai nghe ép awei', 'tai-nghe-ep-awei-es500ni.jpg', '<h2><span style="font-size:medium">Khi n&oacute;i đến smartphone, mọi thứ đều c&oacute; thể thay đổi một c&aacute;ch đột ngột v&agrave; nhanh ch&oacute;ng chỉ trong v&ograve;ng v&agrave;i năm. L&agrave; một sản phẩm cao cấp v&agrave; ti&ecirc;n tiến của h&ocirc;m nay, nhưng đến mai sản phẩm đ&oacute; đ&atilde; trở th&agrave;nh&hellip; &ldquo;đồ cổ&rdquo; hoặc lỗi thời &ndash; mọi chuyện đều c&oacute; thể xảy ra. H&atilde;y c&ugrave;ng Viễn Th&ocirc;ng A nh&igrave;n lại năm 2011 để &ldquo;điểm danh&rdquo; những chiếc&nbsp;<a href="https://vienthonga.vn/dien-thoai-smartphones" style="color: rgb(31, 94, 204); box-sizing: border-box; text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Smartphone">smartphone</a>&nbsp;cao cấp một thời!</span></h2>\r\n\r\n<p>2011 l&agrave; một năm quan trọng của ng&agrave;nh c&ocirc;ng nghiệp di động v&igrave; Nokia mất đi vị tr&iacute; nh&agrave; sản xuất smartphone h&agrave;ng đầu về tay Samsung v&agrave; Apple. V&agrave;o th&aacute;ng 2 năm đ&oacute;, Nokia c&ocirc;ng bố sử dụng Windows Mobile l&agrave;m hệ điều h&agrave;nh smartphone ch&iacute;nh của m&igrave;nh, v&agrave; gần như ngay lập tức doanh thu của Symbian tuột dốc kh&ocirc;ng phanh! Kh&ocirc;ng cần phải n&oacute;i, việc n&agrave;y đ&atilde; ảnh hưởng kh&ocirc;ng tốt đến c&ocirc;ng việc kinh doanh của c&ocirc;ng ty, đặc biệt l&agrave; khi những thiết bị cầm tay Windows của họ (Lumia 800 v&agrave; Lumia 710) kh&ocirc;ng đủ th&uacute; vị để thu h&uacute;t người d&ugrave;ng. Cuối c&ugrave;ng, Nokia đ&atilde; b&aacute;n đi đơn vị Devices &amp; Services cho Microsoft &ndash; nay l&agrave; nh&agrave; sản xuất ch&iacute;nh c&aacute;c d&ograve;ng smartphone Lumia &ndash; v&agrave; Symbia bị bỏ phế. Cũng trong thời gian n&agrave;y, Apple, Samsung v&agrave; c&aacute;c h&atilde;ng kh&aacute;c lần lượt tung ra những chiếc smartphone mới v&agrave; hấp dẫn, một số trong đ&oacute; vẫn tồn tại cho đến hiện nay. Tự nhi&ecirc;n, smartphone cao cấp ng&agrave;y nay lớn hơn, nhanh hơn, mạnh mẽ hơn v&agrave; ho&agrave;n thiện hơn, nhưng những thiết bị của năm 2011 được n&ecirc;u b&ecirc;n dưới cũng l&agrave; những sản phẩm tuyệt vời v&agrave; đ&atilde; gi&uacute;p cho ng&agrave;nh c&ocirc;ng nghiệp di động ph&aacute;t triển mạnh mẽ.</p>\r\n\r\n<p><strong><a href="https://vienthonga.vn/dien-thoai-smartphones/samsung" style="color: rgb(31, 94, 204); box-sizing: border-box; text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Samsung smartphone">Samsung</a>&nbsp;Galaxy S II</strong></p>\r\n\r\n<p>Chiếc Galaxy S ban đầu (ph&aacute;t h&agrave;nh v&agrave;o nửa đầu 2010) đ&oacute;ng một vai tr&ograve; quan trọng trong việc biến Samsung trở th&agrave;nh c&ocirc;ng ty điện thoại Android h&agrave;ng đầu tr&ecirc;n khắp thế giới. Kẻ kế nhiệm của n&oacute; l&agrave; Galaxy S II được ph&aacute;t h&agrave;nh v&agrave;o đầu th&aacute;ng 4/2011 với cấu h&igrave;nh tốt hơn v&agrave; thiết kế được cải thiện, trở th&agrave;nh một sản phẩm &ldquo;hit&rdquo; nhất l&uacute;c bất giờ.</p>\r\n\r\n<p style="text-align:center"><img alt="Samsung Galaxy S II" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_galaxys2i9100-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:508px; vertical-align:middle; width:650px" title="Samsung Galaxy S II" /></p>\r\n\r\n<p>Với độ d&agrave;y 8,49mm, phi&ecirc;n bản quốc tế của Galaxy S II l&agrave; một trong những chiếc smartphone mỏng nhất của năm 2011. Nhớ những t&iacute;nh năng như bộ vi xử l&yacute; Exynos 4210 2 l&otilde;i tốc độ 1.2 GHz v&agrave; RAM 1GB, S II cũng l&agrave; một trong những thiết bị cầm tay mạnh mẽ nhất l&uacute;c đ&oacute;. Hơn nữa, m&aacute;y c&ograve;n được trang bị m&agrave;n h&igrave;nh Super AMOLED Plus 4.3 inch rất bắt mắt với độ ph&acirc;n giải 480 x 800, mặc d&ugrave; kh&ocirc;ng sắc n&eacute;t như m&agrave;n h&igrave;nh Retina của iPhone.</p>\r\n\r\n<p>Galaxy S II chạy Android 2.3 Gingerbread (c&oacute; thể n&acirc;ng cấp l&ecirc;n Android 4.1 Jelly Bean) với giao diện TouchWiz. Chưa đầy 1 năm sau khi ra mắt, Samsung đ&atilde; b&aacute;n được hơn 20 triệu chiếc Galaxy S II tr&ecirc;n khắp thế giới.</p>\r\n\r\n<p><strong><a href="https://vienthonga.vn/dien-thoai-smartphones/htc" style="color: rgb(31, 94, 204); box-sizing: border-box; text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="HTC smartphone">HTC</a>&nbsp;Sensation</strong></p>\r\n\r\n<p>Được ph&aacute;t h&agrave;nh khoảng 1 th&aacute;ng sau Samsung Galaxy S II, HTC Sensation (hay c&ograve;n được gọi l&agrave; Sensation 4G tại Mỹ) cũng l&agrave; một trong những chiếc smartphone c&oacute; thiết kế đẹp nhất 2011. Một phần được l&agrave;m bằng nh&ocirc;m, Sensation c&oacute; mặt lưng cong v&agrave; hiện đại &ndash; trở th&agrave;nh 2 yếu tố tuyệt vời của m&aacute;y c&ugrave;ng với lớp gương v&aacute;t m&eacute;p phủ m&agrave;n h&igrave;nh.</p>\r\n\r\n<p style="text-align:center"><img alt="HTC Sensation" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_htc-sensation01-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="HTC Sensation" /></p>\r\n\r\n<p>N&oacute;i về m&agrave;n h&igrave;nh, m&aacute;y được trang bị m&agrave;n h&igrave;nh S-LCD 4.3 inch với độ ph&acirc;n giải 540 x 960 (cao nhất l&uacute;c bấy giờ trong số những thiết bị cầm tay Android).Ngo&agrave;i ra, m&aacute;y c&ograve;n sở hữu bộ vi xử l&yacute; Snapdragon S3 2 l&otilde;i, tốc độ 1.2 GHz v&agrave; RAM 768MB. Tuy &ldquo;nội lực&rdquo; kh&ocirc;ng t&iacute;nh l&agrave; lớn nhưng m&aacute;y vẫn c&oacute; thể xử l&yacute; Android 2.3 (c&oacute; thể n&acirc;ng cấp l&ecirc;n 4.0 Ice Cream Sandwich) v&agrave; giao diện Sense kh&aacute; tốt.</p>\r\n\r\n<p><strong><a href="https://vienthonga.vn/dien-thoai-smartphones/apple-iphone" style="color: rgb(31, 94, 204); box-sizing: border-box; text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Apple iPhone">Apple</a>&nbsp;iPhone 4S</strong></p>\r\n\r\n<p>Giống như iPhoen 4 với thiết kế gương-kim loại từ năm 2010, iPhone 4s &ldquo;hạ c&aacute;nh&rdquo; thị trường v&agrave;o th&aacute;ng 10/2011 với cấu h&igrave;nh được n&acirc;ng cấp v&agrave; t&iacute;nh năng phần mềm mới hơn so với phi&ecirc;n bản trước. Trong đ&oacute;, t&iacute;nh năng mới quan trọng nhất l&agrave; Siri &ndash; một trợ l&yacute; th&ocirc;ng minh mới mẻ v&agrave; th&uacute; vị khiến cho Google v&agrave; Microsoft phải lục tục tung ra những trợ l&yacute; ri&ecirc;ng của họ, tương ứng l&agrave; Google Voice Search (sau n&agrave;y được hợp nhất với Google Now) v&agrave; Cortana.</p>\r\n\r\n<p style="text-align:center"><img alt="Apple iPhone 4S" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_apple-iphone-4s-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Apple iPhone 4S" /></p>\r\n\r\n<p>Những cải tiến kh&aacute;c ở iPhone 4s l&agrave; CPU Apple A5 hai l&otilde;i (chiếc iPhone hai l&otilde;i đầu ti&ecirc;n của Apple) v&agrave; camera sau 8MP với khả năng quay video 1080p. Thiết bị n&agrave;y chỉ c&oacute; 512MB RAM, nhưng đủ để đem đến trải nghiệm nhanh khi sử dụng. iPhone 4s hơi nhỏ khi được so s&aacute;nh với c&aacute;c flagship của năm 2011 khi chỉ c&oacute; m&agrave;n h&igrave;nh 3.5 inch, sử dụng c&ocirc;ng nghệ Retina với độ ph&acirc;n giải 640 x 960 v&agrave; 326 ppi tương tự như tr&ecirc;n iPhone 4. Điều may mắn l&agrave; iPhone 4s l&agrave; thiết bị cầm tay cuối c&ugrave;ng của Apple c&oacute; m&agrave;n h&igrave;nh nhỏ như vậy (sau đ&oacute; iPhone 5 c&oacute; m&agrave;n h&igrave;nh 4 inch).</p>\r\n\r\n<p><strong>Motorola Droid Razr</strong></p>\r\n\r\n<p>C&aacute;ch đ&acirc;y từ rất l&acirc;u, Motorola đ&atilde; sản xuất một chiếc điện thoại cầm tay si&ecirc;u mỏng với t&ecirc;n gọi l&agrave; Razr, ti&ecirc;u thụ được 10 triệu chiếc. Tuy nhi&ecirc;n, với sự &ldquo;nổi dậy&rdquo; của c&aacute;c smartphone v&agrave;o năm 2007 v&agrave; 2008, sự phổ biến của m&aacute;y yếu dần theo thời gian v&agrave; mất hẳn thị phần. Nhưng, thương hiệu Razr được &ldquo;t&aacute;i sinh&rdquo; v&agrave;o th&aacute;ng 11/2011, khi Motorola v&agrave; Verizon Wireless ph&aacute;t h&agrave;nh chiếc Droid Razr: một chiếc smartphone Android c&oacute; khả năng kết nối LTE, được xem l&agrave; &ldquo;mỏng kh&ocirc;ng tin được&rdquo; với độ d&agrave;y chỉ 7,1mm.</p>\r\n\r\n<p style="text-align:center"><img alt="Motorola Droid Razr" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_motorolaatrixhdreviewlead17.jpg" style="border:0px; box-sizing:border-box; height:432px; vertical-align:middle; width:650px" title="Motorola Droid Razr" /></p>\r\n\r\n<p>Ngo&agrave;i thiết kế mỏng, Droid Razr c&ograve;n nổi bật tr&ecirc;n thị trường nhờ v&agrave;o vỏ m&agrave;u đen Kevlar với khả năng bảo vệ tốt hơn. Chiếc smartphone n&agrave;y c&oacute; khả năng chống tia nước, được trang bị m&agrave;n h&igrave;nh Super AMOLED 4.3 inch, độ ph&acirc;n giải 540 x 960, bộ vi xử l&yacute; OMAP 4430 l&otilde;i k&eacute;p với tốc độ 1.2 GHz. M&aacute;y c&ograve;n c&oacute; c&aacute;c t&iacute;nh năng kh&aacute;c m&agrave; người d&ugrave;ng mong muốn ở một chiếc smartphone cao cấp thời kỳ 2011, bao gồm RAM 1GB v&agrave; camera sau 8MP với khả năng quay video 1080p.</p>\r\n\r\n<p><strong>Samsung Galaxy Nexus</strong></p>\r\n\r\n<p>Tương tự như Motorola Droid Rarz, Galaxy Nexus được ph&aacute;t h&agrave;nh v&agrave;o th&aacute;ng 11/2011, nhưng lại l&agrave; một chiếc smartphone rất kh&aacute;c biệt. Đ&acirc;y l&agrave; chiếc smartphone đầu ti&ecirc;n tr&ecirc;n thế giới chạy hệ điều h&agrave;nh Android 4.0 Ice Cream Sandwich được c&agrave;i sẵn, với c&aacute;c t&iacute;nh năng như được t&iacute;ch hợp c&aacute;c kh&oacute;a điều hướng tr&ecirc;n m&agrave;n h&igrave;nh, nhận diện gương mặt, hỗ trợ NFC v&agrave; thiết kế giao diện người d&ugrave;ng &ldquo;sạch sẽ&rdquo;. Galaxy Nexus cũng l&agrave; một trong những chiếc smartphone đầu ti&ecirc;n tr&ecirc;n thế giới c&oacute; m&agrave;n h&igrave;nh HD (720 x 1280 pixel), k&iacute;ch thứco 4.65 inch, sử dụng c&ocirc;ng nghệ Super AMOLED với độ tương phản cao, m&agrave;u sắc đẹp v&agrave; chi tiết sắc n&eacute;t (316 ppi).</p>\r\n\r\n<p style="text-align:center"><img alt="Samsung Galaxy Nexus" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_samsung-galaxy-nexus-sprint-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:366px; vertical-align:middle; width:650px" title="Samsung Galaxy Nexus" /></p>\r\n\r\n<p>C&ugrave;ng với trải nghiệm Android, CPU OMAP 4460 l&otilde;i k&eacute;p, tốc độ 1.2 GHz v&agrave; RAM 1GB, m&aacute;y rất hợp thời v&agrave; l&agrave; một trong những chiếc điện thoại th&ocirc;ng minh nhanh nhất l&uacute;c đ&oacute;.</p>\r\n\r\n<p>Sau 5 năm, tất cả c&aacute;c smartphone tr&ecirc;n đều dần đi v&agrave;o dĩ v&atilde;ng, nhưng vẫn kh&ocirc;ng thể kh&ocirc;ng thừa nhận tầm quan trọng của ch&uacute;ng trong việc ph&aacute;t triển ng&agrave;nh c&ocirc;ng nghiệp di động. Theo bạn, đ&acirc;u l&agrave; 5 chiếc smartphone &ldquo;b&aacute;&rdquo; nhất hiện nay?</p>\r\n', 'tai-nghe-ep-awei', 'Tai Nghe', 400000, 400000, 40, '2016-04-23 11:02:56', '2016-04-25 03:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost` bigint(20) NOT NULL,
  `ordinal` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `company_name`, `content`, `phone_number`, `email`, `website`, `cost`, `ordinal`, `created_at`, `updated_at`) VALUES
(1, '24h', 'quang-cao-01.png', '0987654320', '24h@gmail.com', 'http://www.24h.com.vn', 5000000, 1, '2016-04-19 12:29:18', '2016-05-04 12:41:03'),
(2, 'facebook', 'quang-cao-02.png', '0129834756', 'facebook@gmail.com', 'https://www.facebook.com/', 10000000, 2, '2016-04-19 12:39:21', '2016-05-01 07:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'An Giang', '2016-04-21 16:10:04', '2016-04-21 16:10:04'),
(2, 'Bà Rịa - Vũng Tàu', '2016-04-21 16:10:04', '2016-04-21 16:10:04'),
(3, 'Bắc Giang', '2016-04-21 16:14:36', '2016-04-21 16:14:36'),
(4, 'Bắc Kạn', '2016-04-21 16:14:36', '2016-04-21 16:14:36'),
(5, 'Bạc Liêu', '2016-04-21 16:14:36', '2016-04-21 16:14:36'),
(6, 'Bắc Ninh', '2016-04-21 16:14:36', '2016-04-21 16:14:36'),
(7, 'Bến Tre', '2016-04-21 16:14:36', '2016-04-21 16:14:36'),
(8, 'Bình Định', '2016-04-21 16:14:36', '2016-04-21 16:14:36'),
(9, 'Bình Dương', '2016-04-21 16:14:36', '2016-04-21 16:14:36'),
(10, 'Bình Phước', '2016-04-21 16:14:36', '2016-04-21 16:14:36'),
(11, 'Bình Thuận', '2016-04-21 16:14:36', '2016-04-21 16:14:36'),
(12, 'Cà Mau', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(13, 'Cần Thơ', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(14, 'Cao Bằng', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(15, 'Đà Nẵng', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(16, 'Đắc Lắk', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(17, 'Đắc Nông', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(18, 'Điện Biên', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(19, 'Đồng Nai', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(20, 'Đồng Tháp', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(21, 'Gia Lai', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(22, 'Hà Giang', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(23, 'Hà Nam', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(24, 'Hà Nội', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(25, 'Hà Tĩnh', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(26, 'Hải Dương', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(27, 'Hải Phòng', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(28, 'Hậu Giang', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(29, 'Hoà Bình', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(30, 'Hưng Yên', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(31, 'Khánh Hoà', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(32, 'Kiên Giang', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(33, 'Kon Tum', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(34, 'Lai Châu', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(35, 'Lâm Đồng', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(36, 'Lạng Sơn', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(37, 'Lào Cai', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(38, 'Long An', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(39, 'Nam Định', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(40, 'Nghệ An', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(41, 'Ninh Bình', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(42, 'Ninh Thuận', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(43, 'Phú Thọ', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(44, 'Phú Yên', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(45, 'Quảng Bình', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(46, 'Quảng Nam', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(47, 'Quảng Ngãi', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(48, 'Quảng Ninh', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(49, 'Quảng Trị', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(50, 'Sóc Trăng', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(51, 'Sơn La', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(52, 'Tây Ninh', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(53, 'Thái Bình', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(54, 'Thái Nguyên', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(55, 'Thanh Hoá', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(56, 'Thừa Thiên Huế', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(57, 'Tiền Giang', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(58, 'TP Hồ Chí Minh', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(59, 'Trà Vinh', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(60, 'Tuyên Quang', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(61, 'Vĩnh Long', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(62, 'Vĩnh Phúc', '2016-04-21 16:31:36', '2016-04-21 16:31:36'),
(63, 'Yên Bái', '2016-04-21 16:31:36', '2016-04-21 16:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `logo`, `country`, `created_at`, `updated_at`) VALUES
(3, 'Nokia', 'nokia.jpg', 'Finland', '2016-03-16 07:53:40', '2016-03-16 07:53:40'),
(4, 'SamSung', 'samsung.png', 'United Kingdom (Great Britain) ', '2016-03-16 08:21:47', '2016-03-16 08:59:41'),
(5, 'Apple', 'apple.jpg', 'United States', '2016-03-16 09:24:15', '2016-03-16 09:24:15'),
(6, 'ZTE', 'zte.png', 'China', '2016-03-16 09:35:16', '2016-03-16 09:35:16'),
(7, 'LG', 'lg.png', 'Korea', '2016-03-16 09:37:35', '2016-03-16 09:37:35'),
(8, 'HTC', 'htc.jpg', 'Taiwan', '2016-03-16 09:41:17', '2016-03-16 09:41:17'),
(9, 'Oppo', 'oppo.gif', 'China', '2016-04-19 10:07:21', '2016-04-19 10:07:21'),
(10, 'Sony', 'sony.jpg', 'United States', '2016-04-19 10:08:52', '2016-04-19 10:08:52'),
(11, 'Lenovo', 'lenovo.png', 'China', '2016-04-19 10:09:53', '2016-04-19 10:09:53'),
(12, 'Asus', 'asus.png', 'Japan', '2016-04-19 10:10:13', '2016-04-19 10:10:13'),
(13, 'Philips', 'philips.jpg', 'Mauritania', '2016-04-19 10:10:40', '2016-04-19 10:10:40'),
(14, 'BKAV', 'bkav.jpg', 'Vietnam', '2016-04-19 10:11:04', '2016-04-19 10:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(17, 'oppo-r7-2.png', 11, '2016-04-19 10:24:44', '2016-04-19 10:24:44'),
(36, 'ip6plus-2.png', 9, '2016-04-19 10:58:17', '2016-04-19 10:58:17'),
(37, 'oppo-miror5-2.png', 10, '2016-04-19 10:59:39', '2016-04-19 10:59:39'),
(39, 'sony-xperia-m5-2.png', 12, '2016-04-19 11:48:37', '2016-04-19 11:48:37'),
(40, 'lenovo-p70-2.png', 13, '2016-04-19 11:49:40', '2016-04-19 11:49:40'),
(41, 'j3-2.png', 14, '2016-04-19 11:50:24', '2016-04-19 11:50:24'),
(42, 'asus-zenmax--2.png', 15, '2016-04-19 11:50:54', '2016-04-19 11:50:54'),
(43, 'philips-e180-2.png', 16, '2016-04-19 11:51:22', '2016-04-19 11:51:22'),
(44, 'sony-xperia-c5-2.png', 17, '2016-04-19 11:51:55', '2016-04-19 11:51:55'),
(45, 'sony-xperia-c5-3.png', 17, '2016-04-19 11:51:55', '2016-04-19 11:51:55'),
(46, 'iphone-6s-2.png', 18, '2016-04-19 11:52:17', '2016-04-19 11:52:17'),
(48, 'oppo-r5-2.png', 19, '2016-04-19 11:52:52', '2016-04-19 11:52:52'),
(49, 'nokia-lumia-430-2.png', 20, '2016-04-19 11:53:16', '2016-04-19 11:53:16'),
(50, 'samsung-galaxy-s6-2.png', 21, '2016-04-19 11:53:45', '2016-04-19 11:53:45'),
(51, 'oppo-joy-3-2.png', 22, '2016-04-19 11:54:11', '2016-04-19 11:54:11'),
(52, 'sony-xperia-m4-2.png', 24, '2016-04-19 11:54:55', '2016-04-19 11:54:55'),
(53, 'oppo-f1-2.png', 25, '2016-04-19 11:55:23', '2016-04-19 11:55:23'),
(55, 'j7-2.png', 26, '2016-04-19 12:07:21', '2016-04-19 12:07:21'),
(56, 'sony-xperia-z5-2.png', 27, '2016-04-19 12:11:09', '2016-04-19 12:11:09'),
(57, 'bphone-2.png', 28, '2016-04-19 12:11:53', '2016-04-19 12:11:53'),
(58, 'bphone-3.png', 28, '2016-04-19 12:11:53', '2016-04-19 12:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `import_products`
--

CREATE TABLE `import_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `suplier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manager_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `import_products`
--

INSERT INTO `import_products` (`id`, `code`, `product_id`, `number`, `price`, `suplier`, `manager_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'NH01', 28, 10, 59900000, 'FPT', 2, 'product', '2016-04-19 16:23:07', '2016-04-19 16:23:07'),
(2, 'MH02', 16, 5, 3550000, 'TTT', 13, 'product', '2016-04-19 16:26:49', '2016-04-20 08:37:00'),
(3, 'NH03', 9, 15, 353850000, 'Trần Anh', 2, 'product', '2016-04-20 06:20:15', '2016-04-20 06:20:15'),
(4, 'MH04', 15, 50, 209500000, 'FPT', 2, 'product', '2016-04-22 16:56:05', '2016-04-22 16:56:05'),
(5, 'MH05', 27, 60, 761400000, 'Bách Khoa Shop', 2, 'product', '2016-04-22 16:56:34', '2016-04-22 16:56:34'),
(6, 'MH06', 12, 50, 402450000, 'Trần Anh', 2, 'product', '2016-04-22 16:57:14', '2016-04-22 16:57:14'),
(7, 'MH07', 24, 100, 444900000, 'FPT', 2, 'product', '2016-04-22 16:57:40', '2016-04-22 16:57:40'),
(8, 'MH08', 17, 60, 419400000, 'Bách Khoa Store', 2, 'product', '2016-04-22 16:58:06', '2016-04-22 16:58:06'),
(9, 'MH09', 11, 70, 419300000, 'Bách Khoa Store', 2, 'product', '2016-04-22 16:58:35', '2016-04-22 16:58:35'),
(10, 'MH10', 19, 100, 699000000, 'FPT', 2, 'product', '2016-04-22 17:01:06', '2016-04-22 17:01:06'),
(11, 'MH11', 13, 50, 193500000, 'Trần Anh', 2, 'product', '2016-04-22 17:01:46', '2016-04-22 17:01:46'),
(12, 'MH12', 10, 70, 349300000, 'Trần Anh', 2, 'product', '2016-04-22 17:02:09', '2016-04-22 17:02:09'),
(13, 'MH13', 20, 70, 97230000, 'Thế Giới Di Động', 2, 'product', '2016-04-22 17:02:37', '2016-04-22 17:02:37'),
(14, 'MH14', 22, 50, 114500000, 'Viễn Thông A', 2, 'product', '2016-04-22 17:03:06', '2016-04-22 17:03:06'),
(15, 'MH15', 9, 40, 943600000, 'FPT ', 2, 'product', '2016-04-22 17:03:44', '2016-04-22 17:03:44'),
(16, 'MH16', 18, 60, 1187400000, 'Bách Khoa Store', 2, 'product', '2016-04-22 17:04:08', '2016-04-22 17:04:08'),
(17, 'MH17', 23, 50, 587500000, 'FPT', 2, 'product', '2016-04-22 17:04:28', '2016-04-22 17:04:28'),
(18, 'MH18', 21, 60, 881400000, 'Viễn Thông A', 2, 'product', '2016-04-22 17:05:04', '2016-04-22 17:05:04'),
(19, 'MH19', 26, 55, 279950000, 'Thế Giới Di Động', 2, 'product', '2016-04-22 17:05:46', '2016-04-22 17:05:46'),
(20, 'MH20', 14, 60, 221400000, 'FPT', 2, 'product', '2016-04-22 17:06:23', '2016-04-22 17:06:23'),
(21, 'MH21', 16, 55, 39050000, 'Bách Khoa Store', 2, 'product', '2016-04-22 17:06:45', '2016-04-22 17:06:45'),
(22, 'MH22', 25, 35, 419650000, 'Trần Anh', 2, 'product', '2016-04-22 17:07:08', '2016-04-22 17:07:08'),
(23, 'PK01', 2, 40, 8000000, 'FPT', 2, 'accessory', '2016-04-24 17:40:09', '2016-04-24 17:40:09'),
(24, 'PK02', 4, 50, 5000000, 'Bách Khoa Store', 2, 'accessory', '2016-04-24 17:50:34', '2016-04-24 17:50:34'),
(25, 'PK03', 5, 50, 2500000, 'Trần Anh', 2, '{type}', '2016-04-24 17:50:54', '2016-04-24 17:50:54'),
(26, 'PK04', 8, 100, 30000000, 'Thế Giới Di Động', 2, '{type}', '2016-04-24 17:51:26', '2016-04-24 17:51:26'),
(27, 'PK05', 10, 40, 16000000, 'FPT', 2, '{type}', '2016-04-24 17:51:50', '2016-04-24 17:51:50'),
(28, 'PK06', 9, 50, 12500000, 'Viễn Thông A', 2, '{type}', '2016-04-24 17:52:21', '2016-04-24 17:52:21'),
(29, 'PK07', 7, 100, 20000000, 'FPT', 2, '{type}', '2016-04-24 17:52:47', '2016-04-24 17:52:47'),
(30, 'PK08', 6, 100, 20000000, 'FPT', 2, '{type}', '2016-04-24 17:53:01', '2016-04-24 17:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_15_154029_add_avatar_to_user_table', 2),
('2016_03_15_161546_create_companies_table', 3),
('2016_03_15_162303_create_products_table', 3),
('2016_03_15_164651_create_images_table', 4),
('2016_03_16_173048_add_company_address_phone_to_users_table', 5),
('2016_03_17_180528_creat_system_manage_table', 6),
('2016_04_12_204341_create_advertisements_table', 7),
('2016_04_14_153747_create_os_table', 7),
('2016_04_16_102751_create_import_products_table', 7),
('2016_04_21_224425_create_city_table', 8),
('2016_04_21_224516_create_district_table', 8),
('2016_04_22_220142_create_orders_table', 9),
('2016_04_23_082224_create_product_of_order_table', 9),
('2016_04_23_152031_create_accessories_table', 10),
('2016_04_23_234256_create_news_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key_word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `content`, `type`, `key_word`, `created_at`, `updated_at`) VALUES
(1, 'Trải nghiệm camera 21.0 MP cho ảnh chụp đẹp như chuyên gia  của Prime X Max', '100000-mobiistar-prime-x-max.jpg', '<h2><span style="font-size:medium">Sở hữu camera 21.0 MP trong tầm gi&aacute; 7 triệu,&nbsp;<a href="https://vienthonga.vn/mobiistar-prime-x-max.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Mobiistar Prime X Max">Prime X Max</a>&nbsp;l&agrave; lựa chọn th&ocirc;ng minh kh&ocirc;ng thể bỏ qua với những người d&ugrave;ng y&ecirc;u th&iacute;ch chụp ảnh.</span></h2>\r\n\r\n<p>Sau một thời gian tr&igrave; ho&atilde;n ng&agrave;y l&ecirc;n kệ với sự c&acirc;n chỉnh camera kĩ lưỡng, chiếc smartphone được mệnh danh l&agrave; &ldquo;tuyệt phẩm&rdquo; của Mobiistar đ&atilde; chứng tỏ sức h&uacute;t của m&igrave;nh với loạt ảnh chụp được người d&ugrave;ng th&iacute;ch th&uacute; đ&aacute;nh gi&aacute; l&agrave; &ldquo;đẹp như chuy&ecirc;n gia&rdquo; từ camera 21.0 MP.</p>\r\n\r\n<p style="text-align:center"><em><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-1-1.jpg" style="border:0px; box-sizing:border-box; height:489px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></em></p>\r\n\r\n<p style="text-align:center"><em>Được trang bị cảm biến Sony Exmor RS IMX 230, Prime X Max c&oacute; khả năng chụp với tốc độ nhanh dưới 0.3s (PDAF), gi&uacute;p người d&ugrave;ng bắt trọn những khoảnh khắc độc đ&aacute;o xung quanh.&nbsp; Ảnh chụp đời sống tr&ocirc;ng tự nhi&ecirc;n v&agrave; ch&acirc;n thật.</em></p>\r\n\r\n<p style="text-align:center"><em><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-1.jpeg" style="border:0px; box-sizing:border-box; height:650px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></em></p>\r\n\r\n<p style="text-align:center"><em>Ảnh chụp HDR ngược s&aacute;ng mạnh nhưng độ ch&ecirc;nh lệch s&aacute;ng rất &iacute;t, đặc biệt do cảm biến Sony Exmor RS IMX 230 tạo flare hoa th&ecirc;m cho tia nắng tr&ocirc;ng thật lung linh.</em></p>\r\n\r\n<p style="text-align:center"><em><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-2.jpeg" style="border:0px; box-sizing:border-box; height:649px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></em></p>\r\n\r\n<p style="text-align:center"><em>Ngay cả những m&agrave;u kh&oacute; tươi như xanh l&aacute; c&acirc;y nhưng được chụp từ camera 21.0 MP của Prime X vẫn rất &ldquo;mướt&rdquo;, cho ảnh sống động v&agrave; ch&acirc;n thực.</em></p>\r\n\r\n<p style="text-align:center"><em><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-2-1.jpg" style="border:0px; box-sizing:border-box; height:434px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></em></p>\r\n\r\n<p style="text-align:center"><em>Với t&iacute;nh năng phơi s&aacute;ng 32s được t&iacute;ch hợp trong chế độ chụp Pro-Mode, đi k&egrave;m với filter, ảnh chụp từ Prime X Max c&oacute; độ n&eacute;t được t&aacute;i tạo ho&agrave;n chỉnh, m&agrave;u sắc ch&acirc;n thực.</em></p>\r\n\r\n<p style="text-align:center"><em><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-3-1.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></em></p>\r\n\r\n<p style="text-align:center"><em>Ngo&agrave;i ra, Prime X Max c&ograve;n sở hữu cấu h&igrave;nh mạnh mẽ với chip l&otilde;i t&aacute;m Helio P10, RAM 3GB, đ&aacute;p ứng nhu cầu trải nghiệm thật &ldquo;đ&atilde;&rdquo; cho người d&ugrave;ng trong tầm gi&aacute;.</em></p>\r\n\r\n<p style="text-align:center"><em><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-4-1.jpg" style="border:0px; box-sizing:border-box; height:434px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></em></p>\r\n\r\n<p style="text-align:center"><em>M&aacute;y được trang bị m&agrave;n h&igrave;nh Full HD 5.5 inch, mặt k&iacute;nh cong 2.5D với lớp k&iacute;nh cường lực Dragontrail gi&uacute;p bảo vệ m&agrave;n h&igrave;nh tốt v&agrave; cho trải nghiệm mượt m&agrave;. Prime X Max c&ograve;n l&agrave; chiếc smartphone Việt đầu ti&ecirc;n sở hữu t&iacute;nh năng cảm biến v&acirc;n tay một chạm, mở kho&aacute; m&agrave;n h&igrave;nh nhanh dưới 0.3s.</em></p>\r\n\r\n<p style="text-align:center"><em><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-5-1.jpg" style="border:0px; box-sizing:border-box; height:434px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></em></p>\r\n\r\n<p style="text-align:center"><em>Được thiết kế theo triết l&yacute; trải nghiệm 4D:&ldquo;Đẹp, Đỉnh, Đẳng, Đ&atilde;&rdquo;, Prime X Max tạo sự đẳng cấp cho người d&ugrave;ng với những t&iacute;nh năng thường chỉ t&iacute;ch hợp tr&ecirc;n smartphone cao cấp như sạc nhanh Pump Express Plus, sạc kh&ocirc;ng d&acirc;y đạt chuẩn Qi.</em></p>\r\n\r\n<p>Với những ưu điểm tr&ecirc;n, Prime X Max l&agrave; chiếc điện thoại kh&ocirc;ng thể bỏ qua cho những người d&ugrave;ng khao kh&aacute;t c&oacute; những bức ảnh chụp đẹp như chuy&ecirc;n gia m&agrave; chỉ trong tầm gi&aacute; dưới 7 triệu đồng. Trong đợt đặt mua trước &quot;<a href="http://giovang.mobiistar.vn/" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;">Đặt trước tuyệt phẩm, tặng ngay 1.000.00 VND</a>&quot;, h&atilde;y nắm bắt ngay lấy cơ hội n&agrave;y để trải nghiệm Prime X Max sớm nhất với mức gi&aacute; tốt của h&atilde;ng</p>\r\n', 'Giải Trí', 'trai-nghiem-camera-21.0-mp-cho-anh-chup-dep-nhu-chuyen-gia--cua-prime-x-max', '2016-04-24 01:08:56', '2016-04-30 16:50:37'),
(3, 'Top 5 điện thoại giá tầm trung tốt nhất hiện nay', '100000-oppo-f1-may.jpg', '<p><strong>Trong khoảng thời gian đầu năm nay phần kh&uacute;c điện thoại tầm trung đang c&oacute; sự canh tranh kh&aacute; khốc liệt giữa c&aacute;c h&atilde;ng điện thoại. Ch&uacute;ng ta c&ugrave;ng điểm mặt c&aacute;c sản phẩm nổi trội trong phần kh&uacute;c n&agrave;y.</strong></p>\r\n\r\n<h3>1.&nbsp;<a href="https://vienthonga.vn/oppo-f1.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="OPPO F1">OPPO F1</a></h3>\r\n\r\n<p style="text-align:center"><img alt="OPPO F1" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_oppo-f1-may.jpg" style="border:0px; box-sizing:border-box; height:520px; vertical-align:middle; width:750px" title="OPPO F1" /></p>\r\n\r\n<p>Đầu ti&ecirc;n l&agrave; chiếc OPPO F1 mới được h&atilde;ng OPPO tr&igrave;nh l&agrave;ng với gi&aacute; th&agrave;nh kh&aacute; hấp dẫn. OPPO F1 g&acirc;y sốt thị trường qua khả năng selfie ấn tượng khi camera trước được trang bị 8MP v&agrave; c&aacute;c chức năng hỗ trợ chụp selfie &ldquo;vi diệu&rdquo;.</p>\r\n\r\n<p>Về thiết kế m&aacute;y sở hữu lớp vỏ được l&agrave;m từ hộp kim nh&ocirc;m cao cấp, cạnh b&ecirc;n được bo cong cho cảm gi&aacute;c cầm nắm chắc chắn, mềm mại.</p>\r\n\r\n<p>Cấu h&igrave;nh m&aacute;y cũng kh&aacute; ấn tượng khi sở hữu vi xử l&yacute; 8 nh&acirc;n mạnh mẽ, RAM 3GB ROM 16GB, 2500 mAh cho ph&eacute;p chạy mượt m&agrave; c&aacute;c ứng dụng nặng k&yacute;.</p>\r\n\r\n<p>Hiện tại gi&aacute; OPPO F1 c&ograve;n khoảng 5.99 triệu đồng.</p>\r\n\r\n<h3>2.&nbsp;<a href="https://vienthonga.vn/asus-zenfone-2-ze551ml-2.3-ghz-rom-32gb.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="Asus Zenfone 2">Asus Zenfone 2</a></h3>\r\n\r\n<p style="text-align:center"><img alt="asus zenfone 2" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_zenfonefinal2-2040-0.jpg" style="border:0px; box-sizing:border-box; height:500px; vertical-align:middle; width:750px" title="asus zenfone 2" /></p>\r\n\r\n<p>Zenfone 2 được xem l&agrave; sản phẩm kh&aacute; nổi bật khi m&aacute;y sở hữu cấu h&igrave;nh kh&aacute; mạnh mẽ so với tầm gi&aacute;. Zenfone 2 c&oacute; cấu h&igrave;nh Chip 64-bit Intel Atom Z3580 l&otilde;i tứ tốc độ 2.3GHz, RAM 4GB, ROM 32 GB.&nbsp;B&ecirc;n cạnh đ&oacute; giao diện Zen UI đặc biệt ấn tượng gi&uacute;p th&acirc;n thiện, trải nghiệm tốt hơn cho người d&ugrave;ng.</p>\r\n\r\n<p>Gi&aacute; của Zenfone 2 ch&iacute;nh h&atilde;ng hiện n&agrave;y l&agrave; khoảng 6.79 triệu đồng</p>\r\n\r\n<h3>3.&nbsp;<a href="https://vienthonga.vn/sony-xperia-c4-dual.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="Sony Xperia C4 Dual">Sony Xperia C4 Dual</a></h3>\r\n\r\n<p style="text-align:center"><img alt="sony xperia c4 dual" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_sony-xperia-c41.jpg" style="border:0px; box-sizing:border-box; height:561px; vertical-align:middle; width:750px" title="sony xperia c4 dual" /></p>\r\n\r\n<p>Xperia C4 Dual cũng nhắm v&agrave;o ph&acirc;n thị hiếu chụp ảnh selfie của giới trẻ đang rất s&ocirc;i động hiện nay. Bộ đ&ocirc;i camera 13MP/5MP, đ&egrave;n flash LED trợ s&aacute;ng, g&oacute;c ống k&iacute;nh rộng 25mm sẽ gi&uacute;p bạn kh&ocirc;ng bỏ lỡ một khoảng khắc n&agrave;o c&ugrave;ng bạn b&egrave; v&agrave; người th&acirc;n. Về cấu h&igrave;nh, C4 Dual sử dụng bộ vi xử l&yacute; 8 nh&acirc;n xung nhịp 1,7GHz, RAM 2GB, ROM 16GB hệ điều h&agrave;nh Android 5.0.</p>\r\n\r\n<p>Gi&aacute; của Xperia C4 Dual ch&iacute;nh h&atilde;ng hiện nay c&ograve;n khoảng 6.19 triệu đồng.</p>\r\n\r\n<h3>4. Samsung Galaxy A3 2016</h3>\r\n\r\n<p style="text-align:center"><img alt="Samsung Galaxy A3 2016" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_samsunggalaxya3-6.jpg" style="border:0px; box-sizing:border-box; height:500px; vertical-align:middle; width:750px" title="Samsung Galaxy A3 2016" /></p>\r\n\r\n<p>Để cạnh tranh trong ph&acirc;n kh&uacute;c n&agrave;y Samsung đ&atilde; ra mắt phi&ecirc;n bản Galaxy A3 2016 với nhiều n&acirc;ng cấp đ&aacute;ng kể về phần cứng. Với chip xử l&yacute; Quad-core 1.5 GHz, RAM 1.5GB, ROM 16GB hỗ trợ xử l&yacute; đa t&aacute;c vụ tốt nhất. Dung lượng pin 2300 mAh c&ugrave;ng khả năng tiết kiệm pin cho m&aacute;y sử dụng cả ng&agrave;y.</p>\r\n\r\n<p>Gi&aacute; của Galaxy A3 2016 ch&iacute;nh h&atilde;ng hiện nay l&agrave; khoảng 6.19 triệu đồng</p>\r\n\r\n<h3>5.&nbsp;<a href="https://vienthonga.vn/zte-blade-s7.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="ZTE Blade S7">ZTE Blade S7</a></h3>\r\n\r\n<p style="text-align:center"><img alt="ZTE Blade S7" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_zteblades71.jpg" style="border:0px; box-sizing:border-box; height:421px; vertical-align:middle; width:750px" title="ZTE Blade S7" /></p>\r\n\r\n<p>Cuối c&ugrave;ng l&agrave; thương hiệu ZTE đ&atilde; bất ngờ tung smartphone ZTE Blade S7 với mức gi&aacute; phải chăng, tiếp tục chinh phục người d&ugrave;ng c&ocirc;ng nghệ ở ph&acirc;n kh&uacute;c tầm trung. Đ&acirc;y l&agrave; d&ograve;ng sản phẩm kế nhiệm chiếc ZTE Blade S6 với thiết kế đẹp mắt, m&agrave;n h&igrave;nh lớn 5 inches, cấu h&igrave;nh ổn cho hiệu năng tốt c&ugrave;ng cảm ứng v&acirc;n tay v&agrave; t&iacute;nh năng selfie 13MP cực chất.</p>\r\n\r\n<p>Đi k&egrave;m với vẻ ngo&agrave;i sang trọng v&agrave; khả năng chụp ảnh tốt, chiếc ZTE Blade S7 c&ograve;n c&oacute; cấu h&igrave;nh b&ecirc;n trong mạnh mẽ kh&ocirc;ng k&eacute;m. M&aacute;y sử dụng bộ vi xử l&yacute; Octa core 1,7 GHz, RAM 3GB ROM 32GB, pin 2600 mAh, 2 sim 2 s&oacute;ngGHz, cho khả năng xử l&yacute; ứng dụng web, đồ họa v&agrave; chỉnh sửa đa phương tiện mượt m&agrave;.</p>\r\n\r\n<p>Gi&aacute; của&nbsp;ZTE Blade S7&nbsp;ch&iacute;nh h&atilde;ng hiện nay l&agrave; khoảng 6.99 triệu đồng</p>\r\n', 'Công Nghệ', 'top-5-dien-thoai-gia-tam-trung-tot-nhat-hien-nay', '2016-04-24 01:27:59', '2016-04-30 16:50:29'),
(4, 'Cách đây 5 năm, smartphone nào “bá” nhất?', '100000-apple-iphone-4s.jpg', '<h2><span style="font-size:medium">Khi n&oacute;i đến smartphone, mọi thứ đều c&oacute; thể thay đổi một c&aacute;ch đột ngột v&agrave; nhanh ch&oacute;ng chỉ trong v&ograve;ng v&agrave;i năm. L&agrave; một sản phẩm cao cấp v&agrave; ti&ecirc;n tiến của h&ocirc;m nay, nhưng đến mai sản phẩm đ&oacute; đ&atilde; trở th&agrave;nh&hellip; &ldquo;đồ cổ&rdquo; hoặc lỗi thời &ndash; mọi chuyện đều c&oacute; thể xảy ra. H&atilde;y c&ugrave;ng Viễn Th&ocirc;ng A nh&igrave;n lại năm 2011 để &ldquo;điểm danh&rdquo; những chiếc&nbsp;<a href="https://vienthonga.vn/dien-thoai-smartphones" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Smartphone">smartphone</a>&nbsp;cao cấp một thời!</span></h2>\r\n\r\n<p>2011 l&agrave; một năm quan trọng của ng&agrave;nh c&ocirc;ng nghiệp di động v&igrave; Nokia mất đi vị tr&iacute; nh&agrave; sản xuất smartphone h&agrave;ng đầu về tay Samsung v&agrave; Apple. V&agrave;o th&aacute;ng 2 năm đ&oacute;, Nokia c&ocirc;ng bố sử dụng Windows Mobile l&agrave;m hệ điều h&agrave;nh smartphone ch&iacute;nh của m&igrave;nh, v&agrave; gần như ngay lập tức doanh thu của Symbian tuột dốc kh&ocirc;ng phanh! Kh&ocirc;ng cần phải n&oacute;i, việc n&agrave;y đ&atilde; ảnh hưởng kh&ocirc;ng tốt đến c&ocirc;ng việc kinh doanh của c&ocirc;ng ty, đặc biệt l&agrave; khi những thiết bị cầm tay Windows của họ (Lumia 800 v&agrave; Lumia 710) kh&ocirc;ng đủ th&uacute; vị để thu h&uacute;t người d&ugrave;ng. Cuối c&ugrave;ng, Nokia đ&atilde; b&aacute;n đi đơn vị Devices &amp; Services cho Microsoft &ndash; nay l&agrave; nh&agrave; sản xuất ch&iacute;nh c&aacute;c d&ograve;ng smartphone Lumia &ndash; v&agrave; Symbia bị bỏ phế. Cũng trong thời gian n&agrave;y, Apple, Samsung v&agrave; c&aacute;c h&atilde;ng kh&aacute;c lần lượt tung ra những chiếc smartphone mới v&agrave; hấp dẫn, một số trong đ&oacute; vẫn tồn tại cho đến hiện nay. Tự nhi&ecirc;n, smartphone cao cấp ng&agrave;y nay lớn hơn, nhanh hơn, mạnh mẽ hơn v&agrave; ho&agrave;n thiện hơn, nhưng những thiết bị của năm 2011 được n&ecirc;u b&ecirc;n dưới cũng l&agrave; những sản phẩm tuyệt vời v&agrave; đ&atilde; gi&uacute;p cho ng&agrave;nh c&ocirc;ng nghiệp di động ph&aacute;t triển mạnh mẽ.</p>\r\n\r\n<p><strong><a href="https://vienthonga.vn/dien-thoai-smartphones/samsung" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Samsung smartphone">Samsung</a>&nbsp;Galaxy S II</strong></p>\r\n\r\n<p>Chiếc Galaxy S ban đầu (ph&aacute;t h&agrave;nh v&agrave;o nửa đầu 2010) đ&oacute;ng một vai tr&ograve; quan trọng trong việc biến Samsung trở th&agrave;nh c&ocirc;ng ty điện thoại Android h&agrave;ng đầu tr&ecirc;n khắp thế giới. Kẻ kế nhiệm của n&oacute; l&agrave; Galaxy S II được ph&aacute;t h&agrave;nh v&agrave;o đầu th&aacute;ng 4/2011 với cấu h&igrave;nh tốt hơn v&agrave; thiết kế được cải thiện, trở th&agrave;nh một sản phẩm &ldquo;hit&rdquo; nhất l&uacute;c bất giờ.</p>\r\n\r\n<p style="text-align:center"><img alt="Samsung Galaxy S II" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_galaxys2i9100-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:508px; vertical-align:middle; width:650px" title="Samsung Galaxy S II" /></p>\r\n\r\n<p>Với độ d&agrave;y 8,49mm, phi&ecirc;n bản quốc tế của Galaxy S II l&agrave; một trong những chiếc smartphone mỏng nhất của năm 2011. Nhớ những t&iacute;nh năng như bộ vi xử l&yacute; Exynos 4210 2 l&otilde;i tốc độ 1.2 GHz v&agrave; RAM 1GB, S II cũng l&agrave; một trong những thiết bị cầm tay mạnh mẽ nhất l&uacute;c đ&oacute;. Hơn nữa, m&aacute;y c&ograve;n được trang bị m&agrave;n h&igrave;nh Super AMOLED Plus 4.3 inch rất bắt mắt với độ ph&acirc;n giải 480 x 800, mặc d&ugrave; kh&ocirc;ng sắc n&eacute;t như m&agrave;n h&igrave;nh Retina của iPhone.</p>\r\n\r\n<p>Galaxy S II chạy Android 2.3 Gingerbread (c&oacute; thể n&acirc;ng cấp l&ecirc;n Android 4.1 Jelly Bean) với giao diện TouchWiz. Chưa đầy 1 năm sau khi ra mắt, Samsung đ&atilde; b&aacute;n được hơn 20 triệu chiếc Galaxy S II tr&ecirc;n khắp thế giới.</p>\r\n\r\n<p><strong><a href="https://vienthonga.vn/dien-thoai-smartphones/htc" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="HTC smartphone">HTC</a>&nbsp;Sensation</strong></p>\r\n\r\n<p>Được ph&aacute;t h&agrave;nh khoảng 1 th&aacute;ng sau Samsung Galaxy S II, HTC Sensation (hay c&ograve;n được gọi l&agrave; Sensation 4G tại Mỹ) cũng l&agrave; một trong những chiếc smartphone c&oacute; thiết kế đẹp nhất 2011. Một phần được l&agrave;m bằng nh&ocirc;m, Sensation c&oacute; mặt lưng cong v&agrave; hiện đại &ndash; trở th&agrave;nh 2 yếu tố tuyệt vời của m&aacute;y c&ugrave;ng với lớp gương v&aacute;t m&eacute;p phủ m&agrave;n h&igrave;nh.</p>\r\n\r\n<p style="text-align:center"><img alt="HTC Sensation" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_htc-sensation01-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="HTC Sensation" /></p>\r\n\r\n<p>N&oacute;i về m&agrave;n h&igrave;nh, m&aacute;y được trang bị m&agrave;n h&igrave;nh S-LCD 4.3 inch với độ ph&acirc;n giải 540 x 960 (cao nhất l&uacute;c bấy giờ trong số những thiết bị cầm tay Android).Ngo&agrave;i ra, m&aacute;y c&ograve;n sở hữu bộ vi xử l&yacute; Snapdragon S3 2 l&otilde;i, tốc độ 1.2 GHz v&agrave; RAM 768MB. Tuy &ldquo;nội lực&rdquo; kh&ocirc;ng t&iacute;nh l&agrave; lớn nhưng m&aacute;y vẫn c&oacute; thể xử l&yacute; Android 2.3 (c&oacute; thể n&acirc;ng cấp l&ecirc;n 4.0 Ice Cream Sandwich) v&agrave; giao diện Sense kh&aacute; tốt.</p>\r\n\r\n<p><strong><a href="https://vienthonga.vn/dien-thoai-smartphones/apple-iphone" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Apple iPhone">Apple</a>&nbsp;iPhone 4S</strong></p>\r\n\r\n<p>Giống như iPhoen 4 với thiết kế gương-kim loại từ năm 2010, iPhone 4s &ldquo;hạ c&aacute;nh&rdquo; thị trường v&agrave;o th&aacute;ng 10/2011 với cấu h&igrave;nh được n&acirc;ng cấp v&agrave; t&iacute;nh năng phần mềm mới hơn so với phi&ecirc;n bản trước. Trong đ&oacute;, t&iacute;nh năng mới quan trọng nhất l&agrave; Siri &ndash; một trợ l&yacute; th&ocirc;ng minh mới mẻ v&agrave; th&uacute; vị khiến cho Google v&agrave; Microsoft phải lục tục tung ra những trợ l&yacute; ri&ecirc;ng của họ, tương ứng l&agrave; Google Voice Search (sau n&agrave;y được hợp nhất với Google Now) v&agrave; Cortana.</p>\r\n\r\n<p style="text-align:center"><img alt="Apple iPhone 4S" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_apple-iphone-4s-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Apple iPhone 4S" /></p>\r\n\r\n<p>Những cải tiến kh&aacute;c ở iPhone 4s l&agrave; CPU Apple A5 hai l&otilde;i (chiếc iPhone hai l&otilde;i đầu ti&ecirc;n của Apple) v&agrave; camera sau 8MP với khả năng quay video 1080p. Thiết bị n&agrave;y chỉ c&oacute; 512MB RAM, nhưng đủ để đem đến trải nghiệm nhanh khi sử dụng. iPhone 4s hơi nhỏ khi được so s&aacute;nh với c&aacute;c flagship của năm 2011 khi chỉ c&oacute; m&agrave;n h&igrave;nh 3.5 inch, sử dụng c&ocirc;ng nghệ Retina với độ ph&acirc;n giải 640 x 960 v&agrave; 326 ppi tương tự như tr&ecirc;n iPhone 4. Điều may mắn l&agrave; iPhone 4s l&agrave; thiết bị cầm tay cuối c&ugrave;ng của Apple c&oacute; m&agrave;n h&igrave;nh nhỏ như vậy (sau đ&oacute; iPhone 5 c&oacute; m&agrave;n h&igrave;nh 4 inch).</p>\r\n\r\n<p><strong>Motorola Droid Razr</strong></p>\r\n\r\n<p>C&aacute;ch đ&acirc;y từ rất l&acirc;u, Motorola đ&atilde; sản xuất một chiếc điện thoại cầm tay si&ecirc;u mỏng với t&ecirc;n gọi l&agrave; Razr, ti&ecirc;u thụ được 10 triệu chiếc. Tuy nhi&ecirc;n, với sự &ldquo;nổi dậy&rdquo; của c&aacute;c smartphone v&agrave;o năm 2007 v&agrave; 2008, sự phổ biến của m&aacute;y yếu dần theo thời gian v&agrave; mất hẳn thị phần. Nhưng, thương hiệu Razr được &ldquo;t&aacute;i sinh&rdquo; v&agrave;o th&aacute;ng 11/2011, khi Motorola v&agrave; Verizon Wireless ph&aacute;t h&agrave;nh chiếc Droid Razr: một chiếc smartphone Android c&oacute; khả năng kết nối LTE, được xem l&agrave; &ldquo;mỏng kh&ocirc;ng tin được&rdquo; với độ d&agrave;y chỉ 7,1mm.</p>\r\n\r\n<p style="text-align:center"><img alt="Motorola Droid Razr" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_motorolaatrixhdreviewlead17.jpg" style="border:0px; box-sizing:border-box; height:432px; vertical-align:middle; width:650px" title="Motorola Droid Razr" /></p>\r\n\r\n<p>Ngo&agrave;i thiết kế mỏng, Droid Razr c&ograve;n nổi bật tr&ecirc;n thị trường nhờ v&agrave;o vỏ m&agrave;u đen Kevlar với khả năng bảo vệ tốt hơn. Chiếc smartphone n&agrave;y c&oacute; khả năng chống tia nước, được trang bị m&agrave;n h&igrave;nh Super AMOLED 4.3 inch, độ ph&acirc;n giải 540 x 960, bộ vi xử l&yacute; OMAP 4430 l&otilde;i k&eacute;p với tốc độ 1.2 GHz. M&aacute;y c&ograve;n c&oacute; c&aacute;c t&iacute;nh năng kh&aacute;c m&agrave; người d&ugrave;ng mong muốn ở một chiếc smartphone cao cấp thời kỳ 2011, bao gồm RAM 1GB v&agrave; camera sau 8MP với khả năng quay video 1080p.</p>\r\n\r\n<p><strong>Samsung Galaxy Nexus</strong></p>\r\n\r\n<p>Tương tự như Motorola Droid Rarz, Galaxy Nexus được ph&aacute;t h&agrave;nh v&agrave;o th&aacute;ng 11/2011, nhưng lại l&agrave; một chiếc smartphone rất kh&aacute;c biệt. Đ&acirc;y l&agrave; chiếc smartphone đầu ti&ecirc;n tr&ecirc;n thế giới chạy hệ điều h&agrave;nh Android 4.0 Ice Cream Sandwich được c&agrave;i sẵn, với c&aacute;c t&iacute;nh năng như được t&iacute;ch hợp c&aacute;c kh&oacute;a điều hướng tr&ecirc;n m&agrave;n h&igrave;nh, nhận diện gương mặt, hỗ trợ NFC v&agrave; thiết kế giao diện người d&ugrave;ng &ldquo;sạch sẽ&rdquo;. Galaxy Nexus cũng l&agrave; một trong những chiếc smartphone đầu ti&ecirc;n tr&ecirc;n thế giới c&oacute; m&agrave;n h&igrave;nh HD (720 x 1280 pixel), k&iacute;ch thứco 4.65 inch, sử dụng c&ocirc;ng nghệ Super AMOLED với độ tương phản cao, m&agrave;u sắc đẹp v&agrave; chi tiết sắc n&eacute;t (316 ppi).</p>\r\n\r\n<p style="text-align:center"><img alt="Samsung Galaxy Nexus" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_samsung-galaxy-nexus-sprint-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:366px; vertical-align:middle; width:650px" title="Samsung Galaxy Nexus" /></p>\r\n\r\n<p>C&ugrave;ng với trải nghiệm Android, CPU OMAP 4460 l&otilde;i k&eacute;p, tốc độ 1.2 GHz v&agrave; RAM 1GB, m&aacute;y rất hợp thời v&agrave; l&agrave; một trong những chiếc điện thoại th&ocirc;ng minh nhanh nhất l&uacute;c đ&oacute;.</p>\r\n\r\n<p>Sau 5 năm, tất cả c&aacute;c smartphone tr&ecirc;n đều dần đi v&agrave;o dĩ v&atilde;ng, nhưng vẫn kh&ocirc;ng thể kh&ocirc;ng thừa nhận tầm quan trọng của ch&uacute;ng trong việc ph&aacute;t triển ng&agrave;nh c&ocirc;ng nghiệp di động. Theo bạn, đ&acirc;u l&agrave; 5 chiếc smartphone &ldquo;b&aacute;&rdquo; nhất hiện nay?</p>\r\n', 'Giải Trí', 'cach-day-5-nam,-smartphone-nao-“ba”-nhat?', '2016-04-24 01:30:47', '2016-04-30 16:50:21'),
(5, '10 điện thoại có thiết kế độc đáo nhất thế giới', '100000-1-nokia-n-gage.jpg', '<h2><span style="font-size:medium">Nokia N Gage, Siemens,&nbsp;<a href="https://vienthonga.vn/dien-thoai-smartphones/samsung" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Samsung smartphone">Samsung</a>&nbsp;Serene hay Toshiba G450... c&oacute; thiết kế kh&aacute;c lạ, t&iacute;nh năng cũng kh&aacute;c biệt so với c&aacute;c sản phẩm c&ugrave;ng thời.</span></h2>\r\n\r\n<p style="text-align:center"><img alt="Nokia N Gage" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_1-nokia-n-gage-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:390px; vertical-align:middle; width:650px" title="Nokia N Gage" /></p>\r\n\r\n<p style="text-align:center">Nokia N-Gage nhận được lời khen, tiếng ch&ecirc; nhưng kh&ocirc;ng ai c&oacute; thể phủ nhận sự kh&aacute;c biệt của sản phẩm n&agrave;y. Mẫu điện thoại của&nbsp;nh&agrave; sản xuất Phần Lan thiết kế hướng đến nhu cầu chơi game tr&ecirc;n di động, đột ph&aacute; so với c&aacute;c sản phẩm c&ugrave;ng thời.</p>\r\n\r\n<p style="text-align:center"><img alt="Siemens-Xelibri" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_2-siemens-xelibri-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:390px; vertical-align:middle; width:650px" title="Siemens-Xelibri" /></p>\r\n\r\n<p style="text-align:center">Xelibri l&agrave; d&ograve;ng m&aacute;y thời trang được Siemens&nbsp;sản xuất v&agrave;o giữa năm 2003. N&eacute;t &quot;dị&quot; trong thiết kế của sản phẩm biến n&oacute; như một m&oacute;n đồ trang sức thay v&igrave; một chiếc điện thoại th&ocirc;ng thường. Nhưng cũng bởi vậy m&agrave; c&aacute;ch sử dụng của Siemens Xelibri c&oacute; phần kh&ocirc;ng tiện dụng.</p>\r\n\r\n<p style="text-align:center"><img alt="Nokia 7280" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_3-nokia-7280-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:390px; vertical-align:middle; width:650px" title="Nokia 7280" /></p>\r\n\r\n<p style="text-align:center">Nokia 7280 được v&iacute; như &quot;thỏi son c&ocirc;ng nghệ&quot; nhờ kiểu d&aacute;ng độc đ&aacute;o v&agrave; thiết kế dạng thanh nhỏ gọn. Điện thoại&nbsp;sở hữu b&agrave;n ph&iacute;m xoay, kh&ocirc;ng c&oacute; c&aacute;c ph&iacute;m chữ số&nbsp;m&agrave; chỉ c&oacute; c&aacute;c lựa chọn, n&uacute;t nhận v&agrave;&nbsp;hủy cuộc gọi. M&aacute;y c&ograve;n c&oacute; camera dạng trượt kh&aacute;c lạ, nhưng nh&igrave;n chung kh&oacute; d&ugrave;ng.</p>\r\n\r\n<p style="text-align:center"><img alt="Motorola Rokr E1" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_4-motorola-rokr-e1-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Motorola Rokr E1" /></p>\r\n\r\n<p style="text-align:center">&quot;Nữ ho&agrave;ng nhạc số&quot; Motorola Rokr E1 thoạt nh&igrave;n kh&ocirc;ng mấy đặc biệt nhưng khi c&oacute; cuộc gọi đến hoặc mở nhạc, hệ thống đ&egrave;n tr&ecirc;n m&aacute;y sẽ rực s&aacute;ng. Điểm th&uacute; vị l&agrave; model n&agrave;y sản xuất hợp t&aacute;c với Apple n&ecirc;n n&oacute; hỗ trợ đồng bộ nhạc với iTunes.</p>\r\n\r\n<p style="text-align:center"><img alt="Samsung Serene" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_5-serene-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Samsung Serene" /></p>\r\n\r\n<p style="text-align:center">Thiết kế dạng gập,&nbsp;Samsung Serene c&ograve;n được trang bị motor để đ&oacute;ng, mở tự động. N&oacute; để lại ấn tượng với b&agrave;n ph&iacute;m thiết kế dạng tr&ograve;n, đặt&nbsp;xung quanh một v&ograve;ng cảm ứng.&nbsp;Mẫu di động l&agrave; kết quả hợp t&aacute;c giữa nh&agrave; sản xuất H&agrave;n Quốc v&agrave; c&ocirc;ng ty &acirc;m thanh&nbsp;Bang &amp; Olufsen đến từ Đan Mạch.</p>\r\n\r\n<p style="text-align:center"><img alt="Motorola Flipout" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_6-motorola-flipout-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:389px; vertical-align:middle; width:650px" title="Motorola Flipout" /></p>\r\n\r\n<p style="text-align:center">Thiết kế m&agrave;n h&igrave;nh vu&ocirc;ng đ&atilde; đủ tạo n&ecirc;n kh&aacute;c biệt cho mẫu Flipout của&nbsp;Motorola, sản phẩm n&agrave;y c&ograve;n được trang bị b&agrave;n ph&iacute;m QWERTY khi xoay m&aacute;y ra. Thiết bị chạy hệ điều h&agrave;nh Android, nhắm đến nữ giới, nhưng kh&ocirc;ng th&agrave;nh c&ocirc;ng tr&ecirc;n phương diện doanh số.</p>\r\n\r\n<p style="text-align:center"><img alt="Toshiba G450" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_7-toshiba-g450-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Toshiba G450" /></p>\r\n\r\n<p style="text-align:center">Toshiba G450 c&oacute; d&aacute;ng như một chiếc điều khiển từ xa cho TV với mặt trước chia l&agrave;m ba v&ograve;ng: m&agrave;n h&igrave;nh v&agrave; hai v&ograve;ng số. Thiết bị tập trung v&agrave;o khả năng chơi nhạc MP3 với bộ nhớ lưu trữ lớn thời bấy giờ, c&oacute; cả cổng USB, kết nối mạng tốc độ cao.</p>\r\n\r\n<p style="text-align:center"><img alt="Runcible " src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_8-runcible-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:390px; vertical-align:middle; width:650px" title="Runcible " /></p>\r\n\r\n<p style="text-align:center">Người d&ugrave;ng vẫn nghĩ điện thoại chỉ c&oacute; h&igrave;nh vu&ocirc;ng hay h&igrave;nh chữ nhật th&igrave; sản phẩm&nbsp;Runcible đ&atilde; l&agrave;m thay đổi ho&agrave;n to&agrave;n quan niệm n&agrave;y. Thiết bị c&oacute; phần hiển thị mặt tr&ograve;n, sở hữu c&aacute;c t&iacute;nh năng cơ bản tr&ecirc;n hệ điều h&agrave;nh Firefox OS. Mặt sau&nbsp;Runcible được l&agrave;m bằng gỗ v&agrave; sở hữu&nbsp;camera.</p>\r\n\r\n<p style="text-align:center"><img alt="Serenata" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_serenata-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Serenata" /></p>\r\n\r\n<p style="text-align:center">Một sản phẩm kh&aacute;c người&nbsp;nữa ra đời dựa tr&ecirc;n sự kết hợp giữa Samsung v&agrave; Bang &amp; Olufsen l&agrave; mẫu Serenata. Thiết bị c&oacute; d&aacute;ng như một vi&ecirc;n đ&aacute; cuội, th&ocirc;ng tin được hiển thị tr&ecirc;n m&agrave;n h&igrave;nh c&ograve;n mọi thao th&aacute;c điều khiển dựa tr&ecirc;n b&aacute;nh xe. Khi trượt ra, Serenata để lộ loa chất lượng cao.</p>\r\n\r\n<p style="text-align:center"><img alt="Motorola-V70" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_10-motorola-v70-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Motorola-V70" /></p>\r\n\r\n<p style="text-align:center">V70 với thiết kế xoay độc đ&aacute;o ch&iacute;nh l&agrave; cảm hứng để Motorola tr&igrave;nh l&agrave;ng mẫu Aura đ&igrave;nh đ&aacute;m sau n&agrave;y. Khi sử dụng thiết bị, người d&ugrave;ng sẽ xoay nắp&nbsp;đưa loa thoại l&ecirc;n tr&ecirc;n, để lộ ra b&agrave;n ph&iacute;m. Ấn tượng hơn l&agrave; mặt&nbsp;n&agrave;y thiết kế&nbsp;c&oacute; thể xoay 360 độ.</p>\r\n', 'Công Nghệ', '10-dien-thoai-co-thiet-ke-doc-dao-nhat-the-gioi', '2016-04-24 01:52:29', '2016-04-30 16:50:12'),
(6, 'Chúc mừng khách hàng trúng thưởng game Deal 0đ và Đấu giá ngược từ 25/3 - 11/4/2016', '100000-khach-hang-trung-thuong-820x210.jpg', '<p style="text-align:justify">Game Deal 0đ v&agrave; Đấu gi&aacute; ngược l&agrave; hai trong số c&aacute;c game cực kỳ hấp dẫn d&agrave;nh cho kh&aacute;ch h&agrave;ng trong chương tr&igrave;nh Vplus tr&ecirc;n Website của Viễn Th&ocirc;ng A. Với c&aacute;c game n&agrave;y, người chơi sẽ được những phần qu&agrave; hấp dẫn, những suất ưu đ&atilde;i bất ngờ, những cơ hội mua sắm c&aacute;c si&ecirc;u phẩm điện tử với gi&aacute; cực kỳ ưu đ&atilde;i hoặc c&oacute; thể l&agrave; ho&agrave;n to&agrave;n miễn ph&iacute;.</p>\r\n\r\n<p style="text-align:justify">V&agrave; game&nbsp;<strong>&ldquo;Deal 0đ với Samsung Galaxy S6 edge&rdquo;&nbsp;</strong>&nbsp;&ndash; đăng l&yacute; tham gia, nhận số v&ograve;ng quay may mắn, cơ hội sở hữu &nbsp;Samsung Galaxy S6 edge - Viễn Th&ocirc;ng A xin được ch&uacute;c mừng:</p>\r\n\r\n<p style="text-align:center">&nbsp;</p>\r\n\r\n<div style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(109, 110, 113); font-family: Arial, Helvetica, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 14px; line-height: 23.8px; overflow: auto;">\r\n<table align="center" border="1" cellpadding="5" cellspacing="0" style="background-color:transparent; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; margin-left:auto; margin-right:auto">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>T&ecirc;n kh&aacute;ch h&agrave;ng</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Số CMND</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Năm sinh</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Số điện thoại</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>M&atilde; số may mắn</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Trần Quốc Thắng</p>\r\n			</td>\r\n			<td>\r\n			<p>xxxxx2402</p>\r\n			</td>\r\n			<td>\r\n			<p>1988</p>\r\n			</td>\r\n			<td>\r\n			<p>xxxxxxx950</p>\r\n			</td>\r\n			<td>\r\n			<p>1299801</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với game&nbsp;<strong>&ldquo;Đấu gi&aacute; ngược rinh m&aacute;y in HP&rdquo;</strong>&nbsp;&ndash; người thắng l&agrave; người đặt gi&aacute; thấp nhất v&agrave; duy nhất &ndash; Viễn Th&ocirc;ng A xin được ch&uacute;c mừng:</p>\r\n\r\n<p style="text-align:center">&nbsp;</p>\r\n\r\n<div style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(109, 110, 113); font-family: Arial, Helvetica, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 14px; line-height: 23.8px; overflow: auto;">\r\n<table align="center" border="1" cellpadding="5" cellspacing="0" style="background-color:transparent; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; margin-left:auto; margin-right:auto">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>T&ecirc;n kh&aacute;ch h&agrave;ng</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Số CMND</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Năm sinh</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Số điện thoại</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Gi&aacute; đặt</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Phan Tuyết</p>\r\n			</td>\r\n			<td>\r\n			<p>xxxxx4191</p>\r\n			</td>\r\n			<td>\r\n			<p>1975</p>\r\n			</td>\r\n			<td>\r\n			<p>xxxxxxxx012</p>\r\n			</td>\r\n			<td>\r\n			<p>58.000</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style="text-align:justify">Kh&aacute;ch h&agrave;ng n&agrave;o chưa may mắn thắng giải vẫn c&ograve;n cơ hội nhận được nhiều phần qu&agrave; hấp dẫn kh&aacute;c khi tham gia c&aacute;c game mới đang được triển khai tr&ecirc;n Vplus như &ldquo;Đấu gi&aacute; ngược với iPhone 6S&rdquo; (kết th&uacute;c 16/05/2016), &ldquo;T&iacute;ch điểm săn qu&agrave;&rdquo;, &ldquo;Quay tr&uacute;ng ngay&rdquo;.</p>\r\n\r\n<p style="text-align:justify"><strong>*Lưu &yacute;:</strong></p>\r\n\r\n<p>- Viễn Th&ocirc;ng A sẽ li&ecirc;n hệ với người chiến thắng qua điện thoại, do đ&oacute; vui l&ograve;ng cập nhật ch&iacute;nh x&aacute;c th&ocirc;ng tin c&aacute; nh&acirc;n của bạn.<br />\r\n- Trong v&ograve;ng 10 ng&agrave;y kể từ khi kết th&uacute;c Game nếu Viễn Th&ocirc;ng A vẫn kh&ocirc;ng thể li&ecirc;n hệ được với người chiến thắng, quyền nhận giải của người chiến thắng sẽ bị hủy bỏ v&agrave; giải thưởng sẽ đựơc sử dụng cho c&aacute;c chương tr&igrave;nh kh&aacute;c.<br />\r\n-&nbsp;Người chiến thắng vui l&ograve;ng cung cấp CMND để nhận giải. CMND hợp lệ phải tr&ugrave;ng khớp với th&ocirc;ng tin c&aacute; nh&acirc;n kh&aacute;ch h&agrave;ng đ&atilde; d&ugrave;ng để đăng k&yacute; t&agrave;i khoản Vplus.<br />\r\n-&nbsp;C&aacute;c trường hợp gian lận sẽ bị mất quyền tham gia, x&oacute;a t&agrave;i khoản th&agrave;nh vi&ecirc;n vĩnh viễn.<br />\r\n-&nbsp;Quyết định của Viễn Th&ocirc;ng A l&agrave; quyết định cuối c&ugrave;ng.</p>\r\n', 'Giải Trí', 'chuc-mung-khach-hang-trung-thuong-game-deal-0d-va-dau-gia-nguoc-tu-25-3---11-4-2016', '2016-04-24 01:54:29', '2016-04-30 16:49:44'),
(7, 'Sức mạnh Galaxy C7: Điện thoại tầm trung với 4GB RAM đến từ Samsung', '100000-galaxy-c7.jpg', '<h2><span style="font-size:medium">Sau khi những th&ocirc;ng tin đầu ti&ecirc;n về Galaxy C7 được ph&aacute;t đi, sức mạnh của si&ecirc;u phẩm tầm trung n&agrave;y cũng đ&atilde; được giới truyền th&ocirc;ng khai ph&aacute;.</span></h2>\r\n\r\n<p>Theo đ&oacute;, những th&ocirc;ng tin r&ograve; rỉ tr&ecirc;n Greekbench cho thấy Galaxy C7 sẽ c&oacute; t&ecirc;n m&atilde; SM-C7000. M&aacute;y sẽ sử dụng chip xử l&yacute; Qualcomm Snapdragon 617 với bộ nhớ RAM l&ecirc;n đến 4GB. Đ&acirc;y cũng l&agrave; mẫu&nbsp;<strong><a class="auto-link" href="https://vienthonga.vn/dien-thoai-smartphones/samsung" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Samsung smartphone">điện thoại</a></strong>&nbsp;tầm trung đầu ti&ecirc;n của Samsung được trang bị bộ nhớ RAM khủng đến vậy.</p>\r\n\r\n<p style="text-align:center"><img alt="Samsung Galaxy C7" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_galaxy-c7-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:365px; vertical-align:middle; width:650px" title="Samsung Galaxy C7" /></p>\r\n\r\n<div id="divfirst" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(109, 110, 113); font-family: Arial, Helvetica, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 14px; line-height: 23.8px;">\r\n<p>C&aacute;c th&ocirc;ng số c&ograve;n lại của Galaxy C7 bao gồm m&agrave;n h&igrave;nh 5,5 inch với độ ph&acirc;n giải Full HD, bộ nhớ trong 32GB. C&ugrave;ng với đ&oacute; l&agrave; cặp camera 16Mpx ở mặt sau v&agrave; 8Mpx ở mặt trước. M&aacute;y chạy tr&ecirc;n nền tảng hệ điều h&agrave;nh&nbsp;Android&nbsp;6.0.</p>\r\n</div>\r\n\r\n<div id="divend" style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(109, 110, 113); font-family: Arial, Helvetica, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 14px; line-height: 23.8px;">\r\n<p>Theo kết quả ghi được với c&ocirc;ng cụ đo Greekbench, mẫu điện thoại tầm trung của Samsung đạt được mức điểm số kh&aacute; ấn tượng với 849 điểm ở b&agrave;i test đơn nh&acirc;n v&agrave; 4626 điểm ở b&agrave;i test đa nh&acirc;n.</p>\r\n</div>\r\n', 'Công Nghệ', 'suc-manh-galaxy-c7:-dien-thoai-tam-trung-voi-4gb-ram-den-tu-samsung', '2016-04-24 01:55:50', '2016-04-30 16:49:37');
INSERT INTO `news` (`id`, `title`, `image`, `content`, `type`, `key_word`, `created_at`, `updated_at`) VALUES
(8, 'So sánh Lumia 540 vs Lumia 640 vs Lumia 730 vs Lumia 535', 'lumia-compare-540.jpg', '<p>Microsoft đ&atilde; l&agrave;m cho người d&ugrave;ng th&ecirc;m sự lựa chọn Lumia tầm trung bằng c&aacute;ch c&ocirc;ng bố một thiết bị hấp dẫn hơn,&nbsp;<a href="http://www.vienthonga.vn/microsoft-lumia-540.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="Lumia 540">Lumia 540</a>sau khi ra mắt&nbsp;<strong>Lumia 640</strong>&nbsp;v&agrave;&nbsp;<strong>Lumia 640 XL</strong>. Lumia 540 c&oacute; m&agrave;n h&igrave;nh 5-inch, 720p, camera ph&iacute;a sau 8 MP v&agrave; 5 MP cho camera ph&iacute;a trước.</p>\r\n\r\n<p><img alt="so sanh lumia" src="http://www.vienthonga.vn/uploads/2015%20sp/lumia%20540/Lumia-compare-540.jpg" style="border:0px; box-sizing:border-box; display:block; height:204px; margin-left:auto; margin-right:auto; vertical-align:middle; width:514px" title="so sánh lumia" /></p>\r\n\r\n<p>Trong b&agrave;i viết n&agrave;y ch&uacute;ng ta sẽ so s&aacute;nh&nbsp;<a href="http://www.vienthonga.vn/microsoft-lumia-640-3g-dual-sim.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="Lumia 640">Lumia 640</a>&nbsp;,&nbsp;<a href="http://www.vienthonga.vn/microsoft-lumia-535.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="Lumia 535">Lumia 535</a>,&nbsp;<a href="http://www.vienthonga.vn/nokia-lumia-730.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="Lumia 730">Lumia 730&nbsp;</a>v&agrave;&nbsp;<a href="http://www.vienthonga.vn/microsoft-lumia-540.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="Lumia 540">Lumia 540</a>&nbsp;về th&ocirc;ng số kỹ thuật, t&iacute;nh năng v&agrave; gi&aacute; cả. Xem x&eacute;t bảng so s&aacute;nh dưới đ&acirc;y.</p>\r\n\r\n<div style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; color: rgb(109, 110, 113); font-family: Arial, Helvetica, ''DejaVu Sans'', ''Liberation Sans'', Freesans, sans-serif; font-size: 14px; line-height: 23.8px; overflow: auto;">\r\n<table border="1" cellpadding="5" cellspacing="0" style="background-color:transparent; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; width:820px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Lumia 730</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Lumia 640</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Lumia 540</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Lumia 535</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>M&agrave;n h&igrave;nh</p>\r\n			</td>\r\n			<td>\r\n			<p>Lumia 730 c&oacute; 4,7-inch, 720p độ ph&acirc;n giải m&agrave;n h&igrave;nh OLED.&nbsp;316 PPI.</p>\r\n			</td>\r\n			<td>\r\n			<p>Lumia 640 c&oacute; 5-inch, m&agrave;n h&igrave;nh hiển thị độ ph&acirc;n giải 720p.&nbsp;294 PPI.</p>\r\n			</td>\r\n			<td>\r\n			<p>Lumia 540 c&oacute; một inch 5, 720p IPS hiển thị LCD.&nbsp;294 PPI.</p>\r\n			</td>\r\n			<td>\r\n			<p>Lumia 535 c&oacute; 5-inch, m&agrave;n h&igrave;nh 960x540p.&nbsp;220 PPI.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Trọng lượng</p>\r\n			</td>\r\n			<td>\r\n			<p>130.4 g</p>\r\n			</td>\r\n			<td>\r\n			<p>145g</p>\r\n			</td>\r\n			<td>\r\n			<p>152g</p>\r\n			</td>\r\n			<td>\r\n			<p>145.3g</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Độ d&agrave;y</p>\r\n			</td>\r\n			<td>\r\n			<p>8.7mm</p>\r\n			</td>\r\n			<td>\r\n			<p>8.8mm</p>\r\n			</td>\r\n			<td>\r\n			<p>9.4mm</p>\r\n			</td>\r\n			<td>\r\n			<p>8.8mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Bộ xử l&yacute;</p>\r\n			</td>\r\n			<td>\r\n			<p>quad-core Snapdrgon 400&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>quad-core Snapdrgon 400&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>quad-core Snapdrgon 200&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>quad-core Snapdrgon 200&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Pin</p>\r\n			</td>\r\n			<td>\r\n			<p>2220 mAh</p>\r\n			</td>\r\n			<td>\r\n			<p>2500 mAh</p>\r\n			</td>\r\n			<td>\r\n			<p>2200 mAh</p>\r\n			</td>\r\n			<td>\r\n			<p>1905 mAh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Bộ nhớ</p>\r\n			</td>\r\n			<td>\r\n			<p>8 GB bộ nhớ trong, c&oacute; thể mở rộng 128GB microSD</p>\r\n			</td>\r\n			<td>\r\n			<p>8 GB bộ nhớ trong, c&oacute; thể mở rộng 128GB microSD</p>\r\n			</td>\r\n			<td>\r\n			<p>8 GB bộ nhớ trong, c&oacute; thể mở rộng 128GB microSD</p>\r\n			</td>\r\n			<td>\r\n			<p>8 GB bộ nhớ trong, c&oacute; thể mở rộng 128GB microSD</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>RAM</p>\r\n			</td>\r\n			<td>\r\n			<p>1GB</p>\r\n			</td>\r\n			<td>\r\n			<p>1GB</p>\r\n			</td>\r\n			<td>\r\n			<p>1GB</p>\r\n			</td>\r\n			<td>\r\n			<p>1GB</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>SIM</p>\r\n			</td>\r\n			<td>\r\n			<p>Dual sim</p>\r\n			</td>\r\n			<td>\r\n			<p>Dual sim</p>\r\n			</td>\r\n			<td>\r\n			<p>Dual sim</p>\r\n			</td>\r\n			<td>\r\n			<p>Dual sim</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Camera (FFC)</p>\r\n			</td>\r\n			<td>\r\n			<p>5 MP FFC, 1080p video</p>\r\n			</td>\r\n			<td>\r\n			<p>0.9 MP FFC, 720p video</p>\r\n			</td>\r\n			<td>\r\n			<p>5 MP FFC, (848 x 480)</p>\r\n			</td>\r\n			<td>\r\n			<p>5 MP FFC, (848 x 480)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Motion data</p>\r\n			</td>\r\n			<td>\r\n			<p>C&oacute;</p>\r\n			</td>\r\n			<td>\r\n			<p>C&oacute;</p>\r\n			</td>\r\n			<td>\r\n			<p>Kh&ocirc;ng</p>\r\n			</td>\r\n			<td>\r\n			<p>Kh&ocirc;ng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Camera ch&iacute;nh</p>\r\n			</td>\r\n			<td>\r\n			<p>6.7 MP&nbsp;</p>\r\n			</td>\r\n			<td>\r\n			<p>8 MP</p>\r\n			</td>\r\n			<td>\r\n			<p>8 MP</p>\r\n			</td>\r\n			<td>\r\n			<p>5 MP</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>T&iacute;nh năng n&acirc;ng cao h&igrave;nh ảnh</p>\r\n			</td>\r\n			<td>\r\n			<p>Living Images</p>\r\n			</td>\r\n			<td>\r\n			<p>Dynamic flash, Rich capture, Living Images</p>\r\n			</td>\r\n			<td>\r\n			<p>Kh&ocirc;ng</p>\r\n			</td>\r\n			<td>\r\n			<p>Kh&ocirc;ng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Quay Video</p>\r\n			</td>\r\n			<td>\r\n			<p>1080p</p>\r\n			</td>\r\n			<td>\r\n			<p>1080p</p>\r\n			</td>\r\n			<td>\r\n			<p>FWVGA (848 x 480)</p>\r\n			</td>\r\n			<td>\r\n			<p>FWVGA (848 x 480)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Gi&aacute;</p>\r\n			</td>\r\n			<td>\r\n			<p><s>4.989.000 đ</s></p>\r\n\r\n			<p><span style="color:rgb(255, 0, 0)">3.990.000 đ</span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style="color:rgb(255, 0, 0)">&nbsp;</span></p>\r\n\r\n			<p><span style="color:rgb(255, 0, 0)">3.689.000 đ</span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style="color:rgb(255, 0, 0)">&nbsp;</span></p>\r\n\r\n			<p><span style="color:rgb(255, 0, 0)">3.490.000 đ</span></p>\r\n			</td>\r\n			<td>\r\n			<p><s>3.199.000 đ</s></p>\r\n\r\n			<p><span style="color:rgb(255, 0, 0)">2.999.000 đ</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lumia 640</strong>&nbsp;nổi bật với camera 8 MP v&agrave; c&aacute;c t&iacute;nh năng như m&agrave;n h&igrave;nh Glance, t&iacute;nh năng m&aacute;y ảnh cao cấp, quay video 1080p, SensorCore, pin lớn hơn v&agrave; gi&aacute; cả rất tốt l&agrave; thiết bị y&ecirc;u th&iacute;ch của nhiều người.</p>\r\n\r\n<p><strong>Lumia 540</strong>&nbsp;với m&agrave;n h&igrave;nh hiển thị 5 inch, camera 8 MP v&agrave; 5 MP FFC. Camera ph&iacute;a sau của Lumia 540 cũng tương tự như những g&igrave; ch&uacute;ng ta c&oacute; tr&ecirc;n Lumia 640. Tuy nhi&ecirc;n, chỉ c&oacute; thể quay video độ ph&acirc;n giải 480p.&nbsp;<strong>Lumia 540</strong>&nbsp;cũng kh&ocirc;ng c&oacute; m&agrave;n h&igrave;nh Glance v&agrave; c&aacute;c t&iacute;nh năng chụp ảnh ti&ecirc;n tiến. Lumia cũng c&oacute; bộ xử l&yacute; Snapdragon 200 so với Snapdragon 400 tr&ecirc;n Lumia 640.</p>\r\n\r\n<p>Đến với&nbsp;<strong>Lumia 535</strong>&nbsp;, c&aacute;c t&iacute;nh năng v&agrave; gi&aacute; cả cho thấy&nbsp;<em>Lumia 535</em>&nbsp;vẫn l&agrave; một thiết bị rất hấp dẫn nhưng kh&ocirc;ng thể bằng&nbsp;<strong>Lumia 540</strong>.</p>\r\n\r\n<p>Về gi&aacute;,&nbsp;<a href="http://www.vienthonga.vn/nokia-lumia-730.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="lumia 730">Lumia 730</a>&nbsp;vẫn l&agrave; một g&oacute;i rất hấp dẫn. Mặc d&ugrave;, so với Lumia 540 th&igrave; m&aacute;y c&oacute; camera cao hơn v&agrave; m&agrave;n h&igrave;nh lớn hơn. Tuy nhi&ecirc;n, đối với người ưa hiệu suất tốt về &aacute;nh s&aacute;ng v&agrave; quay video 1080p th&igrave; Lumia 730 vẫn l&agrave; sự lựa chọn tốt hơn&nbsp;<a href="http://www.vienthonga.vn/microsoft-lumia-540.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" title="Lumia 540">Lumia 540</a>.</p>\r\n', 'Khuyễn Mãi', 'so-sanh-lumia-540-vs-lumia-640-vs-lumia-730-vs-lumia-535', '2016-04-24 01:59:48', '2016-04-30 16:49:29'),
(9, 'Sắm Camera Phone đáng “đồng tiền bát gạo” chụp pháo hoa dịp lễ', 'prime-x-max.jpg', '<h2><span style="font-size:medium">Sở hữu camera 21.0 MP, t&iacute;ch hợp cảm biến Sony với 6 lớp thấu k&iacute;nh,&nbsp;<a href="https://vienthonga.vn/mobiistar-prime-x-max.html" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="Mobiistar Prime X Max">Prime X Max</a>&nbsp;l&agrave; lựa chọn th&ocirc;ng minh kh&ocirc;ng thể bỏ qua v&agrave;o dịp lễ 30/4 &ndash; 1/5 lần n&agrave;y, đặc biệt với người d&ugrave;ng y&ecirc;u th&iacute;ch chụp ảnh.</span></h2>\r\n\r\n<p><strong>Chụp ảnh đẹp như chuy&ecirc;n gia c&ugrave;ng Camera 21.0MP</strong></p>\r\n\r\n<p style="text-align:center"><strong><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-1.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></strong></p>\r\n\r\n<p>Nếu bạn l&agrave; người y&ecirc;u nhiếp ảnh v&agrave; ph&acirc;n v&acirc;n chọn 1 chiếc &ldquo;Camera Phone&rdquo; th&igrave; Mobiistar Prime X Max n&ecirc;n l&agrave; lựa chọn được ưu ti&ecirc;n với camera 21.0 MP t&iacute;ch hợp cảm biến Sony Exmor RS IMX 230. Bạn sẽ kh&ocirc;ng bỏ lỡ bất cứ khoảnh khắc n&agrave;o nhờ khả năng lấy n&eacute;t theo pha với tốc độ nhanh dưới 0.3s (PDAF). Đặc biệt, chế độ chụp h&igrave;nh chuy&ecirc;n nghiệp (Pro-Mode) với t&iacute;nh năng phơi s&aacute;ng l&ecirc;n tới 32s sẽ gi&uacute;p bạn thu lại những bức ảnh đẹp như chuy&ecirc;n gia trong điều kiện thiếu s&aacute;ng, d&ugrave; cho bạn chup h&igrave;nh ban đ&ecirc;m cầu S&agrave;i G&ograve;n hay đi chơi buổi tối ở Hội An.</p>\r\n\r\n<p><strong><strong>Thiết kế nh&ocirc;m nguy&ecirc;n khối với cảm biến v&acirc;n tay cao cấp</strong></strong></p>\r\n\r\n<p style="text-align:center"><strong><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-2.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></strong></p>\r\n\r\n<p>C&oacute; thể n&oacute;i, Prime X Max l&agrave; chiếc smartphone c&oacute; thiết kế nh&ocirc;m nguy&ecirc;n khối đẹp mắt nhất của h&atilde;ng Mobiistar đến thời điểm hiện tại. M&aacute;y được trang bị m&agrave;n h&igrave;nh Full HD 5.5 inch, mặt k&iacute;nh cong 2.5D với lớp k&iacute;nh cường lực Dragontrail gi&uacute;p bảo vệ m&agrave;n h&igrave;nh tốt v&agrave; cho trải nghiệm mượt m&agrave;. Prime X Max c&ograve;n sở hữu t&iacute;nh năng cảm biến v&acirc;n tay một chạm, mở kho&aacute; m&agrave;n h&igrave;nh nhanh dưới 0.3s. Đ&acirc;y cũng l&agrave; chiếc smartphone Việt đầu ti&ecirc;n được t&iacute;ch hợp t&iacute;nh năng n&agrave;y nhờ v&agrave;o khả năng học hỏi v&agrave; &aacute;p dụng kỹ thuật bảo mật cao của Mobiistar tới nhu cầu người d&ugrave;ng.</p>\r\n\r\n<p><strong><strong>Cấu h&igrave;nh mạnh mẽ với chip Helio P10, RAM 3GB</strong></strong></p>\r\n\r\n<p style="text-align:center"><strong><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-3.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></strong></p>\r\n\r\n<p>Một chiếc smartphone tốt c&ograve;n được đo lường ở hiệu năng cao, chạy đa nhiệm tốt từ chơi game, nghe nhạc v&agrave; mở c&ugrave;ng l&uacute;c nhiều sửa sổ. Prime X Max được trang bị chip xử l&yacute; Helio P10, d&ograve;ng cao cấp nhất của MediaTek c&ugrave;ng với RAM 3GB, ROM 32GB (hỗ trợ thẻ nhớ micro SD 128GB) để vận h&agrave;nh mượt m&agrave; c&aacute;c chức năng n&agrave;y. C&aacute;c game thủ c&oacute; thể y&ecirc;n t&acirc;m tải về v&agrave; &ldquo;chiến&rdquo; hầu hết c&aacute;c game ở kho ứng dụng.</p>\r\n\r\n<p><strong><strong>C&ocirc;ng nghệ sạc nhanh Pump Express Plus, sạc kh&ocirc;ng d&acirc;y chuẩn Qi</strong></strong></p>\r\n\r\n<p style="text-align:center"><strong><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-4.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></strong></p>\r\n\r\n<p>Dự đo&aacute;n trước được xu hướng, Mobiistar gi&uacute;p người d&ugrave;ng tiện dụng hơn mỗi ng&agrave;y với việc sạc smartphone mọi l&uacute;c mọi nơi nhờ trang bị sạc kh&ocirc;ng d&acirc;y chuẩn Qi của quốc tế. Đồng thời, khả năng sạc nhanh Pump Express Plus gi&uacute;p bạn tiết kiệm được &ldquo;khối&rdquo; thời gian chờ đợi. Bộ sạc nhỏ gọn sẽ được t&iacute;ch hợp trực tiếp c&ugrave;ng vỏ điện thoại th&ocirc;ng qua 3 chấu nhỏ được kế mặt sau điện thoại để bạn y&ecirc;n t&acirc;m với việc nạp pin tức th&igrave;.</p>\r\n\r\n<p><strong><strong>Đặt trước Prime X Max, tặng ngay 1.000.000 VND</strong></strong></p>\r\n\r\n<p style="text-align:center"><strong><img alt="Mobiistar Prime X Max" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_mobiistar-prime-x-max-vienthonga-5.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Mobiistar Prime X Max" /></strong></p>\r\n\r\n<p>Nếu đ&atilde; tr&oacute;t &ldquo;ưng&rdquo; những ưu điểm tr&ecirc;n, h&atilde;y tranh thủ cơ hội rinh ngay Prime X Max về nh&agrave; từ: &ldquo;<a href="http://fb.mobiistar.vn/2690I03" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;">Đặt trước tuyệt phẩm: Tặng ngay 1.000.000 VND</a>&rdquo;. Chương tr&igrave;nh d&agrave;nh cho 200 bạn đầu ti&ecirc;n đăng k&yacute; đặt cọc mua trước Prime X Max của Mobiistar với hai c&aacute;ch thức đăng k&yacute;: Truy cập&nbsp;<a href="http://giovang.mobiistar.vn/" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;">http://giovang.mobiistar.vn</a>&nbsp;hoặc ứng dụng mobiVIP từ 10h 19/04 đến 10h 22/04/2016. Chương tr&igrave;nh sẽ diễn ra tại c&aacute;c showroom, đại l&yacute; Mobiistar v&agrave; hệ thống Viễn Th&ocirc;ng A.</p>\r\n', 'Khuyễn Mãi', 'sam-camera-phone-dang-“dong-tien-bat-gao”-chup-phao-hoa-dip-le', '2016-04-24 02:01:25', '2016-04-30 16:49:22'),
(10, 'Loạt màn hình lạ mắt của LG', '100000-12-lg-display.jpg', '<h2><span style="font-size:medium"><a href="https://vienthonga.vn/dien-thoai-smartphones/lg" style="box-sizing: border-box; color: rgb(31, 94, 204); text-decoration: none; -webkit-tap-highlight-color: transparent; transition: all 0.27s cubic-bezier(0, 0, 0.58, 1); font-weight: bolder; background-color: transparent;" target="_blank" title="LG smartphone">LG</a>&nbsp;đưa về Việt Nam nhiều d&ograve;ng m&agrave;n h&igrave;nh chuy&ecirc;n dụng gi&aacute; h&agrave;ng trăm triệu đồng.</span></h2>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">M&agrave;n h&igrave;nh chuy&ecirc;n dụng của LG thường d&agrave;nh cho c&aacute;c doanh nghiệp hoặc sử dụng ở những nơi c&ocirc;ng cộng, kh&aacute;ch sạn, nh&agrave; h&agrave;ng, s&acirc;n bay... n&ecirc;n được thiết kế đặc biệt từ t&iacute;nh năng cho tới độ bền.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga1.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">V&iacute; dụ, mẫu Ultra HD Display LS95A c&oacute; k&iacute;ch thước l&ecirc;n tới 98 inch v&agrave; m&agrave;n h&igrave;nh 4K, tr&ocirc;ng giống như TV cỡ lớn nhưng được LG trang bị m&agrave;n h&igrave;nh cảm ứng đa điểm, cho ph&eacute;p hoạt động như một m&aacute;y t&iacute;nh bảng, thuận tiện cho việc tr&igrave;nh chiếu nội dung trong c&aacute;c cuộc họp.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga2.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">Số lượng điểm chạm tối đa l&agrave; 10 v&agrave; phủ lớp bảo vệ chống xước. M&agrave;n h&igrave;nh cảm ứng khổng lồ n&agrave;y sở hữu kết nối Wi-Fi, c&oacute; chip l&otilde;i k&eacute;p 2 nh&acirc;n, RAM 1,15GB v&agrave; bộ nhớ 8GB. N&oacute; c&oacute; thể chạy hệ điều h&agrave;nh Windows hoặc WebOS như tr&ecirc;n Smart TV của LG.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga3.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">B&ecirc;n cạnh đ&oacute; c&ograve;n d&ograve;ng m&agrave;n h&igrave;nh treo tường c&oacute; viền si&ecirc;u mỏng VH7B với độ ph&acirc;n giải UltraHD 4K v&agrave; k&iacute;ch thước 65 inch.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga4.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">Đ&acirc;y l&agrave; d&ograve;ng m&agrave;n h&igrave;nh treo tường (video-wall) c&oacute; viền mỏng nhất thế giới khi d&agrave;y chỉ 0,9 mm. Viền mỏng gi&uacute;p cho việc gh&eacute;p nhiều m&agrave;n h&igrave;nh lại kh&ocirc;ng bị ảnh hưởng tới chất lượng hiển thị.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga5.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">Theo LG, c&oacute; thể gh&eacute;p 100 m&agrave;n h&igrave;nh 65 inch n&agrave;y th&agrave;nh một m&agrave;n h&igrave;nh khổng lồ v&agrave; từng m&agrave;n h&igrave;nh nhỏ đều c&oacute; thể ph&aacute;t được video chất lượng 4K n&ecirc;n đảm bảo được độ n&eacute;t cao.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga6.jpg" style="border:0px; box-sizing:border-box; height:975px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">H&atilde;ng cũng giới thiệu những d&ograve;ng m&agrave;n h&igrave;nh chuy&ecirc;n dụng c&oacute; gi&aacute; h&agrave;ng trăm triệu đồng kh&aacute;c với thiết kế đặc biệt như chống được va đập mạnh, thậm ch&iacute; cả s&uacute;ng bắn...</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga7.jpg" style="border:0px; box-sizing:border-box; height:975px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">Hay loại m&agrave;n h&igrave;nh c&oacute; tỷ lệ si&ecirc;u d&agrave;i 58:9 nhưng vẫn c&oacute; độ ph&acirc;n giải UltraHD 4K.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga8.jpg" style="border:0px; box-sizing:border-box; height:433px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">Mẫu m&agrave;n h&igrave;nh tỷ lệ hiển thị si&ecirc;u d&agrave;i t&ecirc;n m&atilde; 86BH5C c&oacute; thể để dọc hoặc xoay ngang, cho ph&eacute;p chia th&agrave;nh nhiều m&agrave;n h&igrave;nh nhỏ kh&aacute;c nhau, tối đa 4 nguồn ph&aacute;t.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga9.jpg" style="border:0px; box-sizing:border-box; height:975px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">C&aacute;c mẫu m&agrave;n h&igrave;nh trong suốt v&agrave; m&agrave;n h&igrave;nh kết hợp gương soi từng được LG đem tới c&aacute;c triển l&atilde;m c&ocirc;ng nghệ như IFA hay CES cũng được LG đưa về thị trường Việt Nam đợt n&agrave;y.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga10.jpg" style="border:0px; box-sizing:border-box; height:365px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">Nh&agrave; sản xuất H&agrave;n Quốc cho biết, trong thời gian tới h&atilde;ng c&ograve;n đưa về thị trường d&ograve;ng m&agrave;n h&igrave;nh mỏng như giấy mang t&ecirc;n OLED Paper.&nbsp;</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_man-hinh-lg-vienthonga.png" style="border:0px; box-sizing:border-box; height:443px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">N&oacute; c&oacute; thiết kế kh&aacute; đặc biệt khi cho ph&eacute;p uốn cong từ ph&iacute;a trước lẫn mặt sau v&agrave; c&oacute; thể gỡ ra khỏi tường dễ d&agrave;ng.</p>\r\n\r\n<p style="text-align:center"><img alt="Màn hình LG" src="https://cdn1.vienthonga.vn/image/2016/4/5/100000_12-lg-display-vienthonga11.jpg" style="border:0px; box-sizing:border-box; height:426px; vertical-align:middle; width:650px" title="Màn hình LG" /></p>\r\n\r\n<p style="text-align:center">Từng m&agrave;n h&igrave;nh OLED cong si&ecirc;u mỏng cũng c&oacute; thể gh&eacute;p lại th&agrave;nh c&aacute;c m&agrave;n h&igrave;nh lớn để tr&igrave;nh chiếu nơi c&ocirc;ng cộng. Tại H&agrave;n Quốc, một m&agrave;n h&igrave;nh OLED cong khổng lồ được gh&eacute;p từ h&agrave;ng chục m&agrave;n h&igrave;nh OLED nhỏ đang được LG treo tại s&acirc;n bay Incheon</p>\r\n', 'Công Nghệ', 'loat-man-hinh-la-mat-cua-lg', '2016-04-24 02:03:03', '2016-04-30 16:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `custormer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `custormer_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `place_receive` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_delivery` datetime NOT NULL,
  `time_receive` datetime NOT NULL,
  `description_order` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `custormer_name`, `custormer_address`, `phone_number`, `email`, `payment`, `price`, `status`, `place_receive`, `time_delivery`, `time_receive`, `description_order`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thanh Tùng', 'Văn Giang Hưng Yên', '01688893189', 'thanhtung.tvg95@gmail.com', 'live', 13959000, 'Hủy Đơn Hàng', 'Hà Nội', '2016-04-24 12:00:00', '0000-00-00 00:00:00', '<b>Tên sản phẩm:</b> Xperia Z5 Dual <br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 12.690.000 VNĐ<br/><br/>', '2016-04-23 03:13:23', '2016-04-23 03:18:26'),
(2, 'Trần Sinh Viên', 'Hai Bà Trưng Hà Nội', '0987654321', 'sinhvienitpro95@gmail.com', 'card', 17787000, 'Đã Thanh Toán', 'Hà Nội', '2016-04-24 12:00:00', '2016-04-23 18:43:54', '<b>Tên sản phẩm:</b> Bphone<br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 5.990.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> Galaxy J7<br/><b>Số lượng:</b> 2<br/><b>Giá 1 sản phẩm:</b> 5.090.000 VNĐ<br/><br/>', '2016-04-23 04:14:31', '2016-04-23 11:43:54'),
(3, 'Nguyễn Sinh Viên', 'Hà Nội', '543534543', 'sinhvienitpro95@gmail.com', 'card', 26378000, 'Đã Thanh Toán', 'Hà Nội', '2016-04-24 12:00:00', '2016-04-24 11:00:00', '<b>Tên sản phẩm:</b> F1<br/><b>Số lượng:</b> 2<br/><b>Giá 1 sản phẩm:</b> 11.990.000 VNĐ<br/><br/>', '2016-04-23 04:32:53', '2016-04-23 11:33:26'),
(4, 'Nguyễn Sinh Viên', 'Hà Nội', '543534543', 'sinhvienitpro95@gmail.com', 'live', 26378000, 'Đã Thanh Toán', 'Hà Nội', '2016-04-23 19:00:00', '2016-04-24 19:41:03', '<b>Tên sản phẩm:</b> F1<br/><b>Số lượng:</b> 2<br/><b>Giá 1 sản phẩm:</b> 11.990.000 VNĐ<br/><br/>', '2016-04-23 06:33:15', '2016-04-24 12:41:03'),
(5, 'Nguyễn Hà Đông', 'Hà Đông', '098763546', 'tungnt.tvg95.hust@gmail.com', 'live', 550000, 'Chưa Thanh Toán', 'Hà Nội', '2016-04-25 11:00:00', '0000-00-00 00:00:00', '<b>Tên sản phẩm:</b> Tai nghe ép kanen<br/><b>Số lượng:</b> 2<br/><b>Giá 1 sản phẩm:</b> 250.000 VNĐ<br/><br/>', '2016-04-24 16:18:42', '2016-04-24 16:18:42'),
(8, 'Nguyễn Sinh Viên', 'Hà Nội', '543534543', 'sinhvienitpro95@gmail.com', 'card', 2959000, 'Đã Thanh Toán', 'Hà Nội', '2016-04-30 11:00:00', '2016-04-25 01:05:32', '<b>Tên sản phẩm:</b> JOY 3 A11w<br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 2.290.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> Thẻ nhớ microsd 16gb class 10<br/><b>Số lượng:</b> 2<br/><b>Giá 1 sản phẩm:</b> 200.000 VNĐ<br/><br/>', '2016-04-24 17:06:59', '2016-04-24 18:05:32'),
(9, 'Demo1', 'Hà Nội', '50482504', 'sinhvienitpro95@gmail.com', 'live', 1527900, 'Chưa Thanh Toán', 'Hà Nội', '2016-04-26 10:00:00', '0000-00-00 00:00:00', '<b>Tên sản phẩm:</b> Lumia 430<br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 1.389.000 VNĐ<br/><br/>', '2016-04-26 05:38:14', '2016-04-26 05:38:14'),
(10, 'Nguyễn Thanh Tùng', 'Văn Giang Hưng Yên', '01688893189', '20134433@student.hust.edu.vn', 'card', 42207000, 'Chưa Thanh Toán', 'Hà Nội', '2016-05-02 10:00:00', '0000-00-00 00:00:00', '<b>Tên sản phẩm:</b> Iphone6 Plus <br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 21.590.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> Galaxy S6 Edge<br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 14.690.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> JOY 3 A11w<br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 2.090.000 VNĐ<br/><br/>', '2016-05-01 08:01:01', '2016-05-01 08:01:01'),
(11, 'Nguyễn Thanh Tùng', 'Văn Giang Hưng Yên', '01688893189', 'thanhtung.tvg95@gmail.com', 'live', 38687000, 'Đã Thanh Toán', 'Hưng Yên', '2016-05-10 12:00:00', '2016-05-09 21:14:59', '<b>Tên sản phẩm:</b> Tai nghe ép awei<br/><b>Số lượng:</b> 2<br/><b>Giá 1 sản phẩm:</b> 400.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> F1<br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 10.990.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> Xperia Z5 Dual <br/><b>Số lượng:</b> 2<br/><b>Giá 1 sản phẩm:</b> 11.690.000 VNĐ<br/><br/>', '2016-05-09 13:56:20', '2016-05-09 14:14:59'),
(13, 'Nguyễn Sinh Viên', 'Văn Giang Hưng Yên', '0192837465', 'sinhvienitpro95@gmail.com', 'live', 13299000, 'Đã Thanh Toán', 'Hà Nội', '2016-05-10 11:00:00', '2016-05-09 21:26:11', '<b>Tên sản phẩm:</b> Xperia Z5 Dual <br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 11.690.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> Tai nghe ép awei<br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 400.000 VNĐ<br/><br/>', '2016-05-09 14:23:03', '2016-05-09 14:26:11'),
(14, 'Nguyễn Thanh Tùng', '', '8430854095', 'thanhtung.tvg95@gmail.com', 'live', 35959000, 'Chưa Thanh Toán', 'Hà Nội', '2016-05-13 15:00:00', '0000-00-00 00:00:00', '<b>Tên sản phẩm:</b> Galaxy J7<br/><b>Số lượng:</b> 5<br/><b>Giá 1 sản phẩm:</b> 5.090.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> Xperia C5 <br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 6.990.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> Tai nghe chụp tai kanen<br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 250.000 VNĐ<br/><br/>', '2016-05-12 07:27:43', '2016-05-12 07:27:43'),
(15, 'Nguyễn Thanh Tùng', '', '8430854095', 'thanhtung.tvg95@gmail.com', 'live', 35959000, 'Chưa Thanh Toán', 'Hà Nội', '2016-05-13 15:00:00', '0000-00-00 00:00:00', '<b>Tên sản phẩm:</b> Galaxy J7<br/><b>Số lượng:</b> 5<br/><b>Giá 1 sản phẩm:</b> 5.090.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> Xperia C5 <br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 6.990.000 VNĐ<br/><br/><b>Tên sản phẩm:</b> Tai nghe chụp tai kanen<br/><b>Số lượng:</b> 1<br/><b>Giá 1 sản phẩm:</b> 250.000 VNĐ<br/><br/>', '2016-05-12 07:28:31', '2016-05-12 07:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `os`
--

CREATE TABLE `os` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `os`
--

INSERT INTO `os` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'IOS 8', '', '2016-04-19 10:02:44', '2016-04-19 10:02:44'),
(2, 'Android 5.1', '', '2016-04-19 10:03:00', '2016-04-19 10:03:00'),
(3, 'Android 5.0', '', '2016-04-19 10:03:21', '2016-04-19 10:03:21'),
(4, 'Android 4.4', '', '2016-04-19 10:03:38', '2016-04-19 10:03:38'),
(5, 'Android 5.5', '', '2016-04-19 10:03:50', '2016-04-19 10:03:50'),
(6, 'IOS 9', '', '2016-04-19 10:04:07', '2016-04-19 10:04:07'),
(7, 'Android 4.4 (KitKat)', '', '2016-04-19 10:04:23', '2016-04-19 10:04:23'),
(8, 'Window phone 8.1', '', '2016-04-19 10:04:37', '2016-04-19 10:04:37'),
(9, 'IOS 7', '', '2016-04-19 10:04:53', '2016-04-19 10:04:53'),
(10, 'BOS (Nền tảng Android 5.0 Lollipop)', '', '2016-04-19 10:05:16', '2016-04-19 10:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('demo@gmail.com', 'dd6ae7b4472f30fa6be883af10bd4835e5f3f2b7e4dea2febbd9806ec06fc2b3', '2016-03-17 08:11:54'),
('sinhvienitpro95@gmail.com', 'i77lisCcxYH75IQHO85E3E9V5UMlkCScykcRy5lG', '2016-04-21 15:26:03'),
('20134433@student.hust.edu.vn', 'qXLy9esRqFyDRdxK1uzcDvHmlESrI4pVGUi1mWcu', '2016-05-01 07:13:02'),
('thanhtung.tvg95@gmail.com', 'f145a6860ecbedda16242fd83931a5763901e4f4793f26baa369c8f3d598a5e9', '2016-05-01 08:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monitor_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `os` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `camera` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `battery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_new` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `key_word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `color`, `monitor_size`, `ram`, `rom`, `chip`, `os`, `camera`, `weight`, `battery`, `price`, `price_new`, `image`, `description`, `number`, `key_word`, `company_id`, `created_at`, `updated_at`) VALUES
(9, 'Iphone6 Plus ', 'Vàng', '5.5inch', '1GB', '128GB', 'Apple A8 2x1.4Ghz', 'IOS 8', '8.0Mp', 170, '2915mAh', 23590000, 21590000, 'ip6plus-1.png', '', 52, 'iphone6-plus', 5, '2016-04-19 10:19:34', '2016-05-01 08:01:01'),
(10, 'Miror 5 A51w', 'White', '5.0inch', '2GB', '16GB', 'Qualcomm MSM8916 Quad-core 1.2 GHz', 'Android 5.1', 'Camera sau: 8.0MP/ Camera trước: 5.0MP', 160, '2420mAh', 4990000, 4990000, 'oppo-miror5-1.png', '', 67, 'miror-5-a51w', 9, '2016-04-19 10:23:15', '2016-05-09 14:23:03'),
(11, 'R7 Lite R7kf', 'Gold', '5.0inch', '2GB', '16GB', 'Snapdragon 615, 8 nhân, Quad-core 1.3GHz + Quad-core 1.0Ghz', 'Android 5.1', 'Camera sau: 13MP/ Camera trước: 8.0MP', 147, '2320mAh', 5990000, 5990000, 'oppo-r7-1.png', '', 70, 'r7-lite-r7kf', 9, '2016-04-19 10:24:44', '2016-04-22 16:58:35'),
(12, 'Xperia M5 Dual ', 'Black/White/Gold', '5.0inch', '3GB', '16GB', 'MT6795 (Helio x10), 8 nhân, 2.0 GHz', 'Android 5.0', 'Camera sau: 21.0Mp/ Camera trước: 13.0Mp', 142, '2600mAh', 8049000, 7549000, 'sony-xperia-m5-1.png', '', 50, 'xperia-m5-dual', 10, '2016-04-19 10:26:15', '2016-04-22 16:57:14'),
(13, 'P70', 'Brown', '5.0inch', '2GB', '16GB', 'MTK 6752, 8 nhân, 1.7 GHz', 'Android 4.4', 'Camera sau: 13.0Mp/ Camera trước: 5.0Mp', 149, '4000mAh', 3870000, 3870000, 'lenovo-p70-1.png', '', 50, 'p70', 11, '2016-04-19 10:27:27', '2016-04-22 17:01:46'),
(14, 'Galaxy J3', 'Gold', '5.0inch', '1.5GB', '8GB', 'Qualcomm Snapdragon 410, 4 nhân, 1.2 GHz', 'Android 5.1', 'Camera sau: 8MP/ Camera trước: 5.0 MP', 138, '2600mAh', 3690000, 3090000, 'j3-1.png', '', 60, 'galaxy-j3', 4, '2016-04-19 10:28:42', '2016-04-22 17:06:23'),
(15, 'ZenMax ZC550KL -6A019WW', 'Black', '5.5inch', '2GB', '16GB', 'Quad-Core CPU S410 Processor 1.2Ghz', 'Android 5.5', 'Camera sau: 13.0MP/ Camera trước 5.0MP', 140, '5000mAh', 4190000, 4190000, 'asus-zenmax--1.png', '', 50, 'zenmax-zc550kl--6a019ww', 12, '2016-04-19 10:29:56', '2016-04-22 16:56:05'),
(16, 'E180', 'Black', '2.4inch', '0GB', '0GB', '0', 'Android 4.4 (KitKat)', 'không hỗ trợ', 112, '3100mAh', 710000, 680000, 'philips-e180-1.png', '', 60, 'e180', 13, '2016-04-19 10:31:18', '2016-04-22 17:06:45'),
(17, 'Xperia C5 ', 'Black/Mint/White', '6.0inch', '2GB', '16GB', 'MTK 6752, 8 nhân, 1.7 GHz', 'Android 5.0', 'Camera sau: 13.0Mp/ Camera trước: 13.0Mp', 187, '3000mAh', 6990000, 6990000, 'sony-xperia-c5-1.png', '', 59, 'xperia-c5', 10, '2016-04-19 10:32:38', '2016-05-12 07:27:44'),
(18, 'iPhone 6S', 'Rose Gold', '4.7inch', '2GB', '64GB', 'Apple A9', 'IOS 9', '', 112, '2915mAh', 19790000, 19790000, 'iphone-6s-1.png', '', 60, 'iphone-6s', 5, '2016-04-19 10:34:11', '2016-04-22 17:04:08'),
(19, 'R5', 'White', '5.2inch', '2GB', '16GB', 'Snapdragon 615, 8 nhân, 1.5 GHz', 'Android 4.4 (KitKat)', 'Camera sau: 13.0MP/ Camera trước: 5.0MP', 155, '2000mAh', 6990000, 6490000, 'oppo-r5-1.png', '', 100, 'r5', 9, '2016-04-19 10:35:22', '2016-04-22 17:01:06'),
(20, 'Lumia 430', 'Black', '4.0inch', '1GB', '8GB', 'Qualcomm Snapdragon 200, 2 nhân, 1.2 GHz', 'Window phone 8.1', 'Camera chính: 2.0Mp, Camera phụ: VGA', 128, '1500mAh', 1389000, 1389000, 'nokia-lumia-430-1.png', '', 69, 'lumia-430', 3, '2016-04-19 10:36:37', '2016-04-26 05:38:14'),
(21, 'Galaxy S6 Edge', 'White', '5.1inch', '3GB', '32GB', 'Exynos 7420, 8 nhân, 4x1.5GHz Cortex-A53 & 4x2.1 GHz Cortex-A57', 'Android 5.0', 'Camera sau:16 MP/ Camera trước: 4.0MP', 138, '2600mAh', 14690000, 14690000, 'samsung-galaxy-s6-1.png', '', 59, 'galaxy-s6-edge', 4, '2016-04-19 10:37:51', '2016-05-01 08:01:01'),
(22, 'JOY 3 A11w', 'White', '4.5inch', '1GB', '4GB', 'MT6582m Quad core 1.3 GHz', 'Android 4.4', 'Camera sau: 5.0MP/ Camera trước: 2.0MP', 131, '2000mAh', 2290000, 2090000, 'oppo-joy-3-1.png', '', 47, 'joy-3-a11w', 9, '2016-04-19 10:38:56', '2016-05-01 08:01:01'),
(23, 'iPhone 5S', 'Gold', '4.0inch', '1GB', '16GB', 'Apple A7, 2x1.3Ghz', 'IOS 7', 'Camera sau: 8.0Mp', 140, '1560mAh', 11750000, 11750000, 'iphone-5s.png', '', 50, 'iphone-5s', 5, '2016-04-19 10:40:04', '2016-04-22 17:04:28'),
(24, 'Xperia M4 Aqua Dual ', 'Black', '5.0inch', '2GB', '8GB', 'Qualcomm Snapdragon 615 (Lõi tứ 1,5GHz + Lõi tứ 1,0GHz)', 'Android 5.0', 'Camera sau: 13.0Mp/ Camera trước: 5.0Mp', 135, '2400mAh', 4449000, 4449000, 'sony-xperia-m4-1.png', '', 100, 'xperia-m4-aqua-dual', 10, '2016-04-19 10:41:17', '2016-04-22 16:57:40'),
(25, 'F1', 'White', '5.0inch', '3GB', '16GB', 'Qualcomm MSM8939 Snapdragon 615, 8 nhân, Quad-core 1.5 GHz Cortex-A53 & quad-core 1.0 GHz Cortex-A53', 'Android 5.1', 'Camera sau: 13MP/ Camera trước: 8.0MP', 134, '2500mAh', 11990000, 10990000, 'oppo-f1-1.png', '', 30, 'f1', 9, '2016-04-19 10:42:38', '2016-05-09 13:57:38'),
(26, 'Galaxy J7', 'White', '5.5inch', '1.5GB', '16GB', 'Exynos 7580, 8 nhân, 1.5 GHz', 'Android 5.1', 'Camera sau: 13MP/ Camera trước: 5.0MP', 135, '3000mAh', 5090000, 5090000, 'j7-1.png', '', 48, 'galaxy-j7', 4, '2016-04-19 10:43:44', '2016-05-12 07:27:43'),
(27, 'Xperia Z5 Dual ', 'Black/White/Gold/Green', '5.2inch', '3GB', '32GB', 'Snapdragon 810, 8 nhân', 'Android 5.1', 'Camera sau: 23.0Mp/ Camera trước: 5.1Mp', 154, '2900mAh', 12690000, 11690000, 'sony-xperia-z5-1.png', '', 57, 'xperia-z5-dual', 10, '2016-04-19 10:45:04', '2016-05-09 14:23:03'),
(28, 'Bphone', 'Đen, trắng, vàng champagne, vàng 24k', '5.0inch', '3GB', '128GB', 'Qualcomm Snapdragon 801, 4 nhân, 2.5 GHz', 'BOS (Nền tảng Android 5.0 Lollipop)', 'Camera sau: 13.0 Mega Pixel, trước 5.0 Mega Pixel', 145, '3000mAh', 5990000, 5990000, 'bphone-1.png', '', 9, 'bphone', 14, '2016-04-19 10:46:14', '2016-04-23 04:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_of_order`
--

CREATE TABLE `product_of_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_of_order`
--

INSERT INTO `product_of_order` (`id`, `order_id`, `product_id`, `number`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 27, 1, 'product', '2016-04-23 03:13:23', '2016-04-23 03:13:23'),
(2, 2, 28, 1, 'product', '2016-04-23 04:14:31', '2016-04-23 04:14:31'),
(3, 2, 26, 2, 'product', '2016-04-23 04:14:31', '2016-04-23 04:14:31'),
(4, 3, 25, 2, 'product', '2016-04-23 04:32:53', '2016-04-23 04:32:53'),
(5, 4, 25, 2, 'product', '2016-04-23 06:33:15', '2016-04-23 06:33:15'),
(6, 5, 9, 2, 'accessory', '2016-04-24 16:18:42', '2016-04-24 16:18:42'),
(9, 8, 22, 1, 'product', '2016-04-24 17:06:59', '2016-04-24 17:06:59'),
(10, 8, 7, 2, 'accessory', '2016-04-24 17:06:59', '2016-04-24 17:06:59'),
(11, 9, 20, 1, 'product', '2016-04-26 05:38:14', '2016-04-26 05:38:14'),
(12, 10, 9, 1, 'product', '2016-05-01 08:01:01', '2016-05-01 08:01:01'),
(13, 10, 21, 1, 'product', '2016-05-01 08:01:01', '2016-05-01 08:01:01'),
(14, 10, 22, 1, 'product', '2016-05-01 08:01:01', '2016-05-01 08:01:01'),
(18, 13, 27, 1, 'product', '2016-05-09 14:23:03', '2016-05-09 14:23:03'),
(19, 13, 10, 1, 'accessory', '2016-05-09 14:23:03', '2016-05-09 14:23:03'),
(20, 14, 26, 5, 'product', '2016-05-12 07:27:44', '2016-05-12 07:27:44'),
(21, 14, 17, 1, 'product', '2016-05-12 07:27:44', '2016-05-12 07:27:44'),
(22, 15, 26, 5, 'product', '2016-05-12 07:28:31', '2016-05-12 07:28:31'),
(23, 15, 17, 1, 'product', '2016-05-12 07:28:31', '2016-05-12 07:28:31'),
(24, 15, 8, 1, 'accessory', '2016-05-12 07:28:31', '2016-05-12 07:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `system_manage`
--

CREATE TABLE `system_manage` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` tinyint(4) DEFAULT NULL,
  `ordinal` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_manage`
--

INSERT INTO `system_manage` (`id`, `type`, `image`, `content`, `display`, `ordinal`, `created_at`, `updated_at`) VALUES
(1, 'Large Banner', '100000-banner-f1-plus-760x325.jpg', 'Hình 1', 1, 1, '2016-03-21 09:16:34', '2016-04-24 03:17:14'),
(2, 'Large Banner', '100000-j5-j7-final.jpg', 'Hình 2', 1, 2, '2016-03-21 09:16:34', '2016-04-24 03:17:31'),
(3, 'Large Banner', 'banner-nb-01.png', 'Hình 3', 1, 3, '2016-03-21 09:16:34', '2016-04-24 03:17:46'),
(6, 'Large Banner', '100000-bao-hiem-trom-cuop-v2-760x325-1.jpg', 'Hình 4', 1, 4, '2016-03-21 09:56:44', '2016-04-24 03:18:00'),
(8, 'Small Banner', 'banner-small-1.png', 'Banner small 1', 1, 1, '2016-03-21 12:01:47', '2016-03-21 12:01:47'),
(10, 'Small Banner', 'banner-small-2.png', 'Banner Small 2', 1, 2, '2016-03-21 12:03:54', '2016-03-21 12:06:54'),
(11, 'Large Banner', '100000-lanh-luong-thang-760x325.jpg', 'Hình 5', 1, 5, '2016-03-21 12:16:29', '2016-04-24 03:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `fullname`, `avatar`, `company`, `address`, `phone_number`, `gender`, `role`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'thanhtung95', 'thanhtung.tvg95@gmail.com', '$2y$10$ZpZQJc5F7dxEaachGSTPjeSCBbGMFYaRpeitRUxw.C2FeblmBRXV.', 'Nguyễn Thanh Tùng', 'img-admin.jpg', '', 'Hà Nội', '123456543', 1, 'admin', 1, '2SspVSyxVUSkb8AwJOniWwLmsHuh08MmQsvYJk2xadFbNcMLXjEFv7aQCCca', '2016-03-07 11:06:40', '2016-05-09 14:13:40'),
(2, 'demo', 'demo@gmail.com', '$2y$10$U6lL4cC0Niw5CZwjDahWVO/Svl4z8qFiLRROH/B9G/mPlhcFpfb66', 'Demo', 'apple.jpg', 'SamSung', 'Hà Nội', '123456789', 0, 'manager', 1, '72BQOCpzpHoi0IcKzk0EPoJbo9kcKJH1jXf3h5cRIzzypfKUEY0Utf2pz9FE', '2016-03-07 11:08:34', '2016-05-12 07:33:31'),
(10, 'demo2', 'demo2@gmail.com', '$2y$10$kOglDS5IyyVr0e3/laxC1eOb3QhS8J9hGJ4UqenvI0e1/HSAxkbH.', 'Demo2', 'apple.jpg', 'LG', 'Hồ Chí Minh', '437788294839', 1, 'member', 1, 'NftY90pOIwNDyMMyv2arGNdbWno9yICyhZSU4RAp', '2016-03-11 00:44:59', '2016-04-19 10:52:14'),
(11, 'demo3', 'demo3@gmail.com', '$2y$10$x/Gz/ZitAEqRuPByUgQTD.9VCO5IZIe4O28c79H4dRhlmaEaW1so2', 'Demo3', 'anh-nen-day-thien-ha-15.jpg', 'Toyota', 'Hải Phòng', '128647845347', 1, 'member', 1, 'kW1wvflNMc6t42c3zLC66J5o7XvGVhsuNsHURkEX', '2016-03-11 04:17:24', '2016-03-21 08:26:06'),
(12, 'demo4', 'demo4@gmail.com', '$2y$10$p9B7G57D1guxRdYV7epQTuCpPY9ykuclJYkSBumk/OsQKRwZOhz/i', 'Demo4', 'default.jpg', '', 'Hà Nội', '4437343574', 1, 'member', 1, 'kW1wvflNMc6t42c3zLC66J5o7XvGVhsuNsHURkEX', '2016-03-11 04:18:14', '2016-03-21 08:26:28'),
(13, 'demo5', 'demo5@gmail.com', '$2y$10$Ht2T5KVjJ5fG2w66v142f.ac9r0qYMI6DcwMsIaHzJpwlNnknOIMS', 'Demo5', 'default.jpg', 'Một thành viên', 'Hưng Yên', '324267487754', 1, 'manager', 1, 'HXoTjNhiEi74gajzzezayijz0P2h7PGpSRx8fQqq6bum9sgKVl95meJ56mdL', '2016-03-11 04:18:53', '2016-04-20 09:25:19'),
(15, 'demo6', 'demo6@gmail.com', '$2y$10$TefXWsd04ub.zY.4b6Cotu21GLOh5EHe8VsJPab3tz54K/lVEYOl2', 'Demo6', 'default.jpg', 'HaiHa', 'Hà Nội', '4785302895', 0, 'member', 1, 'kW1wvflNMc6t42c3zLC66J5o7XvGVhsuNsHURkEX', '2016-03-11 05:50:10', '2016-03-21 08:28:01'),
(21, 'demo7', 'demo7@gmail.com', '$2y$10$raYExK3cnD0OGKIN3UzL3e9BSVQ8oU0nZDvTkWXMNeZ.Bux7fifbi', 'Demo7', 'default.jpg', '', 'Hà Nội', '123456788', 0, 'manager', 1, 'QV5VzCqwHvlaDEyAMpj8fQm60EvgImhXbHgbvHmY', '2016-03-16 11:19:05', '2016-03-31 03:44:50'),
(22, 'demo8', 'demo8@gmail.com', '$2y$10$dc1pFsDGpSOYRydpkZ8yGOXiYD9a.sQIGYrAru77ZlaTXcCAydeAy', 'Demo8', 'classDiagramProject2.jpg', 'TTP', 'Hải Dương', '123765325', 1, 'member', 1, 'd4SSvjmMOS7Esk04fstJQc6TV6txk35YaJyn08Ns', '2016-03-16 11:23:54', '2016-03-31 03:08:58'),
(23, 'fdfd', 'fdfd@gmail.com', '$2y$10$a9tNF/7N8iv7Mg9gRKWf3uc5uuC94tDl4s.XgVk6GwTBs7Ii9H2jK', 'fdfd', 'default.jpg', '', 'TP Hồ Chí Minh', '7647347542', 1, 'manager', 1, 'VUtVsvb3uXVgKu2qTMU1MwnpnHKEsnxOnMsnQri2', '2016-03-16 11:24:35', '2016-04-20 07:51:55'),
(25, 'demo11', 'demo11@gmail.com', '$2y$10$pZoSZYd7vjtHFSyDCtdzlOLtbKPUjOdaHRXV/nJZbyLtj/JBaGaIa', 'Demo11', 'htc.jpg', 'TTT', 'Hà Nội', '0987654311', 0, 'member', 1, 'd4SSvjmMOS7Esk04fstJQc6TV6txk35YaJyn08Ns', '2016-03-17 03:41:13', '2016-03-31 03:10:10'),
(34, 'hung', '20131852@student.hust.edu.vn', '$2y$10$WjWo9r9WjQWcrd4.x2bwZOD5Cep6r/ek1YxtAVrSspJ/KbTWohVme', 'Đặng Văn Hùng', 'default.jpg', '', 'Hà Nội', '1234567890', 1, 'member', 1, 'Iip0Ozbs5rOjXS7O0VtfVECOmESqgUul2xOAZAql', '2016-04-01 07:12:22', '2016-04-01 07:12:22'),
(40, 'demo12', 'sinhvienitpro95@gmail.com', '$2y$10$p8m1s68RHiPM6FE12t0FleGH0tAwRp9unC6z36mLWquerrwTGz/yq', 'Nguyễn Sinh Viên', 'default.jpg', 'SamSung', 'Hà Nội', '543534543', 1, 'member', 1, '3U91ZFHZJIIkoy4Sbfr3bL5unsykJ4Df7jdybCyW4y1RU33iyEXstiygPOJx', '2016-04-01 09:30:31', '2016-05-10 14:22:03'),
(41, 'tungtvg95', '20134433@student.hust.edu.vn', '$2y$10$gxIPfM5zLorbtixzCU7IN.zmdOBdaqR8vAjnSfFGp6VAyjzInneNa', 'Nguyễn Thanh Tùng', 'av.jpg', 'Thanh Tung Company', 'Văn Giang Hưng Yên', '01688893189', 1, 'member', 1, 'AuzPhLYVjlZG0vhwBSe2nZtfO7IJBLmtJ3swdK4hLL13iBrZx8LC0yFwGTiu', '2016-05-01 07:13:01', '2016-05-02 08:00:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_company_name_unique` (`company_name`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_city_id_foreign` (`city_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `import_products`
--
ALTER TABLE `import_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- Indexes for table `product_of_order`
--
ALTER TABLE `product_of_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_of_order_order_id_foreign` (`order_id`),
  ADD KEY `product_of_order_product_id_foreign` (`product_id`);

--
-- Indexes for table `system_manage`
--
ALTER TABLE `system_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `import_products`
--
ALTER TABLE `import_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `product_of_order`
--
ALTER TABLE `product_of_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `system_manage`
--
ALTER TABLE `system_manage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_of_order`
--
ALTER TABLE `product_of_order`
  ADD CONSTRAINT `product_of_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
