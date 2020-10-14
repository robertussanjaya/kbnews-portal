<?php
	session_start();
	require ('../database/User.php');

	$id = $_POST['id'];
	$username = $_POST['username'];
	$fotolama = $_POST['fotoLama'];
	$foto = $_FILES['foto']['name'];
	$pass = $_POST['password'];

	$_SESSION['username'] = $username;


	if(empty($foto)){
		$foto = $fotolama;
		$user = new User();

		$user->updateProfile($id, $username, $pass, $foto);
		var_dump($id, $username, $pass, $foto);
	}
	else{
		$foto = upload();
		$user = new User();

		$user->updateProfile($id, $username, $pass, $foto);
		var_dump($id, $username, $pass, $foto);
	}

	header('Location: ../index.php');