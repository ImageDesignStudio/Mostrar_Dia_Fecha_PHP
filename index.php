<?php
// Establecer la zona horaria
date_default_timezone_set('America/Argentina/Buenos_Aires');

// Obtener la fecha y la hora actual en formato de 24 horas
$fechaActual = date('d-M-Y');
$horaActual = date('H:i:s'); // 'H' para formato de 24 horas

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fecha y Hora</title>
  <link rel="stylesheet" href="estilos.css">
</head>

<body class="dark-mode">

  <button id="toggle-dark-mode">Light</button> <!-- Por defecto en modo oscuro -->

  <img src="imagenes/favicon.png" alt="Image Creative Studio">
  <h1>Fecha y Hora Actual</h1>
  <p>Hoy es: <b><?php echo $fechaActual; ?></b></p>
  <br>
  <p>Puedes establecer tu zona horaria modificando en la linea 3, donde dice:</p>
  <p>"date_default_timezone_set('America/Argentina/Buenos_Aires')"</p>
  <br>
  <p>Horario ARGENTINA:</p>
  <br>
  <div id="clock"></div>

  <!-- Javascript -->
  <script src="script.js"></script>
</body>

</html>