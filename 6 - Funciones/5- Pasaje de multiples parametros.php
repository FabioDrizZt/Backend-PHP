<?php

// --------------------------------
// -- PASAJE DE MULTIPLES PARAMETROS
// --------------------------------

function suma($a = 0, $b = 0, $c = 0, $d = 0)
{
  return $a + $b + $c + $d;
}

$resultado = suma(2, 3);
echo "suma: $resultado" . PHP_EOL;

echo "aleatorio: " . rand(1, 10) . PHP_EOL;

function sumar(...$nros)
{
  $acumulador = 0;
  foreach ($nros as $nro) {
    $acumulador += $nro;
  }
  return $acumulador;
}

/* $n1 = readline("Ingrese el valor de n1: ");
$n2 = readline("Ingrese el valor de n2: ");
$n3 = readline("Ingrese el valor de n3: ");
$n4 = readline("Ingrese el valor de n4: ");
$n5 = readline("Ingrese el valor de n5: ");

$resultado = sumar($n1, $n2, $n3, $n4, $n5);
echo "suma: $resultado"; */

echo sumar(1) . PHP_EOL;
echo sumar(1, 2) . PHP_EOL;
echo sumar(1, 2, 3) . PHP_EOL;
echo sumar(1, 2, 3, 4) . PHP_EOL;
echo sumar(1, 2, 3, 4, 5) . PHP_EOL;
echo sumar(1, 2, 3, 4, 5, 6) . PHP_EOL;
echo sumar(1, 2, 3, 4, 5, 6, 7) . PHP_EOL;
echo sumar(1, 2, 3, 4, 5, 6, 7, 8) . PHP_EOL;

function nombrar(...$nombres)
{
  foreach ($nombres as $nombre) {
    echo "El participante se llama: $nombre " . PHP_EOL;
  }
}

nombrar("Alfa", "Tora", "Mora", "Pestañela", "Romi");