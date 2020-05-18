<?php 
    $firstName = 'Abhishek';
    $lastName = 'Baghel';
    // String Concatenation Using '.' Operator.
    $fullName = $firstName.' '.$lastName;

    /**
     * In Double Quotes - We Can Use Variables Directly.
     *  --> String Interpolation
     */
    $fullName2 = "$firstName $lastName";
    $msg = "Hello, $fullName2";

    /**
     * Escamping Character
     */
    $greeting = 'Let\'s Get Started.';
    $greeting2 = "It is Called \"Pythagoras Theorem.\""

    /**
     * Index - Zero Based.
     *  --> See HTML Below.
     */

     /**
      * Some Built-in String Functions
      *      --> See HTML Below. 
      */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Strings</h1>
    <p>FullName: <?php echo $fullName; ?></p>
    <p><?php echo $msg; ?></p>
    <p><?php echo $greeting; ?></p>
    <p><?php echo $greeting2; ?></p>
    <h3>String Indexing</h3>
    <p>
        <?php echo $fullName[1] ?>
    </p>
    <h3>String Built-in Functions</h3>
    <p>strnlen(): <?php echo strlen($fullName); ?></p>
    <p>strtoupper(): <?php echo strtoupper($fullName); ?></p>
    <p>strtolower(): <?php echo strtolower($fullName); ?></p>
    <p>str_replace(): <?php echo str_replace('e', 'w', $fullName) ?></p>
</body>
</html>