<?php 

include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <button class="rounded" ><a href="login.php"class="btn btn-primary " >Login</a></button>
    <h2 class="text-center mb-4">Registration Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName" name="name" placeholder="Enter your full name">
      </div>
      <div class="mb-3">
        <label for="emailAddress" class="form-label">Email address</label>
        <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="phoneNumber" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phoneNumber" name="phone" placeholder="Enter your phone number">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Create Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
      </div> 
       
      <div class="mb-3">
        <label for="password" class="form-label">Create Password</label>
        <input type="password" class="form-control" id="re_password" name="re_password" placeholder="Enter Re-password">
      </div> 
      
   
      <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
    </form>
  </div>
  <!-- Bootstrap JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $re_password = $_POST['re_password'];
  $check = "SELECT * FROM students_1 where email = '$email'";
  $response = $conn->query($check);
  if($response->num_rows > 0 ) {

    echo "Email already register";
  }
    
  

   else{
  $sql = "INSERT INTO students_1 (name,email,phone,password,re_password) VALUES('$name','$email','$phone','$password','$re_password')";
  $result = $conn->query(($sql));
  if($result)
{
  header('location:login.php');
 echo "ok";
}

}

}




?>