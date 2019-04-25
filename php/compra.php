<?php
    session_start();
    include('config.php');
    $conn = getDB();
    $nombreUsuario = $_SESSION['nombreUsuario'];
    $idUser = $_SESSION['idUsuario'];
    $nombreItem =  $_GET['item'];
    $_SESSION['item']=$nombreItem;
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
    <script>
        $(document).ready(function(){
            $('#regDir').hide();
            $('#btnAddDir').click(function(){
                $('#direcciones').slideToggle();
                $('#regDir').slideToggle();
            });
            $('#btnShowDir').click(function(){
                $('#direcciones').slideToggle();
                $('#regDir').slideToggle();
            });
        });
    </script>
    <title>Compra</title>
</head>
<body>
    <section>
        <h2>Estas a punto de comprar: </h2>
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
    <section id="regDir">
        <form id="frmajax" method="post">
            <input type="text" name="calle" id="calle" placeholder="Ingresa tu calle" required>
            <input type="text" name="colonia" id="colonia" placeholder="Ingresa tu colonia" required>
            <input type="text" name="municipio" id="municipio" placeholder="Ingresa tu municipio" required>
            <input type="text" name="numeroExt" id="numeroExt" placeholder="Ingresa tu numero exterior" required>
            <input type="text" name="numeroInt" id="numeroInt" placeholder="Ingresa tu numero interior" required>
            <input type="text" name="cp" id="cp" placeholder="Ingresa tu codigo postal">
            <button id="btnRegDir">Registrar Dirección</button>
            <button id="btnShowDir">Ocultar Registro</button>
        </form>
        <div id="respuesta"></div>
    </section>
    <section id="direcciones">
        <h2>Listado de direcciones</h2>
        <form action="enviar.php" method="post" id="dire">
        <?php 
            $conDirecciones = $conn->prepare('SELECT * FROM direcciones WHERE idusuario=:idUser');
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
        <!--echo '<a id="btnAddDir">Añadir Direccion</a>';-->
        <a id="btnAddDir">Añadir Direccion</a>
        <div>
            <h2>Recuerda que al hacer la compra</h2>
            <ul>
                <li>Tienes un plazo maximo para ir a pagar en tienda de 3 días habiles</li>
                <li>No se procederá con el pago si no cuenta con el correo de confirmación</li>
                <li>Cualquier duda o estatus de su compra puede marcar al numero 9214590723</li>
            </ul>
        </div>
        <input type="submit" id="btnEnviar" value="Proceder con la compra">
        </form>
    </section>
    <script>
        $(document).ready(function(){
            $('#btnRegDir').click(function(){
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