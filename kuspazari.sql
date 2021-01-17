-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2021, 21:17:59
-- Sunucu sürümü: 10.3.16-MariaDB
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kuspazari`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'kuspazari', 1453);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `faceapp` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facekey` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `linq` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `site_durum` int(11) NOT NULL,
  `fbactive` int(1) NOT NULL,
  `host` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `user` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 NOT NULL,
  `db` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `title`, `descr`, `faceapp`, `facekey`, `linq`, `site_durum`, `fbactive`, `host`, `user`, `pass`, `db`) VALUES
(1, 'test', 'testdsadsa', '187733925387813', '3d411ca763c42a21cbf0eb01e9043585', 'https://www.kuspazari.pet', 2, 1, 'localhost', 'root', '', 'kuspazari');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `il`
--

CREATE TABLE `il` (
  `id` bigint(20) NOT NULL,
  `il_adi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `slug` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `il`
--

INSERT INTO `il` (`id`, `il_adi`, `slug`) VALUES
(1, 'Adana', 'adana'),
(2, 'Adıyaman', 'adiyaman'),
(3, 'Afyonkarahisar', 'afyonkarahisar'),
(4, 'Ağrı', 'agri'),
(5, 'Amasya', 'amasya'),
(6, 'Ankara', 'ankara'),
(7, 'Antalya', 'antalya'),
(8, 'Artvin', 'artvin'),
(9, 'Aydın', 'aydin'),
(10, 'Balıkesir', 'balikesir'),
(11, 'Bilecik', 'bilecik'),
(12, 'Bingöl', 'bingol'),
(13, 'Bitlis', 'bitlis'),
(14, 'Bolu', 'bolu'),
(15, 'Burdur', 'burdur'),
(16, 'Bursa', 'bursa'),
(17, 'Çanakkale', 'canakkale'),
(18, 'Çankırı', 'cankiri'),
(19, 'Çorum', 'corum'),
(20, 'Denizli', 'denizli'),
(21, 'Diyarbakır', 'diyarbakir'),
(22, 'Edirne', 'edirne'),
(23, 'Elazığ', 'elazig'),
(24, 'Erzincan', 'erzincan'),
(25, 'Erzurum', 'erzurum'),
(26, 'Eskişehir', 'eskisehir'),
(27, 'Gaziantep', 'gaziantep'),
(28, 'Giresun', 'giresun'),
(29, 'Gümüşhane', 'gumushane'),
(30, 'Hakkari', 'hakkari'),
(31, 'Hatay', 'hatay'),
(32, 'Isparta', 'isparta'),
(33, 'Mersin', 'mersin'),
(34, 'İstanbul', 'istanbul'),
(35, 'İzmir', 'izmir'),
(36, 'Kars', 'kars'),
(37, 'Kastamonu', 'kastamonu'),
(38, 'Kayseri', 'kayseri'),
(39, 'Kırklareli', 'kirklareli'),
(40, 'Kırşehir', 'kirsehir'),
(41, 'Kocaeli', 'kocaeli'),
(42, 'Konya', 'konya'),
(43, 'Kütahya', 'kutahya'),
(44, 'Malatya', 'malatya'),
(45, 'Manisa', 'manisa'),
(46, 'Kahramanmaraş', 'kahramanmaras'),
(47, 'Mardin', 'mardin'),
(48, 'Muğla', 'mugla'),
(49, 'Muş', 'mus'),
(50, 'Nevşehir', 'nevsehir'),
(51, 'Niğde', 'nigde'),
(52, 'Ordu', 'ordu'),
(53, 'Rize', 'rize'),
(54, 'Sakarya', 'sakarya'),
(55, 'Samsun', 'samsun'),
(56, 'Siirt', 'siirt'),
(57, 'Sinop', 'sinop'),
(58, 'Sivas', 'sivas'),
(59, 'Tekirdağ', 'tekirdag'),
(60, 'Tokat', 'tokat'),
(61, 'Trabzon', 'trabzon'),
(62, 'Tunceli', 'tunceli'),
(63, 'Şanlıurfa', 'sanliurfa'),
(64, 'Uşak', 'usak'),
(65, 'Van', 'van'),
(66, 'Yozgat', 'yozgat'),
(67, 'Zonguldak', 'zonguldak'),
(68, 'Aksaray', 'aksaray'),
(69, 'Bayburt', 'bayburt'),
(70, 'Karaman', 'karaman'),
(71, 'Kırıkkale', 'kirikkale'),
(72, 'Batman', 'batman'),
(73, 'Şırnak', 'sirnak'),
(74, 'Bartın', 'bartin'),
(75, 'Ardahan', 'ardahan'),
(76, 'Iğdır', 'igdir'),
(77, 'Yalova', 'yalova'),
(78, 'Karabük', 'karabuk'),
(79, 'Kilis', 'kilis'),
(80, 'Osmaniye', 'osmaniye'),
(81, 'Düzce', 'duzce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilan`
--

CREATE TABLE `ilan` (
  `id` int(11) NOT NULL,
  `ilanid` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uyeid` int(11) NOT NULL,
  `kusturu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` int(11) NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yas` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `il` int(11) NOT NULL,
  `ilce` int(11) DEFAULT NULL,
  `gnumara` int(1) NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `hit` int(11) NOT NULL DEFAULT 1,
  `onay` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilan`
--

INSERT INTO `ilan` (`id`, `ilanid`, `uyeid`, `kusturu`, `baslik`, `aciklama`, `fiyat`, `cinsiyet`, `yas`, `il`, `ilce`, `gnumara`, `url`, `tarih`, `hit`, `onay`) VALUES
(54, '0QXlX5', 32, 'Muhabbet', 'Sağlıklı Muhabbet Kuşu', '\r\nSağlıklı, hareketli, ele alışkın bir muhabbet kuşu', 45, '1', '1 Yaşında', 6, 59, 1, '', '2018-06-15', 263, 1),
(53, 'vUmklT', 31, 'Sultan Papağan', 'Tüm eşyalarıyla satılık', 'Oglumuzda olusan allerji nedeniyle bize maliyetinin cok altinda satiyoruz. Ev uretimi, kapali bilezik, son derece sağlıklı ve evcil.', 300, '1', '6 Aylık', 6, 60, 1, '', '2018-06-12', 302, 1),
(57, 'yiv7iK', 35, 'Sultan Papağan', 'test 1', '65456', 465, '0', '1 Aylık', 42, 556, 0, '', '2019-07-04', 7, 1),
(58, 'kIIWWJ', 35, 'Sultan Papağan', 'test 2', 'test', 100, '1', '6 Aylık', 42, 556, 1, '', '2019-07-05', 35, 1),
(59, '5yuP3U', 35, 'Sultan Papağan', 'test 3', 'dasda', 465, '2', '2 Aylık', 42, 557, 1, '', '2019-07-05', 9, 1),
(60, 'sCRJi3', 35, 'Sultan Papağan', 'test 4', 'dsadasd', 1000, '2', '4 Aylık', 42, 558, 1, '', '2019-07-05', 9, 1),
(61, 'm5MHx8', 35, 'Sultan Papağan', 'test5', 'dasdas', 100, '2', '4 Aylık', 42, 0, 1, '', '2019-07-05', 42, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilce`
--

CREATE TABLE `ilce` (
  `id` bigint(20) NOT NULL,
  `il_id` bigint(20) DEFAULT NULL,
  `ilce_adi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `slug` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ilce`
--

INSERT INTO `ilce` (`id`, `il_id`, `ilce_adi`, `slug`) VALUES
(1, 1, 'Seyhan', 'seyhan'),
(2, 1, 'Yüreğir', 'yuregir'),
(3, 1, 'Sarıçam', 'saricam'),
(4, 1, 'Çukurova', 'cukurova'),
(5, 1, 'Aladağ(Karsantı)', 'aladagkarsanti'),
(6, 1, 'Ceyhan', 'ceyhan'),
(7, 1, 'Feke', 'feke'),
(8, 1, 'İmamoğlu', 'imamoglu'),
(9, 1, 'Karaisalı', 'karaisali'),
(10, 1, 'Karataş', 'karatas'),
(11, 1, 'Kozan', 'kozan'),
(12, 1, 'Pozantı', 'pozanti'),
(13, 1, 'Saimbeyli', 'saimbeyli'),
(14, 1, 'Tufanbeyli', 'tufanbeyli'),
(15, 1, 'Yumurtalık', 'yumurtalik'),
(16, 2, 'Adıyaman', 'adiyaman'),
(17, 2, 'Besni', 'besni'),
(18, 2, 'Çelikhan', 'celikhan'),
(19, 2, 'Gerger', 'gerger'),
(20, 2, 'Gölbaşı', 'golbasi'),
(21, 2, 'Kahta', 'kahta'),
(22, 2, 'Samsat', 'samsat'),
(23, 2, 'Sincik', 'sincik'),
(24, 2, 'Tut', 'tut'),
(25, 3, 'Afyonkarahisar', 'afyonkarahisar'),
(26, 3, 'Başmakçı', 'basmakci'),
(27, 3, 'Bayat', 'bayat'),
(28, 3, 'Bolvadin', 'bolvadin'),
(29, 3, 'Çay', 'cay'),
(30, 3, 'Çobanlar', 'cobanlar'),
(31, 3, 'Dazkırı', 'dazkiri'),
(32, 3, 'Dinar', 'dinar'),
(33, 3, 'Emirdağ', 'emirdag'),
(34, 3, 'Evciler', 'evciler'),
(35, 3, 'Hocalar', 'hocalar'),
(36, 3, 'İhsaniye', 'ihsaniye'),
(37, 3, 'İscehisar', 'iscehisar'),
(38, 3, 'Kızılören', 'kiziloren'),
(39, 3, 'Sandıklı', 'sandikli'),
(40, 3, 'Sincanlı(Sinanpaşa)', 'sincanlisinanpasa'),
(41, 3, 'Sultandağı', 'sultandagi'),
(42, 3, 'Şuhut', 'suhut'),
(43, 4, 'Ağrı', 'agri'),
(44, 4, 'Diyadin', 'diyadin'),
(45, 4, 'Doğubeyazıt', 'dogubeyazit'),
(46, 4, 'Eleşkirt', 'eleskirt'),
(47, 4, 'Hamur', 'hamur'),
(48, 4, 'Patnos', 'patnos'),
(49, 4, 'Taşlıçay', 'taslicay'),
(50, 4, 'Tutak', 'tutak'),
(51, 5, 'Amasya', 'amasya'),
(52, 5, 'Göynücek', 'goynucek'),
(53, 5, 'Gümüşhacıköy', 'gumushacikoy'),
(54, 5, 'Hamamözü', 'hamamozu'),
(55, 5, 'Merzifon', 'merzifon'),
(56, 5, 'Suluova', 'suluova'),
(57, 5, 'Taşova', 'tasova'),
(58, 6, 'Altındağ', 'altindag'),
(59, 6, 'Çankaya', 'cankaya'),
(60, 6, 'Etimesgut', 'etimesgut'),
(61, 6, 'Keçiören', 'kecioren'),
(62, 6, 'Mamak', 'mamak'),
(63, 6, 'Sincan', 'sincan'),
(64, 6, 'Yenimahalle', 'yenimahalle'),
(65, 6, 'Gölbaşı', 'golbasi'),
(66, 6, 'Pursaklar', 'pursaklar'),
(67, 6, 'Akyurt', 'akyurt'),
(68, 6, 'Ayaş', 'ayas'),
(69, 6, 'Bala', 'bala'),
(70, 6, 'Beypazarı', 'beypazari'),
(71, 6, 'Çamlıdere', 'camlidere'),
(72, 6, 'Çubuk', 'cubuk'),
(73, 6, 'Elmadağ', 'elmadag'),
(74, 6, 'Evren', 'evren'),
(75, 6, 'Güdül', 'gudul'),
(76, 6, 'Haymana', 'haymana'),
(77, 6, 'Kalecik', 'kalecik'),
(78, 6, 'Kazan', 'kazan'),
(79, 6, 'Kızılcahamam', 'kizilcahamam'),
(80, 6, 'Nallıhan', 'nallihan'),
(81, 6, 'Polatlı', 'polatli'),
(82, 6, 'Şereflikoçhisar', 'sereflikochisar'),
(83, 7, 'Muratpaşa', 'muratpasa'),
(84, 7, 'Kepez', 'kepez'),
(85, 7, 'Konyaaltı', 'konyaalti'),
(86, 7, 'Aksu', 'aksu'),
(87, 7, 'Döşemealtı', 'dosemealti'),
(88, 7, 'Akseki', 'akseki'),
(89, 7, 'Alanya', 'alanya'),
(90, 7, 'Elmalı', 'elmali'),
(91, 7, 'Finike', 'finike'),
(92, 7, 'Gazipaşa', 'gazipasa'),
(93, 7, 'Gündoğmuş', 'gundogmus'),
(94, 7, 'İbradı(Aydınkent)', 'ibradiaydinkent'),
(95, 7, 'Kale(Demre)', 'kaledemre'),
(96, 7, 'Kaş', 'kas'),
(97, 7, 'Kemer', 'kemer'),
(98, 7, 'Korkuteli', 'korkuteli'),
(99, 7, 'Kumluca', 'kumluca'),
(100, 7, 'Manavgat', 'manavgat'),
(101, 7, 'Serik', 'serik'),
(102, 8, 'Artvin', 'artvin'),
(103, 8, 'Ardanuç', 'ardanuc'),
(104, 8, 'Arhavi', 'arhavi'),
(105, 8, 'Borçka', 'borcka'),
(106, 8, 'Hopa', 'hopa'),
(107, 8, 'Murgul(Göktaş)', 'murgulgoktas'),
(108, 8, 'Şavşat', 'savsat'),
(109, 8, 'Yusufeli', 'yusufeli'),
(110, 9, 'Aydın', 'aydin'),
(111, 9, 'Bozdoğan', 'bozdogan'),
(112, 9, 'Buharkent(Çubukdağı)', 'buharkentcubukdagi'),
(113, 9, 'Çine', 'cine'),
(114, 9, 'Germencik', 'germencik'),
(115, 9, 'İncirliova', 'incirliova'),
(116, 9, 'Karacasu', 'karacasu'),
(117, 9, 'Karpuzlu', 'karpuzlu'),
(118, 9, 'Koçarlı', 'kocarli'),
(119, 9, 'Köşk', 'kosk'),
(120, 9, 'Kuşadası', 'kusadasi'),
(121, 9, 'Kuyucak', 'kuyucak'),
(122, 9, 'Nazilli', 'nazilli'),
(123, 9, 'Söke', 'soke'),
(124, 9, 'Sultanhisar', 'sultanhisar'),
(125, 9, 'Didim', 'didimyenihisar'),
(126, 9, 'Yenipazar', 'yenipazar'),
(127, 10, 'Balıkesir', 'balikesir'),
(128, 10, 'Ayvalık', 'ayvalik'),
(129, 10, 'Balya', 'balya'),
(130, 10, 'Bandırma', 'bandirma'),
(131, 10, 'Bigadiç', 'bigadic'),
(132, 10, 'Burhaniye', 'burhaniye'),
(133, 10, 'Dursunbey', 'dursunbey'),
(134, 10, 'Edremit', 'edremit'),
(135, 10, 'Erdek', 'erdek'),
(136, 10, 'Gömeç', 'gomec'),
(137, 10, 'Gönen', 'gonen'),
(138, 10, 'Havran', 'havran'),
(139, 10, 'İvrindi', 'ivrindi'),
(140, 10, 'Kepsut', 'kepsut'),
(141, 10, 'Manyas', 'manyas'),
(142, 10, 'Marmara', 'marmara'),
(143, 10, 'Savaştepe', 'savastepe'),
(144, 10, 'Sındırgı', 'sindirgi'),
(145, 10, 'Susurluk', 'susurluk'),
(146, 11, 'Bilecik', 'bilecik'),
(147, 11, 'Bozüyük', 'bozuyuk'),
(148, 11, 'Gölpazarı', 'golpazari'),
(149, 11, 'İnhisar', 'inhisar'),
(150, 11, 'Osmaneli', 'osmaneli'),
(151, 11, 'Pazaryeri', 'pazaryeri'),
(152, 11, 'Söğüt', 'sogut'),
(153, 11, 'Yenipazar', 'yenipazar'),
(154, 12, 'Bingöl', 'bingol'),
(155, 12, 'Adaklı', 'adakli'),
(156, 12, 'Genç', 'genc'),
(157, 12, 'Karlıova', 'karliova'),
(158, 12, 'Kığı', 'kigi'),
(159, 12, 'Solhan', 'solhan'),
(160, 12, 'Yayladere', 'yayladere'),
(161, 12, 'Yedisu', 'yedisu'),
(162, 13, 'Bitlis', 'bitlis'),
(163, 13, 'Adilcevaz', 'adilcevaz'),
(164, 13, 'Ahlat', 'ahlat'),
(165, 13, 'Güroymak', 'guroymak'),
(166, 13, 'Hizan', 'hizan'),
(167, 13, 'Mutki', 'mutki'),
(168, 13, 'Tatvan', 'tatvan'),
(169, 14, 'Bolu', 'bolu'),
(170, 14, 'Dörtdivan', 'dortdivan'),
(171, 14, 'Gerede', 'gerede'),
(172, 14, 'Göynük', 'goynuk'),
(173, 14, 'Kıbrıscık', 'kibriscik'),
(174, 14, 'Mengen', 'mengen'),
(175, 14, 'Mudurnu', 'mudurnu'),
(176, 14, 'Seben', 'seben'),
(177, 14, 'Yeniçağa', 'yenicaga'),
(178, 15, 'Burdur', 'burdur'),
(179, 15, 'Ağlasun', 'aglasun'),
(180, 15, 'Altınyayla(Dirmil)', 'altinyayladirmil'),
(181, 15, 'Bucak', 'bucak'),
(182, 15, 'Çavdır', 'cavdir'),
(183, 15, 'Çeltikçi', 'celtikci'),
(184, 15, 'Gölhisar', 'golhisar'),
(185, 15, 'Karamanlı', 'karamanli'),
(186, 15, 'Kemer', 'kemer'),
(187, 15, 'Tefenni', 'tefenni'),
(188, 15, 'Yeşilova', 'yesilova'),
(189, 16, 'Nilüfer', 'nilufer'),
(190, 16, 'Osmangazi', 'osmangazi'),
(191, 16, 'Yıldırım', 'yildirim'),
(192, 16, 'Büyükorhan', 'buyukorhan'),
(193, 16, 'Gemlik', 'gemlik'),
(194, 16, 'Gürsu', 'gursu'),
(195, 16, 'Harmancık', 'harmancik'),
(196, 16, 'İnegöl', 'inegol'),
(197, 16, 'İznik', 'iznik'),
(198, 16, 'Karacabey', 'karacabey'),
(199, 16, 'Keles', 'keles'),
(200, 16, 'Kestel', 'kestel'),
(201, 16, 'Mudanya', 'mudanya'),
(202, 16, 'Mustafakemalpaşa', 'mustafakemalpasa'),
(203, 16, 'Orhaneli', 'orhaneli'),
(204, 16, 'Orhangazi', 'orhangazi'),
(205, 16, 'Yenişehir', 'yenisehir'),
(206, 17, 'Çanakkale', 'canakkale'),
(207, 17, 'Ayvacık-Assos', 'ayvacik-assos'),
(208, 17, 'Bayramiç', 'bayramic'),
(209, 17, 'Biga', 'biga'),
(210, 17, 'Bozcaada', 'bozcaada'),
(211, 17, 'Çan', 'can'),
(212, 17, 'Eceabat', 'eceabat'),
(213, 17, 'Ezine', 'ezine'),
(214, 17, 'Gelibolu', 'gelibolu'),
(215, 17, 'Gökçeada(İmroz)', 'gokceadaimroz'),
(216, 17, 'Lapseki', 'lapseki'),
(217, 17, 'Yenice', 'yenice'),
(218, 18, 'Çankırı', 'cankiri'),
(219, 18, 'Atkaracalar', 'atkaracalar'),
(220, 18, 'Bayramören', 'bayramoren'),
(221, 18, 'Çerkeş', 'cerkes'),
(222, 18, 'Eldivan', 'eldivan'),
(223, 18, 'Ilgaz', 'ilgaz'),
(224, 18, 'Kızılırmak', 'kizilirmak'),
(225, 18, 'Korgun', 'korgun'),
(226, 18, 'Kurşunlu', 'kursunlu'),
(227, 18, 'Orta', 'orta'),
(228, 18, 'Şabanözü', 'sabanozu'),
(229, 18, 'Yapraklı', 'yaprakli'),
(230, 19, 'Çorum', 'corum'),
(231, 19, 'Alaca', 'alaca'),
(232, 19, 'Bayat', 'bayat'),
(233, 19, 'Boğazkale', 'bogazkale'),
(234, 19, 'Dodurga', 'dodurga'),
(235, 19, 'İskilip', 'iskilip'),
(236, 19, 'Kargı', 'kargi'),
(237, 19, 'Laçin', 'lacin'),
(238, 19, 'Mecitözü', 'mecitozu'),
(239, 19, 'Oğuzlar(Karaören)', 'oguzlarkaraoren'),
(240, 19, 'Ortaköy', 'ortakoy'),
(241, 19, 'Osmancık', 'osmancik'),
(242, 19, 'Sungurlu', 'sungurlu'),
(243, 19, 'Uğurludağ', 'ugurludag'),
(244, 20, 'Denizli', 'denizli'),
(245, 20, 'Acıpayam', 'acipayam'),
(246, 20, 'Akköy', 'akkoy'),
(247, 20, 'Babadağ', 'babadag'),
(248, 20, 'Baklan', 'baklan'),
(249, 20, 'Bekilli', 'bekilli'),
(250, 20, 'Beyağaç', 'beyagac'),
(251, 20, 'Bozkurt', 'bozkurt'),
(252, 20, 'Buldan', 'buldan'),
(253, 20, 'Çal', 'cal'),
(254, 20, 'Çameli', 'cameli'),
(255, 20, 'Çardak', 'cardak'),
(256, 20, 'Çivril', 'civril'),
(257, 20, 'Güney', 'guney'),
(258, 20, 'Honaz', 'honaz'),
(259, 20, 'Kale', 'kale'),
(260, 20, 'Sarayköy', 'saraykoy'),
(261, 20, 'Serinhisar', 'serinhisar'),
(262, 20, 'Tavas', 'tavas'),
(263, 21, 'Sur', 'sur'),
(264, 21, 'Bağlar', 'baglar'),
(265, 21, 'Yenişehir', 'yenisehir'),
(266, 21, 'Kayapınar', 'kayapinar'),
(267, 21, 'Bismil', 'bismil'),
(268, 21, 'Çermik', 'cermik'),
(269, 21, 'Çınar', 'cinar'),
(270, 21, 'Çüngüş', 'cungus'),
(271, 21, 'Dicle', 'dicle'),
(272, 21, 'Eğil', 'egil'),
(273, 21, 'Ergani', 'ergani'),
(274, 21, 'Hani', 'hani'),
(275, 21, 'Hazro', 'hazro'),
(276, 21, 'Kocaköy', 'kocakoy'),
(277, 21, 'Kulp', 'kulp'),
(278, 21, 'Lice', 'lice'),
(279, 21, 'Silvan', 'silvan'),
(280, 22, 'Edirne', 'edirne'),
(281, 22, 'Enez', 'enez'),
(282, 22, 'Havsa', 'havsa'),
(283, 22, 'İpsala', 'ipsala'),
(284, 22, 'Keşan', 'kesan'),
(285, 22, 'Lalapaşa', 'lalapasa'),
(286, 22, 'Meriç', 'meric'),
(287, 22, 'Süleoğlu(Süloğlu)', 'suleoglusuloglu'),
(288, 22, 'Uzunköprü', 'uzunkopru'),
(289, 23, 'Elazığ', 'elazig'),
(290, 23, 'Ağın', 'agin'),
(291, 23, 'Alacakaya', 'alacakaya'),
(292, 23, 'Arıcak', 'aricak'),
(293, 23, 'Baskil', 'baskil'),
(294, 23, 'Karakoçan', 'karakocan'),
(295, 23, 'Keban', 'keban'),
(296, 23, 'Kovancılar', 'kovancilar'),
(297, 23, 'Maden', 'maden'),
(298, 23, 'Palu', 'palu'),
(299, 23, 'Sivrice', 'sivrice'),
(300, 24, 'Erzincan', 'erzincan'),
(301, 24, 'Çayırlı', 'cayirli'),
(302, 24, 'İliç(Ilıç)', 'ilicilic'),
(303, 24, 'Kemah', 'kemah'),
(304, 24, 'Kemaliye', 'kemaliye'),
(305, 24, 'Otlukbeli', 'otlukbeli'),
(306, 24, 'Refahiye', 'refahiye'),
(307, 24, 'Tercan', 'tercan'),
(308, 24, 'Üzümlü', 'uzumlu'),
(309, 25, 'Palandöken', 'palandoken'),
(310, 25, 'Yakutiye', 'yakutiye'),
(311, 25, 'Aziziye(Ilıca)', 'aziziyeilica'),
(312, 25, 'Aşkale', 'askale'),
(313, 25, 'Çat', 'cat'),
(314, 25, 'Hınıs', 'hinis'),
(315, 25, 'Horasan', 'horasan'),
(316, 25, 'İspir', 'ispir'),
(317, 25, 'Karaçoban', 'karacoban'),
(318, 25, 'Karayazı', 'karayazi'),
(319, 25, 'Köprüköy', 'koprukoy'),
(320, 25, 'Narman', 'narman'),
(321, 25, 'Oltu', 'oltu'),
(322, 25, 'Olur', 'olur'),
(323, 25, 'Pasinler', 'pasinler'),
(324, 25, 'Pazaryolu', 'pazaryolu'),
(325, 25, 'Şenkaya', 'senkaya'),
(326, 25, 'Tekman', 'tekman'),
(327, 25, 'Tortum', 'tortum'),
(328, 25, 'Uzundere', 'uzundere'),
(329, 26, 'Odunpazarı', 'odunpazari'),
(330, 26, 'Tepebaşı', 'tepebasi'),
(331, 26, 'Alpu', 'alpu'),
(332, 26, 'Beylikova', 'beylikova'),
(333, 26, 'Çifteler', 'cifteler'),
(334, 26, 'Günyüzü', 'gunyuzu'),
(335, 26, 'Han', 'han'),
(336, 26, 'İnönü', 'inonu'),
(337, 26, 'Mahmudiye', 'mahmudiye'),
(338, 26, 'Mihalgazi', 'mihalgazi'),
(339, 26, 'Mihalıçcık', 'mihaliccik'),
(340, 26, 'Sarıcakaya', 'saricakaya'),
(341, 26, 'Seyitgazi', 'seyitgazi'),
(342, 26, 'Sivrihisar', 'sivrihisar'),
(343, 27, 'Şahinbey', 'sahinbey'),
(344, 27, 'Şehitkamil', 'sehitkamil'),
(345, 27, 'Oğuzeli', 'oguzeli'),
(346, 27, 'Araban', 'araban'),
(347, 27, 'İslahiye', 'islahiye'),
(348, 27, 'Karkamış', 'karkamis'),
(349, 27, 'Nizip', 'nizip'),
(350, 27, 'Nurdağı', 'nurdagi'),
(351, 27, 'Yavuzeli', 'yavuzeli'),
(352, 28, 'Giresun', 'giresun'),
(353, 28, 'Alucra', 'alucra'),
(354, 28, 'Bulancak', 'bulancak'),
(355, 28, 'Çamoluk', 'camoluk'),
(356, 28, 'Çanakçı', 'canakci'),
(357, 28, 'Dereli', 'dereli'),
(358, 28, 'Doğankent', 'dogankent'),
(359, 28, 'Espiye', 'espiye'),
(360, 28, 'Eynesil', 'eynesil'),
(361, 28, 'Görele', 'gorele'),
(362, 28, 'Güce', 'guce'),
(363, 28, 'Keşap', 'kesap'),
(364, 28, 'Piraziz', 'piraziz'),
(365, 28, 'Şebinkarahisar', 'sebinkarahisar'),
(366, 28, 'Tirebolu', 'tirebolu'),
(367, 28, 'Yağlıdere', 'yaglidere'),
(368, 29, 'Gümüşhane', 'gumushane'),
(369, 29, 'Kelkit', 'kelkit'),
(370, 29, 'Köse', 'kose'),
(371, 29, 'Kürtün', 'kurtun'),
(372, 29, 'Şiran', 'siran'),
(373, 29, 'Torul', 'torul'),
(374, 30, 'Hakkari', 'hakkari'),
(375, 30, 'Çukurca', 'cukurca'),
(376, 30, 'Şemdinli', 'semdinli'),
(377, 30, 'Yüksekova', 'yuksekova'),
(378, 31, 'Antakya', 'antakya'),
(379, 31, 'Altınözü', 'altinozu'),
(380, 31, 'Belen', 'belen'),
(381, 31, 'Dörtyol', 'dortyol'),
(382, 31, 'Erzin', 'erzin'),
(383, 31, 'Hassa', 'hassa'),
(384, 31, 'İskenderun', 'iskenderun'),
(385, 31, 'Kırıkhan', 'kirikhan'),
(386, 31, 'Kumlu', 'kumlu'),
(387, 31, 'Reyhanlı', 'reyhanli'),
(388, 31, 'Samandağ', 'samandag'),
(389, 31, 'Yayladağı', 'yayladagi'),
(390, 32, 'Isparta', 'isparta'),
(391, 32, 'Aksu', 'aksu'),
(392, 32, 'Atabey', 'atabey'),
(393, 32, 'Eğridir(Eğirdir)', 'egridiregirdir'),
(394, 32, 'Gelendost', 'gelendost'),
(395, 32, 'Gönen', 'gonen'),
(396, 32, 'Keçiborlu', 'keciborlu'),
(397, 32, 'Senirkent', 'senirkent'),
(398, 32, 'Sütçüler', 'sutculer'),
(399, 32, 'Şarkikaraağaç', 'sarkikaraagac'),
(400, 32, 'Uluborlu', 'uluborlu'),
(401, 32, 'Yalvaç', 'yalvac'),
(402, 32, 'Yenişarbademli', 'yenisarbademli'),
(403, 33, 'Akdeniz', 'akdeniz'),
(404, 33, 'Yenişehir', 'yenisehir'),
(405, 33, 'Toroslar', 'toroslar'),
(406, 33, 'Mezitli', 'mezitli'),
(407, 33, 'Anamur', 'anamur'),
(408, 33, 'Aydıncık', 'aydincik'),
(409, 33, 'Bozyazı', 'bozyazi'),
(410, 33, 'Çamlıyayla', 'camliyayla'),
(411, 33, 'Erdemli', 'erdemli'),
(412, 33, 'Gülnar(Gülpınar)', 'gulnargulpinar'),
(413, 33, 'Mut', 'mut'),
(414, 33, 'Silifke', 'silifke'),
(415, 33, 'Tarsus', 'tarsus'),
(416, 34, 'Bakırköy', 'bakirkoy'),
(417, 34, 'Bayrampaşa', 'bayrampasa'),
(418, 34, 'Beşiktaş', 'besiktas'),
(419, 34, 'Beyoğlu', 'beyoglu'),
(420, 34, 'Arnavutköy', 'arnavutkoy'),
(421, 34, 'Eyüp', 'eyup'),
(422, 34, 'Fatih', 'fatih'),
(423, 34, 'Gaziosmanpaşa', 'gaziosmanpasa'),
(424, 34, 'Kağıthane', 'kagithane'),
(425, 34, 'Küçükçekmece', 'kucukcekmece'),
(426, 34, 'Sarıyer', 'sariyer'),
(427, 34, 'Şişli', 'sisli'),
(428, 34, 'Zeytinburnu', 'zeytinburnu'),
(429, 34, 'Avcılar', 'avcilar'),
(430, 34, 'Güngören', 'gungoren'),
(431, 34, 'Bahçelievler', 'bahcelievler'),
(432, 34, 'Bağcılar', 'bagcilar'),
(433, 34, 'Esenler', 'esenler'),
(434, 34, 'Başakşehir', 'basaksehir'),
(435, 34, 'Beylikdüzü', 'beylikduzu'),
(436, 34, 'Esenyurt', 'esenyurt'),
(437, 34, 'Sultangazi', 'sultangazi'),
(438, 34, 'Adalar', 'adalar'),
(439, 34, 'Beykoz', 'beykoz'),
(440, 34, 'Kadıköy', 'kadikoy'),
(441, 34, 'Kartal', 'kartal'),
(442, 34, 'Pendik', 'pendik'),
(443, 34, 'Ümraniye', 'umraniye'),
(444, 34, 'Üsküdar', 'uskudar'),
(445, 34, 'Tuzla', 'tuzla'),
(446, 34, 'Maltepe', 'maltepe'),
(447, 34, 'Ataşehir', 'atasehir'),
(448, 34, 'Çekmeköy', 'cekmekoy'),
(449, 34, 'Sancaktepe', 'sancaktepe'),
(450, 34, 'Büyükçekmece', 'buyukcekmece'),
(451, 34, 'Çatalca', 'catalca'),
(452, 34, 'Silivri', 'silivri'),
(453, 34, 'Şile', 'sile'),
(454, 34, 'Sultanbeyli', 'sultanbeyli'),
(455, 35, 'Aliağa', 'aliaga'),
(456, 35, 'Balçova', 'balcova'),
(457, 35, 'Bayındır', 'bayindir'),
(458, 35, 'Bornova', 'bornova'),
(459, 35, 'Buca', 'buca'),
(460, 35, 'Çiğli', 'cigli'),
(461, 35, 'Foça', 'foca'),
(462, 35, 'Gaziemir', 'gaziemir'),
(463, 35, 'Güzelbahçe', 'guzelbahce'),
(464, 35, 'Karşıyaka', 'karsiyaka'),
(465, 35, 'Kemalpaşa', 'kemalpasa'),
(466, 35, 'Konak', 'konak'),
(467, 35, 'Cumaovası(Menderes)', 'cumaovasimenderes'),
(468, 35, 'Menemen', 'menemen'),
(469, 35, 'Narlıdere', 'narlidere'),
(470, 35, 'Seferihisar', 'seferihisar'),
(471, 35, 'Selçuk', 'selcuk'),
(472, 35, 'Torbalı', 'torbali'),
(473, 35, 'Urla', 'urla'),
(474, 35, 'Bayraklı', 'bayrakli'),
(475, 35, 'Karabağlar', 'karabaglar'),
(476, 35, 'Bergama', 'bergama'),
(477, 35, 'Beydağ', 'beydag'),
(478, 35, 'Çeşme', 'cesme'),
(479, 35, 'Dikili', 'dikili'),
(480, 35, 'Karaburun', 'karaburun'),
(481, 35, 'Kınık', 'kinik'),
(482, 35, 'Kiraz', 'kiraz'),
(483, 35, 'Ödemiş', 'odemis'),
(484, 35, 'Tire', 'tire'),
(485, 36, 'Kars', 'kars'),
(486, 36, 'Akyaka', 'akyaka'),
(487, 36, 'Arpaçay', 'arpacay'),
(488, 36, 'Digor', 'digor'),
(489, 36, 'Kağızman', 'kagizman'),
(490, 36, 'Sarıkamış', 'sarikamis'),
(491, 36, 'Selim', 'selim'),
(492, 36, 'Susuz', 'susuz'),
(493, 37, 'Kastamonu', 'kastamonu'),
(494, 37, 'Abana', 'abana'),
(495, 37, 'Ağlı', 'agli'),
(496, 37, 'Araç', 'arac'),
(497, 37, 'Azdavay', 'azdavay'),
(498, 37, 'Bozkurt', 'bozkurt'),
(499, 37, 'Cide', 'cide'),
(500, 37, 'Çatalzeytin', 'catalzeytin'),
(501, 37, 'Daday', 'daday'),
(502, 37, 'Devrekani', 'devrekani'),
(503, 37, 'Doğanyurt', 'doganyurt'),
(504, 37, 'Hanönü(Gökçeağaç)', 'hanonugokceagac'),
(505, 37, 'İhsangazi', 'ihsangazi'),
(506, 37, 'İnebolu', 'inebolu'),
(507, 37, 'Küre', 'kure'),
(508, 37, 'Pınarbaşı', 'pinarbasi'),
(509, 37, 'Seydiler', 'seydiler'),
(510, 37, 'Şenpazar', 'senpazar'),
(511, 37, 'Taşköprü', 'taskopru'),
(512, 37, 'Tosya', 'tosya'),
(513, 38, 'Kocasinan', 'kocasinan'),
(514, 38, 'Melikgazi', 'melikgazi'),
(515, 38, 'Talas', 'talas'),
(516, 38, 'Akkışla', 'akkisla'),
(517, 38, 'Bünyan', 'bunyan'),
(518, 38, 'Develi', 'develi'),
(519, 38, 'Felahiye', 'felahiye'),
(520, 38, 'Hacılar', 'hacilar'),
(521, 38, 'İncesu', 'incesu'),
(522, 38, 'Özvatan(Çukur)', 'ozvatancukur'),
(523, 38, 'Pınarbaşı', 'pinarbasi'),
(524, 38, 'Sarıoğlan', 'sarioglan'),
(525, 38, 'Sarız', 'sariz'),
(526, 38, 'Tomarza', 'tomarza'),
(527, 38, 'Yahyalı', 'yahyali'),
(528, 38, 'Yeşilhisar', 'yesilhisar'),
(529, 39, 'Kırklareli', 'kirklareli'),
(530, 39, 'Babaeski', 'babaeski'),
(531, 39, 'Demirköy', 'demirkoy'),
(532, 39, 'Kofçaz', 'kofcaz'),
(533, 39, 'Lüleburgaz', 'luleburgaz'),
(534, 39, 'Pehlivanköy', 'pehlivankoy'),
(535, 39, 'Pınarhisar', 'pinarhisar'),
(536, 39, 'Vize', 'vize'),
(537, 40, 'Kırşehir', 'kirsehir'),
(538, 40, 'Akçakent', 'akcakent'),
(539, 40, 'Akpınar', 'akpinar'),
(540, 40, 'Boztepe', 'boztepe'),
(541, 40, 'Çiçekdağı', 'cicekdagi'),
(542, 40, 'Kaman', 'kaman'),
(543, 40, 'Mucur', 'mucur'),
(544, 41, 'İzmit', 'izmit'),
(545, 41, 'Başiskele', 'basiskele'),
(546, 41, 'Çayırova', 'cayirova'),
(547, 41, 'Darıca', 'darica'),
(548, 41, 'Dilovası', 'dilovasi'),
(549, 41, 'Kartepe', 'kartepe'),
(550, 41, 'Gebze', 'gebze'),
(551, 41, 'Gölcük', 'golcuk'),
(552, 41, 'Kandıra', 'kandira'),
(553, 41, 'Karamürsel', 'karamursel'),
(554, 41, 'Tütünçiftlik', 'tutunciftlik'),
(555, 41, 'Derince', 'derince'),
(556, 42, 'Karatay', 'karatay'),
(557, 42, 'Meram', 'meram'),
(558, 42, 'Selçuklu', 'selcuklu'),
(559, 42, 'Ahırlı', 'ahirli'),
(560, 42, 'Akören', 'akoren'),
(561, 42, 'Akşehir', 'aksehir'),
(562, 42, 'Altınekin', 'altinekin'),
(563, 42, 'Beyşehir', 'beysehir'),
(564, 42, 'Bozkır', 'bozkir'),
(565, 42, 'Cihanbeyli', 'cihanbeyli'),
(566, 42, 'Çeltik', 'celtik'),
(567, 42, 'Çumra', 'cumra'),
(568, 42, 'Derbent', 'derbent'),
(569, 42, 'Derebucak', 'derebucak'),
(570, 42, 'Doğanhisar', 'doganhisar'),
(571, 42, 'Emirgazi', 'emirgazi'),
(572, 42, 'Ereğli', 'eregli'),
(573, 42, 'Güneysınır', 'guneysinir'),
(574, 42, 'Hadim', 'hadim'),
(575, 42, 'Halkapınar', 'halkapinar'),
(576, 42, 'Hüyük', 'huyuk'),
(577, 42, 'Ilgın', 'ilgin'),
(578, 42, 'Kadınhanı', 'kadinhani'),
(579, 42, 'Karapınar', 'karapinar'),
(580, 42, 'Kulu', 'kulu'),
(581, 42, 'Sarayönü', 'sarayonu'),
(582, 42, 'Seydişehir', 'seydisehir'),
(583, 42, 'Taşkent', 'taskent'),
(584, 42, 'Tuzlukçu', 'tuzlukcu'),
(585, 42, 'Yalıhüyük', 'yalihuyuk'),
(586, 42, 'Yunak', 'yunak'),
(587, 43, 'Kütahya', 'kutahya'),
(588, 43, 'Altıntaş', 'altintas'),
(589, 43, 'Aslanapa', 'aslanapa'),
(590, 43, 'Çavdarhisar', 'cavdarhisar'),
(591, 43, 'Domaniç', 'domanic'),
(592, 43, 'Dumlupınar', 'dumlupinar'),
(593, 43, 'Emet', 'emet'),
(594, 43, 'Gediz', 'gediz'),
(595, 43, 'Hisarcık', 'hisarcik'),
(596, 43, 'Pazarlar', 'pazarlar'),
(597, 43, 'Simav', 'simav'),
(598, 43, 'Şaphane', 'saphane'),
(599, 43, 'Tavşanlı', 'tavsanli'),
(600, 43, 'Tunçbilek', 'tuncbilek'),
(601, 44, 'Malatya', 'malatya'),
(602, 44, 'Akçadağ', 'akcadag'),
(603, 44, 'Arapkir', 'arapkir'),
(604, 44, 'Arguvan', 'arguvan'),
(605, 44, 'Battalgazi', 'battalgazi'),
(606, 44, 'Darende', 'darende'),
(607, 44, 'Doğanşehir', 'dogansehir'),
(608, 44, 'Doğanyol', 'doganyol'),
(609, 44, 'Hekimhan', 'hekimhan'),
(610, 44, 'Kale', 'kale'),
(611, 44, 'Kuluncak', 'kuluncak'),
(612, 44, 'Pötürge', 'poturge'),
(613, 44, 'Yazıhan', 'yazihan'),
(614, 44, 'Yeşilyurt', 'yesilyurt'),
(615, 45, 'Manisa', 'manisa'),
(616, 45, 'Ahmetli', 'ahmetli'),
(617, 45, 'Akhisar', 'akhisar'),
(618, 45, 'Alaşehir', 'alasehir'),
(619, 45, 'Demirci', 'demirci'),
(620, 45, 'Gölmarmara', 'golmarmara'),
(621, 45, 'Gördes', 'gordes'),
(622, 45, 'Kırkağaç', 'kirkagac'),
(623, 45, 'Köprübaşı', 'koprubasi'),
(624, 45, 'Kula', 'kula'),
(625, 45, 'Salihli', 'salihli'),
(626, 45, 'Sarıgöl', 'sarigol'),
(627, 45, 'Saruhanlı', 'saruhanli'),
(628, 45, 'Selendi', 'selendi'),
(629, 45, 'Soma', 'soma'),
(630, 45, 'Turgutlu', 'turgutlu'),
(631, 46, 'Kahramanmaraş', 'kahramanmaras'),
(632, 46, 'Afşin', 'afsin'),
(633, 46, 'Andırın', 'andirin'),
(634, 46, 'Çağlayancerit', 'caglayancerit'),
(635, 46, 'Ekinözü', 'ekinozu'),
(636, 46, 'Elbistan', 'elbistan'),
(637, 46, 'Göksun', 'goksun'),
(638, 46, 'Nurhak', 'nurhak'),
(639, 46, 'Pazarcık', 'pazarcik'),
(640, 46, 'Türkoğlu', 'turkoglu'),
(641, 47, 'Mardin', 'mardin'),
(642, 47, 'Dargeçit', 'dargecit'),
(643, 47, 'Derik', 'derik'),
(644, 47, 'Kızıltepe', 'kiziltepe'),
(645, 47, 'Mazıdağı', 'mazidagi'),
(646, 47, 'Midyat(Estel)', 'midyatestel'),
(647, 47, 'Nusaybin', 'nusaybin'),
(648, 47, 'Ömerli', 'omerli'),
(649, 47, 'Savur', 'savur'),
(650, 47, 'Yeşilli', 'yesilli'),
(651, 48, 'Muğla', 'mugla'),
(652, 48, 'Bodrum', 'bodrum'),
(653, 48, 'Dalaman', 'dalaman'),
(654, 48, 'Datça', 'datca'),
(655, 48, 'Fethiye', 'fethiye'),
(656, 48, 'Kavaklıdere', 'kavaklidere'),
(657, 48, 'Köyceğiz', 'koycegiz'),
(658, 48, 'Marmaris', 'marmaris'),
(659, 48, 'Milas', 'milas'),
(660, 48, 'Ortaca', 'ortaca'),
(661, 48, 'Ula', 'ula'),
(662, 48, 'Yatağan', 'yatagan'),
(663, 49, 'Muş', 'mus'),
(664, 49, 'Bulanık', 'bulanik'),
(665, 49, 'Hasköy', 'haskoy'),
(666, 49, 'Korkut', 'korkut'),
(667, 49, 'Malazgirt', 'malazgirt'),
(668, 49, 'Varto', 'varto'),
(669, 50, 'Nevşehir', 'nevsehir'),
(670, 50, 'Acıgöl', 'acigol'),
(671, 50, 'Avanos', 'avanos'),
(672, 50, 'Derinkuyu', 'derinkuyu'),
(673, 50, 'Gülşehir', 'gulsehir'),
(674, 50, 'Hacıbektaş', 'hacibektas'),
(675, 50, 'Kozaklı', 'kozakli'),
(676, 50, 'Göreme', 'goreme'),
(677, 51, 'Niğde', 'nigde'),
(678, 51, 'Altunhisar', 'altunhisar'),
(679, 51, 'Bor', 'bor'),
(680, 51, 'Çamardı', 'camardi'),
(681, 51, 'Çiftlik(Özyurt)', 'ciftlikozyurt'),
(682, 51, 'Ulukışla', 'ulukisla'),
(683, 52, 'Ordu', 'ordu'),
(684, 52, 'Akkuş', 'akkus'),
(685, 52, 'Aybastı', 'aybasti'),
(686, 52, 'Çamaş', 'camas'),
(687, 52, 'Çatalpınar', 'catalpinar'),
(688, 52, 'Çaybaşı', 'caybasi'),
(689, 52, 'Fatsa', 'fatsa'),
(690, 52, 'Gölköy', 'golkoy'),
(691, 52, 'Gülyalı', 'gulyali'),
(692, 52, 'Gürgentepe', 'gurgentepe'),
(693, 52, 'İkizce', 'ikizce'),
(694, 52, 'Karadüz(Kabadüz)', 'karaduzkabaduz'),
(695, 52, 'Kabataş', 'kabatas'),
(696, 52, 'Korgan', 'korgan'),
(697, 52, 'Kumru', 'kumru'),
(698, 52, 'Mesudiye', 'mesudiye'),
(699, 52, 'Perşembe', 'persembe'),
(700, 52, 'Ulubey', 'ulubey'),
(701, 52, 'Ünye', 'unye'),
(702, 53, 'Rize', 'rize'),
(703, 53, 'Ardeşen', 'ardesen'),
(704, 53, 'Çamlıhemşin', 'camlihemsin'),
(705, 53, 'Çayeli', 'cayeli'),
(706, 53, 'Derepazarı', 'derepazari'),
(707, 53, 'Fındıklı', 'findikli'),
(708, 53, 'Güneysu', 'guneysu'),
(709, 53, 'Hemşin', 'hemsin'),
(710, 53, 'İkizdere', 'ikizdere'),
(711, 53, 'İyidere', 'iyidere'),
(712, 53, 'Kalkandere', 'kalkandere'),
(713, 53, 'Pazar', 'pazar'),
(714, 54, 'Adapazarı', 'adapazari'),
(715, 54, 'Hendek', 'hendek'),
(716, 54, 'Arifiye', 'arifiye'),
(717, 54, 'Erenler', 'erenler'),
(718, 54, 'Serdivan', 'serdivan'),
(719, 54, 'Akyazı', 'akyazi'),
(720, 54, 'Ferizli', 'ferizli'),
(721, 54, 'Geyve', 'geyve'),
(722, 54, 'Karapürçek', 'karapurcek'),
(723, 54, 'Karasu', 'karasu'),
(724, 54, 'Kaynarca', 'kaynarca'),
(725, 54, 'Kocaali', 'kocaali'),
(726, 54, 'Pamukova', 'pamukova'),
(727, 54, 'Sapanca', 'sapanca'),
(728, 54, 'Söğütlü', 'sogutlu'),
(729, 54, 'Taraklı', 'tarakli'),
(730, 55, 'Atakum', 'atakum'),
(731, 55, 'İlkadım', 'ilkadim'),
(732, 55, 'Canik', 'canik'),
(733, 55, 'Tekkeköy', 'tekkekoy'),
(734, 55, 'Alaçam', 'alacam'),
(735, 55, 'Asarcık', 'asarcik'),
(736, 55, 'Ayvacık', 'ayvacik'),
(737, 55, 'Bafra', 'bafra'),
(738, 55, 'Çarşamba', 'carsamba'),
(739, 55, 'Havza', 'havza'),
(740, 55, 'Kavak', 'kavak'),
(741, 55, 'Ladik', 'ladik'),
(742, 55, '19Mayıs(Ballıca)', '19mayisballica'),
(743, 55, 'Salıpazarı', 'salipazari'),
(744, 55, 'Terme', 'terme'),
(745, 55, 'Vezirköprü', 'vezirkopru'),
(746, 55, 'Yakakent', 'yakakent'),
(747, 56, 'Siirt', 'siirt'),
(748, 56, 'Baykan', 'baykan'),
(749, 56, 'Eruh', 'eruh'),
(750, 56, 'Kurtalan', 'kurtalan'),
(751, 56, 'Pervari', 'pervari'),
(752, 56, 'Aydınlar', 'aydinlar'),
(753, 56, 'Şirvan', 'sirvan'),
(754, 57, 'Sinop', 'sinop'),
(755, 57, 'Ayancık', 'ayancik'),
(756, 57, 'Boyabat', 'boyabat'),
(757, 57, 'Dikmen', 'dikmen'),
(758, 57, 'Durağan', 'duragan'),
(759, 57, 'Erfelek', 'erfelek'),
(760, 57, 'Gerze', 'gerze'),
(761, 57, 'Saraydüzü', 'sarayduzu'),
(762, 57, 'Türkeli', 'turkeli'),
(763, 58, 'Sivas', 'sivas'),
(764, 58, 'Akıncılar', 'akincilar'),
(765, 58, 'Altınyayla', 'altinyayla'),
(766, 58, 'Divriği', 'divrigi'),
(767, 58, 'Doğanşar', 'dogansar'),
(768, 58, 'Gemerek', 'gemerek'),
(769, 58, 'Gölova', 'golova'),
(770, 58, 'Gürün', 'gurun'),
(771, 58, 'Hafik', 'hafik'),
(772, 58, 'İmranlı', 'imranli'),
(773, 58, 'Kangal', 'kangal'),
(774, 58, 'Koyulhisar', 'koyulhisar'),
(775, 58, 'Suşehri', 'susehri'),
(776, 58, 'Şarkışla', 'sarkisla'),
(777, 58, 'Ulaş', 'ulas'),
(778, 58, 'Yıldızeli', 'yildizeli'),
(779, 58, 'Zara', 'zara'),
(780, 59, 'Tekirdağ', 'tekirdag'),
(781, 59, 'Çerkezköy', 'cerkezkoy'),
(782, 59, 'Çorlu', 'corlu'),
(783, 59, 'Hayrabolu', 'hayrabolu'),
(784, 59, 'Malkara', 'malkara'),
(785, 59, 'Marmaraereğlisi', 'marmaraereglisi'),
(786, 59, 'Muratlı', 'muratli'),
(787, 59, 'Saray', 'saray'),
(788, 59, 'Şarköy', 'sarkoy'),
(789, 60, 'Tokat', 'tokat'),
(790, 60, 'Almus', 'almus'),
(791, 60, 'Artova', 'artova'),
(792, 60, 'Başçiftlik', 'basciftlik'),
(793, 60, 'Erbaa', 'erbaa'),
(794, 60, 'Niksar', 'niksar'),
(795, 60, 'Pazar', 'pazar'),
(796, 60, 'Reşadiye', 'resadiye'),
(797, 60, 'Sulusaray', 'sulusaray'),
(798, 60, 'Turhal', 'turhal'),
(799, 60, 'Yeşilyurt', 'yesilyurt'),
(800, 60, 'Zile', 'zile'),
(801, 61, 'Trabzon', 'trabzon'),
(802, 61, 'Akçaabat', 'akcaabat'),
(803, 61, 'Araklı', 'arakli'),
(804, 61, 'Arsin', 'arsin'),
(805, 61, 'Beşikdüzü', 'besikduzu'),
(806, 61, 'Çarşıbaşı', 'carsibasi'),
(807, 61, 'Çaykara', 'caykara'),
(808, 61, 'Dernekpazarı', 'dernekpazari'),
(809, 61, 'Düzköy', 'duzkoy'),
(810, 61, 'Hayrat', 'hayrat'),
(811, 61, 'Köprübaşı', 'koprubasi'),
(812, 61, 'Maçka', 'macka'),
(813, 61, 'Of', 'of'),
(814, 61, 'Sürmene', 'surmene'),
(815, 61, 'Şalpazarı', 'salpazari'),
(816, 61, 'Tonya', 'tonya'),
(817, 61, 'Vakfıkebir', 'vakfikebir'),
(818, 61, 'Yomra', 'yomra'),
(819, 62, 'Tunceli', 'tunceli'),
(820, 62, 'Çemişgezek', 'cemisgezek'),
(821, 62, 'Hozat', 'hozat'),
(822, 62, 'Mazgirt', 'mazgirt'),
(823, 62, 'Nazımiye', 'nazimiye'),
(824, 62, 'Ovacık', 'ovacik'),
(825, 62, 'Pertek', 'pertek'),
(826, 62, 'Pülümür', 'pulumur'),
(827, 63, 'Şanlıurfa', 'sanliurfa'),
(828, 63, 'Akçakale', 'akcakale'),
(829, 63, 'Birecik', 'birecik'),
(830, 63, 'Bozova', 'bozova'),
(831, 63, 'Ceylanpınar', 'ceylanpinar'),
(832, 63, 'Halfeti', 'halfeti'),
(833, 63, 'Harran', 'harran'),
(834, 63, 'Hilvan', 'hilvan'),
(835, 63, 'Siverek', 'siverek'),
(836, 63, 'Suruç', 'suruc'),
(837, 63, 'Viranşehir', 'viransehir'),
(838, 64, 'Uşak', 'usak'),
(839, 64, 'Banaz', 'banaz'),
(840, 64, 'Eşme', 'esme'),
(841, 64, 'Karahallı', 'karahalli'),
(842, 64, 'Sivaslı', 'sivasli'),
(843, 64, 'Ulubey', 'ulubey'),
(844, 65, 'Van', 'van'),
(845, 65, 'Bahçesaray', 'bahcesaray'),
(846, 65, 'Başkale', 'baskale'),
(847, 65, 'Çaldıran', 'caldiran'),
(848, 65, 'Çatak', 'catak'),
(849, 65, 'Edremit(Gümüşdere)', 'edremitgumusdere'),
(850, 65, 'Erciş', 'ercis'),
(851, 65, 'Gevaş', 'gevas'),
(852, 65, 'Gürpınar', 'gurpinar'),
(853, 65, 'Muradiye', 'muradiye'),
(854, 65, 'Özalp', 'ozalp'),
(855, 65, 'Saray', 'saray'),
(856, 66, 'Yozgat', 'yozgat'),
(857, 66, 'Akdağmadeni', 'akdagmadeni'),
(858, 66, 'Aydıncık', 'aydincik'),
(859, 66, 'Boğazlıyan', 'bogazliyan'),
(860, 66, 'Çandır', 'candir'),
(861, 66, 'Çayıralan', 'cayiralan'),
(862, 66, 'Çekerek', 'cekerek'),
(863, 66, 'Kadışehri', 'kadisehri'),
(864, 66, 'Saraykent', 'saraykent'),
(865, 66, 'Sarıkaya', 'sarikaya'),
(866, 66, 'Sorgun', 'sorgun'),
(867, 66, 'Şefaatli', 'sefaatli'),
(868, 66, 'Yenifakılı', 'yenifakili'),
(869, 66, 'Yerköy', 'yerkoy'),
(870, 67, 'Zonguldak', 'zonguldak'),
(871, 67, 'Alaplı', 'alapli'),
(872, 67, 'Çaycuma', 'caycuma'),
(873, 67, 'Devrek', 'devrek'),
(874, 67, 'Karadenizereğli', 'karadenizeregli'),
(875, 67, 'Gökçebey', 'gokcebey'),
(876, 68, 'Aksaray', 'aksaray'),
(877, 68, 'Ağaçören', 'agacoren'),
(878, 68, 'Eskil', 'eskil'),
(879, 68, 'Gülağaç(Ağaçlı)', 'gulagacagacli'),
(880, 68, 'Güzelyurt', 'guzelyurt'),
(881, 68, 'Ortaköy', 'ortakoy'),
(882, 68, 'Sarıyahşi', 'sariyahsi'),
(883, 69, 'Bayburt', 'bayburt'),
(884, 69, 'Aydıntepe', 'aydintepe'),
(885, 69, 'Demirözü', 'demirozu'),
(886, 70, 'Karaman', 'karaman'),
(887, 70, 'Ayrancı', 'ayranci'),
(888, 70, 'Başyayla', 'basyayla'),
(889, 70, 'Ermenek', 'ermenek'),
(890, 70, 'Kazımkarabekir', 'kazimkarabekir'),
(891, 70, 'Sarıveliler', 'sariveliler'),
(892, 71, 'Kırıkkale', 'kirikkale'),
(893, 71, 'Bahşili', 'bahsili'),
(894, 71, 'Balışeyh', 'baliseyh'),
(895, 71, 'Çelebi', 'celebi'),
(896, 71, 'Delice', 'delice'),
(897, 71, 'Karakeçili', 'karakecili'),
(898, 71, 'Keskin', 'keskin'),
(899, 71, 'Sulakyurt', 'sulakyurt'),
(900, 71, 'Yahşihan', 'yahsihan'),
(901, 72, 'Batman', 'batman'),
(902, 72, 'Beşiri', 'besiri'),
(903, 72, 'Gercüş', 'gercus'),
(904, 72, 'Hasankeyf', 'hasankeyf'),
(905, 72, 'Kozluk', 'kozluk'),
(906, 72, 'Sason', 'sason'),
(907, 73, 'Şırnak', 'sirnak'),
(908, 73, 'Beytüşşebap', 'beytussebap'),
(909, 73, 'Cizre', 'cizre'),
(910, 73, 'Güçlükonak', 'guclukonak'),
(911, 73, 'İdil', 'idil'),
(912, 73, 'Silopi', 'silopi'),
(913, 73, 'Uludere', 'uludere'),
(914, 74, 'Bartın', 'bartin'),
(915, 74, 'Amasra', 'amasra'),
(916, 74, 'Kurucaşile', 'kurucasile'),
(917, 74, 'Ulus', 'ulus'),
(918, 75, 'Ardahan', 'ardahan'),
(919, 75, 'Çıldır', 'cildir'),
(920, 75, 'Damal', 'damal'),
(921, 75, 'Göle', 'gole'),
(922, 75, 'Hanak', 'hanak'),
(923, 75, 'Posof', 'posof'),
(924, 76, 'Iğdır', 'igdir'),
(925, 76, 'Aralık', 'aralik'),
(926, 76, 'Karakoyunlu', 'karakoyunlu'),
(927, 76, 'Tuzluca', 'tuzluca'),
(928, 77, 'Yalova', 'yalova'),
(929, 77, 'Altınova', 'altinova'),
(930, 77, 'Armutlu', 'armutlu'),
(931, 77, 'Çiftlikköy', 'ciftlikkoy'),
(932, 77, 'Çınarcık', 'cinarcik'),
(933, 77, 'Termal', 'termal'),
(934, 78, 'Karabük', 'karabuk'),
(935, 78, 'Eflani', 'eflani'),
(936, 78, 'Eskipazar', 'eskipazar'),
(937, 78, 'Ovacık', 'ovacik'),
(938, 78, 'Safranbolu', 'safranbolu'),
(939, 78, 'Yenice', 'yenice'),
(940, 79, 'Kilis', 'kilis'),
(941, 79, 'Elbeyli', 'elbeyli'),
(942, 79, 'Musabeyli', 'musabeyli'),
(943, 79, 'Polateli', 'polateli'),
(944, 80, 'Osmaniye', 'osmaniye'),
(945, 80, 'Bahçe', 'bahce'),
(946, 80, 'Düziçi', 'duzici'),
(947, 80, 'Hasanbeyli', 'hasanbeyli'),
(948, 80, 'Kadirli', 'kadirli'),
(949, 80, 'Sumbas', 'sumbas'),
(950, 80, 'Toprakkale', 'toprakkale'),
(951, 81, 'Düzce', 'duzce'),
(952, 81, 'Akçakoca', 'akcakoca'),
(953, 81, 'Cumayeri', 'cumayeri'),
(954, 81, 'Çilimli', 'cilimli'),
(955, 81, 'Gölyaka', 'golyaka'),
(956, 81, 'Gümüşova', 'gumusova'),
(957, 81, 'Kaynaşlı', 'kaynasli'),
(958, 81, 'Yığılca', 'yigilca'),
(962, 20, 'Pamukkale', 'pamukkale'),
(963, 7, 'Olympos', 'olympos'),
(964, 7, 'Çıralı', 'cirali'),
(965, 7, 'Kaleiçi', 'kaleici'),
(967, 33, 'Kızkalesi', 'kizkalesi'),
(968, 20, 'Karahayit', 'karahayit');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `imgilan`
--

CREATE TABLE `imgilan` (
  `id` int(11) NOT NULL,
  `ilanid` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `imgilan`
--

INSERT INTO `imgilan` (`id`, `ilanid`, `url`) VALUES
(20, 'BuYQiJ', 'ilan-33-BuYQiJ-1528647746_XK0c0.jpg'),
(21, 'BuYQiJ', 'ilan-33-BuYQiJ-1528647748_tXHAk.jpg'),
(19, '0QXlX5', 'ilan-32-0QXlX5-1528974314_sHfUU.jpg'),
(16, 'vUmklT', 'ilan-31-vUmklT-s_1528721706_zCyyW.jpg'),
(17, 'vUmklT', 'ilan-31-vUmklT-s_1528721719_iRT2K.jpg'),
(18, '0QXlX5', 'ilan-32-0QXlX5-1528974375_Gd1Wv.jpg'),
(22, 'BuYQiJ', 'ilan-33-BuYQiJ-1528647750_X3mbO.jpg'),
(26, 'yiv7iK', 'ilan-35-yiv7iK-indir.png'),
(25, 'yiv7iK', 'ilan-35-yiv7iK-test.jpg'),
(27, 'kIIWWJ', 'ilan-35-kIIWWJ-test.jpg'),
(28, '5yuP3U', 'ilan-35-5yuP3U-test.jpg'),
(29, 'sCRJi3', 'ilan-35-sCRJi3-test.jpg'),
(30, 'm5MHx8', 'ilan-35-m5MHx8-test.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kusturu`
--

CREATE TABLE `kusturu` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kusturu`
--

INSERT INTO `kusturu` (`id`, `adi`, `img`) VALUES
(1, 'Muhabbet', 'img/menu-left/muhabbet-kusu.png'),
(6, 'Sultan Papağan', 'img/menu-left/sultan-papagan.png'),
(5, 'Papağan', 'img/menu-left/papagan.png'),
(7, 'Finch', 'img/menu-left/finch.png'),
(8, 'Sevda ve Cennet Papağan', 'img/menu-left/papagan.png'),
(9, 'Kanarya', 'img/menu-left/kanarya.png'),
(10, 'Gloster Kanarya', 'img/menu-left/gloster-kanarya.png'),
(11, 'Kumru', 'img/menu-left/kumru.png'),
(12, 'Rozella', 'img/menu-left/rozella.png'),
(13, 'Güvercin', 'img/menu-left/guvercin.png'),
(14, 'Hint Bülbülü', 'img/menu-left/hint-bulbulu.png'),
(15, 'Bülbül', 'img/menu-left/bulbul.png'),
(16, 'Diğer Kuşlar', 'img/menu-left/diger-kuslar.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `tarih` datetime NOT NULL DEFAULT current_timestamp(),
  `ilanid` varchar(255) NOT NULL,
  `alan_UID` varchar(255) NOT NULL,
  `gonderen_UID` varchar(255) NOT NULL,
  `ms_baslik` text NOT NULL,
  `ms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `message`
--

INSERT INTO `message` (`id`, `tarih`, `ilanid`, `alan_UID`, `gonderen_UID`, `ms_baslik`, `ms`) VALUES
(40, '2019-07-08 00:35:31', '54', '32', '35', '', 'FDSFSFSDF'),
(41, '2019-07-08 00:44:45', '54', '32', '35', '', 'DSADA'),
(42, '2019-07-08 00:44:46', '54', '35', '32', '', 'DSA'),
(43, '2019-07-08 00:44:47', '54', '35', '32', '', 'Adasda'),
(47, '2019-07-11 22:29:00', '54', '32', '35', '', 'dsadsad'),
(57, '2019-07-11 22:31:43', '59', '35', '35', '', 'DASDAS'),
(58, '2019-07-11 22:31:46', '59', '35', '35', '', 'DASDAASD');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `UID` bigint(20) UNSIGNED NOT NULL,
  `Fuid` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Ffname` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Femail` varchar(60) CHARACTER SET utf8 NOT NULL,
  `sifre` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `gtel` int(1) NOT NULL DEFAULT 1,
  `il` int(11) DEFAULT NULL,
  `ilce` int(11) DEFAULT NULL,
  `ban` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`UID`, `Fuid`, `Ffname`, `Femail`, `sifre`, `tel`, `gtel`, `il`, `ilce`, `ban`) VALUES
(30, '', '', 'jsndnd@gmail.com', '07a4d32b04e0a277f203ac711935fa14', '111111', 1, NULL, NULL, 0),
(6, '', 'Furkan ÜNLÜ', 'deneme@gmail.com', '8f10d078b2799206cfe914b32cc6a5e9', '0551555888', 1, 25, 309, 0),
(13, '2057590814563995', 'Furkan Ünlü', '', NULL, '0555888001', 1, 16, 100, 0),
(29, '2070123279681916', 'Furkan Ünlü', '', NULL, '56465465456', 1, 14, 176, 0),
(31, '', '', 'freeilan@gmail.com', '536a76f94cf7535158f66cfbd4b113b6', '05054990522', 1, NULL, NULL, 0),
(32, '', 'kuspazari', 'kuspazari2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0554 580 29', 1, NULL, NULL, 0),
(33, '', 'Yelda Blg', 'kuspazari3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '05536429501', 1, 0, 0, 0),
(34, '', '', 'adamspatrick43@yahoo.com', '2c0f0cbbf96552d7d777e6ad5629aaef', '1616345463', 1, NULL, NULL, 0),
(35, '', 'Furkan ', 'test@gmail.com', '5dd557c53bf88049fc5eb7590e46f3e6', '05314001001', 1, 7, 86, 0),
(36, '', '', 'foo-bar@example.com', '903a98d709fa4683aaaa036b84c125a6', 'ZAP', 1, NULL, NULL, 0),
(37, '', 'furkan', 'test1@gmail.com', '5a105e8b9d40e1329780d62ea2265d8a', '12314564897', 1, 18, 225, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `il`
--
ALTER TABLE `il`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ilan`
--
ALTER TABLE `ilan`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ilce`
--
ALTER TABLE `ilce`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `imgilan`
--
ALTER TABLE `imgilan`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kusturu`
--
ALTER TABLE `kusturu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ilan`
--
ALTER TABLE `ilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Tablo için AUTO_INCREMENT değeri `imgilan`
--
ALTER TABLE `imgilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `kusturu`
--
ALTER TABLE `kusturu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `UID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
