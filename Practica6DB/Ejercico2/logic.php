<?php
function getOneById($id)
{
  $query = "SELECT * FROM ciudades WHERE id=" . $id;
  return mysqli_fetch_assoc(statementResponse($query));
}

session_start();
if (!isset($_SESSION['mensaje'])) {
  $_SESSION['mensaje'] = '';
}

include_once('connect.php');

// NEW CITY
if (!empty($_POST) && $_POST['accion'] === 'Agregar') {
  $city = $_POST;
  $query = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$city[ciudad]', '$city[pais]', $city[habitantes], $city[superficie], " . (strtoupper($city['tieneMetro']) === 'SI' ? 'true' : 'false') . ")";

  try {
    $resultado = statementResponse($query);
    $_SESSION['mensaje'] = "OK - Nueva ciudad";
    header("Location: read.php");
    exit;
  } catch (Exception $e) {

    unset($city, $_POST);
  }
}

// UPDATE CITY
if (!empty($_POST) && $_POST['accion'] === 'Guardar') {
  $city = $_POST;
  $query = "UPDATE ciudades SET ciudad='$city[ciudad]', pais='$city[pais]', habitantes=$city[habitantes], superficie=$city[superficie], tieneMetro=" . (strtoupper($city['tieneMetro']) === 'SI' ? 'true' : 'false') . " WHERE id=" . (isset($city['id']) ? $city['id'] : "''");

  try {
    $resultado = statementResponse($query);
    $_SESSION['mensaje'] = "OK - Editada";
    header("Location: read.php");
    exit;
  } catch (Exception $e) {

    unset($city, $_POST);
  }
}

// DELETE CITY
if (!empty($_GET) && isset($_GET['dId'])) {
  $city = getOneById($_GET['dId']);
  $query = "DELETE FROM ciudades WHERE id=$city[id]";
  statementResponse($query);
  header("Location: read.php");
  exit();
}
