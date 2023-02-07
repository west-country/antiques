-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Feb 07, 2023 at 11:19 AM
-- Server version: 10.10.2-MariaDB-1:10.10.2+maria~ubu2204
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `antiques`
--

CREATE TABLE `antiques` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `antiques`
--

INSERT INTO `antiques` (`id`, `name`, `origin`, `description`, `year`) VALUES
(1, 'Niello silver spoon', 'Russia', 'this silver gilded spoon in the shape of an arrow was made in Russia in 1844, silversmith N. Mothokov (1835-1864 - hallmark HM in cyrillic). It has a niello decoration representing a harbor with a ship and a lighthouse. The spoon is 5 1/2 in. long (cm. 14) and was bought from an Italian dealer at an Antique fair.', 1844),
(2, 'Silver serving spoon', 'Germany', 'this silver serving spoon is of German area origin. The only hallmark is \"13\", meaning that silver contents is 13 \"loth\", that is 812/1000. Loth is an ancient unit of measure for silver used in Germany until 1888. Lacking town and silversmith mark is difficult to identify age and origin of this piece. A reasonable hypothesis assigns it to the end 18th / beginning 19th century. The spoon is parcel-gilded and the handle is decorated with lion mask, female profile ivy\'s crowned, mythological animals and fruit clusters. The spoon is 6 1/2 in. long (cm. 16,5) and was bought from a German dealer through the Internet.', 1800),
(3, 'Edward III diamond-point spoon', 'England', 'A rare, Edward III diamond-point spoon, the squat faceted terminal on a slender, tapering hexagonal stem with a deeply curved fig-shaped bowl, (with a split on one side, approx 14mm long), struck once in the bowl with the \"Indian\" leopard\'s head mark, mid 14th century, circa 1350 - 15.75cm long, 0.75oz. ', 1350),
(4, 'Table Spoon - Hanoverian Rattail pattern', 'England', 'Made by the specialist spoonmaker Samuel Hitchcock, this is a fine quality George I silver table spoon with a good heavy weight of over 2 tr.oz.  As one would expect for a pre-1720 spoon, this example was made from the purer Britannia standard form and bears a good set of appropriate hallmarks. It has a central ridge to the front stem and the diagnostic rattail extension to the reverse of the bowl. The spoon is in fine condition with a good, unworn bowl.  Samuel Hitchcock was apprenticed to John Brace (1699-1706) and in turn went on to be master of future spoonmakers, such as William Soame (1713-20) and Samuel Roby (1733-1740).', 1719),
(5, 'Silver metamorphic folding spoon', 'Netherlands', 'A Dutch silver metamorphic folding spoon and fork, circa 1800, the prongs of the fork fit into five loops at back of oval bowl, which is plain to the exterior, and engraved with heraldic family crest to the inside, sliding animal face mask collar to confine the hinge, face mask to the top of the fork head, and recumbant lion to the finial atop a shield engraved with \'V\', 15cm long including spoon head. ', 1850),
(6, 'Charles II silver gilt spoon', 'England', 'Rare Charles II silver gilt St Bartholomew apostle spoon, ascribed to the South West, with a plain nimbus, pricked S over IA, with slightly tapering flat section stem, struck on the reverse with a maker\'s mark WC, an indistinct mark and an unidentifiable pelleted mark (also repeated in the bowl), Gloucester circa 1665, William Crossley or Corseley, approximately 1.9ozs, 18.5cm overall length  Provenance: How of Edinburgh Ltd., 2 Pickering Place, St. James\'s  London Literature: Jackson\'s Revised pp 317/318 for details of William Crossley (Corseley) and his marks; How, Volume II, Chapter III Section II, plate 63, for two apostle spoons by this maker', 1665),
(7, 'Charles 1st Seal Top Silver Spoon', 'England', 'A Charles I silver seal top spoon circa 1640. The end disc is engraved WC, probably the original owner\'s initials. The spoon is 6.25\" long (16 cm)', 1640),
(8, 'Russian silver gilt spoon', 'Russia', 'A pair of enamelled Russian silver gilt spoons retailed by A. Lyubavin, St Petersburg, each with maker\'s mark of Vasily Andreev, Moscow, 1899-1908, the reverse of the drop-shaped and oval bowls decorated with (differing) cloisonne polychrome enamel floral and scrolling foliate designs to part-enamelled twisted stems with knopped finials, in fitted wooden case, 18.2 and 20.4cm long, total weight approx. 4.7oz (2)', 1900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antiques`
--
ALTER TABLE `antiques`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antiques`
--
ALTER TABLE `antiques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
