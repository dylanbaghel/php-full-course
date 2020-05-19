<?php 
    function inject_checker($conn, $text) {
        return htmlentities(trim(mysqli_real_escape_string($conn, $text)));
    }

?>