<?php
require_once "../CONTROLADORES/ctrlClientes.php";
require_once "../MODELOS/mdlclientes,php";

class ajaxClientes{
    public $idClientes;

    public function cargarDatos(){
        $tabla = "cliente";
        $parametro = "cliente";
        $id = $this-> idClientes;
        $datos = ControladorClientes::ctrlCargarClientes($tabla, $parametro,$id);
        echo json_encode($datos);
        
    }
}

if (isset($_POST['idClientes'])){
    $objAjaxClente = new ajaxClientes();
    $objAjaxClente->idClientes = $POST['idClientes'];
    if($POST['edit']=='edit'){
        $objAjaxClente->cargarDatos();
    }else{
        $objAjaxClente-<eliminarDatos();
    }
}