<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Controller file
   * File description:    Activities controller.
   * Package:             Controllers
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  # Required files
  require_once (dirname (__DIR__, 1) . '/includes/functions.php');
  require_once (dirname (__DIR__, 1) . '/models/modelActivities.php');
  
  /**
   * This class defines the activities controller class.
   */
  class ControllerActivities
  {
    private ModelActivities $model;
    
    /**
     * Activities controller constructor
     */
    function __construct ()
    {
      $this->model = new ModelActivities();
    }
    
    /**
     * Obtiene la lista de actividades de la tabla,
     *
     * @param string $number
     * @return int|bool|array
     */
    function getAllActivities (string $number='1'): int|bool|array
    {
      return $this->model->getAllActivities ($number);
    }
    
    /**
     * @param string $number
     * @param        $id
     * @return string
     */
    public function getActivityName (string $number='1', $id): string
    {
      return $this->model->getActivityName ($number, $id);
    }
    
  }