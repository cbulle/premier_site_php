<?php
require_once __DIR__ . '/modules/init.php';

?>




<!DOCTYPE html>
<html lang= "fr">
    <head>
        <title>Acceuil</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/style.css">

     
    </head>

    <body>
        <?php include __DIR__ . '/modules/header.php' ?>
        
        <main> 
            <div>
            <section>
                <img src="/img/img1.png" alt="île">
                <div>
                <h2>Livre de l'île</h2>
                
                <p>De l’œuvre à l’île, les images, analogies et métaphores présentent d’ailleurs un étonnant pouvoir de réversibilité. 
                    Concentration, condensation, réduction, miniaturisation : au sein de la diversité des textes et des genres, 
                    certains relèvent plus spécifiquement de l’analogie monadique, d’autres de l’archipel ou d’une pensée continentalisée.
                 Inversement, les îles ne sont-elles que des <em>« textes-îles »</em>, des réalités exclusivement soumises à des systèmes de 
                 modélisation ? <br>Qu’en est-il de la valeur de ces analogies terme à terme entre espace insulaire et texte littéraire ?</p>
                 </div>

            </section>
            <section>
                <img src="/img/img2.jpg" alt="île">
                <div>
                <h2>UTMB</h2>
                <p>Lancé en 2003, l’Ultra-Trail du Mont-Blanc (UTMB) est rapidement devenu une épreuve <i>incontournable </i>dans le monde de l’ultra-trail. 
                    Avec un parcours exigeant de plus de <u>170 kilomètres autour du massif du Mont-Blanc</u>, cumulant près de 10 000 mètres de dénivelé positif, 
                    cette course réunit chaque année l’élite mondiale du trail.</p>
                </div>

            </section>
            <section>
                <img src="/img/img3.jpg" alt="île">
                <div>
                <h2>Mozzarella le scandale</h2>
                <p>Plus de 90 % de la mozzarella de bufflonne AOP italienne provient de Campanie. Malgré une demande européenne en hausse, 
                    de nombreux éleveurs de bufflonnes luttent pour survivre. Paolo Carlino pâtit de la hausse des prix du fourrage et de l’énergie. Sans parler d’un autre fléau, 
                    la brucellose bovine, qui a <b>décimé la moitié de son troupeau</b> qui comptait trois cents bêtes. Même si son élevage en stabulation lui garantit un rendement laitier 
                    supérieur à celui généré par l’élevage en pâturage 
                    (quelque 1 000 litres par buffle et par an), <u>sa marge a fondu de 50 à 10 % </u>ces dernières années. Avec des conséquences désastreuses pour toute sa famille.</p>
                    </div>

            </section>
            <section>
                <img src="/img/img4.jpg" alt="île">
                <div>
                <h2>Le ressenti estivale</h2>
                <p>Une météo moins estivale, un climat social tendu… <br>Les raisons de rêver (déjà) de nouveaux horizons ne manquent pas en cette rentrée, 
                    alors que des risques de grève et des incertitudes politiques se profilent. «Un climat anxiogène peut déclencher l’acte de réservation et une envie d’ailleurs», 
                    avance Didier Arino, directeur général associé du cabinet Protourisme. <u>Si certains profils de voyageurs </u>(retraités, couples sans enfant...) 
                    prolongeront leur été en septembre, mois préféré des Français pour voyager, 
                    d’autres visent d’ores et déjà les vacances scolaires de la Toussaint qui débutent le 18 octobre dans les trois zones.</p>
                    </div>
            </section>
            </div>

            <?php include __DIR__ . '/modules/aside.php' ?>

           


        </main>
       
        <?php include __DIR__ . '/modules/footer.php' ?>


    </body>

</html>