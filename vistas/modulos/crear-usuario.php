<!--=====================================
AGREGAR ADMINISTRADOR
======================================-->
<div class="content">
    <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-success card-header-text">
                    <div class="card-text">
                        <i class="material-icons">person_add</i> Agregar Administrador
                    </div>
                </div>
                <div class="card-body ">
                <form role="form-row" method="post" enctype="multipart/form-data">

                <div class="card-header">

                    <h1 class="text-success">Agregar Administrador</h1>

                </div>

                <!-- ENTRADA PARA EL NOMBRE -->

                <div class="row">
                        <label class="col-sm-2 col-form-label">Nombres:</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombres" required="true" />
                            </div>
                        </div>
                    </div>

                    <!-- ENTRADA PARA EL APELLIDO -->

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Apellido:</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="nuevoApellido" placeholder="Ingresar Apellidos" required="true" />
                            </div>
                        </div>
                    </div>

                    <!-- ENTRADA PARA EL NOMBRE DE USUARIO -->

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Usuario:</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Nombre de Usuario (El nombre de usuario no se podra cambiar)" required="true" />
                            </div>
                        </div>
                    </div>
                    <!-- ENTRADA PARA LA CONTRASEÑA -->

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required="true" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-info">Guardar
                        Administrador</button>
                </div>

                <?php

                $crearUsuario = new ControladorUsuarios();
                $crearUsuario->ctrCrearUsuario();

                ?>

            </form>
    </div>
</div> 

