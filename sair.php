<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    session_unset(); 
    session_destroy();
    header('Location: login.php');
?>