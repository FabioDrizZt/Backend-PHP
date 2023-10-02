<?php

// --------------------------------
// -- Métodos de Búsqueda y Verificación
// --------------------------------

/*
Los métodos de búsqueda y verificación en PHP te permiten buscar valores o claves en un array y verificar su existencia.

1. in_array($valor, $array, $estricto): Verifica si un valor existe en un array.
2. array_search($valor, $array, $estricto): Busca un valor y devuelve su clave correspondiente en un array.
3. array_key_exists($clave, $array): Verifica si una clave existe en un array asociativo.

*/

$frutas = array("manzana", "plátano", "naranja", "fresa", "uva");
$buscarValor = "plátano";
if (in_array($buscarValor, $frutas)) {
  echo "$buscarValor está contenido dentro del Array.";  // Devuelve: fresa está contenido dentro del Array.
} else {
  echo "$buscarValor NO se encuentra dentro del Array.";   // Devuelve: fresa no se encuentra
}
$pos = array_search($buscarValor, $frutas);
if ($pos) {
  echo "El índice de la posición donde aparece el elemento buscado es: " . $pos;
} else {
  echo "$buscarValor NO se encuentra dentro del Array.";   // Devuelve: fresa no se encuentra
}

$usuario = array(
  "nombre" => "Juan",
  "edad" => 30,
  "ciudad" => "Ejemploville"
);
$clave = "altura";
if (array_key_exists($clave, $usuario)) {
  echo "La $clave del usuario con nombre " . $usuario["nombre"] . " es:" . $usuario[$clave];
} else {
  echo "No hay ninguna $clave registrada para este usuario.";
}
