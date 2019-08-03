
CREATE DATABASE `myblog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci */;
USE `myblog`;

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciparolasi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adisoyadi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `kullanicilar` (`id`, `kullaniciadi`, `kullaniciparolasi`, `adisoyadi`) VALUES
(1,	'nuri',	'123',	'Nuri Akman'),
(2,	'ahmet',	'123',	'Ahmet Yılmaz');

DROP TABLE IF EXISTS `yazilar`;
CREATE TABLE `yazilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yazar` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `baslik` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yazi` text COLLATE utf8_turkish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `yazilar` (`id`, `yazar`, `tarih`, `baslik`, `yazi`) VALUES
(1,	'Nuri Akman',	'2017-08-21',	'PHP Dersleri',	'TBD ders yazısı burada olacak'),
(4,	'Nuri Akman',	'2017-08-21',	'MySQL Öğrendik',	'Yazı burada olacak'),
(5,	'Ömer Salih',	'2017-08-12',	'TBD İle görüşmeler...',	'Görüşmeler bitene kadar bekledik...\r\n\r\nAncak sonunda amacımıza ulaştık!\r\n\r\nSonuç olarak eğitimler düzenlendi.\r\n\r\nBöylece PHP öğrenmesi kolay oldu.'),
(13,	'Nuri AKMA\"nn\'n',	'2017-08-12',	'Test123',	'test yazısı'),
(14,	'Ahmet Yılmaz',	'2017-08-12',	'Eğitimde Bilgisayarın Önemi',	'Eğitimde Bilgisayarın Önemi.\r\nEğitimde Bilgisayarın Önemi.\r\nEğitimde Bilgisayarın Önemi.\r\nEğitimde Bilgisayarın Önemi.\r\nEğitimde Bilgisayarın Önemi.\r\nEğitimde Bilgisayarın Önemi');
