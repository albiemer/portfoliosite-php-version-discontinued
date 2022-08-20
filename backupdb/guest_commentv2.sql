-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2021 at 03:45 AM
-- Server version: 10.5.12-MariaDB-0+deb11u1
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest_commentv2`
--

CREATE TABLE `guest_commentv2` (
  `Id` int(11) NOT NULL,
  `Comment` mediumtext NOT NULL,
  `Name` text NOT NULL,
  `Email` text DEFAULT NULL,
  `Date` text NOT NULL,
  `Weekdays` text NOT NULL,
  `Time` text NOT NULL,
  `Website` text DEFAULT NULL,
  `Delete_content` mediumtext DEFAULT NULL,
  `Comment_reply` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guest_commentv2`
--

INSERT INTO `guest_commentv2` (`Id`, `Comment`, `Name`, `Email`, `Date`, `Weekdays`, `Time`, `Website`, `Delete_content`, `Comment_reply`) VALUES
(5, 'hello', 'albiemer', 'afvuoiby', '21/12/28', 'Tuesday', '03:37:20am', 'iobyoiyv', '<div id=\"albiemer5delete\" class=\"modalDialog\">\n								<div>\n						\n									<a href=\"javascript:history.go(-1)\" title=\"Close\" class=\"close\">X</a>\n				\n										<form action = \"deletecomment.php\" method = \"post\">\n					\n										<h3 class = \"deleteconfirmlabel\" >Confirm with your \"Name\" and \"Email\" to delete your comment.</h3><br>\n					\n										<input class = \"regnamemodal\" type = \"text\" name = \"NAME\" placeholder = \"Name\" required><br>\n										<input class = \"regemailmodal\" type = \"text\" name = \"EMAIL\" placeholder = \"Email\">\n										<input type = \"hidden\" name = \"ID\" value = \"5\">\n										<input type = \"hidden\" name = \"ERROR\" value = \"albiemer\">\n										\n										<br><br><input class = \"myformbuttonmodal\" type = \"submit\" value = \"Confirm\" >\n			\n			\n										</form>\n								</div>\n							</div><div id=\"albiemer5comment\" style=\"display: block\">\n							<form id = \"albiemer5comment\" action = \"commentrep.php\" method = \"post\">\n							<font size=\"1\">(Maximum characters: 42)You have <input readonly type=\"text\" name=\"countdown\" size=\"3\" value=\"42\"> characters left.</font>\n							<input id = \"replycommentcount\" type = \"text\" name = \"COMMENTREPLY\" onKeyDown=\"limitText(this.form.replycommentcount,this.form.countdown,42);\" placeholder = \"Reply Comment...\" style=\"width: 450px;\" required>\n							<input type = \"text\" name = \"NAME\" value = \"albiemer\" hidden>\n							<input type = \"text\" name = \"ID\" value  = \"5\" hidden>\n							<input type = \"submit\" value = \"Post comment\" hidden> \n							</div>\n							</form><br>', '<br>&emsp; &emsp; &#8627;GUEST:&emsp;<input class = \"textareareplycomment\" type = \"readonly\" name = \"ERROR\" readonly value = \"hello\" style=\"width: 350px;\"><br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_commentv2`
--
ALTER TABLE `guest_commentv2`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest_commentv2`
--
ALTER TABLE `guest_commentv2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
