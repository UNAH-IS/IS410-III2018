<?php
class Usuario{
	private $usuario;
	private $nombre;
	private $apellido;
	private $urlImagen;

	public function __construct(
		$usuario = null,
		$nombre = null,
		$apellido = null,
		$urlImagen = null
	){
		$this->usuario = $usuario;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->urlImagen = $urlImagen;
	}

	public function __toString(){
		$var = "Usuario{"
		."usuario: ".$this->usuario." , "
		."nombre: ".$this->nombre." , "
		."apellido: ".$this->apellido." , "
		."urlImagen: ".$this->urlImagen;
		return $var."}";
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
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
	public function getUrlImagen(){
		return $this->urlImagen;
	}

	public function setUrlImagen($urlImagen){
		$this->urlImagen = $urlImagen;
	}

	//Funcion estatica: se puede acceder sin crear una instancia
    public static function obtenerUsuarios(){
        $archivo = fopen("../data/usuarios.json", "r");
        $registros = array();
        while(($linea=fgets($archivo))){
            $registros[] = json_decode($linea, true);
        }
        return json_encode($registros);
    }
}
?>