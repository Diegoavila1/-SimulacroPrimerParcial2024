<?php

class Cliente {
    private $nombre;
    private $apellido;
    private $Estado;
    private $tipo;
    private $numDoc;

	public function __construct($nombre, $apellido, $Estado, $tipo, $numDoc) {

		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->Estado = $Estado;
		$this->tipo = $tipo;
		$this->numDoc = $numDoc;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getApellido() {
		return $this->apellido;
	}

	public function setApellido($value) {
		$this->apellido = $value;
	}

	public function getEstado() {
		return $this->Estado;
	}

	public function setEstado($value) {
		$this->Estado = $value;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo($value) {
		$this->tipo = $value;
	}

	public function getNumDoc() {
		return $this->numDoc;
	}

	public function setNumDoc($value) {
		$this->numDoc = $value;
	}

    public function __toString()
    {
        return "nombre: {$this->getNombre()}
apellido : {$this->getApellido()}
habilitado : {$this->getEstado()}
dni : {$this->getTipo()}
numero de documento : {$this->getNumDoc()}";
    }
}