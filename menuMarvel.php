<?php
    session_start();
    $nombreUsuario = $_SESSION['nombreUsuario'];
    //echo $nombreUsuario;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Funkos Marvel</title>
    <link rel="stylesheet" href="css/menu.css">
    <script type="text/javascript" src="js_scripts/compra.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <div class="topnav" id="myTopnav">
        <div id="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <a href="menu2.php" class="active">GOT</a>
        <a href="#Marvel" class="active">Marvel</a>
        <a href="menuHarryPotter.php" class="active">Harry Potter</a>
        <a href="menuDisney.php" class="active">Disney</a>
        <a href="menuPaquetes.php" class="active">Paquetes</a>
        <a href="#" id="idUsr">Hola <?php echo $nombreUsuario?></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="fila">
        <div class="col-1">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Marvel/AntMan.png" class="tdImg" alt="AntMan" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Marvel: Ant-Man & The Wasp - Ant-Man <br> POP! $249</h3>
                        <input type="button" name="comprarAntMan" id="btnAntman" onclick="location.href='php/compra.php?item=<?php echo urlencode('Ant-Man')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-2">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Marvel/BlackWidow.png" class="tdImg" alt="BlackWidow" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Marvel: Avengers: Infinity War - Black Widow <br> POP! $249</h3>
                        <input type="button" name="comprarBlackWidow" id="btnBlackWidow" onclick="location.href='php/compra.php?item=<?php echo urlencode('Black Widow')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-3">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Marvel/CaptainAmerica.png" class="tdImg" alt="CaptainAmerica" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Marvel: Avengers: Infinity War - Captain America <br> POP! $249</h3>
                        <input type="button" name="comprarCaptainAmerica" id="btnCaptainAmerica" onclick="location.href='php/compra.php?item=<?php echo urlencode('Captain America')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="fila">
        <div class="col-4">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Marvel/CaptainMarvel.jpg" class="tdImg" alt="CaptainMarvel" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop Marvel: Captain Marvel - Captain Marvel (w/Chase) <br> POP! VINYL $299</h3>
                        <input type="button" name="comprarCaptainMarvel" id="btnCaptainMarvel" onclick="location.href='php/compra.php?item=<?php echo urlencode('Captain Marvel')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-5">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Marvel/Gamora.jpg" class="tdImg" alt="Gamora" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop Marvel: Avengers Infinity War - Young Gamora <br> POP! MARVEL $205</h3>
                        <input type="button" name="comprarGamora" id="btnGamora" onclick="location.href='php/compra.php?item=<?php echo urlencode('Young Gamora')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Marvel/Goose.jpg" class="tdImg" alt="Goose" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop Marvel: Captain Marvel - Goose the Cat <br> POP! VINYL $249</h3>
                        <input type="button" name="comprarGoose" id="btnGoose" onclick="location.href='php/compra.php?item=<?php echo urlencode('Goose the Cat')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="fila">
        <div class="col-7">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Marvel/Groot.png" class="tdImg" alt="Groot" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Marvel: Avengers: Infinity War - Groot <br> POP! $202</h3>
                        <input type="button" name="comprarGroot" id="btnGroot" onclick="location.href='php/compra.php?item=<?php echo urlencode('Groot')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-8">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Marvel/IronMan.png" class="tdImg" alt="IronMan" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Marvel: Avengers: Infinity War - Iron Man <br> POP! $249</h3>
                        <input type="button" name="comprarIronMan" id="btnIronMan" onclick="location.href='php/compra.php?item=<?php echo urlencode('Iron Man')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-9">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Marvel/NickFury.jpg" class="tdImg" alt="NickFury" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop Marvel: Captain Marvel - Nick Fury <br> POP! VINYL $249</h3>
                        <input type="button" name="comprarNickFury" id="btn" onclick="location.href='php/compra.php?item=<?php echo urlencode('Nick Fury')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
