<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Auth</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="index.php" class="nav-link">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php if (is_authenticated()) : ?>
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="javascript:{document.getElementById('logout').submit()}" class="nav-link">Logout</a>
            <form action="logout.php" method="POST" id="logout">
              <input type="hidden">
            </form>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="login.php" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link">Register</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>