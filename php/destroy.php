<?php
    session_start();
    if(isset($_SESSION['idUsuario'])){
        unset($_SESSION);
        session_destroy();
        header("Location:../acceso.php");
    }
?>