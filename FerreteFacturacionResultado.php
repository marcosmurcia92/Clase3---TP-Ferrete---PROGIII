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
				$primerProd = $_POST['Prod1'];
				$segundoProd = $_POST['Prod2'];
				$tercerProd = $_POST['Prod3'];
				if(isset($_POST['Sumar'])){
					$suma = $primerProd + $segundoProd + $tercerProd;
					echo "La suma de los tres productos es de: ".$suma;
				}else if(isset($_POST['Promediar'])){
					$prom = ($primerProd + $segundoProd + $tercerProd) / 3;
					echo "El promedio de los tres precios es de: ".$prom;
				}else if(isset($_POST['PrecioFinal'])){
					$precioFin = ($primerProd + $segundoProd + $tercerProd) * 1.21;
					echo "El precio final (+IVA 21%) es : ".$precioFin;
				}
			?> 
		</form><br><br><br><br><br>
		<form action="FerreteFacturacion.html" method="POST">
			<input type="Submit" class = "MiBotonUTN" value="Volver Atras">
		</form>
	</div>
</body>
</html>