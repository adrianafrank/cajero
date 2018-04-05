<?php 

	session_start();

	if ($_SESSION['codtarjeta']=='') {
		header('Location:index.php');
	}


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="materialize/css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Problema-Cajero Automático | 3 Transacciones</title>
</head>
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
						<div class="col l12">
							<div class="row">
								<div class="col l10 offset-l1" style="border-top:5px solid #42a5f5;">
									<div class="row">
										<div class="col l12 center-align">
											<h5 class="orange-text text-darken-3">Últimas 3 Transacciones</h5>
										</div>
									</div>
									<div class="row">
										<div class="col l12">
											<table class="highlight centered">
										        <thead>
										          <tr>
										              <th>Codigo</th>
										              <th>Monto</th>
										              <th>Fecha-Retiro</th>
										          </tr>
										        </thead>
										        <tbody>
										        	<?php 
																		
														require_once 'clases/conexion.class.php';
														require_once 'clases/ejecuciones.class.php';
																				
														$base= new ejecuciones();
														$base->conectar();
																				
														$consulta="SELECT * FROM transacciones
														WHERE codtarjeta=".$_SESSION['codtarjeta']." 
														ORDER BY fecha_retiro desc
														LIMIT 3";
																				
														$resultado = $base->ejecutar($consulta);
																				
														while ($filas  = $base->obtener_fila_asociativa($resultado)) {
															echo '<tr>
													            <td>'.$filas['codtransaccion'].'</td>
													            <td>'.$filas['monto'].'</td>
													            <td>'.$filas['fecha_retiro'].'</td>
													          </tr>';
														}
																				
													 ?>
										          
									        	</tbody>
										    </table>
										</div>
									</div>
									<div class="row">
										<div class="col l11 right-align">
											<a href="opciones.php" class="blue lighten-1 btn">Regresar</a>
										</div>
									</div>
								</div>
							</div>
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