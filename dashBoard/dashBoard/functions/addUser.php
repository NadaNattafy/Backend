<?php 

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
require '../includes/connection.php';
$checkUserExist="select * from `admin` where email='$email'";
$query2 = $conn -> query($checkUserExist);

$query3 = $query2 -> fetch_assoc();
// var_dump($query3);
if( !$query3){
	$insert_user = "INSERT INTO `admin` 
	(`name` , `password` , `email`,`privId`)
	VALUES
	('$username' , '$password' , '$email' ,'3')
";

$query = $conn -> query($insert_user);

if($query) {
	header("location: ../allAdmin.php");
} else {

	echo $conn -> error ;

}

}else{
	
	//  header("location: ../allAdmin.php?action=add");
	echo '<script>alert("please enter another email");
	window.location.href="../allAdmin.php?action=add";
	</script>';
	//echo '<script>document.getElementById("checkEmail").setAttribute("style", "display:block")</script>';
	
 }







 ?>