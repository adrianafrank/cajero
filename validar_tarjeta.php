<?php 
	
	require_once 'clases/conexion.class.php';
	require_once 'clases/ejecuciones.class.php';

	$base= new ejecuciones();
	$base->conectar();
	$codigo=$_POST['codigo1'];

	$consulta="SELECT * FROM tarjeta
	WHERE codtarjeta=".$codigo;

	
	$resultado = $base->ejecutar($consulta);
	$cantidad  = $base->numero_registros($resultado);

	if ($cantidad > 0) {
		$fila  = $base->obtener_fila_asociativa($resultado);

		session_start();

		$_SESSION['codtarjeta'] = $fila['codtarjeta'];
		$_SESSION['codusuario'] = $fila['codusuario'];

		echo "si";
	} else {
		echo "no";
	}
	
 ?>