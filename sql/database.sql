-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Gegenereerd op: 08 mrt 2023 om 18:05
-- Serverversie: 10.4.27-MariaDB-1:10.4.27+maria~ubu2004
-- PHP-versie: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`) VALUES
(1, 'Thoughtbridge'),
(2, 'Zoomlounge'),
(3, 'Photobug'),
(4, 'Ozu'),
(5, 'Skiba'),
(6, 'Skimia'),
(7, 'Geba'),
(8, 'Dazzlesphere'),
(9, 'Aimbo'),
(10, 'Camido'),
(11, 'Yombu'),
(12, 'Divanoodle'),
(13, 'Tagchat'),
(14, 'Vitz'),
(15, 'Realfire'),
(16, 'Eazzy'),
(17, 'Oyondu'),
(18, 'Devpulse'),
(19, 'Twitterlist'),
(20, 'Skilith'),
(21, 'Centimia'),
(22, 'Yozio'),
(23, 'Blogpad'),
(24, 'Vinder'),
(25, 'Voomm'),
(26, 'Blogspan'),
(27, 'Realblab'),
(28, 'Gevee'),
(29, 'Youfeed'),
(30, 'Fivebridge'),
(31, 'Thoughtbridge'),
(32, 'Browsedrive'),
(33, 'Avamba'),
(34, 'Ozu'),
(35, 'Zoonoodle'),
(36, 'Oyope'),
(37, 'Nlounge'),
(38, 'Voolith'),
(39, 'Oodoo'),
(40, 'Tagchat'),
(41, 'Oyonder'),
(42, 'Katz'),
(43, 'Gabtype'),
(44, 'Eire'),
(45, 'Oyondu'),
(46, 'Skipfire'),
(47, 'Dabjam'),
(48, 'Yodoo'),
(49, 'Yotz'),
(50, 'Wordpedia');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `manufacturer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `manufacturer`) VALUES
(1, 'Skippad', '274.05', 37),
(2, 'Digitube', '203.64', 25),
(3, 'Kwimbee', '290.65', 29),
(4, 'Yacero', '421.47', 45),
(5, 'Pixoboo', '399.19', 13),
(6, 'Voonte', '63.06', 13),
(7, 'Tazzy', '335.65', 23),
(8, 'Trupe', '80.71', 29),
(9, 'Topicware', '430.54', 42),
(10, 'Livetube', '272.44', 19),
(11, 'Photobug', '422.69', 30),
(12, 'Centimia', '207.48', 34),
(13, 'Thoughtbeat', '206.01', 43),
(14, 'Snaptags', '444.43', 15),
(15, 'Browsebug', '267.53', 4),
(16, 'Blognation', '127.12', 4),
(17, 'Npath', '19.30', 23),
(18, 'Yozio', '160.10', 19),
(19, 'Yabox', '437.61', 8),
(20, 'Rooxo', '244.77', 42),
(21, 'Shuffledrive', '143.23', 25),
(22, 'Yadel', '212.00', 9),
(23, 'Aimbo', '180.81', 33),
(24, 'Skyndu', '309.91', 25),
(25, 'Mybuzz', '163.63', 18),
(26, 'Tazz', '186.61', 17),
(27, 'Yotz', '172.18', 11),
(28, 'Kwimbee', '341.27', 14),
(29, 'Tambee', '283.57', 2),
(30, 'Gigabox', '379.47', 12),
(31, 'Mita', '235.02', 43),
(32, 'Divanoodle', '9.80', 18),
(33, 'Ntags', '106.76', 11),
(34, 'Thoughtstorm', '193.44', 4),
(35, 'Dynava', '63.30', 20),
(36, 'Skajo', '325.28', 10),
(37, 'Twitterbeat', '458.97', 48),
(38, 'Zoonoodle', '394.47', 9),
(39, 'Aivee', '468.63', 15),
(40, 'Feedfish', '169.76', 30),
(41, 'Flashdog', '294.73', 27),
(42, 'Buzzshare', '469.48', 10),
(43, 'Fivespan', '38.97', 11),
(44, 'Aivee', '33.31', 33),
(45, 'Babbleopia', '63.56', 6),
(46, 'Jabberbean', '351.52', 23),
(47, 'Avamba', '14.55', 5),
(48, 'Realbridge', '48.18', 5),
(49, 'Vitz', '249.64', 46),
(50, 'Fatz', '135.82', 38),
(51, 'Rhynyx', '5.68', 32),
(52, 'Gevee', '254.85', 8),
(53, 'Dazzlesphere', '49.72', 27),
(54, 'Mybuzz', '79.49', 6),
(55, 'Gigabox', '307.93', 5),
(56, 'Kwinu', '422.03', 19),
(57, 'Fivespan', '462.80', 5),
(58, 'Wordware', '320.71', 28),
(59, 'Brightbean', '186.08', 20),
(60, 'Twitterwire', '102.27', 48),
(61, 'Devpulse', '496.05', 50),
(62, 'Rhynyx', '179.04', 16),
(63, 'Kwideo', '256.83', 47),
(64, 'Skyvu', '469.71', 7),
(65, 'Wordware', '107.43', 27),
(66, 'Talane', '389.29', 21),
(67, 'Dabvine', '13.82', 49),
(68, 'Mydeo', '82.82', 46),
(69, 'Skipfire', '144.80', 15),
(70, 'Digitube', '333.22', 39),
(71, 'Wikido', '103.56', 7),
(72, 'Buzzbean', '9.96', 3),
(73, 'LiveZ', '432.09', 26),
(74, 'Aibox', '339.59', 46),
(75, 'Brainverse', '266.54', 47),
(76, 'Skyndu', '399.71', 49),
(77, 'Brightbean', '401.71', 44),
(78, 'Tagopia', '318.74', 30),
(79, 'Skyndu', '415.79', 25),
(80, 'Zoozzy', '234.82', 11),
(81, 'Fiveclub', '202.33', 15),
(82, 'Flipbug', '366.30', 3),
(83, 'Kanoodle', '189.39', 24),
(84, 'Fivechat', '89.74', 19),
(85, 'Twinte', '366.31', 49),
(86, 'Buzzster', '207.65', 13),
(87, 'Meeveo', '427.88', 4),
(88, 'Oozz', '358.98', 37),
(89, 'Twinder', '136.23', 46),
(90, 'Rhynoodle', '272.83', 29),
(91, 'Npath', '387.80', 34),
(92, 'Tazzy', '395.18', 38),
(93, 'Vidoo', '364.99', 16),
(94, 'Topiclounge', '301.91', 16),
(95, 'Skyndu', '386.78', 12),
(96, 'Quimm', '394.04', 7),
(97, 'Gabvine', '264.33', 42),
(98, 'Devshare', '436.65', 40),
(99, 'Tavu', '95.65', 6),
(100, 'Realblab', '259.01', 26);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `ip_address`) VALUES
(1, 'Noland', 'Blowfield', 'nblowfield0@smh.com.au', 'BLHzthHpcdc2', '196.118.54.44'),
(2, 'Bernadine', 'Pretswell', 'bpretswell1@list-manage.com', 'uC97nL8wP', '25.178.40.74'),
(3, 'Reeva', 'Waldie', 'rwaldie2@harvard.edu', '0C4Ga1', '13.31.67.106'),
(4, 'Claudio', 'Snedker', 'csnedker3@vkontakte.ru', '21UhdTlV', '101.87.154.104'),
(5, 'Ora', 'Delahunty', 'odelahunty4@newyorker.com', 'GZhUmJ', '244.107.211.76'),
(6, 'Nesta', 'Paolucci', 'npaolucci5@jalbum.net', 'B2mgbURx', '179.73.23.28'),
(7, 'Lydon', 'Peidro', 'lpeidro6@ted.com', 'G0BPgvUQEvM', '13.183.220.189'),
(8, 'Geraldine', 'Treneer', 'gtreneer7@forbes.com', '2IJ8cWOJEM', '43.7.151.82'),
(9, 'Ashleigh', 'Parrin', 'aparrin8@cmu.edu', 'Rd1Of1yT', '92.2.225.126'),
(10, 'Gar', 'Blagburn', 'gblagburn9@amazon.co.uk', 'idxWEVVfc', '34.31.15.82'),
(11, 'Vallie', 'Meade', 'vmeadea@google.ca', 'tvs8qu6y', '68.240.153.72'),
(12, 'Deni', 'Kuhnke', 'dkuhnkeb@friendfeed.com', 'ldNezOEkCs', '210.121.200.142'),
(13, 'Biron', 'Cornelisse', 'bcornelissec@exblog.jp', '6cdrgWK19XpC', '96.172.193.101'),
(14, 'Petronille', 'Skellon', 'pskellond@loc.gov', '1s0YFeWNge7', '252.8.40.134'),
(15, 'Cordy', 'Kenwin', 'ckenwine@gizmodo.com', 'RuXwQA5N5JF', '72.174.235.97'),
(16, 'Lola', 'Fredson', 'lfredsonf@dropbox.com', 'E7qhcK', '97.148.14.67'),
(17, 'Delila', 'Staresmeare', 'dstaresmeareg@nps.gov', 'A2oM6Ftwt', '221.157.206.134'),
(18, 'Margret', 'Alphege', 'malphegeh@youku.com', 'To2uc1dnS', '231.139.150.109'),
(19, 'Minnaminnie', 'Mostin', 'mmostini@ed.gov', 'eE7skVsV', '154.54.146.179'),
(20, 'Loralyn', 'Pauletti', 'lpaulettij@guardian.co.uk', 'it1BuM', '192.105.14.222'),
(21, 'Angie', 'Sterland', 'asterlandk@gmpg.org', 'oHEhj3iKg7', '128.71.226.34'),
(22, 'Vonny', 'Cardenas', 'vcardenasl@mit.edu', 'otORZnIqEU', '249.110.136.100'),
(23, 'Aeriell', 'Ganford', 'aganfordm@yolasite.com', 'gfpkwgHCJdd', '240.185.27.52'),
(24, 'Carroll', 'Mostin', 'cmostinn@163.com', 'iWqkK31O', '132.183.238.222'),
(25, 'Mady', 'Warland', 'mwarlando@myspace.com', '2kvGC7rBBo5', '57.112.185.221'),
(26, 'Durand', 'Whymark', 'dwhymarkp@webnode.com', 'DFDt9Uznhmg', '14.18.68.21'),
(27, 'Clarice', 'MacCarter', 'cmaccarterq@unesco.org', 'h9E5cAIrhQ', '16.81.126.164'),
(28, 'Anthia', 'Nickolls', 'anickollsr@mozilla.com', 'mNRRFnjd', '91.237.216.106'),
(29, 'Feliks', 'Tennewell', 'ftennewells@webs.com', 'PLmLwt7eCKK5', '10.50.145.212'),
(30, 'Duane', 'Ratledge', 'dratledget@nbcnews.com', 'PYXFkKN4tW', '78.129.255.63'),
(31, 'Jacinta', 'Bernade', 'jbernadeu@ihg.com', '4ZIEyc', '6.198.96.150'),
(32, 'Merl', 'Layton', 'mlaytonv@pinterest.com', 'zwnonFz4Scpo', '138.129.140.134'),
(33, 'Wolf', 'Caldayrou', 'wcaldayrouw@homestead.com', 'rEbU8Rv', '106.66.235.100'),
(34, 'Lenna', 'Boynton', 'lboyntonx@purevolume.com', 'VenMT8qASP', '109.165.239.7'),
(35, 'Silvie', 'Carson', 'scarsony@sciencedirect.com', 'mbE2zJrh', '203.30.161.251'),
(36, 'Almira', 'Fearby', 'afearbyz@java.com', 'YK7QFD0', '194.77.18.233'),
(37, 'Danyette', 'Lowater', 'dlowater10@twitpic.com', '9iD5mSaygv', '179.107.32.155'),
(38, 'Fay', 'Bold', 'fbold11@clickbank.net', '9jMJP0kv', '229.157.170.0'),
(39, 'Warde', 'Arderne', 'warderne12@reference.com', 'ezJPxS', '191.27.31.118'),
(40, 'Mirna', 'Beynkn', 'mbeynkn13@google.it', 'z0eHq0', '117.25.64.139'),
(41, 'Brooke', 'Kinleyside', 'bkinleyside14@webmd.com', 'yndlFQg', '53.240.167.105'),
(42, 'Jasmin', 'Manvell', 'jmanvell15@furl.net', 'Bpm1QHjwM', '166.142.126.121'),
(43, 'Sonny', 'Vial', 'svial16@comcast.net', 'm0KgCC4bYU', '147.145.175.114'),
(44, 'Dona', 'Bartens', 'dbartens17@dedecms.com', 'oOglPolr7', '179.252.240.189'),
(45, 'Violante', 'Kissack', 'vkissack18@mail.ru', 'CMYBYn', '76.38.137.177'),
(46, 'Shawn', 'Ciottoi', 'sciottoi19@dedecms.com', 'idjKLfChV3', '156.11.241.117'),
(47, 'Appolonia', 'Kettow', 'akettow1a@tripadvisor.com', 'xrb7wpmWp3Oy', '146.11.171.246'),
(48, 'Willetta', 'Cookman', 'wcookman1b@patch.com', 'Q8MMCZaQMFIy', '234.212.235.225'),
(49, 'Reade', 'Cabral', 'rcabral1c@theglobeandmail.com', 'ZVrgwPaMW1a', '1.253.200.126'),
(50, 'Elle', 'Callis', 'ecallis1d@ihg.com', 'C5g9M9oE6E', '3.172.153.218');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
