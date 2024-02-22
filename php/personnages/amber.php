<?php
class Amber extends Personnages {
    public function __construct() {
        $this->hp = 10;
        $this->atq = 2;
        $this->def = 1;
    }

    public function pluieFlechee(){
        return "j'utilise ma capacité de pluie de flèches !";
    }
}
?>