<?php 

class banco extends ejecuciones {

	$clave;
	$vtarjeta;

	public function clave($clave)
	{
		$this->clave=$clave;
	}

	public function vtarjeta($cantidad)
	{
	   	$this->vtarjeta=$cantidad;
	}

}

 ?>