<?php
class Amber extends Personnages {
    public $bombe;

    public function __construct($nom, $attaque, $capacite, $bombe) {
        parent::__construct($nom, $attaque, $capacite);
        $this->bombe = $bombe;
    }

    public function bombe() {
        echo "Amber lance une bombe causant " . $this->bombe . " de dégâts!";
        // Ajouter ici la logique pour le cooldown ou autres effets.
    }
}

?>