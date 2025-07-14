<?php 
include "connection.php";

$email = $_GET['email'];

$sql = "SELECT * FROM students_1 WHERE email = '$email'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "This email is already register...";
}
else{
    echo "Email not Found...";
}

?>