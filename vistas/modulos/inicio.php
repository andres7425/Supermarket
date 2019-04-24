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

</div>
</div>