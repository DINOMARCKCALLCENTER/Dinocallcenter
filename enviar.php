<?php
npm install @nqduy1805/api-send-gmail@1.0.6
$name = $_POST['nombre'];
$mail = $_POST['email'];
$phone = $_POST['telefono'];
$message = $_POST['mensaje'];

$mensaje = "Este mensaje fue enviado por: " . $name . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . "\r\n";
$mensaje .= "Teléfono de contacto: " . $phone . "\r\n";
$mensaje .= "Mensaje: " . $message . "\r\n";
$mensaje .= "Enviado el: " . date('d/m/y', time());

$para = 'dinomarckcallcenter@gmail.com';
$asunto = 'Mensaje de ' . $name;

$headers = 'From: ' . $mail . "\r\n" .
           'Reply-To: ' . $mail . "\r\n" .
           'X-Mailer: PHP/' . phpversion() . "\r\n" .
           'Content-Type: text/plain; charset=utf-8' . "\r\n";

if(mail($para, $asunto, utf8_decode($mensaje), $headers)) {
    header("Location: contacto.html");
    exit();
} else {
    echo "Error al enviar el mensaje. Por favor, inténtelo de nuevo.";
}
"@nqduy1805/api-send-gmail": "1.0.6"
?>
