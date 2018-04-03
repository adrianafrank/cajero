<?php 

class datos {

	private $servidor='localhost';
	private $usuario='root';
	private $contrasena='';
	private $base='cajero';

	public $enlace;

	public function conectar()
	{
		$this->enlace=mysqli_connect($this->servidor,$this->usuario,$this->contrasena,$this->base);
		return $this->enlace;
	}
}

 ?>