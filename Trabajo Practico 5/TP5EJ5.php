<?php

// Función para generar aleatoriamente un vector de 20 números enteros
function generarVector()
{
  $vector = array();
  for ($i = 0; $i < 20; $i++) {
    $vector[] = rand(1, 100);
  }
  return $vector;
}

// Función para validar que un número N esté en el rango [1, 20]
function validarN($N)
{
  return ($N >= 1 && $N <= 20);
}

// Función para mostrar los primeros N valores del vector
function mostrarPrimerosN($vector, $N)
{
  if (!validarN($N)) {
    echo "Por favor, ingrese un valor válido para N (entre 1 y 20).\n";
    return;
  }
  echo "Los primeros $N valores del vector son: ";
  echo implode(", ", array_slice($vector, 0, $N)) . "\n";
}

// Función para calcular y mostrar la suma de los valores pares en el vector
function mostrarSumaValoresPares($vector)
{
  $suma = 0;
  foreach ($vector as $numero) {
    if ($numero % 2 == 0) {
      $suma += $numero;
    }
  }
  echo "La suma de los valores pares en el vector es: $suma\n";
}

// Función para buscar un número dado en el vector y mostrar su posición
function buscarNumero($vector, $numero)
{
  $posicion = array_search($numero, $vector);
  if ($posicion !== false) {
    echo "El número $numero se encuentra en la posición: $posicion\n";
  } else {
    echo "El número $numero no se encuentra en el vector.\n";
  }
}

// Función para verificar si el vector está ordenado en forma ascendente
function estaOrdenadoAscendente($vector)
{
  $ordenado = true;
  $n = count($vector);
  for ($i = 1; $i < $n; $i++) {
    if ($vector[$i - 1] > $vector[$i]) {
      $ordenado = false;
      break;
    }
  }
  return $ordenado;
}

// Generar el vector aleatorio
$vector = generarVector();

// Menú de opciones
do {
  echo "\nMenú de opciones:\n";
  echo "1. Mostrar los primeros N valores del vector\n";
  echo "2. Mostrar la suma de los valores pares\n";
  echo "3. Buscar un número en el vector\n";
  echo "4. Verificar si el vector está ordenado en forma ascendente\n";
  echo "5. Salir\n";
  echo "Ingrese su opción: ";
  $opcion = readline();

  switch ($opcion) {
    case 1:
      echo "Ingrese el valor de N: ";
      $N = readline();
      mostrarPrimerosN($vector, $N);
      break;
    case 2:
      mostrarSumaValoresPares($vector);
      break;
    case 3:
      echo "Ingrese el número que desea buscar: ";
      $numeroBuscar = readline();
      buscarNumero($vector, $numeroBuscar);
      break;
    case 4:
      if (estaOrdenadoAscendente($vector)) {
        echo "El vector está ordenado en forma ascendente.\n";
      } else {
        echo "El vector no está ordenado en forma ascendente.\n";
      }
      break;
    case 5:
      echo "¡Hasta luego!\n";
      break;
    default:
      echo "Opción inválida. Por favor, ingrese una opción válida.\n";
  }
} while ($opcion != 5);
