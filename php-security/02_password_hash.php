<?php
$conn = mysqli_connect('localhost', 'dylan', 'anya', 'login_app');

if (mysqli_connect_errno()) {
    die('Unable To Connect To DB: ' . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    if ($username && $password) {
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
        echo "<p>Hashed Password: $hashed_password</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Data</title>
</head>

<body>
    <form action="02_password_hash.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>