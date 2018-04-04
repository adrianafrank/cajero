<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="materialize/css/materialize.css">
	<title>Problema-Cajero Automático | Código-Tarjeta</title>
</head>
<body>

	<section>
		<div class="container">
			<div class="row" style="border:1px solid #ccc;margin-top: 80px;">
				<div class="col l6">
					<div class="row">
						<div class="col l12">
							<h3 class="center-align">Bienvenido a tu cajero automático</h3>
						</div>
					</div>
					<div class="row">
					  	<div class="col l12">
					  		<form id="frm-codigot">
					  			<div class="input-field col l12" style="padding: 15px;">
						          <input id="last_name" type="text" name="codigo1" id="codigo1" class="validate">
						          <label for="last_name" style="margin-top: 15px;">Ingrese Código de Tarjeta</label>
						        </div>
						        <div class="right-align">
						        	<button type="submit" class="waves-effect waves-light btn">Verificar</button>
						        </div>
					  		</form>
					  	</div>
					</div>
				</div>
				<div class="col l6 center-align">
					<div class="row">
						<div class="col l6">
							<img src="caje.jpg" alt="" height="300" style="border-radius: 10px; margin-top: 10px;">
						</div>
					</div>
				</div>
			</div>
			<div  id="mensaje1" hidden class="card-panel green darken-4 grey-text text-lighten-5 ">Proceso Exitoso <br>Has ingresado correctamente Bienvenido !!</div>
			<div  id="mensaje2" hidden class="card-panel red darken-4 grey-text text-lighten-5">Proceso Fallido <br>No has ingreso el Código Correcto !!</div>
		</div>
	</section>

	<script src="js/jquery-3.3.1.js"></script>
	<script src="materialize/js/materialize.js"></script>
	<script src="js/procesos.js"></script>
</body>
</html>