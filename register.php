<?php
    $servername='localhost:3308';
    $user='root';
    $pass='';

    $conn=mysqli_connect($servername,$user,$pass,'projfed');
    

        $username =$_POST['username'];
        $password =$_POST['password'];
        $firstname =$_POST['firstname'];
        $lastname =$_POST['lastname'];
        $email =$_POST['email'];
        $telephone = $_POST['telephone'];

    
  $query = "INSERT INTO users VALUES(NULL,'$username', '$firstname','$lastname','$email', '$password' ,'$telephone')";
  	$result=mysqli_query($conn, $query)or die("die"); 

     
        if($result){
            echo "Enregistré";
            header("Location: http://localhost/projfed/accueil.html");
        }else {
            echo "<script type='text/javascript'>alert('Information Incorrect');</script>";
        header("Location: http://localhost/projfed/register.html");
        }
        mysqli_close($conn);
?>