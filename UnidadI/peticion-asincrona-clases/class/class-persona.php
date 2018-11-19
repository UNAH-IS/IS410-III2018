<?php

//POJO: Plain Old Java Object 
abstract class Persona{
	protected $nombre;
	protected $apellido;
	protected $edad;
	protected $password;
	protected $pais;
	protected $fecha;

	public function __construct(
		$nombre = null,
		$apellido = null,
		$edad = null,
		$password = null,
		$pais = null,
		$fecha = null
	){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->edad = $edad;
		$this->password = $password;
		$this->pais = $pais;
		$this->fecha = $fecha;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}
	public function getEdad(){
		return $this->edad;
	}

	public function setEdad($edad){
		$this->edad = $edad;
	}
	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}
	public function getPais(){
		return $this->pais;
	}

	public function setPais($pais){
		$this->pais = $pais;
	}
	public function getFecha(){
		return $this->fecha;
	}

	public function setFecha($fecha){
		$this->fecha = $fecha;
	}

    public function registrarPersona(){
        $archivo = fopen("usuarios.json","a+");
        $arreglo = array();
        $arreglo["nombre"]=$this->nombre;
        $arreglo["apellido"]=$this->apellido;
        $arreglo["edad"]=$this->edad;
        $arreglo["password"]=$this->password;
        $arreglo["pais"]=$this->pais;
        $arreglo["fecha"]=$this->fecha;

        fwrite($archivo, json_encode($arreglo) . "\n");
        fclose($archivo);
        return json_encode($arreglo);
	}
	
	public function __toString(){
		return "$this->nombre,$this->apellido,$this->edad,$this->password,$this->pais,$this->fecha";
	}

	public abstract function matricular();
}

?>