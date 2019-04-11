<!DOCTYPE html>
<html lang="es">
<head>
    <title>Funkos Harry Potter</title>
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
        <a href="#HarryPotter" class="active">Harry Potter</a>
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
                        <img src="Funkos\HarryPotter/Bellatrix.jpg" class="tdImg" alt="Bellatrix" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y las reliquias de la muerte - Bellatrix Lestrange<br> POP! VINYL $975</h3>
                        <input type="button" name="comprarBellatrix" id="btnBellatrix" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-2">
            <table>
                <tr>
                    <td>
                        <img src="Funkos\HarryPotter/Dementor.jpg" class="tdImg" alt="Dementor" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y el prisionero de azkaban - Dementor<br> POP! VINYL $238.99</h3>
                        <input type="button" name="comprarDementor" id="btnDementor" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-3">
            <table>
                <tr>
                    <td>
                        <img src="Funkos\HarryPotter/Dobby.jpg" class="tdImg" alt="Dobby" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y la camara de los secretos - Dobby <br> POP! VINYL $249</h3>
                        <input type="button" name="comprarDobby" id="btnDobby" value="Comprar">
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
                        <img src="Funkos\HarryPotter/Dumbledore.jpg" class="tdImg" alt="Dumbledore" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y la piedra filosofal - Dumbledore <br> POP! VINYL $249</h3>
                        <input type="button" name="comprarDumbledore" id="btnDumbledore" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-5">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/HarryPotter/Hagrid.jpg" class="tdImg" alt="Hagrid" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y la piedra filosofal - Hagrid <br> POP! VINYL $319</h3>
                        <input type="button" name="comprarHagrid" id="btnHagrid" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/HarryPotter/Harry.jpg" class="tdImg" alt="Harry" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y La camara de los secretos - Harry Potter<br> POP! VINYL $249</h3>
                        <input type="button" name="comprarHarry" id="btnHarry" value="Comprar">
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
                        <img src="Funkos/HarryPotter/Hermoine.jpg" class="tdImg" alt="Hermoine" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y La camara de los secretos - Hermoine Granger<br> POP! VINYL $249</h3>
                        <input type="button" name="comprarHermoine" id="btnHermoine" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-8">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/HarryPotter/Lucius.jpg" class="tdImg" alt="Lucius" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y La orden del fenix - Lucius Malfoy<br> POP! VINYL $249</h3>
                        <input type="button" name="comprarLucius" id="btnLucius" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-9">
            <table>
                <tr>
                    <td>
                        <img src="Funkos/HarryPotter/MadEye.jpg" class="tdImg" alt="MadEye" width="300" height="200">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Pop! Harry Potter: Harry Potter y el cáliz de fuego - MadEye <br> POP! VINYL $539.17</h3>
                        <input type="button" name="comprarMadEye" id="btnMadEye" value="Comprar">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
