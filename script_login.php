<?php


session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['permesso'] = false;

if($username == "admin" && $password == "1234"){

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("Location: benvenuto.php");
    $_SESSION['permesso'] = true;
}else{
    header("Location: errore.php");
}













?>