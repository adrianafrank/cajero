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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Problema-Cajero Automático | Consultar Saldo</title>
</head>
<body>

	<section>
		<div class="container">
			<div class="row">
				<div class="col l12 z-depth-4" style="margin-top: 80px;">
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
						<div class="col l8">
							<form  id="form-retirar">
								<div class="row">
									<div class="col l10 offset-l1" style="border-top:5px solid #42a5f5;">
										<div class="row">
											<div class="col l12 center-align">
												<h5 class="orange-text text-darken-3">Consultar su saldo</h5>
											</div>
										</div>
										<div class="row">
											<div class="col l10">
														<?php 
																			
													require_once 'clases/conexion.class.php';
													require_once 'clases/ejecuciones.class.php';
																			
													$base= new ejecuciones();
													$base->conectar();
																			
													$consulta="SELECT * FROM usuario
													WHERE codusuario=".$_SESSION['codusuario'];
																			
													$resultado = $base->ejecutar($consulta);
																			
													$filas  = $base->obtener_fila_asociativa($resultado);
																			
												 ?>
												<h4 class="green-text text-darken-2">Saldo actual: <span class="grey-text text-darken-4"><?php echo "Q.".number_format($filas['saldo'],'2','.',','); ?></span></h4>
											</div><br>
											<div class="col l1">
												<a href="opciones.php" class="blue lighten-1 btn">Regresar</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="col l4">
							<img src="diner.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
</body>
</html>