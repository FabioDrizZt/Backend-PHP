<?php

// --------------------------------
// -- Bucle For - Para
// --------------------------------

/*

Sintaxis del bucle for

for (expr1; expr2; expr3)
{
//código
}

La primera expresión se ejecuta una vez al principio del bucle.
La mayor parte de las veces se trata de un valor puesto a cero.
La segunda expresión es una declaración condicional(expresión lógica), que se evalúa al principio del bucle en cada iteración.
Si la expresión es verdadera, se ejecuta el código dentro de los paréntesis.
La tercera expresión se ejecuta al final de cada una de las iteraciones del bucle.

 */

/* $contador = 1; // inicialización
do {
  echo "Conteo: $contador" . PHP_EOL;
  $contador++; // incremento/decremento
} while ($contador <= 10); //condicion */

for ($contador = 1; $contador <= 10; $contador++) {
  echo "Conteo: $contador" . PHP_EOL;
}

$suma = 0;


for ($i = 1; $i <= 10; $i++) {
  $suma += $i;
}

echo "La suma de los primeros 10 números naturales es: " . $suma;

/* $conteo = 10;

while ($conteo > 0) {
  echo "Conteo: $conteo" . PHP_EOL;
  $conteo-=2;
}
echo "Se salio del bucle con la variable conteo = $conteo"; */

for ($conteo = 10; $conteo > 0; $conteo -= 2) {
  echo "Conteo: $conteo" . PHP_EOL;
}
echo "Se salio del bucle con la variable conteo = $conteo";