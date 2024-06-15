<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Template file
   * File description:    Index file that is the starting point of the templates.
   * Package:             Core
   * -------------------------------------------------------------------------------------------------------------------
   */
    
  # Files are required from the current directory
  require_once (__DIR__ . '/config.php');
  require_once (__DIR__ . '/router.php');
  require_once (__DIR__ . '/includes/functions.php');
  
  session_start ();
  
  # Separates the words corresponding to the name of the controller and the method into an array
  $url = explode ('/', URL);
  
  # If the user is logged in, the administration template is loaded
  if (isset($_SESSION['user_username']) && $url[0] != 'login') {
    
    # Template file of administration
    include "views/administration/templateAdministration.php";
    
  } else {
    
    # Redirect to log in screen with an error message in the URL
    header ("Location: login.php?error=No puede haber campos vacíos");
  }
    

  
  
 

  