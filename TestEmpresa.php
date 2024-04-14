<?php

include_once 'Cliente.php';
include_once "Venta.php";
include_once "Moto.php";
include_once "Empresa.php";

$objCliente1 = new Cliente("diego","rios",true,"tipo",123456789);
$objCliente2 = new Cliente("barco","valen",false,"tipo",147258369);

$objMoto1 = new Moto (11,2230000,2022,"Benelli Imperiale 400",85,true);
$objMoto2 = new Moto (12,584000,2021,"Zanella Zr 150 Ohc",70,true);
$objMoto3 = new Moto (13 ,999900 , 2023 ,"Zanella Patagonian Eagle 250" ,55,false);

$objEmpresa = new Empresa("Alta Gama","Av // Argenetina 123",[$objCliente1, $objCliente2 ],[$objMoto1, $objMoto2, $objMoto3],[]);
echo $objEmpresa->registrarVenta([11,12], $objCliente1); 
//echo $objEmpresa->registrarVenta([0], $objCliente2); 
//echo $objEmpresa->registrarVenta([2], $objCliente2); 
//print_r($objEmpresa->retornarVentasXCliente("tipo",123456789));
//print_r($objEmpresa->retornarVentasXCliente("tipo",147258369));
//echo $objEmpresa;