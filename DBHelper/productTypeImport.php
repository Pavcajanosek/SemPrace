<?php
include "../config/connect.php";

$file=fopen("prodType.csv","r");
while(($getData=fgetcsv($file,1000,","))!=FALSE){
    $sql= "INSERT INTO ProductType(id_type,typNazev)
VALUES ('$getData[0]','$getData[1]')";
    $result=mysqli_query($connection,$sql);
    if(isset($result)){
        echo "Success";
    }else{
        echo"fail";

    }


}
fclose($file);
header('location: ../page/products.php');

//$connection->query($query);
?>