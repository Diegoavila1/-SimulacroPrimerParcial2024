<?php

class Moto{
    private $codigo;

    private $costo;

    private $anioFabricacion;

    private $descripcion;

    private $incrementoAnual;

    private $activa;

    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $incrementoAnual, $activa)
    {
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->incrementoAnual = $incrementoAnual;
        $this->activa = $activa;
    }

    

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of costo
     */ 
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set the value of costo
     *
     * @return  self
     */ 
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get the value of anioFabricacion
     */ 
    public function getAnioFabricacion()
    {
        return $this->anioFabricacion;
    }

    /**
     * Set the value of anioFabricacion
     *
     * @return  self
     */ 
    public function setAnioFabricacion($anioFabricacion)
    {
        $this->anioFabricacion = $anioFabricacion;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

   

    /**
     * Get the value of incrementoAnual
     */ 
    public function getIncrementoAnual()
    {
        return $this->incrementoAnual;
    }

    /**
     * Set the value of incrementoAnual
     *
     * @return  self
     */ 
    public function setIncrementoAnual($incrementoAnual)
    {
        $this->incrementoAnual = $incrementoAnual;

        return $this;
    }

    /**
     * Get the value of activa
     */ 
    public function getActiva()
    {
        return $this->activa;
    }

    /**
     * Set the value of activa
     *
     * @return  self
     */ 
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    public function darPrecioVenta(){
        $precioMoto = -1;
        if($this->getActiva() == true){
            $precioMoto = $this->getCosto() + $this->getCosto() * ((2024 - $this->getAnioFabricacion()) * (( $this->getIncrementoAnual()) / 100));
        }
        return $precioMoto;
    }

    public function condicionVenta(){
        $booleano = false;
        if($this->getActiva()){
            $booleano = true;
        }
        return $booleano;
    }
    
    public function __toString()
    {
        return "costo : {$this->getCosto()}
año de fabricacion : {$this->getAnioFabricacion()}
descripcion : {$this->getDescripcion()}
porcentaje incremento anual : {$this->getIncrementoAnual()}
activo : {$this->getActiva()} \n";
    }

}