<?php

function Fact($X)
{
  $P = 1;
  for ($i = 1; $i <= $X; $i++) {
    $P *= $i; // 1! = 1 * 1 --> 2! = 1 * 2 = 2 --> 3! = 2 * 3 = 6
  }
  return $P;
}

$nro = readline("ingrese un nro: ");
$factorial = Fact($nro);
echo "$nro ! = $factorial" . PHP_EOL;
