<?php
    $destino = "stocaimaza@hotmail.com"
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . " Apellido: " . $apellido . " Correo: " . $email . " Mensaje: " . $mensaje;
    mail($destino,"Contacto",$contenido);
    header("Location:gracias.html");
?>