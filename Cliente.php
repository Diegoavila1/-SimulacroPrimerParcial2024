<?php

class Cliente{
    private $nombre;

    private $apellido;

    private $dadoBaja;

    private $tipo;

    private $nroDocumento;

    public function __construct($nombre, $apellido, $dadoBaja, $tipo, $nroDocumento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dadoBaja = $dadoBaja;
        $this->tipo = $tipo;
        $this->nroDocumento = $nroDocumento;
    }
    
    

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of dadoBaja
     */ 
    public function getDadoBaja()
    {
        return $this->dadoBaja;
    }

    /**
     * Set the value of dadoBaja
     *
     * @return  self
     */ 
    public function setDadoBaja($dadoBaja)
    {
        $this->dadoBaja = $dadoBaja;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of nroDocumento
     */ 
    public function getNroDocumento()
    {
        return $this->nroDocumento;
    }

    /**
     * Set the value of nroDocumento
     *
     * @return  self
     */ 
    public function setNroDocumento($nroDocumento)
    {
        $this->nroDocumento = $nroDocumento;

        return $this;
    }

    public function __toString()
    {
        return 
"nombre : {$this->getNombre()}
apellido : {$this->getApellido()}
dadoBaja : {$this->getDadoBaja()}
tipo : {$this->getTipo()}
numero de documento : {$this->getNroDocumento()}\n";
    }

}