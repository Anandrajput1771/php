<?php 
$server = "localhost";
$dbname = "school";
$username = "root";
$password = "";

try{
$conn = new PDO("mysql:host=$server;$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connected successfully";

}catch(PDOException $e){
    echo "connection failed".$e->getMessage();
}



?>