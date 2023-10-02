<?php

echo "numero aleatorio: " . rand(1, 10);
echo PHP_EOL;
echo "raiz cuadrada: " . sqrt(16);
echo PHP_EOL;
echo "redondeo: " . round(16.5, 0, PHP_ROUND_HALF_DOWN);
echo PHP_EOL;
echo "Exponenciación: 2³: " . pow(2, 3);
echo PHP_EOL;
echo "Maximo de una lista numeros: " . max(5, 6, 10, 20, 15, 14, 1);
echo PHP_EOL;
echo "Minimo de una lista numeros: " . min(5, 6, -10, 20, 15, 14, 1);
// Funciones trigonometricas: sin, cos, tan, deg2rad
// https://www.php.net/manual/en/ref.math.php