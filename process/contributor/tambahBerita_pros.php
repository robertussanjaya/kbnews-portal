<?php

	require('../../database/Contributor.php');
	session_start();

	$contri = new Contributor();

	$judul = $_POST['judul'];
	$kategori = $_POST['kategori'];
	$gambar = upload();
	$isi = $_POST['isi'];
	$user = $_SESSION['user_id'];
	$date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );
	$tgl = $date->format('Y-m-d H:i:s');

	
	$contri->tambahBerita($judul,$isi,$tgl,$kategori,$user,$gambar);

	header('Location: ../../home_contri.php?p=berita');
?>