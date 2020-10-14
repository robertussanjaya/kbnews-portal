<?php

	require ('database/User.php');

	$user = new User();
	$row = $user->tampilBy_UserId($_GET['id']);

?>

<div class="container" style="margin-bottom: -20px">
	<div class="row justifiy-content-center">
		<div class="col-sm-12">
			<h1 class="text-center mt-4">Edit Profile</h1>
		</div>
		<div class="col-sm-12">
			<form class="text-center" action="process/editProfile_pros.php" method="post" enctype="multipart/form-data">
			
			<div style="width: 200px; margin: auto">
				<h6 class="text-left mt-3">Username</h6>
				<input type="text" name="username" style="width: 200px" value="<?= $row['username']; ?>">
			</div>

			<div class="form-group mt-3">
				<?php
					$image = $row['foto'];
					if($image == ""){
						$image = "default.jpg";
						// return $image;
					}
					else{
						$image = $row['foto'];
					}
				?>
				<img src="gambar/<?= $image; ?>" style="width: 180px;height: 180px;border-radius: 100%;">
				<input type="hidden" name="fotoLama" value="<?= $row['foto']; ?>">

				<div style="width: 200px; margin: auto">
					<h6 class="text-left mt-4">Ubah Profil Picture</h6>
					<input type="file" name="foto"> <br/>
				</div>
			</div>
			<input type="hidden" name="password" value="<?= $row['password']; ?>">
			<input type="hidden" name="id" value="<?= $row['id']; ?>"> 
			
			<div style="width: 200px; margin: auto">
				<input class="float-left btn btn-success" type="submit" value="Simpan Perubahan">
			</div>
		</form>
		</div>
	</div>
</div>