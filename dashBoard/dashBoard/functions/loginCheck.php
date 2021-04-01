<?php 
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);


require '../includes/connection.php';

$selectUser = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";

$query = $conn -> query($selectUser);

$user = $query -> fetch_assoc();

$id = $user['id'];
$idPrev=$user['privId'];
$userName=$user['name'];
$selectPrev = "SELECT * FROM `priv` WHERE id = '$idPrev'";
$query2 = $conn -> query($selectPrev);
$priv = $query2 -> fetch_assoc();
$priValue = $priv['priv'];
 //echo $priValue;


if( $query -> num_rows > 0 ){

	$_SESSION['login_id'] = $id ;
	$_SESSION['priv'] =$priValue ;
	$_SESSION['name'] =$userName;
	
    

	header("location: ../index.php");

} else {

	header("location: ../login.php");

}
