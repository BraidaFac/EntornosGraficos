<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recomendar</title>
  <style type="text/css">
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    label {
      text-align: center;
    }

    input {
      width: 200px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <h1>Recomendar a un companero</h1>
  <form method="post" action="index.php">
    <label>Nombre</label>
    <input name="fullName" type="text" required>
    <label>Email de tu companero</label>
    <input name="email" type="email" required>
    <button type="submit">Enviar</button>

  </form>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destino = $_POST['email'];
    $asunto = "Recomendacion de la web";
    $contenido = "Tu amigo " . $_POST['fullName'] . " te a recomedado nuestros sitio. Por favor veni a https://www.nuestositio.com";
    $success = mail($destino, $asunto, $contenido);
    if ($success) {
      echo '<span>Ya enviamos la recomendacion</span>';
    } else {
      echo '<span>algo salio mal :(</span>';
    }
  }
  ?>
</body>
<html>