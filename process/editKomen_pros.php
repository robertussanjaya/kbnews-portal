<?php

	require ('../database/Berita.php');

	$isi_komen = $_POST['isi_komen'];
	$id_user = $_POST['id_user'];
	$id_berita = $_POST['id_berita'];
	$id_komen = $_POST['id_komen'];



	$berita = new Berita();

	$berita->updateKomen($isi_komen, $id_user, $id_berita, $id_komen);

	header('Location: ../index.php?p=baca_berita&&id='.$id_berita);