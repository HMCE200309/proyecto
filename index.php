<?php
include_once "CONTROLADORES/ctrlPrincipal.php";
include_once "CONTROLADORES/ctrlUsuarios.php";
include_once "CONTROLADORES/ctrlClientes.php";

include_once "MODELOS/mdlClientes.php";

$objPrincipal = new ControladorPrincipal();
$objPrincipal -> ctrlPrincipal();



