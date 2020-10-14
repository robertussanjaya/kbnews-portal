<?php

	require('../../database/User.php');
	$nama = $_POST['nama'];
	$password = $_POST['pass'];
	$pass = password_hash($password, PASSWORD_BCRYPT);
	
	$user = new User();
	$user->tambah($nama, $pass);


	header('Location: ../../home_adm.php?p=kategori');
?>