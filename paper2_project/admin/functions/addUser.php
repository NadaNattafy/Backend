<?php 

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$priv = $_POST['priv'];


require_once('connect.php');
$insert_user = "INSERT INTO users 
	(username , password , email ,phone , gender , priv)
	VALUES
	('$username' , '$password' , '$email' , '$phone' , '$gender' , '$priv')
";

$query = $conn -> query($insert_user);

if($query) {
	header("location: ../users.php");
} else {

	echo $conn -> error ;

}



 ?>