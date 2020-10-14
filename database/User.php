<?php

class User{

	private $pdo;

	function __construct(){ //underskor 2 KALI
		try{
			$this->pdo = new PDO('mysql:host=localhost;dbname=id14803266_kalbis_news', 'id14803266_root', 'nenquU{@8Fs2$+v)');
		}catch(PDOException $e){
			echo $e;
		}
	}


	public function tambah($nama,$pass,$foto){
		$sql = "INSERT INTO user(username,password,role,foto)
			VALUES(?, ?, ?,?)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$nama, $pass, 'user',$foto]);
		echo "Data Berhasil Ditambah";
	}

	public function tampilUser(){
		$sql = "SELECT * FROM user
				WHERE role = 'user'";
		$stmt = $this->pdo->query($sql);
		return $stmt;
	}

	public function tampilBy_UserId($id){
		$sql = "SELECT * FROM user
				WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
	}

	public function updateProfile($id, $username, $pass, $foto){
		$sql = "UPDATE user SET username =?, 
				password =?,
				role =?,
				foto =?
				WHERE id = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$username,$pass, 'user', $foto, $id]);
	}

	

}

function upload(){
		$namaFile = $_FILES['foto']['name'];
		$ukuranFile= $_FILES['foto']['size'];
		$error = $_FILES['foto']['error'];
		$tmpName= $_FILES['foto']['tmp_name'];

		//cek apakah gambar yang diupload
		if( $error === 4){
			echo "
				<script>
					alert('Pilih gambar dahulu!');
				</script>
			";
			return false;
		}

		$ekstensiGambarValid = ['jpg','jpeg','png'];
		$ekstensiGambar = explode('.',$namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
			echo"
				<script>
					alert('Anda bukan upload gambar!');
				</script>
			";
			return false;
		}

		//cek jika ukuran terlalu Besar
		if($ukuranFile > 100000000){
			echo"
				<script>
					alert('Ukuran gambar terlalu besar!');
				</script>
			";
		}

		$namaFileBaru = uniqid();
     	$namaFileBaru .= '.';
     	$namaFileBaru .= $ekstensiGambar;

     	$tujuan = "../gambar/". $namaFileBaru;

		// setelah lolos cek gambar di upload
		move_uploaded_file($tmpName,$tujuan);
		return $namaFileBaru;

	}
