<?php

// --------------------------------
// -- substr() - SUBSTRing | SUB cadena
// --------------------------------

/*
Esta función tomará una cadena y creará una subcadena a partir de las ubicaciones específicas que usted proporcione.

Esta función toma dos parámetros, con la opción de un tercero.
1. Cadena a manipular
2. Ubicación inicial de la subcadena. (0 es el principio)
3. Opcional: Cuántos caracteres quiere tomar.
 */

$tigres = "tres tristes tigres, tragaban trigo en un trigal, en tres tristes trastos, tragaban trigo tres tristes tigres.";
//         0123456789012345678901234567890
//                   1         2         3         4         5

echo substr($tigres, 21);
echo PHP_EOL;
echo substr($tigres, 21, 8);
echo PHP_EOL;
echo substr($tigres, 21, 14);
