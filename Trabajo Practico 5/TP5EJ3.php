<?php

// Función para cargar el vector con números enteros impares
function cargarVector()
{
  $vector = array();
  do {
    echo "Ingrese un número entero impar (o '0' para salir): ";
    $numero = readline();
    if ($numero != 0 && ($numero % 2 != 0)) {
      $vector[] = $numero;
    } elseif ($numero != 0) {
      echo "Por favor, ingrese un número entero impar.\n";
    }
  } while ($numero != 0);
  return $vector;
}

// Función para validar si hay elementos repetidos en el vector
function tieneRepetidos($vector)
{
  return count($vector) != count(array_unique($vector));
}

// Función para contar las ocurrencias de un valor K en el vector
function contarOcurrencias($vector, $valorK)
{
  return array_count_values($vector)[$valorK] ?? 0;
}

// Función para calcular el promedio del vector
function calcularPromedio($vector)
{
  return count($vector) > 0 ? array_sum($vector) / count($vector) : 0;
}

// Función para mostrar los datos que superan o no el promedio
function mostrarDatosSegunPromedio($vector, $promedio, $superan)
{
  foreach ($vector as $posicion => $dato) {
    if (($superan && $dato > $promedio) || (!$superan && $dato <= $promedio)) {
      echo "Posición: $posicion - Dato: $dato\n";
    }
  }
}

// Menú de opciones
do {
  echo "\nMenú de opciones:\n";
  echo "1. Cargar vector\n";
  echo "2. Verificar repetidos\n";
  echo "3. Contar ocurrencias de un valor\n";
  echo "4. Calcular promedio\n";
  echo "5. Mostrar datos que superan el promedio\n";
  echo "6. Mostrar datos que no superan el promedio\n";
  echo "0. Salir\n";
  echo "Ingrese su opción: ";
  $opcion = readline();

  switch ($opcion) {
    case 1:
      $vector = cargarVector();
      break;
    case 2:
      if (tieneRepetidos($vector)) {
        echo "Los datos del vector están repetidos.\n";
      } else {
        echo "Los datos del vector no están repetidos.\n";
      }
      break;
    case 3:
      echo "Ingrese el valor de K: ";
      $valorK = readline();
      $ocurrencias = contarOcurrencias($vector, $valorK);
      echo "El valor '$valorK' aparece $ocurrencias veces en el vector.\n";
      break;
    case 4:
      $promedio = calcularPromedio($vector);
      echo "El promedio de los datos en el vector es: $promedio\n";
      break;
    case 5:
      echo "Datos que superan el promedio:\n";
      mostrarDatosSegunPromedio($vector, calcularPromedio($vector), true);
      break;
    case 6:
      echo "Datos que no superan el promedio:\n";
      mostrarDatosSegunPromedio($vector, calcularPromedio($vector), false);
      break;
    case 0:
      echo "¡Hasta luego!\n";
      break;
    default:
      echo "Opción inválida. Por favor, ingrese una opción válida.\n";
  }
} while ($opcion != 0);
