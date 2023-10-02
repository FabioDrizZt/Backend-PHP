<?php

// Función para validar que una nota esté en el rango [1, 10]
function validarNota($nota)
{
  return ($nota >= 1 && $nota <= 10);
}

// Función para cargar las notas en el vector
function cargarNotas()
{
  $notas = array();
  do {
    echo "Ingrese una nota (o '0' para salir): ";
    $nota = readline();
    if ($nota != 0) {
      while (!validarNota($nota)) {
        echo "Por favor, ingrese una nota válida (entre 1 y 10): ";
        $nota = readline();
      }
      $notas[] = $nota;
    }
  } while ($nota != 0);
  return $notas;
}

// Función para mostrar las notas y su orden de ingreso
function mostrarNotas($notas)
{
  if (empty($notas)) {
    echo "Debe cargar las notas antes de realizar esta operación.\n";
    return;
  }
  echo "Notas ingresadas:\n";
  foreach ($notas as $posicion => $nota) {
    echo "Posición: $posicion - Nota: $nota\n";
  }
}

// Función para calcular el promedio de las notas
function calcularPromedio($notas)
{
  return count($notas) > 0 ? array_sum($notas) / count($notas) : 0;
}

// Función para mostrar las notas que superan el promedio y su posición
function mostrarNotasSuperioresAlPromedio($notas)
{
  $promedio = calcularPromedio($notas);
  if (empty($notas)) {
    echo "Debe cargar las notas antes de realizar esta operación.\n";
    return;
  }
  echo "Notas que superan el promedio ($promedio):\n";
  foreach ($notas as $posicion => $nota) {
    if ($nota > $promedio) {
      echo "Posición: $posicion - Nota: $nota\n";
    }
  }
}

// Función para encontrar la nota máxima y contar cuántos alumnos la obtuvieron
function encontrarNotaMaxima($notas)
{
  if (empty($notas)) {
    echo "Debe cargar las notas antes de realizar esta operación.\n";
    return;
  }
  $maxima = max($notas);
  $contador = array_count_values($notas)[$maxima];
  echo "La nota máxima obtenida es $maxima y la obtuvieron $contador alumno(s).\n";
}

// Función para contar cuántos alumnos obtuvieron una nota específica
function contarAlumnosConNota($notas, $nota)
{
  if (empty($notas)) {
    echo "Debe cargar las notas antes de realizar esta operación.\n";
    return;
  }
  $contador = array_count_values($notas)[$nota] ?? 0;
  echo "La nota $nota fue obtenida por $contador alumno(s).\n";
}

// Función para mostrar el porcentaje de alumnos con nota máxima y mínima
function mostrarPorcentajes($notas)
{
  if (empty($notas)) {
    echo "Debe cargar las notas antes de realizar esta operación.\n";
    return;
  }
  $maxima = max($notas);
  $minima = min($notas);
  $porcentajeMaxima = (array_count_values($notas)[$maxima] / count($notas)) * 100;
  $porcentajeMinima = (array_count_values($notas)[$minima] / count($notas)) * 100;
  echo "Porcentaje de alumnos que obtuvieron la nota máxima ($maxima): $porcentajeMaxima%\n";
  echo "Porcentaje de alumnos que obtuvieron la nota mínima ($minima): $porcentajeMinima%\n";
}

// Menú de opciones
$notas = array();
do {
  echo "\nMenú de opciones:\n";
  echo "1. Cargar notas\n";
  echo "2. Mostrar notas ingresadas\n";
  echo "3. Mostrar promedio de las notas\n";
  echo "4. Mostrar notas que superan el promedio\n";
  echo "5. Encontrar nota máxima y cuántos alumnos la obtuvieron\n";
  echo "6. Contar alumnos con una nota específica\n";
  echo "7. Mostrar porcentajes de notas máximas y mínimas\n";
  echo "8. Salir\n";
  echo "Ingrese su opción: ";
  $opcion = readline();

  switch ($opcion) {
    case 1:
      $notas = cargarNotas();
      break;
    case 2:
      mostrarNotas($notas);
      break;
    case 3:
      $promedio = calcularPromedio($notas);
      echo "El promedio de las notas es: $promedio\n";
      break;
    case 4:
      mostrarNotasSuperioresAlPromedio($notas);
      break;
    case 5:
      encontrarNotaMaxima($notas);
      break;
    case 6:
      echo "Ingrese la nota que desea buscar: ";
      $notaBuscar = readline();
      contarAlumnosConNota($notas, $notaBuscar);
      break;
    case 7:
      mostrarPorcentajes($notas);
      break;
    case 8:
      echo "¡Hasta luego!\n";
      break;
    default:
      echo "Opción inválida. Por favor, ingrese una opción válida.\n";
  }

  // Limpiar la pantalla (solo funciona en la línea de comandos, puede que no funcione en todos los sistemas)
  system('clear');
} while ($opcion != 8);
