<?php
require_once __DIR__ . '/bd/lec_bd.php'; 


if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['objet']) && !empty($_POST['message'])) {
    
  $email    = trim($_POST['email']);
  $username = trim($_POST['username'] );
  $objet    = trim($_POST['objet'] );
  $message  = trim($_POST['message'] );



      $sql = "INSERT INTO messages (email, username, objet, message, date_sent)
              VALUES (:email, :username, :objet, :message, now())";
      
      $stmt = $pdo->prepare($sql);

      $stmt->execute([
          ':email'     => $email,
          ':username'  => $username,
          ':objet'     => $objet,
          ':message'   => $message,
      ]);

      header('Location: /index.php');
      exit();

}
else {
  die("<p>Veuillez remplir tous les champs obligatoires.</p><p><a href='contact.php'>Retour</a></p>");
}
