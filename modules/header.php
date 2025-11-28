<?php


$page1 = "Accueil";
$page2 = "Présentation";
$page3 = "Contact";
$page4 = "Blog";
$page5 = "Abonnez-vous";
$page6 = "Statistiques";

//$article1 = "L'oeuvre de l'île";
//$article2 = "UTMB";
//$article3 = "Mozarella le scandale";
//$article4 = "Le ressenti estival";


?>

<header>
  <nav>
    <input type="checkbox" id="burger">
    <label for="burger"></label>
    <span></span>

    <ul>
      <li><a href="/index.php" <?= ($_SERVER['REQUEST_URI'] === '/index.php') ? 'class="active"' : '' ?>><?= $page1 ?></a></li>
      <li><a href="/presentation.php" <?= ($_SERVER['REQUEST_URI'] === '/presentation.php') ? 'class="active"' : '' ?>><?= $page2 ?></a></li>
      <li><a href="/contact.php" <?= ($_SERVER['REQUEST_URI'] === '/contact.php') ? 'class="active"' : '' ?>><?= $page3 ?></a></li>
      
    
      <li>
        <a href="/blog.php" <?= ($_SERVER['REQUEST_URI'] === '/blog.php') ? 'class="active"' : '' ?>><?= $page4 ?></a>
        <ul>
          <?php if (!empty($articles)): ?>
            <?php foreach ($articles as $art): ?>
              <li>
                <a href="/blog.php?article=<?= $art['id'] ?>">
                  <?= htmlspecialchars($art['titre']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li><em>Aucun article trouvé</em></li>
          <?php endif; ?>
        </ul>
      </li>

      <li><a href="/abonnez-vous.php" <?= ($_SERVER['REQUEST_URI'] === '/abonnez-vous.php') ? 'class="active"' : '' ?>><?= $page5 ?></a></li>
      <li><a href="/statistiques.php" <?= ($_SERVER['REQUEST_URI'] === '/statistiques.php') ? 'class="active"' : '' ?>><?= $page6 ?></a></li>

     
      <?php if (isset($_SESSION['user'])): ?>
    <li>Bienvenue <?= htmlspecialchars($_SESSION['user']['name']) ?> <?= htmlspecialchars($_SESSION['user']['lastname']) ?> 
        (<a href="logout.php">Déconnexion</a>)
    </li>
    <?php else: ?>
    <li><a href="login.php">Connexion</a></li>
    <?php endif; ?>

    </ul>
  </nav>

  <section>
    <h1><?= $page1 ?></h1>
  </section>
</header>
