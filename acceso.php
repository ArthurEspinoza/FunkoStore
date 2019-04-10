<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/registro.css">
<script src="js\validacion.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Login</title>
</head>
<body>
<script>
	$(document).ready(function(){
		$("#flip").click(function(){
			$("#panel2").slideToggle("slow");
			$("#panel1").slideUp();
		});
	});
</script>
	<div id="imgC">
		<img id="imgH" src="img\logo.png" alt="logo">
	</div>
	<div class="contenedor">
		<div id="panel1">
			<form method="post" action="php\ingresar.php" onsubmit="return validar();">
				<input type="email" id="correo" name="correo" placeholder="Ingresa tu correo" required>
				<input type="text" id="contra" name="contra" placeholder="Ingresa una contraseña valida" required >
				<input type="submit" value="Ingresar">
			</form>
		</div>
		<button id="flip">Si no cuenta con una cuenta haga clic aqui</button>
		<div id="panel2">
			<form method="post" action="php\registrar.php" onsubmit="return validar();">
				<input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
				<input type="text" id="correoReg" name="correoReg" placeholder="Ingresa tu correo" required>
				<input type="password" id="contraReg" name="contraReg" placeholder="Ingresa una contraseña valida" required >
				<input type="tel"  id="tel" name="tel" placeholder="Ingresa tu número celular" size="10" required>
				<input type="submit" value="Registrar" id="btnReg">
			</form>
		</div>
	</div>
</body>
</html>