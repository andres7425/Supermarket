<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

require_once '../../controladores/clientes.controlador.php';
require_once '../../controladores/pqrs.controlador.php';
require_once '../../controladores/usuarios.controlador.php';

require_once '../../modelos/clientes.modelo.php';
require_once '../../modelos/pqrs.modelo.php';
require_once '../../modelos/usuarios.modelo.php';


enviarMail();

function enviarMail()
{
    //TRAEMOS LA INFORMACION DEL RADICADO

    $itemRadicado = "id";
    $valorRadicado = $_GET["enviarPQRS"];

    $radicado = ControladorPQRS::ctrMostrarPQRS($itemRadicado, $valorRadicado);

    $estado = $radicado["estadoradicado"];
    $tipopqrs = $radicado["tipopqrs"];
    $justificacion = $radicado["justificacion"];

    //TRAEMOS LA INFORMACION DEL CLIENTE

    $itemCliente = "id";
    $valorCliente = $_GET["enviarCliente"];

    $cliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

    $nombre = $cliente["nombre"];
    $apellido = $cliente["apellido"];
    $correo = $cliente["correo"];

    //TRAEMOS LA INFORMACION DEL ADMINISTRADOR

    $item = "id";
    $valor = $_GET["enviarUsuario"];


    $usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

    $nombreUsuario = $usuario["nombre"];



    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'unbosquesupermarket@gmail.com';                     // SMTP username
        $mail->Password   = 'Amanriqueg1';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('unbosquesupermarket@gmail.com', 'Unbosue Supermarket Soporte');
        $mail->addAddress("" . $correo . "");     // Add a recipient
        //$mail->addAddress('amanriqueg4@gmail.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        /* Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            */

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = ucwords('Resupesta a su ' . $tipopqrs);
        $mail->Body    = 'Hola ! ' . $nombre . ' ' . $apellido . '<br> Nos comunicamos para informarte que tu ' . $tipopqrs . ' se encuentra ' . $estado . ' <br> Justificacion: <br> ' . $justificacion . '<br> Atentamente: ' . $nombreUsuario;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        
        echo '
            <input type="text" value="ok" id="correoEnviado">

            <!-- SweetAlert 2 -->
            <script src="../../vistas/plugins/sweetalert2/sweetalert2.all.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

        
            <script>

            swal({
                type: "success",
                title: "El correo a sido enviado correctamente",
                showConfirmButton: true,
                confirmButtonText: "Cerrar"
                }).then(function(result){
                          if (result.value) {

                            window.location = "../../../supermarketpqrs/pqrs";

                          }
                      })

			
			</script>';
    } catch (Exception $e) {
        echo "No se pudo enviar el mensaje. Mensaje Error: {$mail->ErrorInfo}";
    }
}

?>

