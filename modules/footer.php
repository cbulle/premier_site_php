<?php

include_once __DIR__ . '/../include/config.php' ; 

$article1 = "L'oeuvre de l'île" ;
$article2 = "UTMB";
$article3 = "Mozarella le scandal";
?>


<footer>
            <a href="/contact.php">Contact</a>
            <a href="articles/article1.html"><?= $article1 ?></a>
            <a href="articles/article2.html"><?= $article2 ?></a>
            <a href="articles/article3.html"><?= $article3 ?></a>
            <p> <?= EMAIL ?> <br><?= TEL ?> <br><?= ADRESSE ?><br>Bulle Céleste &copy;</p>
</footer>
