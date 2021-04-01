
<?php
 include 'includes/sidebar.php';
 include 'includes/header.php';
 $index1=['esraa',22,'cairo','Aswan','Ahmed',22,'Alex',11,'Lina'];
$index2=25;
$index3=ceil($index2/3);
$index4=0;
echo "<table class='table table-striped col-6 ml-3'>";

for ($j=0; $j < $index3; $j++) { 
   echo "<tr>"; 

for ($i=1; $i <=3 ; $i++) { 
    // echo $i;
   
   
     if ($index4<count($index1)) {
        echo "<td>$index1[$index4]</td>";
        $index4=$index4+1;
       
     }
     
    else{ break;}
   
    
   
}
echo "</tr>";
}
echo "</table>";
?>