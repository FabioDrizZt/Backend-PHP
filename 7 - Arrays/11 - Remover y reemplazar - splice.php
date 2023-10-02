<?php

// --------------------------------
// -- array_splice()
// --------------------------------

/*
Quita y reemplaza una porción de un array con nuevos elementos.
Parámetros:
1. Requerido: El array en el cual deseas realizar la operación.
2. Requerido: La posición de inicio para la extracción/reemplazo (índice).
3. Opcional: La longitud de la porción a extraer/reemplazar.
4. Opcional: Los elementos con los que deseas reemplazar la porción extraída.
Retorno: Un array que contiene los elementos extraídos.
*/

$frutas = array(
  "manzana",
  "plátano",
  "naranja",
  "fresa",
  "uva",
);

// $porcionExtraida = array_splice($frutas, 1, 2);
// print_r($porcionExtraida);
// print_r($frutas);

// array_splice($frutas, 1, 0, ["sandia", "banana"]);
array_splice($frutas, 1, 2, ["sandia", "banana"]);
print_r($frutas);
