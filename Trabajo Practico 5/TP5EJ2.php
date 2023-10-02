<?php

function generarNumerosAleatorios($cantidad)
{
  $numerosGenerados = array();
  while (count($numerosGenerados) < $cantidad) {
    $numero = rand(100, 999);
    if (!in_array($numero, $numerosGenerados)) {
      $numerosGenerados[] = $numero;
    }
  }
  return $numerosGenerados;
}
function cargarVector($n)
{
  $vector = generarNumerosAleatorios($n);
  return $vector;
}
// N es el número de valores enteros al azar que quieres generar y almacenar en el vector.
$N = 10; // Puedes cambiar esto al número deseado.

$vector = cargarVector($N);

// Imprimir el vector resultante
echo "Vector generado: ";
echo implode(", ", $vector);
