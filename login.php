<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Class
   * File description:    Intermediary between the routes and the controller, extracts the parameters from the URL and
   *                      goes to call the controller and its corresponding view if it exists.
   * Package:             Core
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  # Files required
  require_once (__DIR__ . '/config.php');
  require_once (__DIR__ . '/router.php');
  require_once (__DIR__ . '/includes/functions.php');
  
  # Session start
  session_start ();

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- System full name -->
  <title><?php echo SYSTEM_FULL_NAME; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/resources/plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="views/resources/dist/css/adminlte.min.css">

  <!-- Custom styles -->
  <link rel="stylesheet" href="views/resources/dist/css/custom.css">

</head>

<body class="hold-transition login-page sisreg-login-background"
      style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)),
      url('views/resources/dist/img/backgrounds/background1.jpg');">

<!-- Login box -->
<div class="login-box">

  <!-- Name of system -->
  <div class="login-logo sisreg-login-title">
    <b><?php echo SYSTEM_SECOND_NAME; ?></b><br>
    <p><?php echo SYSTEM_FIRST_NAME; ?></p>
  </div>

  <!-- If you are not logged in -->
  <?php if (!isset($_SESSION['user_username'])) : ?>

  <!-- Card log in -->
  <div class="card sisreg-login-card">

  <!-- Log in form card -->
  <div class="card-body login-card-body">

    <!-- Title of form -->
    <h3>Ingresar</h3>

    <!-- Form -->
    <form action="sessions/newSession.php" method="post">

      <!-- Error message -->
      <?php if (isset($_GET['error'])) :; ?>

        <!-- If exist any error, print the error message -->
        <p class="text-danger">
          <?php echo $_GET['error']; ?>
        </p>
      
      <?php endif; ?>

      <!-- Username input -->
      <div class="input-group mb-3">
        <label for="inputUsername"></label>
        <input type="text"
               class="form-control"
               id="inputUsername"
               name="inputUsername"
               placeholder="Usuario"
               title="Usuario"
        >
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>

      <!-- Password input -->
      <div class="input-group mb-3">
        <label for="inputPassword"></label>
        <input type="password"
               class="form-control"
               id="inputPassword"
               name="inputPassword"
               placeholder="Contraseña"
               title="Contraseña"
        >
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>

      <!-- Log in button -->
      <div class="row justify-content-end">
        <div class="col-sm-4 col-xs-12">
          <button type="submit"
                  class="btn btn-dark btn-block"
                  id="buttonLogin"
                  name="buttonLogin"
                  title="Ingresar"
          >
            Ingresar
          </button>
        </div>
      </div>

    </form>

  </div>

  <!-- Card footer -->
  <div class="card-footer bg-dark text-right"></div>

</div>

<!-- If you are logged -->
<?php else : ?>

  <div class="card">
    <div class="card-body login-card-body">
      <h4 class="text-center">Tienes una sesión iniciada</h4>

      <!-- If you are logged as user -->
      <?php if ($_SESSION['user_role_name'] == 'Usuario'): ?>
        <h5 class="text-center"><a href="home">Regresar al inicio</a></h5>

        <!-- If you are logged as administrator -->
      <?php else: ?>
        <h5 class="text-center"><a href="admin">Regresar a la Administración</a></h5>
      <?php endif; ?>
      <button type="button"
              class="btn btn-block btn-dark btn"
              onclick="location.href='sessions/destroySession.php';">Cerrar sesión
      </button>
    </div>
  </div>

<?php endif; ?>

</div>

<!-- jQuery -->
<script src="views/resources/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="views/resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="views/resources/dist/js/adminlte.min.js"></script>

<!-- Custom JS Code -->
<script src="views/resources/dist/js/functions.js"></script>

</body>
</html>
