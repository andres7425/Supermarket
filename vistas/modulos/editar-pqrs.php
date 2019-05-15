<!--=====================================
EDITAR PQRS
======================================-->
<div class="content">

    <div class="col-md-12">
        <div class="card ">
            <div class="card-header card-header-success card-header-text">
                <div class="card-text">
                    <i class="material-icons">assignment</i> Administrar Radicado
                </div>
            </div>
            <div class="card-body ">
                <form  role="form-row" method="post">

                    <?php
                    $item = "id";
                    $valorRadicado = $_GET["idPQRS"];
                    $valorCliente = $_GET["idCliente"];

                    $radicado = ControladorPQRS::ctrMostrarPQRS($item, $valorRadicado);

                    $cliente = ControladorClientes::ctrMostrarClientes($item, $valorCliente);

                    ?>

                    <div class="card-header">

                        <h1 class="text-success">Editar Radicado</h1>

                    </div>

                    <!-- ENTRADA PARA EL ID REPORTE -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Numero De Radicado:</label>
                                <input type="text" class="form-control " id="editarPQRS" name="editarPQRS" style="background-color: unset;" value="<?php echo $radicado["id"]; ?>" readonly>
                            </div>
                        </div>

                        <!-- ENTRADA PARA LA FECHA -->

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Fecha De Radicado:</label>
                                <input type="text" class="form-control " id="editarFechaRadicado" name="editarFechaRadicado" value="<?php echo $radicado["fecharadicado"]; ?>" disabled>
                            </div>
                        </div>

                        <!-- ENTRADA PARA LA IDENTIFICACION DEL CLIENTE -->


                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Documento:</label>
                                <input type="text" class="form-control " id="editarIdRadicador" name="editarIdRadicador" value="<?php echo $cliente["id_cliente"]?> " required="true" disabled>
                            </div>
                        </div>

                    </div>

                    <!-- ENTRADA PARA EL CORREO DEL CLIENTE -->

                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="bmd-label-floating">Correo:</label>
                                <input type="text" class="form-control " id="editarcorreoCliente" style="background-color: unset;" name="editarcorreoCliente" value="<?php echo $cliente["correo"]; ?>" readonly>
                            </div>
                        </div>


                        <!-- ENTRADA PARA EL TELEFONO DEL CLIENTE -->

                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="bmd-label-floating">Teléfono:</label>
                                <input type="text" class="form-control " id="editarTelefono" name="editarTelefono" value="<?php echo $cliente["telefono"]; ?>" disabled>
                            </div>
                        </div>

                        <!-- ENTRADA PARA EL NOMBRE -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nombre:</label>
                                <input type="text" class="form-control " id="editarIdRadicador" name="editarIdRadicador" value="<?php echo $cliente["nombre"];
                                                                                                                                    echo ' ';
                                                                                                                                    echo $cliente["apellido"]; ?>" required="true" disabled>
                            </div>
                        </div>

                    </div>

                    <!-- ENTRADA PARA EL ANEXO -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Anexo:</label>
                                <input type="file" class="form-control " id="editarAnexo" name="editarAnexo"  value="<?php echo $radicado["anexo"]; ?>" >
                            </div>
                        </div>

                        <!-- ENTRADA PARA LOS COMENTARIOS -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Comentarios:</label>
                                <textarea cols="30" rows="5" class="form-control " id="editarComentarios" style="background-color: unset;" name="editarComentarios" readonly><?php echo $radicado["comentarios"]; ?></textarea>
                            </div>
                        </div>
                    </div>


                    <!-- ENTRADA PARA TIPO -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating text-center">Tipo:</label>
                                <input type="text" class="form-control " id="editarTipopqrs" name="editarTipopqrs" style="background-color: unset;" value="<?php echo $radicado["tipopqrs"]; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- ENTRADA PARA ESTADO -->

                    <div class="row">
                        <!-- ENTRADA PARA EL ESTADO -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Estado:</label>
                                <div class="col-lg-5 col-md-6 col-sm-3">
                                    <select class="btn btn-secondary dropdown-toggle" id="editarEstadoRadicado" name="editarEstadoRadicado" data-style="btn btn-primary btn-round" title="Single Select" value="<?php echo $radicado["estadoradicado"]; ?>">
                                        <option value="Radicado">Radicado</option>
                                        <option value="En estudio">En estudio</option>
                                        <option value="Resuelto">Resuelto</option>
                                        <option value="No aceptado">No aceptado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- ENTRADA PARA LA JUSTIFICACION -->
                        <div class="col-md-12">
                            <div class="form-group has-success">
                                <label>Justificación:</label>
                                <div class="form-group">
                                    <label class="bmd-label-floating">Por favor escribir una Justificación breve del causal de cambio de estado de radicado</label>
                                    <textarea class="form-control " id="editarJustificacion" name="editarJustificacion" rows="5"><?php echo $radicado["justificacion"]; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" class="form-control " id="editarAdministrador" name="editarAdministrador" value="<?php echo $_SESSION["id"]; ?>" readonly>
            </div>

            <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-info">Editar Radicado</button>
            </div>

            <?php
            $editarPQRS = new ControladorPQRS();
            $editarPQRS->ctrEditarPQRS();
            ?>
            </form>
        </div>
    </div>