<?php
    $servername='localhost:3308';
    $user='root';
    $pass='';

    $conn=mysqli_connect($servername,$user,$pass,'projfed');
    

        $username =$_POST['username'];
        $nomart =$_POST['nomart'];
        $descart =$_POST['descart'];
        $prixart =$_POST['prixart'];
        $catyart =$_POST['catyart'];
    
  //$query = "INSERT INTO articles VALUES(NULL,'$username','$nomart','$prixart','$descart')  WHERE '$username' IN (Select username From users);";
  $query = "INSERT INTO articles VALUES(NULL,'$username','$nomart','$prixart','$descart','$catyart');";
  $result=mysqli_query($conn, $query)or die("die"); 

 
   /*  if($result){
        echo "<script type='text/javascript'>alert('Article creé');</script>";
    }else {
        echo "<script type='text/javascript'>alert('Information Incorrect');</script>";
   
    } */
    header("Location: http://localhost/projfed/accueil.html");
    mysqli_close($conn);
?>