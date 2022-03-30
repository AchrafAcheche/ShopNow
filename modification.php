<?php
    $servername='localhost:3308';
    $user='root';
    $pass='';

    $conn=mysqli_connect($servername,$user,$pass,'projfed');
    

        $username =$_POST['username'];
        $noart =$_POST['noart'];
        $nomart =$_POST['nomart'];
        $descart =$_POST['descart'];
        $prixart =$_POST['prixart'];
        $catyart =$_POST['catyart'];

    
  $query = "UPDATE articles SET nomart='$nomart' , descart='$descart' , prixart='$prixart' , catyart='$catyart' WHERE nomart='$noart' and username='$username' ;";
  	$result=mysqli_query($conn, $query)or die("die"); 

     
       /*  if($result){
       
            echo "<script type='text/javascript'>alert('Article modifé');</script>";
        }else {
            echo "<script type='text/javascript'>alert('Erreur de modification');</script>";
        
        } */
        header("Location: http://localhost/projfed/accueil.html");
        mysqli_close($conn);
?>