<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the list of users screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
?>

<!-- Head /-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- System full name -->
  <title>COLPOS</title>
  
  <!-- DataTables -->
  <link rel="stylesheet" href="views/resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="views/resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="views/resources/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <!-- Theme style personalized -->
  <link rel="stylesheet" href="views/resources/dist/css/custom.css">

</head>

<!-- Header /-->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Usuarios</b></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa fa-users"></i>
        </ol>
      </div>

    </div>
  </div>
</div>

<!-- Content /-->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Content -->
        <div class="card card-outline card-olive">

          <!-- Card header -->
          <div class="card-header">

            <!-- Subtitle -->
            <h5 class="card-title">
              <i class="fa fa-users"></i>
              <b>Lista de usuarios</b>
            </h5>

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
                <th>ID</th>
                <th>Herramientas</th>
                <th>Imagen</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Fecha de creación</th>
              </tr>
              </thead>

              <tbody style="text-align: center;">
              </tbody>

              <tfoot>
              <tr>
                <th>ID</th>
                <th>Herramientas</th>
                <th>Imagen</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Fecha de creación</th>
              </tr>
              </tfoot>

            </table>
          </div>

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

<!-- Custom JS Code -->
<script src="views/resources/dist/js/functions.js"></script>

<!-- JS code -->
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
      "ajax": {
        'url': 'controllers/controllerUser.php',
        'type': 'GET',
        'data': {
          getAllData: 'getAllData',
        },

      },
      "dom": 'Bfrtip',
      buttons: [
        'pageLength',
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

  /**
   * Launch a modal to establish the change in the value of the dollar in Mexican pesos
   * @returns void
   * @param {int} idUser
   * @param {string} username
   */
  function userDeleteModal(idUser, username) {

    if (idUser == 1) {
      modalErrorDeleteUserAdmin();
    } else {
      Swal.fire({
        title: "¿Esta seguro que desea eliminar el usuario:? " + username,
        text: "Esta operación no se puede revertir",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#007bff",
        cancelButtonColor: "#d33",
        confirmButtonText: "¡Si, borrarlo!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.isConfirmed) {
          deleteUserAjax(idUser, username);
        }
      });
    }

  }

  /***
   * Function that executes the post method to delete a user via Ajax
   * @returns void
   * @param {int} idUser
   * @param {string} username
   */
  function deleteUserAjax(idUser, username) {

    // Function that sends and receives response with AJAX
    $.ajax({
      type: 'POST',  // Shipping with POST method
      url: 'controllers/controllerUser.php',  // Destination file (the PHP that processes the data)
      data: {idUser: idUser} // Data that is sent
    }).done(function (msg) {  // Function that is executed if everything went well
      console.log("OK: " + msg);

      let table = $('#tableUsers').DataTable();
      table.ajax.reload();

      // Successful removal console message
      console.log(msg.status);

      if (msg == 1) {

        // Successful removal toast message
        modalSuccessfulDeleteUser(username);
      } else {
        // Successful removal toast message
        modalErrorDeleteUser();
      }


    }).fail(function (jqXHR, textStatus, errorThrown) { // Function that is executed if something has gone wrong

      // Error message in console
      console.log("The following error occured: " + textStatus + " " + errorThrown);

      // Error removal console message
      console.log(msg.status);

      // Error removal toast message
      modalErrorDeleteUser();

    });
  }

  /**
   * Throw an error modal when deleting the admin user
   * @return void
   */
  function modalErrorDeleteUserAdmin() {
    Swal.fire({
      icon: "error",
      title: "¡Error al eliminar usuario!",
      text: "¡No se puede eliminar un usuario de tipo administrador!",
      confirmButtonColor: "#007bff",
    });
  }

  /**
   * Throw an error modal when deleting user
   * @return void
   * @param {string} username
   */
  function modalSuccessfulDeleteUser(username) {
    Swal.fire({
      title: ' ¡Error al eliminar usuario! ',
      text: ' No se pudo eliminar el usuario ' + username,
      icon: 'success',
      confirmButtonColor: '#3085d6'
    })
  }

  /**
   * Throw an error modal when deleting user
   * @return void
   */
  function modalErrorDeleteUser() {
    Swal.fire({
      title: '¡Eliminación exitosa!',
      text: 'Se ha eliminado de manera exitosa el usuario:',
      icon: 'error',
      confirmButtonColor: '#3085d6'
    })
  }

</script>