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
      

            <form name="f" action="modification.php" method="POST">
                <h1>Modifier un Article</h1>
                <hr>
               

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
                    ?>
                    
            
                   



                <label><b>Nouveau nom d'article</b></label>
                <?php $no=$_SESSION['nomart'];
                echo "<input type='text' value=".$no." name='nomart' required>";
                ?>
                <label><b>Description d'article</b></label>
                <?php $na=$_SESSION['descart'];
                echo "<input type='text' value=".$na." name='descart' required>";
                ?>
                <label><b>Image d'article</b></label>
                <?php $ni=$_SESSION['imgpath'];
                echo "<input type='text' value=".$ni." name='imgpath' required>";
                ?>
                <label><b>Prix d'article</b></label>
                <?php $np=$_SESSION['prixart'];
                echo "<input type='text' value=".$np." name='prixart' required>";
                ?>
                <label><b>Categorie d'article</b></label>
                <br>
                <select selected="2" name="catyart">
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
                
            </form>
        </div>
    </div>
</body>

</html>

