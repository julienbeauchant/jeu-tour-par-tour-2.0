<?php
class Layla extends Personnages {
    public $bouclier;

    public function __construct($vie, $attaque, $capacite, $bouclier) {
        parent::__construct($vie, $attaque, $capacite);
        $this->bouclier = $bouclier;
    }

    public function bouclier() {
        echo $this->bouclier;
        // Ajouter ici la logique pour le cooldown ou autres effets.
    }
}
?>