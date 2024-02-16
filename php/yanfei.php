<?php
class Yanfei extends Personnages {
    public $explosion;

    public function __construct($vie, $attaque, $capacite, $explosion) {
        parent::__construct($vie, $attaque, $capacite);
        $this->explosion = $explosion;
    }

    public function explosion() {
        echo "Yanfei produit une explosion causant " . $this->explosion . " de dégâts!";
        // Ajouter ici la logique pour le cooldown ou autres effets.
    }
}
?>