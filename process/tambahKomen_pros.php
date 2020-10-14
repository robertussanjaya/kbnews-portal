<?php

	require ('../database/Berita.php');
	session_start();


	if(!isset($_SESSION['user_id'])){
		 echo "<script>

            alert('Anda Belum Login');

          </script>";

         header("location:../index.php?p=baca_berita&&id=".$id_berita);
	}
	else{
		$berita = new Berita();

		$id_user = $_POST['id_user'];
		$id_berita = $_POST['id_berita'];
		$komen = $_POST['komen'];

		$berita->tambah($komen,$id_user,$id_berita);
		header("location:../index.php?p=baca_berita&&id=".$id_berita);
	}

	

?>