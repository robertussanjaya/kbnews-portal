<?php
	require 'database/User.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 ml-5">
			<h1>List User</h1>
			<table class="table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Username</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$user = new User();
						$data = $user->tampilUser();

						$i = 1;
						foreach ($data as $row){
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td>
							<a href="process/admin/deleteUser.php?id=<?= $row['id']; ?>" class="badge badge-danger" >Delete</a>
							
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