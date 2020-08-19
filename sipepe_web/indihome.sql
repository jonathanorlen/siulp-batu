/*
Navicat MySQL Data Transfer

Source Server         : lokal
Source Server Version : 50539
Source Host           : 127.0.0.1:3306
Source Database       : indihome

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2016-11-04 15:11:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for atombizz_employee
-- ----------------------------
DROP TABLE IF EXISTS `atombizz_employee`;
CREATE TABLE `atombizz_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) DEFAULT NULL,
  `status_alumni` enum('0','1') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` longtext,
  `group` int(11) DEFAULT NULL,
  `workstation` varchar(50) DEFAULT NULL,
  `gaji` bigint(20) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `urut` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of atombizz_employee
-- ----------------------------
INSERT INTO `atombizz_employee` VALUES ('5', '2014', '1', '1992-07-14', null, 'bambang supeno', '123456789987654321', 'singosari', '085721423839', null, null, 'admin', '9c69c2e28557a737ffc2d3aad9160b76', '1', '1.001.001', null, null, null);

-- ----------------------------
-- Table structure for atombizz_employee_access
-- ----------------------------
DROP TABLE IF EXISTS `atombizz_employee_access`;
CREATE TABLE `atombizz_employee_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_id` int(11) NOT NULL,
  `access` longtext NOT NULL,
  `module` longtext,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of atombizz_employee_access
-- ----------------------------
INSERT INTO `atombizz_employee_access` VALUES ('1', '1', '[\"your_module.your_module.index\"]', '[\"your_module\"]', null);

-- ----------------------------
-- Table structure for atombizz_employee_position
-- ----------------------------
DROP TABLE IF EXISTS `atombizz_employee_position`;
CREATE TABLE `atombizz_employee_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(20) DEFAULT NULL,
  `information` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of atombizz_employee_position
-- ----------------------------
INSERT INTO `atombizz_employee_position` VALUES ('1', 'Administrator', '');

-- ----------------------------
-- Table structure for buah
-- ----------------------------
DROP TABLE IF EXISTS `buah`;
CREATE TABLE `buah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `foto` text,
  `isi` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `harga` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buah
-- ----------------------------
INSERT INTO `buah` VALUES ('21', '0', 'apel', '160823093235.png|', '<p>apel</p>', '2016-08-24 10:05:06', '1', 'Rp 20000');

-- ----------------------------
-- Table structure for coba
-- ----------------------------
DROP TABLE IF EXISTS `coba`;
CREATE TABLE `coba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `tgl` date DEFAULT NULL,
  `foto` text,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `harga` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of coba
-- ----------------------------
INSERT INTO `coba` VALUES ('17', 'Happy Hours', '<p>Diskon 20% Refleksi dan Aromatic Body Spa jam 18:00 - 21:00 WIB, Hari Senin - Jumat</p>', '2016-03-01', '160902094504.jpg|', '1', 'Rp 10000');
INSERT INTO `coba` VALUES ('18', 'tes', '<p>tes</p>', '2016-03-12', '160902094632.jpg|', '1', 'Rp 10000');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('2', 'asd', 'gfgfgf', 'asd', 'asd', 'asd', '5454545', 'asd', 'asd', '2016-11-04 10:58:56', '1');

-- ----------------------------
-- Table structure for galery
-- ----------------------------
DROP TABLE IF EXISTS `galery`;
CREATE TABLE `galery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `foto` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of galery
-- ----------------------------
INSERT INTO `galery` VALUES ('1', 'Persiapan', '161019100307.jpg|', '2016-10-19 15:03:17', '1');
INSERT INTO `galery` VALUES ('2', 'Hari Pelanggan', '161019100329.jpg|', '2016-10-19 15:03:43', '1');
INSERT INTO `galery` VALUES ('3', 'Event', '161104035622.jpg|', '2016-11-04 09:59:34', '1');
INSERT INTO `galery` VALUES ('4', 'Jalan Sehat', '161019100628.jpg|', '2016-10-19 15:06:41', '1');
INSERT INTO `galery` VALUES ('5', 'telkom ', '161020055149.jpg|', '2016-10-20 10:52:02', '1');
INSERT INTO `galery` VALUES ('6', 'tes', '161020055353.jpg|', '2016-10-20 10:53:59', '1');
INSERT INTO `galery` VALUES ('7', '33', '161104072417.jpg|', '2016-11-04 13:24:21', '1');

-- ----------------------------
-- Table structure for kategori_indihome
-- ----------------------------
DROP TABLE IF EXISTS `kategori_indihome`;
CREATE TABLE `kategori_indihome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori_indihome
-- ----------------------------
INSERT INTO `kategori_indihome` VALUES ('1', 'Indihome DTH Transvision');
INSERT INTO `kategori_indihome` VALUES ('2', 'Indihome Perintis');
INSERT INTO `kategori_indihome` VALUES ('3', 'Indihome Subsidi');

-- ----------------------------
-- Table structure for keterangan_paket
-- ----------------------------
DROP TABLE IF EXISTS `keterangan_paket`;
CREATE TABLE `keterangan_paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of keterangan_paket
-- ----------------------------
INSERT INTO `keterangan_paket` VALUES ('2', '<p>\r\n\r\n</p><div><b>INFORMASI TAMBAHAN :</b></div><div>a. Biaya Pasang Baru Rp 82.500 akan ditagihkan pada bulan pertama (1x saja)</div><div>b. Harga diatas sudah termasuk instalasi dan sewa perangkat</div><div>c. Harga bulanan belum termasuk PPN 10%</div><div>d. Estimasi pemasangan maksimal 1 minggu setelah registrasi<br>e. Untuk paket 10Mbps 20Gb/50Gb/100Gb jika FUP habis kecepatan internet turun jadi 0,5Mbps sampai akhir bulan</div><div></div><div></div><br><div><br></div><b>CARA PASANG BARU :</b><br>&nbsp;<b>dikunjungi :</b><br>1. Fotokopi KTP 2 lembar<br>2. Materai 6 ribu 2 lembar<div>3. Mengisi Formulir<br><br><b>via email :</b><br>1. Siapkan file KTP/SIM (scan/foto)<br>1. Download dulu form pendaftaran <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.dropbox.com/s/10lumuxus626vxt/NEW-PERMOHONAN%20DAN%20PERSETUJUAN%20BERLANGGANAN%20TELKOM%20INDIHOME.docx?dl=0\">disini</a><br>2. Isi form dengan benar<br>4. kirim form pendaftaran dan file KTP ke email telkom91@yahoo.com atau fatkul@telkom.net.id<br>5. Jika sudah silahkan konfirmasi ke  085646510117/081230050031 (SMS/WA/Call)(SMS/Line/Call/WA)<br><br><b>via BBM atau Whatsapp :</b><br>1. Add pin 5CEB1C51 atau 085646510117(W.A)<br><div>2. Kirim file KTP (foto/scan), screenshot lokasi rumah by google maps dan sertakan (alamat pemasangan, nomor HP, e-mail, nama ibu kandung) ke BBM/W.A</div><br>Informasi Berlangganan : 081230050031/ 085646510117 (SMS/Call/WA)&nbsp;<br><p></p>								</div>');

-- ----------------------------
-- Table structure for kritik
-- ----------------------------
DROP TABLE IF EXISTS `kritik`;
CREATE TABLE `kritik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kritik
-- ----------------------------
INSERT INTO `kritik` VALUES ('1', '76588', 'challista eka putri', '65765', 'cloudastro.id@gmail.com', 'Pelayanan', 'dfdfdgd', '2016-05-20 09:51:47');
INSERT INTO `kritik` VALUES ('2', '1', 'a', '12345', 'q@a.com', 'Perawatan', 'a i u e o', '2016-08-20 11:14:11');

-- ----------------------------
-- Table structure for mail
-- ----------------------------
DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subject` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `bagaimana` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mail
-- ----------------------------
INSERT INTO `mail` VALUES ('3', '2016-10-20 11:00:35', 'Masukan / Komentar', 'fdfd', 'cloudastro.id@gmail.com', '6768833', 'Majalah', 'fgfgdfgfd');
INSERT INTO `mail` VALUES ('4', '2016-10-20 14:46:36', 'tesa', 'tesa', 'cloudastro.id@gmail.com', '087777679', '', 'gfhgfhgghj');
INSERT INTO `mail` VALUES ('5', '2016-10-20 14:47:25', 'afasfda', 'asdasd', 'asdasdasd', '23423423423', '', 'asdasdasd');
INSERT INTO `mail` VALUES ('6', '2016-11-04 10:59:33', 'ttrfg', 'ghgfh', 'tanjungyuko@gmail.com', 'ghfgh', '', 'ghgfhgfhgfghjhjjkjjgjhgjhj');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_induk` varchar(11) DEFAULT NULL,
  `nama_menu` varchar(100) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('11', 'induk', 'testing', 'detail_page/0', '2016-10-20 10:45:21', '1');
INSERT INTO `menu` VALUES ('12', null, 'cek', null, '2016-10-21 09:48:44', '0');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `foto` text,
  `isi_berita` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('14', 'tes', '161020093849.jpg|', '<p>\r\n\r\n<p>Layanan internet broadband mempunyai peran penting dalam meningkatkan kualitas hidup. Internet merupakan media yang digunakan untuk mendukung berbagai aktivitas. Oleh karena itu, Telkom berkomitmen untuk terus meningkatkan kualitas layanan IndiHome bagi pelanggan.</p><p>Kualitas layanan IndiHome terus ditingkatkan dari segala aspek. Pada aspek teknologi, IndiHome memanfaatkan Indonesia Digital Network yang berbasis teknologi fiber optic, membentang dari ujung barat sampai timur Indonesia. Pelanggan akan semakin dimanjakan dengan jaringan fiber optic yang mampu menyediakan layanan akses internet kecepatan tinggi. Kualitas koneksinya pun lebih stabil dan handal, tidak mudah.</p>\r\n\r\n</p>', '2016-10-21 10:53:08', '1');
INSERT INTO `news` VALUES ('15', 'telkom indonesia', '161020094526.jpg|', '<p></p>\r\n\r\n<p><b>Meyakini kualitas penerapan praktik terbaik GCG akan terjaga dan teruji</b></p><p>Perseroan menjadikan tahun 2015 sebagai tahun budaya penerapan prinsip dasar GCG. Dengan menjadikan prinsip-prinsip dasar GCG sebagai budaya dalam menjalankan tugastugas operasional sehari-hari, kami meyakini kualitas penerapan praktik terbaik GCG akan terjaga dan teruji. Sehingga seluruh manfaat dari penerapan praktik terbaik GCG dapat kami rasakan, terutama naiknya nilai perusahaan dan terpenuhinya harapan para pemangku kepentingan</p><p><b>TUJUAN DAN KOMITMEN PENERAPAN TATA KELOLA</b></p><p><b>TUJUAN PENERAPAN TATA KELOLA PERUSA HAAN YAN G BAIK</b></p><p>Telkom menerapkan praktik terbaik tata kelola dengan beberapa tujuan, meliputi:</p><p>• Memaksimalkan nilai perusahaan dan nilai untuk <i>stakeholders</i>.</p><p>• Mendorong pengelolaan perusahaan secara profesional, transparan dan efisien.</p><p>• Memberdayakan fungsi dan meningkatkan kemandirian Pemegang Saham, Dewan Komisaris, Direksi, Komitekomite dan Sekretaris Perusahaan.</p><p>• Memperhatikan adanya tanggung jawab perusahaan terhadap kondisi sosial masyarakat dan lingkungan sekitar.</p><p>• Meningkatkan kontribusi perusahaan dalam perekonomian nasional.</p><p>• Meningkatkan iklim investasi nasional.</p><p><b>KOMITMEN</b></p><p>Komitmen Perseroan dalam menerapkan GCG ditunjukkan dengan keluarnya Surat Keputusan Direksi tentang Pedoman GCG No.29/2007 dan Pedoman GCG Group No.602/2011. Keputusan Direksi tersebut memuat beberapa sistem penerapan GCG untuk menjamin bahwa GCG telah diterapkan b</p>\r\n\r\n<p></p>', '2016-10-21 11:29:27', '1');

-- ----------------------------
-- Table structure for page
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` varchar(20) NOT NULL,
  `nama_page` varchar(30) DEFAULT NULL,
  `isi_page` varchar(70) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `menu` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('', 'testing', '<p>cvcbcvb</p>', '|', '11', null, null);

-- ----------------------------
-- Table structure for parcel
-- ----------------------------
DROP TABLE IF EXISTS `parcel`;
CREATE TABLE `parcel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `foto` text,
  `isi` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `harga` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of parcel
-- ----------------------------
INSERT INTO `parcel` VALUES ('19', '0', 'jeeruk', '160823090237.jpg|', '<p>jeruk</p>', '2016-08-24 10:04:51', '1', 'Rp 15000');

-- ----------------------------
-- Table structure for pesan_pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pesan_pelanggan`;
CREATE TABLE `pesan_pelanggan` (
  `id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `bagaimana` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pesan_pelanggan
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `foto` text,
  `isi` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `harga` varchar(20) DEFAULT NULL,
  `status_produk` varchar(20) DEFAULT NULL,
  `jenis_produk` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('24', '0', 'Telkomsel Mania', '161019090830.jpg|', '<p>mkdcmvkmfdnvnfdjnvjfn</p><p>kdfivindf</p><p></p><ul><li>kcv jnfj<br></li><li>cdfnjrnjvnjf</li><li>cnvjfnd</li></ul><p></p>', '2016-10-20 13:55:26', '1', '12000', 'None', 'Parcel');
INSERT INTO `product` VALUES ('25', '0', 'wifi.id Seamless', '161018052225.jpg|', '<p>dmkvmkdfvnjfdnjvgfgv dfnjvnjndvid vdnjvnidnkvmkd</p>', '2016-10-19 14:02:59', '1', '120000', 'None', 'Parcel');
INSERT INTO `product` VALUES ('26', '0', ' Antivirus', '161018052157.jpg|', '<p>\r\n\r\n<b>Trend Micro Security System</b> adalah layanan Internet Security dari Telkom untuk pelanggan Internet IndiHome dengan aplikasi Trend Micro sebagai platform. Komputer anda akan terlindung dari serangan virus, malware, spyware, spam, phising dan konten yang tidak layak dari Internet sehingga data dan sistem aplikasi terbatas dari gangguan tersebut.\r\n\r\n</p>', '2016-10-19 14:03:16', '1', '12000', 'None', 'Parcel');
INSERT INTO `product` VALUES ('27', '0', 'Indihome View (CCTV Online) ', '161018052125.jpg|', '<p></p>\r\n\r\n<div><b>Indihome View </b>solusi mudah, cepat dan hemat untuk mengawasi rumah, kantor, toko dengan IP kamera yang dapat diakses menggunakan Smartphone/Laptop kapan saja dan dimana saja. Indihome View terhubung dengan modem wifi Speedy anda, sehingga tidak memerlukan Space memori untuk menyimpan hasil record.</div><div>Untuk berlangganan Indihome View cukup mudah dan murah. hanya Rp.10.000/bulan anda sudah bisa mengawasi rumah/kantor/toko anda secara intens.</div><div><br></div><div><i>- Harga perangkat berupa kamera Rp.550.000</i></div><div><i>- Harga belum termasuk biaya langganan Indihome</i></div>\r\n\r\n<p></p>', '2016-10-19 14:03:23', '1', '10000', 'None', 'Parcel');
INSERT INTO `product` VALUES ('28', '0', 'USEETV', '161019091158.jpg|', '<p>,cncjxbvhbh</p><p>dshbcdshi</p>', '2016-10-19 14:12:03', '1', '10000', 'None', 'Parcel');
INSERT INTO `product` VALUES ('29', '0', 'INDIHOME FIBER', '161019091035.jpg|', 'Buah adalah organ pada tumbuhan berbunga yang merupakan perkembangan lanjutan dari bakal buah (ovarium). Buah biasanya membungkus dan melindungi biji. Aneka rupa dan bentuk buah tidak terlepas kaitannya dengan fungsi utama buah, yakni sebagai pemencar biji tumbuhan.', '2016-10-20 14:29:07', '1', '12000', 'Restock', 'Parcel');

-- ----------------------------
-- Table structure for produk_indihome
-- ----------------------------
DROP TABLE IF EXISTS `produk_indihome`;
CREATE TABLE `produk_indihome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(225) DEFAULT NULL,
  `indihome` varchar(225) DEFAULT NULL,
  `telp_rumah` varchar(225) DEFAULT NULL,
  `cable` varchar(225) DEFAULT NULL,
  `harga` varchar(225) DEFAULT NULL,
  `kode_tr` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of produk_indihome
-- ----------------------------
INSERT INTO `produk_indihome` VALUES ('15', '1', '1 Mbps', 'GRATIS 1000 menit Nelpon lokal/interlokal', '72 CH (46 SD + 26 SD) Free All Chanel 3 bulan', '295000', '04112016020633');
INSERT INTO `produk_indihome` VALUES ('16', '1', '2 Mbps', 'GRATIS 1000 menit Nelpon lokal/interlokal', '72 CH (46 SD + 26 SD) Free All Chanel 3 bulan', '345000', '04112016020633');
INSERT INTO `produk_indihome` VALUES ('17', '1', '3 Mbps', 'GRATIS 1000 menit Nelpon lokal/interlokal', '72 CH (46 SD + 26 SD) Free All Chanel 3 bulan', '395000', '04112016020633');
INSERT INTO `produk_indihome` VALUES ('18', '2', '10 Mbps 20GB', 'Free nelpon 1000 menit', '43 channel pilihan', '325000', '04112016020832');
INSERT INTO `produk_indihome` VALUES ('19', '2', '10 Mbps 50GB', 'Free nelpon 1000 menit', '43 channel pilihan', '355000', '04112016020832');
INSERT INTO `produk_indihome` VALUES ('20', '3', '10 Mbps 20GB', 'Free nelpon 100 menit', '43 channel pilihan', '275000', '04112016021141');
INSERT INTO `produk_indihome` VALUES ('21', '3', '10 Mbps 50GB', 'Free nelpon 100 menit', '43 channel pilihan', '305000', '04112016021141');

-- ----------------------------
-- Table structure for produk_indihome_temp
-- ----------------------------
DROP TABLE IF EXISTS `produk_indihome_temp`;
CREATE TABLE `produk_indihome_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(225) DEFAULT NULL,
  `indihome` varchar(225) DEFAULT NULL,
  `telp_rumah` varchar(225) DEFAULT NULL,
  `cable` varchar(225) DEFAULT NULL,
  `harga` varchar(225) DEFAULT NULL,
  `kode_tr` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of produk_indihome_temp
-- ----------------------------

-- ----------------------------
-- Table structure for promo
-- ----------------------------
DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `tgl` date DEFAULT NULL,
  `foto` text,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of promo
-- ----------------------------
INSERT INTO `promo` VALUES ('1', 'Promo idul adha', '<p>Diskon 20% untuk semua buah dari jam 18:00 - 21:00 WIB, Hari Senin aja lhooo</p>', '2016-03-01', '160312033427.jpg|', '1');
INSERT INTO `promo` VALUES ('12', 'aaa', '<p>asdfghjkl</p>', '2016-09-17', '160917052955.jpg|', '1');
INSERT INTO `promo` VALUES ('13', 'Promo Tahun Islam', '<p>diskon</p>', '2016-09-14', '160917061655.jpg|', '1');
INSERT INTO `promo` VALUES ('15', 'buah segar', '<p>\r\n\r\n<b>Promosi</b>&nbsp;adalah upaya untuk memberitahukan atau menawarkan produk atau jasa pada dengan tujuan menarik calon <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Konsumen\" title=\"Link: https://id.wikipedia.org/wiki/Konsumen\">konsumen</a>&nbsp;untuk membeli atau mengkonsumsinya. Dengan adanya promosi <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Produsen\">produsen</a>&nbsp;atau <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Distributor\">distributor</a>&nbsp;mengharapkan kenaikannya angka <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Penjualan\">penjualan</a>.\r\n\r\n<br></p>', '2016-10-13', '161013063000.gif|', '1');

-- ----------------------------
-- Table structure for promo_asli
-- ----------------------------
DROP TABLE IF EXISTS `promo_asli`;
CREATE TABLE `promo_asli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `tgl` date DEFAULT NULL,
  `foto` text,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `harga` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of promo_asli
-- ----------------------------
INSERT INTO `promo_asli` VALUES ('1', 'Promo idul adha', '<p>Diskon besar untuk semua buah di toko Tani Mandiri</p>', '2016-03-01', '160312033427.jpg|', '1', 'Rp 10000');
INSERT INTO `promo_asli` VALUES ('3', 'tes', '<p>tes</p>', '2016-03-12', '160312033654.jpg|', '1', 'Rp 10000');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text,
  `foto` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` enum('1','0') NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES ('24', '1', null, '161020053923.jpg|', '2016-10-20', '1', null);
INSERT INTO `slider` VALUES ('25', '2', null, '161020054015.jpg|', '2016-10-20', '1', null);
INSERT INTO `slider` VALUES ('26', '3', null, '161020054038.jpg|', '2016-10-20', '1', null);
INSERT INTO `slider` VALUES ('27', '4', null, '161020054101.jpg|', '2016-10-20', '1', null);

-- ----------------------------
-- Table structure for tentang
-- ----------------------------
DROP TABLE IF EXISTS `tentang`;
CREATE TABLE `tentang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` longtext,
  `image` varchar(225) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tentang
-- ----------------------------
INSERT INTO `tentang` VALUES ('2', '<p>\r\n\r\n<b>Apa yang dimaksud Indihome ?</b><br><br>Indihome merupakan layanan Triple Play dari Telkom yang terdiri dari Telepon Rumah (voice), Internet on Fiber atau High Speed Internet dan UseeTV Cable (interactive TV).</p><p>\r\n\r\n</p><div><b>INFORMASI TAMBAHAN :</b></div><div>a. Biaya Pasang Baru Rp 82.500 akan ditagihkan pada bulan pertama (1x saja)</div><div>b. Harga diatas sudah termasuk instalasi dan sewa perangkat</div><div>c. Harga bulanan belum termasuk PPN 10%</div><div>d. Estimasi pemasangan maksimal 1 minggu setelah registrasi<br>e. Untuk paket 10Mbps 20Gb/50Gb/100Gb jika FUP habis kecepatan internet turun jadi 0,5Mbps sampai akhir bulan</div>\r\n\r\n<br><p></p>', '161104043341.png|', '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` longtext,
  `last_login` datetime DEFAULT NULL,
  `akses` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('5', null, '1992-07-14', '123456789987654321', 'Admin', 'P', 'singosari', '085721423839', null, '1', 'admin', '9c69c2e28557a737ffc2d3aad9160b76', null, '||product|promo|berita|galery|contact|email|user|slider|kritik|paket');
INSERT INTO `user` VALUES ('41', null, null, null, 'rendra', 'L', '<p>sdfsdf</p>', '324234', null, '1', '123', 'a884aaede92e08a55ccee7d055ae9798', null, '||product||berita|galery|tentang|email|user|slider||');
INSERT INTO `user` VALUES ('42', null, null, null, 'sdsdfsdf', 'L', '<p>asdsad</p>', '34234', null, '1', 'asda', '54a20ac12a15e69c5eb55479fe113517', null, '||product||berita|galery|contact|||||');
INSERT INTO `user` VALUES ('43', null, null, null, 'asdasd', 'L', '<p>asdasd</p>', 'asdasdasd', null, '1', 'asdas', '54a20ac12a15e69c5eb55479fe113517', null, '||product||berita|galery|paket|tentang|email|user|slider||');
INSERT INTO `user` VALUES ('45', null, null, null, 'asa', 'L', '<p>ghhgjkj</p>', '087987', null, '1', 'asa', 'a856da10debb8c150b7c0dbea9076a52', null, '||product||berita|galery|paket|tentang|email|user|slider||');

-- ----------------------------
-- View structure for view_employee
-- ----------------------------
DROP VIEW IF EXISTS `view_employee`;
CREATE    VIEW `view_employee` AS select `atombizz_employee`.`id` AS `id`,`atombizz_employee`.`group` AS `group`,`atombizz_employee`.`nama` AS `nama`,`atombizz_employee`.`telp` AS `telp`,`atombizz_employee`.`alamat` AS `alamat`,`atombizz_employee`.`uname` AS `uname`,`atombizz_employee`.`upass` AS `upass`,`atombizz_employee`.`workstation` AS `workstation`,`atombizz_employee`.`gaji` AS `gaji`,`atombizz_employee`.`status` AS `status`,`atombizz_employee`.`last_login` AS `last_login`,`atombizz_employee_position`.`group` AS `jabatan`,`atombizz_employee_access`.`module` AS `module`,`atombizz_employee`.`email` AS `email`,`atombizz_employee`.`no_ktp` AS `no_ktp`,`atombizz_employee`.`nik` AS `nik`,`atombizz_employee`.`tgl_lahir` AS `tgl_lahir`,`atombizz_employee`.`status_alumni` AS `status_alumni`,`atombizz_employee`.`tahun` AS `tahun` from ((`atombizz_employee_position` join `atombizz_employee` on((`atombizz_employee_position`.`id` = `atombizz_employee`.`group`))) left join `atombizz_employee_access` on((`atombizz_employee_access`.`position_id` = `atombizz_employee_position`.`id`))) ; ;

-- ----------------------------
-- View structure for view_page
-- ----------------------------
DROP VIEW IF EXISTS `view_page`;
CREATE    VIEW `view_page` AS select `page`.`id` AS `id`,`page`.`nama_page` AS `nama_page`,`page`.`isi_page` AS `isi_page`,`page`.`foto` AS `foto`,`page`.`menu` AS `menu`,`page`.`tanggal` AS `tanggal`,`page`.`status` AS `status` from `page` ; ;

-- ----------------------------
-- View structure for view_user
-- ----------------------------
DROP VIEW IF EXISTS `view_user`;
CREATE    VIEW `view_user` AS select `user`.`id` AS `id`,`user`.`nik` AS `nik`,`user`.`tgl_lahir` AS `tgl_lahir`,`user`.`no_ktp` AS `no_ktp`,`user`.`nama` AS `nama`,`user`.`jenis_kelamin` AS `jenis_kelamin`,`user`.`alamat` AS `alamat`,`user`.`telp` AS `telp`,`user`.`email` AS `email`,`user`.`status` AS `status`,`user`.`uname` AS `uname`,`user`.`upass` AS `upass`,`user`.`last_login` AS `last_login`,`user`.`akses` AS `akses` from `user` ;
