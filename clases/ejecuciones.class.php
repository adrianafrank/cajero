<?php 

class ejecuciones extends datos {

		public $resultado;

		public function ejecutar($consulta)
	{
		$this->resultado=mysqli_query($this->enlace,$consulta);
		return $this->resultado;
	}

		public function obtener_fila_ar()
	{
		$array=mysqli_fetch_array($this->resultado);
		return $array;
	}


		public function obtener_fila_as()
	{
		$array=mysqli_fetch_assoc($this->resultado);
		return $assoc;
	}
	
	   public function obtener_fila_asociativa($stmt){
      $this->array=mysqli_fetch_assoc($stmt);
      return $this->array;
   }

      public function obtener_fila($stmt){
      $this->array=mysqli_fetch_array($stmt);
      return $this->array;
   }

	  public function numero_registros($stmt){
      return mysqli_num_rows($stmt);
   }

}

 ?>