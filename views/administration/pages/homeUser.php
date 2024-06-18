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
  
  //print_r ($_SESSION);
  
  $eventObject = new ControllerEvent();
  $events = $eventObject->getAllEventsWithId ($_SESSION['user_id']);


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

<!-- Content /-->
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
              <i class="fa-solid fa-list-check"></i>
              <b>Lista de eventos</b>
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

              <!-- TO DO List -->
              <div class="card col-12" style="padding: 0px;">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    Eventos asignados
                  </h3>

                  <div class="card-tools">
                    <ul class="pagination pagination-sm">
                      <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                      <li class="page-item"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <ul class="todo-list" data-widget="todo-list">
                    
                    <?php
                      
                      foreach ($events as $row) { ?>


                        <li>
                          <!-- drag handle -->
                          <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                          <!-- checkbox -->
                          <div class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo1" id="todoCheck1">
                            <label for="todoCheck1"></label>
                          </div>

                          <!-- todo text -->
                          <span class="text"> <?php echo $row["event_name_of_activity"]; ?></span>
                          
                          <?php
                            $fechaFin = $row["event_date_event_date"];
                            $fechaFin = date ("Y-m-d h:i:s", strtotime ($fechaFin));
                            $fechaInicio = date ("Y-m-d h:i:s");
                            $fechaInicio = new DateTime($fechaInicio);
                            $fechaFin = new DateTime($fechaFin);
                            $intervalo = $fechaInicio->diff ($fechaFin);
                          ?>
                          <?php
                            echo ' <small class="badge badge-danger">
                                <i class="far fa-clock"></i> Falta:
                                ' . $intervalo->y . '  años,  ' . $intervalo->m . ' meses,  ' . $intervalo->d . ' dias, " ' . $intervalo->h . ' horas,  ' . $intervalo->i . ' minutos,  ' . $intervalo->s . ' segundos
                              </small>';
                          ?>

                          <span class="text">           <form action="eventDetails" method="post" id="formButtonEventView">
                            <input type="hidden"
                                   name="eventData"
                                   id="eventData"
                                   value="<?php echo $row["event_id"]; ?>">
                       
                              <button type="submit"
                                      class="btn btn btn-flat "
                                      title="Ver evento">
                                <i class="fas fa-regular fa-eye"></i>
                              </button>
                          </form></span>
                          
                          <!-- General tools such as edit or delete-->
                
                          
                     

                        </li>
                      
                      
                      <?php }
                    
                    ?>

                  </ul>
                </div>

              </div>

            </div>

          </div>

          <!-- Card footer -->
          <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
            <em><?php echo SYSTEM_FULL_NAME; ?><?php echo SYSTEM_VERSION; ?></em>
          </div>

        </div>

      </div>
    </div>
  </div>

</section>




