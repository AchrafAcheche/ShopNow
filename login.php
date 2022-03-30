<?php
    $servername='localhost:3308';
    $user='root';
    $pass='';
    $conn=mysqli_connect($servername,$user,$pass,'projfed');
        $username =$_POST['username'];
        $password =$_POST['password'];
        $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' and passwd = '$password'");
        if(mysqli_num_rows($result)){
            header("Location: http://localhost/projfed/accueil.html");
        }else {
            
            echo "<script type='text/javascript'>alert('Username ou Password Incorrect !');</script>";
            header("Location: http://localhost/projfed/login.html");
        }
        mysqli_close($conn);
?>