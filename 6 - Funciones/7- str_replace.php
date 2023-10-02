<?php

// --------------------------------
// -- str_replace()
// --------------------------------

/*
Esta función reemplazará ciertas ocurrencias en una cadena con el nuevo valor que se desee.

Esta función toma tres parámetros, con un cuarto opcional:
1. El valor que se busca en la cadena --> Tigres
2. El valor que se desea sustituir por el valor que se busca --> Panteras
3. La variable en la que se realiza la sustitución --> $tigres
4. Opcional: Cuántas ocurrencias se reemplazaron.
 */
$tigres = "tres tristes tigres, tragaban trigo en un trigal, en tres tristes trastos, tragaban trigo tres tristes tigres.";
$contador = 9182739;
$panteras = str_replace("tigres", "panteras", $tigres, $contador);
echo $panteras;
echo PHP_EOL;
echo "la palabra tigres se reemplazo $contador veces por panteras.";
