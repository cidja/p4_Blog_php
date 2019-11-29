-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `signal` tinyint(1) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `signal`) VALUES
(1,	2,	'Irene',	'Très bonne idée j\'adore ',	'2019-11-18 11:17:34',	1),
(2,	1,	'Jean jean',	'C\'est un très bon choix aussi',	'2019-11-15 17:15:32',	1),
(3,	1,	'polo',	'toujours la ',	'2019-11-18 09:33:18',	0),
(4,	1,	'test',	'bonjour\r\n',	'2019-11-18 10:26:06',	1),
(5,	1,	'Paul',	'Ceci est un commentaire',	'2019-11-18 10:26:27',	1),
(6,	2,	'Raymonde',	'Je trouve ça imonde ',	'2019-11-18 10:34:58',	0),
(19,	2,	'Raoul',	'Ceci est mon premier commentaire',	'2019-11-20 16:20:43',	1),
(21,	0,	'',	'',	'0000-00-00 00:00:00',	1),
(22,	2,	'Victor',	'Ceci est un test encore une fois',	'2019-11-22 14:19:42',	0),
(23,	2,	'lf',	'kdydy',	'2019-11-22 18:09:17',	1),
(24,	2,	'christian',	'cidja c\'est le meilleur',	'2019-11-27 17:31:50',	0);

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1,	'Ceci est mon premier billet',	'Bonjour à tous,\r\nvous découvrirez au fur et à mesure dans ce blog l\'avancement de mon roman, j\'ai besoin de vous pour le faire avancer vos commentaires seront bienvenus ',	'2019-11-14 11:16:12'),
(2,	'Un début d\'inspiration...',	'Mes chers lecteurs je vous écris aujourd\'hui car je n\'ai rien à raconter et je sais que cela en fera rire quelques uns, de ce fait je suis très content de cela.',	'2019-11-15 17:59:21'),
(19,	'une release kali aux couleurs de Windows',	'<p>lisez <a href=\"https://korben.info/search/kali\">Kali Linux</a> dans le cadre de votre boulot, sachez qu&rsquo;une nouvelle version estampill&eacute;e <a href=\"https://www.kali.org/news/kali-linux-2019-4-release/\">Kali Linux 2019.4</a> est sortie avec quelques petites updates sympas.</p>\r\n<p>Premi&egrave;rement, l&rsquo;environnement graphique propos&eacute; par d&eacute;faut est Xfce qui est beaucoup plus l&eacute;ger et sympa &agrave; utiliser. Kali supporte maintenant Powershell, ce qui permet de lancer des scripts PS directement depuis l&rsquo;OS.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>De plus, l&rsquo;outil Kali NetHunter KeX permet de connecter un <a href=\"https://www.amazon.fr/b/ref=nav_egg15?_encoding=UTF8&amp;node=2174081031&amp;tag=amazon0d16-21\" target=\"_blank\" rel=\"nofollow noopener\">appareil</a> Android via <a href=\"https://fr.wikipedia.org/wiki/Virtual_Network_Computing\">VNC</a> sur votre machine Kali et ensuite depuis l&rsquo;Android, de sortir le flux vid&eacute;o sur un &eacute;cran HDMI et utiliser Kali comme si vous &eacute;tiez devant votre machine avec un <a href=\"https://www.amazon.fr/s/ref=as_li_ss_tl?_encoding=UTF8&amp;camp=1642&amp;creative=19458&amp;field-keywords=clavier&amp;linkCode=ur2&amp;rh=i%3Aaps%2Ck%3Aclavier&amp;tag=amazon0d16-21&amp;url=search-alias%3Daps\" target=\"_blank\" rel=\"nofollow noopener\">clavier</a> et une <a href=\"https://www.amazon.fr/mn/search/ref=as_li_ss_tl?_encoding=UTF8&amp;camp=1642&amp;creative=19458&amp;field-keywords=carte+m%C3%A9moire&amp;linkCode=ur2&amp;tag=amazon0d16-21&amp;url=search-alias%3Daps\" target=\"_blank\" rel=\"nofollow noopener\">souris</a> Bluetooth.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Et niveau syst&egrave;me de fichier, l&rsquo;impl&eacute;mentation de <a href=\"https://fr.wikipedia.org/wiki/Btrfs\">BTRFS</a> va vous permettre de roll-backer en cas de probl&egrave;me apr&egrave;s une mise &agrave; jour.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Mais la nouveaut&eacute; phare de cette release, c&rsquo;est <strong>Kali Undercover</strong> qui est tout simplement un th&egrave;me aux couleurs de Windows que vous pouvez activer &agrave; tout moment pour ne pas stresser votre entourage. Quoi de plus inoffensif qu&rsquo;une machine Windows avec le fond d&rsquo;&eacute;cran par d&eacute;faut</p>',	'2019-11-27 10:03:21');

-- 2019-11-28 13:53:08
