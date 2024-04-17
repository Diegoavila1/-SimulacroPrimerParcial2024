<?php

include_once 'Venta.php';

class Empresa{
    private $denominacion;
    private $direccion;
    private $coleccionClientes;
    private $coleccionMotos;
    private $coleccionVentasRealizadas;

	public function __construct($denominacion, $direccion, $coleccionClientes, $coleccionMotos, $coleccionVentasRealizadas) {

		$this->denominacion = $denominacion;
		$this->direccion = $direccion;
		$this->coleccionClientes = $coleccionClientes;
		$this->coleccionMotos = $coleccionMotos;
		$this->coleccionVentasRealizadas = $coleccionVentasRealizadas;
	}

	public function getDenominacion() {
		return $this->denominacion;
	}

	public function setDenominacion($value) {
		$this->denominacion = $value;
	}

	public function getDireccion() {
		return $this->direccion;
	}

	public function setDireccion($value) {
		$this->direccion = $value;
	}

	public function getColeccionClientes() {
		return $this->coleccionClientes;
	}

	public function setColeccionClientes($value) {
		$this->coleccionClientes = $value;
	}

	public function getColeccionMotos() {
		return $this->coleccionMotos;
	}

	public function setColeccionMotos($value) {
		$this->coleccionMotos = $value;
	}

	public function getColeccionVentasRealizadas() {
		return $this->coleccionVentasRealizadas;
	}

	public function setColeccionVentasRealizadas($value) {
		$this->coleccionVentasRealizadas = $value;
	}
    
    
    public function retornarMoto($codigoMoto){
        $i=0;
        $objMoto = null;
        while($i < count($this->getColeccionMotos()) && $objMoto == null){
            if($this->getColeccionMotos()[$i]->getCodigo() == $codigoMoto){
                $objMoto = $this->getColeccionMotos()[$i];
            }else{
                $i++;
            }
        }
        return $objMoto;
    }


    public function registrarVenta($colCodigosMoto,$objCliente){

        $impFinal = 0;
        $venta = null;

        foreach($colCodigosMoto as $codigo){
            $objMotoCod = $this->retornarMoto($codigo);

            if($objMotoCod != null && $objCliente->getEstado() != false && $objMotoCod->getActiva() != false){
                if($venta == null){
                    $venta = new Venta("",date('y,m,d'),$objCliente,$this->getColeccionMotos(),$objMotoCod->darPrecioVenta());
                    $this->coleccionVentasRealizadas[] = $venta;
                }
                $impFinal += $objMotoCod->darPrecioVenta();
            }
        }
        if($venta !== null){
            $this->setColeccionVentasRealizadas($this->getColeccionVentasRealizadas());
        }
        
        return $impFinal;
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
                $texto .= "$venta";
                $texto .= "\n";
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
{$this->mostrarColeccionVentasRealizadas()} \n";
    }

}