-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 11:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-s-w`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`type`) VALUES
('Kids'),
('Men'),
('Women');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`) VALUES
(1, 'sdfsdf  dsfsdf', 'dsfsdfsd', '1'),
(2, 'Kosa  Sosa', 'fashwl@google.com', '1234'),
(3, 'mohamed  elhassan', 'mohamed@gmail.com', '1234'),
(4, 'mo7a  ao7a', 'm@m.com', '1'),
(5, 'Ahmed  Nour', 'ahmednour@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `reset_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `zip` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`reset_id`, `name`, `city`, `zip`, `address`, `date`) VALUES
(1, 'dfdfdfdf', 'dfdfd', 0, 'dfdfdfd', '0000-00-00'),
(2, 'حوحا ميحا حيحا  بطيخ', 'خزنلبيتنلبي', 324234, 'كفر المرار خلف البطيخة الخضرا', '0000-00-00'),
(3, 'سيمتنبمكسعتي بنماسيمن تبالصثقهمعخابلصسثمقهنيالتنمسيبالمتنبياتتنميلبامنتيبراسيبمنتالمنعتا  gdfg', 'gdfgdfg', 0, 'dfgdfgdf', '2022-11-17'),
(4, 'sdf  sd', 'dsf', 0, 'sdf', '2022-11-27'),
(5, 'dsf  sdf', 'sdfsd', 0, 'sdfsdf', '2022-11-27'),
(6, 'dsf  sdf', 'sdfsd', 0, 'sdfsdf', '2022-11-27'),
(7, 'dsf  sdf', 'sdfsd', 0, 'sdfsdf', '2022-11-27'),
(8, 'sdhklfhjdsklf  fsdf', 'sdfsd', 0, 'sdfsdf', '2022-11-27'),
(9, 'sdhklfhjdsklf  fsdf', 'sdfsd', 0, 'sdfsdf', '2022-11-27'),
(10, 'sdhklfhjdsklf  fsdf', 'sdfsd', 0, 'sdfsdf', '2022-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(6) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `description`, `price`, `img_url`) VALUES
(2, 'Men Nike Shoes', 'Men', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed', '1800', 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/0c24361e-438e-4f03-a1ba-f293b0e475dd/air-max-270-big-kids-shoes-HbtNX3.png'),
(3, 'Women Nike Shoes', 'Women', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled', '1150', 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/019f60a9-aa10-4327-b5f6-b940b753fbdb/dunk-high-1985-shoes-GqvNRg.png'),
(6, 'Amazing Kid Shoes By Nike', 'Kids', 'ntent of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infa', '1400', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/27043200-1653-43c6-83d1-3c5893eb0894/air-zoom-flight-95-mens-shoes-zc42bP.png'),
(7, 'Very Good Shoes', 'Men', 'r randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-character', '800', 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/36385538-6edd-4dcc-a961-4eeb3b034ae7/air-presto-mens-shoes-JlLlWz.png');

-- --------------------------------------------------------

--
-- Table structure for table `the_sales`
--

CREATE TABLE `the_sales` (
  `product_name` varchar(2000) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` varchar(6) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_sales`
--

INSERT INTO `the_sales` (`product_name`, `quantity`, `price`, `date`) VALUES
('{&quot;cartItem', 2, '701.2', '2022-11-27'),
('{&quot;cartItems&quot;:[{&quot;rating&quot;:4.5,&quot;id&quot;:2,&quot;name&quot;:&quot;Women Shoes&quot;,&quot;image&quot;:&quot;https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/05d3daca-d2b5-43de-b651-1aac41fafaf3/air-jordan-1-low-g-golf-shoes-jChrQ3.png&quot;,&quot;price&quot;:350.6,&quot;description&quot;:&quot;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed&quot;,&quot;category&quot;:&quot;Women&quot;,&quot;brand&quot;:&quot;Rebook&quot;,&quot;cartID&quot;:&quot;1672172980002&quot;,&quot;amount&quot;:2}]}', 2, '701.2', '2022-11-27'),
('Women Shoes', 2, '701.2', '2022-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`reset_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `reset_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
