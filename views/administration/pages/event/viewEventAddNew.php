<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the add new event screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once ('controllers/controllerActivities.php');
  require_once ('controllers/controllerModality.php');
  require_once ('controllers/controllerUser.php');
  
  $objectModality = new ControllerModality();
  $objectActivities = new ControllerActivities('activities1', '1');
  $objectUser = new ControllerUser();
  
  $allUsers = $objectUser->getAllUsersWithRole (3);
  $modalities = $objectModality->getAllModality ();
  
  $activities1 = $objectActivities->getAllActivities ('1');
  $activities2 = $objectActivities->getAllActivities ('2');
  $activities3 = $objectActivities->getAllActivities ('3');

?>

<!-- Header /-->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Añadir evento</b></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 sisreg-icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa-solid fa-calendar-plus"></i>
        </ol>
      </div>

    </div>
  </div>
</div>

<!-- Content /-->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="card card-olive card-outline mb-3">

          <form action="controllers/controllerEvent.php"
                enctype="multipart/form-data"
                method="post"
                id="addNewEventForm"
                name="addNewEventForm">

            <!-- Card header -->
            <div class="card-header sisreg-card-header">

              <!-- Subtitle -->
              <h5 class="card-title sisreg-color-white">
                <i class="fa-solid fa-calendar-plus"></i>
                <b>Logística de la realización del evento</b>
              </h5>

              <!-- Card buttons -->
              <div class="card-tools">

                <!-- Clean form button -->
                <button type="button"
                        class="btn btn-tool"
                        data-card-widget="card-refresh"
                        data-source="userAddNew"
                        data-source-selector="#card-refresh-content"
                        data-load-on-init="false"
                        onclick="resetLogisticsPriorEvent()"
                        title="Limpiar formulario">
                  <i class="fa-solid fa-eraser"></i>
                </button>

                <!-- Minimize button -->
                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="<?php echo 'Minimizar'; ?>">
                  <i class="fas fa-minus"></i>
                </button>

                <!-- Maximize button -->
                <button type="button" class="btn btn-tool" data-card-widget="maximize"
                        title="<?php echo 'Maximizar'; ?>">
                  <i class="fas fa-expand"></i>
                </button>

              </div>

            </div>

            <!-- Card body -->
            <div class="card-body p-1">
              <div class="row">

                <!-- Body card -->
                <div class="card-body">

                  <div class="row">

                    <!-- Logistics prior to the event /-->
                    <div class="col-md-12">
                      <div class="card card-olive card-outline sisreg-card-outline">

                        <!-- Card header -->
                        <div class="card-header">

                          <!-- Title -->
                          <h5 class="card-title">
                            <i class="fa-solid fa-calendar-plus"></i>
                            <b>Logística previa a la realización del evento</b>
                          </h5>

                        </div>

                        <!-- Card body /-->
                        <div class="card-body">

                          <div class="row">

                            <!-- Activity data card -->
                            <div class="col-md-12">
                              <div class="card card-olive card-outline sisreg-card-outline">

                                <!-- Card header -->
                                <div class="card-header">

                                  <!-- Activity data title -->
                                  <h5 class="card-text">
                                    <i class="fa-solid fa-list-check"></i>
                                    Datos de la actividad
                                  </h5>

                                </div>

                                <!-- Card body /-->
                                <div class="card-body">

                                  <!-- Name of activity -->
                                  <div class="form-group">
                                    <label for="inputNameOfActivity">
                                      <h5 class="sisreg-card-subtitle">
                                        <b> <i class="fa-solid fa-check"></i>
                                          Nombre de la actividad
                                        </b>
                                      </h5>
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           id="inputNameOfActivity"
                                           name="inputNameOfActivity"
                                           placeholder="Nombre de la actividad.."
                                           required
                                           title="Escribe el nombre de la actividad">
                                    <div id="inputNameOfActivityHelp" class="sisreg-form-help">Escribe el nombre
                                      de la
                                      actividad
                                    </div>
                                  </div>

                                  <hr class="sisreg-hr">

                                  <!-- Activity type -->
                                  <div class="row">

                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <h5 class="sisreg-card-subtitle">
                                          <b> <i class="fa-solid fa-check"></i>
                                            Tipo de actividad
                                          </b>
                                        </h5>
                                      </div>
                                    </div>

                                    <!-- Activity type 1 /-->
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <select class="form-control"
                                                id="selectActivityType1"
                                                name="selectActivityType1"
                                                title="Escoge el tipo de actividad"
                                                required>
                                          <option value="" disabled selected>Selecciona un tipo</option>
                                          <?php
                                            foreach ($activities1 as $index => $item) { ?>
                                              <option value="<?php echo $item['id']; ?>">
                                                <?php echo $item['name']; ?>
                                              </option>';
                                            <?php }
                                          ?>
                                        </select>
                                        <div id="selectActivityTypeHelp" class="sisreg-form-help">Escoge el tipo
                                          de
                                          actividad.
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Activity type 2 /-->
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <select class="form-control"
                                                id="selectActivityType2"
                                                name="selectActivityType2"
                                                title="Escoge el tipo de actividad"
                                                required>
                                          <option value="" disabled selected>Selecciona un tipo</option>
                                          <?php
                                            foreach ($activities2 as $index => $item) { ?>
                                              <option value="<?php echo $item['id']; ?>">
                                                <?php echo $item['name']; ?>
                                              </option>';
                                            <?php }
                                          ?>
                                        </select>
                                      </div>
                                    </div>

                                    <!-- Activity type 3 /-->
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <select class="form-control"
                                                id="selectActivityType3"
                                                name="selectActivityType3"
                                                title="Escoge el tipo de actividad"
                                                required>
                                          <option value="" disabled selected>Selecciona un tipo</option>
                                          <?php
                                            foreach ($activities3 as $index => $item) { ?>
                                              <option value="<?php echo $item['id']; ?>">
                                                <?php echo $item['name']; ?>
                                              </option>';
                                            <?php }
                                          ?>
                                        </select>
                                      </div>
                                    </div>

                                  </div>

                                  <hr class="sisreg-hr">

                                  <!-- Modality /-->
                                  <div class="row">
                                    <div class="form-group col-12">
                                      <label for="selectModality">
                                        <h5 class="sisreg-card-subtitle">
                                          <b> <i class="fa-solid fa-check"></i>
                                            Modalidad
                                          </b>
                                        </h5>
                                      </label>
                                      <select class="form-control"
                                              id="selectModality"
                                              name="selectModality"
                                              title="Escoge el tipo de modalidad"
                                              required>
                                        <option value="" disabled selected>Selecciona una modalidad</option>
                                        <?php
                                          foreach ($modalities as $index => $item) { ?>
                                            <option value="<?php echo $item['id']; ?>">
                                              <?php echo $item['name']; ?>
                                            </option>';
                                          <?php }
                                        ?>
                                      </select>
                                      <div id="selectModalityHelp" class="sisreg-form-help">Escoge la modalidad.
                                      </div>
                                    </div>
                                  </div>

                                  <hr class="sisreg-hr">

                                  <!-- Main theme /-->
                                  <div class="row p-2">
                                    <div class="card col-12 p-4">

                                      <!-- Main theme title /-->
                                      <div class="row">
                                        <div class="col-md-6">
                                          <h5 class="sisreg-card-subtitle">
                                            <b> <i class="fa-solid fa-check"></i>
                                              Ejes temáticos
                                            </b>
                                          </h5>
                                        </div>
                                      </div>

                                      <hr class="sisreg-hr">

                                      <!-- Training actions headers /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <p><b>Acciones de capacitación</b></p>
                                        </div>

                                        <div class="col-md-2">
                                          <p><b>Número de acciones</b></p>
                                        </div>

                                        <div class="col-md-2">
                                          <p><b>Personas capacitadas</b></p>
                                        </div>

                                        <div class="col-md-2">
                                          <p><b>No. Horas</b></p>
                                        </div>

                                      </div>

                                      <!-- Option 1 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Programa de actualización para servidores públicos de Carrera
                                              Judicial</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action1ActionNumbers"
                                                   name="action1ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action1TrainedPeople"
                                                   name="action1TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action1NumberHours"
                                                   name="action1NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">

                                          </div>
                                        </div>

                                      </div>

                                      <!-- Option 2 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Estudios de posgrado: Especialidad en Derecho Anticorrupción</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action2ActionNumbers"
                                                   name="action2ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action2TrainedPeople"
                                                   name="action2TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action2NumberHours"
                                                   name="action2NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">

                                          </div>
                                        </div>

                                      </div>

                                      <!-- Option 3 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Seminarios Académicos para el Desarrollo Especializado en Materia
                                              Jurisdiccional
                                              y
                                              de
                                              Investigación</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action3ActionNumbers"
                                                   name="action3ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action3TrainedPeople"
                                                   name="action3TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action3NumberHours"
                                                   name="action3NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">

                                          </div>
                                        </div>

                                      </div>

                                      <!-- Option 4 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Actividades de Divulgación: Cursos Presenciales y Virtuales</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action4ActionNumbers"
                                                   name="action4ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action4TrainedPeople"
                                                   name="action4TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action4NumberHours"
                                                   name="action4NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">

                                          </div>
                                        </div>

                                      </div>

                                      <!-- Option 5 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Actividades de Divulgación Jueves de Conferencia</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action5ActionNumbers"
                                                   name="action5ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action5TrainedPeople"
                                                   name="action5TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action5NumberHours"
                                                   name="action5NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">

                                          </div>
                                        </div>

                                      </div>

                                      <!-- Option 6 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Actividades de Divulgación: Cursos Presenciales y Virtuales</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action6ActionNumbers"
                                                   name="action6ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action6TrainedPeople"
                                                   name="action6TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action6NumberHours"
                                                   name="action6NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">

                                          </div>
                                        </div>

                                      </div>

                                      <!-- Option 7 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Actividades de Diálogo e Intercambio de Opiniones y Paneles de
                                              Discusión de
                                              Académicos
                                              Expertos en la Materia</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action7ActionNumbers"
                                                   name="action7ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action7TrainedPeople"
                                                   name="action7TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action7NumberHours"
                                                   name="action7NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">

                                          </div>
                                        </div>

                                      </div>

                                      <!-- Option 8 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Talleres Dirigidos al Personal Jurisdiccional y
                                              Administrativo</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action8ActionNumbers"
                                                   name="action8ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action8TrainedPeople"
                                                   name="action8TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action8NumberHours"
                                                   name="action8NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">

                                          </div>
                                        </div>

                                      </div>

                                      <!-- Option 9 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Programa Educativo Integral para el Bienestar Socioemocional</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action9ActionNumbers"
                                                   name="action9ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action9TrainedPeople"
                                                   name="action9TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action9NumberHours"
                                                   name="action9NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">

                                          </div>
                                        </div>

                                      </div>

                                      <!-- Option 10 /-->
                                      <div class="row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <p>Diplomado</p>
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action10ActionNumbers"
                                                   name="action10ActionNumbers"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de acciones.">

                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action10TrainedPeople"
                                                   name="action10TrainedPeople"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de personas capacitadas.">
                                          </div>
                                        </div>

                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <input id="action10NumberHours"
                                                   name="action10NumberHours"
                                                   type="number"
                                                   min="0"
                                                   class="form-control"
                                                   placeholder="0"
                                                   title="Escribe el número de horas.">
                                          </div>
                                        </div>

                                      </div>

                                    </div>
                                  </div>

                                </div>

                              </div>
                            </div>

                            <!-- Managers and applicants data card -->
                            <div class="col-md-6 mb-auto">
                              <div class="card card-olive card-outline sisreg-card-outline cltm-height">

                                <!-- Card header /-->
                                <div class="card-header">

                                  <!-- Managers and applicants data title -->
                                  <h5 class="card-text">
                                    <i class="fa-solid fa-people-line"></i>
                                    Responsables y solicitantes
                                  </h5>

                                </div>

                                <!-- Card body /-->
                                <div class="card-body">

                                  <!-- Technology Manager (Manager) /-->
                                  <div class="form-group">
                                    <label for="selectTechnologyManagerManager">
                                      <h5 class="sisreg-card-subtitle">
                                        <b> <i class="fa-solid fa-check"></i>
                                          Responsable de tecnología (Directivo)
                                        </b>
                                      </h5>
                                    </label>
                                    <select class="form-control"
                                            id="selectTechnologyManagerManager"
                                            name="selectTechnologyManagerManager"
                                            title="Selecciona un responsable"
                                            required>
                                      <option value="" disabled selected>Selecciona un responsable</option>
                                      <?php
                                        foreach ($allUsers as $index => $item) { ?>
                                          <option value="<?php echo $item['user_id']; ?>">
                                            <?php echo $item['user_name'] . ' ' . $item['user_last_name']; ?>
                                          </option>';
                                        <?php }
                                      ?>
                                    </select>
                                    <div id="selectTechnologyManagerManagerHelp" class="sisreg-form-help">Nombre
                                      del
                                      responsable de tecnología (Directivo)
                                    </div>
                                  </div>

                                  <!-- Technology Manager (Social Service) /-->
                                  <div class="form-group">
                                    <label for="selectManagerSocialService">
                                      <h5 class="sisreg-card-subtitle">
                                        <b> <i class="fa-solid fa-check"></i>
                                          Responsable de tecnología (Servicio social)
                                        </b>
                                      </h5>
                                    </label>
                                    <select class="form-control"
                                            id="selectManagerSocialService"
                                            name="selectManagerSocialService"
                                            title="Selecciona un responsable"
                                            required>
                                      <option value="" disabled selected>Selecciona un responsable</option>
                                      <?php
                                        foreach ($allUsers as $index => $item) { ?>
                                          <option value="<?php echo $item['user_id']; ?>">
                                            <?php echo $item['user_name'] . ' ' . $item['user_last_name']; ?>
                                          </option>';
                                        <?php }
                                      ?>
                                    </select>
                                    <div id="selectManagerSocialServiceHelp" class="sisreg-form-help">Nombre del
                                      responsable
                                      de
                                      tecnología (Servicio social)
                                    </div>
                                  </div>

                                  <!-- Event requester /-->
                                  <div class="form-group">
                                    <label for="inputEventRequester">
                                      <h5 class="sisreg-card-subtitle">
                                        <b> <i class="fa-solid fa-check"></i>
                                          Solicitante del evento
                                        </b>
                                      </h5>
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           id="inputEventRequester"
                                           name="inputEventRequester"
                                           placeholder="Nombre del solicitante.."
                                           title="Escribe el nombre del solicitante del evento"
                                           required>
                                    <div id="inputEventRequesterHelp" class="sisreg-form-help">Nombre del del
                                      solicitante del
                                      evento
                                    </div>
                                  </div>

                                  <!-- Portfolio manager /-->
                                  <div class="form-group">
                                    <label for="selectPortfolioManager">
                                      <h5 class="sisreg-card-subtitle">
                                        <b> <i class="fa-solid fa-check"></i>
                                          Responsable de la carpeta
                                        </b>
                                      </h5>
                                    </label>
                                    <select class="form-control"
                                            id="selectPortfolioManager"
                                            name="selectPortfolioManager"
                                            title="Selecciona un responsable"
                                            required>
                                      <option value="" disabled selected>Selecciona un responsable</option>
                                      <?php
                                        foreach ($allUsers as $index => $item) { ?>
                                          <option value="<?php echo $item['user_id']; ?>">
                                            <?php echo $item['user_name'] . ' ' . $item['user_last_name']; ?>
                                          </option>';
                                        <?php }
                                      ?>
                                    </select>
                                    <div id="selectPortfolioManagerHelp" class="sisreg-form-help">Nombre del
                                      responsable de la
                                      carpeta
                                    </div>
                                  </div>

                                  <!-- Name of the magistrate /-->
                                  <div class="form-group">
                                    <label for="inputNameMagistrate">
                                      <h5 class="sisreg-card-subtitle">
                                        <b> <i class="fa-solid fa-check"></i>
                                          Nombre del magistrado/a
                                        </b>
                                      </h5>
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           id="inputNameMagistrate"
                                           name="inputNameMagistrate"
                                           placeholder="Nombre del magistrado.."
                                           title="Escribe el nombre del magistrado"
                                           required>
                                    <div id="inputNameMagistrateHelp" class="sisreg-form-help">Nombre del
                                      magistrado
                                    </div>
                                  </div>

                                </div>

                              </div>

                            </div>

                            <!-- Dates-->
                            <div class="col-md-6 mb-auto">
                              <div class="card card-olive card-outline sisreg-card-outline">

                                <!-- Card header -->
                                <div class="card-header">

                                  <!-- Asset data title -->
                                  <h5 class="card-text">
                                    <i class="fa-solid fa-calendar-day"></i>
                                    Fechas
                                  </h5>

                                </div>

                                <!-- Dates section -->
                                <div class="card-body">

                                  <!-- Event date -->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de Realización del Evento
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateEventDate"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateEventDate"
                                             name="dateEventDate"
                                             title="Fecha de Realización del Evento"
                                             required/>
                                      <div class="input-group-append" data-target="#dateEventDate"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                    <div id="dateEventDateHelp"
                                         class="sisreg-form-help">Fecha de Realización del Evento
                                    </div>
                                  </div>

                                  <!-- Folder Assignment Date /-->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de Asignación de carpeta
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateFolderAssignmentDate"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateFolderAssignmentDate"
                                             id="dateFolderAssignmentDate"
                                             name="dateFolderAssignmentDate"
                                             title="Fecha de Realización del Evento"
                                             required/>
                                      <div class="input-group-append" data-target="#dateFolderAssignmentDate"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                    <div id="dateFolderAssignmentDateHelp"
                                         class="sisreg-form-help">Fecha de Asignación de carpeta
                                    </div>
                                  </div>

                                  <!-- Delivery Date of Administrative Letters for Signature /-->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de Entrega de Oficios Administrativos para firma
                                      </b>
                                    </h5>

                                    <div class="input-group date"
                                         id="dateDeliveryDateAdministrativeLettersSignature"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateDeliveryDateAdministrativeLettersSignature"
                                             id="dateDeliveryDateAdministrativeLettersSignature"
                                             name="dateDeliveryDateAdministrativeLettersSignature"
                                             title="Fecha de Entrega de Oficios Administrativos para firma"
                                             required/>
                                      <div class="input-group-append"
                                           data-target="#dateDeliveryDateAdministrativeLettersSignature"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                    <div id="dateDeliveryDateAdministrativeLettersSignatureHelp"
                                         class="sisreg-form-help">Fecha de Entrega de Oficios Administrativos
                                      para firma
                                    </div>
                                  </div>

                                  <!-- Acknowledgment Delivery Date Signature /-->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de Entrega de Reconocimiento para firma
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateAcknowledgmentDeliveryDateSignature"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateAcknowledgmentDeliveryDateSignature"
                                             id="dateAcknowledgmentDeliveryDateSignature"
                                             name="dateAcknowledgmentDeliveryDateSignature"
                                             title="Fecha de Entrega de Reconocimiento para firma"
                                             required/>
                                      <div class="input-group-append"
                                           data-target="#dateAcknowledgmentDeliveryDateSignature"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                    <div id="dateAcknowledgmentDeliveryDateSignatureHelp"
                                         class="sisreg-form-help">Fecha de Entrega de Reconocimiento para firma
                                    </div>
                                  </div>

                                  <!-- Date for making poster for dissemination /-->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha para realización de cartel para difusión
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateMakingPosterDissemination"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateMakingPosterDissemination"
                                             id="dateMakingPosterDissemination"
                                             name="dateMakingPosterDissemination"
                                             title="Fecha para realización de cartel para difusión"
                                             required/>
                                      <div class="input-group-append"
                                           data-target="#dateMakingPosterDissemination"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>

                                    <div id="dateMakingPosterDisseminationHelp"
                                         class="sisreg-form-help">Fecha para realización de cartel para difusión
                                    </div>

                                  </div>

                                  <!-- Delivery date of administrative offices /-->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de entrega de oficios administrativos
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateDeliveryDateAdministrativeOffices"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateDeliveryDateAdministrativeOffices"
                                             id="dateDeliveryDateAdministrativeOffices"
                                             name="dateDeliveryDateAdministrativeOffices"
                                             title="Fecha de entrega de oficios administrativos"
                                             required/>
                                      <div class="input-group-append"
                                           data-target="#dateDeliveryDateAdministrativeOffices"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>

                                    <div id="dateDeliveryDateAdministrativeOfficesHelp"
                                         class="sisreg-form-help">Fecha de entrega de oficios administrativos
                                    </div>

                                  </div>

                                  <!-- Date of creation and opening of registrations for the platform course /-->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de creación y apertura de inscripciones al curso de la plataforma
                                      </b>
                                    </h5>

                                    <div class="input-group date"
                                         id="dateCreationOpeningRegistrationsPlatformCourse"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateCreationOpeningRegistrationsPlatformCourse"
                                             id="dateCreationOpeningRegistrationsPlatformCourse"
                                             name="dateCreationOpeningRegistrationsPlatformCourse"
                                             title="Fecha de creación y apertura de inscripciones al curso de la plataforma"
                                             required/>
                                      <div class="input-group-append"
                                           data-target="#dateCreationOpeningRegistrationsPlatformCourse"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>

                                    <div id="dateCreationOpeningRegistrationsPlatformCourseHelp"
                                         class="sisreg-form-help">Fecha de creación y apertura de inscripciones
                                      al curso de la
                                      plataforma
                                    </div>

                                  </div>

                                  <!-- Date to send calls and before validating /-->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha para enviar convocatorias y antes validar el cuerpo del correo y a
                                        quienes se
                                        convoca
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateSendCallsBeforeValidating"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateSendCallsBeforeValidating"
                                             id="dateSendCallsBeforeValidating"
                                             name="dateSendCallsBeforeValidating"
                                             title="Fecha para enviar convocatorias y antes validar el cuepro del correo y a quienes se convoca"
                                             required/>
                                      <div class="input-group-append"
                                           data-target="#dateSendCallsBeforeValidating"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>

                                    <div id="dateSendCallsBeforeValidatingHelp"
                                         class="sisreg-form-help">Fecha para enviar convocatorias y antes
                                      validar el cuepro
                                      del
                                      correo
                                      y a quienes se convoca
                                    </div>

                                  </div>

                                  <!-- Delivery date of concentrates and certificates for validation /-->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de entrega de concentrados y constancias para validación
                                      </b>
                                    </h5>

                                    <div class="input-group date"
                                         id="dateDeliveryConcentratesCertificatesValidation"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateDeliveryConcentratesCertificatesValidation"
                                             id="dateDeliveryConcentratesCertificatesValidation"
                                             name="dateDeliveryConcentratesCertificatesValidation"
                                             title="Fecha de entrega de concentrados y constancias para validacioón"
                                             required/>
                                      <div class="input-group-append"
                                           data-target="#dateDeliveryConcentratesCertificatesValidation"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>

                                    <div id="dateDeliveryConcentratesCertificatesValidationHelp"
                                         class="sisreg-form-help">Fecha de entrega de concentrados y constancias
                                      para
                                      validacioón
                                    </div>

                                  </div>

                                  <!-- Folder delivery date /-->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de entrega de carpeta
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateFolderDeliveryDate"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateFolderDeliveryDate"
                                             id="dateFolderDeliveryDate"
                                             name="dateFolderDeliveryDate"
                                             title="Fecha de entrega de carpeta"
                                             required/>
                                      <div class="input-group-append" data-target="#dateFolderDeliveryDate"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>

                                    <div id="dateFolderDeliveryDateHelp"
                                         class="sisreg-form-help">Fecha de entrega de carpeta
                                    </div>
                                  </div>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>
                    </div>

                    <!-- In the Next Five Days After the Event /-->
                    <div class="col-md-12">
                      <div class="card card-olive card-outline sisreg-card-outline">

                        <!-- Card header -->
                        <div class="card-header">

                          <!-- Title -->
                          <h5 class="card-title">
                            <i class="fa-solid fa-calendar-plus"></i>
                            <b>En los Siguientes Cinco Días Después del Evento</b>
                          </h5>

                        </div>

                        <!-- Card body /-->
                        <div class="card-body">
                          <div class="row">

                            <!-- Dates-->
                            <div class="col-md-12 mb-auto">
                              <div class="card card-olive card-outline sisreg-card-outline">

                                <!-- Card header -->
                                <div class="card-header">

                                  <!-- Dates title -->
                                  <h5 class="card-text">
                                    <i class="fa-solid fa-calendar-day"></i>
                                    Fechas
                                  </h5>

                                </div>

                                <!-- Dates section -->
                                <div class="card-body">

                                  <!-- Date of concentrates and records for validation -->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de concentrados y constancias para validación
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateConcentratesRecordsValidation"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateConcentratesRecordsValidation"
                                             id="dateConcentratesRecordsValidation"
                                             name="dateConcentratesRecordsValidation"
                                             required
                                             title="Fecha de concentrados y constancias para validación"/>
                                      <div class="input-group-append" data-target="#dateConcentratesRecordsValidation"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                    <div id="dateConcentratesRecordsValidationHelp"
                                         class="sisreg-form-help">Fecha de concentrados y constancias para validación
                                    </div>
                                  </div>

                                  <!-- Integrated folder delivery date for validation -->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha de entrega de carpeta integrada para validación
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateIntegratedFolderDelivery"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateIntegratedFolderDelivery"
                                             id="dateIntegratedFolderDelivery"
                                             name="dateIntegratedFolderDelivery"
                                             required
                                             title="Fecha de entrega de carpeta integrada para validación"/>
                                      <div class="input-group-append" data-target="#dateIntegratedFolderDelivery"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                    <div id="dateIntegratedFolderDeliveryHelp"
                                         class="sisreg-form-help">Fecha de entrega de carpeta integrada para validación
                                    </div>
                                  </div>

                                  <!-- Date to empty data into Excel file -->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha para vaciar datos en archivo Excel
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateEmptyDataIntoExcelFile"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateEmptyDataIntoExcelFile"
                                             id="dateEmptyDataIntoExcelFile"
                                             name="dateEmptyDataIntoExcelFile"
                                             required
                                             title="Fecha para vaciar datos en archivo Excel"/>
                                      <div class="input-group-append" data-target="#dateEmptyDataIntoExcelFile"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                    <div id="dateEmptyDataIntoExcelFileHelp"
                                         class="sisreg-form-help">Fecha para vaciar datos en archivo Excel
                                    </div>
                                  </div>

                                  <!-- Date to clear information from trained personnel in Excel file -->
                                  <div class="form-group">

                                    <h5 class="sisreg-card-subtitle">
                                      <b> <i class="fa-solid fa-check"></i>
                                        Fecha para vaciar información del personal capacitado en archivo Excel
                                      </b>
                                    </h5>

                                    <div class="input-group date" id="dateClearInformationFromTrained"
                                         data-target-input="nearest">
                                      <input type="text"
                                             class="form-control datetimepicker-input"
                                             data-target="#dateClearInformationFromTrained"
                                             name="dateClearInformationFromTrained"
                                             required
                                             title="Fecha para vaciar información del personal capacitado en archivo Excel"/>
                                      <div class="input-group-append" data-target="#dateClearInformationFromTrained"
                                           data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      </div>
                                    </div>
                                    <div id="dateClearInformationFromTrainedHelp"
                                         class="sisreg-form-help">Fecha para vaciar información del personal capacitado
                                      en
                                      archivo
                                      Excel
                                    </div>
                                  </div>


                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>
                    </div>

                  </div>

                </div>

              </div>
            </div>

            <!-- Add new button -->
            <button class="btn btn-primary ml-3 mb-3"
                    type="submit"
                    id="buttonAddNew"
                    name="buttonAddNew"
                    disabled
                    title="Añadir evento">
              <i class="fa-solid fa-floppy-disk"></i> Añadir evento
            </button>

          </form>

          <!-- Card footer -->
          <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
            <em><?php echo SYSTEM_FULL_NAME; ?></em>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="views/resources/plugins/jquery/jquery.min.js"></script>

<!-- jquery-validation -->
<script src="views/resources/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="views/resources/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- InputMask -->
<script src="views/resources/plugins/moment/moment.min.js"></script>
<script src="views/resources/plugins/inputmask/jquery.inputmask.min.js"></script>

<!-- date-range-picker -->
<script src="views/resources/plugins/daterangepicker/daterangepicker.js"></script>

<!-- bootstrap color picker -->
<script src="views/resources/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="views/resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Custom functions -->
<script src="views/resources/dist/js/pages/viewEventAddNew.js"></script>

<script>

  /**
   * jQuery Validation configuration
   */
  $(function () {

    let addNewEventForm = $('#addNewEventForm').validate({
      rules: {
        inputNameOfActivity: {
          required: true,
        },
        selectActivityType1: {
          required: true,
        },
        selectActivityType2: {
          required: true,
        },
        selectActivityType3: {
          required: true,
        },
        selectModality: {
          required: true,
        },
        selectTechnologyManagerManager: {
          required: true,
        },
        selectManagerSocialService: {
          required: true,
        },
        inputEventRequester: {
          required: true,
        },
        selectPortfolioManager: {
          required: true,
        },
        inputNameMagistrate: {
          required: true,
        },
        dateEventDate: {
          required: true,
        },
        dateFolderAssignmentDate: {
          required: true,
        },
        dateDeliveryDateAdministrativeLettersSignature: {
          required: true,
        },
        dateAcknowledgmentDeliveryDateSignature: {
          required: true,
        },
        dateMakingPosterDissemination: {
          required: true,
        },
        dateDeliveryDateAdministrativeOffices: {
          required: true,
        },
        dateCreationOpeningRegistrationsPlatformCourse: {
          required: true,
        },
        dateSendCallsBeforeValidating: {
          required: true,
        },
        dateDeliveryConcentratesCertificatesValidation: {
          required: true,
        },
        dateFolderDeliveryDate: {
          required: true,
        },
        dateConcentratesRecordsValidation: {
          required: true,
        },
        dateIntegratedFolderDelivery: {
          required: true,
        },
        dateEmptyDataIntoExcelFile: {
          required: true,
        },
        dateClearInformationFromTrained: {
          required: true,
        }

      },

      messages: {

        inputNameOfActivity: {
          required: "El campo es obligatorio"
        },
        selectActivityType1: {
          required: "El campo es obligatorio"
        },
        selectActivityType2: {
          required: "El campo es obligatorio"
        },
        selectActivityType3: {
          required: "El campo es obligatorio"
        },
        selectModality: {
          required: "El campo es obligatorio"
        },
        selectTechnologyManagerManager: {
          required: "El campo es obligatorio"
        },
        selectManagerSocialService: {
          required: "El campo es obligatorio"
        },
        inputEventRequester: {
          required: "El campo es obligatorio"
        },
        selectPortfolioManager: {
          required: "El campo es obligatorio"
        },
        inputNameMagistrate: {
          required: "El campo es obligatorio"
        },
        dateEventDate: {
          required: "El campo es obligatorio"
        },
        dateFolderAssignmentDate: {
          required: "El campo es obligatorio"
        },
        dateDeliveryDateAdministrativeLettersSignature: {
          required: "El campo es obligatorio"
        },
        dateAcknowledgmentDeliveryDateSignature: {
          required: "El campo es obligatorio"
        },
        dateMakingPosterDissemination: {
          required: "El campo es obligatorio"
        },
        dateDeliveryDateAdministrativeOffices: {
          required: "El campo es obligatorio"
        },
        dateCreationOpeningRegistrationsPlatformCourse: {
          required: "El campo es obligatorio"
        },
        dateSendCallsBeforeValidating: {
          required: "El campo es obligatorio"
        },
        dateDeliveryConcentratesCertificatesValidation: {
          required: "El campo es obligatorio"
        },
        dateFolderDeliveryDate: {
          required: "El campo es obligatorio"
        },
        dateConcentratesRecordsValidation: {
          required: "El campo es obligatorio"
        },
        dateIntegratedFolderDelivery: {
          required: "El campo es obligatorio"
        },
        dateEmptyDataIntoExcelFile: {
          required: "El campo es obligatorio"
        },
        dateClearInformationFromTrained: {
          required: "El campo es obligatorio"
        }

      },

      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }

    });
  });

  // Form event function
  $('#addNewEventForm').on('blur keyup change input', function (event) {
    validateForm('#addNewEventForm');
  });

  /**
   * Form validation
   * @param id
   */
  function validateForm(id) {
    let submitting = $("#buttonAddNew");
    let valid = $(id).validate().checkForm();
    if (valid) {
      submitting.removeAttr("disabled");
    } else {
      submitting.attr("disabled", "disabled");
    }
  }

  /**
   * Ajax POST add new event form
   */
  $("#addNewEventForm").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'controllers/controllerEvent.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (msg) {
        if (msg == 1) {
          modalSuccessfulSaveRecordEvent();
        } else {
          modalErrorSaveRecordEvent();
        }

      }
    });
  });

  /**
   * Successful save record event modal
   */
  function modalSuccessfulSaveRecordEvent() {
    Swal.fire({
      title: 'Registro guardado',
      text: 'Registro guardado exitosamente',
      confirmButtonText: 'Aceptar',
      icon: 'success',
      confirmButtonColor: '#3085d6'
    }).then(function () {
      window.location = "eventAllEvents";
    })
  }

  /**
   * Error save record event modal
   */
  function modalErrorSaveRecordEvent() {
    Swal.fire({
      title: 'Error al guardar',
      text: 'Error al guardar el registro',
      icon: 'error',
      confirmButtonColor: '#3085d6'
    })
  }

</script>