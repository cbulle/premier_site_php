<?php
require_once __DIR__ . '/bd/lec_bd.php'; 

if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['contenu'])) {

    $titre       = trim($_POST['titre']);
    $description = trim($_POST['description']);
    $contenu     = trim($_POST['contenu']);
    $image_nom   = null;

    if (!empty($_FILES['image']['name'])) {
        $dossier = __DIR__ . '/uploads/';
        if (!is_dir($dossier)) {
            mkdir($dossier, 0777, true);
        }

        $image_nom = basename($_FILES['image']['name']);
        $chemin = $dossier . $image_nom;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $chemin)) {
            $image_nom = null; 
        }
    }

    $sql = "INSERT INTO articles (titre, description, contenu, image, date_creation)
            VALUES (:titre, :description, :contenu, :image, NOW())";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':titre'       => $titre,
        ':description' => $description,
        ':contenu'     => $contenu,
        ':image'       => $image_nom
    ]);

    header('Location: /index.php');
    exit();
} 
else {
    die("<p>Veuillez remplir tous les champs obligatoires.</p><p><a href='ajout_article.php'>Retour</a></p>");
}
?>
