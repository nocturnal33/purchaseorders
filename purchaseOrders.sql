SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_purchase_orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `tech_po`
--

CREATE TABLE `department_po` (
  `id` int(9) NOT NULL,
  `qty1` int(11) DEFAULT NULL,
  `qty2` int(11) DEFAULT NULL,
  `qty3` int(11) DEFAULT NULL,
  `qty4` int(4) DEFAULT NULL,
  `qty5` int(4) DEFAULT NULL,
  `qty6` int(4) DEFAULT NULL,
  `qty7` int(4) DEFAULT NULL,
  `qty8` int(4) DEFAULT NULL,
  `qty9` int(4) DEFAULT NULL,
  `qty10` int(4) DEFAULT NULL,
  `qty11` int(4) DEFAULT NULL,
  `qty12` int(4) DEFAULT NULL,
  `item1` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item2` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item3` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item4` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item5` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item6` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item7` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item8` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item9` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item10` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item11` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item12` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor1` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor2` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor3` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor4` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor5` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor6` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor7` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor8` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor9` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor10` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor11` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vendor12` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost1` decimal(5,2) DEFAULT NULL,
  `cost2` decimal(5,2) DEFAULT NULL,
  `cost3` decimal(5,2) DEFAULT NULL,
  `cost4` decimal(5,2) DEFAULT NULL,
  `cost5` decimal(5,2) DEFAULT NULL,
  `cost6` decimal(5,2) DEFAULT NULL,
  `cost7` decimal(5,2) DEFAULT NULL,
  `cost8` decimal(5,2) DEFAULT NULL,
  `cost9` decimal(5,2) DEFAULT NULL,
  `cost10` decimal(5,2) DEFAULT NULL,
  `cost11` decimal(5,2) DEFAULT NULL,
  `cost12` decimal(5,2) DEFAULT NULL,
  `total1` decimal(5,2) DEFAULT NULL,
  `total2` decimal(5,2) DEFAULT NULL,
  `total3` decimal(5,2) DEFAULT NULL,
  `total4` decimal(5,2) DEFAULT NULL,
  `total5` decimal(5,2) DEFAULT NULL,
  `total6` decimal(5,2) DEFAULT NULL,
  `total7` decimal(5,2) DEFAULT NULL,
  `total8` decimal(5,2) DEFAULT NULL,
  `total9` decimal(5,2) DEFAULT NULL,
  `total10` decimal(5,2) DEFAULT NULL,
  `total11` decimal(5,2) DEFAULT NULL,
  `total12` decimal(5,2) DEFAULT NULL,
  `payment` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ponotes` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateAdded` datetime DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL,
  `tax` decimal(5,2) DEFAULT NULL,
  `shipping` decimal(5,2) DEFAULT NULL,
  `totalcost` decimal(8,2) DEFAULT NULL,
  `receipt1` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receipt2` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tech_po`
--
ALTER TABLE `tech_po`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tech_po`
--
ALTER TABLE `tech_po`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
