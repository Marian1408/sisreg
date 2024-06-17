<?php
  /**
   * -------------------------------------------------------------------------------------------------------------------
   * Project name:        SISREG
   * Project description: Activity control and monitoring system
   * Version:             1.0.0
   * File type:           Model file
   * File description:    Event model
   * Package:             Models
   * -------------------------------------------------------------------------------------------------------------------
   */
  
  require_once (__DIR__ . '/modelGeneric.php');
  
  /**
   * This class defines the Event model class
   */
  class ModelEvent extends ModelGeneric
  {
    
    /**
     * Constructor of the Event class
     */
    public function __construct ()
    {
      parent::__construct ('events', 'event_id');
    }
    
    
    /***
     * Get all users for DataTables format
     *
     * @return bool|mysqli_result
     */
    public function getAllEventsDataTableFormat (): mysqli_result|bool
    {
      $sql = "SELECT * FROM $this->table";
      $connection = $this->connectionMysqli;
      return $connection->query ($sql);
    }
    
    public function insertData ($dataColumns, $data): bool|array
    {
      return parent::insert ($dataColumns, $data);
    }
 
    
  }