<?php

class Admin{

	private $pdo;

	function __construct(){ //underskor 2 KALI
		try{
			$this->pdo = new PDO('mysql:host=localhost;dbname=id14803266_kalbis_news', 'id14803266_root', 'nenquU{@8Fs2$+v)');
		}catch(PDOException $e){
			echo $e;
		}
	}

	public function tambahAdm($nama,$pass){
		$sql = "INSERT INTO user(username,password,role)
			VALUES(?, ?, ?)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$nama, $pass, 'admin']);
		echo "Data Berhasil Ditambah";
	}

	public function tampilAdmin(){
		$sql = "SELECT * FROM user
				WHERE role = 'admin'";
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

	public function updateAdm($nama, $pass, $id){
		$sql = "UPDATE user
			SET username =?, password =? WHERE id =? AND role = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$nama, $pass, $id, 'admin']);
	}

	public function deleteAdm($id){
		$sql = "DELETE FROM user WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
	}

	public function deleteUser($id){
		$sql = "DELETE FROM user WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
	}


	public function tampilBerita(){
		$sql = "SELECT * FROM berita
				JOIN user
				ON berita.id_user = user.id";
		$stmt = $this->pdo->query($sql);
		return $stmt;
	}

	public function deleteBerita($id){
		$sql = "DELETE FROM berita WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
	}

}