		
		<a class="btn btn-primary" href="?action=add">Add products</a>
		<br>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>price</th>
					<th>sale</th>
					<th>image</th>
					<th>category</th>
					<th>Contorls</th>
				</tr>
			</thead>
			<tbody>
	<?php 

		require_once 'functions/connect.php';
		$selPro = "SELECT * FROM products";
		$query = $conn -> query($selPro);
		$id = 0 ;
		foreach($query as $product){



	?>
				<tr>
					<td><?php echo ++$id ?></td>
					<td><?= $product['name'] ?></td>
					<td><?= $product['price'] ?></td>
					<td><?= $product['sale'] ?></td>
					<td><img style="width: 100px" src="images/<?= $product['img'] ?>" alt=""></td>
					<td><?php

	$category = $product['cat_id'];
	// echo $category;
	$selcat = "SELECT name FROM category WHERE id = '$category'";
	$querCat = $conn -> query($selcat);
	$cat = $querCat -> fetch_assoc();
	echo $cat['name'];
					 ?></td>
					<td>
						<a class="btn btn-primary" href="">Edit</a>
						<a class="btn btn-danger" href="">Delete</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>