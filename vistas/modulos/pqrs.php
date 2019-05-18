<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sistema PQRS Unibosque SuperMarket</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



  <!--=====================================
  PLUGINS DE CSS
  ======================================-->


  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- CSS Files -->
  <link href="vistas/dash/assets/css/material-dashboard.min.css" rel="stylesheet" />

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">




  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>

  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="vistas/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>


  <!-- jQuery Number -->
  <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="vistas/bower_components/Chart.js/Chart.js"></script>


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h2 class="card-title ">Peticiones, Quejas, Reclamos y Sugerencias</h2>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                        </div>
                        <div class="material-datatables" style="display: list-item;">
                            <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                                            <span>
                                                <i class="fa fa-calendar"></i> Date range picker
                                            </span>
                                            <i class="fa fa-caret-down"></i>
                                        </button>

                                        <div class="table-responsive">

                                            <table id="tablaPQRS" class="table tablesorter  table-striped dt-responsive tablas" width="100%">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">#</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Fecha de radicado</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Documento</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Correo</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Telefono</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 141px;">Tipo</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 141px;">Estado</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Administradors</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 140px;">Acciones</th>

                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">#</th>
                                                        <th rowspan="1" colspan="1">Fecha de radicado</th>
                                                        <th rowspan="1" colspan="1">Documento</th>
                                                        <th rowspan="1" colspan="1">Correo</th>
                                                        <th rowspan="1" colspan="1">Telefono</th>
                                                        <th rowspan="1" colspan="1">Tipo</th>
                                                        <th rowspan="1" colspan="1">Estado</th>
                                                        <th rowspan="1" colspan="1">Administradors</th>
                                                        <th rowspan="1" colspan="1">Acciones</th>

                                                    </tr>
                                                </tfoot>
                                                <tbody>

                                                    <?php

                                                    if (isset($_GET["fechaInicial"])) {

                                                        $fechaInicial = $_GET["fechaInicial"];
                                                        $fechaFinal = $_GET["fechaFinal"];
                                                    } else {

                                                        $fechaInicial = null;
                                                        $fechaFinal = null;
                                                    }

                                                    $radicado = ControladorPQRS::ctrRangoFechasPQRS($fechaInicial, $fechaFinal);

                                                    foreach ($radicado as $key => $value) {


                                                        echo '<tr>
                                                 
                                                                   <td>' . $value["id"] . '</td>
                                                 
                                                                   <td>' . $value["fecharadicado"] . '</td>';

                                                        $itemCliente = "id";
                                                        $valorCliente = $value["idradicador"];

                                                        $radicadoCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                                                        echo '<td>' . $radicadoCliente["id_cliente"] . '</td>
                                                                          <td>' . $radicadoCliente["correo"] . '</td>
                                                                          <td>' . $radicadoCliente["telefono"] . '</td>';

                                                        echo '<td>' . $value["tipopqrs"] . '</td>
                                                                        <td>' . $value["estadoradicado"] . '</td>';

                                                        $itemUsuario = "id";
                                                        $valorUsuario = $value["administrador"];

                                                        $radicadoUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                                                        echo '<td>' . $radicadoUsuario["usuario"] . '</td>';


                                                        echo '<td>
                                                                   <div class="btn-group text-right" rowspan="1" colspan="1">
                                                                   <button class="btn btn-warning btn-link btn-icon btn-sm btnEditarPQRS text-right"  rowspan="1" colspan="1" name="btnEditarUsuario" idPQRS="' . $value['id'] . '" idUsuario="' .$radicadoUsuario["id"]. '"  idCliente="'.$radicadoCliente["id"].'">
                                                                   <i class="fa fa-edit"></i>
                                                                   </button>
                                                                   <button class="btn btn-danger btn-link btn-icon btn-sm btnEnviarCorreo text-right"  rowspan="1" colspan="1" name="btnEnviar" enviarPQRS="' . $value['id'] . '" enviarUsuario="' .$radicadoUsuario["id"]. '" enviarCliente="'.$radicadoCliente["id"].'"  ><i class="fa fa-inbox"></i>
                                                                   </button>
                                                                   </div> 
                                                                   </td>
                                                                   </tr>';

                                                        echo '</div>  
                                                 
                                                                   </td>
                                                 
                                                                 </tr>';
                                                    }



                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div> 

    <!--=====================================
PLUGINS DE JAVASCRIPT
======================================-->

  <!--   Core JS Files   -->
  <script src="vistas/dash/assets/js/core/popper.min.js"></script>
  <script src="vistas/dash/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="vistas/dash/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>


  <!--  Notifications Plugin    -->
  <script src="vistas/dash/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Dash Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="vistas/dash/assets/js/material-dashboard.min.js"></script>



  <!-- DataTables  -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/usuarios.js"></script>
  <script src="vistas/js/clientes.js"></script>
  <script src="vistas/js/pqrs.js"></script>
  <script src="vistas/js/reportes.js"></script>
