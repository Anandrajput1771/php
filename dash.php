<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
    }
    .sidebar {
      height: 100vh;
      background-color: #343a40;
      color: white;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar p-3 col-md-3 col-lg-2">
      <h4 class="text-center mb-4">Dashboard</h4>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="login.php" class="nav-link">🏠 Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link">📄 Profile</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link">⚙️ Settings</a></li>
        <li class="nav-item mt-auto"><a href="#" class="nav-link text-danger">🔓 Logout</a></li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="p-4 col-md-9 col-lg-10">
      <nav class="navbar navbar-light bg-light mb-4">
        <span class="navbar-text">Welcome, User!</span>
      </nav>
      <h2>Main Content Area</h2>
      <p>Here you can place dashboard widgets, user information, statistics, or anything you'd like.</p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>