CREATE TABLE IF NOT EXISTS `links` (
  `url` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `imageUrl` text NOT NULL,
  `imageAlt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
