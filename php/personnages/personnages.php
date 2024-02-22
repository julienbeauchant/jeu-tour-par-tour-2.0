<?php
include "amber.php";
include "barbara.php";
include "layla.php";
include "yanfei.php";
include "players/player1.php";
include "players/player2.php";

class Personnages
{
    // ATTRIBUTS
    public $hp;
    public $atq;
    public $def;

    // CONSTRUCT

    // GETTERS 
    public function getHP(){
        return $this->hp;
    }
    public function getAtq(){
        return $this->atq;
    }
    public function getDef(){
        return $this->def;
    }

    // SETTERS

    public function setHp($hp){
        $this->hp = $hp;
    }

    public function setAtq($atq){
        $this->atq = $atq;
    }

    public function setDef($def){
        $this->def = $def;
    }

    // METHOD

}
