<?php 
    // Constants
    define('TITLE', 'PHP Beginners Series');
    // Variables
    $name = 'Abhishek Baghel';
    $age = 25;
    $nickName = 'Bittu';
    $is_married = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
</head>
<body>
    <h1>Variables & Constants</h1>
    <p>Name: <?php echo $name; ?></p>
    <p>Age: <?php echo $age; ?></p>
    <p>Nick Name: <?php echo $nickName; ?></p>
    <p>Is Married: <?php echo $is_married ? 'True' : 'False'; ?></p>
</body>
</html>