<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Template file
   * File description:    Footer module of the template
   * Package:             Views
   * -------------------------------------------------------------------------------------------------------------------
   */
?>

<footer class="main-footer">

  <!-- Current date and version /-->
  <div class="float-right d-none d-sm-block">
    <?php echo $currentDate = date("d-m-Y"); ?> / <?php echo SYSTEM_VERSION; ?>
  </div>
  
  <!-- Copyright year and name of system /-->
  <strong>
    Copyright &copy; <?php echo SYSTEM_YEAR; ?> /<a href="home"> <?php echo SYSTEM_SECOND_NAME; ?></a>
  </strong>
  
</footer>