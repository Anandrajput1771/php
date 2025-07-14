<?php
include "connectio.php";


try {
 
    $sql = "UPDATE emp SET name = :name, age = :age, email = :email, phone = :phone, password = :password, re_password = :re_password WHERE id = :id";


    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":age", $age);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":re_password", $re_password);

    $id = 8;
    $name = "usha";
    $email = "usha@gmail.com";
    $phone = 2736283;
    $password = 1234;
    $re_password = 1234;
    $stmt->execute();


    $stmt->execute(); // 💯
    

    echo "update data successfully";


} catch (PDOException $e) {
    echo "failed.." . $e->getMessage();
}

?>