Calcular el factorial de 10 números diferentes cuyos valores se leen.
<?php

$nro = readline("ingrese un nro: ");
$factorial = 1;
for ($i = 1; $i <= $nro; $i++) {
  $factorial *= $i; // 1! = 1 * 1 --> 2! = 1 * 2 = 2 --> 3! = 2 * 3 = 6
  echo "$i ! = $factorial" . PHP_EOL;
}
