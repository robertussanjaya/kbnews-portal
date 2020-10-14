<?php
	require('../../database/Admin.php');


	$admin = new Admin();

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$passLama = $_POST['passLama'];
	$passDB = $_POST['passDB'];
	$role = $_POST['role'];

	$pass = $_POST['pass'];
	$password = password_hash($pass, PASSWORD_BCRYPT);


	if(password_verify($passLama, $passDB)){
		$admin->updateAdm($nama, $password, $id, $role);
		header('Location: ../../home_adm.php?p=admin');
	}
	else{
		echo "Password Salah";

	}

?>