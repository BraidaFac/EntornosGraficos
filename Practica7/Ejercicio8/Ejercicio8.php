<?php
if (isset($_COOKIE['cancion'])) {
  $mibusqueda = $_COOKIE['cancion'];
} else {
  $mibusqueda = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="buscar.php" method="POST">
    <input type="text" name="cancion" placeholder="Ingresar Cancion a buscar">
    <input type="submit" value="buscar">
  </form>
  <?php
  if (isset($mibusqueda)) {
    echo $mibusqueda;
  } else {
    echo "No se encontró la busqueda";
  }
  ?>
</body>

</html>