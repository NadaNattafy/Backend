<?php
 include 'includes/sidebar.php';
 include 'includes/header.php';
?>
<div class="container">
    <a class="btn btn-primary" href="addProductForm.php">Add products</a>
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

		require 'includes/connection.php';
		$selPro = "SELECT * FROM products";
		$query = $conn -> query($selPro);
		$id = 0 ;
		foreach($query as $product){



	?>
            <tr>
                <td><?php echo ++$id ?></td>
                <td><?= $product['prodName'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['sale'] ?></td>
                <?php
                    $imGroup=explode(";",$product['image']);
                   
                    ?>

                <td>
                <?php for ($j=0; $j <count($imGroup); $j++) { 
                    echo '<img style="width: 100px;height:100px"  src="images/'.$imGroup[$j].'" alt="">';    
                    }?>
                    
                </td>

                <td><?php

	$category = $product['idCat'];
	// echo $category;
	$selcat = "SELECT catName FROM category WHERE catId = '$category'";
	$querCat = $conn -> query($selcat);
	$cat = $querCat -> fetch_assoc();
	echo $cat['catName'];
					 ?></td>
                <td>
                    <a class="btn btn-primary" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>