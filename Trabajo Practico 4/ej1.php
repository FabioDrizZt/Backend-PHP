<?php

function sumar($a, $b)
{
  return $a + $b;
}

$nro1 = readline("Ingrese el primer nro: ");
$nro2 = readline("Ingrese el segundo nro: ");
$resultado = sumar($nro1, $nro2);
echo "el resultado de la suma es: $resultado";
