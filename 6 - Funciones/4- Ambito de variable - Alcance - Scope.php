<?php

// --------------------------------
// -- Ambito de Variable - Alcance - Scope Y Globales
// --------------------------------

$varGlobal = "Mi variable global";

function miFuncion()
{
  global $varLocal; // Definimos a la $varLocal como global
  $varLocal = "Mi variable local" . PHP_EOL;
  echo $varLocal;
  // echo $varGlobal; No se puede llamar a una variable que no esta definida localmente
  echo $GLOBALS["varGlobal"] . PHP_EOL;
}

miFuncion();
echo $varLocal;