<?php

$tabla = "radicador_reportes";
$totalReportes = ControladorPQRS::ctrMostrarTotalRadicado($tabla);

?>

<div class="col-md-5">
  <div class="card card-chart">
    <div class="card-header card-header-icon card-header-danger">
      <div class="card-icon">
        <i class="material-icons">pie_chart</i>
      </div>
      <h4 class="card-title">Total Petición, Queja, Reclamo, Sugerencia</h4>
    </div>
    <div class="card-body">
      <canvas id="mycanvas" width="256" height="256"> </canvas>

    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-md-12">
          <h6 class="card-category">Legend</h6>
        </div>
        <div class="col-md-12">
          <i class="fa fa-circle text-info"></i> Petición
          <i class="fa fa-circle text-warning"></i> Sugerencia
          <i class="fa fa-circle text-danger"></i> Reclamo
          <i class="fa fa-circle text-success"></i> Queja
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    var ctx = $("#mycanvas").get(0).getContext("2d");

    //pie chart data
    //sum of values = 360
    var data = [
      <?php
      echo "{
						value:'".$totalReportes[0]["total"]."',
						color: 'cornflowerblue',
						highlight: 'lightskyblue',
						label: '".$totalReportes[0]["descripcion"]."'
					},
					{
						value:'".$totalReportes[1]["total"]."',
						color: 'lightgreen',
						highlight: 'yellowgreen',
						label: '".$totalReportes[1]["descripcion"]."'
          },
          {
						value:'".$totalReportes[2]["total"]."',
						color: '#DF0101',
						highlight: '#FA5858',
						label: '".$totalReportes[2]["descripcion"]."'
					},
					{
						value:'".$totalReportes[3]["total"]."',
						color: 'orange',
						highlight: 'darkorange',
						label: '".$totalReportes[3]["descripcion"]."'
          }"

      ?>
    ];

    var pieOptions = {
      // Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      // String - The colour of each segment stroke
      segmentStrokeColor: '#fff',
      // Number - The width of each segment stroke
      segmentStrokeWidth: 1,
      // Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      // Number - Amount of animation steps
      animationSteps: 100,
      // String - Animation easing effect
      animationEasing: 'easeOutBounce',
      // Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      // Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      // Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: false,
      // String - A legend template
      legendTemplate: '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
      // String - A tooltip template
      tooltipTemplate: '<%=value %> <%=label%>'
    };

    //draw
    var piechart = new Chart(ctx).Pie(data);
  });
</script>