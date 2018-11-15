<?php
include("class-persona.php");

class Alumno extends Persona{
	private $numeroCuenta;
	private $asignaturasAprobadas;
	private $promedio;
	private $cantidadClasesMatriculadas;

	public function __construct(
		$numeroCuenta = null,
		$asignaturasAprobadas = null,
		$promedio = null,
		$cantidadClasesMatriculadas = null
	){
		$this->numeroCuenta = $numeroCuenta;
		$this->asignaturasAprobadas = $asignaturasAprobadas;
		$this->promedio = $promedio;
		$this->cantidadClasesMatriculadas = $cantidadClasesMatriculadas;
	}

	public function __toString(){
		$var = "Alumno{"
		."numeroCuenta: ".$this->numeroCuenta." , "
		."asignaturasAprobadas: ".$this->asignaturasAprobadas." , "
		."promedio: ".$this->promedio." , "
		."cantidadClasesMatriculadas: ".$this->cantidadClasesMatriculadas;
		return $var."}";
	}

	public function getNumeroCuenta(){
		return $this->numeroCuenta;
	}

	public function setNumeroCuenta($numeroCuenta){
		$this->numeroCuenta = $numeroCuenta;
	}
	public function getAsignaturasAprobadas(){
		return $this->asignaturasAprobadas;
	}

	public function setAsignaturasAprobadas($asignaturasAprobadas){
		$this->asignaturasAprobadas = $asignaturasAprobadas;
	}
	public function getPromedio(){
		return $this->promedio;
	}

	public function setPromedio($promedio){
		$this->promedio = $promedio;
	}
	public function getCantidadClasesMatriculadas(){
		return $this->cantidadClasesMatriculadas;
	}

	public function setCantidadClasesMatriculadas($cantidadClasesMatriculadas){
		$this->cantidadClasesMatriculadas = $cantidadClasesMatriculadas;
	}

}
?>