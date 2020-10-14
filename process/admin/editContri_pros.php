<?php
	require('../../database/Contributor.php');


	$contri = new Contributor();

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$passLama = $_POST['passLama'];
	$passDB = $_POST['passDB'];
	$role = $_POST['role'];

	$pass = $_POST['pass'];
	$password = password_hash($pass, PASSWORD_BCRYPT);


	if(password_verify($passLama, $passDB)){
		$contri->updateContri($nama, $password, $id, $role);
		header('Location: ../../home_adm.php?p=contributor');
	}
	else{
		echo "Password Salah";

	}

?>