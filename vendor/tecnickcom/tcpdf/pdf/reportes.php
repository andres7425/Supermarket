<?php

require_once "../../../../controladores/pqrs.controlador.php";
require_once "../../../../modelos/pqrs.modelo.php";

require_once "../../../../controladores/clientes.controlador.php";
require_once "../../../../modelos/clientes.modelo.php";

require_once "../../../../controladores/usuarios.controlador.php";
require_once "../../../../modelos/usuarios.modelo.php";

class imprimirRadicado
{

	public $codigo;

	public function traerImpresionRadicado()
	{

		//REQUERIMOS LA CLASE TCPDF

		require_once('tcpdf_include.php');

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		$pdf->startPageGroup();

		$pdf->AddPage();

		// ---------------------------------------------------------






		$bloque1 = <<<EOF

	<table>


		<tr>
			
			<td style="width:150px"><img src="images/logo-universidad-el-bosque.png"></td>

			<td style="background-color:white; width:140px">
				
				<div style="font-size:8.5px; text-align:right; line-height:15px;">
					
					<br>
					NIT: 860.066.789-6

					<br>
					Dirección: Av.Cra.9 No.131 A-02

				</div>

			</td>

			<td style="background-color:white; width:140px">

				<div style="font-size:8.5px; text-align:right; line-height:15px;">
					
					<br>
					Teléfono: 01 8000 11 30 33
					
					<br>
					atencionalusuario@unbosque.edu.co

				</div>
				
			</td>

			<td style="background-color:white; width:100px; text-align:center; color:red"><br><br>No. Generados<br>1</td>

		</tr>

	</table>

EOF;

		$pdf->writeHTML($bloque1, false, false, false, false, '');

		// ---------------------------------------------------------

		//TRAEMOS LA INFORMAICON DE LA PQRS

		$tipo= null;
		$estado = null;

		$respuestaRadicado = ControladorPQRS::ctrMostrarPDF($tipo, $estado);

		if (is_array($respuestaRadicado) || is_object($respuestaRadicado)) {
			foreach ($respuestaRadicado as $key => $value) {

				$itemCliente = "id";
				$valorCliente = $value["idradicador"];

				 var_dump($valorCliente);

				$radicadoCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

				$itemUsuario = "id";
				$valorUsuario = $value["administrador"];

				$radicadoUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

				$bloque2 = <<<EOF

	<table>
		
		<tr>
			
			<td style="width:540px"><img src="images/back.jpg"></td>
		
		</tr>

	</table>

	<table style="font-size:10px; padding:5px 10px;">
	
		<tr>
		
			<td style="border: 1px solid #666; background-color:white; width:390px">

			<strong>Cliente:</strong> $radicadoCliente[nombre] $radicadoCliente[apellido]

			</td>

			<td style="border: 1px solid #666; background-color:white; width:150px; text-align:right">
			
			<strong>Fecha:</strong> $value[fecharadicado]

			</td>

		</tr>

		<tr>
		
			<td style="border: 1px solid #666; background-color:white; width:540px"><strong>Administrador:</strong> $radicadoUsuario[nombre] $radicadoUsuario[apellido]  </td>

		</tr>

	</table>

	<table style="font-size:10px; padding:5px 10px;">

		<tr>
		
		<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center"><strong>Documento Cliente</strong></td>

		<td style="border: 1px solid #666; background-color:white; width:280px; text-align:center">$radicadoCliente[id_cliente] </td>
		</tr>

		<tr>
		<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center"><strong>Correo Cliente</strong></td>

		<td style="border: 1px solid #666; background-color:white; width:280px; text-align:center"> $radicadoCliente[correo] </td>
		</tr>

		<tr>
		<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center"><strong>Teléfono Cliente</strong></td>

		<td style="border: 1px solid #666; background-color:white; width:280px; text-align:center"> $radicadoCliente[telefono]</td>
		</tr>

		<tr>
		<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center"><strong>Comentarios</strong></td>

		<td style="border: 1px solid #666; background-color:white; width:280px; text-align:center"> $value[comentarios] </td>
		</tr>
		
		<tr>
		<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center"><strong>Estado</strong></td>

		<td style="border: 1px solid #666; background-color:white; width:280px; text-align:center"> $value[estadoradicado] </td>
		</tr>

		<tr>
		<td style="border: 1px solid #666; background-color:white; width:260px; text-align:center"><strong>Justificación</strong></td>

		<td style="border: 1px solid #666; background-color:white; width:280px; text-align:center"> $value[justificacion]</td>
		</tr>

		

	</table>

EOF;

				$pdf->writeHTML($bloque2, false, false, false, false, '');
			}
		}
		// ---------------------------------------------------------


		// ---------------------------------------------------------
		//SALIDA DEL ARCHIVO 

		$pdf->Output('Radicado.pdf');
	}
}


$radicado = new imprimirRadicado();
$radicado->traerImpresionRadicado();
