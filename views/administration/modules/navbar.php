<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Template file
   * File description:    Navbar module of the template.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once ('controllers/controllerUser.php');
  require_once ('controllers/controllerEvent.php');
  
  $userObject = new ControllerUser();
  $userTotal = $userObject->getAllUsersTotal ();
  
  //print_r ($_SESSION);
  
  $eventObject = new ControllerEvent();
  $eventsTotal = $eventObject->getAllEventsTotalWithUserId ($_SESSION['user_id']);

?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

  <!-- Left navbar /-->
  <ul class="navbar-nav">
    
    <!-- Collapse sidebar button -->
    <li class="nav-item">
      <a class="nav-link"
         data-widget="pushmenu"
         href="#"
         role="button"
         title="Colapsar">
        <i class="fas fa-bars"></i>
      </a>
    </li>

  </ul>

  <!-- Right navbar /-->
  <ul class="navbar-nav ml-auto">

    <!-- User menu -->
    <li class="nav-item dropdown">

      <!-- User image -->
      <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true" style="padding: 0px;">
        <img src="<?php Functions::showUserImage (); ?>"
             class="img-circle elevation-2"
             alt="User Image"
             style="width: 33px;"
             title="Ver detalles"
        >
      </a>

      <div class="dropdown-menu dropdown-menu dropdown-menu-right" style="left: inherit; right: 0px;">

        <!-- Full name user/-->
        <a href="userViewProfile"
           class="dropdown-item"
           style="text-align: center; font-size: 16px;"
           title="Usuario">
          <?php echo $_SESSION['user_name'] ?><br>
          <b><?php
              echo $_SESSION['user_role_name']; ?></b>
        </a>

        <div class="dropdown-divider"></div>

        <!-- Profile link option /-->
        <a href="userViewProfile"
           class="dropdown-item dropdown-item-text"
           style="padding-top: 0px;padding-bottom: 0px; text-align: left;"
           title="Ver perfil">
          <i class="fas fa-id-card mr-2"></i>Perfil</a>

        <div class="dropdown-divider"></div>

        <!-- Destroy session option /-->
        <a href="#" class="dropdown-item dropdown-item-text"
           onclick="location.href='sessions/destroySession.php';"
           style="padding-top: 0px; padding-bottom: 0px; text-align: left;"
           title="Cerrar sesión">
          <i class="fas fa-sign-out mr-2"></i> Cerrar sesión</a>

      </div>

    </li>

    <!-- Events menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#" title="Notificaciones">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">
          <?php echo $eventsTotal; ?>
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header"> <?php echo $eventsTotal; ?> Eventos</span>
        
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-calendar-days mr-2"></i> 4 eventos asignados
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>

      </div>
    </li>

    <!-- Fullscreen button -->
    <li class="nav-item">
      <a class="nav-link"
         data-widget="fullscreen"
         href="#"
         role="button"
         title="Pantalla completa">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>

  </ul>

</nav>