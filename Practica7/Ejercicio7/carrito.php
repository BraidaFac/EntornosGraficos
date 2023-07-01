<?php
include_once('connect.php');
session_start();
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}
$listProduct = getAllProducts();

function addtoCart($saleLine)
{

  array_push($_SESSION['cart'], ($saleLine));
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['quantity']) and isset($_POST['cod'])) {
  $saleLine['cantidad'] = $_POST['quantity'];
  $saleLine['producto'] = $_POST['cod'];
  addtoCart($saleLine);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<title>Document</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="./">LOGO</a>
      <h1 class="mx-auto text-white">Carrito de compras</h1>
      <a href="./carrito.php?buy=true" class="navbar-brand float-end"><span><?= count($_SESSION['cart']) ?></span><i class="bi bi-cart"></i></a>
    </nav>
  </header>
  <main class="container mt-4">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' and isset($_GET['buy']) and !empty($_SESSION['cart'])) {
      $products = $_SESSION['cart'];
    ?>
      <div class='container text-center'>
        <table class="table w-50 mx-auto">
          <thead>
            <tr class="table-warning">
              <th>Producto</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($products as $product) {
            ?>
              <tr>
                <td><?= $product['producto'] ?></td>
                <td><?= $product['cantidad'] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <a href="./carrito.php?clear=true" class="btn btn-success text-center">Comprar</a>
        <a class="btn btn-danger" href="./carrito.php">Volver</a>
      </div>

    <?php
      exit();
    } ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' and isset($_GET['clear']) and ($_GET['clear']) and !empty($_SESSION['cart'])) {
      session_unset();
      header('Location:./carrito.php');
    }
    ?>

    <div class="row mt-4">
      <?php
      foreach ($listProduct as $product) {
      ?>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card">
            <img src="<?= $product['img_src'] ?>" class="card-img-top" alt="Imagen 1">
            <div class="card-body">
              <h5 class="card-title"><?= $product['producto'] ?></h5>
              <form method="POST">
                <input hidden name="cod" value="<?= $product['producto'] ?>">
                <input name="quantity" type="number" placeholder="cantidad">
                <button class=" btn btn-primary">Comprar</button>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div>
      <?php
      ?>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>