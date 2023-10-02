<?php

// --------------------------------
// -- Pasaje de parámetros
// --------------------------------

/*
Las funciones pueden aceptar parámetros, que son valores que se pasan a la función cuando se llama. Aquí tienes un ejemplo de cómo pasar un parámetro a una función:
 */

function saludar($nombre)
{
  echo "Bienvenido $nombre, ";
  echo "a la creación de funciones" . PHP_EOL;
}

$usuario = readline("Ingrese su nombre: ");
saludar($usuario);

saludar("Juan");
saludar("Fabio"); // llamada a la función