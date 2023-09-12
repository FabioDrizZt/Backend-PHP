Ingrese un valor numérico correspondiente a un mes y a continuación muestre todos los meses en
letras que restan para llegar a diciembre del mismo año (por ejemplo, si ingresa 10 debe mostrar
octubre, noviembre y diciembre). Validar que se ingrese un número de mes válido y el proceso
finaliza cuando el operador ingresa el valor cero. Muestre también los valores correctos e
incorrectos ingresados por el usuario.
<?php
$correcto = 0;
$incorrecto = 0;
do {
  $mes = readline("Ingrese el valor del mes");
  switch ($mes) {
    case 1:
      echo 'enero';
    case 2:
      echo 'febrero';
    case 3:
      echo 'marzo';
    case 4:
      echo 'abril';
    case 5:
      echo 'mayo';
    case 6:
      echo 'junio';
    case 7:
      echo 'julio';
    case 8:
      echo 'agosto';
    case 9:
      echo 'septiembre';
    case 10:
      echo 'octubre';
    case 11:
      echo 'noviembre';
    case 12:
      echo 'diciembre';
      $correcto++;
      break;
    default:
      echo 'mes incorrecto';
      $incorrecto++;
      break;
  }
} while ($mes != 0);
echo "ingresaste $correcto valores correctos." . PHP_EOL;
echo "ingresaste $incorrecto valores incorrectos.";
