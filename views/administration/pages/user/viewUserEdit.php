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
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <!-- Title -->
      <div class="col-sm-6">
        <h1><?php echo $lang['EDIT_USER']; ?></h1>
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

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="card card-lightblue">

          <!-- Card header -->
          <div class="card-header">

            <!-- Card title -->
            <h3 class="card-title"><?php echo $lang['EDIT_USER_PROFILE'] ?> username</h3>

            <!-- Card tools -->
            <div class="card-tools">

              <!-- Maximize button -->
              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                    class="fas fa-expand"></i>
              </button>

              <!-- Close button -->
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>

            </div>

          </div>

          <!-- Form -->
          <form action="">
            <div class="card-body">
              <div class="row">

                <!-- Column one -->
                <div class="col-md-4">

                  <div class="card card-lightblue card-outline">

                    <div class="card-header">
                      <h5 class="card-text">
                        <i class="fas fa-person-circle-check"></i>
                        Datos principales
                      </h5>
                    </div>

                    <div class="card-body">

                      <!-- Username -->
                      <div class="form-group">
                        <label for="inputUserUsername">Usuario</label>
                        <input type="text" class="form-control" name="inputUserUsername"
                               id="inputUserUsername"
                               placeholder="Usuario">
                        <div id="inputUserUsernameHelp" class="form-help">Escribe un nombre de
                          usuario para iniciar
                          sesión.
                        </div>
                      </div>

                      <!-- Password -->
                      <div class="form-group">
                        <label for="inputUserPassword">Contraseña</label>
                        <input type="password" class="form-control" name="inputUserPassword"
                               id="inputUserPassword"
                               placeholder="Contraseña">
                        <div id="inputUserPasswordHelp" class="form-help">Escribe una
                          contraseña.
                        </div>
                      </div>

                      <!-- Name -->
                      <div class="form-group">
                        <label for="inputUserName">Nombre</label>
                        <input type="text" class="form-control" name="inputUserName"
                               id="inputUserName"
                               placeholder="Nombre">
                        <div id="inputUserNameHelp" class="form-help">El nombre de usuario.
                        </div>
                      </div>

                      <!-- Last name -->
                      <div class="form-group">
                        <label for="inputUserLastName">Apellido</label>
                        <input type="text" class="form-control" name="inputUserLastName"
                               id="inputUserLastName"
                               placeholder="Apellido">
                        <div id="inputUserLastNameHelp" class="form-help">El apellido del
                          usuario.
                        </div>
                      </div>

                      <!-- Rol -->
                      <div class="form-group">
                        <label for="selectUserRol">Rol</label>
                        <select class="form-control" name="selectUserRol" id="selectUserRol">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                        <div id="selectUserRolHelp" class="form-help">El rol del usuario limita
                          los permisos para ver o
                          utilizar
                          ciertas funciones.
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
                               placeholder="Correo electrónico">
                        <div id="inputUserEmailHelp" class="form-help">El correo electrónico
                          debe ser válido.
                        </div>
                      </div>

                      <!-- Phone -->
                      <div class="form-group">
                        <label for="inputUserPhone">Teléfono</label>
                        <input type="text" class="form-control" name="inputUserPhone"
                               id="inputUserPhone"
                               placeholder="Teléfono">
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
                                    placeholder="Escribe una descripición ..."></textarea>
                          <div id="textAreaUserDescriptionHelp" class="form-help">Información
                            extra sobre el usuario.
                          </div>
                        </div>
                      </div>

                      <!-- Language -->
                      <div class="form-group">
                        <label for="selectUserLanguage">Idioma</label>
                        <select class="form-control" name="selectUserLanguage"
                                id="selectUserLanguage">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
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
                        Imágen
                      </h5>
                    </div>

                    <div class="card-body">

                      <!-- Image -->
                      <div>
                        <img src="views/resources/dist/img/users/no_image.jpg"
                             class="img-thumbnail" alt="...">
                        <div id="imageUserHelp" class="form-help">Dimensiones recomendadas de
                          160px x 160px
                        </div>
                      </div>

                      <!-- Image upload -->
                      <div class="form-group">
                        <label for="inputFileUserImage">Imágen</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                                   id="inputFileUserImage">
                            <label class="custom-file-label" for="inputFileUserImage">Seleccionar
                              archivo</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Subir</span>
                          </div>
                        </div>
                        <div id="inputFileUserImageHelp" class="form-help">Seleccione un archivo
                          para foto de perfil de
                          usuario.
                          <ul>
                            <li class="home">El archivo debe tener las dimensiones de 160px
                              x 160 px
                            </li>
                            <li class="home">Formatos soportados son: *.jpg y *.png</li>
                            <li class="home">El archivo no debe ser mayor a 1 Mb</li>
                          </ul>
                          <br>
                        </div>
                      </div>

                    </div>

                  </div>


                </div>
              </div>
            </div>

            <!-- Submit and Quote -->
            <div class="card-footer">
              <button type="submit" id="buttonUserSubmit" name="buttonUserSubmit" class="btn btn-primary">
                Enviar
              </button>
              <div><p class="text-right silence-form"><?php echo $lang['GCAMARENAPROG']; ?></p></div>
            </div>

          </form>

        </div>

      </div>


    </div>
  </div>
</section>

<!-- Custom JS Code -->
<script src="views/resources/dist/js/functions.js"></script>

