<?php
	require ('database/User.php');

	$user = new User();
	$row = $user->tampilBy_UserId($_GET['id']);

?>

<div class="container mt-5" style="margin-bottom: 106px">
	<div class="row justify-content-center">
		<div class="col-sm-12">
			<h1 class="text-center ml-3">User Profile</h1>
		</div>
		<div class="col-sm-12">
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

			<div class="text-center" method="post">
				<div class="form-group">	
					<img style="border-radius: 100%;width: 180px;height: 180px;" src="gambar/<?= $image; ?>">
				</div>
				<div class="form-group">
					<h2><?= $row['username']; ?></h2>
				</div> <br>
				<a href="index.php?p=editProfile&&id=<?= $row['id']; ?>">
					<button class="btn btn-success">Edit Profile</button>
				</a>
			</div>
		</div>
	</div>
</div>
	

</div>

