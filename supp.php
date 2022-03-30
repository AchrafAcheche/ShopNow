<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Supprimer</title>

</head>

<body>
    <div id="container">
        <div>

            <form name="f" action="supprimer.php" method="POST">
                <h1>Supprimer un Article</h1>
                <label><b>Nom d'article</b></label>

                <div>
        
                    <?php
                    $servername='localhost:3308';
                    $user='root';
                    $pass='';
                
                    $link=mysqli_connect($servername,$user,$pass,'projfed');
            
                    if($link === false){
                        die("Error: Could not connect." . mysqli_connect_error());
                    }
            
                  
                     
                        $array = array();
                        $sql = "SELECT * FROM articles ";
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
                            echo "ERROR: Could not execute $sql." . mysql_error($link);
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


                <label><b>Nom du compte</b></label>
                <input type="text" placeholder="Entrer le nom du compte" name="username" required>
               
                <input type="submit" id='submit' value='Supprimer'>
                <p> <a href="accueil.html"> Retournez ?</a></p>
            </form>
        </div>
    </div>
</body>

</html>