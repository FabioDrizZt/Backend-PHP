<?php

// --------------------------------
// -- Cambio de Mayusculas - strToUpper - strToLower
// --------------------------------

/*
Cambia todos los caracteres a mayúsculas o a minúsculas
Estas funciones toman cada una un parámetro.

1. Cadena a la que se le cambiarán las mayúsculas y minúsculas.
 */

$tigres = "tres tRiStes tIgrEs, traGabAn trIgO en un trIgal, en tRes triStes trastos, tragaban trigo tres tristes tigres.";
//         0123456789012345678901
//                   1         2

$tigresAMayusculas = strtoupper($tigres);
echo $tigresAMayusculas . PHP_EOL;
$tigresAMinusculas = strtolower($tigres);
echo $tigresAMinusculas . PHP_EOL;
$tigresConPrimerLetraEnMayuscula = ucfirst($tigres);
echo $tigresConPrimerLetraEnMayuscula . PHP_EOL;
$tigresConPrimerLetraDeCadaPalabraEnMayuscula = ucwords($tigres);
echo $tigresConPrimerLetraDeCadaPalabraEnMayuscula . PHP_EOL;
/* $tigres[0] = strtoupper($tigres[0]);
echo $tigres; */
$tigres[21] = strtoupper($tigres[21]);
echo $tigres;