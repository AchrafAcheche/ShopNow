<?php
    $servername='localhost:3308';
    $user='root';
    $pass='';

    $conn=mysqli_connect($servername,$user,$pass,'projfed');
    
        $username =$_POST['username'];
        $nomart =$_POST['noart'];
    
  $query = "DELETE FROM articles WHERE nomart='$nomart' and username='$username' ;";
  	$result=mysqli_query($conn, $query)or die("die"); 
      //$query1 = "SELECT * FROM articles WHERE nomart='$nomart' ;";
     
      /*  if($conn->query($query1)==TRUE){
            //echo "<script type='text/javascript'>alert('Article supprimé');</script>";
           //header("Location: http://localhost/projfed/accueil.html");
          
        }else {
            //echo "<script type='text/javascript'>alert('Erreur de supprimation');</script>";
        //header("Location: http://localhost/projfed/register.html");
        
        }  */
        header("Location: http://localhost/projfed/accueil.html");
                mysqli_close($conn);
?>