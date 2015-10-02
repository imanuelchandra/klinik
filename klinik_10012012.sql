-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 10. Januari 2012 jam 20:03
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `id_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_absensi` varchar(255) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  PRIMARY KEY (`id_absensi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `absensi`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan_obat`
--

CREATE TABLE IF NOT EXISTS `golongan_obat` (
  `id_golongan_obat` int(11) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_golongan_obat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data untuk tabel `golongan_obat`
--

INSERT INTO `golongan_obat` (`id_golongan_obat`, `golongan`) VALUES
(1, 'Analgetik (anti nyeri)'),
(2, 'Anti alergi'),
(3, 'Anti ambeyen'),
(4, 'Anti budug (scabies)'),
(5, 'Anti diabetes'),
(6, 'Anti helmintik (cacing)'),
(7, 'Anti kejang'),
(8, 'Anti kram otot'),
(9, 'Anti malaria/radang sendi'),
(10, 'Anti peradangan'),
(11, 'Anti perdarahan'),
(12, 'Anti pusing'),
(13, 'Anti spasmodik (mules)'),
(14, 'Anti virus'),
(15, 'Anti vomit (mual/muntah)'),
(16, 'Antibiotik'),
(17, 'Antidepresant'),
(18, 'Antifungi (jamur)'),
(19, 'Antipiretik (turun panas)'),
(20, 'Antitusif (batuk)'),
(21, 'Asma'),
(22, 'Immunomodulator'),
(23, 'Jantung & Darah tinggi'),
(24, 'KB suntik'),
(25, 'Luka Bakar'),
(26, 'Maag'),
(27, 'Memperbaiki usus'),
(28, 'Obat cacing'),
(29, 'Obat pelangsing'),
(30, 'Obat prostat'),
(31, 'Pelancar aliran darah otak'),
(32, 'Pelancar BAB'),
(33, 'Peluruh batu ginjal'),
(34, 'Pengencer dahak'),
(35, 'Pengencer darah'),
(36, 'Pengganti cairan'),
(37, 'Penurun cholesterol'),
(38, 'Pil KB'),
(39, 'Pil Pelancar siklus haid'),
(40, 'Radang mata'),
(41, 'Radang telinga'),
(42, 'Stop Mencret'),
(43, 'Vitamin ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_medis`
--

CREATE TABLE IF NOT EXISTS `jasa_medis` (
  `id_jasa` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pelayanan` varchar(200) NOT NULL,
  `jasa_sarana` int(50) NOT NULL,
  `jasa_pelayanan` int(50) NOT NULL,
  `jasa_pembinaan` int(50) NOT NULL,
  `tarif_total` int(50) NOT NULL,
  `id_tindakan` int(11) NOT NULL,
  PRIMARY KEY (`id_jasa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data untuk tabel `jasa_medis`
--

INSERT INTO `jasa_medis` (`id_jasa`, `jenis_pelayanan`, `jasa_sarana`, `jasa_pelayanan`, `jasa_pembinaan`, `tarif_total`, `id_tindakan`) VALUES
(1, 'Pemeriksaan Dokter Umum', 5000, 10000, 0, 15000, 1),
(2, 'Konsultasi Dokter Umum', 0, 5000, 0, 5000, 1),
(3, 'KIR Dokter (Surat Keterangan Berbadan Sehat)', 5000, 10000, 0, 15000, 1),
(4, 'General Medical Check Up', 20000, 30000, 0, 50000, 1),
(5, 'Visum et repertum luka', 25000, 50000, 0, 75000, 1),
(6, 'Visum et repertum Kematian (pemeriksaan luar)', 25000, 125000, 0, 150000, 1),
(7, 'Surat Keterangan Kematian', 25000, 25000, 0, 50000, 1),
(8, 'Home visit  1 km', 5000, 10000, 0, 15000, 1),
(9, 'Home visit   2 km', 10000, 20000, 0, 30000, 1),
(10, 'Home visit  3 km', 15000, 30000, 0, 45000, 1),
(11, 'Home visit  4 km', 20000, 40000, 0, 60000, 1),
(12, 'Home visit  5 km', 25000, 50000, 0, 75000, 1),
(13, 'Perawatan Luka tanpa hecting (per lokasi)', 7500, 7500, 0, 15000, 2),
(14, 'Perawatan Luka dengan hecting 1-5 Jahitan', 50000, 25000, 0, 75000, 2),
(15, 'Perawatan Luka dengan hecting 6-10 Jahitan', 75000, 50000, 0, 125000, 2),
(16, 'Perawatan Luka dengan hecting 11-15 Jahitan', 100000, 75000, 0, 175000, 2),
(17, 'Perawatan Luka dengan hecting 16-20 Jahitan', 125000, 100000, 0, 225000, 2),
(18, 'Perawatan Luka dengan hecting Lebih dari 20 Jahitan', 150000, 125000, 0, 275000, 2),
(19, 'Debridement / Eksplorasi luka', 7500, 15000, 0, 22500, 2),
(20, 'Incisi abses kecil', 7500, 15000, 0, 22500, 2),
(21, 'Incisi abses sedang', 10000, 20000, 0, 30000, 2),
(22, 'Incisi abses besar', 12500, 25000, 0, 37500, 2),
(23, 'Pasang Spalk (per lokasi)', 15000, 15000, 0, 30000, 2),
(24, 'Sirkumsisi', 100000, 150000, 0, 250000, 2),
(25, 'Necrotomi (pengangkatan jaringan mati)', 35000, 15000, 0, 50000, 2),
(26, 'Perawatan luka bakar  derajat ringan', 15000, 15000, 0, 30000, 2),
(27, 'Perawatan luka bakar derajat sedang', 20000, 20000, 0, 40000, 2),
(28, 'Perawatan luka bakar derajat berat', 25000, 25000, 0, 50000, 2),
(29, 'Irigasi Mata', 40000, 35000, 0, 75000, 2),
(30, 'Pasang Cateter', 40000, 20000, 0, 60000, 2),
(31, 'Angkat Peluru/benda asing akibat luka tembus', 50000, 50000, 0, 100000, 2),
(32, 'Reposisi, Fraksi dislokasi dengan spalk (anak)', 10000, 15000, 0, 25000, 2),
(33, 'Reposisi, Fraksi dislokasi dengan spalk (dewasa)', 20000, 25000, 0, 45000, 2),
(34, 'Perawatan Luka gigitan serangga', 5000, 10000, 0, 15000, 2),
(35, 'Perawatan Luka gigitan binatang', 30000, 20000, 0, 50000, 2),
(36, 'Bilas cerumen', 15000, 15000, 0, 30000, 2),
(37, 'Ekstraksi Benda asing hidung', 15000, 35000, 0, 50000, 2),
(38, 'Ekstraksi Benda asing telinga', 15000, 35000, 0, 50000, 2),
(39, 'Ekstraksi Benda asing mata', 25000, 50000, 0, 75000, 2),
(40, 'Amputasi Jari (per lokasi)', 50000, 100000, 0, 150000, 2),
(41, 'Ekstirpasi kuku (per lokasi)', 50000, 75000, 0, 125000, 2),
(42, 'Ekstirpasi Klavus (per lokasi)', 75000, 75000, 0, 150000, 2),
(43, 'Ekstirpasi (Lipoma, Fibroma, Kista atheroma) per lokasi', 75000, 125000, 0, 200000, 2),
(44, 'Ganti Balut Kecil (per lokasi)', 5000, 5000, 0, 10000, 2),
(45, 'Ganti Balut sedang (per lokasi)', 10000, 10000, 0, 20000, 2),
(46, 'Ganti Balut besar (per lokasi)', 15000, 15000, 0, 30000, 2),
(47, 'Cross incisi (untuk luka tusuk)', 25000, 15000, 0, 40000, 2),
(48, 'Angkat jahitan < 5', 2500, 7500, 0, 10000, 2),
(49, 'Angkat jahitan 6 - 10', 5000, 15000, 0, 20000, 2),
(50, 'Angkat jahitan 11 - 15', 7500, 22500, 0, 30000, 2),
(51, 'Angkat jahitan 16 - 20', 10000, 30000, 0, 40000, 2),
(52, 'Punksi Kandung Kemih', 30000, 20000, 0, 50000, 2),
(53, 'Tindik Telinga', 15000, 35000, 0, 50000, 2),
(54, 'Sunat Wanita', 30000, 30000, 0, 60000, 2),
(55, 'Pemberian Injeksi IM, IV, SC', 2500, 2500, 0, 5000, 3),
(56, 'Pemasangan Infus', 50000, 10000, 0, 60000, 3),
(57, 'Skin Test / inter cutan', 2500, 5000, 0, 7500, 3),
(58, 'Nebulizer', 25000, 10000, 0, 35000, 3),
(59, 'Terapi Oksigen < 1 jam, 1 jam ditambah biaya Rp. 7,500 jam', 12500, 5000, 0, 17500, 3),
(60, 'Uji Tourniquet', 2000, 2000, 0, 4000, 3),
(61, 'Rectal Toucher', 2500, 5000, 0, 7500, 3),
(62, 'Pemasangan Implant', 50000, 50000, 0, 100000, 4),
(63, 'Pencabutan Implant', 50000, 50000, 0, 100000, 4),
(64, 'Pemasangan IUD', 100000, 50000, 0, 150000, 4),
(65, 'Pencabutan IUD', 25000, 25000, 0, 50000, 4),
(66, 'KB Suntik 1 bulan', 15000, 5000, 0, 20000, 4),
(67, 'KB Suntik 3 bulan', 15000, 5000, 0, 20000, 4),
(68, 'Pemeriksaan dalam /inspekulo', 10000, 10000, 0, 20000, 4),
(69, 'Tutul Albothyl', 5000, 5000, 0, 10000, 4),
(70, 'Test kehamilan', 7500, 2500, 0, 10000, 5),
(71, 'Test Urine carik celup', 10000, 2500, 0, 12500, 5),
(72, 'Gula darah', 12500, 2500, 0, 15000, 5),
(73, 'Asam urat', 12500, 2500, 0, 15000, 5),
(74, 'Cholesterol total', 20000, 2500, 0, 22500, 5),
(75, 'Vaksinasi flu', 130000, 20000, 0, 150000, 6),
(76, 'Vaksinasi typhoid', 130000, 20000, 0, 150000, 6),
(77, 'Vaksinasi pneumonia/radang paru', 230000, 20000, 0, 250000, 6),
(78, 'Vaksinasi cacar air', 330000, 20000, 0, 350000, 6),
(79, 'Vaksinasi hepatitis A', 330000, 20000, 0, 350000, 6),
(80, 'Vaksinasi hepatitis B', 60000, 20000, 0, 80000, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_penyakit`
--

CREATE TABLE IF NOT EXISTS `jenis_penyakit` (
  `id_jenis_penyakit` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(200) NOT NULL,
  PRIMARY KEY (`id_jenis_penyakit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `jenis_penyakit`
--

INSERT INTO `jenis_penyakit` (`id_jenis_penyakit`, `jenis`) VALUES
(1, 'Darah'),
(2, 'Endokrin, Nutrisi, Metabolik'),
(3, 'Infeksi,Parasit'),
(4, 'Kehamilan, Persalinan, Masa Nifas'),
(5, 'Kulit'),
(6, 'Mata,Adnexa'),
(7, 'Mental,Perilaku'),
(8, 'Otot, Tulang,Jaringan Ikat'),
(9, 'Sistem Genitourinaria'),
(10, 'Sistem Pencernaan'),
(11, 'Sistem Pernafasan'),
(12, 'Sistem Sirkulasi'),
(13, 'Sistem Syaraf'),
(14, 'Telinga,Mastoid'),
(15, 'Trauma, Keracunan,Penyebab Eksternal Lain'),
(16, 'Tumor Ganas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) NOT NULL,
  `level_akses` varchar(50) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `level_akses`) VALUES
(1, 'Data User', '2'),
(2, 'Registrasi', '1-2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id_notif` int(11) NOT NULL AUTO_INCREMENT,
  `dari` int(11) NOT NULL,
  `kepada` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `jenis_notif` varchar(100) NOT NULL,
  `tgl_notif` varchar(20) NOT NULL,
  `status_notif` varchar(1) NOT NULL,
  PRIMARY KEY (`id_notif`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id_notif`, `dari`, `kepada`, `pesan`, `jenis_notif`, `tgl_notif`, `status_notif`) VALUES
(58, 3, 2, '', 'PMR', '2012-01-08', 'N'),
(56, 1, 1, '', 'BPP', '2012-01-08', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(30) NOT NULL,
  `stok_obat` varchar(10) NOT NULL,
  `harga_beli_box` int(50) NOT NULL,
  `isi_box` int(50) NOT NULL,
  `harga_beli` int(50) NOT NULL,
  `harga_jual` int(50) NOT NULL,
  `Exp_date` varchar(200) NOT NULL,
  `apotik` varchar(200) NOT NULL,
  `id_golongan_obat` int(11) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=250 ;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok_obat`, `harga_beli_box`, `isi_box`, `harga_beli`, `harga_jual`, `Exp_date`, `apotik`, `id_golongan_obat`) VALUES
(17, 'Asterin', '186', 0, 0, 0, 0, '0', '', 1),
(18, 'Axofen 400mg', '0', 0, 0, 237, 308, '0', '', 1),
(53, 'Divoltar 50 mg', '215', 0, 0, 330, 429, '0', '', 1),
(55, 'Dolsic Injeksi', '0', 0, 0, 2880, 3744, '0', '', 1),
(91, 'Hedix', '112', 0, 0, 1100, 1430, '0', '', 1),
(102, 'Ifen ', '96', 0, 0, 423, 550, '0', '', 1),
(112, 'Kaltofren 50 mg', '0', 0, 0, 330, 429, '0', '', 1),
(140, 'Mefentan', '115', 0, 0, 0, 0, '0', '', 1),
(143, 'Mezac', '40', 0, 0, 208, 270, '0', '', 1),
(151, 'Moxic', '0', 0, 0, 825, 1073, '0', '', 1),
(159, 'Neuropyron-V', '300', 0, 0, 0, 0, '0', '', 1),
(173, 'Pehastan', '0', 0, 0, 352, 458, '0', '', 1),
(199, 'Renadinac 50 mg', '779', 0, 0, 139, 181, '0', '', 1),
(203, 'Rhemacox 15', '239', 0, 0, 0, 0, '0', '', 1),
(4, 'Alermax', '104', 0, 0, 55, 72, '0', '', 2),
(6, 'Allerzin syr', '0', 0, 0, 3700, 4810, '0', '', 2),
(7, 'Allodan', '285', 0, 0, 0, 0, '0', '', 2),
(8, 'Allohex', '100', 0, 0, 0, 0, '0', '', 2),
(30, 'Bufacaryl', '0', 0, 0, 121, 157, '0', '', 2),
(37, 'Cetrol 10 mg', '0', 0, 0, 600, 780, '0', '', 2),
(45, 'Dehista', '0', 0, 0, 46, 60, '0', '', 2),
(51, 'Dinazen', '37', 0, 0, 0, 0, '0', '', 2),
(52, 'Ditensa', '0', 0, 0, 0, 0, '0', '', 2),
(116, 'Kofiren', '0', 0, 0, 0, 0, '0', '', 2),
(121, 'Lergia 10 mg', '0', 0, 0, 300, 390, '0', '', 2),
(122, 'Lerzin', '55', 0, 0, 340, 442, '0', '', 2),
(123, 'Lerzin syrup', '7', 0, 0, 3400, 4420, '0', '', 2),
(181, 'Polamec', '0', 0, 0, 85, 111, '0', '', 2),
(183, 'Pratifar', '45', 0, 0, 220, 286, '0', '', 2),
(191, 'Pronicy', '40', 0, 0, 0, 0, '0', '', 2),
(32, 'Busir', '0', 0, 0, 0, 0, '0', '', 2),
(208, 'Scabimite CR', '0', 0, 0, 12320, 16016, '0', '', 4),
(230, 'Trilin', '122', 0, 0, 0, 0, '0', '', 17),
(84, 'Gliformin 500 mg', '0', 0, 0, 330, 429, '0', '', 5),
(85, 'Gliformin 850', '180', 0, 0, 0, 0, '0', '', 5),
(86, 'Gludepatic', '510', 0, 0, 0, 0, '0', '', 5),
(197, 'Redusec', '0', 0, 0, 800, 1040, '0', '', 5),
(198, 'Renabetic', '400', 0, 0, 0, 0, '0', '', 5),
(239, 'Versibet', '20', 0, 0, 0, 0, '0', '', 5),
(60, 'Erlikon', '9', 0, 0, 0, 1000, '0', '', 6),
(35, 'Carbamazepine', '100', 0, 0, 0, 0, '0', '', 7),
(177, 'Phenobarbital', '2000', 0, 0, 100, 130, '0', '', 7),
(235, 'Valisanbe', '902', 0, 0, 300, 390, '0', '', 7),
(124, 'Lespain cream', '2', 0, 0, 0, 0, '0', '', 8),
(201, 'Resochin', '100', 0, 0, 0, 500, '0', '', 9),
(38, 'Cloderm', '8', 0, 0, 0, 0, '0', '', 10),
(47, 'Dexametason injeksi', '16', 0, 0, 1200, 1560, '0', '', 10),
(48, 'Dexigen cream', '0', 0, 0, 5200, 6760, '0', '', 10),
(49, 'Dextamec', '0', 0, 0, 120, 156, '0', '', 10),
(57, 'Eltazon', '0', 0, 0, 95, 124, '0', '', 10),
(94, 'Hexacort cream', '1', 0, 0, 0, 500, '0', '', 10),
(104, 'Indoson Cream', '0', 0, 0, 3500, 4550, '0', '', 10),
(105, 'Inflason', '0', 0, 0, 96, 125, '0', '', 10),
(110, 'Kalmetason INJ', '40', 0, 0, 2750, 3575, '0', '', 10),
(142, 'Metsocrm CR', '0', 0, 0, 5000, 6500, '0', '', 10),
(150, 'Molason CR', '4', 0, 0, 3050, 3965, '0', '', 10),
(160, 'New Astar cream', '0', 0, 0, 4600, 5980, '0', '', 10),
(184, 'Prednicort', '26', 0, 0, 444, 577, '0', '', 10),
(215, 'Soincef Cream', '0', 0, 0, 4100, 5330, '0', '', 10),
(216, 'Sonamin', '94', 0, 0, 0, 0, '0', '', 10),
(229, 'Trifaderm CR', '4', 0, 0, 3000, 3900, '0', '', 10),
(2, 'Adrome', '0', 0, 0, 0, 1000, '0', '', 11),
(111, 'Kalnex 500 mg', '300', 0, 0, 1020, 1326, '0', '', 11),
(161, 'Nexitra', '50', 0, 0, 860, 1118, '0', '', 11),
(96, 'Histigo', '0', 0, 0, 0, 0, '0', '', 12),
(135, 'Mantino', '80', 0, 0, 0, 0, '0', '', 12),
(212, 'Seremig', '73', 0, 0, 602, 783, '0', '', 12),
(222, 'Stugeron', '285', 0, 0, 0, 0, '0', '', 12),
(28, 'Braxidin', '0', 0, 0, 900, 1170, '0', '', 13),
(31, 'Buscopan plus', '889', 0, 0, 500, 650, '0', '', 13),
(115, 'Ketorolac Injeksi', '0', 0, 0, 8580, 11154, '0', '', 13),
(141, 'Methylergometrine', '100', 0, 0, 0, 0, '0', '', 13),
(210, 'Scopma plus', '0', 0, 0, 465, 605, '0', '', 13),
(1, 'Acyfar', '0', 0, 0, 800, 1040, '0', '', 14),
(182, 'Poviral', '0', 0, 0, 510, 663, '0', '', 14),
(209, 'Scanovir CR', '10', 0, 0, 4770, 6201, '0', '', 14),
(89, 'Grameta 10 mg', '88', 0, 0, 370, 481, '0', '', 15),
(90, 'Grameta syrup', '20', 0, 0, 3100, 4030, '0', '', 15),
(217, 'Sotatic', '414', 0, 0, 200, 260, '0', '', 15),
(218, 'Sotatic INJ', '0', 0, 0, 3000, 3900, '0', '', 15),
(240, 'Vesperum', '18', 0, 0, 3200, 4160, '0', '', 15),
(244, 'Vomina', '78', 0, 0, 0, 0, '0', '', 15),
(19, 'Bactoprim forte 960', '43', 0, 0, 450, 585, '0', '', 16),
(20, 'Bactoprim syrup', '14', 0, 0, 4800, 6240, '0', '', 16),
(24, 'Bintamox syr', '0', 0, 0, 5300, 6890, '0', '', 16),
(44, 'Daclin 300 mg', '0', 0, 0, 852, 1108, '0', '', 16),
(54, 'Dohixat', '0', 0, 0, 264, 343, '0', '', 16),
(59, 'Erlamycetin eye drop ', '8', 0, 0, 0, 0, '0', '', 16),
(61, 'Etabiotic', '7', 0, 0, 0, 0, '0', '', 16),
(64, 'Etamox syr', '43', 0, 0, 0, 0, '0', '', 16),
(65, 'Etamoxul syrup', '1', 0, 0, 0, 0, '0', '', 16),
(74, 'Fladex Forte', '0', 0, 0, 215, 280, '0', '', 16),
(82, 'Genoint cream', '6', 0, 0, 0, 0, '0', '', 16),
(83, 'Gentiderm cream', '6', 0, 0, 0, 0, '0', '', 16),
(88, 'Grafazol', '80', 0, 0, 197, 256, '0', '', 16),
(97, 'Hitetra 500 mg', '88', 0, 0, 322, 419, '0', '', 16),
(113, 'Kanamicin Injeksi', '0', 0, 0, 9500, 12350, '0', '', 16),
(125, 'Levofloxacin', '5', 0, 0, 1500, 1950, '0', '', 16),
(129, 'Lostacef', '2', 0, 0, 700, 910, '0', '', 16),
(130, 'Lostacef syr', '0', 0, 0, 8000, 10400, '0', '', 16),
(139, 'Mecoquin 500 mg', '283', 0, 0, 420, 546, '0', '', 16),
(145, 'Milorin', '50', 0, 0, 0, 0, '0', '', 16),
(165, 'Novamox syr', '0', 0, 0, 3200, 4160, '0', '', 16),
(168, 'Opicef syrup', '15', 0, 0, 9000, 11700, '0', '', 16),
(169, 'Ospamox', '68', 0, 0, 650, 845, '0', '', 16),
(172, 'Pehamoxil Forte', '3', 0, 0, 0, 0, '0', '', 16),
(174, 'Pehatrim Forte', '0', 0, 0, 310, 403, '0', '', 16),
(175, 'Phaproxin 500', '980', 0, 0, 0, 0, '0', '', 16),
(178, 'Phenobiotic 500', '28', 0, 0, 550, 715, '0', '', 16),
(179, 'Phenobiotic syrup', '0', 0, 0, 0, 0, '0', '', 16),
(186, 'Pritamox syrup', '0', 0, 0, 6000, 7800, '0', '', 16),
(221, 'Starquin', '368', 0, 0, 0, 0, '0', '', 16),
(223, 'Sultrimix DS', '0', 0, 0, 285, 371, '0', '', 16),
(226, 'Topcillin 500 mg', '0', 0, 0, 550, 715, '0', '', 16),
(231, 'Trogyl 500 mg', '0', 0, 0, 220, 286, '0', '', 16),
(233, 'Urfanicol 500 mg', '250', 0, 0, 0, 0, '0', '', 16),
(241, 'Vibramox syr', '0', 0, 0, 4200, 5460, '0', '', 16),
(245, 'Widecillin', '68', 0, 0, 595, 774, '0', '', 16),
(247, 'Zidalev', '81', 0, 0, 0, 0, '0', '', 16),
(249, 'Zultrop syr', '0', 0, 0, 2600, 3380, '0', '', 16),
(12, 'Amytriptiline 25 mg', '150', 0, 0, 0, 0, '2012-01-04', '', 17),
(36, 'Cazetin drop', '0', 0, 0, 14800, 19240, '2012-02-14', '', 18),
(80, 'Funet', '300', 0, 0, 600, 780, '0', '', 18),
(81, 'Genalten Cream', '0', 0, 0, 2100, 2730, '0', '', 18),
(114, 'Ketoconazole', '91', 0, 0, 0, 0, '2012-02-14', '', 18),
(144, 'Micoticum cream', '1', 0, 0, 4086, 5312, '2012-02-14', '', 18),
(153, 'Muzoral CR', '0', 0, 0, 4500, 5850, '2012-02-14', '', 18),
(154, 'Mycazol cream', '0', 0, 0, 4200, 5460, '2012-02-14', '', 18),
(155, 'Mycoderm', '0', 0, 0, 550, 715, '0', '', 18),
(10, 'Alphamol syrup', '16', 0, 0, 4200, 5460, '0', '', 19),
(62, 'Etafen syr', '6', 0, 0, 2800, 3640, '0', '', 19),
(71, 'Fasgo Forte', '2', 0, 0, 0, 0, '0', '', 19),
(72, 'Fasidol  Forte syrup', '7', 0, 0, 3200, 4160, '0', '', 19),
(87, 'Grafadon syrup', '18', 0, 0, 3700, 4810, '0', '', 19),
(99, 'Hufadon syrup', '20', 0, 0, 0, 0, '0', '', 19),
(107, 'Itamol new syr', '0', 0, 0, 3000, 3900, '0', '', 19),
(147, 'Mirasic F', '0', 0, 0, 145, 189, '0', '', 19),
(188, 'Procet syr', '39', 0, 0, 0, 0, '0', '', 19),
(189, 'Progesic 500 mg', '690', 0, 0, 265, 345, '0', '', 19),
(190, 'Progesic syrup', '19', 0, 0, 0, 0, '0', '', 19),
(194, 'Pyridol', '0', 0, 0, 138, 179, '0', '', 19),
(207, 'Sanmol', '0', 0, 0, 255, 332, '0', '', 19),
(224, 'Sumagesic', '508', 0, 0, 0, 0, '0', '', 19),
(9, 'Alpara', '58', 0, 0, 302, 393, '0', '', 20),
(39, 'Colpica', '100', 0, 0, 165, 215, '0', '', 20),
(40, 'Combiflu', '200', 0, 0, 0, 0, '0', '', 20),
(41, 'Cospamic syrup', '3', 0, 0, 0, 0, '0', '', 20),
(50, 'Dextral Forte', '0', 0, 0, 372, 484, '0', '', 20),
(56, 'Domeryl syrup', '52', 0, 0, 0, 0, '0', '', 20),
(75, 'Flucadex syrup', '13', 0, 0, 4600, 5980, '0', '', 20),
(76, 'Flutrop', '0', 0, 0, 230, 299, '0', '', 20),
(98, 'Holydril syr', '2', 0, 0, 0, 0, '0', '', 20),
(100, 'Hufaxol syrup', '0', 0, 0, 0, 0, '0', '', 20),
(101, 'Ifarsyl', '188', 0, 0, 300, 390, '0', '', 20),
(106, 'Intunal Forte', '300', 0, 0, 550, 715, '0', '', 20),
(131, 'Lycodryl syrup', '0', 0, 0, 0, 0, '0', '', 20),
(192, 'Protexinal syrup', '0', 0, 0, 0, 0, '0', '', 20),
(195, 'Quantidex', '32', 0, 0, 316, 411, '0', '', 20),
(196, 'Quantidex syrup', '6', 0, 0, 0, 0, '0', '', 20),
(22, 'Berotec inhaler', '2', 0, 0, 75900, 98670, '0', '', 21),
(29, 'Bronsolvan', '126', 0, 0, 318, 413, '0', '', 21),
(156, 'Nairet', '83', 0, 0, 198, 257, '0', '', 21),
(158, 'Neosma syrup', '8', 0, 0, 3600, 4680, '0', '', 21),
(187, 'Pritasma', '55', 0, 0, 110, 143, '0', '', 21),
(202, 'Retaphyl SR', '180', 0, 0, 1774, 2306, '0', '', 21),
(238, 'Ventolin inhaler', '2', 0, 0, 72600, 94380, '0', '', 21),
(162, 'Niran', '300', 0, 0, 0, 0, '0', '', 22),
(33, 'Calcigard retard', '0', 0, 0, 1980, 2574, '0', '', 23),
(34, 'Captopril', '0', 0, 0, 0, 0, '0', '', 23),
(46, 'Dexacap 25 mg', '50', 0, 0, 200, 260, '0', '', 23),
(66, 'Fargoxin', '125', 0, 0, 133, 173, '0', '', 23),
(67, 'Farmadral', '400', 0, 0, 0, 0, '0', '', 23),
(68, 'Farmoten 12,5', '200', 0, 0, 90, 117, '0', '', 23),
(69, 'Farmoten 25', '220', 0, 0, 120, 156, '0', '', 23),
(70, 'Farsiretic', '0', 0, 0, 130, 169, '0', '', 23),
(73, 'Fasorbid', '24', 0, 0, 0, 0, '0', '', 23),
(78, 'Forten 12,5', '221', 0, 0, 0, 0, '0', '', 23),
(79, 'Forten 50', '100', 0, 0, 0, 0, '0', '', 23),
(120, 'Laveric', '225', 0, 0, 160, 208, '0', '', 23),
(132, 'Maintate', '45', 0, 0, 2627, 3415, '0', '', 23),
(163, 'Noperten 5 mg', '0', 0, 0, 654, 850, '0', '', 23),
(219, 'Spirola', '455', 0, 0, 0, 0, '0', '', 23),
(220, 'Spironolactone', '0', 0, 0, 450, 585, '0', '', 23),
(225, 'Tensiphar', '2', 0, 0, 0, 0, '0', '', 23),
(236, 'Vapril 12,5 mg', '0', 0, 0, 0, 0, '0', '', 23),
(237, 'V-block', '270', 0, 0, 1100, 1430, '0', '', 23),
(13, 'Andalan cyclogeston', '10', 0, 0, 7000, 9100, '0', '', 38),
(228, 'Triclovem inj', '0', 0, 0, 7000, 9100, '0', '', 24),
(26, 'Bioplasenton gel', '0', 0, 0, 8000, 10400, '0', '', 25),
(157, 'Neocenta gel', '0', 0, 0, 8000, 10400, '0', '', 25),
(63, 'Etagastrin', '29', 0, 0, 0, 0, '0', '', 26),
(95, 'Hexer Injeksi', '5', 0, 0, 2090, 2717, '0', '', 26),
(119, 'Laproton', '17', 0, 0, 954, 1240, '0', '', 26),
(126, 'Linmaag', '0', 0, 0, 198, 257, '0', '', 26),
(128, 'Lokev', '184', 0, 0, 370, 481, '0', '', 26),
(152, 'Musin', '595', 0, 0, 300, 390, '0', '', 26),
(232, 'Ulceranin', '107', 0, 0, 198, 257, '0', '', 26),
(118, 'Lacto B', '84', 0, 0, 3300, 4290, '0', '', 27),
(248, 'Zidiar', '218', 0, 0, 400, 520, '0', '', 27),
(193, 'Pyrantel Pamoat', '0', 0, 0, 0, 0, '0', '', 28),
(108, 'Jati belanda', '400', 0, 0, 0, 0, '0', '', 29),
(200, 'Reprosid', '27', 0, 0, 0, 0, '0', '', 30),
(213, 'Sevotam', '41', 0, 0, 600, 780, '0', '', 31),
(117, 'Kompolax syrup', '10', 0, 0, 3200, 4160, '0', '', 32),
(58, 'Enatin caps', '0', 0, 0, 1300, 1690, '0', '', 33),
(11, 'Ambroxol', '124', 0, 0, 0, 0, '0', '', 34),
(148, 'Molapect', '140', 0, 0, 0, 0, '0', '', 34),
(149, 'Molapect syrup', '5', 0, 0, 6300, 8190, '0', '', 34),
(167, 'Omeroxol syrup', '0', 0, 0, 3000, 3900, '0', '', 34),
(204, 'Roverton', '0', 0, 0, 120, 156, '0', '', 34),
(205, 'Roverton syr', '0', 0, 0, 3100, 4030, '0', '', 34),
(214, 'Silopect syrup', '5', 0, 0, 0, 0, '0', '', 34),
(227, 'Transmuco', '60', 0, 0, 0, 0, '0', '', 34),
(16, 'Aspilet', '0', 0, 0, 398, 517, '0', '', 35),
(146, 'Miniaspi', '280', 0, 0, 0, 0, '0', '', 35),
(27, 'Bioralit', '18', 0, 0, 0, 0, '0', '', 36),
(176, 'Pharolit', '0', 0, 0, 800, 1040, '0', '', 36),
(211, 'Selvim', '0', 0, 0, 315, 410, '0', '', 37),
(234, 'Valansim', '0', 0, 0, 330, 429, '0', '', 37),
(180, 'Planotab', '0', 0, 0, 2900, 3770, '0', '', 38),
(246, 'Yaz', '56', 0, 0, 0, 0, '0', '', 38),
(43, 'Cycloproginova', '2', 0, 0, 0, 0, '0', '', 39),
(5, 'Aleterol Comp TM', '6', 0, 0, 9500, 12350, '0', '', 40),
(170, 'Otolin drop', '1', 0, 0, 18000, 23400, '0', '', 41),
(103, 'Imodan', '398', 0, 0, 0, 0, '0', '', 42),
(137, 'Mecodiar', '118', 0, 0, 0, 0, '0', '', 42),
(164, 'Normudal', '28', 0, 0, 0, 0, '0', '', 42),
(3, 'Afolat ', '0', 0, 0, 265, 345, '0', '', 43),
(14, 'Arkavit', '256', 0, 0, 0, 0, '0', '', 43),
(15, 'Arkavit-C', '0', 0, 0, 347, 451, '0', '', 43),
(21, 'Becefort', '400', 0, 0, 660, 858, '0', '', 43),
(25, 'Biolysin', '465', 0, 0, 0, 0, '0', '', 43),
(42, 'Curviplex syrup', '9', 0, 0, 3600, 4680, '0', '', 43),
(77, 'Folaxin', '120', 0, 0, 194, 252, '0', '', 43),
(93, 'Hemafort', '0', 0, 0, 506, 658, '0', '', 43),
(109, 'Kalbion', '73', 0, 0, 0, 0, '0', '', 43),
(127, 'Litamin syr', '0', 0, 0, 4000, 5200, '0', '', 43),
(133, 'Maltofer syrup', '2', 0, 0, 0, 0, '0', '', 43),
(134, 'Maltofer tab', '40', 0, 0, 0, 0, '0', '', 43),
(136, 'Mecobex', '74', 0, 0, 563, 732, '0', '', 43),
(138, 'Mecohem', '40', 0, 0, 0, 0, '0', '', 43),
(166, 'Nutrifar 5000', '60', 0, 0, 690, 897, '0', '', 43),
(171, 'Oxicobal', '230', 0, 0, 316, 411, '0', '', 43),
(185, 'Prenatin plus', '90', 0, 0, 432, 562, '0', '', 43),
(206, 'Sangovitin', '0', 0, 0, 240, 312, '0', '', 43),
(242, 'Vit C + Zink ampul', '17', 0, 0, 0, 0, '0', '', 43),
(243, 'Vitazym', '0', 0, 0, 336, 437, '0', '', 43);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pasien` varchar(50) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat_pasien` varchar(300) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `status` varchar(75) NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `kode_pasien`, `nama_pasien`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat_pasien`, `no_telepon`, `status`) VALUES
(1, '4546', 'yoga', 'bandung', '1989-6-08', 'Laki-laki', 'sekeloa', '08123155866', 'standard'),
(3, '4546', 'anggi', 'bandung', '1987-4-17', 'Perempuan', 'dago', '0812585662033', 'vip'),
(4, '4546', 'embe', 'medan', '1918-2-08', 'Perempuan', 'aaaaaa', '23333', 'standard'),
(6, '5515', 'hasim', 'yttyjtyj', '1958-7-09', 'laki', 'tyjyjtyjytjyt\r\nhgkghkghk\r\nuhgkgh', '545452', 'umum'),
(7, '5515', 'mamat', 'fdgdfg', '1987-4-10', 'laki', 'dfgdfgfdg', '404040410410', 'askes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) NOT NULL,
  `id_jenis_penyakit` varchar(100) NOT NULL,
  `id_penyakit` varchar(100) NOT NULL,
  `id_golongan_obat` varchar(100) NOT NULL,
  `id_obat` varchar(100) NOT NULL,
  `id_tindakan` varchar(100) NOT NULL,
  `id_jasa` varchar(100) NOT NULL,
  `tensi` varchar(75) NOT NULL,
  `nadi` varchar(75) NOT NULL,
  `respirasi` varchar(75) NOT NULL,
  `suhu` varchar(75) NOT NULL,
  `berat_badan` varchar(75) NOT NULL,
  `tinggi_badan` varchar(75) NOT NULL,
  `bmi` varchar(75) NOT NULL,
  `lingkar_kepala` varchar(75) NOT NULL,
  `keluhan_utama` text NOT NULL,
  `dosis_obat` varchar(100) NOT NULL,
  `jumlah_obat` varchar(100) NOT NULL,
  `tgl_pemeriksaan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pemeriksaan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=194 ;

--
-- Dumping data untuk tabel `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_pemeriksaan`, `id_pasien`, `id_jenis_penyakit`, `id_penyakit`, `id_golongan_obat`, `id_obat`, `id_tindakan`, `id_jasa`, `tensi`, `nadi`, `respirasi`, `suhu`, `berat_badan`, `tinggi_badan`, `bmi`, `lingkar_kepala`, `keluhan_utama`, `dosis_obat`, `jumlah_obat`, `tgl_pemeriksaan`) VALUES
(193, 3, 'a:2:{i:0;s:1:"8";i:1;s:1:"4";}', 'a:2:{i:0;s:3:"125";i:1;s:3:"165";}', 'a:2:{i:0;s:1:"2";i:1;s:1:"1";}', 'a:2:{i:0;s:1:"4";i:1;s:2:"17";}', 'a:3:{i:0;s:1:"4";i:1;s:1:"6";i:2;s:1:"4";}', 'a:3:{i:0;s:2:"66";i:1;s:2:"79";i:2;s:2:"63";}', '454', '542', '10', '20', '70', '103', '65.98171363936281', '40', 'ambeyen', 'a:2:{i:0;s:3:"2x1";i:1;s:3:"2x1";}', 'a:2:{i:0;s:1:"5";i:1;s:1:"5";}', '2012-01-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `kode_user` varchar(50) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat_user` varchar(300) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `kode_user`, `nama_user`, `password`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_user`, `no_telepon`, `level`) VALUES
(1, '1304', 'bahman', 'bahman', '', 'medan', '100', 'pria', 'bandung', '081xxxxx', 2),
(3, '1403', 'andi', 'andi', '', 'bandung', '30', 'laki', 'dago', '082xxxxx', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id_penyakit` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(25) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `id_jenis_penyakit` int(11) NOT NULL,
  PRIMARY KEY (`id_penyakit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=267 ;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kode`, `nama_penyakit`, `id_jenis_penyakit`) VALUES
(22, 'D50', 'Iron deficiency anemia *', 1),
(23, 'E04.0', 'Nontoxic diffuse goiter', 2),
(24, 'E05.0', 'Thyrotoxicosis with diffuse goiter ', 2),
(25, 'E11', 'Type 2 diabetes mellitus *', 2),
(26, 'E11.52', 'Type 2 diabetes mellitus with diabetic peripheral angiopathy with gangrene *', 2),
(27, 'E24.2', 'Drug-induced Cushing''s syndrome', 2),
(28, 'E40', 'Kwashiorkor', 2),
(29, 'E41', 'Nutritional marasmus', 2),
(30, 'E42', 'Marasmic kwashiorkor', 2),
(31, 'E66.0', 'Obesity due to excess calories *', 2),
(32, 'E78', 'Disorders of lipoprotein metabolism and other lipidemias *', 2),
(1, 'A01.0', 'Typhoid fever *', 3),
(2, 'A03', 'Shigellosis *', 3),
(3, 'A08.0', 'Rotaviral enteritis *', 3),
(4, 'A15', 'Respiratory tuberculosis *', 3),
(5, 'A54', 'Gonococcal infection', 3),
(6, 'A90', 'Dengue fever [classical dengue] *', 3),
(7, 'A91', 'Dengue hemorrhagic fever *', 3),
(8, 'A92.0', 'Chikungunya virus disease *', 3),
(9, 'B01', 'Varicella [chickenpox] *', 3),
(10, 'B02', 'Zoster [herpes zoster] *', 3),
(11, 'B05', 'Measles', 3),
(12, 'B08.4', 'Enteroviral vesicular stomatitis with exanthem', 3),
(13, 'B15', 'Acute hepatitis A', 3),
(14, 'B26', 'Mumps *', 3),
(15, 'B30', 'Viral conjunctivitis', 3),
(16, 'B35.4', 'Tinea corporis *', 3),
(17, 'B35.6', 'Tinea cruris *', 3),
(18, 'B36.0', 'Pityriasis versicolor *', 3),
(19, 'B37.0', 'Candidal stomatitis *', 3),
(20, 'B37.3', 'Candidiasis of vulva and vagina *', 3),
(21, 'B86', 'Scabies *', 3),
(163, 'O00', 'Ectopic pregnancy', 4),
(164, 'O01', 'Hydatidiform mole', 4),
(165, 'O03', 'Spontaneous abortion', 4),
(166, 'O09', 'Supervision of high risk pregnancy', 4),
(167, 'O10', 'Pre-existing hypertension complicating pregnancy, childbirth and the puerperium', 4),
(168, 'O11', 'Pre-existing hypertension with pre-eclampsia', 4),
(169, 'O12', 'Gestational [pregnancy-induced] edema and proteinuria without hypertension', 4),
(170, 'O13', 'Gestational [pregnancy-induced] hypertension without significant proteinuria', 4),
(171, 'O14.0', 'Mild to moderate pre-eclampsia', 4),
(172, 'O14.1', 'Severe pre-eclampsia', 4),
(173, 'O14.2', 'HELLP syndrome (HELLP)', 4),
(174, 'O15.0', 'Eclampsia in pregnancy', 4),
(175, 'O15.2', 'Eclampsia in the puerperium', 4),
(176, 'O20.0', 'Threatened abortion', 4),
(177, 'O21', 'Excessive vomiting in pregnancy', 4),
(178, 'O23', 'Infections of genitourinary tract in pregnancy', 4),
(179, 'O24', 'Diabetes mellitus in pregnancy, childbirth and the puerperium', 4),
(180, 'O30', 'Multiple gestation', 4),
(181, 'O44', 'Placenta previa', 4),
(182, 'O45', 'Premature separation of placenta [abruptio placentae]', 4),
(183, 'O91.13', 'Abscess of breast associated with lactation', 4),
(106, 'L01', 'Impetigo *', 5),
(107, 'L02', 'Cutaneous abscess, furuncle and carbuncle *', 5),
(108, 'L03', 'Cellulitis and acute lymphangitis', 5),
(109, 'L08.0', 'Pyoderma', 5),
(110, 'L20', 'Atopic dermatitis *', 5),
(111, 'L21', 'Seborrheic dermatitis', 5),
(112, 'L23', 'Allergic contact dermatitis', 5),
(113, 'L24', 'Irritant contact dermatitis', 5),
(114, 'L40', 'Psoriasis', 5),
(115, 'L50', 'Urticaria *', 5),
(116, 'L60.0', 'Ingrowing nail', 5),
(117, 'L70', 'Acne *', 5),
(118, 'L74.0', 'Miliaria rubra *', 5),
(45, 'H00', 'Hordeolum and chalazion *', 6),
(46, 'H10.0', 'Mucopurulent conjunctivitis *', 6),
(47, 'H10.44', 'Vernal conjunctivitis *', 6),
(48, 'H11.0', 'Pterygium of eye *', 6),
(49, 'H11.3', 'Conjunctival hemorrhage *', 6),
(50, 'H25', 'Age-related cataract *', 6),
(51, 'H40', 'Glaucoma', 6),
(52, 'H52.0', 'Hypermetropia', 6),
(53, 'H52.1', 'Myopia', 6),
(33, 'F32', 'Major depressive disorder, single episode *', 7),
(34, 'F41.1', 'Generalized anxiety disorder *', 7),
(35, 'F45', 'Somatoform disorders *', 7),
(119, 'M05', 'Rheumatoid arthritis with rheumatoid factor *', 8),
(120, 'M10', 'Gout *', 8),
(121, 'M12.5', 'Traumatic arthropathy', 8),
(122, 'M15-M19', 'Osteoarthritis *', 8),
(123, 'M20', 'Acquired deformities of fingers and toes', 8),
(124, 'M40', 'Kyphosis and lordosis', 8),
(125, 'M41', 'Scoliosis', 8),
(126, 'M43.1', 'Spondylolisthesis', 8),
(127, 'M54.1', 'Radiculopathy', 8),
(128, 'M54.3', 'Sciatica', 8),
(129, 'M54.4', 'Lumbago with sciatica', 8),
(130, 'M54.5', 'Low back pain *', 8),
(131, 'M62.83', 'Muscle spasm', 8),
(132, 'M67.4', 'Ganglion', 8),
(133, 'M70', 'Soft tissue disorders related to use, overuse and pressure', 8),
(134, 'M79.0', 'Rheumatism, unspecified', 8),
(135, 'M79.7', 'Fibromyalgia *', 8),
(136, 'M80-M81', 'Osteoporosis', 8),
(137, 'M86', 'Osteomyelitis', 8),
(138, 'N04', 'Nephrotic syndrome *', 9),
(139, 'N18', 'Chronic kidney disease (CKD) *', 9),
(140, 'N20-N23', 'Urolithiasis *', 9),
(141, 'N30', 'Cystitis', 9),
(142, 'N34', 'Urethritis and urethral syndrome', 9),
(143, 'N39.0', 'Urinary tract infection, site not specified *', 9),
(144, 'N39.3', 'Stress incontinence (female) (male)', 9),
(145, 'N40', 'Enlarged prostate (EP) *', 9),
(146, 'N43', 'Hydrocele and spermatocele', 9),
(147, 'N45', 'Orchitis and epididymitis *', 9),
(148, 'N60', 'Benign mammary dysplasia', 9),
(149, 'N61', 'Inflammatory disorders of breast *', 9),
(150, 'N70', 'Salpingitis and oophoritis', 9),
(151, 'N71', 'Inflammatory disease of uterus, except cervix', 9),
(152, 'N72', 'Inflammatory disease of cervix uteri', 9),
(153, 'N75.0', 'Cyst of Bartholin''s gland', 9),
(154, 'N75.1', 'Abscess of Bartholin''s gland *', 9),
(155, 'N80', 'Endometriosis', 9),
(156, 'N81', 'Female genital prolapse', 9),
(157, 'N86', 'Erosion and ectropion of cervix uteri', 9),
(158, 'N87', 'Dysplasia of cervix uteri', 9),
(159, 'N91', 'Absent, scanty and rare menstruation*', 9),
(160, 'N92', 'Excessive, frequent and irregular menstruation *', 9),
(161, 'N94.6', 'Dysmenorrhea, unspecified*', 9),
(162, 'N95', 'Menopausal and other perimenopausal disorders *', 9),
(85, 'K02', 'Dental caries *', 10),
(86, 'K05.3', 'Chronic periodontitis *', 10),
(87, 'K12.0', 'Recurrent oral aphthae', 10),
(88, 'K12.2', 'Cellulitis and abscess of mouth *', 10),
(89, 'K21', 'Gastro-esophageal reflux disease *', 10),
(90, 'K25', 'Gastric ulcer', 10),
(91, 'K26', 'Duodenal ulcer', 10),
(92, 'K29', 'Gastritis and duodenitis', 10),
(93, 'K30', 'Functional dyspepsia', 10),
(94, 'K35', 'Acute appendicitis *', 10),
(95, 'K40', 'Inguinal hernia *', 10),
(96, 'K58', 'Irritable bowel syndrome *', 10),
(97, 'K59.0', 'Constipation', 10),
(98, 'K61', 'Abscess of anal and rectal regions *', 10),
(99, 'K65', 'Peritonitis *', 10),
(100, 'K73', 'Chronic hepatitis, not elsewhere classified', 10),
(101, 'K76.6', 'Portal hypertension', 10),
(102, 'K80', 'Cholelithiasis *', 10),
(103, 'K92.0', 'Hematemesis', 10),
(104, 'K92.1', 'Melena', 10),
(105, 'K92.2', 'Gastrointestinal hemorrhage, unspecified *', 10),
(67, 'J00', 'Acute nasopharyngitis [common cold] *', 11),
(68, 'J02', 'Acute pharyngitis', 11),
(69, 'J03', 'Acute tonsillitis *', 11),
(70, 'J13 -J16', 'Bacterial Pneumonia *', 11),
(71, 'J20', 'Acute bronchitis ', 11),
(72, 'J30', 'Vasomotor and allergic rhinitis *', 11),
(73, 'J31', 'Chronic rhinitis, nasopharyngitis and pharyngitis', 11),
(74, 'J32', 'Chronic sinusitis', 11),
(75, 'J33', 'Nasal polyp', 11),
(76, 'J34.0', 'Abscess, furuncle and carbuncle of nose *', 11),
(77, 'J35', 'Chronic diseases of tonsils and adenoids', 11),
(78, 'J36', 'Peritonsillar abscess', 11),
(79, 'J41', 'Simple and mucopurulent chronic bronchitis *', 11),
(80, 'J43', 'Emphysema', 11),
(81, 'J44.0', 'Chronic obstructive pulmonary disease with acute lower respiratory infection', 11),
(82, 'J44.1', 'Chronic obstructive pulmonary disease with (acute) exacerbation *', 11),
(83, 'J45', 'Asthma *', 11),
(84, 'J81', 'Pulmonary edema', 11),
(59, 'I10', 'Essential (primary) hypertension *', 12),
(60, 'I11.0', 'Hypertensive heart disease with heart failure *', 12),
(61, 'I20', 'Angina pectoris *', 12),
(62, 'I21', 'ST elevation (STEMI) and non-ST elevation (NSTEMI) myocardial infarction', 12),
(63, 'I50', 'Heart failure *', 12),
(64, 'I63', 'Cerebral infarction *', 12),
(65, 'I83', 'Varicose veins of lower extremities *', 12),
(66, 'I84', 'Hemorrhoids *', 12),
(36, 'G40', 'Epilepsy and recurrent seizures *', 13),
(37, 'G43', 'Migraine *', 13),
(38, 'G44.0', 'Cluster headaches and other trigeminal autonomic cephalgias (TAC) *', 13),
(39, 'G44.2', 'Tension-type headache *', 13),
(40, 'G45.9', 'Transient cerebral ischemic attack, unspecified', 13),
(41, 'G46', 'Vascular syndromes of brain in cerebrovascular diseases (STROKE) *', 13),
(42, 'G47.0', 'Insomnia', 13),
(43, 'G51.0', 'Bell''s palsy *', 13),
(44, 'G56.0', 'Carpal tunnel syndrome *', 13),
(54, 'H60', 'Otitis externa *', 14),
(55, 'H61.2', 'Impacted cerumen *', 14),
(56, 'H66.0', 'Acute suppurative otitis media *', 14),
(57, 'H66.1', 'Chronic tubotympanic suppurative otitis media *', 14),
(58, 'H81.1', 'Benign paroxysmal vertigo *', 14),
(184, 'S00', 'Superficial injury of head', 15),
(185, 'S01', 'Open wound of head', 15),
(186, 'S02', 'Fracture of skull and facial bones', 15),
(187, 'S03', 'Dislocation and sprain of joints and ligaments of head', 15),
(188, 'S05', 'Injury of eye and orbit', 15),
(189, 'S06', 'Intracranial injury', 15),
(190, 'S20', 'Superficial injury of thorax', 15),
(191, 'S21', 'Open wound of thorax', 15),
(192, 'S22', 'Fracture of rib(s), sternum and thoracic spine', 15),
(193, 'S23', 'Dislocation and sprain of joints and ligaments of thorax', 15),
(194, 'S27.0', 'Traumatic pneumothorax', 15),
(195, 'S27.1', 'Traumatic hemothorax', 15),
(196, 'S27.2', 'Traumatic hemopneumothorax', 15),
(197, 'S30', 'Superficial injury of abdomen, lower back, pelvis and external genitals', 15),
(198, 'S31', 'Open wound of abdomen, lower back, pelvis and external genitals', 15),
(199, 'S32', 'Fracture of lumbar spine and pelvis', 0),
(200, 'S40', 'Superficial injury of shoulder and upper arm', 15),
(201, 'S41', 'Open wound of shoulder and upper arm', 15),
(202, 'S42.0', 'Fracture of clavicle', 15),
(203, 'S42.2', 'Fracture of upper end of humerus', 15),
(204, 'S42.3', 'Fracture of shaft of humerus', 15),
(205, 'S42.4', 'Fracture of lower end of humerus', 15),
(206, 'S43.0', 'Subluxation and dislocation of shoulder joint', 15),
(207, 'S50', 'Superficial injury of elbow and forearm', 15),
(208, 'S51', 'Open wound of elbow and forearm', 15),
(209, 'S52', 'Fracture of forearm', 15),
(210, 'S53', 'Dislocation and sprain of joints and ligaments of elbow', 15),
(211, 'S58', 'Traumatic amputation of elbow and forearm', 15),
(213, 'S61', 'Open wound of wrist, hand and fingers', 15),
(214, 'S62', 'Fracture at wrist and hand level', 15),
(215, 'S63', 'Dislocation and sprain of joints and ligaments at wrist and hand level', 15),
(216, 'S67', 'Crushing injury of wrist, hand and fingers', 15),
(217, 'S68', 'Traumatic amputation of wrist, hand and fingers', 15),
(218, 'S70', 'Superficial injury of hip and thigh', 15),
(219, 'S71', 'Open wound of hip and thigh', 15),
(220, 'S72', 'Fracture of femur', 15),
(221, 'S73', 'Dislocation and sprain of joint and ligaments of hip', 15),
(222, 'S77', 'Crushing injury of hip and thigh', 15),
(223, 'S78', 'Traumatic amputation of hip and thigh', 15),
(224, 'S80', 'Superficial injury of knee and lower leg', 15),
(225, 'S81', 'Open wound of knee and lower leg', 15),
(226, 'S82', 'Fracture of lower leg, including ankle', 15),
(227, 'S83', 'Dislocation and sprain of joints and ligaments of knee', 15),
(228, 'S87', 'Crushing injury of lower leg', 15),
(229, 'S88', 'Traumatic amputation of lower leg', 15),
(230, 'S90', 'Superficial injury of ankle, foot and toes', 15),
(231, 'S91', 'Open wound of ankle, foot and toes', 15),
(232, 'S92', 'Fracture of foot and toe, except ankle', 15),
(233, 'S93', 'Dislocation and sprain of joints and ligaments at ankle, foot and toe level', 15),
(234, 'S97', 'Crushing injury of ankle and foot', 15),
(235, 'S98', 'Traumatic amputation of ankle and foot', 15),
(236, 'T07', 'Unspecified multiple injuries', 15),
(237, 'T15', 'Foreign body on external eye', 15),
(238, 'T16', 'Foreign body in ear', 15),
(239, 'T17.1', 'Foreign body in nostril', 15),
(240, '(T20-T25)', 'Burns and corrosions of external body surface, specified by site ', 15),
(241, '(T26-T28)', 'Burns and corrosions confined to eye and internal organs ', 15),
(242, '(T30-T32)', 'Burns and corrosions of multiple and unspecified body regions (T30-T32)', 15),
(243, 'T75.3', 'Motion sickness', 15),
(244, 'T78.2', 'Anaphylactic shock, unspecified', 15),
(245, 'T78.3', 'Angioneurotic edema', 15),
(246, 'C00-C14', 'Malignant neoplasm of lip, oral cavity and pharynx', 16),
(247, 'C15-C26', 'Malignant neoplasm of digestive organs', 16),
(248, 'C30-C39', 'Malignant neoplasm of respiratory and intrathoracic organs', 16),
(249, 'C40-C41', 'Malignant neoplasm of bone and articular cartilage', 16),
(250, 'C43-C44', 'Melanoma and other malignant neoplasms of skin', 16),
(251, 'C45-C49', 'Malignant neoplasms of mesothelial and soft tissue', 16),
(252, 'C50', 'Malignant neoplasm of breast', 16),
(253, 'C51-C58', 'Malignant neoplasm of female genital organs', 16),
(254, 'C60-C63', 'Malignant neoplasms of male genital organs', 16),
(255, 'C64-C68', 'Malignant neoplasm of urinary tract', 16),
(256, 'C69-C72', 'Malignant neoplasms of eye, brain and other parts of central nervous system', 16),
(257, 'C73-C75', 'Malignant neoplasm of thyroid and other endocrine glands', 16),
(258, 'C7A', 'Malignant neuroendocrine tumors', 16),
(259, 'C7B', 'Secondary neuroendocrine tumors', 16),
(260, 'C76-C80', 'Malignant neoplasms of ill-defined, other secondary and unspecified sites', 16),
(261, 'C81-C96', 'Malignant neoplasms of lymphoid, hematopoietic and related tissue', 16),
(262, 'D00-D09', 'In situ neoplasms', 16),
(263, 'D10-D36', 'Benign neoplasms, except benign neuroendocrine tumors', 16),
(264, 'D3A', 'Benign neuroendocrine tumors', 16),
(265, 'D37-D48', 'Neoplasms of uncertain behavior, polycythemia vera and myelodysplastic syndromes', 16),
(266, 'D49', 'Neoplasms of unspecified behavior', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testopt`
--

CREATE TABLE IF NOT EXISTS `testopt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `testopt`
--

INSERT INTO `testopt` (`id`, `opt`) VALUES
(24, 'a:3:{i:0;s:10:"pasienlama";i:1;s:10:"pasienbaru";i:2;s:10:"pasienlama";}'),
(25, 'a:3:{i:0;s:10:"pasienlama";i:1;s:10:"pasienbaru";i:2;s:10:"pasienlama";}'),
(26, 'a:3:{i:0;s:10:"pasienlama";i:1;s:10:"pasienbaru";i:2;s:10:"pasienlama";}'),
(23, 'a:3:{i:0;s:10:"pasienlama";i:1;s:10:"pasienbaru";i:2;s:10:"pasienlama";}'),
(22, 'a:3:{i:0;s:10:"pasienlama";i:1;s:10:"pasienbaru";i:2;s:10:"pasienlama";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE IF NOT EXISTS `tindakan` (
  `id_tindakan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_tindakan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tindakan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `jenis_tindakan`) VALUES
(1, 'pemeriksaan dokter dan konsultasi'),
(2, 'tindakan bedah'),
(3, 'tindakan non bedah'),
(4, 'tindakan KB'),
(5, 'laboratorium sederhana'),
(6, 'vaksinasi'),
(7, 'unidentified');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
