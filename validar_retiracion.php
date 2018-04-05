<?php 
	
	session_start();

	require_once 'clases/conexion.class.php';
	require_once 'clases/ejecuciones.class.php';

	$base= new ejecuciones();
	$base->conectar();
	$monto=$_POST['monto'];
	$fecha=date('Y-m-d');
	
	$consulta="SELECT * FROM usuario
	WHERE codusuario=".$_SESSION['codusuario'];

	$resultado = $base->ejecutar($consulta);

	$fila  = $base->obtener_fila_asociativa($resultado);


	if ($monto > $fila['saldo']) {

		echo "No se pudo";

	} else if ($monto <= $fila['saldo'] && $monto >= 1) {
		
		$consulta="INSERT INTO transacciones
		VALUES(null,'$fecha','$monto',".$_SESSION['codtarjeta'].")";
		
		$resultado = $base->ejecutar($consulta);

		$resta=($fila['saldo']-$monto);

		$consulta="UPDATE usuario
		SET saldo=$resta
		WHERE codusuario=".$_SESSION['codusuario'];

		$resultado = $base->ejecutar($consulta);

		$registros = $base->numero_registros_afectados();

		if ($registros > 0) {
			echo "si";
		} else {
			echo "no";
		}

	}
	else {
		echo "No ingresa nada";
	}


	
 ?>