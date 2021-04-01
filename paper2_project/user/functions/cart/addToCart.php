<?php

session_start();
$ProductId = $_GET['id'];
$userId=$_SESSION['user_id'];




 require '../../../admin/functions/connect.php';
 $checkProdExist="select * from cart where userId=$userId and prodId=$ProductId";
 $query1 = $conn -> query($checkProdExist);
 $nums=$query1->num_rows;
 if($nums>=1) {
    $row = $query1->fetch_assoc();
    $quantity=$row['quantities']+1;
    
    
     $query2="UPDATE cart SET `quantities` = $quantity WHERE `prodId`=$ProductId AND `userId`=$userId";
     $query2 = $conn -> query($query2);
     if($query2) {
        header("location: ../../../index.php");
    }else {
        echo $conn -> error;
    }
    

 }else{

$insertPro = "INSERT INTO cart (userId , prodId , quantities) VALUES ('$userId' , '$ProductId' , 1)";

$query = $conn -> query($insertPro);


if($query) {
	header("location: ../../../index.php");
}else {
	echo $conn -> error;
}
}
