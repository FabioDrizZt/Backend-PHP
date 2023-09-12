Imprimir los 100 primeros números de Fibonacci. Recuerde que un número de Fibonacci se calcula
como la suma de los dos anteriores así: 0, 1, 1, 2, 3, 5, 8,13...

<?php
$a = 0;
$b = 1;
echo "Fibo N° 0: $a" . PHP_EOL;
echo "Fibo N° 1: $b" . PHP_EOL;
for ($i = 2; $i <= 50; $i++) {
  $c = $a + $b;
  $a = $b;
  $b = $c;
  echo "Fibo N° $i: $c" . PHP_EOL;
}
