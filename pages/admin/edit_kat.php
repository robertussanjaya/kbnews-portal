<?php
	
	require 'database/Kategori.php';

	$kat = new Kategori();

	$row = $kat->tampilBy_IdKat($_GET['id']);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 ml-5">
			<h1>Edit Kategori Berita</h1>
		</div>
		<div class="col-sm-10 col-md-2 ml-5">
			<form action="process/admin/editKat_pros.php" method="post">
				
				Kategori Berita :
				<input type="text" name="nama_kat" value="<?php echo $row['nama_kat']; ?>" class="form-control" style="width: 250px;"> <br/>
				<br/>
				<input type="hidden" name="id" value="<?php echo $row['id_kat']; ?>">
				<input type="submit" value="Simpan Data" class="form-control btn-success" style="width: 150px;">

			</form>
		</div>
	</div>
</div>