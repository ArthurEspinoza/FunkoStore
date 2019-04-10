<?php 
include('config.php');
$conexion = getDB();
$nombre = $_POST['nombre'];
$correo = $_POST['correoReg'];
$contra = $_POST['contraReg'];
$tel = $_POST['tel'];

$existente = "SELECT * FROM usuario WHERE contra='$contra'";
$stmt = $conexion->prepare($existente);
$stmt->execute();
if($stmt->rowCount()>0){
    echo "Si hay algo";
}else{
    try {
        $nuevousuario = $conexion->prepare("INSERT INTO usuario(nombre,correo,telefono,contra) 
                                                VALUES(:nombre,:correo,:telefono,:contra)");
        $nuevousuario->bindParam(":contra",$contra,PDO::PARAM_STR);
        $nuevousuario->bindParam(":nombre",$nombre,PDO::PARAM_STR);
        $nuevousuario->bindParam(":correo",$correo,PDO::PARAM_STR);
        $nuevousuario->bindParam(":telefono",$tel,PDO::PARAM_STR);
        $ejecutar=$nuevousuario->execute();
    } catch (PDOException $error) {
        print 'ERROR: '.$error->getMessage;
    }
    if($ejecutar){
        echo '<script>
        alert("Registro realizado con exito");
        window.location.href="../acceso.php";
        </script>';
    }
}
?>