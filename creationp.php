<?php
 session_start();
 if (isset($_POST['submit'])) {
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
    
 
  $query = "INSERT INTO articles VALUES(NULL,'$username','$nomart','$prixart','$descart','$catyart','$imgpath');";
  $result=mysqli_query($conn, $query)or die("die"); 
  $result1 = mysqli_query($conn,"SELECT * FROM articles WHERE nomart = '$nomart'");

 
     if(mysqli_num_rows($result1)>0){
        $_SESSION['add']="true";
        
        header("Location: accueil.php");
    }else {
        echo "<script type='text/javascript'>alert('Information Incorrect');</script>";
    } 
    mysqli_close($conn);
}
?>