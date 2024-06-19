<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Config file
   * File description:    Global system definitions, such as global variables and constants.
   * Package:             Core
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  # $_SERVER['SCRIPT_NAME'] contains the name of the file from which the php script is executed
  # $_SERVER['REQUEST_URI'] contains the browser path in which we are located
  
  # Variables definition for routes
  $folderPath = dirname ($_SERVER['SCRIPT_NAME']); // Extract the directory name from the path where the php script is executed
  $urlPath = $_SERVER['REQUEST_URI']; // Contains the browser path in which we are located
  $url = substr ($urlPath, strlen ($folderPath)); // Extract the directory name and leave the rest of the URL
  
  # Constants definition for routes
  define ('URL', $url); // Current URL with the two required parameters: controller name and method
  
  # Global constants definition
  const SYSTEM_FULL_NAME = 'SISREG | Sistema de Registro';
  const SYSTEM_FIRST_NAME ='Sistema de Registro';
  const SYSTEM_SECOND_NAME = 'SISREG';
  
  const SYSTEM_VERSION = "1.0.0"; // Current version of the system
  define ("SYSTEM_YEAR", date ("Y")); // Get the current year
  
  # Default timezone
  date_default_timezone_set ("America/Mexico_City");
  
  # Database connection values
  const DB_HOSTNAME = 'localhost:3306'; // Hostname
  const DB_NAME = 'sisreg'; // Database name
  const DB_USERNAME = 'root'; // Username of database connection
  const DB_PASSWORD = ''; // Password of database connection /// marina