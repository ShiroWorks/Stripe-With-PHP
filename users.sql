CREATE TABLE `users`
(
  `id` int
(11) NOT NULL AUTO_INCREMENT,
  `username` varchar
(20) DEFAULT NULL,
  `email` varchar
(255) DEFAULT NULL,
  `premium` tinyint
(1) DEFAULT NULL,
  PRIMARY KEY
(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
