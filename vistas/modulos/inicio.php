<style>
  .dropdown-menu .dropdown-item:focus,
  .dropdown-menu .dropdown-item:hover,
  .dropdown-menu a:active,
  .dropdown-menu a:focus,
  .dropdown-menu a:hover {
    box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(156, 39, 176, .4);
    background-color: #f44336;
    color: #fff;
  }
</style>
<div class="content">
  <div class="card">
    <section class="card-header">

      <h1>

        Tablero

        <small class="text-muted"> Panel de Control</small>

      </h1>

    </section>
  </div>

  <section class="content">

    <div class="row">


      <?php

      include "inicio/cajas-superiores.php";

      ?>

    </div>

    <div class="col-lg-6">

      <?php

      include "inicio/pdf.php";

      ?>

    </div>

    <div class="row">


      <?php

      //include "reportes/grafico-reportes.php";
      ?>

    </div>
    <div class="row">
      <?php
      include "reportes/tipo-de-radicado.php";

      include "reportes/administradores.php";

      ?>
    </div>




    <div class="card-columns col-lg-12">

      <?php

      echo '<div class="box box-success">

             <div class="header-a-logo">

             <h1>Bienvenid@ ' . $_SESSION["nombre"] . '</h1>

             </div>

             </div>';


      ?>

    </div>

</div>

</section>

