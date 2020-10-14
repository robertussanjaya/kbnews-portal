<?php
	require 'database/Berita.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 ml-5">
			<h1>Komentar Berita</h1>
			<table class="table">
				<thead>
					<tr>
						<th>User</th>
						<th>Komentar</th>
						<th>Judul Berita</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$berita = new Berita();
						$data = $berita->tampilKomen_All();
						foreach ($data as $row){
							if(strlen($row['judul']) > 40){
								$maxlength = 41; 
								$judul = substr($row['judul'],0,$maxlength);
								$judul .= "...";
							}
							else{
								$judul = $row['judul'];
							}
					?>
					<tr>
						<td><?= $row['username']; ?></td>
						<td><?= $row['isi_komen']; ?></td>
						<td><?= $judul ?></td>
						<td>
							<a href="process/admin/deleteKomen.php?id=<?= $row['id_komen']; ?>" class="badge badge-danger" >Delete</a>
							
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>