<?php
    session_start();
    //include('php/destroy.php');
    $nombreUsuario = $_SESSION['nombreUsuario'];
    //echo $nombreUsuario;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Funkos GOT</title>
    <link rel="stylesheet" href="css/menu.css">
    <script type="text/javascript" src="js_scripts/compra.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
        <a href="#GOT" class="active">GOT</a>
        <a href="menuMarvel.php" class="active">Marvel</a>
        <a href="menuHarryPotter.php" class="active">Harry Potter</a>
        <a href="menuDisney.php" class="active">Disney</a>
        <a href="menuPaquetes.php" class="active">Paquetes</a>
        <a href="php/destroy.php"class="active">Cerrar Sesión</a>
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
                        <img src="Funkos/GOT/BranStark.jpg" class="tdImg" alt="BranStark" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones - Bran Stark <br> POP! $249</h3>
                        <input type="button" name="comprarBran" id="btnBran" onclick="location.href='php/compra.php?item=<?php echo urlencode('Bran Stark')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-2">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/GOT/Cersei.jpg" class="tdImg" alt="Cersei" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones - Cersei Lannister <br> POP! $268</h3>
                        <input type="button" name="comprarCersei" id="btnCersei" onclick="location.href='php/compra.php?item=<?php echo urlencode('Cersei Lannister')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-3">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/GOT/Daenerys.jpg" class="tdImg" alt="Mhysa Daenerys" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones - Mhysa Daenerys <br> POP! $239</h3>
                        <input type="button" name="comprarDaenerys" id="btnDaenerys" onclick="location.href='php/compra.php?item=<?php echo urlencode('Mhysa Daenerys')?>'" value="Comprar">
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
                        <img src="Funkos/GOT/Ghost.jpg" class="tdImg" alt="Ghost" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones - Ghost <br> POP! $249</h3>
                        <input type="button" name="comprarGhost" id="btnGhost" onclick="location.href='php/compra.php?item=<?php echo urlencode('Ghost')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-5">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/GOT/Harpy.jpg" class="tdImg" alt="Harpy" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones - Harpy <br> POP! $400</h3>
                        <input type="button" name="comprarHarpy" id="btnHarpy" onclick="location.href='php/compra.php?item=<?php echo urlencode('Harpy')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/GOT/Hodor.jpg" class="tdImg" alt="Hodor" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones - Hodor <br> POP! $1,270</h3>
                        <input type="button" name="comprarHodor" id="btnHodor" onclick="location.href='php/compra.php?item=<?php echo urlencode('Hodor')?>'" value="Comprar">
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
                        <img src="Funkos/GOT/JonSnow.jpg" class="tdImg" alt="JonSnow" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones - Jon Snow <br> POP! $182</h3>
                        <input type="button" name="comprarJon" id="btnJon" onclick="location.href='php/compra.php?item=<?php echo urlencode('Jon Snow')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-8">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/GOT/Jorah.jpg" class="tdImg" alt="Jorah" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones - Jorah Mormont <br> POP! $1,360</h3>
                        <input type="button" name="comprarJorah" id="btnJorah" onclick="location.href='php/compra.php?item=<?php echo urlencode('Jorah Mormont')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-9">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/GOT/Margaery.jpg" class="tdImg" alt="Margaery" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones - Margaery <br> POP! $2,600</h3>
                        <input type="button" name="comprarMargaery" id="btnMargaery" onclick="location.href='php/compra.php?item=<?php echo urlencode('Margaery')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
