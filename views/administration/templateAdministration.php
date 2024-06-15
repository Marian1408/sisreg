<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Template file
   * File description:    Contains the administration template structure.
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo SYSTEM_FULL_NAME; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/resources/plugins/fontawesome-free/css/all.min.css">

  <!-- daterange picker -->
  <link rel="stylesheet" href="views/resources/plugins/daterangepicker/daterangepicker.css">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="views/resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- Flag-icon-css -->
  <link rel="stylesheet" href="views/resources/plugins/flag-icon-css/css/flag-icon.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="views/resources/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="views/resources/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- summernote -->
  <link rel="stylesheet" href="views/resources/plugins/summernote/summernote-bs4.min.css">
  
  <!-- CodeMirror -->
  <link rel="stylesheet" href="views/resources/plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="views/resources/plugins/codemirror/theme/monokai.css">
  
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="views/resources/plugins/simplemde/simplemde.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="views/resources/dist/css/adminlte.min.css">
  
  <!-- Theme style personalized -->
  <link rel="stylesheet" href="views/resources/dist/css/custom.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Preloader -->
  <?php //include "modules/preloader.php"; ?>

  <!-- Navbar -->
  <?php include "modules/navbar.php"; ?>

  <!-- Main Sidebar Container -->
  <?php include "modules/sidebar.php"; ?>

  <!-- Content Wrapper -->
  <div class="content-wrapper" style="height: auto;">
    
    <?php
      $templateName = 'administration';
      $router = new Router($templateName);
    ?>

  </div>

  <!-- Footer -->
  <?php include "modules/footer.php"; ?>

</div>

<?php  ob_end_flush();?>

<!-- jQuery /-->
<script src="views/resources/plugins/jquery/jquery.min.js"></script>

<!-- jquery-validation /-->
<script src="views/resources/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="views/resources/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Bootstrap 4 /-->
<script src="views/resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App /-->
<script src="views/resources/dist/js/adminlte.min.js"></script>

<!-- Summernote /-->
<script src="views/resources/plugins/summernote/summernote-bs4.min.js"></script>
<script src="views/resources/plugins/summernote/plugin/print/summernote-ext-print.js"></script>

<!-- CodeMirror -->
<script src="views/resources/plugins/codemirror/codemirror.js"></script>
<script src="views/resources/plugins/codemirror/mode/css/css.js"></script>
<script src="views/resources/plugins/codemirror/mode/xml/xml.js"></script>
<script src="views/resources/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>


<!-- OPTIONAL SCRIPTS
<script src="views/resources/plugins/chart.js/Chart.min.js"></script>-->

<!-- AdminLTE for demo purposes -->
<script src="views/resources/dist/js/demo.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes)
<script src="views/resources/dist/js/pages/dashboard3.js"></script>-->

<!-- DataTables  & Plugins -->
<script src="views/resources/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="views/resources/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="views/resources/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="views/resources/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="views/resources/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="views/resources/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="views/resources/plugins/jszip/jszip.min.js"></script>
<script src="views/resources/plugins/pdfmake/pdfmake.min.js"></script>
<script src="views/resources/plugins/pdfmake/vfs_fonts.js"></script>
<script src="views/resources/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="views/resources/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="views/resources/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Sweet Alert -->
<script src="views/resources/plugins/sweetalert2/sweetalert2.11.7.31.js"></script>

<!-- Custom JS Code -->
<script src="views/resources/dist/js/functions.js"></script>

</body>
</html>