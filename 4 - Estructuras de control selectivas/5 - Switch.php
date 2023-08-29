<?php

// --------------------------------
// -- Declaración de switch - Según
// --------------------------------

/*

Similar a una serie de sentencias if.

switch (expression) {
case 0:
    //code
    break;
case 1:
case 2:
    //code
    break;
default: (opcional)
}

La expresión sólo se evalúa una vez y el resultado se compara con cada una de las sentencias case.
Si coincide, entonces se ejecuta el código hasta el break;

- la sentencia case puede estar vacía
- si no se utiliza la sentencia break, entonces se ejecuta el siguiente bloque de código.
 */

$dia = 6;

/* if ($dia == 1) {
  echo "Lunes";
} elseif ($dia == 2) {
  echo "Martes";
} elseif ($dia == 3) {
  echo "Miercoles";
} elseif ($dia == 4) {
  echo "Jueves";
} elseif ($dia == 5) {
  echo "Viernes";
} elseif ($dia == 6) {
  echo "Sabado";
} elseif ($dia == 7) {
  echo "Domingo";
} else {
  echo "Dia incorrecto";
} */

switch ($dia) {
  case '6':
    echo "Sabado ";

  case '7':
    echo "Domingo ";
    
  case '1':
    echo "Lunes ";

  case '2':
    echo "Martes ";

  case '3':
    echo "Miercoles ";

  case '4':
    echo "Jueves ";

  case '5':
    echo "Viernes ";

    break;
  default:
    echo "Dia incorrecto";
}

switch ($variable) {
  case 'value':
    # code...
    break;
  
  default:
    # code...
    break;
}