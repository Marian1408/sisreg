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
  
  require_once ('controllers/controllerEventLogistic.php');
  require_once ('controllers/controllerEvent.php');
  
  $objectEventLogistic = new ControllerEventLogistic();
  $resultEventLogistic = $objectEventLogistic->getByIdEvent ($_POST['eventCheckEventId']);


?>

<!-- Header /-->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Logística del evento</b></h1>
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
                <b>Chequeo de logística del evento: </b>"<?php
                  $objectEvent = new ControllerEvent();
                  $result = $objectEvent->getById ($_POST['eventCheckEventId']);
                  print_r ($result['event_name_of_activity']);
                ?>"
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

                    <!-- Event Logistics Compliance /-->
                    <div class="col-md-12">
                      <div class="card card-olive card-outline sisreg-card-outline">

                        <!-- Card header -->
                        <div class="card-header">

                          <!-- Title -->
                          <h5 class="card-title">
                            <i class="fa-solid fa-list-check"></i>
                            <b>Cumplimiento de la Logística del Evento</b>
                          </h5>

                        </div>

                        <!-- Card body /-->
                        <div class="card-body">

                          <!-- Card header -->
                          <div class="card-header">
                            <h5 class="card-text"> Del personal </h5>
                          </div>

                          <!-- Card body /-->
                          <div class="card-body">

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" value="1" type="checkbox"
                                       id="event_logistic_personal_rtd"
                                       name="event_logistic_personal_rtd">
                                <label class="form-check-label">Responsable de Tecnología (Directivo)</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="event_logistic_personal_rtss"
                                       name="event_logistic_personal_rtss">
                                <label class="form-check-label">Responsable de Tecnología (Servicio Social)</label>
                              </div>
                            </div>


                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="event_logistic_personal_se"
                                       name="event_logistic_personal_se">
                                <label class="form-check-label">Solicitante del evento</label>
                              </div>
                            </div>


                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="event_logistic_personal_rc"
                                       name="event_logistic_personal_rc">
                                <label class="form-check-label">Responsable de carpeta</label>
                              </div>
                            </div>


                          </div>

                        </div>

                      </div>
                    </div>

                    <!-- Check Auditorium /-->
                    <div class="col-md-12">
                      <div class="card card-olive card-outline sisreg-card-outline">

                        <!-- Card header -->
                        <div class="card-header">

                          <!-- Title -->
                          <h5 class="card-title">
                            <i class="fa-solid fa-list-check"></i>
                            <b>Checar Auditorio </b>
                          </h5>

                        </div>

                        <div class="card-body">

                          <!-- Card body /-->
                          <div class="card-header">
                            <h5 class="card-text"> Antes del evento</h5>
                          </div>

                          <!-- Card body /-->
                          <div class="card-body">

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_chairs"
                                       name="event_logistic_auditorium_chairs">
                                <label class="form-check-label">Sillas</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_presidium"
                                       name="event_logistic_auditorium_presidium">
                                <label class="form-check-label">Presidium</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       id="event_logistic_auditorium_platform_data"
                                       name="event_logistic_auditorium_platform_data">
                                <label class="form-check-label">Datos de plataforma</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_id_data"
                                       name="event_logistic_auditorium_id_data">
                                <label class="form-check-label">Datos de ID</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       id="event_logistic_auditorium_staff_compliance"
                                       name="event_logistic_auditorium_staff_compliance">
                                <label class="form-check-label">Cumplimiento del personal</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       id="event_logistic_auditorium_prepare_attendance_list"
                                       name="event_logistic_auditorium_prepare_attendance_list">
                                <label class="form-check-label">Elaborar lista de asistencia</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       id="event_logistic_auditorium_verify_support_staff"
                                       name="event_logistic_auditorium_verify_support_staff">
                                <label class="form-check-label">Verificar que el personal de apoyo realice sus
                                  actividades</label>
                              </div>
                            </div>


                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       id="event_logistic_auditorium_attendance_link"
                                       name="event_logistic_auditorium_attendance_link">
                                <label class="form-check-label">Contraseña y link de asistencia</label>
                              </div>
                            </div>

                          </div>

                          <!-- Card header -->
                          <div class="card-header">
                            <h5 class="card-text"> Al finalizar el evento </h5>
                          </div>

                          <!-- Card body /-->
                          <div class="card-body">

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       id="event_logistic_auditorium_attendace_password_link"
                                       name="event_logistic_auditorium_attendace_password_link">
                                <label class="form-check-label">Ingresar al chat en el link de asistencia</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       id="event_logistic_auditorium_lift_tablecloths"
                                       name="event_logistic_auditorium_lift_tablecloths">
                                <label class="form-check-label">Levantar manteles</label>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       id="event_logistic_auditorium_personifiers"
                                       name="event_logistic_auditorium_personifiers">
                                <label class="form-check-label">Personificadores</label>
                              </div>
                            </div>


                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" value="<?php echo $_POST['eventCheckEventId']; ?>"
                                       type="hidden" id="eventDataCheckId" name="eventDataCheckId">

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
                    id="buttonAddCheck"
                    name="buttonAddCheck"
                    title="Guardar Chequeo">
              <i class="fa-solid fa-floppy-disk"></i> Guardar Chequeo
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