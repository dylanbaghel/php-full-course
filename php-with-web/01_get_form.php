<?php 
    if (isset($_GET['submit'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];

        if ($name && $email && $phone) {
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Phone: $phone</p>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Form Processing</title>
</head>
<body>
    <form action="01_get_form.php">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="number" name="phone" placeholder="Enter Phone">
        <input type="email" placeholder="Email" name="email">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>