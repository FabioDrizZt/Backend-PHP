<?php

// --------------------------------
// -- Else If - Si no es verdadera, pero si es verdadera la siguiente, ejecuta el código.
// --------------------------------

/*

Puede tener una comprobación condicional adicional ampliando la sentencia if para incluir el elseif.

Tenga en cuenta que se ejecutará la comprobación condicional que devuelva primero true.

 */

$edad = readline('Ingrese su edad');
$salario = readline('Ingrese su salario');

if ($salario < 67_000) {
  echo "Usted cobra menos del salario minimo";
} else if ($salario < 100_000) {
  echo "Usted cobra un poco mas del salario minimo";
} else if ($salario < 200_000) {
  echo "Usted Cobra relativamente bien";
} else if ($salario < 300_000) {
  echo "Esta cobrando muy por encima de la media";
} else /* if ($salario >= 300_000) */ {
  echo "Con este salario ya tiene que pagar impuesto a la riqueza";
}

if ($salario > 300_000) {
  echo "Con este salario ya tiene que pagar impuesto a la riqueza";
} elseif ($salario > 200_000) {
  echo "Esta cobrando muy por encima de la media";
} elseif ($salario > 100_000) {
  echo "Usted Cobra relativamente bien";
} elseif ($salario > 67_000) {
  echo "Usted Cobra un poco mas del salario minimo";
} else  { //if ($salario < 67_000) 
  echo "Usted cobra menos del salario minimo";
}