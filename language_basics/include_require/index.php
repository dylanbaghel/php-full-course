<?php 
    include("names.php");
    require("names.php");
    
    /**
     * include() -> If Errors Continue To Execute Rest of The Code.
     * require() -> Stop Execution After Error.
     */
    include("not_found.php");
    require("not_found.php");

    print_r($names);
    echo "End of PHP";
?>