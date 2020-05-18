<?php 
    /**
     * Scoping
     *  --> Global Scope
     *          --> Local Scope
     */

    $person = 'Jason Statham';
    function my_func() {
        $age = 25; // Local Scope
        echo $age;
    }

    function get_name($name /**Local Scope */) {
        return "Hello, $name";
    }

    function say_hi() {
        global $person;
        return "Hi, $person";
    }
    
    function say_bye($person) {
        $person = "Rock"; //Only Override Local Variable;
        return "Bye $person";
    }

    function say_bye_pointer(&$person) {
        $person = "Paul Walker";
        return "Bye, $person";
    }

    my_func();
    echo "<br>";
    echo get_name("Abhishek Baghel");
    echo "<br>";
    echo say_hi();
    echo "<br>";
    echo say_bye($person);
    echo "<br>";
    echo $person; // Still "Jason Statham"
    echo "<br>";
    echo say_bye_pointer($person);
    echo "<br>";
    echo $person; // Changed In say_bye_pointer() because we're using the reference (pointer) of that variable.
    echo $name;
    echo $age;
?>