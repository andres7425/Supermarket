<?php

require_once "conexion.php";

class ModeloPQRS
{	

	/*=============================================
	MOSTRAR PQRS
	=============================================*/

	static public function mdlMostrarPQRS($tabla, $item, $valor)
	{

		$tabla = "radicado";

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt->fetch();
		} else {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

			$stmt->execute();

			return $stmt->fetchAll();
		}

		$stmt->close();

		$stmt = null;
	}

	/*=============================================
	MOSTRAR TOTAL TIPO PQRS
	=============================================*/

	static public function mdlMostrartotalPQRS($tabla)
	{

		$tabla = "radicador_reportes";

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();

		return $stmt->fetchAll();



		$stmt->close();

		$stmt = null;
	}


	/*=============================================
	EDITAR PQRS
	=============================================*/

	static public function mdlEditarPQRS($tabla, $datos)
	{

		$tabla = "radicado";

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  justificacion = :justificacion, administrador = :administrador, estadoradicado = :estadoradicado WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":estadoradicado", $datos["estadoradicado"], PDO::PARAM_STR);
		$stmt->bindParam(":justificacion", $datos["justificacion"], PDO::PARAM_STR);
		$stmt->bindParam(":administrador", $datos["administrador"], PDO::PARAM_STR);

		var_dump($datos);

		if ($stmt->execute()) {

			return "ok";
		} else {

			return "error";
		}

		$stmt->close();
		$stmt = null;
	}

	/*=============================================
	RANGO FECHAS
	=============================================*/

	static public function mdlRangoFechasPQRS($tabla, $fechaInicial, $fechaFinal)
	{

		$tabla = "radicado";

		if ($fechaInicial == null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

			$stmt->execute();

			return $stmt->fetchAll();
		} else if ($fechaInicial == $fechaFinal) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecharadicado like '%$fechaFinal%'");

			$stmt->bindParam(":fecharadicado", $fechaFinal, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt->fetchAll();
		} else {

			$fechaActual = new DateTime();
			$fechaActual->add(new DateInterval("P1D"));
			$fechaActualMasUno = $fechaActual->format("Y-m-d");

			$fechaFinal2 = new DateTime($fechaFinal);
			$fechaFinal2->add(new DateInterval("P1D"));
			$fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

			if ($fechaFinalMasUno == $fechaActualMasUno) {

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecharadicado BETWEEN '$fechaInicial' AND '$fechaFinalMasUno'");
			} else {


				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fecharadicado BETWEEN '$fechaInicial' AND '$fechaFinal'");
			}

			$stmt->execute();

			return $stmt->fetchAll();
		}
	}
	/*=============================================
	ELIMINAR PQRS
	=============================================*/

	static public function mdlEliminarPQRS($tabla, $datos)
	{

		$tabla = "radicado";

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $datos, PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "ok";
		} else {

			return "error";
		}

		$stmt->close();

		$stmt = null;
	}

	/*=============================================
	TOTAL RADICADOS JUSTIFICADOS
	=============================================*/

	static public function mdlMostrarPQRSJustificados()
	{

		$stmt = Conexion::conectar()->prepare("SELECT COUNT(justificacion) FROM radicado WHERE justificacion != ''");

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

		$stmt = null;
	}
}
