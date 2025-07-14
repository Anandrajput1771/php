<?php 

include "connection.php";

$id = $_GET['id'];

$sql = "DELETE FROM students where id = '$id'";
$result = $conn->query($sql);
if($result){
    header("location:read.php");
}



?>