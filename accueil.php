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
        <?php
        session_start();
        $servername = 'localhost:3308';
        $user = 'root';
        $pass = '';
        $link = mysqli_connect($servername, $user, $pass, 'projfed');
        if (isset($_SESSION['add'])) {
        if ($_SESSION['add'] == 'true') {
            echo "<script type='text/javascript'>alert('Article Ajouté');</script>";
            unset($_SESSION['add']);}
        }
        if (isset($_SESSION['modi'])) {
            if ($_SESSION['modi'] == 'true') {
                echo "<script type='text/javascript'>alert('Article Modifié');</script>";
                unset($_SESSION['modi']);}
            }
            if (isset($_SESSION['supp'])) {
                if ($_SESSION['supp'] == 'true') {
                    echo "<script type='text/javascript'>alert('Article Supprimé');</script>";
                    unset($_SESSION['supp']);}
                }
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login'] == 'true') {
                echo '<ul class="navbar">';
                echo '<a href="supp.php" class="ajout-annonce"> - Supprimer un Article</a>';
                echo '<a href="modi1.php" class="ajout-annonce"> ! Modifier un Article</a>';
                echo '<a href="creation.php" class="ajout-annonce"> + Ajouter un Article</a>';
                echo '<li><a href="accueil.php">' . $_SESSION['username'] . '</a></li>';
                echo '<li><a href="logout.php">Se déconnecter</a></li>';
                echo '</ul>';
                echo ' </header>';
            } else {
                echo '<ul class="navbar">';
                echo '<li><a href="login.php">Me connecter</a></li>';
                echo '</ul>';
                echo ' </header>';
            }
        } else {
            echo '<ul class="navbar">';
            echo '<li><a href="login.php">Me connecter</a></li>';
            echo '</ul>';
            echo ' </header>';
        }

        ?>







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


            if ($link === false) {
                die("Error: Could not connect." . mysqli_connect_error());
            }



            $array = array();
            $sql = "SELECT * FROM articles ";
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
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
                } else {
                    echo "Something went wrong...";
                }
            } else {
                echo "ERROR: Could not execute $sql." . mysqli_error($link);
            }

            ?>

</body>

</html>