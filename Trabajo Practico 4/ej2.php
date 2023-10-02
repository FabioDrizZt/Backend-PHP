<?php
function sumar3($a, $b, $c)
{
  return sumar($a, $b) + $c;
}
function sumar($a, $b)
{
  return $a + $b;
}

$nro1 = readline("Ingrese el primer nro: ");
$nro2 = readline("Ingrese el segundo nro: ");
$nro3 = readline("Ingrese el tercer nro: ");
$resultado = sumar3($nro1, $nro2, $nro3);
echo "el resultado de la suma es: $resultado";
