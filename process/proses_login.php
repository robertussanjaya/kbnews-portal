<?php

	session_start();

	$username = $_POST['username'];
	$password = $_POST['pass'];

	$dsn = "mysql:host=localhost;dbname=id14803266_kalbis_news";
	$pdo = new PDO($dsn, "id14803266_root", "nenquU{@8Fs2$+v)");

	$sql = "SELECT * FROM user WHERE username = ?";

	$stmt = $pdo->prepare($sql);
	$stmt->execute([$username]);

	if($row = $stmt->fetch()){
		if(password_verify($password, $row['password'])){
			$_SESSION['login'] = true;
			$_SESSION['username'] = $row['username'];
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['role'] = $row['role'];
			$_SESSION['foto'] = $row['foto'];

			if($_SESSION['role'] == 'admin'){
				header('location:../home_adm.php');
			}
			else if($_SESSION['role'] == 'contributor'){
				header('location:../home_contri.php');
			}
			else if($_SESSION['role'] == 'user'){
				header('location:../index.php');
			}

		}
		else{
			echo "password salah";
			header('location:../index.php?p=login');
		}
	}
	else{
		echo "username tidak ada";
		header("location:../index.php?p=login");
	}





?>