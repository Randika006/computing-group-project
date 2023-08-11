-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 12:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `mail`, `tel`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Saman', 'Kumara', 'Saman1345@gmail.com', '077-3456781', 'send a feedbacks', NULL, NULL),
(4, 'Randika', 'Madumal', 'randikamadumal1996@gmail.com', '077-2345678', 'send a feedbacks', NULL, NULL),
(5, 'Saman', 'Perera', 'perera1990@gmail.com', '077-2237771', 'I want a more details', NULL, NULL),
(6, 'chamith', 'Alvis', 'chamith996@gmail.com', '077-2211300', 'nice service', NULL, NULL),
(7, 'chamith', 'Kumara', 'chamith2006@gmail.com', '077-2211499', 'nice service', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'RUN DRY MENS T-SHIRT BLUE', 'Blue T-Shirt.', '/img/BlueShirt.jpg', '100.00', '2022-04-08 02:18:17', '2022-04-08 02:18:17'),
(2, 'Keepdry 100 Adult Base Laye Black', 'Layer Top - Black', '/img/LayerBlack.jpg', '500.00', '2022-04-08 02:18:17', '2022-04-08 02:18:17'),
(3, 'RUN DRY MENS T-SHIRT', 'Grey T-shirt .', '/img/DryShirt.jpg', '400.00', '2022-04-08 02:18:17', '2022-04-08 02:18:17'),
(4, 'DRY MENS TOP BLACK ', 'RUNNING TANK TOP BLACK', '/img/DryMen.jpg', '200.00', '2022-04-08 02:18:17', '2022-04-08 02:18:17'),
(5, 'BTWIN ROCKRIDER 340 RED MTB CYCLE ', 'Red color bike', '/img/KBike.jpg', '300.00', '2022-04-08 02:18:17', '2022-04-08 02:18:17'),
(6, 'RUN DRY MENS RUNNING SHORT ', 'For Begginers\r\n', '/img/Fitness.jpg', '300.00', '2022-04-08 02:18:17', '2022-04-08 02:18:17'),
(7, 'Axis 85 Folding Knife Black', 'Our team of enthusiasts\r\n', '/img/knf1.jpg', '4990.00', '2022-04-08 02:18:18', '2022-04-08 02:18:18'),
(8, 'RUN DRY MENS RUNNING T-SHIRT\r\n', 'Red T-shirt', '/img/red1.jpg', '400.00', '2022-04-08 02:18:18', '2022-04-08 02:18:18'),
(9, 'Basket-Ball', 'R100 Adult Size 7 Durable Basketball Perfect', '/img/Bball.jpg', '800.00', '2022-04-08 02:18:18', '2022-04-08 02:18:18'),
(11, 'Basket-Ball Yellow', 'R100 Size 5 Basketball - YellowPerfect for beginners. \r\n', '/img/basketball.jpg', '500.00', NULL, NULL),
(12, 'Basket-Ball Blue', 'Mini B Kids\' Size 1 Basketball Up to age 4.Red/Blue', '/img/KBball.jpg', '500.00', NULL, NULL),
(13, 'Basketball - Red', 'Mini B Kids\' Size 1 Basketball Up to age 4.blue', '/img/Kball.jpg', '990.00', NULL, NULL),
(14, 'Base-ball', 'Baseball is a bat-and-ball sport played on a field by two teams against each other.', '/img/Baseball.jpg', '800.00', NULL, NULL),
(15, 'Baseball Helmet', 'Gender:Adult', '/img/Bhelmet.jpg', '900.00', NULL, NULL),
(16, 'Baseball bat', 'Gender:Adult', '/img/BBat.jpg', '870.00', NULL, NULL),
(17, 'Football Pump', 'Mini Punmp', '/img/FPump.jpg', '600.00', NULL, NULL),
(19, 'Dark Orange Football', 'play outdoor', '/img/OFBall.jpg', '500.00', NULL, NULL),
(20, 'Light Yellow Football', 'play outdoors', '/img/YFBall.jpg', '600.00', NULL, NULL),
(21, 'Football Shoe', 'Agility 100 FG Adult Dry Pitches Football Boots - Black', '/img/RShoe4.jpg', '500.00', NULL, NULL),
(22, 'CRICKET SHOE', 'CRICKET SHOE CS 100 BLUE SR CRICKET BOOTS-BLUE', '/img/RShoe2.jpg', '800.00', NULL, NULL),
(23, 'Cricket Bat', 'T 500 LITE KIDS TENNIS BALL CRICKET BAT BLUE', '/img/KBat.jpg', '600.00', NULL, NULL),
(24, 'Brow Cricket Leather Ball', 'play outdoors', '/img/leather3.jpg', '700.00', NULL, NULL),
(25, 'KIDS BATTING GLOVES', 'play outdoors', '/img/glovs3.jpg', '900.00', NULL, NULL),
(26, 'CRICKET BATTING PAD ADULT BLUE', 'play outdoors', '/img/CGuard.jpg', '600.00', NULL, NULL),
(27, 'CRICKET WICKET AND STUMP SET', 'Play outdoors', '/img/wicket.jpg', '890.00', NULL, NULL),
(28, 'Sandals NH50 - Black', 'Sandals NH50 - Black Our hiking designers have developed these sandals NH50 for your occasional off-road walks, in hot', '/img/sandles4.jpg', '500.00', NULL, NULL),
(29, 'NH100 High country walking socks - grey x 2 pairs', 'Worn with mid-height country walking shoes, these socks provide maximum comfort on your countryside rambles.', '/img/socks.jpg', '500.00', NULL, NULL),
(30, 'RUN CUSHION MEN\'S RUNNING SHOES - BLUE/BLACK', 'Gender, MEN\'S. TYPE OF SHOES, Cushioning. DROP, 6 mm. STRIDE TYPE, Neutral TYPE OF PRACTICE, BEGINNER.', '/img/FWalking.jpg', '600.00', NULL, NULL),
(31, 'Men\'s Tennis Shorts Dry TSH 100 - White', 'Gender, MEN\'S; WEATHER CONDITIONS, ALL-WEATHER ; Length of the shorts, The Dry 100 shorts have a short length.', '/img/HFShort.jpg', '650.00', NULL, NULL),
(32, 'Tennis Shorts Dry TSH 100 - Navy', 'Gender, MEN\'S; WEATHER CONDITIONS, ALL-WEATHER; Length of the shorts, The Dry 100 shorts have a short length.', '/img/FShort.jpg', '600.00', NULL, NULL),
(33, 'FPA100 Fitness Cardio Tracksuit\r\n', 'Gender, MEN\'S; WEATHER CONDITIONS, ALL-WEATHER; Length of the shorts, The Dry 100 shorts have a short length.', '/img/FShort1.jpg', '900.00', NULL, NULL),
(34, '100 Women\'s Fitness Cardio', 'We are cardio fitness enthusiasts, and we designed this product for low-impact cardio fitness activities.', '/img/FitnessCardio.png', '700.00', NULL, NULL),
(35, '100 Women\'s Fitness T-Shirt', 'This short-sleeved T-shirt flatters your figure with a straight cut and crew neck for all your fitness activities. Choose this lightweight.', '/img/WomenShirt.png', '800.00', NULL, NULL),
(36, 'A lightweight and breathable belt', 'Complementary products: Sauna suit, sauna jacket, sauna shorts.', '/img/SanuBelt.png', '980.00', NULL, NULL),
(37, '100 Womens Gentle Gym & Pilates Tank Top - Black', 'A comfortable, practical, pure cotton tank top that just begs to be worn during your Pilates and gentle gym workouts. Softness. 100% natural. It is intended for low-intensity exercise.', '/img/gym.png', '900.00', NULL, NULL),
(38, 'Women\'s Cotton Gym Legging Salto - Black', 'With their comfortable elastic waist, ultra-soft cotton, and stretchy fabric, these leggings are a must-have wardrobe basic. With their comfortable elastic waist, ultra-soft cotton and stretchy.', '/img/WFitness.jpg', '500.00', NULL, NULL),
(39, 'RUN DRY WOMEN\'S RUNNING SHORTS -Black', 'These leggings are a must-have wardrobe basic with their comfortable elastic waist, ultra-soft cotton, and stretchy fabric.', '/img/WFitness4.jpg', '700.00', NULL, NULL),
(40, 'Womens\' MH100 mountain hiking trousers- Dark Grey', 'With their comfortable elastic waist, ultra-soft cotton, and stretchy fabric, these leggings are a must-have wardrobe basic.', '/img/WFitness2.jpg', '900.00', NULL, NULL),
(41, 'RUN DRY WOMEN\'S RUNNING SHORTS -White', 'We developed these women\'s shorts for running in hot weather. The stretch fabric and wide waistband provide optimum comfort for running.', '/img/WFitness3.jpg', '800.00', NULL, NULL),
(42, 'Hybrid Bike Hand Pump - Black', 'We designed this pump for all your hybrid bike outings. It can also be used on city bikes, mountain bikes, BMX bikes, and kids\' bikes. We designed this pump for all.', '/img/HBike.png', '990.00', NULL, NULL),
(43, '100 Kids Cycling Helmet - Blue', 'Ride safely! This helmet offers head protection for children, aged 3 to 10, on their first ventures into cycling.', '/img/CHelmet.png', '900.00', NULL, NULL),
(44, '500 Kids Cycling Helmet - Pink', 'Ride safely! This helmet offers head protection for children, aged 3 to 10, on their first ventures into cycling. Ride safely! We have designed.', '/img/CPink.png', '800.00', NULL, NULL),
(45, '500 Kids Cycling Helmet - Red', 'Ride safely! This helmet offers head protection for children, aged 3 to 10, on their first ventures into cycling. Ride safely! We have designed.', '/img/CRed.png', '500.00', NULL, NULL),
(46, 'Audrey Girls One-Piece Sleeve Swimsuit', 'Designed for young beginner swimmers who are starting to swim and who need ease and comfort.', '/img/KTop1.jpg', '850.00', NULL, NULL),
(47, 'Audrey Girls One-Piece Sleeve Leg Swimsuit', 'Designed for young beginner swimmers who are starting to swim and who need ease and comfort.', '/img/KTop2.jpg', '900.00', NULL, NULL),
(48, 'Audrey Sleeve girls Skirt swimsuit pink', 'Designed for young beginner swimmers who are starting to swim and who need ease and comfort. Gender, WOMEN\'S. BACK SHAPE, U-shaped back - Easy to put on.\r\n\r\n', '/img/KTop33.jpg', '900.00', NULL, NULL),
(49, 'Leony Girls Skirt Swimsuit-Pink', 'Designed for young beginner swimmers who are starting to swim and who need ease and comfort.', '/img/KTop4.jpg', '500.00', NULL, NULL),
(50, 'B1 500 kids\' scooter', 'Play Kids Inline Skate Skateboard and Scooter Protectors. The easy 3-wheeled scooter for children (80cm to 1.20m tall) eager to experience their first riding thrills is fun to ride with its light-up wheels.', '/img/bike.png', '900.00', NULL, NULL),
(51, 'Mountain Bike Helmet ST 500', 'This well-ventilated, adjustable mountain biking helmet is designed for rides lasting.', '/img/helmet2.png', '800.00', NULL, NULL),
(52, 'Adults hiking sunglasses - MH120A - Category 3 yellow', 'Our optical engineers eco-designed these sunglasses for occasional mountain walking.Our optical engineers developed these sunglasses for hiking.', '/img/hikingsun.png', '500.00', NULL, NULL),
(53, 'Adults hiking sunglasses - MH120A - Category 3 black', 'Our optical engineers eco-designed these sunglasses for occasional mountain walking.Our optical engineers developed these sunglasses for hiking.', '/img/MH120A.png', '900.00', NULL, NULL),
(54, 'TOWEL PRINT L 145 x 85 cm - Exofil', 'Our designers created these towels to dry yourself and get changed after a surfing session.\r\n\r\n', '/img/to3.jpg', '500.00', NULL, NULL),
(55, 'Wildlife Binoculars 100 10x42 Black', 'Binoculars, sometimes known as field glasses, are popular outdoor optics that allow you to magnify distant objects for better viewing.', '/img/Binoculars.png', '840.00', NULL, NULL),
(56, '3 M BADMINTON EASY NET ORANGE ', 'Orange in Basketball at Walmart and save. PersonalhomeD 32cm Hanging Basketball Wall Mounted Goal Hoop Rim Net Sports Netting. This badminton net.', '/img/net.jpg', '500.00', NULL, NULL),
(57, 'SG 500 Football Goal Size L - Navy Blue/Orange', 'Create your very own football pitch with this large-size Kipsta SG500 football goal post.. Made from steel and aluminium, the football goal post is shock-resistant. \r\n', '/img/kage1.jpg', '500.00', NULL, NULL),
(58, 'Kids\'/Adult Mini Basketball Hoop SK100 Dunkers - YellowBall included', 'This basketball hoop is designed for both children and adults playing basketball outdoors. This hoop can be taken anywhere and hooked.', '/img/hoop.jpg', '700.00', NULL, NULL),
(59, 'In\'Ride 100 Home Trainer', 'Developed by our engineers, the In\'Ride 100 is perfect for interval training, recovery phases, and warm-ups. Simple and effective, the In\'Ride 100 and its magnetic resistance.', '/img/ride2.png', '987.00', NULL, NULL),
(60, 'K100 Monster Kids Basketball Basket.', 'Designed for boys and girls ages 3 to 5. The K100 is ideal for starting to play, it can easily be adjusted from 0.9 to 1.2 metres without tools.', '/img/Basketball_kid.png', '500.00', NULL, NULL),
(61, 'PB 850 Punching Bag - Red', 'Getting into boxing and learning to use a punching bag.\r\nThe ideal punching bag for beginner boxers. Its very resistant cover and straps are great for getting.', '/img/punch.jpg', '900.00', NULL, NULL),
(62, 'Smart Watch', 'The MI Smart Band 3 features a 39.9% larger (than MI Band 2) AMOLED color full-touch display with adjustable brightness, So everything is clear as can be. Sri Lanka\'s official online seller.', '/img/SS 24.png', '500.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items1`
--

CREATE TABLE `items1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items1`
--

INSERT INTO `items1` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'RUN DRY MENS RUNNING T-SHIRT - RED', 'Red T-Shirt', '/img/dryred.png', '500.00', NULL, NULL),
(5, 'BTWIN ROCKRIDER 340 RED MTB CYCLE', 'Red-Bike', '/img/KBike.jpg', '800.00', NULL, NULL),
(6, 'Men\'s Non-Stretchable Fitness Workout Track Pants - Black', 'Fitness Workout', '/img/Fitness.jpg', '900.00', NULL, NULL),
(7, 'Axis 85 Folding Knife Black', 'Black Knife', '/img/knf1.jpg', '400.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items2`
--

CREATE TABLE `items2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items2`
--

INSERT INTO `items2` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'KEEPDRY 100 ADULT BASE LAYER TOP - BLACK', 'Layer Black', '/img/SS 11.jpg', '100.00', NULL, NULL),
(2, 'RUN DRY MENS RUNNING T-SHIRT - PETROL BLUE', 'Blue Shirt', '/img/BlueShirt.jpg\r\n', '400.00', NULL, NULL),
(3, 'RUN DRY MENS RUNNING T-SHIRT - GREY', 'Grey T-shirt ', '/img/DryShirt.jpg', '300.00', NULL, NULL),
(4, 'RUN DRY MENS RUNNING TANK TOP BLACK', 'RUNNING TANK TOP BLACK', '/img/DryMen.jpg', '500.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `mail`, `password`, `username`, `tel`, `created_at`, `updated_at`) VALUES
(1, 'randikamadumal1996@gmail.com', '123', 'ran123', '041-2230450', NULL, NULL),
(2, 'werf', '345', 'wrf123', '078-2341119', NULL, NULL),
(3, 'saman2022@gmail.com', '3456', 'saman123', '077-2340001', NULL, NULL),
(4, 'ravi1990@gmail.com', '300', 'ravi123', '077-2345678', NULL, NULL),
(5, 'kasun@123', '1234', 'kas123', '071-2211451', NULL, NULL),
(6, 'chamara1990@gmail.com', 'silva900', 'Chamara90', '077-4001003', NULL, NULL),
(7, 'chamara200@gmail.com', '1234', 'chamara200', '077-2345678', NULL, NULL),
(8, 'jhone@example.com', '562', 'john90', '077-2212900', NULL, NULL),
(9, 'thusitha@info.com', '901', 'thusitha123', '077-2209001', NULL, NULL),
(10, 'madumal2020@gmail.com', '456', 'khrmadumal', '077-2345678', NULL, NULL),
(11, 'kumudu2000@gmail.com', 'kmd123', 'kumudu', '077-9001112', NULL, NULL),
(12, 'kalhara2000@gmail.com', '20001', 'kalhara', '071-9996661', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_06_073931_create_products_table', 1),
(6, '2022_04_08_073511_create_items_table', 2),
(7, '2022_04_09_090559_create_contact_table', 3),
(8, '2022_04_10_095847_create_login_table', 4),
(9, '2022_04_14_131541_create_payments_table', 5),
(10, '2022_05_13_043822_create_items1_table', 6),
(11, '2022_05_13_055234_create_items1_table', 7),
(12, '2022_05_13_064804_create_items1_table', 8),
(13, '2022_05_13_142344_create_items1_table', 9),
(14, '2022_05_14_032705_create_items1_table', 10),
(15, '2022_05_14_074547_create_items2_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'PAYID-MJMDXXI5S790162SH0020111', 'AER9JRMVYQNPY', 'productordering2022@gmail.com', 11080.00, 'USD', 'approved', NULL, NULL),
(2, 'PAYID-MJMD3TA8S3894732W699004A', 'AER9JRMVYQNPY', 'productordering2022@gmail.com', 1100.00, 'USD', 'approved', NULL, NULL),
(3, 'PAYID-MJPJA2Y3VS98037WT549404J', 'AER9JRMVYQNPY', 'productordering2022@gmail.com', 7990.00, 'USD', 'approved', NULL, NULL),
(4, 'PAYID-MJPJENA7D874615SU682980W', 'AER9JRMVYQNPY', 'productordering2022@gmail.com', 8890.00, 'USD', 'approved', NULL, NULL),
(5, 'PAYID-MJTPHEI6BY91075VR912701Y', 'AER9JRMVYQNPY', 'chamith2022@gmail.com', 8590.00, 'USD', 'approved', NULL, NULL),
(6, 'PAYID-MJ4IG6Q9BH95821EB949010X', 'AER9JRMVYQNPY', 'nadun2022@gmail.com', 3390.00, 'USD', 'approved', NULL, NULL),
(7, 'PAYID-MKAG6CQ3SD0468216344042H', 'AER9JRMVYQNPY', 'kalumperera2022@gmail.com', 100.00, 'USD', 'approved', NULL, NULL),
(8, 'PAYID-MKAHKXQ51088371910685032', 'AER9JRMVYQNPY', 'chamarasilva1994@gmail.com', 870.00, 'USD', 'approved', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Football Orange', 'Ball01', 600.00, 'product-images/fball2.jpg'),
(2, 'Laptop Bag', 'Bag01', 50.00, 'product-images/CHelmet1.jpg'),
(3, 'Football Yellow', 'Ball02', 700.00, 'product-images/football.jpg'),
(4, 'Black Cap', 'cap001', 400.00, 'product-images/cap.jpg'),
(5, 'Kids Bike', 'bike002', 500.00, 'product-images/bike.jpg'),
(6, 'Bike Helmet', 'helmet004', 800.00, 'product-images/helmet.jpg'),
(7, 'Binocular', 'Binocular01', 800.00, 'product-images/Binocular.jpg'),
(8, 'Sport Shoe', 'shoe001', 400.00, 'product-images/shoe.jpg'),
(9, 'Blue Tshirt', 'Tshirt001', 500.00, 'product-images/drymen.jpg'),
(10, 'Sport Bag', 'Bag001', 800.00, 'product-images/bag.jpg'),
(11, 'Black Helmet', 'helmet01', 530.00, 'product-images/CBlack.jpg'),
(12, 'swimming glass', 'glass01', 600.00, 'product-images/glass.jpg'),
(13, 'Bike Stand', 'stand002', 780.00, 'product-images/Bstand.jpg'),
(14, 'Boxing Gloves', 'Boxing01', 500.00, 'product-images/boxing.jpg'),
(15, 'Skate Board', 'Skate001', 760.00, 'product-images/skate.jpg'),
(16, 'Red Wicket', 'Wicket01', 890.00, 'product-images/wicket.jpg'),
(17, 'Boxing Wrap', 'wrap01', 990.00, 'product-images/wrap.jpg'),
(18, 'Pink Helmet', 'hpink01', 500.00, 'product-images/CPink.jpg'),
(19, 'Kids Helmet', 'Hred01', 450.00, 'product-images/CRed.jpg'),
(20, 'Kids\' Basketball Stand', 'KStand1', 900.00, 'product-images/KBStand.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'RUN DRY MENS RUNNING T-SHIRT ', 'Blue T-Shirt.', 'http://127.0.0.1:8000/img/SS%2010.jpg', '100.00', '2022-04-06 02:31:06', '2022-04-06 02:31:06'),
(2, 'Keepdry 100 Adult Base Layer Top - Black', 'Layer Top - Black', 'http://127.0.0.1:8000/img/SS%2011.jpg', '500.00', '2022-04-06 02:31:07', '2022-04-06 02:31:07'),
(3, 'RUN DRY MENS RUNNING T-SHIRT ', 'Grey T-shirt .', 'http://127.0.0.1:8000/img/SS%2012.jpg', '400.00', '2022-04-06 02:31:07', '2022-04-06 02:31:07'),
(4, 'Hybrid Bike Hand Pump - Black', 'Hybrid Bike Hand Pump.\r\n', 'http://127.0.0.1:8000/img/HBike.png', '200.00', NULL, NULL),
(5, '500 Kids Cycling Helmet - Pink', 'Pink Helmet', 'http://127.0.0.1:8000/img/CPink.png', '300.00', NULL, NULL),
(6, '500 Kids Cycling Helmet - Red', 'Red Helmet', 'https://cdn.shopify.com/s/files/1/0418/6000/6041/products/7c064727-c308-4639-b983-310b44eeb5db_400x.jpg?v=1596265663', '800.00', NULL, NULL),
(7, 'B100 Inline Skates Skateboard Helmet', ' Blue Helmet', 'https://cdn.shopify.com/s/files/1/0418/6000/6041/products/5a25d595-1383-41db-bdb6-779b76f46a6b_200x.jpg?v=1596263319', '400.00', NULL, NULL),
(8, 'Play 5 Skateboard Scooter Helmet', 'Black Helmet.', 'https://cdn.shopify.com/s/files/1/0418/6000/6041/products/3686ac0d-db7b-4bbe-badc-3f2951b887bb_400x.jpg?v=1596197993', '500.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items1`
--
ALTER TABLE `items1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items2`
--
ALTER TABLE `items2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `items1`
--
ALTER TABLE `items1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items2`
--
ALTER TABLE `items2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
