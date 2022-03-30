<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Now</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <header>
        <a href="#" class="logo"><span>S</span>hop<span>N</span>ow</a>

        <div class="menuToggle"></div>
        <ul class="navbar">
            <a href="supp.php" class="ajout-annonce"> - Supprimer un Article</a>
            <a href="modi.php" class="ajout-annonce"> ! Modifier un Article</a>
            <a href="creation.html" class="ajout-annonce"> + Ajouter un Article</a>
            <li><a href="login.html">Me connecter</a></li>
        </ul>
    </header>
    <section class="section3">

    </section>
    <section class="section2">
        <P>Choisissez une catégorie</P>
        <form>
            <input type="image" src="images\i2.JPG" name="catyart">
            <input type="image" src="images\i3.JPG" name="catyart">
            <input type="image" src="images\i4.JPG" name="catyart">
            <input type="image" src="images\i5.JPG" name="catyart"><BR>
            <input type="image" src="images\i6.JPG" name="catyart">
            <input type="image" src="images\i7.JPG" name="catyart">
            <input type="image" src="images\i8.JPG" name="catyart">
            <input type="image" src="images\i9.JPG" name="catyart">
        </form>

    </section>
    
        <div class='boxs'>
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
                                    echo "<div class='box'>";
                                    echo $row['nomart'];
                                    echo "<br>";
                                    echo $row['username'];
                                    echo "<br>";
                                    echo $row['descart'];
                                    echo "<br>";
                                    echo $row['prixart'];
                                    echo "<br>";
                                    echo $row['username'];
                                    echo "</div>";
                                }
                                
                            }
                            else {
                                echo "Something went wrong...";
                            }
                        }
                        else {
                            echo "ERROR: Could not execute $sql." . mysql_error($link);
                        }
                    
            
                   
                    ?>
        


    
    
</body>

</html>