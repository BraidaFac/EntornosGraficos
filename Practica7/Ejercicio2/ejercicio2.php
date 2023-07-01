<?php
if (!isset($_COOKIE['contador'])) {
  setcookie('contador', 1, time() + 365);
} else {
  setcookie('contador', $_COOKIE['contador'] += 1, time() + 365);
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambio de theme</title>
  <link rel="STYLESHEET" type="text/css" href='default.css'>
</head>
<?php
if (!isset($_COOKIE['contador'])) :
  echo "<h1>Bienvenidos a la pagina web</h1>";

else :
  echo "<h3>Contador de visitas : $_COOKIE[contador] veces</h3>";
endif;
?>

<body>