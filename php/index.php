<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/choice.css">
    <link rel="stylesheet" href="css/combat.css">
    <link rel="stylesheet" href="css/global.css">
    <title>jeu-tour-par-tour-2.0</title>
</head>

<body>
    <section id="background">
        <section id="players">
            <div class="player1">
                <div class="amberPlayer1">
                    <img src="img/multi/multiAmber.webp" alt="">
                </div>
                <div class="barbaraPlayer1">
                    <img src="img/multi/multiBarbara.webp" alt="">
                </div>
                <div class="laylaPlayer1">
                    <img src="img/multi/multiLayla.webp" alt="">
                </div>
                <div class="yanfeiPlayer1">
                    <img src="img/multi/multiYanfei.webp" alt="">
                </div>
            </div>
            <div class="imgSeparation">
                <img src="img/symbol/symbolWhite.png" alt="">
            </div>
            <div class="player2">
                <div class="amberPlayer2">
                    <img src="img/multi/multiAmber.webp" alt="">
                </div>
                <div class="barbaraPlayer2">
                    <img src="img/multi/multiBarbara.webp" alt="">
                </div>
                <div class="laylaPlayer2">
                    <img src="img/multi/multiLayla.webp" alt="">
                </div>
                <div class="yanfeiPlayer2">
                    <img src="img/multi/multiYanfei.webp" alt="">
                </div>
            </div>
        </section>
        <section id="btnFight">
            <button>Fight</button>
        </section>
    </section>
    <section id="background2">
        <section id="cards">
            <div class="card1">
                <section id="changePersonnagePlayer1">
                    <div class="itemAmber1">
                        <img src="img/items/itemAmber.webp" alt="">
                    </div>
                    <div class="itemBarbara1">
                        <img src="img/items/itemBarbara.webp" alt="">
                    </div>
                    <div class="itemLayla1">
                        <img src="img/items/itemLayla.webp" alt="">
                    </div>
                    <div class="itemYanfei1">
                        <img src="img/items/itemYanfei.webp" alt="">
                    </div>
                </section>
                <section id="positionCard1">
                    <div class="splashArt1">
                        <img src="img/splashArt/splashArtAmber.webp" alt="">
                    </div>
                    <section id="positionCompetences1">
                        <div class="normalAtq1">
                            <img src="img/normalAtq/normalAtqAmber.webp" alt="">
                        </div>
                        <section id="positionCompetencesDuo1">
                            <div class="skills1">
                                <img src="img/skills/skillAmber.webp" alt="">
                            </div>
                            <div class="ulti1">
                                <img src="img/ulti/ultiAmber.webp" alt="">
                            </div>
                        </section>
                    </section>
                    <section id="positionPv1">
                        <div class="pv1"></div>
                    </section>
                </section>
            </div>
            <div class="imgSeparation2">
                <img src="img/symbol/symbolWhite.png" alt="">
            </div>
            <div class="card2">
                <section id="positionCard2">
                    <div class="splashArt2">
                        <img src="img/splashArt/splashArtLayla.webp" alt="">
                    </div>
                    <section id="positionCompetences2">
                        <div class="normalAtq2">
                            <img src="img/normalAtq/normalAtqLayla.webp" alt="">
                        </div>
                        <section id="positionCompetencesDuo2">
                            <div class="skills2">
                                <img src="img/skills/skillLayla.webp" alt="">
                            </div>
                            <div class="ulti2">
                                <img src="img/ulti/ultiLayla.webp" alt="">
                            </div>
                        </section>
                    </section>
                    <section id="positionPv2">
                        <div class="pv2"></div>
                    </section>
                </section>
                <section id="changePersonnagePlayer2">
                    <div class="itemAmber2">
                        <img src="img/items/itemAmber.webp" alt="">
                    </div>
                    <div class="itemBarbara2">
                        <img src="img/items/itemBarbara.webp" alt="">
                    </div>
                    <div class="itemLayla2">
                        <img src="img/items/itemLayla.webp" alt="">
                    </div>
                    <div class="itemYanfei2">
                        <img src="img/items/itemYanfei.webp" alt="">
                    </div>
                </section>
            </div>
        </section>
    </section>
</body>

</html>

<?php
include "personnages.php";
include "amber.php";
include "barbara.php";
include "layla.php";
include "yanfei.php";
?>

<!-- $nomPersonnage = new Personnage ($vie, $attaque, $capacite)
$nomPersonnage = new Personnage ($vie, $attaque, $capacite)
$nomPersonnage = new Personnage ($vie, $attaque, $capacite)
$nomPersonnage = new Personnage ($vie, $attaque, $capacite) -->

<!-- ici se trouvent tous les personnages avec les propriétés communes hérités du parent, 
si un personnage a des propriétés différentes on les ajoute dans sa sous class ( extends )
si un personnage n'a pas une des propriétés communes, alors cette propriété ne doit pas se trouver dans le parents mais dans l'extends de ceux qui l'ont -->