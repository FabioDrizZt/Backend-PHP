<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de resultado</title>
</head>
<body>
  <h1>Recibo los datos del formulario</h1>
  <?php 
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];

    if ($edad >= 21){
      echo "$nombre es mayor de edad, tiene: $edad";
    } else {
      echo "$nombre es menor de edad. tiene: $edad"; 
    }
  ?>
</body>
</html>