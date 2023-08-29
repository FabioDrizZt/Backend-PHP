<?php

// --------------------------------
// -- Números Enteros - Integer
// --------------------------------

$nroEnterosPositivos = 123;
$nroEnterosNegativos = "-123";
$nroEnString = "1235512341";

//echo $nroEnterosNegativos + $nroEnString;

var_dump($nroEnterosPositivos);
var_dump($nroEnString);

// rango típico (aprox.)
// -2_147_483_648 a +2147483648 (sistema de 32 bits)
// -9E18 a 9E18 (sistema de 64 bits)

// Si el entero es demasiado largo el compilador lo cambiará automáticamente a reales.
$nroMuyLargo = 23123123159093972321312133212122132;
var_dump($nroMuyLargo);