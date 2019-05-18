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