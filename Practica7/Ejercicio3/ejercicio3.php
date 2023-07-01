<?php
if (isset($_POST['firstName'])) {
  $firstName = $_POST['firstName'];
  setcookie('name', $firstName, time() + 365);
  header('Refresh:0');
}
function getName()
{
  if (!isset($_COOKIE['name'])) {
    return "";
  } else {
    return "Hola " . $_COOKIE['name'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambio de theme</title>
  <link rel="STYLESHEET" type="text/css" href='../Ejercicio2/default.css'>
</head>

<body>
  <h1>Bienvenidos</h1>
  <h2><?= getName() ?> </h2>
  <div class="newUser">
    <form action='ejercicio3.php' method='POST'>
      <input placeholder="Nombre" name='firstName'>
      <button type=' submit'>Guardar</button>
    </form>
  </div>
</body>

</html>