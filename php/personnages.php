<?php
class Personnages
{
    public $attaque;
    public $capacite;

    public function __construct($attaque, $capacite)
    {
        $this->attaque = $attaque;
        $this->capacite = $capacite;
        // cette varibale->capacite fait référence = au construct $capacite 
    }
}

// Création d'un personnage nommé Amber
$amber = new Personnages(2, 3);

// Création d'un personnage nommé Barbara
$barbara = new Personnages(1, 2);

// Création d'un personnage nommé Layla
$layla = new Personnages(1, 2);

// Création d'un personnage nommé Yanfei
$yanfei = new Personnages(2, 3);
?>