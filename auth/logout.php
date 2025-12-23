<?php
    session_start();
    unset($_SESSION['is_login']);
    unset($_SESSION['role']);
    //session destroy()
    header("location: /auth/login.php");
?>