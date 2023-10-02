<?php

$array = [];



/*$i = 0;
 do{
    $array[$i]=readline('Ingrese el valor n° $i: ');
    $opc = readline('Desea ingresar mas numeros? [Y]es or [N]o ');
}while($opc == "Y"); */

function cargarVector(&$array)
{
  $N = readline('Que cantidad de datos desea ingresar? ');
  for ($i = 0; $i < $N; $i++) {
    $array[$i] = readline('Ingrese el valor n°' . $i + 1 . ': ');
  }
}
function mostrarVector($array)
{
  foreach ($array as $i => $arr) {
    echo "$i: $arr" . PHP_EOL;
  }
}
function Menu(&$opc)
{
  echo '---- Menu de opciones ----' . PHP_EOL;
  echo '1. Cargar el vector' . PHP_EOL;
  echo '2. Mostrar numeros que superan al promedio' . PHP_EOL;
  echo '3. Verificar orden descendente' . PHP_EOL;
  echo '4. Mostrar minimo' . PHP_EOL;
  echo '5. Mostrar vector' . PHP_EOL;
  echo '0. Salir' . PHP_EOL;
  $opc = readline('Ingrese una opción: ');
}
function promedio($array)
{
  $suma = 0;
  foreach ($array as $arr) $suma += $arr;
  return $suma / count($array);
}
function superanPromedio($array)
{
  $prom = promedio($array);
  echo "el promedio es: $prom" . PHP_EOL;
  foreach ($array as $i => $arr) {
    if ($arr > $prom) {
      echo "el elemento en la pos: $i vale: $arr y supera el promedio" . PHP_EOL;
    }
  }
}
function verificarDescendente($array)
{
  for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$i] < $array[$i + 1]) {
      return false;
    }
  }
  return true;
}
function posMinimo($array)
{
  $posMin = 0;
  foreach ($array as $indice => $valor) {
    if ($valor < $array[$posMin]) {
      $posMin = $indice;
    }
  }
  return $posMin;
}

/* PROGRAMA PRINCIPAL */

do {
  Menu($opc);

  switch ($opc) {
    case 1:
      cargarVector($array);
      break;
    case 2:
      superanPromedio($array);
      break;
    case 3:
      if (verificarDescendente($array)) {
        echo "el vector SI esta ordenado descendentemente" . PHP_EOL;
      } else {
        echo "el vector NO esta ordenado descendentemente" . PHP_EOL;
      }
      break;
    case 4:
      $posMin = posMinimo($array);
      echo "el valor minimo es: $array[$posMin] y su posicion es: $posMin";
      break;
    case 5:
      echo 'Mostrar Vector: ' . PHP_EOL;
      mostrarVector($array);
      break;
    case 0:
      echo "Fin del programa.";
      break;
    default:
      echo "opcion incorrecta";
      break;
  }
} while ($opc != 0);
