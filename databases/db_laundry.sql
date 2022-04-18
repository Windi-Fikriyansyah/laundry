-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 12:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id` int(11) NOT NULL,
  `no_faktur` varchar(30) NOT NULL,
  `kd_paket` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  `sub_total` double NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id`, `no_faktur`, `kd_paket`, `jumlah`, `harga`, `sub_total`, `waktu`) VALUES
(66, '20210819000001', 'PKT0009', '8', 20000, 160000, '1 hari'),
(67, '20210819000001', 'PKT0005', '1', 30000, 30000, '1 hari'),
(68, '20210819000002', 'PKT0009', '6', 20000, 120000, '1 hari'),
(69, '20210819000003', 'PKT0005', '2', 30000, 60000, '1 hari'),
(70, '20210819000004', 'PKT0010', '8', 5000, 40000, '3 hari'),
(71, '20210819000004', 'PKT0012', '5', 8000, 40000, '3 hari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id` int(11) NOT NULL,
  `kd_paket` varchar(40) NOT NULL,
  `nama_paket` varchar(40) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `harga` varchar(40) NOT NULL,
  `subtotal` varchar(40) NOT NULL,
  `id_user` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `kd_paket` varchar(15) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_satuan` int(13) NOT NULL,
  `id_waktu` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`kd_paket`, `nama_paket`, `harga`, `keterangan`, `id_satuan`, `id_waktu`) VALUES
('PKT0005', 'Tas Ransel Besar+pilih wangi', 30000, 'dapat memilih wangi yang diinginkan', 4, 3),
('PKT0006', 'Helm Express A', 23000, 'cuci helm dengan pengerjaan 1 hari saja', 4, 3),
('PKT0007', 'Helm Express B', 20000, 'cuci helm dengan pengerjaan 2 hari', 4, 4),
('PKT0008', 'Sepatu Boots', 30000, 'cuci sepatu boots', 4, 4),
('PKT0009', 'Gorden Tebal Akrilik', 20000, 'cuci gorden tebal akrilik', 3, 3),
('PKT0010', 'cuci pakaian biasa', 5000, 'cuci pakaian dan setrika', 3, 5),
('PKT0011', 'Karpet Permadani', 20000, 'cuci karpet permadani', 5, 4),
('PKT0012', 'cuci cepat + setrika + pilih wangian', 8000, 'dapat memilih wangi yang diinginkan', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telpn` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_telpn`) VALUES
('CS001', 'reza', 'pontianak', '628971217079'),
('CS003', 'eki', 'jalan gusti nata jaya', '6289630389985'),
('CS004', 'bu anna', 'kota pontianak', '6289637994920'),
('CS005', 'aufa', 'mempawah', '6285155113570'),
('CS006', 'bu yulia', 'pontianak', '6281257682682');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengambilan`
--

CREATE TABLE `tb_pengambilan` (
  `id_user` int(13) NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `no_faktur` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `total_bayar` double NOT NULL,
  `kembalian` double NOT NULL,
  `grand_total` double NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengeluaran`
--

CREATE TABLE `tb_pengeluaran` (
  `kd_pengeluaran` varchar(11) NOT NULL,
  `nama_pl` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `total` double NOT NULL,
  `id_user` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengeluaran`
--

INSERT INTO `tb_pengeluaran` (`kd_pengeluaran`, `nama_pl`, `tanggal`, `keterangan`, `total`, `id_user`) VALUES
('PL001', 'sabun', '2021-08-05', 'beli sabun', 1000000, 14),
('PL002', 'listrik', '2021-08-14', 'beli listrik', 2000000, 13),
('PL007', 'Kantong Plastik', '2021-08-12', 'Beli Kantong Plastik', 100000, 14),
('PL008', 'bayar air', '2021-08-21', 'bayar air', 200000, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `nama_satuan`) VALUES
(3, '/kg'),
(4, '/unit');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `no_faktur` varchar(30) NOT NULL,
  `id_pelanggan` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_ambil` date NOT NULL,
  `id_user` int(13) NOT NULL,
  `total` double NOT NULL,
  `bayar` double NOT NULL,
  `kembalian` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`no_faktur`, `id_pelanggan`, `tgl_masuk`, `tgl_ambil`, `id_user`, `total`, `bayar`, `kembalian`) VALUES
('20210819000001', 'CS003', '2021-08-19', '2021-08-20', 14, 190000, 200000, 10000),
('20210819000003', 'CS005', '2021-08-19', '2021-08-19', 14, 60000, 70000, 10000),
('20210819000004', 'CS006', '2021-08-19', '2021-08-22', 14, 40000, 50000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telpn` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bagian` int(1) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `alamat`, `no_telpn`, `username`, `password`, `bagian`, `foto`) VALUES
(13, 'windi', 'jl.raden kusno', '089676615517', 'owner', '8cb2237d0679ca88db6464eac60da96345513964', 2, 'User.png'),
(14, 'fikri', 'jalan pontianak', '089676615517', 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 1, 'download.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_waktu`
--

CREATE TABLE `tb_waktu` (
  `id_waktu` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_waktu`
--

INSERT INTO `tb_waktu` (`id_waktu`, `nama`) VALUES
(3, '1 hari'),
(4, '2 hari'),
(5, '3 hari'),
(7, '4 hari'),
(8, '5 hari'),
(9, '5 hari'),
(10, '6 hari'),
(11, '7 hari');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_detail_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `v_detail_transaksi` (
`id` int(11)
,`no_faktur` varchar(30)
,`kd_paket` varchar(50)
,`jumlah` varchar(50)
,`harga` double
,`sub_total` double
,`waktu` varchar(50)
,`nama_paket` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_paket`
-- (See below for the actual view)
--
CREATE TABLE `v_paket` (
`kd_paket` varchar(15)
,`nama_paket` varchar(50)
,`harga` double
,`keterangan` varchar(50)
,`id_satuan` int(13)
,`id_waktu` int(13)
,`nama_satuan` varchar(30)
,`nama` varchar(40)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pengambilan`
-- (See below for the actual view)
--
CREATE TABLE `v_pengambilan` (
`no_faktur` varchar(30)
,`id_pelanggan` varchar(50)
,`tgl_masuk` date
,`tgl_ambil` date
,`id_user` int(13)
,`total` double
,`bayar` double
,`kembalian` double
,`nama` varchar(50)
,`no_telpn` varchar(14)
,`alamat` varchar(40)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pengeluaran`
-- (See below for the actual view)
--
CREATE TABLE `v_pengeluaran` (
`kd_pengeluaran` varchar(11)
,`nama_pl` varchar(40)
,`tanggal` date
,`keterangan` varchar(40)
,`total` double
,`id_user` int(13)
,`nama_user` varchar(40)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `v_transaksi` (
`no_faktur` varchar(30)
,`id_pelanggan` varchar(50)
,`tgl_masuk` date
,`tgl_ambil` date
,`id_user` int(13)
,`total` double
,`bayar` double
,`kembalian` double
,`jumlah` varchar(50)
,`harga` double
,`sub_total` double
,`waktu` varchar(50)
,`nama_user` varchar(40)
,`nama` varchar(50)
,`no_telpn` varchar(14)
,`nama_paket` varchar(50)
,`kd_paket` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v_detail_transaksi`
--
DROP TABLE IF EXISTS `v_detail_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_detail_transaksi`  AS  (select `tb_detail_transaksi`.`id` AS `id`,`tb_detail_transaksi`.`no_faktur` AS `no_faktur`,`tb_detail_transaksi`.`kd_paket` AS `kd_paket`,`tb_detail_transaksi`.`jumlah` AS `jumlah`,`tb_detail_transaksi`.`harga` AS `harga`,`tb_detail_transaksi`.`sub_total` AS `sub_total`,`tb_detail_transaksi`.`waktu` AS `waktu`,`tb_paket`.`nama_paket` AS `nama_paket` from (`tb_detail_transaksi` join `tb_paket`) where (`tb_detail_transaksi`.`kd_paket` = `tb_paket`.`kd_paket`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_paket`
--
DROP TABLE IF EXISTS `v_paket`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_paket`  AS  (select `tb_paket`.`kd_paket` AS `kd_paket`,`tb_paket`.`nama_paket` AS `nama_paket`,`tb_paket`.`harga` AS `harga`,`tb_paket`.`keterangan` AS `keterangan`,`tb_paket`.`id_satuan` AS `id_satuan`,`tb_paket`.`id_waktu` AS `id_waktu`,`tb_satuan`.`nama_satuan` AS `nama_satuan`,`tb_waktu`.`nama` AS `nama` from ((`tb_paket` join `tb_satuan`) join `tb_waktu`) where ((`tb_paket`.`id_satuan` = `tb_satuan`.`id_satuan`) and (`tb_paket`.`id_waktu` = `tb_waktu`.`id_waktu`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengambilan`
--
DROP TABLE IF EXISTS `v_pengambilan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengambilan`  AS  (select `tb_transaksi`.`no_faktur` AS `no_faktur`,`tb_transaksi`.`id_pelanggan` AS `id_pelanggan`,`tb_transaksi`.`tgl_masuk` AS `tgl_masuk`,`tb_transaksi`.`tgl_ambil` AS `tgl_ambil`,`tb_transaksi`.`id_user` AS `id_user`,`tb_transaksi`.`total` AS `total`,`tb_transaksi`.`bayar` AS `bayar`,`tb_transaksi`.`kembalian` AS `kembalian`,`tb_pelanggan`.`nama` AS `nama`,`tb_pelanggan`.`no_telpn` AS `no_telpn`,`tb_pelanggan`.`alamat` AS `alamat` from (`tb_transaksi` join `tb_pelanggan`) where (`tb_transaksi`.`id_pelanggan` = `tb_pelanggan`.`id_pelanggan`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengeluaran`
--
DROP TABLE IF EXISTS `v_pengeluaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengeluaran`  AS  (select `tb_pengeluaran`.`kd_pengeluaran` AS `kd_pengeluaran`,`tb_pengeluaran`.`nama_pl` AS `nama_pl`,`tb_pengeluaran`.`tanggal` AS `tanggal`,`tb_pengeluaran`.`keterangan` AS `keterangan`,`tb_pengeluaran`.`total` AS `total`,`tb_pengeluaran`.`id_user` AS `id_user`,`tb_user`.`nama_user` AS `nama_user` from (`tb_pengeluaran` join `tb_user`) where (`tb_pengeluaran`.`id_user` = `tb_user`.`id_user`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_transaksi`
--
DROP TABLE IF EXISTS `v_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_transaksi`  AS  (select `tb_transaksi`.`no_faktur` AS `no_faktur`,`tb_transaksi`.`id_pelanggan` AS `id_pelanggan`,`tb_transaksi`.`tgl_masuk` AS `tgl_masuk`,`tb_transaksi`.`tgl_ambil` AS `tgl_ambil`,`tb_transaksi`.`id_user` AS `id_user`,`tb_transaksi`.`total` AS `total`,`tb_transaksi`.`bayar` AS `bayar`,`tb_transaksi`.`kembalian` AS `kembalian`,`tb_detail_transaksi`.`jumlah` AS `jumlah`,`tb_detail_transaksi`.`harga` AS `harga`,`tb_detail_transaksi`.`sub_total` AS `sub_total`,`tb_detail_transaksi`.`waktu` AS `waktu`,`tb_user`.`nama_user` AS `nama_user`,`tb_pelanggan`.`nama` AS `nama`,`tb_pelanggan`.`no_telpn` AS `no_telpn`,`tb_paket`.`nama_paket` AS `nama_paket`,`tb_detail_transaksi`.`kd_paket` AS `kd_paket` from ((((`tb_transaksi` join `tb_detail_transaksi`) join `tb_user`) join `tb_paket`) join `tb_pelanggan`) where ((`tb_transaksi`.`no_faktur` = `tb_detail_transaksi`.`no_faktur`) and (`tb_transaksi`.`id_pelanggan` = `tb_pelanggan`.`id_pelanggan`) and (`tb_transaksi`.`id_user` = `tb_user`.`id_user`) and (`tb_detail_transaksi`.`kd_paket` = `tb_paket`.`kd_paket`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`kd_paket`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pengambilan`
--
ALTER TABLE `tb_pengambilan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pengeluaran`
--
ALTER TABLE `tb_pengeluaran`
  ADD PRIMARY KEY (`kd_pengeluaran`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_waktu`
--
ALTER TABLE `tb_waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_waktu`
--
ALTER TABLE `tb_waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
