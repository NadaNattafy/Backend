		
		<a class="btn btn-primary" href="?action=add">Add User</a>
		<br>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>id</th>
					<th>username</th>
					<th>email</th>
					<th>phone</th>
					<th>gender</th>
					<th>privliges</th>
					<th>Contorls</th>
				</tr>
			</thead>
			<tbody>
<?php 

	require_once 'functions/connect.php';
	$selectUser = "SELECT * FROM users";
	$query = $conn -> query($selectUser);
	$id = 0 ;
	foreach($query as $user){
		

?>

				<tr>
					<td><?= ++$id ?></td>
					<td><?= $user['username'] ?></td>
					<td><?= $user['email'] ?></td>
					<td><?= $user['phone'] ?></td>
					<td><?php

					// if($user['gender'] == 0) {
					// 	echo 'Male';
					// }else {
					// 	echo "Female";
					// }
					//ternary operator
	echo $user['gender'] == 0 ?'Male' : 'Female';			
					 ?></td>
					<td><?= $user['priv'] == 0 ? 'Admin' : 'User' ?></td>
					<td>
						<a class="btn btn-primary" href="?action=edit&id=<?= $user['id']  ?>">Edit</a>
						<a class="btn btn-danger" href="">Delete</a>
					</td>
				</tr>

	<?php } ?>
			</tbody>
		</table>