 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `jurusan` (
  `id_jur` int(20) NOT NULL,
  `nama_jur` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 
INSERT INTO `jurusan` (`id_jur`, `nama_jur`) VALUES
(1, 'Informatika'),
(2, 'Biologi'),
(3, 'Elektro');

 
CREATE TABLE `mahasiswa` (
  `nim` int(50) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `id_jur` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jur`);

 
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `nim` (`nim`);
COMMIT;
 