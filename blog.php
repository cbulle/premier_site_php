<?php
require_once __DIR__ . '/bd/lec_bd.php';

if (isset($_GET['article']) && is_numeric($_GET['article'])) {
    $id = (int)$_GET['article'];

    $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($article) {
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title><?= htmlspecialchars($article['titre']) ?></title>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
        <?php include 'modules/header.php'; ?>

        <main class="content">
            <div>
            <section >
                 <?php if (!empty($article['image'])): ?>
                    <img src="uploads/<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['titre']) ?>">
                <?php endif; ?>
                <div>
                <h2><?= htmlspecialchars($article['titre']) ?></h2>
                <p><em>Publié le <?= date("d/m/Y à H:i", strtotime($article['date_creation'])) ?></em></p>
                <p><?= nl2br(htmlspecialchars($article['contenu'])) ?></p>
                <a href="blog.php" class="btn">← Retour aux articles</a>
                 </div>
                </section>
                 </div>
        </main>

        <?php include 'modules/footer.php'; ?>
        </body>
        </html>
        <?php
    } else {
        echo "<p>Article introuvable.</p>";
    }

} else {
    $stmt = $pdo->query("SELECT * FROM articles ORDER BY date_creation DESC LIMIT 5");
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Blog - Derniers articles</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <?php include 'modules/header.php'; ?>

    <main class="content">

    <main>
        <h2>Ajouter un nouvel article</h2>

        <form action="form_blog.php" method="post" enctype="multipart/form-data">

            <label for="titre">Titre de l’article</label>
            <input type="text" id="titre" name="titre" required>

            <label for="description">Description courte</label>
            <input type="text" id="description" name="description" maxlength="255" required>

            <label for="contenu">Contenu complet</label>
            <textarea id="contenu" name="contenu" rows="8" required></textarea>

            <label for="image">Image d’illustration</label>
            <input type="file" id="image" name="image" accept="image/*">

            <button type="submit">Publier l’article</button>
        </form>
    </main>

        <h1>Derniers articles</h1>
        <div>

        <?php foreach ($articles as $article): ?>
            
            <section>
                <?php if (!empty($article['image'])): ?>
                    <img src="uploads/<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['titre']) ?>">
                <?php endif; ?>
                <div>
                <h2><?= htmlspecialchars($article['titre']) ?></h2>
                <p><em>Publié le <?= date("d/m/Y", strtotime($article['date_creation'])) ?></em></p>
                <p><?= htmlspecialchars($article['description']) ?></p>
                </div>
                <a href="blog.php?article=<?= $article['id'] ?>" class="btn">Lire la suite</a>
            </section>
            
        <?php endforeach; ?>
                </div>
    </main>

    <?php include 'modules/footer.php'; ?>
    </body>
    </html>
    <?php
}
?>
