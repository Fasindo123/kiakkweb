-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 02:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiakkweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `long_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `short_description`, `long_description`) VALUES
(2, 'Ilyen meg olyan', 'joifdgihjhjklfgjklhlkéfghufjmlkmkléfjsljkfghkdjfshgljdgjdligf gjdfgjdlhj dfh gfkljh kfljghlk fd khjdjlkfhgjkdhfgsjlék df gdfhjifdgl jhgfd. ajsdlkjallhg g sklg hjg dfg phfgh!', ''),
(3, 'Olyan meg ilyen', 'gdhfgh f. sg dfhfg fgh fgh fgjuhuiz fsd., df sdf sgfdhjgks fg.s fsdujf hsdf isfhsdf.s fds fisdujs f.sdf hjsdf sd.fsdjf sd fs.df sdjfshgh.fj dfhdfgh.', ''),
(4, 'Ilyen meg olyan', 'joifdgihjhjklfgjklhlkéfghufjmlkmkléfjsljkfghkdjfshgljdgjdligf gjdfgjdlhj dfh gfkljh kfljghlk fd khjdjlkfhgjkdhfgsjlék df gdfhjifdgl jhgfd. ajsdlkjallhg g sklg hjg dfg phfgh!', ''),
(5, 'Olyan meg ilyen', 'gdhfgh f. sg dfhfg fgh fgh fgjuhuiz fsd., df sdf sgfdhjgks fg.s fsdujf hsdf isfhsdf.s fds fisdujs f.sdf hjsdf sd.fsdjf sd fs.df sdjfshgh.fj dfhdfgh.', '');

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `qst` text NOT NULL,
  `answ` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `qst`, `answ`) VALUES
(1, 'Ajdfg kdfg dgdg dg fh?', 'AJskljgdfkl dflégdf gfdlkéh klfgdh klfghlé flkéhg dlkégdflkég dlgké.'),
(2, 'Asd fgfdkgl dfkjg dklfhglk h?', 'Asdjikjgfl dgéldf gédflég dgsd lékfgdfjkg glksd fgdáég déf géldflkéh kgéldék gdflégk lsdflgéks lléfdlgé kdflégkéldf gldfgl édjhd.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE `infrastructure` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infrastructure`
--

INSERT INTO `infrastructure` (`id`, `title`, `short_description`, `long_description`, `img`) VALUES
(1, 'Valami helyiség', 'sgdfgkj dgj djfgj dgfjkdgkdfj lgjldf jgdfj gfdklj gjkdjkgh jkdfhjk dfjkg djkg kljfdkgj dkfjlgkjl dkljg kdjfgjk dfjk gljkdfkjlg jkldgjkl dfljkg', '', ''),
(2, 'Másik helyiség', ' dg fdg dfg dfg dfg dhfg hadfdsf sadfsfas ddfgfsd gsdf sadfsdfsfasdsfsfdasfsd dsf sdf af asdf asfsdf afdsf afasdasffds gfd gsgfsdfaf as dfdsf af sdf dfs fasffdsfsdfsd dsf sdf df afsd afsdfsgfd gsdgf sdf adfasfasdasddasa', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `cover_img`, `date`) VALUES
(1, 'asdasdagfsgfg', 'asdadasda', '', '0000-00-00'),
(2, 'asdasdagfsgfg', 'asdadasda', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `oktatok`
--

CREATE TABLE `oktatok` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Nincs név megadva',
  `short_description` text NOT NULL,
  `long_description` text NOT NULL DEFAULT '\'Nincs leírás megadva\'',
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oktatok`
--

INSERT INTO `oktatok` (`id`, `name`, `short_description`, `long_description`, `img`) VALUES
(1, 'Basz Tamás', 'asdagfg dfg dfg dfg d as da gfdgdfg dadagdfg dgdg dfg adag dfg dfg s sdf sdf gd fafsdf fsadsdfgafdf sdf sd ghd sfsfs', '\'Nincs leírás megadva\'', ''),
(2, 'Mikorka Kálmán', 'afgfdg dfhg gfh   fsfdf sdfs fdsdgdfh dfg fgs dfsd gfd gsdfg dfgs df sdfsdf sdf afd sfgdfg dfg sfd sfaf sdfsdf sdf sf', '\'Nincs leírás megadva\'', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oktatok`
--
ALTER TABLE `oktatok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infrastructure`
--
ALTER TABLE `infrastructure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oktatok`
--
ALTER TABLE `oktatok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
