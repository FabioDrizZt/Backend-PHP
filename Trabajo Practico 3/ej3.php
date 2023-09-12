Imprimir un listado con los números del 1 al 100 cada uno con su respectivo cuadrado
<?php

for ($i = 1; $i <= 100; $i++) {
  $cuadrado = $i * $i;
  echo "$i ²: $cuadrado" . PHP_EOL; // ² --> alt + 253 
}