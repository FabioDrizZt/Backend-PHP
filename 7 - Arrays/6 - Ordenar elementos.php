<?php

// --------------------------------
// -- Funciones de Ordenación
// --------------------------------

/*
Las funciones de ordenación en PHP permiten reorganizar los elementos de un array de acuerdo a diferentes criterios.

1. sort(): Ordena un array en orden ascendente por valor.
2. rsort(): Ordena un array en orden descendente por valor.
3. asort(): Ordena un array en orden ascendente por valor, manteniendo la asociación entre clave y valor.
4. arsort(): Ordena un array en orden descendente por valor, manteniendo la asociación entre clave y valor.
5. ksort(): Ordena un array en orden ascendente por clave.
6. krsort(): Ordena un array en orden descendente por clave.

*/

$frutas = array(
  "manzana" => 3,
  "plátano" => 1,
  "naranja" => 2,
  "fresa" => 5,
  "uva" => 4,
);

echo "Array original:" . PHP_EOL;
print_r($frutas);

// Ordenar por valor (ascendente)
sort($frutas);
echo "Array ordenado por valor (ascendente):" . PHP_EOL;
print_r($frutas);

// Ordenar por valor (descendente)
rsort($frutas);
echo "Array ordenado por valor (descendente):" . PHP_EOL;
print_r($frutas);

$frutas = array(
  "manzana" => 3,
  "plátano" => 1,
  "naranja" => 2,
  "fresa" => 5,
  "uva" => 4,
);
// Ordenar por valor manteniendo la asociación clave-valor (ascendente)
asort($frutas);
echo "Array ordenado por valor manteniendo la asociación (ascendente):" . PHP_EOL;
print_r($frutas);

// Ordenar por valor manteniendo la asociación clave-valor (descendente)
arsort($frutas);
echo "Array ordenado por valor manteniendo la asociación (descendente):" . PHP_EOL;
print_r($frutas);

// Ordenar por clave (ascendente)
ksort($frutas);
echo "Array ordenado por clave (ascendente):" . PHP_EOL;
print_r($frutas);

// Ordenar por clave (descendente)
krsort($frutas);
echo "Array ordenado por clave (descendente):" . PHP_EOL;
print_r($frutas);
