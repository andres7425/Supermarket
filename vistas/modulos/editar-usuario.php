<!--=====================================
EDITAR ADMINISTRADOR
======================================-->
<div class="content">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header card-header-success card-header-text">
                <div class="card-text">
                    <i class="material-icons">person_add</i> Editar Administrador
                </div>
            </div>
            <div class="card-body ">
                <form role="form-row" method="post" enctype="multipart/form-data">

                    <?php
                    $item = "id";
                    $valor = $_GET["idUsuario"];

                    $usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
                    ?>

                    <div class="card-header">

                        <h1 class="text-success">Editar Administrador</h1>

                    </div>

                    <!-- ENTRADA PARA EL NOMBRE -->

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombres:</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="<?php echo $usuario["nombre"]; ?>" required>
                            </div>
                        </div>
                    </div>

                    <!-- ENTRADA PARA EL APELLIDO -->

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Apellido:</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" id="editarApellido" name="editarApellido" value="<?php echo $usuario["apellido"]; ?>" required="true">
                            </div>
                        </div>
                    </div>

                    <!-- ENTRADA PARA EL NOMBRE DE USUARIO -->

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Usuario:</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="<?php echo $usuario["usuario"]; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <!-- ENTRADA PARA LA CONTRASEÑA -->

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">
                                <input type="hidden" id="passwordActual" name="passwordActual">
                            </div>
                        </div>
                    </div>

            </div>

            <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-info">Edita Administrador</button>
            </div>

            <?php
            $editarUsuario = new ControladorUsuarios();
            $editarUsuario->ctrEditarUsuario();
            ?>
            </form>
        </div>
    </div> 