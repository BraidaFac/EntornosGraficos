<?php
const HOST = '127.0.0.1';
const USER = 'root';
const DB = 'alumnos';


function statementResponse($query, $par)
{
  $connection = mysqli_connect(HOST, USER)
    or die("Problemas de conexión a la base de datos");
  mysqli_select_db($connection, DB);
  $stmt = $connection->prepare($query);
  $stmt->bind_param('s', $par);
  $stmt->execute();
  $resultado = $stmt->get_result();
  mysqli_close($connection);
  return $resultado;
}
