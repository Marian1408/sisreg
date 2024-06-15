<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Session file
   * File description:    Destroy the session started by the user.
   * Package:             Sessions
   * -------------------------------------------------------------------------------------------------------------------
   */

  require_once (dirname (__DIR__, 1) . '/includes/functions.php');
  
  # Session start
  session_start ();
  session_destroy ();
  
  # Redirect site to log in page
  header ("Location: ../login.php?error=Cerraste sesión correctamente.");
  exit();