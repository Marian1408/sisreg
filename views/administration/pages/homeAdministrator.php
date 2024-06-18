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
  
  require_once ('controllers/controllerUser.php');
  require_once ('controllers/controllerEvent.php');
  
  $userObject = new ControllerUser();
  $userTotal = $userObject->getAllUsersTotal ();
  
  $eventObject = new ControllerEvent();
  $eventTotal = $eventObject->getAllEventsTotal ();
?>

<!-- Header /-->
<div class="content-header">
  <div class="container-fluid">

    <!-- Image logo -->
    <div style="margin: 20px; text-align: center;">
      <img src="views/resources/dist/img/logo_sisreg_.png" alt="Photo">
    </div>

    <div class="row mb-2">

      <!-- Title /-->
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
</div>

<!-- Content -->
<section class="content">
  <div class="container-fluid">

    <!-- Counters and fast access -->
    <div class="card ">

      <!-- Card body -->
      <div class="card-body">

        <!-- Counters -->
        <div class="row">

          <!-- Title -->
          <div class="col-12">
            <h5 class="cltm-card-title mb-2"><b>Contadores</b></h5>
          </div>

          <!-- Users count -->
          <div class="col-lg-4 col-md-6">
            <div class="small-box bg-gradient-green">
              <div class="inner">
                <h3><?php echo $userTotal; ?></h3>
                <h4>Usuarios</h4>
              </div>
              <div class="icon">
                <i class="fa fa-users cltm-icon-counters" style="font-size: 55px;" aria-hidden="true"></i>
              </div>
              <a href="userViewAllUsers"
                 class="small-box-footer" title="Más información">Más información
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <!-- Events count -->
          <div class="col-lg-4 col-md-6">
            <div class="small-box bg-gradient-green">
              <div class="inner">
                <h3><?php echo $eventTotal; ?></h3>
                <h4>Eventos</h4>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-calendar-days"></i>
              </div>
              <a href="eventAllEvents" class="small-box-footer"
                 title="Más información">Más información
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <!-- Crafts count -->
          <div class="col-lg-4 col-md-6">
            <div class="small-box bg-gradient-green">
              <div class="inner">
                <h3>11</h3>
                <h4>Oficios</h4>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-solid fa-file-signature"></i>
              </div>
              <a href="craftList" class="small-box-footer"
                 title="Más información">Más información
                <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

        </div>

        <hr>
   
      </div>

    </div>

    <!-- Build with and about us -->
    <div class="row">

      <!-- About us card -->
      <div class="col-md-6">
        <div class="card card-widget">

          <!-- Body card -->
          <div class="card-body text-center" style="display: block;">
            
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
                <p>Sistema para el registro de eventos y actividades del Poder Judicial del Estado de Veracruz y la Escuela Judicial del Estado de Veracruz</p>

              </div>
            </div>

          </div>

        </div>
      </div>

      <!-- Build with card -->
      <div class="col-md-6">
        <div class="card card-default">

          <!-- Body card -->
          <div class="card-body">
            
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
              <b>Lenguajes de programación</b>
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
                <li class="cltm-li"><a class="cltm-callout" href="https://floating-ui.com/?utm_source=popper.js.org">Popper.js 1.16.1+</a>
                </li>
                <li class="cltm-li"><a class="cltm-callout" href="https://datatables.net/">DataTables</a></li>
              </ul>

              <!-- Icons packs -->
              <i class="fa-solid fa-code"></i> <b>Paquetes de iconos </b>
              <ul>
                <li class="cltm-li"><a class="cltm-callout" href="https://fontawesome.com/">FontAwesome 5</a></li>
                <li class="cltm-li"><a class="cltm-callout" href="https://ionic.io/ionicons">Ionicons</a></li>
                <li class="cltm-li"><a class="cltm-callout" href="https://github.com/lipis/flag-icons#readme">Flag-Icons-CSS</a></li>
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
            
          </div>

        </div>
      </div>

    </div>

  </div>
</section>






