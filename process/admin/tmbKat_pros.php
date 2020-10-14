<?php

	require('../../database/Kategori.php');
	$namaKat = $_POST['nama_kat'];
	
	$kat = new Kategori();
	$kat->tambahKat($namaKat);

	header('Location: ../../home_adm.php?p=kategori');
?>