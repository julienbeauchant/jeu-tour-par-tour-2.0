<?php

$player1 = new Personnages;
$player1 ->setHp(10);
$player1 ->setAtq(2);
$player1 ->setDef(1);

$player1 = new Amber();
echo $player1->pluieFlechee();

?>