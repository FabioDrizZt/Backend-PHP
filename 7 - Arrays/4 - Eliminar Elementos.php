<?php

// --------------------------------
// -- unset()
// --------------------------------

/*
Desactivar/eliminar una variable determinada

Parámetros
1. Obligatorio: variable que desea eliminar/desactivar/borrar
2. Opcional: más variables a eliminar, separadas por una coma.

Retorno: Nada  (void)

 */

$a = 1;
$b = 2;
$c = 3;
$d = 4;
$e = 5;
echo "a:$a,b:$b,c:$c,d:$d,e:$e\n";
unset($a, $b); // desactivamos las dos primeras variables $a y $b
unset($a, $b, $c, $d, $e);
// echo "a:$a,b:$b,c:$c,d:$d,e:$e\n";

$actores = array(
  "Leonardo DiCaprio",
  "Brad Pitt",
  "Angelina Jolie",
  "Tom Hanks",
  "Sandra Bullock",
  "Anne Hathaway",
);

//Eliminamos el primer y tercer actor con unset
unset($actores[0], $actores[2]);
print_r($actores);

$actoresAsociativo = array(
  "terror" => "Tobin Bell",
  "comedia" => "Adam Sandler",
  "accion" => "Vin Diesel",
);

unset($actoresAsociativo["terror"]);
print_r($actoresAsociativo);

// --------------------------------
// -- array_pop()
// --------------------------------

/*
Quita y muestra un elemento del final del array.
Parametro:
1. Requerido: array del que se desea eliminar el último elemento. Alterado por referencia (&)
Retorno: Valor del elemento del array.
*/

$actores = array(
  "Leonardo DiCaprio",
  "Brad Pitt",
  "Angelina Jolie",
  "Tom Hanks",
  "Will Smith",
);

echo "Se elimino del array a: " . array_pop($actores) . PHP_EOL;
print_r($actores);

// --------------------------------
// -- array_shift()
// --------------------------------

/*
Quita y muestra el primer elemento del array.
Parámetro:
1. Requerido: array del que se desea eliminar el primer elemento. Alterado por referencia (&)
Retorno: Valor del elemento eliminado del array.
*/

$actores = array(
  "Leonardo DiCaprio",
  "Brad Pitt",
  "Angelina Jolie",
  "Tom Hanks",
  "Will Smith",
);

print_r($actores);
echo "Se elimino del array a: " . array_shift($actores) . PHP_EOL;
print_r($actores);
