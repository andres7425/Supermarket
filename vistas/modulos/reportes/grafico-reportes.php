<?php
$item = null;
$valor = null;

$respuesta = ControladorPQRS::ctrMostrarPQRS($item, $valor);

$arrayFechas = array();
$arrayTipo = array();
$sumaTotalRadicado = array();

foreach ($respuesta as $key => $value) {

  #Capturamos sólo el año-mes-dia
  $fecha = substr($value["fecharadicado"], 0, 10);


  #Introducir las cantidades en arrayFechas
  array_push($arrayFechas, $fecha);

  #Capturamos los reportes
  $arrayTipo = array($fecha => $value["id"]);

  #Contamos los registros que ocurrieron el mismo mes
  foreach ($arrayTipo as $key => $value) {
    
    $sumaTotalRadicado[$key] = $value;

  }
  
}


$noRepetirFechas = array_unique($arrayFechas);


?>

<!--=====================================
GRÁFICO DE VENTAS
======================================-->

<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-icon card-header-info">
      <div class="card-icon">
        <i class="material-icons">timeline</i>
      </div>
      <h4 class="card-title">Gráfico de Reportes
        <small> - Petición, Queja, Reclamo, Sugerencia</small>
      </h4>
    </div>
    <div class="card-body">
      <div id="line-chart-reportes" class="ct-chart">

      </div>

    </div>

    <script>
      var line = new Morris.Line({
        element: 'line-chart-reportes',
        resize: true,
        data: [

          <?php

          if ($noRepetirFechas != null) {

            foreach ($noRepetirFechas as $key) {

              
              echo "{ y: '" . $key . "', reportes: " . $sumaTotalRadicado[$key] . " },";

            }
            
            echo "{y: '" . $key . "', reportes: " . $sumaTotalRadicado[$key] . " }";
          } else {
            
            echo "{ y: '0', reportes: '0' }";
          }
          
          
          ?>

        ],
        xkey: 'y',
        ykeys: ['reportes'],
        labels: ['reportes'],
        lineColors: ['#000'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: '#000',
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ['#000'],
        gridLineColor: '#000',
        gridTextFamily: 'Open Sans',
        preUnits: 'No.',
        gridTextSize: 10
      });
    </script>

  </div>
</div>
</div>