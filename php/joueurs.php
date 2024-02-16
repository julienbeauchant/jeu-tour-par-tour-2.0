<?php
class Joueurs
{
    public $vie;

    public function __construct($vie)
    {
        $this->vie = $vie;
    }
}

$player1 = new Joueurs(10);

$player2 = new Joueurs(10);
?>