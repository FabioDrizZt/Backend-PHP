<?php

// --------------------------------
// -- Longitud de cadenas - strlen() - STRing LENgth
// --------------------------------

/*

Esta función nos devuelve la longitud de la cadena y toma un parametro:

$cadena = cadena de texto

 */

$lorem = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores alias, hic non dolor rerum quibusdam ipsum voluptatum ex earum inventore iure odit, praesentium quisquam corporis. Fugit vitae error iste minus?";
$cadenaCortita = "patito";
echo strlen($lorem);
echo PHP_EOL;
echo strlen($cadenaCortita);
// echo $cadenaCortita[6]; esto tira error