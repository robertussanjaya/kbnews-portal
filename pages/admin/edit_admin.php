<?php
	
	require 'database/Admin.php';

	$adm = new Admin();

	$row = $adm->tampilBy_UserId($_GET['id']);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 ml-5">
			<h1>Edit Admin</h1>
		</div>
		<div class="col-sm-10 col-md-2 ml-5">
			<form action="process/admin/editAdm_pros.php" method="post">
				
				Nama Admin
				<input type="text" name="nama" value="<?php echo $row['username']; ?>" class="form-control" style="width: 250px;"> <br/>
				Password Lama
				<input type="Password" name="passLama" value="" class="form-control" style="width: 250px;"> <br/>
				Password Baru
				<input type="Password" name="pass" value="" class="form-control" style="width: 250px;"> <br/>
				
				<input type="hidden" name="passDB" value="<?php echo $row['password']; ?>"> 
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<input type="hidden" name="role" value="<?php echo $row['role']; ?>">
				<input type="submit" value="Simpan Data" class="form-control btn-success" style="width: 150px">

			</form>
		</div>
	</div>
</div>