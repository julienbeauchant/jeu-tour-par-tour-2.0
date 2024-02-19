<?php
class Layla extends Personnages {
    public $bouclier;

    public function __construct($nom, $attaque, $capacite, $bouclier) {
        parent::__construct($nom, $attaque, $capacite);
        $this->bouclier = $bouclier;
    }

    public function bouclier() {
        echo $this->bouclier;
        // Ajouter ici la logique pour le cooldown ou autres effets.
    }
}
?>