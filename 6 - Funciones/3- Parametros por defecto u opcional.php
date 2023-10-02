<?php

// --------------------------------
// -- Parámetros por defecto u opcional
// --------------------------------

/*
Si un parámetro específico no se pasa siempre o si quiere que un
valor por defecto, pero permite las opciones para cambiarlo más tarde en
el programa, puede establecer los parámetros por defecto.
 */

function saludar($nombre = "Invitado")
{
  echo "Bienvenido $nombre, ";
  echo "a la creación de funciones" . PHP_EOL;
}

saludar();
saludar("Juan");
saludar("Fabio"); // llamada a la función

function suma($a = 0, $b = 0, $c = 0)
{
  echo $a + $b + $c . PHP_EOL;
}

suma();
suma(4);
suma(4, 5);
suma(4, 5, 6);

function multiplicacion($a = 1, $b = 1, $c = 1)
{
  echo $a * $b * $c . PHP_EOL;
}

multiplicacion(); // 1
multiplicacion(1); // 1
multiplicacion(1, 2); // 2
multiplicacion(1, 2, 3); // 6