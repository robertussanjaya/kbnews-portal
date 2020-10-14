<?php
	require('../../database/Berita.php');

	$id_berita = $_POST['id_berita'];
	$judul = $_POST['judul'];
	$gambar = $_FILES['gambar']['name'];
	$gambarlama = $_POST['gambarlama'];
	$isi = $_POST['isi'];
	$tanggal = $_POST['tanggal'];
	$kategori = $_POST['kategori'];
	$id_user = $_POST['id_user'];


	if(empty($gambar)){
		$gambar = $gambarlama;
		$berita = new Berita();

		$berita->updateBerita($judul, $tanggal, $isi, $gambar, $kategori, $id_user, $id_berita);
	}
	else{
		$gambar = upload();
		$berita = new Berita();

		$berita->updateBerita($judul, $tanggal, $isi, $gambar, $kategori, $id_user, $id_berita);
	}


	header('Location: ../../home_contri.php');

?>