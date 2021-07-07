CREATE DATABASE `latih_id`;
USE `latih_id`;

CREATE TABLE `modul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` enum('bisnis','pemula') NOT NULL DEFAULT 'pemula',
  `foto` varchar(50),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `modul` VALUES ('1', 'Cara Jitu Merencanakan Keuangan Bisnismu', 25000, 'pemula', 'bisnis-jitu.png');
INSERT INTO `modul` VALUES ('2', 'Jurus Ampuh Memaksimalkan Marketplace', 15000, 'bisnis', 'marketplace.png');
INSERT INTO `modul` VALUES ('3', 'Memulai Bisnis Sejak Kuliah, Mengapa Tidak?', 20000, 'bisnis', 'sejak-kuliah.png');