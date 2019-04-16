<?php 
include('config.php');
$conexion = getDB();
if(isset($_POST['insertar'])){//Si apretamos el botón
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = (float)$_POST['precio'];
    $cargarImg = ($_FILES['img']['tmp_name']);
    $img = fopen($cargarImg,'rb');

    $existente = "SELECT * FROM funko WHERE nombre='$nombre'";
    $stmt = $conexion->prepare($existente);
    $stmt->execute();
    if($stmt->rowCount()>0){
        echo "Si hay algo";
    }else{
        try {
            $nuevousuario = $conexion->prepare("INSERT INTO funko(nombre,categoria,precio,img) 
                                                    VALUES(:nombre,:categoria,:precio,:img)");
            $nuevousuario->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $nuevousuario->bindParam(":categoria",$categoria,PDO::PARAM_STR);
            $nuevousuario->bindParam(":precio",$precio,PDO::PARAM_INT);
            $nuevousuario->bindParam(":img",$img,PDO::PARAM_LOB);
            $ejecutar=$nuevousuario->execute();
        } catch (PDOException $error) {
            print 'ERROR: '.$error->getMessage;
        }
        if($ejecutar){
            echo '<script>
            alert("Registro realizado con exito");
            window.location.href="agregarFunko.php";
            </script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AgregarFunko</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
        <input type="text" id="categoria" name="categoria" placeholder="Categoria" required>
        <input type="text" id="precio" name="precio" placeholder="Precio">
        <input type="file" name="img" id="img" placeholder="Imagen">
        <input type="submit" value="Registrar Funko" name="insertar">
    </form>
</body>
</html>