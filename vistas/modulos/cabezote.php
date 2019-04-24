<div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black">
        
        <div class="logo">
            <a href="inicio" class="simple-text logo-mini">
                SP
            </a>
            <a href="inicio" class="simple-text logo-normal">
                SUPERMARKET
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
                        <span>
                            <h3 class="text-center"><?php echo $_SESSION["nombre"]."  " ?>
                                <b class="caret"></b>
                            </h3>
                        </span>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> Mi Perfil </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Editar Perfil </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="salir">
                                    <span class="sidebar-mini"> S </span>
                                    <span class="sidebar-normal"> Salir </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="inicio">
                        <i class="material-icons">dashboard</i>
                        <p> Inicio </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cliente">
                        <i class="material-icons">person</i>
                        <p> Clientes </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pqrs">
                        <i class="material-icons">assignment</i>
                        <p> PQRS </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="usuarios">
                        <i class="material-icons">account_circle</i>
                        <p> Administradores </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="inicio" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Perfil</a>
                                <a class="dropdown-item" href="#">Editar</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Salir</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar --> 