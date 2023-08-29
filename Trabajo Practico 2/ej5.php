Leer un valor de Día, Mes y Año de una fecha (ej.: 10-5-2003). Mostrar la fecha con el respectivo
nombre del mes (ej.: 10-mayo-2003). Si el número leído para el mes no está entre 1 y 12 imprimir un
mensaje de error. Comprobar que el día se encuentre entre 1 y 31 y el año sea mayor que 2000.

<?php

$dia = rand(-3, 30);
$mes = rand(-3, 12);
$anio = rand(1998, 2005);
echo ("dia: $dia, mes: $mes, anio: $anio");
echo PHP_EOL;

if ($dia >= 1 && $dia <= 31) {
  if ($anio > 2000) {
    switch ($mes) {
      case '1':
        echo "$dia-Enero-$anio";
        break;
      case '2':
        echo "$dia-Febrero-$anio";
        break;
      case '3':
        echo "$dia-Marzo-$anio";
        break;
      case '4':
        echo "$dia-Abril-$anio";
        break;
      case '5':
        echo "$dia-Mayo-$anio";
        break;
      case '6':
        echo "$dia-Junio-$anio";
        break;
      case '7':
        echo "$dia-Julio-$anio";
        break;
      case '8':
        echo "$dia-Agosto-$anio";
        break;
      case '9':
        echo "$dia-Septiembre-$anio";
        break;
      case '10':
        echo "$dia-Octubre-$anio";
        break;
      case '11':
        echo "$dia-Noviembre-$anio";
        break;
      case '12':
        echo "$dia-Diciembre-$anio";
        break;
      default:
        echo "mes incorrecto";
        break;
    }
  } else {
    echo "año incorrecto";
  }
} else {
  echo "día incorrecto";
}