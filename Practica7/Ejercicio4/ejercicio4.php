<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['news'])) {
  $news = $_POST['news'];
  setcookie('news', $news, time() + 365);
} else if (isset($_GET['clear'])) {
  $news = 'completa';
  setcookie('news', $news, time() + 365);
  header('Location:./ejercicio4.php');
} else  if (isset($_COOKIE['news'])) {
  $news = $_COOKIE['news'];
} else {
  $news = 'completa';
}
function selector($type)
{
  switch ($type) {
    case 'deportes':
      sportNews();
      break;
    case 'politica':
      policyNews();
      break;
    case 'economia':
      economyNews();
      break;
    default:
      sportNews();
      policyNews();
      economyNews();
  }
}
function sportNews()
{
  echo
  "<div class='new'>
     <h3>Deporte</h3>
      <ol>
        <li>Noticia Deporte 1</li>
        <li>Noticia Deporte 2</li>
        <li>Noticia Deporte 3</li>
        <li>Noticia Deporte 4</li>
      </ol>   
  </div>";
}
function policyNews()
{ {
    echo
    "<div class='new'>
    <h3>Politica</h3>
      <ol>
        <li>Noticia Politica 1</li>
        <li>Noticia Politica 2</li>
        <li>Noticia Politica 3</li>
        <li>Noticia Politica 4</li>
      </ol>   
  </div>";
  }
}
function economyNews()
{ {
    echo
    "<div class='new'>
      <h3>Economia</h3>
      <ol>
        <li>Noticia Economia 1</li>
        <li>Noticia Economia 2</li>
        <li>Noticia Economia 3</li>
        <li>Noticia Economia 4</li>
      </ol>   
  </div>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="default.css" type="text/css">
</head>

<body>
  <header>
    <h1>Notcias</h1>
    <form method="POST">
      <input type="radio" id="" name="news" value="politica">
      <label for="politica">Politica</label>
      <input type="radio" id="" name="news" value="economia">
      <label for="economia">Economia</label>
      <input type="radio" id="" name="news" value="deportes">
      <label for="deportes">Deportes</label>
      <button>Cambiar seccion</button>
    </form>
    <a href='./ejercicio4.php?clear=true'>Quiero ver todas las secciones</a>
  </header>
  <h2>
    Seccion
    <?= $news ?>
  </h2>
  <div class='container'>

    <?= selector($news) ?>
  </div>
</body>

</html>