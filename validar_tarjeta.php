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
		echo "si";
	} else {
		echo "no";
	}
	
 ?>