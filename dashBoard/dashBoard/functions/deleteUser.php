
<?php 

$id = $_GET['id'];

require '../includes/connection.php';

$deluser = "DELETE FROM admin WHERE id = $id";
$query = $conn -> query($deluser);

if($query) {
	header("location: ../allAdmin.php");
} else {
	echo $conn -> error ;
}

 ?>