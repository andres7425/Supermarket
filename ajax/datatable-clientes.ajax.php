<?php
require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";


class TablaClientes{
    
    /*=============================================
    CARGAR LA TABLA DINAMICA DE CLIENTES
    =============================================*/
    public function mostrarTablaClientes(){
      $item = null;
      $valor = null;

      $clientes = ControladorClientes::ctrMostrarClientes($item,$valor);

      $datosJson = '{
        "data": [';

        for($i = 0; $i<count($clientes);$i++){

          $botones = "<td><div class='btn-group text-right ' rowspan='1' colspan='1'><button class='btn btn-warning btn-link btn-icon btn-sm btnEditarUsuario text-right' rowspan='1' colspan='1' name='btnEditarUsuario' ><i class='fa fa-edit'></i></button><button class='btn btn-danger btn-link btn-icon btn-sm btnEliminarUsuario text-right'  rowspan='1' colspan='1'><i class='fa fa-times'></i></button></div>  </td>'";

          $datosJson .='[
            "'.$clientes[$i]["id"].'",
            "'.$clientes[$i]["id_cliente"].'",
            "'.$clientes[$i]["nombre"].'",
            "'.$clientes[$i]["apellido"].'",
            "'.$clientes[$i]["correo"].'",
            "'.$clientes[$i]["telefono"].'"
          ],';
        }

        $datosJson = substr($datosJson,0,-1);

        $datosJson .= ']
        }';
          
        echo $datosJson;      

    }
}


    /*=============================================
    ACTIVAR TABLA DE CLIENTES
    =============================================*/
$activarClientes = new TablaClientes();
$activarClientes -> mostrarTablaClientes();