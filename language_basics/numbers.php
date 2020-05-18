<?php 
    $age = 15;
    $pi = 3.14;

    $num1 = 17;
    $num2 = 4;

    /**
     * Arithmetic Operators
     */
    $add = $num1 + $num2;
    $sub = $num1 - $num2;
    $mult = $num1 * $num2;
    $division = $num1 / $num2;
    $mod = $num1 % $num2;
    $power = $num1 ** 2;

    /**
     * Order of Operation
     *      --> See HTML Below.
     */

     /**
      * Increment & Decrement Operator
      *    --> See HTML Below.
      */
    //   $age++;
    //   $num1--;

    /**
     * Short Hand Operators
     */
    $marks = 50;
    $marks += 20;
    $marks *= 5;
    $marks -= 10;
    $marks /= 3;

    /**
     * Some Built-in Functions For Numbers.
     *      --> See HTML Below
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers - Integers and Floats</title>
</head>
<body>
    <h1>Numbers - Integers and Floats</h1>
    <p>Integer: <?php echo $age; ?></p>
    <p>Float: <?php echo $pi; ?></p>
    <h3>Arithmetic Operators</h3>
    <p>Addition(+): <?php echo $add; ?></p>
    <p>Subtraction(-): <?php echo $sub; ?></p>
    <p>Multiplication(*): <?php echo $mult; ?></p>
    <p>Divison(/): <?php echo $division; ?></p>
    <p>Mod(%): <?php echo $mod; ?></p>
    <p>Power(**): <?php echo $power; ?></p>

    <h3>Order of Operation</h3>
    <p>3 + 5 * 7 --> <?php echo 3 + 5 * 7; ?></p>
    <p>(3 + 5) * 7 --> <?php echo (3 + 5) * 7; ?></p>

    <h3>Increment & Decrement Operator</h3>
    <p>(++): <?php $age++; echo $age; ?></p>
    <p>(--): <?php $age--; echo $age; ?></p>

    <h3>Built-in Number Functions</h3>
    <p>floor(): <?php echo floor($pi); ?></p>
    <p>ceil(): <?php echo ceil($pi); ?></p>
    <p>pi(): <?php echo pi(); ?></p>
</body>
</html>