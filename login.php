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
$_SESSION['error'] = "";

}}
if (isset($_SESSION['error']))
{if ($_SESSION['error']=='noterror')
    {
    echo '<script type ="text/JavaScript">;';  
echo 'alert("Compte Crée");';  
echo '</script>';
$_SESSION['error'] = "";

}}
if (isset($_SESSION['login'])) {
  if ($_SESSION['login'] == 'true') {
    header("Location: accueil.php");
  }
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title> Login </title>
  </head>
  <body>

    <header> <a href="accueil.php" class="logo"><span>S</span>hop<span>N</span>ow</a></header>
    <div id="container">
      <!-- zone de connexion -->

      <form action="loginp.php" method="POST">
        <h1>Connexion</h1>

        <label><b>Username</b></label>
        <input
          type="text"
          placeholder="Entrer votre nom"
          name="username"
          required
        />

        <label><b>Mot de passe</b></label>
        <input
          type="password"
          placeholder="Entrer votre mot de passe"
          name="password"
          required
        />
        <input type="submit" name="submit" value="CONNECTER" />
        <p><a href="register.php"> Avoir un compte ? </a></p>
        
      </form>
    </div>
  </body>
</html>
