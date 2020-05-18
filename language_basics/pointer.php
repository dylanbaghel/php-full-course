<?php 
    $my_name = 'Abhishek';
    function my_func (&$name) {
        echo "Hello " . $name;
        $name = 'Dylan'; // Change $my_name Variable To 'Dylan' Because It $name Recieves It's Pointer.
    }

    echo my_func($my_name);
    echo "<br>";
    echo $my_name;
?>