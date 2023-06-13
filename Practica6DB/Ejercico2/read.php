<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ciudades</title>
  <?php
  include_once('logic.php');
  $resultado = statementResponse('select * from ciudades') or die('Error en la consutla');
  ?>
</head>

<body>
  <header>
    <h1>Ciudades del mundo</h1>
  </header>
  <div class='container'>
    <?php
    if (empty(!$resultado)) : ?>
      <table class='table'>
        <thead>
          <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>Pais</th>
            <th>Habitantes</th>
            <th>Superficie</th>
            <th>Tiene Metro?</th>
          </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_array($resultado)) {
          echo "<tr>
                <td>$row[id]</td> 
                <td>$row[ciudad]</td> 
                <td>$row[pais]</td> 
                <td>$row[habitantes]</td> 
                <td>$row[superficie]</td> 
                <td>" . (($row['tieneMetro']) ? 'Tiene' : 'No tiene') . "</td>
                <td><a href='new.php?id=$row[id]'>Editar</a></td>
                <td><a href='read.php?dId=$row[id]'>Borrar</a></td>
              </tr>";
        }
        ?>
      </table>
      <a href="new.php" class='btn'>Agregar nueva ciudad</a>
    <?php else : ?>
      <p>No se recuperaron datos de ciudades</p>
    <?php endif; ?>
  </div>
</body>

</html>