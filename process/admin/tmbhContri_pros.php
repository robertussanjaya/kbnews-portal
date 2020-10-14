<?php

	require('../../database/Contributor.php');
	$nama = $_POST['nama'];
	$password = $_POST['pass'];
	$pass = password_hash($password, PASSWORD_BCRYPT);
	
	
	$contri = new Contributor();
	$contri->tambahContri($nama, $pass);


	header('Location: ../../home_adm.php?p=contributor');
?>