<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="default.css" type="text/css" />
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'] ?>
    <h1>BIENVENIDO <?= $nombre ?></h1>
  <?php
  } else {
    echo ' <h1>NO PUEDES VISITAR ESTA PAGINA</h1>';
  }
  ?>
</body>

</html>