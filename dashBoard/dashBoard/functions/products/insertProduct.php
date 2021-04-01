<?php
echo "<pre>";
$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$category = $_POST['category'];
$imageArr=[];

for ($i=0; $i < count($_FILES['img']['name']); $i++) { 
    $imgName = $_FILES['img']['name'][$i];
  
 $tmpName = $_FILES['img']['tmp_name'][$i];
  //print_r($_FILES['img']["error"]);
    

 if($_FILES['img']['error'][$i] == 0 ){

	$extensions = ['jpg' , 'png' , 'gif' ,'jpeg'];
	// $newArr = explode('.', $imgName);
	// $ext = end($newArr);

	$ext = pathinfo($imgName, PATHINFO_EXTENSION);
    

	if(in_array($ext, $extensions)){

		if($_FILES['img']['size'][$i] < 2000000){

			$newName = md5(uniqid()) .'.'. $ext;
			move_uploaded_file($tmpName, '../../images/'.$newName);
            array_push($imageArr,$newName);
            
           
    

		} else {

			echo "file size is too big";
		}

	} else {
		echo "bad extension";
	}

} else {

	echo "You must upload a file";
}
   
}
$imageArr2=implode(";",$imageArr);
// print_r($imageArr2);




 require '../../includes/connection.php';

$insertPro = "INSERT INTO products (prodName , price , sale , idCat , image) VALUES ('$name' , '$price' , '$sale' , '$category' , '$imageArr2')";

$query = $conn -> query($insertPro);


if($query) {
	header("location: ../../prodTable.php");
}else {
	echo $conn -> error;
}