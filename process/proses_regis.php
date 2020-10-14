<?php

	require('../database/User.php');
	$nama = $_POST['nama'];
	$password = $_POST['pass'];
	$foto = upload();

	$pass = password_hash($password, PASSWORD_BCRYPT);

	$user = new User();
	$user->tambah($nama, $pass, $foto);

	//var_dump($nama,$pass,$foto)
	
	header('Location: ../index.php');
?>