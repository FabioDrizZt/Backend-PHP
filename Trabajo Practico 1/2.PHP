<?php

$A = 10;
$B = 20;

$resultadoA = !(!($A <> 10) || (20 > $B) && ($A == 10) && false) && true;
$resultadoB = !(!false || false && true && false) && true;
$resultadoC = false && true; // false

var_dump($resultadoA) ;
var_dump($resultadoB) ;
var_dump($resultadoC) ;
