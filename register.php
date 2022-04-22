<?php
session_start();
$servername='localhost:3308';
    $user='root';
    $pass='';
    $conn=mysqli_connect($servername,$user,$pass,'projfed');
    if (isset($_SESSION['error']))
{if ($_SESSION['error']=='error')
    {
    echo '<script type ="text/JavaScript">;';  
echo 'alert("Information Incorrecte");';  
echo '</script>';

}}
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 'true') {
      header("Location: accueil.php");
    }
  }
?>
<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <script language="javascript">
        function verif() {
            if (f.firstname.value == "" || f.firstname.length < 3) {
                alert("le nom est obligatoire"); return false;
            }
            if (f.lastname.value == "" || f.lastname.length < 3) {
                alert("le prénom est obligatoire"); return false;
            }
            if (f.username.length < 5 || f.username.length > 12) {
                alert("username long doit etre entre 5 et 12 characters");
                return false;
            }
            if (f.email.indexOf('@') == -1 || f.email.indexOf('.') == -1 || f.email.length < 10) {
                alert("verifier votre email"); return false;

            }
            if (f.telephone.length != 8 || isNaN(f.telephone.value)) {
                alert("verifier le numero du telephone");
                return false;

            }
            if (f.password.value = "" || f.passwored.length < 8) {
                alert("nombre du caractères du mot de pass doit etre sup a 8 caracteres ");
                return false;
            }
            if (f.pwdt.value != f.password.value) { 
                alert("les 2 mot de passe ne sont pas identiques"); 
                return false
            }
            return true;
        } 
    </script>
    <title> Register </title>

</head>

<body>
    <header> <a href="accueil.php" class="logo"><span>S</span>hop<span>N</span>ow</a></header>
    <div id="container">
        <div>
            <!-- zone de connexion -->

            <form name="f" action="registerp.php" method="POST">
                <h1>Créer un compte</h1>


                <label><b>Prénom*</b></label>
                <input type="text" placeholder="Entrer votre prénom" name="firstname" required>

                <label><b>Nom*</b></label>
                <input type="text" placeholder="Entrer votre nom" name="lastname" required>
                <label><b>Username*</b></label>
                <input type="text" placeholder="Entrer votre Username" name="username" required>
                <label><b>E-mail*</b></label>
                <input type="email" placeholder="Entrer votre E-mail" name="email" required>
                <br>
                <label><b>Numéro du Télephone* </b></label>
                <input type="text" placeholder="Entrer le mot de passe" name="telephone" required>
                <label><b>Mot de passe* </b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <label><b> Confirmer mot de passe *</b></label>
                <input type="password" placeholder="Répéter le mot de passe" name="pwd1" required>
                <input type="submit" name='submit' value='CONNECTER'>
                <p> <a href="login.php"> Vous avez déjà un compte ? </a></p>
                
            </form>
        </div>
    </div>
</body>

</html>