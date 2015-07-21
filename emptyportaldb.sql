
--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `idBanner` int(10) NOT NULL AUTO_INCREMENT,
  `idPortal` int(10) NOT NULL,
  `position` varchar(200) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `script` text,
  PRIMARY KEY (`idBanner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `idCategory` int(10) unsigned NOT NULL,
  `category` varchar(80) DEFAULT NULL,
  `uri` varchar(45) DEFAULT NULL,
  `position` smallint(3) NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `idComment` int(10) NOT NULL AUTO_INCREMENT,
  `codSoftware` varchar(4) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `image` varchar(6) DEFAULT NULL,
  `title` varchar(75) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`idComment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `codContent` varchar(20) NOT NULL,
  `type` varchar(12) DEFAULT NULL,
  `section` varchar(12) DEFAULT NULL,
  `position` smallint(3) unsigned DEFAULT NULL,
  `menu` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(45) DEFAULT NULL,
  `content` text,
  `uri` varchar(45) NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT '1',
  `synced` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`codContent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portal`
--

CREATE TABLE IF NOT EXISTS `portal` (
  `mobileMonetization` text,
  `title` varchar(255) DEFAULT NULL,
  `jsAnalytics` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `portal` (`mobileMonetization`, `title`, `jsAnalytics`) VALUES (NULL, 'Portal', '');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `word` varchar(45) NOT NULL,
  `count` int(10) DEFAULT NULL,
  PRIMARY KEY (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `codSoftware` char(4) NOT NULL DEFAULT '',
  `name` varchar(45) DEFAULT NULL,
  `uri` varchar(45) DEFAULT NULL,
  `exeType` varchar(3) DEFAULT NULL,
  `metaDescription` varchar(200) DEFAULT NULL,
  `metaKeywords` varchar(200) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `license` varchar(20) NOT NULL,
  `os` varchar(60) DEFAULT NULL,
  `developer` varchar(45) DEFAULT NULL,
  `developerWeb` varchar(100) NOT NULL,
  `brief` varchar(150) DEFAULT NULL,
  `detail` text,
  `featured` tinyint(1) unsigned DEFAULT '0',
  `hot` tinyint(1) unsigned DEFAULT '0',
  `showbanner` tinyint(1) unsigned DEFAULT '1',
  `downloads` int(11) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `rating` float(3,1) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT '1',
  `visible` tinyint(1) unsigned DEFAULT '1',
  `scriptDownloadPage` text,
  `scriptThankyouPage` text,
  `scriptLandingPage` text,
  `externalBundle` tinyint(4) NOT NULL DEFAULT '0',
  `externalBundleUrl` varchar(200) NOT NULL,
  PRIMARY KEY (`codSoftware`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software_category`
--

CREATE TABLE IF NOT EXISTS `software_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `codSoftware` char(4) DEFAULT NULL,
  `idCategory` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

ALTER TABLE `software` ADD `metaTitle` VARCHAR( 200 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `externalBundleUrl` ;