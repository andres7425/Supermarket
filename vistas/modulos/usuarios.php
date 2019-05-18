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

</div>