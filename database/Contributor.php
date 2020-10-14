<?php

class Contributor{

	private $pdo;

	function __construct(){ //underskor 2 KALI
		try{
			$this->pdo = new PDO('mysql:host=localhost;dbname=id14803266_kalbis_news', 'id14803266_root', 'nenquU{@8Fs2$+v)');
		}catch(PDOException $e){
			echo $e;
		}
	}

	public function tambahContri($nama,$pass){
		$sql = "INSERT INTO user(username,password,role)
			VALUES(?, ?, ?)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$nama, $pass, 'contributor']);
		echo "Data Berhasil Ditambah";
	}

	public function tampilContri(){
		$sql = "SELECT * FROM user
				WHERE role = 'contributor'";
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

	public function updateContri($nama, $pass, $id, $role){
		$sql = "UPDATE user
			SET username =?, password =? WHERE id =? AND role = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$nama, $pass, $id, $role]);
	}

	public function deleteContri($id){
		$sql = "DELETE FROM user WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
	}

	public function tambahBerita($judul,$isi,$tgl,$kat,$user,$gambar){
		$sql = "INSERT INTO berita(judul,isi,tanggal,id_kat,id_user,gambar)
				VALUES(?,?,?,?,?,?)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$judul,$isi,$tgl,$kat,$user,$gambar]);
		$data = $stmt->fetch();
		return $data;
	}

	public function tampilBerita($id){
		$sql = "SELECT * FROM berita
				JOIN user
				ON berita.id_user = user.id
				AND user.id = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		return $stmt;
	}

	public function deleteBerita($id){
		$sql = "DELETE FROM berita WHERE id_berita=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
	}

}

function upload(){
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile= $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName= $_FILES['gambar']['tmp_name'];

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
		if($ukuranFile > 1000000){
			echo"
				<script>
					alert('Ukuran gambar terlalu besar!');
				</script>
			";
		}

		$namaFileBaru = uniqid();
     	$namaFileBaru .= '.';
     	$namaFileBaru .= $ekstensiGambar;

     	$tujuan = "../../gambar/". $namaFileBaru;

		// setelah lolos cek gambar di upload
		move_uploaded_file($tmpName,$tujuan);
		return $namaFileBaru;

	}