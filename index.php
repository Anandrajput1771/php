<!-- <?php 
// include "connection.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form curd</title>
</head>
<body>
      <div class="container ">
    <h2>Registration Form</h2>
        <form action="insert.php" method="post">
        <div>
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" />
        </div> <br> <br>
        
        <div>
        <label for="age">Age : </label>
        <input type="text" name="age" id="age" />
        </div> <br> <br>
        
        <div>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" />
        </div> <br> <br>

        
        <div>
        <label for="gender">Gender : </label>
        <input type="text" name="gender" id="gender" />
        </div> <br> <br>

        <input type="submit" value="submit">
        </form>

        </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Registration Form</h2>
    <form action="insert.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
      </div>

      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>

      <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" id="gender" name="gender">
          <option selected disabled>Select your gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
</body>
</html>