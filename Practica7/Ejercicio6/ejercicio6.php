<?php
session_start();
include_once('connect.php');
function getOneByEmail($email)
{
  $stmt = "SELECT * FROM alumnos WHERE mail=?";
  return statementResponse($stmt, $email)->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['mail'])) {
  $email = $_POST['mail'];
  try {
    $alumno = getOneByEmail($email);
    $_SESSION['nombre'] = $alumno['nombre'];
    header('Location: bienvenida.php');
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
}
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

  <form method="POST">
    <input placeholder="email" type="email" name='mail' required><br>
    <button type="sumbit">Enviar</button>
  </form>
</body>

</html>