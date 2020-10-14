<div class="container mt-5" style="margin-bottom: 148px">
	<div class="row justify-content-center">
		<div class="col-sm-5">
			<h1>Login</h1>
			<form action="process/proses_login.php" method="post">
				<div class="form-group mt-3">	
					Username :
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					Password :
					<input type="password" name="pass" class="form-control"> <br/>
				</div>

				<input type="submit" value="Login" class="btn btn-success">
			</form> <br>

			<h6>Belum Punya Akun ? <a href="index.php?p=register" class="badge badge-primary">REGISTER</a></h6>
		</div>
	</div>
</div>