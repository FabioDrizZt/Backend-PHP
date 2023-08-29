<?php
// --------------------------------
// -- Bucle Do While - Hacer Mientras
// --------------------------------

/*

La idea del bucle do while es ejecutar un bloque de código al menos una vez hasta que la expresión haya cambiado.


SIEMPRE EJECUTA EL CODIGO AL MENOS UNA VEZ
do{
//código
}while(expresión);

En otros lenguajes existe un bucle similar

repeat{
    //código
}until(!expresión);
*/

/* $contador = 11;

do {
  echo "Conteo: $contador" . PHP_EOL;
  $contador++;
} while ($contador <= 10);

$suma = 0;
$limite = 100;

do {
  $nuevoNumero = readline("Ingrese un numero");
  $suma += $nuevoNumero;
  echo "La suma parcial es: " . $suma . PHP_EOL;
} while ($suma > $limite);

echo "La suma final es: " . $suma; */

$lanzamientos = 0;
$dado1 = 0;
$dado2 = 0;

do {
  $dado1 = rand(1, 6); // Generar un número aleatorio entre 1 y 6 para simular el lanzamiento del dado
  $dado2 = rand(1, 6); // Generar un número aleatorio entre 1 y 6 para simular el lanzamiento del dado
  $lanzamientos++;
  echo "Dado1: $dado1, Dado2: $dado2" . PHP_EOL;
} while ($dado1 + $dado2 < 10);

echo "¡Felicidades! Ganaste en $lanzamientos lanzamientos.";