<?php

//TRAEMOS LA INFORMACION DEL RADICADO

$itemRadicado = null;
$valorRadicado = null;

$radicado = ControladorPQRS::ctrMostrarPQRS($itemRadicado, $valorRadicado);

$totalRadicados = count($radicado);

$totalRadicadosJ = ControladorPQRS::ctrMostrarPQRSJustificados();
$totalRadicadosJustifiacados = count($totalRadicadosJ);


$item = null;
$valor = null;

//TRAEMOS LA INFORMACION DEL CLIENTE

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

//TRAEMOS LA INFORMACION DEL ADMINISTRADOR

$usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
$totalUsuarios = count($usuario);


?>

<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
                <i class="material-icons">person</i>
            </div>
            <p class="card-category">Clientes</p>
            <h3 class="card-title"><?php echo number_format($totalClientes) ?></h3>
        </div>
        <div class="card-footer">
            <div class="stats text-uppercase">
                <i class="material-icons">arrow_forward</i>
                <a class="text-gray" href="cliente">Mas info...</a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
                <i class="material-icons">assignment</i>
            </div>
            <p class="card-category">Radicados</p>
            <h3 class="card-title"><?php echo number_format($totalRadicados) ?></h3>
        </div>
        <div class="card-footer">
            <div class="stats text-uppercase">
                <i class="material-icons">arrow_forward</i>
                <a class="text-gray" href="pqrs">Mas info...</a>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                <i class="material-icons">equalizer</i>
            </div>
            <p class="card-category">Radicados Atendidos</p>
            <h3 class="card-title"><?php echo number_format($totalRadicadosJustifiacados) ?></h3>
        </div>
        <div class="card-footer">
            <div class="stats text-uppercase">
                <i class="material-icons">arrow_forward</i>
                <a class="text-gray" href="pqrs">Mas info...</a>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
            <i class="material-icons">account_circle</i>
            </div>
            <p class="card-category">Administradores</p>
            <h3 class="card-title"><?php echo number_format($totalUsuarios) ?></h3>
        </div>
        <div class="card-footer">
            <div class="stats text-uppercase">
                <i class="material-icons">arrow_forward</i>
                <a class="text-gray" href="usuarios">Mas info...</a>
            </div>
        </div>
    </div>
</div>