
<?php 

include "connection.php";

$id = $_GET['id'];

  $sql ="SELECT * FROM students where id = '$id'";
                $result = $conn->query($sql);
                   $row = $result->fetch_assoc();
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form curd</title>
</head>
<body>
  <div class="container">
      <h1>Update</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div>
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" class="form-control" value="<?php  echo $row['name'];?>"/>
        </div> <br> <br>
        
        <div>
        <label for="age">Age : </label>
        <input type="text" name="age" id="age" class="form-control" value="<?php  echo $row['age'];?>"/>
        </div> <br> <br>
        
        <div>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" class="form-control" value="<?php  echo $row['email'];?>"/>
        </div> <br> <br>

        
        <div>
        <label for="gender">Gender : </label>
        <input type="text" name="gender" id="gender" class="form-control" value="<?php  echo $row['gender'];?>"/>
        </div> <br> <br>

        <input type="submit" value="update" class="btn btn-primary mb-4" name="submit">
        </form>
       
        </div>
</body>
</html> 

<?php
include "connection.php";

if(isset($_POST['submit'])){
     $name = $_POST['name'];
       $age = $_POST['age'];
       $email = $_POST['email'];
       $gender = $_POST['gender'];


       $sql ="UPDATE students SET name='$name', age='$age', email='$email', gender='$gender' where id = '$id'" ;

       $result = $conn->query($sql);
       if($result ){
          header("location:read.php");
       }
       else{
        echo "erorr";
       }


}




?>
