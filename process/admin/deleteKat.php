<?php
	
	require('../../database/Kategori.php');

	$kat = new Kategori();
	$kat->deleteKat($_GET['id']);

	header('Location: ../../home_adm.php?p=kategori');
?>