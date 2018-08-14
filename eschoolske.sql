
CREATE TABLE IF NOT EXISTS `mp_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) NOT NULL,
  `page_desc` text,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `parent` varchar(255) NOT NULL DEFAULT '0',
  `status` enum('A','I') NOT NULL DEFAULT 'A',
  `page_alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `page_name` (`page_alias`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO `mp_pages` (`page_id`, `page_title`, `page_desc`, `meta_keywords`, `meta_desc`, `sort_order`, `parent`, `status`, `page_alias`) VALUES
(2, 'Become A Tutor', '', 'tags', 'dasdasd', 1, '-1', 'A', 'become-a-tutor'),
(4, 'Contact Us', '', 'dasd', 'asdasd', 3, '-1', 'A', 'contact-us'),
(13, 'Upcoming Events', '', '', '', 0, '-1', 'A', 'upcoming-events');



DROP TABLE IF EXISTS `mp_tagline`;
CREATE TABLE IF NOT EXISTS `mp_tagline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagline1` varchar(255) DEFAULT NULL,
  `tagline2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



INSERT INTO `mp_tagline` (`id`, `tagline1`, `tagline2`) VALUES
(1, 'Welcome', 'This is an education platform for finding and adding tutor\\\'s information and adding upcoming sports and events');
COMMIT;
