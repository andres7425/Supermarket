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