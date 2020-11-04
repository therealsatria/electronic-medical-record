-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_rme.dokter
CREATE TABLE IF NOT EXISTS `dokter` (
  `kd_dokter` varchar(20) NOT NULL,
  `nm_dokter` varchar(50) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `tmp_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gol_drh` enum('A','B','O','AB','-') DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `almt_tgl` varchar(60) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `stts_nikah` enum('SINGLE','MENIKAH','JANDA','DUDHA','JOMBLO') DEFAULT NULL,
  `kd_sps` char(5) DEFAULT NULL,
  `alumni` varchar(60) DEFAULT NULL,
  `no_ijn_praktek` varchar(40) DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`kd_dokter`),
  KEY `kd_sps` (`kd_sps`),
  KEY `nm_dokter` (`nm_dokter`),
  KEY `jk` (`jk`),
  KEY `tmp_lahir` (`tmp_lahir`),
  KEY `tgl_lahir` (`tgl_lahir`),
  KEY `gol_drh` (`gol_drh`),
  KEY `agama` (`agama`),
  KEY `almt_tgl` (`almt_tgl`),
  KEY `no_telp` (`no_telp`),
  KEY `stts_nikah` (`stts_nikah`),
  KEY `alumni` (`alumni`),
  KEY `no_ijn_praktek` (`no_ijn_praktek`),
  KEY `kd_dokter` (`kd_dokter`),
  KEY `status` (`status`),
  CONSTRAINT `dokter_ibfk_2` FOREIGN KEY (`kd_sps`) REFERENCES `spesialis` (`kd_sps`) ON UPDATE CASCADE,
  CONSTRAINT `dokter_ibfk_3` FOREIGN KEY (`kd_dokter`) REFERENCES `pegawai` (`nik`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_rme.dokter: ~60 rows (approximately)
/*!40000 ALTER TABLE `dokter` DISABLE KEYS */;
REPLACE INTO `dokter` (`kd_dokter`, `nm_dokter`, `jk`, `tmp_lahir`, `tgl_lahir`, `gol_drh`, `agama`, `almt_tgl`, `no_telp`, `stts_nikah`, `kd_sps`, `alumni`, `no_ijn_praktek`, `status`) VALUES
	('43.180401.451', 'dr. Widya Admaja', 'L', '-', '1943-01-01', '-', 'ISLAM', '-', NULL, 'MENIKAH', 'S0020', '-', '446/0702/415.17/2017', '1'),
	('53.180903.454', 'dr. Nirmala Budiman, Sp. S', 'P', 'Palembang', '1960-11-01', '-', 'ISLAM', 'Jl. Empu Nala', NULL, 'MENIKAH', 'S0017', '-', '446/0834/415.17/2017', '1'),
	('55.150701.116', 'dr. T. Miryanti, Sp. PK', 'P', '-', '1956-03-10', '-', 'KRISTEN', 'Karang Menjangan 3/23 C 03/07 Kelurahan Mojo Kec.', NULL, 'MENIKAH', 'S0021', '-', '-', '1'),
	('55.160528.247', 'dr. Sonny S. Wirawan', 'L', '-', '1955-11-30', '-', 'KRISTEN', 'Dsn. Kedungasem 02/07 Ds. Bandarkedungmulyo', NULL, 'MENIKAH', 'S0020', '-', '446/0845/415.17/2017', '1'),
	('59.120126.234', 'dr. Agatha Maharani, Sp.PD', 'P', '-', '1959-10-15', '-', 'ISLAM', 'Jl. Adipati Unus No. 16 Rt/Rw 01/01 Ds. Kepanjen, Jombang', NULL, 'MENIKAH', 'S0015', '-', '446/8231/415.25/2016', '1'),
	('59.170111.348', 'dr. I Ketut Setiawan, Sp. B', 'L', '-', '1959-12-07', '-', '-', 'Jl. Empu Nala 5, Jombang', NULL, 'MENIKAH', 'S0004', '-', '-', '1'),
	('59.190501.514', 'dr Samidjan,Sp.OG', 'L', 'Surabaya', '1960-02-27', 'A', 'ISLAM', 'Dsn Rejoslamet 001/001 Mancilan Mojoagung', NULL, 'MENIKAH', 'S0009', '-', '446/3362/415.17/2019', '1'),
	('61.170101.335', 'dr. Dwita Handayani Lestyowati, Sp. Rad', 'P', '-', '1961-12-04', '-', 'KRISTEN', 'Cibubur Country EW3 No 27 Bogor', NULL, 'MENIKAH', 'S0022', NULL, '-', '1'),
	('65.150801.119', 'dr. Eko Digdoprihasto Tjahyo, Sp.OG', 'L', '-', '1965-08-11', '-', 'ISLAM', 'Perum Firdaus Rgency C-2 Sengon Kec. Jombang', NULL, 'MENIKAH', 'S0009', '-', '446/9391/415.25/2016', '1'),
	('65.180301.441', 'dr. Rudyanto, Sp.PD', 'L', 'Surabaya', '1965-07-28', '-', 'ISLAM', 'Perum Pekayon Regency A-10', NULL, 'MENIKAH', 'S0015', '-', '-', '1'),
	('67.170109.334', 'dr. Hera Prasetia, Sp. BS', 'L', '-', '1967-12-25', '-', 'ISLAM', 'Jl. Jemursari I/31, Surabaya', NULL, 'MENIKAH', 'S0005', '-', '-', '1'),
	('69.170111.349', 'dr. Sigit Hari Nursjamsu, Sp.S', 'L', '-', '1969-11-10', '-', 'ISLAM', 'Asem Jaya Vii/17, Kelurahan Tembok Dukuh, Kecamata', NULL, 'MENIKAH', 'S0017', '-', '446/11764/415.17/2017', '1'),
	('70.110102.002', 'dr. Husnu Rajiin, Sp.An', 'L', '-', '1964-07-13', '-', 'ISLAM', 'Jl. Patimura Gg 3 Blok F/35', NULL, 'MENIKAH', 'S0003', '-', '446/7918/415.25/2016', '1'),
	('70.150801.121', 'dr. Muchson Tohari', 'L', '-', '1970-04-19', '-', 'ISLAM', 'Jl. Mayjend Sungkono 25 Rt/Rw 16/04 Ds. Sengon', NULL, 'MENIKAH', 'S0020', '-', '446/003/415.35/2017', '1'),
	('70.170112.371', 'dr. Purnaning Wahyu Prabarini, Sp. THT-KL', 'P', '-', '1970-04-17', '-', 'ISLAM', 'Jl. Empu Mahesura No 1, Jombang', NULL, 'MENIKAH', 'S0018', '-', '-', '1'),
	('71.150801.123', 'dr. Agoeng Soeprijadi, Sp.B', 'L', '-', '1971-11-03', '-', 'ISLAM', 'Jl. Hasyim Ashari No.71', NULL, 'MENIKAH', 'S0004', '-', '446/743/415.25/2016', '1'),
	('73.150801.120', 'dr. Amor P. Ginting, Sp.A', 'L', '-', '1973-12-04', '-', 'KRISTEN', 'Jl. Madura No. 71', NULL, 'MENIKAH', 'S0001', '-', '446/5510/415.25/2015', '1'),
	('73.191212.538', 'dr. Iqbal Hilmi, Sp. M', 'L', 'GRESIK', '1973-03-11', '-', 'ISLAM', 'Jl. Sopoyono 8-B, Prapen, Tenggilis Mejoyo, Surabaya', NULL, 'MENIKAH', 'S0010', '-', '-', '1'),
	('75.161101.317', 'dr. Antina Nevi Hidayati, Sp.Kj', 'P', '-', '1975-08-26', '-', 'ISLAM', 'Ds. Jambu 02/02 Ds. Jabon Kec. Jombang', NULL, 'MENIKAH', 'S0008', '-', '446/7879/415.25/2016', '1'),
	('75.170102.325', 'dr. Satiyo, Sp.OT', 'L', '-', '1975-05-15', '-', 'ISLAM', 'Jl Ngemplak Rt/Rw 01/05 Made Sambikerep Surabaya', NULL, 'MENIKAH', 'S0012', '-', '446/0834/415.17/2017', '1'),
	('75.170109.330', 'dr. Asep Tri Handoko, Sp. P', 'L', '-', '1975-12-20', '-', 'ISLAM', 'Jl Bratang Binangun V C /32 Surabaya', NULL, 'MENIKAH', 'S0013', '-', '-', '1'),
	('76.161101.317', 'dr. Rizal Fitni, Sp.OG', 'L', '-', '1976-01-01', '-', 'ISLAM', 'Karang menjangan Gubeng Surabaya', NULL, 'MENIKAH', 'S0009', '-', '446/5658/415.17/2017', '1'),
	('76.170417.351', 'dr Muhammad Kharisudin', 'L', '-', '1974-12-01', '-', 'ISLAM', 'Dsn dingin Ds Ngronggot Nganjuk', NULL, 'MENIKAH', 'S0020', '-', '-', '1'),
	('78.180401.452', 'dr. Sahid, Sp. KFR', 'L', '-', '1978-01-01', '-', 'ISLAM', 'Jombang', NULL, 'MENIKAH', 'S0016', '-', '-', '1'),
	('79.170112.350', 'dr. Ahmad Mahfur, Sp. A', 'L', '-', '1979-12-18', '-', 'ISLAM', 'KAuman Gg 3 Mojoagung Jombang', NULL, 'MENIKAH', 'S0001', '-', '-', '1'),
	('80.110314.246', 'dr. M. Fauzan Hamzah', 'L', '-', '1980-04-17', '-', 'ISLAM', 'Jl. Tugu I No. 5 Kepatihan Kec. Jombang', NULL, 'MENIKAH', 'S0020', '-', '-', '1'),
	('80.160906.37', 'dr. Intan Nurswida, Sp. N', 'P', '-', '1980-01-19', '-', 'ISLAM', 'Dsn. Sanan Selatan 01/03 Ds. Mojotrisno Kec. Mojoa', NULL, 'MENIKAH', 'S0017', '-', '446/7550/415.25/2016', '1'),
	('80.170109.333', 'dr Sapto Prihandono Noviantoro Sp JP', 'L', '-', '1980-12-28', '-', 'ISLAM', 'Jl Kamelia No 03 lowokwaru MAlang', NULL, 'MENIKAH', 'S0007', '-', '-', '1'),
	('80.181501.393', 'dr. Indah Ariefani, Sp. KFR', 'P', '-', '1980-03-20', '-', 'ISLAM', 'Jl. Sultan Trenggono No 17 Manguharjo, Madiun', NULL, 'MENIKAH', 'S0016', '-', '-', '1'),
	('81.190220.501', 'dr Diah Novita Kurniawati,Sp.PD', 'P', 'Surabaya', '1981-11-21', 'A', 'ISLAM', 'Jl Mulyosari Utara 3 No 12', NULL, 'MENIKAH', 'S0015', 'Universitas Airlangga', '446/2222/415.17/2019', '1'),
	('81.190304.503', 'dr Adi  Nugroho,Sp.OG', 'L', 'JOmbang', '1981-05-12', 'A', 'ISLAM', 'Jl Kenanga No 5', NULL, 'MENIKAH', 'S0009', 'UNIVERSITAS AIRLANGGA', '446/1879/415.17/2019', '1'),
	('82.180101.405', 'dr. Fahkri Surahmad, M. Kes, Sp. U', 'L', '-', '1982-08-22', '-', 'ISLAM', 'Jl. Merdeka Gg I, Blitar', NULL, 'MENIKAH', 'S0019', '-', '-', '1'),
	('82.180501.442', 'dr. Ferrie Budianto, Sp.An', 'L', 'Jombang', '1982-09-17', '-', 'ISLAM', 'Jl Komunikasi 3 mojokrapak Tembelang', NULL, 'MENIKAH', 'S0003', NULL, '-', '1'),
	('83.151007.191', 'dr. Bani Cahyono', 'L', '-', '1983-04-29', '-', 'ISLAM', 'Dsn. Karangmangu 02/01 Ds. Karangmojo Kec. Plandaan', NULL, 'MENIKAH', 'S0020', '-', '446/12020/415.25/2016', '1'),
	('83.170110.332', 'drg. Hanita Imelda, Sp. Perio', 'P', '-', '1993-12-09', '-', 'ISLAM', 'Jl. Pucang Anom VII/20, Surabaya', NULL, 'MENIKAH', 'S0006', '-', '-', '1'),
	('84.111020.060', 'dr. Nina Fitriana', 'P', '-', '1984-11-21', '-', 'ISLAM', 'Jl. Diponegoro No. 9 E Kec. Kertosono', NULL, 'MENIKAH', 'S0020', '-', '-', '1'),
	('84.190304.502', 'dr Kadek Wira Darmika,Sp.B', 'L', 'Tianyar KArangasem', '1984-04-04', 'A', 'ISLAM', 'Jl Madura No 99 A', NULL, 'MENIKAH', 'S0004', 'UNIVERSITAS AIRLANGGA', '446/1878/415.17/2019', '1'),
	('84.191031.535', 'dr. Fahrur Rozi', 'L', 'Jombang', '1984-07-28', 'A', 'ISLAM', 'Perumahan Citra Raya Blok D1 No. 12 Jombang', '082186666807', 'MENIKAH', 'S0020', 'Universitas Muhammadiyah Yogyakarta', '446/11620/415.17/2019', '1'),
	('86.180801.453', 'dr. Umar Chusni', 'L', '-', '1986-01-01', '-', 'ISLAM', '-', NULL, 'MENIKAH', 'S0020', '-', '-', '1'),
	('87.150801.121', 'dr. Moh. Azam Muttaqin', 'L', '-', '1987-05-31', '-', 'ISLAM', 'Jl. Dewi No. 79 Ds. Sengon Kec. Jombang', NULL, 'MENIKAH', 'S0020', '-', '446/5724/415.25/2015', '1'),
	('88.160425.245', 'drg. Nur Azizah', 'P', '-', '1988-02-23', '-', 'ISLAM', 'Jl. Lentjend Haryono No. 42 Rt/Rw 32/07 Singonegar', NULL, 'MENIKAH', 'S0006', '-', '-', '1'),
	('88.200801.572', 'dr Barlian Alamudi', 'L', 'Surabaya', '1998-03-27', '-', 'ISLAM', 'Jl. Gubernor suryo No. 41 Jombang', '', 'MENIKAH', 'S0020', '-', '-', '1'),
	('88.200801.573', 'dr. Dyah Ayu Pitasari, M. Ked.Klin, Sp. DV', 'P', 'Surabaya', '1988-02-25', '-', 'ISLAM', 'Jl. Gubernur Suryo No. 41 Jombang', '', 'MENIKAH', 'S0023', 'Universitas Airlangga', '446/8006/415.17/2020', '1'),
	('89.150801.121', 'drg. Ita Mustainah', 'P', '-', '1989-11-21', '-', 'ISLAM', 'Jl. Pramuka Blok H/8 Wonosari Kec. Peterongan', NULL, 'MENIKAH', 'S0006', '-', '-', '1'),
	('91.180826.439', 'dr. Fitra Tri Kurniasari', 'P', 'Mojokerto', '1991-12-13', '-', 'ISLAM', 'Jl. Gub Sur Gg VII/05 Jombang', NULL, 'MENIKAH', 'S0020', '-', '-', '1'),
	('91.190928.527', 'dr Susi Indah Riyani', 'P', 'Tuban', '1991-12-08', 'A', 'ISLAM', 'Dsn Salam RT/RW 002/005 Ds ngepon Kec Jatirogo Kab tuban', '081335159053', 'MENIKAH', 'S0020', 'Universitas Wijaya Kusuma Surabaya', '446/10428/415.17/2019', '1'),
	('92.180701.450', 'dr Nico', 'L', 'Surabaya', '1992-09-19', '-', 'ISLAM', '-', NULL, 'MENIKAH', 'S0020', NULL, NULL, '1'),
	('92.180719.440', 'dr Veryne Ayu Permata', 'P', 'Jombang', '1992-08-11', '-', 'ISLAM', 'Jl Ki Hajar Dewantara 58 Jombang', NULL, 'MENIKAH', 'S0020', '-', '-', '1'),
	('92.190201.485', 'dr Abdul Jafar Sidik', 'L', 'Brebes', '1992-04-23', 'A', 'ISLAM', 'Dsn Pesantren 27/04 Ds peterongan', NULL, 'MENIKAH', '-', 'UIN SYARIF HIDAYATULLOH JAKARTA', '446/1602/415.17/2019', '1'),
	('93.190204.500', 'dr. Yasmin Eka Aziza', 'P', 'SURABAYA', '1993-11-26', '-', 'ISLAM', 'JL. SUMBERBOTO RT/RW 002/001 Ds. MOJODUWUR MOJOWARNO', '081234113158', 'MENIKAH', 'S0020', 'UNIVERSITAS BRAWIJAYA', '-', '1'),
	('94.191031.534', 'dr. Bagus Indra Kusuma', 'L', 'Jombang', '1994-05-01', 'A', 'ISLAM', 'Ds. Klepek, Kunjang Kediri', '085746375799', 'MENIKAH', 'S0020', 'Universitas Jember', '446/11619/415.17/2019', '1'),
	('94.191201.520', 'Meidiya Dwi Alviyantho, S. Kep. Ns.', 'L', 'Lamongan', '1994-05-05', 'A', 'ISLAM', 'Dsn Kandangan, RT/RW 011/005 Ds. Candisari Kec. Sambeng Kab', NULL, 'MENIKAH', '-', NULL, NULL, '0'),
	('D0000033', 'dr. Nirmala, Sp. S', 'P', 'Jombang', '1967-09-12', '-', 'ISLAM', 'jombang', NULL, 'MENIKAH', 'S0017', NULL, '446/0834/415.17/2017', '0'),
	('D0000048', 'drg. Adeline Jovita T. Sp. KG', 'P', '-', '2019-04-30', 'A', '-', '--', NULL, 'MENIKAH', 'S0006', '-', '446/0264/415.17/2019', '1'),
	('PS001', 'dr. Kadek Wira Darmika, Sp. B. (Poli Sore)', 'L', 'Karangasem', '2020-04-17', 'A', '-', 'Jl. Madura No 99 A', '', 'MENIKAH', 'S0004', '-', '-', '1'),
	('PS002', 'dr. Eko Digdoprihasto Tjahyo, Sp. OG. (Poli Sore)', 'L', 'Jombang', '1965-08-11', 'A', '-', 'Perum Firdaus Rgency C-2 Sengon', '', 'MENIKAH', 'S0009', '-', '-', '1'),
	('PS003', 'dr. Amor P. Ginting, Sp. A. (Poli Sore)', 'L', '-', '2020-04-17', 'A', '-', '-', '', 'MENIKAH', 'S0001', '-', '-', '1'),
	('PS004', 'dr. Satiyo, Sp. OT. (Poli Sore)', 'L', '-', '2020-04-17', 'A', '-', '-', '', 'MENIKAH', 'S0012', '-', '-', '1'),
	('PS005', 'dr. Sahid, Sp. KFR. (Poli Sore)', 'L', '-', '2020-04-17', 'A', '-', '-', '', 'MENIKAH', 'S0016', '-', '-', '1'),
	('SIM.LAB', '-', 'L', '-', '2020-02-11', 'A', 'ISLAM', '-', '', 'MENIKAH', '-', '-', '-', '1');
/*!40000 ALTER TABLE `dokter` ENABLE KEYS */;

-- Dumping structure for table db_rme.login
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_rme.login: ~3 rows (approximately)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
REPLACE INTO `login` (`username`, `nama`, `password`) VALUES
	('admin', 'Administrator', '6c3089a3ec0632dcb1133820410f78e8'),
	('it', 'IT RS Pelengkap', '9c9d3fbff5f5c23fe49fe06d4d1db3b5'),
	('satria', 'Programmer RS PMC', 'c28e11c78f256d1ddf7979abcbef6a29');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table db_rme.log_history
CREATE TABLE IF NOT EXISTS `log_history` (
  `id` char(25) NOT NULL,
  `data` varchar(50) NOT NULL,
  `operasi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `id_user` char(25) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table db_rme.log_history: 207 rows
/*!40000 ALTER TABLE `log_history` DISABLE KEYS */;
REPLACE INTO `log_history` (`id`, `data`, `operasi`, `keterangan`, `id_user`, `ip`, `tgl`) VALUES
	('1595982558', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-07-29 07:29:18'),
	('1595918230', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '', '2020-07-28 13:37:10'),
	('1595908285', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-07-28 10:51:25'),
	('1595908274', 'Akses', 'Logout', 'Logout Berhasil', 'it', '', '2020-07-28 10:51:14'),
	('1595908187', 'Akses', 'Login', 'Login Berhasil', 'it', '', '2020-07-28 10:49:47'),
	('1595908182', 'Akses', 'Logout', 'Logout Berhasil', 'admin', '', '2020-07-28 10:49:42'),
	('1595908118', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-07-28 10:48:38'),
	('1595908059', 'Akses', 'Logout', 'Logout Berhasil', 'admin', '', '2020-07-28 10:47:39'),
	('1595907954', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-07-28 10:45:54'),
	('1595907941', 'Akses', 'Logout', 'Logout Berhasil', 'admin', '', '2020-07-28 10:45:41'),
	('1595906617', 'Akses', 'Logout', 'Logout Berhasil', 'admin', '', '2020-07-28 10:23:37'),
	('1595906534', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-07-28 10:22:14'),
	('1595903970', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-07-28 09:39:30'),
	('1595903787', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '', '2020-07-28 09:36:27'),
	('1595903626', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-07-28 09:33:46'),
	('1595903615', 'Akses', 'Logout', 'Logout Berhasil', 'admin', '', '2020-07-28 09:33:35'),
	('1596414589', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-03 07:29:49'),
	('1596415067', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-03 07:37:47'),
	('1596424928', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-03 10:22:08'),
	('1596502347', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-04 07:52:27'),
	('1596506896', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-04 09:08:16'),
	('1596510683', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-04 10:11:23'),
	('1596512580', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-04 10:43:00'),
	('1596587536', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-05 07:32:16'),
	('1596599203', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-05 10:46:43'),
	('1596601576', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-05 11:26:16'),
	('1596679146', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-06 08:59:06'),
	('1596696292', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-06 13:44:52'),
	('1596810767', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-07 21:32:47'),
	('1596811874', 'Akses', 'Logout', 'Logout Berhasil', 'admin', '', '2020-08-07 21:51:14'),
	('1596813424', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-07 22:17:04'),
	('1596854120', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-08 09:35:20'),
	('1597020854', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-10 07:54:14'),
	('1597032705', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-10 11:11:45'),
	('1597041933', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-10 13:45:33'),
	('1597104943', 'Akses', 'Login', 'Login Berhasil', 'admin', '', '2020-08-11 07:15:43'),
	('1597152191', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-11 20:23:11'),
	('1597154472', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-11 21:01:12'),
	('1597154817', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-11 21:06:57'),
	('1597155368', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-11 21:16:08'),
	('1597156912', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '', '2020-08-11 21:41:52'),
	('1597156918', 'Akses', 'Login', 'Login Berhasil', 'it', '', '2020-08-11 21:41:58'),
	('1597156936', 'Akses', 'Logout', 'Logout Berhasil', 'it', '', '2020-08-11 21:42:16'),
	('1597156940', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-11 21:42:20'),
	('1597161012', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-11 22:50:12'),
	('1597190688', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-12 07:04:48'),
	('1597190832', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '', '2020-08-12 07:07:12'),
	('1597193368', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-12 07:49:28'),
	('1597193671', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '', '2020-08-12 07:54:31'),
	('1597195964', 'Akses', 'Login', 'Login Berhasil', 'it', '', '2020-08-12 08:32:44'),
	('1597196642', 'Akses', 'Logout', 'Logout Berhasil', 'it', '', '2020-08-12 08:44:02'),
	('1597199055', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-12 09:24:15'),
	('1597199059', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '', '2020-08-12 09:24:19'),
	('1597199855', 'Akses', 'Login', 'Login Berhasil', 'it', '', '2020-08-12 09:37:35'),
	('1597200334', 'Akses', 'Logout', 'Logout Berhasil', 'it', '', '2020-08-12 09:45:34'),
	('1597202093', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-12 10:14:53'),
	('1597216890', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '', '2020-08-12 14:21:30'),
	('1597216897', 'Akses', 'Login', 'Login Berhasil', 'satria', '', '2020-08-12 14:21:37'),
	('1597216901', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '', '2020-08-12 14:21:41'),
	('1597218711', 'Akses', 'Logout', 'Logout Berhasil', 'satria', 'myip 127.0.0.1', '2020-08-12 14:51:51'),
	('1597218716', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-08-12 14:51:56'),
	('1597283311', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-13 08:48:31'),
	('1597283315', 'Akses', 'Logout', 'Logout Berhasil', 'satria', 'myip ::1', '2020-08-13 08:48:35'),
	('1597370187', 'Akses', 'Login', 'Login Berhasil', 'satria', '0', '2020-08-14 08:56:27'),
	('1597370312', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '0', '2020-08-14 08:58:32'),
	('1597370331', 'Akses', 'Login', 'Login Berhasil', 'satria', '0', '2020-08-14 08:58:51'),
	('1597370360', 'Akses', 'Logout', 'Logout Berhasil', 'satria', 'myip ::1', '2020-08-14 08:59:20'),
	('1597370366', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-14 08:59:26'),
	('1597370441', 'Akses', 'Logout', 'Logout Berhasil', 'satria', '0', '2020-08-14 09:00:41'),
	('1597370523', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-14 09:02:03'),
	('1597387099', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-14 13:38:19'),
	('1597452360', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-15 07:46:00'),
	('1597466677', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-15 11:44:37'),
	('1597541300', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-08-16 08:28:20'),
	('1597635231', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-17 10:33:51'),
	('1597720138', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-18 10:08:58'),
	('1597733474', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-18 13:51:14'),
	('1597796932', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-08-19 07:28:52'),
	('1597806145', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 192.168.2.4', '2020-08-19 10:02:25'),
	('1597818343', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-08-19 13:25:43'),
	('1597970517', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-08-21 07:41:57'),
	('1597991785', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-08-21 13:36:25'),
	('1598058836', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-08-22 08:13:56'),
	('1598060668', 'Buku', 'Hapus', 'no_rm: 1234,\nnama_lengkap: adela', 'satria', 'myip 127.0.0.1', '2020-08-22 08:44:28'),
	('1598060669', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:44:29'),
	('1598060674', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:44:34'),
	('1598060701', 'Buku', 'Hapus', 'no_rm: 3,\nnama_lengkap: WINDIARTO', 'satria', 'myip 127.0.0.1', '2020-08-22 08:45:01'),
	('1598060706', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:45:06'),
	('1598060791', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:46:31'),
	('1598060792', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:46:32'),
	('1598060793', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:46:33'),
	('1598060794', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:46:34'),
	('1598060796', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:46:36'),
	('1598060803', 'Buku', 'Hapus', 'no_rm: 9989,\nnama_lengkap: Cleo', 'satria', 'myip 127.0.0.1', '2020-08-22 08:46:43'),
	('1598060821', 'Buku', 'Hapus', 'no_rm: 64536,\nnama_lengkap: sandisk', 'satria', 'myip 127.0.0.1', '2020-08-22 08:47:01'),
	('1598060824', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:47:04'),
	('1598061017', 'Buku', 'Hapus', 'no_rm: 543674,\nnama_lengkap: 123123', 'satria', 'myip 127.0.0.1', '2020-08-22 08:50:17'),
	('1598061024', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:50:24'),
	('1598061026', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-08-22 08:50:26'),
	('1598061562', 'Buku', 'Hapus', 'no_rm: 4321,\nnama_lengkap: Karyadi', 'satria', 'myip 127.0.0.1', '2020-08-22 08:59:22'),
	('1598061587', 'Buku', 'Hapus', 'no_rm: 100504,\nnama_lengkap: SITI ROHMAH, NY', 'satria', 'myip 127.0.0.1', '2020-08-22 08:59:47'),
	('1598063141', 'Buku', 'Hapus', 'no_rm: 3394,\nnama_lengkap: FAISOL ABDULLOH, Tn', 'satria', 'myip 127.0.0.1', '2020-08-22 09:25:41'),
	('1598063170', 'Buku', 'Hapus', 'no_rm: 3394,\nnama_lengkap: FAISOL ABDULLOH, Tn', 'satria', 'myip 127.0.0.1', '2020-08-22 09:26:10'),
	('1598065359', 'Akses', 'Login', 'Login Berhasil', 'it', 'myip ::1', '2020-08-22 10:02:39'),
	('1598229110', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-24 07:31:50'),
	('1598250713', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-24 13:31:53'),
	('1598314453', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-25 07:14:13'),
	('1598319408', 'Buku', 'Hapus', 'no_rm: 27325,\nnama_lengkap: Tn. SUYONO,H.Drs.MM', 'satria', 'myip ::1', '2020-08-25 08:36:48'),
	('1598327199', 'Buku', 'Hapus', 'no_rm: 92020,\nnama_lengkap: NUNING AWALISAH, NY', 'satria', 'myip ::1', '2020-08-25 10:46:39'),
	('1598327268', 'Buku', 'Hapus', 'no_rm: 14296,\nnama_lengkap: ABDUL MUNIP. TN', 'satria', 'myip ::1', '2020-08-25 10:47:48'),
	('1598327314', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-25 10:48:34'),
	('1598327316', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-25 10:48:36'),
	('1598327317', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-25 10:48:37'),
	('1598327318', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-25 10:48:38'),
	('1598327319', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-25 10:48:39'),
	('1598327324', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-25 10:48:44'),
	('1598338956', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-25 14:02:36'),
	('1598338957', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-25 14:02:37'),
	('1598401853', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-26 07:30:53'),
	('1598407608', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-26 09:06:48'),
	('1598509614', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-27 13:26:54'),
	('1598573285', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-28 07:08:05'),
	('1598579242', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 192.168.2.83', '2020-08-28 08:47:22'),
	('1598597530', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-28 13:52:10'),
	('1598665835', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-29 08:50:35'),
	('1598676403', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-29 11:46:43'),
	('1598676409', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-29 11:46:49'),
	('1598676412', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-29 11:46:52'),
	('1598676427', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-29 11:47:07'),
	('1598676428', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-29 11:47:08'),
	('1598676432', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-29 11:47:12'),
	('1598676433', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-08-29 11:47:13'),
	('1598846488', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-08-31 11:01:28'),
	('1598925659', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-01 09:00:59'),
	('1598925878', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-09-01 09:04:38'),
	('1598925889', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-09-01 09:04:49'),
	('1598925911', 'Buku', 'Hapus', 'no_rm: 56234,\nnama_lengkap: cleo', 'satria', 'myip ::1', '2020-09-01 09:05:11'),
	('1598927534', 'Akses', 'Logout', 'Logout Berhasil', 'satria', 'myip ::1', '2020-09-01 09:32:14'),
	('1598927538', 'Akses', 'Login', 'Login Berhasil', 'admin', 'myip ::1', '2020-09-01 09:32:18'),
	('1598927545', 'Akses', 'Logout', 'Logout Berhasil', 'admin', 'myip ::1', '2020-09-01 09:32:25'),
	('1599010379', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-02 08:32:59'),
	('1599011529', 'Akses', 'Logout', 'Logout Berhasil', 'satria', 'myip ::1', '2020-09-02 08:52:09'),
	('1599095478', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-03 08:11:18'),
	('1599619232', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-09 09:40:32'),
	('1600304134', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-09-17 06:55:34'),
	('1600388307', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-18 06:18:27'),
	('1600399432', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-18 09:23:52'),
	('1600414477', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-18 13:34:37'),
	('1600478654', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-19 07:24:14'),
	('1600647265', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-21 06:14:25'),
	('1600660736', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-09-21 09:58:56'),
	('1600660738', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip ::1', '2020-09-21 09:58:58'),
	('1600669822', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-21 12:30:22'),
	('1600736403', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-22 07:00:03'),
	('1600759156', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-22 13:19:16'),
	('1600821107', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-09-23 06:31:47'),
	('1600834551', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-09-23 10:15:51'),
	('1600843235', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-09-23 12:40:35'),
	('1600907398', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-24 06:29:58'),
	('1601006776', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-25 10:06:16'),
	('1601019595', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-25 13:39:55'),
	('1601078659', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-26 06:04:19'),
	('1601081115', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-26 06:45:15'),
	('1601251547', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-28 06:05:47'),
	('1601278615', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-28 13:36:55'),
	('1601339480', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-09-29 06:31:20'),
	('1601427776', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-09-30 07:02:56'),
	('1601511875', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-01 06:24:35'),
	('1601524527', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-01 09:55:27'),
	('1601620980', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-02 12:43:00'),
	('1602030306', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-10-07 06:25:06'),
	('1602030460', 'Buku', 'Hapus', 'no_rm: ,\nnama_lengkap: ', 'satria', 'myip 127.0.0.1', '2020-10-07 06:27:40'),
	('1602038211', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-10-07 08:36:51'),
	('1602123272', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-08 08:14:32'),
	('1602215368', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-10-09 09:49:28'),
	('1602228011', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-10-09 13:20:11'),
	('1602290643', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-10 06:44:03'),
	('1602547177', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-13 05:59:37'),
	('1602552832', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-13 07:33:52'),
	('1602572050', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-13 12:54:10'),
	('1602635204', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-14 06:26:44'),
	('1602656705', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-14 12:25:05'),
	('1602720177', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-15 06:02:57'),
	('1602744125', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-15 12:42:05'),
	('1602899119', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-17 08:45:19'),
	('1602908723', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-17 11:25:23'),
	('1602939084', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-17 05:51:24'),
	('1603068694', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-19 07:51:34'),
	('1603153750', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-20 07:29:10'),
	('1603175747', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-20 13:35:47'),
	('1603242719', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-21 08:11:59'),
	('1603325166', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-22 07:06:06'),
	('1603332607', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-22 09:10:07'),
	('1603347824', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-22 13:23:44'),
	('1603457980', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-23 05:59:40'),
	('1603498132', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-24 07:08:52'),
	('1603671155', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-10-26 07:12:35'),
	('1603674169', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-26 08:02:49'),
	('1603693175', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-10-26 13:19:35'),
	('1603760400', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-27 08:00:00'),
	('1603782735', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-10-27 14:12:15'),
	('1603847835', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-28 08:17:15'),
	('1603866642', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-28 13:30:42'),
	('1604042264', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-10-30 14:17:44'),
	('1604276343', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-11-02 07:19:03'),
	('1604298621', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip 127.0.0.1', '2020-11-02 13:30:21'),
	('1604457976', 'Akses', 'Login', 'Login Berhasil', 'satria', 'myip ::1', '2020-11-04 09:46:16');
/*!40000 ALTER TABLE `log_history` ENABLE KEYS */;

-- Dumping structure for table db_rme.penjab
CREATE TABLE IF NOT EXISTS `penjab` (
  `png_jawab` varchar(30) NOT NULL,
  `kd_pj` char(3) NOT NULL,
  `nama_perusahaan` varchar(60) NOT NULL,
  `alamat_asuransi` varchar(130) NOT NULL,
  `no_telp` varchar(40) NOT NULL,
  `attn` varchar(60) NOT NULL,
  PRIMARY KEY (`kd_pj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_rme.penjab: ~27 rows (approximately)
/*!40000 ALTER TABLE `penjab` DISABLE KEYS */;
REPLACE INTO `penjab` (`png_jawab`, `kd_pj`, `nama_perusahaan`, `alamat_asuransi`, `no_telp`, `attn`) VALUES
	('-', '-', '-', '-', '-', ''),
	('Asuransi Axa Financial', 'A04', '', '', '', ''),
	('Asuransi Garda Medika', 'A06', '', '', '', ''),
	('Asuransi Axa Services/Mandiri', 'A07', '', '', '', ''),
	('Asuransi BNI Life', 'A08', '', '', '', ''),
	('UMUM', 'A09', '', '', '', ''),
	('Asuransi Manulife', 'A17', '', '', '', ''),
	('Asuransi Lippo', 'A19', '', '', '', ''),
	('Asuransi Adira ( Medicillin )', 'A20', '', '', '', ''),
	('Asuransi Mega', 'A22', '', '', '', ''),
	('Asuransi Astra Aviva Life', 'A25', '', '', '', ''),
	('Asuransi Avrist', 'A26', '', '', '', ''),
	('PT. PLN ADMEDIKA', 'A30', '', '', '', ''),
	('TMS Healthcare', 'A32', '', '', '', ''),
	('Asuransi Sinarmas', 'A33', '', '', '', ''),
	('Cynergy Care', 'A36', '', '', '', ''),
	('Asuransi Tugu Mandiri', 'A38', '', '', '', ''),
	('Asuransi ABDA', 'A42', '', '', '', ''),
	('AA International', 'A45', '-', '-', '0', ''),
	('Asuransi Allianz', 'A49', '', '', '', ''),
	('Asuransi FWD', 'A58', '', '', '', ''),
	('BPJS', 'A65', 'PT BPJS KESEHATAN', 'JAKARTA, INDONESIA', '000000000000 0000000 0000', 'dr. Datuk Asmara Gagal Cinta'),
	('JAMINAN BOGOR', 'A77', '', '', '', ''),
	('Asuransi AIA', 'B00', '', '', '', ''),
	('Asuransi / Pihak ke - III', 'B1', '', '', '', ''),
	('BPJS', 'BPJ', '', '', '', ''),
	('Mandiri Inhealth', 'INH', '', '', '', '');
/*!40000 ALTER TABLE `penjab` ENABLE KEYS */;

-- Dumping structure for table db_rme.poliklinik
CREATE TABLE IF NOT EXISTS `poliklinik` (
  `kd_poli` char(5) NOT NULL DEFAULT '',
  `nm_poli` varchar(50) DEFAULT NULL,
  `registrasi` double NOT NULL,
  `registrasilama` double NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`kd_poli`),
  KEY `nm_poli` (`nm_poli`),
  KEY `registrasi` (`registrasi`),
  KEY `registrasilama` (`registrasilama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_rme.poliklinik: ~30 rows (approximately)
/*!40000 ALTER TABLE `poliklinik` DISABLE KEYS */;
REPLACE INTO `poliklinik` (`kd_poli`, `nm_poli`, `registrasi`, `registrasilama`, `status`) VALUES
	('-', '-', 0, 0, '1'),
	('ANA', 'Poli Anak', 6000, 6000, '1'),
	('ANT', 'Poli Nyeri', 6000, 6000, '1'),
	('BED', 'Poli Bedah', 6000, 6000, '1'),
	('BSY', 'Poli Bedah Syaraf', 6000, 6000, '1'),
	('GIG', 'Poli Gigi', 6000, 6000, '1'),
	('IGDK', 'Unit IGD', 0, 0, '1'),
	('INT', 'Poli Penyakit Dalam', 6000, 6000, '1'),
	('JAN', 'Poli Jantung', 6000, 6000, '1'),
	('JIW', 'Poli Jiwa', 6000, 6000, '1'),
	('MAT', 'Poli Mata', 6000, 6000, '1'),
	('OBG', 'Poli Kandungan', 6000, 6000, '1'),
	('ORT', 'Poli Orthopedi', 6000, 6000, '1'),
	('ORT 1', 'Poli Orthopedi tindakan', 50000, 50000, '1'),
	('PAR', 'Poli Paru', 6000, 6000, '1'),
	('SAR', 'Poli Syaraf', 6000, 6000, '1'),
	('U0011', 'Poli Telinga, Hidung, dan Tenggorokan (THT)', 6000, 6000, '1'),
	('U0013', 'Poli Rehabmedik dan Fisioterapy', 6000, 6000, '1'),
	('U0016', 'Poli Urologi', 6000, 6000, '1'),
	('U0018', 'Laboratorium', 0, 0, '1'),
	('U0019', 'Radiologi', 6000, 6000, '1'),
	('U0020', 'Kamar Bersalin (VK)', 6000, 6000, '1'),
	('U0024', 'Poli Umum IGD', 0, 0, '1'),
	('U0025', 'Poli MCU', 6000, 6000, '1'),
	('U0026', 'Poli Gizi', 0, 0, '1'),
	('U0027', 'Poli Mata (OK) 1', 25000, 25000, '1'),
	('U0028', 'Poli Mata (OK) 2', 50000, 50000, '1'),
	('U0029', 'poli tindakan', 50000, 50000, '0'),
	('U0030', 'Poli Orthopedi tindakan', 50000, 50000, '0'),
	('UMU', 'Poli Umum', 6000, 6000, '1');
/*!40000 ALTER TABLE `poliklinik` ENABLE KEYS */;

-- Dumping structure for table db_rme.spesialis
CREATE TABLE IF NOT EXISTS `spesialis` (
  `kd_sps` char(5) NOT NULL DEFAULT '',
  `nm_sps` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kd_sps`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_rme.spesialis: ~22 rows (approximately)
/*!40000 ALTER TABLE `spesialis` DISABLE KEYS */;
REPLACE INTO `spesialis` (`kd_sps`, `nm_sps`) VALUES
	('-', '-'),
	('S0001', 'Anak'),
	('S0003', 'Anastesi'),
	('S0004', 'Bedah'),
	('S0005', 'Bedah Syaraf'),
	('S0006', 'Gigi'),
	('S0007', 'Jantung'),
	('S0008', 'Jiwa'),
	('S0009', 'Kandungan'),
	('S0010', 'Mata'),
	('S0011', 'Nyeri'),
	('S0012', 'Orthopedi'),
	('S0013', 'Paru'),
	('S0015', 'Penyakit Dalam'),
	('S0016', 'Rehabmedik & Fisioterapy'),
	('S0017', 'Syaraf'),
	('S0018', 'THT'),
	('S0019', 'Urologi'),
	('S0020', 'Dokter Umum'),
	('S0021', 'Spesialis Patologi Klinik'),
	('S0022', 'Spesialis Radiologi'),
	('S0023', 'Dermatologi & Venereologi');
/*!40000 ALTER TABLE `spesialis` ENABLE KEYS */;

-- Dumping structure for table db_rme.tb_cppt
CREATE TABLE IF NOT EXISTS `tb_cppt` (
  `no_rm` int(20) NOT NULL,
  `no_cppt` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `ppa` varchar(50) NOT NULL,
  `soap` longtext NOT NULL,
  `paraf` longtext NOT NULL,
  PRIMARY KEY (`no_cppt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_rme.tb_cppt: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_cppt` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_cppt` ENABLE KEYS */;

-- Dumping structure for table db_rme.tb_pasien
CREATE TABLE IF NOT EXISTS `tb_pasien` (
  `no_rm` int(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `gol_darah` enum('A','B','O','AB','-') NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tmpt_lhr` varchar(20) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `alamat` varchar(200) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nm_ibu` varchar(40) NOT NULL,
  `stts_nikah` enum('BELUM MENIKAH','MENIKAH','JANDA','DUDHA','JOMBLO') NOT NULL,
  `email` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `pendidikan` enum('TS','TK','SD','SMP','SMA','SLTA/SEDERAJAT','D1','D2','D3','D4','S1','S2','S3','-') NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat_kantor` varchar(200) NOT NULL,
  `warga_negara` varchar(20) NOT NULL,
  `nama_pj` varchar(50) NOT NULL,
  `gd_pj` varchar(5) NOT NULL,
  `jk_pj` varchar(20) NOT NULL,
  `tmp_lhr_pj` varchar(20) NOT NULL,
  `tgl_lhr_pj` date DEFAULT NULL,
  `agama_pj` varchar(10) NOT NULL,
  `alamat_pj` varchar(200) NOT NULL,
  `email_pj` varchar(20) NOT NULL,
  `tlp_pj` varchar(20) NOT NULL,
  `pendidikan_pj` varchar(20) NOT NULL,
  `pekerjaan_pj` varchar(20) NOT NULL,
  `alamat_kantor_pj` varchar(200) NOT NULL,
  `warga_negara_pj` varchar(20) NOT NULL,
  `hub_pasien` enum('AYAH','IBU','ISTRI','SUAMI','SAUDARA','ANAK') NOT NULL,
  `kd_pj` char(3) NOT NULL,
  `ttd1` longtext NOT NULL,
  `ttd2` longtext NOT NULL,
  PRIMARY KEY (`no_rm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_rme.tb_pasien: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_pasien` DISABLE KEYS */;
REPLACE INTO `tb_pasien` (`no_rm`, `nama_lengkap`, `gol_darah`, `jk`, `tmpt_lhr`, `tgl_lhr`, `alamat`, `agama`, `no_ktp`, `nm_ibu`, `stts_nikah`, `email`, `tlp`, `pendidikan`, `pekerjaan`, `alamat_kantor`, `warga_negara`, `nama_pj`, `gd_pj`, `jk_pj`, `tmp_lhr_pj`, `tgl_lhr_pj`, `agama_pj`, `alamat_pj`, `email_pj`, `tlp_pj`, `pendidikan_pj`, `pekerjaan_pj`, `alamat_kantor_pj`, `warga_negara_pj`, `hub_pasien`, `kd_pj`, `ttd1`, `ttd2`) VALUES
	(10012, 'hamba', 'A', 'L', '-', '2004-09-27', 'rqwrq', 'Islam', '-', '-', 'BELUM MENIKAH', '-', '-', 'TS', '-', '-', '-', '-', 'A', 'L', '-', '0000-00-00', 'Islam', '-', '-', '-', 'TS', '-', '', '-', 'IBU', 'A11', 'data:image/png;base64,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', 'data:image/png;base64,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'),
	(10013, 'Lukman', 'A', 'L', '-', '1995-10-06', 'qwer', 'Islam', '-', '-', 'MENIKAH', '-', '-', 'TS', '-', 'qwer', '-', '-', 'A', 'L', '-', '2020-10-22', 'Islam', '-', '-', '-', 'TS', '-', 'zxvzxbzxc', '-', 'SUAMI', 'A11', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACWCAYAAABkW7XSAAACtElEQVR4nO3dIY4UURSG0buE3gG9hF4AopbQHtNqBKoFBkcw4FjBZBx2NKrFCBSQsIEJQSCHkKAHAaReDVMXed/LnJO0/9WX6urXVREAAAAAAAAAAAAAAAAAAAAAAADw8DyKiGNEPK4eAvA/p4i4/fMRLaBrH2MO1lnxFoDUMeZgHYu3AKT2MQfrRe0UgNwUc7Aua6cA5HYxB+umeAtAqg3WbfEWgNQUy2DtStcAJKZYBssvhUC3nsYyWB9q5wCsO49lsNzHArr1Kv4N1rZyEMCa9qT738+mdBHAivuCta0cBLCm/WuOYAFduy9YAF26e9L9S+0cgHWbWAbrc+0cgFwbrKviLQCr7l5hecQM0C3BAoZxN1gXtXMAcm2w3hRvAUi5wgKG8SNcYQGD+B5zsN4WbwFI/Yw5WC+LtwCkrsO7CYFBCBYwDMEChnETggUMor3C8povoGtfQ7CAQbTnsM6LtwCkvsUcrOfFWwBSn8JNd2AQbbD8lxDommABwziFYAGDcA8LGEYbLOewgK5dxRysQ+0UgFx7cPSseAtAqj04+qR4C8CqTSyf1rCrnQOwbhvLt+ZsK8cAZKZYBgugW/sQLGAQh5hjdV07BSB3jDlYp+ItAKk2WF5TD3TtdfjjMzCI9zEH61nxFoDUu3DKHRjEZczBmmqnAOTaYO2LtwCk2mdhTbVTAHKCBQyjfU39VDsFINdeYXm0DNA1XwmBYbTPc3eFBXStvYflee5A19qvhIfaKQC59q3PDo4CXXPSHRhGG6xD7RSAnK+EwDDaYB1qpwDkBAsYhmABw/ArITCMKX4fHr2IiE3tFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB4mH4Bjbz1zaqFLPYAAAAASUVORK5CYII=', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACWCAYAAABkW7XSAAAFkElEQVR4nO3dsWokRx4H4N8jzBtoHkGP0PFxwWZ7cMkEfgClBgfC0YIDwWHsZGETX7xgLrATK3BwBgcDe8E5MIjjHB0YaW/PwYLZdVDTzEz3tKSTx1s1nu+DRrCaHZXY3t9U/au6KgEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIAKuiSLJI9WX89W18XGdb763uk93m++es/N18720VDgeM2SfJHk7QOun5JcJblefX2x+vqfW/7OlymhCHBv85Qe000eFla/9lqm9NYAJp0l+SalV1QjqIbX4jf9bYGDdZLkTR4eLv3Q7ybJ69Wf3Wx87ybJy9VrLlLC8TzJd3e8731qYsCROck6JF6nhElfZP9Lkg+zLrYvsi6az7OfgvmjJM8zDqyf9/T+wO/M4yRPU8Krll2h9X7F9gBMmmccWBc1GwRwm2Fd63nd5gBMe5ZxQR+gSecZDwsV3oEmfZTtsLqq2xyAad9nO7C+qtscgGkvsh1YT+o2B2DaMtuBdVa3OQDTBBZwMAQWcDCGgbWo2hqAWwgs4GBcRmABB2IYWLZNBpr1dQQWcCD+nu3A+kPd5gBM+yy2SQYOxEUMCYEDcR6BBRyIYQ9rUbU1ALcwJAQOxnCLZIEFNOvLCCzgQFiHBRyMr2IdFnAghqc/d1VbA3CLf2U7sOZVWwMw4YNsh9WybnMApv0724H1dd3mAOz2KOMTnz+o2iJaNUt5hGtetxkcs+HGff+NI+oZ61JOA3+bssgY3rldvauLqi2iNfNsPwVxGT0sKphlfPCE2UF6/fDvOuW+uIqnH6joSfSu2K3L+sPsOuWMSmUCqvlTxmF1Hb2rYzfL9q4dl/HEA5XNk/yUcWAt6jWJymYpvah++Hcd9wMNmKpbfV6zUVTVxfCPBs2S/C3jsPohyUnFdlFHP/zre1Vm/2hGl+RVdtet1CiOz+bwbxmzfzSi/xR9md1h5UY9Ll3WC4UN/2jKacar2PvrVYTVMZmlbB90E8M/GrTIuss/vP4ZN+sxWWT9SM2PMftHQ04z3ohvcwi4yG8zBJil9NjOIgxb0cXsH406SfJJpntVy+xnB9F5yo1/lvLYxmXKp/fw58738LN4mHk8+0ej+ue9ds0A9tfzPOyT9TSl13SedTBN/YzhZebx3RsuUzD7RzOGN+fUEHDqhp2lhEq3es0iycer91ze8b5T11VKsJ3t79fkHmbZrlMZ/tGM+wTV/5L8NcmfU27ci5QgWeb/6yVNheAypde2SAm80/jPUUuX7ScXHtqbhr2bWqm+eb1OWXP15o7X3TecLlMC71EM81oynFy5jH8fGjJPmZL+tSF029X3nLr4lG7VsId9FcsUaNCn2X9AXWc9tJu/q1+EBxkGlToVTdvco+ghV18Qv0i50dWdDsOugvpF/NvRuFmSb3N3MbwPpfeT/DGC6ZB12S6oq1NxsGYpw7jT1Veh9PvRRVABjTvNeIW6hZ9AU2ZJvsj6aYWrKKgDjRnO/L2OoAIaMzzv723KUHBer0kA24ZLFPo6VVevSQDbZhnP/PULPwGaMBVUz6JOBTRiV1BZTwU0pa9RDYNqGQ8oA43oj3kfBpX1VEAz+uUJm7N+dlIAmrJrHZUeFdAUQQU0T1ABzeqXJZynFNJ/znjWT1AB1fQh9SzTJxJdRlABFXW5+9i0yyRPIqiACrqsD4y9bR98G+gBVfSF87tCqg+qRY1GAsdrcwX6bUM+s35AVR+n7OB5nyPQzPoBVfTbDt8nqDxCA1TTZfxc366Qeh7nNQKVnCX5R6ZD6lXWhXQhBVRzkuRNxr2ofu3UexFSQCNOsg4qx2QBzXuc5GlKeAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAnvwCRSA1aOcN+EkAAAAASUVORK5CYII=');
/*!40000 ALTER TABLE `tb_pasien` ENABLE KEYS */;

-- Dumping structure for table db_rme.tb_ralan
CREATE TABLE IF NOT EXISTS `tb_ralan` (
  `a1` int(11) NOT NULL,
  `a2` varchar(50) NOT NULL DEFAULT '',
  `a3` varchar(50) DEFAULT NULL,
  `a4` varchar(50) DEFAULT NULL,
  `a5` varchar(50) DEFAULT NULL,
  `a6` varchar(50) DEFAULT NULL,
  `a7` varchar(50) DEFAULT NULL,
  `a8` varchar(50) DEFAULT NULL,
  `a9` varchar(50) DEFAULT NULL,
  `a10` varchar(50) DEFAULT NULL,
  `a11` varchar(50) DEFAULT NULL,
  `a12` varchar(50) DEFAULT NULL,
  `a13` varchar(50) DEFAULT NULL,
  `a14` varchar(50) DEFAULT NULL,
  `a15` varchar(50) DEFAULT NULL,
  `a16` varchar(50) DEFAULT NULL,
  `a17` varchar(50) DEFAULT NULL,
  `a18` varchar(50) DEFAULT NULL,
  `a19` varchar(50) DEFAULT NULL,
  `a20` varchar(50) DEFAULT NULL,
  `a21` varchar(50) DEFAULT NULL,
  `a22` varchar(50) DEFAULT NULL,
  `a23` varchar(50) DEFAULT NULL,
  `a24` varchar(5) DEFAULT NULL,
  `a25` varchar(5) DEFAULT NULL,
  `a26` varchar(5) DEFAULT NULL,
  `a27` varchar(5) DEFAULT NULL,
  `a28` varchar(5) DEFAULT NULL,
  `a29` varchar(5) DEFAULT NULL,
  `a30` varchar(5) DEFAULT NULL,
  `a31` varchar(5) DEFAULT NULL,
  `a32` varchar(50) DEFAULT NULL,
  `a33` varchar(50) DEFAULT NULL,
  `a34` varchar(50) DEFAULT NULL,
  `a35` varchar(50) DEFAULT NULL,
  `a36` varchar(255) DEFAULT NULL,
  `a37` varchar(255) DEFAULT NULL,
  `a38` longtext,
  `a39` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`a2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_rme.tb_ralan: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_ralan` DISABLE KEYS */;
REPLACE INTO `tb_ralan` (`a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `a31`, `a32`, `a33`, `a34`, `a35`, `a36`, `a37`, `a38`, `a39`) VALUES
	(10013, '20201017000000', 'Lukman', '1995-10-06', 'L', '2020-10-17', '04:25:37', '20', 'JAN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'true', 'false', 'true', 'false', 'true', '0', '0', '1', 'Menggunakan Alat Bantu', '-', '-', 'Agitasi', 'qwerqweqwqweqwrqwe', 'erwe', 'data:image/png;base64,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', '84.190304.502'),
	(10013, '20201017000012', 'Lukman', '1995-10-06', 'L', '2020-10-17', '04:26:16', '20', 'ANT', '6060', '6060', '6060', '6060', '6060', '6060', '6060', '6060', '6060', '6060', '6060', '6060', '6060', '6060', 'true', 'false', 'true', 'false', 'true', '1', '0', '1', 'Mandiri', '6060', '6060', 'Cemas', 'Paragraf Lex is a Serbian-language computer-assisted legal research service based in Novi Sad. It was the only Serbian law database listed in a 2018 legal reference on Serbian criminal law.', 'Paragraf Lex is a Serbian-language computer-assisted legal research service based in Novi Sad. It was the only Serbian law database listed in a 2018 legal reference on Serbian criminal law.', 'data:image/png;base64,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', 'PS003'),
	(10012, '20201017000013', 'hamba', '2004-09-27', 'L', '2020-10-17', '04:27:12', '34', 'ANA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'false', 'false', 'true', 'true', 'true', '0', '1', '1', '-', '-', '-', '-', 'er', 'et', 'data:image/png;base64,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', '81.190304.503');
/*!40000 ALTER TABLE `tb_ralan` ENABLE KEYS */;

-- Dumping structure for table db_rme.tb_regperiksa
CREATE TABLE IF NOT EXISTS `tb_regperiksa` (
  `no_rm` int(20) NOT NULL,
  `no_rawat` varchar(25) NOT NULL,
  `tgl_pernh_dirawat` date NOT NULL,
  `kelas_perawatan` varchar(20) NOT NULL,
  `kamar` varchar(20) NOT NULL,
  `lantai` varchar(10) NOT NULL,
  `tgl_msuk` date NOT NULL,
  `jam` time NOT NULL,
  `dr_pengirim` varchar(20) NOT NULL,
  `dpjp` varchar(20) NOT NULL,
  `asal_pasien` varchar(20) NOT NULL,
  `jamkes` varchar(20) NOT NULL,
  `rujukan` varchar(20) NOT NULL,
  `cara_pembayaran` varchar(20) NOT NULL,
  `kode_asuransi` varchar(50) NOT NULL,
  `surat_jaminan` varchar(25) NOT NULL,
  `surat_rujukan` varchar(25) NOT NULL,
  `acc1` varchar(25) NOT NULL,
  `acc2` varchar(25) NOT NULL,
  `ttd_acc1` longtext NOT NULL,
  `ttd_acc2` longtext NOT NULL,
  `nama_saksi` varchar(50) NOT NULL,
  `ttd_wali` longtext NOT NULL,
  `ttd_wali2` longtext NOT NULL,
  `ttd_saksi` longtext NOT NULL,
  `privasi` varchar(50) NOT NULL,
  `nm1_form3` varchar(50) NOT NULL,
  `almt1_form3` varchar(255) NOT NULL,
  `nm2_form3` varchar(50) NOT NULL,
  `almt2_form3` varchar(255) NOT NULL,
  `ttd_saksi_f3` longtext NOT NULL,
  `ttd_pasien_f3` longtext NOT NULL,
  `perkiraan_biaya` varchar(50) NOT NULL,
  `ttd_saksi_f4` longtext NOT NULL,
  `ttd_pasien_f4` longtext NOT NULL,
  PRIMARY KEY (`no_rawat`),
  KEY `FK_tb_regperiksa_tb_pasien` (`no_rm`),
  CONSTRAINT `FK_tb_regperiksa_tb_pasien` FOREIGN KEY (`no_rm`) REFERENCES `tb_pasien` (`no_rm`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_rme.tb_regperiksa: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_regperiksa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_regperiksa` ENABLE KEYS */;

-- Dumping structure for table db_rme.tb_soa
CREATE TABLE IF NOT EXISTS `tb_soa` (
  `id_soa` int(11) NOT NULL AUTO_INCREMENT,
  `no_rawat` varchar(50) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `soa` longtext,
  `ttd` longtext,
  PRIMARY KEY (`id_soa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_rme.tb_soa: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_soa` DISABLE KEYS */;
REPLACE INTO `tb_soa` (`id_soa`, `no_rawat`, `tanggal`, `soa`, `ttd`) VALUES
	(1, '20201017000012', '2020-11-02', 'data:image/png;base64,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AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQPFfnhId+kF/5QEAAAAASUVORK5CYII=', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACWCAYAAABkW7XSAAACFUlEQVR4nO3Wv20bMRQH4N8I2sAaISNohIyQETyCNnCXKoCywZXpohEMpE0hpEjtEZRCR/iB4kmx4cSG8X3Aw+NJPPGPjuQlAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABfcJJmSrF67IwDXfElynGNKsk2ySbJ+tR4BLLhJ8i3JrzxuXKP4neRHkn2SXU6b21IelS/Fdo67JLdz+bbEp5I/5rShbkr5Q8nrLlYlgHdkk9NmsU9yyOUN7D3FQ4njPPZ2fVjILb7P8zXNucb9HG0+R9HqtPJDyYeufOi+r/m+tDuV2HeftwOnP3g+5/xwuSt1W/3DYLxT134df52H/rqvX++p/W/9qvV2g1zHssv4QO3bm3Le1zq2pb7319fmus5l7Y+D9IWtc3qz+ZrkZ87/rFHuF2IfdcG3z+rGcSz5uRtQvxHVtmr/6uJoD/k252949W1uPefRw7bqcl9e0t937f5Lv7n0RvmUxfEWFtJoLvrvXqKNfznWtzCP/CejRfw3ZQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAqP4AarETXEBhEBsAAAAASUVORK5CYII=');
/*!40000 ALTER TABLE `tb_soa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
