-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2017 at 01:33 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegaccom_evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_calon`
--

CREATE TABLE `master_calon` (
  `id` int(11) NOT NULL,
  `nomor_calon` varchar(225) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `visi_misi` text,
  `foto` varchar(255) DEFAULT NULL,
  `cv` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_calon`
--

INSERT INTO `master_calon` (`id`, `nomor_calon`, `nama`, `visi_misi`, `foto`, `cv`) VALUES
(1, '1', 'Andy Fefta Wijaya, Drs., MDA, Ph.D', 'Visi:<br>Menjadi Fakultas Ilmu Administrasi yang unggul di Asia dengan standar internasional dalam kaidah nasional dan lokal, serta berpartisipasi aktif dalam agenda pembangunan dunia dan bangsa melalui hasil kinerja pendidikan, penelitian dan pengabdian masyarakat yang berkualitas dan bermanfaat bagi seluruh umat manusia<br><br>Misi:<br>1.  Pengembangan tata kelola fakultas yang responsive, efisien, efektif, harmonis, akuntabel dan transparan terhadap kebutuhan stakeholders dari dalam dan luar institusi;<br>2.  Peningkatan kinerja individu civitas akademika yang berkualitas unggul melalui penguatan etos kerja, motivasi, kapabilitas, profesional, istiqomah, orisinal dan integritas;<br>3.  Peningkatan kinerja institusi melalui standarisasi, inovasi, akreditasi dan prestasi;<br>4.  Peningkatan hasil kinerja individu dan institusi melalui standarisasi, inovasi, akreditasi, dan prestasi internasional;<br>5.  Peningkatan hasil kerjasama internasional dan nasional dalam agenda pembangunan dunia dan bangsa yang damai, aman, rukun, dan bermanfaat.', 'uploadfoto_170425170306.JPG', '<p>Nama                    : Andy Fefta Wijaya, Drs., MDA,Ph.D</p><p>Tmpt/Tgl Lahir   :Palembang / 17 April 1967</p><p>Kelamin                :Laki-Laki</p><p>Pangkat/Gol       :Penata Tk.I/ IVa</p><p>Jabfung                                :Lektor Kepala</p><p>HP                          :0816556556</p><p>Email                     :andyfeftawijaya@gmail.com</p><p>S1                           :Administrasi Publik | FIA – UB</p><p>Tahun S1              :1990</p><p>S2                           :Administrasi Publik | ANU / Canberra Australia</p><p>Tahun S2              :1996</p><p>S3                           :Administrasi Publik  | FlindersUniversity / Adelaide Aus</p>Tahun S3              :2006'),
(2, '2', 'Bambang Supriyono, Prof. Dr., MS', 'Visi:<br>Pusat keunggulan ilmu administrasi berskala internasional melalui Tri Dharma Perguruan Tinggi<br><br>Misi:<br>1.  Mengembangkan institusi pendidikan yang kokoh dan berkualitas melalui konsep good faculty governance;<br>2.  Meningkatkan core competence fakultas melalui kualitas Tri Dharma Perguruan Tinggi;<br>3.  Meningkatkan kerjasama pada level nasional dan internasional dalam bidang pendidikan dan penelitian;<br>4.  Meningkatkan sinergi potensi intra dan inter civitas akademika dengan melibatkan alumni.', 'uploadfoto_170425170314.JPG', '<p>Nama                    : Bambang Supriyono, Prof. Dr.,MS</p><p>Tmpt/Tgl Lahir   :Magetan / 5 September 1961</p><p>Kelamin                :Laki-Laki</p><p>Pangkat/Gol       :Pembina Utama Madya / IVd</p><p>Jabfung                                :Guru Besar</p><p>HP                          :0341 – 477373 / 08213293470</p><p>Email                     :bambangsupriyono@ub.ac.id</p><p>S1                           :Administrasi Negara | FIA UB </p><p>Tahun S1              :1984</p><p>S2                           :Magister Ilmu-Ilmu Sosial | Univ. Padjajaran Bandung</p><p>Tahun S2              :1991</p><p>S3                           :Ilmu Administrasi Publik | Univ. Indonesia</p>Tahun S3              :2007'),
(3, '3', 'Mochammad Al Musadieq, Dr., MBA', 'Visi:<br>Menjadi lembaga pendidikan ilmu administrasi yang bermutu dan diakui oleh masyarakat luas di dalam dan di luar negeri<br><br>Misi:<br>1.  Meningkatkan kualitas dan kuantitas pelaksanaan Tri Dharma Perguruan Tinggi yang meliputi pendidikan dan pengajaran, penelitian, dan pengabdian kepada masyarakat;<br>2.  Menciptakan etos ilmu administrasi di tengah masyarakat dan memperkuat posisi alumni di tengah pasar kerja;<br>3.  Meningkatkan efektivitas dan efisiensi manajemen dan pengelolaan fakultas.', 'uploadfoto_170425170319.JPG', '<p>Nama                    : Mochammad Al Musadieq, Dr.,MBA</p><p>Tmpt/Tgl Lahir   :Surabaya / 1 Mei 1958</p><p>Kelamin                :Laki-Laki</p><p>Pangkat/Gol       :Pembina Utama Muda / IVc</p><p>Jabfung                                :Lektor Kepala</p><p>HP                          :081334913530</p><p>Email                     :musadieqfia@ub.ac.id</p><p>S1                           :Administrasi Bisnis | FIA UB</p><p>Tahun S1              :1983</p><p>S2                           :Administrasi Bisnis | Northern Territory Univ. Darwin Aus.</p><p>Tahun S2              :1994</p><p>S3                           :Administrasi Bisnis | FIA UB</p>Tahun S3              :2008'),
(4, '4', 'Siti Ragil Handayani, Dr. Dra., M.Si', 'Visi:<br>Menjadi Pusat Ilmu Administrasi yang Mampu Berperan Aktif Sebagai lokomotif, yang Penuh Daya Kreativitas dan Inovatif disegala Bidang kehidupan Manusia, dan Diakui Masyarakat Luas, baik didalam maupun diluar Negeri', 'uploadfoto_170425170327.JPG', '<p>Nama                    : Siti Ragil Handayani, Dr.Dra., M.Si</p><p>Tmpt/Tgl Lahir   :Banyuwangi / 23 September 1963</p><p>Kelamin                :Perempuan</p><p>Pangkat/Gol       :Pembina Utama Muda / IVc</p><p>Jabfung                                :Lektor Kepala</p><p>HP                          :0341 – 497012 / 08123384990</p><p>Email                     :Handayani_9@yahoo.com</p><p>S1                           :Ilmu Administrasi – Keuangan | FIA UB</p><p>Tahun S1              :1985</p><p>S2                           :Akuntansi |Univ. Padjajaran Bandung</p><p>Tahun S2              :1994</p><p>S3                           :Administrasi Bisnis | FIA UB</p>Tahun S3              :2007');

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

CREATE TABLE `master_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nids` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `upass` varchar(255) DEFAULT NULL,
  `register` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`id`, `nama`, `nids`, `email`, `device`, `status`, `uname`, `upass`, `register`, `foto`) VALUES
(1, '31cffc2078b083b8a13f8c01d57f3ad5', '29646e77cc62450959a5fa9b2dd0f48d', 'e9e1d003da3fdaa683c861203ae81a901da82989e6a8341eaf08c52efe1b84fe', '', '1', '5104575aea0c3b8b465625e90113d21e', 'aad3ce77a004ac995c408a3bd6e1d2c7', NULL, 'uploadfoto_170425154506.'),
(2, '1280b0d634bf0e11c38505952799d74f', 'c9fcda8b35c3cf0cfe212c9df903476b7d289c27788ac7243c2a2867976102a6', 'ff9313517adb89c6dfbb5afd2a76233e', '', '1', '6872b4ddc99acf0bc63929c622a87c25', 'd41a5a4a4feee116753fb7a3df3b7755', NULL, 'uploadfoto_170425154555.'),
(3, 'e09a45403368d5c10c8f01868d361889', '51feae89bfe51111ccee09da9c911856', '84bd5efb00b1c7b2fc544d2f801fe08a1da82989e6a8341eaf08c52efe1b84fe', NULL, '1', '70c63e024467ef4f0e844b1048226e1d', 'dd6f7cf0a94f67b249cc0e69628aa7d6', NULL, 'uploadfoto_170425154741.'),
(4, 'ed7f336c92d98edac982b109e7ac3480', 'a9435c801d631be7890d70ac48b586997d289c27788ac7243c2a2867976102a6', '4dccaf5ed9dbcf5f04cb8332f1a7372d860d579ed01c1199cc25626e80cacd98', NULL, '1', NULL, NULL, NULL, 'uploadfoto_170425154828.'),
(5, '3e6ff923b58b80d6f4eb76ab11e94f6cdcd58ac3a4fce9c636a4caae00dabda1', '93991776db09097154a5de90b636a6be', 'b3f35ad653d1642e14d6fbfa9884bef6913c09ccf89637177f9038299cd37b79', '', '1', 'f4ec4f1bfbae6779ce8cce92f383056c', '94e08a20a64cc2ae4f37d9fdf461708b', NULL, 'uploadfoto_170425154947.'),
(6, '8251a7b2848b44ad611181ee00e4d3fd', '6fa569e6df77041ce50f2712e246528b', 'bf7db4d2b39a45039861e5e4acfe1ca2e5a806230ebbcabef431b8028d579a8b', '', '1', '89dbf013a3124c14aa4c7a9b62f02588', '687f1dc1257aa20b5f6413ea2083335d', NULL, 'uploadfoto_170425155043.'),
(7, '35735faf32815c6e890ff8223a810f6e', '39055ccfddb1d1094b8eadd1bb32489d', '38862a393c2998beef0dafa9c79f0f1af8cdfe91423085550551d3aa6db3b8d3', NULL, '1', NULL, NULL, NULL, 'uploadfoto_170425155138.'),
(8, 'a75f3e45c217d94669e0a2aea52715bb', '62509fa3d65616edb60f724650a91e7bad0b199377108664d44baec26069d524', '3d6843ce26b7e592ca1340b88cd157bdc05557042d208f62ac2e2b22503656a6', NULL, '1', NULL, NULL, NULL, 'uploadfoto_170425155232.'),
(9, '81d5568713d0bdad90993d4ca2c10c4c', 'd22e8b8958aafadc1c878b698a7ee48d7d289c27788ac7243c2a2867976102a6', '854bc8c8ae7f64306dcd91c0d7bd93bf1da82989e6a8341eaf08c52efe1b84fe', '', '1', '727825c713e035647e7d7cb9ea65248e', '2af52c38f17a5bd05d911a48cb357540', NULL, 'uploadfoto_170425155317.'),
(10, 'cac347a19dd3d6e856c413ff6b9578a3c58504d5dbcd2938a28e43e2d4b1172d', '3ebe0554cd254c5bc9d6637db624f2497d289c27788ac7243c2a2867976102a6', '88e16607dfbe53d1a56ad6235f66e763e8d25396e16b4eb5ccaf41b6bf202c13', NULL, '1', NULL, NULL, NULL, 'uploadfoto_170425155406.'),
(11, 'd5dbc736f32ff71d856c5aa94d60bd9a7681e9b28454b2275636a5b5494f1f62', 'a48ef49676f3bd2acd18f7fe658ddda5', 'db11ce8136687ffc04bc3d3c4d9bb032', NULL, '1', NULL, NULL, NULL, 'uploadfoto_170425155500.'),
(12, 'fe7c8bc5fbde4fb6b63d5d81c2e3d554', '2c85b6f5f058d5523507420571a8de6c', 'b646d056f14ed4a07c16f7da7dd75a03d533da8950b9f7f3869c368696b2f6ca', NULL, '1', NULL, NULL, NULL, 'uploadfoto_170425155533.'),
(13, '811e2a6f0b025be673b095c1de759acd', '4c8dc97b07d52b5b5cee317636d7f0c2', '39c85e34f963ba9e2e0aba42a3792345a418c4fb97bf94855f83f15fa8858f8e', '', '1', 'da6e08ce23f93a8d2b4cfffc72ba223c', 'd5fad80455decc2d4f77bd795a70c45e', NULL, 'uploadfoto_170425162417.'),
(14, '5b0103e5f5a28e3d18b7b63e4141e7bc', '285c25cc313477ec4ad2b6353a51904a', 'c83aa22d70dd531107cbfa2dcaf31cf367354bfe259d16f88cb43a8bb7d9c989', '', '1', '0287960e924d109b028ebb8b8f54e903', '32f6c0a9f06c8b43d6bb80d772dd0e73', NULL, 'uploadfoto_170425162826.'),
(15, 'ec1a9260e1bc173bd1241372516f5568', 'debf963b01b7e385edf529c230eb91ea', '1b7f60766418420ca04e962c2bb64584e5a806230ebbcabef431b8028d579a8b', '', '1', '7057751c7f298c507a169550f9081f4d', 'dd19bfc22d073fbcc0da5c82455f6937', NULL, 'uploadfoto_170426093337.');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id` int(11) NOT NULL,
  `uname` varchar(225) NOT NULL,
  `upass` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id`, `uname`, `upass`) VALUES
(1, '9c69c2e28557a737ffc2d3aad9160b76', '9c69c2e28557a737ffc2d3aad9160b76'),
(2, '80737c893f25a834cde55f55583039be', '80737c893f25a834cde55f55583039be'),
(3, '70c63e024467ef4f0e844b1048226e1d', 'ebeb09bfa0a61c58b089e53be8050840');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `email_respon` varchar(255) DEFAULT NULL,
  `password_email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_akhir` time DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `tanggal_mulai`, `email_respon`, `password_email`, `ip`, `jam_mulai`, `jam_akhir`, `tanggal_akhir`) VALUES
(1, '2017-04-23', 'votefia@gmail.com', 'votingfia2017', '192.168.100.46', '15:30:00', '17:15:00', '2017-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `calon` varchar(255) DEFAULT NULL,
  `nids` varchar(2225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `kode_transaksi`, `user`, `email`, `location`, `calon`, `nids`) VALUES
(2, 'VOTE_170425043130', '811e2a6f0b025be673b095c1de759acd', '39c85e34f963ba9e2e0aba42a3792345a418c4fb97bf94855f83f15fa8858f8e', '2e18b8e0308938d8639222d429fafc23', 'e6a8502708b426358ec0627bf31bbecf', '4c8dc97b07d52b5b5cee317636d7f0c2'),
(3, 'VOTE_170425043232', '31cffc2078b083b8a13f8c01d57f3ad5', 'e9e1d003da3fdaa683c861203ae81a901da82989e6a8341eaf08c52efe1b84fe', '2e18b8e0308938d8639222d429fafc23', 'c66809cfc32f31f669990bd827bdd07f', '29646e77cc62450959a5fa9b2dd0f48d'),
(4, 'VOTE_170425044746', '8251a7b2848b44ad611181ee00e4d3fd', 'bf7db4d2b39a45039861e5e4acfe1ca2e5a806230ebbcabef431b8028d579a8b', '2e18b8e0308938d8639222d429fafc23', '731ca8c9e3515b29ed813055f7d7293e', '6fa569e6df77041ce50f2712e246528b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_calon`
--
ALTER TABLE `master_calon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_calon`
--
ALTER TABLE `master_calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `master_user`
--
ALTER TABLE `master_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
