<?php
class User
{
  public $userName;
  public $password;


  public function __construct($userName, $password)
  {
    $this->userName = $userName;
    $this->password = $password;
  }
}
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = new User($_POST['user'], md5($_POST['psw']));
  $_SESSION['user'] = $user;
} else {
  if (isset($_GET['clear_s'])) {
    session_unset();
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

  <?php if (!isset($_SESSION['user'])) { ?>
    <h1>Ingresar session</h1>
    <form method="POST">
      <input placeholder="Usuario" type="text" name='user' required><br>
      <input placeholder="Contrasena" type="password" name='psw' required><br>
      <button type="sumbit">Enviar</button>
    </form>
  <?php } else {
    echo "<span>Nombre de usuario es:" . $_SESSION['user']->userName . "</span><br>";
    echo "<span>La clave del cliente es:" . $_SESSION['user']->password . "</span><br>";
    echo "<a href='./ejercicio5.php?clear_s=1'>Salir</a><br>";
  };
  ?>
</body>

</html>