<?php
	require 'database/Kategori.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 ml-5">
			<h1>Kategori Berita</h1>
			<a href="home_adm.php?p=tambah_kat">
				<button class="btn btn-primary">Tambah Kategori Berita</button>
			</a>
			<table class="table mt-3">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Kategori</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$kat = new Kategori();
						$data = $kat->tampilKat();

						$i = 1;
						foreach ($data as $row){
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row['nama_kat']; ?></td>
						<td>
							<a href="home_adm.php?p=edit_kat&&id=<?= $row['id_kat']; ?>" class="badge badge-warning">
								Edit
							</a>
							<a href="process/admin/deleteKat.php?id=<?= $row['id_kat']; ?>" class="badge badge-danger">
								Delete
							</a>

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