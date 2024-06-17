<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the boss admin screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
?>

<!-- Image logo -->
<div style=" text-align: center;">
  <img src="views/resources/dist/img/logo_sisreg_.png" alt="Photo">
</div>


<!-- Header content -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1>Bienvenido a la administración:
          <b><?php echo $_SESSION['user_name'] . ' ' . $_SESSION['user_lastname']; ?></b></h1>
      </div>

      <!-- Icon /-->
      <div class="col-sm-6 icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa-solid fa-sliders"></i>
        </ol>
      </div>

    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Content -->
        <div class="card card-outline card-lightblue" style="border-top-color: #0e5b44">

          <!-- Card header -->
          <div class="card-header">

            <!-- Subtitle -->
            <h5 class="card-title" style="font-size: 1.25rem;">
              <i class="fa-solid fa-chart-area"></i>
              <b>Estadísticas</b>
            </h5>

            <!-- Card tools -->
            <div class="card-tools">

              <!-- Refresh button -->
              <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html"
                      data-source-selector="#card-refresh-content" data-load-on-init="false"
                      title="Actualizar">
                <i class="fas fa-sync-alt"></i>
              </button>

              <!-- Maximize button -->
              <button type="button" class="btn btn-tool" data-card-widget="maximize"
                      title="Maximizar"><i class="fas fa-expand"></i>
              </button>

            </div>

          </div>

          <!-- Card body /-->
          <div class="card-body">
            
            <div class="row">
              
              <div class="col-6">
                <div class="card">

                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      Estadísticas de evaluación para:
                      <a href="javascript:void(0);">Reportes De Eventos</a>
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span class="text-bold text-lg">Responsables Tecnólogia (Directivo)</span>
                        <span>Numero de Eventos</span>
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> #
                    </span>
                        <span class="text-muted">Últimos dos meses</span>
                      </p>
                    </div>
                 
                    <div class="position-relative mb-4">
                      <canvas id="events-total1" height="200"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-olive"></i>Este mes
                  </span>
                      <span>
                    <i class="fas fa-square text-gray"></i>Mes pasado
                  </span>


                    </div>
                  </div>

                </div>
              </div>

              <div class="col-6">
                <div class="card">

                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      Estadísticas de evaluación para:
                      <a href="javascript:void(0);">Reportes De Eventos</a>
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span class="text-bold text-lg">Responsables Tecnólogia (Servicio Social)</span>
                        <span>Numero de Eventos</span>
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> #
                    </span>
                        <span class="text-muted">Últimos dos meses</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                      <canvas id="events-total2" height="200"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-orange"></i>Este mes
                  </span>
                      <span>
                    <i class="fas fa-square text-gray"></i>Mes pasado
                  </span>


                    </div>
                  </div>

                </div>
              </div>

              <div class="col-6">
                <div class="card">

                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      Estadísticas de evaluación para:
                      <a href="javascript:void(0);">Reportes De Eventos</a>
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span class="text-bold text-lg">Responsables Evento</span>
                        <span>Numero de Eventos</span>
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> #
                    </span>
                        <span class="text-muted">Últimos dos meses</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                      <canvas id="events-total3" height="200"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i>Este mes
                  </span>
                      <span>
                    <i class="fas fa-square text-gray"></i>Mes pasado
                  </span>


                    </div>
                  </div>

                </div>
              </div>

              <div class="col-6">
                <div class="card">

                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      Estadísticas de evaluacion para :
                      <a href="javascript:void(0);">Reportes De Eventos</a>
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span class="text-bold text-lg">Responsables De Carpeta</span>
                        <span>Eventos Realizados</span>
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> #
                    </span>
                        <span class="text-muted">Últimos dos meses</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                      <canvas id="events-total4" height="200"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-warning"></i>Este mes
                  </span>
                      <span>
                    <i class="fas fa-square text-gray"></i>Mes pasado
                  </span>


                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>

          <!-- Card footer -->
          <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
            <em><?php echo SYSTEM_FULL_NAME; ?> <?php echo SYSTEM_VERSION; ?></em>
          </div>

        </div>

      </div>
    </div>
  </div>

</section>

<!-- jQuery -->
<script src="views/resources/plugins/jquery/jquery.min.js"></script>
<!-- Chart /-->
<script src="views/resources/plugins/chart.js/Chart.min.js"></script>
<!-- Statistics /-->
<script src="views/resources/dist/js/statistics.js"></script>
