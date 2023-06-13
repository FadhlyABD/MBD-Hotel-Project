-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 03:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbdhotel13junrevakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  `admin_front_name` varchar(50) DEFAULT NULL,
  `admin_back_name` varchar(50) DEFAULT NULL,
  `admin_phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`, `admin_front_name`, `admin_back_name`, `admin_phone`) VALUES
(1, 'fadhlyabd', '12345', 'abdullah', 'midror', '081358483864'),
(2, 'joy123', 'jovancha', 'joy', 'leonin', '23492394'),
(3, 'cakgundul', 'jkvjheu', 'paquito', 'manny', '37836637'),
(4, 'lapulapu', '2uhvvh', 'lapu', 'lapu', '3456834'),
(5, 'arlottt', '3rg3vbr', 'arlott', 'krodt', '345672'),
(6, 'luoyii', 'sedfsggr', 'luoyi', 'yinyang', '847944'),
(7, 'kajaxx', '5ggr5rg', 'kaja', 'wings', '94775467'),
(8, 'carmilion', 'btrb4', 'carmilla', 'cecil', '45845854'),
(9, 'kaditoy', 'wretrt', 'kadita', 'kidul', '8683338'),
(10, 'freyanasifa', '44555', 'freya', 'jayawardana', '382256'),
(11, 'wildan', 'jawajawajawa', 'jawhead', 'jawahirul', '94595658'),
(12, 'west', 'east', 'barats', 'timurs', '34336726'),
(13, 'bruce', 'berbtgw', 'chou', 'lee', '28564543'),
(14, 'cecilia', 'f2f33', 'cecillion', 'carmil', '458458'),
(15, 'kalednur', 'sweww', 'khaleed', 'binwalid', '23478386'),
(16, 'lunoks', 'wer2422', 'lunox', 'luna', '57845831'),
(17, 'cleann', '5454422', 'clint', 'calvin', '1467438'),
(18, 'carry', '6675j', 'karrie', 'ayam', '7348363'),
(19, 'dracula', '7777k', 'alucard', 'dante', '2187348');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `f_id` int(11) NOT NULL,
  `JENISFASILITAS` varchar(15) DEFAULT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `HARGA2` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`f_id`, `JENISFASILITAS`, `deskripsi`, `HARGA2`, `gambar`) VALUES
(1, 'Karaoke', 'Experience the joy of karaoke, where you and your friends can unleash your inner rock stars and create unforgettable memories\r\n', 75000, 'karaoke.svg'),
(2, 'Valet', 'Indulge in the luxury of valet service, where our professional attendants ensure your arrival and departure are effortlessly seamless\r\n', 60000, 'valet.svg'),
(3, 'Breakfast', 'Elevate your mornings with our sumptuous hotel breakfast, a delightful feast of fresh, delectable options designed to tantalize your taste buds\r\n', 150000, 'sarapan.svg'),
(4, 'Dinner', 'Embark on a culinary journey with our exquisite hotel dinner experience, where artfully crafted dishes\r\n', 200000, 'maembengi.svg'),
(5, 'Gym', 'Unleash your potential in our state-of-the-art hotel gym, equipped with cutting-edge fitness facilities and guided by expert trainers\r\n', 100000, 'gym.svg'),
(6, 'Minibar', 'Delight in the convenience and indulgence of our well-stocked hotel minibar, featuring an array of carefully curated refreshments\r\n\r\n', 0, 'minibar.svg'),
(7, 'Massage&Spa', 'Embark on a blissful retreat at our luxurious hotel massage & spa, where skilled therapists pamper you with rejuvenating treatments and tranquil ambiance\r\n', 200000, 'pijat.svg'),
(10, 'Kid\'s Choice', 'Ignite your child\'s imagination and create unforgettable moments of joy at our vibrant hotel kid\'s playground, where a world of laughter, adventure, and exploration awaits', 100000, 'kids.svg');

-- --------------------------------------------------------

--
-- Table structure for table `jenistransaksi`
--

CREATE TABLE `jenistransaksi` (
  `jt_id` int(11) NOT NULL,
  `METODEPEMBAYARAN` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenistransaksi`
--

INSERT INTO `jenistransaksi` (`jt_id`, `METODEPEMBAYARAN`) VALUES
(1, 'Kartu Kredit'),
(2, 'Tunai'),
(3, 'Debit'),
(4, 'Transfer Bank'),
(5, 'QRIS');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `jk_id` int(11) NOT NULL,
  `NAMA_JENIS` varchar(50) DEFAULT NULL,
  `DESKRIPSI` varchar(250) DEFAULT NULL,
  `max_guest` int(11) NOT NULL,
  `HARGA1` int(11) DEFAULT NULL,
  `kuantitas` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`jk_id`, `NAMA_JENIS`, `DESKRIPSI`, `max_guest`, `HARGA1`, `kuantitas`, `status`, `gambar`, `link`) VALUES
(1, 'Deluxe Room', '35 sqm / 376 sqf of luxury. Panoramic city views.', 3, 1000000, 14, 1, 'deluxroomlist.svg', 'dr.php'),
(2, 'Executive Room', '49 sqm / 528 sqf of luxury. Panoramic city views.', 4, 1400000, 8, 1, 'executiveroomlist.svg', 'er.php'),
(3, 'Horizon Club Deluxe Room', '35 sqm / 376 sqf of luxury. Panoramic city views.', 3, 1300000, 15, 1, 'deluxroomlist.svg', 'hcdr.php'),
(4, 'Horizon Club Executive Room', '49 sqm / 527 sqf of luxury. Panoramic city views.', 4, 1100000, 12, 1, 'executiveroomlist.svg', 'hcer.php'),
(5, 'Executive Suite', '84 sqm / 904 sqf of luxury. Expansive views of Surabaya.', 6, 2000000, 13, 1, 'executivesuitelist.svg', 'es.php'),
(6, 'Residence Suite', '114 sqm / 376 sqf of luxury.\r\n', 7, 8500000, 10, 1, 'executivesuitelist.svg', 'rs.php'),
(7, 'Bali Suite', '187 sqm / 2,012 sqf of luxury. 180-degree views of Surabaya.', 14, 19000000, 10, 1, 'executivesuitelist.svg', 'bs.php'),
(8, 'Presidential Suite', 'Each room offers 208 sqm of luxury. Panoramic city views.', 20, 23750000, 10, 1, 'executivesuitelist.svg', 'ps.php'),
(9, 'Two Deluxe Room Connecting', 'Each room offers 70 sqm of luxury. Panoramic city views', 5, 3000000, 8, 1, 'connectroomlist.svg', 'tdrc.php');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `k_id` int(11) NOT NULL,
  `NO_KAMAR` int(11) NOT NULL,
  `jk_id` int(11) DEFAULT NULL,
  `NO_LANTAI` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`k_id`, `NO_KAMAR`, `jk_id`, `NO_LANTAI`) VALUES
(1, 101, 1, '1'),
(2, 102, 1, '1'),
(3, 103, 1, '1'),
(4, 104, 1, '1'),
(5, 105, 1, '1'),
(6, 106, 1, '1'),
(7, 107, 1, '1'),
(8, 108, 1, '1'),
(9, 201, 2, '2'),
(10, 202, 2, '2'),
(11, 203, 2, '2'),
(12, 204, 2, '2'),
(13, 205, 2, '2'),
(14, 206, 2, '2'),
(15, 207, 2, '2'),
(16, 208, 2, '2'),
(17, 301, 3, '3'),
(18, 302, 3, '3'),
(19, 303, 3, '3'),
(20, 304, 4, '3'),
(21, 305, 4, '3'),
(22, 306, 4, '3'),
(23, 401, 5, '4'),
(24, 402, 5, '4'),
(25, 403, 5, '4'),
(26, 404, 3, '4'),
(27, 109, 1, '1'),
(28, 110, 5, '1'),
(29, 111, 6, '1'),
(30, 112, 7, '1'),
(31, 113, 8, '1'),
(32, 114, 9, '1'),
(33, 115, 1, '1'),
(34, 116, 5, '1'),
(35, 117, 6, '1'),
(36, 118, 7, '1'),
(37, 119, 8, '1'),
(38, 120, 9, '1'),
(39, 121, 1, '1'),
(40, 122, 5, '1'),
(41, 123, 6, '1'),
(42, 124, 7, '1'),
(43, 125, 8, '1'),
(44, 209, 1, '2'),
(45, 210, 5, '2'),
(46, 211, 6, '2'),
(47, 212, 7, '2'),
(48, 213, 8, '2'),
(49, 214, 9, '2'),
(50, 215, 1, '2'),
(51, 216, 5, '2'),
(52, 217, 6, '2'),
(53, 218, 7, '2'),
(54, 219, 8, '2'),
(55, 220, 9, '2'),
(56, 221, 1, '2'),
(57, 222, 5, '2'),
(58, 223, 6, '2'),
(59, 224, 7, '2'),
(60, 225, 8, '2'),
(61, 307, 3, '3'),
(62, 308, 4, '3'),
(63, 309, 3, '3'),
(64, 310, 4, '3'),
(65, 311, 5, '3'),
(66, 312, 6, '3'),
(67, 313, 7, '3'),
(68, 314, 8, '3'),
(69, 315, 9, '3'),
(70, 316, 3, '3'),
(71, 317, 4, '3'),
(72, 318, 3, '3'),
(73, 319, 4, '3'),
(74, 320, 5, '3'),
(75, 321, 6, '3'),
(76, 322, 7, '3'),
(77, 323, 8, '3'),
(78, 324, 9, '3'),
(79, 325, 3, '3'),
(80, 405, 3, '4'),
(81, 406, 4, '4'),
(82, 407, 3, '4'),
(83, 408, 4, '4'),
(84, 409, 5, '4'),
(85, 410, 6, '4'),
(86, 411, 7, '4'),
(87, 412, 8, '4'),
(88, 413, 9, '4'),
(89, 414, 3, '4'),
(90, 415, 3, '4'),
(91, 416, 4, '4'),
(92, 417, 3, '4'),
(93, 418, 4, '4'),
(94, 419, 5, '4'),
(95, 420, 6, '4'),
(96, 421, 7, '4'),
(97, 422, 8, '4'),
(98, 423, 9, '4'),
(99, 424, 3, '4'),
(100, 425, 4, '4');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `r_id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `nation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`r_id`, `nama`, `deskripsi`, `nation`) VALUES
(1, 'Joder', 'Sambal geprek handle by tim joder ka dhani', 'International | $'),
(2, 'Mixue', 'Dessert gelato dan ice cream yang nikmat', 'International | $'),
(3, 'Domino\'s Pizza', 'Rasakan suasana italia di waktu santai mu', 'Italia | $$$'),
(4, 'Dinasti', 'Buffet dengan segala jenis hidangan yang mantap', 'indonesia | $'),
(5, 'Warju', 'Buffet dengan segala jenis hidangan yang mantap', 'Indonesia | $'),
(6, 'Gacoan', 'Mie pedas nomor 1 se Indonesia', 'Chinese | $');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'This is title', 'All you need to know about us', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `tm_id` int(11) NOT NULL,
  `NIK` char(16) NOT NULL,
  `T_NAMA_DEPAN` varchar(25) DEFAULT NULL,
  `T_NAMA_BELAKANG` varchar(25) DEFAULT NULL,
  `ALAMAT_DAERAH` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN` char(1) DEFAULT NULL,
  `T_NO_TELPON` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`tm_id`, `NIK`, `T_NAMA_DEPAN`, `T_NAMA_BELAKANG`, `ALAMAT_DAERAH`, `JENIS_KELAMIN`, `T_NO_TELPON`) VALUES
(1, '3578920837490109', 'raqib', 'bin malik', 'Lamongan', 'L', ''),
(2, '3578920837490745', 'israfil', 'saxophone', 'Malang', 'L', '08273481314'),
(3, '3578920837490777', 'nakir', 'naik', 'New York', 'L', '08138473221'),
(4, '3578920837490811', 'mikail', 'jordan', 'Sidoarjo', 'L', '08283749123'),
(5, '3578920837490823', 'jibril', 'wahyu', 'Surabaya', 'L', '0823429841132'),
(6, '3578920837490887', 'atid', 'lefthand', 'Gresik', 'L', '08238479113'),
(7, '3578920837490888', 'izrail', 'scythe', 'Tulungagung', 'L', '082734920123'),
(8, '3578920837490987', 'munkar', 'naik', 'New York', 'L', '0812845748823'),
(9, '5004810181985010', 'sairul', 'jaya', 'surabaya', 'L', '81312340987'),
(10, '2490199255202520', 'armin', 'arlelt', 'jerman', 'L', '82834297523'),
(11, '8322805358498070', 'mikasa', 'ackerman', 'jepang', 'L', '98234242985'),
(12, '3577091430710920', 'jean', 'kristen', 'jerman', 'L', '23940232530'),
(13, '3635443396618360', 'conny', 'springer', 'inggris', 'L', '5898008055'),
(14, '8103718572706100', 'levi', 'ackerman', 'jepang', 'L', '64950684684'),
(15, '926028465675687', 'hange', 'zoe', 'australia', 'P', '3456346'),
(16, '4697455231385230', 'sasha', 'braus', 'newyork', 'P', '449047894'),
(17, '8821815362513520', 'erwin', 'smith', 'jerman', 'L', ''),
(18, '512275486013315', 'eren', 'yega', 'jerman', 'L', '3456347534'),
(19, '2470224265465860', 'zeke', 'yega', 'jerman', 'L', '34569839'),
(20, '1793952501232270', 'reiner', 'braun', 'jerman', 'L', '867867869'),
(21, '7941251740183560', 'bertholdt', 'toleto', 'marley', 'L', '4874684'),
(22, '9584313747978930', 'annie', 'leonhart', 'marley', 'P', '65675548'),
(23, '9584313747978930', 'pieck', 'finger', 'marley', 'P', '45698459'),
(24, '7739662171511300', 'falco', 'grice', 'marley', 'L', '459567465'),
(25, '6201323594010910', 'porco', 'galliard', 'marley', 'L', '234523728'),
(26, '7439102338398430', 'gabi', 'braun', 'marley', 'P', ''),
(27, '5251728083985700', 'ymir', 'fritz', 'eldia', 'P', ''),
(28, '7761361461551870', 'jonathan', 'joestar', 'inggris', 'L', '345634578'),
(29, '7645159552073590', 'dio', 'brando', 'inggris', 'L', ''),
(30, '7330595462673330', 'george', 'joestar', 'inggris', 'L', '456457432'),
(31, '1960713246768250', 'kars', 'smith', 'mars', 'L', '28788222'),
(32, '3707714347685040', 'whamu', 'jungle', 'mars', 'L', '256535637'),
(33, '1918328068817320', 'joseph', 'joestar', 'newyork', 'L', '1451361'),
(34, '4382997434305860', 'caesar', 'zeppeli', 'newyork', 'L', '272111'),
(35, '5673634517798500', 'lisalisa', 'blackpink', 'newyork', 'P', '257117517'),
(36, '9387074922715280', 'speedwagon', 'robert', 'inggris', 'L', '3687362811'),
(37, '1956463500931960', 'jotaro', 'kujo', 'jepang', 'L', '2752724577'),
(38, '5242355034041420', 'avdol', 'ahmad', 'mesir', 'L', '58455844'),
(39, '1956463500931960', 'kakyoin', 'noryaki', 'jepang', 'L', '356836532'),
(40, '4137086602316140', 'polnareff', 'pierre', 'perancis', 'L', '134516'),
(41, '3712214536981730', 'iggy', 'dog', 'shelter', 'L', '286547368'),
(42, '6973222349339090', 'josuke', 'higashikata', 'morioh', 'L', '47497'),
(43, '8860603689242710', 'koichi', 'hirose', 'morioh', 'L', '252786'),
(44, '9681161998478200', 'okuyasu', 'asu', 'morioh', 'L', '7868686'),
(45, '2520536184549150', 'rohan', 'kishibe', 'morioh', 'L', '555555633'),
(46, '2149615520468150', 'kirayoshikage', 'kosaku', 'morioh', 'L', '7878422'),
(47, '4051359365999300', 'giorno', 'giovanna', 'italia', 'L', '3345637'),
(48, '1208898339741580', 'bucciarati', 'bruno', 'italia', 'L', '666333'),
(49, '2814974364257130', 'abbacchio', 'leone', 'italia', 'L', '7657657'),
(50, '3611867603865620', 'mista', 'pestol', 'italia', 'L', '856833657'),
(51, '8288943887105570', 'narancia', 'ciaga', 'italia', 'L', '5759998'),
(52, '8738443597763900', 'fugo', 'panacota', 'italia', 'L', '89888'),
(53, '1250837621711300', 'trish', 'una', 'italia', 'P', '9994567'),
(54, '7611650254148350', 'diavolo', 'doppio', 'italia', 'L', '989838'),
(55, '5270453493881720', 'doppio', 'diavolo', 'italia', 'L', '9498495'),
(56, '6899675413072560', 'jolin', 'cujo', 'newyork', 'P', '956489'),
(57, '7559534318551690', 'wezaripoto', 'enrico', 'newyork', 'L', '456567567'),
(58, '8132855284079300', 'enricopucci', 'enrico', 'newyork', 'L', '2525231'),
(59, '8349580908573130', 'brimstone', 'father', 'california', 'L', '12314154'),
(60, '2736398488686900', 'viper', 'mom', 'chernobyl', 'P', '213411'),
(61, '6606711175358080', 'omen', 'shadow', 'mesir', 'L', ''),
(62, '6242949832702640', 'killjoy', 'turret', 'jerman', 'P', '213141451'),
(63, '6976404154565240', 'cypher', 'corpse', 'maroko', 'L', '211123787'),
(64, '9402989557113980', 'sova', 'saivul', 'russia', 'L', '9684543'),
(65, '1581794457641980', 'sage', 'orb', 'cina', 'P', '24585468'),
(66, '4954161084765950', 'phoenix', 'john', 'newyork', 'L', '458844232'),
(67, '5261231986489090', 'jett', 'fly', 'korsel', 'P', '285368'),
(68, '3152696147193370', 'reyna', 'dismiss', 'queensland', 'P', '94959456'),
(69, '5673094694256680', 'raze', 'satchel', 'afrika', 'P', '393567281'),
(70, '8352253586752170', 'breach', 'stunflash', 'inggris', 'L', '19736583'),
(71, '7409829898903470', 'skye', 'animal', 'australia', 'P', '37937675'),
(72, '2202495000404600', 'yoru', 'urusendayo', 'jepang', 'L', '54674568'),
(73, '9293155897132290', 'astra', 'honda', 'nigeria', 'P', '45747483'),
(74, '459112055291172', 'kayo', 'frag', 'pabrik', 'P', '2575788282'),
(75, '2809484891068480', 'chamber', 'rendezvous', 'perancis', 'L', ''),
(76, '4680036274755400', 'neon', 'light', 'filipina', 'P', '24682672'),
(77, '1547159933738830', 'fade', 'catfish', 'turki', 'P', '34563'),
(78, '3512933742878700', 'harbor', 'pearl', 'india', 'L', '456457'),
(79, '8450388752201860', 'gekko', 'bunglon', 'inggris', 'L', '56245'),
(80, '4557082576063270', 'alhaitham', 'alfatiha', 'sumeru', 'L', '4564278282'),
(81, '8692958908591570', 'ayaka', 'kamisato', 'inazuma', 'P', ''),
(82, '1025761224357540', 'bennett', 'fire', 'mondstadt', 'L', '45744899'),
(83, '2972614768359770', 'eula', 'alue', 'mondstadt', 'P', '59856782'),
(84, '8900683809758100', 'fischl', 'lina', 'mondstadt', 'P', '46575647'),
(85, '1025761224357540', 'ganyu', 'cocogoat', 'liyue', 'P', '4578614'),
(86, '5711299194992110', 'hutao', 'pope', 'liyue', 'P', '76486585'),
(87, '5363068060172490', 'itto', 'arataki', 'inazuma', 'L', '87585545'),
(88, '3156102869762720', 'kazuha', 'kaedahara', 'inazuma', 'L', '7764446'),
(89, '2714126777707040', 'kokomi', 'sangonomiya', 'inazuma', 'P', '3765438'),
(90, '5390969344070270', 'nahida', 'adinda', 'sumeru', 'P', '76546575'),
(91, '4655388923831010', 'raidenshogun', 'ei', 'inazuma', 'P', '56756757'),
(92, '5560175517510250', 'venti', 'ventul', 'mondstadt', 'L', '76664272'),
(93, '9222216894177300', 'xiangling', 'fire', 'liyue', 'P', '8774747'),
(94, '3342760798335290', 'xingqiu', 'book', 'liyue', 'L', '7773456'),
(95, '6244258776120360', 'yaemiko', 'mochi', 'inazuma', 'P', '7772362'),
(96, '34475513468147', 'yelan', 'naley', 'fontaine', 'P', ''),
(97, '4769302641241380', 'zhongli', 'morax', 'liyue', 'L', '7789934'),
(98, '179478804133023', 'albedo', 'alfredo', 'mondstadt', 'L', '747347'),
(99, '9432578782325190', 'ayato', 'kamisato', 'inazuma', 'L', '36773457'),
(100, '9989933284275410', 'baizhu', 'bubu', 'liyue', 'L', '2727578'),
(101, '6285123374575470', 'beidou', 'pirate', 'inazuma', 'P', '9965875'),
(102, '6559571127162360', 'childe', 'tartaglia', 'snezhnaya', 'L', '94567849'),
(103, '5492519162322540', 'cyno', 'razor', 'sumeru', 'L', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `tr_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `jt_id` int(11) DEFAULT NULL,
  `jk_id` int(11) DEFAULT NULL,
  `TANNGAL_TRANSAKSI` date DEFAULT NULL,
  `TANNGAL_MASUK` date DEFAULT NULL,
  `TANGGAL_KELUAR` date DEFAULT NULL,
  `TOTAL_PEMBAYARAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`tr_id`, `u_id`, `jt_id`, `jk_id`, `TANNGAL_TRANSAKSI`, `TANNGAL_MASUK`, `TANGGAL_KELUAR`, `TOTAL_PEMBAYARAN`) VALUES
(1, 1, 5, 1, '2023-05-02', '2023-05-02', '2023-05-03', NULL),
(2, 2, 4, 1, '2023-05-03', '2023-05-03', '2023-05-04', NULL),
(3, 3, 2, 1, '2023-05-04', '2023-05-04', '2023-05-05', NULL),
(4, 4, 3, 1, '2023-05-05', '2023-05-05', '2023-05-07', NULL),
(5, 5, 3, 1, '2023-05-06', '2023-05-06', '2023-05-07', NULL),
(6, 6, 1, 1, '2023-05-07', '2023-05-07', '2023-05-08', NULL),
(7, 7, 4, 1, '2023-05-08', '2023-05-08', '2023-05-09', NULL),
(8, 8, 4, 1, '2023-05-09', '2023-05-09', '2023-05-10', NULL),
(9, 9, 1, 2, '2023-05-10', '2023-05-10', '2023-05-11', NULL),
(10, 10, 4, 2, '2023-05-11', '2023-05-11', '2023-05-12', NULL),
(11, 11, 3, 2, '2023-05-12', '2023-05-12', '2023-05-14', NULL),
(12, 12, 1, 2, '2023-05-13', '2023-05-13', '2023-05-14', NULL),
(13, 13, 3, 2, '2023-05-14', '2023-05-14', '2023-05-15', NULL),
(14, 14, 3, 2, '2023-05-15', '2023-05-15', '2023-05-16', NULL),
(15, 15, 4, 2, '2023-05-16', '2023-05-16', '2023-05-17', NULL),
(16, 16, 1, 2, '2023-05-17', '2023-05-17', '2023-05-18', NULL),
(17, 17, 4, 3, '2023-05-18', '2023-05-18', '2023-05-19', NULL),
(18, 18, 1, 3, '2023-05-19', '2023-05-19', '2023-05-21', NULL),
(19, 19, 1, 3, '2023-05-20', '2023-05-20', '2023-05-21', NULL),
(20, 20, 1, 4, '2023-05-21', '2023-05-21', '2023-05-22', NULL),
(21, 21, 4, 4, '2023-05-22', '2023-05-22', '2023-05-23', NULL),
(22, 22, 3, 4, '2023-05-23', '2023-05-23', '2023-05-24', NULL),
(23, 23, 2, 5, '2023-05-24', '2023-05-24', '2023-05-25', NULL),
(24, 24, 1, 5, '2023-05-25', '2023-05-25', '2023-05-26', NULL),
(25, 25, 1, 5, '2023-05-26', '2023-05-26', '2023-05-28', NULL),
(26, 26, 5, 1, '2023-05-02', '2023-05-02', '2023-05-03', NULL),
(27, 27, 4, 1, '2023-05-03', '2023-05-03', '2023-05-04', NULL),
(28, 28, 2, 1, '2023-05-04', '2023-05-04', '2023-05-05', NULL),
(29, 29, 3, 2, '2023-05-05', '2023-05-05', '2023-05-06', NULL),
(30, 30, 3, 2, '2023-05-06', '2023-05-06', '2023-05-07', NULL),
(31, 31, 1, 2, '2023-05-07', '2023-05-07', '2023-05-08', NULL),
(32, 32, 4, 2, '2023-05-08', '2023-05-08', '2023-05-09', NULL),
(33, 33, 4, 2, '2023-05-09', '2023-05-09', '2023-05-10', NULL),
(34, 34, 1, 2, '2023-05-10', '2023-05-10', '2023-05-11', NULL),
(35, 35, 4, 2, '2023-05-11', '2023-05-11', '2023-05-12', NULL),
(36, 36, 3, 2, '2023-05-12', '2023-05-12', '2023-05-13', NULL),
(37, 37, 1, 3, '2023-05-13', '2023-05-13', '2023-05-14', NULL),
(38, 38, 3, 3, '2023-05-14', '2023-05-14', '2023-05-15', NULL),
(39, 39, 3, 3, '2023-05-15', '2023-05-15', '2023-05-16', NULL),
(40, 40, 4, 4, '2023-05-16', '2023-05-16', '2023-05-17', NULL),
(41, 41, 1, 4, '2023-05-17', '2023-05-17', '2023-05-18', NULL),
(42, 42, 4, 4, '2023-05-18', '2023-05-18', '2023-05-19', NULL),
(43, 43, 1, 5, '2023-05-19', '2023-05-19', '2023-05-20', NULL),
(44, 44, 1, 5, '2023-05-20', '2023-05-20', '2023-05-21', NULL),
(45, 45, 1, 5, '2023-05-21', '2023-05-21', '2023-05-22', NULL),
(46, 46, 4, 1, '2023-05-22', '2023-05-22', '2023-05-23', NULL),
(47, 47, 3, 1, '2023-05-23', '2023-05-23', '2023-05-24', NULL),
(48, 48, 2, 1, '2023-05-24', '2023-05-24', '2023-05-25', NULL),
(49, 49, 1, 1, '2023-05-25', '2023-05-25', '2023-05-26', NULL),
(50, 50, 1, 1, '2023-05-26', '2023-05-26', '2023-05-27', NULL),
(51, 51, 5, 2, '2023-05-02', '2023-05-02', '2023-05-03', NULL),
(52, 52, 4, 2, '2023-05-03', '2023-05-03', '2023-05-04', NULL),
(53, 53, 2, 2, '2023-05-04', '2023-05-04', '2023-05-05', NULL),
(54, 54, 3, 2, '2023-05-05', '2023-05-05', '2023-05-07', NULL),
(55, 55, 3, 2, '2023-05-06', '2023-05-06', '2023-05-07', NULL),
(56, 56, 1, 2, '2023-05-07', '2023-05-07', '2023-05-08', NULL),
(57, 57, 4, 3, '2023-05-08', '2023-05-08', '2023-05-09', NULL),
(58, 58, 4, 3, '2023-05-09', '2023-05-09', '2023-05-10', NULL),
(59, 59, 1, 3, '2023-05-10', '2023-05-10', '2023-05-11', NULL),
(60, 60, 4, 4, '2023-05-11', '2023-05-11', '2023-05-12', NULL),
(61, 61, 3, 4, '2023-05-12', '2023-05-12', '2023-05-14', NULL),
(62, 62, 1, 4, '2023-05-13', '2023-05-13', '2023-05-14', NULL),
(63, 63, 3, 5, '2023-05-14', '2023-05-14', '2023-05-15', NULL),
(64, 64, 3, 5, '2023-05-15', '2023-05-15', '2023-05-16', NULL),
(65, 65, 4, 5, '2023-05-16', '2023-05-16', '2023-05-17', NULL),
(66, 66, 1, 1, '2023-05-17', '2023-05-17', '2023-05-18', NULL),
(67, 67, 4, 1, '2023-05-18', '2023-05-18', '2023-05-19', NULL),
(68, 68, 1, 1, '2023-05-19', '2023-05-19', '2023-05-21', NULL),
(69, 69, 1, 1, '2023-05-20', '2023-05-20', '2023-05-21', NULL),
(70, 70, 1, 1, '2023-05-21', '2023-05-21', '2023-05-22', NULL),
(71, 71, 4, 1, '2023-05-22', '2023-05-22', '2023-05-23', NULL),
(72, 72, 3, 1, '2023-05-23', '2023-05-23', '2023-05-24', NULL),
(73, 73, 2, 1, '2023-05-24', '2023-05-24', '2023-05-25', NULL),
(74, 74, 1, 2, '2023-05-25', '2023-05-25', '2023-05-26', NULL),
(75, 75, 1, 2, '2023-05-26', '2023-05-26', '2023-05-28', NULL),
(76, 76, 5, 2, '2023-05-02', '2023-05-02', '2023-05-03', NULL),
(77, 77, 4, 3, '2023-05-03', '2023-05-03', '2023-05-04', NULL),
(78, 78, 2, 3, '2023-05-04', '2023-05-04', '2023-05-05', NULL),
(79, 79, 3, 3, '2023-05-05', '2023-05-05', '2023-05-06', NULL),
(80, 80, 3, 4, '2023-05-06', '2023-05-06', '2023-05-07', NULL),
(81, 81, 1, 4, '2023-05-07', '2023-05-07', '2023-05-08', NULL),
(82, 82, 4, 4, '2023-05-08', '2023-05-08', '2023-05-09', NULL),
(83, 83, 4, 5, '2023-05-09', '2023-05-09', '2023-05-10', NULL),
(84, 84, 1, 5, '2023-05-10', '2023-05-10', '2023-05-11', NULL),
(85, 85, 4, 5, '2023-05-11', '2023-05-11', '2023-05-12', NULL),
(86, 86, 3, 1, '2023-05-12', '2023-05-12', '2023-05-13', NULL),
(87, 87, 1, 1, '2023-05-13', '2023-05-13', '2023-05-14', NULL),
(88, 88, 3, 1, '2023-05-14', '2023-05-14', '2023-05-15', NULL),
(89, 89, 3, 1, '2023-05-15', '2023-05-15', '2023-05-16', NULL),
(90, 90, 4, 1, '2023-05-16', '2023-05-16', '2023-05-17', NULL),
(91, 91, 1, 1, '2023-05-17', '2023-05-17', '2023-05-18', NULL),
(92, 92, 4, 1, '2023-05-18', '2023-05-18', '2023-05-19', NULL),
(93, 93, 1, 1, '2023-05-19', '2023-05-19', '2023-05-20', NULL),
(94, 94, 1, 2, '2023-05-20', '2023-05-20', '2023-05-21', NULL),
(95, 95, 1, 2, '2023-05-21', '2023-05-21', '2023-05-22', NULL),
(96, 96, 4, 2, '2023-05-22', '2023-05-22', '2023-05-23', NULL),
(97, 97, 3, 2, '2023-05-23', '2023-05-23', '2023-05-24', NULL),
(98, 98, 2, 2, '2023-05-24', '2023-05-24', '2023-05-25', NULL),
(99, 99, 1, 2, '2023-05-25', '2023-05-25', '2023-05-26', NULL),
(100, 100, 1, 2, '2023-05-26', '2023-05-26', '2023-05-27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_fasilitas`
--

CREATE TABLE `transaksi_fasilitas` (
  `id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_fasilitas`
--

INSERT INTO `transaksi_fasilitas` (`id`, `tr_id`, `f_id`) VALUES
(1, 1, 7),
(2, 1, 1),
(3, 1, 2),
(4, 1, 4),
(5, 2, 5),
(6, 2, 3),
(7, 2, 4),
(8, 2, 1),
(9, 3, 7),
(10, 3, 1),
(11, 3, 2),
(12, 3, 4),
(13, 3, 5),
(14, 3, 3),
(15, 3, 10),
(16, 4, 1),
(17, 4, 7),
(18, 4, 3),
(19, 4, 2),
(20, 4, 4),
(21, 5, 5),
(22, 5, 3),
(23, 5, 4),
(24, 5, 1),
(25, 6, 7),
(26, 6, 1),
(27, 6, 2),
(28, 6, 4),
(29, 7, 5),
(30, 7, 3),
(31, 7, 4),
(32, 7, 1),
(33, 8, 7),
(34, 8, 1),
(35, 8, 2),
(36, 8, 4),
(37, 9, 5),
(38, 9, 3),
(39, 9, 4),
(40, 9, 1),
(41, 10, 7),
(42, 10, 1),
(43, 10, 2),
(44, 10, 4),
(45, 10, 5),
(46, 11, 7),
(47, 11, 1),
(48, 11, 2),
(49, 11, 4),
(50, 11, 5),
(51, 12, 3),
(52, 12, 4),
(53, 12, 1),
(54, 13, 7),
(55, 13, 1),
(56, 13, 2),
(57, 13, 4),
(58, 13, 6),
(59, 13, 3),
(60, 13, 10),
(61, 14, 1),
(62, 14, 7),
(63, 14, 3),
(64, 14, 2),
(65, 14, 4),
(66, 15, 5),
(67, 15, 3),
(68, 15, 4),
(69, 15, 1),
(70, 16, 7),
(71, 16, 1),
(72, 16, 2),
(73, 16, 4),
(74, 17, 5),
(75, 17, 3),
(76, 17, 4),
(77, 18, 6),
(78, 18, 7),
(79, 18, 1),
(80, 18, 2),
(81, 18, 4),
(82, 19, 5),
(83, 19, 6),
(84, 19, 4),
(85, 19, 1),
(86, 20, 7),
(87, 20, 1),
(88, 20, 2),
(89, 20, 4),
(90, 20, 5),
(91, 21, 7),
(92, 21, 1),
(93, 21, 2),
(94, 21, 4),
(95, 21, 5),
(96, 22, 3),
(97, 22, 4),
(98, 22, 1),
(99, 23, 7),
(100, 23, 1),
(101, 23, 2),
(102, 23, 4),
(103, 23, 6),
(104, 23, 3),
(105, 23, 10),
(106, 24, 1),
(107, 24, 7),
(108, 24, 3),
(109, 24, 2),
(110, 24, 4),
(111, 24, 6),
(112, 25, 3),
(113, 25, 4),
(114, 25, 1),
(115, 26, 7),
(116, 26, 1),
(117, 26, 2),
(118, 26, 4),
(119, 27, 5),
(120, 27, 3),
(121, 27, 4),
(122, 28, 6),
(123, 28, 7),
(124, 28, 10),
(125, 28, 2),
(126, 28, 4),
(127, 29, 5),
(128, 29, 6),
(129, 29, 4),
(130, 29, 1),
(131, 30, 7),
(132, 30, 1),
(133, 30, 2),
(134, 30, 4),
(135, 30, 5),
(136, 41, 7),
(137, 41, 1),
(138, 41, 2),
(139, 41, 4),
(140, 41, 5),
(141, 42, 3),
(142, 42, 4),
(143, 42, 1),
(144, 43, 7),
(145, 43, 1),
(146, 43, 2),
(147, 43, 4),
(148, 43, 6),
(149, 43, 3),
(150, 43, 10),
(151, 44, 1),
(152, 44, 7),
(153, 44, 3),
(154, 44, 2),
(155, 44, 4),
(156, 45, 5),
(157, 45, 3),
(158, 45, 4),
(159, 45, 1),
(160, 46, 7),
(161, 46, 1),
(162, 46, 2),
(163, 46, 4),
(164, 47, 5),
(165, 47, 3),
(166, 47, 4),
(167, 48, 6),
(168, 48, 7),
(169, 48, 1),
(170, 48, 2),
(171, 48, 4),
(172, 49, 5),
(173, 49, 6),
(174, 49, 4),
(175, 49, 1),
(176, 50, 7),
(177, 50, 1),
(178, 50, 2),
(179, 50, 4),
(180, 50, 5),
(181, 51, 7),
(182, 51, 1),
(183, 51, 2),
(184, 51, 4),
(185, 51, 5),
(186, 52, 3),
(187, 52, 4),
(188, 52, 1),
(189, 53, 7),
(190, 53, 1),
(191, 53, 2),
(192, 53, 4),
(193, 53, 6),
(194, 53, 3),
(195, 53, 10),
(196, 54, 1),
(197, 54, 7),
(198, 54, 3),
(199, 54, 2),
(200, 54, 4),
(201, 54, 6),
(202, 55, 3),
(203, 55, 4),
(204, 55, 1),
(205, 56, 7),
(206, 56, 1),
(207, 56, 2),
(208, 56, 4),
(209, 57, 5),
(210, 57, 3),
(211, 57, 4),
(212, 58, 6),
(213, 58, 7),
(214, 58, 10),
(215, 58, 2),
(216, 58, 4),
(217, 59, 5),
(218, 59, 6),
(219, 59, 4),
(220, 59, 1),
(221, 60, 7),
(222, 60, 6),
(223, 60, 2),
(224, 60, 4),
(225, 60, 5),
(226, 61, 7),
(227, 61, 1),
(228, 61, 2),
(229, 61, 4),
(230, 61, 5),
(231, 62, 3),
(232, 62, 4),
(233, 62, 1),
(234, 63, 7),
(235, 63, 1),
(236, 63, 2),
(237, 63, 4),
(238, 63, 6),
(239, 63, 3),
(240, 63, 10),
(241, 64, 1),
(242, 64, 7),
(243, 64, 3),
(244, 64, 2),
(245, 64, 4),
(246, 65, 5),
(247, 65, 3),
(248, 65, 4),
(249, 65, 1),
(250, 66, 7),
(251, 66, 1),
(252, 66, 2),
(253, 66, 4),
(254, 67, 5),
(255, 67, 3),
(256, 67, 4),
(257, 68, 6),
(258, 68, 7),
(259, 68, 1),
(260, 68, 2),
(261, 68, 4),
(262, 69, 5),
(263, 69, 6),
(264, 69, 4),
(265, 69, 1),
(266, 70, 7),
(267, 70, 1),
(268, 70, 2),
(269, 70, 4),
(270, 70, 5),
(271, 71, 7),
(272, 71, 1),
(273, 71, 2),
(274, 71, 4),
(275, 71, 5),
(276, 72, 3),
(277, 72, 4),
(278, 72, 1),
(279, 73, 7),
(280, 73, 1),
(281, 73, 2),
(282, 73, 4),
(283, 73, 6),
(284, 73, 3),
(285, 73, 10),
(286, 74, 1),
(287, 74, 7),
(288, 74, 3),
(289, 74, 2),
(290, 74, 4),
(291, 74, 6),
(292, 75, 3),
(293, 75, 4),
(294, 75, 1),
(295, 76, 7),
(296, 76, 1),
(297, 76, 2),
(298, 76, 4),
(299, 77, 5),
(300, 77, 3),
(301, 77, 4),
(302, 78, 6),
(303, 78, 7),
(304, 78, 10),
(305, 78, 2),
(306, 78, 4),
(307, 79, 5),
(308, 79, 6),
(309, 79, 4),
(310, 79, 1),
(311, 80, 7),
(312, 80, 1),
(313, 80, 2),
(314, 80, 4),
(315, 80, 5),
(316, 81, 7),
(317, 81, 1),
(318, 81, 2),
(319, 81, 4),
(320, 81, 5),
(321, 82, 3),
(322, 82, 4),
(323, 82, 1),
(324, 83, 7),
(325, 83, 1),
(326, 83, 2),
(327, 83, 4),
(328, 83, 6),
(329, 83, 3),
(330, 83, 10),
(331, 84, 1),
(332, 84, 7),
(333, 84, 3),
(334, 84, 2),
(335, 84, 4),
(336, 85, 5),
(337, 85, 3),
(338, 85, 4),
(339, 85, 1),
(340, 86, 7),
(341, 86, 1),
(342, 86, 2),
(343, 86, 4),
(344, 87, 5),
(345, 87, 3),
(346, 87, 4),
(347, 88, 6),
(348, 88, 7),
(349, 88, 1),
(350, 88, 2),
(351, 88, 4),
(352, 89, 5),
(353, 89, 6),
(354, 89, 4),
(355, 89, 1),
(356, 90, 7),
(357, 90, 1),
(358, 90, 2),
(359, 90, 4),
(360, 90, 5),
(361, 91, 7),
(362, 91, 1),
(363, 91, 2),
(364, 51, 4),
(365, 91, 5),
(366, 92, 3),
(367, 92, 4),
(368, 92, 1),
(369, 93, 7),
(370, 93, 1),
(371, 93, 2),
(372, 93, 4),
(373, 93, 6),
(374, 93, 3),
(375, 93, 10),
(376, 94, 1),
(377, 94, 7),
(378, 94, 3),
(379, 94, 2),
(380, 94, 4),
(381, 94, 6),
(382, 95, 3),
(383, 95, 4),
(384, 95, 1),
(385, 96, 7),
(386, 96, 1),
(387, 96, 2),
(388, 96, 4),
(389, 97, 5),
(390, 97, 3),
(391, 97, 4),
(392, 98, 6),
(393, 98, 7),
(394, 98, 10),
(395, 98, 2),
(396, 98, 4),
(397, 99, 5),
(398, 99, 6),
(399, 99, 4),
(400, 99, 1),
(401, 100, 7),
(402, 100, 6),
(403, 100, 2),
(404, 100, 4),
(405, 100, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `USERNAME` varchar(25) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `USERNAME`, `EMAIL`, `PASSWORD`, `status`) VALUES
(1, 'jibril', 'jibrilly@gmail.com', 'KnbGcn5L', 0),
(2, 'mikail', 'mikailfernando@gmail.com', '26OVZKVI', 0),
(3, 'raqib', 'raqibganteng@gmail.com', 'Drx4RCOf', 0),
(4, 'atid', 'atidkiri@gmail.com', 'fehfQHVt', 0),
(5, 'israfil', 'israfilsangkakala@gmail.com', 'CkmJc83e', 0),
(6, 'izrail', 'izrailmaut@gmail.com', 'GlrRsVXk', 0),
(7, 'munkar', 'munkarkubur@gmail.com', 'RrYgMREc', 0),
(8, 'nakir', 'nakirkubur@gmail.com', 'sP9kHDXC', 0),
(9, 'sairul', 'sairulcyrul@gmail.com', 'T8jB8KCD', 0),
(10, 'armin', 'arminarlelt@gmail.com', 'VhZiwHjq', 0),
(11, 'mikasa', 'mikasaackerman@gmail.com', 'cfF9FSSM', 0),
(12, 'jean', 'jeankristen@gmail.com', '4ZlZRxW5', 0),
(13, 'conny', 'connyspringer@gmail.com', 'Gr1u2Sl1', 0),
(14, 'levi', 'leviackerman@gmail.com', 'kx071L14', 0),
(15, 'hange', 'hangezoe@gmail.com', 'Z4B3KyN8', 0),
(16, 'sasha', 'sashabraus@gmail.com', 'kv9K2U3R', 0),
(17, 'erwin', 'erwinsmith@gmail.com', 'tV8CeXpW', 0),
(18, 'eren', 'erenyega@gmail.com', 'aqTkQfOJ', 0),
(19, 'zeke', 'zekeyega@gmail.com', '2S4pVR4P', 0),
(20, 'reiner', 'reinerbraun@gmail.com', '4egaSyre', 0),
(21, 'bertholdt', 'bertoleto@gmail.com', 'mOcJGA8b', 0),
(22, 'annie', 'annieleonhart@gmail.com', 'ygFl0pIN', 0),
(23, 'pieck', 'pieckfinger@gmail.com', 'ChFDEIja', 0),
(24, 'falco', 'falcogrice@gmail.com', 'K7sq0ud2', 0),
(25, 'porco', 'porcogalliard@gmail.com', 'nSQL9cSr', 0),
(26, 'gabi', 'gabibraun@gmail.com', 'PjNqKiS8', 0),
(27, 'ymir', 'ymirfritz@gmail.com', '4BTDgYol', 0),
(28, 'jonathan', 'jonathanjoestar@gmail.com', 'jgHKj2CR', 0),
(29, 'dio', 'diobrando@gmail.com', 'd32kCVZr', 0),
(30, 'george', 'georgejoestar@gmail.com', 'z0QdgyYg', 0),
(31, 'kars', 'karssmith@gmail.com', 'XjufxeXv', 0),
(32, 'whamu', 'wammmmu@gmail.com', 'ny4huykx', 0),
(33, 'joseph', 'josephjoestar@gmail.com', 'LLrVhSIG', 0),
(34, 'caesar', 'caesarsizaa@gmail.com', '0YhfPEY7', 0),
(35, 'lisalisa', 'lisalisablackpink@gmail.com', 'i6wJlOzP', 0),
(36, 'speedwagon', 'robertospeedwagon@gmail.com', 'oM784eI1', 0),
(37, 'jotaro', 'kujojotaro@gmail.com', 'xFNtlVUR', 0),
(38, 'avdol', 'ahmedabdul@gmail.com', 'fsn7RhQe', 0),
(39, 'kakyoin', 'kakyoinnoryaki@gmail.com', 'D39YLKiT', 0),
(40, 'polnareff', 'jeanpierepol@gmail.com', 'sZHIKqgi', 0),
(41, 'iggy', 'iggydog@gmail.com', 'vlRzHsbf', 0),
(42, 'josuke', 'josukehigashikata@gmail.com', '1BfddUF8', 0),
(43, 'koichi', 'koichihirose@gmail.com', 'zjaaHvB0', 0),
(44, 'okuyasu', 'okuyasuasu@gmail.com', 'DhbRqlHa', 0),
(45, 'rohan', 'kishiberohan@gmail.com', 'Bk6XoG9y', 0),
(46, 'kirayoshikage', 'kirayoshikage33@gmail.com', 'Ii0OvjLy', 0),
(47, 'giorno', 'giornogiovanna@gmail.com', 'PXX2VHbD', 0),
(48, 'bucciarati', 'brunobucciarati@gmail.com', 'yX27miB8', 0),
(49, 'abbacchio', 'leoneabbacchio@gmail.com', 'dpGImfvJ', 0),
(50, 'mista', 'mistapistole@gmail.com', 'S8Tqpdfd', 0),
(51, 'narancia', 'narancianigga@gmail.com', 'epQozQbS', 0),
(52, 'fugo', 'panakotafugo@gmail.com', 'FMg6TVOf', 0),
(53, 'trish', 'trishuna@gmail.com', 'FJZO3FxG', 0),
(54, 'diavolo', 'diaboro@gmail.com', 'npPMGppT', 0),
(55, 'doppio', 'doppiofrog@gmail.com', 'mQyJtugI', 0),
(56, 'jolin', 'kujojolin@gmail.com', 'Dt9a8mL4', 0),
(57, 'wezaripoto', 'weatherreport@gmail.com', 'Ye11ncxJ', 0),
(58, 'enricopucci', 'pucciMIH@gmail.com', 'cwb583nd', 0),
(59, 'brimstone', 'bapakbrimstone@gmail.com', 'QmJr7RKQ', 0),
(60, 'viper', 'viperwangi@gmail.com', 'slCWiGFI', 0),
(61, 'omen', 'omendepresi@gmail.com', '4naN6Y5Z', 0),
(62, 'killjoy', 'killjoylgbt@gmail.com', 'b5l0HD6z', 0),
(63, 'c ypher', 'cyperpk@gmail.com', 'fOpMO14h', 0),
(64, 'sova', 'sovahunter@gmail.com', 'ro1eXEVv', 0),
(65, 'sage', 'sageressurect@gmail.com', 'r9VPHJGp', 0),
(66, 'phoenix', 'phoenixniga@gmail.com', 'SaLum0FU', 0),
(67, 'jett', 'jettsuki@gmail.com', 'SErHm8Iy', 0),
(68, 'reyna', 'reynasetan@gmail.com', 'yUIultOE', 0),
(69, 'raze', 'razelgbt@gmail.com', 'F6JDcj3h', 0),
(70, 'breach', 'pamanbreach@gmail.com', 'kcBqKDyy', 0),
(71, 'skye', 'skyebird@gmail.com', 'FN5Ouhas', 0),
(72, 'yoru', 'yoruclone@gmail.com', '57JwvcRW', 0),
(73, 'astra', 'astraniga@gmail.com', '821wlSrz', 0),
(74, 'kayo', 'kayomesin@gmail.com', 'uj6BJlp2', 0),
(75, 'chamber', 'chamberwavu@gmail.com', 'nfKkBAgh', 0),
(76, 'neon', 'jagoanneon@gmail.com', 'nXGePwmv', 0),
(77, 'fade', 'fadedalanwalker@gmail.com', 'GYDvxmOV', 0),
(78, 'harbor', 'pearlharbor@gmail.com', 'tNOkbCWU', 0),
(79, 'gekko', 'gekkoyonglek@gmail.com', 'X9QDt22M', 0),
(80, 'alhaitham', 'alfatihaitham@gmail.com', 'NabnKmCx', 0),
(81, 'ayaka', 'kamisatoayaka@gmail.com', 'x7371o3z', 0),
(82, 'bennett', 'bennettdeta@gmail.com', 'gqHFk3DL', 0),
(83, 'eula', 'eularerun@gmail.com', 'X7oVthso', 0),
(84, 'fischl', 'oxfischl@gmail.com', '0rFVM4xw', 0),
(85, 'ganyu', 'ganyuwangiwangi@gmail.com', '40ZWlcCX', 0),
(86, 'hutao', 'hutaotamarek@gmail.com', 'v0LUdk1W', 0),
(87, 'itto', 'aratakiitto@gmail.com', 'tNUBGlKu', 0),
(88, 'kazuha', 'kaedaharakazuha@gmail.com', 'JlKV9PGj', 0),
(89, 'kokomi', 'sangonomiya@gmail.com', 'cb8NcBe0', 0),
(90, 'nahida', 'nahidabocil@gmail.com', 'aYhJb7tF', 0),
(91, 'raidenshogun', 'ei@gmail.com', 'wW2Ocf5L', 0),
(92, 'venti', 'ventil@gmail.com', 'D10m6urQ', 0),
(93, 'xiangling', 'xiangsung@gmail.com', 'bIfA69mb', 0),
(94, 'xingqiu', 'singco@gmail.com', 'lK6G35wb', 0),
(95, 'yaemiko', 'ladyfox@gmail.com', 'cIK5yele', 0),
(96, 'yelan', 'yelankelek@gmail.com', 'aXIROlbF', 0),
(97, 'zhongli', 'mbahjongli@gmail.com', '4PCenjtZ', 0),
(98, 'albedo', 'albodo@gmail.com', '45SLJ2iS', 0),
(99, 'ayato', 'kamisatoayato@gmail.com', 'HBYTBqLF', 0),
(100, 'baizhu', 'baizhudukun@gmail.com', 'ZAwIFnbL', 0),
(101, 'beidou', 'beidopodo@gmail.com', 'dthDJL9y', 0),
(102, 'childe', 'tartaglia@gmail.com', 'Wf6PpEFE', 0),
(103, 'cyno', 'cynorazor@gmail.com', 'VS262dSl', 0),
(104, 'aetherlumine', 'mainchar@gmail.com', 'oXV5TRNy', 0),
(105, 'diluc', 'suwe@gmail.com', 'JZ7HOD4G', 0),
(106, 'diona', 'dionacat@gmail.com', 'eV12gbNL', 0),
(107, 'jean', 'jeanco@gmail.com', '14j8tXJb', 0),
(108, 'keqing', 'kencing@gmail.com', 'zlK78q7L', 0),
(109, 'mona', 'monalisa@gmail.com', 'mF0lAg6o', 0),
(110, 'nilou', 'eskepalnilou@gmail.com', 'DZjMYslq', 0),
(111, 'xiao', 'xiaomiindonesia@gmail.com', 'L2Q4RxgB', 0),
(112, 'yoimiya', 'yoimiyamercon@gmail.com', 'nGmP0p26', 0),
(113, 'shenhe', 'shenheeenyatiga@gmail.com', 'ItblwXjE', 0),
(114, 'ridwan', 'ridwanheaven@gmail.com', 'rq1AjT6Y', 0),
(115, 'malik', 'malikhell@gmail.com', 'lYlB5uCv', 0),
(116, 'Wahyu', 'wahyuus@gmail.com', '123456789', 0),
(117, 'adsfasdfsdfasvcx', 'asdfasdcswdf@gmail.com', 'qwegvdzas', 0);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `user_status_logout` AFTER UPDATE ON `user` FOR EACH ROW BEGIN
    IF NEW.status = 0 THEN
        INSERT INTO log (u_id, date, status) VALUES (NEW.u_id, CURRENT_DATE(), 'Log Out');
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `user_status_trigger` AFTER UPDATE ON `user` FOR EACH ROW BEGIN
    IF NEW.status = 1 THEN
        INSERT INTO log (u_id, date, status) VALUES (NEW.u_id, CURRENT_DATE(), 'Log In');
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `jenistransaksi`
--
ALTER TABLE `jenistransaksi`
  ADD PRIMARY KEY (`jt_id`);

--
-- Indexes for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`jk_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`k_id`),
  ADD KEY `jk id` (`jk_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `us id` (`u_id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`tm_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`tr_id`),
  ADD KEY `jt id` (`jt_id`),
  ADD KEY `jenisk id` (`jk_id`),
  ADD KEY `u id` (`u_id`);

--
-- Indexes for table `transaksi_fasilitas`
--
ALTER TABLE `transaksi_fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tr id` (`tr_id`),
  ADD KEY `f id` (`f_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenistransaksi`
--
ALTER TABLE `jenistransaksi`
  MODIFY `jt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `jk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `tm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `transaksi_fasilitas`
--
ALTER TABLE `transaksi_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1374;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `jk id` FOREIGN KEY (`jk_id`) REFERENCES `jenis_kamar` (`jk_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `us id` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `jenisk id` FOREIGN KEY (`jk_id`) REFERENCES `jenis_kamar` (`jk_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `jt id` FOREIGN KEY (`jt_id`) REFERENCES `jenistransaksi` (`jt_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `u id` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi_fasilitas`
--
ALTER TABLE `transaksi_fasilitas`
  ADD CONSTRAINT `f id` FOREIGN KEY (`f_id`) REFERENCES `fasilitas` (`f_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `tr id` FOREIGN KEY (`tr_id`) REFERENCES `transaksi` (`tr_id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
