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
                            <i class="material-icons">account_circle</i>
                        </div>
                        <h2 class="card-title ">Administradores</h2>
                        <a href="crear-usuario">

                            <button class="btn btn-warning btn-outline-warning col-4 btnCrearUsuario" style="font-size:large; 
                                    border-radius: 39.2rem;">
                                <i class="material-icons">person_add</i> Agregar Administrador
                            </button>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables" style="display: list-item;">
                            <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatables" class="table table-striped table-no-bordered dt-responsive table-hover dataTable dtr-inline tablas" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">

                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Usuario</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Nombre</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Apellido</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Estado</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 151px;">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">#</th>
                                                    <th rowspan="1" colspan="1">Usuario</th>
                                                    <th rowspan="1" colspan="1">Estado</th>
                                                    <th rowspan="1" colspan="1">Nombre</th>
                                                    <th rowspan="1" colspan="1">Apellido</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php

                                                $item = null;
                                                $valor = null;

                                                $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                                                foreach ($usuarios as $key => $value) {

                                                    echo ' <tr>
                                                  <td>' . $value["id"] . '</td>
                                                  <td>' . $value["usuario"] . '</td>
                                                  <td>' . $value["nombre"] . '</td>
                                                  <td>' . $value["apellido"] . '</td>';

                                                    if ($value["estado"] != 0) {
                                                        echo '<td><button class="btn btn-success btn-sm btn-simple btnActivar" idUsuario="' . $value["id"] . '" estadoUsuario="0">Activado</button></td>';
                                                    } else {
                                                        echo '<td><button class="btn btn-danger btn-sm btn-simple btnActivar" idUsuario="' . $value["id"] . '" estadoUsuario="1">Desactivado</button></td>';
                                                    }

                                                    echo '
                          <td>

                            <div class="btn-group text-right " rowspan="1" colspan="1">

                            <button class="btn btn-warning btn-link btn-icon btn-sm btnEditarUsuario text-right"  rowspan="1" colspan="1" name="btnEditarUsuario" idUsuario="' . $value["id"] . '" >
                              <i class="fa fa-edit"></i>
                            </button>

                            <button class="btn btn-danger btn-link btn-icon btn-sm btnEliminarUsuario text-right"  rowspan="1" colspan="1" idUsuario="' . $value["id"] . ' usuario="' . $value["usuario"] . '">
                              <i class="fa fa-times"></i>
                            </button>
                            </div>  

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
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php

    $borrarUsuario = new ControladorUsuarios();
    $borrarUsuario->ctrBorrarUsuario();

    ?>

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

</div>