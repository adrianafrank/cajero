<?php 
	
	session_start();

	require_once 'clases/conexion.class.php';
	require_once 'clases/ejecuciones.class.php';

	$base= new ejecuciones();
	$base->conectar();
	$codigo=$_POST['codigo2'];

	$consulta="SELECT * FROM tarjeta
	WHERE clave=$codigo
	AND codtarjeta=".$_SESSION['codtarjeta'];

	
	$resultado = $base->ejecutar($consulta);
	$cantidad  = $base->numero_registros($resultado);

	if ($cantidad > 0) {
		echo "si";
	} else {
		echo "no";
	}
	
 ?>