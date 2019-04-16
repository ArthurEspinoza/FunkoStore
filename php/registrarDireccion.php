<?php 
include('config.php');
$conn = getDB();
$idUsuario = $_SESSION['idUsuario'];
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$numeroExt = $_POST['numeroExt'];
$numeroInt = $_POST['numeroInt'];
$cp = $_POST['cp'];
$addDir = $conn->prepare('INSERT INTO direcciones(calle,colonia,municipio,numeroExt,numeroInt,cp,idusuario)
                        VALUES(:calle,:colonia,:municipio,:numeroExt,:numeroInt,:cp,:idUser)');
$addDir->bindParam(':calle',$calle,PDO::PARAM_STR);
$addDir->bindParam(':colonia',$colonia,PDO::PARAM_STR);
$addDir->bindParam(':municipio',$municipio,PDO::PARAM_STR);
$addDir->bindParam(':numeroExt',$numeroExt,PDO::PARAM_STR);
$addDir->bindParam(':numeroInt',$numeroInt,PDO::PARAM_STR);
$addDir->bindParam(':cp',$cp,PDO::PARAM_STR);
$addDir->bindParam(':idUser',$idUsuario,PDO::PARAM_STR);
//$addDir->execute();
if($addDir->execute()){
    echo 1;
}
?>