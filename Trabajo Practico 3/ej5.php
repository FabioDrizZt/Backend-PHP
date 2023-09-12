Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente
hasta 2.
<?php
do {
  $N = readline("Ingrese el valor de N: ");
} while ($N % 2 == 1);
//if ($N % 2 == 1) $N--;

echo "PARES DEL 2 al 1000: " . PHP_EOL;
for ($i = $N; $i >= 2; $i -= 2) {
  echo $i . PHP_EOL;
}
