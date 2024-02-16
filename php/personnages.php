<?php
class Personnages
{
    public $nom;
    public $attaque;
    public $capacite;

    public function __construct($nom, $attaque, $capacite)
    {
        $this->nom = $nom;
        $this->attaque = $attaque;
        $this->capacite = $capacite;
        // cette varibale->capacite fait référence = au construct $capacite 
    }
}

// Création d'un personnage nommé Amber
$amber = new Personnages("Amber", 2, 3);

// Création d'un personnage nommé Barbara
$barbara = new Personnages("Barbara",1, 2);

// Création d'un personnage nommé Layla
$layla = new Personnages("Layla",1, 2);

// Création d'un personnage nommé Yanfei
$yanfei = new Personnages("Yanfei",2, 3);
?>