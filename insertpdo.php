<?php
$server = "localhost";
$username = "root";
$Password = "";
$dbname = "company";

try {
    
// $conn = new PDO("mysql:host=$server;dbname=$dbname",$dbuser,$dbpass);
    $conn = new PDO("mysql:host=$server;dbname=$dbname;", $username, "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO emp (name,age,email,phone,password,re_password) VALUES(:name,:age,:email,:phone,:password,:re_password)";

    $stmt = $conn->prepare($sql);


    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':re_password', $re_password);


    $name = "purnima";
    $age = 32;
    $email = "purnima@gmail.com";
    $phone = 432333433;
    $passowrd = 1234;
    $re_password = 1234;

    $stmt->execute();
    echo "inserted data successfully";
} catch (PDOException $e) {
    echo "failed ..." . $e->getMessage();
}

// $stmt->close;
$conn = null;



?>