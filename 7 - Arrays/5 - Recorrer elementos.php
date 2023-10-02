<?php

// --------------------------------
// -- For - Bucle Foreach
// --------------------------------

/*
El bucle foreach es una forma sencilla de recorrer los valores de un array asociativo
 */

$actoresI = array(
  "Leonardo DiCaprio", // 0
  "Tom Hanks", // 1
  "Brad Pitt", // 2
  "Johnny Depp",
  "Sandra Bullock",
  "Angelina Jolie"
);

// echo $actoresI[0];
// echo $actoresI[1];
// echo $actoresI[2];

for ($i = 0; $i < count($actoresI); $i++) {
  echo $actoresI[$i] . PHP_EOL;
}

$actores = array(
  "terror" => "Tobin Bell",
  "comedia" => "Adam Sandler",
  "accion" => "Vin Diesel",
);

for ($i = 0; $i < count($actores); $i++) {
  // echo $actores[$i] . PHP_EOL;
} // Este bucle no funciona para arreglos asociativos !

foreach ($actores as $actor) {
  echo $actor . PHP_EOL;
}

foreach ($actores as $genero => $actor) {
  echo "El actor: $actor pertenece al genero $genero" . PHP_EOL;
}

foreach ($actoresI as $indice => $actor) {
  echo "El actor: $actor esta en el indice $indice" . PHP_EOL;
}
