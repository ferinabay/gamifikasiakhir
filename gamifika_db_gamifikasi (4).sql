-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2020 at 03:49 PM
-- Server version: 10.3.23-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamifika_db_gamifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_adm` varchar(50) NOT NULL,
  `nama_adm` varchar(100) NOT NULL,
  `password_adm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_adm`, `nama_adm`, `password_adm`) VALUES
('admin', 'Ini Admin', '21232f297a57a5a743894a0e4a801fc3'),
('admin2', 'admin2', 'c84258e9c39059a89ab77d846ddab909'),
('admin3', 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6'),
('tianikr', '(Admin) Tiani KR', '59d80a99a1d13ca3460b8cb1013f5115');

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id_bdg` int(11) NOT NULL,
  `nama_bdg` varchar(100) NOT NULL,
  `maxpoin_bdg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id_bdg`, `nama_bdg`, `maxpoin_bdg`) VALUES
(1, 'Gold', 30),
(2, 'Silver', 10),
(3, 'Bronze', 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_alpa`
--

CREATE TABLE `data_alpa` (
  `nim` int(11) NOT NULL,
  `alpa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_alpa`
--

INSERT INTO `data_alpa` (`nim`, `alpa`) VALUES
(1541180002, 4),
(1541180003, 0),
(1541180027, 0),
(1541180031, 0),
(1541180032, 4),
(1541180046, 2),
(1541180048, 4),
(1541180049, 0),
(1541180057, 0),
(1541180063, 0),
(1541180069, 4),
(1541180073, 0),
(1541180079, 12),
(1541180081, 0),
(1541180086, 4),
(1541180087, 0),
(1541180089, 0),
(1541180100, 0),
(1541180106, 4),
(1541180110, 0),
(1541180117, 18),
(1541180155, 4),
(1541180156, 0),
(1541180167, 0),
(1541180171, 0),
(1541180172, 28),
(1541180175, 0),
(1541180184, 1),
(1731710161, 5),
(1731710207, 3);

-- --------------------------------------------------------

--
-- Table structure for table `expired_poin`
--

CREATE TABLE `expired_poin` (
  `id_exp` int(11) NOT NULL,
  `date_exp` datetime NOT NULL,
  `timer` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expired_poin`
--

INSERT INTO `expired_poin` (`id_exp`, `date_exp`, `timer`) VALUES
(1, '2019-01-06 00:00:00', '00:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_ktg` int(11) NOT NULL,
  `nama_ktg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_ktg`, `nama_ktg`) VALUES
(1, 'Workshop'),
(2, 'Lomba'),
(3, 'Seminar'),
(4, 'Informasi'),
(5, 'Beasiswa'),
(6, 'Tugas Akhir'),
(7, 'Dialog Dosen Mahasiswa (DDM)'),
(8, 'sertifikasi'),
(9, 'workshop'),
(10, 'Skripsi'),
(11, 'HUT JTI'),
(12, 'Agendaa JTI');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idkomentar` int(11) NOT NULL,
  `id_mk` varchar(20) DEFAULT NULL,
  `nim_mhs` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idkomentar`, `id_mk`, `nim_mhs`, `komentar`, `time`) VALUES
(55, 'mhs0015', 1731710102, 'bagus, semoga sukses acaranya', '2020-06-25 22:11:27'),
(56, 'mhs0015', 1731710102, 'bagus, semoga sukses acaranya', '2020-06-25 22:11:31'),
(57, 'mhs0014', 1731710102, 'bagus????????????????????', '2020-06-25 22:12:21'),
(58, 'mhs0016', 1731710137, 'apa ada kontak yang bisa dihubungi?', '2020-06-26 11:49:54'),
(59, 'mhs0016', 1731710137, 'apa ada kontak yang bisa dihubungi?', '2020-06-26 11:50:02'),
(60, 'mhs0015', 1731710137, 'terimakasih infonya', '2020-06-26 11:51:18'),
(61, 'mhs0014', 1731710137, 'kapan diadakan lagii?', '2020-06-26 11:52:00'),
(62, 'mhs0015', 1731710137, 'terimakasih infonya', '2020-06-26 11:52:39'),
(63, 'mhs0017', 1731712929, 'good', '2020-06-26 12:37:57'),
(68, 'mhs0018', 1731710161, 'tes komentar 1', '2020-06-26 12:54:01'),
(69, 'mhs0018', 1731713030, 'good', '2020-06-26 13:24:45'),
(70, 'mhs0018', 1731714040, 'tes', '2020-06-26 13:25:29'),
(71, 'mhs0018', 1731715050, 'better', '2020-06-26 13:26:14'),
(72, 'mhs0018', 1731716060, 'tes komentar', '2020-06-26 13:27:01'),
(73, 'mhs0018', 1731717070, 'good', '2020-06-26 13:28:16'),
(84, 'adm0002', 1731719999, 'asd', '2020-06-26 16:33:49'),
(85, 'adm0002', 1731719999, 'baksio', '2020-06-26 16:33:58'),
(93, 'mhs0017', 1731710072, 'mantappu jiwa', '2020-06-26 21:39:56'),
(94, 'mhs0018', 1731710072, 'good', '2020-06-26 21:40:16'),
(95, 'mhs0014', 1731710072, 'dapat hadiah banyak ga gaesss', '2020-06-26 21:40:54'),
(96, 'mhs0015', 1731710072, 'kuyy ikutan', '2020-06-26 21:41:16'),
(97, 'mhs0017', 1731710010, 'good', '2020-07-04 09:55:38'),
(98, 'mhs0028', 1731719999, 'makasih sudah diunggah admin', '2020-07-04 10:31:07'),
(99, 'mhs0028', 1731710010, 'makasi infonya min', '2020-07-04 10:32:42'),
(100, 'mhs0028', 1731713030, 'good', '2020-07-04 10:36:00'),
(101, 'mhs0028', 1731714040, 'update terus min', '2020-07-04 10:37:54'),
(102, 'mhs0028', 1731715050, 'makasi min', '2020-07-04 10:38:50'),
(103, 'adm0003', 1731719999, 'tes', '2020-07-04 13:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `kompen`
--

CREATE TABLE `kompen` (
  `id_kmp` int(11) NOT NULL,
  `nama_pengajar` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `jumlah_jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompen`
--

INSERT INTO `kompen` (`id_kmp`, `nama_pengajar`, `nip`, `nama_mhs`, `nim`, `kelas`, `semester`, `jumlah_jam`) VALUES
(1, 'Farid A', '1234', 'Tiani Khusnul R', 1541180184, 'TI4D', 8, 2),
(4, 'Farid A', '1234', 'devi', 1631710043, 'mi 3c', 6, 3),
(5, 'Farid A', '1234', 'nurul istikhomah', 1631710028, 'mi 3c', 6, 1),
(6, 'Farid A', '1032134', 'Qotrunnada W. I.', 1541180049, 'TI4D', 8, 1),
(7, 'Farid A', '1234', 'nabila wanda meylia', 1731710081, 'MI2D', 4, 1),
(8, 'Erfan Rohadi', '1234', 'Dhiana N', 1541180046, 'ti4c', 8, 1),
(11, 'Farid A', '1234', 'Rizky Purnamasari', 1541180125, 'TI4C', 8, 1),
(12, 'Dwi Puspitasari ', '197911152005012002', 'Tiani Khusnul R', 1541180184, 'TI4D', 8, 1),
(13, 'Dwi Puspitasari ', '197911152005012002', 'Tiani Khusnul R', 1541180184, 'TI4D', 8, 1),
(14, 'Farid A', '197911152005012002', 'Dhiana N', 1541180046, 'TI4D', 8, 1),
(15, 'Ridwan Rismanto', '197911152005012002', 'Tiani Khusnul R', 1541180184, 'TI4D', 8, 1),
(16, 'Ridwan Rismanto', '197911152005012002', 'Dhiana N', 1541180046, 'TI4D', 8, 1),
(17, 'Ridwan Rismanto', '1852000000', 'sempol', 1831710129, 'mi2c', 4, 12),
(18, 'Ridwan Rismanto', '1852000000', 'sempol', 1831710129, 'mi2c', 4, 3),
(19, 'Ridwan Rismanto', '209', 'ferina', 1731710161, 'mi 3e', 6, 5),
(20, 'Ridwan Rismanto', '990', 'sukma', 1731710207, 'ti 4a', 6, 5),
(21, 'Ridwan Rismanto', '2345', 'ferina', 1731710161, '2e', 3, 5),
(22, 'Ridwan Rismanto', '2094567889', 'sukma', 1731710207, 'mi 3e', 5, 2),
(23, 'Ridwan Rismanto', '12345678', 'sukma', 1731710207, 'MI 3E', 6, 3),
(24, 'Ridwan Rismanto', '2345', 'ferina', 1731710161, 'mi 3e', 5, 3),
(25, 'Ridwan Rismanto', '2094567889', 'ina', 1731712929, 'MI 3E', 5, 1),
(26, 'Ridwan Rismanto', '2094567889', 'ina', 1731712929, '2e', 6, 1),
(27, 'Qonitatul Hasanah', '2094567889', 'ferina', 1731719999, '3e', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_penukaran`
--

CREATE TABLE `list_penukaran` (
  `id_listP` int(11) NOT NULL,
  `nama_listP` varchar(30) NOT NULL,
  `jenis` int(11) NOT NULL COMMENT '0=tema,1=pp',
  `keterangan` text NOT NULL,
  `poin` int(11) NOT NULL,
  `picture` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_penukaran`
--

INSERT INTO `list_penukaran` (`id_listP`, `nama_listP`, `jenis`, `keterangan`, `poin`, `picture`) VALUES
(1, 'header_mhs_theme2', 0, 'Kumpulkan poinmu hingga 20 Poin. dan tukarkan dengan menekan tombol tukar dibawah ini', 20, NULL),
(2, 'Foto Profil 1 ', 1, 'Yuuuk Kumpulkan poinmu hingga 15 Poin. dan tukarkan dengan menekan tombol tukar dibawah ini', 15, 'student.png'),
(3, 'Foto Profil Sesukamu', 1, 'Kumpulkan poinmu hingga 20 Poin. dan aktifkan fitur ganti profil sesukamu dengan menekan tombol tukar dibawah ini', 20, 'user.png'),
(5, 'header_mhs_theme3', 0, 'Kumpulkan poinmu hingga 20 Poin. dan tukarkan dengan menekan tombol tukar dibawah ini', 30, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `email_mhs` varchar(50) NOT NULL,
  `jk_mhs` varchar(30) NOT NULL,
  `prodi_mhs` varchar(100) NOT NULL,
  `password_mhs` varchar(100) NOT NULL,
  `poin_total` int(11) NOT NULL,
  `poin_mhs` int(11) NOT NULL,
  `status_mhs` varchar(50) NOT NULL,
  `img_ktm` text NOT NULL,
  `img_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim_mhs`, `nama_mhs`, `email_mhs`, `jk_mhs`, `prodi_mhs`, `password_mhs`, `poin_total`, `poin_mhs`, `status_mhs`, `img_ktm`, `img_profile`) VALUES
(1541180046, 'Dhiana N', '', '', 'Teknik Informatika', '57e541537a71eb4bb99e3298279a7fc8', 7, 0, 'Belum Valid', '', ''),
(1631710028, 'nurul istikhomah', '', '', 'Manajemen Informatika', '6968a2c57c3a4fee8fadc79a80355e4d', 9, 10, 'Belum Valid', '', ''),
(1731710009, 'Fauziah Rizky', 'fauziahrizky22@gmail.com', 'Perempuan', 'Manajemen Informatika', '25036c5a1dee1538c38db5dfa84dcd7e', 0, 0, 'Valid', 'KTM_Fauziah_Rizky.jpeg', 'girl-default.png'),
(1731710010, 'niar kintan', 'kjwzznn1315@gmail.com', 'Perempuan', 'Manajemen Informatika', '49bb33bae6819612093249ee14bfeca5', 6, 10, 'Valid', 'WhatsApp_Image_2020-06-26_at_15_34_14_(1).jpeg', 'girl-default.png'),
(1731710014, 'anis', 'anismaulani06@gmail.com', 'Perempuan', 'Manajemen Informatika', 'c9a6e0b7f4d0fa1504d10da4f905d0d2', 0, 0, 'Valid', 'ok.jpg', 'girl-default.png'),
(1731710018, 'Mohammad Amin Syukron', 'ohm.asyukron@gmail.com', 'Laki-laki', 'Manajemen Informatika', '0242d85d1418a986110929222950dce4', 0, 0, 'Valid', 'WhatsApp_Image_2020-06-27_at_00_46_23.jpeg', 'boy-default.png'),
(1731710037, 'Bawazir Fadhil Mohammad', 'bawazirfadhil@gmail.com', 'Laki-laki', 'Teknik Informatika', '7f6b9e26373371a3874c94469c79370e', 0, 0, 'Valid', 'WhatsApp_Image_2020-06-26_at_21_30_23.jpeg', 'boy-default.png'),
(1731710057, 'Aditya Eka', 'iniemail@gmail.com', 'Laki-laki', 'Manajemen Informatika', '5f4dcc3b5aa765d61d8327deb882cf99', 0, 0, 'Belum Valid', 'jojiLobster.jpg', 'boy-default.png'),
(1731710058, 'Febrianthi Intan', 'febrianthii@gmail.com', 'Perempuan', 'Manajemen Informatika', '25f9e794323b453885f5181f1b624d0b', 0, 0, 'Valid', '1.jpeg', 'girl-default.png'),
(1731710064, 'DEBY SILVIA AGNES', 'deby.silvia23@gmail.com', 'Perempuan', 'Manajemen Informatika', '4b64846d4617d573e258218e71e7a30f', 7, 0, 'Valid', 'KTM.jpeg', 'girl-default.png'),
(1731710071, 'Fesia Cindy', 'cindyRav@gmail.com', 'Perempuan', 'Manajemen Informatika', '39af09004e059cc0f4234664de46ef60', 0, 0, 'Valid', 'new.jpg', 'girl-default.png'),
(1731710072, 'Silva Aisya Maharnis', 'silvakdr68@gmail.com', 'Perempuan', 'Manajemen Informatika', '61116fe6c6df16d8c40e020bfd357289', 0, 0, 'Valid', 'KTM1.jpeg', 'girl-default.png'),
(1731710084, 'Dhimas Bayu Ilham Ramadhan', 'dhimasbayu.9f@gmail.com', 'Laki-laki', 'Manajemen Informatika', '79378d813e44019a6971e252d06f0280', 0, 0, 'Valid', 'IMG_20200517_165920.jpg', ''),
(1731710090, 'Nasytha Nugroho', 'nasythangrh@gmail.com', 'Perempuan', 'Manajemen Informatika', '16728f76bba834ebe45212ed9c89b99d', 0, 0, 'Valid', 'IMG_20200627_063627.jpg', 'girl-default.png'),
(1731710095, 'Berliana F D', 'bfd.bonek@gmail.com', 'Perempuan', 'Manajemen Informatika', '109dc6f4946fec08b333df29ff4b759f', 0, 0, 'Valid', 'WhatsApp_Image_2020-06-23_at_20_11_30.jpeg', 'girl-default.png'),
(1731710096, 'LUKMAN HAKIM SAPUTRA', 'hakim2225saputra@gmail.com', 'Laki-laki', 'Manajemen Informatika', 'b59c67bf196a4758191e42f76670ceba', 0, 0, 'Valid', 'ds.jpeg', 'boy-default.png'),
(1731710100, 'Ananda Nur Juliansyah', 'anandanur92@gmail.com', 'Laki-laki', 'Manajemen Informatika', 'd24310c83f93d930ccb28a6086340c84', 0, 0, 'Valid', '20200627_071848.jpg', 'boy-default.png'),
(1731710101, 'Muhammad Firmansyah Rifai', 'firmansyahm9@gmail.com', 'Laki-laki', 'Manajemen Informatika', '5b66799815d5a3b84fadf967126446bd', 0, 0, 'Valid', 'KTMKu.jpg', 'boy-default.png'),
(1731710102, 'Ramdaning Puri Pradani', 'daninpradani@gmail.com', 'Perempuan', 'Manajemen Informatika', 'ac465ad4b68fe12642f7806d28cda1c0', 7, 0, 'Valid', 'WhatsApp_Image_2020-06-25_at_21_10_53.jpeg', 'girl-default.png'),
(1731710107, 'Putrii', 'putridya99@gmail.com', 'Perempuan', 'Manajemen Informatika', '27376da8bfc5e23cc24d23542493ee56', 0, 0, 'Valid', 'WhatsApp_Image_2020-06-26_at_14_35_27.jpeg', 'girl-default.png'),
(1731710129, 'Ayu Unyu', 'istianaayu28@gmail.com', 'Perempuan', 'Manajemen Informatika', '9664761ad144311aefe4fcad055966f5', 0, 0, 'Valid', 'WhatsApp_Image_2020-06-23_at_19_52_43.jpeg', 'girl-default.png'),
(1731710130, 'Mega Maduratna Juwita', 'megamaduratna128@gmail.com', 'Perempuan', 'Manajemen Informatika', 'a28a5011960be96e72f89a0415ac155a', 7, 0, 'Valid', 'ktm.jpeg', 'girl-default.png'),
(1731710134, 'sela fitria dewi', 'fdewi1091@gmail.com', 'Perempuan', 'Manajemen Informatika', '202cb962ac59075b964b07152d234b70', 0, 0, 'Valid', 'sela.jpeg', 'girl-default.png'),
(1731710137, 'Wirda Kurnia', 'wirdakurnia61@gmail.com', 'Perempuan', 'Manajemen Informatika', 'cc0fc8c25bb0a8d944050ae18ff78111', 6, 0, 'Valid', 'WhatsApp_Image_2020-06-26_at_10_21_41.jpeg', 'girl-default.png'),
(1731710138, 'Asri', 'asriandin1505@gmail.com', 'Perempuan', 'Manajemen Informatika', '831618735ba6231e75bb1e84e6affc2b', 0, 0, 'Valid', 'WhatsApp_Image_2020-06-27_at_8_09_32_AM.jpeg', 'girl-default.png'),
(1731710141, 'bili', 'billya749@gmail.com', 'Laki-laki', 'Manajemen Informatika', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0, 0, 'Belum Valid', 'Annotation_2020-06-26_200250.jpg', 'boy-default.png'),
(1731710145, 'Ilmiyatus Sa\'diah', 'ilmiyatus74@gmail.com', 'Perempuan', 'Teknik Informatika', '25ebd80b1f1ead546798c884c04966a0', 0, 0, 'Valid', 'ktm.jpg', 'girl-default.png'),
(1731710151, 'Setya Saraswati Filliansyah', 'setyasaraswati25@gmail.com', 'Perempuan', 'Manajemen Informatika', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Valid', 'KTM.jpg', 'girl-default.png'),
(1731710161, 'ferina', 'ferinabayu@gmail.com', '', 'Teknik Informatika', '7450ebdc4ed9beb12d90b1f9672be1fc', 77, 0, 'Valid', '', '17317101613.jpg'),
(1731710168, 'Abdurrahman Zain Hamim', 'abdurrahmanzain11@gmail.com', 'Laki-laki', 'Manajemen Informatika', 'e807f1fcf82d132f9bb018ca6738a19f', 0, 0, 'Valid', '20200627_064804.jpg', 'boy-default.png'),
(1731710170, 'Ivfa Tut Tazkiyah', 'ivfatuttazkiyah@gmail.com', 'Perempuan', 'Manajemen Informatika', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 'Valid', 'WhatsApp_Image_2020-06-27_at_9_38_57_AM.jpeg', 'girl-default.png'),
(1731712929, 'inaaa', 'ferinabayu@gmail.com', 'Laki-laki', 'Teknik Informatika', '7450ebdc4ed9beb12d90b1f9672be1fc', 101, 0, 'Valid', '215.jpg', 'WhatsApp_Image_2019-09-27_at_1_56_48_PM_(1)1.png'),
(1731713030, 'ina 3', 'ferinabussiness@gmail.com', 'Perempuan', 'Teknik Informatika', '44f5635df2c93fed2c63bbae82507ae3', 0, 0, 'Valid', 'syahrin1.png', 'girl-default.png'),
(1731714040, 'ina 1', 'ferinabussiness@gmail.com', 'Laki-laki', 'Teknik Informatika', 'bdc83b0da481467acdf234d7cdc73f58', 0, 0, 'Valid', 'IMG-20200211-WA0008.jpg', 'boy-default.png'),
(1731715050, 'ina 2', 'ferinabussiness@gmail.com', 'Perempuan', 'Teknik Informatika', '3d5d5c7dc453895185021392a46e612c', 0, 0, 'Valid', '6-JUNI-2020.png', 'girl-default.png'),
(1731716060, 'ina 4', 'ferinabussiness@gmail.com', 'Laki-laki', 'Teknik Informatika', '0f970b5a3dbdb36bd49dab5b59749a62', 0, 0, 'Valid', 'ferrr.jpg', 'boy-default.png'),
(1731717070, 'ina 5', 'ferinabussiness@gmail.com', 'Perempuan', 'Teknik Informatika', 'b1b5570cabc7cc201d8f0f16e7cf1d6a', 0, 0, 'Valid', 'IMG-20180912-WA0028_(1).jpg', 'girl-default.png'),
(1731718080, 'ina tes', 'ferinabussiness@gmail.com', 'Laki-laki', 'Teknik Informatika', '87d9f85b090eecdaf32570aac6243ca0', 0, 0, 'Belum Valid', '6-JUNI-20201.png', 'boy-default.png'),
(1731719999, 'ferina', 'ferinabayu@gmail.com', 'Perempuan', 'Teknik Informatika', '7450ebdc4ed9beb12d90b1f9672be1fc', 107, 0, 'Valid', '216.jpg', 'IMG_06691.JPG'),
(1741720011, 'ILHAM NUSWANTORO AJI', 'i.wonk100@gmail.com', 'Laki-laki', 'Teknik Informatika', '817457bb1345ead5a60c8eecd45235dc', 0, 0, 'Valid', 'ktm_ilham.jpg', 'boy-default.png'),
(1741720089, 'Fani', 'ariffaniwidyaningrum07@gmail.com', 'Perempuan', 'Teknik Informatika', '710f8a191525e4ee2e973aa715552997', 0, 0, 'Belum Valid', 'harry.jpg', 'girl-default.png'),
(1741720144, 'abda ganteng', 'hello123@abc.com', 'Laki-laki', 'Teknik Informatika', '25d55ad283aa400af464c76d713c07ad', 0, 0, 'Belum Valid', 'kobe-bryant.png', 'boy-default.png'),
(1831710003, 'Ade Candra Mahroja', 'adecandram51661@gmail.com', 'Laki-laki', 'Manajemen Informatika', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, 'Valid', 'WhatsApp_Image_2020-04-28_at_08_31_46.jpeg', 'boy-default.png'),
(1831710044, 'Muhammad Hakam Ash Shiddiq', 'hakam.rpl@gmail.com', 'Laki-laki', 'Manajemen Informatika', 'cd1b8ecf103743a98958211a11e33b71', 0, 0, 'Valid', 'IMG_20200625_215115.jpg', 'boy-default.png'),
(1831710105, 'Ivan Ardiyanto', 'ardiyanto.ivan07@gmail.com', 'Laki-laki', 'Manajemen Informatika', '087d31454b002bd223b68e32ff9c8166', 0, 0, 'Valid', 'WhatsApp_Image_2020-06-25_at_22_22_53.jpeg', ''),
(1831710120, 'Nurmayanti Ratna Mustika', 'tikanurma@gmail.com', 'Perempuan', 'Teknik Informatika', 'e6c08554d5c3d91cf5fd9668b9170948', 0, 0, 'Valid', 'ktm.PNG', 'girl-default.png'),
(1831710121, 'Amellia Kurniaty', 'amelliakurniaty@gmail.com', 'Perempuan', 'Manajemen Informatika', '05356ba7ab9e08853b13161b1e0ae6e7', 0, 0, 'Valid', 'aku.jpeg', 'girl-default.png'),
(1831710128, 'seyengkomn', 'laland@gmail.com', 'Laki-laki', 'Teknik Informatika', '21232f297a57a5a743894a0e4a801fc3', 0, 0, 'Belum Valid', 'logo-mini.png', 'boy-default.png'),
(1831710129, 'gopal', 'farrasgopal13@gmail.com', 'Laki-laki', 'Teknik Informatika', '21232f297a57a5a743894a0e4a801fc3', 0, 0, 'Valid', 'K3.png', 'boy-default.png'),
(1831710147, 'Ely Nur Rahayu', 'elynurrahayu@gmail.com', 'Perempuan', 'Manajemen Informatika', '2445f013cc349bf05d41de5e94e40211', 0, 0, 'Valid', 'WhatsApp_Image_2020-06-25_at_21_26_06.jpeg', 'girl-default.png'),
(1831710199, 'admin', 'farras13@gmail.com', 'Laki-laki', 'Teknik Informatika', '21232f297a57a5a743894a0e4a801fc3', 0, 0, 'Belum Valid', 'logo-mini1.png', 'boy-default.png'),
(1841720158, 'Brian Sayudha', 'adamsbrian567@gmail.com', 'Laki-laki', 'Teknik Informatika', '537dd5e0cd92da0d82e951d9265d4980', 0, 0, 'Valid', 'ktm_foto.jpeg', 'boy-default.png'),
(1841720167, 'Raihan Rachmadani', 'raihanrach@gmail.com', 'Laki-laki', 'Teknik Informatika', '04b442a1852c959c376fa17259b82976', 0, 0, 'Valid', 'IMG_20200626_211549.jpg', 'boy-default.png'),
(1941727015, 'Audria hafshah s', 'audriasalsa169@gmail.com', 'Perempuan', 'Teknik Informatika', '6f0674c11a647c1d2ac58685c33ea081', 0, 0, 'Valid', '1941727015.png', 'girl-default.png');

-- --------------------------------------------------------

--
-- Table structure for table `mhs_konten`
--

CREATE TABLE `mhs_konten` (
  `id_mk` varchar(20) NOT NULL,
  `judul_mk` varchar(150) NOT NULL,
  `id_ktg` int(11) NOT NULL,
  `ringkasan_mk` varchar(500) NOT NULL,
  `isi_mk` varchar(60000) NOT NULL,
  `tgl_mk` date NOT NULL,
  `status_mk` varchar(255) NOT NULL,
  `nim_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_konten`
--

INSERT INTO `mhs_konten` (`id_mk`, `judul_mk`, `id_ktg`, `ringkasan_mk`, `isi_mk`, `tgl_mk`, `status_mk`, `nim_mhs`) VALUES
('mhs0001', 'Workshop Pembuatan Dokumen Kurikulum', 3, 'Pada hari <b>Selasa</b>, 29 Januari 2019 Jurusan Teknologi Informasi (JTI) menggelar kegiatan Workshop Pembuatan Dokumen Kurikulum yang diikuti oleh seluruh dosen JTI. Acara ini diadakan di Ruang Meeting Dosen Sipil Lantai 4, Politeknik Negeri Malang.', 'Pada hari Selasa, 29 Januari 2019 Jurusan Teknologi Informasi (JTI) menggelar kegiatan Workshop Pembuatan Dokumen Kurikulum yang diikuti oleh seluruh dosen JTI. Acara ini diadakan di Ruang Meeting Dosen Sipil Lantai 4, Politeknik Negeri Malang.\r\n\r\n \r\n\r\nWo', '2019-03-19', 'Diunggah', 1541180046),
('mhs0005', 'Artikel Terbaru Seputar Perkembangan IT (Informasi Teknologi)', 4, 'Sejalan perputaran waktu, pemanfaatan teknologi telah di adopsi ke hampir semua sektor hidup manusia.', '<p><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; text-align: justify;\">Sejalan perputaran waktu, pemanfaatan teknologi telah di adopsi ke hampir semua sektor hidup manusia. Pada kehidupan sosial, informasi merupakan salah', '2019-05-29', 'Diunggah', 1631710028),
('mhs0010', 'Seminar', 3, 'Seminar', '<p><strong>Seminar</strong>&nbsp;pada umumnya merupakan sebuah bentuk pengajaran akademis, baik di sebuah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Universitas\" title=\"Universitas\">universitas</a>&nbsp;maupun diberikan oleh suatu organisasi komersial atau profesional. Kata&nbsp;<em>seminar</em>&nbsp;berasal dari kata&nbsp;<a href=\"https://id.wikipedia.org/wiki/Bahasa_Latin\" title=\"Bahasa Latin\">Latin</a>&nbsp;<em>seminarum</em>, yang berarti &quot;tanah tempat menanam benih&quot;.</p>\r\n\r\n<p>Sebuah seminar biasanya memiliki fokus pada suatu topik yang khusus, di mana mereka yang hadir dapat berpartisipasi secara aktif. Seminar sering kali dilaksanakan melalui sebuah dialog dengan seorang moderator seminar, atau melalui sebuah presentasi hasil penelitian dalam bentuk yang lebih formal. Biasanya, para peserta bukanlah seorang pemula dalam topik yang didiskusikan (di universitas, kelas-kelas seminar biasanya disediakan untuk mahasiswa yang telah mencapai tingkatan atas). Sistem seminar memiliki gagasan untuk lebih mendekatkan mahasiswa kepada topik yang dibicarakan. Di beberapa seminar dilakukan juga pertanyaan dan debat. Seminar memiliki sifat lebih informal dibandingkan sistem kuliah di kelas dalam sebuah pengajaran akademis.</p>\r\n\r\n<p>Perlu dicatat bahwa di beberapa universitas&nbsp;<a href=\"https://id.wikipedia.org/wiki/Eropa\" title=\"Eropa\">Eropa</a>, sebuah seminar dapat berarti kelas kuliah yang besar, khususnya ketika dibawakan oleh ahli yang termasyhur (tanpa memperhatikan jumlah hadirin atau jangkauan mahasiswa yang berpartisipasi dalam diskusi).</p>\r\n\r\n<p>Seminar dapat dilakukan indoor di dalam ruangan maupun outdoor luar ruangan. di dalam ruangan seminar dapat dilakukan lebih lengkap dengan berbagai macam alat bantu untuk menerangkan ajaran yang akan disampaikan. seminar di luar ruangan biasanya dilakukan di tempat - tempat terbuka cukup menyiapkan banner acara seminar yang dipasang diluar ruangan. di acara seminar Indonesia biasanya tersedia souvenir seperti seminar kit, note book, pulpen seminar, tas seminar, sertifikat seminar</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Perlu dicatat bahwa di beberapa universitas&nbsp;<a href=\"https://id.wikipedia.org/wiki/Eropa\" title=\"Eropa\">Eropa</a>, sebuah seminar dapat berarti kelas kuliah yang besar, khususnya ketika dibawakan oleh ahli yang termasyhur (tanpa memperhatikan jumlah hadirin atau jangkauan mahasiswa yang berpartisipasi dalam diskusi).</p>\r\n\r\n<p>Seminar dapat dilakukan indoor di dalam ruangan maupun outdoor luar ruangan. di dalam ruangan seminar dapat dilakukan lebih lengkap dengan berbagai macam alat bantu untuk menerangkan ajaran yang akan disampaikan. seminar di luar ruangan biasanya dilakukan di tempat - tempat terbuka cukup menyiapkan banner acara seminar yang dipasang diluar ruangan. di acara seminar Indonesia biasanya tersedia souvenir seperti seminar kit, note book, pulpen seminar, tas seminar, sertifikat seminar</p>', '2020-08-23', 'Proses', 1731710129),
('mhs0011', 'Sidang tahap 2', 4, 'Sidang tahap 2', '<p>Sidang tahap 2</p>', '2020-06-25', 'Ditolak', 1731710161),
('mhs0014', 'Polinema Mobile Apps Competition', 2, 'PAC diselenggarakan oleh Jurusan Teknologi Informasi Politeknik Negeri Malang, sebagai wadah berkompetisi bagi developer muda yang ingin berkreasi pada bidang pembuatan Aplikasi Mobile.', '<p>PAC adalah singkatan dari Polinema Mobile Apps Competition, pertama kali diselenggarakan oleh Jurusan Teknologi Informasi Politeknik Negeri Malang, sebagai wadah berkompetisi bagi developer muda yang ingin berkreasi pada bidang pembuatan Aplikasi Mobile. PAC sudah digelar sejak tahun 2016. Kompetisi ini terbuka bagi seluruh mahasiswa di Indonesia, dari segala jurusan, terutama yang memiliki kemampuan di bidang Ilmu Teknologi dan Informasi, untuk mengembangkan aplikasi mobile dan game yang kreatif, inovatif, dan berguna bagi masyarakat #AyoNgodingMobile<br />\r\nDalam penyelenggaraannya, Polinema Mobile Apps Competition bekerja sama dengan Workshop &amp; Riset Informatika (WRI) dan Himpunan Mahasiswa Jurusan Teknologi Informasi (HMTI). Lomba ini diikuti oleh 110 tim dari Perguruan Tinggi seluruh Indonesia. Lomba ini diikutin salah satunya oleh Politeknik Elektronika Negeri Surabaya, universitas Brawijaya, Universitas Trunojoyo Madura, Universitas Gadjah Mada, &nbsp;binus university, STIKI, Widyagama, Universitas Negeri Jember, Politeknik negeri jember, dan masih banyak lainnya dong .<br />\r\n[PAC : Polinema Mobile Apps Competition] Back again with PAC akan hadir kembali dengan tantangan yang baru pastinya! Penasaran kan? Tunggu kita tahun depan ya! ## Persyaratan umum tentunya : ? 1 tim maksimal 3 orang ? Berasal dari Perguruan tinggi yang sama ? Mahasiswa aktif Perguruan Tinggi (per Oktober 2019 dengan menunjukkan KTM) ? Melakukan pendaftaran di http://pac.polinema.ac.id/. peserta adalah perguruan tinggi yang terdaftar pada laman PD DIKTI(http://forlap.dikti.go.id). Peserta adalah mahasiswa aktif Program Diploma atau Strata 1 dengan umur maksimum 24 tahun pada bulan November 2019 ketika PAC berlangsung. Aplikasi yang dilombakan belum pernah dipublikasikan di media apapun. Tentu PAC hadir dengan hadiah jutaan rupiah dong, jadi tunggu kita hadir lagi.. &hellip;<br />\r\nUntuk infonya terus pantengin sosial media Jurusan teknologi informasi politeknik negeri malang, Workshop &amp; Riset Informatika (WRI) dan Himpunan Mahasiswa Jurusan Teknologi Informasi (HMTI).<br />\r\n&nbsp;#teknoevent #lombaIT #kompetisiIT #lombamahasiswa #eventmahasiswa #kompetisimahasiswa #lombaaplikasi #eventkampus #eventmalang #mahasiswapolinema #polinema #teknikinformatika #lombamalang #ITIndonesia #temedpart #temedpart #teknoeventmlg #wripolinema #PolinemaMobileAppsCompetition #TeknoEventAja #mahasiswajawatimur #generasi4.0 #TeknologiInformasi #mahasiswaindonesia</p>', '2020-06-25', 'Diunggah', 1731710064),
('mhs0015', 'Kompetisi Mahasiswa Informatika Politeknik Nasional 2020', 2, 'Tahun 2020 yang merupakan gelaran ke-tiga, Politeknik Negeri Malang (Polinema) ditunjuk menjadi tuan rumah. Kategori lomba; hackathon, animation, e-bussiness, e-government, security, innovation, internet of things, dan game dev.', '<p>Kompetisis Mahasiswa Informatika Politeknik Nasional (KMIPN)<br />\r\nKMIPN yaitu kompetisi tahunan bergengsi untuk institusi perguruan tinggi vokasi di bidang informatika. Pertama kali diadakan pada tahun 2018 di Politeknik Elektronika Negeri Surabaya (PENS). Gelaran ke-dua, Politkenik Caltex Riau menjadi tuan rumah. Tahun 2020 yang merupakan gelaran ke-tiga, Politeknik Negeri Malang (Polinema) ditunjuk menjadi tuan rumah. Kategori lomba; hackathon, animation, e-bussiness, e-government, security, innovation, internet of things, dan game dev.<br />\r\nPada tahun lalu diadakan di Politkenik Caltex Riau dan Mahasiswa Jurusan Teknologi Informasi juga memboyong piala.<br />\r\nTentang KMIPN III<br />\r\nKompetisi Mahasiswa Informatika Politeknik Nasional merupakan ajang bergengsi untuk institusi perguruan tinggi vokasi di bidang informatika. Tahun 2020 ini merupakan penyelenggaraan ketiga kalinya setelah sukses diselenggarakan sebelumnya di Politeknik Caltex Riau pada tahun 2019 dan Politeknik Elektronika Negeri Surabaya pada tahun 2018. KMIPN III kali ini diselenggarakan di Politeknik Negeri Malang dengan tema &quot;Membangun SDM Unggul Melalui Inovasi dan Kreativitas di Bidang Informatika&quot;. Tema tersebut dipilih selaras dengan program SDM Unggul dari Presiden Republik Indonesia dan juga program Kampus Merdeka dari Menteri Pendidikan dan Kebudayaan.</p>\r\n\r\n<p>Penyelenggaraan kompetisi ini merupakan bentuk kontribusi mahasiswa politeknik se-Indonesia dalam membangun SDM Unggul dan mewujudkan Kampus Merdeka di bidang Informatika. Pameran teknologi dan workshop juga menjadi rangkaian acara pada kegiatan ini untuk menambah wawasan dalam perkembangan teknologi serta memenuhi kebutuhan industri terkini.<br />\r\nKategori Lomba : hackathon, animation, e-bussiness, e-government, security, innovation, internet of things, dan game dev.<br />\r\nTimeline :<br />\r\nPendaftaran dan pengumpulan proposal mulai tanggal 1 April 2020 sampai dengan 1 April 2021 yaitu Batasa pengumpulan proposal. Lalu, pada tanggal 1 Mei 2021 pengumuman finalis yang akan ikut serta. Kemudian untuk penjurian final atau penyelenggaraan hari H tanggal 2 Juni 2021 sampai dengan 4 Juni 2021 diselenggarakan di Politeknik Negeri Malang.</p>\r\n\r\n<p>#KMIPN2020 #Polinema #JTIPolinema&nbsp;#KompetisiNasional #KMIPNPolinema&nbsp;#KMIPNIII #BidangTeknologi &nbsp;#TeknologiInformasi #mahasiswaindonesia&nbsp;#lombamalang #ITIndonesia&nbsp;#kompetisimahasiswa #lombaaplikasi #eventkampus #eventmalang #kompetisiIT #lombamahasiswa #eventmahasiswa&nbsp;</p>', '2020-06-25', 'Diunggah', 1731710102),
('mhs0016', 'Beasiswa Djarum', 5, 'Djarum Beasiswa Plus adalah, beasiswa yang mendapatakan pelatihan dan dana beasiswa selama satu tahun, Beswan Djarum (sebutan bagi penerima program Djarum Beasiswa Plus) juga mendapatkan berbagai macam pelatihan ketrampilan lunak atau soft skills guna mempersiapkan mereka menjadi calon pemimpin masa depan bangsa.', '<p>Djarum Beasiswa Plus adalah, beasiswa yang mendapatakan pelatihan dan dana beasiswa selama satu tahun, Beswan Djarum (sebutan bagi penerima program Djarum Beasiswa Plus) juga mendapatkan berbagai macam pelatihan ketrampilan lunak atau soft skills guna mempersiapkan mereka menjadi calon pemimpin masa depan bangsa. Pelatihan ini meliputi Nation Building, Character Building, Leadership Development, Competition Challenges, serta International Exposure. Tidak hanya berhenti sampai di sini, melalui program Community Empowerment, Beswan Djarum juga diberikan kesempatan untuk menerapkan berbagai ketrampilan lunak yang telah diperoleh dengan melibatkan diri secara langsung dalam memberikan jalan keluar pada suatu permasalahan sosial di lingkungan tempat mereka berada.<br />\r\nPara penerima Djarum Beasiswa Plus mendapatkan dana beasiswa sebesar Rp 1.000.000,- setiap bulan selama 1 tahun. Selain dana beasiswa, para penerima Djarum Beasiswa Plus (Beswan Djarum) juga mendapatkan pembekalan berbagai macam soft skills, guna menyerasikan antara pencapaian akademik (hard skills) yang diperoleh di kampus dengan berbagai keterampilan agar para Beswan Djarum di kemudian hari menjadi manusia yang cakap intelegensia dan emosional.<br />\r\nApa persyaratan pendaftaran Djarum Beasiswa Plus?<br />\r\nPersyaratan pendaftaran adalah:<br />\r\na.&nbsp;&nbsp; &nbsp;Sedang menempuh pendidikan Strata 1/Diploma 4 di semester IV, dari semua disiplin ilmu,<br />\r\nb.&nbsp;&nbsp; &nbsp;IPK minimum 3.20 pada semester III, serta dapat mempertahankan IPK minimum 3.20 hingga akhir semester IV,<br />\r\nc.&nbsp;&nbsp; &nbsp;Aktif mengikuti kegiatan organisasi baik di dalam maupun di luar kampus,<br />\r\nd.&nbsp;&nbsp; &nbsp;Tidak sedang menerima beasiswa dari pihak lain.<br />\r\nSyarat administratif berkas pendaftaran:<br />\r\na.&nbsp;&nbsp; &nbsp;Bukti print/cetak PDF dari form pendaftaran online,<br />\r\nb.&nbsp;&nbsp; &nbsp;Satu lembar pas foto ukuran 4 x 6 cm berwarna, memakai jas almamater,<br />\r\nc.&nbsp;&nbsp; &nbsp;Fotokopi Kartu Tanda Mahasiswa,<br />\r\nd.&nbsp;&nbsp; &nbsp;Transkrip Nilai sampai dengan semester III, yang telah dilegalisir otoritas kampus,<br />\r\ne.&nbsp;&nbsp; &nbsp;Salinan Surat Keterangan/sertifikat aktif berorganisasi dan atau sertifikat prestasi yang diikuti/dimiliki,<br />\r\nf.&nbsp;&nbsp; &nbsp;Surat keterangan dari kampus (Rektorat) bahwa tidak sedang menerima beasiswa dari pihak lain (contoh untuk pendaftar 2020 adalah terhitung periode 1 September 2020 - 31 Agustus 2021).<br />\r\nUntuk kalian para calon beswan djarum, semangat mengikuti seleksi yaaa&hellip; SELEKSI BERKAS ADMINISTRASI (21 JUNI - 27 JUNI 2020) , PENGUMUMAN SELEKSI ADMINISTRASI 29 JUNI 2020, TES SELEKSI TERTULIS ONLINE 29 JUNI - 18 JULI 2020, iNTERVIEW ONLINE 20 JULI - 26 SEPTEMBER 2020</p>', '2020-06-25', 'Diunggah', 1731710130),
('mhs0017', 'Penutupan Pendaftaran Sidang Tugas Akhir Tahap 2', 4, 'Setelah dibuka nya sidang akhir tahap 2, maka melalui pemberitahuan ini Jurusan Teknologi Informasi memberitahukan bahwa pendaftaran sidang akhir tahap 2 untuk mahasiswa D3 Manajemen Informatika dan D4 Teknologi Informasi dinyatakan ditutup.', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Melalui surat edaran tentang perubahakan Kalender Akademik Semester Genap Tahun Ajaran 2019/2020 oleh Direktur Polinema, diberitahukan bahwa Ujian Laporan Akhir dan Skripsi akan dilaksanakan 3 tahap, dengan rincian pelaksanaan Tahap 2 sebagai berikut : &bull; Pendaftaran Ujian Tahap 2 dibuka pada tanggal : 22 &ndash; 26 Juni 2020 &bull; Pelaksanaan Ujian Tahap 2 : 29 Juni &ndash; 3 Juli 2020.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Setelah dibuka nya sidang akhir tahap 2, maka melalui pemberitahuan ini Jurusan Teknologi Informasi memberitahukan bahwa pendaftaran sidang akhir tahap 2 untuk mahasiswa D3 Manajemen Informatika dan D4 Teknologi Informasi dinyatakan ditutup.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Sebelumnya terdapat pemberitahuan oleh panitia tugas akhir melalui pesan grup whatsapp :</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&ldquo;Diberitahukan kepada para mahasiswa yang telah mendaftar ujian laporan akhir tahap 2, untuk menghubungi dosen pembimbing 1 dan 2 berkaitan dengan validasi persetujuan maju ujian pada website http://tugasakhir.jti.polinema.ac.id/v2/index/login.&rdquo;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&ldquo;Untuk mahasiswa yang belum mendaftar, dimohon untuk segera melengkapi persyaratan dan melakukan pendaftaran ujian. Mengingatkan bahwa jadwal ujian belum ada perubahan (3 tahap). Apabila melebihi batas akhir 14 agustus, maka anda harus memperpanjang masa studi dan harus membayar UKT.&rdquo;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Oleh karena itu, panitia tugas akhir mengharapkan mahasiswa yang akan melakukan sidang memperhatikan pedoman pelaksanaan sidang akhir dan menyiapkan hal-hal yang berkaitan mengenai sidang akhir agar proses sidang dapat berjalan dengan baik dan lancar tanpa hambatan yang berarti.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Pada tahun ini di masa pandemic ujian dilakukan secara daring, dengan menyiapakan segala kebutuhan. Seperti menggunakan platform video conference&nbsp; tertentu.&nbsp; form penilaian, form revisi secara daring pada sistem yang bisa diakses oleh dosen penguji. Dan untuk pengisian form berita acara hasil ujian TA dilakukan secara offline. Pada hari pelaksanaan ujian TA, selambat-lambatnya 5 menit sebelum waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; pelaksanaan, Dosen Pembimbing (Moderator), penguji dan mahasiswa peserta ujian TA telah mempersiapkan vicon. Mahasiswa peserta ujian TA memilih tempat yang layak untuk diadakan ujian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; secara daring, dengan menyiapkan alat tulis dan piranti yang mendukung lancarnya pelaksanaan ujian. Syarat tempat ujian adalah memiliki jaringan internet yang bagus, pencahayaan cukup, latar belakang polos, tidak banyak suara mengganggu, dan tersedia meja dan kursi. Dan lain lain.</span></span></p>', '2020-06-26', 'Diunggah', 1731710137),
('mhs0018', 'tes 1', 4, 'tes 1', '<p>tes 1</p>', '2020-06-26', 'Diunggah', 1731712929),
('mhs0020', 'Seminar Nasional Kesehatan Cara Mengelola Emosi Agar Hidup Lebih Sehat', 3, 'Seminar ini bertemakan vara mengelola emosi agar hidup lebih sehat. Seminar ini ditujukan untuk khalayak umum umuc', '<p>Seminar ini bertemakan vara mengelola emosi agar hidup lebih sehat. Seminar ini ditujukan untuk khalayak umum</p>', '2020-06-26', 'Proses', 1731710072),
('mhs0021', 'Informasi Seputar Politeknik Negeri Malang', 4, 'Politeknik Negeri Malang Go International', 'Direktur Politeknik Negeri Malang (Polinema), Awan Setiawan mengimbau para mahasiswa baru yang telah diterima untuk mampu beradaptasi dengan kampus, sebab Polinema diklaim sudah go internasional.\r\n\r\n“Karena kami kan sudah go internasional, sudah buka kelas dan program internasional, harapannya para maba bisa menyesuaikan program kami, dan lulusan Polinema jauh lebih baik. Harus sesuai visi misi,” ujarnya usai upacara penerimaan mahasiswa baru, Kamis (15/8).\r\n\r\nGo internasional yang dimaksudkan adalah Polinema telah bekerjasama dengan Shandong University of Science and Technologi. Dengan membuka kelas double degree, yakni dua tahun di Polinema dan dua tahun di Shandong University of Science and Technologi.', '2020-06-26', 'Proses', 1731710058),
('mhs0022', '10 Ide Peluang Usaha Bidang IT Yang Paling Menguntungkan', 4, 'Perkembangan teknologi saat ini berkembang dengan sangat pesat. Di mana, teknologi juga memiliki andil besar dalam perkembangan kehidupan manusia. Dengan banyaknya teknologi baru saat ini, muncul beberapa peluang usaha di bidang IT yang menjanjikan dengan memanfaatkan kecanggihan teknologi yang ada.', '<p>Perkembangan teknologi saat ini berkembang dengan sangat pesat. Di mana, teknologi juga memiliki andil besar dalam perkembangan kehidupan manusia. Dengan banyaknya teknologi baru saat ini, muncul beberapa peluang usaha di bidang IT yang menjanjikan dengan memanfaatkan kecanggihan teknologi yang ada.</p>\r\n\r\n<p>Peluang usaha di bidang IT di Indonesia masih tergolong baru, belum banyak orang yang terjun di bidang IT, sehingga peluang untuk sukses masih terbuka lebar. Ada banyak ide-ide usaha yang bisa dieksekusi untuk bisa terjun menjadi entrepreneur bidang IT. Jika Anda masih bingung, berikut ada 10 ide peluang bisnis bidang IT yang paling menguntungkan saat ini:</p>\r\n\r\n<h1><strong>Web Development</strong></h1>\r\n\r\n<p>Website saat ini sudah menjadi salah satu hal yang wajib dimiliki oleh sebuah bisnis. Sebab, sekarang adalah eranya informasi, keterbukaan, dan kemudahan dalam komunikasi. &nbsp;Ada banyak manfaat memiliki website untuk sebuah bisnis, diantaranya meningkatkan kredibilitas, memperkenalkan profil, media promosi, media komunikasi, dan lain sebagainya. Maka dari itu, peluang untuk membuat usaha web developer saat ini sangat tepat, banyak orang yang membutuhkan mulai dari kelas pribadi, kelas bisnis, hingga kelas korporat.</p>\r\n\r\n<h1><strong>Startup</strong></h1>\r\n\r\n<p><em>Startup </em>adalah istilah bagi seseorang yang baru merintis usaha dalam bidang digital. Untuk membangun sebuah <em>startup</em>, Anda hanya membutuhkan konsep yang matang saja. Jika Anda tidak bisa masalah pemrograman, desain, konten marketing, pemasaran, dan SEO, Anda bisa melemparkan ke orang lain yang lebih berpengalaman. Tetapi jika Anda mampu, Anda bisa melakukannya sendiri. Kemampuan utama yang harus dimiliki sebelum membuat <em>startup</em> yaitu pengelolaan sumber daya manusia. Contoh saja Facebook yang dulunya hanya <em>startup </em>kecil, kini sudah menjelma menjadi salah satu raksasa di dunia dan digunakan oleh banyak orang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>Desain Grafis</strong></h1>\r\n\r\n<p>Jasa desain grafis juga memiliki peluang yang besar. Tidak semua orang bisa melakukan desain walaupun sudah mempunyai aplikasinya. Harga jual untuk sebuah desain juga cukup besar tergantung <em>skill </em>dari desainernya. Tips agar sering mendapat klien, Anda harus memiliki banyak portfolio, tujuannya agar klien mengetahui hasil desain yang pernah Anda buat dan lebih mudah menawarkan harga kepada klien. Anda bisa mencari klien di beberapa <em>website </em>terkenal seperti 99designs.com, Fiverr, Sribulancer, dan lainnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>Penulis Artikel</strong></h1>\r\n\r\n<p>Bagi Anda yang hobi menulis, tidak ada salahnya Anda menyalurkan hobi Anda menjadi pundi-pundi rupiah. Pekerjaan menulis ini merupakan salah satu dari ide peluang usaha bidang IT paling mudah dilakukan. Apalagi jika Anda memahami masalah SEO, maka nilai artikel Anda akan dihargai lebih. Anda bisa menawarkan keahlian menulis Anda di forum-forum atau bergabung dengan perusahaan penulis konten.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>SEO</strong></h1>\r\n\r\n<p>SEO atau <em>Search Engine Optimization </em>adalah salah satu cara bagaimana menaikan <em>website </em>Anda berada di halaman pertama pencarian Google sehingga banyak pengunjung yang datang pada <em>website </em>Anda. Ilmu SEO ini masih jarang yang menguasainya, masih terbuka lebar peluang untuk membuat usaha di bidang SEO ini. Apalagi biaya dari jasa SEO ini tergolong mahal, terutama pada <em>website </em>yang memiliki persaingan berat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>Aplikasi Mobile</strong></h1>\r\n\r\n<p>Perkembangan aplikasi <em>mobile </em>dari tahun ke tahun mengalami pertumbuhan yang cukup tinggi, dari tahun ke tahun perkembangannya sangat signifikan. Apalagi ditambah dengan maraknya <em>smartphone </em>yang membuat aplikasi <em>mobile </em>menjadi salah satu peluang bidang IT yang sangat menggiurkan. Aplikasi <em>mobile </em>yang paling banyak di-<em>download </em>menurut data di urutan pertama adalah kategori <em>Games </em>(21,69%), urutan kedua kategori <em>Education and Reference</em> (14,6%), urutan ketiga kategori<em> Business and Productifity </em>(13,90%). Dari data tersebut menyebutkan bahwa <em>games </em>adalah aplikasi yang paling laku dan diminati saat ini, sehingga ini menjadi peluang yang bisa Anda manfaatkan untuk memulai usaha di bidang IT yang tepat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>Software</strong></h1>\r\n\r\n<p>Jika aplikasi lebih cenderung ke <em>mobile/smartphone</em>, maka untuk <em>software </em>ini cenderung ke perangkat komputer. <em>Software </em>adalah perangkat lunak yang isinya dari bahasa pemrograman tertentu yang memiliki kesatuan dan memiliki nilai dan tujuan tertentu. Jika Anda memiliki kemampuan <em>coding </em>yang baik, maka mendirikan usaha &nbsp;<em>software house developer</em> adalah pilihan yang tepat. Selain pasarnya masih luas, harga setiap <em>software </em>yang dijual biasanya memiliki harga yang mahal, sehingga masih sangat prospek untuk kedepannya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>Blogger</strong></h1>\r\n\r\n<p>Bagi Anda yang memiliki hobi menulis, maka blogger adalah salah satu peluang usaha yang tepat untuk Anda. Anda bisa membuat blog dengan <em>niche </em>sesuai yang Anda kuasai. Selain kemampuan menulis, Anda harus mengerti tentang urusan domain, <em>hosting</em>,<em> </em>dan SEO agar blog Anda bisa bersaing dengan blog lain di Internet. Untuk bisa mendapatkan penghasilan, Anda bisa melakukan monetisasi (mengubah dan mengelola) blog yang Anda miliki dengan PPC Adsense, mengikuti program afiliasi, menjual slot iklan, <em>paid to review</em>, dan masih banyak model monetisasi lainnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>Social Media Consulting</strong></h1>\r\n\r\n<p><em>Social media </em>saat ini banyak sekali jenisnya, jika dulu hanya ada Friendster, maka sekarang sudah ada Facebook, Instagram, Line, Twitter, Tumblr, Path, dan lain sebagainya. Anda bisa memanfaatkan peluang dari banyaknya jenis <em>social media </em>yang ada dengan menjadi konsultan <em>social media</em>. Anda bisa menawarkan jasa untuk mengoptimalkan <em>social media </em>untuk berbisnis, sarana promosi, membangun <em>brand</em>, menambah jumlah <em>follower</em>/teman dan masih banyak lainnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>IT Solution</strong></h1>\r\n\r\n<p>IT <em>solution </em>adalah bidang usaha yang bergerak di bidang jasa atau penjualan alat-alat IT. Contoh usahanya seperti pemasangan CCTV, alarm keamanan, jasa <em>service </em>perangkat IT, penjualan <em>software</em>,<em> </em>dan lainnya. Jika Anda dapat menjalankan usaha IT <em>solution </em>ini keuntungannya cukup besar karena saat ini masih banyak orang yang membutuhkan jasa IT.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Demikian pembahasan mengenai 10 ide peluang usaha bidang IT yang paling menguntungkan. Pilihlah salah satu bidang yang sesuai dengan <em>passion</em> Anda dan tekuni usaha tersebut hingga menghasilkan keuntungan yang maksimal. Dan perlu diingat untuk masalah pengelolaan keuangan, Anda haruslah dikelola secara baik dan benar.</p>', '2020-06-26', 'Proses', 1731710084),
('mhs0023', 'Bantuan kepada mahasiswa saat pandemi COVID-19', 7, 'Pandemi berefek pada semua kalangan, bukan hanya pekerja namun juga dengan mahasiswa yang yang rantau. Dengan sebab itu kampus seharusnya memfasilitasi agar memudahkan mahasiswa yang terdampak dari pandemi COVID-19', '<p>Sejak pertengahan maret 2020, seluruh aktifitas yang berada di kampus di Indonesia harus ditiadakan atau dilakukan secara daring. Hal ini menyebabkan banyak mahasiswa yang sangat dirugikan dengan kondisi yang seperti ini. Banyak dari mahasiswa yang disaat kuliah dilakukan seperti biasa saja kesulitan untuk menemui dosen, apalagi dengan yang harus dilakukan saat seperti ini. Mahasiswa pun mengalami kerugian dalam segi keuangan karena tidak ada penghasilan saat kuliah dan ditambah lagi biaya kuliah yang masih tidak ada kompensasi maupun bantuan yang tak kunjung cair meskipun perkuliahan tetap jalan.</p>\r\n\r\n<p>Dengan adanya pandemi ini, untuk memutus mata rantai COVID-19 maka pemerintah pusat melalui kemdikbud mengeluarkan peraturan agar melakukan segala aktifitas perkuliahan secara daring. Demi memutus mata rantai COVID-19 pun perkuliahan jadi solusi, namun tampaknya pemerintah Indonesia tampaknya belum siap dengan segala keterbatasannya. Dengan tidak hadirnya negara dalam membantu rakyatnya yang secara langsung terdampak dengan adanya pandemi tersebut. Tapi dengan demikian, kita harus tetap optimis dan menerapkan protokol kesehatan dengan baik agar pandemi ini segera berakhir. Indonesia pasti bisa</p>', '2020-06-27', 'Proses', 1731710100),
('mhs0024', '[TERBARU] LOMBA CIPTA PUISI TINGKAT NASIONAL LINTANG INDONESIA TEMA BEBAS DEADLINE 16 JUNI 2020', 2, 'DEADLINE: 07 Februari 2020 Pukul 22.00WIB\r\nUPDATE AKHIR: 9 Februari 2020\r\nPENGUMUMAN PEMENANG + PEMBAGIAN SERTIFIKAT: 27 Februari 2020/Fleksibel bisa saja berubah tergantung jumlah peserta\r\nPEMBAGIAN HADIAH: 29 Februari 2020/Fleksibel bisa saja berubah\r\n\r\nNARAHUBUNG:\r\nSdr. Tian : 0812-2056-7988', '<div style=\"border:0px; padding:0px; text-align:left\">\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">SYARAT PESERTA</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">Subscribe Channel Youtube Pena Artas&nbsp;klik di sini<br />\r\nFollow Instagram @markaslintang.or.id&nbsp;@redaksitasikzone, @faktualjabar, @lombapuisi, @infolombapuisi<br />\r\nBagikan info lomba ini di Instagram dan tag @markaslintang.or.id,&nbsp;@redaksitasikzone&nbsp;serta teman literasimu<br />\r\nBagikan info lomba ini di Group Facebook atau Group Whatshapp minimal 5 Group. (kalau tidak ada silakan posting di instagram dan tag temanmu sebanyak2)<br />\r\nLike Fanspage Facebook Redaksi Tasikzone dan faktualjabar.com<br />\r\npoint 2 sampai 5 discrenshoot kemudian kirimkan sebagai lampiran pada saat pengiriman naskah<br />\r\nnote :</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">kakak gimana kalau gak ada instagram atau gak main facebook?</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">Silakan bikin dahulu instagram atau facebook selagi masih gratis dan daftar dengan mudah.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">&nbsp;</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">SYARAT NASKAH PUISI&nbsp;</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">Puisi Maksimal 16 Baris (judul dan titimangsa tidak dihitung)<br />\r\nPuisi tidak melanggar Hak Cipta<br />\r\nPuisi tidak pernah dipublikasikan di media manapun<br />\r\nPuisi tidak sedang atau pernah diikutsertakan lomba lain<br />\r\nPuisi tidak mengandung unsur provokatif<br />\r\nNO SARA, NO PLAGIAT, NO PORNO<br />\r\nPuisi diketik di Microsoft Word<br />\r\nNaskah puisi berbentuk docx atau doc<br />\r\nPage Size A4, Line And Paragraph Spacing 1.5, Huruf TNR, Calibri atau Candara&nbsp;Font Size 12 (jika tidak mengerti poin ini, yang penting diketik diword gitu aja)<br />\r\nFile disave dengan format :&nbsp;MARKAS_NAMA_JUDUL_KOTA<br />\r\n&nbsp;Peserta hanya diperbolehkan mengirim 1 puisi, kalau mengirim puisi lebih, tetap hanya 1 yang akan dinilai<br />\r\n&nbsp;Disertakan dengan biodata di halaman ke 2+foto diri bebas yang penting sopan dan keren. (biodata utamanya : nama, ttl, alamat, no wa)<br />\r\nNaskah hanya 2 halaman A4 (sudah termasuk puisi dan biodata). di halaman ketiga jika mau cantumkan scrennshot persyatan follow dan share diperbolehkan<br />\r\n&nbsp;</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">PENGIRIMAN PUISI<br />\r\nNaskah dikirim ke&nbsp;lombalintangdua@gmail.com<br />\r\nSubjek&nbsp;MARKAS_NAMA_JUDUL_KOTA<br />\r\nLampirkan screnshoot persyaratan follow dan share poster. Maksudnya yang persyaratan di atas seperti follow ig, like fanspage, tag temanmu dan share info lomba itu discrenshoot, kemudian di lampirkan pada saat mengirimkan naskah. mau disimpan di dalam word screnshootnya atau mau langsung dilampirkan dibolehkan.<br />\r\nHADIAH LOMBA<br />\r\nJUARA 1</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">PIALA<br />\r\nVOUCHER PENERBITAN RP.250.000<br />\r\n1 EKS BUKU&nbsp;<br />\r\n1 SERTIFIKAT CETAK<br />\r\n100 BUKU DIGITAL<br />\r\nKarya dibukukan<br />\r\nJUARA 2</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">1 EKS BUKU<br />\r\nVOUCHER PENERBITAN RP.200.000<br />\r\n1 SERTIFIKAT CETAK<br />\r\n100 BUKU DIGITAL<br />\r\nKarya dibukukan<br />\r\nJUARA 3</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">1 EKS BUKU<br />\r\nVOUCHER PENERBITAN RP.150.000<br />\r\n1 SERTIFIKAT CETAK<br />\r\n100 BUKU DIGITAL<br />\r\nKarya dibukukan<br />\r\nJUARA HARAPAN 1 HINGGA 5</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">E-SERTIFIKAT<br />\r\nDISKON BUKU 10 persen<br />\r\n25 PESERTA TERBAIK</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">E-SERTIFIKAT<br />\r\nDISKON BUKU 10 persen<br />\r\n100 PESERTA TERBAIK</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">E-SERTIFIKAT<br />\r\nPESERTA</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\"><span style=\"font-family:inherit\">3 SERTIFIKAT DIGITAL<br />\r\n100 BUKU DIGITAL</span></span></span></span></p>\r\n\r\n<div style=\"border:0px; padding:0px\">\r\n<ol>\r\n	<li style=\"list-style-type:square\">\r\n	<div style=\"border:0px; padding:0px\">\r\n	<div style=\"border:0px; padding:0px\">\r\n	<div style=\"border:0px; padding:0px\">\r\n	<div style=\"border:0px; padding:0px\">\r\n	<div style=\"border:0px; padding:0px; text-align:left\">\r\n	<ol>\r\n	</ol>\r\n	</div>\r\n	</div>\r\n	</div>\r\n	</div>\r\n	</div>\r\n	</li>\r\n</ol>\r\n</div>\r\n</div>', '2020-06-27', 'Proses', 1731710138),
('mhs0025', 'Hackathon 2020', 4, 'Hackathon 2020 bertemakan “Financial Technology”', '<p>Seminar pada umumnya merupakan sebuah bentuk pengajaran akademis, baik di sebuah universitas maupun diberikan oleh suatu organisasi komersial atau profesional. Kata seminar berasal dari kata Latin seminarum, yang berarti tanah tempat menanam benih. Sebuah seminar biasanya memiliki fokus pada suatu topik yang khusus, di mana mereka yang hadir dapat berpartisipasi secara aktif.</p>', '2020-07-02', 'Proses', 1731710161),
('mhs0026', 'Pendaftaran Jalur SBMPN 2020', 4, 'Pendaftaran Jalur SBMPN 2020', '<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-size:10.0pt\"><span style=\"color:#4d4d4d\">Jalur SBMPN merupakan seleksi Jalur Tes yang diperuntukkan bagi calon siswa sekolah yang akan melanjutkan pendidikan di Perguruan Tinggi bidang okasi atau Politeknik dan Politani Negeri di seluruh wilayah Indonesia. Pola seleksi ini tertuang dalam suatu sistem yang terpadu dan diselenggarakan secara serentak melalui seleksi prestasi akademik siswa selama mengikuti pendidikan di Sekolah Menengah Atas, Sekolah Menengah Kejuruan, Madrasah Aliyah dan Kejar Paket C (lulusan tahun 2018, 2019 dan 2020) Awalnya, di tahun 2014, Forum Direktur Politeknik Negeri se-Indonesia (FDPNI) menetapkan pola Penerimaan Mahasiswa Baru (PMB) jalur Ujian Masuk Politeknik Negeri (UMPN) akan dilakukan bersama dan diikuti oleh seluruh Politeknik Negeri se-Indonesia (sebanyak 38 Politeknik Negeri) secara on-line. Hal ini dilaksanakan dengan berdasarkan pada UU No. 12 Tahun 2012, PP No. 66 dan PP No. 34 Tahun 2010.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-size:10.0pt\"><span style=\"color:#4d4d4d\">Dari tahun ke tahun jumlah politeknik peserta jalur penerimaan ini meningkat. Dan hingga tahun 2019 tercatat sejumlah 42 politeknik yang mengikuti seleksi ini. Tahun 2020 ini, istilah UMPN berganti nama menjadi Seleksi Bersama Masuk Politeknik Negeri (SBMPN). Meski terdapat perubahan penamaan, namun mekanisme dan proses seleksi jalur ini masih sama seperti UMPN dan diikuti pula oleh 42 politeknik negeri se-Indonesia.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-size:10.0pt\"><span style=\"color:#4d4d4d\">Pandemi Covid-19 yang melanda Indonesia mengakibatkan banyak adaptasi dalam berbagai sektor, salah satunya pendidikan. Hal ini pun mempengaruhi mekanisme dan seleksi penerimaan mahasiswa baru di hampir seluruh Perguruan Tinggi di Indonesia. Tidak terkecuali, jalur SBMPN. Seleksi yang rencananya akan dilakukan melalui skema ujian, kini berubah menjadi portofolio. Tak perlu risau, jalur SBMPN ini tetap akan mengakomodir calon siswa yang berasal dari keluarga ekonomi lemah dengan prestasi yang baik sebagai peserta program Beasiswa Bidikmisi yang kini berubah menjadi KIP-Kuliah.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-size:10.0pt\"><span style=\"background-color:white\"><span style=\"color:#4d4d4d\">Informasi lengkap serta tata cara pendaftaran Jalur SBMPN dapat diakses melalui laman utama website dengan cara login menggunakan username dan password yang akan diberikan kepada peserta setelah melakukan registrasi dan pembayaran biaya pendaftaran. Selanjutnya pendaftar akan diarahkan untuk memasukkan data secara on-line. Selain mengakses laman sbmpn politeknik peserta dapat juga menghubungi Politeknik Negeri terdekat yang tergabung dalam SBMPN ini.</span></span></span></span></span></p>', '2020-07-03', 'Diunggah', 1731710010);
INSERT INTO `mhs_konten` (`id_mk`, `judul_mk`, `id_ktg`, `ringkasan_mk`, `isi_mk`, `tgl_mk`, `status_mk`, `nim_mhs`) VALUES
('mhs0027', 'artikel jti', 4, 'artikel jti', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Perkembangan teknologi saat ini berkembang dengan sangat pesat. Di mana, teknologi juga memiliki andil besar dalam perkembangan kehidupan manusia. Dengan banyaknya teknologi baru saat ini, muncul beberapa peluang usaha di bidang IT yang menjanjikan dengan memanfaatkan kecanggihan teknologi yang ada.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Peluang usaha di bidang IT di Indonesia masih tergolong baru, belum banyak orang yang terjun di bidang IT, sehingga peluang untuk sukses masih terbuka lebar. Ada banyak ide-ide usaha yang bisa dieksekusi untuk bisa terjun menjadi entrepreneur bidang IT. Jika Anda masih bingung, berikut ada 10 ide peluang bisnis bidang IT yang paling menguntungkan saat ini :</span></span></span></span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Web Development</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Website saat ini sudah menjadi salah satu hal yang wajib dimiliki oleh sebuah bisnis. Sebab, sekarang adalah eranya informasi, keterbukaan, dan kemudahan dalam komunikasi. &nbsp;Ada banyak manfaat memiliki website untuk sebuah bisnis, diantaranya meningkatkan kredibilitas, memperkenalkan profil, media promosi, media komunikasi, dan lain sebagainya. Maka dari itu, peluang untuk membuat usaha web developer saat ini sangat tepat, banyak orang yang membutuhkan mulai dari kelas pribadi, kelas bisnis, hingga kelas korporat.</span></span></span></span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Startup</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><em><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Startup&nbsp;</span></span></span></em><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">adalah istilah bagi seseorang yang baru merintis usaha dalam bidang digital. Untuk membangun sebuah&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">startup</span></em>, Anda hanya membutuhkan konsep yang matang saja. Jika Anda tidak bisa masalah pemrograman, desain, konten marketing, pemasaran, dan SEO, Anda bisa melemparkan ke orang lain yang lebih berpengalaman. Tetapi jika Anda mampu, Anda bisa melakukannya sendiri. Kemampuan utama yang harus dimiliki sebelum membuat&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">startup</span></em>&nbsp;yaitu pengelolaan sumber daya manusia. Contoh saja Facebook yang dulunya hanya&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">startup&nbsp;</span></em>kecil, kini sudah menjelma menjadi salah satu raksasa di dunia dan digunakan oleh banyak orang.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Desain Grafis</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Jasa desain grafis juga memiliki peluang yang besar. Tidak semua orang bisa melakukan desain walaupun sudah mempunyai aplikasinya. Harga jual untuk sebuah desain juga cukup besar tergantung&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">skill&nbsp;</span></em>dari desainernya. Tips agar sering mendapat klien, Anda harus memiliki banyak portfolio, tujuannya agar klien mengetahui hasil desain yang pernah Anda buat dan lebih mudah menawarkan harga kepada klien. Anda bisa mencari klien di beberapa&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">website&nbsp;</span></em>terkenal seperti 99designs.com, Fiverr, Sribulancer, dan lainnya.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Penulis Artikel</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Bagi Anda yang hobi menulis, tidak ada salahnya Anda menyalurkan hobi Anda menjadi pundi-pundi rupiah. Pekerjaan menulis ini merupakan salah satu dari ide peluang usaha bidang IT paling mudah dilakukan. Apalagi jika Anda memahami masalah SEO, maka nilai artikel Anda akan dihargai lebih. Anda bisa menawarkan keahlian menulis Anda di forum-forum atau bergabung dengan perusahaan penulis konten.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">SEO</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">SEO atau&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">Search Engine Optimization&nbsp;</span></em>adalah salah satu cara bagaimana menaikan&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">website&nbsp;</span></em>Anda berada di halaman pertama pencarian Google sehingga banyak pengunjung yang datang pada&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">website&nbsp;</span></em>Anda. Ilmu SEO ini masih jarang yang menguasainya, masih terbuka lebar peluang untuk membuat usaha di bidang SEO ini. Apalagi biaya dari jasa SEO ini tergolong mahal, terutama pada&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">website&nbsp;</span></em>yang memiliki persaingan berat.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Aplikasi Mobile</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Perkembangan aplikasi&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">mobile&nbsp;</span></em>dari tahun ke tahun mengalami pertumbuhan yang cukup tinggi, dari tahun ke tahun perkembangannya sangat signifikan. Apalagi ditambah dengan maraknya&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">smartphone&nbsp;</span></em>yang membuat aplikasi&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">mobile&nbsp;</span></em>menjadi salah satu peluang bidang IT yang sangat menggiurkan. Aplikasi&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">mobile&nbsp;</span></em>yang paling banyak di-<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">download&nbsp;</span></em>menurut data di urutan pertama adalah kategori&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">Games, </span></em>urutan kedua kategori&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">Education and Reference</span></em>, urutan ketiga kategori<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">&nbsp;Business and Productifity</span></em>. Dari data tersebut menyebutkan bahwa&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">games&nbsp;</span></em>adalah aplikasi yang paling laku dan diminati saat ini, sehingga ini menjadi peluang yang bisa Anda manfaatkan untuk memulai usaha di bidang IT yang tepat.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Software</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Jika aplikasi lebih cenderung ke&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">mobile/smartphone</span></em>, maka untuk&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">software&nbsp;</span></em>ini cenderung ke perangkat komputer.&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">Software&nbsp;</span></em>adalah perangkat lunak yang isinya dari bahasa pemrograman tertentu yang memiliki kesatuan dan memiliki nilai dan tujuan tertentu. Jika Anda memiliki kemampuan&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">coding&nbsp;</span></em>yang baik, maka mendirikan usaha &nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">software house developer</span></em>&nbsp;adalah pilihan yang tepat. Selain pasarnya masih luas, harga setiap&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">software&nbsp;</span></em>yang dijual biasanya memiliki harga yang mahal, sehingga masih sangat prospek untuk kedepannya.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Blogger</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Bagi Anda yang memiliki hobi menulis, maka blogger adalah salah satu peluang usaha yang tepat untuk Anda. Anda bisa membuat blog dengan&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">niche&nbsp;</span></em>sesuai yang Anda kuasai. Selain kemampuan menulis, Anda harus mengerti tentang urusan domain,&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">hosting</span></em>,<em>&nbsp;</em>dan SEO agar blog Anda bisa bersaing dengan blog lain di Internet. Untuk bisa mendapatkan penghasilan, Anda bisa melakukan monetisasi (mengubah dan mengelola) blog yang Anda miliki dengan PPC Adsense, mengikuti program afiliasi, menjual slot iklan,&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">paid to review</span></em>, dan masih banyak model monetisasi lainnya.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Social Media Consulting</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><em><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">Social media&nbsp;</span></span></span></em><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">saat ini banyak sekali jenisnya, jika dulu hanya ada Friendster, maka sekarang sudah ada Facebook, Instagram, Line, Twitter, Tumblr, Path, dan lain sebagainya. Anda bisa memanfaatkan peluang dari banyaknya jenis&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">social media&nbsp;</span></em>yang ada dengan menjadi konsultan&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">social media</span></em>. Anda bisa menawarkan jasa untuk mengoptimalkan&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">social media&nbsp;</span></em>untuk berbisnis, sarana promosi, membangun&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">brand</span></em>, menambah jumlah&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">follower</span></em>/teman dan masih banyak lainnya.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></span></p>\r\n\r\n<h1><span style=\"font-size:2.5rem\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><strong><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">IT Solution</span></span></span></strong></strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">IT&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">solution&nbsp;</span></em>adalah bidang usaha yang bergerak di bidang jasa atau penjualan alat-alat IT. Contoh usahanya seperti pemasangan CCTV, alarm keamanan, jasa&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">service&nbsp;</span></em>perangkat IT, penjualan&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">software</span></em>,<em>&nbsp;</em>dan lainnya. Jika Anda dapat menjalankan usaha IT&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">solution&nbsp;</span></em>ini keuntungannya cukup besar karena saat ini masih banyak orang yang membutuhkan jasa IT.</span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\"><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\"><span style=\"color:#212529\">&nbsp;Demikian pembahasan mengenai 10 ide peluang usaha bidang IT yang paling menguntungkan. Pilihlah salah satu bidang yang sesuai dengan&nbsp;<em><span style=\"font-family:&quot;Segoe UI&quot;,&quot;sans-serif&quot;\">passion</span></em>&nbsp;Anda dan tekuni usaha tersebut hingga menghasilkan keuntungan yang maksimal. Dan perlu diingat untuk masalah pengelolaan keuangan, Anda haruslah dikelola secara baik dan benar.</span></span></span></span></span></span></p>', '2020-07-04', 'Proses', 1731710010),
('mhs0028', 'Surat Edaran Kegiatan Akademik dan Kemahasiswaan New Normal', 4, 'Surat Edaran Kegiatan Akademik dan Kemahasiswaan New Normal', '<p><img alt=\"\" src=\"https://www.polinema.ac.id/wp-content/uploads/2020/06/0001.jpg\" style=\"height:707px; width:500px\" /></p>\r\n\r\n<p>Surat Edaran Kegiatan Akademik dan Kemahasiswaan New Normal telah dikeluarkan oleh direktur politeknik negeri malang bapak Awan Setiawan pada tanggal 26 Juni 2020. Mengenai penyelenggaraan kegiatan akademik&nbsp;dan kemahasiswaan dalam tatanan kenormalan baru politeknik negeri malang.</p>\r\n\r\n<p>Maka, dalam rangka mencegahnya, belajar di sekolah dan melakukan perkuliahan atau pembelajaran dalam Tatanan Kenermalan Baru (Normal Baru) di Lingkungan Politeknik Negeri Malang, dengan ini diinformasikan hal-hal sebagal berikut :</p>\r\n\r\n<p>1. Penelitian dengan pembinaan yang ketat dan tetap menerapkan protokol kesehatan</p>\r\n\r\n<p>2. Mahasiswa pindah area kampus WAJIB mengikuti POB (Prosedur Operasional Baku) yang diberlakukan oleh Pemerintah Kota Malang untuk Pencegahan dan Penanggulangan Covid-19 di Kota Malang</p>\r\n\r\n<p>3. Ujian Laporan Akhir / Skripsi / Skripsi Semester Genap Tahun Akademik 2019/2020 dilaksanakan sesuai tantangan / online, dan tidak diljinkan tatap muka / offilne, kecuali beberapa mahasiswa yang tidak dapat mengerjakan Ujian Laporan Akhir / Skripsi / Tesis dengan sistem berani, menyelesaikan ujian secara offline dengan menggunakan protokol kesehatan.</p>\r\n\r\n<p>4. Orientasi Pengenalan Kampus / PRASTUDI serta Upacara Penerimaan Mahasiswa Baru Tahun Akademik 2020 / 2021 dilaksanakan pada tanggal Agustus Agustus 2020</p>\r\n\r\n<p>5. Latihan Dasar Kedisiplinan (LDK) dilaksanakan pada liburan akhir semester Ganjil Tahun Akademik 2020 / 2021 (Bulan Januari 2021)</p>\r\n\r\n<p>&nbsp;6. Perkuliahan Semester Ganjil Tahun Akademik 2020 / 2021 dimulai tanggal 24 Agustus 2020 dengan metode pembelajaran sistem blok (diutamakan untuk mata kuliah teori (terus menerus) (24 Agustus - 16 Oktober). Sementara Mata Kuliah Praktikai / dilaksanakan setelah UTS (tanggal 26 Oktober sampai dengan 11 Desember 2020), - sesuai Kalender Akademik Tahun Akademik 2020 / 2021</p>\r\n\r\n<p>7. Sesuai dengan Permendikbud Nomor 25 Tahun 2020 tentang Standar Satuan Biaya Operasional Pendidikan Tinggi pada PTN, untuk orang tua mahasiswa yang Iardampak Covid-19, dapat disetujui keringanan semester UKT Ganjil Tahun Akademk 2020 / 2021 yang akan disediakan oleh Surat Edaran ini</p>\r\n\r\n<p>8. Bantuan pulsa untuk mahasiswa dan dosen akan diberikan pada periode berikutnya di awal Semester Ganjil Tahun Akademik 2020 / 2021. Demikian Surat Edaran ini disampaikan untuk dibahas dan dilaksanakan.</p>', '2020-07-04', 'Diunggah', 1731719999);

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id_mk` varchar(20) DEFAULT NULL,
  `nim_mhs` int(11) NOT NULL,
  `creation_time` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`id_mk`, `nim_mhs`, `creation_time`, `message`) VALUES
('mhs0014', 1731710064, '2020-06-25 21:50:00', 'Selamat, Konten Anda diterima, Cek poinmu'),
('mhs0014', 1731710064, '2020-06-25 21:50:05', 'Selamat, Konten Anda telah diUnggah, Cek postingan nya !'),
('mhs0014', 1731710064, '2020-06-25 22:04:48', 'Selamat, Konten Anda telah diUnggah, Cek postingan nya !'),
('mhs0015', 1731710102, '2020-06-25 22:05:03', 'Selamat, Konten Anda diterima, Cek poinmu'),
('mhs0015', 1731710102, '2020-06-25 22:05:06', 'Selamat, Konten Anda telah diUnggah, Cek postingan nya !'),
('mhs0016', 1731710130, '2020-06-26 11:30:29', 'Selamat, Konten Anda diterima, Cek poinmu'),
('mhs0016', 1731710130, '2020-06-26 11:30:43', 'Selamat, Konten Anda telah diUnggah, Cek postingan nya !'),
('mhs0016', 1731710130, '2020-06-26 11:32:03', 'Selamat, Konten Anda telah diUnggah, Cek postingan nya !'),
('mhs0017', 1731710137, '2020-06-26 11:45:40', 'Selamat, Konten Anda diterima, Cek poinmu'),
('mhs0017', 1731710137, '2020-06-26 11:45:54', 'Selamat, Konten Anda telah diUnggah, Cek postingan nya !'),
('mhs0018', 1731712929, '2020-06-26 12:37:11', 'Selamat, Konten Anda diterima, Cek poinmu'),
('mhs0018', 1731712929, '2020-06-26 12:37:25', 'Selamat, Konten Anda telah diUnggah, Cek postingan nya !'),
(NULL, 1731710057, '0000-00-00 00:00:00', ''),
(NULL, 1541180046, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1631710028, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710009, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710014, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710018, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710037, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710057, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710058, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710064, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710071, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710072, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710084, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710090, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710095, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710096, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710100, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710101, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710102, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710107, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710129, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710130, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710134, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710137, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710138, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710141, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710145, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710151, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710161, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710168, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731710170, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731712929, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731713030, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731714040, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731715050, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731716060, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731717070, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731718080, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1731719999, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1741720011, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1741720089, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1741720144, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1831710003, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1831710044, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1831710105, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1831710120, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1831710121, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1831710128, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1831710129, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1831710147, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1831710199, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1841720158, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1841720167, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1941727015, '2020-07-03 19:11:56', 'Poin anda telah di reset 03/07/2020, 07:11'),
(NULL, 1541180046, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1631710028, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710009, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710014, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710018, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710037, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710057, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710058, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710064, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710071, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710072, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710084, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710090, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710095, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710096, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710100, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710101, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710102, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710107, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710129, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710130, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710134, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710137, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710138, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710141, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710145, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710151, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710161, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710168, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710170, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731712929, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731713030, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731714040, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731715050, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731716060, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731717070, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731718080, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731719999, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1741720011, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1741720089, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1741720144, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710003, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710044, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710105, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710120, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710121, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710128, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710129, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710147, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710199, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1841720158, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1841720167, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1941727015, '2020-07-03 19:39:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1541180046, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1631710028, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710009, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710014, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710018, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710037, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710057, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710058, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710064, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710071, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710072, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710084, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710090, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710095, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710096, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710100, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710101, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710102, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710107, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710129, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710130, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710134, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710137, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710138, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710141, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710145, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710151, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710161, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710168, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731710170, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731712929, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731713030, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731714040, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731715050, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731716060, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731717070, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731718080, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1731719999, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1741720011, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1741720089, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1741720144, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710003, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710044, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710105, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710120, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710121, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710128, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710129, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710147, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1831710199, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1841720158, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1841720167, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
(NULL, 1941727015, '2020-07-03 22:24:57', 'Poin anda telah di reset 03/07/2020'),
('mhs0026', 1731710010, '2020-07-04 00:03:30', 'Selamat, Konten Anda diterima, Poinmu Bertambah 5, Cek poinmu'),
('mhs0011', 1731710161, '2020-07-04 00:06:36', 'Konten Anda ditolak, silahkan coba kembali'),
('mhs0026', 1731710010, '2020-07-04 00:07:24', 'Selamat, Konten Anda telah diUnggah, Poinmu Bertambah 1 dan Cek postingan nya !'),
('mhs0028', 1731719999, '2020-07-04 10:28:59', 'Selamat, Konten Anda diterima, Poinmu Bertambah 5, Cek poinmu'),
('mhs0028', 1731719999, '2020-07-04 10:29:21', 'Selamat, Konten Anda telah diUnggah, Poinmu Bertambah 1 dan Cek postingan nya !'),
(NULL, 1541180046, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1631710028, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710009, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710010, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710014, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710018, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710037, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710057, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710058, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710064, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710071, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710072, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710084, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710090, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710095, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710096, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710100, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710101, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710102, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710107, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710129, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710130, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710134, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710137, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710138, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710141, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710145, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710151, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710161, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710168, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710170, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731712929, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731713030, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731714040, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731715050, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731716060, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731717070, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731718080, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731719999, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720011, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720089, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720144, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710003, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710044, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710105, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710120, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710121, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710128, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710129, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710147, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710199, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720158, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720167, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1941727015, '2020-07-04 12:57:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1541180046, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1631710028, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710009, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710010, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710014, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710018, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710037, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710057, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710058, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710064, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710071, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710072, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710084, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710090, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710095, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710096, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710100, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710101, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710102, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710107, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710129, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710130, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710134, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710137, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710138, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710141, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710145, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710151, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710161, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710168, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710170, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731712929, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731713030, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731714040, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731715050, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731716060, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731717070, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731718080, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731719999, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720011, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720089, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720144, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710003, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710044, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710105, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710120, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710121, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710128, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710129, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710147, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710199, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720158, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720167, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1941727015, '2020-07-04 15:19:21', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1541180046, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1631710028, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710009, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710010, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710014, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710018, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710037, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710057, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710058, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710064, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710071, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710072, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710084, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710090, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710095, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710096, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710100, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710101, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710102, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710107, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710129, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710130, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710134, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710137, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710138, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710141, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710145, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710151, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710161, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710168, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710170, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731712929, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731713030, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731714040, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731715050, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731716060, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731717070, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731718080, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731719999, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720011, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720089, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720144, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710003, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710044, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710105, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710120, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710121, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710128, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710129, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710147, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710199, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720158, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720167, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1941727015, '2020-07-04 15:19:56', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1541180046, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1631710028, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710009, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710010, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710014, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710018, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710037, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710057, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710058, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710064, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710071, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710072, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710084, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710090, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710095, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710096, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710100, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710101, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710102, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710107, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710129, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710130, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710134, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710137, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710138, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710141, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710145, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710151, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710161, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710168, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710170, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731712929, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731713030, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731714040, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731715050, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731716060, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731717070, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731718080, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731719999, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720011, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720089, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720144, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710003, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710044, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710105, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710120, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710121, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710128, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710129, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710147, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710199, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720158, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720167, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1941727015, '2020-07-04 15:20:17', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1541180046, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1631710028, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710009, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710010, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710014, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710018, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710037, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710057, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710058, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710064, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710071, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710072, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710084, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710090, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710095, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710096, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710100, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710101, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710102, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710107, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710129, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710130, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710134, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710137, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710138, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710141, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710145, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710151, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710161, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710168, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710170, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731712929, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731713030, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731714040, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731715050, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731716060, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731717070, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731718080, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731719999, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720011, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720089, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720144, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710003, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710044, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710105, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710120, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710121, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710128, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710129, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710147, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710199, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720158, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720167, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1941727015, '2020-07-04 15:20:46', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1541180046, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1631710028, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710009, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710010, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710014, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710018, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710037, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710057, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710058, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710064, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710071, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710072, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710084, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710090, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710095, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710096, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710100, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710101, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710102, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710107, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710129, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710130, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710134, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710137, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710138, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710141, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710145, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710151, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710161, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710168, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710170, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731712929, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731713030, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731714040, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731715050, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731716060, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731717070, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731718080, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731719999, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720011, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720089, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720144, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710003, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710044, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710105, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710120, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710121, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710128, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710129, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710147, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710199, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720158, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720167, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1941727015, '2020-07-04 15:20:49', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1541180046, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1631710028, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710009, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710010, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710014, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710018, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710037, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710057, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710058, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710064, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710071, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710072, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710084, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710090, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710095, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710096, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710100, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710101, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710102, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710107, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710129, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710130, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710134, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710137, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710138, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710141, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710145, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710151, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710161, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710168, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710170, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731712929, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731713030, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731714040, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731715050, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731716060, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731717070, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731718080, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731719999, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720011, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720089, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720144, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710003, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710044, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710105, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710120, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710121, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710128, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710129, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710147, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710199, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720158, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720167, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1941727015, '2020-07-04 15:21:08', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1541180046, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1631710028, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710009, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710010, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710014, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710018, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710037, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710057, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710058, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710064, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710071, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710072, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710084, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710090, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710095, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710096, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710100, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710101, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710102, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710107, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710129, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710130, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710134, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710137, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710138, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710141, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710145, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710151, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710161, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710168, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710170, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731712929, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731713030, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731714040, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731715050, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731716060, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731717070, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731718080, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731719999, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720011, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720089, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720144, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710003, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710044, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710105, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710120, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710121, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710128, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710129, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710147, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710199, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720158, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720167, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1941727015, '2020-07-04 15:23:57', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1541180046, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1631710028, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710009, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710010, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710014, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020');
INSERT INTO `notif` (`id_mk`, `nim_mhs`, `creation_time`, `message`) VALUES
(NULL, 1731710018, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710037, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710057, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710058, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710064, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710071, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710072, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710084, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710090, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710095, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710096, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710100, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710101, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710102, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710107, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710129, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710130, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710134, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710137, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710138, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710141, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710145, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710151, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710161, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710168, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731710170, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731712929, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731713030, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731714040, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731715050, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731716060, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731717070, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731718080, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1731719999, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720011, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720089, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1741720144, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710003, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710044, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710105, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710120, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710121, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710128, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710129, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710147, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1831710199, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720158, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1841720167, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020'),
(NULL, 1941727015, '2020-07-04 15:43:58', 'Poin anda telah di reset 04/07/2020');

-- --------------------------------------------------------

--
-- Table structure for table `notif_admin`
--

CREATE TABLE `notif_admin` (
  `message` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `be_read` tinyint(1) NOT NULL,
  `creation_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif_admin`
--

INSERT INTO `notif_admin` (`message`, `id`, `be_read`, `creation_time`) VALUES
('ferina mengunggah konten baru', 12, 1, '2020-06-12 00:20:55'),
('iwed testing mengunggah konten baru', 13, 1, '2020-06-14 12:46:20'),
('sukma mengunggah konten baru', 14, 1, '2020-06-22 09:14:12'),
('sukma mengunggah konten baru', 15, 1, '2020-06-22 09:14:39'),
('sukma mengunggah konten baru', 16, 1, '2020-06-22 09:15:07'),
('sukma mengunggah konten baru', 17, 1, '2020-06-22 09:15:51'),
('erin mengunggah konten baru', 18, 0, '2020-06-22 11:51:00'),
('ferina 1 mengunggah konten baru', 19, 0, '2020-06-23 14:43:26'),
('ferina mengunggah konten baru', 20, 0, '2020-06-23 15:39:05'),
('ferina 2 mengunggah konten baru', 21, 0, '2020-06-23 15:44:20'),
('Ayu Unyu mengunggah konten baru', 22, 0, '2020-06-23 20:14:32'),
('Febrianthi Intan mengunggah konten baru', 23, 0, '2020-06-23 20:16:55'),
('Ayu Unyu mengunggah konten baru', 24, 0, '2020-06-23 20:17:23'),
('Ayu Unyu mengunggah konten baru', 25, 0, '2020-06-23 20:18:20'),
('Ayu Unyu mengunggah konten baru', 26, 0, '2020-06-23 20:19:40'),
('ferina mengunggah konten baru', 27, 0, '2020-06-25 10:55:50'),
('deby silvia agnes mengunggah konten baru', 28, 0, '2020-06-25 20:11:21'),
('Ramdaning Puri Pradani mengunggah konten baru', 29, 0, '2020-06-25 21:18:45'),
('Ramdaning Puri Pradani mengunggah konten baru', 30, 0, '2020-06-25 21:22:03'),
('DEBY SILVIA AGNES mengunggah konten baru', 31, 0, '2020-06-25 21:28:04'),
('Ramdaning Puri Pradani mengunggah konten baru', 32, 0, '2020-06-25 21:56:23'),
('Mega Maduratna Juwita mengunggah konten baru', 33, 0, '2020-06-25 23:01:53'),
('Wirda Kurnia mengunggah konten baru', 34, 0, '2020-06-26 11:43:40'),
('ina mengunggah konten baru', 35, 0, '2020-06-26 12:20:18'),
('ina mengunggah konten baru', 36, 0, '2020-06-26 12:33:20'),
('ina mengunggah konten baru', 37, 1, '2020-06-26 12:36:45'),
('ferina mengunggah konten baru', 38, 1, '2020-06-26 16:09:52'),
('ferina mengunggah konten baru', 39, 1, '2020-06-26 16:11:34'),
('ferina mengunggah konten baru', 40, 1, '2020-06-26 16:40:07'),
('ferina mengunggah konten baru', 41, 1, '2020-06-26 16:43:44'),
('Silva Aisya Maharnis mengunggah konten baru', 42, 0, '2020-06-26 21:37:44'),
('Febrianthi Intan mengunggah konten baru', 43, 0, '2020-06-26 22:09:43'),
('Dhimas Bayu Ilham Ramadhan mengunggah konten baru', 44, 0, '2020-06-26 23:19:41'),
('Ananda Nur Juliansyah mengunggah konten baru', 45, 0, '2020-06-27 07:40:25'),
('Asri mengunggah konten baru', 46, 0, '2020-06-27 08:19:31'),
('ferina mengunggah konten baru', 47, 1, '2020-07-02 21:53:49'),
('niar kintan mengunggah konten baru', 48, 0, '2020-07-03 23:30:18'),
('niar kintan mengunggah konten baru', 49, 0, '2020-07-03 23:35:46'),
('niar kintan mengunggah konten baru', 50, 0, '2020-07-03 23:46:33'),
('niar kintan mengunggah konten baru', 51, 0, '2020-07-04 08:38:48'),
('ferina mengunggah konten baru', 52, 0, '2020-07-04 10:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `penukaran`
--

CREATE TABLE `penukaran` (
  `id_penukaran` int(11) NOT NULL,
  `nim_mhs` int(11) NOT NULL,
  `id_listP` int(11) DEFAULT NULL,
  `id_kmp` int(11) DEFAULT NULL,
  `penerima` varchar(30) DEFAULT NULL,
  `poin` int(11) DEFAULT NULL,
  `kategori` varchar(20) NOT NULL,
  `tgl_penukaran` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penukaran`
--

INSERT INTO `penukaran` (`id_penukaran`, `nim_mhs`, `id_listP`, `id_kmp`, `penerima`, `poin`, `kategori`, `tgl_penukaran`, `status`) VALUES
(39, 1731710161, 1, NULL, NULL, NULL, 'TEMA', '2020-06-24 12:40:26', 0),
(40, 1731710161, 5, NULL, NULL, NULL, 'TEMA', '2020-06-25 11:37:04', 1),
(41, 1731710161, NULL, 24, NULL, NULL, 'KOMPEN', '2020-06-25 12:01:48', 0),
(42, 1731710161, 2, NULL, NULL, NULL, 'PP', '2020-06-25 13:28:44', 0),
(43, 1731710161, 3, NULL, NULL, NULL, 'PPF', '2020-06-25 13:29:12', 0),
(44, 1731712929, 2, NULL, NULL, NULL, 'PP', '2020-06-26 13:01:00', 0),
(45, 1731712929, 3, NULL, NULL, NULL, 'PPF', '2020-06-26 13:01:28', 0),
(46, 1731712929, 1, NULL, NULL, NULL, 'TEMA', '2020-06-26 13:05:02', 0),
(47, 1731712929, 5, NULL, NULL, NULL, 'TEMA', '2020-06-26 13:07:51', 0),
(48, 1731712929, NULL, NULL, '1731710000', 1, 'GIFT', '2020-06-26 13:14:49', 0),
(49, 1731712929, NULL, 25, NULL, NULL, 'KOMPEN', '2020-06-26 13:15:58', 0),
(50, 1731712929, NULL, 26, NULL, NULL, 'KOMPEN', '2020-06-26 13:16:58', 0),
(51, 1731719999, NULL, NULL, '1731710161', 1, 'GIFT', '2020-06-26 16:51:36', 0),
(52, 1731719999, NULL, 27, NULL, NULL, 'KOMPEN', '2020-06-26 16:52:37', 0),
(53, 1731719999, 2, NULL, NULL, NULL, 'PP', '2020-06-26 16:57:34', 0),
(54, 1731719999, 3, NULL, NULL, NULL, 'PPF', '2020-06-26 16:58:13', 0),
(55, 1731719999, 1, NULL, NULL, NULL, 'TEMA', '2020-06-26 16:59:50', 0),
(56, 1731719999, 5, NULL, NULL, NULL, 'TEMA', '2020-06-26 17:00:43', 0),
(57, 1731719999, NULL, NULL, '1731710161', 1, 'GIFT', '2020-07-04 11:08:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `poin_kompen`
--

CREATE TABLE `poin_kompen` (
  `id_kp` int(11) NOT NULL,
  `tgl_kp` date NOT NULL,
  `poin_kp` int(11) NOT NULL,
  `username_adm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poin_kompen`
--

INSERT INTO `poin_kompen` (`id_kp`, `tgl_kp`, `poin_kp`, `username_adm`) VALUES
(1, '2019-06-10', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `id_artikel` varchar(20) DEFAULT NULL,
  `id_mhs` int(11) DEFAULT NULL,
  `rate` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `id_artikel`, `id_mhs`, `rate`) VALUES
(35, 'mhs0015', 1731710102, 'LIKE'),
(36, 'mhs0015', 1731710102, 'LIKE'),
(37, 'mhs0014', 1731710102, 'LIKE'),
(38, 'mhs0015', 1731710161, 'LIKE'),
(39, 'mhs0016', 1731710137, 'LIKE'),
(40, 'mhs0014', 1731710137, 'LIKE'),
(41, 'mhs0015', 1731710137, 'LIKE'),
(42, 'mhs0017', 1731712929, 'LIKE'),
(47, 'mhs0018', 1731710161, 'LIKE'),
(48, 'mhs0018', 1731713030, 'LIKE'),
(49, 'mhs0018', 1731714040, 'LIKE'),
(50, 'mhs0018', 1731715050, 'LIKE'),
(51, 'mhs0018', 1731716060, 'LIKE'),
(52, 'mhs0018', 1731717070, 'LIKE'),
(57, 'mhs0018', 1731719999, 'LIKE'),
(60, 'mhs0017', 1731719999, 'LIKE'),
(67, 'mhs0017', 1731710072, 'LIKE'),
(68, 'mhs0018', 1731710072, 'LIKE'),
(71, 'mhs0014', 1731710072, 'LIKE'),
(72, 'mhs0015', 1731710072, 'LIKE'),
(73, 'mhs0017', 1731710010, 'LIKE'),
(74, 'mhs0028', 1731719999, 'LIKE'),
(75, 'mhs0028', 1731710010, 'LIKE'),
(76, 'mhs0028', 1731713030, 'LIKE'),
(77, 'mhs0028', 1731714040, 'LIKE'),
(78, 'mhs0028', 1731715050, 'LIKE'),
(79, 'mhs0028', 1731716060, 'DISLIKE'),
(80, 'adm0003', 1731719999, 'LIKE'),
(81, 'adm0002', 1731719999, 'LIKE');

-- --------------------------------------------------------

--
-- Table structure for table `req_reset`
--

CREATE TABLE `req_reset` (
  `id_req_reset` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_reset`
--

INSERT INTO `req_reset` (`id_req_reset`, `email`, `code`) VALUES
(1, 'farrasgopal13@gmail.com', 'JnwtXGTvSRBDAUFrpCVgx2kOH9qa53yM70EbLQWZhYfu6l4jez'),
(2, 'farrasgopal13@gmail.com', 'lWTm7PGzHLDfk2iqKwIe4Aa9J5QXNcU3hC1MVdoYyujbBstnvr'),
(3, 'farrasgopal13@gmail.com', 'aH9JTU7t61v8sVY2BPOhRx4LEiyf0c5mSrbIZqDgzpuNlCFjGW'),
(4, 'hakim2225saputra@gmail.com', 'PXrn832yxb7WUNTqO0D6KH5mzFSIZ9adVjJCRQY4kivohA1tpl'),
(5, 'ferinabayu@gmail.com', 'nsGZQmTrhdJV6o52WHOA1e0qfgztLXSj7FaNExRcpYwKC3bMui'),
(6, 'ferinabayu@gmail.com', '4as97lNnHYzImtArVP38p2ogWvkOJQZCBwd6L5cXeR1bhyDSTq'),
(7, 'ferinabayu@gmail.com', 'DTvtXIEkcOGmLJVZKM0F7Cerf4waQ9gUyPxAHR5NpjzhlWqsod'),
(8, 'farrasgopal13@gmail.com', 'HoEyxvds489wO7ijFKUB315IqVJeALhP2TQgGrzWu6XDNMnlRf'),
(9, 'febrianthii@gmail.com', 'e1XC7pKh5WRA4IS6izEsO0NyDuaLBHtoMrmc8PkF9UldGwnjxZ'),
(10, 'farrasgopal13@gmail.com', '7zxRvl9M2NnpPIjUwWyGTa15KhYCgQfBJct6Do0SsAkrE3mXqu'),
(11, 'farrasgopal13@gmail.com', 'tiJI8Qhr3ogNxbERjBDPZW6lT2S0OpqufK7deyVwCmY5czHULM'),
(12, 'farrasgopal13@gmail.com', 'VAsY0e8hZbwiM6qpBQkD7K2uHxU1tr4IScmj9OFElRadJyTnLg'),
(13, 'setyasaraswati25@gmail.com', 'RqiCaGVPNHUWO2mKXt4ZAQ6pdoDLrEksewBlYTzn7Ih8jc1vfJ'),
(14, 'farrasgopal13@gmail.com', 'Hc301uTmnrzGWw7lfaIvUsQDVqNhdLYKiObMeoBtS5yE4PX9FA'),
(15, 'farrasgopal13@gmail.com', '4fFsDSOnXi7myZcEwvVzqP0lLIrKTpo6agb2dW8MCkUHBxN5Ae'),
(16, 'farrasgopal13@gmail.com', 'IOldM9cWDtn2kRJyGvuHFCfZ1wN6ameLE3iXoP0rTb7sYSp84V'),
(17, 'farrasgopal13@gmail.com', 'PF3wiqCu01DHWLtpAflEodUcs4a5Bz9jQmhV2KGrNO7bvS6eIY'),
(18, 'farrasgopal13@gmail.com', 'FrxHqbWc2Id5sYnKfEZe3SvVC4XyThPk8laQm7pUN0RwO6ouLD'),
(19, 'farrasgopal13@gmail.com', 'jOTxBq1zts7WkLNfGEIu9eQlmwdYPXc04Kpab5ioZ6Hv3RgVnD'),
(20, 'farrasgopal13@gmail.com', 'fMZqljgYbu6OXcaD4GKRnCN7iUEkLFWP0B9Hwym2eVdI1v8oAs'),
(21, 'farrasgopal13@gmail.com', 'e9Kq1QVSDjIzXTcB8xAJkmy5nCiuGW7gYhR2Zb40lPLN6wEaMp'),
(22, 'farrasgopal13@gmail.com', 'LOPRy3H9FVczoMvqQGaKu5J4gAkehbfI1DSrt2YjTBXiZnCsNU'),
(23, 'farrasgopal13@gmail.com', 'daGt4VowHOxplRTI6fXPAm1CDjbuKN5WSUFksLJ2zY7y3ch09E'),
(24, 'farrasgopal13@gmail.com', '9joKz1ygV4CdEx2IusDfp5M7XWhSQYTPOvGNRrFqtmwLcAe60i'),
(25, 'farrasgopal13@gmail.com', 'kGqbXE0cPAjxZKvNF8nOlBLpH3hJSry1Y4uzD69wa52fVsMTRo'),
(26, 'ferinabayu@gmail.com', 'dgB2pq3Sc6AaNxJOfwlozYD4jbUhLeHsC90QmIVrGWvMtPn8yk'),
(27, 'ferinabayu@gmail.com', '3EjKq5spLSQ9flzZ84IwTFiXardgRMAen2P01kGVOJYumNBhtc'),
(28, 'ferinabayu@gmail.com', 'sXLypFqft4CVNWvcjbmaZGKYOiHrEoM7DIndzx028Uh5k3l1TP'),
(29, 'ferinabayu@gmail.com', 'ZHSqTkb2CmxwzI4jygNVt9GhFBYA5vp6aP8MsXLfrJE1uKQRcD'),
(30, 'farrasgopal13@gmail.com', 'nPm7W20t65OS1LHlBwogcXjzCAVQJe93YpIdxaZvGk4iE8syFU'),
(31, 'farrasgopal13@gmail.com', 'n2EI5Xem4DvkcBoqLaKsNQF9wMRgdh7Pu1zUCr6TAflHxtOGW8'),
(32, 'farrasgopal13@gmail.com', 'LQ3a72X8VkKIWsmRuYlwdfjMoHOhqCUrDA1JBb6P09n54typEZ'),
(33, 'farrasgopal13@gmail.com', 'KuswgFva04T3hYXGqOtfLn7d1oj8mIx9NB2ARyVeZiEbJSCWkp'),
(34, 'farrasgopal13@gmail.com', 'ma89b0ngL7qyRlj1MH3YuOxtpVNTwIWvKzirQDEhkF6eBGSfUc'),
(35, 'farrasgopal13@gmail.com', 'xfEpbhknRzWVFNM4XOmvG5YSJTgH93lD6qKjLoU1c0sPtrQey8'),
(36, 'farrasgopal13@gmail.com', 'c0Ab8f1puUImWPaZ3gqSjznYd47T9JBtkov65MeLhQFO2DrsEX'),
(37, 'farrasgopal13@gmail.com', 'BQv4OU73eHLxJfns9gbA2V0G1ErKZySNFmlWDoTcut5XiIz8Md'),
(38, 'farrasgopal13@gmail.com', 'nF7QOljYSa4JT2IKm195bU3LiEkMo6NPdzGpAerDqCWRHVtuh8'),
(39, 'farrasgopal13@gmail.com', 'N240JpUtf6u7CiRwIsvr5m8xSlPYGVjHeLhb1TQdBc3KFqa9Eg'),
(40, 'farrasgopal13@gmail.com', 'OcaYBwXx9mQU05TynGHjZhvReuIP7zqkEtsdLK24olNWJCpF68'),
(41, 'farrasgopal13@gmail.com', 'lNYoKbPBCupxadqveRg6sDSJAE7WtIO312F0fwhM45zGnyTUrV'),
(42, 'farrasgopal13@gmail.com', 'sp1PJqxUdFLKmyON5oE97zeQuAWZgnDb6r0tTa4k8wV32XjIlM'),
(43, 'ferinabayu@gmail.com', 'XYcjLCb298dhz47kDJgmEHlouQaNS1qvFGTWryVpesZOK0ft5P'),
(44, 'ferinabayu@gmail.com', 'zK14rIotevgq0F3Pu5w6dpZGkXb7xTjM2fShVU8QBnLHms9CDl'),
(45, 'ferinabussiness@gmail.com', 'z4GsVtfaby7hH9iSuKlBWkEw53FUo608MnPpdvIJXTNm2gcRQA'),
(46, 'ferinabayu@gmail.com', 'rsKTapMoeEvx3AOmNIVHu6Uyt1ncCqgDBljYbR5f2Z4JWP7z9Q'),
(47, 'ferinabayu@gmail.com', 'iLh27e4RMJP3OqvcIbN5Xdwn1kmgsFT0lxASypEroVBzUu9YQ6'),
(48, 'ferinabayu@gmail.com', '9oeL0cwtMPHCUG4I3WKuJk2YnTaQ1ErFpz6yd58giA7ZDBNvxV'),
(49, 'ferinabayu@gmail.com', 'bCtxkzf2UnIV1Fdv6OLZRXiYhj7uPBWHgawqeGNAym4E3TKosD'),
(50, 'ferinabayu@gmail.com', 'wIGDJ7jEmQ9gLkcHzy61dWvuq2U3nRs4axBNfOSPob5K8tACp0'),
(51, 'ferinabayu@gmail.com', 'Y3GyvQ0LNm56tBOjsRdoiVqawcKu1b4CzpWlxPU8MnZAfekHFI'),
(52, 'ferinabayu@gmail.com', 'Lfi9uFotO7xVEJjTlhZgk2Gns4N8vpQBUDCSqHXzmPcyaMwr6Y'),
(53, 'ferinabayu@gmail.com', 'tLixeWVplhmIyTfqJD8O4CSFrawg9X3HPkQAGbn2ZK1Msu6vBo'),
(54, 'hakim2225saputra@gmail.com', 'XbNRsO0jytTfpzodilg5Vu3BcEDmwah2nGeZHYIWMLx18FAvJq'),
(55, 'hakim2225saputra@gmail.com', 'x96XWQU15ZavKryLBhI0Dz2soNmYOjVR8uwJMF4qHP3CpGflA7'),
(56, 'hakim2225saputra@gmail.com', '1GNMm794x3OUwAqJh2ZQeSfBHj8LYWTudgacRKk0IbvrFDpot5'),
(57, 'ferinabayu@gmail.com', 'PzYlpcX1s3w7IdbNt8oQU9ZOLC5kFvrVREgxjMJh0SqW4BGKfy'),
(58, 'ferinabayu@gmail.com', 'XsxnIWZYP5DNqE41hHFloj0Svt2aQVBKdwf83Ucie7gJrTM69G'),
(59, 'ferinabayu@gmail.com', 'TsEdBQPF16OyknoaMDigtwvY52fUClzJemNXH0bh8ALcVrISj7'),
(60, 'ferinabayu@gmail.com', 'MoLyOs4032PktVzwFdYjBNplxufWacZIQRHmKDi9Tg67Ge8hX5'),
(61, 'ferinabayu@gmail.com', '1CUZy0ztWMnRfgOvFAspGeH3To7N6Qh2XlVwjqumcLIx4aPBEr'),
(62, 'ferinabayu@gmail.com', 'qpTSM2cX5LWwn1zU3GKyAsHdBxC90DJ7IiEtY6RlOm4vjgkhNa'),
(63, 'ferinabayu@gmail.com', 'RAdFiabmX8prug1YTeH0ynwvM32UlB7z5oI6jWfNPOKs4VqSQk');

-- --------------------------------------------------------

--
-- Table structure for table `web_konten`
--

CREATE TABLE `web_konten` (
  `id_wk` varchar(20) NOT NULL,
  `judul_wk` varchar(150) NOT NULL,
  `id_ktg` int(11) NOT NULL,
  `isi_wk` varchar(60000) NOT NULL,
  `tgl_wk` date NOT NULL,
  `username_adm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_adm`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id_bdg`),
  ADD KEY `id_bdg` (`id_bdg`);

--
-- Indexes for table `data_alpa`
--
ALTER TABLE `data_alpa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `expired_poin`
--
ALTER TABLE `expired_poin`
  ADD PRIMARY KEY (`id_exp`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_ktg`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`idkomentar`),
  ADD KEY `nim_mhs` (`nim_mhs`);

--
-- Indexes for table `kompen`
--
ALTER TABLE `kompen`
  ADD PRIMARY KEY (`id_kmp`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `list_penukaran`
--
ALTER TABLE `list_penukaran`
  ADD PRIMARY KEY (`id_listP`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim_mhs`);

--
-- Indexes for table `mhs_konten`
--
ALTER TABLE `mhs_konten`
  ADD PRIMARY KEY (`id_mk`),
  ADD KEY `id_ktg` (`id_ktg`),
  ADD KEY `nim_mhs` (`nim_mhs`),
  ADD KEY `id_ktg_2` (`id_ktg`),
  ADD KEY `id_ktg_3` (`id_ktg`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD KEY `id_mk` (`id_mk`),
  ADD KEY `nim_mhs` (`nim_mhs`);

--
-- Indexes for table `notif_admin`
--
ALTER TABLE `notif_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penukaran`
--
ALTER TABLE `penukaran`
  ADD PRIMARY KEY (`id_penukaran`),
  ADD KEY `nim_mhs` (`nim_mhs`),
  ADD KEY `id_listP` (`id_listP`),
  ADD KEY `id_kmp` (`id_kmp`);

--
-- Indexes for table `poin_kompen`
--
ALTER TABLE `poin_kompen`
  ADD PRIMARY KEY (`id_kp`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indexes for table `req_reset`
--
ALTER TABLE `req_reset`
  ADD PRIMARY KEY (`id_req_reset`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `web_konten`
--
ALTER TABLE `web_konten`
  ADD PRIMARY KEY (`id_wk`),
  ADD KEY `username_adm` (`username_adm`),
  ADD KEY `id_ktg` (`id_ktg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id_bdg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expired_poin`
--
ALTER TABLE `expired_poin`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_ktg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `idkomentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `kompen`
--
ALTER TABLE `kompen`
  MODIFY `id_kmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `list_penukaran`
--
ALTER TABLE `list_penukaran`
  MODIFY `id_listP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notif_admin`
--
ALTER TABLE `notif_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `penukaran`
--
ALTER TABLE `penukaran`
  MODIFY `id_penukaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `poin_kompen`
--
ALTER TABLE `poin_kompen`
  MODIFY `id_kp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `req_reset`
--
ALTER TABLE `req_reset`
  MODIFY `id_req_reset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim_mhs`);

--
-- Constraints for table `mhs_konten`
--
ALTER TABLE `mhs_konten`
  ADD CONSTRAINT `mhs_konten_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim_mhs`),
  ADD CONSTRAINT `mhs_konten_ibfk_2` FOREIGN KEY (`id_ktg`) REFERENCES `kategori` (`id_ktg`);

--
-- Constraints for table `notif`
--
ALTER TABLE `notif`
  ADD CONSTRAINT `notif_ibfk_1` FOREIGN KEY (`id_mk`) REFERENCES `mhs_konten` (`id_mk`),
  ADD CONSTRAINT `notif_ibfk_2` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim_mhs`);

--
-- Constraints for table `penukaran`
--
ALTER TABLE `penukaran`
  ADD CONSTRAINT `penukaran_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim_mhs`),
  ADD CONSTRAINT `penukaran_ibfk_2` FOREIGN KEY (`id_listP`) REFERENCES `list_penukaran` (`id_listP`),
  ADD CONSTRAINT `penukaran_ibfk_3` FOREIGN KEY (`id_kmp`) REFERENCES `kompen` (`id_kmp`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`nim_mhs`);

--
-- Constraints for table `web_konten`
--
ALTER TABLE `web_konten`
  ADD CONSTRAINT `web_konten_ibfk_1` FOREIGN KEY (`id_ktg`) REFERENCES `kategori` (`id_ktg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
