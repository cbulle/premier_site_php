<?php

include_once __DIR__ . '/../include/config.php' ;

$lien1 = "https://www.leprogres.fr";
$texte1 = "Le Progrès" ;
$lien2 = "https://www.lemonde.fr/";
$texte2 = "Le Monde" ;
$lien3 = "https://www.lequipe.fr/";
$texte3 = "L'Equipe";

?>

<aside>
    <h2>Liens utiles</h2>
        <ul>
            <li><?= TEL ?> <li>
            <li><a href=<?= $lien1 ?> ><?= $texte1 ?> </a></li>
            <li><a href=<?= $lien2 ?>><?= $texte2 ?></a></li>
            <li><a href=<?= $lien3 ?> ><?= $texte3 ?></a></li>
        </ul>

<?php

// la portion de code qui était présente ici, je l'ai déjà vu sur un autre projet, essayez de faire votre propre code ;)

// voici le même résultat avec l'utilisation d'une function

function picture($name)
{
    if (str_contains($_SERVER['HTTP_ACCEPT'], 'avif')) {
        return $name . '.avif';
    }
    if (str_contains($_SERVER['HTTP_ACCEPT'], 'webp')) {
        return $name . '.webp';
    }
    return $name . '.jpg';
}

?>

<img src="<?= picture('/img/images/img-1') ?>" alt="Image" style="width:200px; height:auto; border-radius:10px;">

</aside>