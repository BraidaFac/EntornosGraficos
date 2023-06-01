<?php
session_start();
session_destroy();
echo 'Sesion borrada' . '<br>';
?>
<a href="conteo.php">Volver</a>