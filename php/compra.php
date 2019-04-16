<?php
    //session_start();
    include('config.php');
    $conn = getDB();
    $nombreUsuario = $_SESSION['nombreUsuario'];
    $idUser = $_SESSION['idUsuario'];
    $nombreItem =  $_GET['item'];
    $datosItem = $conn->prepare('SELECT * FROM funko where nombre=:nombre');
    $datosItem->bindParam(':nombre',$nombreItem,PDO::PARAM_STR);
    $datosItem->execute();//Se consultan los datos del item a comprar
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/compra.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Compra</title>
</head>
<body>
    <section>
        <h2>Estas a punto de comprar:<?php echo$idUser?> </h2>
        <table>
            <tr>
                <td id="tableImg" colspan="2">
                <?php 
                    if($datosItem->rowCount()>0){
                        $resultado = $datosItem->fetch(PDO::FETCH_ASSOC);
                        echo '<img src="data:image/jpg;base64, '.base64_encode($resultado['img']).'">';
                    }else{
                        echo '<script>alert("No existen datos de tal articulo")</script>';
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td>
                    Nombre:
                </td>
                <td>
                    <?php echo $resultado['nombre'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Categoria:
                </td>
                <td>
                <?php echo $resultado['categoria'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Precio:
                </td>
                <td>
                <?php echo '$'.$resultado['precio'];?>
                </td>
            </tr>
        </table>
    </section>
    <section>
        <form action="enviar.php" method="post" id="dire">
        <?php 
            $conDirecciones = $conn->prepare('SELECT * FROM direcciones WHERE idusuario=:idUser LIMIT 2');
            $conDirecciones->bindParam(':idUser',$idUser,PDO::PARAM_STR);
            $conDirecciones->execute();
            if($conDirecciones->rowCount()>0){
                $datos = $conDirecciones->fetchAll(PDO::FETCH_ASSOC);
                foreach ($datos as $row) {
                    echo '<input type="radio" name="dir" value='.$row['idDir'].'>';
                    echo $row['calle']." ".$row['colonia']." ".$row['municipio']." ".$row['numeroExt']." ".$row['numeroInt'];
                    echo '<br>';
                }
            }else{
                echo "<h3>No existen direcciones</h3>";
            }
        ?>
        </form>
        <button id="btnAddDir">Añadir Direccion</button>
    </section>
    <section>
        <form id="frmajax" method="post">
            <input type="text" name="calle" id="calle" placeholder="Ingresa tu calle">
            <input type="text" name="colonia" id="colonia" placeholder="Ingresa tu colonia">
            <input type="text" name="municipio" id="municipio" placeholder="Ingresa tu municipio">
            <input type="text" name="numeroExt" id="numeroExt" placeholder="Ingresa tu numero exterior">
            <input type="text" name="numeroInt" id="numeroInt" placeholder="Ingresa tu numero interior">
            <input type="text" name="cp" id="cp">
            <button id="btnAddDir">Añadir Dirección</button>
        </form>
        <div id="respuesta"></div>
    </section>
    <script>
        $(document).ready(function(){
            $('#btnAddDir').click(function(){
                var datos = $('#frmajax').serialize();
                /*alert(datos);
                return false;*/
                $.ajax({
                    type:"POST",
                    url:"registrarDireccion.php",
                    data:datos,
                    success:function(r){
                        if(r==1){
                            alert("Registro exitoso");
                        }else{
                            alert("Algo salio mal");
                        }
                    }
                });/*.done(function(res){
                    $('#respuesta').html(res);
                }).fail(function(){
                    console.log("error");
                });*/
                return false;
            });
        });
    </script>
</body>
</html>