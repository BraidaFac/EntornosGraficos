<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nueva ciudad</title>
  <link rel="stylesheet" href="form.css" type="text/css">
</head>
<?php
include_once('logic.php');
if (!empty($_GET['id'])) {
  $city = getOneById($_GET['id']);
}


?>

<body>
  <?php if (empty($_GET['id'])) : ?>
    <h1>Nueva ciudad</h1>
  <?php elseif (!empty($city)) : ?>
    <h1>Editar ciudad: <?= $city['ciudad'] ?></h1>
  <?php else : echo '<h1>No se encontro ID</h1>';
    exit();
  endif; ?>
  <div class="container">
    <form method="POST" action="new.php">
      <?php if (!empty($_GET['id'])) : ?>
        <input type="hidden" name="id" value="<?= $city["id"]; ?>" />
      <?php endif; ?>
      <div class="form-group">
        <div class="row">
          <label for="ciudad">Ciudad</label>
          <input id="ciudad" value=<?= (isset($city)) ? "'" . $city['ciudad'] . "'" : "''" ?> type="text" name="ciudad" />
        </div>
        <div class="row">
          <label for="pais">Pais</label>
          <input id="pais " value=<?= (isset($city)) ? "'" . $city['pais'] . "'" : "''" ?> type="text" name="pais" />
        </div>
        <div class="row">
          <label for="habitantes">Habitantes</label>
          <input id="habitantes" value=<?= (isset($city)) ? "'" . $city['habitantes'] . "'"  : "''" ?> type="text" name="habitantes" />
        </div>
        <div class="row">
          <label for="superficie">Superficie</label>
          <input id="superficie" value=<?= (isset($city)) ? "'" .  $city['superficie'] . "'" : "''" ?> type="text" name="superficie" />
        </div>
        <div class="row">
          <label for="tieneMetro">Tiene Metro?</label>
          <input id="tieneMetro" value=<?= (isset($city['tieneMetro']) and $city['tieneMetro'] !== '') ? ("'" . (($city['tieneMetro']) ? 'Si' : 'No') . "'") : "''" ?> type="text" name="tieneMetro" />
        </div>
        <input name="accion" value=<?php echo (isset($city)) ? "Guardar" : "Agregar" ?> type="submit">
      </div>
    </form>
  </div>
  <a class="back" href="read.php">Ir atras</a>
</body>

</html>