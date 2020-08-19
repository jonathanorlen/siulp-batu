/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50539
Source Host           : 127.0.0.7:3306
Source Database       : siulp

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2017-04-28 10:18:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agenda
-- ----------------------------
DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_kegiatan` varchar(255) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_mulai` varchar(255) DEFAULT NULL,
  `jam_selesai` varchar(255) DEFAULT NULL,
  `isi` text,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agenda
-- ----------------------------
INSERT INTO `agenda` VALUES ('1', 'nobar arema vs pusamania borneo FC', '2017-03-12', '2017-03-12', '18:00', '20:30', '<p><u><b>?</b></u><b>ayo nobar arema vs PBFC Minggu 12 Maret 2017</b><u></u></p>\"', '1');
INSERT INTO `agenda` VALUES ('2', 'Uklam Tahes', '2017-03-18', '2017-03-19', '08:00', '12:00', '<p>Jalan Sehat Bersama Walikota</p>', '1');
INSERT INTO `agenda` VALUES ('3', 'Konvoy Arema', '2017-03-15', '2017-03-17', '10:00', '17:30', '<p>ayo ikut my friend</p>\"\"', '1');
INSERT INTO `agenda` VALUES ('4', 'Jalan Jamaah Sekota malang', '2017-03-29', '2017-03-30', '06:30', '09:30', '<p>ikut lah jalan sehat sekota malang-batu ada hadiah doorprize 1buah sembako plus uang 200K&nbsp;</p>', '1');
INSERT INTO `agenda` VALUES ('5', 'Jalan sehat', '2017-03-30', '2017-03-31', '06:00', '10:00', '<p>jalan sehat kuy</p>', '1');

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(255) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `judul` text,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_petugas` varchar(255) DEFAULT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `jumlah_view` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES ('5', '001', 'berita', 'asasa123', '<p>assasa123</p>', '170406104422.jpg|', '2017-04-06', null, null, null, null, '10');
INSERT INTO `artikel` VALUES ('6', null, 'info umum', 'Beautiful batu', '<p>Batu merupakan Tempat wisata</p><p>\r\n\r\nBatu merupakan Tempat wisata\r\n\r\n<br></p><p>\r\n\r\nBatu merupakan Tempat wisata\r\n\r\n<br></p><p>\r\n\r\nBatu merupakan Tempat wisata\r\n\r\n<br></p>', '170406035512.jpeg|', '2017-04-06', null, null, null, null, '14');
INSERT INTO `artikel` VALUES ('7', null, 'berita', 'lorem ipsum', '<p>test</p>', '170406105507.jpg|', '2017-04-06', null, null, null, null, '8');
INSERT INTO `artikel` VALUES ('8', null, 'berita', 'lorem ipsum', '<p>test</p>', '170406040410.jpg|', '2017-04-06', null, null, null, null, '2');
INSERT INTO `artikel` VALUES ('9', '', 'berita', 'lorem ipsum', '<p>test</p>', '170406040447.jpg|', '2017-04-06', '', '', '', '', '4');
INSERT INTO `artikel` VALUES ('10', null, 'info umum', 'Batu Kota Indah ', '<p>Batu merupakan salah satu kota tercntik di indonesia yang tidak pernah sepi akan pengunjung</p>', '170406042214.jpg|', '2017-04-06', null, null, null, null, '1');
INSERT INTO `artikel` VALUES ('11', null, 'info umum', 'Batu 1000 pariwisata', '<p>Batu memiliki pesona yang tidak akalh indah dibanding dengan kota kota lain di indonesia</p>', '170406042313.jpg|', '2017-04-06', null, null, null, null, '2');
INSERT INTO `artikel` VALUES ('12', '002', 'peraturan', ' PERDA NOMOR 1 TAHUN 2000 TENTANG PENGATURAN PKL', '<p>&nbsp;a. bahwa untuk melakukan suatu kegiatan usaha ekonomi baik sektor\r\nformal maupun non formal dan atau Pedagang Kaki Lima adalah hak\r\ndari masyarakat dalam rangka memenuhi kebutuhan pokok;</p><p>b. bahwa keberadaan suatu usaha kegiatan sektor non formal dan\r\natau Pedagang Kaki Lima perlu dibina agar dapat berkembang\r\nmenjadi pedagang yang tangguh, ulet dan mandiri;&nbsp;</p><p>c. bahwa disamping<u> mempunyai</u> hak, masyarakat juga berkewajiban\r\nuntuk berperan aktif menjaga, memelihara, menunjang dan\r\nmewujudkan Kota Malang sebagai Kota Bersih, Indah, Tertib,\r\nAman dan Nyaman;</p><p>d. bahwa untuk mewujudkan sebagaimana dimaksud pada huruf <b>a</b>, <b>b</b>\r\ndan <b>c</b> konsideran ini perlu <u>diatur</u> dengan Peraturan Daerah.\r\n\r\n\r\n<br></p>', '170406053112.jpg|', '2017-04-06', null, null, null, null, '1');
INSERT INTO `artikel` VALUES ('13', null, 'berita', 'test', '<p>aaaa</p>', '170406093048.jpg|', '2017-04-06', null, null, null, null, '1');
INSERT INTO `artikel` VALUES ('14', null, 'berita', 'test', '<p>aaaas</p>', '170406093102.jpg|', '2017-04-06', null, null, null, null, '1');
INSERT INTO `artikel` VALUES ('15', null, 'info umum', 'test1', '<p>test</p>', '170406093846.jpg|', '2017-04-06', null, null, null, null, null);
INSERT INTO `artikel` VALUES ('16', null, 'info umum', 'test', '<p>awaws</p>', '170406093915.jpg|', '2017-04-06', null, null, null, null, null);
INSERT INTO `artikel` VALUES ('17', null, 'info umum', 'test', '<p>aaaa</p>', '170406093936.jpg|', '2017-04-06', null, null, null, null, null);
INSERT INTO `artikel` VALUES ('18', null, 'peraturan', 'PERDA No 2', '<p>test</p>', '170406094240.jpg|', '2017-04-06', null, null, null, null, null);
INSERT INTO `artikel` VALUES ('19', null, 'peraturan', 'PERDA No 2', '<p>test</p>', '170406094240.jpg|', '2017-04-06', null, null, null, null, null);
INSERT INTO `artikel` VALUES ('20', null, 'peraturan', 'test', '<p>aaa</p>', '170406094438.jpg|', '2017-04-06', null, null, null, null, null);
INSERT INTO `artikel` VALUES ('21', null, 'peraturan', 'test', '<p>awaw</p>', '170406094507.jpg|', '2017-04-06', null, null, null, null, null);
INSERT INTO `artikel` VALUES ('22', null, 'peraturan', 'perda no 3', '<p>test perda</p>', '170406094535.jpg|', '2017-04-06', null, null, null, null, null);

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES ('3', 'test123', '<p>berita test123</p>', '170403102726.jpg|', '2017-04-03');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `id_ym` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `handphone` varchar(255) DEFAULT NULL,
  `pin_bb` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------

-- ----------------------------
-- Table structure for data_pesan_forum
-- ----------------------------
DROP TABLE IF EXISTS `data_pesan_forum`;
CREATE TABLE `data_pesan_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_forum` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pesan` text,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of data_pesan_forum
-- ----------------------------
INSERT INTO `data_pesan_forum` VALUES ('3', 'F_0001', 'Diskusi', '324254545354', 'Astroboy', 'test', '2017-04-03', '14:23:00');
INSERT INTO `data_pesan_forum` VALUES ('4', 'F_0001', 'Diskusi', '324254545354', 'Astroboy', 'cccccc', '2017-04-03', '14:23:00');
INSERT INTO `data_pesan_forum` VALUES ('5', 'F_0002', 'Rapat', '324254545354', 'Astroboy', 'wkw\n', '2017-04-03', '14:46:00');
INSERT INTO `data_pesan_forum` VALUES ('6', 'F_0001', 'Diskusi', '197703142001011011', 'Anton Sanjaya', 'melok', '2017-04-03', '14:58:00');
INSERT INTO `data_pesan_forum` VALUES ('7', 'F_0001', 'Diskusi', '324254545354', 'Astroboy', 'oyi', '2017-04-03', '15:04:00');
INSERT INTO `data_pesan_forum` VALUES ('8', 'F_0001', 'Diskusi', '324254545354', 'Astroboy', 'sssssssss', '2017-04-03', '15:05:00');
INSERT INTO `data_pesan_forum` VALUES ('9', 'F_0001', 'Diskusi', '197703142001011011', 'Anton Sanjaya', 'joon aku njaluk duit', '2017-04-04', '14:40:00');
INSERT INTO `data_pesan_forum` VALUES ('10', 'F_0001', 'Diskusi', '197703142001011011', 'Anton Sanjaya', 'joon aku njaluk duit', '2017-04-04', '14:40:00');
INSERT INTO `data_pesan_forum` VALUES ('11', 'F_0003', 'Paket Pengadaan', '324254545354', 'Astroboy', 'Halo teman - teman', '2017-04-05', '15:07:00');
INSERT INTO `data_pesan_forum` VALUES ('12', 'F_0003', 'Paket Pengadaan', '324254545354', 'Astroboy', 'kamu lagi apa', '2017-04-05', '15:12:00');
INSERT INTO `data_pesan_forum` VALUES ('13', 'F_0001', 'Diskusi', '324254545354', 'Astroboy', 'wkwkwkwkwkw', '2017-04-07', '10:39:00');
INSERT INTO `data_pesan_forum` VALUES ('14', 'F_0003', 'Paket Pengadaan', '123456789', 'Joko Suwoyo', 'saya lagi makan bang !', '2017-04-07', '10:40:00');
INSERT INTO `data_pesan_forum` VALUES ('15', 'F_0003', 'Paket Pengadaan', '324254545354', 'Astroboy', 'oh makan apa ?\n', '2017-04-07', '10:40:00');
INSERT INTO `data_pesan_forum` VALUES ('16', 'F_0003', 'Paket Pengadaan', '123456789', 'Joko Suwoyo', 'makan kaki lo !!!!!!', '2017-04-07', '10:41:00');
INSERT INTO `data_pesan_forum` VALUES ('17', 'F_0003', 'Paket Pengadaan', '324254545354', 'Astroboy', 'abang jahat !! papa kita putus :v', '2017-04-07', '10:41:00');
INSERT INTO `data_pesan_forum` VALUES ('18', 'F_0003', 'Paket Pengadaan', '123456789', 'Joko Suwoyo', 'ok gpp\n', '2017-04-07', '10:41:00');
INSERT INTO `data_pesan_forum` VALUES ('19', 'F_0004', 'tes', '34546', 'Yola', 'cek', '2017-04-18', '15:08:00');
INSERT INTO `data_pesan_forum` VALUES ('20', 'F_0004', 'tes', '5525', 'Rena', 'iya', '2017-04-18', '15:09:00');

-- ----------------------------
-- Table structure for dokumen_paket
-- ----------------------------
DROP TABLE IF EXISTS `dokumen_paket`;
CREATE TABLE `dokumen_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_paket` varchar(255) DEFAULT NULL,
  `nama_dokumen` varchar(255) DEFAULT NULL,
  `jenis_dokumen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dokumen_paket
-- ----------------------------
INSERT INTO `dokumen_paket` VALUES ('1', 'PK_0001', 'dokumen_kak_170426084900.doc', 'kak');
INSERT INTO `dokumen_paket` VALUES ('2', 'PK_0002', 'dokumen_dpa_170426084947.pdf', 'dpa');
INSERT INTO `dokumen_paket` VALUES ('3', 'PK_0001', 'dokumen_dpa_170426085038.pdf', 'dpa');
INSERT INTO `dokumen_paket` VALUES ('4', 'PK_0002', 'dokumen_rup_170426085247.pdf', 'rup');
INSERT INTO `dokumen_paket` VALUES ('5', 'PK_0002', 'dokumen_kak_170426085247.doc', 'kak');
INSERT INTO `dokumen_paket` VALUES ('6', 'PK_0002', 'dokumen_hps_170426085247.xls', 'hps');
INSERT INTO `dokumen_paket` VALUES ('7', 'PK_0002', 'dokumen_survey_170426085247.pdf', 'survey');
INSERT INTO `dokumen_paket` VALUES ('8', 'PK_0002', 'dokumen_spesifikasi_170426085247.pdf', 'spesifikasi');
INSERT INTO `dokumen_paket` VALUES ('9', 'PK_0002', 'dokumen_bill_170426085247.xls', 'bill');
INSERT INTO `dokumen_paket` VALUES ('10', 'PK_0002', 'dokumen_rancangan_170426085247.doc', 'rancangan');
INSERT INTO `dokumen_paket` VALUES ('11', 'PK_0002', 'dokumen_bill_170426152232.jpg', 'bill');
INSERT INTO `dokumen_paket` VALUES ('12', 'PK_0002', 'dokumen_bill_170426152244.jpg', 'bill');

-- ----------------------------
-- Table structure for download
-- ----------------------------
DROP TABLE IF EXISTS `download`;
CREATE TABLE `download` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `jenis_dokumen` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of download
-- ----------------------------
INSERT INTO `download` VALUES ('7', 'Hukum', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('8', 'Hukum', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095833.gif|', '2017-03-16');
INSERT INTO `download` VALUES ('10', 'Humas', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('13', 'Humas', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('14', 'Humas', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('15', 'UMUM', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('16', 'UMUM', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('17', 'Umum', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of galeri
-- ----------------------------
INSERT INTO `galeri` VALUES ('2', 'awdsad', '<p>awdwadad</p>', '170405063759.jpg|', '2017-04-05', '1', 'awdasw');
INSERT INTO `galeri` VALUES ('3', 'sadsad', '<p>sadasd</p>', '170405063823.jpg|', '2017-04-05', '1', 'sada');
INSERT INTO `galeri` VALUES ('4', 'sadas', '<p>dasads</p>', '170405063848.jpg|', '2017-04-05', '1', 'sadsda');

-- ----------------------------
-- Table structure for histori_paket
-- ----------------------------
DROP TABLE IF EXISTS `histori_paket`;
CREATE TABLE `histori_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_paket` varchar(255) DEFAULT NULL,
  `field_perubahan` varchar(255) DEFAULT NULL,
  `data_baru` varchar(255) DEFAULT NULL,
  `data_lama` varchar(255) DEFAULT NULL,
  `kode_petugas` varchar(255) DEFAULT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of histori_paket
-- ----------------------------
INSERT INTO `histori_paket` VALUES ('1', 'PK_0002', '0', 'test', '0', '990099', 'anam', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('2', 'PK_0002', '0', 'test', '0', '990099', 'anam', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('3', 'PK_0003', '0', '0', '0', '324254545354', 'Astroboy', '2016-07-05 00:00:00');
INSERT INTO `histori_paket` VALUES ('4', 'PK_0003', '0', '0', '0', '324254545354', 'Astroboy', '2016-07-30 00:00:00');
INSERT INTO `histori_paket` VALUES ('5', 'PK_0003', '0', '0', '0', '324254545354', 'Astroboy', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('6', 'PK_0003', '0', '0', '0', '324254545354', 'Astroboy', '2016-08-09 00:00:00');
INSERT INTO `histori_paket` VALUES ('7', 'PK_0003', '0', '0', '0', '324254545354', 'Astroboy', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('8', 'PK_0003', '0', 'test', '0', '324254545354', 'Astroboy', '2016-12-16 00:00:00');
INSERT INTO `histori_paket` VALUES ('9', 'PK_0003', 'nama_paket', 'test 2', '0', '324254545354', 'Astroboy', '2017-04-15 11:02:48');
INSERT INTO `histori_paket` VALUES ('10', 'PK_0003', 'nama_paket', 'test 2234', 'test 2', '324254545354', 'Astroboy', '2017-04-15 11:02:52');
INSERT INTO `histori_paket` VALUES ('11', 'PK_0003', 'tanggal_pengajuan', '0', '0', '324254545354', 'Astroboy', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('12', 'PK_0001', 'nama_paket', 'Pengadaan Gasebo Pantai Tambak 2', 'Pengadaan Gasebo Pantai Tambak', '324254545354', 'Astroboy', '2017-04-15 11:04:01');
INSERT INTO `histori_paket` VALUES ('13', 'PK_0001', 'tanggal_pengajuan', '0', '0', '324254545354', 'Astroboy', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('14', 'PK_0001', 'hps', '0', '0', '885522', 'Lia Rosanti', '2009-09-23 00:00:00');
INSERT INTO `histori_paket` VALUES ('15', 'PK_0001', 'nama_paket', 'jihan', '0', '885522', 'Lia Rosanti', '2017-04-15 11:04:03');
INSERT INTO `histori_paket` VALUES ('16', 'PK_0001', 'kegiatan', '0', '0', '885522', 'Lia Rosanti', '2009-11-21 00:00:00');
INSERT INTO `histori_paket` VALUES ('17', 'PK_0002', 'nama_paket', 'Pengadaan Gazebo Baru part 2', 'Pengadaan Gazebo Baru', '885522', 'Lia Rosanti', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('18', 'PK_0009', 'volume', '0', '0', '885522', 'Lia Rosanti', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('19', 'PK_0009', 'nama_paket', 'A', '0', '885522', 'Lia Rosanti', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('20', 'PK_0009', 'nama_paket', 'Pengadaan Aplikasi SIULP', '0', '885522', 'Lia Rosanti', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('21', 'PK_0009', 'nama_paket', 'Pengadaan Aplikasi SIULP', 'Pengadaan Aplikasi SIULP', '885522', 'Lia Rosanti', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('22', 'PK_0009', 'nama_paket', 'Pengadaan Aplikasi SIULP1', 'Pengadaan Aplikasi SIULP', '885522', 'Lia Rosanti', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('23', 'PK_0009', 'nama_paket', 'Pengadaan Aplikasi SIULP', 'Pengadaan Aplikasi SIULP1', '885522', 'Lia Rosanti', '2017-04-15 10:50:25');
INSERT INTO `histori_paket` VALUES ('24', 'PK_0009', 'tanggal_pengajuan', 'Pengadaan Aplikasi SIULP', '0', '885522', 'Lia Rosanti', '2017-04-15 10:53:43');
INSERT INTO `histori_paket` VALUES ('25', 'PK_0009', 'tanggal_pengajuan', 'Pengadaan Aplikasi SIULP', '03', '885522', 'Lia Rosanti', '2017-04-15 10:59:19');
INSERT INTO `histori_paket` VALUES ('26', 'PK_0009', 'tanggal_pengajuan', '01', '03', '885522', 'Lia Rosanti', '2017-04-15 11:01:27');
INSERT INTO `histori_paket` VALUES ('27', 'PK_0009', 'tanggal_pengajuan', '01', '03', '885522', 'Lia Rosanti', '2017-04-15 11:01:40');
INSERT INTO `histori_paket` VALUES ('28', 'PK_0009', 'nama_paket', 'Pengadaan Aplikasi SIULP1', 'Pengadaan Aplikasi SIULP', '885522', 'Lia Rosanti', '2017-04-15 11:23:23');
INSERT INTO `histori_paket` VALUES ('29', 'PK_0009', 'nama_paket', 'Pengadaan Aplikasi SIULP2', 'Pengadaan Aplikasi SIULP', '885522', 'Lia Rosanti', '2017-04-15 11:24:13');
INSERT INTO `histori_paket` VALUES ('30', 'PK_0009', 'nama_paket', 'Pengadaan Aplikasi SIULP', 'Pengadaan Aplikasi SIULP', '885522', 'Lia Rosanti', '2017-04-15 11:24:28');
INSERT INTO `histori_paket` VALUES ('31', 'PK_0009', 'kegiatan', 'Pengadaan Aplikasi SIULP', '0', '885522', 'Lia Rosanti', '2017-04-15 11:42:01');
INSERT INTO `histori_paket` VALUES ('32', 'PK_0009', 'volume', '0', '10000000', '885522', 'Lia Rosanti', '0000-00-00 00:00:00');
INSERT INTO `histori_paket` VALUES ('33', 'PK_0009', 'nama_paket', 'Pengadaan Aplikasi SIULP', '0', '885522', 'Lia Rosanti', '2017-04-15 11:43:48');
INSERT INTO `histori_paket` VALUES ('34', 'PK_0009', 'tanggal_pengajuan', '03', '0', '885522', 'Lia Rosanti', '2017-04-15 11:43:53');
INSERT INTO `histori_paket` VALUES ('35', 'PK_0009', 'kegiatan', 'Pengadaan Aplikasi SIULP', '0', '885522', 'Lia Rosanti', '2017-04-15 11:43:58');
INSERT INTO `histori_paket` VALUES ('38', 'PK_0009', 'volume', '10000000', '100000001', '885522', 'Lia Rosanti', '2017-04-15 11:46:44');
INSERT INTO `histori_paket` VALUES ('39', 'PK_0009', 'lokasi', 'Batu', '0', '885522', 'Lia Rosanti', '2017-04-15 11:47:15');
INSERT INTO `histori_paket` VALUES ('40', 'PK_0009', 'pagu', '30000000', '0', '885522', 'Lia Rosanti', '2017-04-15 11:47:40');
INSERT INTO `histori_paket` VALUES ('41', 'PK_0009', 'pagu', '300000000', '0', '885522', 'Lia Rosanti', '2017-04-15 11:47:56');
INSERT INTO `histori_paket` VALUES ('42', 'PK_0009', 'pagu', '300000000', '0', '885522', 'Lia Rosanti', '2017-04-15 11:48:19');
INSERT INTO `histori_paket` VALUES ('43', 'PK_0009', 'pagu', '300000000', '300000000', '885522', 'Lia Rosanti', '2017-04-15 11:49:44');
INSERT INTO `histori_paket` VALUES ('44', 'PK_0009', 'hps', '30000000', '0', '885522', 'Lia Rosanti', '2017-04-15 11:49:59');
INSERT INTO `histori_paket` VALUES ('45', 'PK_0009', 'hps', '30000000', '0', '885522', 'Lia Rosanti', '2017-04-15 11:50:15');
INSERT INTO `histori_paket` VALUES ('46', 'PK_0009', 'hps', '300000000', '30000000', '885522', 'Lia Rosanti', '2017-04-15 11:51:22');
INSERT INTO `histori_paket` VALUES ('47', 'PK_0009', 'hps', '3000000000', '30000000', '885522', 'Lia Rosanti', '2017-04-15 11:51:33');
INSERT INTO `histori_paket` VALUES ('48', 'PK_0009', 'hps', '300000000', '30000000', '885522', 'Lia Rosanti', '2017-04-15 11:51:50');
INSERT INTO `histori_paket` VALUES ('49', 'PK_0009', 'nama_sumber_dana', '0', '0', '885522', 'Lia Rosanti', '2017-04-15 11:53:41');
INSERT INTO `histori_paket` VALUES ('50', 'PK_0009', 'nama_sumber_dana', '12', '0', '885522', 'Lia Rosanti', '2017-04-15 11:56:16');
INSERT INTO `histori_paket` VALUES ('51', 'PK_0009', 'nama_sumber_dana', 'APBN', '12', '885522', 'Lia Rosanti', '2017-04-15 11:58:57');
INSERT INTO `histori_paket` VALUES ('52', 'PK_0009', 'nama_satuan_kerja', 'Dinas Pariwisata', '0', '885522', 'Lia Rosanti', '2017-04-15 12:02:05');
INSERT INTO `histori_paket` VALUES ('53', 'PK_0009', 'nama_satuan_kerja', 'Dinas Pariwisata', '0', '885522', 'Lia Rosanti', '2017-04-15 12:02:50');
INSERT INTO `histori_paket` VALUES ('54', 'PK_0009', 'jenis_pengadaan', 'Jasa Lainnya', '0', '885522', 'Lia Rosanti', '2017-04-15 12:04:45');
INSERT INTO `histori_paket` VALUES ('55', 'PK_0009', 'jenis_pengadaan', 'Jasa Lainnya', '0', '885522', 'Lia Rosanti', '2017-04-15 12:04:59');
INSERT INTO `histori_paket` VALUES ('56', 'PK_0009', 'pagu', '300000000', '300000000', '885522', 'Lia Rosanti', '2017-04-15 12:17:16');
INSERT INTO `histori_paket` VALUES ('57', 'PK_0009', 'jenis_pengadaan', 'Jasa Lainnya', 'Jasa Lainnya', '885522', 'Lia Rosanti', '2017-04-15 12:21:07');
INSERT INTO `histori_paket` VALUES ('58', 'PK_0009', 'nomor_surat_ppk', '23543111', '23543', '885522', 'Lia Rosanti', '2017-04-15 12:29:45');
INSERT INTO `histori_paket` VALUES ('59', 'PK_0013', 'kegiatan', 'buat gazebo', '0', '885522', 'Lia Rosanti', '2017-04-17 11:08:35');
INSERT INTO `histori_paket` VALUES ('60', 'PK_0013', 'volume', '3', '0', '885522', 'Lia Rosanti', '2017-04-17 11:08:42');
INSERT INTO `histori_paket` VALUES ('61', 'PK_0013', 'lokasi', 'malang', '0', '885522', 'Lia Rosanti', '2017-04-17 11:08:48');
INSERT INTO `histori_paket` VALUES ('62', 'PK_0013', 'pagu', '200000000', '0', '885522', 'Lia Rosanti', '2017-04-17 11:09:01');
INSERT INTO `histori_paket` VALUES ('63', 'PK_0013', 'hps', '200000000', '0', '885522', 'Lia Rosanti', '2017-04-17 11:09:13');
INSERT INTO `histori_paket` VALUES ('64', 'PK_0003', 'nama_paket', 'Pengadaan PC Grafika', '0', '3332211', 'orlen', '2017-04-17 11:27:50');
INSERT INTO `histori_paket` VALUES ('65', 'PK_0003', 'tanggal_pengajuan', '02', '', '3332211', 'orlen', '2017-04-17 11:28:55');
INSERT INTO `histori_paket` VALUES ('66', 'PK_0003', 'nama_paket', 'Pengadaan PC Grafika Nomor 2', '0', '3332211', 'orlen', '2017-04-17 11:29:10');
INSERT INTO `histori_paket` VALUES ('67', 'PK_0001', 'nama_paket', 'Pengadaan Aplikasi SIULP', '0', '885522', 'Lia Rosanti', '2017-04-17 11:56:57');
INSERT INTO `histori_paket` VALUES ('68', 'PK_0001', 'nama_paket', 'Pengadaan Aplikasi SIBLP', 'Pengadaan Aplikasi SIULP', '885522', 'Lia Rosanti', '2017-04-17 11:57:40');
INSERT INTO `histori_paket` VALUES ('69', 'PK_0003', 'tanggal_pengajuan', '05', '11', '3332211', 'orlen', '2017-04-17 12:55:08');
INSERT INTO `histori_paket` VALUES ('70', 'PK_0003', 'tanggal_pengajuan', '09', '05', '3332211', 'orlen', '2017-04-17 12:56:27');
INSERT INTO `histori_paket` VALUES ('71', 'PK_0003', 'tanggal_pengajuan', '12', '09', '3332211', 'orlen', '2017-04-17 12:56:36');
INSERT INTO `histori_paket` VALUES ('72', 'PK_0003', 'tanggal_pengajuan', '01', '12', '3332211', 'orlen', '2017-04-17 12:57:53');
INSERT INTO `histori_paket` VALUES ('73', 'PK_0003', 'kegiatan', '2', '0', '3332211', 'orlen', '2017-04-17 13:00:37');
INSERT INTO `histori_paket` VALUES ('74', 'PK_0003', 'kegiatan', '3', '2', '3332211', 'orlen', '2017-04-17 13:00:45');
INSERT INTO `histori_paket` VALUES ('75', 'PK_0003', 'kegiatan', 'anam', '3', '3332211', 'orlen', '2017-04-17 13:01:09');
INSERT INTO `histori_paket` VALUES ('76', 'PK_0003', 'volume', '230000', '0', '3332211', 'orlen', '2017-04-17 13:02:58');
INSERT INTO `histori_paket` VALUES ('77', 'PK_0003', 'lokasi', 'Batu', '0', '3332211', 'orlen', '2017-04-17 13:05:06');
INSERT INTO `histori_paket` VALUES ('78', 'PK_0003', 'lokasi', 'Surabaya', 'Batu', '3332211', 'orlen', '2017-04-17 13:05:20');
INSERT INTO `histori_paket` VALUES ('79', 'PK_0003', 'pagu', '120000000000', '0', '3332211', 'orlen', '2017-04-17 13:06:57');
INSERT INTO `histori_paket` VALUES ('80', 'PK_0003', 'pagu', '13000', '120000000000', '3332211', 'orlen', '2017-04-17 13:07:10');
INSERT INTO `histori_paket` VALUES ('81', 'PK_0003', 'hps', '13000', '0', '3332211', 'orlen', '2017-04-17 13:08:39');
INSERT INTO `histori_paket` VALUES ('82', 'PK_0003', 'hps', '12900', '13000', '3332211', 'orlen', '2017-04-17 13:09:22');
INSERT INTO `histori_paket` VALUES ('83', 'PK_0003', 'nama_satuan_kerja', 'Dinas Kesehatan', '0', '3332211', 'orlen', '2017-04-17 13:09:55');
INSERT INTO `histori_paket` VALUES ('84', 'PK_0003', 'nama_satuan_kerja', 'Dinas Perhubungan', 'Dinas Kesehatan', '3332211', 'orlen', '2017-04-17 13:10:10');
INSERT INTO `histori_paket` VALUES ('85', 'PK_0003', 'nama_satuan_kerja', 'Dinas Lingkungan Hidup', 'Dinas Perhubungan', '3332211', 'orlen', '2017-04-17 13:10:19');
INSERT INTO `histori_paket` VALUES ('86', 'PK_0003', 'nama_sumber_dana', 'APBN', '0', '3332211', 'orlen', '2017-04-17 13:10:43');
INSERT INTO `histori_paket` VALUES ('87', 'PK_0003', 'jenis_pengadaan', 'Barang', '0', '3332211', 'orlen', '2017-04-17 13:12:29');
INSERT INTO `histori_paket` VALUES ('88', 'PK_0003', 'jenis_pengadaan', 'Konstruksi', '0', '3332211', 'orlen', '2017-04-17 13:12:41');
INSERT INTO `histori_paket` VALUES ('89', 'PK_0003', 'jenis_pengadaan', 'Jasa Konsultansi', '0', '3332211', 'orlen', '2017-04-17 13:13:12');
INSERT INTO `histori_paket` VALUES ('90', 'PK_0003', 'nomor_surat_ppk', '344', '12313', '3332211', 'orlen', '2017-04-17 13:17:57');
INSERT INTO `histori_paket` VALUES ('91', 'PK_0023', 'nomor_surat_ppk', '123133', '1231321313', '3332211', 'orlen', '2017-04-17 13:32:09');
INSERT INTO `histori_paket` VALUES ('92', 'PK_0023', 'nomor_surat_ppk', '20000', '123133', '3332211', 'orlen', '2017-04-17 13:35:11');
INSERT INTO `histori_paket` VALUES ('93', 'PK_0023', 'nomor_surat_ppk', '3000', '123133', '3332211', 'orlen', '2017-04-17 13:35:23');
INSERT INTO `histori_paket` VALUES ('94', 'PK_0023', 'nomor_surat_ppk', '2', '123133', '3332211', 'orlen', '2017-04-17 13:35:39');
INSERT INTO `histori_paket` VALUES ('95', 'PK_0023', 'nomor_surat_ppk', '3', '2', '3332211', 'orlen', '2017-04-17 13:36:23');
INSERT INTO `histori_paket` VALUES ('96', 'PK_0023', 'nomor_surat_ppk', '8', '2', '3332211', 'orlen', '2017-04-17 13:36:32');
INSERT INTO `histori_paket` VALUES ('97', 'PK_0023', 'nomor_surat_ppk', '10', '2', '3332211', 'orlen', '2017-04-17 13:36:43');
INSERT INTO `histori_paket` VALUES ('98', 'PK_0023', 'nomor_surat_ppk', '20', '10', '3332211', 'orlen', '2017-04-17 13:38:09');
INSERT INTO `histori_paket` VALUES ('99', 'PK_0023', 'nomor_surat_ppk', '30', '20', '3332211', 'orlen', '2017-04-17 13:38:18');
INSERT INTO `histori_paket` VALUES ('100', 'PK_0023', 'nomor_surat_ppk', '50', '30', '3332211', 'orlen', '2017-04-17 13:38:28');
INSERT INTO `histori_paket` VALUES ('101', 'PK_0023', 'nama_sumber_dana', 'APBN', 'DAU', '3332211', 'orlen', '2017-04-17 13:45:02');
INSERT INTO `histori_paket` VALUES ('102', 'PK_0023', 'nama_sumber_dana', 'DAK', 'DAU', '3332211', 'orlen', '2017-04-17 13:45:12');
INSERT INTO `histori_paket` VALUES ('103', 'PK_0023', 'nama_sumber_dana', 'APBD', 'DAK', '3332211', 'orlen', '2017-04-17 13:46:28');
INSERT INTO `histori_paket` VALUES ('104', 'PK_0023', 'nama_sumber_dana', 'APBN', 'APBD', '3332211', 'orlen', '2017-04-17 13:46:31');
INSERT INTO `histori_paket` VALUES ('105', 'PK_0023', 'nama_sumber_dana', 'DAK', 'APBN', '3332211', 'orlen', '2017-04-17 13:46:48');
INSERT INTO `histori_paket` VALUES ('106', 'PK_0023', 'tanggal_pengajuan', '01', '04', '3332211', 'orlen', '2017-04-17 13:47:55');
INSERT INTO `histori_paket` VALUES ('107', 'PK_0023', 'nama_paket', 'Pengadaan Taman Bermain Anak', 'Pengadaan Taman Bermain', '3332211', 'orlen', '2017-04-17 13:48:13');
INSERT INTO `histori_paket` VALUES ('108', 'PK_0023', 'nomor_surat_ppk', '20', '50', '3332211', 'orlen', '2017-04-17 13:50:38');
INSERT INTO `histori_paket` VALUES ('109', 'PK_0023', 'nomor_surat_ppk', '20222', '20', '3332211', 'orlen', '2017-04-17 13:54:43');
INSERT INTO `histori_paket` VALUES ('110', 'PK_0005', 'nama_paket', 'Pengadaan PC Supra 2', 'Pengadaan PC Supra', '3332211', 'orlen', '2017-04-17 14:06:24');
INSERT INTO `histori_paket` VALUES ('111', 'PK_0005', 'nomor_surat_ppk', '33333333', '082334', '3332211', 'orlen', '2017-04-17 14:22:32');
INSERT INTO `histori_paket` VALUES ('112', 'PK_0005', 'nomor_surat_ppk', '1000', '33333333', '3332211', 'orlen', '2017-04-17 14:22:43');
INSERT INTO `histori_paket` VALUES ('113', 'PK_0025', 'nama_sumber_dana', 'APBD', 'DAU', '34546', 'Yola', '2017-04-18 13:58:10');
INSERT INTO `histori_paket` VALUES ('114', 'PK_0026', 'hps', '400000000', '500000000', '34546', 'Yola', '2017-04-18 14:39:15');
INSERT INTO `histori_paket` VALUES ('115', 'PK_0026', 'jenis_pengadaan', 'Konstruksi', 'Konstruksi', '34546', 'Yola', '2017-04-18 14:39:34');
INSERT INTO `histori_paket` VALUES ('116', 'PK_0024', 'tanggal_pengajuan', '05', '05', '885522', 'Lia Rosanti', '2017-04-18 15:23:26');
INSERT INTO `histori_paket` VALUES ('117', 'PK_0023', 'tanggal_pengajuan', '2017-04-21', '01', '3332211', 'orlen', '2017-04-19 09:19:21');
INSERT INTO `histori_paket` VALUES ('118', 'PK_0023', 'tanggal_pengajuan', '2017-04-20', '2017-04-21', '3332211', 'orlen', '2017-04-19 09:22:02');
INSERT INTO `histori_paket` VALUES ('119', 'PK_0023', 'tanggal_pengajuan', '2017-04-29', '2017-04-20', '3332211', 'orlen', '2017-04-19 09:22:13');
INSERT INTO `histori_paket` VALUES ('120', 'PK_0005', 'nama_paket', 'Pengadaan PC Supr', 'Pengadaan PC Supra 2', '3332211', 'orlen', '2017-04-20 09:58:40');
INSERT INTO `histori_paket` VALUES ('121', 'PK_0013', 'nama_paket', 'Pengadaan Gazebo Baru part 3', 'Pengadaan Gazebo Baru part 2', '324254545354', 'Astroboy', '2017-04-20 15:17:19');
INSERT INTO `histori_paket` VALUES ('122', 'PK_0013', 'tanggal_pengajuan', '2017-04-20', '2017-04-19', '324254545354', 'Astroboy', '2017-04-20 15:17:40');
INSERT INTO `histori_paket` VALUES ('123', 'PK_0013', 'kegiatan', 'buat gazebo anak anak', 'buat gazebo', '324254545354', 'Astroboy', '2017-04-20 15:19:44');
INSERT INTO `histori_paket` VALUES ('124', 'PK_0013', 'volume', '4', '3', '324254545354', 'Astroboy', '2017-04-20 15:21:03');
INSERT INTO `histori_paket` VALUES ('125', 'PK_0013', 'lokasi', 'kota malang', 'malang', '324254545354', 'Astroboy', '2017-04-20 15:21:04');
INSERT INTO `histori_paket` VALUES ('126', 'PK_0013', 'nama_sumber_dana', 'APBN', '0', '324254545354', 'Astroboy', '2017-04-20 15:21:23');
INSERT INTO `histori_paket` VALUES ('127', 'PK_0013', 'nama_satuan_kerja', 'Dinas Pekerjaan Umum dan Penataan', '0', '324254545354', 'Astroboy', '2017-04-20 15:21:23');
INSERT INTO `histori_paket` VALUES ('128', 'PK_0013', 'jenis_pengadaan', 'Konstruksi', '0', '324254545354', 'Astroboy', '2017-04-20 15:21:30');
INSERT INTO `histori_paket` VALUES ('129', 'PK_0013', 'nomor_surat_ppk', '343239', '34323', '324254545354', 'Astroboy', '2017-04-20 15:22:34');
INSERT INTO `histori_paket` VALUES ('130', 'PK_0034', 'volume', '5000000 biji', '5000 biji', '885522', 'Lia Rosanti', '2017-04-22 09:01:10');
INSERT INTO `histori_paket` VALUES ('131', 'PK_0030', 'nomor_surat_ppk', '12999', '234234/fgfd/fdd', '324254545354', 'Astroboy', '2017-04-22 10:16:31');
INSERT INTO `histori_paket` VALUES ('132', 'PK_0030', 'nomor_surat_ppk', '3344', '12999', '324254545354', 'Astroboy', '2017-04-22 10:16:49');
INSERT INTO `histori_paket` VALUES ('133', 'PK_0011', 'nama_paket', 'Pengadaan Gazebo Hari Ini', 'Pengadaan Gazebo Baru', '885522', 'Lia Rosanti', '2017-04-22 10:23:56');
INSERT INTO `histori_paket` VALUES ('134', 'PK_0030', 'nama_paket', 'Pengadaan Laptop PC DLLL', 'Pengadaan Laptop', '324254545354', 'Astroboy', '2017-04-22 10:25:32');
INSERT INTO `histori_paket` VALUES ('135', 'PK_0033', 'nama_paket', 'Paket hemat B', 'Paket hemat A', '324254545354', 'Astroboy', '2017-04-22 10:31:53');
INSERT INTO `histori_paket` VALUES ('136', 'PK_0013', 'nama_paket', 'Pengadaan Gazebo Baru part 99999999', 'Pengadaan Gazebo Baru part 3', '885522', 'Lia Rosanti', '2017-04-22 11:04:25');

-- ----------------------------
-- Table structure for kategori_artikel
-- ----------------------------
DROP TABLE IF EXISTS `kategori_artikel`;
CREATE TABLE `kategori_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(255) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori_artikel
-- ----------------------------

-- ----------------------------
-- Table structure for komentar_artikel
-- ----------------------------
DROP TABLE IF EXISTS `komentar_artikel`;
CREATE TABLE `komentar_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_artikel` varchar(255) DEFAULT NULL,
  `komentar` text,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of komentar_artikel
-- ----------------------------
INSERT INTO `komentar_artikel` VALUES ('1', '14', 'Kapan Acara dimulai ??', 'Yuko', 'yukotanjung@gmail.com', '2017-03-14');
INSERT INTO `komentar_artikel` VALUES ('2', '14', 'Test', 'Erlangga', 'erlanggaax13@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('3', '17', 'test informasi\r\n', 'Erlangga', 'erlanggaax13@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('4', '17', 'test', 'marvick', 'marvick@marvick.marvick', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('6', '1', 'okeoeoekoek', 'jonathan', 'ok@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('7', '1', 'asd', 'aku', '@okoko.mail', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('8', '1', 'jonathan Orlen', 'jonathan', 'jonatha@orlen.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('9', '29', 'werw', 'wer', 'wahyu.orlen@hotmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('10', '26', 'wizz yo', 'wizz', 'wizz@yahoo.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('11', '1', 'nttaps', 'anam', 'choirulanam2222@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('12', '13', 'asdfasfasfsaf', 'oleng', '@gmail', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('13', '14', '<p>test part 2</p>', 'astro', null, '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('14', '29', 'Saluuuut bwt tulisan anda, impian merupakan sesuatu yang pasti dapatkan hari esok, bila kita selalu berdoa dan bekerja. Ora Et Labora', 'Laluna', 'laluna@gmail.comn', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('15', '3', 'wwww', 'Aaaas', 'erlanggaax2222@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('16', '31', 'ini hotel ya ?', 'anam', 'choirulanam2222@gmail.com', '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('17', '32', 'artikelnya bagus min', 'anam', 'choirulanam2222@gmail.com', '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('18', '32', '<p>wah makasih ya :v</p>', 'astro', null, '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('19', '1', 'asdasd', 'asd', 'asdad', '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('20', '1', 'ok deh sip', 'asd', 'asd', '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('21', '34', 'sa', 'dasd', 'pellondou.jo@gmail.com', '2017-03-29');
INSERT INTO `komentar_artikel` VALUES ('22', '2', 'q', 'q', 'q', '2017-03-29');
INSERT INTO `komentar_artikel` VALUES ('23', '56', 'Kok geli ya liat reptil gitu ..', 'Yuko', 'yukotanjung@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('24', '30', 'bagus sekalii', 'Yuko', 'yukotanjung@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('25', '34', 'testesa', 'Erlangga', 'erlanggaax13@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('26', '34', 'sasa', 'sasa', 'sasa', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('27', '34', 'assa', 'saas', 'assa', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('28', '34', 'waawaw', 'Test', 'erlanggaax2222@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('29', '34', 'anggazzz', 'angga', 'angga@angga.angga', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('30', '34', '', '', '', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('31', '1', 'errrrrr', 'Erlangga', 'erlanggaax13@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('32', '14', 'sasa', 'Assasa', 'assa', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('33', '14', 'wawawwa', 'asmi', 'asas', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('34', '13', 'errrrrr', 'baru', 'awaw', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('35', '55', 'test', 'test', 'anam', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('36', '', '', '', '', '2017-04-05');

-- ----------------------------
-- Table structure for manual_book
-- ----------------------------
DROP TABLE IF EXISTS `manual_book`;
CREATE TABLE `manual_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_petugas` varchar(255) DEFAULT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of manual_book
-- ----------------------------
INSERT INTO `manual_book` VALUES ('10', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('11', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('12', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('13', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('14', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('15', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('16', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('17', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('18', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('19', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('20', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('21', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('22', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('23', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('24', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('25', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('26', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('27', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('28', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('29', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('30', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');
INSERT INTO `manual_book` VALUES ('31', 'jihan manuscript', '2017-04-17', '1', 'astro', '170417094629.pdf|');

-- ----------------------------
-- Table structure for master_data_paket
-- ----------------------------
DROP TABLE IF EXISTS `master_data_paket`;
CREATE TABLE `master_data_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan` varchar(255) DEFAULT NULL,
  `nama_paket` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `pagu` varchar(255) DEFAULT NULL,
  `kode_satuan_kerja` varchar(255) DEFAULT NULL,
  `nama_satuan_kerja` varchar(255) DEFAULT NULL,
  `nama_sumber_dana` varchar(255) DEFAULT NULL,
  `jenis_pengadaan` varchar(255) DEFAULT '',
  `tanggal_rencana_pengadaan` varchar(10) DEFAULT NULL,
  `tanggal_rencana_pekerjaan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_data_paket
-- ----------------------------
INSERT INTO `master_data_paket` VALUES ('1', 'Pengadaan E-KTP', 'Pembuatan E-KTP', '15000000', 'Malang', '1060000000', '104', 'Dinas Informasi dan Informatika', 'APBN', 'Barang', '03', '03');
INSERT INTO `master_data_paket` VALUES ('2', 'Pengadaan Gasebo Pantai Tambak', 'Pembangunan gasebo di pantai tambak', '500000000', 'Pantai', '500000000', '103', 'Dinas Pariwisata', 'APBN', 'Konstruksi', '04', '04');
INSERT INTO `master_data_paket` VALUES ('3', 'Pengadaan PC Server ', 'Pembangunan PC Server', '200000000', 'Kantor', '300000000', '104', 'Dinas Informasi dan Informatika', 'APBN', 'Konsultansi', '02', '02');
INSERT INTO `master_data_paket` VALUES ('4', 'Pembangunan Jalan Wisata', 'Pembangunan Jalan Wisata', '5000000000', 'Batu', '5000000000', '103', 'Dinas Pariwisata', 'APBN', 'Jasa Lainnya', '01', '01');

-- ----------------------------
-- Table structure for master_forum
-- ----------------------------
DROP TABLE IF EXISTS `master_forum`;
CREATE TABLE `master_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_forum` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `anggota` text,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_forum
-- ----------------------------
INSERT INTO `master_forum` VALUES ('6', 'F_0002', 'Rapat', 'aaaaaaaaaaa', '2017-04-03', '111111111111|234354534454', '1');
INSERT INTO `master_forum` VALUES ('7', 'F_0003', 'Paket Pengadaan', 'Diskusi tentang pengadaan sebuah paket', '2017-04-05', '123456789|741258963', '1');
INSERT INTO `master_forum` VALUES ('8', 'F_0004', 'tes', 'hsgdhjsd', '2017-04-18', '34546|5525', '1');

-- ----------------------------
-- Table structure for master_honor_pokja
-- ----------------------------
DROP TABLE IF EXISTS `master_honor_pokja`;
CREATE TABLE `master_honor_pokja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pengadaan` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_honor_pokja
-- ----------------------------
INSERT INTO `master_honor_pokja` VALUES ('1', 'Konstruksi', 'ketua', 'P_001', '750000');
INSERT INTO `master_honor_pokja` VALUES ('2', 'Konstruksi', 'ketua', 'P_002', '850000');
INSERT INTO `master_honor_pokja` VALUES ('3', 'Konstruksi', 'ketua', 'P_003', '950000');
INSERT INTO `master_honor_pokja` VALUES ('4', 'Konstruksi', 'ketua', 'P_004', '1050000');
INSERT INTO `master_honor_pokja` VALUES ('5', 'Konstruksi', 'ketua', 'P_005', '1150000');
INSERT INTO `master_honor_pokja` VALUES ('6', 'Konstruksi', 'ketua', 'P_006', '1250000');
INSERT INTO `master_honor_pokja` VALUES ('7', 'Konstruksi', 'ketua', 'P_007', '1400000');
INSERT INTO `master_honor_pokja` VALUES ('8', 'Konstruksi', 'ketua', 'P_008', '1550000');
INSERT INTO `master_honor_pokja` VALUES ('9', 'Konstruksi', 'ketua', 'P_009', '1650000');
INSERT INTO `master_honor_pokja` VALUES ('10', 'Konstruksi', 'sekretaris', 'P_001', '650000');
INSERT INTO `master_honor_pokja` VALUES ('11', 'Konstruksi', 'sekretaris', 'P_002', '750000');
INSERT INTO `master_honor_pokja` VALUES ('12', 'Konstruksi', 'sekretaris', 'P_003', '850000');
INSERT INTO `master_honor_pokja` VALUES ('13', 'Konstruksi', 'sekretaris', 'P_004', '950000');
INSERT INTO `master_honor_pokja` VALUES ('14', 'Konstruksi', 'sekretaris', 'P_005', '1050000');
INSERT INTO `master_honor_pokja` VALUES ('15', 'Konstruksi', 'sekretaris', 'P_006', '1150000');
INSERT INTO `master_honor_pokja` VALUES ('16', 'Konstruksi', 'sekretaris', 'P_007', '1300000');
INSERT INTO `master_honor_pokja` VALUES ('17', 'Konstruksi', 'sekretaris', 'P_008', '1450000');
INSERT INTO `master_honor_pokja` VALUES ('18', 'Konstruksi', 'sekretaris', 'P_009', '1550000');
INSERT INTO `master_honor_pokja` VALUES ('19', 'Konstruksi', 'anggota', 'P_001', '550000');
INSERT INTO `master_honor_pokja` VALUES ('20', 'Konstruksi', 'anggota', 'P_002', '650000');
INSERT INTO `master_honor_pokja` VALUES ('21', 'Konstruksi', 'anggota', 'P_003', '750000');
INSERT INTO `master_honor_pokja` VALUES ('22', 'Konstruksi', 'anggota', 'P_004', '850000');
INSERT INTO `master_honor_pokja` VALUES ('23', 'Konstruksi', 'anggota', 'P_005', '950000');
INSERT INTO `master_honor_pokja` VALUES ('24', 'Konstruksi', 'anggota', 'P_006', '1050000');
INSERT INTO `master_honor_pokja` VALUES ('25', 'Konstruksi', 'anggota', 'P_007', '1150000');
INSERT INTO `master_honor_pokja` VALUES ('26', 'Konstruksi', 'anggota', 'P_008', '1250000');
INSERT INTO `master_honor_pokja` VALUES ('27', 'Konstruksi', 'anggota', 'P_009', '1350000');
INSERT INTO `master_honor_pokja` VALUES ('55', 'Barang / Jasa Lainya', 'ketua', 'P_001', '600000');
INSERT INTO `master_honor_pokja` VALUES ('56', 'Barang / Jasa Lainya', 'ketua', 'P_002', '700000');
INSERT INTO `master_honor_pokja` VALUES ('57', 'Barang / Jasa Lainya', 'ketua', 'P_003', '850000');
INSERT INTO `master_honor_pokja` VALUES ('58', 'Barang / Jasa Lainya', 'ketua', 'P_004', '950000');
INSERT INTO `master_honor_pokja` VALUES ('59', 'Barang / Jasa Lainya', 'ketua', 'P_005', '1050000');
INSERT INTO `master_honor_pokja` VALUES ('60', 'Barang / Jasa Lainya', 'ketua', 'P_006', '1200000');
INSERT INTO `master_honor_pokja` VALUES ('61', 'Barang / Jasa Lainya', 'ketua', 'P_007', '1300000');
INSERT INTO `master_honor_pokja` VALUES ('62', 'Barang / Jasa Lainya', 'ketua', 'P_008', '1400000');
INSERT INTO `master_honor_pokja` VALUES ('63', 'Barang / Jasa Lainya', 'ketua', 'P_009', '1550000');
INSERT INTO `master_honor_pokja` VALUES ('64', 'Barang / Jasa Lainya', 'sekretaris', 'P_001', '550000');
INSERT INTO `master_honor_pokja` VALUES ('65', 'Barang / Jasa Lainya', 'sekretaris', 'P_002', '650000');
INSERT INTO `master_honor_pokja` VALUES ('66', 'Barang / Jasa Lainya', 'sekretaris', 'P_003', '750000');
INSERT INTO `master_honor_pokja` VALUES ('67', 'Barang / Jasa Lainya', 'sekretaris', 'P_004', '850000');
INSERT INTO `master_honor_pokja` VALUES ('68', 'Barang / Jasa Lainya', 'sekretaris', 'P_005', '950000');
INSERT INTO `master_honor_pokja` VALUES ('69', 'Barang / Jasa Lainya', 'sekretaris', 'P_006', '1050000');
INSERT INTO `master_honor_pokja` VALUES ('70', 'Barang / Jasa Lainya', 'sekretaris', 'P_007', '1200000');
INSERT INTO `master_honor_pokja` VALUES ('71', 'Barang / Jasa Lainya', 'sekretaris', 'P_008', '1300000');
INSERT INTO `master_honor_pokja` VALUES ('72', 'Barang / Jasa Lainya', 'sekretaris', 'P_009', '1450000');
INSERT INTO `master_honor_pokja` VALUES ('73', 'Barang / Jasa Lainya', 'anggota', 'P_001', '500000');
INSERT INTO `master_honor_pokja` VALUES ('74', 'Barang / Jasa Lainya', 'anggota', 'P_002', '600000');
INSERT INTO `master_honor_pokja` VALUES ('75', 'Barang / Jasa Lainya', 'anggota', 'P_003', '700000');
INSERT INTO `master_honor_pokja` VALUES ('76', 'Barang / Jasa Lainya', 'anggota', 'P_004', '800000');
INSERT INTO `master_honor_pokja` VALUES ('77', 'Barang / Jasa Lainya', 'anggota', 'P_005', '900000');
INSERT INTO `master_honor_pokja` VALUES ('78', 'Barang / Jasa Lainya', 'anggota', 'P_006', '1000000');
INSERT INTO `master_honor_pokja` VALUES ('79', 'Barang / Jasa Lainya', 'anggota', 'P_007', '1100000');
INSERT INTO `master_honor_pokja` VALUES ('80', 'Barang / Jasa Lainya', 'anggota', 'P_008', '1200000');
INSERT INTO `master_honor_pokja` VALUES ('81', 'Barang / Jasa Lainya', 'anggota', 'P_009', '1300000');
INSERT INTO `master_honor_pokja` VALUES ('91', 'Jasa Konsultansi', 'ketua', 'P_001', '500000');
INSERT INTO `master_honor_pokja` VALUES ('92', 'Jasa Konsultansi', 'ketua', 'P_002', '600000');
INSERT INTO `master_honor_pokja` VALUES ('93', 'Jasa Konsultansi', 'ketua', 'P_003', '700000');
INSERT INTO `master_honor_pokja` VALUES ('94', 'Jasa Konsultansi', 'ketua', 'P_004', '800000');
INSERT INTO `master_honor_pokja` VALUES ('95', 'Jasa Konsultansi', 'ketua', 'P_005', '900000');
INSERT INTO `master_honor_pokja` VALUES ('96', 'Jasa Konsultansi', 'ketua', 'P_006', '1000000');
INSERT INTO `master_honor_pokja` VALUES ('97', 'Jasa Konsultansi', 'ketua', 'P_007', '1100000');
INSERT INTO `master_honor_pokja` VALUES ('98', 'Jasa Konsultansi', 'ketua', 'P_008', '1200000');
INSERT INTO `master_honor_pokja` VALUES ('99', 'Jasa Konsultansi', 'ketua', 'P_009', '1300000');
INSERT INTO `master_honor_pokja` VALUES ('100', 'Jasa Konsultansi', 'sekretaris', 'P_001', '400000');
INSERT INTO `master_honor_pokja` VALUES ('101', 'Jasa Konsultansi', 'sekretaris', 'P_002', '500000');
INSERT INTO `master_honor_pokja` VALUES ('102', 'Jasa Konsultansi', 'sekretaris', 'P_003', '600000');
INSERT INTO `master_honor_pokja` VALUES ('103', 'Jasa Konsultansi', 'sekretaris', 'P_004', '700000');
INSERT INTO `master_honor_pokja` VALUES ('104', 'Jasa Konsultansi', 'sekretaris', 'P_005', '800000');
INSERT INTO `master_honor_pokja` VALUES ('105', 'Jasa Konsultansi', 'sekretaris', 'P_006', '900000');
INSERT INTO `master_honor_pokja` VALUES ('106', 'Jasa Konsultansi', 'sekretaris', 'P_007', '1000000');
INSERT INTO `master_honor_pokja` VALUES ('107', 'Jasa Konsultansi', 'sekretaris', 'P_008', '1100000');
INSERT INTO `master_honor_pokja` VALUES ('108', 'Jasa Konsultansi', 'sekretaris', 'P_009', '1200000');
INSERT INTO `master_honor_pokja` VALUES ('109', 'Jasa Konsultansi', 'anggota', 'P_001', '350000');
INSERT INTO `master_honor_pokja` VALUES ('110', 'Jasa Konsultansi', 'anggota', 'P_002', '450000');
INSERT INTO `master_honor_pokja` VALUES ('111', 'Jasa Konsultansi', 'anggota', 'P_003', '550000');
INSERT INTO `master_honor_pokja` VALUES ('112', 'Jasa Konsultansi', 'anggota', 'P_004', '650000');
INSERT INTO `master_honor_pokja` VALUES ('113', 'Jasa Konsultansi', 'anggota', 'P_005', '700000');
INSERT INTO `master_honor_pokja` VALUES ('114', 'Jasa Konsultansi', 'anggota', 'P_006', '800000');
INSERT INTO `master_honor_pokja` VALUES ('115', 'Jasa Konsultansi', 'anggota', 'P_007', '900000');
INSERT INTO `master_honor_pokja` VALUES ('116', 'Jasa Konsultansi', 'anggota', 'P_008', '1000000');
INSERT INTO `master_honor_pokja` VALUES ('117', 'Jasa Konsultansi', 'anggota', 'P_009', '1100000');

-- ----------------------------
-- Table structure for master_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `master_jabatan`;
CREATE TABLE `master_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_jabatan` varchar(255) DEFAULT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `modul` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_jabatan
-- ----------------------------
INSERT INTO `master_jabatan` VALUES ('1', '001', 'Sekretariat', 'Struktur ULP|Kelompok Kerja|SKPD|Tim Teknis|User|Import|Data Paket|Verifikasi|Jadwal Rapat|Master|Setting Forum|Monev|Hasil Rapat|Honor Pokja|Histori Paket');
INSERT INTO `master_jabatan` VALUES ('2', '002', 'PPK', 'Import|Data Paket|Jadwal Rapat|Hasil Rapat|Verifikasi Jadwal');
INSERT INTO `master_jabatan` VALUES ('3', '003', 'Pokja', 'Jadwal Rapat|Notulensi|Input Lelang|Data Paket|Hasil Rapat|Hasil Lelang|Verifikasi Jadwal');
INSERT INTO `master_jabatan` VALUES ('4', '004', 'Kepala SKPD', 'Data Paket|Jadwal Rapat');
INSERT INTO `master_jabatan` VALUES ('5', '005', 'Bupati', 'Data Paket|Jadwal Rapat|Monev');
INSERT INTO `master_jabatan` VALUES ('6', '006', 'Pihak III', 'Forum|');
INSERT INTO `master_jabatan` VALUES ('7', '007', 'Admin', 'Struktur ULP|Kelompok Kerja|SKPD|Tim Teknis|User|Import|Data Paket|Verifikasi|Jadwal Rapat|Master|Setting Forum|Monev|Hasil Rapat|Honor Pokja|Input Rapat');

-- ----------------------------
-- Table structure for master_jenis_pengadaan
-- ----------------------------
DROP TABLE IF EXISTS `master_jenis_pengadaan`;
CREATE TABLE `master_jenis_pengadaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pengadaan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_jenis_pengadaan
-- ----------------------------
INSERT INTO `master_jenis_pengadaan` VALUES ('6', 'Jasa Konsultasi', 'Jasa Konsultasi');
INSERT INTO `master_jenis_pengadaan` VALUES ('7', 'Konstruksi', 'Konstruksi');
INSERT INTO `master_jenis_pengadaan` VALUES ('8', 'Barang', 'Barang');
INSERT INTO `master_jenis_pengadaan` VALUES ('9', null, null);

-- ----------------------------
-- Table structure for master_kelompok_kerja
-- ----------------------------
DROP TABLE IF EXISTS `master_kelompok_kerja`;
CREATE TABLE `master_kelompok_kerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pokja` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_kelompok_kerja
-- ----------------------------
INSERT INTO `master_kelompok_kerja` VALUES ('2', 'Pokja III', 'SYEH ZAENAL ARIFIN, S.T', '197809162007011008', 'JONATHAN', 'KEPALA ULP');
INSERT INTO `master_kelompok_kerja` VALUES ('5', 'Pokja II', null, null, null, null);
INSERT INTO `master_kelompok_kerja` VALUES ('6', 'Pokja IV', null, null, null, null);
INSERT INTO `master_kelompok_kerja` VALUES ('7', 'Pokja V', null, null, null, null);

-- ----------------------------
-- Table structure for master_metode_pengadaan
-- ----------------------------
DROP TABLE IF EXISTS `master_metode_pengadaan`;
CREATE TABLE `master_metode_pengadaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `metode_pengadaan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_metode_pengadaan
-- ----------------------------
INSERT INTO `master_metode_pengadaan` VALUES ('11', 'Lelang umum', 'Lelang');
INSERT INTO `master_metode_pengadaan` VALUES ('12', 'Seleksi umum', 'Seleksi umum');
INSERT INTO `master_metode_pengadaan` VALUES ('13', 'Penunjukan Langsung', 'Penunjukan Langsung');

-- ----------------------------
-- Table structure for master_satuan_kerja
-- ----------------------------
DROP TABLE IF EXISTS `master_satuan_kerja`;
CREATE TABLE `master_satuan_kerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `kepala` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kode_skpd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_satuan_kerja
-- ----------------------------
INSERT INTO `master_satuan_kerja` VALUES ('6', 'Dinas Pariwisata', '-', '0314586', 'Batu', '103');
INSERT INTO `master_satuan_kerja` VALUES ('7', 'Dinas Informasi dan Informatika', '-', '0988', 'Batu', '104');
INSERT INTO `master_satuan_kerja` VALUES ('8', 'Dinas Perpustakaan dan Kearsipan', null, null, 'Batu', '106');
INSERT INTO `master_satuan_kerja` VALUES ('9', 'Dinas Kesehatan', 'Ahmad', '085522', 'Batu', '107');
INSERT INTO `master_satuan_kerja` VALUES ('10', 'Dinas Pekerjaan Umum dan Penataan', null, null, null, '108');
INSERT INTO `master_satuan_kerja` VALUES ('11', 'Dinas Lingkungan Hidup', null, null, null, '110');
INSERT INTO `master_satuan_kerja` VALUES ('12', 'Dinas Perhubungan', null, null, null, '112');

-- ----------------------------
-- Table structure for master_status_paket
-- ----------------------------
DROP TABLE IF EXISTS `master_status_paket`;
CREATE TABLE `master_status_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_status_paket
-- ----------------------------

-- ----------------------------
-- Table structure for master_struktur_ulp
-- ----------------------------
DROP TABLE IF EXISTS `master_struktur_ulp`;
CREATE TABLE `master_struktur_ulp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_struktur_ulp
-- ----------------------------
INSERT INTO `master_struktur_ulp` VALUES ('1', '197903222007011006', 'Edi Setiawan, S.IP', 'KEPALA ULP', '-');
INSERT INTO `master_struktur_ulp` VALUES ('2', '41655213625762', 'Andi', 'KOORDINATOR PERENCANAAN', 'Penata');
INSERT INTO `master_struktur_ulp` VALUES ('3', '2536745632', 'arif efendi', 'KOORDINATOR PELAPORAN DAN PENGELOLAAN DOKUMEN', 'gol 3A');

-- ----------------------------
-- Table structure for master_sumber_dana
-- ----------------------------
DROP TABLE IF EXISTS `master_sumber_dana`;
CREATE TABLE `master_sumber_dana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sumber_dana` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_sumber_dana
-- ----------------------------
INSERT INTO `master_sumber_dana` VALUES ('10', 'DAK', 'DAK');
INSERT INTO `master_sumber_dana` VALUES ('11', 'DAU', 'DAU');
INSERT INTO `master_sumber_dana` VALUES ('12', 'APBN', 'APBN');
INSERT INTO `master_sumber_dana` VALUES ('13', 'APBD', 'APBD');

-- ----------------------------
-- Table structure for master_tim_teknis
-- ----------------------------
DROP TABLE IF EXISTS `master_tim_teknis`;
CREATE TABLE `master_tim_teknis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_tim_teknis
-- ----------------------------
INSERT INTO `master_tim_teknis` VALUES ('1', 'Teknis Elektro', 'aji@gmail.com', '12345', 'Malang');
INSERT INTO `master_tim_teknis` VALUES ('2', 'jihana', 'jihan@gmail.com', '0485748', 'malang');

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
  `kode_jabatan` varchar(255) DEFAULT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT '',
  `kode_skpd` varchar(255) DEFAULT NULL,
  `nama_skpd` varchar(255) DEFAULT NULL,
  `kode_pokja` varchar(255) DEFAULT NULL,
  `nama_pokja` varchar(255) DEFAULT NULL,
  `jabatan_pokja` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `pangkat_gol` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `generate` varchar(255) DEFAULT NULL,
  `tanggal_generate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_user
-- ----------------------------
INSERT INTO `master_user` VALUES ('109', '0', 'orlen', 'orlen', 'dc3494ea38957e2aee146dcbdb2d26b9', '002', 'PPK', 'Internal', '104', 'Dinas Informasi dan Informatika', '5', 'Pokja II', 'sekretaris', '3332211', 'VII C', 'pellondou.jo@gmail.com', '8RUGP4MNLN', null);
INSERT INTO `master_user` VALUES ('110', null, 'angga', 'angga', '31d040f4d519e3a971094de0092f80d0', '003', 'Pokja', 'Internal', '', null, '2', 'Pokja III', 'ketua', '999888', 'VI A', 'angga@gmail.com', null, '2017-04-07');
INSERT INTO `master_user` VALUES ('67', '0', 'Astroboy', 'astro', '8cd07cf78166032f36fd06cb40163942', '001', 'Sekretariat', 'root', '101', 'Dinas Pendidikan', '2', 'anam', 'divisi III', '324254545354', null, 'pellondou.jo@gmail.com', 'O93VW2ZMPI', null);
INSERT INTO `master_user` VALUES ('111', null, 'Lia Rosanti', 'lia', 'bd36c1f226fedf674f9a62aa087ecba2', '002', 'PPK', 'Internal', '103', 'Dinas Pariwisata', '', '', '', '885522', 'VII D', 'lia@gmail.com', null, '2017-04-07');
INSERT INTO `master_user` VALUES ('112', '0', 'anam', 'anam', 'e18bebbddb9e2684e8b5357ed1ddbec6', '003', 'Pokja', 'Internal', '', null, '5', 'Pokja ||', '--PILIH--', '990099', 'VI A', 'anam@gmail.com', null, '2017-04-07');
INSERT INTO `master_user` VALUES ('114', null, 'Yola', 'yola', 'bad43a15b48dd7f93c5efdc930ae3ccc', '002', 'PPK', 'Internal', '107', 'Dinas Kesehatan', '', null, '', '34546', '3A', 'yola@gmail.com', null, '2017-04-17');
INSERT INTO `master_user` VALUES ('115', '0', 'Rena', 'rena', 'bfa8c6e10b796d98c5a57654e6817e97', '003', 'Pokja', 'internal', '', null, '--PILIH--', null, '--PILIH--', '5525', '3A', 'rena@gmail.com', null, '2017-04-17');
INSERT INTO `master_user` VALUES ('116', null, 'Ratih', 'ratih', '9f10f4c207cec9856efabfaa0e3dfcd1', '003', 'Pokja', 'Internal', '', null, '7', 'Pokja V', 'Sekretaris', '23489023892', '3a', 'hhsd@gmail.com', null, '2017-04-20');
INSERT INTO `master_user` VALUES ('117', '0', 'Raisa', 'raisa', 'd2fd3e94df6d400595339a6a92981c62', '002', 'PPK', 'Internal', '106', 'Dinas Perpustakaan dan Kearsipan', '--PILIH--', null, '--PILIH--', '3432423', '3a', 'yola@gmail.com', null, '2017-04-21');

-- ----------------------------
-- Table structure for profil_blp
-- ----------------------------
DROP TABLE IF EXISTS `profil_blp`;
CREATE TABLE `profil_blp` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of profil_blp
-- ----------------------------
INSERT INTO `profil_blp` VALUES ('3', 'test123', '<p>ini keterangan blp123</p>', '170406105714.JPG|', '2017-04-03');

-- ----------------------------
-- Table structure for sambutan
-- ----------------------------
DROP TABLE IF EXISTS `sambutan`;
CREATE TABLE `sambutan` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `jenis_sambutan` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sambutan
-- ----------------------------
INSERT INTO `sambutan` VALUES ('1', 'walikota', 'Pengertian Kota Batu dan asal usulnya', 'Kota adalah', '170313033511.jpg|', '2017-03-13');
INSERT INTO `sambutan` VALUES ('2', 'humas', 'Humas 111', 'Humas Humas123', '170310042644.jpg|', '2017-03-10');
INSERT INTO `sambutan` VALUES ('3', 'pers', 'Test Sambutan baru', 'sasa baru', '170310042837.jpg|', '2017-03-10');
INSERT INTO `sambutan` VALUES ('4', 'walikota', 'Silsilah Keluarga', '<p>kota batu</p>', '170313033523.jpg|', '2017-03-13');
INSERT INTO `sambutan` VALUES ('5', 'walikota', 'okeoekoke', '<p>sdfdfsdfsdfsdfsdf<br></p>', '170314071858.png|', '2017-03-14');
INSERT INTO `sambutan` VALUES ('6', 'walikota', 'asdad', '<p>asdasdasd<br></p>', '170314071951.png|', '2017-03-14');
INSERT INTO `sambutan` VALUES ('7', 'walikota', 'SAMBUTAN WALIKOTA BATU PADA ACARA PEMBUKAAN AJANG KOMPETISI SENI DAN OLAHRAGA MADRASAH (AKSIOMA), KOTA BATU TAHUN 2017', '<p>\r\n\r\n</p><p><strong>WALIKOTA BATU</strong></p><p><strong>SAMBUTAN WALIKOTA BATU</strong></p><p><strong>PADA ACARA </strong><strong>PEMBUKAAN AJANG KOMPETISI SENI DAN OLAHRAGA MADRASAH (AKSIOMA),</strong></p><p><strong>KOTA BATU TAHUN 2017</strong></p><p><strong>&nbsp;</strong></p><p><strong>Batu</strong><strong>, 9 Januari 2017</strong></p><p><strong>&nbsp;</strong></p><p>Yang saya hormati :</p><ol><li>Forkompinda Kota Batu;</li><li>Kepala Kementrian Agama Kota Batu;</li><li>Ketua KONI Kota Batu;</li><li>Kepala Satuan Kerja di Pemerintah Kota Batu;</li><li>Ketua Dewan Pendidikan Kota Batu;</li><li>Kepala UPTD Batu, Junrejo dan Bumiaji;</li><li>Para Kepala Madrasah di Kota Batu;</li><li>Panitia AKSIOMA se-Kota Batu;</li><li>Pendamping Peserta Ajang Kompetisi Seni Dan Olahraga Madrasah (AKSIOMA) Kota Batu;</li></ol><p>Anak- anak yang saya sayangi peserta Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) Tingkat Kota Batu.</p><p><strong><em>Assalamu’alaikum Wr. Wb.</em></strong></p><p><strong><em>Salam sejahtera bagi kita semua,</em></strong></p><p><strong><em>&nbsp; &nbsp; &nbsp; &nbsp; </em></strong>Sebagai insan yang beriman dan bertakwa,  marilah kita sampaikan puji syukur ke hadirat Allah SWT. Berkat karunia dan hidayah-Nya, kita berkesempatan untuk bersama-sama menghadiri pembukaan <strong><em>Ajang Kompetisi Seni dan Olahraga Madrasah </em></strong><strong><em>(AKSIOMA)</em></strong><strong><em>&nbsp;se </em></strong><strong><em>Kota Batu</em></strong><strong><em>&nbsp;Tahun 201</em></strong><strong><em>7</em></strong><strong><em>. </em></strong>Shalawat serta salam marilah kita haturkan kepada junjungan kita, Nabi Muhammad SAW, keluarga,sahabat dan segenap umatnya.</p><p></p><p><strong><em>Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Pendidikan Nasional bertujuan untuk berkembangnya potensi peserta didik agar menjadi manusia yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia, berilmu, cakap, kreatif, mandiri dan menjadi warga negara yang demokratis dan bertanggung jawab.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Salah satu faktor kunci penting pendidikan dalam mengembangkan potensi peserta didik baik pada bidang pengetahuan, teknologi, olahraga, seni, bahasa, dan kecakapan hidup lainnya, adalah perlu ada upaya maksimal baik melalui proses pembelajaran yang bermutu maupun latihan-latihan yang kontinue dan komprehensif. Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) dapat dijadikan wadah untuk mengembangkan potensi peserta didik pada bidang seni dan olahraga sebagai salah satu instrumen untuk mengukur kompetensi siswa dan mutu madrasah.</p><p></p><p><strong><em>Para Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) se Kota Batu Tahun 2017 ini merupakan momentum strategis bagi madrasah untuk berhijrah dari yang semula madrasah hanya merupakan sesuatu hal yang biasa menjadi lebih baik dan lebih hidup. Berhijrah artinya dalam rangka mencetak siswa madrasah yang mempunyai berbagai kemampuan khususnya di bidang seni dan olahraga.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Kegiatan ini memberikan perhatian pada kekuatan jiwa dan raga siswa madrasah dalam mengembangkan kreatifitas dan prestasi serta mutu madrasah. Kompetisi ini juga merupakan salah satu dari proses pembelajaran dan untuk berekspresi, bertindak sportif serta beraktualisasi diri.</p><p></p><p><strong><em>Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Kompetisi atau lomba yang diadakan pada AKSIOMA ini akan memberikan kesempatan dan peluang yang sama kepada semua siswa madrasah untuk berkompetisi pada berbagai bidang seni dan olahraga, selain itu kegiatan ini juga merupakan bagian dari upaya pemerintah dalam memberikan layanan pendidikan sesuai dengan bakat dan kemampuan siswa sebagaimana tertuang pada pasal 12 Undang-Undang Nomor 20 Tahun 2013 tentang <strong>Sistem Pendidikan Nasional.</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Adapun tujuan yang ingin dicapai dalam pelaksanaan AKSIOMA adalah :</p><ol><li>Mengembangkan potensi dan kreativitas siswa;</li><li>Menumbuhkan watak yang jujur, tekun, cermat dan berpandangan terbuka;</li><li>Membangun budaya berkompetisi secara sehat, fair dan sportif;</li><li>Membangun citra madrasah sebagai basis pengembangan rohani dan jasmani, skill dan intelektualitas;</li><li>Memberikan penghargaan bagi siswa berprestasi sesuai dengan minat dan bakatnya; dan</li><li>Terbangunnya rasa kebersamaan antar siswa madrasah dan antar madrasah.</li></ol><p></p><p><strong><em>Para Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; AKSIOMA memberikan nuansa yang sangat melekat tentang pentingnya pengembangan potensi dan kreativitas siswa madrasah, sebab diantara sekian banyak siswa tentu diantaranya ada yang memiliki bakat dibidang seni dan olahraga yang apabila diarahkan, dikembangkan dan dilatih tentu akan dapat menghasilkan prestasi yang membanggakan. Oleh karenanya saya menyambut baik dan sangat mendukung kegiatan ini, sebab AKSIOMA ini merupakan ajang yang tepat untuk menyalurkan bakat siswa, karenanya ajang ini perlu dilakukan secara berkelanjutan sehingga dapat melahirkan bakat-bakat potensial yang kelak dapat mengharumkan nama Jawa Timur dikancah regional, nasional bahkan tidak menutup kemungkinan tingkat dunia.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Dengan event ini, madrasah diharapkan bisa menjadi lumbung atlet yang berkualitas. Kini saatnya bagi madrasah untuk membuktikan bahwa lembaga berbasis Islam ini bisa lebih baik lagi. Apapun bisa kita</p><p>raih dengan bermodalkan keimanan dan ketekunan, serta kekuatan doa. Majulah siswa madrasah dengan semangat tinggi agar kalian bisa menjadi yang terbaik.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; AKSIOMA ini merupakan barometer tolak ukur kemampuan daerah dalam bidang seni dan olahraga agar dapat bersaing di tingkat nasional. Dari berbagai hasil riset dan sains, hasil raport dan UN bukan segalanya, tapi kompetensi dan kejujuran mempunyai peran besar. Maka dari itu, siswa madrasah harus memegang teguh dua hal tersebut.</p><p><strong>&nbsp;</strong></p><p><strong><em>Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Saya berpesan kepada Panitia dan Peserta Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) se Kota Batu &nbsp;Tahun 2017 agar melaksanakan kegiatan secara jujur, transparan dan sportif, sehingga tujuan dilaksanakan kompetisi madrasah ini dapat tercapai.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Kepada peserta kegiatan ini jadikanlah Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) ini sebagai salah satu wadah strategis untuk merealisasikan paradigma pendidikan bercorak Character Building (Pembangunan Karakter). Marilah kita renungkan kata seorang bijak berkata <strong><em>“ perbuatan seorang bijak dihadapan seribu orang, lebih bermanfaat dari untaian hikmah seribu bijak dihadapan satu orang “. </em></strong>Dengan kata lain keteladanan adalah kunci dari pendidikan karakter.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Dengan mengambil tema kegiatan yaitu <strong>“</strong><strong>Menumbuhkembangkan ikap kreatif,professional dan sportif dalam mewujudkan madrasah yang berprestasi dan bermartabat </strong><strong>“</strong>, kepada anak-anakku sekalian Peserta AKSIOMA se Kota Batu Tahun 2017 ini harus merasa bangga menjadi siswa madrasah, jangan minder, sebab semua ilmu bisa kita dapatkan di madrasah, tak hanya ilmu agama tetapi sains, seni dan olahraga juga terakomodasi.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Ada nilai plus pada madrasah yang tidak dimiliki oleh sekolah umum yaitu selain diberikan pengetahuan umum, siswa diberikan porsi pendidikan akhlak/agama lebih banyak dibandingkan sekolah umum, sehingga lulusan madrasah selain mengusai ilmu pengetahuan juga memiliki kualitas keimanan dan ketaqwaan yang baik. Madrasah tak hanya bisa mencetak orang yang bisa mengaji, tapi juga kader-kader bangsa yang berkarakter serta profesional.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Dengan perpaduan antara iman, ilmu dan amal, merupakan nilai lebih dari madrasah. Dengan agama hidup kita jadi berkah, dengan ilmu bisa terarah, dengan olahraga hidup kita akan jadi sehat dan dengan seni hidup kita terasa indah. Selamat Berlomba dan Bertanding, junjung tinggi sportifitas dan kejujuran dalam meraih prestasi.</p><p>Akhirnya, dengan mengucap :</p><p><strong><em>Bismillahirrahmaanirrahiim</em></strong></p><p>Pada hari ini, Senin tanggal 9 Januari 2017, Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) , se Kota Batu Tahun 2017 secara resmi saya nyatakan dimulai pelaksanaannya.</p><p>Semoga Allah SWT senantiasa meridhoi dan memudahkan langkah-langkah kita. Sekian.</p><p><strong><em>Wabillahitaufiq walhidayah,</em></strong></p><p><strong><em>Wassalamu’alaikum Wr. Wb.</em></strong></p><p><strong><em>&nbsp;</em></strong></p><p><strong>&nbsp;</strong></p><p><strong>WALIKOTA BATU</strong></p><p><strong>&nbsp;</strong></p><p><strong>&nbsp;</strong></p><p><strong>EDDY RUMPOKO</strong></p>\r\n\r\n<br><p></p>', '170329075441.jpg|', '2017-03-29');
INSERT INTO `sambutan` VALUES ('8', '6	walikota	asdad	<p>asdasdasd<br></p>	170314071951.png|	2017-03-14', null, null, null, '0000-00-00');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES ('4', 'baru', null, '170406103249.jpg|170406103157.JPG|', '2017-04-13', '1', 'asaa');
INSERT INTO `slider` VALUES ('5', 'awdadw', null, '170406104234.jpg|', '0000-00-00', '1', 'adwadw');
INSERT INTO `slider` VALUES ('6', 'sadadwdas', null, '170406104045.jpg|', '2017-04-05', '1', 'sasa');

-- ----------------------------
-- Table structure for sop
-- ----------------------------
DROP TABLE IF EXISTS `sop`;
CREATE TABLE `sop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_petugas` varchar(255) DEFAULT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sop
-- ----------------------------
INSERT INTO `sop` VALUES ('3', 'perda daerah tentang pelarngan aksi hardcore massal', '2017-04-17', '1', 'astro', '170417101110.pdf|');
INSERT INTO `sop` VALUES ('4', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('5', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('6', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('7', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('8', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('9', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('10', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('11', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('12', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('13', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('14', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('15', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');
INSERT INTO `sop` VALUES ('16', 'jihan', '2017-04-17', '1', 'astro', '170417101212.pdf|');

-- ----------------------------
-- Table structure for struktur
-- ----------------------------
DROP TABLE IF EXISTS `struktur`;
CREATE TABLE `struktur` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of struktur
-- ----------------------------
INSERT INTO `struktur` VALUES ('2', 'Test123', '<p>test struktur123</p>', '170406105817.jpg|', '2017-04-06');

-- ----------------------------
-- Table structure for struktur_humas
-- ----------------------------
DROP TABLE IF EXISTS `struktur_humas`;
CREATE TABLE `struktur_humas` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of struktur_humas
-- ----------------------------
INSERT INTO `struktur_humas` VALUES ('4', 'Struktur Organisasi Humas', '<p>\r\n\r\n</p><h4><br></h4><h4><br></h4><h4><p></p><p></p>\r\n\r\nBagian Hubungan Masyarakat sebagai bagian dari Sekretariat Kota Batu dibawah Asisten Umum dan Pemerintahan Sekretaris Daerah secara struktural terdiri dari Kepala Bagian (Eselon IIIa), 3 sub bagian (Eselon IVa) yaitu : Sub Bagian Peliputan dan Dokumentasi, Sub Bagian Pengolahan Data, Sub Bagian Publikasi dan Kerjasama Pers.\r\n\r\n<br><p></p><p></p></h4><p></p>', '170313082534.jpeg|', '2017-03-13');

-- ----------------------------
-- Table structure for testimonial
-- ----------------------------
DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE `testimonial` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of testimonial
-- ----------------------------
INSERT INTO `testimonial` VALUES ('1', 'noob', 'noob@gmial.ocm', 'wowowwoowowowowowowo', '2017-03-10', null);
INSERT INTO `testimonial` VALUES ('2', 'anam', 'choirulanam2222@gmail.com', 'jijijiiijijijk', '2017-03-15', '0');
INSERT INTO `testimonial` VALUES ('3', 'anam', 'angga@angga.angga', 'test my friend', '2017-03-10', '0');
INSERT INTO `testimonial` VALUES ('5', 'Haaai :v', 'gaada:v@yahoo.com', 'ini keterangan ya? :v', '2017-03-11', '0');
INSERT INTO `testimonial` VALUES ('6', 'Haaai :v', 'gaada:v@yahoo.com', 'ini keterangan ya? :v', '2017-03-11', '0');
INSERT INTO `testimonial` VALUES ('7', 'Haaai :v', 'gaada:v@yahoo.com', 'ini keterangan ya? :v', '2017-03-11', '0');
INSERT INTO `testimonial` VALUES ('8', 'Haaai :v', 'gaada:v@yahoo.com', 'ini keterangan ya? :v', '2017-03-11', '0');
INSERT INTO `testimonial` VALUES ('9', 'angga', 'angga@angga.angga', 'angga\nangga\nangga', '2017-03-15', '0');
INSERT INTO `testimonial` VALUES ('10', 'ee', 'ee', 'eee', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('11', 'Yuko', 'yukotanjung@gmail.com', 'Coba testimonial', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('12', 'sasa', 'assa', 'assasa', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('13', 'test', 'test', 'test', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('14', 'anam', 'test 1', 'coba ulang', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('15', 'aaaa', 'aaaa', 'aaaaa', '2017-03-30', '0');

-- ----------------------------
-- Table structure for transaksi_data_paket
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_data_paket`;
CREATE TABLE `transaksi_data_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_paket` varchar(255) DEFAULT NULL,
  `nama_paket` varchar(255) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `tanggal_rencana_pengadaan` varchar(10) DEFAULT NULL,
  `tanggal_rencana_pekerjaan` varchar(10) DEFAULT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `pagu` varchar(255) DEFAULT NULL,
  `hps` varchar(255) DEFAULT NULL,
  `kode_ppk` varchar(255) DEFAULT NULL,
  `nama_ppk` varchar(255) DEFAULT NULL,
  `kode_pokja` varchar(255) DEFAULT NULL,
  `nama_pokja` varchar(255) DEFAULT NULL,
  `kode_satuan_kerja` varchar(255) DEFAULT NULL,
  `nama_satuan_kerja` varchar(255) DEFAULT NULL,
  `kode_sumber_dana` varchar(255) DEFAULT NULL,
  `nama_sumber_dana` varchar(255) DEFAULT NULL,
  `jenis_pengadaan` varchar(255) DEFAULT NULL,
  `metode_pengadaan` varchar(255) DEFAULT NULL,
  `status_paket` varchar(255) DEFAULT '',
  `posisi` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `status_surat` varchar(255) DEFAULT NULL,
  `status_pengajuan` varchar(255) DEFAULT NULL,
  `status_pengerjaan` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `pemenang` varchar(255) DEFAULT NULL,
  `nilai_kontrak` varchar(255) DEFAULT NULL,
  `nama_direktur` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `tutup_tahun` varchar(255) DEFAULT NULL,
  `nomor_surat_ppk` varchar(255) DEFAULT NULL,
  `nomor_surat_sekretariat` varchar(255) DEFAULT '',
  `nomor_sprpp` varchar(255) DEFAULT NULL,
  `tanggal_pengumuman_lelang` date DEFAULT NULL,
  `tanggal_mulai_ambising` date DEFAULT NULL,
  `jam_mulai_ambising` varchar(255) DEFAULT NULL,
  `tanggal_akhir_ambising` date DEFAULT NULL,
  `jam_akhir_ambising` varchar(255) DEFAULT NULL,
  `tanggal_mulai_pemasukan` date DEFAULT NULL,
  `tanggal_selesai_pemasukan` date DEFAULT NULL,
  `pencairan_gaji` varchar(255) DEFAULT NULL,
  `tanggal_lelang` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi_data_paket
-- ----------------------------
INSERT INTO `transaksi_data_paket` VALUES ('1', 'PK_0001', 'Pembuatan E-KTP', '2017-04-26', '03', '03', 'Pengadaan E-KTP', '15000000', 'Malang', '1060000000', '1060000000', '3332211', 'orlen', '2', 'Pokja III', '104', 'Dinas Informasi dan Informatika', '12', 'APBN', 'Barang', '0', 'sukses', 'proses penjadwalan', null, 'terbit surat', 'Overdue', '', null, 'Angga', '2000000', 'Erlangga', 'Surabaya', '2017', 'Open', '123456', '', '1212', '2017-04-28', '2017-04-30', '10:11', '2017-04-28', '10:11', '2017-04-28', '2017-04-28', null, null);
INSERT INTO `transaksi_data_paket` VALUES ('2', 'PK_0002', 'Pembangunan Jalan Wisata', '2017-04-26', '01', '01', 'Pembangunan Jalan Wisata', '5000000000', 'Batu', '5000000000', '5000000000', '885522', 'Lia Rosanti', '5', 'Pokja II', '103', 'Dinas Pariwisata', '12', 'APBN', 'Jasa Lainnya', '0', 'Dokumen Lengkap', 'verifikasi perbaikan', null, 'terbit surat', 'Overdue', null, null, null, null, null, null, '2017', 'Open', '123', '', null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for transaksi_rapat
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_rapat`;
CREATE TABLE `transaksi_rapat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_rapat` varchar(255) DEFAULT NULL,
  `tanggal_rapat` date DEFAULT NULL,
  `agenda` varchar(255) DEFAULT NULL,
  `kode_paket` varchar(255) DEFAULT NULL,
  `nama_paket` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `kode_satuan_kerja` varchar(255) DEFAULT NULL,
  `nama_satuan_kerja` varchar(255) DEFAULT NULL,
  `kode_pokja` varchar(255) DEFAULT NULL,
  `nama_pokja` varchar(255) DEFAULT NULL,
  `kode_ppk` varchar(255) DEFAULT NULL,
  `nama_ppk` varchar(255) DEFAULT NULL,
  `kode_sekretariat` varchar(255) DEFAULT NULL,
  `nama_sekretariat` varchar(255) DEFAULT NULL,
  `status_rapat` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `notulensi` varchar(255) DEFAULT '',
  `biaya_penunjang` varchar(255) DEFAULT NULL,
  `siup` varchar(255) DEFAULT NULL,
  `personil_inti_minimal` text,
  `peralatan_utama_minimal` text,
  `file_jadwal` varchar(255) DEFAULT NULL,
  `file_daftar_identitas` varchar(255) DEFAULT NULL,
  `file_rab` varchar(255) DEFAULT NULL,
  `file_gambar_teknis` varchar(255) DEFAULT NULL,
  `surat_dukungan` varchar(255) DEFAULT NULL,
  `jenis_kontrak` varchar(255) DEFAULT NULL,
  `jadwal_pelaksanaan` varchar(255) DEFAULT NULL,
  `uang_muka` varchar(255) DEFAULT NULL,
  `pembayaran_prestasi` varchar(255) DEFAULT NULL,
  `masa_pembayaran` varchar(255) DEFAULT NULL,
  `keterangan_tambahan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `tutup_tahun` varchar(255) DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `status_ppk` varchar(255) DEFAULT NULL,
  `status_pokja` varchar(255) DEFAULT NULL,
  `keterangan_jadwal_rapat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi_rapat
-- ----------------------------
INSERT INTO `transaksi_rapat` VALUES ('2', 'RPT_0001', '2017-05-06', 'Rapat Kaji Ulang', 'PK_0001', 'Pembuatan E-KTP', 'ULP', '104', 'Dinas Informasi dan Informatika', '2', 'Pokja III', '3332211', 'orlen', '67', 'Astroboy', null, null, 'terisi', 'ada', 'Malang', '|a|b|v|d|e1|f1', '|a|b|v|n|a1|b2|c3', 'ada', 'tidak ada', 'ada', 'tidak ada', 'diperlukan', 'Sementara', '02', 'tidak', 'termin', 'bulanan', 'test1|tst2|tst3|tst4|tst5|tst6||tst7|tst9|tst8', '2017', 'Close', '10:00:00', 'Proses Verifikasi', 'Proses Verifikasi', null);
INSERT INTO `transaksi_rapat` VALUES ('3', 'RPT_0002', '2017-04-27', 'Rapat Kaji Ulang', 'PK_0002', 'Pembangunan Jalan Wisata', 'ULP', '103', 'Dinas Pariwisata', '5', 'Pokja II', '885522', 'Lia Rosanti', '67', 'Astroboy', null, null, '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2017', 'Close', '09:32:00', 'Terima', 'Terima', 'you suck');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `upass` varchar(255) DEFAULT NULL,
  `akses` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'astro', '8cd07cf78166032f36fd06cb40163942', '||product|promo|berita|galery|contact|email|user|slider|kritik|paket|tentang|');
INSERT INTO `user` VALUES ('2', 'admin', 'admin', null);
INSERT INTO `user` VALUES ('3', 'oke', 'okoko', null);

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `kode_petugas` varchar(255) DEFAULT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('3', '2017-03-22', 'aw', 'iTHRuRRut8Q', '0', '0');

-- ----------------------------
-- Table structure for visimisi
-- ----------------------------
DROP TABLE IF EXISTS `visimisi`;
CREATE TABLE `visimisi` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of visimisi
-- ----------------------------
INSERT INTO `visimisi` VALUES ('3', 'Test123', '<p>test isi visi misi123</p>', '170406105746.jpg|', '2017-04-06');

-- ----------------------------
-- Table structure for visi_humas
-- ----------------------------
DROP TABLE IF EXISTS `visi_humas`;
CREATE TABLE `visi_humas` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of visi_humas
-- ----------------------------
INSERT INTO `visi_humas` VALUES ('1', 'Baru  jum', '<p></p><h3><br></h3><h3><br></h3><h3><br></h3><h3></h3><h3><blockquote>Visi Humas Kota Wisata Batu</blockquote></h3><h3><em>“Membangun reputasi melalui media relations serta mengoptimalkan sosialisai kebijakan kepala daerah”</em></h3><p><em><br></em></p><p><em><br></em></p><p><em><br></em></p><h3></h3><h3></h3><h3><blockquote>Misi Humas Kota Wisata Batu</blockquote></h3><h3><em>Membangun pencitraan kelembagaan pemerintah daerah<br>Mengembangkan penyampaian informasi yang akurat, jujur dan bertanggung jawab kepada publik</em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><p><em><br></em></p><p></p>', '170309092021.jpg|', '2017-03-13');

-- ----------------------------
-- Table structure for widget
-- ----------------------------
DROP TABLE IF EXISTS `widget`;
CREATE TABLE `widget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of widget
-- ----------------------------
INSERT INTO `widget` VALUES ('5', 'anma', '170405104427.jpg|');
