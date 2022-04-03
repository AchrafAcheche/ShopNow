<?php
session_start();
$servername='localhost:3308';
    $user='root';
    $pass='';
    $conn=mysqli_connect($servername,$user,$pass,'projfed');
unset($_SESSION["username"]);
unset($_SESSION["login"]);
header("Location: accueil.php");
?>