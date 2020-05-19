<?php include 'config/config.php'; ?>
<?php 
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (mysqli_errno($conn)) {
        die("Connection Refused: " . mysqli_error($conn));
    }

?>