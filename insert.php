<?php  
include "connectio.php";



try{


$sql = "INSERT INTO emp(name,age,email,phone,password,re_password) VALUES('muskan',25,'muskn@gmail.com',9847364783,1234,1234)";
$conn->exec($sql);

echo "inserted data successfully";
  $last_id = $conn->lastInsertId();
  echo "New record created successfully. Last inserted ID is: " . $last_id;

}catch(PDOException $e){
    echo "failed..".$e->getMessage();
}

$conn =null;
?>