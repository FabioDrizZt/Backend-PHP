Ordenar en forma creciente tres valores diferentes A, B, C.

<?php

$A = rand(1, 100);
$B = rand(1, 100);
$C = rand(1, 100);

echo ("A: $A, B: $B, C: $C");
echo PHP_EOL;

if (($A < $B) && ($A < $C)) { // A es el menor
  echo ($B < $C) ? ("A: $A, B: $B, C: $C") : ("A: $A,C: $C, B: $B");
} elseif (($B < $A) && ($B < $C)) {  // B es el menor
  echo ($A < $C) ? ("B: $B, A: $A, C: $C") : ("B: $B, C: $C, A: $A");
} else { // C es el menor
  echo ($A < $B) ? ("C: $C, A: $A, B: $B") : ("C: $C, B: $B, A: $A");
}