<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style2.css" media="screen" type="text/css" />
    <title>Modification </title>

</head>

<body>
<header> <a href="accueil.php" class="logo"><span>S</span>hop<span>N</span>ow</a></header>
    <div id="container">
        <div>
      

            <form name="f" action="modi2.php" method="POST">
                <h1>Sélectioner un Article</h1>
                <hr>
                <label><b>Nom d'article</b></label>

                <div>
        
                    <?php
                    session_start();
                    $servername='localhost:3308';
                    $user='root';
                    $pass='';
                
                    $link=mysqli_connect($servername,$user,$pass,'projfed');
            
                    if($link === false){
                        die("Error: Could not connect." . mysqli_connect_error());
                    }
            
                  
                    $username =$_SESSION['username'];
                    
                        $array = array();
                        $sql = "SELECT * FROM articles where username = '$username' ";
                        if($result = mysqli_query($link, $sql)) {
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_array($result)){
                                    $array[] = $row['nomart'];
                                    
                                }
                                
                            }
                            else {
                                echo "Something went wrong...";
                            }
                        }
                        else {
                            echo "ERROR: Could not execute $sql." . mysqli_error($link);
                        }
                    
            
                    echo "<select name='noart'>";
                    foreach($array as $option){
                        if($dbselected == $option) {
                            echo "<option selected='selected' value='$option'>$option</option>";
                        }
                        else {
                            echo "<option value='$option'>$option</option>";
                        }
                    }
                    echo "</select>";
                    ?>
                    
                    </div>



                
                <input type="submit" name='submit' value='Modifier'>
                
            </form>
        </div>
    </div>
</body>

</html>

