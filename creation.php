<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style2.css" media="screen" type="text/css" />
    <title>Création </title>

</head>

<body>
    <header> <a href="accueil.php" class="logo"><span>S</span>hop<span>N</span>ow</a></header>
    
    <div id="container">
        <div>
            <form name="f" action="creationp.php" method="POST">
                <h1>Ajouter un Article</h1>
                <hr>
                <label><b>Nom d'article</b></label>
                <input type="text" placeholder="Entrer le nom d'article'" name="nomart" required>
                <label><b>Description d'article</b></label>
                <input type="text" placeholder="Entrer votre description" name="descart" required>
                <label><b>Prix d'article</b></label>
                <input type="text" placeholder="Entrer votre prix" name="prixart" required>
                <label><b>Image d'article</b></label>
                <input type="text" placeholder="Entrer le path d'article" name="imgpath" required>
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
                <input type="submit" name='submit' value='Créer'>
                
            </form>
        </div>
    </div>
</body>

</html>