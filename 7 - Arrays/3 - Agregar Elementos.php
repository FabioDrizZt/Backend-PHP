<?php

// --------------------------------
// -- array_push()
// --------------------------------

/*

Agregar un elemento al final de un array

Parametros
1. Requerido: Array al que se va a añadir el elemento. Alterado por referencia (&)
2. Requerido: valor que está añadiendo al array

Retorno:
Devuelve la cantidad elementos hay en el array (incluyendo el nuevo añadido).

 */

$actores = array(
  "Leonardo DiCaprio",
  "Brad Pitt",
  "Angelina Jolie",
  "Tom Hanks",
  "Will Smith",
);

print_r($actores);
array_push($actores, "Anne Hathaway", "Guillermo Francella");
print_r($actores);

//-- Metodo alternativo
$actores[] = "Sandra Bullock";
$actores[] = "Ricardo Darin";
print_r($actores);

$actores["4"] = "Jaden Smith";
$actores[-1] = "Elliot Page";
$actores["cinco"] = "Tobey Maguire";

print_r($actores);
