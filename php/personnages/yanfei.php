<?php
class Yanfei extends Personnages {
    public function __construct() {
        $this->hp = 10;
        $this->atq = 3;
        $this->def = 1;
    }

    public function explosion(){
        return "j'active ma capacité explosion !";
    }
}
?>