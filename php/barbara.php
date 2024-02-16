<?php
class Barbara extends Personnages {
    public $soin;

    public function __construct($vie, $attaque, $capacite, $soin) {
        parent::__construct($vie, $attaque, $capacite);
        $this->soin = $soin;
    }

    public function soin() {
        echo "Barbara utilise sa compétence de guérison et soigne de " . $this->soin;
        // Ajouter ici la logique pour le cooldown ou autres effets.
    }
}
?>