<?php
	require('../../database/Kategori.php');

	$kat = new Kategori();
	$kat->updateKat($_POST['nama_kat'], $_POST['id']);

	header('Location: ../../home_adm.php?p=kategori');

?>