IndoorMap - PHP
======

Simply create an indoor map thanks to PHP & MySQL. This is a project I made for a meeting in Paris back in 2013.

### Table structure

    CREATE TABLE `exposants` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nom` varchar(255) NOT NULL,
      `width` float NOT NULL,
      `length` float NOT NULL,
      `posX` float NOT NULL,
      `posY` float NOT NULL,
      `numerotation` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
    )
