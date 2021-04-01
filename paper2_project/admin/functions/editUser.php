<?php 

$id = $_POST['id'];
$username = $_POST['username'];
// $password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$priv = $_POST['priv'];

require_once("connect.php");

if(!empty($_POST['password'])){
	$pass= md5($_POST['password']);
	$updatePass ="UPDATE users SET password = '$pass' WHERE id = $id";
	$query = $conn -> query($updatePass);
	// exit();
}




$updateUser = "UPDATE users
		SET
			username = '$username',
			email = '$email',
			phone = '$phone' ,
			gender = '$gender',
			priv = '$priv'
		WHERE 
			id = '$id' 
";

$query = $conn -> query($updateUser);

if($query) {
	header("location: ../users.php");
} else {
	echo $conn -> error ;
}

