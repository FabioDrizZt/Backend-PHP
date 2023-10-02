<?php

// --------------------------------
// -- strpos() - STRing POSition | Posición de un caracter en una cadena
// --------------------------------

/*
Esta función determina si un caracter o cadena existe dentro de otra cadena

y toma dos parametros obligatorios y un parametro opcional:

1. la cadena de texto en la que buscar
2. el/los caracteres que desee buscar en la cadena 1.
3. opcional: la posición en la que comenzar a buscar.

 */

$tigres = "tres tristes tigres, tragaban trigo en un trigal, en tres tristes trastos, tragaban trigo tres tristes tigres.";
//         012345678901234567890123456789012345678901234567890123
//                   1         2         3         4         5

echo strpos($tigres, "tres");
echo PHP_EOL;
echo strpos($tigres, "tres", 1);
echo PHP_EOL;
echo strpos($tigres, "tres", 54);
echo PHP_EOL;
var_dump(strpos($tigres, "tres", 91));
echo PHP_EOL;

function contarOcurrencias($string, $substring, $pos = 0)
{
  $contador = 0;
  do {
    $pos =  strpos($string, $substring, $pos);
    if ($pos !== false) {
      $contador++;
      $pos++;
    }
  } while ($pos !== false);
  return $contador;
}

echo contarOcurrencias($tigres, "tres");
echo PHP_EOL;
echo contarOcurrencias($tigres, "tigres");
