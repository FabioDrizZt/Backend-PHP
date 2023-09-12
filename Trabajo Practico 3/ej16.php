En 1994 el país A tiene una población de 25 millones de habitantes y el país B de 19.9 millones. Las
tasas de crecimiento de la población son de 2% y 3% respectivamente. Desarrollar un algoritmo para
informar en que año la población del país B supera a la de A.

<?php

$anio = 1994;
$poblacionPaisA = 25;
$poblacionPaisB = 19.9;
$tazaA = 0.02;
$tazaB = 0.03;
while ($poblacionPaisB < $poblacionPaisA) {
  $anio++;
  $poblacionPaisA += $poblacionPaisA * $tazaA;
  $poblacionPaisB += $poblacionPaisB * $tazaB;
  echo "Año: $anio , Pais A: $poblacionPaisA , Pais B: $poblacionPaisB" . PHP_EOL;
}