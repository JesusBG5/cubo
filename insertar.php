<?php 
	require_once("conexion.php");
	class Venta extends Conexion{
		public function alta(){
			$producto = rand(1,10);
			$cliente = rand(1,10);
			$fecha = rand(1,15);
			$cantidad = rand(1,200);
			$this->sentencia = "INSERT INTO venta VALUES (null,$cliente,$fecha,$producto,$cantidad)";
			$this->ejecutarSentencia();
		}
	}
	$obj = new Venta();
	for ($i = 0; $i<150; $i++) {
		$obj->alta();
	}

 ?>