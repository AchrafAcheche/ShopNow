<?php
session_start();
    $servername='localhost:3308';
    $user='root';
    $pass='';

    $conn=mysqli_connect($servername,$user,$pass,'projfed');
    

        $username =$_SESSION['username'];
        $nomart =$_POST['nomart'];
        $descart =$_POST['descart'];
        $prixart =$_POST['prixart'];
        $catyart =$_POST['catyart'];
        $imgpath =$_POST['imgpath'];
        

    
  $query = "UPDATE articles SET nomart='$nomart' , descart='$descart' , prixart='$prixart' , catyart='$catyart', imgpath='$imgpath' WHERE nomart='$nomart' and username='$username' ;";
  	$result=mysqli_query($conn, $query)or die("die"); 
      $result1 = mysqli_query($conn,"SELECT * FROM articles WHERE nomart = '$nomart'");
     
      if(mysqli_num_rows($result1)>0){
        $_SESSION['modi']="true";
        header("Location: accueil.php");
    }else {
        
    } 
        header("Location: accueil.php");
        mysqli_close($conn);
?>