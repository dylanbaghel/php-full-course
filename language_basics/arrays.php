<?php 
    /**
     * Indexed Arrays
     *  --> Similar To Arrays In Other Programming Languages.
     *  --> Zero Based Index.
     */
    $names = ['Abhishek', 'Dylan', 'Bittu'];
    
    // Alternate Way To Make Arrays
    $names_two = array('Jonas', 'Kora');

    // Overriding Values
    $names[1] = 'Dylan Baghel';

    // Adding Values
    $names[] = "Aakash";

    // Pushing To Array
    array_push($names, "New Name");

    // Popping From Array
    array_pop($names);

    // Length of Array
    $names_length = count($names);

    // Merge Two Arrays Together
    $all_names = array_merge($names, $names_two);


    /**
     * Associative Arrays
     *  --> Use Keys Inplace of Index.
     */
    $person = ["name"=>"Abhishek Baghel", "age"=> 18, "city"=> "Gwalior"];

    // Alternate Syntax
    $person_two = array("name"=> "Bittu Baghel", "age"=> 19);
    
    // Overriding Values
    $person["age"] = 20;

    // Adding Values
    $person["state"] = "MP";

    // Popping Values
    array_pop($person);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
    <h3>Indexed Arrays</h3>
    <h5>Array Indexing</h5>
    <p><?php print_r($names); ?></p>
    <p><?php echo $names[1]; ?></p>
    <p><?php print_r($names_two); ?></p>
    <p><?php echo $names_two[0]; ?></p>
    <p>Length of Array [count() Function]: <?php echo $names_length; ?></p>
    <p>Mergin Two Arrays [array_merge() Function]: <?php print_r($all_names); ?></p>

    <hr>
    <h3>Associative Arrays</h3>
    <p><?php print_r($person); ?></p>
    <p>Selecting Item ($person["name"]): <?php echo $person["name"]; ?></p>
</body>
</html>