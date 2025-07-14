<?php 
include "connection.php";

  $sql ="SELECT * FROM students";
                $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="conatiner">
        <a href="index.php" class="btn btn-primary m-2">Add new </a>
    <table class="table table-striped table-hover table-bordered " >
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>EMAIL</th>
                <th>GENDER</th>
                <th colspan="3" class="text-center" >Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              
                while( $row=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                     <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['age']; ?></td>
                       <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-primary pl-2 btn-sm " >View</a> </td>
                         <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success pl-2 btn-sm ">Update</a> </td>
                          <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger pl-2 btn-sm " >Delete</a> </td>
                   
                </tr>
                    
                

                <?php 
                } 
            
            ?>
        </tbody>

    </table>
    
    <a href="index.php" class="btn btn-primary m-4 btn-sm " >Back</a> 
    </div>
</body>
</html>