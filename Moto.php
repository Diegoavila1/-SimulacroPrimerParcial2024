<?php

class Moto {
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcentaje;
    private $incrementoAnual;
    private $activa;

	public function __constructor($codigo, $costo, $anioFabricacion, $descripcion, $porcentaje, $incrementoAnual, $activa) {

		$this->codigo = $codigo;
		$this->costo = $costo;
		$this->anioFabricacion = $anioFabricacion;
		$this->descripcion = $descripcion;
		$this->porcentaje = $porcentaje;
		$this->incrementoAnual = $incrementoAnual;
		$this->activa = $activa;
	}

	public function getCodigo() {
		return $this->codigo;
	}

	public function setCodigo($value) {
		$this->codigo = $value;
	}

	public function getCosto() {
		return $this->costo;
	}

	public function setCosto($value) {
		$this->costo = $value;
	}

	public function getAnioFabricacion() {
		return $this->anioFabricacion;
	}

	public function setAnioFabricacion($value) {
		$this->anioFabricacion = $value;
	}

	public function getDescripcion() {
		return $this->descripcion;
	}

	public function setDescripcion($value) {
		$this->descripcion = $value;
	}

	public function getPorcentaje() {
		return $this->porcentaje;
	}

	public function setPorcentaje($value) {
		$this->porcentaje = $value;
	}

	public function getIncrementoAnual() {
		return $this->incrementoAnual;
	}

	public function setIncrementoAnual($value) {
		$this->incrementoAnual = $value;
	}

	public function getActiva() {
		return $this->activa;
	}

	public function setActiva($value) {
		$this->activa = $value;
	}



    public function darPrecioVenta(){

        if($this->getActiva()){
            $valorBici = $this->getCosto()+$this->getCosto()*(2024 * $this->getIncrementoAnual()); 
        }else{
            $valorBici = -1;
        }
        return $valorBici;
    }

    public function __toString()
    {
        return "código : {$this->getCodigo()} 
costo : {$this->getCosto()}
año fabricación : {$this->getAnioFabricacion()} 
descripción : {$this->getDescripcion()}
porcentaje : {$this->getPorcentaje()}
incremento anual : {$this->getIncrementoAnual()} 
activa : {$this->getActiva()}";
    }
}