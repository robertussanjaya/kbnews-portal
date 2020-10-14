<?php
	
	include('../../database/Contributor.php');

	$contri = new Contributor();
	$contri->deleteBerita($_GET['id']);

	header('Location: ../../home_contri.php?p=berita');
?>