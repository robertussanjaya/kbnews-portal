-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 09:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalbis_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `isi`, `gambar`, `id_kat`, `id_user`) VALUES
(11, 'Mourinho Dipecat, Manchester United Masih Gagal Temukan Pelatih Pengganti', '2018-12-18 21:59:11', '<p style=\"text-align: left;\"><strong>Jakarta</strong> - Dipecatnya Jose Mourinho membuat Manchester United sudah memberhentikan tiga pelatih dalam lima musim terakhir. Setan Merah kesulitan mencari pengganti Sir Alex Ferguson. Menchester United resmi mengumumkan telah memecat Jose Mourinho sebagai manajer. Pria asal Portugal ini dipecat rentang dua hari setelah Setan Merah kalah dari Liverpool 1-3.</p>\r\n<p style=\"text-align: left;\">Kekalahan atas The Reds membuat MU kini terperosok ke peringkat keenam dengan 26 poin. Setan Merah tertinggal 19 poin dari Liverpool di puncak klasemen. Pemecatan Mourinho ini membuat MU telah memecat tiga manajer dalam lima musim terakhir usai pensiunnya Sir Alex Ferguson.</p>\r\n<p style=\"text-align: left;\">Sebelumnya Mourinho, David Moyes dan Luis Van Gaal telah merasakan panasnya kursi manajer MU. David Moyes dipecat pada April 2014 sedangkan Van Gaal dipecat pada Mei 2016. Ferguson memutuskan pensiun pada akhir musim 2013 setelah menjadi pelatih tersukses di Old Trafford.</p>\r\n<p style=\"text-align: left;\">Selama 27 musim bersama Setan Merah, pria asal Skotlandia ini mempersembahkan 13 gelar Liga Inggris, dua gelar Liga Champions serta lima Piala FA. Usai era Sir Alex Ferguson, prestasi MU menurun drastis. Raihan terbaik Setan Merah di Liga Inggris hanyalah menjadi runner up di musim lalu.</p>', '5c190b3fa2a4f.jpeg', 4, 12),
(23, 'Solskjaer Kandidat Terdepan Manajer Permanen MU', '2019-01-16 06:31:35', '<p>Masa kerja Solskjaer bersama <a href=\"https://www.liputan6.com/tag/mu\" target=\"_blank\" rel=\"noopener\">MU</a> bakal berlangsung hingga akhir musim ini. Setelah masa pinjamannya habis, juru racil asal Norwegia itu kembali ke klubnya, Molde.</p>\r\n<div class=\"unruly_in_article_placement\" style=\"margin: 0 !important; padding: 0 !important; border: 0 !important; line-height: normal !important; text-align: left !important; letter-spacing: initial !important; min-width: initial !important; min-height: initial !important; box-sizing: initial !important; font-size: initial !important; display: block !important; overflow: hidden !important; position: relative !important; max-height: 1px !important; opacity: 1 !important; transition: max-height 0.5s cubic-bezier(0.445, 0.05, 0.55, 0.95) 0.2s !important;\" data-unruly-ad-type=\"horizontal\">\r\n<div class=\"unruly_ia_furniture\" style=\"margin: 0 !important; padding: 0 !important; border: 0 !important; line-height: normal !important; text-align: left !important; letter-spacing: initial !important; min-width: initial !important; min-height: initial !important; box-sizing: initial !important; font-size: initial !important; display: block !important; height: 22px !important;\"><img class=\"unruly_ia_closebutton\" style=\"margin: 2px 2px 1px 0 !important; padding: 0 !important; border: 0 !important; line-height: normal !important; text-align: left !important; letter-spacing: initial !important; min-width: 0 !important; min-height: initial !important; box-sizing: initial !important; font-size: initial !important; height: 18px !important; width: 18px !important; float: right !important; opacity: 0.25 !important; transition: all 0.25s cubic-bezier(0.445, 0.05, 0.55, 0.95) !important; outline: 1px solid transparent !important; cursor: pointer !important; left: auto !important; right: auto !important;\" src=\"https://video.unrulymedia.com/native/images/in-art-close-icon-128x128-16481b937f87b244a645cdbef0d930f8.png\" />\r\n<div class=\"unruly_ia_disclosure\" style=\"margin: 0 18px !important; padding: 0 !important; border: 0 !important; line-height: normal !important; text-align: left !important; letter-spacing: initial !important; min-width: initial !important; min-height: initial !important; box-sizing: initial !important; font-size: initial !important; display: block !important; opacity: 0.5 !important; padding-top: 2px !important;\">\r\n<div class=\"unruly_ia_disclosure_text\" style=\"margin: 0 !important; padding: 0 !important; border: 0 !important; line-height: 21px !important; text-align: center !important; letter-spacing: initial !important; min-width: initial !important; min-height: initial !important; box-sizing: initial !important; font-size: 10px !important; display: block !important; font-family: sans-serif !important;\">&ndash;&ndash; ADVERTISEMENT &ndash;&ndash;</div>\r\n</div>\r\n</div>\r\n<div class=\"unruly_in_article_video_container\" style=\"margin: 0 !important; padding: 0 !important; border: 0 !important; line-height: normal !important; text-align: left !important; letter-spacing: initial !important; min-width: initial !important; min-height: initial !important; box-sizing: initial !important; font-size: initial !important; display: block !important; position: relative !important; padding-bottom: 56.25% !important; height: 0 !important; background-color: transparent !important; margin-top: 1px !important;\">\r\n<div class=\"unruly_in_article_video_content_container\" style=\"margin: 0 !important; padding: 0 !important; border: 0 !important; line-height: normal !important; text-align: left !important; letter-spacing: initial !important; min-width: initial !important; min-height: initial !important; box-sizing: initial !important; font-size: initial !important; display: block !important; background-color: transparent !important; width: 100% !important; height: 100% !important; position: absolute !important; top: 0 !important; left: 0 !important;\"><video style=\"margin: 0 !important; padding: 0 !important; border: 0 !important; line-height: normal !important; box-sizing: border-box !important; text-align: left !important; letter-spacing: initial !important; min-width: initial !important; min-height: initial !important; outline: none !important; position: absolute !important; width: 100% !important; height: 100% !important; top: 0 !important; left: 0 !important; opacity: 1 !important;\" controls=\"controls\"></video></div>\r\n</div>\r\n<div class=\"unruly_ia_bottombar\" style=\"margin: 0 !important; padding: 0 !important; border: 0 !important; line-height: normal !important; text-align: left !important; letter-spacing: initial !important; min-width: initial !important; min-height: initial !important; box-sizing: initial !important; font-size: initial !important; display: block !important; height: 20px !important;\"><img class=\"unruly_ia_volume\" style=\"margin: 0 !important; padding: 0 !important; border: 0 !important; line-height: normal !important; text-align: left !important; letter-spacing: initial !important; min-width: initial !important; min-height: initial !important; box-sizing: initial !important; font-size: initial !important; z-index: 100 !important; width: 20px !important; height: 20px !important; cursor: pointer !important; opacity: 0.25 !important; float: right !important; -webkit-tap-highlight-color: rgba(0,0,0,0) !important; transition: all 0.25s cubic-bezier(0.445, 0.05, 0.55, 0.95) !important; background: black !important; border-radius: 50% !important; display: inline-block !important;\" src=\"https://video.unrulymedia.com/native/images/unmiss-sound-button-muted-e74d67a0c85c3548f07d7564782a269c.svg\" /></div>\r\n</div>\r\n<p>Meski demikian, Solskjaer tak setengah-setengah dalam menjalankan tugasnya. Buktinya ia telah membawa MU meraih enam kemenangan beruntun di semua kompetisi.</p>\r\n<p>Terbaru, Solskjaer membawa <a title=\"MU\" href=\"https://www.liputan6.com/bola/read/3871021/spalletti-mu-tak-mampu-beli-skriniar\">MU</a> mengalahkan Tottenham Hotspur 1-0 pekan ke-22 Liga Inggris di Stadion Wembley, Minggu (13/1/2019) lalu. Setan Merah menang 1-0 berkat gol Marcus Rashford.</p>\r\n<p>The Mirror, Selasa (15/1/2019), dalam laporannya menyebut kepala eskekutif MU Ed Woodward mengunjungi ruang ganti MU usai laga melawan Spurs. Ia memberikan selamat kepada Solskjaer atas kemenangan itu.</p>\r\n<p><strong>Kandidat Utama</strong></p>\r\n<p>Kini, Solskjaer menjadi kandidat utama untuk manajer permanen MU. Manajemen Setan Merah memang masih mencari sosok yang tepat untuk menggantikan Mourinho.</p>', '5c3e6d579864e.jpg', 4, 18),
(25, 'Thanos Jadi Tamu The Simpsons, Ini Momen Lucunya', '2019-01-16 06:35:54', '<p><strong>Liputan6.com, Jakarta -</strong> Serial animasi <em>The Simpsons</em> sudah mulai terpengaruh dengan pembelian aset hiburan Fox oleh Disney. Dalam episode 12 musik ke-30, serial ini menampilkan karakter dari komik Marvel, <a title=\"Thanos\" href=\"https://www.liputan6.com/showbiz/read/3643108/avengers-infinity-war-dan-thanos-disinggung-jokowi-di-forum-ekonomi-se-asean\">Thanos</a>.</p>\r\n<p>Seperti diketahui, Marvel saat ini tengah berada di bawah bendera Disney. Sehingga, Disney punya hak atas karakter-karakter komik tersebut. Termasuk memunculkan <a href=\"https://www.liputan6.com/tag/thanos\">Thanos</a> di serial <em>The Simpsons</em> yang telah lama menjadi properti Fox.</p>\r\n<p>Pada episode tersebut, Thanos terlihat sedang duduk di sofa ruang keluarga The Simpsons. Tanpa banyak basa-basi,&nbsp;ia langsung menjentikkan jarinya untuk melenyapkan setengah populasi layaknya film <em>Avengers: Infinity War</em>.</p>\r\n<p>Uniknya, anggota keluarga The Simpsons yang tak terpengaruh oleh jentikan <a href=\"https://www.liputan6.com/tag/thanos\">Thanos</a> tersebut adalah Maggie Simpsons, si bungsu yang masih bayi.</p>\r\n<h2 class=\"article-content-body__item-title\" data-component-name=\"desktop:read-page:article-content-body:section:pagetitle\">Nonton TV Bersama</h2>\r\n<div class=\"article-content-body__item-content\" data-component-name=\"desktop:read-page:article-content-body:section:text\">\r\n<p>Lucunya, alih-alih takut dengan Thanos, Maggie malah naik ke atas sofa untuk duduk menonton televisi bersama Thanos.</p>\r\n<p>Sutradara Avengers: Infinity War, Russo bersaudara, mengunggah video tersebut melalui akun Instagram @therussobrothers, Selasa (15/1/2019).</p>\r\n<h2 class=\"article-content-body__item-title\" data-component-name=\"desktop:read-page:article-content-body:section:pagetitle\">Komentar Warganet</h2>\r\n<div class=\"article-content-body__item-media\">&nbsp;</div>\r\n<div class=\"article-content-body__item-content\" data-component-name=\"desktop:read-page:article-content-body:section:text\">\r\n<p>\"<em>Fox&amp;Disney merger finally ??!?</em>\" tulis @mdwikyalfira.</p>\r\n<p>\"<em>Coming in clutch with the FOX deal</em>,\" ujar @superheronexus.</p>\r\n<p>\"<em>Wait the Simpson\'s didn\'t survive the snap. Come on</em>,\" kata @ramireli006.</p>\r\n<p>&nbsp;</p>\r\n<p><em>Liputan 6 - Showbizz</em></p>\r\n</div>\r\n</div>', '5c3e6e5a56c95.jpg', 9, 18),
(27, 'Pelantun I Believe I Can Fly R Kelly Disebut Monster oleh Sang Anak', '2019-01-16 06:42:59', '<p><strong>Liputan6.com, Los Angeles -</strong> Pelantun \"I Believe I Can Fly\", <a href=\"https://www.liputan6.com/tag/r-kelly\">R Kelly</a>, kini tengah terjerat skandal serius. Ia dituduh melakukan serangkaian tindakan ilegal, termasuk berhubungan intim dengan anak di bawah umur.</p>\r\n<p>Sejumlah seleb dunia pun sudah bereaksi keras terhadap skandal <a href=\"https://www.liputan6.com/tag/r-kelly\">R Kelly</a> ini. Salah satunya adalah Lady Gaga yang berencana menghapus lagu kolaborasinya bersama pria 52 tahun tersebut.</p>\r\n<p>Kini, anak perempuan R Kelly ikut bersuara soal skandal ini.</p>\r\n<p>Dilansir dari <em>E! News,</em> Jumat (11/1/2019), wanita bernama Buku Abi ini mencurahkan isi hatinya di Instagram Story miliknya mengenai skandal yang menimpa ayahnya.</p>\r\n<p>Di awal pernyataannya, Buku Abi meminta maaf karena dia telah lama bungkam mengenai persoalan ini. Ia mengatakan sikapnya itu bukan berarti ia tak peduli dengan apa yang menimpa korban <a href=\"https://www.liputan6.com/tag/r-kelly\">R Kelly</a>.</p>\r\n<p>\"Aku mendoakan seluruh keluarga dan perempuan yang terdampak perilaku ayahku. Percayalah, aku pun terkena dampak yang mendalam dari semua ini,\" tuturnya.</p>\r\n<h2 class=\"article-content-body__item-title\" data-component-name=\"desktop:read-page:article-content-body:section:pagetitle\">Dianggap Monster</h2>\r\n<div class=\"article-content-body__item-content\" data-component-name=\"desktop:read-page:article-content-body:section:text\">\r\n<p>Buku mengatakan bahwa selama bertahun-tahun ia dan sang ibu juga tak pernah lagi berkomunikasi dengan R Kelly. Hal ini, karena ia ingin sembuh dari luka hati yang didapatnya selama mengenal ayahnya.</p>\r\n<p>Ia bahkan menyebut ayahnya sebagai monster.</p>\r\n<p>\"Monster yang kalian lawan adalah ayahku. Aku tahu benar siapa dia. Aku dulu tinggal di rumah itu. Keputusanku untuk tak membicarakan dia adalah demi ketenangan pikiranku,\" tuturnya.</p>\r\n</div>', '5c3e7003f15b3.jpg', 6, 17),
(28, 'Messi Masih Mau Bertahan di Barcelona Usai 2020/2021?', '2020-09-07 14:23:14', '<p><strong style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Barcelona</strong><span style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">&nbsp;-&nbsp;</span></p>\r\n<p style=\"display: inline; color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\"><a style=\"text-decoration-line: none; border: none; font-weight: bold; color: #2a781e;\" href=\"https://www.detik.com/tag/lionel-messi\">Lionel Messi</a>&nbsp;diyakini pada akhirnya akan meninggalkan&nbsp;<a style=\"text-decoration-line: none; border: none; font-weight: bold; color: #2a781e;\" href=\"https://www.detik.com/tag/barcelona\">Barcelona</a>&nbsp;usai kontraknya tuntas. Meski begitu, Messi dispekulasikan masih mau bertahan setelah 2020/2021.</p>\r\n<p style=\"margin-top: 16px; color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Penyerang Barcelona sempat menggemparkan dunia sepakbola usai mengatakan ingin pergi di musim panas ini. Namun, Messi berubah pikiran karena tidak ingin menyeret Barca ke pengadilan terkait perbedaan pandangan mengenai klausul di kontraknya.</p>\r\n<p style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Kendati demikian, masa depan pemain terbaik dunia enam kali tersebut akan terus-terusan dibahas di sepanjang musim baru. Soalnya, kalau tidak ada perubahan maka Messi akan bebas bergabung dengan klub manapun usai kontraknya dengan Barca selesai pada Juni 2021.</p>\r\n<div class=\"clearfix\" style=\"padding: 0px; color: #2d2d2d; font-family: helvetica, arial; font-size: 16px; clear: both !important; height: 0px !important; float: none !important;\">&nbsp;</div>\r\n<div id=\"s_vid_1599463297619\" style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px; margin: 0px 0px 10px; text-align: center; height: 1px; width: 790px; overflow: hidden; opacity: 0.01; position: absolute;\">&nbsp;</div>\r\n<p style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Adapun niat Messi meninggalkan Barcelona adalah kekecewaan karena kegagalan klub membangun skuad yang kompetitif dalam beberapa musim terakhir. Sejak memenangi treble di 2014/15, Barcelona memang cenderung menurun.</p>\r\n<p style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Kini, pemain berusia 33 tahun itu akan bekerja sama dengan pelatih Ronald Koeman selama empat bulan sebelum berbicara dengan klub-klub peminatnya pada Januari tahun depan. Media Catalonia,<em>&nbsp;SPORT,</em>&nbsp;mengabarkan bahwa&nbsp;<a style=\"text-decoration-line: none; border: none; font-weight: bold; color: #2a781e;\" href=\"https://www.detik.com/tag/lionel-messi\">Messi</a>&nbsp;siap mendengarkan setiap tawaran yang diterima dan tidak akan membuat keputusan dengan terburu-buru.</p>\r\n<p style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Pemilihan Presiden Barcelona disebut akan menjadi kunci akan masa depan Messi di Camp Nou. Mengingat pemilihan tersebut diselenggarakan pada Maret 2021, presiden baru Barcelona akan diumumkan sebelum musim selesai.</p>\r\n<table class=\"linksisip\" style=\"color: red; font-weight: bold; margin: 15px 0px; padding: 0px; display: block; font-family: helvetica, arial; font-size: 16px;\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div class=\"lihatjg\"><strong>Baca juga:&nbsp;</strong><a style=\"text-decoration-line: none; border: none; color: #2a781e;\" href=\"https://sport.detik.com/sepakbola/bola-dunia/d-5162358/psg-akui-tergoda-rekrut-messi\" data-label=\"List Berita\" data-action=\"Berita Pilihan\" data-category=\"Detil Artikel\">PSG Akui Tergoda Rekrut Messi</a></div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\"><em>SPORT</em>&nbsp;juga menyebut, Messi akan mendengarkan rencana-rencana dari presiden Barcelona terpilih. Kalau proyek itu menarik, maka Messi pun diyakini tidak akan ragu untuk memperpanjang kontraknya di Barcelona.</p>\r\n<p style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Misalnya, Messi tertarik dengan prospek kembalinya Xavi Hernandez. Barcelona pernah berniat mendatangkan mantan gelandang top itu untuk menggantikan Ernesto Valverde, tapi tawaran tersebut ditolak. Sedangkan Messi percaya, Xavi akan menjadi angin segar untuk skuad Barcelona.</p>\r\n<p style=\"color: #2d2d2d; font-family: helvetica, arial; font-size: 16px;\">Sementara itu meninggalkan Barcelona tampaknya memang opsi terakhir yang akan dipilih kapten timnas Argentina itu. Apalagi, keluarga&nbsp;<a style=\"text-decoration-line: none; border: none; font-weight: bold; color: #2a781e;\" href=\"https://www.detik.com/tag/lionel-messi\">Lionel Messi</a>&nbsp;sudah sangat nyaman tinggal di&nbsp;<a style=\"text-decoration-line: none; border: none; font-weight: bold; color: #2a781e;\" href=\"https://www.detik.com/tag/barcelona\">Barcelona</a>.</p>', '5f55dfe249e14.jpeg', 4, 18),
(29, 'Rajin Ngerjai Penipu Online, Kaesang Sindir Siapa?', '2020-09-07 14:26:20', '<p><strong style=\"box-sizing: border-box; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Jakarta</strong><span style=\"font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">&nbsp;-&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; display: inline; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><a style=\"box-sizing: border-box; background: transparent; text-decoration-line: none; color: #562b77; transition: all 0.3s ease-in-out 0s;\" href=\"https://www.detik.com/tag/kaesang-pangarep\">Kaesang Pangarep</a>&nbsp;kembali membahas soal penjualan barang secara online yang mencurigakan. Kali ini, putra presiden Joko Widodo itu mengaku akan membeli&nbsp;<a style=\"box-sizing: border-box; background: transparent; text-decoration-line: none; color: #562b77; transition: all 0.3s ease-in-out 0s;\" href=\"https://www.detik.com/tag/smartphone\">smartphone</a>&nbsp;Samsung Galaxy S20 Ultra yang dijual dengan harga sangat miring.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 16px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Mau beli S20 Ultra seharga 3,7 juta dulu,\" tulisnya, sembari memajang akun sebuah toko online yang menjualnya.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Tertera di akun Instagram penjual bahwa S20 Ultra yang ia lego kondisinya second, dengan garansi dari Samsung indonesia. Spesifikasinya RAM 12 GB dengan memori internal 128 GB serta kondisinya mulus 100% seperti baru. Tulisnya pula, smartphone dijual dengan kondisi lengkap.</p>\r\n<div style=\"box-sizing: border-box; height: 0px;\">&nbsp;</div>\r\n<div id=\"_forkInArticleAdContainer\" style=\"box-sizing: border-box; border: none !important; width: 0px; height: 0px;\"><ins style=\"box-sizing: border-box; text-decoration-line: none; display: contents;\">\r\n<div id=\"beacon_e4e9ff1db0\" style=\"box-sizing: border-box; position: absolute; left: 0px; top: 0px; visibility: hidden;\"><img style=\"box-sizing: border-box; border: 0px none; vertical-align: middle; max-width: 100%; width: 0px; height: 0px;\" src=\"https://wtf2.forkcdn.com/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=4562&amp;loc=https%3A%2F%2Finet.detik.com%2Fcyberlife%2Fd-5162833%2Frajin-ngerjai-penipu-online-kaesang-sindir-siapa%3Ftag_from%3Dwp_nhl_7%26_ga%3D2.111359044.137938525.1599463296-1040409269.1599463296&amp;referer=https%3A%2F%2Fwww.detik.com%2F%3Ftagfrom%3Dframebar%26_ga%3D2.111359044.137938525.1599463296-1040409269.1599463296&amp;cb=e4e9ff1db0\" alt=\"\" width=\"0\" height=\"0\" /></div>\r\n</ins></div>\r\n<p>&nbsp;</p>\r\n<div class=\"clearfix\" style=\"box-sizing: border-box; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">&nbsp;</div>\r\n<div id=\"s_vid_1599463497289\" style=\"box-sizing: border-box; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px; margin: 0px 0px 10px; text-align: center; height: 1px; width: 694px; overflow: hidden; opacity: 0.01; position: absolute;\">&nbsp;</div>\r\n<div class=\"twitter-tweet twitter-tweet-rendered\" style=\"box-sizing: border-box; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px; display: flex; max-width: 550px; width: 518px; margin-top: 10px; margin-bottom: 10px;\"><iframe id=\"twitter-widget-0\" class=\"\" style=\"box-sizing: border-box; position: static; visibility: visible; width: 518px; height: 669px; display: block; flex-grow: 1;\" title=\"Twitter Tweet\" src=\"https://platform.twitter.com/embed/index.html?creatorScreenName=detikinet&amp;dnt=false&amp;embedId=twitter-widget-0&amp;frame=false&amp;hideCard=false&amp;hideThread=false&amp;id=1302819496957075456&amp;lang=id&amp;origin=https%3A%2F%2Finet.detik.com%2Fcyberlife%2Fd-5162833%2Frajin-ngerjai-penipu-online-kaesang-sindir-siapa&amp;siteScreenName=detikinet&amp;theme=light&amp;widgetsVersion=219d021%3A1598982042171&amp;width=550px\" frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"true\" data-tweet-id=\"1302819496957075456\"></iframe></div>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Tentu jika ditilik lebih lanjut, harga semurah itu tidak masuk akal bagi seri terbaru Galaxy Note. Harga baru S20 Ultra hampir Rp 20 juta, sehingga walaupun bekas, tak mungkin dijual senilai hanya Rp 3,7 juta.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">adi bisa disimpulkan,&nbsp;<a style=\"box-sizing: border-box; background: transparent; text-decoration-line: none; color: #562b77; transition: all 0.3s ease-in-out 0s;\" href=\"https://www.detik.com/tag/kaesang-pangarep\">Kaesang Pangarep</a>&nbsp;tidak benar-benar berniat membeli, melainkan sebagai peringatan agar netizen waspada. Atau mungkin ia sedang menyindir pihak terkait agar lebih sigap mengatasi penipuan semacam ini.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Hal serupa sudah ia lakukan sebelumnya kala mengerjai seseorang yang mengumumkannya sebagai pemenang undian lelang.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Saat itu, Kaesang dikirimi DM via Instagram menerangkan dirinya memenangkan sebuah lelang. Pemberi hadiah itu tertulis berakun Instagram, \'Rekening Hanya BCA\'.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Singkatnya, Kaesang pun menguji apakah barang tersebut bisa dikirim dan dibayar secara tunai jika barang sampai atau cash on delivery (COD).</p>\r\n<table class=\"pic_artikel_sisip_table\" style=\"border-collapse: collapse; border-spacing: 0px; text-align: center; margin-bottom: 20px; color: #666666; font-size: 12px; line-height: 14.4px; width: 518px; table-layout: fixed; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif;\" align=\"center\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; vertical-align: top; border: none; padding: 0px;\">\r\n<div class=\"pic_artikel_sisip\" style=\"box-sizing: border-box; color: #999999; font-size: 12px; line-height: 14.4px; width: 518px;\" align=\"center\">\r\n<div class=\"pic\" style=\"box-sizing: border-box; position: relative; display: inline-block; max-width: 100%;\"><img class=\"p_img_zoomin img-zoomin\" style=\"box-sizing: border-box; border: 0px none; vertical-align: middle; cursor: -webkit-zoom-in; position: relative; transition: transform 300ms ease 0s; max-width: 100%; max-height: 400px; height: auto; overflow: hidden; display: block; top: auto; left: auto; transform: none; margin-left: auto; margin-right: auto;\" title=\"Kaesang\" src=\"https://akcdn.detik.net.id/community/media/visual/2020/09/02/kaesang-1.png?w=478\" alt=\"Kaesang\" /><span style=\"box-sizing: border-box; position: relative; display: block; z-index: 1; padding-top: 8px; padding-bottom: 8px; border-bottom: 1px solid #e6e6e6;\">Kaesang Foto: (Twitter Kaesang)</span></div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Dijawab tidak, Kaesang akhirnya meminta sang penipu mengecek identitas Kaesang lewat akun Instagram. Kocaknya, sang penipu tak lagi basa basi melainkan langsung minta maaf dan mengatakan khilaf. Nah lo!</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Tak cuma itu, Kaesang juga ngisengin akun online shop penipu. Awalnya, Kaesang mendapat laporan soal akun Instagram penjual pakaian yang sebenarnya penipu. Dia lalu memesan dari online shop itu.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Dapet laporan kalo akun ini penipu. Ya udah saya iseng untuk beli barang mereka,\" tulis Kaesang Kaesang memesan lewat WhatsApp hingga mengirim alamat. Dia menulis namanya dan alamat di Istana Kepresidenan Bogor. Kaesang juga telah membayar Rp 125.000. Namun, belakangan online shop itu mengembalikan uangnya.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Saya sudah kasih alamat sampe mereka tanya lagi gimana kelanjutan ordernya. Setelah saya transfer, duit saya malah dikembaliin dan diblok saya. Pie to,\" ungkapnya.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Jadi, siapa yang disindir<a style=\"box-sizing: border-box; background: transparent; text-decoration-line: none; color: #562b77; transition: all 0.3s ease-in-out 0s;\" href=\"https://www.detik.com/tag/kaesang-pangarep\">&nbsp;</a>Kaesang Pangarep&nbsp;atau dia murni ingin mengisengi para penipu online?</p>', '5f55e09ca8635.jpeg', 6, 18);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`) VALUES
(4, 'Olahraga'),
(6, 'Infotainment'),
(8, 'Musik'),
(9, 'Movies');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komen` int(11) NOT NULL,
  `isi_komen` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komen`, `isi_komen`, `id_user`, `id_berita`) VALUES
(7, '#GGMU', 19, 23),
(8, 'Hahahaha', 21, 25),
(12, 'kaka', 18, 25),
(13, 'Hmm..', 21, 27),
(14, 'GGMU', 21, 23),
(15, 'Ish..', 21, 11),
(17, '??', 23, 27);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `foto`) VALUES
(11, 'Gugun', '$2y$10$C7o25NP33AdokjJSCy4.7.5OcvxlaAgsmjGDBQ91rU3ye0ygZqCym', 'admin', 'default.jpg'),
(12, 'Bambang', '$2y$10$O6jZ3w/ispUa90HmuUTV/uaEl5WS27OK15Pg14xU.apkdwNGKWe8q', 'contributor', 'default.jpg'),
(17, 'Agus', '$2y$10$oPUf7g1XZ7bbOR0jRjQCYewIyn3O7CCd1hFDa1GCM7/80JbF.TU4K', 'contributor', ''),
(18, 'Kadir', '$2y$10$UAtmIuG/QyjiayNHUuAMMeoYeaXyzYL7Ca8Fb6oFm3/CV098h7jG6', 'contributor', ''),
(21, 'Iyen', '$2y$10$NCS8orcgMo9./2fpSVsRw.d8NKdNqam7GQgTY/cYainTEXnO3xksW', 'user', '5c3f2812356ae.jpg'),
(23, 'Broto', '$2y$10$FfJpX1cuSpzRCAIs001EJ.zV5oX2y/zuP/1yPO1an2jyKZwcF5mj6', 'user', '5c3f2f136bfa1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kat` (`id_kat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_user` (`id_user`,`id_berita`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
