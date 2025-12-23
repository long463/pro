<?php
    $con= new mysqli('127.0.0.1', 'root', '', 'session_db');
    if($con->connect_error){
        die('Connection Failed : '.$con->connect_error);
    }
?>