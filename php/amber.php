<?php
class Amber extends Personnages {
    public $bombe;

    public function __construct($vie, $attaque, $capacite, $bombe) {
        parent::__construct($vie, $attaque, $capacite);
        $this->bombe = $bombe;
    }

    public function bombe() {
        echo "Amber lance une bombe causant " . $this->bombe . " de dégâts!";
        // Ajouter ici la logique pour le cooldown ou autres effets.
    }
}

?>