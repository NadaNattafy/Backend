<?php 
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);


 require_once('../../admin/functions/connect.php');

$selectUser = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND priv=1";

$query = $conn -> query($selectUser);

$user = $query -> fetch_assoc();

$id = $user['id'];

if( $query -> num_rows > 0 ){

	$_SESSION['user_id'] = $id ;
	$_SESSION['name']=$user['username'];

	header("location: ../../index.php");

} else {

	header("location: ../login.php");

}
