<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username) {
        echo "Please Enter Username";
        return;
    }

    if (!$password) {
        echo "Please Enter Password";
        return;
    }

    echo "Username: " . $username;
    echo "<br>";
    echo "Password: " . $password;
?>