-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 02:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobo_pedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(10) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_img` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `brand_img`, `created_at`) VALUES
(13, 'Samsung', 'b2266f9fb5c885a33d6309b39b9f4e39.jpg', '2021-11-08 20:23:34'),
(14, 'Nokia', 'e86e24ce1135ee7a5ba48038bc67cb36.jpg', '2021-11-08 20:23:40'),
(15, 'Real ME', '0e1fc498cd8307d9d7b5466eeb78e201.jpg', '2021-11-08 20:23:47'),
(16, 'Huwaei', 'dc948cb5b1a31c32872979b9f7792a40.jpg', '2021-11-08 20:23:52'),
(17, 'Walton', '72a24c2327b69ca9cc3f06ff2ca64317.jpg', '2021-11-08 20:23:57'),
(18, 'Oppo', '27bf99714cdcd82f9f53664ab958825a.jpg', '2021-11-08 20:24:01'),
(19, 'Xiaomi', '620e5aafd8b8980cd4effa13b5928618.jpg', '2021-11-12 04:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `comment_text` text NOT NULL,
  `phone_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `name`, `email`, `comment_text`, `phone_id`, `created_at`) VALUES
(5, 'Mahmud Hasan', 'mahmud.bubt.150@gmail.com', 'বাংলায় নমুনা লেখা – বাংলা Lorem ipsum', 21, '2021-11-14 12:28:55'),
(6, 'John Doe', 'tetome7895@hypteo.com', 'বাংলায় নমুনা লেখা – বাংলা Lorem ipsum', 21, '2021-11-14 12:30:49'),
(7, 'Neoma', 'sofiacrooks@boranora.com', 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। ', 21, '2021-11-14 12:44:07'),
(8, 'Champlin', 'champlin7895@hypteo.com', 'Forget about spam, advertising mailings, hacking and attacking robots. Keep your real mailbox clean and secure. Temp Mail provides temporary, secure, anonymous, free, disposable email address.', 21, '2021-11-14 13:00:17'),
(9, 'মাহমুদ হাসান ইমরান ', 'mahmud.bubt.150@gmail.com', 'অচাম ফোন ', 22, '2021-11-14 17:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phone_id` int(10) NOT NULL,
  `phone_name` varchar(100) NOT NULL,
  `phone_brand` varchar(120) NOT NULL,
  `phone_os` varchar(100) NOT NULL,
  `phone_screen` varchar(100) NOT NULL,
  `phone_res` varchar(100) NOT NULL,
  `phone_ram` varchar(100) NOT NULL,
  `phone_rom` varchar(100) NOT NULL,
  `phone_cam_primary` varchar(100) NOT NULL,
  `phone_cam_secondary` varchar(100) NOT NULL,
  `phone_battery` varchar(100) NOT NULL,
  `phone_img` varchar(100) NOT NULL,
  `phone_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `phone_price` varchar(100) DEFAULT NULL,
  `phone_processor` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phone_id`, `phone_name`, `phone_brand`, `phone_os`, `phone_screen`, `phone_res`, `phone_ram`, `phone_rom`, `phone_cam_primary`, `phone_cam_secondary`, `phone_battery`, `phone_img`, `phone_created_at`, `phone_price`, `phone_processor`) VALUES
(16, 'Samsung Galaxy A51 ', '13', 'Android 10.0; One UI 2', '6.5\" Super AMOLED capacitive touchscreen, 16M colors, 102.0 cm2 (~87.4% screen-to-body ratio)', '1080 x 2400 pixels, 20:9 ratio (~405 ppi density)', '6 GB', '128 GB', 'Quad: 48 MP, f/2.0, 26mm (wide), 1/2.0\", 0.8m, PDAF 12 MP, f/2.2, 12mm (ultrawide) 5 MP, f/2.4, 25mm', '32 MP, f/2.2, 26mm (wide), 1/2.8\", 0.8m', ' 4000mAh Li-Polymer', 'fa3779c136fefc4b3785ec3af49594c8.jpg', '2021-11-18 05:31:04', '27499', 'Exynos 9611 (10nm'),
(17, 'Nokia 3.4', '14', 'Android 10', '6.39\" IPS LCD, 400 nits (typ)', '720 x 1560 pixels, 19.5:9 ratio (~269 ppi density)', '4 GB', '64 GB', 'Triple: 13 MP, (wide), PDAF 5 MP, (ultrawide) 2 MP, (depth)', '8 MP, (wide)', ' 4000mAh Li-Polymer', 'd7efb5ecb4ad5ef45b6093c2ef274707.jpg', '2021-11-18 05:51:46', '14999', 'Qualcomm SM4250 Snapdragon 460 (11 nm)'),
(18, 'Realme C25s', '15', 'Android 11, Realme UI 2.0', '6.5\" IPS LCD, 480 nits (typ), 570 nits (peak)', '720 x 1600 pixels, 20:9 ratio (~270 ppi density)', '4 GB', '128 GB', 'Triple: 48 MP, f/1.8, 26mm (wide), PDAF 2 MP, f/2.4, (macro) 2 MP, f/2.4, (depth)', '8 MP, f/2.0, 26mm (wide), 1/4.0\", 1.12m', '6000mAh Li-Polymer', 'f30b50bcce176c0633bde28dbff6d367.jpg', '2021-11-18 05:53:50', '15490', 'MediaTek Helio G85 (12nm)'),
(19, 'Huawei Mate 30 Pro', '16', 'Android 10.0; EMUI 10', '6.53\" OLED capacitive touchscreen, 16M colors, 108.7 cm2 (~94.1% screen-to-body ratio)', '1176 x 2400 pixels, 18.5:9 ratio (~409 ppi density)', '8 GB', '128 GB', 'Quad: 40 MP, f/1.6, 27mm (wide), 1/1.7\", PDAF, OIS 8 MP, f/2.4, 80mm (telephoto), 1/4.0\", PDAF, OIS,', '32 MP, f/2.0, 26mm (wide), 1/2.8\", 0.8m TOF 3D, (depth/biometrics sensor)', '4500mAh Li-Polymer', '84896dcb17506acdc7caa82ff5cfb233.jpg', '2021-11-18 05:56:04', '99999', 'HiSilicon Kirin 990 (7 nm)'),
(20, 'Walton Primo H9 Pro', '17', 'Android 10', '6.1\" IPS INCELL Technology with 2.5D Glass, Capactive Touch Screen', '155.2 x 72.8 x 8.8 mm', '3 GB', '32 GB', 'Triple: 13MP Sony Main 5MP Wide-Angle Lens 0.3MP Depth', '8MP F/2.2', '4000mAh Li-Polymer', '7cc6ccebf9f3baa926f6d0e1112211ad.jpg', '2021-11-18 05:58:29', '7399', 'Helio A20'),
(21, 'Oppo A16', '18', 'Android 11, ColorOS 11.1', '6.52\" IPS LCD, 480 nits (typ)', '720 x 1600 pixels, 20:9 ratio (~269 ppi density)', '4 GB', '64 GB', 'Triple: 13 MP, f/2.2, 26mm (wide), 1/3.06\", 1.12m, PDAF 2 MP, f/2.4, (macro) 2 MP, f/2.4, (depth)', '8 MP, f/2.0, (wide)', '5000mAh Li-Polyme', 'b1d64995c5919a9b41d122138c953950.jpg', '2021-11-18 06:00:18', '14990', 'MediaTek Helio G35 (12 nm)'),
(22, 'Xiaomi Redmi Note 10', '19', 'Android 10, MIUI 12', '6.43', '1080 x 2400 pixels, 20:9 ratio (~409 ppi density)', '6 GB', '128 GB', 'Quad: 48 MP, f/1.8, 26mm (wide), 1/2.0', '13 MP, f/2.5, (wide), 1/3.06', '5000mAh Li-Polymer', 'd6e926ef6bd982767c25458b9cdebed0.jpg', '2021-11-18 06:02:47', '22999', 'Qualcomm SDM678 Snapdragon 678 (11 nm)'),
(23, 'Xiaomi Poco M3', '19', 'Android 10, MIUI 12', '6.53 inches, 104.7 cm2 (~83.5% screen-to-body ratio)', '1080 x 2340 pixels, 19.5:9 ratio (~395 ppi density)', '4 GB', '64/128 GB', 'Triple Camera 48 MP, f/1.8, (wide), 1/2.0', '8 MP, f/2.0, 27mm (wide), 1/4.0', '6000mAh Li-Polymer (non-removable)', 'e7ba3e3f87f73ea1693fda87b6f1dc25.jpg', '2021-11-18 05:19:05', '14999', 'MediaTek MT6765G Helio G35 (12 nm)');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_content` text NOT NULL,
  `featured_photo` varchar(120) NOT NULL,
  `category` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_content`, `featured_photo`, `category`, `user_id`, `created_at`) VALUES
(15, 'আমার বাংলা নিয়ে প্রথম কাজ ', '<p>আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল&nbsp;&nbsp;নামক এক যুগান্তকারী বাংলা সফ্&zwnj;টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে। কিন্তু দুঃখজনক হলেও সত্য যে, ইংরেজিতে লাতিন Lorem Ipsum&hellip; সূচক নমুনা লেখা (dummy texts) থাকলেও বাংলা ভাষায় এরকম কোনো লেখা নেই। তাই নিজের তাগিদেই বাংলা ভাষার জন্য প্রথম নমুনা লেখা তৈরি করলাম, এ হলো বাংলা Lorem ipsum&nbsp;&ndash; কিন্তু তার অনুবাদ নয়। আমি একে নামকরণ করেছি:&nbsp;<strong>অর্থহীন লেখা!</strong></p>\r\n', '6ebe93be0c40335804fb4bfe79f1fc9d.jpg', '3', 0, '2021-11-08 18:45:05'),
(17, 'বাংলা ডেমো টেক্সট ', '<p>আমরা বাংলায় ওয়েব ডেডলপমেন্ট নিয়ে কাজ করতে গিয়ে প্রথম যে সমস্যাটার মুখোমুখি হই, সেটা হলো, বাংলা ডেমো টেক্সট। ইংরেজির জন্য lorem ipsum তো আছে । বাংলার জন্য কি আছে? সেই ধারনা থেকেই বাংলা ডেমো টেক্সট তৈরীর চেষ্টা। HTML এর প্রয়োজনীয় প্রায় সব ফরম্যাটেই বাংলা ডেমো টেক্সট তুলে ধরা হয়েছে। আশা করছি, এরি ক্ষুদ্র প্রচেষ্টা আপনাদের কাজে আসবে</p>\r\n', 'c03d17a6afd358a092d1fb1681a2a638.jpg', '3', 0, '2021-11-09 18:48:29'),
(18, 'কটি বিনামূল্যে অনলাইন জেনারেটর  ', '<p>একটি বিনামূল্যে অনলাইন জেনারেটর মিথ্যা লেখা আছে. এটা আপনার মডেল জন্য প্রতিস্থাপন টেক্সট বা বিকল্প টেক্সট উৎপন্ন একটি সম্পূর্ণ টেক্সট কাল্পনিক উপলব্ধ করা হয়. এটি বিভিন্ন ভাষায় গ্রন্থে উদাহরণ উৎপন্ন ল্যাটিন এবং সিরিলিক বিভিন্ন র্যান্ডম গ্রন্থে অতিরিক্ত বৈশিষ্ট্যগুলিও উপস্থিত রয়েছে.<br />\r\n<br />\r\nLoremIpsum360 &deg; এছাড়াও আপনি ফ<strong>রাসি বা অন্যান্য ভাষার কাছাকাছি হ</strong>তে বিরাম চিহ্ন, কথা এবং বিশেষ অক্ষর যোগ করার ক্ষমতা দেয়. আপনি বিভিন্ন ফন্ট ফলাফল দেখতে চান উপরন্তু, যদি আপনি এই ধরনের ফন্ট পরিবারের, ফন্ট সাইজ, টেক্সট প্রান্তিককরণ বা লাইন-হায় হিসাবে সেট করতে অনেক বৈশিষ্ট্য খুঁজে পেতে হবে.</p>\r\n', '5c27f4433faf257d5e2fcb21e88a3b4c.jpg', '2', 0, '2021-11-10 23:47:25'),
(19, 'অপো’র ‘রেনো৬’ অবমুক্ত হল দেশের বাজারে ', '<p>অনলাইন ইভেন্টের মাধ্যমে অবমুক্ত করা হল অপো &lsquo;রেনো৬&rsquo;। সিনেম্যাটিক বোকেহ ফ্লেয়ার পোর্ট্রেট সম্বলিত রেনো৬ এ রয়েছে ৬৪ মেগাপিক্সেল কোয়াড ক্যামেরা এবং ৪৪ মেগাপিক্সেলের ফ্রন্ট ক্যামেরা যা দেবে প্রফেশনাল ফটোগ্রাফির অভিজ্ঞতা। দেশের সব আউটলেটে ও অনলাইন মার্কেটপ্লেসে ফোনটি পাওয়া যাচ্ছে ৩২,৯৯০ টাকায়।</p>\r\n\r\n<p><br />\r\n৮/১২৮ জিবি&rsquo;র রেনো৬ এর র&zwj;্যাম বাড়ানোর সুযোগ রয়েছে ৫ জিবি পর্যন্ত। ফোনটির পুরুত্ব ৭.৮ মিলিমিটার এবং ওজন ১৭৩ গ্রাম। এর সুপার স্লিম ডিজাইনের সাথে আছে রেনো গ্লো ইফেক্ট, আছে ফিঙ্গার প্রিন্ট ও স্ক্র্যাচ প্রতিরোধক ফিচার। ৯০ হার্জ রিফ্রেশ রেটের এই ফোনটি চলবে ৪৩১০ মিলিঅ্যাম্পিয়ার আওয়ারের ব্যাটারিতে। সাথে ৫০ ওয়াটের ফ্ল্যাশ চার্জ থাকায় মাত্র ৪৮ মিনিটেই চার্জ হবে শতভাগ। আর সুপার সেভিং মোডে ৫% চার্জেও করা যাবে অনেক কাজ। আছে সুপার নাইট টাইম স্ট্যান্ডবাই ফিচার যা কালারওএস অপারেটিং সিস্টেমের মাধ্যমে ব্যবহারকারীর বেডটাইম রুটিন ও ঠিক রাখে এবং এই ফিচারে সারা রাতে চার্জ শেষ হয় মাত্র ৩%। সুপার কুলিং সিস্টেমের কারণে দীর্ঘক্ষণ ব্যবহারেও গরম হবে না এই ফোন।<br />\r\n<br />\r\nরেনো৬ ফোনটির প্রি-অর্ডার চলবে ৪-১৬ নভেম্বর পর্যন্ত যেখানে ২০০০ টাকার অগ্রিম বুকিং এ থাকছে ১২ জিবি পর্যন্ত ডাটা বান্ডেল অফার, পুরস্কার ও তিন মাস পর্যন্ত ওয়ান টাইম স্ক্রিন রিপ্লেসমেন্ট সুবিধা। এছাড়া প্রি-বুকিং এর গ্রাহকরা পাবেন ১৫% এক্সট্রা এক্সচেঞ্জ অফার যা চলবে ২০ নভেম্বর পর্যন্ত।</p>\r\n', '324128ad66002da590d23e4d8080e25b.jpg', '2', 0, '2021-11-10 23:48:35'),
(20, 'স্পাম ইমেইল কি? ক্ষতিকর স্প্যাম থেকে নিরাপদ থাকার উপায় ', '<p>ইমেইল এর দুনিয়ায় &ldquo;স্পাম&rdquo; একটি বহুল আলোচিত শব্দ। তবে স্পাম ইমেইল নিয়ে অনেকেরই পরিষ্কার ধারণা নাই। চলুন জেনে নেওয়া যাক স্পাম ইমেইল কি, স্পাম ইমেইল এর ধরন, স্পাম ইমেইল কেনো আসে, ক্ষতিকর স্প্যাম থেকে নিরাপদে থাকার উপায় সম্পর্কে বিস্তারিত।</p>\r\n\r\n<h2>স্পাম ইমেইল কি?</h2>\r\n\r\n<p>স্পাম ইমেইল হলো জাংক ইমেইল এর একটি রুপ, যা প্রাপকের দ্বারা অনাকাংখিত। মূলত এসব মেইলে বিজ্ঞাপন থাকে, যা প্রাপকের অনুমতি ছাড়া পাঠানো হয়। কেনা ইমেইল লিস্ট, ফেক কনটেস্ট, ইমেইল হারভেস্টিং প্রোগ্রাম, ইত্যাদির মাধ্যমে বেশিরভাগ স্পাম ইমেইল এর সূচনা ঘটে।</p>\r\n\r\n<h2>স্পাম ইমেইল এর ধরন</h2>\r\n\r\n<p>বিভিন্ন ধরনের স্পাম ইমেইল হতে পারে। একেক ধরনের স্পাম ইমেইলের ক্ষেত্রে একেক ধরনের কৌশন অবলম্বন করে প্রতারকরা। সচরাচর যেসব স্পাম ইমেইল দেখা যায়, সেগুলো হলোঃ</p>\r\n\r\n<ul>\r\n	<li>নকল ইনভয়েস স্ক্যামঃ ভুয়া কোনো লেনদেনের বিল প্রেরণ করে প্রাপ্রককে ফাঁদে ফেলার চেষ্টা করা হয়</li>\r\n	<li>ইমেইল একাউন্ট আপগ্রেড স্ক্যামঃ ইমেইল একাউন্ট এর গুরুত্বপূর্ণ কোনো সেটিংস পরিবর্তন করার কথা জানিয়ে ক্ষতিকর ফিশিং লিংকসহ মেইল পাঠানো হয়</li>\r\n	<li>এডভান্স-ফি স্ক্যামঃ লটারি জেতার কথা বলে লটারিতে জেতা অর্থ পাঠাতে অগ্রিম ফি চাওয়া হয়</li>\r\n	<li>গুগল ডকস স্ক্যামঃ কোনো ডকুমেন্ট এডিট করার অনুরোধস্বরুপ ভুয়া লিংক ব্যবহার করে একাউন্ট হাতিয়ে নেওয়া হয়</li>\r\n	<li>আনইউজুয়াল এক্টিভিটি স্ক্যামঃ একাউন্টে আনইউজুয়াল এক্টিভিটির কথা জানিয়ে একাউন্টের অ্যাকসেস নেওয়া হয়</li>\r\n</ul>\r\n\r\n<p>এছাড়া আরো অনেক ধরনের স্প্যাম আছে। অনেক সময় ইমেইলের স্প্যাম ফিল্টারের ভুলের কারণে ভালো ইমেইলও স্প্যাম বক্সে জমা হয়। তাই স্প্যাম ইমেইল চেনার জন্য নিজের বুদ্ধি-বিবেচনাকেও কাজে লাগাতে হবে।</p>\r\n\r\n<h2>স্পাম ইমেইল কেনো আসে</h2>\r\n\r\n<p>একাধিক উপায়ে আপনার ইমেইল এড্রেস পৌছেঁ যেতে পারে একজন প্রতারকের হাতে। ইমেইল এড্রেস পাওয়ার পর প্রতারক আপনার ইমেইল এড্রেসে মেইল পাঠায়। যেসব উপায়ে প্রতারকরা ইমেইল এড্রেস সংগ্রহ করতে পারে, সেসব নিয়ে নিচে আলোচনা করা হলো।</p>\r\n\r\n<p><strong><a href=\"https://banglatech24.com/0722335/%e0%a6%ae%e0%a7%8b%e0%a6%ac%e0%a6%be%e0%a6%87%e0%a6%b2-%e0%a6%a6%e0%a6%bf%e0%a6%af%e0%a6%bc%e0%a7%87-%e0%a6%9f%e0%a6%be%e0%a6%95%e0%a6%be-%e0%a6%86%e0%a7%9f/\" target=\"_blank\">[★★]&nbsp;&nbsp;মোবাইল দিয়ে টাকা আয় করার উপায় জানতে এখানে ক্লিক করুন&nbsp;</a></strong></p>\r\n\r\n<p>কোনো ডাটা লিক এর সময় আপনার ইমেইল এড্রেস লিক হওয়ার মাধ্যমে ইমেইল এড্রেস ফাঁস হয়ে গিয়েছে। এমনকি এডোবি,&nbsp;<a href=\"https://banglatech24.com/0919217/what-is-linkedin/\" target=\"_blank\">লিংকডইন</a>&nbsp;এর মত বড়বড় প্রতিষ্ঠান এসব সমস্যার শিকার হয়। এইক্ষেত্রে নাম, পাসওয়ার্ড, ইমেইল এড্রেসসহ একাধিক ব্যক্তিগত তথ্য ফাঁস হতে পারে। এসব ডাটা লিকে অসংখ্য একটিভ ইমেইল থাকায় স্পামারদের প্রধান টার্গেট থাকে এসব ডাটা লিকে প্রাপ্ত ইমেইল।</p>\r\n\r\n<p>কনটাক্ট লিস্ট থেকেও ইমেইল এড্রেস ফাঁস হতে পারে। কেউ যদি আপনার বন্ধুর ইমেইল এড্রেস ও পাসওয়ার্ড জেনে ফেলে, সেক্ষেত্রে কনটাক্ট লিস্ট থেকে আপনার ইমেইল এড্রেস পাওয়া কঠিন কোনো বিষয় নয়।</p>\r\n\r\n<p>জিমেইল, ইয়াহু এর মতো জনপ্রিয় ইমেইল সার্ভিসগুলোর প্রায় সকল কমন ইউজারনেমেই একটিভ ব্যবহারকারী থাকে। যার ফলে র&zwj;্যানডম ইমেইল জেনারেটর ব্যবহার করেও কেউ আপনার ইমেইল পেয়ে যেতে পারে।</p>\r\n\r\n<p>আমরা বিভিন্ন কোম্পানির ওয়েবসাইটে একাউন্ট খোলার সময় কিংবা নিউজলেটার পাওয়ার জন্য ইমেইলসহ কিছু ব্যক্তিগত তথ্য প্রদান করে থাকি। এখন এর মধ্যে যেকোনো প্রতিষ্ঠান যদি তাদের মেইলিং লিস্ট অসৎভাবে কারো কাছে বিক্রি করে দেয়, সেক্ষেত্রে অকারণে স্পাম ইমেইল এর শিকার হতে পারেন।</p>\r\n\r\n<p>🔥🔥<strong>&nbsp;গুগল নিউজে বাংলাটেক সাইট ফলো করতে&nbsp;<a href=\"https://news.google.com/publications/CAAqBwgKMJL5qQswhITCAw?ceid=BD:bn&amp;oc=3\" target=\"_blank\">এখানে ক্লিক করুন তারপর ফলো করুন</a>&nbsp;🔥</strong>🔥</p>\r\n\r\n<h2>স্প্যাম ইমেইল কি ধরনের ক্ষতি করতে পারে?</h2>\r\n\r\n<p>স্প্যাম ইমেইল সাধারণত বিরক্তিকর হয়ে থাকে। এগুলোতে অযাচিত বিজ্ঞাপন দেওয়া হয়। সেই সাথে কোনো স্প্যাম ইমেইল আপনার অনলাইন একাউন্ট হ্যাক হওয়ার কারণও হতে পারে। আপনার অনলাইন ব্যাংক একাউন্ট, ক্রেডিট কার্ড তথ্য এসব হ্যাক হয়ে যেতে পারে স্প্যাম ইমেইলের ক্ষতিকর লিংকে ক্লিক করলে।</p>\r\n\r\n<p>এছাড়া অনেক স্প্যাম ইমেইল বলতে পারে যে আপনার ফেসবুক একাউন্ট লক করে দেওয়া হয়েছে। ফেসবুক একাউন্ট রিকভারি বা উদ্ধার করার জন্য স্প্যাম ইমেইলে দেওয়া ফাঁদ অর্থাৎ ভুয়া লিংকে গেলে আপনার সচল ফেসবুক একাউন্টটি হ্যাক হয়ে যেতে পারে।</p>\r\n\r\n<p>তবে হ্যাঁ, আগেই যেমনটি বলেছি, কোনো কোনো সময় দুয়েকটি ভাল ইমেইলও স্প্যাম ইমেইল বা জাংক ইমেইল বক্সে চলে যায়। তাই সব সময় আপনি সচেতনভাবে সিদ্ধান্ত নিবেন কোনটি সঠিক এবং কোনটি ভুয়া। প্রয়োজনে&nbsp;<a href=\"https://www.facebook.com/groups/Banglatech24Talks\" target=\"_blank\">আমাদের ফেসবুক গ্রুপে</a>&nbsp;সহায়তা চেয়ে পোস্ট করতে পারেন।</p>\r\n\r\n<p>আবার স্প্যাম ইমেইলে থাকা ডাউনলোড লিংক থেকে ভাইরাস বা ম্যালওয়্যার ডাউনলোড হয়ে যেতে পারে আপনার কম্পিউটার বা ফোনে। সুতরাং অপরিচিত ইমেইলে আসা লিংক ক্লিক করার ক্ষেত্রে সাবধান হতে হবে।</p>\r\n\r\n<h2>ক্ষতিকর স্প্যাম থেকে নিরাপদে থাকার উপায়</h2>\r\n\r\n<p>আপনার যদি একটি ইমেইল একাউন্ট থাকে, তাহলে একবার হলেও স্পাম ইমেইল পেয়েছেন। বিভিন্ন প্রতিষ্ঠান থেকে আসা ঝুড়িঝুড়ি ইমেইল, সাইন-আপ না করা সার্ভিস থেকে মেসেজ বা বিভিন্ন অভাবনীয় ফ্রি প্রস্তাবের বিষয়ে আলোচনাসহ প্রায় সকল বিষয়ে স্পাম মেইল পেয়ে থাকি আমরা সবাই।</p>\r\n\r\n<p>স্পাম ইমেইল একটি বিরক্তিকর বিষয়। এমনকি এটি আপনার ক্ষতি করতেও সক্ষম, কেননা বর্তমানে বেশিরভাগ সময় স্পাম ইমেইলের মাধ্যমে বিভিন্ন এক্সপ্লয়েট ছড়িয়ে দেয় স্ক্যামাররা।</p>\r\n\r\n<p>তবে কিছু সাধারণ পদক্ষেপ নিয়ে আপনার ইমেইল ইনবক্স যাতে এসব অসহ্য ইমেইল দিয়ে ভরে না যায়, তার ব্যবস্থা করতে পারেন। এসব পদ্ধতি ব্যবহার করে চিরতরে হয়ত এসব ইমেইল বন্ধ করা সম্ভব নয়, তবে স্পাম এর পরিমাণ উল্লেখযোগ্য হারে কমানো সম্ভব।</p>\r\n\r\n<p><strong>👉&nbsp;<a href=\"https://banglatech24.com/0421490/%e0%a6%87%e0%a6%ae%e0%a7%87%e0%a6%87%e0%a6%b2-%e0%a6%86%e0%a6%87%e0%a6%a1%e0%a6%bf-%e0%a6%96%e0%a7%8b%e0%a6%b2%e0%a6%be%e0%a6%b0-%e0%a6%a8%e0%a6%bf%e0%a7%9f%e0%a6%ae/\" target=\"_blank\">ইমেইল আইডি খোলার নিয়ম</a></strong></p>\r\n\r\n<p>এই পোস্টে আমরা স্পাম ইমেইল বন্ধ করার কিছু কার্যকর উপায় সম্পর্কে জানবো। চলুন জেনে নেওয়া যাক স্পাম ইমেইল ব্লক করার কিছু উপায় সম্পর্কে বিস্তারিত।</p>\r\n\r\n<h3>ইমেইল এড্রেস গোপন রাখুন</h3>\r\n\r\n<p>আপনার ইমেইল এড্রেস কিন্তু আপনার ব্যক্তিগত তথ্যের একটি অংশ। তাই এটি যেখানে সেখানে বা যাকে তাকে প্রদান করা থেকে বিরত থাকুন। আপনার ইমেইল এড্রেস যথাসম্ভব গোপন রাখুন। বিশেষ করে কোনো পাবলিক ফোরাম বা মেসেজ বোর্ডে আপনার ইমেইল এড্রেস শেয়ার করবেননা, এতে ইমেইল এড্রেসের গোপনীয়তা নষ্ট হয়।</p>\r\n\r\n<p><img alt=\"স্পাম ইমেইল কি? ক্ষতিকর স্প্যাম থেকে নিরাপদ থাকার উপায়\" sizes=\"(max-width: 700px) 100vw, 700px\" src=\"https://i0.wp.com/banglatech24.com/wp-content/uploads/2021/11/email-icon-bt24.jpg?resize=700%2C415&amp;ssl=1\" srcset=\"https://i0.wp.com/banglatech24.com/wp-content/uploads/2021/11/email-icon-bt24.jpg?w=800&amp;ssl=1 800w, https://i0.wp.com/banglatech24.com/wp-content/uploads/2021/11/email-icon-bt24.jpg?resize=300%2C178&amp;ssl=1 300w, https://i0.wp.com/banglatech24.com/wp-content/uploads/2021/11/email-icon-bt24.jpg?resize=768%2C455&amp;ssl=1 768w\" width=\"700\" /></p>\r\n\r\n<h3>আলাদা ইমেইল ব্যবহার করা</h3>\r\n\r\n<p>কিছু কিছু ওয়েবসাইট তাদের এককালীন সেবা প্রদানের জন্য ইমেইল এড্রেস চেয়ে থাকে। যদি এসব সাইটে আপনার পরবর্তীতে আর লগিন করার দরকার না হয় তাহলে এক্ষেত্রে&nbsp;<a href=\"https://temp-mail.org/en/\" target=\"_blank\">একটি</a>&nbsp;টেম্পরারি ইমেইল সার্ভিস ব্যবহার করতে পারেন। এছাড়াও যেকোনো সন্দেহজনক ইমেইল ভিত্তিক সেবার গ্রহণযোগ্যতা বিবেচনা করতেও টেম্পরারি ইমেইল ব্যবহার করা যায়। তবে মনে রাখবেন, এসব টেম্পোরারি ইমেইল এড্রেসগুলো ওয়ানটাইম হয়ে থাকে। অর্থাৎ কয়েক ঘণ্টা পর এই ইমেইল এড্রেসে আসা মেইল আপনি আর দেখতে পারবেননা। সুতরাং গুরুত্বপূর্ণ সাইটের সেবা নিতে এগুলো ব্যবহার করলে পরে সমস্যায় পড়বেন।</p>\r\n\r\n<p><strong>👉&nbsp;<a href=\"https://banglatech24.com/0722352/%e0%a6%9c%e0%a6%bf%e0%a6%ae%e0%a7%87%e0%a6%87%e0%a6%b2-%e0%a6%8f%e0%a6%95%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a7%8d%e0%a6%9f-%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a6%be%e0%a6%aa%e0%a6%a4%e0%a7%8d%e0%a6%a4%e0%a6%be/\" target=\"_blank\">জিমেইল একাউন্টের নিরাপত্তা রক্ষার ৯টি উপায়</a></strong></p>\r\n\r\n<h3>ইমেইল ফিল্টার ব্যবহার করা</h3>\r\n\r\n<p>আপনি যেই ইমেইল সার্ভিস ব্যবহার করুন না কেনো, ইমেইল ফিল্টার ফিচারটি অবশ্যই থাকবে। আপনি যে ইমেইল ক্লায়েন্ট ব্যবহার করছেন, সেটি ব্যবহার করে আপনার ইনবক্সে আসা ইমেইল এর মাধ্যমে ইমেইল ফিল্টারকে ট্রেইন করতে পারবেন। ধরুন, কোনো একটি ইনবক্সে আসা ভুয়া/বিরক্তিকর/ক্ষতিকর ইমেইলকে স্পাম হিসেবে রিপোর্ট করলে পরবর্তী সময়ে নিজ থেকে একই প্যাটার্ন ফলো করে একই ধরনের ইমেইল স্পামে পাঠাতে পারে স্পাম ফিল্টার। এছাড়াও সাধারণ ইমেইল যদি স্পামে জমা হয়, সেক্ষেত্রেও স্পাম থেকে উক্ত ইমেইল বের করে স্পাম ফিল্টারকে ট্রেইন করতে পারবেন।</p>\r\n\r\n<h3>স্পাম ইমেইল সেন্ডারকে ব্লক করা</h3>\r\n\r\n<p>স্পামাররা বিভিন্ন উপায়ে স্পাম ইমেইল পাঠিয়ে থাকে। এই কারণে যে ইমেইল এড্রেস থেকে স্পাম ইমেইল পাঠানো হচ্ছে, সেই ইমেইল থেকে আনসাবস্ক্রাইব করার পরও স্পাম ইমেইল আসতে পারে। তবে একই ইমেইল এড্রেস থেকে বারবার স্পাম ইমেইল পেলে সেক্ষেত্রে উক্ত এড্রেস ব্লক করা ভালো একটি সিদ্ধান্ত হতে পারে।</p>\r\n\r\n<h3>স্পাম ইমেইলের রিপ্লাই দিবেন না</h3>\r\n\r\n<p>রাগের বশে কিংবা বিরক্তির জেরে স্পাম ইমেইলের রিপ্লাই দেওয়ার চিন্তা অনেকেই হয়ত করতে পারেন। তবে ভুলেও এই কাজ করতে যাবেন না। স্পাম ইমেইলের রিপ্লাই আরো নতুন সমস্যার সৃষ্টি করতে পারে। রিপ্লাই পেয়ে যখন স্পামার জানতে পারবে যে আপনার ইমেইলটি একটিভ আছে, আরো বেশি করে স্পাম ইমেইল পাঠাতে শুরু করবে।</p>\r\n\r\n<p><strong>👉&nbsp;<a href=\"https://banglatech24.com/1024262/%e0%a6%87%e0%a6%ae%e0%a7%87%e0%a6%87%e0%a6%b2-%e0%a6%aa%e0%a6%be%e0%a6%a0%e0%a6%be%e0%a6%a8%e0%a7%8b%e0%a6%b0-%e0%a6%a8%e0%a6%bf%e0%a6%af%e0%a6%bc%e0%a6%ae/\">ইমেইল পাঠানোর নিয়ম (মোবাইল ও কম্পিউটার থেকে)</a></strong></p>\r\n\r\n<h3>অপরিচিত ইমেইলের কোনো লিংকে ক্লিক করবেন না</h3>\r\n\r\n<p>কোনোমতে স্পাম ইমেইলে থাকা কোনো লিংকে ক্লিক করতে যাবেন না। বিভিন্ন ধরনের লোভনীয় অফার বা কম দামে ভালো পণ্যের লোভ দেখিয়ে পাঠানো লিংকে তো ভুলেও ক্লিক করবেন না। অনেক সময় Unsubscribe অপশনেও ক্ষতিকর লিংক এড করা থাকে। তাই ভুলেও স্পাম ইমেইলে থাকা কোনো লিংকে ক্লিক করবেন না।</p>\r\n\r\n<p>আশা করি এই টিপসগুলো আপনার কাজে লাগবে। স্প্যাম ইমেইল নিয়ে আপনার অভিজ্ঞতা কমেন্টে জানান!</p>\r\n', 'e71d5266236d2bcbd12f2fff71aeddc1.png', '3', 0, '2021-11-19 11:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`category_id`, `category_name`, `user_id`, `created_at`) VALUES
(2, 'tech001', 0, '2021-10-24 05:05:21'),
(3, 'info', 0, '2021-09-13 08:41:01'),
(4, 'news', 0, '2021-09-13 08:41:05'),
(5, 'Blog-1', 0, '2021-09-19 05:21:37'),
(7, 'tech-1', 0, '2021-10-29 00:46:13'),
(8, 'tech info', 0, '2021-11-10 04:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_email`, `user_username`, `user_img`, `user_pass`, `created_at`) VALUES
(1, 'admin', 'mahmud.bubt.150@gmail.com', 'admin', '1.jpg', '895623', '2021-11-19 12:39:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phone_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `phone_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
