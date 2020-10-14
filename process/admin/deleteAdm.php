<?php
	
	require('../../database/Admin.php');

	$admin = new Admin();
	$admin->deleteAdm($_GET['id']);

	header('Location: ../../home_adm.php?p=admin');
?>