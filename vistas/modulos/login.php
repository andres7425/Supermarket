<body class="login">
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" filter-color="green" style="background-image: url('../../../supermarketpqrs/vistas/img/plantilla/login.jpg'); background-size: cover; background-position: top center;">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <form class="form" method="post">
                            <div class="card card-login card-hidden">
                                <div class="card-header card-header-success text-center">
                                    <h4 class="card-title">Inicio de Sesión</h4>
                                </div>
                                <div class="card-body ">
                                    <p class="card-description text-center">Ingrese sus datos</p>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
                                        </div>
                                    </span>
                                    <span class="bmd-form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
                                        </div>
                                    </span>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-outline-warning pull-left">Ingresar</button>
                                </div>
                            </div>
                            <?php

                            $login = new ControladorUsuarios();
                            $login->ctrIngresoUsuario();

                            ?>
                        </form>
                    </div>
                </div>

            </div>
            <footer>
                <a href="https://www.freepik.es/fotos-vectores-gratis/tecnologia">Foto de tecnología creado por freepik - www.freepik.es</a>
            </footer>
</body> 