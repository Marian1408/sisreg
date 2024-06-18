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
  
  # Files required
  require_once ('controllers/controllerActivities.php');
  require_once ('controllers/controllerModality.php');



if (isset($_POST['eventDataCheckId'])) {
 echo $_POST['eventDataCheckId'];
}

?>
<!-- Header -->
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

<form action="controllers/controllerEvent.php"
      enctype="multipart/form-data"
      method="post"
      id="addNewCheckForm"
      name="addNewCheckForm">

  <!-- Logistics prior to the event /-->
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">

          <div class="card card-info card-outline sisreg-card-outline" style="border-top: 3px solid #062f1d;">

            <!-- Header card /-->
            <div class="card-header" style="background: #062f1d;  border-radius: 0px !important;">
              <h5 class="card-title" style="color:white;">Cumplimiento de la Logística del Evento</h5>

              <!-- Card buttons -->
              <div class="card-tools">


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

            <!-- Body card -->
            <div class="card-body">

              <div class="row">


                <!-- Personal check card -->
                <div class="col-md-12 mb-auto">
                  <div class="card card-primary card-outline sisreg-card-outline cltm-height">

                    <!-- Card header -->
                    <div class="card-header">

                      <!-- Activity data title -->
                      <h5 class="card-text">
                        <i class="fa-solid fa-list-check"></i>
                        Del personal
                      </h5>

                    </div>

                    <!-- Card body /-->
                    <div class="card-body">

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="1" type="checkbox" id="event_logistic_personal_rtd" name="event_logistic_personal_rtd">
                          <label class="form-check-label">Responsable de Tecnología (Directivo)</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_personal_rtss" name="event_logistic_personal_rtss">
                          <label class="form-check-label">Responsable de Tecnología (Servicio Social)</label>
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_personal_se" name="event_logistic_personal_se">
                          <label class="form-check-label">Solicitante del evento</label>
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_personal_rc" name="event_logistic_personal_rc">
                          <label class="form-check-label">Responsable de carpeta</label>
                        </div>
                      </div>


                    </div>

                  </div>
                </div>


              </div>

            </div>

            <!-- Card footer -->
            <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
              <em><?php echo SYSTEM_VERSION; ?></em>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- Logistics prior to the event /-->
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12">

          <div class="card card-info card-outline sisreg-card-outline" style="border-top: 3px solid #062f1d;">

            <!-- Header card /-->
            <div class="card-header" style="background: #062f1d; border-radius: 0px !important;">
              <h5 class="card-title" style="color:white;">Checar Auditorio</h5>

              <!-- Card buttons -->
              <div class="card-tools">


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

            <!-- Body card -->
            <div class="card-body">

              <div class="row">

                <!-- Auditorioum check card -->
                <div class="col-md-12 mb-auto">
                  <div class="card card-primary card-outline sisreg-card-outline cltm-height">

                    <!-- Card header -->
                    <div class="card-header">

                      <!-- Activity data title -->
                      <h5 class="card-text">
                        <i class="fa-solid fa-list-check"></i>
                        Antes del evento
                      </h5>

                    </div>

                    <!-- Card body /-->
                    <div class="card-body">

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_chairs" name="event_logistic_auditorium_chairs">
                          <label class="form-check-label">Sillas</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_presidium" name="event_logistic_auditorium_presidium">
                          <label class="form-check-label">Presidium</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_platform_data" name="event_logistic_auditorium_platform_data">
                          <label class="form-check-label">Datos de plataforma</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_id_data" name="event_logistic_auditorium_id_data">
                          <label class="form-check-label">Datos de ID</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_staff_compliance" name="event_logistic_auditorium_staff_compliance">
                          <label class="form-check-label">Cumplimiento del personal</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_prepare_attendance_list" name="event_logistic_auditorium_prepare_attendance_list">
                          <label class="form-check-label">Elaborar lista de asistencia</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_verify_support_staff" name="event_logistic_auditorium_verify_support_staff">
                          <label class="form-check-label">Verificar que el personal de apoyo realice sus
                            actividades</label>
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_attendance_link" name="event_logistic_auditorium_attendance_link">
                          <label class="form-check-label">Contraseña y link de asistencia</label>
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="<?php echo $_POST['eventDataCheckId']; ?>" type="hidden" id="eventDataCheckId" name="eventDataCheckId">
            
                        </div>
                      </div>

                    </div>

                  </div>
                </div>

                <!-- End event check card -->
                <div class="col-md-12 mb-auto">
                  <div class="card card-primary card-outline sisreg-card-outline cltm-height">

                    <!-- Card header -->
                    <div class="card-header">

                      <!-- Activity data title -->
                      <h5 class="card-text">
                        <i class="fa-solid fa-list-check"></i>
                        Al finalizar el evento
                      </h5>

                    </div>

                    <!-- Card body /-->
                    <div class="card-body">

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_attendace_password_link	" name="event_logistic_auditorium_attendace_password_link	">
                          <label class="form-check-label">Ingresar al chat en el link de asistencia</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_lift_tablecloths" name="event_logistic_auditorium_lift_tablecloths">
                          <label class="form-check-label">Levantar manteles</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="event_logistic_auditorium_personifiers" name="event_logistic_auditorium_personifiers">
                          <label class="form-check-label">Personificadores</label>
                        </div>
                      </div>


                    </div>

                  </div>
                </div>


              </div>

            </div>

            <!-- Card footer -->
            <div class="card-footer bg-gradient-info text-right sisreg-card-footer">
              <em><?php echo SYSTEM_VERSION; ?></em>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Add new button -->
  <button class="btn btn-primary m-2"
          type="submit"
          id="buttonAddCheck"
          name="buttonAddCheck"
          title="Añadir evento">
    <i class="fa-solid fa-floppy-disk"></i> Guardar Chequeo
  </button>

</form>

  <!-- jQuery -->
  <script src="views/resources/plugins/jquery/jquery.min.js"></script>

  <!-- jquery-validation -->
  <script src="views/resources/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="views/resources/plugins/jquery-validation/additional-methods.min.js"></script>

  <!-- Custom JS Code -->
  <script src="views/resources/dist/js/functions.js"></script>


  <script>
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
        window.location = "viewAllEvents";
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