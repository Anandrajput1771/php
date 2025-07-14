<?php

include "connection.php";


$sql = "SELECT * FROM students";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td> ID : <?php echo $row['id']; ?></td>
                <td> NAME : <?php echo $row['name']; ?></td>
                <td> AGE : <?php echo $row['age']; ?></td>
                <td> Email : <?php echo $row['email']; ?></td>
                <td>Gender : <?php echo $row['gender']; ?></td>

             
            </tr>
        </tbody>
    </table>
       <a href="read.php" class="btn btn-primary btn-sm" > Back</a>

</body>

</html>