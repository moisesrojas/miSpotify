-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 12, 2021 at 12:41 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miSpotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `canciones`
--

CREATE TABLE `canciones` (
  `id_cancion` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artista` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaLanzamiento` date NOT NULL,
  `compositor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oyentes` int(11) NOT NULL,
  `letra` text COLLATE utf8_unicode_ci NOT NULL,
  `portada` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `canciones`
--

INSERT INTO `canciones` (`id_cancion`, `titulo`, `artista`, `album`, `genero`, `fechaLanzamiento`, `compositor`, `oyentes`, `letra`, `portada`) VALUES
(1, 'Save Your Tears', 'The Weeknd', 'After Hours', 'R&B', '2021-01-06', 'The Weeknd', 9999, 'Yeah\r\nI saw you dancing in a crowded room\r\nYou look so happy when I\'m not with you\r\nBut then you saw me, caught you by surprise\r\nA single teardrop falling from your eye\r\nI don\'t know why I run away\r\nI\'ll make you cry when I run away\r\nYou could\'ve asked me why I broke your heart\r\nYou could\'ve told me that you fell apart\r\nBut you walked past me like I wasn\'t there\r\nAnd just pretended like you didn\'t care\r\nI don\'t know why I run away\r\nI\'ll make you cry when I run away\r\nTake me back \'cause I wanna stay\r\nSave your tears for another\r\nSave your tears for another day\r\nSave your tears for another day\r\nSo, I made you think that I would always stay\r\nI said some things that I should never say\r\nYeah, I broke your heart like someone did to mine\r\nAnd now you won\'t love me for a second time\r\nI don\'t know why I run away, oh, girl\r\nSaid I make you cry when I run away\r\nGirl, take me back \'cause I wanna stay\r\nSave your tears for another\r\nI realize that I\'m much too late\r\nAnd you deserve someone better\r\nSave your tears for another day (ooh, yeah)\r\nSave your tears for another day (yeah)\r\nI don\'t know why I run away\r\nI\'ll make you cry when I run away\r\nSave your tears for another day, ooh, girl (ah)\r\nI said save your tears for another day, yeah (ah)\r\nSave your tears for another day (ah)\r\nSave your tears for another day (ah)', 'afterhours.jpg'),
(2, 'Blinding Lights', 'The Weeknd', 'After Hours', 'R&B', '2020-09-10', 'The Weeknd', 9999, 'Yeah\r\nI\'ve been tryin\' to call\r\nI\'ve been on my own for long enough\r\nMaybe you can show me how to love, maybe\r\nI\'m going through withdrawals\r\nYou don\'t even have to do too much\r\nYou can turn me on with just a touch, baby\r\nI look around and\r\nSin City\'s cold and empty (oh)\r\nNo one\'s around to judge me (oh)\r\nI can\'t see clearly when you\'re gone\r\nAnd I said, ooh, I\'m blinded by the lights\r\nNo, I can\'t sleep until I feel your touch\r\nI said, ooh, I\'m drowning in the night\r\nOh, when I\'m like this, you\'re the one I trust\r\n(Hey, hey, hey)\r\nI\'m running out of time\r\n\'Cause I can see the sun light up the sky\r\nSo I hit the road in overdrive, baby, oh\r\nThe city\'s cold and empty (oh)\r\nNo one\'s around to judge me (oh)\r\nI can\'t see clearly when you\'re gone\r\nAnd I said, ooh, I\'m blinded by the lights\r\nNo, I can\'t sleep until I feel your touch\r\nI said, ooh, I\'m drowning in the night\r\nOh, when I\'m like this, you\'re the one I trust\r\nI\'m just walking by to let you know (by to let you know)\r\nI could never say it on the phone (say it on the phone)\r\nWill never let you go this time (ooh)\r\nI said, ooh, I\'m blinded by the lights\r\nNo, I can\'t sleep until I feel your touch\r\n(Hey, hey, hey)\r\nI said, ooh, I\'m blinded by the lights\r\nNo, I can\'t sleep until I feel your touch', 'afterhours.jpg'),
(3, 'Título', 'artista', 'album', 'genero', '2021-02-26', 'Compositor', 0, 'Letra', 'Portada'),
(4, 'Título', 'artista', 'album', 'genero', '2021-02-26', 'Compositor', 0, 'Letra', 'Portada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id_cancion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id_cancion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
