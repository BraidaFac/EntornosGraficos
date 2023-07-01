<?php
include("connect.php");
$can = $_POST['cancion'];
$vResultado = getMusic($can);

$fila = mysqli_fetch_array($vResultado);
$nombre = $fila['nombre'];
setcookie("cancion", $nombre, time() + 3600 * 24 * 365);
header("Location: Ejercicio8.php");
