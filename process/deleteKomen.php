<?php
	
	require('../database/Berita.php');

	$berita = new Berita();
	$berita->deleteKomen($_GET['id']);

	$page = $_GET['page'];
	$location = "../index.php?p=baca_berita&&id=".$page;

	header('Location:'.$location);
?>