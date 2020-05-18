<?php
// Set Cookie
setcookie('u_name', 'Abhishek Baghel', time() + (1 * 60 * 60));

// Read Cookie
if (isset($_COOKIE['u_name'])) {
    $u_name = $_COOKIE['u_name'];
    if ($u_name) {
        echo $u_name;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>

</body>

</html>