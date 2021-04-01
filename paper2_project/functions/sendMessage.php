<?php

// $name = $_POST['Name'];
// $phone = $_POST['Phone'];
// $email = $_POST['Email'];
// $message = $_POST['Message'];

extract($_POST);

require_once '../admin/functions/connect.php';

$Insert = "INSERT INTO message
 (name , phone , email , message )
  VALUES
 ('$Name' , '$Phone' , '$Email' , '$Message')";

 $query = $conn -> query($Insert);

 if($query) {

 	echo '<div class="alert alert-success">message sent successfully</div>';

 }else {
 	echo $conn -> error ;
 }