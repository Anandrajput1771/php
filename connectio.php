<?php 
$server = "localhost";
$dbname="company";
$dbuser="root";
$dbpass="";

try{

$conn = new PDO("mysql:host=$server;dbname=$dbname",$dbuser,$dbpass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// // $sql ="CREATE DATABASE company";
// $sql = "CREATE TABLE emp(
//     id int(255) primary key auto_increment,
//     name varchar(244),
//     age varchar(233),
//     email varchar(299) unique,
//     phone varchar(200),
//     password varchar(244),
//     re_password varchar(244))";

// $conn->exec($sql);
// // echo "created database successfully";
// echo "Table created successfully";
}catch(PDOException $e){
    echo"connection failed".$e->getMessage();
}




// $conn = null;
?>