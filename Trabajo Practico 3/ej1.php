1. Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar?
<?php
/* ----- WHILE --------
$nota = readline("ingrese una nota: ");
$contador = 0; // Cantidad de notas ingresadas
$acumulador = 0; // Suma de todas las notas
while ($nota >= 0) { // hasta que se ingrese una nota  negativa
  $contador++; // $contador += 1 ==> $contador = $contador + 1
  $acumulador += $nota; // $acumulador = $acumulador + $nota;
  $nota = readline("ingrese una nota: "); // Ingreso notas dentro del bucle
}
$promedio = $acumulador / $contador; // Calculo el promedio
echo "El promedio es: $promedio";// echo "El promedio es: " . $promedio;
 ----- WHILE -------- */

/* ----- DO WHILE -------- 
$contador = 0; // Cantidad de notas ingresadas
$acumulador = 0; // Suma de todas las notas
do {
  $nota = readline("ingrese una nota: ");
  if ($nota < 0) break;
  $contador++; // $contador += 1 ==> $contador = $contador + 1
  $acumulador += $nota; // $acumulador = $acumulador + $nota;
  //  if ($nota >= 0) { // No se deben contar ni sumar las notas negativas ingresadas
  //   $contador++; // $contador += 1 ==> $contador = $contador + 1
  //   $acumulador += $nota; // $acumulador = $acumulador + $nota;
  // }  
} while ($nota >= 0);  // hasta que se ingrese una nota  negativa
$promedio = $acumulador / $contador; // Calculo el promedio
echo "El promedio es: $promedio";// echo "El promedio es: " . $promedio;
----- DO WHILE -------- */
/* ------ FOR ------- */

$contador = 0; // Cantidad de notas ingresadas
$acumulador = 0; // Suma de todas las notas
for ($i = 0; $i >= 0; $i++) {
  $nota = readline("ingrese una nota: ");
  if ($nota < 0) break;
  $contador++; // $contador += 1 ==> $contador = $contador + 1
  $acumulador += $nota; // $acumulador = $acumulador + $nota;
}
/* if ($contador == 0) {
  $promedio = 0;
} else {
  $promedio = $acumulador / $contador; // Calculo el promedio
} */
$promedio = ($contador == 0) ? 0 : $acumulador / $contador;
echo "El promedio es: $promedio";// echo "El promedio es: " . $promedio;