<?php
if (isset($_POST['theme'])) {
  setcookie('theme', $_POST['theme'], time() + 365);
  $theme = $_POST['theme'];
} elseif (isset($_COOKIE['theme'])) {
  $theme = $_COOKIE['theme'];
} else {
  $theme = 'default';
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambio de theme</title>
  <?php
  if (isset($theme)) {
    echo "<link rel=\"STYLESHEET\" type=\"text/css\" href='$theme.css'>";
  };  ?>
</head>

<body>
  <?php
  if (!isset($_POST['theme']) and !isset($_COOKIE['theme'])) : ?>
    <div class="newUser">
      <form action='ejercicio1.php' method='POST'>
        <label for='theme'>Ingrese el tema</label>
        <select name='theme' id='theme'>
          <option value='default'>Default</option>
          <option value='white'>White</option>
          <option value='dark'>Dark</option>
        </select>
        <button type='submit'>Guardar</button>
      </form>
    </div>
    <div class='overlay'></div>
  <?php endif; ?>
  <h1>Bienvenidos</h1>
  <div class="sideTheme">
    <form class='sideForm' action='ejercicio1.php' method='POST'>
      <select name='theme' id='sideTheme'>
        <option selected disabled>Tema</option>
        <option value='default'>Default</option>
        <option value='white'>White</option>
        <option value='dark'>Dark</option>
      </select>
    </form>
  </div>
  <script>
    const select = document.getElementById('sideTheme');
    const form = document.querySelector('.sideForm');
    select.addEventListener('change', () => {
      form.submit();
    });
  </script>
</body>

</html>