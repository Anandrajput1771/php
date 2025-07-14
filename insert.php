<?php 

    include "connection.php";

       $name = $_POST['name'];
       $age = $_POST['age'];
       $email = $_POST['email'];
       $gender = $_POST['gender'];


       $sql ="INSERT INTO students(name,age,email,gender) VALUES('$name','$age','$email','$gender')";

       $result = $conn->query(($sql));
       if($result ){ 
        header("location:read.php");
       }





?>