-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 08:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content-ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Ethyl Collins', 'phyllis.mraz@reilly.info', '2024-02-21', '2024-02-21'),
(2, 'Gonzalo Lemke', 'delfina.mcdermott@kohler.info', '2024-02-21', '2024-02-21'),
(3, 'Dr. Marilie Gutkowski MD', 'xfeest@gmail.com', '2024-02-21', '2024-02-21'),
(4, 'Angelina Bechtelar', 'mrath@larkin.org', '2024-02-21', '2024-02-21'),
(5, 'Adan Heathcote', 'lmann@durgan.com', '2024-02-21', '2024-02-21'),
(6, 'Samantha Conroy PhD', 'kailee89@gmail.com', '2024-02-21', '2024-02-21'),
(7, 'Cade Johnson', 'ruby04@watsica.com', '2024-02-21', '2024-02-21'),
(8, 'Cedrick Gerhold', 'schmitt.henry@hotmail.com', '2024-07-21', '2024-02-21'),
(10, 'Kyle Paucek', 'reynolds.maxie@hotmail.com', '2024-02-21', '2024-02-21'),
(65, 'Estella Wolff', 'jennie19@hotmail.com', '2024-02-23', '2024-02-23'),
(66, 'Ole Dare', 'janet04@hotmail.com', '2024-02-23', '2024-02-23'),
(67, 'Orland Corkery', 'gbartoletti@hotmail.com', '2024-02-23', '2024-02-23'),
(68, 'Xzavier Tremblay', 'langworth.breanne@ratke.com', '2024-02-23', '2024-02-23'),
(69, 'Meggie Grant', 'leffler.genoveva@ullrich.com', '2024-02-23', '2024-02-23'),
(70, 'Tillman Johnson', 'joany.franecki@aufderhar.com', '2024-02-23', '2024-02-23'),
(71, 'Chadrick Aufderhar', 'ipaucek@hotmail.com', '2024-02-23', '2024-02-23'),
(72, 'Kaelyn Kilback', 'metz.jammie@yahoo.com', '2024-02-23', '2024-02-23'),
(73, 'Prof. Pattie Spinka', 'doug.conroy@rau.com', '2024-02-23', '2024-02-23'),
(74, 'Sigurd Blick', 'maggio.jovanny@pouros.com', '2024-02-23', '2024-02-23'),
(75, 'Dr. Dorothea Mills', 'cprice@trantow.com', '2024-02-23', '2024-02-23'),
(76, 'Otho Daugherty PhD', 'rashad37@howe.com', '2024-02-23', '2024-02-23'),
(77, 'Cody Stracke', 'edmund.herzog@gmail.com', '2024-02-23', '2024-02-23'),
(78, 'Marina Hill', 'littel.edgardo@gmail.com', '2024-02-23', '2024-02-23'),
(79, 'Deshaun Sawayn', 'darby.connelly@dickinson.com', '2024-02-23', '2024-02-23'),
(80, 'Kiel Littel', 'zella.okeefe@hotmail.com', '2024-02-23', '2024-02-23'),
(81, 'Noe Streich', 'nikolas33@feeney.com', '2024-02-23', '2024-02-23'),
(82, 'Gudrun Deckow', 'umcclure@kiehn.com', '2024-02-23', '2024-02-23'),
(83, 'Miss Lucy Bahringer', 'jedidiah.wiegand@skiles.com', '2024-02-23', '2024-02-23'),
(84, 'Vicenta Wolf', 'jacobi.wilfredo@hotmail.com', '2024-02-23', '2024-02-23'),
(85, 'Stanley Kutch', 'lisa.glover@gmail.com', '2024-02-23', '2024-02-23'),
(86, 'Demetrius Batz', 'donato77@spencer.biz', '2024-02-23', '2024-02-23'),
(87, 'Alec Bartoletti MD', 'cordie51@gmail.com', '2024-02-23', '2024-02-23'),
(88, 'Syble Trantow MD', 'wkirlin@yahoo.com', '2024-02-23', '2024-02-23'),
(89, 'Prof. Elenora Rempel', 'lupe.abernathy@yahoo.com', '2024-02-23', '2024-02-23'),
(90, 'Muriel Walter', 'ziemann.laila@borer.com', '2024-02-23', '2024-02-23'),
(91, 'Thea Legros', 'nyasia.tillman@welch.com', '2024-02-23', '2024-02-23'),
(92, 'Jayde Weimann', 'mabelle.metz@waelchi.com', '2024-02-23', '2024-02-23'),
(93, 'Jermey Volkman', 'adrian.green@hotmail.com', '2024-02-23', '2024-02-23'),
(94, 'Justice Marks', 'amy14@runolfsson.biz', '2024-02-23', '2024-02-23'),
(95, 'Mr. Colt Zieme III', 'newton00@oberbrunner.org', '2024-02-23', '2024-02-23'),
(96, 'Cristopher Ward', 'jade.aufderhar@gmail.com', '2024-02-23', '2024-02-23'),
(97, 'Prof. Richmond Kris', 'farrell.audreanne@gmail.com', '2024-02-23', '2024-02-23'),
(98, 'Briana Gusikowski', 'ystiedemann@hotmail.com', '2024-02-23', '2024-02-23'),
(99, 'Miss Thea Konopelski I', 'cordia11@hotmail.com', '2024-02-23', '2024-02-23'),
(100, 'Moses Schroeder', 'ckiehn@yahoo.com', '2024-02-23', '2024-02-23'),
(101, 'Ezekiel Shields', 'helena52@hotmail.com', '2024-02-23', '2024-02-23'),
(102, 'Furman Heidenreich', 'walker87@hotmail.com', '2024-02-23', '2024-02-23'),
(103, 'Brant Runolfsdottir IV', 'kiara.johnston@hotmail.com', '2024-02-23', '2024-02-23'),
(104, 'Prof. Rickey O\'Hara', 'serena.will@prosacco.org', '2024-02-23', '2024-02-23'),
(105, 'Avery Collins V', 'erich.kling@hotmail.com', '2024-02-23', '2024-02-23'),
(106, 'Brendon Hoppe Jr.', 'elise.osinski@yahoo.com', '2024-02-23', '2024-02-23'),
(107, 'Lula Runolfsson', 'cconsidine@yahoo.com', '2024-02-23', '2024-02-23'),
(108, 'Jeromy Watsica', 'prince.anderson@koss.biz', '2024-02-23', '2024-02-23'),
(109, 'Delilah Rohan', 'allie.reichel@oconnell.com', '2024-02-23', '2024-02-23'),
(110, 'Cleta Harber', 'zmueller@gmail.com', '2024-02-23', '2024-02-23'),
(111, 'Tad King', 'manuel.reichert@botsford.biz', '2024-02-23', '2024-02-23'),
(112, 'Dr. Alexandre Armstrong II', 'white.martin@yahoo.com', '2024-02-23', '2024-02-23'),
(113, 'Mr. Frankie Hagenes Sr.', 'champlin.isabel@kessler.info', '2024-02-23', '2024-02-23'),
(114, 'Sim Anderson', 'elisabeth.ernser@krajcik.com', '2024-02-23', '2024-02-23'),
(115, 'Kristofer Koepp', 'wyman.bennett@hotmail.com', '2024-02-23', '2024-02-23'),
(116, 'Prof. Roy Schinner V', 'callie41@daugherty.info', '2024-02-23', '2024-02-23'),
(117, 'Prof. Bret Daniel Sr.', 'syble12@bergstrom.org', '2024-02-23', '2024-02-23'),
(118, 'June Deckow', 'xlang@hotmail.com', '2024-02-23', '2024-02-23'),
(119, 'Prof. Linnea VonRueden', 'tsmith@gmail.com', '2024-02-23', '2024-02-23'),
(120, 'Tony Waters II', 'muller.vicente@morissette.com', '2024-02-23', '2024-02-23'),
(121, 'Justen Reynolds Jr.', 'frieda.carter@gmail.com', '2024-02-23', '2024-02-23'),
(122, 'Kole Quigley', 'vesta04@yahoo.com', '2024-02-23', '2024-02-23'),
(123, 'Alayna Stanton', 'xhintz@fadel.com', '2024-02-23', '2024-02-23'),
(124, 'Mrs. Marianne Weissnat', 'maybell.rempel@abernathy.com', '2024-02-23', '2024-02-23'),
(125, 'Alivia Muller', 'erwin.mckenzie@gmail.com', '2024-02-23', '2024-02-23'),
(126, 'Rodrigo Pfeffer', 'fritsch.hortense@ritchie.net', '2024-02-23', '2024-02-23'),
(127, 'Mayra Braun', 'lue95@gmail.com', '2024-02-23', '2024-02-23'),
(128, 'Jarret Murazik', 'awalter@bailey.com', '2024-02-23', '2024-02-23'),
(129, 'Horacio Kessler', 'bhammes@gmail.com', '2024-02-23', '2024-02-23'),
(130, 'Dora Schowalter', 'naomie51@hotmail.com', '2024-02-23', '2024-02-23'),
(131, 'Prof. Damian Cummings DDS', 'eichmann.grant@weber.net', '2024-02-23', '2024-02-23'),
(132, 'Elenora Bruen', 'sporer.ryley@streich.com', '2024-02-23', '2024-02-23'),
(133, 'Prof. Adolfo Larkin MD', 'bernhard.abraham@rau.net', '2024-02-23', '2024-02-23'),
(134, 'Elwin Blanda', 'hfeeney@hessel.org', '2024-02-23', '2024-02-23'),
(135, 'Tomasa Wiegand', 'thompson.torey@windler.biz', '2024-02-23', '2024-02-23'),
(136, 'Eva Rice II', 'zweber@hotmail.com', '2024-02-23', '2024-02-23'),
(137, 'Prof. Nikolas Smitham V', 'edgar48@rogahn.com', '2024-02-23', '2024-02-23'),
(138, 'Adella McKenzie', 'mack98@johns.net', '2024-02-23', '2024-02-23'),
(139, 'Mark Jast', 'eldred.dibbert@raynor.net', '2024-02-23', '2024-02-23'),
(140, 'Tracy Pollich', 'qbechtelar@donnelly.com', '2024-02-23', '2024-02-23'),
(141, 'Dr. Birdie Runolfsson', 'oconner.malvina@doyle.com', '2024-02-23', '2024-02-23'),
(142, 'Kira Legros', 'ervin81@gmail.com', '2024-02-23', '2024-02-23'),
(143, 'Dr. Jon Ryan Jr.', 'vivian.durgan@mitchell.biz', '2024-02-23', '2024-02-23'),
(144, 'Jed Hills', 'ruecker.kaley@hotmail.com', '2024-02-23', '2024-02-23'),
(145, 'Luz Haley', 'ipacocha@corkery.com', '2024-02-23', '2024-02-23'),
(146, 'Mr. Ralph Schowalter MD', 'skiles.yvonne@padberg.net', '2024-02-23', '2024-02-23'),
(147, 'Charley Cassin', 'braulio52@hotmail.com', '2024-02-23', '2024-02-23'),
(148, 'Fiona Hartmann IV', 'scarlett.connelly@hotmail.com', '2024-02-23', '2024-02-23'),
(149, 'Colten Hermiston', 'norbert.schiller@kling.com', '2024-02-23', '2024-02-23'),
(150, 'Angelita Upton Jr.', 'gleichner.maia@gmail.com', '2024-02-23', '2024-02-23'),
(151, 'Dayana Nikolaus Jr.', 'vesta55@kunze.com', '2024-02-23', '2024-02-23'),
(152, 'Dr. Reid Daugherty Jr.', 'mose11@pollich.net', '2024-02-23', '2024-02-23'),
(153, 'Emanuel Fay', 'aric15@oconnell.com', '2024-02-23', '2024-02-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
