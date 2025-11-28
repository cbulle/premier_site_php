<?php
require_once __DIR__ . '/modules/init.php';
require_once __DIR__ . '/bd/lec_bd.php' ; 

//$login_valide = "admin";
//$password_valide = "admin";





if (!empty($_POST['login']) && !empty($_POST['password'])) {

    $login = $_POST['login'] ;
    $password = $_POST['password'] ;
    $remember = isset($_POST ['remember']);
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $login]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);



    //if ($login === $login_valide && $password === $password_valide) {

    if($user && password_verify($password, $user['password'])){
        
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'lastname' => $user['lastname'],
            'email' => $user['email']

    ];
        if($remember){
            setcookie('remember_login', $login , time()+ (7 * 24 * 60 * 60),'/');
            //setcookie('remember_password', $password , time() + (7*24*60*60), '/' );
        }
        
        
        header("Location: index.php"); 
        exit;
}else{
    die("<p>Veuillez remplir tous les champs.</p><p><a href='login.php'>Retour</a></p>");
}



//} else {
    
    //echo "<p>Identifiants incorrects</p>";
    //echo "<p><a href='login.php'>Réessayer</a></p>";
}//
?>


<!DOCTYPE html>
<html lang= "fr">
    <head>
        <title>Connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/style.css">

     
    </head>
    

    <body>
        <?php include __DIR__ . '/modules/header.php'; ?>
        <main>
            <h2>Erreur de connexion</h2>
            <p>Identifiants incorrects.</p>
            <p><a href="login.php">Réessayer</a></p>
        </main>
        <?php include __DIR__ . '/modules/footer.php' ?>
</body>
</html> 









