<?php
$destinatario = "frbraida@hotmail.com "; //Destino
$asunto = "Envio de mail por funcion mail() "; //Asunto del email
$mensaje = '  <html>  <head>     <title>Envio de mail</title>  </head>  <body>  <h1>Envio de un nuevo mail</h1>  <p>Hola Mundo!</p>  </body>  </html>  ';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-88591\r\n"; //Content-type
$headers .= 'From: facundobraida98@gmail.com' . "\r\n"; // Dirección de correo electrónico del remitente

if (mail($destinatario, $asunto, $mensaje, $headers)) {
  echo 'Correo electrónico enviado con éxito.';
} else {
  echo 'Error al enviar el correo electrónico.';
}
