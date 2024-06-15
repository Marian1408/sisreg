<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Template file
   * File description:    Sidebar module of the template
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  # Separates the words corresponding to the name of the controller and the method into an array
  $url = explode ('/', URL);
  # Extract first term of the URL
  $string = $url[0];
?>

<aside class="main-sidebar sidebar-dark-blue elevation-4 sisreg-sidebar-color">


  <!-- Sidebar logo and system name -->
  <div class="user-panel mt-2 pb-1 mb-2 d-flex sisreg-sidebar-user-panel">

    <!-- Sidebar logo -->
    <div class="image sisreg-sidebar-logo">
      <img src="views/resources/dist/img/logo_sisreg.png" class="img-circle elevation-2">
    </div>

    <!-- Sidebar name -->
    <a href="home" class="brand-link sisreg-sidebar-logo-link sisreg-sidebar-name">
      <div class="brand-text text-center">
        <p class="mb-0 sisreg-sidebar-name1">
          <?php echo SYSTEM_SECOND_NAME; ?>
        </p>
        <p class="sisreg-sidebar-name2">
          <?php echo SYSTEM_FIRST_NAME; ?>
        </p>
      </div>
    </a>

  </div>

  <!-- Sidebar username and role -->
  <div class="sidebar">

    <!-- Sidebar image -->
    <div class="user-panel mt-2 pb-1 mb-2 d-flex">
      
      <!-- User logo -->
      <div class="image sisreg-sidebar-user-image">
        <img src="<?php Functions::showUserImage (); ?>"
             class="img-circle elevation-2"
             alt="User Image">
      </div>
      
      <!-- Name and role of the user -->
      <a href="home" class="brand-link sisreg-sidebar-logo-link sisreg-sidebar-name-role">
        <div class="brand-text text-center">
          
          <!-- Name -->
          <p class="mb-0 mt-1">
            <?php echo $_SESSION['user_name']; ?>
          </p>
          
          <!-- Role -->
          <p>
            <b><?php echo $_SESSION['user_role_name']; ?></b>
          </p>
          
        </div>
      </a>

    </div>

    <!-- Menu options -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Home option ------------------------------------------------------------------------------------------- -->
        <li class="nav-item ">
          <a href="home"
             class="nav-link <?php Functions::menuActive ('menuActiveItem', $string, 'home'); ?> ">
            <i class="nav-icon fas fa-home"></i>
            <p>
              <?php echo 'Inicio'; ?>
            </p>
          </a>
        </li>

        <!-- User options ------------------------------------------------------------------------------------------ -->
        <li class="nav-item <?php Functions::menuActive ('menuOpened', $string, 'user'); ?>">
          <a href="" class="nav-link <?php Functions::menuActive ('menuOpenedActive', $string, 'user') ?> ">
            <i class="nav-icon fas fa-users"></i>
            <p>
              <?php echo 'Usuarios'; ?>
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            
            <?php if ($_SESSION['user_role_name'] == 'Administrador'): ?>
              <!-- User View All Option -->
              <li class="nav-item">
                <a href="viewAllUsers"
                   class="nav-link <?php Functions::menuActive ('menuActiveItem', $string, 'userViewAll') ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo 'Ver usuarios'; ?></p>
                </a>
              </li>

              <!-- User Add New Option -->
              <li class="nav-item">
                <a href="addUser"
                   class="nav-link <?php Functions::menuActive ('menuActiveItem', $string, 'userAddNew') ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo 'Añadir nuevo'; ?></p>
                </a>
              </li>
            
            <?php endif; ?>

            <!-- User View Profile Option -->
            <li class="nav-item">
              <a href="viewProfile"
                 class="nav-link <?php Functions::menuActive ('menuActiveItem', $string, 'userViewProfile') ?>">
                <i class="far fa-circle nav-icon"></i>
                <p><?php echo 'Perfil'; ?></p>
              </a>
            </li>


          </ul>
        </li>


        <!-- Event logs options ------------------------------------------------------------------------------------------ -->
        <li class="nav-item <?php Functions::menuActive ('menuOpened', $string, 'event'); ?>">
          <a href="" class="nav-link <?php Functions::menuActive ('menuOpenedActive', $string, 'event') ?> ">
            <i class="nav-icon fas fa-calendar-days"></i>
            <p>
              <?php echo 'Eventos'; ?>
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            
            <?php if ($_SESSION['user_role_name'] == 'Administrador'): ?>
              <!-- Event View All Option -->
              <li class="nav-item">
                <a href="viewAllEvents"
                   class="nav-link <?php Functions::menuActive ('menuActiveItem', $string, 'eventViewAll') ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo 'Ver eventos'; ?></p>
                </a>
              </li>

              <!-- Event Add New Option -->
              <li class="nav-item">
                <a href="addEvent"
                   class="nav-link <?php Functions::menuActive ('menuActiveItem', $string, 'eventAddNew') ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo 'Añadir evento'; ?></p>
                </a>
              </li>
            
            <?php endif; ?>

          </ul>
        </li>


        <!-- About option ------------------------------------------------------------------------------------------ -->
        <li class="nav-item">
          <a href="about" class="nav-link <?php Functions::menuActive ('menuActiveItem', $string, 'about') ?> ">
            <i class="nav-icon fas fa-circle-info"></i>
            <p><?php echo 'Acerca de..'; ?></p>
          </a>
        </li>

      </ul>

    </nav>

  </div>

</aside>