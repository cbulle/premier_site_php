<?php
require_once __DIR__ . '/modules/init.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/modules/header.php'; ?>

    <main>
        <h2>Contactez-nous</h2>
        <form action="form_contact.php" method="post">

            <label for="email">Email</label>
            <input id="email" type="email" name="email" placeholder="Votre email" required>

            <label for="username">Nom & Prénom</label>
            <input id="username" type="text" name="username" placeholder="Votre nom complet" required>

            <label for="objet">Objet du message</label>
            <input id="objet" type="text" name="objet" placeholder="Sujet du message" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" maxlength="500" placeholder="Votre message..." required></textarea>

            <button type="submit">Envoyer</button>
            <button type="reset">Effacer</button>
        </form>
    </main>

    <?php include __DIR__ . '/modules/footer.php'; ?>
</body>
</html>
