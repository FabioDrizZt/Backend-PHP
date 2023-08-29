Escribir un algoritmo que con solo ingresar los lados de un triángulo rectángulo le dice al usuario si
es isosceles, escaleno o equilatero.

<?php

$A = rand(1, 3);
$B = rand(1, 3);
$C = rand(1, 3);

echo ("A: $A, B: $B, C: $C");
echo PHP_EOL;
if ($A == $B && $A == $C) {
  echo "El triangulo es EQUILATERO";
} elseif ($A != $B && $A != $C && $B != $C) {
  echo "El triangulo es ESCALENO";
} else /*if (($A == $B && $A != $C) || ($A == $C && $A != $B) || ($B == $C && $B != $A)) */ {
  echo "El triangulo es ISOSCELES";
}