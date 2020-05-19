<?php
    function start_session() {
        session_start();
    }
    function is_authenticated() {
        return isset($_SESSION['user']);
    }
?>