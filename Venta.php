<?php
include_once "Moto.php";

class Venta {
    private $numero;

    private $fecha;

    private $objCliente;

    private $coleccionMotos;

    private $precioFinal;



    public function __construct($numero, $fecha,$objCliente,$coleccionMotos, $precioFinal)
    {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->objCliente = $objCliente;
        $this->coleccionMotos = $coleccionMotos;
        $this->precioFinal = $precioFinal;
   
    }
    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of coleccionMotos
     */ 
    public function getColeccionMotos()
    {
        return $this->coleccionMotos;
    }

    /**
     * Set the value of coleccionMotos
     *
     * @return  self
     */ 
    public function setColeccionMotos($coleccionMotos)
    {
        $this->coleccionMotos = $coleccionMotos;

        return $this;
    }

    /**
     * Get the value of precioFinal
     */ 
    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    /**
     * Set the value of precioFinal
     *
     * @return  self
     */ 
    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;

        return $this;
    }

    /**
     * Get the value of objCliente
     */ 
    public function getObjCliente()
    {
        return $this->objCliente;
    }

    /**
     * Set the value of objCliente
     *
     * @return  self
     */ 
    public function setObjCliente($objCliente)
    {
        $this->objCliente = $objCliente;

        return $this;
    }

    public function IncorporarMoto($objMoto){
        $sumaTotal = 0;
        if($objMoto->condicionVenta() == true){
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