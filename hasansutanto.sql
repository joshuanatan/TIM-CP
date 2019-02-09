-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 06:30 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasansutanto`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `lang`, `name`, `description`, `content`, `status`) VALUES
(1, 'en', 'Rev. Hasan Sutanto, D.Th', 'Rev. Sutanto was a full-time lecturer at the Southeast Asia Bible Seminary in Malang, Indonesia, and at the Trinity Theological College, Singapore. Presently, in addition to research and writing, he also actively preaches at numerous churches. He was ordained as a pastor in 1987', 'Rev. Hasan Sutanto, D.Th., is working to facilitate Christians in building their faith, ministries, and lives based on Biblical teachings. He is also passionate about providing Indonesian’s theological education with books written in their native language at affordable prices. ', 1),
(2, 'id', 'Pdt. Hasan Sutanto, D.Th', 'Pdt. Hasan Sutanto pernah mengajar sebagai dosen penuh waktu di Seminari Alkitab Asia Tenggara, Malang, Indonesia, dan Trinity Theological College, Singapura. Kini, selain tekun mengadakan riset dan menulis, Pdt. Hasan Sutanto juga meluangkan waktu untuk pelayanan berkhotbah. Beliau ditahbiskan menjadi pendeta pada tahun 1987.', 'Pdt. Hasan Sutanto, D. Th., berbeban mengajak orang Kristen membangun iman, pelayanan dan kehidupan mereka berdasarkan ajaran Alkitab. Beliau juga berbeban meningkatkan mutu pendidikan teologis di Indonesia dengan cara menyediakan buku-buku yang ditulis dengan bahasa yang dikuasai pembaca dan dengan harga yang terjangkau', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `namatempat` varchar(110) NOT NULL,
  `alamat` text NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `versi` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `namatempat`, `alamat`, `kabupaten`, `kodepos`, `telp`, `fax`, `email`, `versi`, `status`) VALUES
(1, 'Departemen Literatur SAAT', 'Jln. Anggrek Merpati No. 12\r\n', 'Malang ', 65141, '0341-490750', '0341-494129', 'literatursaat@yahoo.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `page` text NOT NULL,
  `section` varchar(50) NOT NULL,
  `elemen` varchar(50) NOT NULL,
  `sequence` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `lang`, `page`, `section`, `elemen`, `sequence`, `content`, `status`) VALUES
(1, 'en', 'home', 'banner', 'smallheader', 1, 'TIM IKHLAS MENGABDI', 1),
(2, 'en', 'home', 'banner', 'smallheader', 2, 'an informal fellowship formed by several laymen Christians, who shared Rev. Hasan Sutanto, D.Th.’s calling of ministering to Indonesian seminarians by providing reference books offered with subsidies.', 1),
(3, 'en', 'home', 'banner', 'header', 1, 'TIM', 1),
(5, 'en', 'home', 'support', 'header', 1, 'WHAT ARE WE DOING', 1),
(6, 'en', 'home', 'support', 'header', 2, 'facilitate Christians in building their faith, ministries, and lives based on Biblical teachings', 1),
(20, 'en', 'home', 'about-continue', 'header', 1, 'Academic Background', 1),
(21, 'en', 'home', 'about-continue', 'header', 2, 'Ministry Background', 1),
(22, 'en', 'home', 'about-continue', 'header', 3, 'Subjects Taught', 1),
(23, 'en', 'home', 'about-continue', 'header', 4, 'Research', 1),
(24, 'en', 'home', 'about-continue', 'header', 5, 'Publications in Indonesian', 1),
(25, 'en', 'home', 'about-continue', 'header', 6, 'Translations into Indonesian', 1),
(26, 'en', 'home', 'about-continue', 'header', 7, 'Language', 1),
(51, 'en', 'home', 'about-continue-detail', 'content', 1, 'John R.W. Stott, What Christ Thinks of the Church. Indonesian title: Bagaimana Pandangan Kristus akan Gereja? 1988, 142 pages.\r\n', 1),
(52, 'en', 'home', 'about-continue-detail', 'content', 2, 'Derek & Nancy Copley, Building with Bananas. Indonesian title: Membangun dengan Pisang:Masalah Antara Manusia dalam Gereja, 1989, 171 pages.', 1),
(59, 'en', 'footer', 'about-us', 'content', 1, 'Rev. Hasan Sutanto, D.Th., is working to facilitate Christians in building their faith, ministries, and lives based on Biblical teachings. He is also passionate about providing Indonesian’s theological education with books written in their native language at affordable prices. ', 1),
(60, 'en', 'distributions', 'distributions-content-section', 'content', 1, 'All Pdt. Hasan Sutanto, D.Th.\'s creations can be bought in stores spread in Indonesia. TIM also gives special prices student who is currently studying in seminary. Terms and condition can be read below. All the orders can be make through our email', 1),
(61, 'en', 'distributions', 'distributions-content-section', 'content', 2, 'tim.for.book@gmail.com', 1),
(68, 'id', 'home', 'banner', 'smallheader', 2, 'TIM adalah sebuah persekutuan informal yang dibentuk oleh beberapa orang Kristen yang mendukung pelayanan Pdt. Hasan Sutanto di bidang riset dan penulisan.<br/> Dukungan ini termasuk memberi subsidi kepada mahasiswa/i teologi, yang sedang studi di Indonesia, untuk memesan buku-buku beliau.', 1),
(69, 'id', 'home', 'banner', 'smallheader', 1, 'TIM IKHLAS MENGABDI', 1),
(70, 'id', 'home', 'banner', 'header', 1, 'TIM', 1),
(71, 'id', 'home', 'support', 'header', 1, 'YANG KAMI KERJAKAN', 1),
(72, 'id', 'home', 'support', 'header', 2, 'memfasilitasi Orang Kristen dalam membangun iman, pelayanan, dan kehidupan mereka berdasarkan pengajaran Alkitab', 1),
(73, 'id', 'distributions', 'distributions-content-section', 'content', 1, 'Buku-buku yang ditulis Pdt. Hasan Sutanto, D.Th. dapat dibeli di toko-toko buku di Indonesia. Selain diedarkan dengan harga biasa, TIM memberikan subsidi kepada mahasiswa/i teologi yang sedang studi di sekolah tinggi teologi, seminari, dan sekolah Alkitab.\r\nPemesanan edisi harga khusus ini perlu memenuhi persyaratan tertentu . (Silakan membaca persyaratan yang tercantum di bawah). <br/><br/> Pemesanan buku baik yang berharga biasa maupun yang berharga khusus dapat dilakukan langsung kepada TIM melalui email ', 1),
(74, 'id', 'distributions', 'distributions-content-section', 'content', 2, 'tim.for.book@gmail.com', 1),
(75, 'id', 'home', 'about-continue', 'header', 1, 'Latar Belakang Pendidikan', 1),
(76, 'id', 'home', 'about-continue', 'header', 2, 'Latar Belakang Pelayanan', 1),
(77, 'id', 'home', 'about-continue', 'header', 3, 'Materi yang Diajarkan', 1),
(78, 'id', 'home', 'about-continue', 'header', 4, 'Penelitian', 1),
(79, 'id', 'home', 'about-continue', 'header', 5, 'Publikasi dalam Bahasa Indonesia', 1),
(80, 'id', 'home', 'about-continue', 'header', 6, 'Terjemahan ke Indonesia', 1),
(82, 'id', 'home', 'about-continue', 'header', 7, 'Bahasa', 1),
(83, 'zh', 'home', 'banner', 'smallheader', 1, '?????? Tim Ikhlas Mengabdi (?? TIM)', 1),
(84, 'zh', 'home', 'banner', 'smallheader', 2, '??????(??TIM)??????????????????????????????/??????????????????????????????????????????', 1),
(85, 'zh', 'home', 'banner', 'header', 1, 'TIM', 1),
(86, 'zh', 'home', 'support', 'header', 1, '????', 1),
(87, 'zh', 'home', 'support', 'header', 2, '????\n?????/???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ?', 1),
(88, 'zh', 'home', 'about-continue', 'header', 1, '??', 1),
(89, 'zh', 'home', 'about-continue', 'header', 2, '????', 1),
(90, 'zh', 'home', 'about-continue', 'header', 2, '????', 1),
(91, 'zh', 'home', 'about-continue', 'header', 2, '??', 1),
(92, 'zh', 'home', 'about-continue', 'header', 2, '??', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `university` text NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `lang`, `degree`, `university`, `start_year`, `end_year`, `status`) VALUES
(1, 'en', 'D. Th', 'South East Asia Graduate School of Theology', 2001, 2006, 1),
(2, 'en', 'M. Th', 'Princeton Theological Seminary', 1983, 1984, 1),
(3, 'en', 'M. Div', 'New Brunswick Theological Seminary', 1982, 1983, 1),
(4, 'id', 'M. Div', 'New Brunswick Theological Seminary', 1982, 1983, 1),
(5, 'id', 'D. Th', 'South East Asia Graduate School of Theology', 2001, 2006, 1),
(6, 'id', 'M. Th', 'Princeton Theological Seminary', 1983, 1984, 1),
(7, 'id', 'M.A. di bidang Agama', 'Azusa Pacific University', 1979, 1980, 1),
(8, 'en', 'M.A. in Religion', 'Azusa Pacific University', 1978, 1979, 1),
(9, 'en', 'M.A. in Religion', 'Azusa Pacific University', 1979, 1980, 1),
(10, 'id', 'B.A. di bidang Agama', 'Azusa Pacific University', 1978, 1979, 1),
(11, 'id', 'B. Th', 'Seminari Alkitab Asia Tenggara', 1973, 1977, 1),
(12, 'en', 'B. Th', 'South East Asia Bible Seminary', 1973, 1977, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `elemen` varchar(100) NOT NULL,
  `sequence` int(11) NOT NULL,
  `versi` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `page`, `elemen`, `sequence`, `versi`, `content`, `status`) VALUES
(1, 'home', 'answer', 1, 1, 'For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.', 1),
(2, 'home', 'answer', 2, 1, 'For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.', 1),
(3, 'home', 'answer', 3, 1, 'For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.', 1),
(4, 'home', 'answer', 4, 1, 'For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `bahasa` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `lang`, `bahasa`, `status`) VALUES
(1, 'id', 'Bahasa Indonesia', 1),
(2, 'id', 'Tionghoa', 1),
(3, 'id', 'Inggris', 1),
(4, 'id', 'Hokian', 1),
(5, 'id', 'Hakka', 1),
(6, 'en', 'Indonesian', 1),
(7, 'en', 'Mandarin', 1),
(8, 'en', 'English', 1),
(9, 'en', 'Hokian', 1),
(10, 'en', 'Hakka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `links` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `lang`, `nama`, `links`, `status`) VALUES
(1, 'en', 'home', 'index', 1),
(2, 'en', 'cv', 'aboutus', 1),
(3, 'en', 'publications', 'projects', 1),
(4, 'en', 'distribution', 'distribution', 1),
(5, 'en', 'sermons', 'sermons', 1),
(6, 'en', 'contact us', 'contact', 1),
(7, 'id', 'beranda', 'index', 1),
(8, 'id', 'cv', 'aboutus', 1),
(9, 'id', 'karya tulis', 'projects', 1),
(10, 'id', 'distribusi', 'distribution', 1),
(11, 'id', 'khotbah', 'sermons', 1),
(12, 'id', 'hubungi kami', 'contact', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `notelp` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `tglsubmit` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nama`, `email`, `notelp`, `message`, `tglsubmit`, `status`) VALUES
(1, 'jn', 'joshuanatan.jn@gmail.com', '1', 'eawfawef', '2018-10-20', 1),
(2, 'test23', 'joshuanatan.jn@gmail.com', '12321', 'awefwaefa', '2018-10-20', 1),
(3, 'awefawef', 'joshua_natan98@yahoo.com', '324234234', 'aewfawefawefawef', '2018-10-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ministry`
--

CREATE TABLE `ministry` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `job` text NOT NULL,
  `place` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministry`
--

INSERT INTO `ministry` (`id`, `lang`, `job`, `place`, `city`, `start_year`, `end_year`, `status`) VALUES
(1, 'en', 'Lecturer', 'Trinity Theological College', 'Singapore', 2007, 2010, 1),
(2, 'id', 'Dosen purna waktu', 'Trinity Theological College', 'Singapore', 2007, 2010, 1),
(3, 'id', 'Dosen purna waktu', 'Seminari Alkitab Asia Tenggara', 'Malang', 1984, 1995, 1),
(5, 'en', 'Lecturer', 'South East Asia Bible Seminary', 'Malang', 1984, 1995, 1),
(6, 'en', 'Associate Pastor', 'the Jakarta Christian Church', 'Malang', 1980, 1980, 1),
(7, 'id', 'Guru Injil', 'Gereja Kristen Jakarta', 'Jakarta', 1980, 1981, 1),
(8, 'id', 'Guru Injil', 'Gereja Persekutuan Kristen', 'Pangkalpinang', 1977, 1978, 1),
(9, 'en', 'Associate Pastor', 'Christian Fellowship Church', 'Pangkalpinang', 1977, 1978, 1),
(10, 'en', 'Joint work with the Indonesian Bible Society in translating and compiling Interlinear Greek-Indonesian New Testament and New Testament Concordance (Vol. I, II), ', '', '', 1995, 2003, 1),
(11, 'id', 'Bekerja sama dengan Lembaga Alkitab Indonesia menerjemah dan menyusun Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru (PBIK), Vol. I, II ', '', '', 1995, 2003, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `desk_singkat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_promo` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `lang`, `materi`, `image`, `judul`, `desk_singkat`, `deskripsi`, `harga`, `harga_promo`, `status`) VALUES
(1, 'en', 'Hermeneutic', 'hermeneutik.jpg', 'Hermeneutic: Principles and Methods of Interpretation of the Bible', 'Principles and Methods of Interpretation of the Bible', 'Christians must understand the Bible, which is the foundation of their faith, theology, moral and lives. Hence, they have to learn how to interpret the Bible.  Hermeneutic: Principles and Methods of Interpretation of the Bible, which is written in Indonesian, include a variety of topics that are essential for an interpreter. This book is written in plain language, elaborated with detailed explanations, various examples, and a complemented with detailed footnotes. With a conservative stance and an open attitude to recent interpretation, this book is useful for any preachers, Sunday School teachers, students atseminaries, and also any Christians who long to know God’s word.', 66000, 37500, 1),
(2, 'en', 'PBIK-Indonesia', 'pbikedited.jpg', 'Interlinear Greek-Indonesian New Testament and New Testament Concordance (Indonesia)', 'Greek-Indonesian New Testament and New Testament Concordance ', 'This version consists of two volumes. Every page of the first volume has seven sets of data. The first four sets of data have been arranged in four rows, namely the New Testament (NT) Greek (Fourth Revised Edition), an interlinear translation (word for word),  concordance entry numbers, and abbreviations related to various grammatical fields. The other three sets of data are Indonesian New Translation (TB), Indonesian Daily Language Version  (BIS), and The Holy Bible, New International Version (NIV). The second volume consists of entry number, entry, of its transliteration, frequency in the New Testament, meaning,  and in some cases its brief information. Then, quotations are based on the Greek New Testament word from Indonesian New Translation.\r\n\r\nThis two volume-book of Interlinear Greek-Indonesian New Testament and New Testament Concordance should be used together in studying the New Testament. A discussion on the benefits of using this version may be found in Chapter I, 6, in books Hermeneutic: Principles and Methods in Interpretation of the Bible (Revised Edition). It may provide information needed for the preparation of sermons or Sunday school materials. It is written for readers, both clergymen, and laymen, who may not be so familiar to Greek.', 485000, 385000, 1),
(3, 'en', 'Homiletics', 'Homiletik.jpg', 'Homiletics: Principles and Methods of Preaching', 'Principles and Methods of Preaching', 'This book emphasizes the importance of the personality of a preacher. It is he or she, who has a sincere dedication and good training, that may deliver a high-quality sermon. The sermon is not a speech. Sermons must be made based on in-depth interpretation. Without exploring the Bible in depth, a sermon will not be effective in reaching out to the heart and mind of the audience. A preacher also needs to pay attention to communication. Preaching is not just limited to a textual, expository, and topical sermon. There are countless types of sermons, and among them, a narrative preaching. This book gives clear and practical information for writing and delivering sermons. That’s why the book Homiletics: Principles and Methods of Preaching may be useful both for students who are studying at a seminary and layman who are called to serve God. And since the beginning, Hermeneutic; Interlinear Greek-Indonesian New Testament and New Testament Concordance, and Homiletics have been prepared as a unit to respond to the calling of the Lord to equip His people.', 54000, 32500, 1),
(4, 'en', 'The Epistle of James', 'SY.jpg', 'The Epistle of James: A Reconciling Message that Deserves to be Heard\r\n\r\n', ' A Reconciling Message that Deserves to be Heard', 'Through his letter, James, the brother of the Lord Jesus, delivered the message of peace to his readers at the time, Jewish Christians, who are consist of both the rich and the poor. Unfortunately, this reconciling message has not been understood properly as many interpreters have not fully appreciated the background of this epistle. The book of The Epistle of James: A Reconciling Message that Deserves to be Heard invites us to pay attention to the identity of the author of the book and the events of martyrdom, the social dynamics of first-century Jewish community which consist of the rich and the poor, as well as James’s communication patterns and his way of thinking. With a more objective approach, modern readers will be able to learn James’s reconciling message that remains relevant until today.', 48000, 27500, 1),
(5, 'en', 'PBIK-Chinnese', 'pbikedited.jpg', 'Interlinear Greek-Indonesian New Testament and New Testament Concordance (Tionghoa)', 'Greek-Indonesian New Testament and New Testament Concordance ', 'This version has a similar format to Interlinear Greek-Indonesian New Testament and New Testament Concordance. Except,  the former version has adopted two Chinese version, namely Union Version, New Chinese Version, and English Standard Version (ESV)', 600000, 0, 1),
(7, 'id', 'Hermeneutik', 'hermeneutik.jpg', 'Hermeneutik: Prinsip dan Metode Penafsiran Alkitab ', 'Alkitab merupakan dasar iman, teologi, perbuatan, dan kehidupannya. Itu sebabnya orang Kristen harus mengenal penafsiran Alkitab', 'Alkitab merupakan dasar iman, teologi, perbuatan, dan kehidupannya. Itu sebabnya orang Kristen harus mengenal penafsiran Alkitab. Isi buku Hermeneutik: Prinsip dan Metode Penafsiran Alkitab mencakup berbagai hal yang perlu diketahui seorang penafsir. Pembahasan mengenai prinsip dan metode penafsiran Alkitab dalam buku ini didukung bermacam topik, di antaranya, persiapan penafsir, buku referensi yang dibutuhkan, pengenalan sejarah penafsiran, dan berbagai contoh. Buku ini ditulis dengan bahasa yang sederhana, penjelasan yang mendetail, dan catatan kaki yang lengkap. Dengan pendirian yang konservatif dan sikap yang terbuka terhadap perkembangan dunia penafsiran, buku ini berguna bagi pengkhotbah, guru Sekolah Minggu, mahasiswa/i yang sedang studi di seminari, dan juga orang Kristen yang rindu lebih mengenal firman Tuhan.', 66000, 37500, 1),
(8, 'id', 'PBIK-Indonesia', 'pbikedited.jpg', 'Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru (PBIK-Indonesia)', 'Jilid pertama buku ini terdiri atas PB bahasa Yunani, dan juga terjemahan kata per kata serta tiga terjemahan lain. Jilid kedua buku ini merupakan konkordansi yang menolong pembaca mengadakan studi kata. Itu sebabnya buku ini berguna untuk mempersiapkan khotbah, PA kelompok, dan studi biblikal.', 'Jilid pertama buku ini terdiri atas PB bahasa Yunani, dan juga terjemahan kata per kata serta tiga terjemahan lain. Jilid kedua buku ini merupakan konkordansi yang menolong pembaca mengadakan studi kata. Itu sebabnya buku ini berguna untuk mempersiapkan khotbah, PA kelompok, dan studi biblikal.', 485000, 385000, 1),
(9, 'id', 'Homiletik', 'Homiletik.jpg', 'Homiletik: Prinsip dan Metode Berkhotbah ', 'Buku ini menekankan pentingnya personalitas pengkhotbah. Pengkhotbah yang berbobot menyampaikan khotbah yang berkualitas.', 'Buku ini menekankan pentingnya personalitas pengkhotbah. Pengkhotbah yang berbobot menyampaikan khotbah yang berkualitas. Khotbah tidak sama dengan pidato. Khotbah harus dibuat berdasarkan penafsiran yang bermutu. Tanpa menggali kekayaan Alkitab, isi khotbah akan menjadi dangkal. Selain unsur penafsiran dan pesan, pengkhotbah juga perlu memperhatikan komunikasi. Khotbah tidak hanya terbatas pada khotbah tekstual, ekspositori, dan topikal. Ada banyak macam khotbah, di antaranya, khotbah naratif. Buku ini dilengkapi dengan langkah-langkah praktis menulis dan menyampaikan khotbah. Itu sebabnya buku Homiletik: Prinsip dan Metode Berkhotbah berguna baik bagi mahasiswa/i yang sedang studi di seminari maupun kaum awam yang terpanggil melayani Tuhan.', 54000, 32500, 1),
(10, 'id', 'Surat Yakobus', 'SY.jpg', 'Surat Yakobus: Berita Perdamaian yang Patut didengar ', 'Melalui suratnya, Yakobus, saudara Tuhan Yesus, menyampaikan berita perdamaian kepada pembacanya yang terdiri atas orang Kristen Yahudi yang kaya dan yang miskin.', 'Melalui suratnya, Yakobus, saudara Tuhan Yesus, menyampaikan berita perdamaian kepada pembacanya yang terdiri atas orang Kristen Yahudi yang kaya dan yang miskin. Sayang, berita ini belum diperhatikan dengan baik, karena penafsir kitab ini belum menggunakan pendekatan yang memadai. Buku Surat Yakobus: Berita Perdamaian yang Patut Didengar mengajak pembaca menaruh perhatian kepada identitas penulis kitab dan peristiwa mati syahidnya, dinamika sosial masyarakat orang Yahudi abad pertama, serta pola komunikasi dan jalan pikiran kitab ini. Dengan pendekatan yang lebih objektif, diharapkan pembaca modern dapat menemukan berita perdamaian Surat Yakobus yang masih tetap relavan sampai sekarang.', 48000, 27500, 1),
(11, 'id', 'PBIK-Tionghoa', 'pbikedited.jpg', 'Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru (PBIK Tionghoa) ', 'Jilid pertama buku ini terdiri atas PB bahasa Yunani, dan juga terjemahan kata per kata serta tiga terjemahan lain. Jilid kedua buku ini merupakan konkordansi yang menolong pembaca mengadakan studi kata. Itu sebabnya buku ini berguna untuk mempersiapkan khotbah, PA kelompok, dan studi biblikal.', 'Jilid pertama buku ini terdiri atas PB bahasa Yunani, dan juga terjemahan kata per kata serta tiga terjemahan lain. Jilid kedua buku ini merupakan konkordansi yang menolong pembaca mengadakan studi kata. Itu sebabnya buku ini berguna untuk mempersiapkan khotbah, PA kelompok, dan studi biblikal.', 600000, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `job` text NOT NULL,
  `place` text NOT NULL,
  `month_start` varchar(100) NOT NULL,
  `year_start` int(11) NOT NULL,
  `month_end` varchar(100) NOT NULL,
  `year_end` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `lang`, `job`, `place`, `month_start`, `year_start`, `month_end`, `year_end`, `status`) VALUES
(1, 'id', 'Sarjana Pengunjung', 'Princeton Theological Seminary', 'Mei', 2014, 'Desember', 2014, 1),
(2, 'id', 'Sarjana Pengunjung', 'Princeton Theological Seminary', 'September', 2011, 'November', 2011, 1),
(3, 'id', 'Sarjana Pengunjung', 'Princeton Theological Seminary', 'Mei', 2005, 'Oktober', 2005, 1),
(4, 'id', 'Sarjana Pengunjung', 'Princeton Theological Seminary', 'Maret', 2001, 'Agustus', 2002, 1),
(5, 'en', 'Visiting Scholar', 'Princeton Theological Seminary', 'May', 2014, 'December', 2014, 1),
(6, 'en', 'Visiting Scholar', 'Princeton Theological Seminary', 'September', 2011, 'November', 2011, 1),
(7, 'en', 'Visiting Scholar', 'Princeton Theological Seminary', 'May', 2005, 'October', 2005, 1),
(8, 'en', 'Visiting Scholar', 'Princeton Theological Seminary', 'March', 2001, 'August', 2002, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `nama` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `lang`, `nama`, `status`) VALUES
(1, 'id', 'Homiletik', 1),
(2, 'id', 'Hermeneutik', 1),
(3, 'id', 'Surat Yakobus', 1),
(4, 'id', 'Surat-surat Paulus', 1),
(5, 'id', 'Introduksi Perjanjian Baru', 1),
(6, 'en', 'Homiletics', 1),
(7, 'en', 'Hermeneutics', 1),
(8, 'en', 'The Epistle of James', 1),
(9, 'en', 'Pauline Epistles', 1),
(10, 'en', 'Introductory Courses to New Testament', 1);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `terms` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `lang`, `terms`, `status`) VALUES
(1, 'id', 'Penawaran ini berlaku selama persediaan masih ada', 1),
(2, 'id', 'Penawaran ini hanya ditujukan kepada mahasiswa/i yang sedang studi di sekolah tinggi teologi, seminari, atau sekolah Alkitab di Indonesia', 1),
(3, 'id', 'Pemesan harus melampirkan fotokopi kartu mahasiswa/i, yang kemudian dibubuhi dengan tanda tangan mahasiswa/i yang bersangkutan, tanda tangan dekan mahasiswa/i serta cap lembaga pendidikan yang bersangkutan', 1),
(4, 'id', 'Setiap mahasiswa/i hanya dapat membeli satu set atau satu eksemplar buku-buku yang disubsidi ini', 1),
(5, 'id', 'Sangat dianjurkan pemesanan secara kolektif.', 1),
(10, 'en', 'This offer is valid while the stock is available', 1),
(11, 'en', 'This offer is made for students, who presently studies at a seminary or a Bible school in Indonesia', 1),
(12, 'en', 'The order should be sent together with a photocopy of the student ID card, which has the signatures of the student and the dean of students, and also the official stamp of the seminary', 1),
(13, 'en', 'Each student is limited to one set/one copy for each title at subsidized prices', 1),
(14, 'en', 'A collective order is highly recommended.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `translate`
--

CREATE TABLE `translate` (
  `id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `pengarang` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `tahun_revisi` varchar(200) NOT NULL,
  `halaman` int(11) NOT NULL,
  `content` text NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `translate`
--

INSERT INTO `translate` (`id`, `lang`, `pengarang`, `tahun`, `tahun_revisi`, `halaman`, `content`, `tipe`, `status`) VALUES
(1, 'en', 'John R.W. Stott', 1988, '', 142, ' What Christ Thinks of the Church. Indonesian title: Bagaimana Pandangan Kristus akan Gereja?\r\n', 'translate', 1),
(2, 'en', 'Derek & Nancy Copley', 1989, '', 171, 'Building with Bananas. Indonesian title: Membangun dengan Pisang:Masalah Antara Manusia dalam Gereja.', 'translate', 1),
(62, 'id', 'John R.W. Stott', 1988, '', 142, 'Bagaimana Pandangan Kristus akan Gereja? ', 'translate', 1),
(63, 'id', 'Derek & Nancy Copley', 1989, '', 171, 'Membangun dengan Pisang: Masalah Antara Manusia dalam Gereja.', 'translate', 1),
(64, 'id', 'Hasan Sutanto', 1986, '2007, 2011, 2015, 2016', 457, 'Hermeneutik: Prinsip dan Metode Penafsiran Alkitab', 'publikasi', 1),
(65, 'en', 'Hasan Sutanto', 1986, '2007, 2011, 2015, 2016', 457, 'Hermeneutics: Principles and Methodologies of Biblical Interpretation', 'publikasi', 1),
(66, 'id', 'Hasan Sutanto', 2003, '2004, 2006, 2009, 2014 ', 2145, 'Perjanjian Baru Interlinear Yunani-Indonesia dan Konkordansi Perjanjian Baru  (PBIK-Indonesia) (Vol. I, II)', 'publikasi', 1),
(67, 'en', 'Hasan Sutanto', 2003, '2004, 2006, 2009, 2014 ', 2145, 'Interlinear Greek-Indonesian New Testament and New Testament Concordance (Vol. I, II)', 'publikasi', 1),
(68, 'en', 'Hasan Sutanto', 2004, '2007, 2012, 2017', 397, 'Homiletics: Principles and Methodologies of Preaching', 'publikasi', 1),
(69, 'id', 'Hasan Sutanto', 2004, '2007, 2012, 2017', 397, 'Homiletik: Prinsip dan Metode Berkhotbah', 'publikasi', 1),
(70, 'id', 'Hasan Sutanto', 2006, '2008', 345, 'Surat Yakobus: Berita Perdamaian yang Patut Didengar', 'publikasi', 1),
(71, 'en', 'Hasan Sutanto', 2006, '2008', 345, 'The Epistle of James: A Reconciling Message that Deserves to be Heard', 'publikasi', 1),
(72, 'id', 'Hasan Sutanto', 2017, '', 2170, 'Perjanjian Baru Interlinear Yunani-Tionghoa dan Konkordansi Perjanjian Baru  (PBIK-Tionghoa) (Vol. I, II)', 'publikasi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `judul`, `link`, `tanggal`, `status`) VALUES
(2, 'Pdt Hasan Sutanto Diotrefes Yang Melawan Kebenaran', 'https://www.youtube.com/embed/h5UMhpsVWD4', '2017-11-26', 1),
(3, 'Pdt Hasan Sutanto KU1 Jehovah Nissi – Tuhan Panjiku', 'https://www.youtube.com/embed/dFqB2pVuk_s', '2018-10-20', 1),
(4, '\"Berani Hidup Dalam Anugerah\" - Pdt. Hasan Sutanto - GKBJ Kelapa Gading', 'https://www.youtube.com/embed/2NsNxUif4F0', '2016-08-21', 1),
(5, '\"Epifani Memberi Kehidupan\" Markus 1:4-11 Pdt Hasan Susanto', 'https://www.youtube.com/embed/9vGChIVsrIM', '2018-01-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministry`
--
ALTER TABLE `ministry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translate`
--
ALTER TABLE `translate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ministry`
--
ALTER TABLE `ministry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `translate`
--
ALTER TABLE `translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
