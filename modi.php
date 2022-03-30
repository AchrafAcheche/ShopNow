<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Modification </title>

</head>

<body>
    <div id="container">
        <div>
      

            <form name="f" action="modification.php" method="POST">
                <h1>Modifier un Article</h1>
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
                <label><b>Nouveau nom d'article</b></label>
                <input type="text" placeholder="Entrer votre Username" name="nomart" required>
                <label><b>Description d'article</b></label>
                <input type="text" placeholder="Entrer votre description" name="descart" required>
                <label><b>Prix d'article</b></label>
                <input type="text" placeholder="Entrer votre prix" name="prixart" required>
                <label><b>Categorie d'article</b></label>
                <br>
                <select name="catyart">
                <option value="vehicule">Véhicules</option>
                <option value="immobilier">Immobilier</option>
                <option value="informatique et multimedia">Informatique et Multimedia</option>
                <option value="maison et jardin">Maison et Jardin</option>
                <option value="loisirs et divertissement">Loisirs et Divertissement</option>
                <option value="habillement">Habillement et Bien Etre</option>
                <option value="emploi et services">Emploi et Services</option>
                <option value="entreprise">Entreprises</option>
                </select>
                <input type="submit" id='submit' value='Modifier'>
                <p> <a href="accueil.php"> Retournez ?</a></p>
            </form>
        </div>
    </div>
</body>

</html>

