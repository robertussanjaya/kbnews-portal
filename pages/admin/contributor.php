<?php
	require 'database/Contributor.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 ml-5">
			<h1>List Contributor</h1>
			<a href="home_adm.php?p=tambah_contri">
				<button class="btn btn-primary">Tambah Contributor</button>
			</a>
			<table class="table mt-3">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Contributor</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$contri = new Contributor();
						$data = $contri->tampilContri();

						$i = 1;
						foreach ($data as $row){
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td>
							<a href="home_adm.php?p=edit_contri&&id=<?= $row['id']; ?>" class="badge badge-warning">Edit</a>
							<a href="process/admin/deleteContri.php?id=<?= $row['id']; ?>" class="badge badge-danger">Delete</a>
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