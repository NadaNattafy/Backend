<?php 
session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);


require_once('connect.php');

$selectAdmin = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND priv=0";

$query = $conn -> query($selectAdmin);

$admin = $query -> fetch_assoc();

$id = $admin['id'];

if( $query -> num_rows > 0 ){

	$_SESSION['login_id'] = $id ;
	$_SESSION['name']=$username;

	header("location: ../index.php");

} else {

	header("location: ../login.php");

}
