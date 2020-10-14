<?php
	
	require('../../database/Admin.php');

	$admin = new Admin();
	$admin->deleteUser($_GET['id']);

	header('Location: ../../home_adm.php?p=user');
?>