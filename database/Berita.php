<?php

class Berita{

	private $pdo;

	function __construct(){ //underskor 2 KALI
		try{
			$this->pdo = new PDO('mysql:host=localhost;dbname=id14803266_kalbis_news', 'id14803266_root', 'nenquU{@8Fs2$+v)');
		}catch(PDOException $e){
			echo $e;
		}
	}

	public function tampilBerita(){
		$sql = "SELECT * FROM berita
				JOIN user JOIN kategori
				ON berita.id_user = user.id
				AND berita.id_kat = kategori.id_kat
				order by id_berita desc";
		$stmt = $this->pdo->query($sql);
		return $stmt;
	}

	public function tampilBerita_ById($id){
		$sql = "SELECT * FROM berita
				JOIN user JOIN kategori
				ON berita.id_user = user.id
				AND berita.id_kat = kategori.id_kat
				AND berita.id_berita = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
	}

	public function tampilBerita_ByKat($id){
		$sql = "SELECT * FROM berita
				JOIN user JOIN kategori
				ON berita.id_user = user.id
				AND berita.id_kat = kategori.id_kat
				AND berita.id_kat = ?
				ORDER BY id_berita desc";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		return $stmt; //buat foreach by id
	}

	public function tambah($isi_komen,$id_user,$id_berita){
		$sql = "INSERT INTO komentar(isi_komen,id_user,id_berita)
			VALUES(?, ?, ?)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$isi_komen,$id_user,$id_berita]);
		echo "Data Berhasil Ditambah";
	}

	public function updateBerita($judul, $tgl, $isi, $gambar, $id_kat, $id_user, $id_berita){
		$sql = "UPDATE berita SET judul =?, 
				tanggal =?,
				isi =?,
				gambar =?,
				id_kat =?, 
				id_user =?
				WHERE id_berita = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$judul,$tgl, $isi, $gambar, $id_kat, $id_user, $id_berita]);

	}

	public function tampilKomen($id){
		$sql = "SELECT * FROM komentar
				JOIN berita JOIN user
				ON komentar.id_berita = berita.id_berita
				AND komentar.id_user = user.id
				AND komentar.id_berita = ?
				ORDER BY id_komen desc";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		return $stmt;
	}

	public function tampilKomen_All(){
		$sql = "SELECT * FROM komentar
				JOIN berita JOIN user
				ON komentar.id_berita = berita.id_berita
				AND komentar.id_user = user.id
				order by id_komen desc";
		$stmt = $this->pdo->query($sql);
		return $stmt;
	}

	public function tampilKomen_Id($id){
		$sql = "SELECT * FROM komentar
				JOIN berita JOIN user
				ON komentar.id_berita = berita.id_berita
				AND komentar.id_user = user.id
				AND id_komen = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
	}

	public function updateKomen($isi, $id_user, $id_berita, $id_komen){
		$sql = "UPDATE komentar SET isi_komen =?, 
				id_user =?,
				id_berita =?
				WHERE id_komen = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$isi, $id_user, $id_berita, $id_komen]);

	}

	public function deleteKomen($id){
		$sql = "DELETE FROM komentar WHERE id_komen = ?";
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
		// if( $error === 4){
		// 	echo "
		// 		<script>
		// 			alert('Pilih gambar dahulu!');
		// 		</script>
		// 	";
		// 	return false;
		// }

		$ekstensiGambarValid = ['jpg','jpeg','png'];
		$ekstensiGambar = explode('.',$namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		// if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		// 	echo"
		// 		<script>
		// 			alert('Anda bukan upload gambar!');
		// 		</script>
		// 	";
		// 	return false;
		// }

		//cek jika ukuran terlalu Besar
		// if($ukuranFile > 1000000){
		// 	echo"
		// 		<script>
		// 			alert('Ukuran gambar terlalu besar!');
		// 		</script>
		// 	";
		// }

		$namaFileBaru = uniqid();
     	$namaFileBaru .= '.';
     	$namaFileBaru .= $ekstensiGambar;

     	$tujuan = "../../gambar/". $namaFileBaru;

		// setelah lolos cek gambar di upload
		move_uploaded_file($tmpName,$tujuan);
		return $namaFileBaru;

	}