<?php 
    if (!isset($_SESSION['user'])) {
        header('Location: login.php?error_msg=Unauthenticated Users Not Allowed');
    }

?>