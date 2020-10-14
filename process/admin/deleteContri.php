<?php
	
	require('../../database/Contributor.php');

	$contri = new Contributor();
	$contri->deleteContri($_GET['id']);

	header('Location: ../../home_adm.php?p=contributor');
?>