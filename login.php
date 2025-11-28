<?php
require_once __DIR__ . '/modules/init.php';

?>


<!DOCTYPE html>
<html lang= "fr">
    <head>
        <title>Connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/style.css">

     
    </head>
    

    <body>
        <?php include __DIR__ . '/modules/header.php' ?>

<main>

  <form action="log_traite.php" method="post">
    <label for="login">Email ou identifiant :</label>
    <input type="text" name="login" id="login" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>

    <div>
      <input type="checkbox" name= "remember" id="rememeber">
      <label for="remember"> Se souvenir de moi</label>
</div>


    <button type="submit">Se connecter</button>
  </form>
 <?php include __DIR__ . '/modules/aside.php' ?>

        </main>
       
        <?php include __DIR__ . '/modules/footer.php' ?>


    </body>

</html>
