CREATE TABLE `users` (
  `username` varchar(25) NOT NULL DEFAULT '',
  `passwd` varbinary(512) DEFAULT NULL,
  `salt` varbinary(512) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;