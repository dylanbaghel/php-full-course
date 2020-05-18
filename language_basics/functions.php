<?php 
    /**
     * Functions
     */
    function get_name() {
        echo "From Function";
    }
    get_name();

    function greeting($name="Anonymous") {
        return "Hello, $name";
    }
    echo "<br>";
    echo greeting("Abhishek Baghel");
    echo "<br>";
    echo greeting();

?>