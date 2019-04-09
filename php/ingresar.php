<?php
    include('config.php');
    $conn = getDB();
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $loginusuario = $conn->prepare('SELECT * FROM usuario WHERE contra = :contra AND correo = :correo');
    $loginusuario->bindParam(':contra',$contra,PDO::PARAM_INT);
    $loginusuario->bindParam(':correo',$correo,PDO::PARAM_STR);
    $loginusuario->execute();

    if($loginusuario->rowCount()>0){
        $infousuario = $loginusuario->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['idUsuario'] = $infousuario['idusuario'];
        echo '<script>
            alert("Acceso concedido");
            window.location.href="../menu2.php";
            </script>';
    }else{
        echo '<script>
            alert("No.Trabajador y/o contraseña incorrectos");
            window.location.href="../acceso.php";
            </script>';
    }
?>