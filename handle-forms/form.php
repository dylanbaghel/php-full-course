<?php 
    $errors = [];
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!$username) {
            array_push($errors, 'Please Enter Username');
        }

        if (!$password) {
            array_push($errors, 'Please Enter Password');
        }

        if (count($errors) > 0) {
            // Errors
        } else {
            // Looks Good
            echo $username;
            echo "<br>";
            echo $password;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form In PHP</title>
</head>
<body>
    <h1>Form Handle In PHP</h1>
    <?php if($errors): ?>
        <?php foreach($errors as $err): ?>
            <p><?php echo $err; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
    <form action="form.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button name="submit" type="submit">Submit</button>
    </form>
</body>
</html>