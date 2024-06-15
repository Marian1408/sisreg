<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Controller file
   * File description:    Modality controller.
   * Package:             Controllers
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once (dirname (__DIR__, 1) . '/includes/functions.php');
  require_once (dirname (__DIR__, 1) . '/models/modelModality.php');
  
  /**
   * This class defines the modality controller class.
   */
  class ControllerModality
  {
    private ModelModality $model;
    
    /**
     * Activities controller constructor
     */
    function __construct ()
    {
      $this->model = new ModelModality();
    }
    
    /**
     * Gets the list of modality depending on the number passed as a parameter
     *
     * @param string $number
     * @return int|bool|array
     */
    function getAllModality (): bool|array
    {
      return $this->model->getAllModality ();
    }
    
  }