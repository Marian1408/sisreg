<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the add new user screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once ('controllers/controllerUserRoles.php');
  $userRolesObject = new ControllerUserRoles();
?>

<!-- Header /-->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><b>Añadir usuario</b></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 sisreg-icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa fa-user-plus"></i>
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

          <form action="controllers/controllerUser.php"
                enctype="multipart/form-data"
                method="post"
                id="addNewUserForm"
                name="addNewUserForm">

            <!-- Card header -->
            <div class="card-header sisreg-card-header">

              <!-- Subtitle -->
              <h5 class="card-title sisreg-color-white">
                <i class="fa fa-user-plus"></i>
                <b>Datos del usuario</b>
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

                    <!-- Main data /-->
                    <div class="col-md-4">
                      <div class="card card-olive card-outline sisreg-card-outline">

                        <!-- Card header -->
                        <div class="card-header">

                          <!-- Title -->
                          <h5 class="card-title">
                            <i class="fas fa-person-circle-check"></i>
                            <b>Datos principales</b>
                          </h5>

                        </div>

                        <!-- Card body /-->
                        <div class="card-body">

                          <!-- Username -->
                          <div class="form-group">
                            <label for="inputUserName">Usuario *</label>
                            <input type="text"
                                   class="form-control"
                                   id="inputUserName"
                                   name="inputUserName"
                                   required
                                   title="Escribe un nombre de usuario para iniciar sesión."
                                   placeholder="Usuario">
                            <div id="inputUserNameHelp" class="form-help">Escribe un nombre de usuario para iniciar
                              sesión.
                            </div>
                          </div>

                          <!-- Password -->
                          <div class="form-group">
                            <label for="inputPassword">Contraseña *</label>
                            <input type="password"
                                   class="form-control"
                                   id="inputPassword"
                                   name="inputPassword"
                                   required
                                   title="Escribe una contraseña."
                                   placeholder="Contraseña">
                            <div id="inputPasswordHelp"
                                 class="form-help">Escribe una contraseña.
                            </div>
                          </div>

                          <!-- Name -->
                          <div class="form-group">
                            <label for="inputName">Nombre *</label>
                            <input type="text"
                                   class="form-control"
                                   id="inputName"
                                   name="inputName"
                                   required
                                   title="El nombre de usuario."
                                   placeholder="Nombre">
                            <div id="inputNameHelp" class="form-help">El nombre de usuario.</div>
                          </div>

                          <!-- Last name -->
                          <div class="form-group">
                            <label for="inputLastname">Apellido *</label>
                            <input type="text"
                                   class="form-control"
                                   id="inputLastname"
                                   name="inputLastname"
                                   required
                                   placeholder="Apellido">
                            <div id="inputLastnameHelp"
                                 class="form-help">El apellido del usuario.
                            </div>
                          </div>

                          <!-- Role -->
                          <div class="form-group">
                            <label for="selectRole">Rol *</label>
                            <select class="form-control"
                                    name="selectRole"
                                    id="selectRole"
                                    required>
                              <option value="" disabled selected>Selecciona un rol</option>
                              <?php
                                $result = $userRolesObject->getAllUserRoles ();
                                foreach ($result as $index => $item) { ?>
                                  <option value="<?php echo $item['user_role_id']; ?>">
                                    <?php echo $item['user_role_name']; ?>
                                  </option>';
                                <?php }
                              ?>
                            </select>
                            <div id="selectRoleHelp" class="form-help">El rol del usuario limita los permisos para ver o
                              utilizar ciertas funciones.
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>

                    <!-- Secondary data /-->
                    <div class="col-md-4">
                      <div class="card card-olive card-outline sisreg-card-outline">

                        <!-- Card header -->
                        <div class="card-header">

                          <!-- Title -->
                          <h5 class="card-title">
                            <i class="fas fa-person-circle-question"></i>
                            <b>Datos principales</b>
                          </h5>

                        </div>

                        <!-- Card body /-->
                        <div class="card-body">

                          <!-- E-mail -->
                          <div class="form-group">
                            <label for="inputEmail">Correo electrónico *</label>
                            <input type="email"
                                   class="form-control"
                                   name="inputEmail"
                                   id="inputEmail"
                                   title="El correo electrónico debe ser válido."
                                   required
                                   placeholder="Correo electrónico">
                            <div id="inputEmailHelp" class="form-help">El correo electrónico debe ser válido.
                            </div>
                          </div>

                          <!-- Phone -->
                          <div class="form-group">
                            <label for="inputPhone">Teléfono</label>
                            <input type="text"
                                   class="form-control"
                                   name="inputPhone"
                                   id="inputPhone"
                                   placeholder="Teléfono">
                            <div id="inputPhoneHelp" class="form-help">Número telefónico con lada incluida.
                            </div>
                          </div>

                          <!-- Description -->
                          <div class="form-group">
                            <div class="form-group">
                              <label
                                  for="textAreaDescription">Información extra</label>
                              <textarea id="textAreaDescription"
                                        name="textAreaDescription"
                                        class="form-control"
                                        rows="4"
                                        placeholder="Información extra..."></textarea>
                              <div id="textAreaDescriptionHelp"
                                   class="form-help">Información extra sobre el usuario.
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>

                    <!-- Image data /-->
                    <div class="col-md-4">
                      <div class="card card-olive card-outline sisreg-card-outline">

                        <!-- Card header -->
                        <div class="card-header">

                          <!-- Title -->
                          <h5 class="card-title">
                            <i class="fas fa-image-portrait"></i>
                            <b>Imágen</b>
                          </h5>

                        </div>

                        <!-- Card body /-->
                        <div class="card-body">

                          <!-- Image -->
                          <div class="text-center">
                            <img src="views/resources/dist/img/users/no_image.jpg"
                                 class="img-thumbnail"
                                 id="imageUser"
                                 alt="...">
                            <div id="imageUserHelp" class="form-help">Esta será la imágen de usuario.</div>
                          </div>

                          <!-- Image upload -->
                          <div class="form-group">
                            <label>Seleccionar un archivo</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file"
                                       class="custom-file-input"
                                       id="customFile"
                                       name="customFile"
                                       title="Seleccionar un archivo">
                                <label class="custom-file-label" id="labelCustomFile"
                                       for="customFile">Seleccionar un archivo</label>
                              </div>
                            </div>

                            <ul class="cltm-none" id="customFileHelp">
                              <li class="home">El archivo debe tener las dimensiones de 160px x 160px</li>
                              <li class="home">Formatos de imágen soportados: *.jpg y *.png</li>
                              <li class="home">El archivo no debe ser mayor a 100 KB</li>
                            </ul>

                          </div>

                        </div>

                      </div>
                    </div>

                  </div>


                </div>

                <!-- Add button -->
                <button class="btn btn-primary ml-4 mb-2"
                        type="submit"
                        id="buttonAddNew"
                        name="buttonAddNew"
                        disabled
                        title="Añadir evento">
                  <i class="fa-solid fa-floppy-disk"></i> Añadir usuario
                </button>


              </div>
            </div>


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

<!-- bs-custom-file-input -->
<script src="views/resources/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- Custom JS Code -->
<script src="views/resources/dist/js/functions.js"></script>

<script>

  /**
   * Input file initialization
   */
  $(function () {
    bsCustomFileInput.init();
  });

  /**
   * jQuery Validation configuration
   */
  $(function () {

    let addNewUserForm = $('#addNewUserForm').validate({
      rules: {

        inputUserName: {
          required: true,
        },
        inputPassword: {
          required: true,
        },
        inputName: {
          required: true,
        },
        inputLastname: {
          required: true,
        },
        selectRole: {
          required: true,
        },
        inputEmail: {
          required: true,
        },
        customFile: {
          required: true,
        }
      },

      messages: {

        inputUserName: {
          required: "El campo es obligatorio"
        },
        inputPassword: {
          required: "El campo es obligatorio"
        },
        inputName: {
          required: "El campo es obligatorio"
        },
        inputLastname: {
          required: "El campo es obligatorio"
        },
        selectRole: {
          required: "El campo es obligatorio"
        },
        inputEmail: {
          required: "El campo es obligatorio"
        },
        customFile: {
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
  $('#addNewUserForm').on('blur keyup change input', function (event) {
    validateForm('#addNewUserForm');
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


  // Send POST data with Ajax (Pending)
  $("#addNewUserForm").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'controllers/controllerUser.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (msg) {
        if (msg == 1) {
          modalSuccessfulSaveRecordUser();
        } else {
          modalErrorSaveRecordUser();
        }
      }
    });
  });


  /***
   * Function that executes the post method to delete a user via Ajax
   *
   * @returns void
   * @param {int} idUser
   * @param {string} username
   */
  function addUserAjax() {
    let myFile = $('#customFile').prop('files');
    console.log(myFile);
    //let file2 = $('#customFile').next().val();

    //file = this.files[0]


    // console.log(file.files[0]);
    //let file = $('#customFile');

    let formData = new FormData();
    formData.append("username", "Groucho");
    formData.append("accountnum", 123456); //

// HTML file input user's choice...
    formData.append("customFile", myFile[0]);


    // Function that sends and receives response with AJAX
    $.ajax({
      type: 'POST',
      url: 'controllers/controllerUser.php',
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      //data: new FormData(this),

      success: function (msg) {
        console.log(msg);

        $('.statusMsg').html('');
        if (msg == 'ok') {
          console.log('ok');
        } else {
          console.log('BAD');
        }
      }

    }).done(function (msg) {  // Function that is executed if everything went well
      console.log("OK: " + msg);


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
   * Image validation
   */
  $("#customFile").on('change', function () {

    let file = this.files[0];
    let img = new Image();

    // Get the file extension
    let extension = file.name.replace(/^.*\./, '');

    // Allowed file type extensions
    let img_ex = /(.jpg|.jpeg|.png|.gif)$/i;

    // Validate file type, only jpg, jpeg, png and gif
    if (!img_ex.exec(file.name)) {

      // File extension error modal
      modalErrorExtensionImage(extension);

      // Add the src attribute to the image object with the default image path
      $("#imageUser").attr('src', 'views/resources/dist/img/users/no_image.jpg');

    } else {

      img.onload = function () {

        // Validate the dimensions of the image, they must be 160px x 160px
        if (this.width != 160 && this.height != 160) {

          // Image dimensions error modal
          modalErrorDimensionsImage(this.width, this.height);

          // Add the src attribute to the image object with the default image path
          $("#imageUser").attr('src', 'views/resources/dist/img/users/no_image.jpg');

        } else {

          // Validation of image size no greater than 100 KB
          if (file.size > 100000) {

            // Image size error modal
            modalErrorSizeImage(file.size);

          } else {

            // Add the src attribute to the image object with the selected image
            $("#imageUser").attr('src', URL.createObjectURL(file));

          }
        }
      }
    }

    // Image size error modal
    modalSuccessfulImage(file.name);

    // Load the default image
    img.src = URL.createObjectURL(file);
  });

  /**
   * Successful save record event modal
   */
  function modalSuccessfulSaveRecordUser() {
    Swal.fire({
      title: 'Registro guardado',
      text: 'Registro guardado exitosamente',
      confirmButtonText: 'Aceptar',
      icon: 'success',
      confirmButtonColor: '#3085d6'
    }).then(function () {
      window.location = "userViewAllUsers";
    })
  }

  /**
   * Error save record event modal
   */
  function modalErrorSaveRecordUser() {
    Swal.fire({
      title: 'Error al guardar',
      text: 'Error al guardar el registro',
      icon: 'error',
      confirmButtonColor: '#3085d6'
    })
  }

  /**
   * Throw an error modal when the file size is exceeded to more than 100 KB
   * @return void
   * @param {number} size
   */
  function modalSuccessfulImage(filename) {
    Swal.fire({
      title: '¡Imágen correcta!',
      text: 'Se seleccionó correctamente el archivo de imagen: ' + filename,
      confirmButtonText: 'Aceptar',
      icon: 'success',
      confirmButtonColor: '#3085d6'
    })
  }

  /**
   * Throw an error modal when the file size is exceeded to more than 100 KB
   * @return void
   * @param {number} size
   */
  function modalErrorSizeImage(size) {

    let realSize = size / 1024;
    Swal.fire({
      title: '¡Error, el archivo excede los 100 KB!',
      text: 'El tamaño de archivo es de: ' + realSize.toFixed(2) + ' KB',
      confirmButtonText: 'Aceptar',
      icon: 'error',
      confirmButtonColor: '#3085d6'
    })
  }

  /**
   * Throws an error modal because the image dimensions exceed 160px x 160px
   * @return void
   * @param {number} width
   * @param {number} height
   */
  function modalErrorDimensionsImage(width, height) {
    Swal.fire({
      title: '¡Error, el archivo excede las dimensiones 160px x 160px!',
      text: 'Las dimensiones de la imágen son de: ' + width + ' px' + 'y' + height + 'px',
      confirmButtonText: 'Aceptar',
      icon: 'error',
      confirmButtonColor: '#3085d6'
    })
  }

  /**
   * Throw an error modal when the file extension is bad
   * @return void
   * @param {number} size
   */
  function modalErrorExtensionImage(extension) {
    Swal.fire({
      title: '¡Error, en al tipo de archivo!',
      text: 'El tipo de archivo no es imágen, tien extensión: ' + extension,
      confirmButtonText: 'Aceptar',
      icon: 'error',
      confirmButtonColor: '#3085d6'
    })
  }

</script>