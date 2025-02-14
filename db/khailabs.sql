-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2025 pada 15.05
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khailabs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(5) NOT NULL,
  `judul` text NOT NULL,
  `gambar` text NOT NULL,
  `tentang_portfolio` text NOT NULL,
  `tanggal` date NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `judul`, `gambar`, `tentang_portfolio`, `tanggal`, `link`) VALUES
(1, 'Flappy Scream Chicken', '801.jpg', 'Permainan flappy legendaris kembali dengan nuansa tantangan baru dalam Edisi Suara Habis. Gunakan suara Anda untuk bermain game Scream Hero Flappy ini. Anda dapat berbisik, meniup, bicara, menyanyi, berteriak, atau bahkan berteriak lantang untuk bermain scream go flappy game ini. Jangan malu-malu saat bermain game suara ini! Masih berani cobain?  Ini adalah salah satu game dengan kendali suara yang terbaik. Cukup menggunakan suara Anda untuk bermain Scream Hero Flappy, berteriak atau menjerit gila bisa membuat burung terbang. Setiap kali Anda membuat suara berisik, burung akan mengepakkan sayapnya. Semakin keras Anda berteriak, semakin tinggi kepakan burungnya. Ini benar-benar sulit, tapi benar-benar nagih. Kontrol sederhana, tapi sulit untuk dikuasai.  Scream Hero Flappy menggunakan mikrofon untuk mengontrol gerak burung untuk mengepakkan dan terbang, jadi pastikan untuk membolehkan permintaan akses rekam suara. Untuk pengalaman terbaik, gunakan headphone atau kecilkan volume telepon Anda.', '2017-03-05', 'https://play.google.com/store/apps/details?id=com.afkarstudios.flappyscreamgo'),
(2, 'Boneka Arwah - Idle Game', '804.jpg', 'Boneka Arwah - Idle Game adalah gim idle di mana Anda dapat mengadopsi berbagai boneka arwah, merawatnya, dan membiarkan mereka mendapatkan koin untuk Anda saat Anda pergi atau menganggur.  Anda dapat mendekorasi rumah mereka untuk menjadi rumah paling penuh kasih di bumi.  Di rilis mendatang, Anda juga dapat menyesuaikan boneka Anda sendiri dengan banyak kosmetik yang dapat Anda beli dengan koin yang diperoleh dengan susah payah.', '2022-01-09', 'https://play.google.com/store/apps/details?id=com.KhaiLabs.SpiritDollIdle&hl=id&gl=US'),
(3, 'Epic Radgoll Fighting', '803.jpg', 'Game pertarungan berbasis fisika ragdoll paling epik di mana Anda mengontrol petarung ragdoll melawan petarung lain. Anda dapat memblokir serangan ragdoll, pukulan ragdoll, dan menendang ragdoll dalam game pertarungan ragdoll fisika ini. Tetapi Anda tidak dapat menebas dan mengiris, direncanakan untuk pembaruan di masa mendatang di mana Anda dapat memakai berbagai senjata menyenangkan dalam pertarungan.  Game ini adalah simulasi pertempuran ragdoll yang benar-benar akurat dari pertempuran di jalanan. Ini seperti pertarungan jalanan ragdoll atau sim tinju ragdoll, tetapi di jalanan.  Fitur: - Kulit - Lebih banyak level - Pertarungan bos  Segera akan datang: - Keterampilan - Senjata', '2021-04-16', 'https://play.google.com/store/apps/details?id=com.KhaiLabs.EpicRagdollFighting&hl=id&gl=US'),
(4, 'Lions Puzzle: Animal Hunting', '807.jpg', 'Ikuti mangsamu. Temukan target Anda. Berburu yang terlemah. Bagilah dari kemasannya. Jebak yang terkuat. Iris semuanya!  Bisakah kamu memburu mereka semua?', '2021-03-04', 'https://play.google.com/store/apps/details?id=com.KhaiLabs.AnimalHunt&hl=id&gl=US'),
(5, 'Snowman 3D', '800.jpg', 'Bangun manusia salju dalam 3D dan hiasi. Jadilah kreatif! Tapi hati-hati, jangan membuat bola salju terlalu kecil atau terlalu besar, atau Anda akan gagal.  Ayo bangun manusia salju di game manusia salju yang memuaskan ini!', '2020-12-05', 'https://play.google.com/store/apps/details?id=com.KhaiLabs.Snowman3D&hl=id&gl=US'),
(6, 'Hole Cutting Soap', '99.png', 'ASMR yang paling memuaskan permainan memotong ukiran sabun simulator pada tahun 2020. Potong beberapa sabun dengan lubang luar biasa dan rasakan sendiri.  Telan berbagai bentuk sabun ukiran warna-warni dan potong semuanya dengan lubang. Rasakan kepuasan luar biasa.  Hindari sabun hitam atau lubang akan meledak! Makan sabun ukiran sebanyak mungkin dan potong semua sabun yang menakjubkan dengan simulator lubang.  Memotong dan menghancurkan melalui tingkat santai dan memuaskan yang tak terhitung jumlahnya  Fitur Game: âœ… Teknologi Realistis Sabun Fisika Pemotongan âœ… Berbagai bentuk sabun berwarna-warni âœ… Gameplay Santai dan Menantang âœ… Mulai Ukir dan Potong sekarang!', '2019-08-13', 'https://play.google.com/store/apps/details?id=com.sticky.block.hole&hl=id&gl=US'),
(7, 'Snake Shift', '805.jpg', 'Anda adalah pergantian warna yang terjebak dalam permainan warna ini yang penuh dengan rintangan. Geser, geser, geser, dan naik ular warna Anda melalui, perangkap mematikan, blok warna, hambatan warna, dan menyelinap ke dalam lubang berwarna-warni yang cocok. Setelah Anda memainkan permainan warna ini, Anda harus fokus, Anda perlu berkonsentrasi, dan Anda akan ketagihan. Anda harus fokus untuk menghindari masalah dan menjadi Master Ular.  Dalam permainan adiktif gratis terbaik ini, warna dapat menjadi teman dan musuh Anda. Warna adalah masalahnya. Anda seret jari Anda ke kiri atau ke kanan untuk menghindari jebakan dan rintangan seperti orang gila. Berpikirlah seperti ular dan cepatlah mengikuti warna dan balok dalam permainan.  Jadilah Tuan Ular!', '2018-09-23', 'https://play.google.com/store/apps/details?id=com.khailabs.snakecolors&hl=id&gl=US'),
(8, 'Penguin Rescue! Rope', '99990.jpg', 'Saudara kembar penguin lucu mencoba menyelamatkan satu sama lain hanya menggunakan satu tali. Saudara penguin kecil yang lapar tidak bisa berenang atau mendaki bukit es. Kakak laki-laki mengikat adik penguin kecilnya dengan tali es, jadi dia tidak tenggelam di laut jika sesuatu yang buruk terjadi. Sementara mereka melemparkan, berselancar dan melangkah es mengapung dan kutub es di laut beku, mereka mengumpulkan kue ikan di sepanjang jalan mereka.  Control Penguins - Bouncemaster dan membantu mereka bertahan hidup, melompat dan berjalan langkah untuk menginjak floes es, mengumpulkan banyak kue ikan, topi, aksesoris, dan celana, dan akhirnya bertemu surfer orang tua mereka dengan bantuan dari tali es.  Cara bermain: Dalam game Penguins - The Bouncemaster, Anda bermain sebagai dua penguin lapar yang lucu yang diikat bersama oleh tali es. Ketuk untuk melemparkan penguin kedua (penguin di belakang yang lain) dan melangkah floe. Ketuk dan tahan untuk melemparkan lebih lama dan lebih jauh ke kutub es berikutnya. Awasi penguin Anda yang lain saat Anda melompat, dan jangan tarik yang lain ke laut di dekat tali es. Penguin bisa berenang dan berselancar, tetapi tidak untuk waktu yang lama, hati-hati terhadap hiu yang lapar. Anda dapat menyimpan penguin yang tenggelam dengan melemparkan penguin lainnya. Ketika semua penguin tenggelam, permainannya berakhir. Watch out for the wind and snow storm sambil melompat. Dan berhati-hatilah dengan platform floes and pole, karena semuanya akan menjadi spiral ketika angin dan platform bergerak menyatu.  Anda dapat mengumpulkan sebanyak mungkin kue ikan sambil melompat dan melintasi gumpalan es dan es di laut beku. Cookies Ikan dapat diperdagangkan dengan topi, aksesoris, dan celana. Sesuaikan surfer penguin Anda untuk menjadi yang paling imut dengan mengenakan topi dan celana lucu!  Selamat memantul dan jadilah Penguin - The Bouncemasters!', '2016-12-10', 'https://play.google.com/store/apps/details?id=com.afkarstudios.icyfloes&hl=id&gl=US'),
(9, 'Happy Class', '806.jpg', 'Happy Class adalah gim untuk Anda dan menempatkan lubang blok warna di tengah dan bermain saat Anda membosankan dan ingin melakukan sesuatu yang tidak hanya menyenangkan dan santai, tetapi juga menantang. Dengan berbagai mode permainan tentang kertas, pisau, lubang selamat dan blok, game ini akan menghibur Anda cukup lama dan membuat Anda bahagia.', '2018-08-27', 'https://play.google.com/store/apps/details?id=com.khailabs.happyclass&hl=id&gl=US'),
(29, 'ppppppppppp', 'WIN_20230320_11_34_50_Pro.jpg', 'ppooooooooo', '2023-11-10', 'poooooooooo'),
(30, 'Entry surat masuk', 'Cuplikan layar 2023-04-06 104313.png', 'dari bekasi beli nangka\r\nfak kata gua teh\r\nsvkbshjvbhjsbvhsbnvjkjsnrhbshrbrhsbfksnfkjnskvbvksndvkbsvbvhsvnhskvvbhvsvhbvhbfvbshfbvjkskjvbsjfbvkbfskvbjksvkbs', '2023-11-10', 'b'),
(31, 'ppppp', 'WIN_20230314_12_42_12_Pro.jpg', 'sjasbchbhjbjdbcbdsc dccbshjchjsdbchsddbc bchbdshcbsdbcsd chbbsdbvsdvi dcbksdbcsd ', '2023-11-08', 'y'),
(32, 'knknsvkv', 'WIN_20230314_12_43_50_Pro.jpg', 'alif mursalim kata gua apa jga yaa bjd\r\nalip juga jalan jalan ama komang sql ke blom m boleh ga sql\r\nvbsvhjbsvhjbvhbshdvbhsdbvhjsdvbhjbshvjbhjsbvjhjdhvdhsvbshdbvsdvjbdvsbvksv', '2023-11-03', 'b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbiodata`
--

CREATE TABLE `tbbiodata` (
  `id_biodata` int(11) NOT NULL,
  `nama_perusahaan` varchar(40) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_pimpinan` varchar(25) NOT NULL,
  `logo_perusahaan` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbbiodata`
--

INSERT INTO `tbbiodata` (`id_biodata`, `nama_perusahaan`, `telepon`, `alamat`, `nama_pimpinan`, `logo_perusahaan`, `visi`, `misi`) VALUES
(8, 'PT. Khailabs Kreatif Media', '081255200040', 'Paiton, Probolinggo, Indonesia', 'Gulpi Qorik Oktagalu Prat', 'k2.png', 'Memberikan pengalaman kompetisi sosial yang positif, unik, dan menyenangkan melalui media game', '- Menggumpulkan orang - orang berbakat dan memiliki passion di bidang game developmen, Melakukan manajemen tim agar dapat bekerja sama dengan baik dan dapat menghasilkan game yang berkualitas.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(11) NOT NULL,
  `judul_agenda` text NOT NULL,
  `konten_agenda` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `judul_agenda`, `konten_agenda`, `tanggal`, `id_user`) VALUES
(3, 'Morning Glory', 'Melaporkan hasil sprint selama 2 minggu ke Investor atau publisher', '2022-12-09', 1),
(4, 'Sprint Review', 'Melaporkan hasil sprint setiap minggu ke CEO', '2022-12-11', 1),
(5, 'Sprint Planing', 'Untuk merencanakan apa yang akan dikerjakan selama sprint', '2022-12-11', 1),
(6, 'Mentoring Teknikal', 'Mentoring bersama teknisi game prefesional setiap satu bulan sekali', '2022-12-25', 1),
(7, 'Mentoring ART', 'Mentoring bersama game artist prefesional setiap satu bulan sekali', '2022-12-18', 1),
(8, 'Mentoring Game Design', 'Mentoring bersama game designer prefesional setiap satu bulan sekali', '2022-12-20', 1),
(9, 'Mentoring Wali', 'Mentoring bersama mentor wali setiap satu bulan sekali, untuk melaporkan kendala kendala selama pembuatan game', '2022-12-30', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galery` int(8) NOT NULL,
  `judul_galeri` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galery`, `judul_galeri`, `gambar`, `tanggal`, `id_user`) VALUES
(5, 'Meeting Bersama Publisher', 'photo1670466373.jpeg', '2022-12-08', 0),
(6, 'Meeting Bersama Publisher', 'photo1670466400.jpeg', '2022-12-08', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama`, `subjek`, `email`, `pesan`, `tanggal`) VALUES
(10, 'Abin', 'game', 'Abin@gmail.com', 'mantabb', '2022-12-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_team`
--

CREATE TABLE `tb_team` (
  `id_team` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` text NOT NULL,
  `foto_pegawai` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email_pegawai` varchar(50) NOT NULL,
  `tentang_jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_team`
--

INSERT INTO `tb_team` (`id_team`, `nama`, `telepon`, `alamat`, `foto_pegawai`, `tanggal_lahir`, `jabatan`, `email_pegawai`, `tentang_jabatan`) VALUES
(2, 'Gulpi Qorik Oktagalu Pratamasunu', '08765678912', 'Paiton, proboinggo, Jawa timur, Indonesia', '1 (1).png', '2022-11-17', 'Team Lead & Game Designer', 'gulpi.qorik@gmail.com', 'Seseorang yang memegang saham atau pemilik perusahaan untuk memimpin dan mengelola perusahaan.'),
(3, 'Olief Ilmandira Ratu Farisi', '08765678912', 'Paiton, proboinggo, Jawa timur, Indonesia', '2 (1).png', '2022-11-15', 'Project Maneger', 'olief.ilmandira@gmail.com', 'Seseorang yang bertanggung jawab untuk mengarahkan usaha yang bertujuan membantu organisasi dalam mencapai sasarannya.'),
(4, 'Maulana Isman', '082139050151', 'Paiton, proboinggo, Jawa timur, Indonesia', '3 (1).png', '2022-11-10', '2D & 3D Artist', 'maulana.isman00@gmail.com', 'Seseorang yang bertugas menciptakan gambar 2D dan 3D untuk kemudian digunakan sebagai grafik didalam game.'),
(5, 'Suhadi', '085230829301', 'Paiton, proboinggo, Jawa timur, Indonesia', '4 (1).png', '2022-11-25', 'Programmer Back End', 'jesterthejokester@gmail.com', 'Seseorang game developer yang fokus pada pengolahan server(server side)'),
(6, 'Muhammad Fadil Hasan', '085771758545', 'Paiton, proboinggo, Jawa timur, Indonesia', '5 (1).png', '2022-11-17', 'Programmer Front End', 'adingnj2001@gmail.com', 'Seseorang Front End game developer bertanggung jawab atas komposisi tampilan sebuah game');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` smallint(3) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `telepon`, `alamat`, `username`, `password`) VALUES
(1, 'nandito maulana yedikar', '083119051731', 'bulu', 'dito', '123'),
(2, 'muhammad bintang pratama', '083119051731', 'patokan', 'abin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indeks untuk tabel `tbbiodata`
--
ALTER TABLE `tbbiodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indeks untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tbbiodata`
--
ALTER TABLE `tbbiodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galery` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id_team` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
