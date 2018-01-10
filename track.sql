--22.07.2013
ALTER TABLE  `instructor` ADD  `mname` VARCHAR( 100 ) NULL DEFAULT NULL AFTER  `fname` ;
ALTER TABLE  `instructor` ADD  `rang` VARCHAR( 255 ) NULL DEFAULT NULL AFTER  `photo` ;

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf16 NOT NULL,
  `description` text CHARACTER SET utf16,
  `src` varchar(100) CHARACTER SET utf16 NOT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
ALTER TABLE  `book` ADD  `sort_order` INT( 11 ) NULL DEFAULT NULL AFTER  `visible` ;
ALTER TABLE  `book` ADD  `preview_src` VARCHAR( 255 ) NULL DEFAULT NULL AFTER  `description` ;
ALTER TABLE  `book` ADD  `author` VARCHAR( 100 ) NULL DEFAULT NULL AFTER  `title` ;

--05.07.2013
ALTER TABLE  `photo_album` ADD  `description` TEXT NULL DEFAULT NULL AFTER  `title`;
