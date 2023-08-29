<?php

// --------------------------------
// -- Operadores de incremento y decremento ~ ++, --
// --------------------------------

/*

Aumentar (++) o disminuir (--) un valor en 1

 */

$incrementadora = 10;
// Pre Incremento el ++ se ejecuta antes de la función echo
echo ++$incrementadora. PHP_EOL; // 11
// Post Incremento el ++ se ejecuta luego de la función echo
echo $incrementadora++ . PHP_EOL; // Muestra 11, pero el valor es 12
echo $incrementadora . PHP_EOL; // 12

$Decrementadora = 10;
// Pre Decremento el -- se ejecuta antes de la función echo
echo --$Decrementadora. PHP_EOL;
// Post Decremento el -- se ejecuta luego de la función echo
echo $Decrementadora-- . PHP_EOL;
echo $Decrementadora . PHP_EOL; // 
