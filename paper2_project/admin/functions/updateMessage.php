<?php 


// print_r($_POST);
$id = $_POST['id'];
require_once 'connect.php';
$update = "UPDATE message SET view = 1 WHERE id = $id";
$query = $conn -> query($update);

if($query) {
	
	// $selectMessage = "SELECT id FROM message WHERE view = 0 ";
	// $queryMessage = $conn -> query($selectMessage);
	// echo $queryMessage -> num_rows ; 



	
} else {
	echo $conn -> error ;
}

