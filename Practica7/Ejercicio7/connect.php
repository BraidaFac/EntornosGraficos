<?php
const HOST = '127.0.0.1';
const USER = 'root';
const DB = 'compras';


function statementResponse($query)
{
  $connection = mysqli_connect(HOST, USER)
    or die("Problemas de conexión a la base de datos");
  mysqli_select_db($connection, DB);
  $resultado = mysqli_query($connection, $query);
  mysqli_close($connection);
  return $resultado;
}
function getAllProducts()
{
  $query = 'SELECT * FROM catalogo';
  $listProduct = statementResponse($query);
  return $listProduct;
}
