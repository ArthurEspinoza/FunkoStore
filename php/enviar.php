<?php
include('config.php');
date_default_timezone_set("America/Mexico_City");
$conn = getDB();
$direccion = $_POST['dir'];
$idUser = $_SESSION['idUsuario'];
$item = $_SESSION['item'];
//echo $direccion.$idUser.$item;

$datosItem = $conn->prepare('SELECT * FROM funko where nombre=:nombre');
$datosItem->bindParam(':nombre',$item,PDO::PARAM_STR);
$datosItem->execute();
$resultado = $datosItem->fetch(PDO::FETCH_ASSOC);
$precio = $resultado['precio'];
$idFunko = $resultado['idfunko'];
$queryCompra = $conn->prepare('INSERT INTO compra(cantidad,precioTotal,idusuario)VALUES(1,:precio,:idUser)');
$queryCompra->bindParam(':precio',$precio,PDO::PARAM_INT);
$queryCompra->bindParam(':idUser',$idUser,PDO::PARAM_INT);
$queryCompra->execute();
$idCompra = $conn->lastInsertId();//Regresa el id de la ultima inserción realizada
$queryInfo = $conn->prepare('INSERT INTO infoCompra(compra_idCompra,compra_idusuario,funko_idfunko,fecha)VALUES(:idC,:idU,:idF,now())');
$queryInfo->bindParam(':idC',$idCompra,PDO::PARAM_INT);
$queryInfo->bindParam(':idU',$idUser,PDO::PARAM_INT);
$queryInfo->bindParam(':idF',$idFunko,PDO::PARAM_INT);
$queryInfo->execute();

////Envio del correo con mail()
$queryUser = $conn->prepare('SELECT * FROM usuario WHERE idusuario=:user');
$queryUser->bindParam(':user',$idUser,PDO::PARAM_INT);
$queryUser->execute();
$resultado = $queryUser->fetch(PDO::FETCH_ASSOC);
$email = $resultado['correo'];
//Envio y comprobación de correo
$mensaje = "Este es el recibo de su compra que va necesitar al momento de la entrega en sucursal\nCualquier duda el telefono es 9214590723";
if(mail($email,"Recibo de compra - FunkoStore",$mensaje)){
    echo "<script>alert('Funcion \"mail()\" ejecutada, por favor verifique su bandeja de correo.');window.location.href='../menu2.php';</script>";
}else{
    echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
}

?>