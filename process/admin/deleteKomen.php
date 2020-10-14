<?php
	
	require('../../database/Berita.php');

	$berita = new Berita();
	$berita->deleteKomen($_GET['id']);

	header('Location: ../../home_adm.php?p=komentar');
?>