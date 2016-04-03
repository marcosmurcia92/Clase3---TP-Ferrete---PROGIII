<html>
<head>
	<title>Ferrete Pintura Resultado</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="animacion.css">
</head>
<body>
	<div class="CajaUno animated bounceInDown">
		<form class="CajaEnunciado">
			<?php
				//var_dump($_POST);
				$temp = $_POST['Temperatura'];
				if(isset($_POST['FaC'])){
					$tempC = ($temp - 32) / 1.8;
					echo "La temperatura ingresada (".$temp."ºF) en centigrados es de ".$tempC."ºC";
				}else if(isset($_POST['CaF'])){
					$tempF = $temp * 1.8 + 32;
					echo "La temperatura ingresada (".$temp."ºC) en centigrados es de ".$tempF."ºF";
				}
			?> 
		</form><br><br><br><br><br>
		<form action="FerretePintura.html" method="POST">
			<input type="Submit" class = "MiBotonUTN" value="Volver Atras">
		</form>
	</div>
</body>
</html>