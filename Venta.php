<?php

class Venta{
	private $numero;
    private $fecha;
    private $objCliente;
    private $coleccionMotos;
    private $precioFinal;

	public function __construct($numero, $fecha, $objCliente, $coleccionMotos, $precioFinal) {

		$this->numero = $numero;
		$this->fecha = $fecha;
		$this->objCliente = $objCliente;
		$this->coleccionMotos = $coleccionMotos;
		$this->precioFinal = $precioFinal;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($value) {
		$this->numero = $value;
	}

	public function getFecha() {
		return $this->fecha;
	}

	public function setFecha($value) {
		$this->fecha = $value;
	}

	public function getObjCliente() {
		return $this->objCliente;
	}

	public function setObjCliente($value) {
		$this->objCliente = $value;
	}

	public function getColeccionMotos() {
		return $this->coleccionMotos;
	}

	public function setColeccionMotos($value) {
		$this->coleccionMotos = $value;
	}

	public function getPrecioFinal() {
		return $this->precioFinal;
	}

	public function setPrecioFinal($value) {
		$this->precioFinal = $value;
	}
	
    public function IncorporarMoto($objMoto){
        $sumaTotal = 0;
        if($objMoto->getActiva()){
            foreach($this->getColeccionMotos() as $objMoto){
                $sumaTotal = $objMoto->darPrecioVenta();
            }
            $objMoto->setPrecioFinal($sumaTotal);
        }
    }

    public function __toString()
    {
        return "numero : {$this->getNumero()}
fecha : {$this->getFecha()}
El cliente : {$this->getObjCliente()}
coleccion de motos : {$this->getColeccionMotos()}
precio final : {$this->getPrecioFinal()}";
    }
}