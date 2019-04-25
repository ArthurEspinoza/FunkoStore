<?php
    $email = "arturomaximuslewis@gmail.com";
    $mensaje = "Esta es una prueba";
    if(mail($email,"Recibo de compra - FunkoStore",$mensaje)){
        echo "<script>alert('Funcion \"mail()\" ejecutada, por favor verifique su bandeja de correo.');</script>";
    }else{
        echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
    }
?>