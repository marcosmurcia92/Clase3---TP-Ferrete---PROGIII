<html>
<head>
	<title>Ferrete Facturacion Resultado</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="animacion.css">
</head>
<body>
	<div class="CajaUno animated bounceInDown">
		<form class="CajaEnunciado">
			<?php
				//var_dump($_POST);
				$largo = $_POST['Largo'];
				$ancho = $_POST['Ancho'];
				$radio = $_POST['Radio'];
				if(isset($_POST['Alambre'])){
					$alambre = (2 * $largo + 2 * $ancho) * 3;
					echo "Se necesitan ".$alambre." metros de alambre.";
				}else if(isset($_POST['AlambreR'])){
					$alambre = (pi() * $radio * 2) * 3;
					echo "Se necesitan ".$alambre." metros de alambre para recorrer 3 veces el perimetro circular.";
				}else if(isset($_POST['Materiales'])){
					$cemento = ($largo * $ancho) * 2;
					$cal = ($largo * $ancho) * 3;
					echo "Se necesitan ".$cemento." bolsas de cemento y ".$cal." bolsas de cal para el terreno ingresado.";
				}
			?> 
		</form><br><br><br><br><br>
		<form action="FerreteConstruccion.html" method="POST">
			<input type="Submit" class = "MiBotonUTN" value="Volver Atras">
		</form>
	</div>
</body>
</html>