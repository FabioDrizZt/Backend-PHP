<?php

// --------------------------------
// -- Declaración If/else - Si/Sino
// --------------------------------

/*

Esto permite la ejecución condicional.

Piensa en ello como una pregunta de sí/no. Si es verdadera, ejecuta el código.
Si no es verdadera, ejecuta el código en la sección else (si se proporciona una).

if (condicion) {
  // si la condición es cierta
} else {
  // si la condición es falsa
}

 */
$edad = readline("ingrese su edad:");

if ($edad >= 21) :
  echo "Usted es mayor de edad, tiene: $edad";
else :
  echo "Usted es menor de edad, tiene: $edad";
endif;
