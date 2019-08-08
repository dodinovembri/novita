-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 22.52
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_sample` int(11) UNSIGNED NOT NULL,
  `pegawai` varchar(20) NOT NULL,
  `kriteria` tinyint(3) UNSIGNED DEFAULT NULL,
  `nilai` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_sample`, `pegawai`, `kriteria`, `nilai`) VALUES
(1, '998', 1, 4),
(2, '998', 2, 2),
(3, '998', 3, 1),
(4, '998', 4, 2),
(5, '998', 5, 1),
(6, '998', 6, 1),
(7, '998', 7, 1),
(8, '998', 8, 1),
(9, '998', 9, 1),
(10, '998', 10, 1),
(11, '998', 11, 1),
(12, '998', 12, 1),
(13, '998', 13, 1),
(14, '998', 14, 1),
(15, '998', 15, 1),
(16, '998', 16, 2),
(17, '998', 17, 1),
(18, '998', 18, 1),
(19, '998', 19, 2),
(20, '998', 20, 1),
(21, '998', 21, 1),
(22, '998', 22, 1),
(23, '998', 23, 1),
(24, '998', 24, 1),
(25, '197403301997011022', 1, 3),
(26, '197403301997011022', 2, 1),
(27, '197403301997011022', 3, 1),
(28, '197403301997011022', 4, 5),
(29, '197403301997011022', 5, 2),
(30, '197403301997011022', 6, 5),
(31, '197403301997011022', 7, 4),
(32, '197403301997011022', 8, 4),
(33, '197403301997011022', 9, 4),
(34, '197403301997011022', 10, 4),
(35, '197403301997011022', 11, 4),
(36, '197403301997011022', 12, 4),
(37, '197403301997011022', 13, 4),
(38, '197403301997011022', 14, 4),
(39, '197403301997011022', 15, 4),
(40, '197403301997011022', 16, 4),
(41, '197403301997011022', 17, 4),
(42, '197403301997011021', 1, 1),
(43, '197403301997011021', 2, 2),
(44, '197403301997011021', 3, 1),
(45, '197403301997011021', 4, 4),
(46, '197403301997011021', 5, 1),
(47, '197403301997011021', 6, 4),
(48, '197403301997011021', 7, 3),
(49, '197403301997011021', 8, 4),
(50, '197403301997011021', 9, 2),
(51, '197403301997011021', 10, 4),
(52, '197403301997011021', 11, 3),
(53, '197403301997011021', 12, 3),
(54, '197403301997011021', 13, 4),
(55, '197403301997011021', 14, 5),
(56, '197403301997011021', 15, 5),
(57, '197403301997011021', 16, 4),
(58, '197403301997011021', 17, 5),
(59, '197403301997011022', 1, 3),
(60, '197403301997011022', 2, 2),
(61, '197403301997011022', 3, 3),
(62, '197403301997011022', 4, 3),
(63, '197403301997011022', 5, 3),
(64, '197403301997011022', 6, 2),
(65, '197403301997011022', 7, 4),
(66, '197403301997011022', 8, 3),
(67, '197403301997011022', 9, 2),
(68, '197403301997011022', 10, 3),
(69, '197403301997011022', 11, 3),
(70, '197403301997011022', 12, 1),
(71, '197403301997011022', 13, 2),
(72, '197403301997011022', 14, 3),
(73, '197403301997011022', 15, 3),
(74, '197403301997011022', 16, 3),
(75, '197403301997011022', 17, 4),
(76, '197403301997011023', 1, 5),
(77, '197403301997011023', 2, 4),
(78, '197403301997011023', 3, 4),
(79, '197403301997011023', 4, 5),
(80, '197403301997011023', 5, 5),
(81, '197403301997011023', 6, 5),
(82, '197403301997011023', 7, 5),
(83, '197403301997011023', 8, 5),
(84, '197403301997011023', 9, 4),
(85, '197403301997011023', 10, 5),
(86, '197403301997011023', 11, 5),
(87, '197403301997011023', 12, 5),
(88, '197403301997011023', 13, 5),
(89, '197403301997011023', 14, 5),
(90, '197403301997011023', 15, 5),
(91, '197403301997011023', 16, 5),
(92, '197403301997011023', 17, 5),
(93, '197403301997011100', 1, 3),
(94, '197403301997011100', 2, 3),
(95, '197403301997011100', 3, 1),
(96, '197403301997011100', 4, 4),
(97, '197403301997011100', 5, 1),
(98, '197403301997011100', 6, 1),
(99, '197403301997011100', 7, 1),
(100, '197403301997011100', 8, 3),
(101, '197403301997011100', 9, 3),
(102, '197403301997011100', 10, 5),
(103, '197403301997011100', 11, 3),
(104, '197403301997011100', 12, 4),
(105, '197403301997011100', 13, 3),
(106, '197403301997011100', 14, 4),
(107, '197403301997011100', 15, 4),
(108, '197403301997011100', 16, 4),
(109, '197403301997011100', 17, 4),
(110, '197403301997011101', 1, 1),
(111, '197403301997011101', 2, 1),
(112, '197403301997011101', 3, 1),
(113, '197403301997011101', 4, 5),
(114, '197403301997011101', 5, 1),
(115, '197403301997011101', 6, 1),
(116, '197403301997011101', 7, 2),
(117, '197403301997011101', 8, 1),
(118, '197403301997011101', 9, 2),
(119, '197403301997011101', 10, 3),
(120, '197403301997011101', 11, 4),
(121, '197403301997011101', 12, 5),
(122, '197403301997011101', 13, 3),
(123, '197403301997011101', 14, 4),
(124, '197403301997011101', 15, 4),
(125, '197403301997011101', 16, 4),
(126, '197403301997011101', 17, 5),
(127, '197403301997011001', 1, 3),
(128, '197403301997011001', 2, 1),
(129, '197403301997011001', 3, 1),
(130, '197403301997011001', 4, 5),
(131, '197403301997011001', 5, 3),
(132, '197403301997011001', 6, 5),
(133, '197403301997011001', 7, 4),
(134, '197403301997011001', 8, 4),
(135, '197403301997011001', 9, 4),
(136, '197403301997011001', 10, 4),
(137, '197403301997011001', 11, 4),
(138, '197403301997011001', 12, 4),
(139, '197403301997011001', 13, 4),
(140, '197403301997011001', 14, 4),
(141, '197403301997011001', 15, 4),
(142, '197403301997011001', 16, 4),
(143, '197403301997011001', 17, 4),
(144, '197510122006011017', 1, 4),
(145, '197510122006011017', 2, 1),
(146, '197510122006011017', 3, 1),
(147, '197510122006011017', 4, 5),
(148, '197510122006011017', 5, 3),
(149, '197510122006011017', 6, 4),
(150, '197510122006011017', 7, 3),
(151, '197510122006011017', 8, 3),
(152, '197510122006011017', 9, 4),
(153, '197510122006011017', 10, 4),
(154, '197510122006011017', 11, 3),
(155, '197510122006011017', 12, 3),
(156, '197510122006011017', 13, 3),
(157, '197510122006011017', 14, 4),
(158, '197510122006011017', 15, 4),
(159, '197510122006011017', 16, 4),
(160, '197510122006011017', 17, 4),
(161, '197601232010011012', 1, 4),
(162, '197601232010011012', 2, 1),
(163, '197601232010011012', 3, 1),
(164, '197601232010011012', 4, 5),
(165, '197601232010011012', 5, 3),
(166, '197601232010011012', 6, 3),
(167, '197601232010011012', 7, 3),
(168, '197601232010011012', 8, 3),
(169, '197601232010011012', 9, 4),
(170, '197601232010011012', 10, 4),
(171, '197601232010011012', 11, 4),
(172, '197601232010011012', 12, 3),
(173, '197601232010011012', 13, 4),
(174, '197601232010011012', 14, 3),
(175, '197601232010011012', 15, 4),
(176, '197601232010011012', 16, 4),
(177, '197601232010011012', 17, 4),
(178, '198006062006042011', 1, 4),
(179, '198006062006042011', 2, 1),
(180, '198006062006042011', 3, 1),
(181, '198006062006042011', 4, 5),
(182, '198006062006042011', 5, 2),
(183, '198006062006042011', 6, 4),
(184, '198006062006042011', 7, 3),
(185, '198006062006042011', 8, 4),
(186, '198006062006042011', 9, 4),
(187, '198006062006042011', 10, 3),
(188, '198006062006042011', 11, 4),
(189, '198006062006042011', 12, 3),
(190, '198006062006042011', 13, 4),
(191, '198006062006042011', 14, 3),
(192, '198006062006042011', 15, 4),
(193, '198006062006042011', 16, 4),
(194, '198006062006042011', 17, 4),
(195, '198008312005012013', 1, 5),
(196, '198008312005012013', 2, 2),
(197, '198008312005012013', 3, 3),
(198, '198008312005012013', 4, 5),
(199, '198008312005012013', 5, 2),
(200, '198008312005012013', 6, 4),
(201, '198008312005012013', 7, 4),
(202, '198008312005012013', 8, 4),
(203, '198008312005012013', 9, 3),
(204, '198008312005012013', 10, 4),
(205, '198008312005012013', 11, 4),
(206, '198008312005012013', 12, 4),
(207, '198008312005012013', 13, 3),
(208, '198008312005012013', 14, 3),
(209, '198008312005012013', 15, 3),
(210, '198008312005012013', 16, 4),
(211, '198008312005012013', 17, 4),
(212, '198103282010011016', 1, 5),
(213, '198103282010011016', 2, 2),
(214, '198103282010011016', 3, 3),
(215, '198103282010011016', 4, 5),
(216, '198103282010011016', 5, 2),
(217, '198103282010011016', 6, 3),
(218, '198103282010011016', 7, 4),
(219, '198103282010011016', 8, 3),
(220, '198103282010011016', 9, 4),
(221, '198103282010011016', 10, 4),
(222, '198103282010011016', 11, 3),
(223, '198103282010011016', 12, 3),
(224, '198103282010011016', 13, 3),
(225, '198103282010011016', 14, 4),
(226, '198103282010011016', 15, 3),
(227, '198103282010011016', 16, 4),
(228, '198103282010011016', 17, 4),
(229, '198108132010011016', 1, 5),
(230, '198108132010011016', 2, 2),
(231, '198108132010011016', 3, 3),
(232, '198108132010011016', 4, 5),
(233, '198108132010011016', 5, 2),
(234, '198108132010011016', 6, 3),
(235, '198108132010011016', 7, 4),
(236, '198108132010011016', 8, 4),
(237, '198108132010011016', 9, 4),
(238, '198108132010011016', 10, 4),
(239, '198108132010011016', 11, 4),
(240, '198108132010011016', 12, 3),
(241, '198108132010011016', 13, 3),
(242, '198108132010011016', 14, 4),
(243, '198108132010011016', 15, 4),
(244, '198108132010011016', 16, 4),
(245, '198108132010011016', 17, 4),
(246, '198206262010012016', 1, 3),
(247, '198206262010012016', 2, 1),
(248, '198206262010012016', 3, 1),
(249, '198206262010012016', 4, 5),
(250, '198206262010012016', 5, 1),
(251, '198206262010012016', 6, 3),
(252, '198206262010012016', 7, 4),
(253, '198206262010012016', 8, 3),
(254, '198206262010012016', 9, 4),
(255, '198206262010012016', 10, 3),
(256, '198206262010012016', 11, 4),
(257, '198206262010012016', 12, 4),
(258, '198206262010012016', 13, 3),
(259, '198206262010012016', 14, 4),
(260, '198206262010012016', 15, 4),
(261, '198206262010012016', 16, 4),
(262, '198206262010012016', 17, 4),
(263, '198404282009022003', 1, 5),
(264, '198404282009022003', 2, 2),
(265, '198404282009022003', 3, 3),
(266, '198404282009022003', 4, 5),
(267, '198404282009022003', 5, 1),
(268, '198404282009022003', 6, 3),
(269, '198404282009022003', 7, 3),
(270, '198404282009022003', 8, 4),
(271, '198404282009022003', 9, 3),
(272, '198404282009022003', 10, 4),
(273, '198404282009022003', 11, 4),
(274, '198404282009022003', 12, 4),
(275, '198404282009022003', 13, 4),
(276, '198404282009022003', 14, 4),
(277, '198404282009022003', 15, 4),
(278, '198404282009022003', 16, 4),
(279, '198404282009022003', 17, 4),
(280, '198412272007011003', 1, 3),
(281, '198412272007011003', 2, 1),
(282, '198412272007011003', 3, 1),
(283, '198412272007011003', 4, 5),
(284, '198412272007011003', 5, 1),
(285, '198412272007011003', 6, 4),
(286, '198412272007011003', 7, 4),
(287, '198412272007011003', 8, 4),
(288, '198412272007011003', 9, 3),
(289, '198412272007011003', 10, 4),
(290, '198412272007011003', 11, 4),
(291, '198412272007011003', 12, 4),
(292, '198412272007011003', 13, 3),
(293, '198412272007011003', 14, 3),
(294, '198412272007011003', 15, 3),
(295, '198412272007011003', 16, 4),
(296, '198412272007011003', 17, 4),
(297, '198501242007012004', 1, 3),
(298, '198501242007012004', 2, 1),
(299, '198501242007012004', 3, 1),
(300, '198501242007012004', 4, 5),
(301, '198501242007012004', 5, 1),
(302, '198501242007012004', 6, 4),
(303, '198501242007012004', 7, 4),
(304, '198501242007012004', 8, 4),
(305, '198501242007012004', 9, 4),
(306, '198501242007012004', 10, 4),
(307, '198501242007012004', 11, 4),
(308, '198501242007012004', 12, 3),
(309, '198501242007012004', 13, 4),
(310, '198501242007012004', 14, 4),
(311, '198501242007012004', 15, 4),
(312, '198501242007012004', 16, 4),
(313, '198501242007012004', 17, 4),
(314, '197403301997011001', 1, 2),
(315, '197403301997011001', 2, 1),
(316, '197403301997011001', 3, 1),
(317, '197403301997011001', 4, 2),
(318, '197403301997011001', 5, 1),
(319, '197403301997011001', 6, 2),
(320, '197403301997011001', 7, 2),
(321, '197403301997011001', 8, 3),
(322, '197403301997011001', 9, 2),
(323, '197403301997011001', 10, 1),
(324, '197403301997011001', 11, 1),
(325, '197403301997011001', 12, 3),
(326, '197403301997011001', 13, 3),
(327, '197403301997011001', 14, 2),
(328, '197403301997011001', 15, 2),
(329, '197403301997011001', 16, 3),
(330, '197403301997011001', 17, 2),
(331, '1111', 1, 3),
(332, '1111', 2, 2),
(333, '1111', 3, 2),
(334, '1111', 4, 2),
(335, '1111', 5, 2),
(336, '1111', 6, 1),
(337, '1111', 7, 1),
(338, '1111', 8, 2),
(339, '1111', 9, 1),
(340, '1111', 10, 1),
(341, '1111', 11, 2),
(342, '1111', 12, 1),
(343, '1111', 13, 1),
(344, '1111', 14, 1),
(345, '1111', 15, 2),
(346, '1111', 16, 1),
(347, '1111', 17, 1),
(348, '998', 1, 4),
(349, '998', 2, 1),
(350, '998', 3, 2),
(351, '998', 4, 1),
(352, '998', 5, 1),
(353, '998', 6, 2),
(354, '998', 7, 2),
(355, '998', 8, 1),
(356, '998', 9, 3),
(357, '998', 10, 1),
(358, '998', 11, 3),
(359, '998', 12, 1),
(360, '998', 13, 1),
(361, '998', 14, 1),
(362, '998', 15, 2),
(363, '998', 16, 1),
(364, '998', 17, 2),
(365, '1515', 1, 3),
(366, '1515', 2, 2),
(367, '1515', 3, 1),
(368, '1515', 4, 1),
(369, '1515', 5, 2),
(370, '1515', 6, 1),
(371, '1515', 7, 1),
(372, '1515', 8, 1),
(373, '1515', 9, 1),
(374, '1515', 10, 2),
(375, '1515', 11, 1),
(376, '1515', 12, 1),
(377, '1515', 13, 1),
(378, '1515', 14, 1),
(379, '1515', 15, 2),
(380, '1515', 16, 1),
(381, '1515', 17, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspek`
--

CREATE TABLE `aspek` (
  `id_aspek` tinyint(3) UNSIGNED NOT NULL,
  `nama_aspek` varchar(100) NOT NULL,
  `bobot` float NOT NULL,
  `bobot_core` float NOT NULL,
  `bobot_secondary` float NOT NULL,
  `nama_singkat` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aspek`
--

INSERT INTO `aspek` (`id_aspek`, `nama_aspek`, `bobot`, `bobot_core`, `bobot_secondary`, `nama_singkat`) VALUES
(1, 'Kompetensi Teknis', 40, 60, 40, 'KT'),
(2, 'Kompetensi Manajerial', 40, 60, 40, 'KM'),
(3, 'Kompetensi Sosial Kultural', 20, 60, 40, 'KS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `selisih` tinyint(3) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`selisih`, `bobot`, `keterangan`) VALUES
(-4, 1, 'Kompetensi individu kurang 4 tingkat/level'),
(-3, 2, 'Kompetensi individu kurang 3 tingkat/level'),
(-2, 3, 'Kompetensi individu kurang 2 tingkat/level'),
(-1, 4, 'Kompetensi individu kurang 1 tingkat/level'),
(0, 5, 'Kompetensi sesuai dengan yang dibutuhkan'),
(1, 4.5, 'Kompetensi individu kelebihan 1 tingkat/level'),
(2, 3.5, 'Kompetensi individu kelebihan 2 tingkat/level'),
(3, 2.5, 'Kompetensi individu kelebihan 3 tingkat/level'),
(4, 1.5, 'Kompetensi individu kelebihan 4 tingkat/level');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) UNSIGNED NOT NULL,
  `aspek` tinyint(3) UNSIGNED NOT NULL COMMENT 'FK tbl_aspek',
  `nama_kriteria` varchar(60) NOT NULL,
  `target` int(3) NOT NULL,
  `jenis` enum('1','2') DEFAULT NULL COMMENT '1=Core;2=Secondary'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `aspek`, `nama_kriteria`, `target`, `jenis`) VALUES
(1, 1, 'Diklat Teknis', 3, '1'),
(2, 1, 'Diklat PIM', 2, '1'),
(3, 1, 'Pengalaman Jabatan', 3, '1'),
(4, 1, 'Hukuman Disiplin', 5, '1'),
(5, 1, 'Usia', 3, '2'),
(6, 1, 'Lama Bekerja', 5, '2'),
(7, 2, 'Integritas', 4, '1'),
(8, 2, 'Kerja Sama', 4, '1'),
(9, 2, 'Komunikasi', 4, '1'),
(10, 2, 'Orientasi pada Hasil', 4, '2'),
(11, 2, 'Pelayanan Publik', 4, '1'),
(12, 2, 'Pengembangan Diri dan Orang Lain', 4, '2'),
(13, 2, 'Mengelola Perubahan', 4, '2'),
(14, 2, 'Pengambilan Keputusan', 4, '1'),
(15, 3, 'Perekat Bangsa', 4, '1'),
(16, 3, 'Empati', 4, '1'),
(17, 3, 'Interaksi Sosial', 4, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat_golongan`
--

CREATE TABLE `pangkat_golongan` (
  `kode_pangkat` varchar(50) NOT NULL,
  `nama_pangkat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat_golongan`
--

INSERT INTO `pangkat_golongan` (`kode_pangkat`, `nama_pangkat`) VALUES
('11', 'Juru Muda (I/a)'),
('12', 'Juru Muda Tingkat I (I/b)'),
('13', 'Juru (I/c)'),
('14', 'Juru Tingkat I (I/d)'),
('21', 'Pengatur Muda (II/a)'),
('22', 'Pengatur Muda Tingkat I (II/b)'),
('23', 'Pengatur (II/c)'),
('24', 'Pengatur Tingkat I (II/d)'),
('31', 'Penata Muda (III/a)'),
('32', 'Penata Muda Tingkat I (III/b)'),
('33', 'Penata (III/c)'),
('34', 'Penata Tingkat I (III/d)'),
('41', 'Pembina (IV/a)'),
('42', 'Pembina Tingkat I (IV/b)'),
('43', 'Pembina Utama Muda (IV/c)'),
('44', 'Pembina Utama Madya (IV/d)'),
('45', 'Pembina Utama (IV/e)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat_pendidikan`
--

CREATE TABLE `pangkat_pendidikan` (
  `id_pegawai` varchar(30) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat_pendidikan`
--

INSERT INTO `pangkat_pendidikan` (`id_pegawai`, `pangkat`, `pendidikan`) VALUES
('009', '44', '5'),
('1111', '43', '6'),
('1313', '43', '5'),
('1515', '43', '5'),
('197403301997011001', '34', '4'),
('197510122006011017', '34', '4'),
('197601232010011012', '34', '4'),
('197901152006012010', '32', '4'),
('197903262005072001', '33', '4'),
('198006022009012015', '33', '4'),
('198006062006042011', '34', '4'),
('198008312005012013', '34', '4'),
('198103282010011016', '34', '4'),
('198108132010011016', '34', '5'),
('198108232006022006', '33', '4'),
('198206262010012016', '34', '4'),
('198404282009022003', '34', '5'),
('198406162010012020', '33', '5'),
('198410302009021001', '32', '4'),
('198412272007011003', '34', '4'),
('198501242007012004', '34', '4'),
('198507182007011023', '32', '4'),
('198608052010011011', '32', '4'),
('198706012011012008', '33', '4'),
('998', '43', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `nama_jabatan` varchar(40) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('','L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `instansi_kerja` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `file_biodata` varchar(120) NOT NULL,
  `status` enum('belum','sudah','terima','tolak','acc_admin','after_upload') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jabatan`, `nama_jabatan`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `unit_kerja`, `instansi_kerja`, `alamat`, `file_biodata`, `status`) VALUES
('009', 'DOD', 'Struktural', 'qw', 'qw', '2019-07-15', 'L', 'islam', 'qw', 'qw', 'qw', 'logo.png', 'belum'),
('1111', 'qw', 'Struktural', 'qw', 'qw', '2019-07-11', 'L', 'islam', 'qw', 'qw', 'qw', 'logo.JPG', 'sudah'),
('1313', 'lkp', 'Struktural', 'dfg', 'qw', '2019-07-08', 'L', 'islam', 'qw', 'qw', 'qw', '', 'sudah'),
('1515', 'sdf', 'Struktural', 'sdf', 'sdsd', '2019-07-09', 'L', 'islam', 'qw', 'qw', 'qw', '', 'sudah'),
('197403301997011001', 'Waluyo Sugito, S.E.', 'Fungsional', 'Staf/Pelaksana', 'Palembang', '1974-03-30', 'L', 'Islam', 'Bidang Mutasi Dan Promosi', 'Pemerintah Kabupaten Banyuasin', 'Jalan Lingkar Perkantoran Banyuasin Rt 038 Rw 008 Kelurahan Pangkalan Balai Kecamatan', '2.jpg', 'sudah'),
('197510122006011017', 'Lahmad, SE', 'Fungsional', 'Staf/Pelaksana', 'Musi Banyuasin', '1975-10-12', 'L', 'Islam', 'Sub Bidang Pendidikan Dan Pelatihan Penjenjangan, Sertifikasi Dan Pengembangan Kompetensi', 'Pemerintah Kabupaten Banyuasin', 'Pelajau Rt.01 Rw.01 Kec. Banyuasin III', '', 'sudah'),
('197601232010011012', 'Mohd.Faisal Ariyadinata, SE', 'Struktural', 'Kepala Sub Bidang Pendidikan Dan Pelatih', 'Ogan Komering Ulu', '1976-01-23', 'L', 'Islam', 'Sub Bidang Pendidikan Dan Pelatihan Penjenjangan, Sertifikasi Dan Pengembangan Kompetensi', 'Pemerintah Kabupaten Banyuasin', 'Jl. Kasnariansyah Lorong Beringin 2 No 23 Rt 21/07 Kel 20 Ilir. Div Palembang', '', 'sudah'),
('197901152006012010', 'Febi Nopita, S.sos', 'Fungsional', 'Staf/Pelaksana', 'Palembang', '1979-01-15', 'P', 'Islam', 'Sub Bidang Pengadaan Dan Pemberhentian', 'Pemerintah Kabupaten Banyuasin', 'Jalan Pmd No.117 Kecamatan Sukarami Palembang', '', 'sudah'),
('197903262005072001', 'Auliya Fitri Rasuanty, S.STP', 'Fungsional', 'Analis Kebijakan Kesatuan Bangsa Dan Pol', 'Palembang', '1979-03-26', 'P', 'Islam', 'BKPSDM Pemerintah Kabupaten Banyuasin', 'Pemerintah Kabupaten Banyuasin', 'Komplek Kelapa Gading A.1 Rt 034 Rw 010 Kel. Karya Baru Kec.Alang-Alang Lebar', '', 'belum'),
('198006022009012015', 'Siti Ayu Amalia, SH', 'Struktural', 'Kepala Sub Bidang Fasilitasi Profesi Asn', 'Palembang', '1980-06-02', 'P', 'Islam', 'Sub Bidang Fasilitasi Profesi ASN Disiplin Dan Penghargaan', 'Pemerintah Kabupaten Banyuasin', 'Jl. Perpetak 1 Lr. Anggrek II No. 103 A Rt. 025 Rw. 005 Kel. Bukit Sangkal Kec. Kalidoni Palembang', '', 'belum'),
('198006062006042011', 'Yuni Rumanti, S.E', 'Fungsional', 'Staf/Pelaksana', 'Klaten', '1980-06-06', 'P', 'Islam', 'Sekretariat', 'Pemerintah Kabupaten Banyuasin', 'Pondok Palem Indah Blok G.2 No.17 Rt/Rw 075/019 Kel.Talang Kelapa Kec.Alang-Alang Lebar', '', 'sudah'),
('198008312005012013', 'Nurwidayati, SE', 'Struktural', 'Kepala Sub Bagian Keuangan Dan Aset', 'Palembang', '1980-08-31', 'P', 'Islam', 'Sekretariat', 'Pemerintah Kabupaten Banyuasin', 'JL.SWADAYA II LR.PERSATUAN III NO.2887 PALEMBANG', '', 'sudah'),
('198103282010011016', 'Muhammad Sofyan, S.Kom', 'Struktural', 'Kepala Sub Bidang Bidang Mutasi', 'Palembang', '1981-03-28', 'L', 'Islam', 'Sub Bidang Bidang Mutasi', 'Pemerintah Kabupaten Banyuasin', 'Jl. Padat Karya Perum Griya Srimulya Blok G No. 19 Rt. 28 Rw. 05 Kel. Srimulya Kec. Sematang', '', 'sudah'),
('198108132010011016', 'Irawansyah, SH,.MH', 'Struktural', 'Kepala Sub Bidang Penjenjangan, Sertifik', 'Banyuasin', '1981-08-13', 'L', 'Islam', 'Sub Bidang Data Dan Informasi', 'Pemerintah Kabupaten Banyuasin', 'Rt. 09 Rw. 03 Dusun III Desa Lubuk Karet Kecamatan Betung Kabupaten Banyuasin', '', 'sudah'),
('198108232006022006', 'Indah Permata, S.E', 'Fungsional', 'Penata Laporan Keuangan', 'Palembang', '1981-08-23', 'P', 'Islam', 'BKPSDM Pemerintah Kab.Banyuasin', 'Pemerintah Kabupaten Banyuasin', 'Komplek Azhar Blok R 1 Nomor 3 Rt 032 Kel.Kenten Kec. Talang Kelapa', '', 'belum'),
('198206262010012016', 'Yuni Rahmasari, S.Kom', 'Fungsional', 'Instruktur Pendidikan Dan Latihan', 'Musi Banyuasin', '1982-06-26', 'P', 'Islam', 'Sub Bidang Diklat Teknis Fungsional', 'Pemerintah Kabupaten Banyuasin', 'Jalan Mualana No.14 Rt.10 Rw.04 Kel Pangkalan Balai Kec. Banyuasin III', '', 'sudah'),
('198404282009022003', 'Hellen Hefriany, S.Kom,.M.Si', 'Struktural', 'Kepala Sub Bagian Umum, Kepegawaian Dan ', 'Palembang', '1984-04-28', 'P', 'Islam', 'Sekretariat', 'Pemerintah Kabupaten Banyuasin', 'Jl. Seruni Lr. Kebun Rata Rt.03 Rw. 01 No. 202 Kelurahan Bukit Lama Kec. Ilir Barat 1', '', 'sudah'),
('198406162010012020', 'Yunita Nuzullina, SE,.MM', 'Fungsional', 'Analis Kepegawaian', 'Palembang', '1984-06-16', 'P', 'Islam', 'Sub Bidang Diklat Teknis Fungsional', 'Pemerintah Kabupaten Banyuasin', 'Jl.D.1 Panjaitan Lr.Gunter No-34 Kel.16 ulu Kec.Plaju -Palembang', '', 'belum'),
('198410302009021001', 'Ferryadi, S.E.', 'Fungsional', 'Analis Sumber Daya Manusia Aparatur', 'Musi Banyuasin', '1984-10-30', 'L', 'Islam', 'BKPSDM Pemerintah Kabupaten Banyuasin', 'Pemerintah Kabupaten Banyuasin', 'Jl. Sekayu-Sukarami Rt.016 Rw.005 Kel. Balai Agung Kec. Sekayu', '', 'belum'),
('198412272007011003', 'Ade Alberto, S.IP', 'Fungsional', 'Fungsional Umum', 'Musi Rawas', '1984-12-27', 'L', 'Islam', 'Sub Bagian Umum, Kepegawaian Dan Perencanaan', 'Pemerintah Kabupaten Banyuasin', 'Jalan Thalib Wali Rt 014 Rw 007 Kelurahan Pangkalan Balai Kecamatan Banyuasin III', '', 'sudah'),
('198501242007012004', 'Eka Jayanti, S.I.Kom', 'Fungsional', 'Staf/Pelaksana', 'Palembang', '1985-01-24', 'P', 'Islam', 'Sub Bidang Fasilitasi Profesi ASN Disiplin Dan Penghargaan', 'Pemerintah Kabupaten Banyuasin', 'Jl Jendral Sudirman Lr H. Azis No 1683', '', 'sudah'),
('198507182007011023', 'Irhamni, SE', 'Fungsional', 'Staf Administrasi', 'Musi Banyuasin', '1985-07-18', 'L', 'Islam', 'Sub Bidang Mutasi Pegawai', 'Pemerintah Kabupaten Banyuasin', 'Jl. Cahaya Berlian Rt.29 Rw.08 Pangkalan Balai Kab. Banyuasin', '', 'belum'),
('198608052010011011', 'Fenta Agneswin, SE', 'Fungsional', 'Verifikator Keuangan', 'Palembang', '1986-08-05', 'P', 'Islam', 'Bidang Pendidikan Dan Latihan', 'Pemerintah Kabupaten Banyuasin', 'Jl.Lukman Idris Lrg.Johar No.1679 Rt.13', '', 'belum'),
('198706012011012008', 'Nuniek Sufitrianingsih, S.IP', 'Struktural', 'Kepala Sub Bidang Pengembangan Karier Da', 'Palembang', '1987-06-01', 'P', 'Islam', 'Sub Bidang Pengembangan Karier Dan Promosi', 'Pemerintah Kabupaten Banyuasin', 'Jl. Rimba Kemuning No. 114/1397 Rt. 024 Rw.003 Kel. Ario Kemuning Kec. Kemuning Kota', '', 'belum'),
('998', 'Dodi N', 'Struktural', 'MMM', 'MSN', '2019-07-15', 'L', 'islam', 'qw', 'qw', 'qw', 'logo.png', 'sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` varchar(11) NOT NULL,
  `pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `pendidikan`) VALUES
('1', 'SD'),
('2', 'SMP Sederajat'),
('3', 'SMA Sederajat'),
('4', 'Sarjana'),
('5', 'Magister'),
('6', 'Doctor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(3) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'pegawai'),
(2, 'pimpinan'),
(3, 'bkd'),
(4, 'baperjakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `nama`, `photo`, `password`, `role`) VALUES
('009', '', '', 'dc82a0e0107a31ba5d137a47ab09a26b', 1),
('1111', '', 'logo.JPG', '6512bd43d9caa6e02c990b0a82652dca', 1),
('1313', '', '', 'dc82a0e0107a31ba5d137a47ab09a26b', 1),
('1515', '', '', 'dc82a0e0107a31ba5d137a47ab09a26b', 1),
('197403301997011001', '', '2.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('197510122006011017', '', '2.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('197601232010011012', '', '2.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('197901152006012010', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('197903262005072001', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198006022009012015', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198006062006042011', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198008312005012013', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198103282010011016', '', '2.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198108132010011016', '', '2.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198108232006022006', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198206262010012016', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198404282009022003', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198406162010012020', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198410302009021001', '', '2.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198412272007011003', '', '2.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198501242007012004', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198507182007011023', '', '2.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198608052010011011', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('198706012011012008', '', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 1),
('998', '', '', 'dc82a0e0107a31ba5d137a47ab09a26b', 1),
('BAPERJAKAT', 'BAPERJAKAT', '2.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 4),
('BKD', 'BKD', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 3),
('PIMPINAN', 'PIMPINAN', '1.jpg', '832f72b7a13b2cedcfb108603a10e2a6', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_sample`);

--
-- Indeks untuk tabel `aspek`
--
ALTER TABLE `aspek`
  ADD PRIMARY KEY (`id_aspek`);

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`selisih`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `pangkat_golongan`
--
ALTER TABLE `pangkat_golongan`
  ADD PRIMARY KEY (`kode_pangkat`);

--
-- Indeks untuk tabel `pangkat_pendidikan`
--
ALTER TABLE `pangkat_pendidikan`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `pangkat` (`pangkat`),
  ADD KEY `pendidikan` (`pendidikan`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_sample` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT untuk tabel `aspek`
--
ALTER TABLE `aspek`
  MODIFY `id_aspek` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pangkat_pendidikan`
--
ALTER TABLE `pangkat_pendidikan`
  ADD CONSTRAINT `pangkat_pendidikan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `pangkat_pendidikan_ibfk_2` FOREIGN KEY (`pangkat`) REFERENCES `pangkat_golongan` (`kode_pangkat`),
  ADD CONSTRAINT `pangkat_pendidikan_ibfk_3` FOREIGN KEY (`pendidikan`) REFERENCES `pendidikan` (`id_pendidikan`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
