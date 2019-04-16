<?php
    session_start();
    $nombreUsuario = $_SESSION['nombreUsuario'];
    //echo $nombreUsuario;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Funkos Disney</title>
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
        <a href="menuMarvel.php"class="active">Marvel</a>
        <a href="menuHarryPotter.php" class="active">Harry Potter</a>
        <a href="#Disney" class="active">Disney</a>
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
                        <img src="Funkos\Disney\Aladdin.jpg" class="tdImg" alt="Aladdin" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Aladdin - Principe Ali<br> POP! VINYL $225</h3>
                        <input type="button" name="comprarAladdin" id="btnAladdin" onclick="location.href='php/compra.php?item=<?php echo urlencode('Principe Ali')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-2">
            <table>
                <tr>
                    <td>
                        <img src="Funkos\Disney\Felix.jpg" class="tdImg" alt="Felix" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Wreck-It Ralph 2 - Fix-It Felix<br> POP! VINYL $177.46</h3>
                        <input type="button" name="comprarFelix" id="btnFelix" onclick="location.href='php/compra.php?item=<?php echo urlencode('Fix-It Felix')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-3">
            <table>
                <tr>
                    <td>
                        <img src="Funkos\Disney\Genie.jpg" class="tdImg" alt="Genie" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Aladdin - Genio con lampara <br> POP! VINYL $249</h3>
                        <input type="button" name="comprarGenie" id="btnGenie" onclick="location.href='php/compra.php?item=<?php echo urlencode('Genio con lampara')?>'" value="Comprar">
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
                        <img src="Funkos\Disney\Hades.png" class="tdImg" alt="Hades" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Hercules - Hades - Exclusivo Brilla en la Oscuridad <br> POP! VINYL $749.90</h3>
                        <input type="button" name="comprarHades" id="btnHades" onclick="location.href='php/compra.php?item=<?php echo urlencode('Hades')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-5">
            <table>
                <tr>
                    <td>
                        <img src="Funkos\Disney\Hercules.png" class="tdImg" alt="Hercules" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Hercules - Baby Hercules<br> POP! VINYL $249</h3>
                        <input type="button" name="comprarHercules" id="btnHercules" onclick="location.href='php/compra.php?item=<?php echo urlencode('Baby Hercules')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <table>
                <tr>
                    <td>
                        <img src="Funkos\Disney\JackJack.png" class="tdImg" alt="JackJack" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Incredibles 2 - Jack-Jack<br> POP! VINYL $226.71</h3>
                        <input type="button" name="comprarJackJack" id="btnJackJack" onclick="location.href='php/compra.php?item=<?php echo urlencode('Jack-Jack')?>'" value="Comprar">
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
                        <img src="Funkos\Disney\Mickey.jpg" class="tdImg" alt="Mickey" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Mickey's 90Th - Conductor Mickey <br> POP! VINYL $214.98</h3>
                        <input type="button" name="comprarMickey" id="btnMickey" onclick="location.href='php/compra.php?item=<?php echo urlencode('Conductor Mickey')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-8">
            <table>
                <tr>
                    <td>
                        <img src="Funkos\Disney\Pegasus.png" class="tdImg" alt="Pegasus" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Hercules - Baby Pegasus <br> POP! VINYL $249</h3>
                        <input type="button" name="comprarPegasus" id="btnPegasus" onclick="location.href='php/compra.php?item=<?php echo urlencode('Baby Pegasus')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-9">
            <table>
                <tr>
                    <td>
                        <img src="Funkos\Disney\Pooh.jpg" class="tdImg" alt="Pooh" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Disney: Christopher Robin Movie - Winnie The Pooh<br> POP! VINYL $243.97</h3>
                        <input type="button" name="comprarPooh" id="btnPooh" onclick="location.href='php/compra.php?item=<?php echo urlencode('Winnie The Pooh')?>'" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
