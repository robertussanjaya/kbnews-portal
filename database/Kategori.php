<?php

class Kategori{

	private $pdo;

	function __construct(){ //underskor 2 KALI
		try{
			$this->pdo = new PDO('mysql:host=localhost;dbname=id14803266_kalbis_news', 'id14803266_root', 'nenquU{@8Fs2$+v)');
		}catch(PDOException $e){
			echo $e;
		}
	}

	public function tambahKat($nama_kat){
		$sql = "INSERT INTO kategori(nama_kat)
			VALUES(?)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$nama_kat]);
		echo "Data Berhasil Ditambah";
	}

	public function tampilKat(){
		$sql = "SELECT * FROM kategori";
		$stmt = $this->pdo->query($sql);
		return $stmt;
	}

	public function tampilBy_Idkat($id_kat){
		$sql = "SELECT * FROM kategori
				WHERE id_kat=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id_kat]);
		$data = $stmt->fetch();
		return $data;
	}

	public function updateKat($nama_kat, $id_kat){
		$sql = "UPDATE kategori
			SET nama_kat =? WHERE id_kat =?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$nama_kat, $id_kat]);
	}

	public function deleteKat($id_kat){
		$sql = "DELETE FROM kategori WHERE id_kat=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id_kat]);
	}

}