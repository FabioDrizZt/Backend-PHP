<?php
// --------------------------------
// -- Bucle While -- Mientras
// --------------------------------

/*

La idea del bucle while es ejecutar un bloque de código hasta que la expresión haya cambiado.

while (expresión lógica)
{
//código
}
*/

/* $conteo = 10;

while ($conteo > 0) {
  echo "Conteo: $conteo" . PHP_EOL;
  $conteo-=2;
}
echo "Se salio del bucle con la variable conteo = $conteo"; */

$suma = 0;
$limite = 100;

while ($suma < $limite) {
  $nuevoNumero = rand(1, 20); // Generar un número aleatorio entre 1 y 20
  $suma += $nuevoNumero;
  echo "La suma parcial es: " . $suma . PHP_EOL;
}

echo "La suma final es: " . $suma;

