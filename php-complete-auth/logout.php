<?php include 'helpers/session_helper.php';
start_session(); ?>
<?php

unset($_SESSION['user']);
header('Location: login.php?success_msg=Successfully Logged Out');
?>