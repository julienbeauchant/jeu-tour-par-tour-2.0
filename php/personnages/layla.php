<?php
class Layla extends Personnages {
    public function __construct() {
        $this->hp = 10;
        $this->atq = 1;
        $this->def = 3;
    }

    public function bouclier(){
        return "j'active ma capacité de bouclier !";
    }
}
?>