<?php

	require('../../database/Admin.php');
	$namaAdm = $_POST['nama'];
	$password = $_POST['pass'];
	$pass = password_hash($password, PASSWORD_BCRYPT);
	
	
	$admin = new Admin();
	$admin->tambahAdm($namaAdm, $pass);


	header('Location: ../../home_adm.php?p=admin');
?>