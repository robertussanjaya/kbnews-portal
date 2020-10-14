<?php
	require 'database/Admin.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 ml-5">
			<h1>List Admin</h1>
			<a href="home_adm.php?p=tambah_admin">
				<button class="btn btn-primary">Tambah Admin</button>
			</a>
			<table class="table mt-3">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Admin</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$admin = new Admin();
						$data = $admin->tampilAdmin();

						$i = 1;
						foreach ($data as $row){
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td>
							<a href="home_adm.php?p=edit_admin&&id=<?= $row['id']; ?>" class="badge badge-warning">Edit</a>
							<a href="process/admin/deleteAdm.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>

						</td>
					</tr>
					<?php
						$i++;
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>