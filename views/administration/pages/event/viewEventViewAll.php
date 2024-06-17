<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show all events screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
   
?>

<!-- Head -->
<head>
  
  <!-- DataTables -->
  <link rel="stylesheet" href="views/resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="views/resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="views/resources/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <!-- Theme style personalized -->
  <link rel="stylesheet" href="views/resources/dist/css/custom.css">

</head>

<!-- Header content -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Eventos</b></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="nav-icon fas fa-calendar-days"></i>
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
              <i class="fa-solid fa-list-check"></i>
              Lista de eventos</h5>

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

          <!-- Card body (table) -->
          <div class="card-body">
            <table id="tableUsers" class="table table-bordered table-striped">

              <thead>
              <tr>
                <th>Id</th>
                <th>Nombre actividad</th>
                <th>Herramientas</th>
                <th>Tipo de actividad</th>
                <th>Tipo de actividad</th>
                <th>Tipo de actividad</th>
                <th>Modalidad</th>

                <th>Programa de actualización para servidores públicos de Carrera Judicial | Número de acciones</th>
                <th>Programa de actualización para servidores públicos de Carrera Judicial | Personas capacitadas</th>
                <th>Programa de actualización para servidores públicos de Carrera Judicial | No. Horas</th>

                <th>Estudios de posgrado: Especialidad en Derecho Anticorrupción | Número de acciones</th>
                <th>Estudios de posgrado: Especialidad en Derecho Anticorrupción | Personas capacitadas</th>
                <th>Estudios de posgrado: Especialidad en Derecho Anticorrupción | No. Horas</th>
                
                <th>Seminarios Académicos para el Desarrollo Especializado en Materia Jurisdiccional y de Investigación | Número de acciones</th>
                <th>Seminarios Académicos para el Desarrollo Especializado en Materia Jurisdiccional y de Investigación | Personas capacitadas</th>
                <th>Seminarios Académicos para el Desarrollo Especializado en Materia Jurisdiccional y de Investigación | No. Horas</th>
                
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | Número de acciones</th>
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | Personas capacitadas</th>
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | No. Horas</th>
                
                <th>Actividades de Divulgación Jueves de Conferencia | Número de acciones</th>
                <th>Actividades de Divulgación Jueves de Conferencia | Personas capacitadas</th>
                <th>Actividades de Divulgación Jueves de Conferencia | No. Horas</th>
                
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | Número de acciones</th>
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | Personas capacitadas</th>
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | No. Horas</th>
                
                <th>Actividades de Diálogo e Intercambio de Opiniones y Paneles de Discusión de Académicos Expertos en la Materia | Número de acciones</th>
                <th>Actividades de Diálogo e Intercambio de Opiniones y Paneles de Discusión de Académicos Expertos en la Materia | Personas capacitadas</th>
                <th>Actividades de Diálogo e Intercambio de Opiniones y Paneles de Discusión de Académicos Expertos en la Materia | No. Horas</th>
                
                <th>Talleres Dirigidos al Personal Jurisdiccional y Administrativo | Número de acciones</th>
                <th>Talleres Dirigidos al Personal Jurisdiccional y Administrativo | Personas capacitadas</th>
                <th>Talleres Dirigidos al Personal Jurisdiccional y Administrativo | No. Horas</th>
                
                <th>Programa Educativo Integral para el Bienestar Socioemocional | Número de acciones</th>
                <th>Programa Educativo Integral para el Bienestar Socioemocional | Personas capacitadas</th>
                <th>Programa Educativo Integral para el Bienestar Socioemocional | No. Horas</th>

                <th>Diplomado | Número de acciones</th>
                <th>Diplomado | Personas capacitadas</th>
                <th>Diplomado | No. Horas</th>
                
                <th>Responsable de tecnología (Directivo)</th>
                <th>Responsable de tecnología (Servicio social)</th>
                <th>Solicitante del evento</th>
                <th>Responsable de la carpeta</th>
                <th>Nombre del magistrado/a</th>

                <th>Fecha de Realización del Evento</th>
                <th>Fecha de Asignación de carpeta</th>
                <th>Fecha de Entrega de Oficios Administrativos para firma</th>
                <th>Fecha de Entrega de Reconocimiento para firma</th>
                <th>Fecha para realización de cartel para difusión</th>
                <th>Fecha de entrega de oficios administrativos</th>
                <th>Fecha de creación y apertura de inscripciones al curso de la plataforma</th>
                <th>Fecha para enviar convocatorias y antes validar el cuerpo del correo y a quienes se convoca</th>
                <th>Fecha de entrega de concentrados y constancias para validación</th>
                <th>Fecha de entrega de carpeta</th>
                
                <th>Fecha de concentrados y constancias para validación</th>
                <th>Fecha de entrega de carpeta integrada para validación</th>
                <th>Fecha para vaciar datos en archivo Excel</th>
                <th>Fecha para vaciar información del personal capacitado en archivo Excel</th>

                <th>Fecha última modificación</th>
                <th>Fecha creción</th>
                
              </tr>
              </thead>

              <tbody style="text-align: center;">
              </tbody>

              <tfoot>
              <tr>
                <th>Id</th>
                <th>Nombre actividad</th>
                <th>Herramientas</th>
                <th>Tipo de actividad</th>
                <th>Tipo de actividad</th>
                <th>Tipo de actividad</th>
                <th>Modalidad</th>

                <th>Programa de actualización para servidores públicos de Carrera Judicial | Número de acciones</th>
                <th>Programa de actualización para servidores públicos de Carrera Judicial | Personas capacitadas</th>
                <th>Programa de actualización para servidores públicos de Carrera Judicial | No. Horas</th>

                <th>Estudios de posgrado: Especialidad en Derecho Anticorrupción | Número de acciones</th>
                <th>Estudios de posgrado: Especialidad en Derecho Anticorrupción | Personas capacitadas</th>
                <th>Estudios de posgrado: Especialidad en Derecho Anticorrupción | No. Horas</th>

                <th>Seminarios Académicos para el Desarrollo Especializado en Materia Jurisdiccional y de Investigación | Número de acciones</th>
                <th>Seminarios Académicos para el Desarrollo Especializado en Materia Jurisdiccional y de Investigación | Personas capacitadas</th>
                <th>Seminarios Académicos para el Desarrollo Especializado en Materia Jurisdiccional y de Investigación | No. Horas</th>

                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | Número de acciones</th>
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | Personas capacitadas</th>
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | No. Horas</th>

                <th>Actividades de Divulgación Jueves de Conferencia | Número de acciones</th>
                <th>Actividades de Divulgación Jueves de Conferencia | Personas capacitadas</th>
                <th>Actividades de Divulgación Jueves de Conferencia | No. Horas</th>

                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | Número de acciones</th>
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | Personas capacitadas</th>
                <th>Actividades de Divulgación: Cursos Presenciales y Virtuales | No. Horas</th>

                <th>Actividades de Diálogo e Intercambio de Opiniones y Paneles de Discusión de Académicos Expertos en la Materia | Número de acciones</th>
                <th>Actividades de Diálogo e Intercambio de Opiniones y Paneles de Discusión de Académicos Expertos en la Materia | Personas capacitadas</th>
                <th>Actividades de Diálogo e Intercambio de Opiniones y Paneles de Discusión de Académicos Expertos en la Materia | No. Horas</th>

                <th>Talleres Dirigidos al Personal Jurisdiccional y Administrativo | Número de acciones</th>
                <th>Talleres Dirigidos al Personal Jurisdiccional y Administrativo | Personas capacitadas</th>
                <th>Talleres Dirigidos al Personal Jurisdiccional y Administrativo | No. Horas</th>

                <th>Programa Educativo Integral para el Bienestar Socioemocional | Número de acciones</th>
                <th>Programa Educativo Integral para el Bienestar Socioemocional | Personas capacitadas</th>
                <th>Programa Educativo Integral para el Bienestar Socioemocional | No. Horas</th>

                <th>Diplomado | Número de acciones</th>
                <th>Diplomado | Personas capacitadas</th>
                <th>Diplomado | No. Horas</th>

                <th>Responsable de tecnología (Directivo)</th>
                <th>Responsable de tecnología (Servicio social)</th>
                <th>Solicitante del evento</th>
                <th>Responsable de la carpeta</th>
                <th>Nombre del magistrado/a</th>

                <th>Fecha de Realización del Evento</th>
                <th>Fecha de Asignación de carpeta</th>
                <th>Fecha de Entrega de Oficios Administrativos para firma</th>
                <th>Fecha de Entrega de Reconocimiento para firma</th>
                <th>Fecha para realización de cartel para difusión</th>
                <th>Fecha de entrega de oficios administrativos</th>
                <th>Fecha de creación y apertura de inscripciones al curso de la plataforma</th>
                <th>Fecha para enviar convocatorias y antes validar el cuerpo del correo y a quienes se convoca</th>
                <th>Fecha de entrega de concentrados y constancias para validación</th>
                <th>Fecha de entrega de carpeta</th>

                <th>Fecha de concentrados y constancias para validación</th>
                <th>Fecha de entrega de carpeta integrada para validación</th>
                <th>Fecha para vaciar datos en archivo Excel</th>
                <th>Fecha para vaciar información del personal capacitado en archivo Excel</th>

                <th>Fecha última modificación</th>
                <th>Fecha creación</th>
              </tr>
              </tfoot>

            </table>
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


<!-- jQuery -->
<script src="views/resources/plugins/jquery/jquery.min.js"></script>

<!-- Custom JS Code -->
<script src="views/resources/dist/js/functions.js"></script>

<script>

  // Load spanish language for DataTables
  loadSpanishLanguage();

  /***
   * DataTable initialize function
   * @returns void
   * @type {*|jQuery|HTMLElement}
   */
  let table = $(function () {
    $("#tableUsers").DataTable({
      "destroy": true,
      "processing": true,
      "serveSide": true,
      "columnDefs": [
        { "targets": [0,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,42,43,44,45,46,47,48,49,50,51,52,53,54,55], visible: false },
      ],
      "ajax": {
        'url': 'controllers/controllerEvent.php',
        'type': 'GET',
        'data': {
          getAllDataEvent: 'getAllDataEvent',
        },
      },
      "dom": 'Bfrtip',
      buttons: [
        'pageLength',
        'csv',
        'print',
        'colvis'
      ],
      language: {
        buttons: buttons,
        lengthMenu: lengthMenu,
        infoEmpty: infoEmpty,
        info: info,
        search: search,
        zeroRecords: zeroRecords,
        loadingRecords: loadingRecords,
        paginate: paginate
      },
      "responsive": true,
      "lengthChange": true,
      lengthMenu: [
        [10, 25, 50, -1],
        ['10' + rows, '25' + rows, '50' + rows, showAll]
      ],
      "autoWidth": false
    }).buttons().container().appendTo('#tableUsers_wrapper .col-md-6:eq(0)');
  });

  

</script>