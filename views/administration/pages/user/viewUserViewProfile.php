<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           View file
   * File description:    This file show the user profile screen.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */

  require_once (dirname (__DIR__, 4) . '/includes/functions.php');
  require_once (dirname (__DIR__, 4) . '/controllers/controllerUser.php');
  require_once (dirname (__DIR__, 4) . '/controllers/controllerAdministrationRouter.php');
  
  $objectUser = new ControllerUser();
  
  // Get user data with user id since of the POST variable
  if (isset($_POST['userData'])) {
    $userId = $_POST['userData'];
    $data = $objectUser->getUserById($userId);
  } else {
    $data = $objectUser->getUserById($_SESSION['user_id']);
  }
  
?>

<!-- Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      
      <!-- Title -->
      <div class="col-sm-6">
        <h1><?php echo $lang['PROFILE']; ?></h1>
      </div>

      <!-- Icon page -->
      <div class="col-sm-6 icon-page">
        <ol class="breadcrumb float-sm-right">
          <i class="fa fa-user-plus"></i>
        </ol>
      </div>

    </div>
  </div>
</section>

<!-- Content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="card card-maroon" id="test">

          <!-- Card header -->
          <div class="card-header">

            <!-- Card title -->
            <h3 class="card-title"><?php echo $lang['USER_PROFILE'] ?></h3>

            <!-- Card tools -->
            <div class="card-tools">

              <!-- Close button -->
              <button type="button" class="btn btn-tool" data-card-widget="remove"
                      title="<?php echo $lang['CLOSE'] ?>" style="visibility: hidden;">
                <i class="fas fa-times"></i>
              </button>

              <!-- Maximize button -->
              <button type="button" class="btn btn-tool" data-card-widget="maximize"
                      title="<?php echo $lang['MAXIMIZE'] ?>"><i class="fas fa-expand"></i>
              </button>

            </div>

          </div>

          <!-- Form -->
          <form enctype="multipart/form-data" id="updateForm">

            <div class="card-body">
              <div class="row">

                <!-- Column one -->
                <div class="col-md-4">

                  <div class="card card-lightblue card-outline">

                    <!-- Main data title -->
                    <div class="card-header">
                      <h5 class="card-text">
                        <i class="fas fa-person-circle-check"></i>
                        <?php echo $lang['USER_MAIN_DATA'] ?>
                      </h5>
                    </div>

                    <div class="card-body">

                      <!-- Username -->
                      <div class="form-group">
                        <label for="inputUserUsername"> <?php echo $lang['USER_USER'] ?></label>
                        <input type="text" class="form-control" name="inputUserUsername"
                               id="inputUserUsername"
                               placeholder="<?php echo $lang['USER_USER'] ?>"
                               value="<?php echo $data['user_name'] ?>">
                        <div id="inputUserUsernameHelp" aria-required="true"
                             class="form-help"><?php echo $lang['USER_USER_HELP']; ?></div>
                      </div>

                      <!-- Password -->
                      <div class="form-group">
                        <label for="inputUserPassword"><?php echo $lang['USER_PASSWORD'] ?></label>
                        <input type="password" class="form-control" name="inputUserPassword"
                               id="inputUserPassword"
                               placeholder="<?php echo $lang['USER_PASSWORD'] ?>"
                               value="<?php echo $data['user_password'] ?>">
                        <div id="inputUserPasswordHelp"
                             class="form-help"><?php echo $lang['USER_PASSWORD_HELP']; ?></div>
                      </div>

                      <!-- Name -->
                      <div class="form-group">
                        <label for="inputUserName"><?php echo $lang['USER_NAME']; ?></label>
                        <input type="text" class="form-control" name="inputUserName"
                               id="inputUserName"
                               placeholder="<?php echo $lang['USER_NAME']; ?>"
                               value="<?php echo $data['user_name'] ?>">
                        <div id="inputUserNameHelp" aria-required="true"
                             class="form-help"><?php echo $lang['USER_NAME_HELP']; ?></div>
                      </div>

                      <!-- Last name -->
                      <div class="form-group">
                        <label for="inputUserLastName"><?php echo $lang['USER_LAST_NAME']; ?></label>
                        <input type="text" class="form-control" name="inputUserLastName"
                               id="inputUserLastName"
                               placeholder="<?php echo $lang['USER_LAST_NAME']; ?>"
                               value="<?php echo $data['user_last_name'] ?>">
                        <div id="inputUserLastNameHelp"
                             class="form-help"><?php echo $lang['USER_LAST_NAME_HELP']; ?></div>
                      </div>

                      <!-- Rol -->
                      <div class="form-group">
                        <label for="selectUserRol"><?php echo $lang['USER_ROL']; ?></label>
                        <select class="form-control" name="selectUserRol" id="selectUserRol">
                          <?php
                            $objectUser = new User();
                            $nameRol = $objectUser->getRolNameWithTheRolId($data['user_id']);
                            
                            $objecMain = new controllerMain();
                            $dataNameRol = $objecMain->getDataFromKey('roles', 'rol_name');
                            foreach ($dataNameRol as $index) { ?>
                              <option <?php
                                if ($nameRol == $index) {
                                  echo "selected";
                                }
                              ?> value=" <?php echo $index; ?> "> <?php echo $index; ?> </option>
                              <?php
                            }
                          ?>
                        </select>
                        <div id="selectUserRolHelp"
                             class="form-help"><?php echo $lang['USER_ROL_HELP']; ?>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- Column two -->
                <div class="col-md-4">

                  <div class="card card-lightblue card-outline">
                    <div class="card-header">
                      <h5 class="card-text">
                        <i class="fas fa-person-circle-question"></i>
                        Datos secundarios
                      </h5>
                    </div>

                    <div class="card-body">

                      <!-- Email -->
                      <div class="form-group">
                        <label for="inputUserEmail">Correo electrónico</label>
                        <input type="email" class="form-control" name="inputUserEmail"
                               id="inputUserEmail"
                               placeholder="Correo electrónico"
                               value="<?php echo $data['user_mail'] ?>">
                        <div id="inputUserEmailHelp" class="form-help">El correo electrónico
                          debe ser válido.
                        </div>
                      </div>

                      <!-- Phone -->
                      <div class="form-group">
                        <label for="inputUserPhone">Teléfono</label>
                        <input type="text" class="form-control" name="inputUserPhone"
                               id="inputUserPhone"
                               placeholder="Teléfono" value="<?php echo $data['user_phone'] ?>">
                        <div id="inputUserPhoneHelp" class="form-help">Número telefónico con
                          lada incluida.
                        </div>
                      </div>

                      <!-- Description -->
                      <div class="form-group">
                        <div class="form-group">
                          <label for="textAreaUserDescription">Descripción</label>
                          <textarea id="textAreaUserDescription"
                                    name="textAreaUserDescription" class="form-control"
                                    rows="3"
                                    placeholder="Escribe una descripición ..."><?php if (!isset($data['user_description']) || $data['user_description'] == null || $data['user_description'] == '') {
                              echo 'No hay información.';
                            } else {
                              echo $data['user_description'];
                            }
                            
                            ?></textarea>
                          <div id="textAreaUserDescriptionHelp" class="form-help">
                            Información extra sobre el usuario.
                          </div>
                        </div>
                      </div>
                      <!-- Language -->
                      <div class="form-group">
                        <label for="selectUserLanguage">Idioma</label>
                        <select class="form-control" name="selectUserLanguage"
                                id="selectUserLanguage">
                          <option value="es"><?php echo $lang['USER_LANGUAGE_SPANISH'] ?></option>
                          <option value="en"><?php echo $lang['USER_LANGUAGE_ENGLISH'] ?></option>
                        </select>
                        <div id="selectUserLanguageHelp" class="form-help">El idioma de la
                          interfaz que el usuario verá
                          al iniciar sesión. Si no selecciona uno, el idioma predeterminado
                          será el ingles.
                        </div>
                      </div>

                    </div>

                  </div>


                </div>

                <!-- Column three -->
                <div class="col-md-4">

                  <div class="card card-lightblue card-outline">
                    <div class="card-header">
                      <h5 class="card-text">
                        <i class="fas fa-image-portrait"></i>
                        <?php echo $lang['USER_IMAGE']; ?>
                      </h5>
                    </div>

                    <div class="card-body">

                      <!-- Image -->
                      <div>
                        <img src="<?php
                          if ($data['user_image'] == '' || !isset($data['user_image']) || $data['user_image'] == null) {
                            echo 'views/resources/dist/img/users/no_image.jpg';
                          } else {
                            echo $data['user_image'];
                          }
                        ?>" class="img-thumbnail" alt="...">
                      </div>


                      <!-- Image upload -->
                      <div class="form-group">
                        <label for="inputFileUserImageUpload"><?php echo $lang['USER_IMAGE']; ?></label>
                        <div class="input-group">

                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                                   id="inputFileUserImageUpload"
                                   name="inputFileUserImageUpload" required>
                            <label class="custom-file-label" for="inputFileUserImageUpload">
                              Seleccionar archivo</label>
                          </div>

                          <div class="input-group-append">

                            <!-- <button type="submit" class="btn btn-block btn-default btn-flat">Subir</button> -->
                          </div>
                        </div>
                        <div id="inputFileUserImageUploadHelp" class="form-help">Seleccione un
                          archivo para foto de
                          perfil de
                          usuario.
                          <?php echo $lang['USER_IMAGE_MORE_HELP']; ?>
                          <br>
                        </div>
                      </div>


                    </div>

                  </div>


                </div>

              </div>

              <button type="submit" disabled class="btn btn-primary submitBtn" value="SAVE"
                      id="buttonUserSave"
                      name="buttonUserSave"><?php echo $lang['USER_UPDATE_BUTTON']; ?></button>
            </div>


            <!-- Card footer -->
            <div class="card-footer silence silence-lightblue">
              <?php echo $lang['GCAMARENAPROG']; ?>
            </div>


        </div>

        </form>

      </div>
    </div>
  </div>
</section>

<!-- jQuery -->
<script src="views/resources/plugins/jquery/jquery.min.js"></script>
<!-- bs-custom-file-input -->
<script src="views/resources/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- jquery-validation -->
<script src="views/resources/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="views/resources/plugins/jquery-validation/additional-methods.min.js"></script>


<!-- JS Code -->
<script>


  /* document.getElementById("buttonUserSubmit").addEventListener("click", function () {
       console.log('Click');
       updateData();
   })*/

  // Initialize file input custom
  bsCustomFileInput.init();


  /***
   * Update user data
   */
  $(document).ready(function (e) {

    $("#updateForm").on('submit', function (e) {

      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'controllers/controllerUserAjax.php',
        data: new FormData(this),
        contentType: false,
        dataType: 'json',
        cache: false,
        processData: false,
        beforeSend: function () {
          $('.submitBtn').attr("disabled", "disabled");
          $('#updateForm').css("opacity", ".5");
        },
        success: function (msg) {
          //console.log(msg);
          $('#updateForm').css("opacity", "");
          $(".submitBtn").removeAttr("disabled");
          Swal.fire({
            title: ' <?php echo $lang['MODAL_UPDATE_SUCCESSFUL_TITLE'] ?> ',
            text: ' <?php echo $lang['MODAL_UPDATE_SUCCESSFUL_MESSAGE'] ?> ',
            icon: 'success',
            confirmButtonColor: '#3085d6'
          })
        }
      });
    });

    /***
     * File type validation
     */
    $("#inputFileUserImageUpload").change(function () {

      let file = this.files[0];
      console.log(file);

      // Get type file image
      let imageFileType = file.type;
      let imageFileSize = file.size;
      let imageFileName = file.name;

      let buttonUserSave = $("#buttonUserSave");

      // File types not allowed
      let match = ["image/jpeg", "image/png", "image/jpg"];

      // Image type validation
      if (!((imageFileType === match[0]) || (imageFileType === match[1]) || (imageFileType === match[2]))) {

        // Error file type modal
        Swal.fire({
          title: ' <?php echo $lang['MODAL_ERROR_TITLE_IMAGE_TYPE'] ?> ',
          text: ' <?php echo $lang['MODAL_ERROR_MESSAGE_IMAGE_TYPE'] ?> ',
          icon: 'error',
          confirmButtonColor: '#3085d6'
        })
        buttonUserSave.prop("disabled", true);
        $("#file").val('');
        this.files[0] = null;
        return false;

      }
      // Image size validation
      else if (imageFileSize > 25000) {
        // Error file type modal
        Swal.fire({
          title: ' <?php echo $lang['MODAL_ERROR_TITLE_IMAGE_SIZE'] ?> ',
          text: ' <?php echo $lang['MODAL_ERROR_MESSAGE_IMAGE_SIZE'] ?> ',
          icon: 'error',
          confirmButtonColor: '#3085d6'
        })
        buttonUserSave.prop("disabled", true);
        $("#file").val('');
        this.files[0] = null;
        return false;
      }
      // Image dimensions validation
      else {

        let reader = new FileReader();

        //Read the contents of Image File.
        reader.readAsDataURL(this.files[0]);
        reader.onload = function (e) {

          //Initiate the JavaScript Image object.
          let image = new Image();

          //Set the Base64 string return from FileReader as source.
          image.src = e.target.result;

          //Validate the File Height and Width.
          image.onload = function () {
            console.log(this.height);
            let height = this.height;
            let width = this.width;
            if (height > 160 || width > 160) {

              // Error file dimensions modal
              Swal.fire({
                title: ' <?php echo $lang['MODAL_ERROR_TITLE_IMAGE_DIMENSIONS'] ?> ',
                text: ' <?php echo $lang['MODAL_ERROR_MESSAGE_IMAGE_DIMENSIONS'] ?> ',
                icon: 'error',
                confirmButtonColor: '#3085d6'
              })

              buttonUserSave.prop("disabled", true);
              $("#file").val('');
              return false;
            }
            buttonUserSave.prop("disabled", false);
            Swal.fire({
              title: ' <?php echo $lang['MODAL_SUCCESSFUL_TITLE'] ?> ',
              text: ' <?php echo $lang['MODAL_SUCCESSFUL_MESSAGE'] ?> ' + imageFileName,
              icon: 'success',
              confirmButtonColor: '#3085d6'
            })
            return true;
          };
        };

      }

    });
  });

  /*    function updateData() {
          var inputUserUsername = document.getElementById("inputUserUsername");
          var inputUserPassword = document.getElementById("inputUserPassword");
          var inputUserName = document.getElementById("inputUserName");
          var inputUserLastName = document.getElementById("inputUserLastName");
          var selectUserRol = document.getElementById("selectUserRol");

          var test = document.getElementById("test");

          var header =
              "username=" + inputUserUsername.value +
              "&password=" + inputUserPassword.value +
              "&name=" + inputUserName.value +
              "&lastname=" + inputUserLastName.value +
              "&rol=" + selectUserRol.value;


          var xmlhttp = new XMLHttpRequest();

          xmlhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                  //Se completo correctamente
                  //alert(this.responseText);
          /!*        $('#myModal').modal({
                      show: true
                  })*!/
                  $(document).Toasts('create', {
                      title: 'Toast Title',
                      body: this.responseText
                  })
              }
          }

          xmlhttp.open("POST", "controllers/controllerUserAjax.php", true);
          xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xmlhttp.send(header);

      }*/


</script>
<!-- JS Code /-->