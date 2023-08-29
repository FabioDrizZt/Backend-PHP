<?php
$A = rand(-1, 10);
$B = rand(-1, 1);
$C = rand(-10, 1);
$D = rand(-10, 10);
$E = 1;
$F = 1;
$G = rand(-10, 10);

/* var_dump($A);
var_dump($B);
var_dump($C); */
echo ("E:" . $E . PHP_EOL);
echo ("F:" . $F . PHP_EOL);
//var_dump($G);
$a = $A > 0 && $B < 0;
//var_dump($a);
$b = ($A != $B) && ($A != $C) && ($B != $C);
//var_dump($b);
$e = !($E == 0) && !($F > $G);
//var_dump($e);
$d = ($A < $B) && ($B < $C) || ($C < $B) && ($B < $A);
//var_dump($d);
$e = $F < 0 && ($E < 0) || !$F < 0 && !($E < 0);
$e2 = ($F < 0) xor ($E >= 0);
$parteA = ($F < 0);
$parteB = ($E >= 0);
var_dump($parteA);
var_dump($parteB);
var_dump($e2);
var_dump(true xor true);
var_dump(false xor true);
var_dump(true xor false);
var_dump(false xor false);
