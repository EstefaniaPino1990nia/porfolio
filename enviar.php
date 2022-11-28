<?php
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $mensaje=$_POST['mensaje'];


        $destinatario="eps.estefania@gmail.com";
        $asunto="Mensaje nuevo desde nuestro porfolio";

        $carta= "De: $nombre \n";
        $carta= "Apellidos: $apellido \n";
        $carta .= "Correo: $email \n";
        $carta .= "Telefono: $telefono \n";
        $carta .= "Mensaje: $mensaje";

        mail($destinatario, $asunto, $carta);
        header('Location:mensaje_envio.php');

?>