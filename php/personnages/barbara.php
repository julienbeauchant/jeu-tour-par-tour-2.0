<?php
class Barbara extends Personnages {
    public function __construct() {
        $this->hp = 10;
        $this->atq = 1;
        $this->def = 1;
    }

    public function heal(){
        return "j'utilise ma capacité de heal !";
    }
}
?>