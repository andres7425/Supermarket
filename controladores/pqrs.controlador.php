<?php

class ControladorPQRS
{

	/*=============================================
	MOSTRAR PQRS
	=============================================*/

	static public function ctrMostrarPQRS($item, $valor)
	{

		$tabla = "pqrs";

		$respuesta = ModeloPQRS::mdlMostrarPQRS($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	MOSTRAR PQRS PDF
	=============================================*/

	static public function ctrMostrarPDF($tipo, $estado)
	{

		$respuesta = ModeloPQRS::mdlMostrarPQRSPDF($tipo, $estado);

		return $respuesta;
	}

	/*=============================================
	EDITAR PQRS
	=============================================*/

	static public function ctrEditarPQRS()
	{

		if (isset($_POST["editarPQRS"])) {

			if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarcorreoCliente"])) {

					$tabla = "radicado";

					$datos = array(
						"id" => $_POST["editarPQRS"],
						"justificacion" => $_POST["editarJustificacion"],
						"estadoradicado" => $_POST["editarEstadoRadicado"],
						"administrador" => $_POST["editarAdministrador"]
					);

					$respuesta = ModeloPQRS::mdlEditarPQRS($tabla, $datos);

					var_dump($datos);


					if ($respuesta == "ok") {

						echo '<script>

					swal({
						  type: "success",
						  title: "El radicado ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "pqrs";

									}
								})

					</script>';
					}
				} else {

				echo '<script>

					swal({
						  type: "error",
						  title: "¡El radicado no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "pqrs";

							}
						})

			  	</script>';
			}
		}
	}


	/*=============================================
	RANGO FECHAS
	=============================================*/

	static public function ctrRangoFechasPQRS($fechaInicial, $fechaFinal)
	{

		$tabla = "radicado";

		$respuesta = ModeloPQRS::mdlRangoFechasPQRS($tabla, $fechaInicial, $fechaFinal);

		return $respuesta;
	}

	/*=============================================
	MOSTRAR TOTAL PQRS
	=============================================*/

	static public function ctrMostrarTotalRadicado()
	{

		$tabla = "radicador_reportes";

		$respuesta = ModeloPQRS::mdlMostrartotalPQRS($tabla);

		return $respuesta;
	}

	/*=============================================
	MOSTRAR PQRS JUSTIFICADOS
	=============================================*/

	static public function ctrMostrarPQRSJustificados()
	{

		$respuesta = ModeloPQRS::mdlMostrarPQRSJustificados();

		return $respuesta;
	}
}
