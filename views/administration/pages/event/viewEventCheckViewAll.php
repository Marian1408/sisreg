<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show all events check screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */

?>

<!-- Head /-->
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
              Lista de tareas cumplidas</h5>
            
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
                <th>Nombre evento</th>
                <th>Responsable de Tecnología (Directivo)</th>
                <th>Responsable de Tecnología (Servicio Social)</th>
                <th>Solicitante del evento</th>
                <th>Responsable de carpeta</th>
                <th>Sillas</th>
                <th>Presidium</th>
                <th>Datos de plataforma</th>
                <th>Datos de ID</th>
                <th>Cumplimiento del personal</th>
                <th>Elaborar lista de asistencia</th>
                <th>Verificar que el personal de apoyo realice sus actividades</th>
                <th>Contraseña y link de asistencia</th>
                <th>Ingresar al chat en el link de asistencia</th>
                <th>Levantar manteles</th>
                <th>Personificadores</th>
                <th>Fecha creación</th>
              
              </tr>
              </thead>
              
              <tbody style="text-align: center;">
              </tbody>
              
              <tfoot>
              <tr>
                <th>Id</th>
                <th>Nombre evento</th>
                <th>Responsable de Tecnología (Directivo)</th>
                <th>Responsable de Tecnología (Servicio Social)</th>
                <th>Solicitante del evento</th>
                <th>Responsable de carpeta</th>
                <th>Sillas</th>
                <th>Presidium</th>
                <th>Datos de plataforma</th>
                <th>Datos de ID</th>
                <th>Cumplimiento del personal</th>
                <th>Elaborar lista de asistencia</th>
                <th>Verificar que el personal de apoyo realice sus actividades</th>
                <th>Contraseña y link de asistencia</th>
                <th>Ingresar al chat en el link de asistencia</th>
                <th>Levantar manteles</th>
                <th>Personificadores</th>
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
        { "targets": [0], visible: false },
      ],
      "ajax": {
        'url': 'controllers/controllerEventLogistic.php',
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