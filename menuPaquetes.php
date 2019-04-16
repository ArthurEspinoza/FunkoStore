<?php
    session_start();
    $nombreUsuario = $_SESSION['nombreUsuario'];
    //echo $nombreUsuario;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Funkos Paquetes</title>
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
        <a href="menuMarvel.php" class="active">Marvel</a>
        <a href="menuHarryPotter.php" class="active">Harry Potter</a>
        <a href="menuDisney.php" class="active">Disney</a>
        <a href="#Paquetes" class="active">Paquetes</a>
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
                        <img src="Funkos/Paquetes/paq1.jpg" class="tdImg" alt="GhostJon" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones -Jon Snow y Ghost <br> POP! $388</h3>
                        <input type="button" name="comprarGhostJon" id="btnGhostJon" onclick="location.href='php/compra.php?item=<?php echo urlencode('SnowGhost')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-2">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Paquetes/paq2.jpg" class="tdImg" alt="CatMarvel" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Marvel: Captain Marvel - Captain Marvel y Goose the Cat  <br> POP! $494</h3>
                        <input type="button" name="comprarCatMarvel" id="btnCatMarvel" onclick="location.href='php/compra.php?item=<?php echo urlencode('MarvelCat')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-3">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Paquetes/paq3.jpg" class="tdImg" alt="MovieHercules" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Hercules - Baby Hercules y Baby Pegasus <br> POP! $449</h3>
                        <input type="button" name="comprarMovieHercules" id="btnMovieHercules" onclick="location.href='php/compra.php?item=<?php echo urlencode('HercPeg')?>'" value="Comprar">
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
                        <img src="Funkos/Paquetes/paq4.jpg" class="tdImg" alt="Queens" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! TV: Game of Thrones Queens - Cersei Lannister, Mhysa Daenerys y Margaery <br> POP! $2,640.95</h3>
                        <input type="button" name="comprarQueens" id="btnQueens" onclick="location.href='php/compra.php?item=<?php echo urlencode('LaeDarMarg')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-5">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Paquetes/paq5.jpg" class="tdImg" alt="OrdenFenix" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y la Orden del Fénix - Dumbledore, Hagrid y MadEye<br> POP! $941.10</h3>
                        <input type="button" name="comprarOrdenFenix" id="btnOrdenFenix" onclick="location.href='php/compra.php?item=<?php echo urlencode('DumHagMad')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Paquetes/paq6.jpg" class="tdImg" alt="Avengers" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Marvel: Avengers: Infinity War -Captain America, Black Widow y Iron Man<br> POP! $643.95</h3>
                        <input type="button" name="comprarAvengers" id="btnAvengers" onclick="location.href='php/compra.php?item=<?php echo urlencode('CapBlackIro')?>'" value="Comprar">
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
                        <img src="Funkos/Paquetes/paq7.jpg" class="tdImg" alt="Malfoys" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y la camara de los secretos - Lucius Malfoy y Dobby <br> POP! $449</h3>
                        <input type="button" name="comprarMalfoys" id="btnMalfoys" onclick="location.href='php/compra.php?item=<?php echo urlencode('LuDo')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-8">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Paquetes/paq8.jpg" class="tdImg" alt="MarvelD" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Marvel: Avengers: Infinity War - Young Gamora y Groot; Pop! Disney: Mickey's 90Th - Conductor Mickey <br> POP! $528.68</h3>
                        <input type="button" name="comprarMarvelD" id="btnMarvelD" onclick="location.href='php/compra.php?item=<?php echo urlencode('GaGroMick')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-9">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/Paquetes/paq9.jpg" class="tdImg" alt="MovieAladin" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Aladdin - Pricipe Ali y Genio con lampara <br> POP! $427</h3>
                        <input type="button" name="comprarMovieAladin" id="btnMovieAladin" onclick="location.href='php/compra.php?item=<?php echo urlencode('AlGen')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
