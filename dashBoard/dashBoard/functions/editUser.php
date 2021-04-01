<?php 

$id = $_POST['id'];
$username = $_POST['username'];
// $password = $_POST['password'];
$email = $_POST['email'];


// echo $id;
require '../includes/connection.php';
if(!empty($_POST['password'])){
	$pass= md5($_POST['password']);
	$updatePass ="UPDATE `admin` SET password = '$pass' WHERE id = $id";
	$query = $conn -> query($updatePass);
	// exit();
}




$updateUser = "UPDATE `admin`
		SET
			`name` = '$username',
			email = '$email'
			
		WHERE 
			id = '$id' 
";

$query = $conn -> query($updateUser);

if($query) {
	header("location: ../allAdmin.php");
} else {
	echo $conn -> error ;
}

