<?php
    $destinatario = "gfq0684@gmail.com"; // correo al que se envia el mensaje
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // $header = "Enviado desde el Protafolio de Gerardo Fabian Quispe";
    $mensajeCompleto = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
    mail($destinatario, $asunto, $mensajeCompleto, $header);

?>
