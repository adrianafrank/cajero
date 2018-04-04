<?php 

	session_start();

	if ($_SESSION['codtarjeta']=='') {
		header('Location:index.php');
	}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="materialize/css/materialize.css">
	<title>Problema-Cajero Automático | Opciones</title>
</head>
<body>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col l12 z-depth-4" style="margin-top: 50px;">
					<div class="row">
						<div class="col l12">
							<?php 

								require_once 'clases/conexion.class.php';
								require_once 'clases/ejecuciones.class.php';

								$base= new ejecuciones();
								$base->conectar();

								$consulta="SELECT * FROM usuario
								WHERE codusuario=".$_SESSION['codusuario'];

								$resultado = $base->ejecutar($consulta);

								$fila  = $base->obtener_fila_asociativa($resultado);
							 ?>
							 <div class="card-panel">
							    <span class="blue-text text-lighten-1"><?php echo $fila['nombre']; ?></span>
							 </div>
						</div>
						
					</div>
					<div class="row">
						<div class="col l10 offset-l1 center-align" style="border-top:5px solid #42a5f5;">
							<h5 class="orange-text text-darken-3">Seleccione la opción de la operación que desea realizar</h5>
						</div>
					</div>
					<div class="row">
						<div class="col l5 right-align">
							<a href="retirar.php" class="blue lighten-1 btn">Ir a...</a>
						</div>
						<div class="col l6"><h6><------- Retirar dinero</h6></div>
					</div>
					<div class="row">
						<div class="col l5 right-align">
							<a href="saldo.php" class="blue lighten-1 btn">Ir a...</a>
						</div>
						<div class="col l6"><h6><------- Consultar su saldo</h6></div>
					</div>
					<div class="row">
						<div class="col l5 right-align">
							<a href="trans.php" class="blue lighten-1 btn">Ir a...</a>
						</div>
						<div class="col l6"><h6><------- Ver últimas 3 transacciones</h6></div>
					</div>
					<div class="row">
						<div class="col l6 offset-l3 center-align">
							<a href="salir.php" class="deep-orange accent-4 btn">Salir</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery-3.3.1.js"></script>
	<script src="materialize/js/materialize.js"></script>
	<script src="js/procesos.js"></script>
</body>
</html>