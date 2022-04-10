-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2022 at 07:45 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_document`
--

-- --------------------------------------------------------

--
-- Table structure for table `depot_publique`
--

CREATE TABLE `depot_publique` (
  `iden_depot_Pub` int(11) UNSIGNED NOT NULL,
  `nom_doc_pub` varchar(30) DEFAULT NULL,
  `Cle_publique` longblob,
  `iden_users` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `envoie`
--

CREATE TABLE `envoie` (
  `iden_envoie` int(11) UNSIGNED NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `gros_fichier` varchar(255) DEFAULT NULL,
  `signe_fichier` varchar(255) DEFAULT NULL,
  `empreunte` varchar(255) DEFAULT NULL,
  `dat_recu` datetime DEFAULT NULL,
  `iden_users` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `envoie`
--

INSERT INTO `envoie` (`iden_envoie`, `libelle`, `gros_fichier`, `signe_fichier`, `empreunte`, `dat_recu`, `iden_users`) VALUES
(5, 'e_document.sql', 'files/e_document.sql', NULL, NULL, NULL, 'TEC1648875663'),
(6, 'e_document.sql', 'files/e_document.sql', NULL, NULL, NULL, 'TEC1648875663');

-- --------------------------------------------------------

--
-- Table structure for table `recu`
--

CREATE TABLE `recu` (
  `iden_recu` int(11) UNSIGNED NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `gros_fichier` longblob,
  `signe_fichier` longblob,
  `empreunte` longblob,
  `dat_recu` datetime DEFAULT NULL,
  `iden_exp` varchar(30) NOT NULL,
  `iden_dest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iden_users` varchar(30) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenoms` varchar(50) DEFAULT NULL,
  `nom_users` varchar(30) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mot_pass` varchar(50) DEFAULT NULL,
  `sign_users` longblob,
  `cle_priv` longblob,
  `cle_pub` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iden_users`, `nom`, `prenoms`, `nom_users`, `date_naiss`, `email`, `mot_pass`, `sign_users`, `cle_priv`, `cle_pub`) VALUES
('TEC1648875663', 'Abdoulaye', 'Ouattara', 'Razack', NULL, 'kounapetri05@gmail.com', '123', NULL, NULL, NULL),
('TEC1648880070', 'Sidibe', 'Malick', 'Malick', NULL, 'malick@gmail.com', '123', NULL, NULL, NULL),
('TEC1648883067', 'Bandama', 'Pascale Marie Estelle', 'Estelle', NULL, 'estelle@gmail.com', '123', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `depot_publique`
--
ALTER TABLE `depot_publique`
  ADD PRIMARY KEY (`iden_depot_Pub`),
  ADD UNIQUE KEY `Cle_publique` (`Cle_publique`(3072)),
  ADD KEY `iden_users` (`iden_users`);

--
-- Indexes for table `envoie`
--
ALTER TABLE `envoie`
  ADD PRIMARY KEY (`iden_envoie`),
  ADD KEY `iden_users` (`iden_users`);

--
-- Indexes for table `recu`
--
ALTER TABLE `recu`
  ADD PRIMARY KEY (`iden_recu`),
  ADD KEY `iden_exp` (`iden_exp`) USING BTREE,
  ADD KEY `iden_dest` (`iden_dest`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iden_users`),
  ADD UNIQUE KEY `nom_users` (`nom_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `depot_publique`
--
ALTER TABLE `depot_publique`
  MODIFY `iden_depot_Pub` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `envoie`
--
ALTER TABLE `envoie`
  MODIFY `iden_envoie` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recu`
--
ALTER TABLE `recu`
  MODIFY `iden_recu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `depot_publique`
--
ALTER TABLE `depot_publique`
  ADD CONSTRAINT `depot_publique_ibfk_1` FOREIGN KEY (`iden_users`) REFERENCES `users` (`iden_users`);

--
-- Constraints for table `envoie`
--
ALTER TABLE `envoie`
  ADD CONSTRAINT `envoie_ibfk_1` FOREIGN KEY (`iden_users`) REFERENCES `users` (`iden_users`);

--
-- Constraints for table `recu`
--
ALTER TABLE `recu`
  ADD CONSTRAINT `recu_ibfk_1` FOREIGN KEY (`iden_exp`) REFERENCES `users` (`iden_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
