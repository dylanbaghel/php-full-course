<?php 
$db_name = 'login_app';
$db_user = 'dylan';
$db_pass = 'anya';
$db_host = 'localhost';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    echo "Unable To Connect To Database --> "  . mysqli_connect_error();
}