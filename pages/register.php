<div class="container mt-5" style="margin-bottom: 94px">
	<div class="row justify-content-center">
		<div class="col-sm-5">
			<h1>Registrasi</h1>
			<form action="process/proses_regis.php" method="post" enctype="multipart/form-data">
				
				<div class="form-group mt-3">
					Username
					<input type="text" name="nama" class="form-control">
				</div>

				<div class="form-group">
					Password
					<input type="Password" name="pass" class="form-control">
				</div>
				Profil Picture <br>
				<input type="file" name="foto"> <br/> <br/>
				<input type="submit" value="Register" class="btn btn-success">
			</form> <br>
			<h6>Sudah Punya Akun ? <a href="index.php?p=login" class="badge badge-primary">LOGIN</a></h6>
		</div>
	</div>
</div>