<?php
session_start();
include '../db.php';
// register
if(isset($_POST["btnregister"])){
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
     global $con;
    $insertdata = "INSERT INTO `session_tb`(`fullname`, `gender`, `email`, `password`)
     VALUES ('$fullname', '$gender', '$email', '$password')";
     $respones = $con->query($insertdata);
        if($respones === TRUE){
            header("Location: login.php");
            // echo "insert success";
    }else{
        echo "error";
    }
}
    //login
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $selectdata = "SELECT `email`, `password`, `role` FROM `session_tb` WHERE `email`='$email' AND `password`='$password' ";
    global $con;
    $respones = $con->query($selectdata);
    if($respones->num_rows > 0){
        $row= $respones->fetch_assoc();
        $_SESSION["is_login"] = $row['email'];
        $_SESSION["role"] = $row['role'];
        if($row['role']==0){
            header('location: ../client/index.php');
        }else{
            header('location: ../dashboard/index.php');
        }
    }else{
        header('location: login.php');
    }
}

?>