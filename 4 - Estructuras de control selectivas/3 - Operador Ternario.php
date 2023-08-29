<?php

// --------------------------------
// -- Ternario
// --------------------------------

/*

(expresión) ? resultado1 : resultado2

La expresión ------ (expresión) ? resultado1 : resultado2 ----- evalúa a resultado1
si la expresión es TRUE, y result2 si la expresión es FALSE.

 */
$edad = rand(17, 25);
/*  if ($edad >= 21)
 {
  echo "Usted es mayor de edad, tiene: $edad";
} 
else 
{
  echo "Usted es menor de edad. tiene: $edad"; 
}
 */
// echo ($edad >= 21) ? "Usted es mayor de edad, tiene: $edad" : "Usted es menor de edad. tiene: $edad";
echo "Usted es ", ($edad >= 21) ? "mayor" : "menor", " de edad, tiene: $edad";
