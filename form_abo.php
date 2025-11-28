<?php
require_once __DIR__ . '/bd/lec_bd.php'; 



if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['address'])) {
    
    $email    = trim($_POST['email']);
    $name     = trim($_POST['name'] );
    $lastname = trim($_POST['lastname'] );
    $password = trim($_POST['password']);
    $town     = trim($_POST['town'] );
    $postal   = trim($_POST['postal'] );
    $address  = trim($_POST['address']);





    $password_hash = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO users (email, name, lastname, password, town, postal, address, active, updated)
            VALUES (:email, :name, :lastname, :password, :town, :postal, :address, :active, :updated)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':email'    => $email,
        ':name'     => $name,
        ':lastname' => $lastname,
        ':password' => $password_hash,
        ':town'     => $town,
        ':postal'   => $postal,
        ':address'  => $address,
        ':active'   => '1',
        ':updated'  => date('Y-m-d H:i:s')
    ]);

    header('Location: /index.php');

}else{
die("Veuillez remplir tous les champs obligatoires. <a href='abonnez-vous.php'>Retour</a>");

}
?>
