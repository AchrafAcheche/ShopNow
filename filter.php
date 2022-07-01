<?php
session_start();
    $servername='localhost:3308';
    $user='root';
    $pass='';

    $conn=mysqli_connect($servername,$user,$pass,'projfed');
    

        $catyart =$_POST['catyart'];

        $_SESSION['catyart']=$catyart;
        header("Location: accueil.php");


    
  
?>