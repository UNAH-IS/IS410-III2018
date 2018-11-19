<?php
include("class-persona.php");

class Alumno extends Persona{
	private $numeroCuenta;
	private $asignaturasAprobadas;
	private $promedio;
	private $cantidadClasesMatriculadas;

	public function __construct(
		$nombre = null,
		$apellido = null,
		$edad = null,
		$password = null,
		$pais = null,
		$fecha = null,
		$numeroCuenta = null,
		$asignaturasAprobadas = null,
		$promedio = null,
		$cantidadClasesMatriculadas = null
	){
		parent::__construct($nombre,$apellido,$edad,$password,$pais,$fecha);
		$this->numeroCuenta = $numeroCuenta;
		$this->asignaturasAprobadas = $asignaturasAprobadas;
		$this->promedio = $promedio;
		$this->cantidadClasesMatriculadas = $cantidadClasesMatriculadas;
	}

	//Sobreescritura de metodos
	public function __toString(){
		//return "$this->nombre,$this->apellido,$this->edad,$this->numeroCuenta,$this->asignaturasAprobadas,$this->promedio,$this->cantidadClasesMatriculadas";
		return parent::__toString() . ",$this->numeroCuenta,$this->asignaturasAprobadas,$this->promedio,$this->cantidadClasesMatriculadas";
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

	public function matricular(){
		echo "Se matriculara un alumno";
	}
}
?>