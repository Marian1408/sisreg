<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the about screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
?>

<!-- Header /-->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Acerca de..</b></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa fa-circle-info"></i>
        </ol>
      </div>

    </div>
  </div>
</section>

<!-- Content /-->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Content -->
        <div class="card card-outline card-olive">

          <!-- Card header /-->
          <div class="card-header">

            <!-- Subtitle -->
            <h5 class="card-title">
              <i class="fa-solid fa-circle-info"></i>
              <b>Acerca del sistema</b>
            </h5>

            <!-- Card tools -->
            <div class="card-tools">

              <!-- Minimize button -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse"
                      title="Minimizar">
                <i class="fas fa-minus"></i>
              </button>

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

            <!-- SISREG | Sistema de Registro /-->
            <div class="callout callout-success">
              <h5 class="cltm-card-subtitle-1">
                <i class="fa-solid fa-window-restore"></i>
                 Acerca de SISREG / Sistema de Registro
              </h5>
              <hr>
              <div class="card-body text-center">
                <img src="views/resources/dist/img/logo_sisreg.png"
                     alt="SISREG / Sistema de Registro"
                     style="height:250px;"
                     title="SISREG / Sistema de Registro">
                <br><br>
                <p style="font-size: 1.5rem;"><b> SISREG</b></p>
                <hr>
                <p style="font-size: 1.2rem;">Sistema de Registro</p>
                <p>Sistema para el registro de eventos y actividades del Poder Judicial del Estado de Veracruz y la
                  Escuela Judicial del Estado de Veracruz</p>
              </div>
            </div>

            <!-- Build with /-->
            <div class="callout callout-success">
              <h5 class="cltm-card-subtitle-1">
                <i class="fa-solid fa-gear"></i>
                Construido con
              </h5>
              <p>Este proyecto está construido con las siguientes tecnologías:</p>
              <hr>
              <!-- Programming Languages -->
              <i class="fa-solid fa-code"></i>
              Lenguajes de programación
              <ul>
                <li class="cltm-li"><a href="https://www.php.net/">PHP 8.2</a></li>
                <li class="cltm-li"><a href="https://developer.mozilla.org/es/docs/Web/JavaScript">JavaScript</a></li>
              </ul>

              <!-- Theme -->
              <i class="fa-solid fa-code"></i>
              <b>Tema</b>
              <ul>
                <li class="cltm-li"><a href="https://adminlte.io/">AdminLTE 3.1.0</a></li>
              </ul>

              <!-- Frameworks -->
              <i class="fa-solid fa-code"></i> <b>Frameworks</b>
              <ul>
                <li class="cltm-li"><a class="cltm-callout" href="https://getbootstrap.com/"> Bootstrap 4.6</a></li>
              </ul>

              <!-- Libraries -->
              <i class="fa-solid fa-code"></i> <b>Bibliotecas </b>
              <ul>
                <li class="cltm-li"><a class="cltm-callout" href="https://jquery.com/">jQuery 3.5.1+y</a></li>
                <li class="cltm-li"><a class="cltm-callout" href="https://floating-ui.com/?utm_source=popper.js.org">Popper.js
                    1.16.1+</a>
                </li>
                <li class="cltm-li"><a class="cltm-callout" href="https://datatables.net/">DataTables</a></li>
              </ul>

              <!-- Icons packs -->
              <i class="fa-solid fa-code"></i> <b>Paquetes de iconos </b>
              <ul>
                <li class="cltm-li"><a class="cltm-callout" href="https://fontawesome.com/">FontAwesome 5</a></li>
                <li class="cltm-li"><a class="cltm-callout" href="https://ionic.io/ionicons">Ionicons</a></li>
                <li class="cltm-li"><a class="cltm-callout" href="https://github.com/lipis/flag-icons#readme">Flag-Icons-CSS</a>
                </li>
              </ul>

              <!-- Notifications -->
              <i class="fa-solid fa-code"></i> <b>Notificaciones </b>
              <ul>
                <li class="cltm-li"><a class="cltm-callout" href=https://sweetalert2.github.io/">SweetAlert2</a></li>
              </ul>

              <!-- Form elements -->
              <i class="fa-solid fa-code"></i> <b>Elementos de formulario </b>
              <ul>
                <li class="cltm-li"><a class="cltm-callout" href="https://select2.org/">Select2</a></li>
              </ul>
            </div>

            <!-- Versioned -->
            <div class="callout callout-success">
              <h5 class="cltm-card-subtitle-1">
                <i class="fa-solid fa-code-branch"></i>
                Version
              </h5>
              <hr>
              <ul>
                <li class="cltm-li"><a class="cltm-callout" href="github.com/gcamarenaprog/cltm">Version 1.0.0 | May
                    2024</a></li>
              </ul>
            </div>

            <!-- Author -->
            <div class="callout callout-success">
              <h5 class="cltm-card-subtitle-1">
                <i class="fa-regular fa-circle-user"></i>
                Autor
              </h5>
              <p>María Marina Vázquez Hernández</p>
              <hr>
              <dl class="row">
                <dt class="col-sm-1">E-mail</dt>
                <dd class="col-sm-11"><a href="mailto:mia140898@gmail.com">
                    mia140898@gmail.com</a></dd>
              </dl>

            </div>

          </div>

          <!-- Card footer -->
          <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
            <em><?php echo SYSTEM_FULL_NAME; ?></em>
          </div>

        </div>

      </div>
    </div>
  </div>

</section>