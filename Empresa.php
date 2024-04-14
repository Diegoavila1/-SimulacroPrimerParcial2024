<?php
include_once "Venta.php";


class Empresa
{
    private $denominacion;

    private $direccion;

    private $coleccionClientes;

    private $coleccionMotos;

    private $coleccionVentasRealizadas;

    public function __construct($denominacionExt, $direccionExt, $coleccionClientenExt, $coleccionMotonExt, $coleccionVentasRealizadanExt)
    {
        $this->denominacion = $denominacionExt;
        $this->direccion = $direccionExt;
        $this->coleccionClientes = $coleccionClientenExt;
        $this->coleccionMotos = $coleccionMotonExt;
        $this->coleccionVentasRealizadas = $coleccionVentasRealizadanExt;
    }



    /**
     * Get the value of denominacion
     */
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set the value of denominacion
     *
     * @return  self
     */
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;

    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

    }

    /**
     * Get the value of coleccionClientes
     */
    public function getColeccionClientes()
    {
        return $this->coleccionClientes;
    }

    /**
     * Set the value of coleccionClientes
     *
     * @return  self
     */
    public function setColeccionClientes($coleccionClientes)
    {
        $this->coleccionClientes = $coleccionClientes;

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

    }

    /**
     * Get the value of coleccionVentasRealizadas
     */
    public function getColeccionVentasRealizadas()
    {
        return $this->coleccionVentasRealizadas;
    }

    /**
     * Set the value of coleccionVentasRealizadas
     *
     * @return  self
     */
    public function setColeccionVentasRealizadas($coleccionVentasRealizadas)
    {
        $this->coleccionVentasRealizadas = $coleccionVentasRealizadas;

    }

    //devulve un obj moto , que se compara la coleccion de motos y el codigo
    public function retornarMoto($codigoMoto)
    {
        $i = 0;
        $objMoto = null;
        while ($objMoto == null && $i < count($this->getColeccionMotos())) {
            if ($this->getColeccionMotos()[$i]->getCodigo() === $codigoMoto) {
                $objMoto = $this->getColeccionMotos()[$i];
            }
            $i++;
        }

        return $objMoto;
    }



    public function registrarVenta($colCodigosMoto, $objCliente)
    {
        $precioFinal = 0;

        foreach ($colCodigosMoto as $codigoMoto) {
            $objMotoCodigoEncontrado = $this->retornarMoto($codigoMoto);

                if ($objMotoCodigoEncontrado != null && $objCliente->getDadoBaja() != false && $objMotoCodigoEncontrado->condicionVenta() != false) { 
                    $venta = new Venta(null,date('y-m-d'),$objCliente,$objMotoCodigoEncontrado,$objMotoCodigoEncontrado->darPrecioVenta());
                    $this->coleccionVentasRealizadas[] = $venta;
                    $precioFinal += $objMotoCodigoEncontrado->darPrecioVenta();
                }
                
            
            
        }
        $this->setColeccionVentasRealizadas($this->getColeccionVentasRealizadas());

        return $precioFinal;
    }

    public function retornarVentasXCliente($tipo,$numDoc){
        $ventaXCliente= [];
        foreach($this->getColeccionVentasRealizadas() as $ventaIndividual){
            if($ventaIndividual->getObjCliente()->getTipo() == $tipo && $numDoc == $ventaIndividual->getObjCliente()->getNroDocumento()){
                $ventaXCliente[] = $ventaIndividual;
            }
        }
        return $ventaXCliente;
    }


    public function mostrarColeccionClientes()
    {
        $texto = "";
        foreach ($this->getColeccionClientes() as $objCliente) {
            $texto .= "$objCliente";
            $texto .= "\n";
        }
        return $texto;
    }


    public function mostrarColeccionMotos()
    {
        $texto = "";
        foreach ($this->getColeccionMotos() as $objmoto) {
            $texto .= "$objmoto";
            $texto .= "\n";
        }
        return $texto;
    }


    public function mostrarColeccionVentasRealizadas()
    {
        $texto = "";
        foreach ($this->getColeccionVentasRealizadas() as $venta) {
            foreach ($venta as $llave) {
                $texto .= "$llave";
                $texto .= "\n";
            }
        }
        return $texto;
    }

    public function __toString()
    {
        return "denominacion : {$this->getDenominacion()}
direccion : {$this->getDireccion()}

coleccion de clientes : 
{$this->mostrarColeccionClientes()}
coleccion de motos :
 {$this->mostrarColeccionMotos()}
coleccion de ventas realizadas :
{$this->mostrarColeccionVentasRealizadas()}";
    }
}
