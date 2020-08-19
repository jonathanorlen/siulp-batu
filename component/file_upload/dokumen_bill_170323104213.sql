/*
Navicat MySQL Data Transfer

Source Server         : pak Yuko
Source Server Version : 50539
Source Host           : 192.168.100.42:3306
Source Database       : obah

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2017-02-11 10:43:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for armada
-- ----------------------------
DROP TABLE IF EXISTS `armada`;
CREATE TABLE `armada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tarif_1` varchar(255) DEFAULT NULL,
  `tarif_2` varchar(255) DEFAULT NULL,
  `tarif_3` varchar(255) DEFAULT NULL,
  `status_armada` varchar(255) DEFAULT NULL,
  `tarif_sewa` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of armada
-- ----------------------------
INSERT INTO `armada` VALUES ('1', 'ride', '4', 'ride', '10000', '10000', '1000', '1', null);
INSERT INTO `armada` VALUES ('2', 'car', '1', 'Honda Jazz', '20000', '20000', '2000', '1', '400000');
INSERT INTO `armada` VALUES ('3', 'car', '2', 'alphart', '30000', '30000', '3000', '1', '800000');
INSERT INTO `armada` VALUES ('4', 'car', '3', 'taxi', '20000', '20000', '2000', '1', null);

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) DEFAULT NULL,
  `keterangan` longtext,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES ('3', 'Promo Tahun Baru', 'Semua armada discon 10 %', '1');
INSERT INTO `berita` VALUES ('5', 'Promo delivery 10%', 'promo semua kategori delivery hahaha ya itu lah kita hahahaha :)', '1');

-- ----------------------------
-- Table structure for biaya_tambahan
-- ----------------------------
DROP TABLE IF EXISTS `biaya_tambahan`;
CREATE TABLE `biaya_tambahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `tarif` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of biaya_tambahan
-- ----------------------------
INSERT INTO `biaya_tambahan` VALUES ('1', 'biaya tunggu', 'ride', '15000', 'biaya tambahan untuk saat menunggu penumpang', '1');
INSERT INTO `biaya_tambahan` VALUES ('2', 'over bagasi', 'ride', '20000', 'biaya tambahan untuk barang bawaan yang over', '1');
INSERT INTO `biaya_tambahan` VALUES ('3', 'dll', 'ride', '25000', 'biaya dll untuk yang lain', '1');
INSERT INTO `biaya_tambahan` VALUES ('4', 'hahahaaaa21', 'car', '20000', 'masdnfndsafsd', '1');

-- ----------------------------
-- Table structure for chating
-- ----------------------------
DROP TABLE IF EXISTS `chating`;
CREATE TABLE `chating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `chat` longtext,
  `device` varchar(255) DEFAULT NULL,
  `groub` varchar(255) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of chating
-- ----------------------------
INSERT INTO `chating` VALUES ('1', 'RIDE_170206092912', 'popok', 'd73e72170d03f6b8', 'client', 'read');
INSERT INTO `chating` VALUES ('2', 'RIDE_170206092912', 'Ya', 'feceb6c8bfbd06b0', 'driver', 'read');
INSERT INTO `chating` VALUES ('3', 'RIDE_170206092912', 'popo', 'd73e72170d03f6b8', 'client', 'read');
INSERT INTO `chating` VALUES ('4', 'RIDE_170206092912', 'Kkkkllll', 'feceb6c8bfbd06b0', 'driver', 'read');
INSERT INTO `chating` VALUES ('5', 'RIDE_170206100007', ':)', 'd73e72170d03f6b8', 'client', 'read');
INSERT INTO `chating` VALUES ('6', 'RIDE_170206100007', 'Apa sih', 'feceb6c8bfbd06b0', 'driver', 'read');
INSERT INTO `chating` VALUES ('7', 'RIDE_170206100007', 'gpp', 'd73e72170d03f6b8', 'client', 'read');
INSERT INTO `chating` VALUES ('8', 'RIDE_170207084524', 'Jo', 'feceb6c8bfbd06b0', 'driver', 'read');
INSERT INTO `chating` VALUES ('9', 'RIDE_170207084524', 'Hai', 'a2fd59d0587c82b8', 'client', 'read');
INSERT INTO `chating` VALUES ('10', 'RIDE_170207084524', 'Koki', 'a2fd59d0587c82b8', 'client', 'read');
INSERT INTO `chating` VALUES ('11', 'RIDE_170207085813', 'Tes', '8f2d1e45c1cc7fc8', 'client', 'read');
INSERT INTO `chating` VALUES ('12', 'RIDE_170207085813', 'Iya', 'feceb6c8bfbd06b0', 'driver', 'read');
INSERT INTO `chating` VALUES ('13', 'RIDE_170207090110', 'Tess', '8f2d1e45c1cc7fc8', 'client', 'read');
INSERT INTO `chating` VALUES ('14', 'RIDE_170207090110', 'Pak', 'feceb6c8bfbd06b0', 'driver', 'read');
INSERT INTO `chating` VALUES ('15', 'RIDE_170207090110', 'Kkk', 'feceb6c8bfbd06b0', 'driver', 'read');

-- ----------------------------
-- Table structure for client
-- ----------------------------
DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `device` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `saldo` varchar(255) DEFAULT NULL,
  `status_voucher` varchar(255) DEFAULT NULL,
  `tanggal_registrasi` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_client` varchar(255) DEFAULT NULL,
  `mark` varchar(255) DEFAULT NULL,
  `kode_aktivasi` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of client
-- ----------------------------
INSERT INTO `client` VALUES ('1', 'd73e72170d03f6b8', 'yuko', '0856639280', 'yuko@gmail.com', '327244', '0', '2017-02-06 09:25:25', '1', null, '0092525');
INSERT INTO `client` VALUES ('2', 'a2fd59d0587c82b8', 'Uhaww', '085774581', 'uhaw@gmail.com', '327244', '0', '2017-02-07 08:41:37', '1', null, '0084137');
INSERT INTO `client` VALUES ('3', '8f2d1e45c1cc7fc8', 'Adie Listiyo 89', '082227387666', 'adielistyo1@gmail.com', '36000', '0', '2017-02-07 08:56:03', '1', null, '0085603');

-- ----------------------------
-- Table structure for driver
-- ----------------------------
DROP TABLE IF EXISTS `driver`;
CREATE TABLE `driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `device` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `tanggal_registrasi` date DEFAULT NULL,
  `kode_armada` varchar(255) DEFAULT NULL,
  `status_driver` varchar(255) DEFAULT NULL,
  `kode_aktivasi` varchar(225) DEFAULT NULL,
  `lat_driver` varchar(255) DEFAULT NULL,
  `lon_driver` varchar(255) DEFAULT NULL,
  `saldo` varchar(255) DEFAULT NULL,
  `poin` varchar(255) DEFAULT '0',
  `rating` varchar(255) DEFAULT '0',
  `status` varchar(255) DEFAULT '',
  `location` varchar(225) DEFAULT NULL,
  `ktp` varchar(225) DEFAULT NULL,
  `sim` varchar(225) DEFAULT NULL,
  `kk` varchar(225) DEFAULT NULL,
  `berkas` varchar(225) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `upass` varchar(255) DEFAULT NULL,
  `nama_kendaraan` varchar(225) DEFAULT NULL,
  `nomor_polisi` varchar(225) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `no_rekening` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of driver
-- ----------------------------
INSERT INTO `driver` VALUES ('1', 'd73e72170d03f6b8', 'jeneng asli', 'Jl pamungkasan timur no 8 aasd', '0876654321', '2017-02-06', '4', '1', '092123', null, null, '10000', '0', '4.75', 'offline', '1', '170206032119.png|', '170206032111.png|', '170206032104.jpg|', null, null, null, null, null, null, null);
INSERT INTO `driver` VALUES ('2', null, 'mbohhhh', 'wkwkwk', '913047234', '2017-02-06', '4', 'pending', '022946', null, null, null, '0', '0', '', '1', '170206082928.jpg|', '|', '|', null, null, null, null, null, null, null);
INSERT INTO `driver` VALUES ('3', null, 'dsadsadsdsa', 'saddsasad', '432432432432432', '2017-02-06', '4', 'pending', '030125', null, null, null, '0', '0', '', '1', '170206090111.jpg|', '|', '|', null, null, null, null, null, null, null);
INSERT INTO `driver` VALUES ('4', null, 'asdasdasda', 'vbfbgvfbgfbgfbgfbgbgf', '32432321324432324', '2017-02-06', '4', 'pending', '031942', null, null, null, '0', '0', '', '1', null, null, null, '170206091939.JPG|170206091934.jpg|170206091930.JPG|', null, null, null, null, null, null);
INSERT INTO `driver` VALUES ('6', '8f2d1e45c1cc7fc8', 'Pak edi', 'jl tumengung suryo', '0876654321', '2017-02-07', '4', '1', '093518', null, null, null, '0', '0', '', '1', null, null, null, '170207033515.jpg|170207033511.JPG|', 'edi', 'd2b9673bfa3bbdf1680e99136bbfeb76', null, null, null, '');
INSERT INTO `driver` VALUES ('7', null, 'Anam', 'Jln Ijen', '08909876543', '2017-02-10', '3', 'pending', '035133', null, null, null, '0', '0', '', '1', null, null, null, '170210095129.jpg|', 'Anam', '9212cc0efd90c80f88c612d4f9dee8de', 'Tank', 'N 451 B', 'BANK NEGARA INDONESIA', '098987654');
INSERT INTO `driver` VALUES ('8', null, '1', '1', '1', '2017-02-10', '4', 'pending', '035312', null, null, null, '0', '0', '', '1', null, null, null, '|', '123', 'a884aaede92e08a55ccee7d055ae9798', 'vespa', 'n1p', null, '12345');
INSERT INTO `driver` VALUES ('9', null, 'TESTSETSETSET', 'RETRTSDTRSDFT', '123', '2017-02-10', '4', 'pending', '035716', null, null, null, '0', '0', '', '1', null, null, null, '|', '122333', '40e5c5086c38c5e4b04fdc653a12c5c2', '111', '111222333', null, '111');
INSERT INTO `driver` VALUES ('10', null, 'ANAMANAM', 'BBBBBBB', '3456789876', '2017-02-10', '2', 'pending', '040130', null, null, null, '0', '0', '', '3', null, null, null, '|', 'qwerty', 'd5f25388966e234f347b73f055c33454', 'BEMO', 'N 72V', 'BANK NEGARA INDONESIA', '09876523');

-- ----------------------------
-- Table structure for kategori_armada
-- ----------------------------
DROP TABLE IF EXISTS `kategori_armada`;
CREATE TABLE `kategori_armada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `keterangan` longtext,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori_armada
-- ----------------------------
INSERT INTO `kategori_armada` VALUES ('1', 'low', 'low cars', '1');
INSERT INTO `kategori_armada` VALUES ('2', 'high', 'hight', '1');
INSERT INTO `kategori_armada` VALUES ('3', 'taxi', 'taxi', '1');
INSERT INTO `kategori_armada` VALUES ('4', 'ojek', 'ojek', '1');

-- ----------------------------
-- Table structure for kategori_delivery
-- ----------------------------
DROP TABLE IF EXISTS `kategori_delivery`;
CREATE TABLE `kategori_delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori_delivery
-- ----------------------------
INSERT INTO `kategori_delivery` VALUES ('1', 'Food');
INSERT INTO `kategori_delivery` VALUES ('2', 'Market');
INSERT INTO `kategori_delivery` VALUES ('3', 'Ticket');

-- ----------------------------
-- Table structure for kategori_menu
-- ----------------------------
DROP TABLE IF EXISTS `kategori_menu`;
CREATE TABLE `kategori_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_menu` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori_menu
-- ----------------------------
INSERT INTO `kategori_menu` VALUES ('1', 'Makanan');
INSERT INTO `kategori_menu` VALUES ('2', 'Minuman');

-- ----------------------------
-- Table structure for kategori_produk
-- ----------------------------
DROP TABLE IF EXISTS `kategori_produk`;
CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(225) DEFAULT NULL,
  `keterangan` longtext,
  `img` varchar(225) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori_produk
-- ----------------------------
INSERT INTO `kategori_produk` VALUES ('1', 'ojek', 'hanya untuk ojek', '161222042409.png|', '1');

-- ----------------------------
-- Table structure for konfirmasi_topup
-- ----------------------------
DROP TABLE IF EXISTS `konfirmasi_topup`;
CREATE TABLE `konfirmasi_topup` (
  `id` int(13) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `rekening` varchar(255) DEFAULT NULL,
  `nominal` varchar(255) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of konfirmasi_topup
-- ----------------------------
INSERT INTO `konfirmasi_topup` VALUES ('0', 'driver', '', '12342423', '20000', '2017-02-11', 'pending');
INSERT INTO `konfirmasi_topup` VALUES ('1', 'kjhkjhkjh', 'wqhv', 'jkkjjkh', 'kjhjkhkjh', null, 'oke');

-- ----------------------------
-- Table structure for location
-- ----------------------------
DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of location
-- ----------------------------
INSERT INTO `location` VALUES ('1', 'Malang');
INSERT INTO `location` VALUES ('2', 'Bandung');
INSERT INTO `location` VALUES ('3', 'Yogyakarta');

-- ----------------------------
-- Table structure for master_payment
-- ----------------------------
DROP TABLE IF EXISTS `master_payment`;
CREATE TABLE `master_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bonus` varchar(225) DEFAULT NULL,
  `potongan` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_payment
-- ----------------------------
INSERT INTO `master_payment` VALUES ('1', '100000', '20000');

-- ----------------------------
-- Table structure for master_user
-- ----------------------------
DROP TABLE IF EXISTS `master_user`;
CREATE TABLE `master_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(2) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` longtext,
  `last_login` datetime DEFAULT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_user
-- ----------------------------
INSERT INTO `master_user` VALUES ('1', '1', 'Astroboy', 'astro', '8cd07cf78166032f36fd06cb40163942', null, 'Jabatan 1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_resto` varchar(255) DEFAULT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `kode_kategori` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `harga` varchar(225) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '5', 'kokom', null, '2', 'Minuman', '10000', null);
INSERT INTO `menu` VALUES ('2', '5', 'kikim', null, '2', 'Minuman', '5000', null);
INSERT INTO `menu` VALUES ('3', '5', 'Aspal', null, '1', 'Makanan', '20000', 'adaw');
INSERT INTO `menu` VALUES ('4', '5', 'awdadw', null, '1', 'Makanan', '21345', 'hehe');
INSERT INTO `menu` VALUES ('5', '6', 'popok', null, '1', 'Makanan', '20000', 'hahaha');
INSERT INTO `menu` VALUES ('6', '6', 'mboh', null, '1', 'Makanan', '20000', 'asd');
INSERT INTO `menu` VALUES ('7', '6', 'auhh gelap', null, '1', 'Makanan', '19000', 'hahahah');
INSERT INTO `menu` VALUES ('8', '6', 'gektrk', null, '2', 'Minuman', '5000', 'sdfdg');

-- ----------------------------
-- Table structure for menu_temp
-- ----------------------------
DROP TABLE IF EXISTS `menu_temp`;
CREATE TABLE `menu_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(225) DEFAULT NULL,
  `kode_resto` varchar(225) DEFAULT NULL,
  `menu` varchar(225) DEFAULT NULL,
  `kode_kategori` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu_temp
-- ----------------------------
INSERT INTO `menu_temp` VALUES ('7', 'TR_170208041407', '1', 'awwwww', null, null, null, null);
INSERT INTO `menu_temp` VALUES ('8', 'TR_170208041407', '1', 'pp', null, null, null, null);
INSERT INTO `menu_temp` VALUES ('9', 'TR_170208041458', '1', 'awaweaw', null, null, null, null);
INSERT INTO `menu_temp` VALUES ('10', 'TR_170208043222', '1', 'gerengan', '1', 'Makanan', null, null);
INSERT INTO `menu_temp` VALUES ('11', 'TR_170210045514', '6', 'Nasi goreng', '1', 'Makanan', null, null);
INSERT INTO `menu_temp` VALUES ('12', 'TR_170210045703', '6', 'asdasd', '1', 'Makanan', null, null);
INSERT INTO `menu_temp` VALUES ('13', 'TR_170211085750', '5', 'pizza', '1', 'Makanan', null, null);
INSERT INTO `menu_temp` VALUES ('14', 'TR_170211093306', '5', 'Aspal', '1', 'Makanan', '200000', 'Adaw');
INSERT INTO `menu_temp` VALUES ('17', 'TR_170211093515', '5', 'Anam', '1', 'Makanan', '20000', 'Lumayan');
INSERT INTO `menu_temp` VALUES ('18', 'TR_170211095902', '5', 'awaw', '2', 'Minuman', '123456', 'dawdawds');

-- ----------------------------
-- Table structure for opsi_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `opsi_transaksi`;
CREATE TABLE `opsi_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(225) DEFAULT NULL,
  `kode_menu` varchar(225) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of opsi_transaksi
-- ----------------------------

-- ----------------------------
-- Table structure for payment_driver
-- ----------------------------
DROP TABLE IF EXISTS `payment_driver`;
CREATE TABLE `payment_driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(255) DEFAULT NULL,
  `kode_driver` varchar(255) DEFAULT NULL,
  `nominal_payment` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pembayaran` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of payment_driver
-- ----------------------------
INSERT INTO `payment_driver` VALUES ('1', 'TRNF_201702083355', 'feceb6c8bfbd06b0', '100000', 'payment driver', '2017-02-08 09:33:55', null);

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) DEFAULT NULL,
  `id_kategori` varchar(255) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `keterangan` longtext,
  `tarif1` varchar(255) DEFAULT NULL,
  `tarif2` varchar(255) DEFAULT NULL,
  `tarif3` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `promo` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES ('1', 'ojek motor', '1', 'ojek', 'test', '1000', '2000', '3000', '161222042454.png|', 'Pilih', '1');

-- ----------------------------
-- Table structure for resto
-- ----------------------------
DROP TABLE IF EXISTS `resto`;
CREATE TABLE `resto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) DEFAULT NULL,
  `keterangan` varchar(225) DEFAULT NULL,
  `logo` varchar(225) DEFAULT NULL,
  `jam_buka` varchar(225) DEFAULT NULL,
  `jam_tutup` varchar(225) DEFAULT NULL,
  `lat` varchar(225) DEFAULT NULL,
  `lon` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of resto
-- ----------------------------
INSERT INTO `resto` VALUES ('5', 'Nelongso', 'nelongso ajahh', '170210041947.png|', '00:12', '12:12', '-7.9928274', '112.61669419999998', 'Jalan Prenjak Bat, Sukun, Malang City, East Java, Indonesia', '1', '1');
INSERT INTO `resto` VALUES ('6', 'Warung Joglo', 'Warung joglo', '170210042510.jpg|', '08:00', '17:00', '-7.965963125079313', '112.62004547907213', 'Jl. Simpang Ijen, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65145, Indonesia', '1', '1');

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poin` varchar(225) DEFAULT NULL,
  `idr_rating` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('3', '5', '20000');

-- ----------------------------
-- Table structure for topup
-- ----------------------------
DROP TABLE IF EXISTS `topup`;
CREATE TABLE `topup` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `rekning` varchar(255) DEFAULT NULL,
  `device` varchar(225) DEFAULT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `topup` varchar(225) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topup
-- ----------------------------
INSERT INTO `topup` VALUES ('0', null, null, 'a2fd59d0587c82b8', 'Uhaww', '50000', '2017-02-08 09:51:59');

-- ----------------------------
-- Table structure for transaksi_bermasalah
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_bermasalah`;
CREATE TABLE `transaksi_bermasalah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(255) DEFAULT NULL,
  `device_client` varchar(255) DEFAULT NULL,
  `nama_client` varchar(255) DEFAULT NULL,
  `tanggal_order` varchar(255) DEFAULT NULL,
  `device_driver` varchar(255) DEFAULT NULL,
  `nama_driver` varchar(255) DEFAULT NULL,
  `permasalahan` text,
  `keterangan` text,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi_bermasalah
-- ----------------------------
INSERT INTO `transaksi_bermasalah` VALUES ('1', 'RIDE_170114094517', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('2', 'CAR_170114094831', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('3', 'CAR_170114095025', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('4', 'RIDE_170114111126', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('5', 'RIDE_170114114537', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('6', 'RIDE_170114114715', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('7', 'CAR_170114114818', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('8', 'RIDE_170114120747', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('9', 'RIDE_170114124239', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('10', 'CAR_170114124654', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('11', 'RIDE_170116111553', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('12', 'RIDE_170116111654', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('13', 'CAR_170116113613', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('14', 'CAR_170116113821', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('15', 'CAR_170116113926', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('16', 'CAR_170116012834', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('17', 'CAR_170116013047', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('18', 'RENT_170116031341', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('19', 'RENT_170116031500', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('20', 'RENT_170116031631', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('21', 'RENT_170116031712', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('22', 'RENT_170116032754', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('23', 'RENT_170116032846', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('24', 'RENT_170117090224', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('25', 'RENT_170117095802', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('26', 'RENT_170117095908', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('27', 'RENT_170117040343', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('28', 'RENT_170117040437', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('29', 'RENT_170118104809', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('30', 'RENT_170118105025', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('31', 'RENT_170118105108', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('32', 'RENT_170118105141', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('33', 'RENT_170118111723', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('34', 'RENT_170118041947', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('35', 'RENT_170118042022', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('36', 'RENT_170118042509', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('37', 'RENT_170118042534', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('38', 'RENT_170119094006', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('39', 'RIDE_170119095937', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('40', 'RENT_170119104849', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('41', 'CAR_170119110704', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('42', 'CAR_170119110943', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('43', 'RENT_170119112213', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('44', 'RENT_170119112559', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('45', 'RIDE_170119113153', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('46', 'RENT_170119113223', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('47', 'RENT_170120022433', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('48', 'CUCI_170120030610', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('49', 'CUCI_170121103042', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('50', 'CUCI_170121103129', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('51', 'RIDE_170121103245', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('52', 'RIDE_170121103641', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('53', 'RIDE_170121103939', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('54', 'CUCI_170122124617', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('55', 'RIDE_170122124800', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('56', 'CAR_170122125128', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('57', 'RENT_170122125334', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('58', 'CUCI_170122125509', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('59', 'RIDE_170125091506', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('60', 'RIDE_170125092413', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('61', 'CAR_170125093011', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('62', 'CAR_170125093120', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('63', 'RENT_170125093408', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('64', 'CUCI_170125093520', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('65', 'RIDE_170125013154', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('66', 'RIDE_170125013557', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('67', 'RIDE_170125013652', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('68', 'RIDE_170125014844', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('69', 'RENT_170125015233', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('70', 'RIDE_170130110028', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('71', 'RIDE_170130111316', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('72', 'RIDE_170130033916', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('73', 'CAR_170130034802', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('74', 'RIDE_170131090250', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('75', 'RIDE_170131092529', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('76', 'RIDE_170131092551', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('77', 'CUCI_170131100416', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('78', 'RIDE_170131101250', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('79', 'RIDE_170131102037', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('80', 'RIDE_170131104636', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('81', 'RIDE_170131105931', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('82', 'RIDE_170131110158', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('83', 'RIDE_170131112135', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('84', 'RIDE_170131112236', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('85', 'RIDE_170131112403', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('86', 'RIDE_170131112457', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('87', 'RIDE_170131112610', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('88', 'RIDE_170131024827', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('89', 'RIDE_170131032515', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('90', 'RIDE_170131034505', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('91', 'RIDE_170131034542', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('92', 'RIDE_170131041030', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('93', 'RIDE_170131045348', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('94', 'RIDE_170201093755', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('95', 'RIDE_170201093853', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('96', 'RIDE_170201094258', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('97', 'RIDE_170202092410', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('98', 'RIDE_170202092501', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('99', 'RIDE_170202093404', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('100', 'CAR_170202093634', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('101', 'RIDE_170202120920', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('102', 'RIDE_170202015719', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('103', 'CAR_170202020730', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('104', 'RIDE_170202020945', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('105', 'RIDE_170202021316', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('106', 'RIDE_170202021528', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('107', 'RIDE_170202021900', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('108', 'RIDE_170202021924', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('109', 'RIDE_170202022007', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('110', 'RIDE_170202032331', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('111', 'RIDE_170202032946', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('112', 'RIDE_170202034151', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('113', 'RIDE_170202034222', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('114', 'RIDE_170202034259', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('115', 'RIDE_170202035003', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('116', 'RIDE_170202035118', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('117', 'RIDE_170202035152', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('118', 'RIDE_170202035303', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('119', 'RIDE_170202035410', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('120', 'RIDE_170202040317', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('121', 'RIDE_170202040718', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('122', 'RIDE_170202040851', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('123', 'RIDE_170203100843', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('124', 'RIDE_170203102854', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('125', 'RIDE_170203104959', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('126', 'RIDE_170203105756', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('127', 'RIDE_170203110519', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('128', 'RIDE_170203110733', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('129', 'RIDE_170203112151', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('130', 'RIDE_170203034037', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('131', 'RIDE_170204092651', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('132', 'RIDE_170204092912', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('133', 'RIDE_170204094814', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('134', 'RIDE_170204095142', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('135', 'RIDE_170204125952', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('136', 'RIDE_170204010130', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('137', 'RIDE_170204011753', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('138', 'RIDE_170204011851', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('139', 'RIDE_170204014230', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('140', 'RIDE_170204014644', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('141', 'RIDE_170204014955', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('142', 'RIDE_170206092833', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('143', 'RIDE_170206092912', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('144', 'RIDE_170206094257', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('145', 'RIDE_170206094522', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('146', 'RIDE_170206100007', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('147', 'CAR_170206101116', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('148', 'RENT_170206101314', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('149', 'RIDE_170206013722', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('150', 'RIDE_170206014746', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('151', 'RIDE_170206014940', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('152', 'RIDE_170206015528', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('153', 'RIDE_170207084524', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('154', 'RIDE_170207085813', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('155', 'RIDE_170207090110', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('156', 'RIDE_170207090641', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('157', 'RIDE_170207090921', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('158', 'CAR_170207091130', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('159', 'RIDE_170207091849', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('160', 'RIDE_170207091927', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('161', 'RIDE_170207091954', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('162', 'CAR_170207092129', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('163', 'RENT_170207094038', null, null, null, null, null, null, null, null);
INSERT INTO `transaksi_bermasalah` VALUES ('164', 'RIDE_170207032052', null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for transaksi_order
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_order`;
CREATE TABLE `transaksi_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(255) DEFAULT NULL,
  `device_client` varchar(255) DEFAULT NULL,
  `nama_client` varchar(255) DEFAULT NULL,
  `telp_client` varchar(255) DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `tanggal_order` date DEFAULT NULL,
  `jam_order` varchar(255) DEFAULT NULL,
  `alamat_penjemputan` text,
  `lat_penjemputan` varchar(255) DEFAULT NULL,
  `lon_penjemputan` varchar(255) DEFAULT NULL,
  `alamat_tujuan` longtext,
  `lat_tujuan` varchar(255) DEFAULT NULL,
  `lon_tujuan` varchar(255) DEFAULT '',
  `location` varchar(225) DEFAULT NULL,
  `jarak` varchar(255) DEFAULT NULL,
  `list_tambahan` varchar(225) DEFAULT NULL,
  `biaya_tambahan` varchar(225) DEFAULT NULL,
  `total` varchar(225) DEFAULT NULL,
  `total_biaya` varchar(255) DEFAULT NULL,
  `device_driver` varchar(255) DEFAULT NULL,
  `nama_driver` varchar(255) DEFAULT NULL,
  `telp_driver` varchar(255) DEFAULT NULL,
  `kode_armada` varchar(255) DEFAULT NULL,
  `nama_armada` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0',
  `rating` varchar(255) DEFAULT NULL,
  `status_danger` varchar(225) DEFAULT '',
  `keperluan` longtext,
  `estimasi_berat` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi_order
-- ----------------------------
INSERT INTO `transaksi_order` VALUES ('9', 'RIDE_170206014746', 'd73e72170d03f6b8', 'yuko', '0856639280', null, '2017-02-06', '01:47:48', 'Jl. Besar Ijen No.81, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9645212', '112.62489099999993', 'Jl. Manyar No.10, Sukun, Kota Malang, Jawa Timur 65147, Indonesia', '-7.992518921790171', '112.61845955609739', 'Malang', '4.3', '1|2', '35000', '78000', '43000', 'feceb6c8bfbd06b0', 'Pak driver 1', '0876654321', '1', 'ride', 'selesai', '4', '', null, null, 'cash');
INSERT INTO `transaksi_order` VALUES ('10', 'RIDE_170206014940', 'd73e72170d03f6b8', 'yuko', '0856639280', null, '2017-02-06', '01:49:45', 'Jl. Besar Ijen No.80, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9647367', '112.62521919999995', 'Jl. Jakarta No.22, Penanggungan, Klojen, Kota Malang, Jawa Timur 65113, Indonesia', '-7.963036641953496', '112.6235025862304', 'Malang', '0.4', '1|2', '85000', '89000', '4000', 'feceb6c8bfbd06b0', 'Pak driver 1', '0876654321', '1', 'ride', 'selesai', '5', '', null, null, 'saldo');
INSERT INTO `transaksi_order` VALUES ('11', 'RIDE_170207084524', 'a2fd59d0587c82b8', 'Uhaww', '085774581', null, '2017-02-07', '08:45:33', 'Jl. Besar Ijen No.80, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9647367', '112.62521919999995', 'Jl. Prenjak Timur No.5-23, Sukun, Kota Malang, Jawa Timur 65147, Indonesia', '-7.992327678609904', '112.61805186032713', 'Malang', '4.3', null, null, '43000', '43000', 'feceb6c8bfbd06b0', 'Pak driver 1', '0876654321', '1', 'ride', 'selesai', '5', '', null, null, 'cash');
INSERT INTO `transaksi_order` VALUES ('12', 'RIDE_170207085813', '8f2d1e45c1cc7fc8', 'Adie Listiyo', '082227387666', null, '2017-02-07', '08:58:39', 'Jl. T.G.P. No.8, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9646014', '112.62524940000003', 'Jl. Raden Intan No.99, Arjosari, Blimbing, Kota Malang, Jawa Timur 65126, Indonesia', '-7.934149666921132', '112.65946881481932', 'Malang', '8.4', '1', '15000', '99000', '84000', 'feceb6c8bfbd06b0', 'Pak driver 1', '0876654321', '1', 'ride', 'selesai', '5', '', null, null, 'cash');
INSERT INTO `transaksi_order` VALUES ('13', 'RIDE_170207090110', '8f2d1e45c1cc7fc8', 'Adie Listiyo', '082227387666', null, '2017-02-07', '09:01:17', 'Jl. Besar Ijen No.80, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9647337', '112.6252154', 'Jl. Kolonel Slamet Riyadi No.159, Sukun, Kota Malang, Jawa Timur 65147, Indonesia', '-7.997325413857102', '112.61920042047659', 'Malang', '5.2', '2', '20000', '72000', '52000', 'feceb6c8bfbd06b0', 'Pak driver 1', '0876654321', '1', 'ride', 'selesai', '5', '', null, null, 'cash');
INSERT INTO `transaksi_order` VALUES ('14', 'RIDE_170207090641', '8f2d1e45c1cc7fc8', 'Adie Listiyo', '082227387666', null, '2017-02-07', '09:06:55', 'Jl. Besar Ijen No.80, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9647367', '112.62521919999995', 'Jl. Prenjak Timur No.5-23, Sukun, Kota Malang, Jawa Timur 65147, Indonesia', '-7.992391426346625', '112.61809477567137', 'Malang', '4.3', null, null, '43000', '43000', 'feceb6c8bfbd06b0', 'Pak driver 1', '0876654321', '1', 'ride', 'selesai', '5', '', null, null, 'cash');
INSERT INTO `transaksi_order` VALUES ('15', 'RIDE_170207090921', '8f2d1e45c1cc7fc8', 'Adie Listiyo', '082227387666', null, '2017-02-07', '09:09:27', 'Jl. Besar Ijen No.80, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9647369', '112.62526930000001', 'Jl. Jakarta No.34, Penanggungan, Klojen, Kota Malang, Jawa Timur 65113, Indonesia', '-7.96341935562985', '112.62198627616577', 'Malang', '0.6', null, null, '6000', '6000', 'feceb6c8bfbd06b0', 'Pak driver 1', '0876654321', '1', 'ride', 'selesai', '5', '', null, null, 'saldo');
INSERT INTO `transaksi_order` VALUES ('16', 'CAR_170207091130', '8f2d1e45c1cc7fc8', 'Adie Listiyo', '082227387666', null, '2017-02-07', '09:11:35', 'Jl. Besar Ijen No.80, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9647369', '112.62526930000001', 'Jl. Jakarta No.22, Penanggungan, Klojen, Kota Malang, Jawa Timur 65113, Indonesia', '-7.963143095788904', '112.62320936347656', 'Malang', '0.4', null, null, '8000', '8000', 'feceb6c8bfbd06b0', 'Pak driver 1', '0876654321', '2', 'Honda Jazz', 'selesai', '4', '', null, null, 'saldo');
INSERT INTO `transaksi_order` VALUES ('17', 'RIDE_170207091849', 'a2fd59d0587c82b8', 'Uhaww', '085774581', null, '2017-02-07', null, 'Jl. Besar Ijen No.80, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9647367', '112.62521919999995', 'Jl. T.G.P. No.8, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.964477647827902', '112.62510387487316', 'Malang', null, null, null, null, null, null, null, null, '1', 'ride', '0', null, '', null, null, null);
INSERT INTO `transaksi_order` VALUES ('18', 'RIDE_170207091927', 'a2fd59d0587c82b8', 'Uhaww', '085774581', null, '2017-02-07', null, 'Jl. Besar Ijen No.81, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9645221', '112.62491130000001', 'Jl. Suropati No.8, Klojen, Kota Malang, Jawa Timur 65111, Indonesia', '-7.975875866457316', '112.63354322965868', 'Malang', null, null, null, null, null, null, null, null, '1', 'ride', '0', null, '', null, null, null);
INSERT INTO `transaksi_order` VALUES ('19', 'RIDE_170207091954', 'a2fd59d0587c82b8', 'Uhaww', '085774581', null, '2017-02-07', null, 'Jl. Besar Ijen No.81, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9645173', '112.62490709999997', 'Jl. Soekarno Hatta No.21, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141, Indonesia', '-7.944780042423343', '112.61895063847595', 'Malang', null, null, null, null, null, null, null, null, '1', 'ride', '0', null, '', null, null, null);
INSERT INTO `transaksi_order` VALUES ('20', 'CAR_170207092129', 'a2fd59d0587c82b8', 'Uhaww', '085774581', null, '2017-02-07', null, 'Jl. T.G.P. No.8, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9645351', '112.6252657', 'Jl. Saxsophone No.69, Tunggulwulung, Kec. Lowokwaru, Kota Malang, Jawa Timur 65143, Indonesia', '-7.924722756838047', '112.60369554746538', 'Malang', null, null, null, null, null, null, null, null, '2', 'Honda Jazz', '0', null, '', null, null, null);
INSERT INTO `transaksi_order` VALUES ('21', 'RENT_170207094038', 'a2fd59d0587c82b8', 'Uhaww', '085774581', '2017-02-10', '2017-02-08', '09:40', 'Jl. Besar Ijen No.80, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.964524193130127', '112.62509045396722', null, null, '', null, null, null, null, null, '800000', '8f2d1e45c1cc7fc8', 'Pak edi', '0876654321', '2', 'Honda Jazz', 'selesai', null, '', 'Kitan', null, null);
INSERT INTO `transaksi_order` VALUES ('22', 'RIDE_170207032052', 'd73e72170d03f6b8', 'yuko', '0856639280', null, '2017-02-07', '03:21:07', 'Jl. Besar Ijen No.80, Oro-oro Dowo, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '-7.9647367', '112.62521919999995', 'Jalan Prenjak Timur, Sukun, Kota Malang, Jawa Timur, Indonesia', '-7.993113900000001', '112.61676439999997', 'Malang', '4.5', null, null, null, '45000', null, null, null, '1', 'ride', 'batal_client', null, '', null, null, 'cash');
DROP TRIGGER IF EXISTS `update`;
DELIMITER ;;
CREATE TRIGGER `update` AFTER INSERT ON `transaksi_order` FOR EACH ROW INSERT INTO transaksi_bermasalah
        (
kode_transaksi       
        )
  VALUES
        (
NEW.kode_transaksi
        )
;;
DELIMITER ;
