<?php 

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Login</h2>
        <form action="<?php  echo $_SERVER['PHP_SELF']  ?>" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
          </div>
          <div class="mb-3 text-end">
            <a href="#" class="text-decoration-none">Forgot password?</a>
          </div>
          <button type="submit" class="btn btn-success w-100" name="submit">Login</button>
          <div class="mt-3 text-center">
            <span>Don't have an account? <a href="index.php">Register here</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 

if(isset(($_POST['submit']))){
  $email =$_POST['email'];
  $password =$_POST['password'];

  $sql = "SELECT * FROM students_1 WHERE email = '$email' AND password = '$password' ";
  $result = $conn->query($sql);
  if($result->num_rows > 0 ){

    echo "logging successfully";
  }else{
    echo "Email or password not matched";
  }

}



?>