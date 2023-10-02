<?php

// --------------------------------
// -- array_merge()
// --------------------------------

/*
Combina dos o más arrays en uno nuevo.
Parámetros:
1. Requerido: El primer array a combinar.
2. Requerido: El segundo array a combinar. Puedes proporcionar más de dos arrays separándolos por comas.
Retorno: Un nuevo array que contiene los elementos de los arrays combinados.
*/

$array1 = array("rojo", "verde", "azul");
$array2 = array("amarillo", "naranja");

$combinado = array_merge($array1, $array2);

echo "Array 1: ";
print_r($array1);

echo "Array 2: ";
print_r($array2);

echo "Array combinado: ";
print_r($combinado);
