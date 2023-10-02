<?php

// --------------------------------
// -- Arrays Asociativos
// --------------------------------

/*

Las claves de un array pueden ser enteros o cadenas.
Si se fija una clave en cualquier punto del array, se considera un array asociativo.

*/

$actores = array(
  "terror" => "Tobin Bell",
  22 => "Adam Sandler",
  "drama" => "Martin Scorsese",
  "accion" => ["Mel Gibson", "Jason Statham", "Vin Diesel", "Stallone"],
  "Tom Holland",
  "accion" => "Rambo"
);

print_r($actores);
