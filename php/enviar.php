<?php
include('config.php');
$direccion = $_POST['dir'];
$idUser = $_SESSION['idUsuario'];
$item = $_SESSION['item'];
echo $direccion.$idUser.$item;
?>