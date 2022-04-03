<?php
 session_start();
 if (isset($_POST['submit'])) {
    $servername='localhost:3308';
    $user='root';
    $pass='';

    $conn=mysqli_connect($servername,$user,$pass,'projfed');
    

        $username =$_SESSION['username'];
        $nomart =$_POST['noart'];
        
    
 
  $query = "SELECT * from articles where nomart = '$nomart' and username = '$username';";
  $result=mysqli_query($conn, $query)or die("die"); 
  $result1 = mysqli_query($conn,"SELECT * FROM articles WHERE nomart = '$nomart'");

 
     if(mysqli_num_rows($result1)>0){
        $row = mysqli_fetch_array($result);
        $_SESSION['nomart']=$row['nomart'];
        $_SESSION['prixart']=$row['prixart'];
        $_SESSION['descart']=$row['descart'];
        $_SESSION['catyart']=$row['catyart'];
        $_SESSION['imgpath']=$row['imgpath'];
        
        
        header("Location: modi.php");
    }else {
        header("Location: accueil.php");
    } 
    mysqli_close($conn);
}
?>