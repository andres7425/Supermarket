<?php
error_reporting (0);
$item = null;
$valor = null;

$radicados = ControladorPQRS::ctrRangoFechasPQRS($item, $valor);
$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);


$arrayAdministradores = array();
$arrayListaAdministradores = array();

foreach ($radicados as $key => $valueReportes) {

  foreach ($usuarios as $key => $valueUsuarios) {

    if ($valueUsuarios["id"] == $valueReportes["administrador"]) {

      #Capturamos los Administradores en un array
      array_push($arrayAdministradores, $valueUsuarios["nombre"]);

      #Capturamos las nombres y los valores netos en un mismo array
      $arrayListaAdministradores = array($valueUsuarios["nombre"] => $valueReportes["id"]);

      #Sumamos los netos de cada administrador
      
      foreach ($arrayListaAdministradores as $key => $value) {        
        
        $sumaTotalVendedores[$key] = $sumaTotalVendedores[$key]+1;
        $value++;
      }
    }
  }
}

#Evitamos repetir nombre
$noRepetirNombres = array_unique($arrayAdministradores);

?>


<!--=====================================
ADMINISTRADORES
======================================-->

<div class="col-md-6">
  <div class="card">
    <div class="card-header card-header-icon card-header-rose">
      <div class="card-icon">
        <i class="material-icons">insert_chart</i>
      </div>
      <h4 class="card-title">Administradores con mas Radicados atendidos
        <small>- TOTAL</small>
      </h4>
    </div>
    <div class="card-body">
      <div class="chart" id="bar-chart1" style="height: 300px;"></div>
    </div>
  </div>

  <script>
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart1',
      resize: true,
      data: [

        <?php

        foreach ($noRepetirNombres as $value) {

          echo "{y: '" . $value . "', a: '" . $sumaTotalVendedores[$value] . "'},";
        }

        ?>
      ],
      barColors: ['#0af'],
      xkey: 'y',
      ykeys: ['a'],
      labels: ['Reportes'],
      preUnits: 'No. ',
      hideHover: 'auto'
    });
  </script>