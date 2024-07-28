

-- --------------------------------------------------------

--
-- Struktur dari tabel `HakAkses`
--

CREATE TABLE `HakAkses` (
 `IdAkses` varchar(10) NOT NULL,
 `NamaAkses` varchar(20) DEFAULT NULL,
 `Keterangan` varchar(50) DEFAULT NULL,
 `MenuAkses` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{}' CHECK (json_valid(`MenuAkses`)),
 PRIMARY KEY (`IdAkses`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `HakAkses`
--

INSERT INTO `HakAkses` (`IdAkses`, `NamaAkses`, `Keterangan`, `MenuAkses`) VALUES
('AK1', 'Admin', 'Akses penuh', '{}'),
('AK10', 'Pengunjung', 'Akses pengunjung', '{}'),
('AK11', 'Admin Backup', 'Akses admin cadangan', '{}'),
('AK12', 'User Support', 'Akses user support', '{}'),
('AK13', 'Kepala Bagian', 'Akses kepala bagian', '{}'),
('AK14', 'Supervisor', 'Akses supervisor', '{}'),
('AK15', 'Teknisi', 'Akses teknisi', '{}'),
('AK16', 'Peneliti', 'Akses peneliti', '{}'),
('AK17', 'Analis', 'Akses analis', '{}'),
('AK18', 'Pustakawan', 'Akses pustakawan', '{}'),
('AK19', 'Pengawas', 'Akses pengawas', '{}'),
('AK2', 'User', 'Akses terbatas', '{}'),
('AK20', 'Penyuluh', 'Akses penyuluh', '{}'),
('AK3', 'Manager', 'Akses manajerial', '{}'),
('AK4', 'Kasir', 'Akses kasir', '{}'),
('AK5', 'Dokter', 'Akses dokter', '{}'),
('AK6', 'Perawat', 'Akses perawat', '{}'),
('AK7', 'Staf', 'Akses staf umum', '{}'),
('AK8', 'Supplier', 'Akses supplier', '{}'),
('AK9', 'Pelanggan', 'Akses pelanggan', '{}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pelanggan`
--

CREATE TABLE `Pelanggan` (
 `IdPelanggan` varchar(10) NOT NULL,
 `NamaPengguna` varchar(20) DEFAULT NULL,
 `Password` varchar(32) DEFAULT NULL,
 `NamaDepan` varchar(20) DEFAULT NULL,
 `NamaBelakang` varchar(20) DEFAULT NULL,
 `NoHP` varchar(15) DEFAULT NULL,
 `Alamat` varchar(100) DEFAULT NULL,
 PRIMARY KEY (`IdPelanggan`),
 UNIQUE KEY `g` (`NamaPengguna`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `Pelanggan`
--

INSERT INTO `Pelanggan` (`IdPelanggan`, `NamaPengguna`, `Password`, `NamaDepan`, `NamaBelakang`, `NoHP`, `Alamat`) VALUES
('PL1', 'user1', '7c6a180b36896a0a8c02787eeafb0e4c', 'Aditya', 'Ramadhan', '08121234567', 'Jalan Merdeka 1, Jakarta'),
('PL10', 'user10', '87e897e3b54a405da144968b2ca19b45', 'Joko', 'Susanto', '08220123456', 'Jalan Juanda 10, Balikpapan'),
('PL11', 'user11', '1e5c2776cf544e213c3d279c40719643', 'Kirana', 'Ayu', '08231234567', 'Jalan Basuki Rahmat 11, Banjarmasin'),
('PL12', 'user12', 'c24a542f884e144451f9063b79e7994e', 'Lutfi', 'Annisa', '08242345678', 'Jalan HOS Cokroaminoto 12, Pekanbaru'),
('PL13', 'user13', 'ee684912c7e588d03ccb40f17ed080c9', 'Mira', 'Puspita', '08253456789', 'Jalan Pahlawan 13, Manado'),
('PL14', 'user14', '8ee736784ce419bd16554ed5677ff35b', 'Nurul', 'Hidayati', '08264567890', 'Jalan Diponegoro 14, Padang'),
('PL15', 'user15', '9141fea0574f83e190ab7479d516630d', 'Omar', 'Syaifuddin', '08275678901', 'Jalan Cendrawasih 15, Pontianak'),
('PL16', 'user16', '2b40aaa979727c43411c305540bbed50', 'Putri', 'Mahardika', '08286789012', 'Jalan Melati 16, Mataram'),
('PL17', 'user17', 'a63f9709abc75bf8bd8f6e1ba9992573', 'Qori', 'Hidayat', '08297890123', 'Jalan Kebon Jeruk 17, Batam'),
('PL18', 'user18', '80b8bdceb474b5127b6aca386bb8ce14', 'Rina', 'Kurnia', '08318901234', 'Jalan Anggrek 18, Cirebon'),
('PL19', 'user19', 'e532ae6f28f4c2be70b500d3d34724eb', 'Susi', 'Susanti', '08329012345', 'Jalan Merpati 19, Malang'),
('PL2', 'user2', '6cb75f652a9b52798eb6cf2201057c73', 'Bambang', 'Heryanto', '08132345678', 'Jalan Sudirman 2, Bandung'),
('PL20', 'user20', 'aee67d9bb569ad1562f7b67cfccbd2ef', 'Teguh', 'Santoso', '08330123456', 'Jalan Rajawali 20, Tangerang'),
('PL3', 'user3', '819b0643d6b89dc9b579fdfc9094f28e', 'Cindy', 'Halim', '08143456789', 'Jalan Gatot Subroto 3, Surabaya'),
('PL4', 'user4', '34cc93ece0ba9e3f6f235d4af979b16c', 'Dian', 'Kartika', '08154567890', 'Jalan Diponegoro 4, Medan'),
('PL5', 'user5', 'db0edd04aaac4506f7edab03ac855d56', 'Edy', 'Susanto', '08165678901', 'Jalan Imam Bonjol 5, Yogyakarta'),
('PL6', 'user6', '218dd27aebeccecae69ad8408d9a36bf', 'Fahmi', 'Pratama', '08176789012', 'Jalan Ahmad Yani 6, Semarang'),
('PL7', 'user7', '00cdb7bb942cf6b290ceb97d6aca64a3', 'Gita', 'Larasati', '08187890123', 'Jalan Thamrin 7, Makassar'),
('PL8', 'user8', 'b25ef06be3b6948c0bc431da46c2c738', 'Hendra', 'Wijaya', '08198901234', 'Jalan MH Thamrin 8, Palembang'),
('PL9', 'user9', '5d69dd95ac183c9643780ed7027d128a', 'Irma', 'Safitri', '08219012345', 'Jalan Jendral Sudirman 9, Denpasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pengguna`
--

CREATE TABLE `Pengguna` (
 `IdPengguna` varchar(10) NOT NULL,
 `IdAkses` varchar(10) DEFAULT NULL,
 `NamaPengguna` varchar(20) DEFAULT NULL,
 `Password` varchar(32) DEFAULT NULL,
 `NamaDepan` varchar(20) DEFAULT NULL,
 `NamaBelakang` varchar(20) DEFAULT NULL,
 `NoHP` varchar(15) DEFAULT NULL,
 `Alamat` varchar(100) DEFAULT NULL,
 PRIMARY KEY (`IdPengguna`),
 UNIQUE KEY `NamaPengguna` (`NamaPengguna`) USING BTREE,
 KEY `IdAkses` (`IdAkses`),
 CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`IdAkses`) REFERENCES `hakakses` (`IdAkses`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `Pengguna`
--

INSERT INTO `Pengguna` (`IdPengguna`, `IdAkses`, `NamaPengguna`, `Password`, `NamaDepan`, `NamaBelakang`, `NoHP`, `Alamat`) VALUES
('PG1', 'AK1', 'admin', 'passadmin', 'Admin', 'Satu', '081234567890', 'Jl. Mawar No. 1'),
('PG10', 'AK10', 'pengunjung', 'passpengunjung', 'Pengunjung', 'Sepuluh', '081234567899', 'Jl. Mawar No. 10'),
('PG11', 'AK11', 'admin2', 'passadmin2', 'Admin', 'Dua', '081234567800', 'Jl. Mawar No. 11'),
('PG12', 'AK12', 'support', 'passsupport', 'Support', 'Tiga', '081234567801', 'Jl. Mawar No. 12'),
('PG13', 'AK13', 'kepalabagian', 'passkepalabagian', 'Kepala', 'Empat', '081234567802', 'Jl. Mawar No. 13'),
('PG14', 'AK14', 'supervisor', 'passsupervisor', 'Supervisor', 'Lima', '081234567803', 'Jl. Mawar No. 14'),
('PG15', 'AK15', 'teknisi', 'passteknisi', 'Teknisi', 'Enam', '081234567804', 'Jl. Mawar No. 15'),
('PG16', 'AK16', 'peneliti', 'passpeneliti', 'Peneliti', 'Tujuh', '081234567805', 'Jl. Mawar No. 16'),
('PG17', 'AK17', 'analis', 'passanalis', 'Analis', 'Delapan', '081234567806', 'Jl. Mawar No. 17'),
('PG18', 'AK18', 'pustakawan', 'passpustakawan', 'Pustakawan', 'Sembilan', '081234567807', 'Jl. Mawar No. 18'),
('PG19', 'AK19', 'pengawas', 'passpengawas', 'Pengawas', 'Sepuluh', '081234567808', 'Jl. Mawar No. 19'),
('PG2', 'AK2', 'user', 'passuser', 'User', 'Dua', '081234567891', 'Jl. Mawar No. 2'),
('PG20', 'AK20', 'penyuluh', 'passpenyuluh', 'Penyuluh', 'Sebelas', '081234567809', 'Jl. Mawar No. 20'),
('PG3', 'AK3', 'manager', 'passmanager', 'Manager', 'Tiga', '081234567892', 'Jl. Mawar No. 3'),
('PG4', 'AK4', 'kasir', 'passkasir', 'Kasir', 'Empat', '081234567893', 'Jl. Mawar No. 4'),
('PG5', 'AK5', 'dokter', 'passdokter', 'Dokter', 'Lima', '081234567894', 'Jl. Mawar No. 5'),
('PG6', 'AK6', 'perawat', 'passperawat', 'Perawat', 'Enam', '081234567895', 'Jl. Mawar No. 6'),
('PG7', 'AK7', 'staf', 'passstaf', 'Staf', 'Tujuh', '081234567896', 'Jl. Mawar No. 7'),
('PG8', 'AK8', 'supplier', 'passsupplier', 'Supplier', 'Delapan', '081234567897', 'Jl. Mawar No. 8'),
('PG9', 'AK9', 'pelanggan', 'passpelanggan', 'Pelanggan', 'Sembilan', '081234567898', 'Jl. Mawar No. 9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Barang`
--

CREATE TABLE `Barang` (
 `IdBarang` varchar(10) NOT NULL,
 `IdPengguna` varchar(10) DEFAULT NULL,
 `NamaBarang` varchar(40) DEFAULT NULL,
 `Keterangan` varchar(100) DEFAULT NULL,
 `Satuan` varchar(20) DEFAULT NULL,
 PRIMARY KEY (`IdBarang`),
 KEY `IdPengguna` (`IdPengguna`),
 CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `Barang`
--

INSERT INTO `Barang` (`IdBarang`, `IdPengguna`, `NamaBarang`, `Keterangan`, `Satuan`) VALUES
('BR1', 'PG1', 'Paracetamol', 'Obat demam12', 'Tablet'),
('BR10', 'PG10', 'Ciprofloxacin', 'Antibiotik', 'Tablet'),
('BR11', 'PG11', 'Dexamethasone', 'Obat antiinflamasi', 'Tablet'),
('BR12', 'PG12', 'Clopidogrel', 'Obat jantung', 'Tablet'),
('BR13', 'PG13', 'Aspirin', 'Obat pengencer darah', 'Tablet'),
('BR14', 'PG14', 'Furosemide', 'Obat diuretik', 'Tablet'),
('BR15', 'PG15', 'Metronidazole', 'Antibiotik', 'Tablet'),
('BR16', 'PG16', 'Alprazolam', 'Obat ansietas', 'Tablet'),
('BR17', 'PG17', 'Diazepam', 'Obat ansietas', 'Tablet'),
('BR18', 'PG18', 'Hydrochlorothiazide', 'Obat diuretik', 'Tablet'),
('BR19', 'PG19', 'Levothyroxine', 'Obat tiroid', 'Tablet'),
('BR2', 'PG2', 'Amoxicillin', 'Antibiotik', 'Kapsul'),
('BR20', 'PG20', 'Prednisone', 'Obat antiinflamasi', 'Tablet'),
('BR3', 'PG3', 'Metformin', 'Obat diabetes', 'Tablet'),
('BR4', 'PG4', 'Omeprazole', 'Obat maag', 'Kapsul'),
('BR5', 'PG5', 'Loratadine', 'Obat alergi', 'Tablet'),
('BR6', 'PG6', 'Amlodipine', 'Obat tekanan darah tinggi', 'Tablet'),
('BR7', 'PG7', 'Ibuprofen', 'Obat antiinflamasi', 'Tablet'),
('BR8', 'PG8', 'Cetirizine', 'Obat alergi', 'Tablet'),
('BR9', 'PG9', 'Simvastatin', 'Obat kolesterol', 'Tablet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Supplier`
--

CREATE TABLE `Supplier` (
 `IdSupplier` varchar(10) NOT NULL,
 `NamaPengguna` varchar(20) DEFAULT NULL,
 `Password` varchar(32) DEFAULT NULL,
 `NamaSupplier` varchar(50) DEFAULT NULL,
 `NoTelp` varchar(15) DEFAULT NULL,
 `Alamat` varchar(100) DEFAULT NULL,
 PRIMARY KEY (`IdSupplier`),
 UNIQUE KEY `g` (`NamaPengguna`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `Supplier`
--

INSERT INTO `Supplier` (`IdSupplier`, `NamaPengguna`, `Password`, `NamaSupplier`, `NoTelp`, `Alamat`) VALUES
('SP1', 'user1', '7c6a180b36896a0a8c02787eeafb0e4c', 'Supplier Satu', '021-1234567', 'Jalan Merdeka 1, Jakarta'),
('SP10', 'user10', '87e897e3b54a405da144968b2ca19b45', 'Supplier Sepuluh', '0542-0123456', 'Jalan Juanda 10, Balikpapan'),
('SP11', 'user11', '1e5c2776cf544e213c3d279c40719643', 'Supplier Sebelas', '0511-1234567', 'Jalan Basuki Rahmat 11, Banjarmasin'),
('SP12', 'user12', 'c24a542f884e144451f9063b79e7994e', 'Supplier Duabelas', '0761-2345678', 'Jalan HOS Cokroaminoto 12, Pekanbaru'),
('SP13', 'user13', 'ee684912c7e588d03ccb40f17ed080c9', 'Supplier Tigabelas', '0431-3456789', 'Jalan Pahlawan 13, Manado'),
('SP14', 'user14', '8ee736784ce419bd16554ed5677ff35b', 'Supplier Empatbelas', '0751-4567890', 'Jalan Diponegoro 14, Padang'),
('SP15', 'user15', '9141fea0574f83e190ab7479d516630d', 'Supplier Limabelas', '0561-5678901', 'Jalan Cendrawasih 15, Pontianak'),
('SP16', 'user16', '2b40aaa979727c43411c305540bbed50', 'Supplier Enambelas', '0370-6789012', 'Jalan Melati 16, Mataram'),
('SP17', 'user17', 'a63f9709abc75bf8bd8f6e1ba9992573', 'Supplier Tujuhbelas', '0778-7890123', 'Jalan Kebon Jeruk 17, Batam'),
('SP18', 'user18', '80b8bdceb474b5127b6aca386bb8ce14', 'Supplier Delapanbelas', '0231-8901234', 'Jalan Anggrek 18, Cirebon'),
('SP19', 'user19', 'e532ae6f28f4c2be70b500d3d34724eb', 'Supplier Sembilanbelas', '0341-9012345', 'Jalan Merpati 19, Malang'),
('SP2', 'user2', '6cb75f652a9b52798eb6cf2201057c73', 'Supplier Dua', '022-2345678', 'Jalan Sudirman 2, Bandung'),
('SP20', 'user20', 'aee67d9bb569ad1562f7b67cfccbd2ef', 'Supplier Duapuluh', '021-0123456', 'Jalan Rajawali 20, Tangerang'),
('SP3', 'user3', '819b0643d6b89dc9b579fdfc9094f28e', 'Supplier Tiga', '031-3456789', 'Jalan Gatot Subroto 3, Surabaya'),
('SP4', 'user4', '34cc93ece0ba9e3f6f235d4af979b16c', 'Supplier Empat', '061-4567890', 'Jalan Diponegoro 4, Medan'),
('SP5', 'user5', 'db0edd04aaac4506f7edab03ac855d56', 'Supplier Lima', '0274-5678901', 'Jalan Imam Bonjol 5, Yogyakarta'),
('SP6', 'user6', '218dd27aebeccecae69ad8408d9a36bf', 'Supplier Enam', '024-6789012', 'Jalan Ahmad Yani 6, Semarang'),
('SP7', 'user7', '00cdb7bb942cf6b290ceb97d6aca64a3', 'Supplier Tujuh', '0411-7890123', 'Jalan Thamrin 7, Makassar'),
('SP8', 'user8', 'b25ef06be3b6948c0bc431da46c2c738', 'Supplier Delapan', '0711-8901234', 'Jalan MH Thamrin 8, Palembang'),
('SP9', 'user9', '5d69dd95ac183c9643780ed7027d128a', 'Supplier Sembilan', '0361-9012345', 'Jalan Jendral Sudirman 9, Denpasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pembelian`
--
CREATE TABLE `Pembelian` (
 `IdPembelian` varchar(10) NOT NULL,
 `IdPengguna` varchar(10) DEFAULT NULL,
 `IdSupplier` varchar(10) DEFAULT NULL,
 `IdBarang` varchar(10) DEFAULT NULL,
 `TanggalPembelian` datetime DEFAULT NULL,
 `JumlahPembelian` int(11) DEFAULT NULL,
 `HargaBeli` double DEFAULT NULL,
 PRIMARY KEY (`IdPembelian`),
 KEY `IdPengguna` (`IdPengguna`),
 KEY `IdBarang` (`IdBarang`),
 KEY `IdSupplier` (`IdSupplier`),
 CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`),
 CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`IdBarang`) REFERENCES `barang` (`IdBarang`),
 CONSTRAINT `pembelian_ibfk_3` FOREIGN KEY (`IdSupplier`) REFERENCES `supplier` (`IdSupplier`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `Pembelian`
--

INSERT INTO `Pembelian` (`IdPembelian`, `IdPengguna`, `IdSupplier`, `IdBarang`, `TanggalPembelian`, `JumlahPembelian`, `HargaBeli`) VALUES
('BL1', 'PG1', 'SP1', 'BR1', '2024-07-27 16:11:26', 100, 2000),
('BL10', 'PG10', 'SP10', 'BR10', '2024-07-27 16:11:26', 200, 2400),
('BL11', 'PG11', 'SP11', 'BR11', '2024-07-27 16:11:26', 300, 1900),
('BL12', 'PG12', 'SP12', 'BR12', '2024-07-27 16:11:26', 150, 2300),
('BL13', 'PG13', 'SP13', 'BR13', '2024-07-27 16:11:26', 250, 2700),
('BL14', 'PG14', 'SP14', 'BR14', '2024-07-27 16:11:26', 350, 1600),
('BL15', 'PG15', 'SP15', 'BR15', '2024-07-27 16:11:26', 450, 2900),
('BL2', 'PG2', 'SP2', 'BR2', '2024-07-27 16:11:26', 200, 1500),
('BL3', 'PG3', 'SP3', 'BR3', '2024-07-27 16:11:26', 300, 2500),
('BL4', 'PG4', 'SP4', 'BR4', '2024-07-27 16:11:26', 150, 1800),
('BL5', 'PG5', 'SP5', 'BR5', '2024-07-27 16:11:26', 250, 2200),
('BL6', 'PG6', 'SP6', 'BR6', '2024-07-27 16:11:26', 350, 1700),
('BL7', 'PG7', 'SP7', 'BR7', '2024-07-27 16:11:26', 450, 2600),
('BL8', 'PG8', 'SP8', 'BR8', '2024-07-27 16:11:26', 500, 2100),
('BL9', 'PG9', 'SP9', 'BR9', '2024-07-27 16:11:26', 100, 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `Penjualan`
--

CREATE TABLE `Penjualan` (
 `IdPenjualan` varchar(10) NOT NULL,
 `IdPengguna` varchar(10) DEFAULT NULL,
 `IdBarang` varchar(10) DEFAULT NULL,
 `IdPelanggan` varchar(10) DEFAULT NULL,
 `TanggalPembelian` datetime DEFAULT NULL,
 `JumlahPenjualan` int(11) DEFAULT NULL,
 `HargaJual` double DEFAULT NULL,
 PRIMARY KEY (`IdPenjualan`),
 KEY `IdPengguna` (`IdPengguna`),
 KEY `IdBarang` (`IdBarang`),
 KEY `penjualan_ibfk_3` (`IdPelanggan`),
 CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`),
 CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`IdBarang`) REFERENCES `barang` (`IdBarang`),
 CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`IdPelanggan`) REFERENCES `pelanggan` (`IdPelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `Penjualan`
--

INSERT INTO `Penjualan` (`IdPenjualan`, `IdPengguna`, `IdBarang`, `IdPelanggan`, `TanggalPembelian`, `JumlahPenjualan`, `HargaJual`) VALUES
('PJ1', 'PG1', 'BR1', 'PL1', 2024-07-27 16:11:26, 10, 2500),
('PJ10', 'PG10', 'BR10', 'PL10', 2024-07-27 16:11:26, 20, 2900),
('PJ11', 'PG11', 'BR11', 'PL11', 2024-07-27 16:11:26, 30, 2300),
('PJ12', 'PG12', 'BR12', 'PL12', 2024-07-27 16:11:26, 15, 2800),
('PJ13', 'PG13', 'BR13', 'PL13', 2024-07-27 16:11:26, 25, 3200),
('PJ14', 'PG14', 'BR14', 'PL14', 2024-07-27 16:11:26, 35, 2100),
('PJ15', 'PG15', 'BR15', 'PL15', 2024-07-27 16:11:26, 45, 3400),
('PJ2', 'PG2', 'BR2', 'PL2', 2024-07-27 16:11:26, 20, 2000),
('PJ3', 'PG3', 'BR3', 'PL3', 2024-07-27 16:11:26, 30, 3000),
('PJ4', 'PG4', 'BR4', 'PL4', 2024-07-27 16:11:26, 15, 2200),
('PJ5', 'PG5', 'BR5', 'PL5', 2024-07-27 16:11:26, 25, 2700),
('PJ6', 'PG6', 'BR6', 'PL6', 2024-07-27 16:11:26, 35, 1900),
('PJ7', 'PG7', 'BR7', 'PL7', 2024-07-27 16:11:26, 45, 3100),
('PJ8', 'PG8', 'BR8', 'PL8', 2024-07-27 16:11:26, 50, 2600),
('PJ9', 'PG9', 'BR9', 'PL9', 2024-07-27 16:11:26, 10, 3600);
COMMIT;
