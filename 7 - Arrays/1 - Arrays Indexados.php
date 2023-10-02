<?php

// --------------------------------
// -- Array - Arreglos - Vectores - Matrices unidimensionales
// --------------------------------

/*
Un array es una colección de valores. Principalmente son datos de tipo clave/valor.

Para configurar un array declaras tu variable y luego le asignamos el array(),
o puedes utilizar la sintaxis de array abreviada que utiliza los corchetes
de apertura y cierre. []

Cualquier array que no defina sus claves es un array indexado.

Cada elemento de un array está separado por una coma.

Los valores pueden ser de cualquier tipo. (cadenas, enteros, booleanos, punto flotante e incluso otros arrays)

*/

$actores = array(
  "Leonardo Di Caprio",
  "Tom hanks",
  "Angelina Jolie",
  "Brad Pitt",
  "Johnny Depp",
  "Tommy Lee Jones",
);

echo "<pre>";
print_r($actores);
echo "</pre>";

$peliculas = [
  'Titanic',
  'El padrino',
  'Pulp Fiction',
  'El secreto de sus ojos',
  'La lista de Schindler',
  'Forrest Gump',
];

echo "<pre>";
print_r($peliculas);
echo "</pre>";

echo $actores[0];

$arrayVariado = [10, 3.14, "una cadena", true, false, [1, 2, 3, 4], ["a", "b", "c", "d", "e", "f"]];

print_r($arrayVariado);
