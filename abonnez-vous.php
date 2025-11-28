<?php
require_once __DIR__ . '/modules/init.php';
?>

<!DOCTYPE html>
<html lang= "fr">
    <head>
        <title>Abonnez-vous</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/style.css">

     
    </head>

    <body>
        <?php include __DIR__ . '/modules/header.php' ?>

         <main>
      <div class="container">
        <div class="row">
          <aside class="col-md-4 order-md-2 mb-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="font-italic">Contactez nous</h4>
              <p class="mb-0">
                  <ul>
                    <li>Tel : 000000</li>
                    <li>Address : 12 rue de la république</li>
                    <li>01000 BOURG EN BRESSE</li>
                  </ul>
              </p>
            </div>
          </aside>
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Formulaire d'inscription</h4>
            
            <form action="form_abo.php" method="post">
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="name">Prénom</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Adresse email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>

        <label for="address">Adresse</label>
        <input type="text" id="address" name="address">

        <label for="postal">Code postal</label>
        <input type="text" id="postal" name="postal">

        <label for="town">Ville</label>
        <input type="text" id="town" name="town">

        <button type="submit">S'inscrire</button>
      </form>

          </div>
        </div>
        
      </div>

            <?php include __DIR__ . '/modules/aside.php' ?> 


        </main>



 


        <?php include __DIR__ . '/modules/footer.php' ?> 


    </body>
</html>