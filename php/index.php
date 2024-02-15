<?php

    class Personnage {
        public $vie;
        public $defense;
        public $attaque;    
        public $capacite;  

        public function __construct($vie, $defense, $attaque, $capacite) {
            $this->vie = $vie;
            $this->defense = $defense;
            $this->attaque = $attaque;
            $this->capacite = $capacite;
        }
    }

    class Amber extends Personnage {
    
    }

    class Layla extends Personnage {
    }

    class Barbara extends Personnage {
    }

    class Yanfei extends Personnage {
    }

?>