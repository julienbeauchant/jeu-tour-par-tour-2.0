<?php
class Barbara extends Personnages {
    public $soin;

    public function __construct($nom, $attaque, $capacite, $soin) {
        parent::__construct($nom, $attaque, $capacite);
        $this->soin = $soin;
    }

    public function soin() {
        echo "Barbara utilise sa compétence de guérison et soigne de " . $this->soin;
        // Ajouter ici la logique pour le cooldown ou autres effets.
    }
}
?>