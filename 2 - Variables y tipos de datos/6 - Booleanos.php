<?php

// --------------------------------
// -- Tipos de Datos Booleanos
// --------------------------------

$valorVerdadero = true; 
$valorFalso = false; 

/* var_dump($valorVerdadero);
echo $valorVerdadero . PHP_EOL;
var_dump($valorFalso);
echo $valorFalso; */

$tieneValor = " ";
echo "Tiene valor vale $tieneValor: " . (bool)$tieneValor;