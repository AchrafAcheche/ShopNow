<?php
session_start();
    $servername='localhost:3308';
    $user='root';
    $pass='';

    $conn=mysqli_connect($servername,$user,$pass,'projfed');
    
        $username =$_SESSION['username'];
        $nomart =$_POST['noart'];
    
  $query = "DELETE FROM articles WHERE nomart='$nomart' and username='$username' ;";
  	$result=mysqli_query($conn, $query)or die("die"); 
      $query1 = "SELECT * FROM articles WHERE nomart='$nomart' ;";
      $result=mysqli_query($conn, $query1)or die("die1"); 
     
        if(mysqli_num_rows($result1)>0){
           
           header("Location: http://localhost/projfed/accueil.php");
          
        }else {
            $_SESSION['supp']="true";
        header("Location: http://localhost/projfed/accueil.php");
       
        }  
    
                mysqli_close($conn);
?>