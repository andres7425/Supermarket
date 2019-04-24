<?php

require_once "../controladores/pqrs.controlador.php";
require_once "../modelos/pqrs.modelo.php";

class AjaxPQRS{

	/*=============================================
	EDITAR PQRS
	=============================================*/	

	public $idRadicado;

	public function ajaxEditarRadicado(){

		$item = "id";
		$valor = $this->idRadicado;

		$respuesta = ControladorPQRS::ctrMostrarPQRS($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR RADICADO
=============================================*/	

if(isset($_POST["idPQRS"])){

	$Radicado = new AjaxPQRS();
	$Radicado -> idRadicado = $_POST["idPQRS"];
	$Radicado -> ajaxEditarRadicado();

}