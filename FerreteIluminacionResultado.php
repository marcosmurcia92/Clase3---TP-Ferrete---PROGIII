<html>
<head>
	<title>Ferrete Iluminacion Resultado</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="animacion.css">
</head>
<body>
	<div class="CajaUno animated bounceInDown">
		<form class="CajaEnunciado">
			<?php
				//var_dump($_POST);
				$cantidad = $_POST['Cantidad'];
				$marca = $_POST['Marca'];
				$precio = $cantidad * 35;
				$iibb = 0;
				if($cantidad >= 6){
					$precio = $precio * 0.5;
				}else if($cantidad == 5){
					if($marca == "ArgentinaLuz"){
						$precio = $precio * 0.6;
					}else{
						$precio = $precio * 0.7;
					}
				}else if($cantidad == 4){
					if($marca == "ArgentinaLuz" || $marca == "FelipeLamparas"){
						$precio = $precio * 0.75;
					}else{
						$precio = $precio * 0.8;
					}
				}else if($cantidad == 3){
					if($marca == "ArgentinaLuz"){
						$precio = $precio * 0.85;
					}else if($marca == "FelipeLamparas"){
						$precio = $precio * 0.9;
					}else{
						$precio = $precio * 0.95;
					}
				}

				if($precio > 120){
					$iibb = $precio * 0.1;
					$precio = $precio * 1.1;
				}				

				if($iibb > 0){
					echo "Usted debe pagar $".$iibb." por impuestos a ingresos brutos.<br>";
				}
				echo "El total a pagar es de $".$precio;
			?> 
		</form><br><br><br><br><br>
		<form action="FerreteIluminacion.html" method="POST">
			<input type="Submit" class = "MiBotonUTN" value="Volver Atras">
		</form>
	</div>
</body>
</html>