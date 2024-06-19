<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show "Event logistics" screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once ('controllers/controllerActivities.php');
  require_once ('controllers/controllerEventLogistic.php');
  require_once ('controllers/controllerEvent.php');
  require_once ('controllers/controllerModality.php');
  
  
  $objectEvent = new ControllerEvent();
  $result = $objectEvent->getById ($_POST['eventData']);
  
  //$objectEventLogistic = new ControllerEventLogistic();
  //$resultEventLogistic = $objectEventLogistic->getByIdEvent ($_POST['eventCheckEventId']);
  
  $objectActivities = new ControllerActivities();
  $activity1 = $objectActivities->getActivityName ('1', $result['event_activity_type1']);
  $activity2 = $objectActivities->getActivityName ('2', $result['event_activity_type2']);
  $activity3 = $objectActivities->getActivityName ('3', $result['event_activity_type3']);
  
  
  $objectModality = new ControllerModality();
  $modality = $objectModality->getModalityName ($result['event_modality']);

?>

<!-- Header /-->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Chequeo del evento</b></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 sisreg-icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa-regular fa-square-check"></i>
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
                id="addNewCheckForm"
                name="addNewCheckForm">

            <!-- Card header -->
            <div class="card-header sisreg-card-header">

              <!-- Subtitle -->
              <h5 class="card-title sisreg-color-white">
                <i class="fa-regular fa-square-check"></i>
                <b>Chequeo de logística del evento: </b>"
                <?php echo $result['event_name_of_activity']; ?>"
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

                    <!-- /-->
                    <div class="col-md-6">
                      <div class="card card-olive card-outline sisreg-card-outline">

                        <!-- Card header -->
                        <div class="card-header">

                          <!-- Title -->
                          <h5 class="card-title">
                            <i class="fa-regular fa-calendar-check"></i>
                            <b>Cumplimiento de la actividad asignada</b>
                          </h5>

                        </div>

                        <!-- Card body /-->
                        <div class="card-body">


                          <!-- Card body /-->
                          <div class="card-body">

                            <div class="form-group">
                              <label>Escribe las observaciones y detalles de tu actividad</label>
                              <textarea class="form-control"
                                        rows="9"
                                        placeholder="Escibre tus observaciones..."></textarea>
                            </div>


                          </div>

                        </div>

                      </div>
                    </div>

                    <!-- /-->
                    <div class="col-md-6">
                      <div class="card card-olive card-outline sisreg-card-outline">

                        <!-- Card header -->
                        <div class="card-header">

                          <!-- Title -->
                          <h5 class="card-title">
                            <i class="fa-solid fa-list"></i>
                            <b>Detalles del evento</b>
                          </h5>

                        </div>

                        <!-- Card body /-->
                        <div class="card-body">
                          <strong><i class="fas fa-book mr-1"></i> Nombre </strong>

                          <p class="text-muted">
                            <?php echo $result['event_name_of_activity']; ?>
                          </p>

                          <hr>
                          <?php
                            $event_date_event_date = strtotime ($result['event_date_event_date']);
                            $event_date_event_date = date ("d-m-Y H:i:s", $event_date_event_date);
                          ?>
                          <strong><i class="fas fa-map-marker-alt mr-1"></i> Fecha del evento</strong>

                          <p class="text-muted"> <?php echo $event_date_event_date; ?></z>  </p>

                          <hr>

                          <strong><i class="fas fa-pencil-alt mr-1"></i> Tipo de Actividad</strong>

                          <p class="text-muted">
                            <span class="tag tag-danger"><?php echo $activity1; ?></span> |
                            <span class="tag tag-success"><?php echo $activity2; ?></span> |
                            <span class="tag tag-info"><?php echo $activity3; ?></span>
                          </p>

                          <hr>

                          <strong><i class="far fa-file-alt mr-1"></i> Modalidad</strong>
                          <p class="text-muted"><?php echo $modality; ?></p>
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
                    id="buttonAddCheck"
                    name="buttonAddCheck"
                    title="Enviar reporte">
              <i class="fa-solid fa-floppy-disk"></i> Enviar reporte
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

<!-- Sweet Alert -->
<script src="views/resources/plugins/sweetalert2/sweetalert2.11.7.31.js"></script>

<!-- Custom JS Code -->
<script src="views/resources/dist/js/functions.js"></script>

<script>

  let check =   <?php echo json_encode ($resultEventLogistic); ?>;

  if (check) {
    modalCheckedEvent();
  }

  function modalCheckedEvent() {
    Swal.fire({
      title: 'Evento Chequeado',
      text: 'Este evento ha sido chequeado previamente',
      confirmButtonText: 'Aceptar',
      icon: 'success',
      confirmButtonColor: '#3085d6'
    }).then(function () {
      //window.location = "viewEventCheckViewAll";
      checkedItems();

    })
  }


  // Send POST data with Ajax (Pending)
  $("#addNewCheckForm").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'controllers/controllerEventLogistic.php',
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
      window.location = "eventCheckViewAll";
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

  function checkedItems() {

    if (check['event_logistic_auditorium_attendace_password_link'] == 1) {
      $("#event_logistic_auditorium_attendace_password_link").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_attendace_password_link").prop("checked", false);
    }


    if (check['event_logistic_auditorium_attendace_password_link'] == 1) {
      $("#event_logistic_auditorium_attendace_password_link").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_attendace_password_link").prop("checked", false);
    }

    if (check['event_logistic_auditorium_attendance_link'] == 1) {
      $("#event_logistic_auditorium_attendance_link").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_attendance_link").prop("checked", false);
    }

    if (check['event_logistic_auditorium_chairs'] == 1) {
      $("#event_logistic_auditorium_chairs").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_chairs").prop("checked", false);
    }

    if (check['event_logistic_auditorium_id_data'] == 1) {
      $("#event_logistic_auditorium_id_data").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_id_data").prop("checked", false);
    }

    if (check['event_logistic_auditorium_lift_tablecloths'] == 1) {
      $("#event_logistic_auditorium_lift_tablecloths").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_lift_tablecloths").prop("checked", false);
    }

    if (check['event_logistic_auditorium_personifiers'] == 1) {
      $("#event_logistic_auditorium_personifiers").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_personifiers").prop("checked", false);
    }

    if (check['event_logistic_auditorium_platform_data'] == 1) {
      $("#event_logistic_auditorium_platform_data").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_platform_data").prop("checked", false);
    }

    if (check['event_logistic_auditorium_prepare_attendance_list'] == 1) {
      $("#event_logistic_auditorium_prepare_attendance_list").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_prepare_attendance_list").prop("checked", false);
    }

    if (check['event_logistic_auditorium_presidium'] == 1) {
      $("#event_logistic_auditorium_presidium").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_presidium").prop("checked", false);
    }

    if (check['event_logistic_auditorium_staff_compliance'] == 1) {
      $("#event_logistic_auditorium_staff_compliance").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_staff_compliance").prop("checked", false);
    }

    if (check['event_logistic_auditorium_verify_support_staff'] == 1) {
      $("#event_logistic_auditorium_verify_support_staff").prop("checked", true);
    } else {
      $("#event_logistic_auditorium_verify_support_staff").prop("checked", false);
    }

    if (check['event_logistic_personal_rc'] == 1) {
      $("#event_logistic_personal_rc").prop("checked", true);
    } else {
      $("#event_logistic_personal_rc").prop("checked", false);
    }

    if (check['event_logistic_personal_rtd'] == 1) {
      $("#event_logistic_personal_rtd").prop("checked", true);
    } else {
      $("#event_logistic_personal_rtd").prop("checked", false);
    }

    if (check['event_logistic_personal_rtss'] == 1) {
      $("#event_logistic_personal_rtss").prop("checked", true);
    } else {
      $("#event_logistic_personal_rtss").prop("checked", false);
    }

    if (check['event_logistic_personal_se'] == 1) {
      $("#event_logistic_personal_se").prop("checked", true);
    } else {
      $("#event_logistic_personal_se").prop("checked", false);
    }

    $("#event_logistic_auditorium_attendace_password_link").prop("disabled", true);
    $("#event_logistic_auditorium_attendance_link").prop("disabled", true);
    $("#event_logistic_auditorium_chairs").prop("disabled", true);
    $("#event_logistic_auditorium_id_data").prop("disabled", true);
    $("#event_logistic_auditorium_lift_tablecloths").prop("disabled", true);
    $("#event_logistic_auditorium_personifiers").prop("disabled", true);
    $("#event_logistic_auditorium_platform_data").prop("disabled", true);
    $("#event_logistic_auditorium_prepare_attendance_list").prop("disabled", true);
    $("#event_logistic_auditorium_presidium").prop("disabled", true);
    $("#event_logistic_auditorium_staff_compliance").prop("disabled", true);
    $("#event_logistic_auditorium_verify_support_staff").prop("disabled", true);
    $("#event_logistic_personal_rc").prop("disabled", true);
    $("#event_logistic_personal_rtd").prop("disabled", true);
    $("#event_logistic_personal_rtss").prop("disabled", true);
    $("#event_logistic_personal_se").prop("disabled", true);

  }

</script>