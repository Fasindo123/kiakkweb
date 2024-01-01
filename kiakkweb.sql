-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 04:29 PM
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
(6, 'WebCraft Pro - Full Stack Fejlesztési Képzés', 'WebCraft Pro egy intenzív, gyakorlati orientált informatikai képzés, amely a résztvevőket a full stack fejlesztés világába vezeti be. A kurzus során részletesen megismerkedhetsz a legmodernebb webfejlesztési technológiákkal és eszközökkel, és megszerezhet', '<style>\r\nheader {\r\n    background-color: #333;\r\n    color: #fff;\r\n    text-align: center;\r\n    padding: 10px;\r\n}\r\n\r\nh5 {\r\n    margin: 0;\r\n}\r\n\r\nsection {\r\n    margin: 20px 0;\r\n    line-height: 1.6;\r\n}\r\n\r\n#short-description, #long-description {\r\n    max-width: 800px;\r\n    margin: 0 auto;\r\n}\r\n\r\np {\r\n    margin-bottom: 15px;\r\n}\r\n</style>\r\n<header>\r\n        <h5>WebCraft Pro - Full Stack Fejlesztési Képzés</h5>\r\n    </header>\r\n    <section id=\"short-description\">\r\n        <p>WebCraft Pro egy intenzív, gyakorlati orientált informatikai képzés, amely a résztvevőket a full stack fejlesztés világába vezeti be. A kurzus során részletesen megismerkedhetsz a legmodernebb webfejlesztési technológiákkal és eszközökkel, és megszerezheted a szükséges készségeket az egyszerű statikus weboldalaktól a dinamikus webalkalmazásokig terjedő projektek létrehozásához.</p>\r\n    </section>\r\n    <section id=\"long-description\">\r\n        <p>A WebCraft Pro Full Stack Fejlesztési Képzés mélyreható betekintést nyújt a webfejlesztés izgalmas világába. A kurzus résztvevői nem csupán elméleti ismereteket szereznek, hanem hands-on gyakorlatokon keresztül valós projekteken dolgoznak, amelyek segítségével a tanultakat azonnal alkalmazhatják.</p>\r\n        <p>A képzés során a résztvevők megismerkednek a HTML, CSS és JavaScript alapjaival, majd fokozatosan elmélyülnek a modern keretrendszerek (pl., React, Angular, Vue.js), szerveroldali fejlesztés (Node.js, Django), adatbázis kezelés (MongoDB, MySQL) és felhőalapú szolgáltatások világában.</p>\r\n        <p>Az oktatás során a mentorok tapasztalt szakemberek, akik nemcsak a technikai részletekben segítenek, hanem a legjobb gyakorlatokat és iparági trendeket is megosztják a résztvevőkkel. A WebCraft Pro diplomával rendelkezők magabiztosan vághatnak neki a full stack fejlesztői pozíciók kihívásainak, és képesek lesznek magas színvonalú webalkalmazások létrehozására.</p>\r\n    </section>'),
(7, 'DataMinds Academy - Adat Tudomány és Analitika Képzés', 'A DataMinds Academy egy magas színvonalú adat tudomány és analitika képzés, amely az adatelemzés és az adatvezérelt döntéshozatal terén szeretne jártasságot szerezni. Tanuld meg az adatok begyűjtését, feldolgozását, elemzését, és fedezd fel, hogyan alkalm', '<style>\r\n        header {\r\n            background-color: #4285f4;\r\n            color: #ffffff;\r\n            padding: 20px;\r\n            text-align: center;\r\n        }\r\n\r\n        section {\r\n            max-width: 800px;\r\n            margin: 20px auto;\r\n            padding: 20px;\r\n            background-color: #fff;\r\n            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\r\n            border-radius: 5px;\r\n        }\r\n\r\n        p {\r\n            line-height: 1.6;\r\n        }\r\n</style>\r\n    <header>\r\n        <h1>DataMinds Academy - Adat Tudomány és Analitika Képzés</h1>\r\n    </header>\r\n\r\n    <section id=\"short-description\">\r\n        <p>A DataMinds Academy egy magas színvonalú adat tudomány és analitika képzés, amely az adatelemzés és az adatvezérelt döntéshozatal terén szeretne jártasságot szerezni...</p>\r\n    </section>\r\n\r\n    <section id=\"long-description\">\r\n        <p>Az adatokban rejlő értékek és lehetőségek felfedezésének művészetét sajátítsd el a DataMinds Academy-n keresztül. A képzés során olyan készségeket fejleszthetsz ki, amelyekre szükséged van az adatok hatékony gyűjtéséhez, feldolgozásához és elemzéséhez. Tanuld meg a legmodernebb adatelemzési eszközök használatát, és fedezd fel, hogyan alkalmazhatod az adatok erejét üzleti problémák megoldására, stratégiai tervezésre és innovációra.</p>\r\n        <p>A DataMinds Academy mentorai elismert adat tudósok és analitikusok, akik segítenek abban, hogy mélyebb megértést szerezz az adatelemzés és az adatvezérelt döntéshozatal terén. Végül, a képzés eredményeként magabiztosan tudsz majd navigálni az adatok világában, és hozzájárulhatsz az adatok intelligens felhasználásához vállalati környezetben.</p>\r\n    </section>');

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

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `title`, `description`, `path`) VALUES
(2, 'Dokumentum 1', 'Dokumentum 1 leírása gdjglk fdgkjh fkjldg  dfgkdfgd gdfkgjdk fdkgjd glkdfjgk dkgdlk gkjdkfgk jdfjg dfj gjdfg lkjdfghdfigj dfg dfgi fdhg dg drg dgo igodgi dgojo goi o godegoedroe rdoi eikoedjg edgijkteoedjgtoeeeeee oitgjoe', 'uploads/files/dokumentum1.docx'),
(3, 'Dokumentum 2', 'Dokumentum 2 leírása adhjsjh jkhghdjfghjk fdhjg dfjgj hdfjhg djfkg jksjk kjsk jfgdjkfg jkdf jgfdjgjdfj gjdfgjk dkjlg kljsfkljskjlfkjskjg dkfgjkdfkg klfdjgkljdkfjl gkjldfkjgs kjlf jklsdkfjskjldflsjkd fljksfljk s', 'uploads/files/dokumentum2.docx');

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
(3, 'Milyen szintű informatikai tudással rendelkeziknek a kezdő tanfolyamokra jelentkező hallgatók?', 'Az informatikai kezdő tanfolyamokra jelentkező hallgatóknak nem szükséges előzetes szakmai tapasztalattal rendelkezniük. A tanfolyamok kifejezetten az alapoktól kezdve építik fel a tudást, és mindenki számára elérhetőek, függetlenül az előzetes informatikai ismeretektől.'),
(4, 'Milyen szoftverfejlesztési nyelveket tanítanak a programozói kurzusokon?', 'Programozói kurzusainkon számos különböző szoftverfejlesztési nyelvet tanítunk, beleértve a Java-t, Python-t, C#-t, JavaScript-et és más népszerű nyelveket. A kurzusok célja a rugalmas tudás megszerzése és az alkalmazkodás a változó piaci igényekhez.'),
(5, 'Hogyan támogatja az intézmény a hallgatókat a szakmai gyakorlatok és projektalapú tanulás során?', 'Az intézmény szoros együttműködést folytat iparági partnerekkel, hogy biztosítsa a hallgatók számára a valóságos projektekben való részvétel lehetőségét. Emellett mentorok segítik a hallgatókat a szakmai gyakorlatok során, biztosítva a személyes támogatást és útmutatást.'),
(6, 'Milyen módon támogatja az intézmény a távoktatási lehetőségeket azoknak, akik nem tudnak személyesen részt venni az órákon?', 'Az intézmény elkötelezett a rugalmas oktatási lehetőségek biztosítása mellett, és online kurzusokat kínál azoknak, akik távolabbról szeretnének részt venni a képzéseken. Az online platformokon keresztül valós időben vagy rögzített órák segítik a távolról tanuló hallgatókat.'),
(7, 'Milyen karrier-támogatást nyújt az intézmény a végzett hallgatóknak?', 'Az intézmény karrier-tanácsadói segítenek a végzett hallgatóknak a munkakeresésben, önéletrajz-írásban, interjútechnikákban és az iparági trendekkel kapcsolatos tanácsadásban. A cégekkel való kapcsolatok révén lehetőségekhez juttatjuk a friss diplomásokat.'),
(8, 'Milyen lehetőségeket kínál az intézmény a folyamatos szakmai fejlődésre az informatikai szektorban?', 'Az intézmény folyamatosan frissíti a tananyagot az iparági változásoknak megfelelően, és számos továbbképzési lehetőséget biztosít a végzett hallgatóknak. Ezenkívül szakmai konferenciákat, workshopokat és egyéb eseményeket szervezünk, hogy a szakemberek mindig naprakészek legyenek az informatikai terület fejleményeivel kapcsolatban.');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE `infrastructure` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `more_imgs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infrastructure`
--

INSERT INTO `infrastructure` (`id`, `title`, `short_description`, `img`, `more_imgs`) VALUES
(5, 'Kreatív Ügynökség Iroda', 'Az iroda egy modern, inspirációtól áthatott környezetet kínál, ahol a kreativitás és innováció az élet szerves részét képezi. A tér elrendezése, a színek és a design elemek harmonikus egyensúlyban vannak, hogy serkentsék a csapat szellemét és ösztönözzék az új ötletek születését.', 'uploads/files/8zu3_pbigov52fy.jpg', 'uploads/photos/sedqgcrht57xzv9.jpg,uploads/photos/7j_k6fwz2ve5xry.jpg,uploads/photos/qboj0vcpndl18sg.jpg,uploads/photos/_rm8zlgb267oa34.jpg'),
(6, 'Startup Központ Iroda', 'Ez a dinamikus iroda egy valódi közösségi szellemet tükröz, ahol kisvállalkozások és startupok egymást támogatják. Nyitott terek, kollaboratív munkaszegletek és rendszeres közösségi események segítik a vállalkozásokat a tapasztalatok és ötletek cseréjében.', 'uploads/files/x9d_a1sp6qkr5vn.jpg', 'uploads/photos/lnuvmyjidap6f01.jpg,uploads/photos/t4vkzd1u90qljgr.jpg,uploads/photos/ynfzea6xpujg74t.jpg,uploads/photos/fnuiz1ewar80pxc.jpg,uploads/photos/zephybn8xgrwlj6.jpg,uploads/photos/s0mytairku93vpx.jpg'),
(7, 'Tradicionális Üzleti Iroda', 'Az iroda elegáns és professzionális környezetet kínál, ahol a hagyományos irodai munkavégzés értékeit tiszteletben tartják. Külön zárt irodák, konferenciatermek és kényelmes közös terek egyaránt megtalálhatók, hogy kielégítsék az üzleti szektor szigorú elvárásait.', 'uploads/files/k13a04xvt9p_izs.jpg', 'uploads/photos/gj3mtloa0p_149y.jpg,uploads/photos/1irycjbp7dof3gm.jpg,uploads/photos/7gkia6rwo0dfh8c.jpg,uploads/photos/lgs_30oxtnfi8kh.jpg,uploads/photos/dlaxzecurv35wp7.jpg,uploads/photos/tzrmx6n7iw34svp.jpg,uploads/photos/_ihy45unga6e0zj.jpg,uploads/ph'),
(8, 'Technológiai Vállalat Fejlesztő Központja', 'Ez a iroda a legmodernebb technológiákat és kényelmi szolgáltatásokat kínálja a szoftvertervezők és fejlesztők számára. Az ergonomikus munkaállomások, a gyors internetkapcsolat és a szakmai fejlődést támogató környezet segít a vállalat szakembereinek a hatékony és innovatív munkavégzésben.', 'uploads/files/jm84zbkx2derv0t.jpg', 'uploads/photos/u7djxqk4fbghml0.jpg,uploads/photos/hemtozfd93y54ci.jpg,uploads/photos/rf4y08_9hj5zn3p.jpg,uploads/photos/md86ygw5i4hrz3n.jpg,uploads/photos/9xc6ubg54fl7vho.jpg,uploads/photos/nfw72xm5j49uv6a.jpg,uploads/photos/791ahnj56tzrg8u.jpg,uploads/ph');

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
(1, 'asdasdagfsgfg', '<h1>asdadasda</h1>', 'uploads/img/tanarok/bloch.png', '0000-00-00'),
(2, 'asdasdagfsgfg', 'asdadasda', '', '0000-00-00'),
(3, 'Teszt', '<p align=\"center\"><b>asdasdasd</b><br></p>', '', '2023-12-31'),
(4, 'Teszt 2', '<p align=\"center\"><span style=\"font-family: &quot;Arial Black&quot;;\">aaaaaaaaa</span><br></p><p><span style=\"font-family: &quot;Verdana&quot;;\">aaaaaaaaa</span><br></p><p align=\"center\">aaaaaaaaa<br></p><ol><li>aaaaaaaaa<br></li><li>aaaaaaaaa<br></li><li>aaaaaaaaa<br></li><li>aaaaaaaaa<br></li></ol><p>aaaaaaaaa<br></p><ul><li>aaaaaaaaa<br></li><li>aaaaaaaaa</li></ul><table class=\"table table-bordered\"><tbody><tr><td>asd<br></td><td>asd<br></td></tr><tr><td>asd<br></td><td>asd<br></td></tr></tbody></table><p>aaaaaaaaa</p><p><img src=\"http://localhost/kiakkweb/dashboard/uploads/files/8ij563legx1hwuf.jpg\" style=\"width: 100%;\" class=\"\"><br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa</p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa<br></p><p>aaaaaaaaa</p><p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p><p></p>', '', '2023-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `oktatok`
--

CREATE TABLE `oktatok` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Nincs név megadva',
  `short_description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oktatok`
--

INSERT INTO `oktatok` (`id`, `name`, `short_description`, `img`) VALUES
(3, 'Teszt Oktató', 'Pár szavas leírás az oktatóról', 'uploads/files/pj92h86tvo0ubyd.jpg'),
(4, 'Teszt Oktató 2', 'Rövid leírás a második oktatóról', 'uploads/files/mqrdxb3n41i5uhf.png'),
(5, 'Oktató 3', 'Pár szavas leírás a harmadik oktatóról', 'uploads/files/t68_wbruzah1ynd.jpg'),
(6, 'Teszt Oktató 5', 'Rövid leírás ide is, mert igen', 'uploads/files/cupj5kyo_r23ln0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2024-04-01 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `email`, `img`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(2, 'admin', 'Admin', '$2y$10$42kULgA/gJM9AcybpT4qde/bRkDVmTMf5Wt/rHey8PcdJrwQFAc1u', 'admin@admin.com', 'http://localhost/kiakkweb/dashboard/uploads/files/cgzhrij7wf5s_eq.png', NULL, NULL, '3000-04-01 00:00:00', NULL);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `infrastructure`
--
ALTER TABLE `infrastructure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oktatok`
--
ALTER TABLE `oktatok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
