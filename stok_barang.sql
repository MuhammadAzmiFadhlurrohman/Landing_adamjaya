
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_barang`
--

CREATE TABLE `stok_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `jumlah` int(11) DEFAULT 0,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `stok_barang`
--

INSERT INTO `stok_barang` (`id`, `nama_barang`, `jumlah`, `gambar`, `created_at`) VALUES
(74, 'Jangka', 0, 'uploads/barang/barang_1786273801_993.webp', '2026-08-09 17:17:00'),
(122, 'Bebedogan', 0, 'uploads/barang/barang_1786273375_654.webp', '2026-08-09 17:17:00'),
(137, 'BLOWER', 0, 'uploads/barang/barang_1786273573_958.webp', '2026-08-09 17:17:00'),
(140, 'Tahang steinlest', 0, 'uploads/barang/barang_1786274933_793.webp', '2026-08-09 17:17:00'),
(147, 'Tangok stenlis', 0, 'uploads/barang/barang_1786274960_275.webp', '2026-08-09 17:17:00'),
(152, 'Sendok Aci', 0, 'uploads/barang/barang_1786274874_438.webp', '2026-08-09 17:17:00'),
(155, 'Mesin giling kedele', 0, 'uploads/barang/barang_1786274743_688.webp', '2026-08-09 17:17:00'),
(165, 'Cucuntik', 0, 'uploads/barang/barang_1786273675_101.webp', '2026-08-09 17:17:00'),
(166, 'Batu Gilingan', 0, 'uploads/barang/barang_1786273522_191.webp', '2026-08-09 17:17:00'),
(171, 'kain peresan', 0, 'uploads/barang/barang_1786273963_921.webp', '2026-08-09 17:17:00'),
(180, 'Plat Takus', 0, NULL, '2026-08-09 17:17:00'),
(189, 'plat takus stanles', 0, NULL, '2026-08-09 17:17:00'),
(194, 'Pully', 0, NULL, '2026-08-09 17:17:00'),
(195, 'Kipas Spiral', 0, 'uploads/barang/barang_1786274278_603.webp', '2026-08-09 17:17:00'),
(199, 'Kain Batis', 0, 'uploads/barang/barang_1786273935_722.webp', '2026-08-09 17:17:00'),
(200, 'Mesin Giling Kunyit', 0, 'uploads/barang/barang_1786274797_995.webp', '2026-08-09 17:17:00'),
(204, 'Kancah', 0, 'uploads/barang/barang_1786274118_287.webp', '2026-08-09 17:17:00'),
(213, 'Mesin Pemcah Kulit ari kedelai', 0, 'uploads/barang/barang_1786274834_839.webp', '2026-08-09 17:17:00'),
(214, 'Tangok awi/bambu D90', 0, NULL, '2026-08-09 17:17:00'),
(216, 'kompor semawar', 0, 'uploads/barang/barang_1786274309_180.webp', '2026-08-09 17:17:00'),
(219, 'AS', 0, 'uploads/barang/barang_1786273230_102.webp', '2026-08-09 17:17:00'),
(223, 'Katel Jubung', 0, 'uploads/barang/barang_1786274148_672.webp', '2026-08-09 17:17:00'),
(225, 'Jidar Alumunium', 0, 'uploads/barang/barang_1786273831_155.webp', '2026-08-09 17:17:00'),
(231, 'Batu Api', 0, 'uploads/barang/barang_1786273460_576.webp', '2026-08-09 17:17:00'),
(232, 'Serok', 0, 'uploads/barang/barang_1786274901_750.webp', '2026-08-09 17:17:00'),
(235, 'Ayakan', 0, 'uploads/barang/barang_1786273271_433.webp', '2026-08-09 17:17:00'),
(240, 'Kain Takus', 0, 'uploads/barang/barang_1786274051_366.webp', '2026-08-09 17:17:00'),
(241, 'Sasag', 0, NULL, '2026-08-09 17:17:00'),
(244, 'Tampir', 0, NULL, '2026-08-09 17:17:00'),
(245, 'Bering Pilow Blok', 0, 'uploads/barang/barang_1786273545_664.webp', '2026-08-09 17:17:00'),
(248, 'papan citak biasa jati *', 0, NULL, '2026-08-09 17:17:00'),
(252, 'papan citak takus jati', 0, NULL, '2026-08-09 17:17:00'),
(253, 'papan citak biasa pinus', 0, NULL, '2026-08-09 17:17:00'),
(254, 'papan citak takus pinus', 0, NULL, '2026-08-09 17:17:00'),
(255, 'tutup jati', 0, NULL, '2026-08-09 17:17:00'),
(256, 'tutup pinus', 0, NULL, '2026-08-09 17:17:00'),
(264, 'slinder', 0, NULL, '2026-08-09 17:17:00'),
(265, 'Baut', 0, NULL, '2026-08-09 17:17:00'),
(267, 'soda api', 0, NULL, '2026-08-09 17:17:00'),
(268, 'Box Biru', 0, 'uploads/barang/barang_1786273648_949.webp', '2026-08-09 17:17:00'),
(270, 'Bak Stenless', 0, NULL, '2026-08-09 17:17:00'),
(273, 'Ongkos', 0, NULL, '2026-08-09 17:17:00'),
(277, 'Plastik Tahu Sifa', 0, NULL, '2026-08-09 17:17:00'),
(278, 'Plastik Tahu NR', 0, NULL, '2026-08-09 17:17:00'),
(279, 'Plastik Tahu THT', 0, NULL, '2026-08-09 17:17:00'),
(280, 'Plastik Tahu Cita rasa', 0, NULL, '2026-08-09 17:17:00'),
(281, 'Plastik Tahu DNR', 0, NULL, '2026-08-09 17:17:00'),
(282, 'Plastik Tahu IKS', 0, NULL, '2026-08-09 17:17:00'),
(283, 'Plastik Tahu Idola', 0, NULL, '2026-08-09 17:17:00'),
(284, 'Plastik Tahu PD Annisa', 0, NULL, '2026-08-09 17:17:00'),
(285, 'Plastik Tahu Adzkiya', 0, NULL, '2026-08-09 17:17:00'),
(286, 'Plastik Tahu AK Lembang', 0, NULL, '2026-08-09 17:17:00'),
(287, 'Plastik Tahu FF', 0, NULL, '2026-08-09 17:17:00'),
(288, 'Plastik Tahu Sutra AI', 0, NULL, '2026-08-09 17:17:00'),
(289, 'Plastik Tahu Mustika', 0, NULL, '2026-08-09 17:17:00'),
(290, 'Plastik Tahu TB', 0, NULL, '2026-08-09 17:17:00'),
(291, 'Plastik Tahu NN', 0, NULL, '2026-08-09 17:17:00'),
(292, 'Plastik Tahu RD', 0, NULL, '2026-08-09 17:17:00'),
(293, 'Plastik Tahu NJA', 0, NULL, '2026-08-09 17:17:00'),
(294, 'Plastik Tahu ADN', 0, NULL, '2026-08-09 17:17:00'),
(295, 'Plastik Tahu SKF', 0, NULL, '2026-08-09 17:17:00'),
(296, 'Plastik Tahu DSF', 0, NULL, '2026-08-09 17:17:00'),
(297, 'Plastik tempe HD', 0, NULL, '2026-08-09 17:17:00'),
(298, 'Plastik Tahu DY', 0, NULL, '2026-08-09 17:17:00'),
(299, 'Plastik Tahu Eka Jaya', 0, NULL, '2026-08-09 17:17:00'),
(300, 'Plastik tahu SBM', 0, NULL, '2026-08-09 17:17:00'),
(301, 'Plastik tahu AGS', 0, NULL, '2026-08-09 17:17:00'),
(302, 'Plastik Tahu Ponti', 0, NULL, '2026-08-09 17:17:00'),
(303, 'Plastik Tahu Soybean', 0, NULL, '2026-08-09 17:17:00'),
(304, 'Plastik Tahu Qeju DS', 0, NULL, '2026-08-09 17:17:00'),
(305, 'Plastik sutra AKS', 0, NULL, '2026-08-09 17:17:00'),
(306, 'Plastik Tahu Special HM', 0, NULL, '2026-08-09 17:17:00'),
(307, 'Plastik Tahu Syehan HS', 0, NULL, '2026-08-09 17:17:00'),
(308, 'Plastik Tahu Amanda', 0, NULL, '2026-08-09 17:17:00'),
(309, 'Plastik Tahu DD', 0, NULL, '2026-08-09 17:17:00'),
(310, 'Plasti Bandung CR', 0, NULL, '2026-08-09 17:17:00'),
(311, 'Plastik Tahu Super', 0, NULL, '2026-08-09 17:17:00'),
(313, 'Plastik Qeju AS Premium', 0, NULL, '2026-08-09 17:17:00'),
(314, 'Plastik Tahu Asifa', 0, NULL, '2026-08-09 17:17:00'),
(315, 'Plastik tahu Mekarjaya', 0, NULL, '2026-08-09 17:17:00'),
(316, 'Plastik Qeju AA Berkah', 0, NULL, '2026-08-09 17:17:00'),
(317, 'Plastik Tahu Laksana', 0, NULL, '2026-08-09 17:17:00'),
(318, 'Plastik MD Medong', 0, NULL, '2026-08-09 17:17:00'),
(319, 'Plastik Kuning Bintang', 0, NULL, '2026-08-09 17:17:00'),
(320, 'Plastik MA Onoh', 0, NULL, '2026-08-09 17:17:00'),
(321, 'Plastik Bintang Dimastira', 0, NULL, '2026-08-09 17:17:00'),
(322, 'Centong Tahu', 0, NULL, '2026-08-09 17:17:00'),
(323, 'Plastik Tahu PMJ', 0, NULL, '2026-08-09 17:17:00'),
(324, 'Plastik Tahu ZIM’s Holis', 0, NULL, '2026-08-09 17:17:00'),
(328, 'Packing', 0, NULL, '2026-08-09 17:17:00'),
(329, 'Plastik Tahu susu RA', 0, NULL, '2026-08-09 17:17:00'),
(337, 'Plastik i love tahu', 0, NULL, '2026-08-09 17:17:00'),
(338, 'plastik nd jempol', 0, NULL, '2026-08-09 17:17:00'),
(341, 'Service dinamo', 0, NULL, '2026-08-09 17:17:00'),
(343, 'Tong biru untuk Air', 0, NULL, '2026-08-09 17:17:00'),
(344, 'Pipa SS 2in 1,5 meter', 0, NULL, '2026-08-09 17:17:00'),
(345, 'Plastik tahu Citra', 0, NULL, '2026-08-09 17:17:00'),
(346, 'Plastik SMB merah 16x35', 0, NULL, '2026-08-09 17:17:00'),
(348, 'Plastik Ex jaya bogor', 0, NULL, '2026-08-09 17:17:00'),
(350, 'tes', 0, NULL, '2026-08-09 17:17:00'),
(355, 'Mesin sedot aci', 0, NULL, '2026-08-09 17:17:00'),
(356, 'Plastik MMP', 0, NULL, '2026-08-09 17:17:00'),
(357, 'Tes 22', 0, NULL, '2026-08-09 17:17:00'),
(358, 'Plastik Tahu Super 3 Daun', 0, NULL, '2026-08-09 17:17:00'),
(359, 'Tahu Qeju LS', 0, NULL, '2026-08-09 17:17:00'),
(360, 'Plastik Tahu DJ Barokah', 0, NULL, '2026-08-09 17:17:00'),
(361, 'Plastik Pa Dudu', 0, NULL, '2026-08-09 17:17:00'),
(362, 'Plastik SHD', 0, NULL, '2026-08-09 17:17:00'),
(364, 'Mesin giling kedelai pak ukat', 0, 'uploads/barang/barang_1786274451_940.webp', '2026-08-09 17:17:00'),
(365, 'Katel saja', 0, 'uploads/barang/barang_1786274236_240.webp', '2026-08-09 17:17:00'),
(368, 'Plastik putra mandiri', 0, NULL, '2026-08-14 11:46:02'),
(369, 'M 28,9 16cm', 0, NULL, '2026-08-14 11:46:28'),
(370, 'Plastik Bandung CSR', 0, NULL, '2026-08-14 11:50:22'),
(371, 'Plastik Tahu BN', 0, NULL, '2026-08-14 13:49:19'),
(372, 'Plastik FR', 0, NULL, '2026-08-21 10:13:46'),
(373, 'Plastik Tahu Rasa ME', 0, NULL, '2026-08-21 11:39:34'),
(374, 'Plastik Tahu Sari Rasa Kalijati', 0, NULL, '2026-08-21 12:24:35'),
(375, 'Plastik NDR', 0, NULL, '2026-08-21 15:28:59'),
(376, 'Plastik DA bdg', 0, NULL, '2026-08-21 15:50:31'),
(377, 'Plastik Rabbani', 0, NULL, '2026-08-21 16:02:44'),
(378, 'Plastik AS Fremium', 0, NULL, '2026-08-21 16:06:51'),
(379, 'Plastik Macakal', 0, NULL, '2026-08-24 12:14:22'),
(380, 'Katel cor Almunium', 0, 'uploads/barang/barang_1787627776_321.jpg', '2026-08-25 10:14:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `stok_barang`
--
ALTER TABLE `stok_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `stok_barang`
--
ALTER TABLE `stok_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
