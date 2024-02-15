<?php
class Personnage
{
    public $vie;
    public $defense;
    public $attaque;
    public $capacite;

    public function __construct($vie, $defense, $attaque, $capacite)
    {
        $this->vie = $vie;
        $this->defense = $defense;
        $this->attaque = $attaque;
        $this->capacite = $capacite;
    }
}
include "amber.php";
include "barbara.php";
include "layla.php";
include "yanfei.php";
?>