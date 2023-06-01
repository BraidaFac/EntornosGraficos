<?php
const destino = "webmaster@gmail.com";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fecha = date("d-m-Y");
  $hora = date("H :i:s");
  $asunto = "Consulta WebMaster";
  $from = 'From:' . $_POST['email'];
  $contenido = "
Nombre: $_POST[fullName]\n
Email: $_POST[email]\n
Consulta: $_POST[consulta]\n
Fecha: $fecha \n
Hora : $hora \n
";
  $success = mail(destino, $asunto, $contenido, $from);
  if ($success) {
    echo "Su consulta ha sido enviada, en breve recibirá nuestra
  respuesta.";
  } else {
    echo "Error al enviar el mail";
  };
}
