<?php
class Lista{
	private $codigoLista;
	private $tituloLista;

	public function __construct(
		$codigoLista = null,
		$tituloLista = null
	){
		$this->codigoLista = $codigoLista;
		$this->tituloLista = $tituloLista;
	}

	public function __toString(){
		$var = "Lista{"
		."codigoLista: ".$this->codigoLista." , "
		."tituloLista: ".$this->tituloLista;
		return $var."}";
	}

	public function getCodigoLista(){
		return $this->codigoLista;
	}

	public function setCodigoLista($codigoLista){
		$this->codigoLista = $codigoLista;
	}
	public function getTituloLista(){
		return $this->tituloLista;
	}

	public function setTituloLista($tituloLista){
		$this->tituloLista = $tituloLista;
    }
    
    //Funcion estatica: se puede acceder sin crear una instancia
    public static function obtenerListas(){
        $archivo = fopen("../data/listas.json", "r");
        $registros = array();
        $i=0;
        while(($linea=fgets($archivo))){
            $registros[] = json_decode($linea, true);
            $archivoTarjetas = fopen("../data/tarjetas/tarjetas-lista-".$registros[$i]["codigoLista"].".json", "a+");
            $registrosTarjetas=array();
            while(($lineaTarjetas = fgets($archivoTarjetas))){
                $registrosTarjetas[] = json_decode($lineaTarjetas, true);
            }
            $registros[$i]["tarjetas"] = $registrosTarjetas;
            fclose($archivoTarjetas);
            $i++;
        }
        fclose($archivo);
        return json_encode($registros);
    }

}
?>

