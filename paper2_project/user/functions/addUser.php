<?php 

$username = $_POST['name'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];



require_once('../../admin/functions/connect.php');
$insert_user = "INSERT INTO users 
	(username , password , email ,phone , gender , priv)
	VALUES
	('$username' , '$password' , '$email' , '$phone' , '$gender' , 1)
";

$query = $conn -> query($insert_user);

if($query) {
	header("location: ../login.php");
} else {

	echo $conn -> error ;

}



 ?>